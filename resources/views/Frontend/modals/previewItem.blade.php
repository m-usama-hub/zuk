<div class="modal fade" id="previewItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content buy_pop_modal">
          <div class="modal-body">
             <div class="col-lg-12 detail-box mt-3">
                <div class="row">
                   <div class="col-lg-4">
                      {{-- <img src="{{ asset('Frontend/img/buy_sell_details.png') }}" alt="" class="img-fluid"> --}}
                      <div class="gr_photos">
                        <div class="swiper modalSwiper swiper-initialized swiper-horizontal swiper-pointer-events">
                           <div class="swiper-wrapper" id="swiper-wrapper-030becf1010c7a5e07" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                              <div class="swiper-slide" >
                                 <img src="{{ asset('Frontend/img/Group413.png') }}" alt="" class="pr_photo display_image_0">
                                 

                              </div>
                              <div class="swiper-slide " >
                                 <img src="{{ asset('Frontend/img/Group413.png') }}" alt="" class="pr_photo display_image_1">
                                 

                              </div>
                              <div class="swiper-slide" >
                                 <img src="{{ asset('Frontend/img/Group413.png') }}" alt="" class="pr_photo display_image_2">
                                 

                              </div>
                              <div class="swiper-slide" >
                                 <img src="{{ asset('Frontend/img/Group413.png') }}" alt="" class="pr_photo display_image_3">
                                 

                              </div>
                              <div class="swiper-slide" >
                                 <img src="{{ asset('Frontend/img/Group413.png') }}" alt="" class="pr_photo display_image_4">
                                 

                              </div>
                              <div class="swiper-slide" >
                                 <img src="{{ asset('Frontend/img/Group413.png') }}" alt="" class="pr_photo display_image_5">
                                 

                              </div>
                           </div>
                           <div class="swiper-button-next" tabindex="0" role="button" aria-label="undefined" aria-controls="Next slide" aria-disabled="false"></div>
                           <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="undefined" aria-controls="Previous slide" aria-disabled="true"></div>
                           <div class="swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">9</span></div>
                           <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                        <!-- Slider main container -->
                     </div>
                   </div>
                   <div class="col-lg-8 media_content">
                      <div class="media">
                         <img class="mr-3" src="{{ asset(Auth::user()->UserDetail->profile_pic) }}"  width="100" class="img-fluid" alt="Generic placeholder image">
                         <div class="media-body">
                            <h3 class="mt-0 blue"> <span class="title"> Toshiba 65 Inches 4K HD TV</span> <span class="ab-right price">$4.69</span></h3>
                            <p class="gray"> <span class="ab-right delivery_type">Collection</span> <span class="ab-right collection">Delivery</span></p>
                            <ul class="single_room_details">
                               <li class="gray location_address"></li>
                               <li>{{ Auth::user()->UserDetail->fullname }}</li>
                            </ul>
                         </div>
                      </div>
                      <div class="pr-description">
                         <h4 class="blue">Description</h4>
                         <p class="addReadMore showlesscontent description">that I hired the above service provider and that
                            this review is based on my personal experience of the service I received and is my
                            honest opinion of this company or person. I have not received any additional
                            benefits or rewards f I hired the above service provider and that this review is
                            based on my personal experience of the service I received and is my honest opinion
                            of this company or person. I have not received any additional benefits or rewards
                            for I hired the above service provider and that this review is based on my personal
                            experience of the service I received and is my honest opinion of this company or
                            person. I have not received any additional benefits or rewards for I hired the above
                            service provider and that this review is based on my personal experience of the
                            service I received and is my honest opinion
                            of this company or person. I have not received any additional benefits or rewards
                            for I
                         </p>
                         {{-- <div class="col-md-12 card-in-heart card_in_heart_1">
                            <a href="#!" class="heart"><i class="far fa-heart"></i></a>
                            <a href="#!" class="share"><i class="fas fa-share-square"></i></a>
                            <a href="#!" class="share mt-2"><i class="far fa-comment-alt"></i></a>
                         </div> --}}
                      </div>
                      <div class="web_site_views">
                         <a href="https://www.mywebsite.ca"> <img src="./img/icon-web.png" class="img-fluid" alt=""> <span class="website_link">https://www.mywebsite.ca</span></a>
                         {{-- <a href="#!" class="views">123 reviews</a> --}}
                      </div>
                      <div class="contact-desc">
                        <a href="tel: {{ Auth::user()->UserBusinessDetail->business_phone }}"><i
                           class="fas fa-phone-alt l-blue pr-2"></i>
                       {{ Auth::user()->UserBusinessDetail->business_phone }}</a>
                   <a href="mailto:{{ Auth::user()->UserDetail->email }}"><i
                           class="fas fa-envelope l-blue pl-2 pr-2"></i>
                       {{ Auth::user()->UserDetail->email }}</a>
                     </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>