@extends('layouts.post')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <img src="{{ url('template/img/'.$post->user->image) }}" alt="" class="rounded-circle" width="60"
                        height="60">
                    <p>Posted by: {{ $post->user->first_name }}</p>
                    <h3>{{ $post->title }}</h3>
                    <p>
                        {{ $post->body }}
                    </p>

                    <h4 class="mt-5 mb-3">Comments</h4>
                    @include('posts.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])

                    <h4>Add comment</h4>
                    <form action="{{route('comments.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-facebook btn-user btn-block ">Add
                                Comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection