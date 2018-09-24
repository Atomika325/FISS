@extends('layout.appadmin')

@section('title')
  <title>Add Home Page</title>
@endsection
@section('content')
</section>
<legend> &nbsp; 
<p>&nbsp;

</p></legend>

</section>
<div class="tab">
  <button class="tablinks" href="#room" onClick="openCity(event, 'Room')" id="defaultOpen">Room</button>
  <button class="tablinks" href="#course" onClick="openCity(event, 'Course')">Course</button>
  <button class="tablinks" href="#subject" onClick="openCity(event, 'Subject')">Subject</button>
  <button class="tablinks" href="#professor" onClick="openCity(event, 'Professor')">Professor</button>
</div>

<div id="Room" class="tabcontent">
    <h3 align="center">Add a Room</h3> 
  {!! Form::open(['action' => 'RoomsController@store', 'method' =>'POST']) !!}
  <div class = "form-group" align="center">
      {{Form:: label('roomNo', 'Room Number')}}
      <div class= "col-md-6">
        {{Form:: text('roomNo', '',['class' => 'form-control input-md','placeholder' => 'Room Number'])}}
      </div>
  </div>
  <div class = "form-group" align="center">
      {{Form:: label('roomDesc', 'Room Description')}}
      <div class= "col-md-6">
        {{Form:: text('roomDesc', '', ['class' => 'form-control input-md','placeholder' => 'Room Description'])}}
      </div>
  </div>
  <div align = "center">
    <div class="col-md-6">
        {{Form::button('Submit', ['type' => 'submit', 'class' => 'btn button-submit'])}}
        {{Form::button('Reset', ['type' => 'reset','class' => 'btn button-reset'])}}
    </div>
  </div>
  {!! Form::close() !!}

						<div id="Layer1" align=""><form>
                        <!-- Text input-->
                        <div class="form-group" align="left">
						<button id="rEdit" name="rEdit" class= "btn button-edit">Edit Room/s</button>
            <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Room No.</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>           
        <td>1</td> 
    <td>MB201</td>
      <td>Main Building</td>
      <td><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
    </tr>
  </tbody>
</table>
                        </div>
				</form></div></div>
</div>
<div id="Course" class="tabcontent" align="center">
    <h3 align="center">Add a Course</h3> 
    {!! Form::open(['action' => 'CoursesController@store', 'method' =>'POST']) !!}
  <div class = "form-group" align="center">
      {{Form:: label('coursecode', 'Course Code')}}
      <div class= "col-md-6">
        {{Form:: text('coursecode', '',['class' => 'form-control input-md','placeholder' => 'Course Code (ex: BSIT-SJ)'])}}
      </div>
  </div>
  <div class = "form-group" align="center">
      {{Form:: label('coursedesc', 'Course Description')}}
      <div class= "col-md-6">
        {{Form:: text('coursedesc', '', ['class' => 'form-control input-md','placeholder' => 'Course Description'])}}
      </div>
  </div>
  <div align = "center">
    <div class="col-md-6">
        {{Form::button('Submit', ['type' => 'submit', 'class' => 'btn button-submit'])}}
        {{Form::button('Reset', ['type' => 'reset','class' => 'btn button-reset'])}}
    </div>
  </div>
  {!! Form::close() !!}
						<div id="Layer1" align="left"><form>				
                        <!-- Text input-->
                        <div class="form-group" align="left">
						<button id="rEdit" name="rEdit" class= "btn button-edit">Edit Course/s</button>
                          <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course Code</th>
      <th scope="col">Course Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>     
      <th scope="row">1</th>
      <td>BSIT-SJ</td>
      <td>Bachelor of Science in Information Technology</td>
      <td><button type="button" class="btn btn-danger btn-sm">Delete</button></td>  
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2"></td>
      <td></td>
    </tr>
  </tbody>
</table>
                        </div>
        </form></div></div>
<div id="Subject" class="tabcontent" align="center">
    <h3 align="center">Add a Subject</h3> 
    {!! Form::open(['action' => 'SubjectsController@store', 'method' =>'POST']) !!}
    <div class = "form-group" align="center">
        {{Form:: label('subj_code', 'Subject Code')}}
        <div class= "col-md-6">
          {{Form:: text('subj_code', '',['class' => 'form-control input-md','placeholder' => 'Subject Code'])}}
        </div>
    </div>
    <div class = "form-group" align="center">
        {{Form:: label('subj_desc', 'Subject Description')}}
        <div class= "col-md-6">
          {{Form:: text('subj_desc', '', ['class' => 'form-control input-md','placeholder' => 'Subject Description'])}}
        </div>
    </div>
    <div class ="form-group" align="center">
        {{Form:: label('subj_hours', 'Subject Hours')}}
        <div class="col-md-6">
          {{Form:: select('subj_hours',['1' => '1', '1.5' => '1.5', '2' => '2', '3' =>'3', '5' => '5', '6' => '6', '9' => '9'],null,['class' => 'form-control'])}}
        </div>
      </div>
        <div class ="form-group" align="center">
            {{Form:: label('course_affiliated', 'Course Affiliated')}}
        <div class="col-md-6">
            {{Form:: select('course_affiliated',['Information Technology' => 'Information Technology', 'Accountancy' => 'Accountancy', 'Finance' => 'Finance', 'Entrepreneurship' =>'Entrepreneurship', 'Education' => 'Education', 'Hospitality Management' => 'Hospitality Management', 'General Education' => 'General Education'],null,['class' => 'form-control'])}}
        </div>
      </div>
      <div class ="form-group" align="center">
          {{Form:: label('subj_units', 'Subject Units')}}
        <div class="col-md-6">
            {{Form:: select('subj_units',['1' => '1', '2' => '2', '3' =>'3', '6' => '6', '9' => '9'],null,['class' => 'form-control'])}}
        </div>
      </div>
    
    <div align = "center">
      <div class="col-md-6">
          {{Form::button('Submit', ['type' => 'submit', 'class' => 'btn button-submit'])}}
          {{Form::button('Reset', ['type' => 'reset','class' => 'btn button-reset'])}}
      </div>
    </div>
    {!! Form::close() !!}
    								  <div id="Layer1" align="left"><form>				
                        <!-- Text input-->
                        <div class="form-group" align="left">
						<button id="rEdit" name="rEdit" class= "btn button-edit">Edit Subject/s</button>
                          <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Subject	 Code</th>
      <th scope="col">Subject Description</th>
	   <th scope="col">Units</th>
	    <th scope="col">Hours</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>COMP2103</td>
      <td>Object-oriented programming</td>
      <td>3</td>
	  <td>5</td>
	  <td><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
	  <td></td>
	  <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2"></td>
      <td></td>
	  <td></td>
	 
    </tr>
  </tbody>
</table>
                        </div>
        </form></div>
</div>
</div>  
<div id="Professor" class="tabcontent" align="center">
        <h3 align="center">Add a Professor</h3> 
        {!! Form::open(['action' => 'ProfessorsController@store', 'method' =>'POST']) !!}
        <div class = "form-group" align="center">
            {{Form:: label('faculty_id', 'Faculty ID')}}
            <div class= "col-md-6">
              {{Form:: text('faculty_id', '',['class' => 'form-control input-md','placeholder' => 'Faculty ID'])}}
            </div>
        </div>
        <div class = "form-group" align="center">
            {{Form:: label('last_name', 'Last Name')}}
            <div class= "col-md-6">
              {{Form:: text('last_name', '', ['class' => 'form-control input-md','placeholder' => 'Last Name'])}}
            </div>
        </div>
        <div class = "form-group" align="center">
            {{Form:: label('first_name', 'First Name')}}
            <div class= "col-md-6">
              {{Form:: text('first_name', '', ['class' => 'form-control input-md','placeholder' => 'First Name'])}}
            </div>
        </div>
            <div class ="form-group" align="center">
                {{Form:: label('faculty_type', 'Faculty Type')}}
            <div class="col-md-6">
                {{Form:: select('faculty_type',['Permanent' => 'Permanent', 'Part-Time' => 'Part-Time', 'Designee' => 'Designee'],null,['class' => 'form-control'])}}
            </div>
          </div>
          <div class ="form-group" align="center">
              {{Form:: label('expertise', 'Expertise')}}
            <div class="col-md-6">
                {{Form:: select('expertise',['Information Technology' => 'Information Technology', 'Accountancy' => 'Accountancy', 'Finance' => 'Finance', 'Entrepreneurship' =>'Entrepreneurship', 'Education' => 'Education', 'Hospitality Management' => 'Hospitality Management', 'General Education' => 'General Education'],null,['class' => 'form-control'])}}
            </div>
          </div>
          <div align = "center">
              <div class="col-md-6">
                  {{Form::button('Submit', ['type' => 'submit', 'class' => 'btn button-submit'])}}
                  {{Form::button('Reset', ['type' => 'reset','class' => 'btn button-reset'])}}
              </div>
            </div>
            {!! Form::close() !!}
							<div id="Layer1" align="left"><form>
                        <!-- Text input-->
                        <div class="form-group" align="left">
						<button id="rEdit" name="rEdit" class= "btn button-edit">Edit Professor/s</button>
                          <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Faculty ID</th>
      <th scope="col">Full Name</th>
	  <th scope="col">Faculty Type</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
	  <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
	  <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
	  <td></td>
      <td></td>
	  <td></td>
    </tr>
  </tbody>
</table>
                        </div>
        </form></div></div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<section>
  <div class="row"></div>
</section>
@endsection
