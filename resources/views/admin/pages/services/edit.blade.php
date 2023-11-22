<form id="form_edit" method="POST" action="{{ route('admin.services.update', $service->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="name">Service Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Service Name"
                    required value="{{ $service->name }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="highlight">highlight Name</label>
                <input type="text" id="highlight" name="highlight" class="form-control"
                    placeholder="Enter highlight " required value="{{ $service->highlight }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="image">Current Service Image</label> <br>
                <img src="{{ asset('assets/images/service_image/' . $service->image) }}" alt="logo" width="70px"
                    height="70px">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="image">Replace Service Image</label>
                <input type="file" id="image" name="image" class="form-control"
                    placeholder="Enter Service Image">
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3 contact-name">
                <label for="description">Service description</label>
                <input type="text" id="description" name="description" class="form-control"
                    placeholder="Enter Service description" required value="{{ $service->description }}">
            </div>
        </div>
    </div>
    <hr>
    <div class="text-center ">
        <button onclick="ajaxCall('form_edit','','POST')" type="button" class="btn btn-primary">Update
        </button>
    </div>
</form>
