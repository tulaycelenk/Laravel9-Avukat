@extends('layouts.adminwindow')
@section('title','Image Gallery')

@section('image_page')
    <h2>{{$service->title}}</h2>

        <form role="form" action="{{route('admin.image.store',['sid'=>$service->id])}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" type="text" name="title" placeholder="Title">
                </div>

                <div class="form-group">
                    <div class="custom-file">
                        <label class="form-label" for="customFile">Default file input example</label>
                        <input type="file" class="form-control" id="customFile" name="image" />
                    </div>
                 </div>
            <button type="submit" class="btn btn-info">Save</button>

        </form>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
            <tbody>
            @foreach( $images as $rs)
                <tr>
                    <th>{{$rs->id}}</th>
                    <td>{{$rs->title}}</td>
                    <th>
                        @if ($rs->image)
                            <img src="{{Storage::url($rs->image)}}" style="height : 40px">
                        @endif
                    </th>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
@endsection
