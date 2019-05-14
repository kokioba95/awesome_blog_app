<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Blog extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function like_blog()
    {
        return $this->belongsToMany('App\User','likes','blog_id','user_id');
    }
}
