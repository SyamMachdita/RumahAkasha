<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{asset('css/staff/createevent.css')}}" />
  </head>
  <body>
    <section class="container">
      <header>Create New Event</header>
      <form action="{{url('/api/create-event')}}" method="POST" enctype="multipart/form-data" class="form">
        @csrf
        <div class="input-box">
          <label>Title</label>
          <input type="text" name="title" placeholder="Enter title" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Date</label>
            <input type="date" name="date" placeholder="Enter date" required />
          </div>
          <div class="input-box">
            <label>Time</label>
            <input type="time" name="time" placeholder="Enter time" required />
          </div>
        </div>

        <div class="input-box">
          <label>Image</label>
          <input type="file" name="image" accept="image/*" required>
        </div>

        <div class="input-box">
          <label>Description</label>
          <input type="text" name="description" placeholder="Enter description" required />
        </div>

        <div class="input-box">
          <label>Fee</label>
          <input type="number" name="fee" placeholder="Enter fee" required />
        </div>

        <div class="status-box">
          <label>Status</label>
          <div class="status-option">
            <div class="status">
              <input type="radio" id="check-approved" name="status" value="done" checked />
              <label for="check-approved">Done</label>
            </div>
            <div class="status">
              <input type="radio" id="check-inprogress" name="status" value="in_progress" />
              <label for="check-inprogress">In Progress</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="column">
            <button type="button" onclick="window.location.href='/staff/event'">Back</button>
          </div>
          <div class="column">
            <button type="submit">Submit</button>
          </div>
        </div>
      </form>
    </section>
  </body>
</html>
