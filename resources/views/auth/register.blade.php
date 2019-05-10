@extends('layouts.app')

@section('content')

    <h4 class="fw-500 c-grey-900 mB-40">Register</h4>
    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6">
               <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                   <label for="name" class="text-normal text-dark">First Name</label>
                   <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                   @if ($errors->has('first_name'))
                       <span class="form-text text-danger">
                           <small>{{ $errors->first('first_name') }}</small>
                       </span>
                   @endif
               </div>

               <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                   <label for="last_name" class="text-normal text-dark">Last Name</label>
                   <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                   @if ($errors->has('last_name'))
                       <span class="form-text text-danger">
                           <small>{{ $errors->first('last_name') }}</small>
                       </span>
                   @endif
               </div>

               <div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                   <label for="dob" class="text-normal text-dark">Date of Birth</label>
                   <input type="date" class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}" required autofocus>

                   @if ($errors->has('date_of_birth'))
                       <span class="form-text text-danger">
                           <small>{{ $errors->first('date_of_birth') }}</small>
                       </span>
                   @endif
               </div> 
               <div class="form-group">
                    <label for="gender" class="text-normal text-dark">Select gender</label>
                    <select name="gender" class="form-control">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="text-normal text-dark">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="form-text text-danger">
                            <small>{{ $errors->first('email') }}</small>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="" class="text-normal text-dark">Profession</label>
                    <input type="text" class="form-control" name="profession" value="{{ old('profession') }}" required>
                    @if ($errors->has('profession'))
                        <span class="form-text text-danger">
                            <small>{{ $errors->first('profession') }}</small>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="text-normal text-dark">password</label>
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="form-text text-danger">
                            <small>{{ $errors->first('password') }}</small>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="text-normal text-dark">Confirm Password</label>
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="peers ai-c jc-sb fxw-nw">
                <div class="peer">
                    <a href="/login">I have an account</a>
                </div>
                <div class="peer">
                    <button class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </form>
@endsection
