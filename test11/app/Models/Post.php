<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['author', 'category'];

    //protected $fillable = ['title', 'excerpt', 'body'];

    public function category() {

        //hasOne, hasMany, belongsTo, belongsToMany

        return $this->belongsTo(Categories::class);

    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
