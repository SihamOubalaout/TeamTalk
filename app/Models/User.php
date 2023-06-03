<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cmgmyr\Messenger\Traits\Messagable;

class User extends Authenticatable
{
    use HasFactory, Messagable;

    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = [
        'NomEmp',
        'PrenomEmp',
        'poste',
        'telephone',
        'adresse',
        'email',
        'id_departement',
        'password',
    ];
    
    public function departement()
    {
        return $this->belongsTo(Departement::class, 'id_departement');
    }
}
