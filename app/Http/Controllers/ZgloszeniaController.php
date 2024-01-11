<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zgloszenia;

use Illuminate\Support\Facades\DB;

class ZgloszeniaController extends Controller
{
    public function zapiszZgloszenie(Request $request)
    {
        // Walidacja danych formularza
        $request->validate([
            'wlasciciel' => 'required|string|max:255',
            'modelPojazdu' => 'required|string|max:255',
            'modelPojazdu' => 'required|string|max:255',
            'usterka' => 'required|string',
            // Dodaj inne reguły walidacji, jeśli są potrzebne
            
        ]);
        
        // Zapisz dane do bazy danych
        Zgloszenia::create([
            'wlasciciel' => $request->input('wlasciciel'),
            'markaPojazdu' => $request->input('markaPojazdu'),
            'modelPojazdu' => $request->input('modelPojazdu'),
            'usterka' => $request->input('usterka'),
        ]);

        // Dodaj kod obsługi po zapisie danych

        return redirect()->back()->with('success', 'Zgłoszenie zostało pomyślnie zapisane.');
    }

   

}

