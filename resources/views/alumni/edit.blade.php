    @extends('layouts.auth')


    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Profile') }}</div>
                    @if ($errors->any())

                    <div class="alert alert-danger">

                        <strong>Whoops!</strong> There were some problems with your input.<br><br>

                        <ul>

                            @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                    @endif

                    <div class="card-body">

                       <form class="form-horizontal" action="{{ route('alumnis.update',$alumni->id) }}" method ="PATCH ">

        @csrf

        {{ method_field('PATCH') }}
                          <div class="form-group">
                            <label for="fullname" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                              <input class="form-control" id="fullname" value="{{ $alumni->fullname }}" >
                          </div>
                      </div>

                      <div class="form-group">
                        <label for="idnum" class="col-sm-2 control-label">ID Number</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="idnum"  value="{{ $alumni->idnum }}" >
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="adm" class="col-sm-2 control-label">Admission Number</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="adm" value="{{ $alumni->adm }}" >
                  </div>
              </div>

              <div class="form-group">
                <label for="mobile" class="col-sm-2 control-label">Mobile Phone Number</label>
                <div class="col-sm-10">
                  <input class="form-control" id="mobile" value="{{ $alumni->mobile }}" >
              </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input class="form-control" id="email" type="email" value="{{ $alumni->email }}" >
          </div>
      </div>

      <div class="form-group">
        <label for="dept" class="col-sm-2 control-label">Department</label>
        <div class="col-sm-10">
          <input class="form-control" id="dept" value="{{ $alumni->dept }}" >
      </div>
  </div>

  <div class="form-group">
    <label for="course" class="col-sm-2 control-label">Course</label>
    <div class="col-sm-10">
      <input class="form-control" id="course" value="{{ $alumni->course }}" >
  </div>
</div>

<div class="form-group">
    <label for="level" class="col-sm-2 control-label">Level</label>
    <div class="col-sm-10">
      <input class="form-control" id="level" value="{{ $alumni-> level}}" >
  </div>
</div>


<div class="form-group">
    <label for="current_address" class="col-sm-2 control-label">Current Address</label>
    <div class="col-sm-10">
      <input class="form-control" id="current_address" value="{{ $alumni->current_address }}" >
  </div>
</div>

<div class="form-group">
    <label for="permanent_address" class="col-sm-2 control-label">Permanent Address</label>
    <div class="col-sm-10">
      <input class="form-control" id="permanent_address" value="{{ $alumni-> permanent_address}}" >
  </div>
</div>

<div class="form-group">
    <label for="nextofkin" class="col-sm-2 control-label">Next of Kin</label>
    <div class="col-sm-10">
      <input class="form-control" id="nextofkin" value="{{ $alumni->nextofkin }}" >
  </div>
</div>


<div class="form-group">
    <label for="nextofkinphone" class="col-sm-2 control-label">Next of Kin Phone</label>
    <div class="col-sm-10">
      <input class="form-control" id="nextofkinphone" value="{{ $alumni->nextofkinphone }}" >
  </div>
</div>

<div class="form-group">
    <label for="nextofkinadd" class="col-sm-2 control-label">Next of kin Address</label>
    <div class="col-sm-10">
      <input class="form-control" id="nextofkinadd" value="{{ $alumni->nextofkinadd }}" >
  </div>
</div>

<div class="form-group">
    <label for="occupation" class="col-sm-2 control-label">Occupation</label>
    <div class="col-sm-10">
      <input class="form-control" id="occupation" value="{{ $alumni->occupation }}" >
  </div>
</div>

<div class="form-group">
    <label for="occupation_place" class="col-sm-2 control-label">Occupation Address</label>
    <div class="col-sm-10">
      <input class="form-control" id="occupation_place" value="{{ $alumni->occupation_place }}" >
  </div>
</div>

<div class="form-group">
    <label for="placeofworkadd" class="col-sm-2 control-label">Occupation Place</label>
    <div class="col-sm-10">
      <input class="form-control" id="placeofworkadd" value="{{ $alumni->placeofworkadd }}" >
  </div>
</div>

<div class="form-group">
    <label for="supervisoradd" class="col-sm-2 control-label">Occupation Supervisor Phone</label>
    <div class="col-sm-10">
      <input class="form-control" id="supervisoradd" value="{{ $alumni->supervisoradd }}" >
  </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">


      <button type="submit" class="btn btn-default" id="save" >Save</button>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

@endsection