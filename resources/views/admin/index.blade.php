@extends('admin.layout')
@section('content')
    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/library1.jpg');">
                    <div class="img-bg-inner">
                      <h2>Welcome to Levara Private Library</h2>
                      <p>Levara Private Library is a private library located in Kuala Lumpur, Malaysia. It is part of the Levara inc. that offers a wide range of services and resources to the members.
                        The library features a collection of books, magazines, newspapers, and other print materials, as well as access to digital resources such as e-books, databases, and online journals.
                        It also offers computer access, WiFi, and printing services. The library also features study spaces, meeting rooms, and regular events and programs such as book clubs, author talks and workshops.
                    </p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/library2.jpeg');">
                    <div class="img-bg-inner">
                      <h2>Comfortable services and facilities</h2>
                      <p>

                      </p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/library3.jpg');">
                    <div class="img-bg-inner">
                      <h2>Wide range of books and repositories</h2>
                      <p>
                        In Levara Private Library we provide a wide variety of books and other materials available for borrowing, including fiction and non-fiction books for adults and children, as well as a large collection of magazines and newspapers.
                        We also have a digital collection that can be accessed with a library card and could include e-books, audiobooks, and online databases.
                        The library also has a large collection of resources for the registered members, including research materials, local history, and genealogy.
                      </p>
                    </div>
                  </a>
                </div>

              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
      <div class="container" data-aos="fade-up">
        <div class="row g-5">
          <div class="col-lg-4">
            <div class="post-entry-1 lg">
              <a href="single-post.html"><img src="assets/img/book1.jpeg" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="date">Featured</span> <span class="mx-1">&bullet;</span> <span>Jan 10th 2023</span></div>
              <h2><a href="single-post.html">Really Good, Actually</a></h2>
              <p class="mb-4 d-block">
                “Hilarious, heart-warming, wise.” — Paula Hawkins
                A hilarious and painfully relatable debut novel about one woman’s messy search for joy and meaning in the wake of an unexpected breakup, from comedian, essayist, and award-winning screenwriter Monica Heisey

Maggie is fine. She’s doing really good, actually. Sure, she’s broke, her graduate thesis on something obscure is going nowhere, and her marriage only lasted 608 days, but at the ripe old age of twenty-nine, Maggie is determined to embrace her new life as a Surprisingly Young Divorcée™.

Now she has time to take up nine hobbies, eat hamburgers at 4 am, and “get back out there” sex-wise. With the support of her tough-loving academic advisor, Merris; her newly divorced friend, Amy; and her group chat (naturally), Maggie barrels through her first year of single life, intermittently dating, occasionally waking up on the floor and asking herself tough questions along the way.

Laugh-out-loud funny and filled with sharp observations, Really Good, Actually is a tender and bittersweet comedy that lays bare the uncertainties of modern love, friendship, and our search for that thing we like to call “happiness”. This is a remarkable debut from an unforgettable new voice in fiction.
              </p>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="row g-5">
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/book2.jpeg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Fantasy</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <h2><a href="single-post.html">The Beginning After The End</a></h2>
                </div>
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/book3.jpeg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Science</span> <span class="mx-1">&bullet;</span> <span>Jul 17th '22</span></div>
                  <h2><a href="single-post.html">Self Help: Law of Attraction: Secrets to Manifest Health, Wealth, Love and Abundance Through Manifesting and Affirmations</a></h2>
                </div>
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/book4.jpeg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Fiction</span> <span class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div>
                  <h2><a href="single-post.html">Extensis Vitae</a></h2>
                </div>
              </div>
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/book5.jpeg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Mathematics</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <h2><a href="single-post.html">Calculus</a></h2>
                </div>
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/book7.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">History</span> <span class="mx-1">&bullet;</span> <span>Mar 1st '22</span></div>
                  <h2><a href="single-post.html">The History of the World</a></h2>
                </div>
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/book6.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Physics</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <h2><a href="single-post.html">College Physics</a></h2>
                </div>
              </div>

              <!-- Trending Section -->
              <div class="col-lg-4">

                <div class="trending">
                  <h3>Trending</h3>
                  <ul class="trending-post">
                    <li>
                      <a href="single-post.html">
                        <span class="number">1</span>
                        <h3>The Smartest Person in the Room</h3>
                        <span class="author">Christian Espinosa</span>
                      </a>
                    </li>
                    <li>
                      <a href="single-post.html">
                        <span class="number">2</span>
                        <h3>The Secret World : A History of Intelligence</h3>
                        <span class="author">Christopher Andrew</span>
                      </a>
                    </li>
                    <li>
                      <a href="single-post.html">
                        <span class="number">3</span>
                        <h3>A Brief History Of Time : From Big Bang To Black Holes</h3>
                        <span class="author">Stephen Hawking</span>
                      </a>
                    </li>
                    <li>
                      <a href="single-post.html">
                        <span class="number">4</span>
                        <h3>The Psychology of Money : Timeless lessons on wealth, greed, and happiness</h3>
                        <span class="author">Morgan Housel</span>
                      </a>
                    </li>
                    <li>
                      <a href="single-post.html">
                        <span class="number">5</span>
                        <h3>Quantum Mechanics: The Theoretical Minimum</h3>
                        <span class="author">Art Friedman</span>
                      </a>
                    </li>
                  </ul>
                </div>

              </div> <!-- End Trending Section -->
            </div>
          </div>

        </div> <!-- End .row -->
      </div>
    </section> <!-- End Post Grid Section -->

  </main><!-- End #main -->
@endsection
