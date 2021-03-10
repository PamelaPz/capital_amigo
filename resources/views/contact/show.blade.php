@extends('layouts.app', ['class' => '','elementActive' => 'contact'])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card py-3">
                    <div class="row ml-2 mr-3">
                        <div class="col-md-10 ">
                            <div class="card-header">
                                <h5 class="title">{{ __('Ver Contacto') }}</h5>
                            </div>
                        </div>
                        <div class="col-md-2 text-right">
                            <a href="{{ route('project.edit', 1) }}" class="btn btn-info btn-round ">{{ __('Editar') }}</a>
                        </div>
                    </div>
                    <div class="card-body mx-3">
                        <div class="row">
                            <label class="col-md-3 col-form-label">{{ __('Título') }}</label>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Título" value="{{ $contact->h2 }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label">{{ __('Subtítulo') }}</label>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Subtítulo" value="{{ $contact->h5 }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label">{{ __('Dirección') }}</label>
                            <div class="col-md-9">
                                <div class="form-group">
                                <textarea name="name" id="name" rows="2" class="form-control" style="max-height:none" placeholder="Dirección" disabled>{{ $contact->address }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label">{{ __('Teléfono') }}</label>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Teléfono" value="{{ $contact->phone }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label">{{ __('Correo Electrónico') }}</label>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="email" name="name" class="form-control" placeholder="Correo Electrónico" value="{{ $contact->email }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection