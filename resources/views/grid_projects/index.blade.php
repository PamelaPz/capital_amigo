@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'grid_project'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card py-3">
                <div class="row ml-2 mr-3">
                        <div class="col-md-10 ">
                            <div class="card-header">
                                <h5 class="title">{{ __('Lista de Imágenes ') }}</h5>
                            </div>
                        </div>
                        <div class="col-md-2 text-right">
                            <a href="{{ route('grid_projects.create', 1) }}" class="btn btn-info btn-round ">{{ __('Nuevo Proyecto') }}</a>
                        </div>
                    </div>
                    <div class="card-body mx-3">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary text-center">
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Estatus
                                    </th>
                                    <th>
                                        Imagen
                                    </th>
                                    
                                </thead>
                                <tbody>
                                    @foreach ($grid_projects as $grid_project)
                                        <tr class="text-center">
                                            <td>
                                               <p> {{$grid_project->name}} </p>
                                            </td>
                                            <td>
                                               <p class="text-capitalize"> {{$grid_project->status}} </p>
                                            </td>
                                            <td>
                                                <div class="img_table mx-auto">
                                                    <img src="{{ asset('storage/'.$grid_project->imagen)}}" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <a class="btn" rel="tooltip" title="Editar" href="{{ route('grid_projects.edit', $grid_project->id) }}"><span style="font-size: 16px"><i class="nc-icon nc-settings"></i></span></a>
                                                <form action="{{ route('grid_projects.destroy', $grid_project->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                        <button type="submit" rel="tooltip" title="Eliminar" class="btn"><span style="font-size: 16px"><i class="nc-icon nc-basket"></i></span></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection