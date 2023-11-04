

<form id="form_edit" method="POST" action="{{ route('admin.faqs.update',$faq->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="name">Title</label>
                <input type="text" id="title" name="title" class="form-control"
                    placeholder="Enter Title" required value="{{$faq->title}}">
            </div>
        </div>
       
       
        <div class="col-md-12">
            <div class="mb-3 contact-name">
                <label for="name"> Description</label>
                <input type="text" id="description" name="description" class="form-control"
                    placeholder="Enter description" required value="{{$faq->description}}">
            </div>
        </div>
       
    </div>
    <hr>
    <div class="text-center ">
        <button onclick="ajaxCall('form_edit','','POST')" type="button" class="btn btn-primary">Update
            </button>
    </div>
</form>