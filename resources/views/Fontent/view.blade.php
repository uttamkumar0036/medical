@extends('Fontent.Master')
@section('content')
    
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- /.row -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title">Admin Panel</h2>


            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
              </div>
            </div>
          </div>
          
          <!-- /.card-header -->
          <div class="card-body table-responsive " style="height: 490px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>Count</th>
                  <th>Name</th>
                  <th>City</th>
                  <th>Country</th>

                 

                </tr>
              </thead>
              <tbody>
          @foreach ($x as $y)

                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$y->Name}}</td>
                    <td>{{$y->City}}</td>
                    <td>{{$y->Country}}</td>                              
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
<!-- /.content -->


@endsection