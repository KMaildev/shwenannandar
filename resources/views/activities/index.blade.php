@extends('layouts.main')
@section('title', '- Activities')
@section('content')
    <div class="feature-large-images-wrapper section-space--ptb_100">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_60">
                        <h6 class="section-sub-title mb-20">Our Activities</h6>
                        <h3 class="heading" style="font-size: 23px">
                            WE'VE DONE LOTS OF WORK, LET’S CHECK SOME <span class="text-color-primary"> ACTIVITIES HERE.
                            </span>
                        </h3>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        @foreach ($activities as $activitie)
                            @php
                                $values = explode(',', $activitie->gallery);
                            @endphp
                            @foreach ($values as $gallery)
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <!-- ht-box-icon Start -->
                                    <a href="{{ route('contact.index') }}" class="ht-large-box-images style-03">
                                        <div class="large-image-box">
                                            <div class="box-image">
                                                <div class="default-image">
                                                    <img class="img-fluid" src="{{ $gallery }}" alt=""
                                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="text" style="font-size: 18px;">
                                                    {{ $activitie->description ?? '' }}
                                                </div>
                                                <div class="box-images-arrow">
                                                    <span class="button-text">
                                                        Contact us
                                                    </span>
                                                    <i class="far fa-long-arrow-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- ht-box-icon End -->
                                </div>
                            @endforeach
                        @endforeach
                    </div>

                    <div class="section-under-heading text-center section-space--mt_20">Challenges are just opportunities in
                        disguise <a href="#">Take the challenge!</a></div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
