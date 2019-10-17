
@extends('layouts.auth')

@section('content')



<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-14">
      <div class="card">
        <div class="card-header">{{ __('Registered Alumni') }}</div>

        <div class="card-body">


          <div class="col-md-4" >
            <form action="/search" method="get">
              @csrf
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search this " name="search">
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form> 



          </div>
<br />

     {{ $alumni->links() }}
          <table class="table table-bordered">
            <thead>
              <th>Reg Number</th>
              <th>Full Name</th>
              <th>ID/Passport</th>
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
                <td>
                     <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal-{{ $alumn->id }}">Edit</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal-{{ $alumn->id }}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header"><h4 class="modal-title">Modal Header</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('alumnis.update', $alumn->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="adm">Student Registration Number (Only WebAdmin Can Edit This) :</label>
          <input type="text" class="form-control" name="adm" value="{{ $alumn->adm }}"  />
        </div>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" name="fullname" value="{{ $alumn->fullname }}" />
        </div>
        <div class="form-group">
          <label for="dept">dept:</label>
          <input type="text" class="form-control" name="dept" value="{{ $alumn->dept }}" />
        </div>
        <div class="form-group">
          <label for="course">course:</label>
          <input type="text" class="form-control" name="course" value="{{ $alumn->course }}" />
        </div>
         <div class="form-group">
          <label for="feser">Final Exam Series:</label>
          <input type="text" class="form-control" name="feser" value="{{ $alumn->feser }}" />
        </div>
        <div class="form-group">
          <label for="feyear">Final Year:</label>
          <input type="text" class="form-control" name="feyear" value="{{ $alumn->feyear }}" />
        </div>
        <div class="form-group">
          <label for="idnum">ID Number :</label>
          <input type="text" class="form-control" name="idnum" value="{{ $alumn->idnum }}" />
        </div>
         
         <div class="form-group">
          <label for="level">Level :</label>
          <input type="text" class="form-control" name="level" value="{{ $alumn->level }}" />
        </div>
        <div class="form-group">
          <label for="current_address">Your Current Address:</label>
          <input type="text" class="form-control" name="current_address" value="{{ $alumn->current_address }}" />
        </div>
         <div class="form-group">
          <label for="permanent_address">Your Permanent Address:</label>
          <input type="text" class="form-control" name="permanent_address" value="{{ $alumn->permanent_address }}" />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email" value="{{ $alumn->email }}" />
        </div>
        <div class="form-group">
          <label for="mobile">Mobile :</label>
          <input type="text" class="form-control" name="mobile" value="{{ $alumn->mobile }}" />
        </div>
        <div class="form-group">
          <label for="nextofkin">Next of Kin:</label>
          <input type="text" class="form-control" name="nextofkin" value="{{ $alumn->nextofkin }}" />
        </div>
         <div class="form-group">
          <label for="nextofkinphone">Next of Kin Mobile :</label>
          <input type="text" class="form-control" name="nextofkinphone" value="{{ $alumn->nextofkinphone }}" />
        </div>
        <div class="form-group">
          <label for="nextofkinadd">Next of Kin Address:</label>
          <input type="text" class="form-control" name="nextofkinadd" value="{{ $alumn->nextofkinadd }}" />
        </div>
         <div class="form-group">
          <label for="occupation">Current Job:</label>
          <input type="text" class="form-control" name="occupation" value="{{ $alumn->occupation }}" />
        </div>
        <div class="form-group">
          <label for="placeofworkadd">Place of Work Address:</label>
          <input type="text" class="form-control" name="placeofworkadd" value="{{ $alumn->placeofworkadd }}" />
        </div>

        <div class="form-group">
          <label for="occupation_place">Place of Work :</label>
          <input type="text" class="form-control" name="occupation_place" value="{{ $alumn->occupation_place }}" />
        </div>

        <div class="form-group">
          <label for="supervisoradd">Work Supervisors phone:</label>
          <input type="text" class="form-control" name="supervisoradd" value="{{ $alumn->supervisoradd }}" />
        </div>
          <Button type="submit" name="previous" class="btn btn-primary">Update</Button>

      </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $alumni->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- End Multi step form -->   
    @endsection
