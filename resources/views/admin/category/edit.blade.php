@extends('layouts.admin')

@section('title','Edit Category')

@section('pageInner')

    <div class="row">
        <div class="col-md-12">
         <h1 class="page-head-line">EDIT {{$data->id}}</h1>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                EDIT CATEGORY
            </div>
            <div class="panel-body">
                <form role="form" action="{{route('admin.category.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Parent Category</label>

                        <select class="form-control" name="parentid" style="...">
                            <option value="0" selected="selected">Main Category</option>
                            @foreach($datalist as $rs)
                                @if($rs->id != $data->id)
                                <option value="{{$rs->id}}" @if($rs->id==$data->parentid) selected="selected" @endif>
                                    {{\app\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                @endif
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
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile03" ame="image" value="{{$data->image}}">
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
