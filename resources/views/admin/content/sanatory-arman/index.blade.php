@extends('admin.layouts.admin')
@section('content')
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Санатория Арман</span>
            <h3 class="page-title">Санатория Арман</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Фильтры</h6>
                </div>
                <div class="card-body">
                    <div class="row ml-1 mt-2">

                        <div class="col-3">
                            <label for="name" class="form-control-plaintext">Имя</label>
                            <input class="form-control" type="text" name="namemt" placeholder="Леонардо" id="firstName">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="mb-2 btn btn-medium btn-primary mr-1" onclick="search()">Поиск
                        <i class="material-icons md-12">search</i>
                    </button>
                    <a href="{{route('medical_equipment.create')}}" type="button" class="mb-2 btn btn-medium btn-primary mr-1">Добавить
                        <i class="material-icons md-12">add_circle</i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Санатория Арман</h6>
                </div>
                <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0" id='table-body'>
                        <thead class="bg-light">
                        <tr>
                            <th scope="col" class="border-0">#</th>
                            <th scope="col" class="border-0">id</th>
                            <th scope="col" class="border-0">Цена</th>
                            <th scope="col" class="border-0">Название (рус)</th>
                            <th scope="col" class="border-0">Название (каз)</th>
                            <th scope="col" class="border-0">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($types as $type)
                            <tr>
                                <td>{{$type->_id}}</td>
                                <td>{{$type->id}}</td>
                                <td>{{$type->tsena}}</td>
                                <td>{{$type->namerus}}</td>
                                <td>{{$type->namekz}}</td>
                                <td>
                                    <a class="btn btn-outline-primary mb-2 "
                                       href="{{route('medical_equipment.edit', ['id' => $type->id])}}">
                                        <i class="material-icons md-12">edit</i>
                                    </a>
                                    <form class="d-inline" method="post" action="{{route('medical_equipment.delete', ['id' => $type->id])}}">
                                        {{csrf_field()}}
                                        {{method_field('POST')}}
                                        <button  class="btn btn-outline-danger mr-20 mb-2 " type="submit">
                                            <i class="material-icons md-50">delete</i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
                <div class="card-footer">
                    {{ $types->links() }}
                    @if($types->items())
                        <div class="panel-footer">
                            <p style="text-align: center"> показано {{ $types->firstItem() }} до {{ $types->lastItem() }}
                                из {{$types->total()}} данных </p>
                            {{ $types->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
