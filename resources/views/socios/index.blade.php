@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'socios'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card py-3" style="background-color: #A0A0A0 !important;">
                    <div class="row ml-2 mr-3">
                        <div class="col-md-10 ">
                            <div class="card-header">
                                <h5 class="title text-white">{{ __('Lista de Imágenes ') }}</h5>
                            </div>
                        </div>
                        <div class="col-md-2 text-right">
                            <a href="{{ route('socios.create', 1) }}" class="btn btn-info btn-round ">{{ __('Nuevo Socio') }}</a>
                        </div>
                    </div>
                    <div class="card-body mx-3">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-white text-center">
                                    <th>
                                        Imagen
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($socios as $socio)
                                        <tr class="text-center">
                                            <td>
                                                <div class="img_table mx-auto">
                                                    <img src="{{ asset('storage/'.$socio->imagen)}}" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <a class="btn" rel="tooltip" title="Editar" href="{{ route('socios.edit', $socio->id) }}"><span style="font-size: 16px"><i class="nc-icon nc-settings"></i></span></a>
                                                <form action="{{ route('socios.destroy', $socio->id) }}" method="POST">
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