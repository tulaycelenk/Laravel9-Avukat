@extends('layouts.admin')

@section('title','Edit Service')

@section('pageInner')

    <div class="row">
        <div class="col-md-12">
         <h1 class="page-head-line">EDIT {{$data->title}}</h1>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                EDIT SERVICE
            </div>
            <div class="panel-body">
                <form role="form" action="{{route('admin.service.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Parent Service</label>

                        <select class="form-control" name="category_id" style="...">
                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}" @if($rs->id==$data->category_id) selected="selected" @endif>
                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" type="text" name="title" value="{{$data->title}}">
                    </div>
                    <div class="form-group">
                        <label>Keywords</label>
                        <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input class="form-control" type="text" name="description" value="{{$data->description}}">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control" type="number" name="price" value="{{$data->price}}">
                    </div>   <div class="form-group">
                        <label>tax %</label>
                        <input class="form-control" type="number" name="tax" value="{{$data->tax}}">
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile03" name="image" value="{{$data->image}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info">Update</button>

                </form>
            </div>
        </div>
    </div>


@endsection
