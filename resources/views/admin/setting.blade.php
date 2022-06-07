@extends('layouts.admin')
@section('title','Settings')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection
@section('pageInner')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-head-line">SETTINGS </h1>
        </div>
    </div>

        <div class="panel panel-default">
            <div class="panel-body">

                <ul class="nav nav-pills">
                    <li class="active"><a href="#general-pills" data-toggle="tab">General</a>
                    </li>
                    <li class=""><a href="#smtp-pills" data-toggle="tab">Smtp Email</a>
                    </li>
                    <li class=""><a href="#social-pills" data-toggle="tab">Social Media</a>
                    </li>
                    <li class=""><a href="#about-pills" data-toggle="tab">About Us</a>
                    </li>
                    <li class=""><a href="#contact-pills" data-toggle="tab">Contact Page</a>
                    </li>
                    <li class=""><a href="#referances-pills" data-toggle="tab">References</a>
                    </li>
                </ul>

                <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content">

                    <div class="tab-pane fade" id="general-pills">
                        <input type="hidden" id="id" name="id" value="{{$data->id}}" class=form-control">

                        <div class="form-group">
                           <label>Title</label>
                           <input class=form-control" type="text" id="title" name="title" value="{{$data->title}}" >
                       </div>

                        <div class="form-group">
                            <label>keywords</label>
                            <input type="text" id="keywords" name="keywords" value="{{$data->keywords}}" class=form-control">
                        </div>
                        <div class="form-group">
                            <label>description</label>
                            <input type="text" id="description" name="description" value="{{$data->description}}" class=form-control">
                        </div>
                        <div class="form-group">
                            <label>company</label>
                            <input type="text" id="company" name="company" value="{{$data->company}}" class=form-control">
                        </div>
                        <div class="form-group">
                            <label>address</label>
                            <input type="text" id="address" name="address" value="{{$data->address}}" class=form-control">
                        </div>
                        <div class="form-group">
                            <label>phone</label>
                            <input type="number" id="phone" name="phone" value="{{$data->phone}}" class=form-control">
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="text" id="email" name="email" value="{{$data->email}}" class=form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputGroupFile03">Icon</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile03" name="icon">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option selected="selected">{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info">Update Settings</button>
                    </div>

                     <div class="tab-pane fade" id="smtp-pills">
                        <h4>Smtp Tab</h4>
                         <div class="form-group">
                             <label>Smtp Server</label>
                             <input class=form-control" type="text" id="title" name="title" value="{{$data->smtpserver}}" >
                         </div>

                         <div class="form-group">
                             <label>Smtp Email</label>
                             <input type="text" id="keywords" name="keywords" value="{{$data->email}}" class=form-control">
                         </div>
                         <div class="form-group">
                             <label>Smtp Password</label>
                             <input type="password" id="description" name="description" value="{{$data->smtppassword}}" class=form-control">
                         </div>
                         <div class="form-group">
                             <label>Smtp Port</label>
                             <input type="number" id="description" name="description" value="{{$data->smtpport}}" class=form-control">
                         </div>
                         <button type="submit" class="btn btn-info">Update Settings</button>

                    </div>

                    <div class="tab-pane fade" id="social-pills">
                        <h4>Social Tab</h4>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input class=form-control" type="text" id="facebook" name="facebook" value="{{$data->facebook}}" >
                        </div>

                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" id="twitter" name="twitter" value="{{$data->twitter}}" class=form-control">
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" id="nstagram" name="instagram" value="{{$data->instagram}}" class=form-control">
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="text" id="youtube" name="youtube" value="{{$data->youtube}}" class=form-control">

                        </div>
                        <button type="submit" class="btn btn-info">Update Settings</button>
                    </div>

                    <div class="tab-pane fade active in" id="about-pills" >
                        <div class="form-group">
                            <label>About us</label>
                            <textarea class="form-control" id="about" name="about" value="{{$data->about}}"></textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#about' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>
                        <button type="submit" class="btn btn-info">Update Settings</button>
                    </div>

                    <div class="tab-pane fade active in" id="contact-pills">
                        <div class="form-group">
                            <label>Contact</label>
                            <textarea class="form-control" id="contact" name="contact" value="{{$data->contact}}" ></textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#contact' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>
                        <button type="submit" class="btn btn-info">Update Settings</button>
                    </div>
                    <div class="tab-pane fade active in" id="referances-pills">
                        <div class="form-group">
                            <label>References</label>
                            <textarea class="form-control" id="references" name="references" value="{{$data->references}}" ></textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#references' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>
                        <button type="submit" class="btn btn-info">Update Settings</button>
                    </div>

                </div>
                </form>
            </div>

        </div>

@endsection
