@extends('layouts.app', ['class' => '','elementActive' => 'teams'])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card py-3">
                    <div class="row ml-2 mr-3">
                        <div class="col-md-10 ">
                            <div class="card-header">
                                <h5 class="title">{{ __('Ver Equipo') }}</h5>
                            </div>
                        </div>
                        <div class="col-md-2 text-right">
                            <a href="{{ route('teams.edit', 1) }}" class="btn btn-info btn-round ">{{ __('Editar') }}</a>
                        </div>
                    </div>
                    <div class="card-body mx-3">
                        <div class="row">
                            <label class="col-md-3 col-form-label">{{ __('Nombre') }}</label>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Título" value="{{ $teams->name }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label">{{ __('Puesto') }}</label>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Subtítulo" value="{{ $teams->puesto }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label">{{ __('Imagen') }}</label>
                            <div class="col-md-9">
                                <div class="img_table_show mx-auto">
                                    <img src="{{ asset('storage/'.$teams->imagen)}}" alt=""> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <a href="{{ route('teams.index', 1) }}" class="btn btn-info btn-round">{{ __('Regresar') }}</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection