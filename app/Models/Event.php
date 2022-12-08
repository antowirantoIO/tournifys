<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'location',
        'registration_open',
        'registration_close',
        'event_start',
        'event_end',
        'image',
        'max_participants',
        'status',
        'category',
        'user_id',
        'game',
    ];

    public function teams(){
        return $this->hasMany(Team::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
