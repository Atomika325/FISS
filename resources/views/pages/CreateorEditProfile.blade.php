@extends('layout.appprof')

@section('title')
  <title>Create/Edit Profile for Professor</title>
@endsection

@section('content')
<legend> &nbsp; 
  <p>&nbsp;
  
  </p></legend>
  
  </section>
  <div class="tab">
    <button class="tablinks" onClick="openCity(event, 'Profile')" id="defaultOpen">Profile</button>
    <button class="tablinks" onClick="openCity(event, 'avail')">Availability</button>
  </div>
  <div id="Profile" class="tabcontent">
      {!! Form::open(['action' => 'ProfessorProfilesController@store', 'method' =>'POST']) !!}
      <div class = "form-group" align="left">
          {{Form:: label('fac_pic', 'Faculty Picture')}}
          <div class= "col-md-6">
            {{Form:: file('fac_pic')}}
          </div>
      </div>
      <div class = "form-group" align="right">
          {{Form:: label('last_name', 'Last Name')}}
          <div class= "col-md-6">
            {{Form:: text('last_name', '', ['class' => 'form-control input-md','placeholder' => 'Last Name'])}}
          </div>
      </div>
    <div class = "form-group" align="right">
          {{Form:: label('first_name', 'First Name')}}
          <div class= "col-md-6">
            {{Form:: text('first_name', '', ['class' => 'form-control input-md','placeholder' => 'First Name'])}}
          </div>
      </div>
    <div class = "form-group" align="right">
          {{Form:: label('faculty_id', 'Faculty ID')}}
          <div class= "col-md-6">
            {{Form:: text('faculty_id', '', ['class' => 'form-control input-md','placeholder' => 'Faculty ID'])}}
          </div>
      </div>
    <div class = "form-group" align="right">
          {{Form:: label('email', 'Email Address')}}
          <div class= "col-md-6">
            {{Form:: text('email', '', ['class' => 'form-control input-md','placeholder' => 'Email Address'])}}
          </div>
      </div>
    <div class = "form-group" align="right">
          {{Form:: label('contact_no', 'Contact Number')}}
          <div class= "col-md-6">
            {{Form:: text('contact_no', '', ['class' => 'form-control input-md','placeholder' => 'Contact No.'])}}
          </div>
      </div>
    <div class = "form-group" align="right">
          {{Form:: label('pref_subj', 'Preferred Subject')}}
          <div class= "col-md-6">
            {{Form:: text('pref_subj', '', ['class' => 'form-control input-md','placeholder' => 'Preferred Subj'])}}
          </div>
      </div>
    <div class = "form-group" align="right">
          {{Form:: label('deg_grad', 'Degree Graduated')}}
          <div class= "col-md-6">
            {{Form:: text('deg gred', '', ['class' => 'form-control input-md','placeholder' => 'Degree Graduated'])}}
          </div>
      </div>
    <div class = "form-group" align="right">
          {{Form:: label('master_deg', 'Masters Degree')}}
          <div class= "col-md-6">
            {{Form:: text('master_deg', '', ['class' => 'form-control input-md','placeholder' => 'Masters Degree'])}}
          </div>
      </div>
    <div class = "form-group" align="right">
          {{Form:: label('doctor_deg', 'Doctorate Degree')}}
          <div class= "col-md-6">
            {{Form:: text('doctor_deg', '', ['class' => 'form-control input-md','placeholder' => 'Doctorate Degree'])}}
          </div>
      </div>
    <div class = "form-group" align="right">
          {{Form:: label('faculty_type', 'Faculty Type')}}
          <div class= "col-md-6">
            {{Form:: text('faculty_type', '', ['class' => 'form-control input-md','placeholder' => 'Faculty Type'])}}
          </div>
      </div>
                <div class ="form-group" align="right">
                    {{Form:: label('faculty_type', 'Faculty Type')}}
                <div class="col-md-6">
                    {{Form:: select('faculty_type',['Permanent' => 'Permanent', 'Part-Time' => 'Part-Time', 'Designee' => 'Designee'],null,['class' => 'form-control'])}}
                </div>
              </div>
      <div align = "center">
        <div class="col-md-6">
            {{Form::button('Submit', ['type' => 'submit', 'class' => 'btn button-submit'])}}
            {{Form::button('Reset', ['type' => 'reset','class' => 'btn button-reset'])}}
        </div>
      </div>
      {!! Form::close() !!}                 </form><form>
          <legend>Courses Faculty can Teach</legend>
  
                          <!-- Text input-->
                          <div class="form-group" align="right">
                            <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Description</th>
        <th scope="col">Proficiency</th>
        <th scope="col">Units</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td></td>
        <td></td>
        <td></td>
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
          </form>
            <div class="form-group">
                            <label class="col-md-4 control-label" for="pSub"></label>
                            <div class="col-md-8">
                              <button id="pSubmit" name="pSubmit" class= "btn btn-alert" style="background-color: green;" >Save</button>
                              <button id="pRes" name="pRes" class="btn btn-danger">Edit</button>
                            </div>
                          </div>
  </div>
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
  document.getElementById("defaultOpen").click();
  </script>
  
  @endsection