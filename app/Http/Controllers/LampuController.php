<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lamp;

class LampuController extends Controller
{

    public function index(){
        $lamp = Lamp::all();
        return view('pages.lampu', compact('lamp'));
    }

    public function editLamp($id){
        $lamp = Lamp::findOrFail($id);
    return view('pages.setel-waktu', compact('lamp'));
    }

    public function updateLamp(Request $request, $id)
    {
        // Temukan lampu berdasarkan ID
        $lamp = Lamp::findOrFail($id);

        // Siapkan array untuk validasi
        $validationRules = [
            'on_time' => 'required',
            'off_time' => 'required',
        ];

        // Validasi input
        $validatedData = $request->validate($validationRules);

        // Update atribut yang divalidasi
        $lamp->on_time = $validatedData['on_time'];
        $lamp->off_time = $validatedData['off_time'];

        // Update status lampu berdasarkan waktu
        $currentTime = now()->format('H:i'); // Ambil waktu saat ini
        $lamp->status = ($currentTime >= $lamp->on_time && $currentTime < $lamp->off_time) ? 1 : 0;

        // Simpan perubahan
        $lamp->save();

        // Redirect setelah update
        return redirect('/lampu')->with(['success' => 'Berhasil memperbarui waktu lampu']);
    }

}
