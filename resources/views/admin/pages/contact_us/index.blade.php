@extends('layouts.main')
@section('section')


<div class="container mt-5">
        <div class="row mt-5">
            
            <div class="col-md-6 mt-5">
                <div class="row mt-5 p-5">
                    <h4 class="fw-bold">Contact Us</h4>
                </div>
                <div class="row mt-3 p-2">
                    <h1>GET IN TOUCH WITH US</h1>

                </div>
                <div class="row m-3">
                    <div class="col-md-4">
                        <button type="button" class="btn btn-primary">
                        <i class="ti ti-home"></i>
                        </button>

                    </div>
                    <div class="col-md-8">
                        <h5 class="fw-bold">Our Location</h5>
                        <p>Mango, Jamshedpur, Jharkhand</p>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-md-4">
                        <button type="button" class="btn btn-primary">
                        <i class="ti ti-home"></i>
                        </button>

                    </div>
                    <div class="col-md-8">
                        <h5 class="fw-bold">Phone Number</h5>
                        <p>+91 914 2486 865</p>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-md-4">
                        <button type="button" class="btn btn-primary">
                             <i class="ti ti-home"></i>
                        </button>

                    </div>
                    <div class="col-md-8">
                        <h5 class="fw-bold">Whatsapp Number</h5>
                        <p>+91 914 2486 865</p>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-md-4">
                        <button type="button" class="btn btn-primary">
                          
                            <i class="ti ti-home"></i>
                        </button>

                    </div>
                    <div class="col-md-8">
                        <h5 class="fw-bold">Email Address</h5>
                        <p>contact@togoteams.com</p>
                    </div>
                </div>

            </div>
            <div class="col-md-6 mt-5">
                <div class="card mt-5 shadow p-3 mb-5 bg-body rounded">
                    <div class="card-body mt-5 ">

                    <form  id="form_data" action="{{ route('admin.contact-us.store') }}" method="post">
                    @csrf
                            <div class="form-group p-3">

                                <input type="text" class="form-control" id="yourName" name="yourName"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="form-group p-3">

                                <input type="text" class="form-control" id="yourPhone" name="yourPhone"
                                    placeholder="Your Phone">
                            </div>
                            <div class="form-group p-3">

                                <input type="email" class="form-control" id="yourEmail" name="yourEmail"
                                    placeholder="Your Email">
                            </div>
                            <div class="form-group p-3">

                                <select class="form-control" id="contactReason" name="contactReason">
                                    <option value="Select Contact Reason">Select Contact Reason</option>
                                    <option value="Inquiry">Inquiry</option>
                                    <option value="Feedback">Feedback</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="form-group p-3">

                                <textarea class="form-control" id="yourMessage" name="yourMessage" rows="4"
                                    placeholder="Your Message" required></textarea>
                            </div>
                            <div class="form-group p-3">

                                <button type="submit" class="btn btn-primary btn-block float-end">Send Message</button>

                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection