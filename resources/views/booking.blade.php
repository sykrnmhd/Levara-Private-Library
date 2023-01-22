@extends('master.layout')
@section('content')

<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-12">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Booking Forms
                    </h5>
                  </div>
                  <div>
                    <form action="tobook" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label>Book Title</label>
                                  <input type="text" name="book_title" class="form-control" id="book_title" placeholder="Insert the book Title" required>
                                </div>
                              </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Book ID</label>
                              <input type="text" name="book_id" class="form-control" id="book_id" placeholder="Insert the book ID" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Member Name</label>
                              <input type="text" name="member_name" class="form-control" id="member_name" placeholder="Insert your name" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Member ID</label>
                              <input type="text" name="member_id" class="form-control" id="member_id" placeholder="Inser your member ID" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="book_status" id="book_status" placeholder="Book Status" required>
                            </div>
                          </div>
                          <div class="col-md-12 text-center">
                            {{-- <button type="submit" class="button button-a button-big button-rouded">Save</button> --}}
                            <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                        </div>
                      </form>

                  </div>
                </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div><br><br>

    <center><div class="container">
       <table class="table table-striped table-hover table-condensed" style="background-color:#FFFFEF; border-radius: 10px">
         <thead>
           <tr>
            <th>Book Title</th>
            <th>Book ID</th>
            <th>Book Status</th>
            <th>Member Name</th>
            <th>Member ID</th>
           </tr>
         </thead>
         <tbody>
           @foreach($booking as $book)
           <tr>
            <td>{{$book->book_title}}</td>
            <td>{{$book->book_id}}</td>
            <td>{{$book->book_status}}</td>
            <td>{{$book->member_name}}</td>
            <td>{{$book->member_id}}</td>
            <td>
                <a href="{{ url('delete/'.$book->id) }}" class="btn btn-danger">Remove</a>
            </td>
           </tr>
           @endforeach
         </tbody>
       </table>
    </div></center><br>
  </section><!-- End Contact Section -->

@endsection
