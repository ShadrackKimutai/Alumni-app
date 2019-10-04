@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('alumni.update', $share->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" name="fullname" value={{ $share->fullname }} />
        </div>
        <div class="form-group">
          <label for="dept">dept:</label>
          <input type="text" class="form-control" name="dept" value={{ $share->dept }} />
        </div>
        <div class="form-group">
          <label for="course">course:</label>
          <input type="text" class="form-control" name="course" value={{ $share->course }} />
        </div>
        <div class="form-group">
          <label for="feyear">Final Year:</label>
          <input type="text" class="form-control" name="feyear" value={{ $share->feyear }} />
        </div>
        <div class="form-group">
          <label for="idnum">ID Number :</label>
          <input type="text" class="form-control" name="idnum" value={{ $share->idnum }} />
        </div>
        <div class="form-group">
          <label for="current_address">Your Current Address:</label>
          <input type="text" class="form-control" name="current_address" value={{ $share->current_address }} />
        </div>
         <div class="form-group">
          <label for="permanent_address">Your Permanent Address:</label>
          <input type="text" class="form-control" name="permanent_address" value={{ $share->permanent_address }} />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email" value={{ $share->email }} />
        </div>
        <div class="form-group">
          <label for="mobile">Mobile :</label>
          <input type="text" class="form-control" name="mobile" value={{ $share->mobile }} />
        </div>
        <div class="form-group">
          <label for="nextofkin">Next of Kin:</label>
          <input type="text" class="form-control" name="nextofkin" value={{ $share->nextofkin }} />
        </div>
        <div class="form-group">
          <label for="nextofkinadd">Next of Kin Address:</label>
          <input type="text" class="form-control" name="nextofkinadd" value={{ $share->nextofkinadd }} />
        </div>
         <div class="form-group">
          <label for="occupation">Current Job:</label>
          <input type="text" class="form-control" name="occupation" value={{ $share->occupation }} />
        </div>
        <div class="form-group">
          <label for="placeofworkadd">Place of Work Addr:</label>
          <input type="text" class="form-control" name="placeofworkadd" value={{ $share->placeofworkadd }} />
        </div>

        <div class="form-group">
          <label for="occupation_place">Place of Work :</label>
          <input type="text" class="form-control" name="occupation_place" value={{ $share->occupation_place }} />
        </div>

        <div class="form-group">
          <label for="supervisoradd">Work Supervisors phone:</label>
          <input type="text" class="form-control" name="supervisoradd" value={{ $share->supervisoradd }} />
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection