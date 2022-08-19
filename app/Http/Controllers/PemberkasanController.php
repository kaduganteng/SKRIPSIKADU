<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pemberkasan;
class PemberkasanController extends Controller
{
    public function index()
    {
        return view ('pemberkasan.index');
    }

    public function create()
    {
        $data['title'] = "Input Berkas";
        $data['pemberkasan'] = Pemberkasan::all();
        return view('pemberkasan.create', $data);
    }
    public function store (Request $Request)
    {
        
    }
}
