@extends('layouts.admin')
@section('content')
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Edit Slider!</h1>
                    </div>
                    <form action="{{url('update-slider/'.$slider->id) }}" method="POST" enctype= "multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <div class=" col">
                                <input type=" text" class="form-control form-control-user" value="{{$slider->title}}" id="title" name="title"
                                    placeholder="Title">
                                @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col">
                                <input type=" text" class="form-control form-control-user" value="{{$slider->description}}"id="description" name="description"
                                    placeholder="Description"></input>
                                @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <label for="image">Upload Image</label>
                                <input type="file" class="form-control form-control-user" id="image" name="image">
                                <img src ="{{ asset('uploads/slider/'.$slider->image)}}"width="100px" alt= "Slider Image"> 

                                @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                                <input type="checkbox"  name="status" {{$slider->status =='1' ? 'checked':''}}> 0=visible, 1=hidden
                        </div>


                        <div>
                            <button type="submit" class="btn btn-primary btn-facebook btn-user btn-block ">Add</button>
                        </div>

                </div>
            </div>
        </div>
</div>

@endsection