@extends('master.layout')
@section('content')
<!-- ======= Culture Category Section ======= -->
    <section class="category-section">
      <div class="container" data-aos="fade-up">

        <div class="section-header d-flex justify-content-between align-items-center mb-5">
          <h2>Search</h2>
        </div>




        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-lg-8">
                <div class="post-entry-1">
                  <h2 class="mb-2"><a>Click on the search bar to search for your book</a></h2>
                  <form action="{{ route('web.find') }}" method="GET">
                    <div class="form-group">
                       <input type="text" class="form-control" name="query" placeholder="Search book here" value="{{ request()->input('query') }}">
                       <span class="text-danger">@error('query'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                     <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                 </form>

                 <br>
                 <br>
                 <hr>
                 <br>
                 @if(isset($books))

                   <table class="table table-hover">
                       <thead>
                           <tr>
                               <th>Book Name</th>
                               <th>Book Id</th>
                               <th>Author</th>
                               <th>Status</th>
                               <th>Year Published</th>
                           </tr>
                       </thead>
                       <tbody>
                           @if(count($books) > 0)
                               @foreach($books as $book)
                                  <tr>
                                      <td>{{ $book->Book_name}}</td>
                                      <td>{{ $book->Book_Id}}</td>
                                      <td>{{ $book->Author}}</td>
                                      <td>{{ $book->Status}}</td>
                                      <td>{{ $book->Year_published}}</td>
                                  </tr>
                               @endforeach
                           @else
                              <tr><td>No result found!</td></tr>
                           @endif
                       </tbody>
                   </table>

                   <div class="pagination-block">
                        {{  $books->appends(request()->input())->links('master.pagination') }}
                  </div>

                 @endif

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!--  End Culture Category Section -->
@endsection
