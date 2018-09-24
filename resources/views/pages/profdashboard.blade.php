@extends('layout.appprof')

@section('title')
  <title>Home | Professor</title>
@endsection

@section('content')
<section class="features8 cid-qVXbYHjDiF mbr-parallax-background" id="features8-24">



    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(128, 0, 0);">
    </div>

    <div class="container">
        <div class="media-container-row">

            <div class="card  col-12 col-md-6 col-lg-4" style="background-color: transparent">
                <div class="card-img">
                    <span class="mbr-iconfont mbri-plus"></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">Update your Profile</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       Define your schedule and let the administrator know to set your work load this semester!
					   </p>
                    <div class="mbr-section-btn text-center"><a href="professor/profile" class="btn btn-secondary display-4">
                            Go to Profile</a></div>
                </div>
            </div>


            <div class="card  col-12 col-md-6 col-lg-4" style="background-color: transparent">
                <div class="card-img">
                    <span class="mbr-iconfont mbri-setting3"></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">View Schedule</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        See your assigned schedule this semester
                      </p>
                    <div class="mbr-section-btn text-center"><a href="professor/schedule" class="btn btn-secondary display-4">View your Schedule</a></div>
                </div>
            </div>


        </div>
    </div>
</section>
@endsection