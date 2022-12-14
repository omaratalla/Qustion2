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
                        <h3 class="card-title">Add Publlisher</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST"  action="{{route('pcp.store')}}">
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
                                <label for="Publlisher">Publlisher</label>
                                <input type="text" class="form-control" id="Publlisher" name="Publlisher" value="{{old('Publlisher')}}"
                                    placeholder="Enter  Publlisher">
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