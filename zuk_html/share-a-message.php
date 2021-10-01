<!doctype html>
<?php include 'head.php';?>

<body class="home find_housemate_page share_message_page">
    <?php include 'header_nav.php';?>
    <section class="home-sec1">
        <div class="container custom_container">
            <div class="row align-items-center">
                <div class="col-md-8" data-aos="fade-right" data-aos-duration="1500">
                    <h3 class="pb-3">Share a message - ask a question</h3>
                    <form>
                        <div class="form-row">
                            <div class="col b-form">
                                <input type="text" class="form-control" placeholder="Area Or Postcode">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="All Type">
                            </div>
                            <div class="col">
                                <select id="inputState" class="form-control">
                                    <option selected>All Cities</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-link">Search <i class="fas fa-search"></i></button>
                            </div>
                            <div class="col">
                                <a href="#!"><i class="fas fa-map-marker-alt"></i>Radius</a>
                            </div>
                        </div>
                    </form>
                    <h3 class="pt-3 banner_heading_two">Search Find Share Enjoy</h3>
                    <button class="btn btn-link advance_btn">Advance Search</button>
                    <div class="post_project_anchor">
                        <a href="#!">Post Your Project or Job</a> <a href="#!">Add your business</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn img-video-btn" data-toggle="modal" data-target="#exampleModal">
                        <div class="img-size">
                            <img src="./img/video.png" alt="" class="img-fluid">
                        </div>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <iframe width="470px" height="400" src="https://www.youtube.com/embed/5Peo-ivmupE"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--======= SECTION 2 ===== -->
    <section class="sec-2">
        <div class="container custom_container">
            <div class="row no-gutters">
                <div class="col-md-8 pb-3" data-aos="fade-right" data-aos-duration="1500">
                    <h2 class="blue mb-0 housemate_heading">Share a message</h2>
                </div>
                <div class="col-md-4">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link newest_btn active" id="nav-home-tab" data-toggle="tab" href="#nav-home1"
                                role="tab" aria-controls="nav-home" aria-selected="true">Newest</a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home1" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="swiper-container newestswiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="card" data-aos="fade-up" data-aos-duration="1500">
                                                <div class="col-md-12 card-in-heart">
                                                    <a href="#!" class="heart"><i class="far fa-heart"></i></a>
                                                    <a href="#!" class="share"><i class="fas fa-share-square"></i></a>
                                                    <a href="#!" class="share share_message"><i class="far fa-envelope"></i></a>
                                                </div>
                                                <div class="card-map col-md-12 d-flex justify-content-between">
                                                    <a href="#!"><i class="fas fa-map-marker-alt"></i> 75 Prince St,
                                                        NY, USA</a>
                                                    <a href="#!" class="camera"><i class="fas fa-camera"></i> 6</a>
                                                </div>
                                                <img class="card-img-top" src="./img/share-msg1.png" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title blue"><small> Parents Support Group Meeting
                                                        </small></h4>
                                                    <h3> Mary R. <span class="person_profession">Etobicoke ON</span>
                                                    </h3>
                                                    <p class="pb-3 gray">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                                        et dolore magna aliqua. Ut enim ad minim veniam</p>
                                                    <div class="row no-gutters">
                                                        <div class="col-md-3">
                                                            <div class="room_available">
                                                                <span class="blue">
                                                                <i class="fas fa-thumbs-up"></i>
                                                                </span>
                                                                <span class=" custom_border">
                                                                    12
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="location_room">
                                                                <span class="blue">
                                                                <i class=" orange far fa-comment-alt"></i>
                                                                </span>
                                                                <span class=" custom_border">
                                                                    12
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="contact-desc">
                                                                <ul>
                                                                    <li> <a href="tel: 647 985 5214"><i class="fas fa-phone-alt l-blue pr-2"></i> 647 985 5214</a></li>
                                                                    <li> <a href="mailto:smartrealtors@gmail.com"><i class="fas fa-envelope l-blue pl-2 pr-2"></i> smartrealtors@gmail.com</a></li>
                                                                </ul>
                                                                
                                                               
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>

                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" data-aos="fade-up" data-aos-duration="1500">
                                                <div class="col-md-12 card-in-heart">
                                                    <a href="#!" class="heart"><i class="far fa-heart"></i></a>
                                                    <a href="#!" class="share"><i class="fas fa-share-square"></i></a>
                                                    <a href="#!" class="share share_message"><i class="far fa-envelope"></i></a>
                                                </div>
                                                <div class="card-map col-md-12 d-flex justify-content-between">
                                                    <a href="#!"><i class="fas fa-map-marker-alt"></i> 75 Prince St,
                                                        NY, USA</a>
                                                    <a href="#!" class="camera"><i class="fas fa-camera"></i> 6</a>
                                                </div>
                                                <img class="card-img-top" src="./img/share-msg1.png" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title blue"><small> Parents Support Group Meeting
                                                        </small></h4>
                                                    <h3> Mary R. <span class="person_profession">Etobicoke ON</span>
                                                    </h3>
                                                    <p class="pb-3 gray">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                                        et dolore magna aliqua. Ut enim ad minim veniam</p>
                                                    <div class="row no-gutters">
                                                        <div class="col-md-3">
                                                            <div class="room_available">
                                                                <span class="blue">
                                                                <i class="fas fa-thumbs-up"></i>
                                                                </span>
                                                                <span class=" custom_border">
                                                                    12
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="location_room">
                                                                <span class="blue">
                                                                <i class=" orange far fa-comment-alt"></i>
                                                                </span>
                                                                <span class=" custom_border">
                                                                    12
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="contact-desc">
                                                                <ul>
                                                                    <li> <a href="tel: 647 985 5214"><i class="fas fa-phone-alt l-blue pr-2"></i> 647 985 5214</a></li>
                                                                    <li> <a href="mailto:smartrealtors@gmail.com"><i class="fas fa-envelope l-blue pl-2 pr-2"></i> smartrealtors@gmail.com</a></li>
                                                                </ul>
                                                                
                                                               
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>

                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card" data-aos="fade-up" data-aos-duration="1500">
                                                <div class="col-md-12 card-in-heart">
                                                    <a href="#!" class="heart"><i class="far fa-heart"></i></a>
                                                    <a href="#!" class="share"><i class="fas fa-share-square"></i></a>
                                                    <a href="#!" class="share share_message"><i class="far fa-envelope"></i></a>
                                                </div>
                                                <div class="card-map col-md-12 d-flex justify-content-between">
                                                    <a href="#!"><i class="fas fa-map-marker-alt"></i> 75 Prince St,
                                                        NY, USA</a>
                                                    <a href="#!" class="camera"><i class="fas fa-camera"></i> 6</a>
                                                </div>
                                                <img class="card-img-top" src="./img/share-msg1.png" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title blue"><small> Parents Support Group Meeting
                                                        </small></h4>
                                                    <h3> Mary R. <span class="person_profession">Etobicoke ON</span>
                                                    </h3>
                                                    <p class="pb-3 gray">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                                        et dolore magna aliqua. Ut enim ad minim veniam</p>
                                                    <div class="row no-gutters">
                                                        <div class="col-md-3">
                                                            <div class="room_available">
                                                                <span class="blue">
                                                                <i class="fas fa-thumbs-up"></i>
                                                                </span>
                                                                <span class=" custom_border">
                                                                    12
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="location_room">
                                                                <span class="blue">
                                                                <i class=" orange far fa-comment-alt"></i>
                                                                </span>
                                                                <span class=" custom_border">
                                                                    12
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="contact-desc">
                                                                <ul>
                                                                    <li> <a href="tel: 647 985 5214"><i class="fas fa-phone-alt l-blue pr-2"></i> 647 985 5214</a></li>
                                                                    <li> <a href="mailto:smartrealtors@gmail.com"><i class="fas fa-envelope l-blue pl-2 pr-2"></i> smartrealtors@gmail.com</a></li>
                                                                </ul>
                                                                
                                                               
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>



                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile1" role="tabpanel" aria-labelledby="nav-profile-tab">
                            ...</div>
                        <div class="tab-pane fade" id="nav-contact1" role="tabpanel" aria-labelledby="nav-contact-tab">
                            ...</div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--FOOTER PHP INCLUDE-->
    <?php include 'footer.php';?>
<script>
  AOS.init();
</script>
    </html>