@extends('layouts.dash')
@section('content')
<title>Create Post</title>
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create a Post!</h1>
                    </div>
                    <form action="{{route('post.store')}}" method="POST">
                        @csrf


                        <div class="form-group">
                            <div class=" col">
                                <input type=" text" class="form-control form-control-user" id="title" name="title"
                                    placeholder="title">
                                @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <textarea class="form-control form-control-user" id="body" name="body"
                                    placeholder="Description"></textarea>
                                @if ($errors->has('body'))
                                <span class="text-danger">{{ $errors->first('body') }}</span>
                                @endif
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary btn-facebook btn-user btn-block ">Post</button>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection