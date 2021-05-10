<?php

namespace App\Http\Controllers;

use App\Models\Federation;
use Illuminate\Http\Request;

class FederationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$federations = Federation::all(); //consulta

        //dd($federations);

        $federation = Federation::where('id', 1)->first(); //filtrando, mostrando resultado específico, retornando o que foi buscado
        //dd($federation);

        $members = $federation->company()->get();
        dd($members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viewProjeto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);

        $federation = new Federation();
        $federation->name = $request->name;
        $federation->companyJr = $request->companyJr;
        $this->validate($request, ['name' => 'bail|required|unique:federations|min:3|max:20',
                                    'state' => 'required|unique:federations|min:3|max:20']);
        $federation->save();
        dd($request);
        
       // $errors = $validador->errors();

       // echo $errors->first('email');
       

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

    public function search(request $request){
        
         dd($request->all());
       
        
    }
}
