@extends('layouts.app', ['class' => '','elementActive' => 'about'])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <form class="col-md-12" action="{{ route('about.update', 1) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card py-3">
                        <div class="card-header mx-3">
                            <h5 class="title">{{ __('Editar Acerca de ') }}</h5>
                        </div>
                        <div class="card-body mx-3">
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Nombre de Sección') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="h5" class="form-control" placeholder="Acerca de" value="{{ $about->h5 }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Título') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="h2" class="form-control" placeholder="Título" value="{{ $about->h2 }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Párrafo 1') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <textarea name="p1" id="name" rows="4" class="form-control" style="max-height:none" placeholder="Párrafo 1">{{ $about->p1 }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Párrafo 2') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <textarea name="p2" id="name" rows="4" class="form-control" style="max-height:none" placeholder="Párrafo 2">{{ $about->p2 }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-md-2 text-left">
                                    <a href="{{ route('about.show', 1) }}" class="btn btn-info btn-round">{{ __('Regresar') }}</a>
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