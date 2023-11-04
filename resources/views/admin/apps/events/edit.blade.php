

<form id="form_edit" method="POST" action="{{ route('admin.events.update',$event->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 contact-name">   
                    <label for="event_date">Event Date</label>
                    <input type="date" class="form-control" id="event_date" name="event_date"  placeholder="Enter Event Date" required value="{{$event->event_date}}">
            </div>
        </div>
        <div class="col-md-6">
        <div class="mb-3 contact-name">
            <label for="event_start_time">Event Start Time</label>
            <input type="time" class="form-control" id="event_start_time" name="event_start_time" placeholder="Enter Event Start Time" required value="{{$event->event_start_time}}">
            </div>
        </div>
        <div class="col-md-6">
        <div class="mb-3 contact-name">
            <label for="event_end_time">Event End Time</label>
            <input type="time" class="form-control" id="event_end_time" name="event_end_time" placeholder="Enter Event End Time" required value="{{$event->event_end_time}}">
            </div>
        </div>
        <div class="col-md-6">
        <div class="mb-3 contact-name">
        <label for="event_title">Event Title</label>
        <input type="text" class="form-control" id="event_title" name="event_title" placeholder="Enter Event Title" required value="{{$event->event_title}}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3 contact-name">
               
            <label for="event_notes">Event Notes</label>
            <textarea class="form-control" id="event_notes" name="event_notes">{{  $event->event_notes }}</textarea>

            </div>
        </div>
       
    </div>
    <hr>
    <div class="text-center ">
        <button onclick="ajaxCall('form_edit','','POST')" type="button" class="btn btn-primary">Update
            </button>
    </div>
</form>