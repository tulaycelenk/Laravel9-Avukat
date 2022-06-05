@extends('layouts.admin')

@section('title','Service List')

@section('pageInner')
    <a href ="{{route('admin.service.create')}}" class="btn btn-info">Add Service</a>
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">SERVICE LIST</h1>


            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Category</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Image Gallery</th>
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
                        <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</td>
                        <td>{{$rs->title}}</td>
                        <td>{{$rs->price}}</td>
                        <th>
                            @if($rs->image)
                                <img src="{{Storage::url($rs->image)}}" style="height : 40px">
                            @endif
                            </th>

                        <td> <a href="{{route('admin.image.index',['sid'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')" >
                            <img src="{{asset('assets')}}/admin/img/images.png" style="height : 40px"></a></td>
                        <td><a href="{{route('admin.service.edit',['id'=>$rs->id])}}" class="btn btn-success">Edit</a> </td>
                        <td><a href="{{route('admin.service.destroy',['id'=>$rs->id])}}}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</a> </td>
                        <td><a href="{{route('admin.service.show',['id'=>$rs->id])}}" class="btn btn-info">Show</a> </td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


@endsection
