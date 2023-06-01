<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [	
        'sujet_mes',
        'corps',
        'thread_id',
        'date_envoi',	
        'statut_mes',


    ];
    public function user()
    {
        return $this->hasMany('App\Models\User');
    }
    public function piecejointe()
    {
        return $this->hasMany('App\Models\PieceJointe');
    }
    
}