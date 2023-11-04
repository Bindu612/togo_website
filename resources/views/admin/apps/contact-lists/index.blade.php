
@extends('layouts.main')
@section('section')


 <!-- Main wrapper -->
 <div class="body-wrapper">
        <div class="container-fluid">
          <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">Contact Application</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted " href="index-2.html">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Contact</li>
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
          <div class="card overflow-hidden chat-application">
            <div class="d-flex align-items-center justify-content-between gap-3 m-3 d-lg-none">
              <button class="btn btn-primary d-flex" type="button" data-bs-toggle="offcanvas" data-bs-target="#chat-sidebar" aria-controls="chat-sidebar">
                <i class="ti ti-menu-2 fs-5"></i>
              </button>
              <form class="position-relative w-100">
                <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search Contact">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
              </form>
            </div>
            <div class="d-flex w-100">
              <div class="left-part border-end w-20 flex-shrink-0 d-none d-lg-block">
                <div class="px-9 pt-4 pb-3">
                  <button class="btn btn-primary fw-semibold py-8 w-100">Add New Contact</button>
                </div>
                <ul class="list-group" style="height: calc(100vh - 400px)" data-simplebar>
                  <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                      <i class="ti ti-inbox fs-5"></i>All Contacts </a>
                  </li>
                  <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                      <i class="ti ti-star"></i>Starred </a>
                  </li>
                  <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                      <i class="ti ti-file-text fs-5"></i>Pening Approval </a>
                  </li>
                  <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                      <i class="ti ti-alert-circle"></i>Blocked </a>
                  </li>
                  <li class="border-bottom my-3"></li>
                  <li class="fw-semibold text-dark text-uppercase mx-9 my-2 px-3 fs-2">CATEGORIES</li>
                  <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                      <i class="ti ti-bookmark fs-5 text-primary"></i>Engineers </a>
                  </li>
                  <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                      <i class="ti ti-bookmark fs-5 text-warning"></i>Support Staff </a>
                  </li>
                  <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                      <i class="ti ti-bookmark fs-5 text-success"></i>Sales Team </a>
                  </li>
                </ul>
              </div>
              <div class="d-flex w-100">
                <div class="min-width-340">
                  <div class="border-end user-chat-box h-100">
                    <div class="px-4 pt-9 pb-6 d-none d-lg-block">
                      <form class="position-relative">
                        <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search" />
                        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                      </form>
                    </div>
                    <div class="app-chat">
                      <ul class="chat-users" style="height: calc(100vh - 400px)" data-simplebar>
                        <li>
                          <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user bg-light" id="chat_user_1" data-user-id="1">
                            <span class="position-relative">
                              <img src="../../dist/images/profile/user-4.jpg" alt="user-4" width="40" height="40" class="rounded-circle">
                            </span>
                            <div class="ms-6 d-inline-block w-75">
                              <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">Dr. Bonnie Barstow </h6>
                              <span class="fs-2 text-body-color d-block">barstow@ modernize.com</span>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user" id="chat_user_2" data-user-id="2">
                            <span class="position-relative">
                              <img src="../../dist/images/profile/user-4.jpg" alt="user4" width="40" height="40" class="rounded-circle">
                            </span>
                            <div class="ms-6 d-inline-block w-75">
                              <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">Jonathan Higgins</h6>
                              <span class="fs-2 text-body-color d-block">jonathan_hig@modernize.com</span>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user" id="chat_user_3" data-user-id="3">
                            <span class="position-relative">
                              <img src="../../dist/images/profile/user-3.jpg" alt="user3" width="40" height="40" class="rounded-circle">
                            </span>
                            <div class="ms-6 d-inline-block w-75">
                              <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">Michael Knight </h6>
                              <span class="fs-2 text-body-color d-block">michale-knight@gmail.com</span>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user" id="chat_user_4" data-user-id="4">
                            <span class="position-relative">
                              <img src="../../dist/images/profile/user-8.jpg" alt="user8" width="40" height="40" class="rounded-circle">
                            </span>
                            <div class="ms-6 d-inline-block w-75">
                              <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">Angus MacGyver</h6>
                              <span class="fs-2 text-body-color d-block">macgyver@gmail.com</span>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user" id="chat_user_5" data-user-id="5">
                            <span class="position-relative">
                              <img src="../../dist/images/profile/user-2.jpg" alt="user2" width="40" height="40" class="rounded-circle">
                            </span>
                            <div class="ms-6 d-inline-block w-75">
                              <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">Rick Wright</h6>
                              <span class="fs-2 text-body-color d-block">rockwright@modernize.com</span>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user" id="chat_user_6" data-user-id="6">
                            <span class="position-relative">
                              <img src="../../dist/images/profile/user-1.jpg" alt="user1" width="40" height="40" class="rounded-circle">
                            </span>
                            <div class="ms-6 d-inline-block w-75">
                              <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">Sledge Hammer</h6>
                              <span class="fs-2 text-body-color d-block">hammer9@gmail.com</span>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user" id="chat_user_7" data-user-id="7">
                            <span class="position-relative">
                              <img src="../../dist/images/profile/user-3.jpg" alt="user3" width="40" height="40" class="rounded-circle">
                            </span>
                            <div class="ms-6 d-inline-block w-75">
                              <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">Peter Thornton</h6>
                              <span class="fs-2 text-body-color d-block">peter293@modernize.com</span>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user" id="chat_user_8" data-user-id="8">
                            <span class="position-relative">
                              <img src="../../dist/images/profile/user-1.jpg" alt="user1" width="40" height="40" class="rounded-circle">
                            </span>
                            <div class="ms-6 d-inline-block w-75">
                              <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">Devon Miles</h6>
                              <span class="fs-2 text-body-color d-block">devon@gmail.com</span>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user" id="chat_user_9" data-user-id="9">
                            <span class="position-relative">
                              <img src="../../dist/images/profile/user-1.jpg" alt="user1" width="40" height="40" class="rounded-circle">
                            </span>
                            <div class="ms-6 d-inline-block w-75">
                              <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">Michael Knight</h6>
                              <span class="fs-2 text-body-color d-block">michael_knight@modernize.com</span>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-center chat-user" id="chat_user_10" data-user-id="10">
                            <span class="position-relative">
                              <img src="../../dist/images/profile/user-1.jpg" alt="user1" width="40" height="40" class="rounded-circle">
                            </span>
                            <div class="ms-6 d-inline-block w-75">
                              <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">Mike Torello</h6>
                              <span class="fs-2 text-body-color d-block">torello@gmail.com</span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="w-100">
                  <div class="chat-container h-100 w-100">
                    <div class="chat-box-inner-part h-100">
                      <div class="chatting-box app-email-chatting-box">
                        <div class="p-9 py-3 border-bottom chat-meta-user d-flex align-items-center justify-content-between">
                          <h5 class="text-dark mb-0 fw-semibold">Contact Details</h5>
                          <ul class="list-unstyled mb-0 d-flex align-items-center">
                            <li class="d-lg-none d-block">
                              <a class="text-dark back-btn px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5" href="javascript:void(0)">
                                <i class="ti ti-arrow-left"></i>
                              </a>
                            </li>
                            <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="important">
                              <a class="text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5" href="javascript:void(0)">
                                <i class="ti ti-star"></i>
                              </a>
                            </li>
                            <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                              <a class="d-block text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5" href="javascript:void(0)">
                                <i class="ti ti-pencil"></i>
                              </a>
                            </li>
                            <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                              <a class="text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5" href="javascript:void(0)">
                                <i class="ti ti-trash"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="position-relative overflow-hidden">
                          <div class="position-relative">
                            <div class="chat-box p-9" style="height: calc(100vh - 428px)" data-simplebar>
                              <div class="chat-list chat active-chat" data-user-id="1">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                  <div class="d-flex align-items-center gap-3">
                                    <img src="../../dist/images/profile/user-4.jpg" alt="user4" width="72" height="72" class="rounded-circle" />
                                    <div>
                                      <h6 class="fw-semibold fs-4 mb-0">Dr. Bonnie Barstow </h6>
                                      <p class="mb-0">Sales Manager</p>
                                      <p class="mb-0">Digital Arc Pvt. Ltd.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">Phone number</p>
                                    <h6 class="fw-semibold mb-0">+1 (203) 3458</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Email address</p>
                                    <h6 class="fw-semibold mb-0">alexandra@modernize.com</h6>
                                  </div>
                                  <div class="col-12 mb-9">
                                    <p class="mb-1 fs-2">Address</p>
                                    <h6 class="fw-semibold mb-0">312, Imperical Arc, New western corner</h6>
                                  </div>
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">City</p>
                                    <h6 class="fw-semibold mb-0">New York</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Country</p>
                                    <h6 class="fw-semibold mb-0">United Stats</h6>
                                  </div>
                                </div>
                                <div class="border-bottom pb-7 mb-4">
                                  <p class="mb-2 fs-2">Notes</p>
                                  <p class="mb-3 text-dark"> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque bibendum 
                                    hendrerit lobortis. Nullam ut lacus eros. Sed at luctus urna, eu fermentum diam. 
                                    In et tristique mauris.
                                  </p>
                                  <p class="mb-0 text-dark">Ut id ornare metus, sed auctor enim. Pellentesque nisi magna, laoreet a augue eget, tempor volutpat diam.</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                  <button class="btn btn-primary fs-2">Edit</button>
                                  <button class="btn btn-danger fs-2">Delete</button>
                                </div>
                              </div>
                              <div class="chat-list chat" data-user-id="2">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                  <div class="d-flex align-items-center gap-3">
                                    <img src="../../dist/images/profile/user-4.jpg" alt="user4" width="72" height="72" class="rounded-circle" />
                                    <div>
                                      <h6 class="fw-semibold fs-4 mb-0">Jonathan Higgins</h6>
                                      <p class="mb-0">Sales Manager</p>
                                      <p class="mb-0">Digital Arc Pvt. Ltd.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">Phone number</p>
                                    <h6 class="fw-semibold mb-0">+1 (203) 3458</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Email address</p>
                                    <h6 class="fw-semibold mb-0">alexandra@modernize.com</h6>
                                  </div>
                                  <div class="col-12 mb-9">
                                    <p class="mb-1 fs-2">Address</p>
                                    <h6 class="fw-semibold mb-0">312, Imperical Arc, New western corner</h6>
                                  </div>
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">City</p>
                                    <h6 class="fw-semibold mb-0">New York</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Country</p>
                                    <h6 class="fw-semibold mb-0">United Stats</h6>
                                  </div>
                                </div>
                                <div class="border-bottom pb-7 mb-4">
                                  <p class="mb-2 fs-2">Notes</p>
                                  <p class="mb-3 text-dark"> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque bibendum 
                                    hendrerit lobortis. Nullam ut lacus eros. Sed at luctus urna, eu fermentum diam. 
                                    In et tristique mauris.
                                  </p>
                                  <p class="mb-0 text-dark">Ut id ornare metus, sed auctor enim. Pellentesque nisi magna, laoreet a augue eget, tempor volutpat diam.</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                  <button class="btn btn-primary fs-2">Edit</button>
                                  <button class="btn btn-danger fs-2">Delete</button>
                                </div>
                              </div>
                              <div class="chat-list chat" data-user-id="3">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                  <div class="d-flex align-items-center gap-3">
                                    <img src="../../dist/images/profile/user-3.jpg" alt="user3" width="72" height="72" class="rounded-circle" />
                                    <div>
                                      <h6 class="fw-semibold fs-4 mb-0">Michael Knight </h6>
                                      <p class="mb-0">Sales Manager</p>
                                      <p class="mb-0">Digital Arc Pvt. Ltd.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">Phone number</p>
                                    <h6 class="fw-semibold mb-0">+1 (203) 3458</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Email address</p>
                                    <h6 class="fw-semibold mb-0">alexandra@modernize.com</h6>
                                  </div>
                                  <div class="col-12 mb-9">
                                    <p class="mb-1 fs-2">Address</p>
                                    <h6 class="fw-semibold mb-0">312, Imperical Arc, New western corner</h6>
                                  </div>
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">City</p>
                                    <h6 class="fw-semibold mb-0">New York</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Country</p>
                                    <h6 class="fw-semibold mb-0">United Stats</h6>
                                  </div>
                                </div>
                                <div class="border-bottom pb-7 mb-4">
                                  <p class="mb-2 fs-2">Notes</p>
                                  <p class="mb-3 text-dark"> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque bibendum 
                                    hendrerit lobortis. Nullam ut lacus eros. Sed at luctus urna, eu fermentum diam. 
                                    In et tristique mauris.
                                  </p>
                                  <p class="mb-0 text-dark">Ut id ornare metus, sed auctor enim. Pellentesque nisi magna, laoreet a augue eget, tempor volutpat diam.</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                  <button class="btn btn-primary fs-2">Edit</button>
                                  <button class="btn btn-danger fs-2">Delete</button>
                                </div>
                              </div>
                              <div class="chat-list chat" data-user-id="4">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                  <div class="d-flex align-items-center gap-3">
                                    <img src="../../dist/images/profile/user-8.jpg" alt="user8" width="72" height="72" class="rounded-circle" />
                                    <div>
                                      <h6 class="fw-semibold fs-4 mb-0">Angus MacGyver</h6>
                                      <p class="mb-0">Sales Manager</p>
                                      <p class="mb-0">Digital Arc Pvt. Ltd.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">Phone number</p>
                                    <h6 class="fw-semibold mb-0">+1 (203) 3458</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Email address</p>
                                    <h6 class="fw-semibold mb-0">alexandra@modernize.com</h6>
                                  </div>
                                  <div class="col-12 mb-9">
                                    <p class="mb-1 fs-2">Address</p>
                                    <h6 class="fw-semibold mb-0">312, Imperical Arc, New western corner</h6>
                                  </div>
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">City</p>
                                    <h6 class="fw-semibold mb-0">New York</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Country</p>
                                    <h6 class="fw-semibold mb-0">United Stats</h6>
                                  </div>
                                </div>
                                <div class="border-bottom pb-7 mb-4">
                                  <p class="mb-2 fs-2">Notes</p>
                                  <p class="mb-3 text-dark"> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque bibendum 
                                    hendrerit lobortis. Nullam ut lacus eros. Sed at luctus urna, eu fermentum diam. 
                                    In et tristique mauris.
                                  </p>
                                  <p class="mb-0 text-dark">Ut id ornare metus, sed auctor enim. Pellentesque nisi magna, laoreet a augue eget, tempor volutpat diam.</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                  <button class="btn btn-primary fs-2">Edit</button>
                                  <button class="btn btn-danger fs-2">Delete</button>
                                </div>
                              </div>
                              <div class="chat-list chat" data-user-id="5">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                  <div class="d-flex align-items-center gap-3">
                                    <img src="../../dist/images/profile/user-2.jpg" alt="user2" width="72" height="72" class="rounded-circle" />
                                    <div>
                                      <h6 class="fw-semibold fs-4 mb-0">Rick Wright</h6>
                                      <p class="mb-0">Sales Manager</p>
                                      <p class="mb-0">Digital Arc Pvt. Ltd.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">Phone number</p>
                                    <h6 class="fw-semibold mb-0">+1 (203) 3458</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Email address</p>
                                    <h6 class="fw-semibold mb-0">alexandra@modernize.com</h6>
                                  </div>
                                  <div class="col-12 mb-9">
                                    <p class="mb-1 fs-2">Address</p>
                                    <h6 class="fw-semibold mb-0">312, Imperical Arc, New western corner</h6>
                                  </div>
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">City</p>
                                    <h6 class="fw-semibold mb-0">New York</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Country</p>
                                    <h6 class="fw-semibold mb-0">United Stats</h6>
                                  </div>
                                </div>
                                <div class="border-bottom pb-7 mb-4">
                                  <p class="mb-2 fs-2">Notes</p>
                                  <p class="mb-3 text-dark"> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque bibendum 
                                    hendrerit lobortis. Nullam ut lacus eros. Sed at luctus urna, eu fermentum diam. 
                                    In et tristique mauris.
                                  </p>
                                  <p class="mb-0 text-dark">Ut id ornare metus, sed auctor enim. Pellentesque nisi magna, laoreet a augue eget, tempor volutpat diam.</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                  <button class="btn btn-primary fs-2">Edit</button>
                                  <button class="btn btn-danger fs-2">Delete</button>
                                </div>
                              </div>
                              <div class="chat-list chat" data-user-id="6">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                  <div class="d-flex align-items-center gap-3">
                                    <img src="../../dist/images/profile/user-1.jpg" alt="user1" width="72" height="72" class="rounded-circle" />
                                    <div>
                                      <h6 class="fw-semibold fs-4 mb-0">Sledge Hammer</h6>
                                      <p class="mb-0">Sales Manager</p>
                                      <p class="mb-0">Digital Arc Pvt. Ltd.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">Phone number</p>
                                    <h6 class="fw-semibold mb-0">+1 (203) 3458</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Email address</p>
                                    <h6 class="fw-semibold mb-0">alexandra@modernize.com</h6>
                                  </div>
                                  <div class="col-12 mb-9">
                                    <p class="mb-1 fs-2">Address</p>
                                    <h6 class="fw-semibold mb-0">312, Imperical Arc, New western corner</h6>
                                  </div>
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">City</p>
                                    <h6 class="fw-semibold mb-0">New York</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Country</p>
                                    <h6 class="fw-semibold mb-0">United Stats</h6>
                                  </div>
                                </div>
                                <div class="border-bottom pb-7 mb-4">
                                  <p class="mb-2 fs-2">Notes</p>
                                  <p class="mb-3 text-dark"> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque bibendum 
                                    hendrerit lobortis. Nullam ut lacus eros. Sed at luctus urna, eu fermentum diam. 
                                    In et tristique mauris.
                                  </p>
                                  <p class="mb-0 text-dark">Ut id ornare metus, sed auctor enim. Pellentesque nisi magna, laoreet a augue eget, tempor volutpat diam.</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                  <button class="btn btn-primary fs-2">Edit</button>
                                  <button class="btn btn-danger fs-2">Delete</button>
                                </div>
                              </div>
                              <div class="chat-list chat" data-user-id="7">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                  <div class="d-flex align-items-center gap-3">
                                    <img src="../../dist/images/profile/user-3.jpg" alt="user3" width="72" height="72" class="rounded-circle" />
                                    <div>
                                      <h6 class="fw-semibold fs-4 mb-0">Peter Thornton</h6>
                                      <p class="mb-0">Sales Manager</p>
                                      <p class="mb-0">Digital Arc Pvt. Ltd.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">Phone number</p>
                                    <h6 class="fw-semibold mb-0">+1 (203) 3458</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Email address</p>
                                    <h6 class="fw-semibold mb-0">alexandra@modernize.com</h6>
                                  </div>
                                  <div class="col-12 mb-9">
                                    <p class="mb-1 fs-2">Address</p>
                                    <h6 class="fw-semibold mb-0">312, Imperical Arc, New western corner</h6>
                                  </div>
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">City</p>
                                    <h6 class="fw-semibold mb-0">New York</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Country</p>
                                    <h6 class="fw-semibold mb-0">United Stats</h6>
                                  </div>
                                </div>
                                <div class="border-bottom pb-7 mb-4">
                                  <p class="mb-2 fs-2">Notes</p>
                                  <p class="mb-3 text-dark"> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque bibendum 
                                    hendrerit lobortis. Nullam ut lacus eros. Sed at luctus urna, eu fermentum diam. 
                                    In et tristique mauris.
                                  </p>
                                  <p class="mb-0 text-dark">Ut id ornare metus, sed auctor enim. Pellentesque nisi magna, laoreet a augue eget, tempor volutpat diam.</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                  <button class="btn btn-primary fs-2">Edit</button>
                                  <button class="btn btn-danger fs-2">Delete</button>
                                </div>
                              </div>
                              <div class="chat-list chat" data-user-id="8">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                  <div class="d-flex align-items-center gap-3">
                                    <img src="../../dist/images/profile/user-1.jpg" alt="user1" width="72" height="72" class="rounded-circle" />
                                    <div>
                                      <h6 class="fw-semibold fs-4 mb-0">Devon Miles</h6>
                                      <p class="mb-0">Sales Manager</p>
                                      <p class="mb-0">Digital Arc Pvt. Ltd.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">Phone number</p>
                                    <h6 class="fw-semibold mb-0">+1 (203) 3458</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Email address</p>
                                    <h6 class="fw-semibold mb-0">alexandra@modernize.com</h6>
                                  </div>
                                  <div class="col-12 mb-9">
                                    <p class="mb-1 fs-2">Address</p>
                                    <h6 class="fw-semibold mb-0">312, Imperical Arc, New western corner</h6>
                                  </div>
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">City</p>
                                    <h6 class="fw-semibold mb-0">New York</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Country</p>
                                    <h6 class="fw-semibold mb-0">United Stats</h6>
                                  </div>
                                </div>
                                <div class="border-bottom pb-7 mb-4">
                                  <p class="mb-2 fs-2">Notes</p>
                                  <p class="mb-3 text-dark"> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque bibendum 
                                    hendrerit lobortis. Nullam ut lacus eros. Sed at luctus urna, eu fermentum diam. 
                                    In et tristique mauris.
                                  </p>
                                  <p class="mb-0 text-dark">Ut id ornare metus, sed auctor enim. Pellentesque nisi magna, laoreet a augue eget, tempor volutpat diam.</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                  <button class="btn btn-primary fs-2">Edit</button>
                                  <button class="btn btn-danger fs-2">Delete</button>
                                </div>
                              </div>
                              <div class="chat-list chat" data-user-id="9">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                  <div class="d-flex align-items-center gap-3">
                                    <img src="../../dist/images/profile/user-1.jpg" alt="user1" width="72" height="72" class="rounded-circle" />
                                    <div>
                                      <h6 class="fw-semibold fs-4 mb-0">Michael Knight</h6>
                                      <p class="mb-0">Sales Manager</p>
                                      <p class="mb-0">Digital Arc Pvt. Ltd.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">Phone number</p>
                                    <h6 class="fw-semibold mb-0">+1 (203) 3458</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Email address</p>
                                    <h6 class="fw-semibold mb-0">alexandra@modernize.com</h6>
                                  </div>
                                  <div class="col-12 mb-9">
                                    <p class="mb-1 fs-2">Address</p>
                                    <h6 class="fw-semibold mb-0">312, Imperical Arc, New western corner</h6>
                                  </div>
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">City</p>
                                    <h6 class="fw-semibold mb-0">New York</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Country</p>
                                    <h6 class="fw-semibold mb-0">United Stats</h6>
                                  </div>
                                </div>
                                <div class="border-bottom pb-7 mb-4">
                                  <p class="mb-2 fs-2">Notes</p>
                                  <p class="mb-3 text-dark"> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque bibendum 
                                    hendrerit lobortis. Nullam ut lacus eros. Sed at luctus urna, eu fermentum diam. 
                                    In et tristique mauris.
                                  </p>
                                  <p class="mb-0 text-dark">Ut id ornare metus, sed auctor enim. Pellentesque nisi magna, laoreet a augue eget, tempor volutpat diam.</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                  <button class="btn btn-primary fs-2">Edit</button>
                                  <button class="btn btn-danger fs-2">Delete</button>
                                </div>
                              </div>
                              <div class="chat-list chat" data-user-id="10">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                  <div class="d-flex align-items-center gap-3">
                                    <img src="../../dist/images/profile/user-1.jpg" alt="user1" width="72" height="72" class="rounded-circle" />
                                    <div>
                                      <h6 class="fw-semibold fs-4 mb-0">Mike Torello</h6>
                                      <p class="mb-0">Sales Manager</p>
                                      <p class="mb-0">Digital Arc Pvt. Ltd.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">Phone number</p>
                                    <h6 class="fw-semibold mb-0">+1 (203) 3458</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Email address</p>
                                    <h6 class="fw-semibold mb-0">alexandra@modernize.com</h6>
                                  </div>
                                  <div class="col-12 mb-9">
                                    <p class="mb-1 fs-2">Address</p>
                                    <h6 class="fw-semibold mb-0">312, Imperical Arc, New western corner</h6>
                                  </div>
                                  <div class="col-4 mb-7">
                                    <p class="mb-1 fs-2">City</p>
                                    <h6 class="fw-semibold mb-0">New York</h6>
                                  </div>
                                  <div class="col-8 mb-7">
                                    <p class="mb-1 fs-2">Country</p>
                                    <h6 class="fw-semibold mb-0">United Stats</h6>
                                  </div>
                                </div>
                                <div class="border-bottom pb-7 mb-4">
                                  <p class="mb-2 fs-2">Notes</p>
                                  <p class="mb-3 text-dark"> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque bibendum 
                                    hendrerit lobortis. Nullam ut lacus eros. Sed at luctus urna, eu fermentum diam. 
                                    In et tristique mauris.
                                  </p>
                                  <p class="mb-0 text-dark">Ut id ornare metus, sed auctor enim. Pellentesque nisi magna, laoreet a augue eget, tempor volutpat diam.</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                  <button class="btn btn-primary fs-2">Edit</button>
                                  <button class="btn btn-danger fs-2">Delete</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="offcanvas offcanvas-start user-chat-box" tabindex="-1" id="chat-sidebar" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasExampleLabel"> Contact </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="px-9 pt-4 pb-3">
                  <button class="btn btn-primary fw-semibold py-8 w-100">Add New Contact</button>
                </div>
                <ul class="list-group" style="height: calc(100vh - 150px)" data-simplebar>
                  <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                      <i class="ti ti-inbox fs-5"></i>All Contacts </a>
                  </li>
                  <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                      <i class="ti ti-star"></i>Starred </a>
                  </li>
                  <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                      <i class="ti ti-file-text fs-5"></i>Pening Approval </a>
                  </li>
                  <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                      <i class="ti ti-alert-circle"></i>Blocked </a>
                  </li>
                  <li class="border-bottom my-3"></li>
                  <li class="fw-semibold text-dark text-uppercase mx-9 my-2 px-3 fs-2">CATEGORIES</li>
                  <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                      <i class="ti ti-bookmark fs-5 text-primary"></i>Engineers </a>
                  </li>
                  <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                      <i class="ti ti-bookmark fs-5 text-warning"></i>Support Staff </a>
                  </li>
                  <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                      <i class="ti ti-bookmark fs-5 text-success"></i>Sales Team </a>
                  </li>
                </ul>
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
    <div class="offcanvas offcanvas-end shopping-cart" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header py-4">
        <h5 class="offcanvas-title fs-5 fw-semibold" id="offcanvasRightLabel">Shopping Cart</h5>
        <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
      </div>
      <div class="offcanvas-body h-100 px-4 pt-0" data-simplebar>
        <ul class="mb-0">
          <li class="pb-7">
            <div class="d-flex align-items-center">
              <img src="../../dist/images/products/product-1.jpg" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="" />
              <div>
                <h6 class="mb-1">Supreme toys cooker</h6>
                <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                <div class="d-flex align-items-center justify-content-between mt-2">
                  <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                  <div class="input-group input-group-sm w-50">
                    <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button" id="add1"> - </button>
                    <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add1" value="1" />
                    <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button" id="addo2"> + </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="pb-7">
            <div class="d-flex align-items-center">
              <img src="../../dist/images/products/product-2.jpg" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="" />
              <div>
                <h6 class="mb-1">Supreme toys cooker</h6>
                <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                <div class="d-flex align-items-center justify-content-between mt-2">
                  <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                  <div class="input-group input-group-sm w-50">
                    <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button" id="add2"> - </button>
                    <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add2" value="1" />
                    <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button" id="addon34"> + </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="pb-7">
            <div class="d-flex align-items-center">
              <img src="../../dist/images/products/product-3.jpg" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="" />
              <div>
                <h6 class="mb-1">Supreme toys cooker</h6>
                <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                <div class="d-flex align-items-center justify-content-between mt-2">
                  <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                  <div class="input-group input-group-sm w-50">
                    <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button" id="add3"> - </button>
                    <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add3" value="1" />
                    <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button" id="addon3"> + </button>
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
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
      <nav class="sidebar-nav scroll-sidebar">
        <div class="offcanvas-header justify-content-between">
          <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" alt="" class="img-fluid">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body profile-dropdown mobile-navbar" data-simplebar=""  data-simplebar>
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
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-chat.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                      <span class="fs-2 d-block fw-normal text-muted">New messages arrived</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-invoice.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                      <span class="fs-2 d-block fw-normal text-muted">Get latest invoice</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-mobile.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                      <span class="fs-2 d-block fw-normal text-muted">2 Unsaved Contacts</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-message-box.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Email App</h6>
                      <span class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-cart.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                      <span class="fs-2 d-block fw-normal text-muted">learn more information</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-date.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                      <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-lifebuoy.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                      <span class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-application.svg" alt="" class="img-fluid" width="24" height="24">
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
                  <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
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
                  <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
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
    <!-- --------------------------------------------------- -->
    <!-- Customizer -->
    <!-- --------------------------------------------------- -->
    <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
      <i class="ti ti-settings fs-7" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Settings"></i>
    </button>
    <div class="offcanvas offcanvas-end customizer" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" data-simplebar="">
      <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
        <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">Settings</h4>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body p-4">
        <div class="theme-option pb-4">
          <h6 class="fw-semibold fs-4 mb-1">Theme Option</h6>
          <div class="d-flex align-items-center gap-3 my-3">
            <a href="javascript:void(0)"  onclick="toggleTheme('../../dist/css/style.min.css')"  class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 light-theme text-dark">
              <i class="ti ti-brightness-up fs-7 text-primary"></i>
              <span class="text-dark">Light</span>
            </a>
            <a href="javascript:void(0)" onclick="toggleTheme('../../dist/css/style-dark.min.css')" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 dark-theme text-dark">
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
            <a href="../rtl/index.html" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
              <i class="ti ti-text-direction-rtl fs-6 text-dark"></i>
              <span class="text-dark">RTL</span>
            </a>
          </div>
        </div>
        <div class="theme-colors pb-4">
          <h6 class="fw-semibold fs-4 mb-1">Theme Colors</h6>
          <div class="d-flex align-items-center gap-3 my-3">
            <ul class="list-unstyled mb-0 d-flex gap-3 flex-wrap change-colors">
              <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin1-bluetheme-primary active-theme " onclick="toggleTheme('../../dist/css/style.min.css')"  data-color="blue_theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME"><i class="ti ti-check text-white d-flex align-items-center justify-content-center fs-5"></i></a>
              </li>
              <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                <a href="javascript:void(0)"  class="rounded-circle position-relative d-block customizer-bgcolor skin2-aquatheme-primary " onclick="toggleTheme('../../dist/css/style-aqua.min.css')"  data-color="aqua_theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
              </li>
              <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin3-purpletheme-primary" onclick="toggleTheme('../../dist/css/style-purple.min.css')"  data-color="purple_theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
              </li>
              <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin4-greentheme-primary" onclick="toggleTheme('../../dist/css/style-green.min.css')"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
              </li>
              <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin5-cyantheme-primary" onclick="toggleTheme('../../dist/css/style-cyan.min.css')"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
              </li>
              <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin6-orangetheme-primary" onclick="toggleTheme('../../dist/css/style-orange.min.css')"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="layout-type pb-4">
          <h6 class="fw-semibold fs-4 mb-1">Layout Type</h6>
          <div class="d-flex align-items-center gap-3 my-3">
            <a href="../main/index.html" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">              
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
            <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 boxed-width text-dark">              
              <i class="ti ti-layout-distribute-vertical fs-7 text-primary"></i>
              <span class="text-dark">Boxed</span>
            </a>
            <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 full-width text-dark">
              <i class="ti ti-layout-distribute-horizontal fs-7"></i>
              <span class="text-dark">Full</span>
            </a>
          </div>
        </div>
        <div class="card-with pb-4">
          <h6 class="fw-semibold fs-4 mb-1">Card With</h6>
          <div class="d-flex align-items-center gap-3 my-3">
            <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 text-dark cardborder">              
              <i class="ti ti-border-outer fs-7"></i>
              <span class="text-dark">Border</span>
            </a>
            <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 cardshadow">
              <i class="ti ti-border-none fs-7"></i>
              <span class="text-dark">Shadow</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- ---------------------------------------------- -->
    <!-- Customizer -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- Import Js Files -->
    <!-- ---------------------------------------------- -->
    <script src="../../dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../../dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ---------------------------------------------- -->
    <!-- core files -->
    <!-- ---------------------------------------------- -->
    <script src="../../dist/js/app.min.js"></script>
    <script src="../../dist/js/app.horizontal.init.js"></script>
    <script src="../../dist/js/app-style-switcher.js"></script>
    <script src="../../dist/js/sidebarmenu.js"></script>
    
    <script src="../../dist/js/custom.js"></script>
    <script src="../../dist/libs/prismjs/prism.js"></script>
    <!-- ---------------------------------------------- -->
    <!-- current page js files -->
    <!-- ---------------------------------------------- -->
    <script src="../../dist/js/apps/chat.js"></script>


@endsection