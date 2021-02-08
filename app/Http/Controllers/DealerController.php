<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get unique dealers through dealer group and remove duplicate dealers
        $getAgentsThroughDealerGroup = \DB::table('dealers')
            ->leftJoin('dealer_group_dealers', 'dealers.id', '=', 'dealer_group_dealers.dealer_id')
            ->leftJoin('agent_dealer_groups', 'dealer_group_dealers.dealer_group_id', '=', 'agent_dealer_groups.dealer_group_id')
            ->leftJoin('agents', 'agents.id', '=', 'agent_dealer_groups.agent_id')
            ->where('dealers.state', 'TX')
            ->where('agents.name', 'A2')
            ->where('agent_dealer_groups.effective_date', '2021-01-01')
            ->select([
                'agents.name as agent_name', 
                'agents.id as agent_number', 
                'dealers.name as dealer_name', 
                'dealers.id as dealer_number',
                'dealers.address as dealer_address',
                'dealers.city as dealer_city',
                'dealers.state as dealer_state',
            ])
            ->get()
            ->unique()
            ->toArray();
        // Get all agents that directly related to the dealer and store filtered unique dealers
        $getAgentsDirectly = \DB::table('dealers')
            ->join('agent_dealers', 'dealers.id', '=', 'agent_dealers.dealer_id')
            ->leftJoin('agents', 'agents.id', '=', 'agent_dealers.agent_id')
            ->where('dealers.state', 'TX')
            ->where('agents.name', 'A2')
            ->where('agent_dealers.effective_date', '2021-01-01')
            ->select([
                'agents.name as agent_name', 
                'agents.id as agent_number', 
                'dealers.name as dealer_name', 
                'dealers.id as dealer_number',
                'dealers.address as dealer_address',
                'dealers.city as dealer_city',
                'dealers.state as dealer_state',
            ])->get()->unique()->toArray();
        // Merge both array then return filtered unique data as an array
        return collect(array_merge($getAgentsDirectly, $getAgentsThroughDealerGroup))->unique()->toArray();
    }

    /**
     * Return all agents that related to the current dealer.
     *
     * @return \Illuminate\Database\Eloquent\Collection|array
     */
    public function agents($id)
    {
        // Exclude all agents that already expired and return all valid agents.

        // return Dealer::findOrFail($id)->agents->filter(function($agent) {
        //     if(now() <= $agent->pivot->expiration_date) {
        //         return $agent;
        //     }
        // });

        // Return all agents including expired
        return Dealer::findOrFail($id)->agents;
    }

    /**
     * Return all dealer groups that related to the current dealer.
     *
     * @return \Illuminate\Database\Eloquent\Collection|array
     */
    public function groups($id)
    {
        return Dealer::findOrFail($id)->groups;
    }

    /**
     * Return all filtered dealers by options.
     *
     * @return array
     */
    public function search(Request $request)
    {
        $state = $request->state ?? 'TX';
        // $effective_on = $request->effective_date ?? '2021-01-01';
        $effective_on = $request->effective_date;
        $agentName = $request->agent_name ?? 'A2';


        // Get unique dealers through dealer group and remove duplicate dealers
        $getAgentsThroughDealerGroupQuery = \DB::table('dealers')
            ->leftJoin('dealer_group_dealers', 'dealers.id', '=', 'dealer_group_dealers.dealer_id')
            ->leftJoin('agent_dealer_groups', 'dealer_group_dealers.dealer_group_id', '=', 'agent_dealer_groups.dealer_group_id')
            ->leftJoin('agents', 'agents.id', '=', 'agent_dealer_groups.agent_id');

        if($state) {
            $getAgentsThroughDealerGroupQuery->where('dealers.state', $state);
        }

        if($agentName) {
            $getAgentsThroughDealerGroupQuery->where('agents.name', $agentName);
        }

        if($effective_on) {
            $getAgentsThroughDealerGroupQuery->where('agent_dealer_groups.effective_date', $effective_on);
        } 
            
        $getAgentsThroughDealerGroup = $getAgentsThroughDealerGroupQuery->select([
                'agents.name as agent_name', 
                'agents.id as agent_number', 
                'dealers.name as dealer_name', 
                'dealers.id as dealer_number',
                'dealers.address as dealer_address',
                'dealers.city as dealer_city',
                'dealers.state as dealer_state',
            ])->get()->unique()->toArray();
        // Get all agents that directly related to the dealer and store filtered unique dealers
        $getAgentsDirectlyQuery = \DB::table('dealers')
            ->join('agent_dealers', 'dealers.id', '=', 'agent_dealers.dealer_id')
            ->leftJoin('agents', 'agents.id', '=', 'agent_dealers.agent_id');

            if($state) {
                $getAgentsDirectlyQuery->where('dealers.state', $state);
            }
    
            if($agentName) {
                $getAgentsDirectlyQuery->where('agents.name', $agentName);
            }
    
            if($effective_on) {
                $getAgentsDirectlyQuery->where('agent_dealers.effective_date', $effective_on);
            } 
            $getAgentsDirectly = $getAgentsDirectlyQuery->select([
                'agents.name as agent_name', 
                'agents.id as agent_number', 
                'dealers.name as dealer_name', 
                'dealers.id as dealer_number',
                'dealers.address as dealer_address',
                'dealers.city as dealer_city',
                'dealers.state as dealer_state',
            ])->get()->unique()->toArray();
        // Merge both array then return filtered unique data as an array
        return collect(array_merge($getAgentsDirectly, $getAgentsThroughDealerGroup))->unique()->toArray();
    }
}
