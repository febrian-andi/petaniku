<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkflowController extends Controller
{
    public function index()
    {
        return view('workflow');
    }

    public function workflow_detail()
    {
        return view('workflow-detail');
    }

    public function workflow_task_detail()
    {
        return view('workflow-task-detail');
    }

    public function alur_saya()
    {
        return view('workflow-saya');
    }

    public function alur_saya_detail()
    {
        return view('workflow-saya-detail');
    }

    public function alur_saya_edit()
    {
        return view('workflow-saya-edit');
    }
}
