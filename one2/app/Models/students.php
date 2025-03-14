<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class students extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name', 'image', 'coach_id'];

    public function coachs(){
        return $this->belongsTo(coachs::class);
    }
}
