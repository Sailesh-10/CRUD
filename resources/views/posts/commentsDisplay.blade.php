@foreach($comments as $comment)
<div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
    <img src="{{ url('template/img/'.$comment->user->image) }}" alt="" class="rounded-circle" width="40" height="40">
    <strong>{{ $comment->user->first_name }}</strong>
    <p>{{ $comment->body }}</p>
    <form method="post" action="{{ route('comments.store') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="body" class="form-control">
            <input type="hidden" name="post_id" value="{{ $post_id }}">
            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-facebook btn-user  ">Reply
                Comment</button>
        </div>
        <hr />
    </form>
    @include('posts.commentsDisplay', ['comments' => $comment->replies])
</div>
@endforeach