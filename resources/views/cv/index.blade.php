@extends('layouts.main')
@section('title', '- Submit CV')
@section('content')
    <div class="feature-images-wrapper bg-gray section-space--ptb_100">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center">
                        <h6 class="section-sub-title mb-20">
                            Apply for your job
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
                        Apply a Job You'll Love
                    </h3>
                    <hr>
                    <p style="font-size: 18px; font-weight: bold; font-style: italic">
                        Fill your informations and upload your CV.
                    </p>
                </div>
                <div class="col-lg-6 col-lg-6 py-5">
                    <div class="contact-form-wrap">
                        <form autocomplete="off" method="POST" action="{{ route('cv.store') }}"
                            enctype="multipart/form-data" id="create-form">
                            @csrf
                            <div class="row">

                                <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label>Name*</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label>Additional Note</label>
                                        <textarea class="form-control" rows="5" name="additional_note">{{ old('additional_note') }}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="img">Select your CV to upload</label> <br>
                                        <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                            class="form-control-file" />
                                        @error('attachment_file')
                                            <div class="text-danger">
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
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
