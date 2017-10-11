@extends('layouts.admin-template')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="" class="btn btn-success bt-sm">Agregar</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="">
          <div class="">
            <table class="table table-responsive">
            <thead>
                <tr class="table-info">
                    <th class="text-center">N°</th>
                    <th class="text-center">Logo</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Creado</th>
                    <th class="text-center">Actualizado</th>
                    <th class="text-center">Opc.</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-warning">
                    <td class="text-center">{{ Auth::user()->name }}</td>
                    <td class="text-center">Dato</td>
                    <td class="text-center">Dato</td>
                    <td class="text-center">Dato</td>
                    <td class="text-center">Dato</td>
                    <td class="text-center">Dato</td>
                    <td class="text-center">
                        <div class="btn-group dropup">
                          <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-list"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a href="" class="dropdown-item">Editar</a>
                            <a href="" class="dropdown-item">Eliminar</a>
                          </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
          </div>
        </div>
    </div>
</div>
@endsection
