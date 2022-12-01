<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function all(){
        return response()->json([
            'data' => Member::all(),
            'code' => 200
        ]);
    }
}
