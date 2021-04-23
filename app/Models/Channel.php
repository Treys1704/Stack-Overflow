<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;


//use App\Model;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
//    use HasFactory;
    protected $fillable = ['name', 'slug'];

    public function discussions(){
        return $this->hasMany(Discussion::class);
    }
}