@extends('layouts.dash')
@section('content')
<title>My profile</title>
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Update my profile</h1>
                    </div>
                    <form action="{{url('update-profile/'.$user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="first_name"
                                    name="first_name" placeholder="First Name" value="{{$user->first_name}}">
                                    @if ($errors->has('first_name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                 @endif
                            
                                </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="last_name"
                                    name="last_name" placeholder="Last Name" value="{{$user->last_name}}">
                                    @if ($errors->has('last_name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                     @endif

                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="email" name="email"
                                placeholder="Email Address" value="{{$user->email}}">
                               
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="password"
                                    name="password" placeholder="Password">
                                    @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="repeat_password"
                                    name="repeat_password" placeholder="Repeat Password">
                                    @if ($errors->has('repeat_password'))
                                <span class="text-danger">{{ $errors->first('repeat_password') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="phone" name="phone"
                                placeholder="Phone Number" value="{{$user->phone}}">
                                @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="gender" name="gender"
                                placeholder="Your Gender" value="{{$user->gender}}">
                                @if ($errors->has('gender'))
                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="address" name="address"
                                placeholder="Your Address" value="{{$user->address}}">
                                @if ($errors->has('address'))
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control form-control-user" id="dob" name="dob"
                                placeholder="Your Date Of Birth" value="{{$user->dob}}">  
                                @if ($errors->has('dob'))
                            <span class="text-danger">{{ $errors->first('dob') }}</span>
                            @endif 
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="image">Upload Image</label>
                                <input type="file" class="form-control form-control-user" id="image" name="image">
                                <img src ="{{ asset('template/img/'.$user->image)}}"width="100px" alt= ""> 
                                @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif

                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-facebook btn-user btn-block ">Update</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection