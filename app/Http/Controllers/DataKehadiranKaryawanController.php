<?php

namespace App\Http\Controllers;

use App\Models\DataKehadiranKaryawan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DataKehadiranKaryawanController extends BaseController
{
    public function index()
    {
        $res = DataKehadiranKaryawan::all();
        if($res) {
            return $this->sendSuccess($res, "Data Kehadiran Karyawan buku berhasil ditemukan!", Response::HTTP_OK);
        } else {
            return $this->sendError(null, "Data Kehadiran Karyawan buku tidak berhasil ditemukan!", Response::HTTP_OK);
        }
    }
     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
        ]);
    
        $fakultas = DataKehadiranKaryawan::create($validate);
        if($fakultas){
            return $this->sendSuccess($fakultas, "Data Kehadiran Karyawan buku berhasil ditambahkan.", Response::HTTP_CREATED);
        } else {
            return $this->sendError(null, "Data sudah ada!", Response::HTTP_OK);
        }
    }

    
}
