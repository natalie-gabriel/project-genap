<?php
namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller {
    public function create(Request $request) {
        return response()->json(Kategori::create($request->all()));
    }
    public function read() { return response()->json(Kategori::all()); }
    public function update(Request $request, $id) {
        $data = Kategori::find($id);
        if($data) { $data->update($request->all()); return response()->json(['message'=>'Updated']); }
        return response()->json(['message'=>'Not Found'], 404);
    }
    public function delete($id) {
        $data = Kategori::find($id);
        if($data) { $data->delete(); return response()->json(['message'=>'Deleted']); }
        return response()->json(['message'=>'Not Found'], 404);
    }
}