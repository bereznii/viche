@extends('layouts.app')

@section('content')
<div class="container main-content">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
        <div class="col-12 col-sm-12">
            @foreach(range(0, 15) as $chat)
                <div class="card chat-card mb-2 p-1 d-flex flex-row">
                        <div class="chat-photo-block">
                            <img class="chat-photo" src="{{ url('/storage/img/esenin.jpg') }}">
                        </div>
                        <div class="chat-message-block d-flex flex-column justify-content-center">
                            <h5>Chat header #{{ $chat }}</h5>
                            <p>Last message...</p>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<footer class="footer fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 text-center">
                <a href="" class="d-flex flex-column justify-content-around"><i class="fas fa-comments fa-2x footer_links"></i>Chats</a>
            </div>
            <div class="col-6 col-sm-6 text-center border-left">
                <a href="" class="d-flex flex-column justify-content-around"><i class="fas fa-users fa-2x footer_links"></i>People</a>
            </div>
        </div>
    </div>
</footer>
@endsection
