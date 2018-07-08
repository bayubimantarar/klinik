<?php

namespace App\Http\Controllers;

use App\Dokter;
use Illuminate\Http\Request;
use App\Http\Requests\DokterRequest;
use App\Repositories\DokterRepository;

class DokterController extends Controller
{
    private $dokterRepo;

    /**
    * Set the construct
    **/
    public function __construct(
        DokterRepository $dokterRepository
    ) {
        $this->dokterRepo = $dokterRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dokter.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DokterRequest $dokterReq)
    {
        $dokter = [
            'kode_dokter'       => $dokterReq->kode_dokter,
            'nama_dokter'       => $dokterReq->nama_dokter,
            'spesialis'         => $dokterReq->spesialis,
            'alamat_dokter'     => $dokterReq->alamat_dokter,
            'telepon_dokter'    => $dokterReq->telepon_dokter,
            'kode_poliklinik'   => $dokterReq->kode_poliklinik,
            'tarif'             => $dokterReq->tarif,
        ];

        $store = $this
            ->dokterRepo
            ->storeDataDokter($dokter);

        return redirect(route('dokter.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DokterRequest $dokterReq, $id)
    {
        $dokter = [
            'kode_dokter'       => $dokterReq->kode_dokter,
            'nama_dokter'       => $dokterReq->nama_dokter,
            'spesialis'         => $dokterReq->spesialis,
            'alamat_dokter'     => $dokterReq->alamat_dokter,
            'telepon_dokter'    => $dokterReq->telepon_dokter,
            'kode_poliklinik'   => $dokterReq->kode_poliklinik,
            'tarif'             => $dokterReq->tarif,
        ];

        $update = $this
            ->dokterRepo
            ->updateDataDokter($dokter, $id);

        return redirect(route('dokter.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = $this
            ->dokterRepo
            ->destroyDataDokter($id);

        return response()
            ->json(200);
    }
}
