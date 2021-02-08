<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Agent;

class AgentController extends Controller
{
    /**
     * Return all dealers that related to the current agent.
     *
     * @return \Illuminate\Database\Eloquent\Collection|array
     */
    public function dealers($id)
    {
        // Exclude all dealers that already expired and return valid dealers

        // return Agent::findOrFail($id)->dealers->filter(function($dealer) {
        //     if(now() <= $dealer->pivot->expiration_date) {
        //         return $dealer;
        //     }
        // });

        // Return all dealers including expired
        return Agent::findOrFail($id)->dealers;
    }

    /**
     * Return all dealer groups that related to the current agent.
     *
     * @return \Illuminate\Database\Eloquent\Collection|array
     */
    public function dealerGroups($id)
    {
        // Exclude all dealer groups that already expired and return all valid groups.

        // return Agent::findOrFail($id)->dealerGroups->filter(function($dealerGroup) {
        //     if(now() <= $dealerGroup->pivot->expiration_date) {
        //         return $dealerGroup;
        //     }
        // });

        // Return all dealers including expired
        return Agent::findOrFail($id)->dealerGroups;
    }
}
