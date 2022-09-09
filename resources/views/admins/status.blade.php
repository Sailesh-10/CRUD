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
                        <div class="ml-3 mt-3 mb-3 ">
                            <p>Status</p>
                            <form action="{{route('status.update', $post->id)}}" method="POST">
                                @csrf
                                @method('PUT')


                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="active" id="status"
                                        name="status">
                                    <label class="form-check-label" for="status">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="pending" id="status"
                                        name="status">
                                    <label class="form-check-label" for="status">
                                        Pending
                                    </label>
                                </div>
                        </div>


                        <div>
                            <button type="submit"
                                class="btn btn-primary btn-facebook btn-user btn-block ">Update</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection