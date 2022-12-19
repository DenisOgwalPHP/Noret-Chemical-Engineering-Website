<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;
    protected $table = "requirements";

    public function career(){
        return $this->belongsTo(Career::class, 'career_id');
    }
}