@extends('layouts.admin')
@section('title','Image Gallery')

@section('pageInner')
    <h2>Appointments</h2>


    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">service id</th>
                    <th scope="col">customer id</th>
                    <th scope="col">date</th>
                    <th scope="col">payment status</th>
                    <th>APPROVE</th>
                    <th>DECLINE</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $appointments as $rs)
                    <tr>
                        <th>{{$rs->service_id}}</th>
                        <td>{{$rs->userid}}</td>
                        <td>{{$rs->date}}</td>
                        <td>{{$rs->payment}}</td>
                        <th>
                            <form action=" {{ route('admin.appointment.approve_appointment', ['id' => $rs->id]) }}">
                                <input type="submit" value="APPROVE">
                            </form>
                        </th>
                        <th>
                            <form action="{{ route('admin.appointment.decline_appointment', ['id' => $rs->id]) }}">
                                <input type="submit" value="DECLINE">
                            </form>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
