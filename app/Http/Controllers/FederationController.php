<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Federation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class FederationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search');



        $federation = Federation::leftJoin('companies', 'federations.id', '=', 'companies.federation_id')
        ->select('federations.name as name', 'companies.name as name2')
        ->where('federations.name', '=', 'sul')
        ->get();
        dd($federation);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $values = Federation::all();
        return view('federation.main', ['values' => $values]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validando os dados
        /*$validatedData = $request->validateWithBag('federations', [
            'name' => 'required|min:3|max:100|unique:federations,name',
            'state' => 'required|min:3|max:100|unique:federations,state',
            'email' => 'required|unique:federations,email',
            'password' => 'required|confirmed|Password::min(8)',
        ]);


        //salvar os dados
        Federation::create([
            'name' => $request->namefederation,
            'state' => $request->state,
            'email' => $request->emailfederation,
            'password' => $request->passwordfederation,
        ]);*/
        $request->validate([
            'name' => 'min:3|max:100|unique:federations,name',
            'state' => 'min:3|max:100|unique:federations,state',
            'email' => 'unique:federations,email',
            'password' => 'confirmed|Password::min(8)',
        ]);

        Federation::create([
            'name' => $request->namefederation,
            'state' => $request->state,
            'email' => $request->emailfederation,
            'password' => $request->passwordfederation,
        ]);

        return "salvo";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //exibir a lista com os dados
        $federation = Federation::leftJoin('companies', 'federations.id', '=', 'companies.federation_id')
        ->select('federations.name as name', 'companies.name as name2')
        ->where('federations.name', '=', 'sul')
        ->get();
        dd($federation);








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

    public function welcome(){
        return view('federation.main');
    }

    public function search(Request $request){
        $federation = Federation::all();
        $name = $this->$federation->search($request->search);
        return $name;
    }

    public function generalSearch(){
        $federations = Federation::all();
        $companies = Company::all();
        return view('federation.searchGeneral', ['federations' => $federations, 'companies' => $companies]);
    }

    public function ecompJr(){
        return view('federation.ecompJr');
    }
}
