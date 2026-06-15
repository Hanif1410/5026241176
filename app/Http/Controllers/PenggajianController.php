<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggajianController extends Controller
{
    public function index()
    {
        $eas = DB::table('penggajian')->get();
        return view('eas.index', compact('eas'));
    }

    public function create()
    {
        return view('eas.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NIP' => 'required|max: 8',
            'gajipokok' => 'required|integer',
            'potongan' => 'required|integer',
        ]);

        DB::table('penggajian')->insert([
            'NIP' => $request->NIP,
            'gajipokok' => $request->gajipokok,
            'potongan' => $request->potongan,
        ]);

        return redirect()->route('eas.index');
    }

    public function destroy($NIP)
    {
        DB::table('penggajian')->where('NIP', $NIP)->delete();

        return redirect()->route('eas.index');
    }
}

