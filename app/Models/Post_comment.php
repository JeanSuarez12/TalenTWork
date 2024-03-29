<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_comment extends Model
{
    use HasFactory;
    protected $table = 'post_comments';

    protected $fillable = [
        //'comentario', 'us_com', 'serpro_id'
        'comentario', 'use_id', 'use_occ_id', 'use_tal_id'
    ];

    public function PostCommentUser(){
        return $this->belongsTo(User::class,'use_id');
    }

    public function UseComPostAnswer(){
        return $this->hasMany(Answer::class,'use_com_id');
    }

    public function CommentIntermediate(){
        return $this->hasMany(UserPostComment::class,'pos_id');
    }

}
