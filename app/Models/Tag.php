<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;


    public function meals()
    {

        return $this->hasMany(MealTag::class, foreignKey: 'tagId');

    } // end function





} // end class
