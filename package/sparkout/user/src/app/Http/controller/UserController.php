<?php


namespace Sparkout\User\app\Http\controller;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        dd('hjg');
        $user = DB::select('select*from users');
      
        return response()->json($user);
    }
}
