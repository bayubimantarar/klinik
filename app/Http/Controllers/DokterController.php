<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DokterRequest;
use App\Repositories\DokterRepository;

class DokterController extends Controller
{
    private $dokterRepo;
    private $dokterReq;

    /**
    * Set the construct
    **/
    public function __construct(
        DokterRepository $dokterRepository,
        DokterRequest $dokterRequest
    ) {
        $this->dokterRepo = $dokterRepository;
        $this->dokterReq = $dokterRequest;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store()
    {
        $dokter = [
            'kode_dokter'       => $this->dokterReq->kode_dokter,
            'nama_dokter'       => $this->dokterReq->nama_dokter,
            'spesialis'         => $this->dokterReq->spesialis,
            'alamat_dokter'     => $this->dokterReq->alamat_dokter,
            'telepon_dokter'    => $this->dokterReq->telepon_dokter,
            'kode_poliklinik'   => $this->dokterReq->kode_poliklinik,
            'tarif'             => $this->dokterReq->tarif,
        ];

        $store = $this
            ->dokterRepo
            ->storeDataDokter($dokter);

        return response()->json([
            'stored' => true
        ]);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}