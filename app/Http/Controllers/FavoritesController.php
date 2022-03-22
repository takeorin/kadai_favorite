<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    //お気に入りに登録するアクション
    public function store($micropost)
    {
        // 認証済みユーザ（閲覧者）が、micropostをお気に入りに登録する
        \Auth::user()->favorite($micropost);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
    //お気に入りを外すアクション
    public function destroy($micropost)
    {
        // 認証済みユーザ（閲覧者）が、 micropostのお気に入りを削除する
        \Auth::user()->unfavorite($micropost);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
