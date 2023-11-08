<div class="modal fade" id="AddBanner" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="addContactModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addContactModalTitle">Add Note</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="add-contact-box">
                    <div class="add-contact-content">
                        <form id="form_data" action="{{ route('admin.notes.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 contact-name">

                                        <label for="note_title">Note Title<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="note_title" name="note_title"
                                            placeholder="Enter Note Title" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 contact-name">

                                        <label for="note_sub_title">Note Sub Title<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="note_sub_title"
                                            name="note_sub_title" placeholder="Enter Note Sub Title" required>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 contact-name">
                                        <label for="start_date">Start Date</label>
                                        <input type="date"
                                            class="form-control @error('start_date') is-invalid @enderror"
                                            id="start_date" name="start_date" value="{{ old('start_date') }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 contact-name">
                                        <label for="due_date">Due Date</label>
                                        <input type="date"
                                            class="form-control @error('due_date') is-invalid @enderror" id="due_date"
                                            name="due_date" value="{{ old('due_date') }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 contact-name">

                                        <label for="priority">Priority</label>
                                        <input type="text"
                                            class="form-control @error('priority') is-invalid @enderror" id="priority"
                                            name="priority" value="{{ old('priority') }}">
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <div class="mb-3 contact-name">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="4">{{ old('description') }}</textarea>
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
