@extends('layout.appadmin')
@section('title')
  <title>Home | Administrator</title>
@endsection
@section('content')
<section class="features8 cid-qVUrhayPO8 mbr-parallax-background" id="features8-r">



    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="media-container-row">

            <div class="card  col-12 col-md-6 col-lg-4" style="background-color:transparent">
                <div class="card-img">
                    <span class="mbr-iconfont mbri-plus"></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">Add Subjects. Time and Professors</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       Manage the school year right with the tools to add subjects, time slots and professors to fulfill the scheduling system for this year!</p>
                    <div class="mbr-section-btn text-center"><a href="/admin/add" class="btn btn-secondary display-4">
                            Add</a></div>
                </div>
            </div>

            <div class="card  col-12 col-md-6 col-lg-4" style="background-color:transparent">
                <div class="card-img">
                    <a href=""><span class="mbr-iconfont mbri-clock"></span></a>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7"><a href="SchOv.html" class="text-white"><strong>
                        Schedule Time Slots</strong></a></h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       Schedule the courses and the sections' timeslots with FISS! Align the schedule of the students and the professors to avoid conflicts of schedule in both ends.</p>
                    <div class="mbr-section-btn text-center"><a href="/admin/prof-sched" class="btn btn-secondary display-4">Begin Scheduling</a></div>
                </div>
            </div>

            <div class="card  col-12 col-md-6 col-lg-4" style="background-color:transparent">
                <div class="card-img">
                    <span class="mbr-iconfont mbri-setting3"></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">View and Override Schedules</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       Conflicts of Schedule are bound to happen but if they do, you can override them and make sure that conflicts never happen and set the schedule right!</p>
                    <div class="mbr-section-btn text-center"><a href="/admin/stud-sched " class="btn btn-secondary display-4">View and Override</a></div>
                </div>
            </div>


        </div>
    </div>
</section>
@endsection