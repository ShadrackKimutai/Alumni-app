@extends('layouts.auth')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                   <form class="form-horizontal">


  <div class="form-group">
    <label for="fullname" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input class="form-control" id="fullname" disabled>
    </div>
  </div>
  
  <div class="form-group">
    <label for="idnum" class="col-sm-2 control-label">ID Number</label>
    <div class="col-sm-10">
      <input class="form-control" id="idnum" disabled>
    </div>
  </div>

  <div class="form-group">
    <label for="adm" class="col-sm-2 control-label">Admission Number</label>
    <div class="col-sm-10">
      <input class="form-control" id="adm" disabled>
    </div>
  </div>

  <div class="form-group">
    <label for="mobile" class="col-sm-2 control-label">Mobile Phone Number</label>
    <div class="col-sm-10">
      <input class="form-control" id="mobile" disabled>
    </div>
  </div>

  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input class="form-control" id="email" type="email" disabled>
    </div>
  </div>

<div class="form-group">
    <label for="dept" class="col-sm-2 control-label">Department</label>
    <div class="col-sm-10">
      <input class="form-control" id="dept" disabled>
    </div>
  </div>

<div class="form-group">
    <label for="course" class="col-sm-2 control-label">Course</label>
    <div class="col-sm-10">
      <input class="form-control" id="course" disabled>
    </div>
  </div>

  <div class="form-group">
    <label for="level" class="col-sm-2 control-label">Level</label>
    <div class="col-sm-10">
      <input class="form-control" id="level" disabled>
    </div>
  </div>


<div class="form-group">
    <label for="current_address" class="col-sm-2 control-label">Current Address</label>
    <div class="col-sm-10">
      <input class="form-control" id="current_address" disabled>
    </div>
  </div>

  <div class="form-group">
    <label for="permanent_address" class="col-sm-2 control-label">Permanent Address</label>
    <div class="col-sm-10">
      <input class="form-control" id="permanent_address" disabled>
    </div>
  </div>

  <div class="form-group">
    <label for="nextofkin" class="col-sm-2 control-label">Next of Kin</label>
    <div class="col-sm-10">
      <input class="form-control" id="nextofkin" disabled>
    </div>
  </div>


  <div class="form-group">
    <label for="nextofkinphone" class="col-sm-2 control-label">Next of Kin Phone</label>
    <div class="col-sm-10">
      <input class="form-control" id="nextofkinphone" disabled>
    </div>
  </div>

  <div class="form-group">
    <label for="nextofkinadd" class="col-sm-2 control-label">Next of kin Address</label>
    <div class="col-sm-10">
      <input class="form-control" id="nextofkinadd" disabled>
    </div>
  </div>

  <div class="form-group">
    <label for="occupation" class="col-sm-2 control-label">Occupation</label>
    <div class="col-sm-10">
      <input class="form-control" id="occupation" disabled>
    </div>
  </div>

  <div class="form-group">
    <label for="occupation_place" class="col-sm-2 control-label">Occupation Address</label>
    <div class="col-sm-10">
      <input class="form-control" id="occupation_place" disabled>
    </div>
  </div>

  <div class="form-group">
    <label for="placeofworkadd" class="col-sm-2 control-label">Occupation Place</label>
    <div class="col-sm-10">
      <input class="form-control" id="placeofworkadd" disabled>
    </div>
  </div>

    <div class="form-group">
    <label for="supervisoradd" class="col-sm-2 control-label">Occupation Supervisor Phone</label>
    <div class="col-sm-10">
      <input class="form-control" id="supervisoradd" disabled>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="edit" class="btn btn-default" id="edit" onclick="return handleEdit()">Edit</button>

      <button type="submit" class="btn btn-default" id="save" hidden>Save</button>
    </div>
  </div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection