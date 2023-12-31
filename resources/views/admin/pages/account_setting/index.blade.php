@extends('layouts.main')
@section('section')
    <!-- Main wrapper -->
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-light-info shadow-none position-relative overflow-hidden">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Account Setting</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a class="text-muted" href="index-2.html">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Account Setting</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-3">
                            <div class="text-center mb-n5">
                                <img src="../../dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                            id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pills-account" type="button"
                            role="tab" aria-controls="pills-account" aria-selected="true">
                            <i class="ti ti-user-circle me-2 fs-6"></i>
                            <span class="d-none d-md-block">Account</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                            id="pills-notifications-tab" data-bs-toggle="pill" data-bs-target="#pills-notifications"
                            type="button" role="tab" aria-controls="pills-notifications" aria-selected="false">
                            <i class="ti ti-bell me-2 fs-6"></i>
                            <span class="d-none d-md-block">Notifications</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                            id="pills-bills-tab" data-bs-toggle="pill" data-bs-target="#pills-bills" type="button"
                            role="tab" aria-controls="pills-bills" aria-selected="false">
                            <i class="ti ti-article me-2 fs-6"></i>
                            <span class="d-none d-md-block">Bills</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                            id="pills-security-tab" data-bs-toggle="pill" data-bs-target="#pills-security" type="button"
                            role="tab" aria-controls="pills-security" aria-selected="false">
                            <i class="ti ti-lock me-2 fs-6"></i>
                            <span class="d-none d-md-block">Security</span>
                        </button>
                    </li>
                </ul>
                <div class="card-body">

                    @foreach ($users as $key => $user)
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-account" role="tabpanel"
                                aria-labelledby="pills-account-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 d-flex align-items-stretch">
                                        <div class="card w-100 position-relative overflow-hidden">
                                            <div class="card-body p-4">
                                                <h5 class="card-title fw-semibold">Change Profile</h5>
                                                <p class="card-subtitle mb-4">Change your profile picture from here</p>
                                                <div class="text-center">
                                                    <img src="../../dist/images/profile/user-1.jpg" alt=""
                                                        class="img-fluid rounded-circle" width="120" height="120">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center my-4 gap-3">
                                                        <button class="btn btn-primary">Upload</button>
                                                        <button class="btn btn-outline-danger">Reset</button>
                                                    </div>
                                                    <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-stretch">
                                        <div class="card w-100 position-relative overflow-hidden">
                                            <div class="card-body p-4">
                                                <h5 class="card-title fw-semibold">Change Password</h5>
                                                <p class="card-subtitle mb-4">To change your password please confirm here
                                                </p>
                                                <form>
                                                    <div class="mb-4">
                                                        <label for="exampleInputPassword1"
                                                            class="form-label fw-semibold">Current Password</label>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputPassword1" value="12345678910">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="exampleInputPassword1"
                                                            class="form-label fw-semibold">New Password</label>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputPassword1" value="12345678910">
                                                    </div>
                                                    <div class="">
                                                        <label for="exampleInputPassword1"
                                                            class="form-label fw-semibold">Confirm Password</label>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputPassword1" value="12345678910">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card w-100 position-relative overflow-hidden mb-0">
                                            <div class="card-body p-4">
                                                <h5 class="card-title fw-semibold">Personal Details</h5>
                                                <p class="card-subtitle mb-4">To change your personal detail , edit and
                                                    save from here</p>
                                                <form action="" method="post">
                                                    @csrf()
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-4">
                                                                <label for="exampleInputPassword1"
                                                                    class="form-label fw-semibold">Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputtext" placeholder="Mathew Anderson">
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="exampleInputPassword1"
                                                                    class="form-label fw-semibold">Location</label>
                                                                <select class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option selected>United Kingdom</option>
                                                                    <option value="1">United States</option>
                                                                    <option value="2">United Kingdom</option>
                                                                    <option value="3">India</option>
                                                                    <option value="3">Russia</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="exampleInputPassword1"
                                                                    class="form-label fw-semibold">Email</label>
                                                                <input type="email" class="form-control"
                                                                    id="exampleInputtext"
                                                                    placeholder="info@modernize.com">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">

                                                            <div class="mb-4">
                                                                <label for="exampleInputPassword1"
                                                                    class="form-label fw-semibold">Phone</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputtext" placeholder="+91 12345 65478">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="">
                                                                <label for="exampleInputPassword1"
                                                                    class="form-label fw-semibold">Address</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputtext"
                                                                    placeholder="814 Howard Street, 120065, India">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex align-items-center justify-content-end mt-4 gap-3">
                                                                <button class="btn btn-primary">Save</button>
                                                                <button
                                                                    class="btn btn-light-danger text-danger">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="pills-notifications" role="tabpanel"
                    aria-labelledby="pills-notifications-tab" tabindex="0">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h4 class="fw-semibold mb-3">Notification Preferences</h4>
                                    <p>
                                        Select the notificaitons ou would like to receive via email. Please note that you
                                        cannot opt out of receving service
                                        messages, such as payment, security or legal notifications.
                                    </p>
                                    <form class="mb-7">
                                        <label for="exampleInputPassword1" class="form-label fw-semibold">Email
                                            Address*</label>
                                        <input type="text" class="form-control" id="exampleInputtext" placeholder=""
                                            required>
                                        <p class="mb-0">Required for notificaitons.</p>
                                    </form>
                                    <div class="">
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="d-flex align-items-center gap-3">
                                                <div
                                                    class="bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-article text-dark d-block fs-7" width="22"
                                                        height="22"></i>
                                                </div>
                                                <div>
                                                    <h5 class="fs-4 fw-semibold">Our newsletter</h5>
                                                    <p class="mb-0">We'll always let you know about important changes</p>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch mb-0">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="d-flex align-items-center gap-3">
                                                <div
                                                    class="bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-checkbox text-dark d-block fs-7" width="22"
                                                        height="22"></i>
                                                </div>
                                                <div>
                                                    <h5 class="fs-4 fw-semibold">Order Confirmation</h5>
                                                    <p class="mb-0">You will be notified when customer order any product
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch mb-0">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked" checked>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="d-flex align-items-center gap-3">
                                                <div
                                                    class="bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-clock-hour-4 text-dark d-block fs-7" width="22"
                                                        height="22"></i>
                                                </div>
                                                <div>
                                                    <h5 class="fs-4 fw-semibold">Order Status Changed</h5>
                                                    <p class="mb-0">You will be notified when customer make changes to
                                                        the order</p>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch mb-0">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked" checked>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="d-flex align-items-center gap-3">
                                                <div
                                                    class="bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-truck-delivery text-dark d-block fs-7" width="22"
                                                        height="22"></i>
                                                </div>
                                                <div>
                                                    <h5 class="fs-4 fw-semibold">Order Delivered</h5>
                                                    <p class="mb-0">You will be notified once the order is delivered</p>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch mb-0">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3">
                                                <div
                                                    class="bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-mail text-dark d-block fs-7" width="22"
                                                        height="22"></i>
                                                </div>
                                                <div>
                                                    <h5 class="fs-4 fw-semibold">Email Notification</h5>
                                                    <p class="mb-0">Turn on email notificaiton to get updates through
                                                        email</p>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch mb-0">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked" checked>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h4 class="fw-semibold mb-3">Date & Time</h4>
                                    <p>Time zones and calendar display settings.</p>
                                    <div class="d-flex align-items-center justify-content-between mt-7">
                                        <div class="d-flex align-items-center gap-3">
                                            <div
                                                class="bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-clock-hour-4 text-dark d-block fs-7" width="22"
                                                    height="22"></i>
                                            </div>
                                            <div>
                                                <p class="mb-0">Time zone</p>
                                                <h5 class="fs-4 fw-semibold">(UTC + 02:00) Athens, Bucharet</h5>
                                            </div>
                                        </div>
                                        <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                                            href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Download">
                                            <i class="ti ti-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h4 class="fw-semibold mb-3">Ignore Tracking</h4>
                                    <div class="d-flex align-items-center justify-content-between mt-7">
                                        <div class="d-flex align-items-center gap-3">
                                            <div
                                                class="bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-player-pause text-dark d-block fs-7" width="22"
                                                    height="22"></i>
                                            </div>
                                            <div>
                                                <h5 class="fs-4 fw-semibold">Ignore Browser Tracking</h5>
                                                <p class="mb-0">Browser Cookie</p>
                                            </div>
                                        </div>
                                        <div class="form-check form-switch mb-0">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckChecked">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-end gap-3">
                                <button class="btn btn-primary">Save</button>
                                <button class="btn btn-light-danger text-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-bills" role="tabpanel" aria-labelledby="pills-bills-tab"
                    tabindex="0">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h4 class="fw-semibold mb-3">Billing Information</h4>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label fw-semibold">Business Name*</label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="Visitor Analytics">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label fw-semibold">Business Address*</label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="">
                                                </div>
                                                <div class="">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label fw-semibold">First Name*</label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label fw-semibold">Business Sector*</label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="Arts, Media & Entertainment">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label fw-semibold">Country*</label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="Romania">
                                                </div>
                                                <div class="">
                                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Last
                                                        Name*</label>
                                                    <input type="text" class="form-control" id="exampleInputtext"
                                                        placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h4 class="fw-semibold mb-3">Current Plan : <span
                                            class="text-success">Executive</span></h4>
                                    <p>Thanks for being a premium member and supporting our development.</p>
                                    <div class="d-flex align-items-center justify-content-between mt-7 mb-3">
                                        <div class="d-flex align-items-center gap-3">
                                            <div
                                                class="bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-package text-dark d-block fs-7" width="22"
                                                    height="22"></i>
                                            </div>
                                            <div>
                                                <p class="mb-0">Current Plan</p>
                                                <h5 class="fs-4 fw-semibold">750.000 Monthly Visits</h5>
                                            </div>
                                        </div>
                                        <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                                            href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Add">
                                            <i class="ti ti-circle-plus"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center gap-3">
                                        <button class="btn btn-primary">Change Plan</button>
                                        <button class="btn btn-outline-danger">Reset Plan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h4 class="fw-semibold mb-3">Payment Method</h4>
                                    <p>On 26 December, 2023</p>
                                    <div class="d-flex align-items-center justify-content-between mt-7">
                                        <div class="d-flex align-items-center gap-3">
                                            <div
                                                class="bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-credit-card text-dark d-block fs-7" width="22"
                                                    height="22"></i>
                                            </div>
                                            <div>
                                                <h5 class="fs-4 fw-semibold">Visa</h5>
                                                <p class="mb-0 text-dark">*****2102</p>
                                            </div>
                                        </div>
                                        <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                                            href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Edit">
                                            <i class="ti ti-pencil-minus"></i>
                                        </a>
                                    </div>
                                    <p class="my-2">If you updated your payment method, it will only be dislpayed here
                                        after your next billing cycle.</p>
                                    <div class="d-flex align-items-center gap-3">
                                        <button class="btn btn-outline-danger">Cancel Subscription</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-end gap-3">
                                <button class="btn btn-primary">Save</button>
                                <button class="btn btn-light-danger text-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-security" role="tabpanel" aria-labelledby="pills-security-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h4 class="fw-semibold mb-3">Two-factor Authentication</h4>
                                    <div class="d-flex align-items-center justify-content-between pb-7">
                                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Corporis sapiente sunt earum officiis laboriosam ut.</p>
                                        <button class="btn btn-primary">Enable</button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-3 border-top">
                                        <div>
                                            <h5 class="fs-4 fw-semibold mb-0">Authentication App</h5>
                                            <p class="mb-0">Google auth app</p>
                                        </div>
                                        <button class="btn btn-light-primary text-primary">Setup</button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-3 border-top">
                                        <div>
                                            <h5 class="fs-4 fw-semibold mb-0">Another e-mail</h5>
                                            <p class="mb-0">E-mail to send verification link</p>
                                        </div>
                                        <button class="btn btn-light-primary text-primary">Setup</button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-3 border-top">
                                        <div>
                                            <h5 class="fs-4 fw-semibold mb-0">SMS Recovery</h5>
                                            <p class="mb-0">Your phone number or something</p>
                                        </div>
                                        <button class="btn btn-light-primary text-primary">Setup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body p-4">
                                    <div
                                        class="bg-light rounded-1 p-6 d-inline-flex align-items-center justify-content-center mb-3">
                                        <i class="ti ti-device-laptop text-primary d-block fs-7" width="22"
                                            height="22"></i>
                                    </div>
                                    <h5 class="fs-5 fw-semibold mb-0">Devices</h5>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit Rem.</p>
                                    <button class="btn btn-primary mb-4">Sign out from all devices</button>
                                    <div class="d-flex align-items-center justify-content-between py-3 border-bottom">
                                        <div class="d-flex align-items-center gap-3">
                                            <i class="ti ti-device-mobile text-dark d-block fs-7" width="26"
                                                height="26"></i>
                                            <div>
                                                <h5 class="fs-4 fw-semibold mb-0">iPhone 14</h5>
                                                <p class="mb-0">London UK, Oct 23 at 1:15 AM</p>
                                            </div>
                                        </div>
                                        <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                                            href="javascript:void(0)">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between py-3">
                                        <div class="d-flex align-items-center gap-3">
                                            <i class="ti ti-device-laptop text-dark d-block fs-7" width="26"
                                                height="26"></i>
                                            <div>
                                                <h5 class="fs-4 fw-semibold mb-0">Macbook Air</h5>
                                                <p class="mb-0">Gujarat India, Oct 24 at 3:15 AM</p>
                                            </div>
                                        </div>
                                        <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                                            href="javascript:void(0)">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                    </div>
                                    <button class="btn btn-light-primary text-primary w-100 py-1">Need Help ?</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-end gap-3">
                                <button class="btn btn-primary">Save</button>
                                <button class="btn btn-light-danger text-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    </div>
    <!--  Shopping Cart -->
    <div class="offcanvas offcanvas-end shopping-cart" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header py-4">
            <h5 class="offcanvas-title fs-5 fw-semibold" id="offcanvasRightLabel">Shopping Cart</h5>
            <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
        </div>
        <div class="offcanvas-body h-100 px-4 pt-0" data-simplebar>
            <ul class="mb-0">
                <li class="pb-7">
                    <div class="d-flex align-items-center">
                        <img src="../../dist/images/products/product-1.jpg" width="95" height="75"
                            class="rounded-1 me-9 flex-shrink-0" alt="" />
                        <div>
                            <h6 class="mb-1">Supreme toys cooker</h6>
                            <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                            <div class="d-flex align-items-center justify-content-between mt-2">
                                <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                                <div class="input-group input-group-sm w-50">
                                    <button class="btn border-0 round-20 minus p-0 bg-light-success text-success "
                                        type="button" id="add1"> - </button>
                                    <input type="text"
                                        class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty"
                                        placeholder="" aria-label="Example text with button addon"
                                        aria-describedby="add1" value="1" />
                                    <button class="btn text-success bg-light-success  p-0 round-20 border-0 add"
                                        type="button" id="addo2"> + </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="pb-7">
                    <div class="d-flex align-items-center">
                        <img src="../../dist/images/products/product-2.jpg" width="95" height="75"
                            class="rounded-1 me-9 flex-shrink-0" alt="" />
                        <div>
                            <h6 class="mb-1">Supreme toys cooker</h6>
                            <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                            <div class="d-flex align-items-center justify-content-between mt-2">
                                <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                                <div class="input-group input-group-sm w-50">
                                    <button class="btn border-0 round-20 minus p-0 bg-light-success text-success "
                                        type="button" id="add2"> - </button>
                                    <input type="text"
                                        class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty"
                                        placeholder="" aria-label="Example text with button addon"
                                        aria-describedby="add2" value="1" />
                                    <button class="btn text-success bg-light-success  p-0 round-20 border-0 add"
                                        type="button" id="addon34"> + </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="pb-7">
                    <div class="d-flex align-items-center">
                        <img src="../../dist/images/products/product-3.jpg" width="95" height="75"
                            class="rounded-1 me-9 flex-shrink-0" alt="" />
                        <div>
                            <h6 class="mb-1">Supreme toys cooker</h6>
                            <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                            <div class="d-flex align-items-center justify-content-between mt-2">
                                <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                                <div class="input-group input-group-sm w-50">
                                    <button class="btn border-0 round-20 minus p-0 bg-light-success text-success "
                                        type="button" id="add3"> - </button>
                                    <input type="text"
                                        class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty"
                                        placeholder="" aria-label="Example text with button addon"
                                        aria-describedby="add3" value="1" />
                                    <button class="btn text-success bg-light-success  p-0 round-20 border-0 add"
                                        type="button" id="addon3"> + </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="align-bottom">
                <div class="d-flex align-items-center pb-7">
                    <span class="text-dark fs-3">Sub Total</span>
                    <div class="ms-auto">
                        <span class="text-dark fw-semibold fs-3">$2530</span>
                    </div>
                </div>
                <div class="d-flex align-items-center pb-7">
                    <span class="text-dark fs-3">Total</span>
                    <div class="ms-auto">
                        <span class="text-dark fw-semibold fs-3">$6830</span>
                    </div>
                </div>
                <a href="eco-checkout.html" class="btn btn-outline-primary w-100">Go to shopping cart</a>
            </div>
        </div>
    </div>

    <!--  Mobilenavbar -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
        aria-labelledby="offcanvasWithBothOptionsLabel">
        <nav class="sidebar-nav scroll-sidebar">
            <div class="offcanvas-header justify-content-between">
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico"
                    alt="" class="img-fluid">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body profile-dropdown mobile-navbar" data-simplebar="" data-simplebar>
                <ul id="sidebarnav">
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <span>
                                <i class="ti ti-apps"></i>
                            </span>
                            <span class="hide-menu">Apps</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level my-3">
                            <li class="sidebar-item py-2">
                                <a href="#" class="d-flex align-items-center">
                                    <div
                                        class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-chat.svg"
                                            alt="" class="img-fluid" width="24" height="24">
                                    </div>
                                    <div class="d-inline-block">
                                        <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                                        <span class="fs-2 d-block fw-normal text-muted">New messages arrived</span>
                                    </div>
                                </a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a href="#" class="d-flex align-items-center">
                                    <div
                                        class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-invoice.svg"
                                            alt="" class="img-fluid" width="24" height="24">
                                    </div>
                                    <div class="d-inline-block">
                                        <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                                        <span class="fs-2 d-block fw-normal text-muted">Get latest invoice</span>
                                    </div>
                                </a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a href="#" class="d-flex align-items-center">
                                    <div
                                        class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-mobile.svg"
                                            alt="" class="img-fluid" width="24" height="24">
                                    </div>
                                    <div class="d-inline-block">
                                        <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                                        <span class="fs-2 d-block fw-normal text-muted">2 Unsaved Contacts</span>
                                    </div>
                                </a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a href="#" class="d-flex align-items-center">
                                    <div
                                        class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-message-box.svg"
                                            alt="" class="img-fluid" width="24" height="24">
                                    </div>
                                    <div class="d-inline-block">
                                        <h6 class="mb-1 bg-hover-primary">Email App</h6>
                                        <span class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                                    </div>
                                </a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a href="#" class="d-flex align-items-center">
                                    <div
                                        class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-cart.svg"
                                            alt="" class="img-fluid" width="24" height="24">
                                    </div>
                                    <div class="d-inline-block">
                                        <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                                        <span class="fs-2 d-block fw-normal text-muted">learn more information</span>
                                    </div>
                                </a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a href="#" class="d-flex align-items-center">
                                    <div
                                        class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-date.svg"
                                            alt="" class="img-fluid" width="24" height="24">
                                    </div>
                                    <div class="d-inline-block">
                                        <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                                        <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                                    </div>
                                </a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a href="#" class="d-flex align-items-center">
                                    <div
                                        class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-lifebuoy.svg"
                                            alt="" class="img-fluid" width="24" height="24">
                                    </div>
                                    <div class="d-inline-block">
                                        <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                                        <span class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                                    </div>
                                </a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a href="#" class="d-flex align-items-center">
                                    <div
                                        class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-application.svg"
                                            alt="" class="img-fluid" width="24" height="24">
                                    </div>
                                    <div class="d-inline-block">
                                        <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                                        <span class="fs-2 d-block fw-normal text-muted">To-do and Daily tasks</span>
                                    </div>
                                </a>
                            </li>
                            <ul class="px-8 mt-7 mb-4">
                                <li class="sidebar-item mb-3">
                                    <h5 class="fs-5 fw-semibold">Quick Links</h5>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a class="fw-semibold text-dark" href="#">Pricing Page</a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a class="fw-semibold text-dark" href="#">Authentication Design</a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a class="fw-semibold text-dark" href="#">Register Now</a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a class="fw-semibold text-dark" href="#">404 Error Page</a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a class="fw-semibold text-dark" href="#">Notes App</a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a class="fw-semibold text-dark" href="#">User Application</a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a class="fw-semibold text-dark" href="#">Account Settings</a>
                                </li>
                            </ul>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="app-chat.html" aria-expanded="false">
                            <span>
                                <i class="ti ti-message-dots"></i>
                            </span>
                            <span class="hide-menu">Chat</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="app-calendar.html" aria-expanded="false">
                            <span>
                                <i class="ti ti-calendar"></i>
                            </span>
                            <span class="hide-menu">Calendar</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="app-email.html" aria-expanded="false">
                            <span>
                                <i class="ti ti-mail"></i>
                            </span>
                            <span class="hide-menu">Email</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!--  Search Bar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content rounded-1">
                <div class="modal-header border-bottom">
                    <input type="search" class="form-control fs-3" placeholder="Search here" id="search" />
                    <span data-bs-dismiss="modal" class="lh-1 cursor-pointer">
                        <i class="ti ti-x fs-5 ms-3"></i>
                    </span>
                </div>
                <div class="modal-body message-body" data-simplebar="">
                    <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                    <ul class="list mb-0 py-2">
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Modern</span>
                                <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Dashboard</span>
                                <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Contacts</span>
                                <span class="fs-3 text-muted d-block">/apps/contacts</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Posts</span>
                                <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Detail</span>
                                <span
                                    class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Shop</span>
                                <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Modern</span>
                                <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Dashboard</span>
                                <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Contacts</span>
                                <span class="fs-3 text-muted d-block">/apps/contacts</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Posts</span>
                                <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Detail</span>
                                <span
                                    class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Shop</span>
                                <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--  Customizer -->
    <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
        type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="ti ti-settings fs-7" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Settings"></i>
    </button>
    <div class="offcanvas offcanvas-end customizer" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel" data-simplebar="">
        <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
            <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">Settings</h4>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-4">
            <div class="theme-option pb-4">
                <h6 class="fw-semibold fs-4 mb-1">Theme Option</h6>
                <div class="d-flex align-items-center gap-3 my-3">
                    <a href="javascript:void(0)" onclick="toggleTheme('../../dist/css/style.min.css')"
                        class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 light-theme text-dark">
                        <i class="ti ti-brightness-up fs-7 text-primary"></i>
                        <span class="text-dark">Light</span>
                    </a>
                    <a href="javascript:void(0)" onclick="toggleTheme('../../dist/css/style-dark.min.css')"
                        class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 dark-theme text-dark">
                        <i class="ti ti-moon fs-7 "></i>
                        <span class="text-dark">Dark</span>
                    </a>
                </div>
            </div>
            <div class="theme-direction pb-4">
                <h6 class="fw-semibold fs-4 mb-1">Theme Direction</h6>
                <div class="d-flex align-items-center gap-3 my-3">
                    <a href="index-2.html" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
                        <i class="ti ti-text-direction-ltr fs-6 text-primary"></i>
                        <span class="text-dark">LTR</span>
                    </a>
                    <a href="../rtl/index.html"
                        class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
                        <i class="ti ti-text-direction-rtl fs-6 text-dark"></i>
                        <span class="text-dark">RTL</span>
                    </a>
                </div>
            </div>
            <div class="theme-colors pb-4">
                <h6 class="fw-semibold fs-4 mb-1">Theme Colors</h6>
                <div class="d-flex align-items-center gap-3 my-3">
                    <ul class="list-unstyled mb-0 d-flex gap-3 flex-wrap change-colors">
                        <li
                            class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0)"
                                class="rounded-circle position-relative d-block customizer-bgcolor skin1-bluetheme-primary active-theme "
                                onclick="toggleTheme('../../dist/css/style.min.css')" data-color="blue_theme"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME"><i
                                    class="ti ti-check text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                        </li>
                        <li
                            class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0)"
                                class="rounded-circle position-relative d-block customizer-bgcolor skin2-aquatheme-primary "
                                onclick="toggleTheme('../../dist/css/style-aqua.min.css')" data-color="aqua_theme"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME"><i
                                    class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                        </li>
                        <li
                            class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0)"
                                class="rounded-circle position-relative d-block customizer-bgcolor skin3-purpletheme-primary"
                                onclick="toggleTheme('../../dist/css/style-purple.min.css')" data-color="purple_theme"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME"><i
                                    class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                        </li>
                        <li
                            class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0)"
                                class="rounded-circle position-relative d-block customizer-bgcolor skin4-greentheme-primary"
                                onclick="toggleTheme('../../dist/css/style-green.min.css')" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="GREEN_THEME"><i
                                    class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                        </li>
                        <li
                            class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0)"
                                class="rounded-circle position-relative d-block customizer-bgcolor skin5-cyantheme-primary"
                                onclick="toggleTheme('../../dist/css/style-cyan.min.css')" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="CYAN_THEME"><i
                                    class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                        </li>
                        <li
                            class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0)"
                                class="rounded-circle position-relative d-block customizer-bgcolor skin6-orangetheme-primary"
                                onclick="toggleTheme('../../dist/css/style-orange.min.css')" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="ORANGE_THEME"><i
                                    class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="layout-type pb-4">
                <h6 class="fw-semibold fs-4 mb-1">Layout Type</h6>
                <div class="d-flex align-items-center gap-3 my-3">
                    <a href="../main/index.html"
                        class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
                        <i class="ti ti-layout-sidebar text-dark fs-6"></i>
                        <span class="text-dark">Vertical</span>
                    </a>
                    <a href="index-2.html" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
                        <i class="ti ti-layout-navbar fs-6 text-primary"></i>
                        <span class="text-dark">Horizontal</span>
                    </a>
                </div>
            </div>
            <div class="container-option pb-4">
                <h6 class="fw-semibold fs-4 mb-1">Container Option</h6>
                <div class="d-flex align-items-center gap-3 my-3">
                    <a href="javascript:void(0)"
                        class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 boxed-width text-dark">
                        <i class="ti ti-layout-distribute-vertical fs-7 text-primary"></i>
                        <span class="text-dark">Boxed</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 full-width text-dark">
                        <i class="ti ti-layout-distribute-horizontal fs-7"></i>
                        <span class="text-dark">Full</span>
                    </a>
                </div>
            </div>
            <div class="card-with pb-4">
                <h6 class="fw-semibold fs-4 mb-1">Card With</h6>
                <div class="d-flex align-items-center gap-3 my-3">
                    <a href="javascript:void(0)"
                        class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 text-dark cardborder">
                        <i class="ti ti-border-outer fs-7"></i>
                        <span class="text-dark">Border</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 cardshadow">
                        <i class="ti ti-border-none fs-7"></i>
                        <span class="text-dark">Shadow</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Customizer -->
    <!-- Import Js Files -->
    <script src="../../dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../../dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- core files -->
    <script src="../../dist/js/app.min.js"></script>
    <script src="../../dist/js/app.horizontal.init.js"></script>
    <script src="../../dist/js/app-style-switcher.js"></script>
    <script src="../../dist/js/sidebarmenu.js"></script>

    <script src="../../dist/js/custom.js"></script>
    <!-- current page js files -->
    <script src="../../dist/libs/owl.carousel/dist/owl.carousel.min.js"></script>
@endsection
