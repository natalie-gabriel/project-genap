<?php
namespace App\Http\Controllers;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller {
    public function create(Request $request) {
        return response()->json(Pelanggan::create($request->all()));
    }
    public function read() { return response()->json(Pelanggan::all()); }
    public function update(Request $request, $id) {
        $data = Pelanggan::find($id);
        if($data) { $data->update($request->all()); return response()->json(['message'=>'Updated']); }
        return response()->json(['message'=>'Not Found'], 404);
    }
    public function delete($id) {
        $data = Pelanggan::find($id);
        if($data) { $data->delete(); return response()->json(['message'=>'Deleted']); }
        return response()->json(['message'=>'Not Found'], 404);
    }
}