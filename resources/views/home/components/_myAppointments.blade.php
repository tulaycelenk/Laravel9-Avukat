

@foreach($appointmentsForUser as $rs)

        <div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-md-3 col-sm-6">
                <div style="border: 3px solid black">
                    lawyer_id : {{ $rs->lawyer_id }}
                    date : {{ $rs->date }}
                    payment status : {{ $rs->payment }}
                    <a href="{{ route('cancelAppointment',['id'=>$rs->id]) }}">(Cancel Appointment)</a>
                </div>
        </div>
    </div>
        </div>

@endforeach
