<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_Siswa;
use Illuminate\Http\RedirectRespons;
use App\Http\Requests\StoreSiswaRequest;

class SiswaController extends Controller
{
    public function create() {
        return view("form");
    }
    public function index() {
        $data_siswa = Data_Siswa::latest()->paginate(10);
        $no = 1;
        return view('index', ['data'=>$data_siswa, 'no'=>$no]);
    }
    public function store(StoreSiswaRequest $request) : RedirectRespons
    {
        Data_Siswa ::create($request->all());
        return redirect()->route('siswa.index')
        ->withSuccess('New product is added successfully.');

    }

}
