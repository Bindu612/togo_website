@extends('layouts.main')
@section('contain')
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-md-12">

                <div class="card card-body">
                    <div class="row">
                       <h4>Site Setting</h4>
                       <hr>
                       <form  id="form_data" action="{{ route('admin.store.site-setting') }}" method="post">
                       @csrf
                       {{-- @if($siteSetting)
                       @method('PUT')
                       @endif --}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 contact-name">
                                    <label for="address">Address<span class="text-danger">*</span></label>  
                                        <textarea name="address" id="address" class="form-control" placeholder="Enter address" required value="{{ $siteSetting ? $siteSetting->address : '' }}" cols="20" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 contact-name">
                                    <label for="phone1">Phone No.1<span class="text-danger">*</span></label>
                                    <input type="number" id="phone1" name="phone1" class="form-control"
                                        placeholder="Enter phone Number" required value="{{$siteSetting ? $siteSetting->phone1 : ''}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 contact-name">
                                    <label for="phone2">Phone No.2</label>
                                    <input type="number" id="phone2" name="phone2" class="form-control"
                                    placeholder="Enter Number" required value="{{$siteSetting ? $siteSetting->phone2 : ''}}">                                
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 contact-name">
                                    <label for="email">Email<span class="text-danger">*</span></label>
                                    <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Enter Email " required value="{{$siteSetting ? $siteSetting->email : ''}}">                               
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 contact-name">
                                    <label for="facebook_link">Facebook Link<span class="text-danger">*</span></label>
                                    <input type="text" id="facebook_link" name="facebook_link" class="form-control"
                                    placeholder="Enter Facebook Link " required value="{{$siteSetting ? $siteSetting->facebook_link : ''}}">                                
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 contact-name">
                                    <label for="instagram_link">Instagram Link<span class="text-danger">*</span></label>
                                    <input type="text" id="instagram_link" name="instagram_link" class="form-control"
                                    placeholder="Enter Notification Send to User Id " required value="{{$siteSetting ? $siteSetting->instagram_link : ''}}">                               
                                 </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 contact-name">
                                    <label for="whatsapp_no">Whatsapp No<span class="text-danger">*</span></label>
                                    <input type="number" id="whatsapp_no" name="whatsapp_no" class="form-control"
                                    placeholder="Enter Whatsapp No " required value="{{$siteSetting ? $siteSetting->whatsapp_no : ''}}">                              
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 contact-name">
                                    <label for="youtube_link">Youtube Link<span class="text-danger">*</span></label>
                                    <input type="text" id="youtube_link" name="youtube_link" class="form-control"
                                    placeholder="Enter Youtube Link " required value="{{$siteSetting ? $siteSetting->youtube_link : ''}}">                               
                                 </div>
                            </div>
                            <div class="col-md-4">                               
                                 <div class="mb-3 contact-name">
                                    <label for="twitter_link">Twitter Link<span class="text-danger">*</span></label>
                                    <input type="text" id="twitter_link" name="twitter_link" class="form-control"
                                    placeholder="Enter Twitter Link " required value="{{$siteSetting ? $siteSetting->twitter_link : ''}}">                               
                                 </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 contact-name">
                                    <label for="linkedin_link">Linkedin Link<span class="text-danger">*</span></label>
                                    <input type="text" id="linkedin_link" name="linkedin_link" class="form-control"
                                    placeholder="Enter linkedin_link " required value="{{$siteSetting ? $siteSetting->linkedin_link : ''}}">                               
                                 </div>
                            </div>
                            <div class="col-md-4">                                
                                <div class="mb-3 contact-name">
                                <label for="status">Status<span class="text-danger">*</span></label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="active" {{ $siteSetting && $siteSetting->status === 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ $siteSetting && $siteSetting->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>                        
                               </div>
                            </div>
                            
                            <div class="modal-footer">
                                <button onclick="ajaxCall('form_data')" type="button" class="btn btn-primary rounded-pill px-4">Submit
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
