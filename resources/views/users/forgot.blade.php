@extends('main')
@section('content')
    <div class="main">
        <div class="grid wide">
            <div class="row">
                <div class="form_forgot_pass col-12">
                    <form class="form_res-login" method="POST">
                        @csrf
                        <div class="head">Forgot your password?</div>
                        <input type="email" name="email" id="email" placeholder="Enter your email" required>
                        <label for="">Email</label>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button class="submit" type="button">Get New Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
