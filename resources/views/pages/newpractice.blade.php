@extends('layout.appadmin')

@section('title')
  <title>Add Home Page</title>
@endsection
@section('content')
<legend> &nbsp; 
<p>&nbsp;

</p></legend>

</section>
<div class="tab">
  <button class="tablinks" onClick="openCity(event, 'Room')" id="defaultOpen">Room</button>
  <button class="tablinks" onClick="openCity(event, 'Time')">Time</button>
  <button class="tablinks" onClick="openCity(event, 'Subject')">Subject</button>
  <button class="tablinks" onClick="openCity(event, 'Professor')">Professor</button>
</div>

<div id="Room" class="tabcontent">
  <h3>Add a Room</h3>
  <p><form>
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="roomno">Room no</label>
                                <div class="col-md-8">
                                  <input id="roomno" name="roomno" type="text" placeholder="Room no" class="form-control input-md"></div></div>
                            <button id="rSubmit" name="rSubmit" class= "btn button-submit">Submit</button>
							<button id="vRooms" name="vRooms" class= "btn button-submit">View Rooms</button>

                          </form></p>
</div>

<div id="Time" class="tabcontent">
  <h3>Add Time</h3>
  <p><form>
                                <div class="form-group">
                                        <label class="col-md-4 control-label" for="tStart">Time Start</label>
                                        <div class="col-md-4">
                                          <select id="tStart" name="tStart" class="form-control">
                                            <option value="1">8:00 AM</option>
                                            <option value="2">8:30 AM</option>
                                            <option value="3">9:00 AM</option>
                                          </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-4 control-label" for="tEnd">Time End</label>
                                        <div class="col-md-4">
                                          <select id="tEnd" name="tEnd" class="form-control">
                                            <option value="1">7:00 PM</option>
                                            <option value="2">7:30 PM</option>
                                            <option value="3">8:00 PM</option>
                                          </select>
                                        </div>
                                </div>
                            <button id="tSubmit" name="tSubmit" class= "btn button-submit">Submit</button>
                        </form>
  </p> 
</div>

<div id="Subject" class="tabcontent">
  <h3>Add Subject</h3>
  <p>
  <form>

                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-md-8 control-label" for="sCode">Subject Code</label>
                                <div class="col-md-8">
                                  <input id="sCode" name="sCode" type="text" placeholder="Subject Code" class="form-control input-md" required=""></div></div>
                                  <div class="form-group"><div class="col-md-8"><span style="font-size: 1rem;">Subject Name</span></div></div><div class="form-group"><div class="col-md-8">
                                    <input id="sName" name="sName" type="text" placeholder="Subject Name" class="form-control input-md" required="">

                                  </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                  <label class="col-md-8 control-label" for="sPrereq">Prerequisites</label>
                                  <div class="col-md-8">
                                    <select id="sPrereq" name="sPrereq" class="form-control">
                                      <option value="1">Option one</option>
                                      <option value="2">Option two</option>
                                    </select>
                                  </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                  <label class="col-md-8 control-label" for="cAffiliated">Course Affiliated</label>
                                  <div class="col-md-8">
                                    <select id="cAffiliated" name="cAffiliated" class="form-control">
                                      <option value="1">Information Technology</option>
                                      <option value="2">Accountancy</option>
                                      <option value="3">Finance</option>
                                      <option value="4">Education</option>
                                      <option value="5">Entrepreneurship</option>
                                      <option value="6">Hospitality Management</option>
                                      <option value="7">General Education</option>
                                    </select>
                                  </div>
                                </div>

                                <!-- Multiple Radios -->
                                <div class="form-group">
                                  <label class="col-md-8 control-label" for="sUnits">Subject Units</label>
                                  <div class="col-md-8">
                                    <div class="radio">
                                      <label for="sUnits-0">
                                        <input type="radio" name="sUnits" id="sUnits-0" value="1" checked="checked">
                                        3
                                      </label>
                                    </div>
                                    <div class="radio">
                                      <label for="sUnits-1">
                                        <input type="radio" name="sUnits" id="sUnits-1" value="2">
                                        5
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                  <button id="sSubmit" name="sSubmit" class= "btn button-submit">Submit</button>
								  <button id="sSubmit" name="sSubmit" class= "btn button-submit">View Subjects</button>
  </form>
</div>
                  </div>
                </div>
              </div></p>
</div>
<div id="Professor" class="tabcontent">
  <h3>Add Professor</h3>
  <p><form>
                              <div class="form-group">
                                <form class="form-horizontal">
                                  <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-8 control-label" for="fID">Faculty ID</label>
                                      <div class="col-md-8">
                                        <input id="fID" name="fID" type="text" placeholder="Faculty ID" class="form-control input-md" required="">
                        
                                      </div>
                                    </div>
                        
                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-8 control-label" for="proflName">Last Name</label>
                                      <div class="col-md-8">
                                        <input id="proflName" name="proflName" type="text" placeholder="Last Name" class="form-control input-md" required="">
                        
                                      </div>
                                    </div>
                        
                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-8 control-label" for="proffName">First Name</label>
                                      <div class="col-md-8">
                                        <input id="proffName" name="proffName" type="text" placeholder="First Name" class="form-control input-md" required="">
                        
                                      </div>
                                    </div>
                        
                                    <!-- Select Basic -->
                                    <div class="form-group">
                                      <label class="col-md-8 control-label" for="fType">Faculty Type</label>
                                      <div class="col-md-8">
                                        <select id="fType" name="fType" class="form-control">
                                          <option value="1">Full-time</option>
                                          <option value="2">Part-time</option>
                                        </select>
                                      </div>
                                    </div>
                        
                                    <!-- Select Basic -->
                                    <div class="form-group">
                                      <label class="col-md-8 control-label" for="fExp">Expertise</label>
                                      <div class="col-md-8">
                                        <select id="fExp" name="fExp" class="form-control">
                                          <option value="1">Accountancy</option>
                                          <option value="2">Information Technology</option>
                                          <option value="3">Finance</option>
                                          <option value="4">Entrepreneurship</option>
                                          <option value="5">Education</option>
                                          <option value="6">Hospitality Management</option>
                                          <option value="7">General Education</option>
                                        </select>
                                      </div>
                                    </div>
                        
                                    <button id="rSubmit" name="pSubmit" class= "btn button-submit">Submit</button>
									<button id="rSubmit" name="pSubmit" class= "btn button-submit">View Professors</button>
                              </fieldset>
                            </form>
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

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<section>
  <div class="row"></div>
</section>
@endsection
