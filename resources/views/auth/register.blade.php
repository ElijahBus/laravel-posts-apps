@extends('layouts.main_lay')

@section('content-body')
<div class="container ">
    <div class="row justify-content-center mt-5">
        {{-- Individual registration form --}}
        <div class="col-md-6">
            <div class="card no-border">
                <div class="card-header card-header-bg  card-title-style " style="font-weight: 500;">{{ __('Register as individual') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right card-text-font">{{ __('Names') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right card-text-font">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone-number" class="col-md-4 col-form-label text-md-right card-text-font">{{ __('Phone Number' )}}</label>

                            <div class="col-md-6">
                                <input type="tel" name="phone-number" id="phone-number" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right card-text-font">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right card-text-font">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary no-border-radius">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Oragnization registration form --}}
        <div class="col-md-6">
            <div class="card no-border">
                <div class="card-header card-header-bg  card-title-style " style=" font-weight: 600">{{ __('Register as organization') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="org-name" class="col-md-4 col-form-label text-md-right card-text-font">{{ __('Organization Name') }}</label>

                            <div class="col-md-6">
                                <input id="org-name" type="text" class="form-control @error('org-name') is-invalid @enderror" name="org-name" value="{{ old('org-name') }}" required autocomplete="org-name" autofocus>

                                @error('org-name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="org-address" class="col-md-4 text-md-right card-text-font">{{ __('Address (Location)') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="org-address" id="org-address" class="form-control" value="{{ old('org-address') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="org-email" class="col-md-4 col-form-label text-md-right card-text-font">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="org-email" type="org-email" class="form-control @error('org-email') is-invalid @enderror" name="org-email" value="{{ old('org-email') }}" required autocomplete="org-email">

                                @error('org-email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="org-contact" class="col-md-4 text-md-right card-text-font">{{ __('Contact') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="org-contact" id="org-contact" class="form-control" value="{{ old('org-contact') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="org-password" class="col-md-4 col-form-label text-md-right card-text-font">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="org-password" type="password" class="form-control @error('org-password') is-invalid @enderror" name="org-password" required autocomplete="org-new-password">

                                @error('org-password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="org-password-confirm" class="col-md-4 col-form-label text-md-right card-text-font">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="org-password-confirm" type="password" class="form-control" name="org-password_confirmation" required autocomplete="org-new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary no-border-radius">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
