

<form id="form_edit" method="POST" action="{{ route('admin.contact-tables.update',$contactTable->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control"
                    placeholder="Enter Name" required value="{{$contactTable->name}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control"
                    placeholder="Enter Email" required value="{{$contactTable->email}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="location">Location</label>
                <input type="location" id="location" name="location" class="form-control"
                    placeholder="Enter location" required value="{{$contactTable->location}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="phone">Phone</label>
                <input type="phone" id="phone" name="phone" class="form-control"
                    placeholder="Enter phone" required value="{{$contactTable->phone}}">
            </div>
        </div>
        
       
       
       
    </div>
    <hr>
    <div class="text-center ">
        <button onclick="ajaxCall('form_edit','','POST')" type="button" class="btn btn-primary">Update
            </button>
    </div>
</form>