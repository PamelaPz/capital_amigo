@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'teams'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card py-3" >
                    <div class="row ml-2 mr-3">
                        <div class="col-md-10 ">
                            <div class="card-header">
                                <h5 class="title">{{ __('Lista de Imágenes ') }}</h5>
                            </div>
                        </div>
                        <div class="col-md-2 text-right">
                            <a href="{{ route('teams.create', 1) }}" class="btn btn-info btn-round ">{{ __('Nuevo Integrante') }}</a>
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
                                        Puesto
                                    </th>
                                    <th>
                                        Imagen
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($teams as $team)
                                        <tr class="text-center">
                                            <td>
                                               <a href="{{ route('teams.show', $team->id ) }}"> {{ $team->name }} </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('teams.show', $team->id ) }}"> {{ $team->puesto }} </a>
                                            </td>
                                            <td>
                                                <div class="img_table mx-auto">
                                                    <a href="{{ route('teams.show', $team->id ) }}">
                                                        <img src="{{ asset('storage/'.$team->imagen)}}" alt=""> 
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="btn" rel="tooltip" title="Editar" href="{{ route('teams.edit', $team->id) }}"><span style="font-size: 16px"><i class="nc-icon nc-settings"></i></span></a>
                                                <form action="{{ route('teams.destroy', $team->id) }}" method="POST">
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