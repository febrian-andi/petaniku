<?php

namespace App\Http\Controllers;

use App\Models\Farmpedia;
use App\Models\Materi;
use App\Models\Panduan;
use Illuminate\Support\Facades\Auth;

class WorkflowController extends Controller
{
    public function index()
    {
        $panduan = Panduan::all();
        return view('workflow', compact('panduan'));
    }

    public function workflow_detail($judul)
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
            $panduan = Panduan::where('judul', urldecode($judul))->first();

            if ($panduan) {
                $materi = Materi::join('panduans', 'materies.id_panduan', '=', 'panduans.id_panduan')
                ->where('panduans.judul', urldecode($judul))
                ->where('materies.tahapan', urldecode($tahapan))
                ->get();
                
                return view('workflow-task-detail', compact('panduan', 'materi'));
            }
            
            // Panduan dengan judul yang diberikan tidak ditemukan
            abort(404);
        }
        return redirect()->route('login');
    }

    public function alur_saya()
    {
        return view('workflow-saya');
    }

    public function alur_saya_detail()
    {
        return view('workflow-saya-detail');
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
