
<style>
    .card-plp {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }

    .price {
        color: grey;
        font-size: 22px;
    }

    .card-plp button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    .card-plp button:hover {
        opacity: 0.7;
    }
</style>

@foreach($services as $service)
    <div class="card-plp col-md-3">
        <img src="{{Storage::url($service->image)}}" alt="Service Image" style="width:100%">
        <h1>{{ $service->title }}</h1>
        <p class="price">{{ $service->price }}</p>
        <p>{!! $service->detail !!} </p>
        <p>{{ $service->user->name }}</p>
        <p><button><a href="/service/{{ $service->id }}" style="text-decoration: none">Add to Cart</a></button></p>
    </div>
@endforeach
