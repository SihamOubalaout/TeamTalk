<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'designation',    
        'description',
    ];
    protected $primaryKey = 'id_departement';
    public function users()
    {
        return $this->hasMany(User::class, 'id_departement');
    }

}
