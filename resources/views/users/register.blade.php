@extends('main')

@section('content')
    <div class="main">
        <div class="grid wide">
            <div class="row">
                <div class="login col-12">
                    <form class="form_res-login" action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="head">Register</div>
                        <div class="user-box">
                            <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}"
                                required>
                            <label for="">First name</label>
                        </div>
                        @error('first_name')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="user-box">
                            <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" required>
                            <label for="">Last name</label>
                        </div>
                        @error('last_name')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="user-box">
                            <input type="text" name="email" id="email" value="{{ old('email') }}" required>
                            <label for="">Email</label>
                        </div>
                        @error('email')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="user-box">
                            <input type="password" name="password" id="password" value="{{ old('password') }}" required>
                            <label for="">Password</label>
                        </div>
                        @error('password')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <button id="submit" class="submit" type="submit">Star now!</button>
                        <p class="text">or use another account</p>
                        <img src="{{ asset('/template/img/Google.png') }}" class="item">
                        <img src="{{ asset('/template/img/Facebook.png') }}" class="item">
                    </form>
                    <img class="form_bg" src="{{ asset('/template/img/Illusttration.png') }}" alt="...">

                </div>

            </div>
        </div>
    </div>
@endsection
