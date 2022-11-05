@extends('layouts.guest')
@section('content')

<div id="wrapper-admin">
    <div class="container">
        <div class="row">
            <div class="offset-md-4 col-md-4">
                <div class="main border border-danger">
                    <img src="{{ asset('images/library.png') }}" alt="" id="main_logo">
                    <div class="weltxt">
                        <h1 class="welcome" style="color:  #044F2B;">𝑾𝒆𝒍𝒄𝒐𝒎𝒆</h1>
                        <h3 id="welcomeText">To BUP Library Management System</h3>
                    </div>
                </div>
                <form class="yourform" action="{{ route('login') }}" method="post">
                    @csrf
                    <h3 class="heading">Admin Login</h3>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="{{ old('username') }}" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="" required>
                    </div>
                    <input type="submit" name="login" class="btn btn-danger" value="login" />
                </form>
                @error('username')
                <div class='alert alert-danger'>{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>
@endsection