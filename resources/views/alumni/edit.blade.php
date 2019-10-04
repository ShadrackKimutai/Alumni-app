@extends('layouts.auth')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">{{ __('Update Your Details') }}</div>

        <div class="card-body">


          
<br />

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('alumnis.update', $alumni->idnum) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" name="fullname" value={{ $alumni->fullname }} />
        </div>
        <div class="form-group">
          <label for="dept">dept:</label>
          <input type="text" class="form-control" name="dept" value={{ $alumni->dept }} />
        </div>
        <div class="form-group">
          <label for="course">course:</label>
          <input type="text" class="form-control" name="course" value={{ $alumni->course }} />
        </div>
        <div class="form-group">
          <label for="feyear">Final Year:</label>
          <input type="text" class="form-control" name="feyear" value={{ $alumni->feyear }} />
        </div>
        <div class="form-group">
          <label for="idnum">ID Number :</label>
          <input type="text" class="form-control" name="idnum" value={{ $alumni->idnum }} />
        </div>
        <div class="form-group">
          <label for="current_address">Your Current Address:</label>
          <input type="text" class="form-control" name="current_address" value={{ $alumni->current_address }} />
        </div>
         <div class="form-group">
          <label for="permanent_address">Your Permanent Address:</label>
          <input type="text" class="form-control" name="permanent_address" value={{ $alumni->permanent_address }} />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email" value={{ $alumni->email }} />
        </div>
        <div class="form-group">
          <label for="mobile">Mobile :</label>
          <input type="text" class="form-control" name="mobile" value={{ $alumni->mobile }} />
        </div>
        <div class="form-group">
          <label for="nextofkin">Next of Kin:</label>
          <input type="text" class="form-control" name="nextofkin" value={{ $alumni->nextofkin }} />
        </div>
        <div class="form-group">
          <label for="nextofkinadd">Next of Kin Address:</label>
          <input type="text" class="form-control" name="nextofkinadd" value={{ $alumni->nextofkinadd }} />
        </div>
         <div class="form-group">
          <label for="occupation">Current Job:</label>
          <input type="text" class="form-control" name="occupation" value={{ $alumni->occupation }} />
        </div>
        <div class="form-group">
          <label for="placeofworkadd">Place of Work Addr:</label>
          <input type="text" class="form-control" name="placeofworkadd" value={{ $alumni->placeofworkadd }} />
        </div>

        <div class="form-group">
          <label for="occupation_place">Place of Work :</label>
          <input type="text" class="form-control" name="occupation_place" value={{ $alumni->occupation_place }} />
        </div>

        <div class="form-group">
          <label for="supervisoradd">Work Supervisors phone:</label>
          <input type="text" class="form-control" name="supervisoradd" value={{ $alumni->supervisoradd }} />
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
       </div>
      </div>
    </div>
  </div>
</div>
@endsection