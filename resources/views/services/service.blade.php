@extends('layouts.admin')
@section('content')
        <div class = "card-header">  
                <a href ="{{route('services.add_service')}}" class = "btn btn-primary  text-white float-end"> 
                    Add services 
                </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        
                        <tr class="bg-primary text-white">
                            <th> Id</th> 
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status </th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                            

                        </tr>
                    </thead>
                    <tbody> 
                        @foreach ($service as $item)
                        <tr> 
                            <td>{{ $item -> id}} </td>
                            <td> 
                                <img src ="{{ asset('uploads/icon/'.$item->image)}}"width="100px" alt= " ServiceIcon"> 
                            </td>
                            <td>{{ $item -> title}} </td> 
                            <td>{{ $item -> description}} </td>  
                            <td>
                                @if ($item -> status=='1')
                                hidden
                                @else 
                                   visible
                                   @endif
                             </td> 
                            <td> 
                                <a href = "{{url('edit-service/'.$item->id)}}" class = "btn btn-success ">Edit</a> 
                            </td> 
                            <td>
                                <form action="{{url('delete-service/'.$item->id)}}" method="POST">
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