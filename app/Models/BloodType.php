<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    // Relation with Patient
    public function patients(){
        return $this->hasMany(Patient::class);
    }
}
