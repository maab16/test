<?php

namespace App\Http\Controllers;

use App\Models\DealerGroup;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class DealerGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Return all agents that related to the current dealer group.
     *
     * @return \Illuminate\Database\Eloquent\Collection|array
     */
    public function agents($id)
    {
        // Exclude all agents that already expired and return all valid agents.

        // return DealerGroup::findOrFail($id)->agents->filter(function($agent) {
        //     if(now() <= $agent->pivot->expiration_date) {
        //         return $agent;
        //     }
        // });

        // Return all agents including expired
        return DealerGroup::findOrFail($id)->agents;
    }

    /**
     * Return all dealers that related to the current dealer group.
     *
     * @return \Illuminate\Database\Eloquent\Collection|array
     */
    public function dealers($id)
    {
        return DealerGroup::findOrFail($id)->dealers;
    }
}
