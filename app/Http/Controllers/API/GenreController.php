<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function all(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'data' => Genre::all(),
            'code' => 200
        ]);
    }
    public function index($id): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'data' => Genre::find($id),
            'code' => 200
        ]);
    }
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $genre = Genre::create($request->all());
        return response()->json([
            'message' => 'Жанр добавлен',
            'data' => $genre,
            'code' => 200
        ]);
    }
    public function update(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $genre = Genre::find($id);
        $genre->update($request->all());
        return response()->json([
            'message' => 'Жанр обновлен',
            'data' => $genre,
            'code' => 200
        ]);
    }
    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $genre = Genre::find($id);
        $genre->delete();
        return response()->json([
            'message' => 'Жанр удален',
            'code' => 200
        ]);
    }
}
