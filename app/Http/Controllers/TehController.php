<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TehController extends Controller
{
    public function index()
    {
        $teh = DB::table('teh')->orderBy('kodeteh')->get();
        return view('teh.index', compact('teh'));
    }

    public function create()
    {
        return view('teh.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merkteh'  => 'required|string|max:30',
            'stockteh' => 'required|integer|min:0',
            'tersedia' => 'required|in:Y,N',
        ]);

        DB::table('teh')->insert([
            'merkteh'  => $request->merkteh,
            'stockteh' => $request->stockteh,
            'tersedia' => $request->tersedia,
        ]);

        return redirect()->route('teh.index')->with('success', 'Data teh berhasil ditambahkan.');
    }

    public function edit($kodeteh)
    {
        $teh = DB::table('teh')->where('kodeteh', $kodeteh)->first();

        if (!$teh) {
            abort(404);
        }

        return view('teh.edit', compact('teh'));
    }

    public function update(Request $request, $kodeteh)
    {
        $request->validate([
            'merkteh'  => 'required|string|max:30',
            'stockteh' => 'required|integer|min:0',
            'tersedia' => 'required|in:Y,N',
        ]);

        DB::table('teh')
            ->where('kodeteh', $kodeteh)
            ->update([
                'merkteh'  => $request->merkteh,
                'stockteh' => $request->stockteh,
                'tersedia' => $request->tersedia,
            ]);

        return redirect()->route('teh.index')->with('success', 'Data teh berhasil diubah.');
    }

    public function destroy($kodeteh)
    {
        DB::table('teh')->where('kodeteh', $kodeteh)->delete();

        return redirect()->route('teh.index')->with('success', 'Data teh berhasil dihapus.');
    }
}
