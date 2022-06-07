@extends('layouts.admin')

@section('title','FAQ :'.$data->title)

@section('pageInner')

        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">{{$data->title}}</h1>

                </div>
            </div>
            <!-- /. ROW  -->
            <table class="table">

                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">{{$data->id}}</th>

                </tr>

                <tr>
                    <th scope="col">Question</th>
                    <th scope="col">{{$data->question}}</th>

                </tr>
                <tr>
                    <th scope="col">Answer</th>
                    <th scope="col">{!!$data->answer!!}</th>

                </tr>
                <tr>
                    <th scope="col">Status</th>
                    <th scope="col">{{$data->status}}</th>

                </tr>
                <tr>
                    <th scope="col">Created Date</th>
                    <th scope="col">{{$data->created_at}}</th>

                </tr>
                <tr>
                    <th scope="col">Update Date</th>
                    <th scope="col">{{$data->updated_at}}</th>

                </tr>
            </table>

            <td><a href="{{route('admin.faq.edit',['id'=>$data->id])}}" class="btn btn-success">Edit</a> </td>
            <td><a href="{{route('admin.faq.destroy',['id'=>$data->id])}}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</a> </td>
        </div>
        <!-- /. PAGE INNER  -->
@endsection
