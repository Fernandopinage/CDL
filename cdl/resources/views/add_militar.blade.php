@extends('layout.add_militar')
@section('add_militar')

<form method="post" action={{('/insert/oms/')}} >

    @csrf

    <div class="form-signin">
        <!--
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" id="pessoais" checked>
                <span class="slider round"></span>
            </label>
        </div>
    -->
        <div class="text">          
            <h2 class="form-signin-heading"> DADOS DA OM'S </h2>
            <hr>
        </div>
        
        
        <div class="pessoais">

            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome da Unidade  <span><strong>*</strong></span></label>
                    <input type="text" name="unidade" class="form-control form-control-sm" placeholder="" value="{{old('unidade')}}">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone  <span><strong>*</strong></span></label>
                    <input type="tel" class="form-control form-control-sm" name="telefone" placeholder="(99) 99999-9999" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="{{old('telefone')}}">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone  <span><strong>*</strong></span></label>
                    <input type="tel" class="form-control form-control-sm" name="telefone2" placeholder="(99) 99999-9999" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="{{old('telefone2')}}">
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Contato Tecnico  <span><strong>*</strong></span></label>
                    <input type="text" name="tecnico" class="form-control form-control-sm" placeholder="" value="{{old('tecnico')}}">
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">E-mail Tecnico  <span><strong>*</strong></span> </label>
                    <input type="text" name="email" class="form-control form-control-sm" placeholder="" value="{{old('email')}}">
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Função Tecnico  <span><strong>*</strong></span> </label>
                    <input type="text" name="funcao" class="form-control form-control-sm" placeholder="" value="{{old('funcao')}}">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">CEP <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="cep" placeholder="" value="{{old('cep')}}">
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">UF <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="uf" placeholder="" value="{{old('uf')}}">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cidade <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="cidade" placeholder="" value="{{old('cidade')}}">
                </div>
                <div class="col-md-7">
                    <label class="form-check-label" for="flexCheckIndeterminate">Bairro <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="bairro" placeholder="" value="{{old('bairro')}}">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nº <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="numero" placeholder="" value="{{old('numero')}}">
                </div>
                <div class="col-md-10">
                    <label class="form-check-label" for="flexCheckIndeterminate">Complemento</label>
                    <input type="text" class="form-control form-control-sm" name="complemento" placeholder="" value="{{old('complemento')}}">
                </div>
            </div>  
        </div> 
        <hr>
        
        <div class="text-end">
            <input type="submit" class="btn btn-success" value="Salvar Registros">
        </div>
        <span> Campos Obrigatórios <strong>*</strong></span>
    </div>

</form>

@endsection