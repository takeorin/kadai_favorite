<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content'];

    /**
     * この投稿を所有するユーザ。（ Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //課題対応
    public function favorite_users()
    {
        //第1引数はUser?
        return $this->belongsToMany(User::class, 'favorite_microposts', 'micropost_id', 'user_id')->withTimestamps();
    }
    
}
