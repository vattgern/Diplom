<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'data' => User::all(),
            'code' => 200
        ]);
    }
    public function index($id): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'data' => User::find($id),
            'code' => 200
        ]);
    }
    public function update(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $user = User::find($id);
        $user->update($request->all());
        return response()->json([
            'data' => $user,
            'code' => 200
        ]);
    }
    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $user = User::find($id);
        $user->delete();
        return response()->json([
            'message' => 'Пользователь удален',
            'code' => 200
        ]);
    }

}
