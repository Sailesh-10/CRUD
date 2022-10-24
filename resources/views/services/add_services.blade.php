@extends('layouts.admin')
@section('content')
<div>
     <button type="submit" class="btn btn-primary ">back</button>
    </div>
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">ADD SERVICES</h1>
                    </div>
                    <form action="{{route('service.store')}}" method="POST" enctype= "multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="col">
                                <label for="image">Upload Icon</label>
                                <input type="file" class="form-control form-control-user" id="image" name="image">

                                @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class=" col">
                                <input type=" text" class="form-control form-control-user" id="title" name="title"
                                    placeholder="Title">
                                @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <textarea class="form-control form-control-user" id="description" name="description"
                                    placeholder="Description"></textarea>
                                @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary btn-facebook btn-user btn-block ">Add</button>
                        </div>
                        
                    </form> 

                </div>
            </div>
        </div>
    </div>
</div>


@endsection 
