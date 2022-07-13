@extends('main')

@section('content')
    <div class="main">
        <div class="grid wide">
            <div class="row">
                <div class="login col-12">

                    <form class="form_res-login" action="{{ route('login.store') }}" method="POST">
                        @csrf
                        <div class="head">Login</div>
                        @include('alert')
                        <div class="user-box">
                            <input type="text" name="email" id="email" value="{{ old('email') }}" required>
                            <label for="">Email</label>
                        </div>
                        @error('email')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="user-box">
                            <input type="password" name="password" id="password" required>
                            <label for="">Password</label>
                        </div>
                        @error('password')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <a href="/forgot-password" class="forgot_pass">Forgot your password?</a>
                        <button type="submit">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Login now!
                        </button>
                        <p class="text">or login with</p>
                        <div class="another">
                            <img src="{{ asset('/template/img/Google.png') }}" class="item">
                            <img src="{{ asset('/template/img/Facebook.png') }}" class="item">
                        </div>
                    </form>
                    <img class="form_bg" src="{{ asset('/template/img/Illusttration.png') }}" alt="...">

                </div>
            </div>
        </div>
    </div>
@endsection
