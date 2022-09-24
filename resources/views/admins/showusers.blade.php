@extends('layouts.admin')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-center text-gray-800">My Posts</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table  " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th>ID</th>
                            <th>Image</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>

                            <th class="text-center">Delete</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user1)
                        <tr>


                            <td>{{$user1->id}}</td>

                            <td>
                                <div class="card-body">

                                    <img class=" img-fluid" alt="avatar" src=" {{ url('template/img/'.$user1->image) }}"
                                        style="width: 100px;">
                                </div>
                            </td>
                            </td>
                            </td>

                            <td>{{$user1->first_name}}</td>
                            <td>{{$user1->last_name}}</td>
                            <td>{{$user1->email}}</td>

                            <td>
                                <form action="{{route('user.delete', $user1->id)}}" method="POST">
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