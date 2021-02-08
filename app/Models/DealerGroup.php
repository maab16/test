<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class DealerGroup extends Model
{
    use HasFactory;
    
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Return agent lists that related to the current dealer group.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function agents(): BelongsToMany
    {
        return $this->belongsToMany(Agent::class, 'agent_dealer_groups', 'dealer_group_id', 'agent_id')->withPivot(['effective_date', 'expiration_date']);
    }

    /**
     * Return dealer lists that related to the current dealer group.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function dealers(): BelongsToMany
    {
        return $this->belongsToMany(Dealer::class, 'dealer_group_dealers', 'dealer_group_id', 'dealer_id');
    }
}
