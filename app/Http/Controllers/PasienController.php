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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pasien.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PasienService $pasienService)
    {
        $kodePasien = $pasienService->getkodepasien();

        return view('pasien.form', compact('kodePasien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(
        PasienRequest $pasienRequest, 
        PasienRepository $pasienRepository) {
        $store = $pasienRepository
            ->storeDataPasien($pasienRequest->all());

        return redirect('/pasien');
        // return response()
        //     ->json([
        //         'stored' => true
        //     ]);
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
    public function edit(PasienRepository $pasienRepository, $id)
    {
        $pasien = $pasienRepository->getOneDataPasien($id);

        return view('pasien.form', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(
        PasienRequest $pasienRequest, 
        PasienRepository $pasienRepository, 
        $id) {
        $update = $pasienRepository
            ->updateDataPasien($pasienRequest->all(), $id);

        return view('pasien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PasienRepository $pasienRepository, $id)
    {
        $pasien = $pasienRepository
            ->destroyDataPasien($id);

        return response()
            ->json([
                'destroyed' => true
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dataPasien(PasienRepository $PasienRepository)
    {
        $pasien = $PasienRepository
            ->getAllDataPasien();

        return DataTables::of($pasien)
                ->addColumn('action', function($pasien){
                    return '<center><a href="/pasien/edit/'.$pasien->id.'" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></a> <a onclick="delete_data('.$pasien->id.')" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></a></center>';
                })
                ->rawColumns(['action'])
                ->make(true);
    }
}
