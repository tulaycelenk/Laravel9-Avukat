@extends('layouts.admin')

@section('title','Service :'.$data->title)

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
                    <th scope="col">Category</th>
                    <th scope="col">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title)}}
                    </th>

                </tr>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">{{$data->title}}</th>

                </tr>
                <tr>
                    <th scope="col">Keywords</th>
                    <th scope="col">{{$data->keywords}}</th>

                </tr>
                <tr>
                    <th scope="col">Description</th>
                    <th scope="col">{{$data->description}}</th>

                </tr>
                <tr>
                    <th scope="col">Price</th>
                    <th scope="col">{{$data->price}}</th>

                </tr>
                <tr>
                    <th scope="col">Tax</th>
                    <th scope="col">{{$data->tax}}</th>

                </tr>
                <tr>
                    <th scope="col">detail</th>
                    <th scope="col">{!!$data->detail!!}</th>

                </tr>
                <td>
                    <th scope="col">Image</th>
                    <td @if ($data->image)
                            <img src="{{Storage::url($data->image)}}" style="height: 100px">
                    @endif </td>

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

            <td><a href="{{route('admin.service.edit',['id'=>$data->id])}}" class="btn btn-success">Edit</a> </td>
            <td><a href="{{route('admin.service.destroy',['id'=>$data->id])}}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</a> </td>
        </div>
        <!-- /. PAGE INNER  -->
@endsection
