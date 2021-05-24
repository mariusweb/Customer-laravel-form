<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pardavimai;
use App\Models\Darbuotojai;

class PardavimaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selectDarbuotojai = array();
        $darbuotojai = Darbuotojai::select('id', 'name', 'surname')->get();
        foreach ($darbuotojai as $value) {
            $selectDarbuotojai[''.$value->id.''] = ''.$value->name.' '.$value->surname.'';
        }
        return view('pardavimai', ['darbuotojai' => $selectDarbuotojai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $darbuotojai = Pardavimai::leftJoin('darbuotojai', 'pardavimai.darbuotojas_id', '=', 'darbuotojai.id')
            ->select(
                'darbuotojai.name as darbuotojas',
                'darbuotojai.surname as pavarde',
                'pardavimai.sutarties_nr',
                'pardavimai.rekomendacija',
                'pardavimai.greitis',
                'pardavimai.aptarnavimas',
                'pardavimai.pastabos',
                'pardavimai.sutikimas'
            )
            ->get();
        return view('rezult', ['darbuotojai' => $darbuotojai]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['sutarties_nr'] = rand(1000000, 10000000);
        Pardavimai::create($data);
        return redirect()->route('pardavimai.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
