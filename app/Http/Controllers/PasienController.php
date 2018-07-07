<?php

namespace App\Http\Controllers;

use DataTables;
use Illuminate\Http\Request;
use App\Services\PasienService;
use Illuminate\Support\Collection;
use App\Http\Requests\PasienRequest;
use App\Repositories\PasienRepository;

class PasienController extends Controller
{
    private $pasienRepo;

    /**
    * Set the construct
    **/
    public function __construct(PasienRepository $pasienRepository)
    {
        $this->pasienRepo = $pasienRepository;
    }

    /**
    * Display a listing of the resource.
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('pasien.home');
    }

    /**
    * Show the form for creating a new resource.
    * @return \Illuminate\Http\Response
    */
    public function create(PasienService $pasienService)
    {
        $kodePasien = $pasienService
            ->getkodepasien();

        return view('pasien.form', compact('kodePasien'));
    }

    /**
    * Store a newly created resource in storage.
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(PasienRequest $pasienRequest) 
    {
        $pasien = [
            'kode_pasien' => $pasienRequest->kode_pasien,
            'nama_pasien' => $pasienRequest->nama_pasien,
            'alamat_pasien' => $pasienRequest->alamat_pasien,
            'gender_pasien' => $pasienRequest->gender_pasien,
            'umur_pasien' => $pasienRequest->umur_pasien,
            'telepon_pasien' => $pasienRequest->telepon_pasien,
        ];

        $store = $this->pasienRepo
            ->storeDataPasien($pasien);

        return redirect('/pasien');
    }

    /**
    * Display the specified resource.
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit(PasienRepository $pasienRepository, $id)
    {
        $pasien = $this->pasienRepo
            ->getOneDataPasien($id);

        return view('pasien.form', compact('pasien'));
    }

    /**
    * Update the specified resource in storage.
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(PasienRequest $pasienRequest, $id) {
        $pasien = [
            'kode_pasien' => $pasienRequest->kode_pasien,
            'nama_pasien' => $pasienRequest->nama_pasien,
            'alamat_pasien' => $pasienRequest->alamat_pasien,
            'gender_pasien' => $pasienRequest->gender_pasien,
            'umur_pasien' => $pasienRequest->umur_pasien,
            'telepon_pasien' => $pasienRequest->telepon_pasien,
        ];

        $update = $this->pasienRepo
            ->updateDataPasien($pasien, $id);

        return redirect(route('pasien.index'));
    }

    /**
    * Remove the specified resource from storage.
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy(PasienRepository $pasienRepository, $id)
    {
        $pasien = $this->pasienRepo
            ->destroyDataPasien($id);

        return response()->json($id);
    }

    /**
    * Remove the specified resource from storage.
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function dataPasien()
    {
        $pasien = $this->pasienRepo
            ->getAllDataPasien();

        return DataTables::of($pasien)
                ->addColumn('action', function($pasien){
                    return '<center><a href="/pasien/edit/'.$pasien->id.'" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></a> <a onclick="destroy('.$pasien->id.')" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></a></center>';
                })
                ->rawColumns(['action'])
                ->make(true);
    }
}
