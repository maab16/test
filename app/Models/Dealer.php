<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;
    
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Return agent lists that related to the current dealer.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function agents(): BelongsToMany
    {
        return $this->belongsToMany(Agent::class, 'agent_dealers', 'dealer_id', 'agent_id')->withPivot(['effective_date', 'expiration_date']);
    }

    /**
     * Return dealer groups that related to the current dealer.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(DealerGroup::class, 'dealer_group_dealers', 'dealer_id', 'dealer_group_id');
    }
}
