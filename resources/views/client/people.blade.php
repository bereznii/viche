@extends('layouts.app')

@section('content')
<div class="container people-content">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
        <div class="col-12 col-sm-12">
            <ul class="list-group">
                @foreach(range(0, 15) as $chat)
                    <li class="list-group-item d-flex flex-row people-list-item">
                        <div class="people-photo-block mr-2">
                            <img class="chat-photo" src="{{ url('/storage/img/esenin.jpg') }}">
                        </div>
                        <div class="people-name-block d-flex flex-column justify-content-center">
                            <p class="mb-0">Name Surname</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@include('layouts.footer')

@endsection
