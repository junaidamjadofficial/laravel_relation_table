<?php

namespace App\Models;

use App\Models\post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class comment extends Model
{
    use HasFactory;
    protected $table='_comment';
    protected $fillable=['id','message'];

    public function post(){
        return $this->hasMany(post::class,'comment_id','id');
    }
}
