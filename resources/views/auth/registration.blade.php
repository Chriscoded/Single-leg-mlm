@extends('auth.header')

@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @if(Session::has('success'))
                    <div style="position: relative;padding: 1rem 1rem;margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem; color: #0f5132;background-color: #d1e7dd;border-color: #badbcc;text-align: center !important;">             
                    {{ session('success') }}
                    </div>
                @endif
                @if(Session::has('error'))
                    <div style="position: relative;padding: 1rem 1rem;margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem; color: #842029;
                    background-color: #f8d7da;
                    border-color: #f5c2c7;text-align: center !important;">             
                    {{ session('error') }}
                    </div>
                @endif
                
                @if ($errors->any())
                <div style="position: relative;padding: 1rem 1rem;margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem; color: #842029;background-color: #f8d7da;border-color: #f5c2c7;text-align: center !important;">
                  @foreach ($errors->all() as $error )
                      <li>
                        {{ $error }}
                      </li>
                  @endforeach
                </div>
              @endif
                <div class="card">
                    <h3 class="card-header text-center">User Registeration </h3>
                    <div class="card-body">

                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                {{-- <input type="hidden" placeholder="referralkey" id="referralkey" class="form-control" name="referralkey"
                                    value="{{mt_rand(000000,999999)}}"> --}}
                                <input type="text" placeholder="Sponserid" id="sponserid" class="form-control" name="sponserid"
                                    required autofocus>
                                @if ($errors->has('sponserid'))
                                <span class="text-danger">{{ $errors->first('sponserid') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Mobile Number" id="mobile" class="form-control" name="mobile"
                                    required autofocus>
                                @if ($errors->has('mobile'))
                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Enter Amount" id="amount" class="form-control" name="amount"
                                    required autofocus>
                                @if ($errors->has('amount'))
                                <span class="text-danger">{{ $errors->first('amount') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Enter Epin" id="epin" class="form-control" name="epin"
                                    required autofocus>
                                @if ($errors->has('epin'))
                                <span class="text-danger">{{ $errors->first('epin') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                            </div>
                        </form>

                        <a class="nav-link" href="{{ route('login') }}">Have an Account ? Login now</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection