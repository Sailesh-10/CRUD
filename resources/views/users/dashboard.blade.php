@extends('layouts.dash')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-center text-gray-800">My Posts</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6><a class="m-0 font-weight-bold btn btn-primary text-white" href="
                                    {{route('post.create')}}">Add
                    Post</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table  " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th>Post Id</th>
                            <th>Title</th>
                            <th>Description</th>


                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>

                            </td>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->body}}</td>


                            <td class="text-center">
                                <a class="btn btn-primary text-white mr-0 mb-0"
                                    href="{{route('post.edit', $post->id)}}">Update</a>
                            </td>
                            <td>
                                <form action="{{route('post.delete', $post->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger text-white ml-2" type="
                                                        submit">Delete</button>
                                    </a>
                                </form>
                                </colspan>

                            </td>


                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection