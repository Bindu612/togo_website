<div class="modal fade" id="AddService" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="addContactModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addContactModalTitle">Add Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="add-contact-box">
                    <div class="add-contact-content">
                        <form id="form_data" action="{{ route('admin.services.store') }}" method="post"
                            enctype="multipart/form-data">

                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 contact-name">
                                        <label for="name"> Service Name<span class="text-danger">*</span></label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Enter Service Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 contact-name">
                                        <label for="image">Services Image<span class="text-danger">*</span></label>
                                        <input type="file" id="image" name="image" class="form-control"
                                            placeholder="Enter service_image" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 contact-name">
                                        <label for="highlight"> Highlight<span class="text-danger">*</span></label>
                                        <input type="text" id="highlight" name="highlight" class="form-control"
                                            placeholder="Enter Highlight" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3 contact-name">
                                        <label for="description"> Description</label>
                                        <textarea name="description" id="description" class="form-control" placeholder="Enter Description" cols="20"
                                            rows="5"></textarea>

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
                                <button class="btn btn-danger rounded-pill px-4" type="button" data-bs-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
