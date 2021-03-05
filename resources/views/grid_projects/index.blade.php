@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'grid_project'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card py-3">
                    <div class="card-header mx-3">
                        <h5 class="title">{{ __('Lista de Imágenes') }}</h5>
                    </div>
                    <div class="card-body mx-3">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary text-center">
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Estatus
                                    </th>
                                    <th>
                                        Imagen
                                    </th>
                                    
                                </thead>
                                <tbody>
                                    @foreach ($grid_projects as $grid_project)
                                        <tr class="text-center">
                                            <td>
                                                {{$grid_project->name}}
                                            </td>
                                            <td>
                                                {{$grid_project->status}}
                                            </td>
                                            <td>
                                                <div class="img_table mx-auto">
                                                    <img src="{{ asset('capital_amigo/img/'.$grid_project->imagen)}}" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <a class="btn" href="{{ route('grid_projects.edit', $grid_project->id) }}"><span style="font-size: 16px"><i class="nc-icon nc-settings"></i></span></a>
                                                <a class="btn" href="{{ route('grid_projects.destroy', $grid_project->id) }}"><span style="font-size: 16px"><i class="nc-icon nc-basket"></i></span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="col-md-12">
                <div class="card card-plain">
                    <div class="card-header">
                        <h4 class="card-title"> Table on Plain Background</h4>
                        <p class="card-category"> Here is a subtitle for this table</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Country
                                    </th>
                                    <th>
                                        City
                                    </th>
                                    <th class="text-right">
                                        Salary
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Dakota Rice
                                        </td>
                                        <td>
                                            Niger
                                        </td>
                                        <td>
                                            Oud-Turnhout
                                        </td>
                                        <td class="text-right">
                                            $36,738
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Minerva Hooper
                                        </td>
                                        <td>
                                            Curaçao
                                        </td>
                                        <td>
                                            Sinaai-Waas
                                        </td>
                                        <td class="text-right">
                                            $23,789
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Sage Rodriguez
                                        </td>
                                        <td>
                                            Netherlands
                                        </td>
                                        <td>
                                            Baileux
                                        </td>
                                        <td class="text-right">
                                            $56,142
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Philip Chaney
                                        </td>
                                        <td>
                                            Korea, South
                                        </td>
                                        <td>
                                            Overland Park
                                        </td>
                                        <td class="text-right">
                                            $38,735
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Doris Greene
                                        </td>
                                        <td>
                                            Malawi
                                        </td>
                                        <td>
                                            Feldkirchen in Kärnten
                                        </td>
                                        <td class="text-right">
                                            $63,542
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Mason Porter
                                        </td>
                                        <td>
                                            Chile
                                        </td>
                                        <td>
                                            Gloucester
                                        </td>
                                        <td class="text-right">
                                            $78,615
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Jon Porter
                                        </td>
                                        <td>
                                            Portugal
                                        </td>
                                        <td>
                                            Gloucester
                                        </td>
                                        <td class="text-right">
                                            $98,615
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>
    </div>
@endsection