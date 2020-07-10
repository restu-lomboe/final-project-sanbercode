@extends('layouts.app')
@section('title','Register')
@section('content')
<div class="container">
   <div class="jumbotron" id="tc_jumbotron">
      <div class="card-body">
         <div class="col-md-8 offset-md-2">
            <div class="card">
               <div class="card-header" style="padding: 7px 21px;">{{ __('Register') }}</div>
               <div class="card-body">
                  <form method="POST" action="{{ route('register') }}">
                     @csrf

                     <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                           <input id="name" type="text"
                              class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                              value="{{ old('name') }}" required autofocus>

                           @if ($errors->has('name'))
                           <span class="invalid-feedback">
                              <strong>{{ $errors->first('name') }}</strong>
                           </span>
                           @endif
                        </div>
                     </div>

                     <div class="form-group row">
                        <label for="email"
                           class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                           <input id="email" type="email"
                              class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                              value="{{ old('email') }}" required>

                           @if ($errors->has('email'))
                           <span class="invalid-feedback">
                              <strong>{{ $errors->first('email') }}</strong>
                           </span>
                           @endif
                        </div>
                     </div>

                     <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                           <input id="password" type="password"
                              class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                              required>

                           @if ($errors->has('password'))
                           <span class="invalid-feedback">
                              <strong>{{ $errors->first('password') }}</strong>
                           </span>
                           @endif
                        </div>
                     </div>

                     <div class="form-group row">
                        <label for="password-confirm"
                           class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                           <input id="password-confirm" type="password" class="form-control"
                              name="password_confirmation" required>
                        </div>
                     </div>

                     <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                           <button type="submit" class="btn btn-success">
                              {{ __('Register') }}
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <br>
            <div class="create_info" style="color: #fff;">
               <span><i class="fa fa-info-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting
                  industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</span>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection