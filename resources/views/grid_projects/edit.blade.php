@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'grid_project'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <form class="col-md-12" action="{{ route('about.edit', 1) }}" enctype="multipart/form-data"> {{--method="POST"--}}
                    @csrf
                    {{--@method('PUT')--}}
                    <div class="card py-3">
                        <div class="card-header mx-3">
                            <h5 class="title">{{ __('Editar Información') }}</h5>
                        </div>
                        <div class="card-body mx-3">
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Nombre') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ $grid_project->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Estatus') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Estatus" value="{{ $grid_project->status }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label" for="img">{{ __('Buscar Imagen') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input style="opacity: 1;position: initial;" type="file" id="img" name="imagensubida" accept="image/png, .jpeg, .jpg, image/gif">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-md-12 text-center">
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