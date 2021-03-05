@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'teams'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card py-3" >
                    <div class="card-header mx-3">
                            <h5 class="title">{{ __('Lista de Imágenes') }}</h5>
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
                                                {{ $team->name }}
                                            </td>
                                            <td>
                                                {{ $team->puesto }}
                                            </td>
                                            <td>
                                                <div class="img_table mx-auto">
                                                    <img src="{{ asset('capital_amigo/img/'.$team->imagen)}}" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <a class="btn" href="{{ route('teams.edit', $team->id) }}"><span style="font-size: 16px"><i class="nc-icon nc-settings"></i></span></a>
                                                <a class="btn" href="{{ route('teams.destroy', $team->id) }}"><span style="font-size: 16px"><i class="nc-icon nc-basket"></i></span></a>
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