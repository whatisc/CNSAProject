@extends('layout.header')

@section('content')

<div class="parent-div">
    <div class="login-form">
        <h1 class="title2 grey-back">Register</h1>
        <br/>
        <form method="POST" action="/register">
            @csrf

            <!-- Login ID -->
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Login ID:</label>

                <div class="col-md-6">
                    <input id="name" class="form-control" type="text" name="loginId" required>
                </div>
            </div>

            <!-- First name-->
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">First Name:</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" id="name" name="firstName" required>
                </div>

            </div>

            <!-- Last name -->
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Last Name:</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" id="name" name="lastName" required>
                </div>
            </div>

            <!-- Email-->
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>

                <div class="col-md-6">
                    <input type="email" class="form-control" id="name" name="email" required>
                </div>
            </div>

            <!-- Phone number -->
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Phone Number:</label>

                <div class="col-md-6">
                    <input type="tel" class="form-control" id="name" name="phoneNumber" required>
                </div>
            </div>

            <!-- Getting the user type -->
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">User Type:</label>

                <div class="col-md-6">
                    <select class="form-control" name="type" id="type">
                        <option value="a">Admin</option>
                        <option value="c">Coach</option>
                    </select>
                </div>
            </div>

            <!-- Password -->
            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <!-- Submit button -->
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-default">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>
           
@endsection
