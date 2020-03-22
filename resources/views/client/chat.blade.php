@extends('layouts.app')

@section('content')
    <div class="container main-content">
        @foreach(range(0, 15) as $chat)
            @if($chat % 2 == 0)
                <div class="row no-gutters d-flex flex-row justify-content-start mt-1 mr-3">
                    <div class="card bg-info">
                        <div class="card-body px-3 py-2">
                            his message {{ $chat }}
                        </div>
                    </div>
                </div>
            @else
                <div class="row no-gutters d-flex flex-row justify-content-end mt-1 ml-3">
                    <div class="card bg-primary">
                        <div class="card-body px-3 py-2">
                            my message {{ $chat }}
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
            <div class="row no-gutters d-flex flex-row justify-content-end mt-1 ml-3">
                <div class="card bg-primary">
                    <div class="card-body px-3 py-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc finibus urna ante, sed facilisis
                        lacus tincidunt id. Integer vitae blandit nisi. Sed pulvinar pellentesque ligula vitae rhoncus.
                        Sed efficitur tempor.
                    </div>
                </div>
            </div>
            <div class="row no-gutters d-flex flex-row justify-content-start mt-1 mr-3">
                <div class="card bg-info">
                    <div class="card-body px-3 py-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc finibus urna ante, sed facilisis
                        lacus tincidunt id. Integer vitae blandit nisi. Sed pulvinar pellentesque ligula vitae rhoncus.
                        Sed efficitur tempor.
                    </div>
                </div>
            </div>

    </div>

    @include('layouts.chat-footer')

    <script type="text/javascript" src="{{ asset('js/chat.js') }}"></script>
@endsection
