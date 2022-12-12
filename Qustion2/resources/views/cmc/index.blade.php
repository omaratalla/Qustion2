@extends('cmc.parent')

@section('style')
   <link rel="stylesheet" href="{{asset('css/custom.css')}}"> 
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Responsive Hover Table</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>Dob</th>
                                    <th>CardId</th>
                                    <th>Avg</th>
                                    <th>StdYear</th>
                                    <th>Action</th>
                                   
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($student as $item )
                                    <tr>
                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ $item->Dob}}</td>
                                        <td>{{ $item->CardId}}</td>
                                        <td>{{ $item->Avg}}</td>
                                        <td>{{ $item->StdYear}}</td>
                                        <td class="options">
                                             <a href="{{route('cmc.edit',$item->id)}}">Edit</a>
                                             {{-- <a href="{{route('cmc.destroy',$item->id)}}" style="color:red "> | Delete</a> --}}

                                             <form action="{{route('cmc.destroy',$item->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="delete-btn"  >Delete</button>
                                            </form>
                                        </td>
                                      
                                        
                                   
                                       
                                    </tr>
                                @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>  
@endsection

