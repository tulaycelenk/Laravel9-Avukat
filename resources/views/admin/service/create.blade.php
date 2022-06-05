@extends('layouts.admin')

@section('title','Add Category')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection
@section('pageInner')

    <div class="row">
        <div class="col-md-12">
            <h1 class="page-head-line">ADD NEW SERVICE</h1>

        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                ADD NEW SERVICE
            </div>
            <div class="panel-body">
                <form role="form" action="{{route('admin.service.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Parent Service</label>

                        <select class="form-control" name="category_id" style="...">
                            <option value="0" selected="selected">Main Service</option>
                                @foreach($data as $rs)
                                    <option value="{{$rs->id}}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" type="text" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label>Keywords</label>
                        <input class="form-control" type="text" name="keywords" placeholder="Keywords">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input class="form-control" type="text" name="description" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control" type="number" name="price" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label>Tax %</label>
                        <input class="form-control" type="number" name="tax" placeholder="Tax">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input class="form-control" type="text" name="detail" placeholder="detail">
                    </div>
                    <div class="form-group">
                        <label>Additional Details</label>
                        <textarea class="form-control" id="detail" name="detail"></textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#detail' ) )
                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile03" name="image">
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
                    <button type="submit" class="btn btn-info">Save</button>

                </form>
            </div>
        </div>
    </div>


@endsection
