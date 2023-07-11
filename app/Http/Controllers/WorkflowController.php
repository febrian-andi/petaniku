<?php

namespace App\Http\Controllers;

use App\Models\Farmpedia;
use App\Models\Materi;
use App\Models\Panduan;
use App\Models\Alur;
use Illuminate\Support\Facades\Auth;

class WorkflowController extends Controller
{
    public function index()
    {
        $panduan = Panduan::all();
        return view('workflow', compact('panduan'));
    }

    public function workflow_detail($judul, $tahapan)
    {
        if (Auth::guard('web')->check()) {
            
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
        
        return redirect()->route('login');
    }


    public function workflow_task_detail($judul, $tahapan)
    {   
        if (Auth::guard('web')->check()) {
            $materi = Materi::join('panduans', 'materies.id_panduan', '=', 'panduans.id_panduan')
                ->where('panduans.judul', urldecode($judul))
                ->where('materies.tahapan', urldecode($tahapan))
                ->first();
            
            if ($materi) {
                return view('workflow-task-detail', compact('materi'));
            }
            
            // Materi tidak ditemukan
            abort(404);
        }
        
        return redirect()->route('login');
    }


    public function alur_saya()
    {
        $alur = Alur::all();
        return view('workflow-saya', compact('alur'));
    }

    public function alur_saya_detail($nama_alur)
    {
        if (Auth::guard('web')->check()) {
            $url_alur = Alur::where('nama_alur', urldecode($nama_alur))->first();
            
            if ($url_alur) {
                $materi = Materi::join('panduans', 'materies.id_panduan', '=', 'panduans.id_panduan')
                ->where('panduans.judul', urldecode($nama_alur))
                ->get();
                
                $detail_alur = Panduan::join('p', 'alurs.id_panduan', '=', 'panduans.id_panduan')
                ->where('panduans.judul', urldecode($nama_alur))
                ->get();
                
                return view('workflow-saya-detail', compact('panduan', 'rekomendasi', 'materi'));
            }
            
            // Panduan dengan judul yang diberikan tidak ditemukan
            abort(404);
        }
        
        return redirect()->route('login');
        
    }

    public function alur_saya_edit()
    {
        return view('workflow-saya-edit');
    }
}
