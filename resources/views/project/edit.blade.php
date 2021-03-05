@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'project'
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
                            <h5 class="title">{{ __('Editar Proyectos') }}</h5>
                        </div>
                        <div class="card-body mx-3">
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Nombre de Sección') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre de Sección" value="{{ $project->h2 }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Título') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Título" value="{{ $project->h5 }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Párrafo') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                    <textarea name="name" id="name" rows="4" class="form-control" placeholder="Párrafo" style="max-height:none">{{ $project->p1 }}</textarea>
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