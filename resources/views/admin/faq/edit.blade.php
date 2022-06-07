@extends('layouts.admin')

@section('title','Edit FAQ')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection
@section('pageInner')

    <div class="row">
        <div class="col-md-12">
         <h1 class="page-head-line">EDIT {{$data->question}}</h1>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                EDIT FAQ
            </div>
            <div class="panel-body">
                <form role="form" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Question</label>
                        <input class="form-control" type="text" name="question" value="{{$data->question}}">
                    </div>

                    <div class="form-group">
                        <label>Answer</label>
                        <textarea class="form-control" id="answer" name="answer" value="{{$data->answer}}"></textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#answer' ) )
                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
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
