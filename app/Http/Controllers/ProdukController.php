<?php
namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller {
    public function create(Request $request) {
        // Pastikan kategori_id dikirim
        return response()->json(Produk::create($request->all()));
    }
    public function read() { 
        return response()->json(Produk::with('kategori')->get()); 
    }
    public function update(Request $request, $id) {
        $data = Produk::find($id);
        if($data) { $data->update($request->all()); return response()->json(['message'=>'Updated']); }
        return response()->json(['message'=>'Not Found'], 404);
    }
    public function delete($id) {
        $data = Produk::find($id);
        if($data) { $data->delete(); return response()->json(['message'=>'Deleted']); }
        return response()->json(['message'=>'Not Found'], 404);
    }
}