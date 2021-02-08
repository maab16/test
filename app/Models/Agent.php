<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Return dealer lists that related to the current agent.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function dealers(): BelongsToMany
    {
        return $this->belongsToMany(Dealer::class, 'agent_dealers', 'agent_id', 'dealer_id')->withPivot(['effective_date', 'expiration_date']);
    }

    /**
     * Return dealer groups that related to the current agent.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function dealerGroups(): BelongsToMany
    {
        return $this->belongsToMany(DealerGroup::class, 'agent_dealer_groups', 'agent_id', 'dealer_group_id')->withPivot(['effective_date', 'expiration_date']);
    }
}
