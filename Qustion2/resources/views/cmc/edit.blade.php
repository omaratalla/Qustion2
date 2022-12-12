@extends('cmc.parent')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST"  action="{{route('cmc.update' , $student->id )}}">
                        @method('PUT')
                        @csrf
                   
                        <div class="card-body">
                           @if($errors->any())
                           <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-ban"></i> Validatin Erorr!</h5>
                         <ul>
                            @foreach ($errors ->all() as $error )
                             <li>{{$error}}</li>   
                            @endforeach
                         </ul>

                        </div>
                           @endif 
                            <div class="form-group">
                                <label for="name_std">name</label>
                                <input type="text" class="form-control" id="name_std" name="name" value="{{old('name')?? $student->name}}"
                                    placeholder="Enter placeholer 1">
                            </div>
                            <div class="form-group">
                                <label for="Dob_std">Dob</label>
                                <input type="date" class="form-control" id="Dob_std" name="Dob" value="{{old('Dob') ?? $student->Dob}}"
                                    placeholder="dob-student">
                            </div>
                            <div class="form-group">
                                <label for="CardId_std">CardId</label>
                                <input type="number" class="form-control" id="CardId_std" name="CardId" value="{{old('CardId') ?? $student->CardId}}"
                                    placeholder="Carde id ">
                            </div>
                            <div class="form-group">
                                <label for="Avg_std">Avreg-student</label>
                                <input type="number" class="form-control" id="Avg_std" name="Avg" value="{{old('Avg') ?? $student->Avg}}"
                                    placeholder="Enter placeholer 1">
                            </div>
                            <div class="form-group">
                                <label for="StdYear">StdYear</label>
                                <input type="date" class="form-control" id="StdYear_std" name="StdYear" value="{{old('StdYear') ?? $student->StdYear}}"
                                    placeholder="student year">
                            </div>
                         
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection