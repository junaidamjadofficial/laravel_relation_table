<?php

namespace App\Models;

use App\Models\comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{
    use HasFactory;

    protected $table='_post';
    protected $fillable=['id','title','description','comment_id'];

    public function comment(){
        return $this->belongsTo(comment::class,'comment_id');
    }
}
