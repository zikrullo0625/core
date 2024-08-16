<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'description'];

    public function outgoingActions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Action::class, 'outgoing_event_id');
    }

    public function incomingActions1(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Action::class, 'incoming_event_id');
    }
}

