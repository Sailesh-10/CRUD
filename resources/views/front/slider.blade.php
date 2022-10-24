@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-center text-gray-800">Sliders</h1>
    <div class = "card"> 
        <div class = "card-header">  
                <a href ="{{route('front.add_slider')}}" class = "btn btn-primary  text-white float-end"> 
                    Add slider 
                </a>
        </div>
    </div>

    <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        
                        <tr class="bg-primary text-white">
                            <th>Slider Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th> Image </th>
                            <th>Status </th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>

                        </tr>
                    </thead>
                    <tbody> 
                        @foreach ($slider as $item)
                        <tr> 
                            <td>{{ $item -> id}} </td>
                            <td>{{ $item -> title}} </td> 
                            <td>{{ $item -> description}} </td>  
                            <td> 
                                <img src ="{{ asset('uploads/slider/'.$item->image)}}"width="100px" alt= "Slider Image"> 
                            </td>
                            <td>
                                @if ($item -> status=='1')
                                hidden
                                @else 
                                   visible
                                   @endif
                             </td> 
                            <td> 
                                <a href = "{{url('edit-slider/'.$item->id)}}" class = "btn btn-success ">Edit</a> 
                            </td> 
                            <td>
                                <form action="{{url('delete-slider/'.$item->id)}}" method="POST">
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