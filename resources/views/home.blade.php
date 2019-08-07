@extends('layouts.min')

@section('content')
<!-- Multi step form --> 
<div class="row">
 <div class="content">
                <div class="title m-b-md">
                  Registered Users
                </div>
  </div>


    <div class="col-md-12" >
      <form action="/search" method="post">
        @csrf
        <div class="form-group">
          <input type="search" name="search" class="form-control">
          <span class="form-button-group">
            <button type="submt" class="btn btn-primary">Search</button>
          </span>
        </div>

      </form>
    </div>
  </div>

<table class="table table-bordered">
  <thead>
    <th>adm</th>
    <th>Full Name</th>
    <th>Id Number</th>
    <th>Course</th>
    <th>Department</th>
    <th>email</th>
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
<!-- End Multi step form -->   
@endsection
