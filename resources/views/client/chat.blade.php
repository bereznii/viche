@extends('layouts.app')

@section('content')
    <div class="container main-content">
        @foreach(range(0, 15) as $chat)
            @if($chat % 2 == 0)
                <div class="row d-flex flex-row justify-content-start">
                    <div class="col-9 col-sm-9 mb-3">
                        <div class="card bg-info">
                            <div class="card-body">
                                his message {{ $chat }}
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row d-flex flex-row justify-content-end">
                    <div class="col-9 col-sm-9 mb-3">
                        <div class="card bg-primary">
                            <div class="card-body">
                                my message {{ $chat }}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

    </div>

    @include('layouts.chat-footer')

    </div>
    <script type="text/javascript" src="{{ asset('js/chat.js') }}"></script>
@endsection
