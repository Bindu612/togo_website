

<form id="form_edit" method="POST" action="{{ route('admin.banner.update',$banner->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="name">Banner Name</label>
                <input type="text" id="name" name="name" class="form-control"
                    placeholder="Enter Banner Name" required value="{{$banner->name}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="current_image">Current Banner Image</label> <br>
                    <img src="{{ asset('assets/images/banner_image/'.$banner->banner_image) }}" alt="logo" width="70px" height="70px">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="banner_image">Replace Banner Image</label>
                <input type="file" id="banner_image" name="banner_image" class="form-control"
                    placeholder="Enter Banner Image">
            </div>
        </div>
       
    </div>
    <hr>
    <div class="text-center ">
        <button onclick="ajaxCall('form_edit','','POST')" type="button" class="btn btn-primary">Update
            </button>
    </div>
</form>