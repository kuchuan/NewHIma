<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\User; //App\Userクラスの使用を宣言する（Dean追加）
use App\Skill; //App\skillクラスの使用を宣言する（Dean追加）
use App\Message;
use App\Room_user;
use App\Skill_user; //App\Skill_userクラスの使用を宣言する

use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class HimanabiController extends Controller
{
    //
    public function index(){

         // $datas = Skill::with('User')->get();
        return view('himanabi.index');
        
    }










}
