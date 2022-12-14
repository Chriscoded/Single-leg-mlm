@extends('auth.header')

@section('content')
<main class="login-form">
   
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
                <div class="card">
                    <h3 class="card-header text-center">User Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
                            </div>
                        </form>
                        <a class="nav-link" href="{{ route('register-user') }}">Dont Have Account ? Create an Account Now</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection