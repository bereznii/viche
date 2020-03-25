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
                @foreach($chats as $chat)
                        <a href="{{ route('chats.view', ['id' => $chat->id]) }}" class="chat-link">
                            <div class="card chat-card mb-2 p-1 d-flex flex-row">
                                <div class="chat-photo-block">
                                    <img class="chat-photo" src="{{ url('/storage/img/esenin.jpg') }}">
                                </div>
                                <div class="chat-message-block d-flex flex-column justify-content-center">
                                    <h5>{{ $chat->name }}</h5>
                                    <p>Last message... &#183; 21 Feb</p>
                                </div>
                            </div>
                        </a>
                @endforeach
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection
