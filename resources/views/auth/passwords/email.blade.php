@extends('layouts.app')

@section('title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit')
@section('meta_description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit')

@section('content')
<div class="services-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 forgot_pass_page">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="section-tittle text-center mb-80 mt-80">
                    <h2>{{ __('Reset Password') }}</h2>
                </div>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group row">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row mb-0">
                        <button type="submit" class="btn btn-primary forgot_pass_btn">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
