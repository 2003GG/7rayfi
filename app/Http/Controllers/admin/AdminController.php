<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $users=User::all()->where('role_id',2);
    
        return view('network',compact('users'));
    }
    public function Blocke($id){
        $user=User::findOrFail($id);
        $user->update(['condition'=>'blocke']);
        return redirect()->route('admin.network');
    }
     public function Deblocke($id){
        $user=User::findOrFail($id);
        $user->update(['condition'=>'deblocke']);
        return redirect()->route('admin.network');
    }
    public function RemoveReport(){
    $postReport = Post::where('report_count', '>', 6)->get();
        return view('/report',compact('postReport'));
    }
}
