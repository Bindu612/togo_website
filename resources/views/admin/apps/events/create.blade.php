<div class="modal fade" id="AddBanner" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
 aria-labelledby="addContactModalTitle" aria-hidden="true">
 <div class="modal-dialog modal-md">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="addContactModalTitle">Add Event</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="add-contact-box">
                <div class="add-contact-content">
                    <form id="form_data" action="{{ route('admin.events.store') }}" method="post">
                        @csrf
                        <div class="row">
                         <div class="col-md-6">
                            <div class="mb-3 contact-name">
               
                               <label for="event_date">Event Date<span class="text-danger">*</span></label>
                               <input type="date" class="form-control" id="event_date" name="event_date"  placeholder="Enter Event Date" required>

                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="mb-3 contact-name">
                              <label for="event_start_time">Event Start Time<span class="text-danger">*</span></label>
                              <input type="time" class="form-control" id="event_start_time" name="event_start_time" placeholder="Enter Event Start Time" required>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="mb-3 contact-name">
                              <label for="event_end_time">Event End Time<span class="text-danger">*</span></label>
                              <input type="time" class="form-control" id="event_end_time" name="event_end_time" placeholder="Enter Event End Time" required>
                            </div>
                         </div>

                         <div class="col-md-6">
                            <div class="mb-3 contact-name">
                              <label for="event_title">Event Title<span class="text-danger">*</span></label>
                              <input type="text" class="form-control" id="event_title" name="event_title" placeholder="Enter Event Title" required>
                            </div>
                         </div>

                         <div class="col-md-12">
                            <div class="mb-3 contact-name">
               
                               <label for="event_notes">Event Notes</label>
                               <textarea class="form-control" id="event_notes" name="event_notes"></textarea>
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