@extends('layouts.admin')

@section('title','FAQ List')

@section('pageInner')
    <a href ="{{route('admin.faq.create')}}" class="btn btn-info">Add FAQ</a>
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">FAQ LIST</h1>


            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Question</th>
                        <th scope="col">Answer</th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Show</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $data as $rs)
                    <tr>
                        <th>{{$rs->id}}</th>
                        <td>{{$rs->question}}</td>
                        <td>{!!$rs->answer!!}</td>
                        <td>{{$rs->status}}</td>
                        <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="btn btn-success">Edit</a> </td>
                        <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</a> </td>
                        <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}" class="btn btn-info">Show</a> </td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


@endsection
