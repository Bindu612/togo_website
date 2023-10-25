@extends('layouts.main')
@section('section')
    <div class="container-fluid mt-5">
        <!--  Row 1 -->
        <div class="row mt-5">
            <div class="col-md-12 mt-5">

                <div class="card card-body mt-5">
                    <div class="row mt-5">
                       <h2>About Us</h2>
                       <hr>
                       <form  id="form_data" action="{{ route('admin.about-us.store') }}" method="post">
                       @csrf
                       {{-- @if($aboutUs)
                       @method('PUT')
                       @endif --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3 about-us">
                                    <label for="about_us">About Us<span class="text-danger">*</span></label>  
                                        <textarea name="about_us" id="about_us" class="form-control"  placeholder="Enter about us "cols="20" rows="10" required > {{ $aboutUs ? $aboutUs->about_us : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 about-us">
                                    <label for="mission">Mission<span class="text-danger">*</span></label>  
                                        <textarea name="mission" id="mission" class="form-control"  placeholder="Enter Mission "cols="20" rows="10"required >{{ $aboutUs ? $aboutUs->mission : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 about-us">
                                    <label for="vission">Vission<span class="text-danger">*</span></label>  
                                        <textarea name="vission" id="vission" class="form-control"  placeholder="Enter Vission "cols="20" rows="10" required>{{ $aboutUs ? $aboutUs->vission : '' }}</textarea>
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




