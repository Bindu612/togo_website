<div class="modal fade" id="AddBanner" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
 aria-labelledby="addContactModalTitle" aria-hidden="true">
 <div class="modal-dialog modal-md">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="addContactModalTitle">Add Contact Table</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="add-contact-box">
                <div class="add-contact-content">
                    <form id="form_data" action="{{ route('admin.contact-tables.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                            <div class="mb-3 contact-name">
                <label for="name">Name<span class="text-danger">*</span></label>
                <input type="text" id="name" name="name" class="form-control"
                    placeholder="Enter Name" required>
            </div>
                            </div>
                            <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="email">Email<span class="text-danger">*</span></label>
                <input type="email" id="email" name="email" class="form-control"
                    placeholder="Enter Email" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="location">Location<span class="text-danger">*</span></label>
                <input type="location" id="location" name="location" class="form-control"
                    placeholder="Enter location" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="phone">Phone<span class="text-danger">*</span></label>
                <input type="phone" id="phone" name="phone" class="form-control"
                    placeholder="Enter phone">
            </div>
        </div>
                        </div>
                        <div class="modal-footer">
                            <button onclick="ajaxCall('form_data')" type="button"
                                class="btn btn-success rounded-pill px-4">Save
                            </button>
                            {{-- <button id="btn-add" class="btn btn-success rounded-pill px-4">Add</button> --}}
                            <button id="btn-edit" class="btn btn-success rounded-pill px-4"
                                style="display: none;">Save</button>
                            <button class="btn btn-danger rounded-pill px-4" type="button"
                                data-bs-dismiss="modal"> Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
         </div>

     </div>
 </div>
</div>