@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Categorias  <a href="{!! route('category.create') !!}" title="Nova categoria" ><i class="pull-right glyphicon glyphicon-plus"></i></a> </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Commandos</th>
                        <th>#</th>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{!! $category->id !!}</td>
                                    <td>{!! $category->name !!}</td>
                                    <td>{!! $category->Commands->count() !!}</td>
                                    <td>
                                        <a href="{!! route('category.edit',['id' => $category])  !!}" title="Editar"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="{!! route('command.create',['id'=> $category])  !!}" title="Novo comando"><i class="glyphicon glyphicon-flash"></i></a>
                                        <a href="{!! route('category.delete',['id' => $category])!!}" title="Excluir"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

