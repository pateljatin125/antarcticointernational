@extends('layouts.layout')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <h1>Welcome to Antarctico International</h1>
            {{-- <h2>We are team of talented designers making websites with Bootstrap</h2> --}}
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                        data-aos="zoom-in">
                        <img src="assets/img/vad/portfolio/cb06d6e1-7124-4c08-b2f2-47e300a171c0.JPG" class="img-fluid"
                            alt="">
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                    </div>

                    <div
                        class="col-xl-6 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <div class="box-heading" data-aos="fade-up">
                            <h4>About us</h4>
                            {{-- <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3> --}}
                            <p>Antarctico International was started in 2023, Exporter of Agro products like Dehydrated Onion
                                / Garlic, Fresh Vegetables, Peanuts, Indian Spices, Spray Dry Powders & Other Food products.
                            </p>
                        </div>

                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="">Experience</a></h4>
                            <p class="description">The Company was started by Mr.Patel and continuously progressing because
                                of his constant efforts and deep domain knowledge. Mr. Patel has more than 3 years of
                                experience in Agriculture field and also he is agriculture graduate.</p>
                        </div>

                        {{-- <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div> --}}

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="section-title" data-aos="zoom-in">
                    <h2>Why Us</h2>
                    <h3>Why you shoud <span>choose us</span>?</h3>
                    <p>Antarctico International is the best Indian Spices,Rice,vegetable exporter in Gujarat, India.</p>
                </div>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="box" data-aos="fade-up">
                            <span>01</span>
                            <h4>Smoother purchasing experience</h4>
                            <p>Providing clear, concise product information and high-quality can create a smoother
                                purchasing experience.We provide one to one communication.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="100">
                            <span>02</span>
                            <h4>Product Quality</h4>
                            <p>Ensuring food quality is of the utmost importance when it comes to the health and safety of
                                consumers.Quality is more important than quantity. Quality means doing it right when no one
                                is looking.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <span>03</span>
                            <h4> Satisfaction Guarantee </h4>
                            <p>A satisfaction guarantee is a promise a brand makes to assure a buyer that a refund will be
                                issued if the buyer is not satisfied with a product or service within a certain timeframe.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->
        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>Call To Action</h3>
                    {{-- <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> --}}
                    <a class="cta-btn" href="#">Call To Action</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="zoom-in">
                    <h2>Services</h2>
                    <h3>Our Awesome <span>Services</span></h3>
                    {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> --}}
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box" data-aos="zoom-in">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Trade in services</a></h4>
                            <p>Trade in services records the value of services exchanged between residents and non-residents
                                of an economy. </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Commercial Invoice</a></h4>
                            <p>The commercial invoice is a legal document between the  exporter  and the  buyer (in this
                                case, the foreign buyer)  that clearly  states the  goods  being sold and the amount  the
                                customer is to pay.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Packing List</a></h4>
                            <p>A packing list itemizes the contents of each package (box, pallets, etc).</p>
                        </div>
                    </div>

                    {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Dele cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Divera don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div> --}}

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="zoom-in">
                    <h2>Portfolio</h2>
                    <h3>Check our <span>Portfolio</span></h3>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-masala">Spices</li>
                            <li data-filter=".filter-Bean">Bean</li>
                            <li data-filter=".filter-grains">Grains</li>
                            <li data-filter=".filter-vegetable">Vegetable</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-masala">
                        <img src="assets/image/1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Turmeric</h4>
                            <p>Turmeric</p>
                            <a href="assets/image/1.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Turmeric"><i class="bx bx-plus"></i></a>
                            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-masala">
                        <img src="assets/image/9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Cumin</h4>
                            <p>Cumin</p>
                            <a href="assets/image/9.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Cumin"><i class="bx bx-plus"></i></a>
                            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-Bean">
                        <img src="assets/image/3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Peanut</h4>
                            <p>Peanut</p>
                            <a href="assets/image/1.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Peanut"><i class="bx bx-plus"></i></a>
                            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-Bean">
                        <img src="assets/image/4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Peanut</h4>
                            <p>Peanut</p>
                            <a href="assets/image/4.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Peanut"><i class="bx bx-plus"></i></a>
                            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-Bean">
                        <img src="assets/image/12.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Peanut</h4>
                            <p>Peanut</p>
                            <a href="assets/image/12.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Peanut"><i class="bx bx-plus"></i></a>
                            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-grains">
                        <img src="assets/image/5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Rice</h4>
                            <p>Rice</p>
                            <a href="assets/image/9.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Rice"><i class="bx bx-plus"></i></a>
                            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-vegetable">
                        <img src="assets/image/6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Tomato</h4>
                            <p>Tomato</p>
                            <a href="assets/image/6.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Coconut"><i class="bx bx-plus"></i></a>
                            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-vegetable">
                        <img src="assets/image/7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Onion</h4>
                            <p>Onion</p>
                            <a href="assets/image/7.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Onion"><i class="bx bx-plus"></i></a>
                            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <img src="assets/image/8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Coconut</h4>
                            <p>Coconut</p>
                            <a href="assets/image/8.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Coconut"><i class="bx bx-plus"></i></a>
                            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <img src="assets/image/11.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Lemon</h4>
                            <p>Lemon</p>
                            <a href="assets/image/11.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="lemon"><i class="bx bx-plus"></i></a>
                            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <img src="assets/image/10.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4></h4>
                            <p></p>
                            <a href="assets/image/10.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
                            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title" data-aos="zoom-in">
                    <h2>F.A.Q</h2>
                    <h3>Frequently Asked <span>Questions</span></h3>
                    {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> --}}
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">How Can I Start Importing? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>The easiest way to get the process started is by educating yourself. I always suggest to
                                    clients to attend our import/export seminars to get a broad overview of international
                                    trade processes. The next step is to then book a one-on-one consultation with us to
                                    obtain an analysis of commodity-related regulations and operational aspects that apply
                                    to your business.</p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Where Should I Start Once I Have the
                                Information I Need? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>Our advisors are standing by to coach you in the licensing and importation process.
                                    Remember, you aren’t alone in this process and help is always available.</p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">What Are the Best Products to Export? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    We receive this question a lot. Unfortunately, there is no easy answer! The first step
                                    for a trader looking to set up a new export business is to obtain market information.
                                    The commercial success of export ventures relies on insightful understanding of the
                                    commodity in the export market. This encompasses trends, local competition, etc.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">Who is in Charge of Regulating Exports? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>Each country you plan to export to will have their own specific rules and regulations.
                                    Please contact one of our International Trade Advisors to discuss how exporting will
                                    work in your unique set of circumstances.</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </section><!-- End F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="zoom-in">
                    <h2>Contact</h2>
                    <h3>Check our <span>Contact</span> Details</h3>
                </div>
                <div>
                    <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Apple%20Avenue,Near%20Milanio%20Res,Yogo%20chowk,surat,gujarat,india+(self)&amp;t=p&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                        frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4" data-aos="fade-right">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>antarctico.int@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+91 9106 2028 85</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

                        <form action="{{ route('contact.formrequest') }}" method="POST" role="form" id="contact-us" class="php-email-form-contact">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" >
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" >
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" >
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
   @endsection
   
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
   <script>
       $(document).ready(function() {
           $('#contact-us').validate({ 
               rules: {
                   name: {
                       required: true
                   },
                   email: {
                       required: true,
                       email: true
                   },
                   subject: {
                       required: true
                   },
                   message: {
                       required: true
                   },
               }
           });
       });
   </script>
