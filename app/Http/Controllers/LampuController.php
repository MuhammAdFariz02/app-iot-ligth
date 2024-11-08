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

    // Fungsi untuk mengambil jadwal lampu (on_time dan off_time)
    public function getLampScheduleData(Request $request)
    {
        $lamp = Lamp::all();

        return response()->json($lamp);
    }

    // public function getLampSchedule(Request $request)
    // {
    //     $lampNumber = $request->input('lamp_number');

    //     // Cari data lampu berdasarkan lamp_number
    //     $lamp = Lamp::where('lamp_number', $lampNumber)->first();

    //     if ($lamp) {
    //         return response()->json([
    //             'on_time' => $lamp->on_time,
    //             'off_time' => $lamp->off_time
    //         ]);
    //     } else {
    //         return response()->json(['error' => 'Lamp not found'], 404);
    //     }
    // }

    // Fungsi untuk memperbarui status lampu
    public function updateLampStatus(Request $request)
    {
        $lampNumber = $request->input('lamp_number');
        $status = $request->input('status');

        // Validasi input
        if (!in_array($status, [0, 1])) {
            return response()->json(['error' => 'Invalid status'], 400);
        }

        // Cari data lampu berdasarkan lamp_number
        $lamp = Lamp::where('lamp_number', $lampNumber)->first();

        if ($lamp) {
            // Update status lampu
            $lamp->status = $status;
            $lamp->save();

            return response()->json(['success' => 'Lamp status updated']);
        } else {
            return response()->json(['error' => 'Lamp not found'], 404);
        }
    }
    
}
