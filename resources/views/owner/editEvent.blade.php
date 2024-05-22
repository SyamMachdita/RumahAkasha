<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="{{asset('css/staff/editevent.css')}}" />
  </head>
  <body>
    <section class="container">
      <header>Edit Event</header>
      <form action="{{ route('api-edit-event',['id'=> $event->id])}}" method="POST" enctype="multipart/form-data" class="form">
        @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $event->id }}">
            <div class="input-box">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="{{ $event->title }}" required>
            </div>
            <div class="column">
                <div class="input-box">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" value="{{ $event->date }}" required>
                </div>
                <div class="input-box">
                    <label for="time">Time:</label>
                    <input type="time" id="time" name="time" value="{{ $event->time }}" required>
                </div>
            </div>
            <div class="input-box">
                <label for="description">Description:</label>
                <input type="text" id="description" name="description" value="{{ $event->description }}" required>
            </div>
            <div class="input-box">
                <label for="fee">Fee:</label>
                <input type="number" id="fee" name="fee" value="{{ $event->fee }}" required>
            </div>
            <div class="status-box">
                <label>Status</label>
                <div class="status-option">
                    <div class="status">
                        <input type="radio" id="done" name="status" value="done" {{ $event->status == 'done' ? 'checked' : '' }}>
                        <label for="done">Done</label>
                    </div>
                    <div class="status">
                        <input type="radio" id="in_progress" name="status" value="in_progress" {{ $event->status == 'in_progress' ? 'checked' : '' }}>
                        <label for="in_progress">In Progress</label>
                    </div>
                </div>
            </div>
            <div class="input-box">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" accept="image/*">
            </div>
            <div class="row">
                <div class="column">
                    <button type="button"><a href="/owner/event">Back</a></button>
                </div>
                <div class="column">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </section>
  </body>
</html>
