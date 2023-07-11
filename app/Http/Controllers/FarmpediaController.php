<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Farmpedia;

class FarmpediaController extends Controller
{
    public function index()
    {
        $farmpedia = Farmpedia::get();
    
        return view('farmpedia', compact('farmpedia'));
    }

    public function index_admin()
    {
        $farmpedia = Farmpedia::get();
    
        return view('admin.farmpedia.farmpedia', compact('farmpedia'));
    }

    public function farmpedia_detail($judul)
    {
        if (Auth::guard('web')->check()) {
            $farmpedia = Farmpedia::where('judul', urldecode($judul))->first();
            return view('farmpedia-detail', compact('farmpedia'));
        }

        return redirect()->route('login');
    }

    public function farmpedia_detail_admin($judul)
    {
        $farmpedia = Farmpedia::where('judul', urldecode($judul))->first();
        return view('admin.farmpedia.farmpedia-detail', compact('farmpedia'));
    }

    public function create()
    {
        return view('admin.farmpedia.farmpedia-tambah');
    }


    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'isi' => 'required',
            
        ]);

        Farmpedia::create([
            'judul' => $request->input('judul'),
            'kategori' => $request->input('kategori'),
            'isi' => $request->input('isi'),
            
        ]);

        $isi = $request->input('isi');
        $isi = str_replace('<oembed', '<iframe', $isi);
        $isi = str_replace('</oembed>', '</iframe>', $isi);

        return redirect()->route('admin.farmpedia')->with("success", "Konten berhasil disimpan ke database!");
    }

    public function destroy($id)
    {
        $farmpedia = Farmpedia::find($id);
    
        if (!$farmpedia) {
            return redirect()->route('admin.farmpedia')->with('error', 'Data Farmpedia tidak ditemukan');
        }
    
        $farmpedia->delete();
    
        return redirect()->route('admin.farmpedia')->with('success', 'Data Farmpedia berhasil dihapus');
    }
    
    public function edit($id)
    {
        $farmpedia = Farmpedia::find($id);
        
        if (!$farmpedia) {
            return redirect()->route('admin.farmpedia')->with('error', 'Data Farmpedia tidak ditemukan');
        }

        return view('admin.farmpedia.farmpedia-edit', compact('farmpedia'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'isi' => 'required',
            
        ]);

        $farmpedia = Farmpedia::find($id);

        if (!$farmpedia) {
            return redirect()->route('farmpedia.index')->with('error', 'Data Farmpedia tidak ditemukan');
        }

        $farmpedia->judul = $request->input('judul');
        $farmpedia->kategori = $request->input('kategori');
        $farmpedia->isi = $request->input('isi');
        $farmpedia->save();

        return redirect()->route('admin.farmpedia')->with('success', 'Data Farmpedia berhasil diperbarui');
    }


}
