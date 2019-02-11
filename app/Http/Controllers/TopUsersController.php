<?php

namespace App\Http\Controllers;

use App\Models\TopUser;
use Illuminate\Http\Request;

class TopUsersController extends Controller
{
    private $cache_key = 'xkxtop_users';
    private $cache_expire_in_minutes = 10;

    public function update(Request $request)
    {
        $users_arr = $request->json()->all();
        $top_users = [];
        foreach ($users_arr as $user_arr) {
            $topUser = new TopUser();
            $top_users[] = $topUser->fill($user_arr);
        }
        \Cache::put($this->cache_key, $top_users, $this->cache_expire_in_minutes);
//        dd($top_users);
    }

    public function index()
    {
        $top_users = \Cache::get($this->cache_key);
        if ($top_users) {
            return view('topUsers.index', compact('top_users'));
        }
    }
}
