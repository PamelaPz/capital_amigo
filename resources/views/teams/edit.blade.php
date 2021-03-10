@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'teams'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <form class="col-md-12" action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card py-3">
                        <div class="card-header mx-3">
                            <h5 class="title">{{ __('Editar Imagen') }}</h5>
                        </div>
                        <div class="card-body mx-3">
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Nombre') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ $team->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Estatus') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="puesto" class="form-control" placeholder="Estatus" value="{{ $team->puesto }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label" for="imagen">{{ __('Imagen Actual') }}</label>
                                <div class="col-md-9">
                                    <div class="img_table_show mx-auto">
                                        <img src="{{ asset('storage/'.$team->imagen)}}" alt=""> 
                                    </div>
                                    <div class="form-group">
                                        <input style="opacity: 1;position: initial;" type="file" id="imagen" name="imagen" accept="image/png, .jpeg, .jpg, image/gif">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <a href="{{ route('teams.show', 1) }}" class="btn btn-info btn-round">{{ __('Regresar') }}</a>
                                </div>
                                <div class="col-md-10 text-center">
                                    <button type="submit" class="btn btn-info btn-round">{{ __('Guardar Cambios') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection