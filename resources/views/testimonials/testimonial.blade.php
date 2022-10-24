@extends('layouts.admin')
@section('content')
<title>Testimonial</title>
<div class = "card"> 
        <div class = "card-header">  
                <a href ="{{route('testimonials.add_testimonial')}}" class = "btn btn-primary  text-white float-end"> 
                    Add testimonial 
                </a>
        </div>
    </div>

    <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        
                        <tr class="bg-primary text-white">
                             <th>Id</th>
                            <th>Image</th>
                            <th>Testimonial</th>
                            <th> Name </th>
                            <th> Position </th>
                            <th> Company Title </th>
                            <th>Status </th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>

                        </tr>
                    </thead>
                    <tbody> 
                        @foreach ($testimonial as $item)
                        <tr> 
                            <td>{{ $item -> id}} </td>
                            <td> 
                                <img src ="{{ asset('uploads/testimonial/'.$item->image)}}"width="100px" alt= " Testimonial Image"> 
                            </td>
                            <td>{{ $item -> testimonial}}</td> 
                            <td>{{ $item -> name}} </td>  
                            <td>{{ $item -> position}} </td>  
                            <td>{{ $item -> company}} </td>  
                            <td>
                                @if ($item -> status=='1')
                                hidden
                                @else 
                                   visible
                                   @endif
                             </td> 
                            <td> 
                                <a href = "{{url('edit-testimonial/'.$item->id)}}" class = "btn btn-success ">Edit</a> 
                            </td> 
                            <td>
                                <form action="{{url('delete-testimonial/'.$item->id)}}" method="POST">
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


@endsection