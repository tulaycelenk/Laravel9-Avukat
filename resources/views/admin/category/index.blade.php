@extends('layouts.admin')

@section('title','Category List')

@section('pageInner')
    <a href ="{{route('admin.category.create')}}" class="btn btn-info">Add Category</a>
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">CATEGORY LIST</h1>


            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Keywords</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col" >Edit</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Show</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $data as $rs)
                    <tr>
                        <th>{{$rs->id}}</th>
                        <td>{{$rs->title}}</td>
                        <td>{{$rs->keywords}}</td>
                        <td>{{$rs->description}}</td>
                        <th>{{$rs->image}}</th>
                        <td>{{$rs->status}}</td>
                        <td><a href="{{route('admin.category.create',['id'=>$rs->id])}}" class="btn btn-success">Edit</a> </td>
                        <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</a> </td>
                        <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-info">Show</a> </td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


@endsection
