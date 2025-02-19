<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'sections';
    protected $fillable = [
        'section_name',
        'description',
        'created_by',
        'created_at',
        'updated_at',
    ];

    public function scopeSelection($query){
    return $query ->select( 'id', 'section_name', 'description', 'created_by','created_at','updated_at'

        );
    }
}
