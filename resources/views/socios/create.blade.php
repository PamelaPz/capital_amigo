@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'teams'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <form class="col-md-12" action="{{ route('socios.store', 1) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card py-3" style="background-color: #A0A0A0 !important;">
                        <div class="card-header mx-3">
                            <h5 class="title">{{ __('Nuevo Socio') }}</h5>
                        </div>
                        <div class="card-body mx-3">
                            <div class="row">
                                <label class="col-md-3 col-form-label text-white" for="imagen">{{ __('Imagen') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input style="opacity: 1;position: initial;" type="file" id="imagen" name="imagen" accept="image/png, .jpeg, .jpg, image/gif" require>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <a href="{{ route('socios.index') }}" class="btn btn-info btn-round">{{ __('Regresar') }}</a>
                                </div>
                                <div class="col-md-10 text-center">
                                    <button type="submit" class="btn btn-info btn-round">{{ __('Guardar y Crear') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection