@extends('layout.appprof')

@section('title')
  <title>Create/Edit Profile for Professor</title>
@endsection

@section('content')
<section class="header1 cid-qW5p6o4rHb mbr-parallax-background" id="header1-2f">



      <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(0, 0, 0);">
      </div>

      <div class="container">
        <div class="row justify-content-md-center">
          <div class="mbr-white col-md-10">
            <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-2">
              Profile</h1>

              <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">
                Make life of the administrators easy with your profile to let them know of your availability</p>

          </div>
        </div>
      </div>

        </section>

        <section style="margin: 20px; background-color: rgb(255, 255, 255);" class="mbr-section--bg-adapted mbr-section--relative" id="deltapiformeditor-2h" data-rv-view="209">

          <div class="dpform">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-offset-1">


                  <style>.dpform{text-align:left;}</style>

                  <div style="background-color: rgb(255, 255, 255);">
                    <div style="background-color: rgb(255, 255, 255);"><form class="form-horizontal">
                      <fieldset>

                        <!-- Form Name -->
                        <legend>Profile</legend>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="pFname">First Name</label>
                          <div class="col-md-4">
                            <input id="pFname" name="pFname" type="text" maxlength="15" placeholder="Enter First Name" class="form-control input-md" required="">

                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="pLastname">Last Name</label>
                          <div class="col-md-4">
                            <input name="pLastname" type="text" class="form-control input-md" id="pLastname" maxlength="15" placeholder="Enter Last Name" required="">
                          </div>
                        </div>

						<!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="pCStudied">Faculty ID</label>
                          <div class="col-md-4">
                            <input id="pCStudied" name="facID" type="text" placeholder="" class="form-control input-md" required="">

                          </div>
                        </div>
						
                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="pEmail">Email Address</label>
                          <div class="col-md-4">
                            <input id="pEmail" name="pEmail" type="text" placeholder="Enter Email Address" class="form-control input-md">

                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="pContactNo.">Contact No.</label>
                          <div class="col-md-4">
                            <input id="pContactNo." name="pContactNo." type="text" placeholder="Enter Contact No." class="form-control input-md" required="">

                          </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="hEAttained">Highest Educational Attainment</label>
                          <div class="col-md-4">
                            <select id="hEAttained" name="hEAttained" class="form-control">
                              <option value="1">College Graduate</option>
                              <option value="2">Masters Undergraduate</option>
                              <option value="3">Masters Graduate</option>
                              <option value="4">Doctorate Undergraduate</option>
                              <option value="5">Doctorate Graduate</option>
                            </select>
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="pNSLA">Name of Last School Attended</label>
                          <div class="col-md-4">
                            <input id="pNSLA" name="pNSLA" type="text" placeholder="" class="form-control input-md" required="">

                          </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="pSpecialty">Primary Specialty</label>
                          <div class="col-md-4">
                            <select id="pSpecialty" name="pSpecialty" class="form-control">
                              <option value="1">Information Technology</option>
                              <option value="2">Accountancy</option>
                              <option value="3">Finance</option>
                              <option value="4">Entrepreneurship</option>
                              <option value="5">Education</option>
                              <option value="6">Hospitality Management</option>
                              <option value="7">General Education</option>
                              <option value="8">Others</option>
                            </select>
                          </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="psSpecialty">Secondary Specialty</label>
                          <div class="col-md-4">
                            <select id="psSpecialty" name="psSpecialty" class="form-control">
                              <option value="1">Information Technology</option>
                              <option value="2">Accountancy</option>
                              <option value="3">Finance</option>
                              <option value="4">Entrepreneurship</option>
                              <option value="5">Education</option>
                              <option value="6">Hospitality Management</option>
                              <option value="7">General Education</option>
                              <option value="8">Others</option>
                              <option value="9">N/A</option>
                            </select>
                          </div>
                        </div>
						<!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="prfSubjl">Preferred Subjects</label>
                          <div class="col-md-4">
                            <input id="prfSubj" name="prfSubj" type="text" size="2" maxlength="2" placeholder="" class="form-control input-md" required="">

                          </div>
                        </div>

            						<!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="pCStudied">Maximum Faculty Load</label>
                          <div class="col-md-4">
                            <input id="pCStudied" name="pCStudied" type="text" size="2" maxlength="2" placeholder="" class="form-control input-md" required="">

                          </div>
                        </div>
                            <!-- Button (Double) -->
                          <div class="form-group">
                          <label class="col-md-4 control-label" for="pSub"></label>
                          <div class="col-md-8">
                            <button id="pSubmit" name="pSubmit" class= "btn btn-alert" style="background-color: green;" >Save</button>
                            <button id="pRes" name="pRes" class="btn btn-danger">Edit</button>
                          </div>
                        </div>

                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-md-offset-1">
      
<ggez>
					<form>
					<img src="user-add-icon.png" height="150" width="150" class="img-circle" alt="Cinque Terre">
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload a Photo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
                    <!-- Form Name -->
                    <legend>Availability</legend><legend align="center">Time range</legend>

                    <!-- Multiple Checkboxes (inline) -->
                    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" align=""value="option1">
  <label class="form-check-label" for="inlineCheckbox1">MON</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	&nbsp&nbsp&nbsp&nbsp;
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">TUE</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	&nbsp&nbsp&nbsp&nbsp
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">WED</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	&nbsp&nbsp&nbsp&nbsp
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox3">THU</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	&nbsp&nbsp&nbsp&nbsp
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox4">FRI</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	&nbsp&nbsp&nbsp&nbsp
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox5">SAT</label>
    <input id="pCStudied" name="pCStudied" type="text" size="9" class="form-control input-md" required="">
	&nbsp&nbsp&nbsp&nbsp
	  <input id="pCStudied" name="pCStudied" type="text" size="9"class="form-control input-md" required="">
</div>
</ggez>
               </form>
				<form>
				<legend>Courses Faculty can Teach</legend>

                        <!-- Text input-->
                        <div class="form-group" align="right">
						<button type="button"class="btn btn-primary">Edit Courses</button>
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
@endsection