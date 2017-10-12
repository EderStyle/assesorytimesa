@extends('layouts.admin-template')

@section('content')
<br>
<<<<<<< HEAD
<div class="row">
    <div class="container">
        <a href="" data-toggle="modal" data-target="#create-modal" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Nueva categoría</a>
    </div>
</div>
@include('admin.categories.modal-create')
<br>
<div class="container">
    <div class="card card-outline-primary mb-3 text-center">
      <div class="card-block">
        <table class="table table-hover">
            <thead class="bg-info">
                <tr class="">
=======
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
>>>>>>> 9e563767f596c31b1587dcbfc5980e0c4e72940f
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
<<<<<<< HEAD
                @forelse($table as $item)
                <tr class="">
                    <td class="text-center">{{ $item->category_id }}</td>
                    <td class="text-center">{{ $item->name }}</td>
                    <td class="text-center">{{ $item->description }}</td>
                    <td class="text-center">{{ $item->picture }}</td>
                    <td class="text-center">{{ $item->created_at }}</td>
                    <td class="text-center">{{ $item->updated_at }}</td>
                    <td class="text-center">
                        <div class="hidden-md-up">
                            <div class="btn-group dropup">
                              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-list"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a href="" class="dropdown-item"><i class="fa fa-trash"></i> Editar</a>
                                <a href="" class="dropdown-item"><i class="fa fa-edit"></i> Eliminar</a>
                              </div>
                            </div>
                            </div>
                        <div class="hidden-sm-down">
                            <a href="" class="btn btn-outline-info btn-sm col-md-4"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-outline-danger btn-sm col-md-4"><i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @empty
                    <tr><td colspan="3">SIN REGISTROS</td></tr>
                @endforelse
            </tbody>
        </table>
      </div>
=======
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
>>>>>>> 9e563767f596c31b1587dcbfc5980e0c4e72940f
    </div>
</div>
@endsection
