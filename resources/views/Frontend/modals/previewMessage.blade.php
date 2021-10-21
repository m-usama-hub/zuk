<div class="modal fade" id="previewMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content find_property_pop_up">
            <div class="modal-body d-flex">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 detail-box">
                            <div class="row">
                                <div class="col-lg-4">
                                    {{-- <img src="./img/share-message-details.png" alt="" class="img-fluid"> --}}
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
                                        <img class="mr-3" src="{{ asset(Auth::user()->UserDetail->profile_pic) }}"  width="100"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h3 class="mt-0 blue title">Parents Support Group Meeting<span
                                                    class="ab-right"><i class="far fa-calendar-alt"></i>{{ date('d M Y') }}</span></h3>
                                            <ul class="single_room_details">
                                                <li class="gray">{{ Auth::user()->UserDetail->fullname }}</li>
                                                <li class="gray"> {{ Auth::user()->UserDetail->address }}</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="pr-description">
                                        <h4 class="blue">Description</h4>
                                        <p class="addReadMore showlesscontent message">that I hired the above service provider
                                            and that
                                            this review is based on my personal experience of the service I received and
                                            is my
                                            honest opinion of this company or person. I have not received any additional
                                            benefits or rewards f I hired the above service provider and that this
                                            review is
                                            based on my personal experience of the service I received and is my honest
                                            opinion
                                            of this company or person. I have not received any additional benefits or
                                            rewards
                                            for I hired the above service provider and that this review is based on my
                                            personal
                                            experience of the service I received and is my honest opinion of this
                                            company or
                                            person. I have not received any additional benefits or rewards for I hired
                                            the above
                                            service provider and that this review is based on my personal experience of
                                            the
                                            service I received and is my honest opinion
                                            of this company or person. I have not received any additional benefits or
                                            rewards
                                            for I</p>
                                        <div class="col-md-12 card-in-heart">
                                            <a href="#!" class="heart"><i class="far fa-heart"></i></a>
                                            <a href="#!" class="share"><i class="fas fa-share-square"></i></a>
                                            <a href="#!" class="share mt-2"><i class="far fa-comment-alt"></i></a>

                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-md-2">
                                            <div class="room_available">
                                                <span class="blue">
                                                    <i class="fas fa-thumbs-up"></i>
                                                </span>
                                                <span class=" custom_border">
                                                    0
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="location_room">
                                                <span class="blue">
                                                    <i class=" orange far fa-comment-alt"></i>
                                                </span>
                                                <span class=" custom_border">
                                                    0
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="contact-desc">
                                                <ul>
                                                    <li> <a href="tel: {{ Auth::user()->UserBusinessDetail->business_phone }}"><i
                                                                class="fas fa-phone-alt l-blue pr-2"></i>
                                                            {{ Auth::user()->UserBusinessDetail->business_phone }}</a></li>
                                                    <li> <a href="mailto:{{ Auth::user()->UserDetail->email }}"><i
                                                                class="fas fa-envelope l-blue pl-2 pr-2"></i>
                                                            {{ Auth::user()->UserDetail->email }}</a></li>
                                                </ul>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
