@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
        <div class="col-12 col-sm-12">
            @foreach(range(0, 15) as $chat)
                <div class="card mb-2">
                    <div class="card-body" style="height: 5rem;">
                        chat => {{ $chat }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<footer class="footer">
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
