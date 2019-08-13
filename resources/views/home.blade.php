
@extends('layouts.auth')

@section('content')

      

<div class="container bg-white">
    
<div class="row">
 <div class="content">
                <div class="title m-b-md">
                  Registered Users
                </div>
  </div>


    <div class="col-md-4" >
      <form action="/search" method="post">
        @csrf
        <div class="form-group">
          <input type="search" name="search" class="form-control">
          <span class="form-button-group">
            <button type="submt" class="btn btn-default">Search</button>
          </span>
        </div>

      </form> 
    </div>
  </div>

<table class="table table-bordered">
  <thead>
    <th>Entry</th>
    <th>Reg Number</th>
    <th>Full Name</th>
    <th>ID/PASSPORT</th>
    <th>Course</th>
    <th>Department</th>
    <th>EMail</th>
  </thead>
  <tbody>
    @foreach ($alumni as $alumn) 
    <tr>
      <td> {{ $alumn->id }}</td>
      <td>{{ $alumn->adm }} </td>
      <td>{{ $alumn->fullname }} </td>
      <td>{{ $alumn->idnum }} </td>
      <td>{{ $alumn->course }} </td>
      <td>{{ $alumn->dept }} </td>
      <td>{{ $alumn->email }}</td>

    </tr>
   @endforeach
  </tbody>
</table>
</div>
<!-- End Multi step form -->   
@endsection
