<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index(Request $request)
    {
        if ($request->kondisi === 'kecanduan') {
            return redirect('cek-kecanduan');
        }

        if ($request->kondisi === 'tidak-kecanduan') {
            return redirect('cek-tidak-kecanduan');
        }
    }

    public function CekKondisiKecanduan(Request $request)
    {
        $request->peduli == 1 ? $g1 = true : $g1 = false;
        $request->terhibur == 1 ? $g2 = true : $g2 = false;
        $request->menang == 1 ? $g3 = true : $g3 = false;
        $request->baru == 1 ? $g4 = true :$g4 = false;
        $request->tersenyum == 1 ? $g5 = true : $g5 = false;
        $request->sibuk == 1 ? $g6 = true : $g6 = false;
        $request->menolak == 1 ? $g7 = true : $g7 = false;
        $request->kebutuhan == 1 ? $g8 = true : $g8 = false;
        $request->level == 1 ? $g9 = true : $g9 = false;
        $request->waktu == 1 ? $g10 = true : $g10 = false;
        $request->gelisah == 1 ? $g11 = true : $g11 = false;
        $request->ketagihan == 1 ? $g12 = true : $g12 = false;

        $jpkg = 0;
        $perilaku = "";
        if ($g1) {
            $jpkg++;
            $perilaku += "Salience, ";
        }
        if ($g2 || $g3 || $g4 || $g5) {
            $jpkg++;
            $perilaku += "Euphoria, ";
        }
        if ($g6 || $g7 || $g8) {
            $jpkg++;
            $perilaku += "Conflict, ";
        }
        if ($g9 || $g10) {
            $jpkg++;
            $perilaku += "Tolerance, ";
        }
        if ($g11) {
            $jpkg++;
            $perilaku += "Withdrawal, ";
        }
        if ($g12) {
            $jpkg++;
            $perilaku += "Relapse and Reistatement, ";
        }
        if ($jpkg >= 3) {
            $status = "Kecanduan";
        } else {
            $status = "Tidak Kecanduan";
        }

        return redirect('cek-kecanduan')->with('status', $status)->with('perilaku', $perilaku);
    }

    public function CekKondisiTidakKecanduan(Request $request)
    {
        $request->peduli == 1 ? $g1 = true : $g1 = false;
        $request->terhibur == 1 ? $g2 = true : $g2 = false;
        $request->menang == 1 ? $g3 = true : $g3 = false;
        $request->baru == 1 ? $g4 = true :$g4 = false;
        $request->tersenyum == 1 ? $g5 = true : $g5 = false;
        $request->sibuk == 1 ? $g6 = true : $g6 = false;
        $request->menolak == 1 ? $g7 = true : $g7 = false;
        $request->kebutuhan == 1 ? $g8 = true : $g8 = false;
        $request->level == 1 ? $g9 = true : $g9 = false;
        $request->waktu == 1 ? $g10 = true : $g10 = false;
        $request->gelisah == 1 ? $g11 = true : $g11 = false;
        $request->ketagihan == 1 ? $g12 = true : $g12 = false;

        $jpkg = 0;
        $perilaku = "";
        if ($g1) {
            $jpkg++;
            $perilaku .= "Salience, ";
        }
        if ($g2 || $g3 || $g4 || $g5) {
            $jpkg++;
            $perilaku .= "Euphoria, ";
        }
        if ($g6 || $g7 || $g8) {
            $jpkg++;
            $perilaku .= "Conflict, ";
        }
        if ($g9 || $g10) {
            $jpkg++;
            $perilaku .= "Tolerance, ";
        }
        if ($g11) {
            $jpkg++;
            $perilaku .= "Withdrawal, ";
        }
        if ($g12) {
            $jpkg++;
            $perilaku .= "Relapse and Reistatement, ";
        }
        if ($jpkg >= 3) {
            $status = "Kecanduan";
        } else {
            $status = "Tidak Kecanduan";
        }

        return redirect('cek-kecanduan')->with('status', $status)->with('perilaku', $perilaku);
    }
}
