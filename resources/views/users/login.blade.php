@extends('layouts.app')
@section('content')
<!-- Outer Row -->

<title> Login</title>
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                            <div class="card-body">
                                @if(isset($msg))
                                <div class="alert alert-danger">
                                    {{ $msg }}
                                </div>
                                @endif

                                <form action="{{route('user.check')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="email"
                                            name="email" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password"
                                            name="password" placeholder="Password">
                                        @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit"
                                            class="btn btn-primary btn-facebook btn-user btn-block ">Login</button>
                                    </div>
                                    </a>
                                </form>
                                <hr>

                                <div class="text-center">
                                    <a class="small" href="{{route('user.register')}}"> Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @endsection