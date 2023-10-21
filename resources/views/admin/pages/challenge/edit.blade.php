

<form id="form_edit" method="POST" action="{{ route('admin.challenge.update',$challenge->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="name"> Name</label>
                <input type="text" id="name" name="name" class="form-control"
                    placeholder="Enter Name" required value="{{$challenge->name}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="current_image">Current Image</label> <br>
                    <img src="{{ asset('assets/images/challenge_image/'.$challenge->image) }}" alt="logo" width="70px" height="70px">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="image">Replace Image</label>
                <input type="file" id="image" name="image" class="form-control"
                    placeholder="Enter Image">
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3 contact-name">
                <label for="name"> Description</label>
                <input type="text" id="description" name="description" class="form-control"
                    placeholder="Enter description" required value="{{$challenge->description}}">
            </div>
        </div>
       
    </div>
    <hr>
    <div class="text-center ">
        <button onclick="ajaxCall('form_edit','','POST')" type="button" class="btn btn-primary">Update
            </button>
    </div>
</form>