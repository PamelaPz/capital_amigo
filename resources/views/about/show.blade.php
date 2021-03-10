@extends('layouts.app', ['class' => '','elementActive' => 'about'])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card py-3">
                    <div class="row ml-2 mr-3">
                        <div class="col-md-10 ">
                            <div class="card-header">
                                <h5 class="title">{{ __('Ver Acerca de ') }}</h5>
                            </div>
                        </div>
                        <div class="col-md-2 text-right">
                            <a href="{{ route('about.edit', 1) }}" class="btn btn-info btn-round ">{{ __('Editar') }}</a>
                        </div>
                    </div>
                    <div class="card-body mx-3">
                        <div class="row">
                            <label class="col-md-3 col-form-label">{{ __('Nombre de Sección') }}</label>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Acerca de" value="{{ $about->h5 }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label">{{ __('Título') }}</label>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Título" value="{{ $about->h2 }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label">{{ __('Párrafo 1') }}</label>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <textarea name="name" id="name" rows="4" class="form-control" style="max-height:none" placeholder="Párrafo 1" disabled>{{ $about->p1 }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label">{{ __('Párrafo 2') }}</label>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <textarea name="name" id="name" rows="4" class="form-control" style="max-height:none" placeholder="Párrafo 2" disabled>{{ $about->p2 }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection