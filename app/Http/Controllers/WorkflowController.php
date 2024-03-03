<?php

namespace App\Http\Controllers;

use App\Models\Farmpedia;
use App\Models\Materi;
use App\Models\Panduan;
use App\Models\Alur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WorkflowController extends Controller
{
    public function index()
    {
        $panduan = Panduan::all();
        return view('workflow', compact('panduan'));
    }

    public function workflow_detail($judul)
    {   
        $panduan = Panduan::where('judul', urldecode($judul))->first();

        if ($panduan) {
            $rekomendasi = Farmpedia::all();
            $materi = Materi::join('panduans', 'materies.id_panduan', '=', 'panduans.id_panduan')
            ->where('panduans.judul', urldecode($judul))
            ->get();
            
            return view('workflow-detail', compact('panduan', 'rekomendasi', 'materi'));
        }
        
        // Panduan dengan judul yang diberikan tidak ditemukan
        abort(404);
    }

    public function workflow_mulai($request)
    {   
        $request->validate([
            'id_panduan' => 'required'
        ]);

        Alur::create([
            'id_panduan' => $request->input('id_panduan'),
            'nama_alur' => $request->input('id_panduan'),
            'lahan' => 'lahan 1',
        ]);
       
        return redirect()->route('alur.saya')->with("success", "Konten berhasil disimpan ke database!");
    }


    public function workflow_task_detail($judul, $tahapan)
    {   
        if (Auth::guard('web')->check()) {
            $url = Materi::join('panduans', 'materies.id_panduan', '=', 'panduans.id_panduan')
                ->where('panduans.judul', urldecode($judul))
                ->where('materies.tahapan', urldecode($tahapan))
                ->get();
            
            if ($url) {
                return view('workflow-task-detail', compact('url'));
            }
            
            // Materi tidak ditemukan
            abort(404);
        }
        
        return redirect()->route('login');
    }


    public function alur_saya()
    {
        $alur = Alur::join('panduans', 'alurs.id_panduan', '=', 'panduans.id_panduan')->select('alurs.*', 'panduans.judul', 'alurs.nama_alur', 'alurs.lahan', 'alurs.id_alur')->get();
        return view('workflow-saya', compact('alur'));
    }

    public function alur_saya_detail($id_alur)
    {
        if (Auth::guard('web')->check()) {
            $alur = Alur::where('id_alur', $id_alur)->first();

            if ($alur) {
                $detail_alur = Alur::join('panduans', 'alurs.id_panduan', '=', 'panduans.id_panduan')
                    ->join('materies', 'panduans.id_panduan', '=', 'materies.id_panduan')
                    ->select('alurs.*', 'panduans.judul', 'alurs.nama_alur', 'alurs.lahan', 'alurs.id_alur')
                    ->where('alurs.id_alur', urldecode($id_alur))
                    ->first();
                $cek = Alur::join('panduans', 'alurs.id_panduan', '=', 'panduans.id_panduan')
                    ->join('materies', 'panduans.id_panduan', '=', 'materies.id_panduan')
                    ->select('alurs.*', 'panduans.judul', 'alurs.nama_alur', 'alurs.lahan', 'alurs.id_alur', 'materies.tahapan')
                    ->where('alurs.id_alur', urldecode($id_alur))
                    ->get();
                return view('workflow-saya-detail', compact('alur', 'detail_alur', 'cek'));
            }

            // Alur dengan id yang diberikan tidak ditemukan
            abort(404);
        }

        return redirect()->route('login');
    }


    public function alur_saya_create()
    {
        return view('workflow-saya-tambah');
    }

    public function alur_saya_edit()
    {
        return view('workflow-saya-edit');
    }
}
