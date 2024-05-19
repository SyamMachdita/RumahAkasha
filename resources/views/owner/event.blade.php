@extends('master.layout-owner')
@section('konten')

<link rel="stylesheet" href="/css/owner/event.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

<div class="recent-grid">
    <div class="Event">
        <div class="card">
            <div class="card-header">
                <h3>Recent Event</h3>
            </div>
            <div><a class="add-btn" href="/owner/create-event">+ Add</a></div>
            <div class="card-body">
                <table width="100%">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Fee</th>
                            <th>Rundown</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Night Party</td>
                            <td>May 10, 2024</td>
                            <td>10:00 - 12:00</td>
                            <td><img src="img/2.jpeg" width="60px" height="60px" alt="Event Image 1"></td>
                            <td>Description of Event 1</td>
                            <td>$20</td>
                            <td>Rundown of Event 1</td>
                            <td>
                                <span class="status green"></span>
                                Approved
                            </td>
                            <td>
                                <a href="/owner/edit-event" class="action-btn" title="Edit"><span class="las la-edit"></span></a>
                                <button class="action-btn" title="Delete"><span class="las la-trash-alt"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Event Title 2</td>
                            <td>May 15, 2024</td>
                            <td>14:00</td>
                            <td><img src="event-image2.jpg" alt="Event Image 2"></td>
                            <td>Description of Event 1</td>
                            <td>Rp.30.000</td>
                            <td>Rundown of Event 1</td>
                            <td>
                                <span class="status pink"></span>
                                In progress
                            </td>
                            <td>
                                <a href="editEvent.html" class="action-btn" title="Edit"><span class="las la-edit"></span></a>
                                <button class="action-btn" title="Delete"><span class="las la-trash-alt"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Event Title 3</td>
                            <td>May 15, 2024</td>
                            <td>16:00</td>
                            <td><img src="event-image2.jpg" alt="Event Image 2"></td>
                            <td>Description of Event 1</td>
                            <td>Rp.20.000</td>
                            <td>Rundown of Event 1</td>
                            <td>
                                <span class="status orange"></span>
                                Pending
                            </td>
                            <td>
                                <a href="editEvent.html" class="action-btn" title="Edit"><span class="las la-edit"></span></a>
                                <button class="action-btn" title="Delete"><span class="las la-trash-alt"></span></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
