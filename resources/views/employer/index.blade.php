@extends('layouts.main')
@section('title', '- Employer Form')
@section('content')

    <div class="feature-images-wrapper bg-gray section-space--ptb_100">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center">
                        <h6 class="section-sub-title mb-20">
                            Employer Application Form
                        </h6>
                        <h3 class="heading" style="font-size: 25px;">
                            Our Shwe Nan Nandar Co.,Ltd Agency Sent <span class="text-color-primary">
                                Many Workers To aborad</span> by given them good training and leading
                            provice of human resource development service.
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
        <div class="container">
            <div class="row align-items-center d-flex justify-content-center">
                <div class="col-lg-8 col-lg-8">
                    <h3 class="text-theme-colored1 mt-0 pt-10" style="font-size: 30px;">
                        Employer Application Form
                    </h3>
                    <hr>
                    <p style="font-size: 18px; font-weight: bold; font-style: italic">
                        ALTERNATIVELY, YOU MAY CONTACT US BY FILLING UP THE CONTACT FORM. OUR TEAM WILL RESPONSE
                        YOU SHORTLY.
                    </p>
                </div>
                <div class="col-lg-6 col-lg-6 py-5">
                    <div class="contact-form-wrap">
                        <form autocomplete="off" method="POST" action="{{ route('employer.store') }}" id="create-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Company Name</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('company_name') is-invalid @enderror"
                                            placeholder="Company Name" name="company_name"
                                            value="{{ old('company_name') }}">
                                        @error('company_name')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Type of Company</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('company_type') is-invalid @enderror"
                                            placeholder="Type Of Company" name="company_type"
                                            value="{{ old('company_type') }}">
                                        @error('company_type')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Company Email
                                            Address</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Company Email Address" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Company Phone
                                            Number</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            placeholder="Company Phone Number" name="phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Company Website</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('website') is-invalid @enderror"
                                            placeholder="Company Website" name="website" value="{{ old('website') }}">
                                        @error('website')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Company Location</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('location') is-invalid @enderror"
                                            placeholder="Company Location" name="location" value="{{ old('location') }}">
                                        @error('location')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Job Category</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('job_category') is-invalid @enderror"
                                            placeholder="Job Category" name="job_category"
                                            value="{{ old('job_category') }}">
                                        @error('job_category')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Age Limit: 20-40</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('age_limit') is-invalid @enderror"
                                            placeholder="Age Limit: 20-40" name="age_limit"
                                            value="{{ old('age_limit') }}">
                                        @error('age_limit')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Educational
                                            Requirement</label>
                                        <textarea class="form-control @error('educational_requirement') is-invalid @enderror" name="educational_requirement"
                                            placeholder="Educational Requirement">{{ old('educational_requirement') }}</textarea>
                                        @error('educational_requirement')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">
                                            Working Experience Requirement
                                        </label>
                                        <textarea class="form-control @error('working_experience_requirement') is-invalid @enderror"
                                            name="working_experience_requirement" placeholder="Working Experience Requirement">{{ old('working_experience_requirement') }}</textarea>
                                        @error('working_experience_requirement')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Other Additional
                                            Requirement</label>
                                        <textarea class="form-control @error('other_additional_requirement') is-invalid @enderror"
                                            name="other_additional_requirement" placeholder="Other Additional Requirement">{{ old('other_additional_requirement') }}</textarea>
                                        @error('other_additional_requirement')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Estimate Salary
                                            Offer</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('estimate_salary_offer') is-invalid @enderror"
                                            placeholder="Estimate Salary Offer" name="estimate_salary_offer"
                                            value="{{ old('estimate_salary_offer') }}">
                                        @error('estimate_salary_offer')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Other Allowance</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('other_allowance') is-invalid @enderror"
                                            placeholder="Other Allowance" name="other_allowance"
                                            value="{{ old('other_allowance') }}">
                                        @error('other_allowance')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Gender: Male = 10, Female
                                            =
                                            5</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('gender') is-invalid @enderror"
                                            placeholder="Gender: Male = 10, Female = 5" name="gender"
                                            value="{{ old('gender') }}">
                                        @error('gender')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Interview Type</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('interview_type') is-invalid @enderror"
                                            placeholder="Interview Type: Online" name="interview_type"
                                            value="{{ old('interview_type') }}">
                                        @error('interview_type')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit"
                                        class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px"
                                        data-loading-text="Please wait...">
                                        Apply Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreEmployer', '#create-form') !!}
@endsection
