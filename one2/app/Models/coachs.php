<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class coachs extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name', 'image'];

    public function students(){
        return $this->hasMany(students::class);
    }
}
