
@extends('layouts.auth')

@section('content')



<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">{{ __('Access Your Data') }}</div>

        <div class="card-body">


          <div class="col-md-4" >
            <form action="/search" method="get">
              @csrf
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search this blog">
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form> 



          </div>



          <table class="table table-bordered">
            <thead>
              <th>Reg Number</th>
              <th>Full Name</th>
              <th>ID/PASSPORT</th>
              <th>Course</th>
              <th>Department</th>
              <th>Mobile</th>
              <th>EMail</th>
            </thead>
            <tbody>
              @foreach ($alumni as $alumn) 
              <tr>
                
                <td>{{ $alumn->adm }} </td>
                <td>{{ $alumn->fullname }} </td>
                <td>{{ $alumn->idnum }} </td>
                <td>{{ $alumn->course }} </td>
                <td>{{ $alumn->dept }} </td>
                <th>{{ $alumn->mobile }}</th>
                <td>{{ $alumn->email }}</td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- End Multi step form -->   
    @endsection
