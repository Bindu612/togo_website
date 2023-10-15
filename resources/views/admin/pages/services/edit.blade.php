

<form id="form_edit" method="POST" action="{{ route('admin.services.update',$service->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="name">Service Name</label>
                <input type="text" id="name" name="name" class="form-control"
                    placeholder="Enter Service Name" required value="{{$service->name}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="current_image">Current Service Image</label> <br>
                    <img src="{{ asset('assets/images/service_image/'.$service->service_image) }}" alt="logo" width="70px" height="70px">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="Service_image">Replace Service Image</label>
                <input type="file" id="service_image" name="service_image" class="form-control"
                    placeholder="Enter Service Image">
            </div>
        </div>
    </div>
    <hr>
    <div class="text-center ">
        <button onclick="ajaxCall('form_edit','','POST')" type="button" class="btn btn-primary">Update
            </button>
    </div>
</form>