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
