<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'team_id',
        'nickname',
        'id_user_game'
    ];

    public function event(){
        return $this->belongsTo(Event::class);
    }
}
