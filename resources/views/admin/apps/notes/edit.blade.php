<form id="form_edit" method="POST" action="{{ route('admin.notes.update', $note->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 contact-name">

                <label for="note_title">Note Title</label>
                <input type="text" class="form-control" id="note_title" name="note_title" placeholder="Enter Note Title"
                    required value="{{ old('note_title', $note->note_title) }}">

            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3 contact-name">

                <label for="note_sub_title">Note Sub Title</label>
                <input type="text" class="form-control" id="note_sub_title" name="note_sub_title"
                    placeholder="Enter Note Sub Title" required
                    value="{{ old('note_sub_title', $note->note_sub_title) }}">

            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="start_date">Start Date</label>
                <input type="date" class="form-control" id="start_date"
                    name="start_date"placeholder="Enter Start Date" value="{{ old('start_date', $note->start_date) }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3 contact-name">
                <label for="due_date">Due Date</label>
                <input type="date" class="form-control" id="due_date" name="due_date" placeholder="Enter Due Date"
                    value="{{ old('due_date', $note->due_date) }}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3 contact-name">

                <label for="priority">Priority</label>
                <input type="text" class="form-control" id="priority" name="priority" placeholder="Enter Priority"
                    value="{{ old('priority', $note->priority) }}">

            </div>
        </div>


        <div class="col-md-12">
            <div class="mb-3 contact-name">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $note->description) }}</textarea>
            </div>
        </div>

    </div>
    <hr>
    <div class="text-center ">
        <button onclick="ajaxCall('form_edit','','POST')" type="button" class="btn btn-primary">Update
        </button>
    </div>
</form>
