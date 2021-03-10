@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'project'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                    <div class="card py-3">
                        <div class="row ml-2 mr-3">
                            <div class="col-md-10 ">
                                <div class="card-header">
                                    <h5 class="title">{{ __('Ver Textos') }}</h5>
                                </div>
                            </div>
                            <div class="col-md-2 text-right">
                                <a href="{{ route('project.edit', 1) }}" class="btn btn-info btn-round ">{{ __('Editar') }}</a>
                            </div>
                        </div>
                        <div class="card-body mx-3">
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Nombre de Sección') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre de Sección" value="{{ $project->h2 }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Título') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Título" value="{{ $project->h5 }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Párrafo') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                    <textarea name="name" id="name" rows="4" class="form-control" placeholder="Párrafo" style="max-height:none" disabled>{{ $project->p1 }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection