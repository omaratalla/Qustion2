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
                        <h3 class="card-title">Add Catogry</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST"  action="{{route('cat.store')}}">
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
                                <label for="Catogry">NameCatogry</label>
                                <input type="number" class="form-control" id="Catogry" name="Catogry" value="{{old('Catogry')}}"
                                    placeholder="Enter  Catogry">
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