@extends('layouts.app')

@section('content')
    <div class="container main-content">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card py-3">
                    <div class="d-flex flex-row justify-content-center">
                        <h3>Сергей Есенин</h3>
                    </div>
                    <div class="d-flex flex-row justify-content-center">
                        <img class="settings-photo" src="{{ url('/storage/img/person.jpg') }}">
                    </div>
                    <div class="settings-file d-flex flex-row justify-content-center">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Upload profile picture</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 mb-3">
                <div class="card py-0">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">@username</label>
                            <input type="text" class="form-control" placeholder="Enter your username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
