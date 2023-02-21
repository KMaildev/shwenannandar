@extends('layouts.main')
@section('title', '- Contact Us')
@section('content')

    <div class="feature-images-wrapper bg-gray section-space--ptb_100">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center">
                        <h6 class="section-sub-title mb-20">
                            Contact Us
                        </h6>
                        <h3 class="heading" style="font-size: 25px;">
                            If you have any queries about <span class="text-color-primary"> recruitments, vacancies,
                            </span>or anything else, our team is ready to
                            response all your queries.
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="feature-images__one">
                        <div class="row">

                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-01">
                                    <div class="image-box-wrap">
                                        <div class="box-image">
                                            <img class="img-fulid"
                                                src="assets/images/icons/mitech-box-image-style-01-image-01-100x108.webp"
                                                alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading" style="font-size: 20px;">
                                                09 425513562 <br>
                                                09 40884 5577,
                                                09 408855477
                                            </h5>
                                        </div>
                                        <div class="text">
                                            “If you have any queries <br> You can call now.”
                                        </div>
                                        <div class="circle-arrow">
                                            <div class="middle-dot"></div>
                                            <div class="middle-dot dot-2"></div>
                                            <a href="#">
                                                <i class="far fa-phone"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>

                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-01">
                                    <div class="image-box-wrap">
                                        <div class="box-image">
                                            <img class="img-fulid"
                                                src="assets/images/icons/mitech-box-image-style-01-image-02-100x108.webp"
                                                alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">
                                                info@shwenannandar.com
                                            </h5>
                                            <div class="text">
                                                “Have questions? <br> Shoot us an Email.”
                                                <br><br>
                                            </div>
                                            <div class="circle-arrow">
                                                <div class="middle-dot"></div>
                                                <div class="middle-dot dot-2"></div>
                                                <a href="mailto:info@shwenannandar.com">
                                                    <i class="far fa-envelope"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>

                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-01">
                                    <div class="image-box-wrap">
                                        <div class="box-image">
                                            <img class="img-fulid"
                                                src="assets/images/icons/mitech-box-image-style-01-image-03-100x108.webp"
                                                alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">
                                                Address
                                            </h5>
                                            <div class="text">
                                                No. 1682 Ground Floor, Tha Khin Lay Maung Street, 42. Qrt, Nouth Dagon
                                                Township, Yangon.
                                                <br>
                                            </div>
                                            <div class="circle-arrow">
                                                <div class="middle-dot"></div>
                                                <div class="middle-dot dot-2"></div>
                                                <a href="#">
                                                    <i class="far fa-map"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>

                        </div>
                    </div>

                    <div class="section-under-heading text-center section-space--mt_60 section-space--pt_30">Challenges are
                        just opportunities in disguise. <a href="#">Take the challenge!</a></div>

                </div>
            </div>
        </div>
    </div>


    <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-lg-6">
                    <div class="conact-us-wrap-one mb-30">
                        <h3 class="heading">To make requests for <br>further information, <br><span
                                class="text-color-primary">contact us</span> via our social channels. </h3>
                        <div class="sub-heading">
                            Alternatively, you may contact us by filling up the contact form. Our team will response you
                            shortly.
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-lg-6">
                    <div class="contact-form-wrap">
                        <form autocomplete="off" action="{{ route('contact.store') }}" method="POST" id="create-form">
                            @csrf
                            <div class="contact-form">
                                <div class="contact-input">
                                    <div class="contact-inner">
                                        <input class="form-control" type="text" value="{{ old('name') }}"
                                            placeholder="Your Name*" name="name">
                                        @error('name')
                                            <div class="invalid-feedback text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="contact-inner">
                                        <input class="form-control" type="email" name="email"
                                            value="{{ old('email') }}" placeholder="Email Address">
                                        @error('email')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="contact-inner">
                                    <input class="form-control" type="text" value="{{ old('phone') }}"
                                        placeholder="Your Phone*" name="phone">
                                    @error('phone')
                                        <div class="form-control-feedback" style="color: red;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="contact-inner">
                                    <input name="subject" type="text" value="{{ old('subject') }}"
                                        placeholder="Subject*">
                                    @error('subject')
                                        <div class="form-control-feedback" style="color: red;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="contact-inner contact-message">
                                    <textarea name="message" placeholder="Please describe what you need.">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="form-control-feedback" style="color: red;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="submit-btn mt-20">
                                    <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
