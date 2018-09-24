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
<div class="sidenav">
        <a href="/admin/add/room">Room</a>
        <a href="/admin/add/course">Course</a>
        <a href="/admin/add/subject">Subject</a>
        <a href="/admin/add/professor">Professor</a>
      </div>
      <div class="container">
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
    
      <div class= "col-md-6">
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
                    </form></div>	
    </div>
    </div>
</div>
<section>
  <div class="row"></div>
</section>
@endsection
