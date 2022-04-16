@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><a href="/admin"> {{ __('Go back') }}</a></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="last_name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text"
                                        class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                        value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="department"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Choose Department') }}</label>

                                <div class="col-md-6">
                                    <select name="department_admin_model_id" id="department"
                                        class="form-control @error('department') is-invalid @enderror">
                                        <option value="">Select Department</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                        {{-- <option value="abe_fap">abe_fap</option>
                                    <option value="amuntrico">amuntrico</option>
                                    <option value="healthOffice">healthOffice</option>
                                    <option value="ldrrmo">ldrrmo</option>
                                    <option value="macco">macco</option>
                                    <option value="mado">mado</option>
                                    <option value="mao">mao</option>
                                    <option value="masso">masso</option>
                                    <option value="mayorsOffices">mayorsOffices</option>
                                    <option value="mbo">mbo</option>
                                    <option value="mcr">mcr</option>
                                    <option value="meedmo">meedmo</option>
                                    <option value="meo">meo</option>
                                    <option value="meppio">meppio</option>
                                    <option value="mgso">mgso</option>
                                    <option value="mhrmo">mhrmo</option>
                                    <option value="mnao">mnao</option>
                                    <option value="mpdc">mpdc</option>
                                    <option value="mswdo">mswdo</option>
                                    <option value="mtof">mtof</option>
                                    <option value="pcic">pcic</option>
                                    <option value="peso">peso</option>
                                    <option value="tourism">tourism</option> --}}
                                    </select>
                                    {{-- <input id="department" type="text" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ old('last_name') }}" required autocomplete="department" autofocus> --}}

                                    @error('department')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
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
