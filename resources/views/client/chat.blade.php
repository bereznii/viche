@extends('layouts.app')

@section('content')
    <div class="container main-content">
        @foreach($messages as $message)
            @if($message->user_id != auth()->user()->id)
                <div class="row no-gutters d-flex flex-row justify-content-start mt-1 mr-3">
                    <div class="card bg-info">
                        <div class="card-body px-3 py-2">
                            {{ $message->message }}
                        </div>
                    </div>
                </div>
            @else
                <div class="row no-gutters d-flex flex-row justify-content-end mt-1 ml-3">
                    <div class="card bg-primary">
                        <div class="card-body px-3 py-2">
                            {{ $message->message }}
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    @include('layouts.chat-footer')

    <script type="text/javascript" src="{{ asset('js/chat.js') }}"></script>
@endsection
