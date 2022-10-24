@extends('layouts.admin')
@section('content')
<div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create a testimonial!</h1>
                    </div>
                    <form action="{{url('update-testimonial/'.$testimonial->id) }}" method="POST" enctype= "multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <div class="col">
                                <label for="image">Upload Image</label>
                                <input type="file" class="form-control form-control-user" id="image" name="image">
                                <img src ="{{ asset('uploads/testimonial/'.$testimonial->image)}}"width="100px" alt= " TestimonialImage"> 
                                @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class=" col">
                                <input type=" text" class="form-control form-control-user" id="testimonial" value="{{$testimonial->testimonial}}" name="testimonial"
                                    placeholder="Testimonial"></input>
                                @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('testimonial') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class=" col">
                                <input type=" text" class="form-control form-control-user" id="name" value="{{$testimonial->name}}"name="name"
                                    placeholder="Name">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <input type = "text"class="form-control form-control-user" id="position" value="{{$testimonial->position}}"name="position"
                                    placeholder="Position"></input>
                                @if ($errors->has('position'))
                                <span class="text-danger">{{ $errors->first('position') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <input type = "text" class="form-control form-control-user" id="company" value="{{$testimonial->company}}"name="company"
                                    placeholder="Company Title"></input>
                                @if ($errors->has('company'))
                                <span class="text-danger">{{ $errors->first('company') }}</span>
                                @endif
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary btn-facebook btn-user btn-block ">Add</button>
                        </div>

                </div>
            </div>
        </div>
</div>

@endsection