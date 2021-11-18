<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;
use Vagas;

class exmilitarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('exmilitar');
    }

    public function filtroExmilitar(Request $request){
        

        if(!empty($request)){

       
            
            /* 
            $dados = Candidato::where(function($query) use ($request){
                
                if($request->can_exmilitar){
                    $query->where('can_exmilitar','!=','Não');
                }
                if($request->can_nome){
                    $query->orWhere('can_nome','like','%'.$request->buscar.'%');
                }
                if($request->can_cpf){
                    $query->orWhere('can_cpf','like', '%'.$request->buscar.'%');
                }
                if($request->can_matricula){
                    $query->orWhere('can_matricula','like', '%'.$request->buscar.'%');
                }
                
            })->get();
            
            ddd($dados);
            */
            
            $dados = Candidato::where('can_nome','like','%'.$request->buscar.'%')
            ->orWhere('can_sobrenome','like', '%'.$request->buscar.'%')
            ->orWhere('can_cpf','like', '%'.$request->buscar.'%')
            ->orWhere('can_unidademilitar','like', '%'.$request->buscar.'%')
            ->get();
            
            
            if(!empty($dados)){
                
                return view('exmilitar',compact('dados'));
                
            }else{
                return view('exmilitar');
            }


        }

        
    }

    public function abaFiltro($id){

        $id = base64_decode($id);

    
        $dados = Candidato::where('can_id', '=', $id)
        ->where('can_exmilitar', '=', 'Sim')
        ->get();
          

        return view('buscar_filtro_exmilitar',compact('dados'));
        

    }
 

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
    public function store(Request $request)
    {
        //
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
