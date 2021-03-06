@extends('layouts/layout')
@section('content')
    <div class="row">

        @include('usuario.aside')
        <div class="col col-lg-8 d-flex flex-column mr-2 ">
            <div class="loading-logo-estadisticas">
                <img src="{{asset('images/loading')}}" alt="">
            </div>
            <div class="h1 text-center">
                <label for="selectFiltroDatos" class="col my-4 h1">Datos</label>
            </div>
            <div class="container">
                <select class="form-control col-md-2 ml-2" name="selectFiltro" id="selectFiltroDatos">
                    <option selected="selected" disabled="disabled">Filter</option>
                    <option>Clientes</option>
                    <option>Tecnicos</option>
                    <option>Talleres</option>
                    <option selected>Operadores</option>
                    <option>Coordinadores</option>
                    <option>Jefes</option>
                </select>
                <div class="row justify-content-center m-2 mt-3 table-responsive">
                    <table id="tabla-datos" class="col-12 table table-bordered table-striped table-hover">
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/datos.js') }}"></script>
@endsection
