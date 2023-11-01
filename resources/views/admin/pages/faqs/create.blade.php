<div class="modal fade" id="AddBanner" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
 aria-labelledby="addContactModalTitle" aria-hidden="true">
 <div class="modal-dialog modal-md">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="addContactModalTitle">Add FAQ</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="add-contact-box">
                <div class="add-contact-content">
                    <form id="form_data" action="{{ route('admin.faqs.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 contact-name">
                                    <label for="name"> Title<span class="text-danger">*</span></label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        placeholder="Enter Title" required>
                                </div>
                            </div>
                            <div class="col-md-6">                                
                                <div class="mb-3 contact-name">
                                <label for="status">Status<span class="text-danger">*</span></label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="active" >Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>                        
                               </div>
                            </div>
                            <div class="col-md-6">                                
                                <div class="mb-3 contact-name">
                                <label for="section">Section<span class="text-danger">*</span></label>
                                <select name="section" id="section" class="form-control">
                                    <option value="">Select Section</option>
                                    <option value="active" >About</option>
                                    <option value="inactive">Feature</option>
                                </select>                        
                               </div>
                            </div>
                            
                           
                            <div class="col-md-12">
                                <div class="mb-3 contact-name">
                                    <label for="description">Description<span class="text-danger">*</span></label>
                                    <textarea  id="description" name="description" class="form-control"></textarea>
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