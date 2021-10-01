<!doctype html>
<?php include 'head.php';?>
   <body class="home">
     <?php include 'header_nav.php';?>
     <section class="home-sec1">
        <div class="container custom_container">
            <div class="row align-items-center">
                <div class="col-md-8" data-aos="fade-right" data-aos-duration="1500">
                    <h3 class="pb-3">Find your next property</h3>
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
            <div class="row">
               <div class="col-md-12 m-cl">
                  <h2 class="blue mb-0" data-aos="fade-right" data-aos-duration="1500">Someone is checking this out near you</h2>
               </div>
               <div class="col-lg-12">
                  <nav>
                     <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home1" role="tab" aria-controls="nav-home" aria-selected="true">All Type</a>
                        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile1" role="tab" aria-controls="nav-profile" aria-selected="false">For Sale</a>
                        <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact1" role="tab" aria-controls="nav-contact" aria-selected="false">For Rent</a>
                     </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                     <div class="tab-pane fade show active" id="nav-home1" role="tabpanel" aria-labelledby="nav-home-tab">
                         <div class="swiper home_page_slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
             <div class="latest_properties_card" data-aos="fade-up" data-aos-duration="1500">
                              <div class="card">
                                 <div class="col-md-12 card-in-btn">
                                    <a href="#!" class="btn btn-link">For Sale</a> <a href="#!" class="btn btn-link">Home</a>
                                 </div>
                                 <div class="col-md-12 card-in-heart">
                                    <a href="#!" class="heart"><i class="far fa-heart"></i></a>
                                    <a href="#!" class="share"><i class="fas fa-share-square"></i></a>
                                    <a href="#!" class="share share_message"><i class="far fa-envelope"></i></a>
                                 </div>
                                 <div class="card-map col-md-12 d-flex justify-content-between">
                                    <a href="#!"><i class="fas fa-map-marker-alt"></i> 75 Prince St, NY, USA</a>
                                    <a href="#!" class="camera"><i class="fas fa-camera"></i> 6</a>
                                 </div>
                                 <a href="./property_detail.php"><img class="card-img-top" src="./img/cardimg1.png" alt="Card image cap"></a>
                                 <div class="card-body">
                                    <a href="./property_detail.php"><h4 class="card-title blue"><small> Luxury Family House <i class="fas fa-check green"></i></small></h4></a>
                                    <p class="card-text orange"><b>$500,000</b></p>
                                    <p class="pb-3 gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    <div class="col-md-12 bed-icon pl-0">
                                       <p><i class="fas fa-bed pr-2 l-blue"></i> 4 <i class="pl-2 pr-2 fas fa-bath l-blue"></i> 3 <i class="pl-2 fas fa-cube l-blue"></i> 510 ft2</p>
                                    </div>
                                 </div>
                                 <div class="col-md-12 d-flex align-items-center pb-2 card-footer">
                                    <img src="./img/profile.png" alt="" class="img-fluid">
                                    <p class="pl-2 gray">By Cris</p>
                                 </div>
                              </div>
                           </div></div>
        <div class="swiper-slide">
        <div class="latest_properties_card" data-aos="fade-up" data-aos-duration="1500">
            <div class="card">
                  <div class="col-md-12 card-in-btn">
                     <a href="#!" class="btn btn-link">For Sale</a> <a href="#!" class="btn btn-link">Home</a>
                  </div>
                  <div class="col-md-12 card-in-heart">
                     <a href="#!" class="heart"><i class="far fa-heart"></i></a>
                     <a href="#!" class="share"><i class="fas fa-share-square"></i></a>
                     <a href="#!" class="share share_message"><i class="far fa-envelope"></i></a>
                  </div>
                  <div class="card-map col-md-12 d-flex justify-content-between">
                     <a href="#!"><i class="fas fa-map-marker-alt"></i> 75 Prince St, NY, USA</a>
                     <a href="#!" class="camera"><i class="fas fa-camera"></i> 6</a>
                  </div>
                  <a href="./property_detail.php"><img class="card-img-top" src="./img/cardimg2.png" alt="Card image cap"></a>
                  <div class="card-body">
                     <a href="./property_detail.php"><h4 class="card-title blue"><small>Luxury Family House <i class="fas fa-check green"></i></small></h4></a>
                     <p class="card-text orange"><b>$500,000</b></p>
                     <p class="pb-3 gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                     <div class="col-md-12 bed-icon pl-0">
                        <p><i class="fas fa-bed pr-2 l-blue"></i> 4 <i class="pl-2 pr-2 fas fa-bath l-blue"></i> 3 <i class="pl-2 fas fa-cube l-blue"></i> 510 ft2</p>
                     </div>
                  </div>
                  <div class="col-md-12 d-flex align-items-center pb-2 card-footer">
                     <img src="./img/profile.png" alt="" class="img-fluid">
                     <p class="pl-2 gray">By Cris</p>
                  </div>
               </div>
                           </div>
        </div>
        <div class="swiper-slide">
             <div class="latest_properties_card" data-aos="fade-up" data-aos-duration="1500">
                              <div class="card">
                                 <div class="col-md-12 card-in-btn">
                                    <a href="#!" class="btn btn-link">For Sale</a> <a href="#!" class="btn btn-link">Home</a>
                                 </div>
                                 <div class="col-md-12 card-in-heart">
                                    <a href="#!" class="heart"><i class="far fa-heart"></i></a>
                                    <a href="#!" class="share"><i class="fas fa-share-square"></i></a>
                                    <a href="#!" class="share share_message"><i class="far fa-envelope"></i></a>
                                 </div>
                                 <div class="card-map col-md-12 d-flex justify-content-between">
                                    <a href="#!"><i class="fas fa-map-marker-alt"></i> 75 Prince St, NY, USA</a>
                                    <a href="#!" class="camera"><i class="fas fa-camera"></i> 6</a>
                                 </div>
                                 <a href="./property_detail.php"><img class="card-img-top" src="./img/cardimg3.png" alt="Card image cap"></a>
                                 <div class="card-body">
                                    <a href="./property_detail.php"><h4 class="card-title blue"><small> Luxury Family House <i class="fas fa-check green"></i></small></h4></a>
                                    <p class="card-text orange"><b>$500,000</b></p>
                                    <p class="pb-3 gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    <div class="col-md-12 bed-icon pl-0">
                                       <p><i class="fas fa-bed pr-2 l-blue"></i> 4 <i class="pl-2 pr-2 fas fa-bath l-blue"></i> 3 <i class="pl-2 fas fa-cube l-blue"></i> 510 ft2</p>
                                    </div>
                                 </div>
                                 <div class="col-md-12 d-flex align-items-center pb-2 card-footer">
                                    <img src="./img/profile.png" alt="" class="img-fluid">
                                    <p class="pl-2 gray">By Cris</p>
                                 </div>
                              </div>
                           </div>
        </div>
        <div class="swiper-slide">
             <div class="latest_properties_card" data-aos="fade-up" data-aos-duration="1500">
                              <div class="card">
                                 <div class="col-md-12 card-in-btn">
                                    <a href="#!" class="btn btn-link">For Sale</a> <a href="#!" class="btn btn-link">Home</a>
                                 </div>
                                 <div class="col-md-12 card-in-heart">
                                    <a href="#!" class="heart"><i class="far fa-heart"></i></a>
                                    <a href="#!" class="share"><i class="fas fa-share-square"></i></a>
                                    <a href="#!" class="share share_message"><i class="far fa-envelope"></i></a>
                                 </div>
                                 <div class="card-map col-md-12 d-flex justify-content-between">
                                    <a href="#!"><i class="fas fa-map-marker-alt"></i> 75 Prince St, NY, USA</a>
                                    <a href="#!" class="camera"><i class="fas fa-camera"></i> 6</a>
                                 </div>
                                 <a href="./property_detail.php"><img class="card-img-top" src="./img/cardimg3.png" alt="Card image cap"></a>
                                 <div class="card-body">
                                    <a href="./property_detail.php"><h4 class="card-title blue"><small> Luxury Family House <i class="fas fa-check green"></i></small></h4></a>
                                    <p class="card-text orange"><b>$500,000</b></p>
                                    <p class="pb-3 gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    <div class="col-md-12 bed-icon pl-0">
                                       <p><i class="fas fa-bed pr-2 l-blue"></i> 4 <i class="pl-2 pr-2 fas fa-bath l-blue"></i> 3 <i class="pl-2 fas fa-cube l-blue"></i> 510 ft2</p>
                                    </div>
                                 </div>
                                 <div class="col-md-12 d-flex align-items-center pb-2 card-footer">
                                    <img src="./img/profile.png" alt="" class="img-fluid">
                                    <p class="pl-2 gray">By Cris</p>
                                 </div>
                              </div>
                              
                           </div>
            </div>
        
      </div>
        <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
                        <!--<div class="row">-->
                        <!--   <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1500">-->
                        <!--      <div class="card">-->
                        <!--         <div class="col-md-12 card-in-btn">-->
                        <!--            <a href="#!" class="btn btn-link">For Sale</a> <a href="#!" class="btn btn-link">Home</a>-->
                        <!--         </div>-->
                        <!--         <div class="col-md-12 card-in-heart">-->
                        <!--            <a href="#!" class="heart"><i class="far fa-heart"></i></a>-->
                        <!--            <a href="#!" class="share"><i class="fas fa-share-square"></i></a>-->
                        <!--         </div>-->
                        <!--         <div class="card-map col-md-12 d-flex justify-content-between">-->
                        <!--            <a href="#!"><i class="fas fa-map-marker-alt"></i> 75 Prince St, NY, USA</a>-->
                        <!--            <a href="#!" class="camera"><i class="fas fa-camera"></i> 6</a>-->
                        <!--         </div>-->
                        <!--         <img class="card-img-top" src="./img/cardimg1.png" alt="Card image cap">-->
                        <!--         <div class="card-body">-->
                        <!--            <h4 class="card-title blue"><small> Luxury Family House <i class="fas fa-check green"></i></small></h4>-->
                        <!--            <p class="card-text orange"><b>$500,000</b></p>-->
                        <!--            <p class="pb-3 gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>-->
                        <!--            <div class="col-md-12 bed-icon pl-0">-->
                        <!--               <p><i class="fas fa-bed pr-2 l-blue"></i> 4 <i class="pl-2 pr-2 fas fa-bath l-blue"></i> 3 <i class="pl-2 fas fa-cube l-blue"></i> 510 ft2</p>-->
                        <!--            </div>-->
                        <!--         </div>-->
                        <!--         <div class="col-md-12 d-flex align-items-center pb-2 card-footer">-->
                        <!--            <img src="./img/profile.png" alt="" class="img-fluid">-->
                        <!--            <p class="pl-2 gray">By Cris</p>-->
                        <!--         </div>-->
                        <!--      </div>-->
                        <!--   </div>-->
                        <!--   <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1500">-->
                        <!--      <div class="card">-->
                        <!--         <div class="col-md-12 card-in-btn">-->
                        <!--            <a href="#!" class="btn btn-link">For Sale</a> <a href="#!" class="btn btn-link">Home</a>-->
                        <!--         </div>-->
                        <!--         <div class="col-md-12 card-in-heart">-->
                        <!--            <a href="#!" class="heart"><i class="far fa-heart"></i></a>-->
                        <!--            <a href="#!" class="share"><i class="fas fa-share-square"></i></a>-->
                        <!--         </div>-->
                        <!--         <div class="card-map col-md-12 d-flex justify-content-between">-->
                        <!--            <a href="#!"><i class="fas fa-map-marker-alt"></i> 75 Prince St, NY, USA</a>-->
                        <!--            <a href="#!" class="camera"><i class="fas fa-camera"></i> 6</a>-->
                        <!--         </div>-->
                        <!--         <img class="card-img-top" src="./img/cardimg2.png" alt="Card image cap">-->
                        <!--         <div class="card-body">-->
                        <!--            <h4 class="card-title blue"><small> Luxury Family House <i class="fas fa-check green"></i></small></h4>-->
                        <!--            <p class="card-text orange"><b>$500,000</b></p>-->
                        <!--            <p class="pb-3 gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>-->
                        <!--            <div class="col-md-12 bed-icon pl-0">-->
                        <!--               <p><i class="fas fa-bed pr-2 l-blue"></i> 4 <i class="pl-2 pr-2 fas fa-bath l-blue"></i> 3 <i class="pl-2 fas fa-cube l-blue"></i> 510 ft2</p>-->
                        <!--            </div>-->
                        <!--         </div>-->
                        <!--         <div class="col-md-12 d-flex align-items-center pb-2 card-footer">-->
                        <!--            <img src="./img/profile.png" alt="" class="img-fluid">-->
                        <!--            <p class="pl-2 gray">By Cris</p>-->
                        <!--         </div>-->
                        <!--      </div>-->
                        <!--   </div>-->
                        <!--   <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1500">-->
                        <!--      <div class="card">-->
                        <!--         <div class="col-md-12 card-in-btn">-->
                        <!--            <a href="#!" class="btn btn-link">For Sale</a> <a href="#!" class="btn btn-link">Home</a>-->
                        <!--         </div>-->
                        <!--         <div class="col-md-12 card-in-heart">-->
                        <!--            <a href="#!" class="heart"><i class="far fa-heart"></i></a>-->
                        <!--            <a href="#!" class="share"><i class="fas fa-share-square"></i></a>-->
                        <!--         </div>-->
                        <!--         <div class="card-map col-md-12 d-flex justify-content-between">-->
                        <!--            <a href="#!"><i class="fas fa-map-marker-alt"></i> 75 Prince St, NY, USA</a>-->
                        <!--            <a href="#!" class="camera"><i class="fas fa-camera"></i> 6</a>-->
                        <!--         </div>-->
                        <!--         <img class="card-img-top" src="./img/cardimg3.png" alt="Card image cap">-->
                        <!--         <div class="card-body">-->
                        <!--            <h4 class="card-title blue"><small> Luxury Family House <i class="fas fa-check green"></i></small></h4>-->
                        <!--            <p class="card-text orange"><b>$500,000</b></p>-->
                        <!--            <p class="pb-3 gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>-->
                        <!--            <div class="col-md-12 bed-icon pl-0">-->
                        <!--               <p><i class="fas fa-bed pr-2 l-blue"></i> 4 <i class="pl-2 pr-2 fas fa-bath l-blue"></i> 3 <i class="pl-2 fas fa-cube l-blue"></i> 510 ft2</p>-->
                        <!--            </div>-->
                        <!--         </div>-->
                        <!--         <div class="col-md-12 d-flex align-items-center pb-2 card-footer">-->
                        <!--            <img src="./img/profile.png" alt="" class="img-fluid">-->
                        <!--            <p class="pl-2 gray">By Cris</p>-->
                        <!--         </div>-->
                        <!--      </div>-->
                        <!--   </div>-->
                        <!--</div>-->
                     </div>
                     <div class="tab-pane fade" id="nav-profile1" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                     <div class="tab-pane fade" id="nav-contact1" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
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