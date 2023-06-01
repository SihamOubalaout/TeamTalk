<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piecejointe extends Model
{
    use HasFactory;
    protected $fillable = [
        'url',
        'id_message',



    ];

    
    public function message()
    {
        return $this->belongsTo(Message::class, 'id_message');
    }




}