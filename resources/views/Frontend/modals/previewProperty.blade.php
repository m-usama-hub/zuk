<div class="modal fade" id="previewProperty" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content find_property_pop_up">
            <div class="modal-body d-flex">
                <div class="col-lg-4">
                    {{-- <img src="./img/pd2.png" alt="" class="img-fluid"> --}}
                    <div class="gr_photos">
                        <div class="swiper modalSwiper swiper-initialized swiper-horizontal swiper-pointer-events">
                            <div class="swiper-wrapper" id="swiper-wrapper-030becf1010c7a5e07" aria-live="polite"
                                style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide">
                                    <img src="{{ asset('Frontend/img/Group413.png') }}" alt=""
                                        class="pr_photo display_image_0">


                                </div>
                                <div class="swiper-slide ">
                                    <img src="{{ asset('Frontend/img/Group413.png') }}" alt=""
                                        class="pr_photo display_image_1">


                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('Frontend/img/Group413.png') }}" alt=""
                                        class="pr_photo display_image_2">


                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('Frontend/img/Group413.png') }}" alt=""
                                        class="pr_photo display_image_3">


                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('Frontend/img/Group413.png') }}" alt=""
                                        class="pr_photo display_image_4">


                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('Frontend/img/Group413.png') }}" alt=""
                                        class="pr_photo display_image_5">


                                </div>
                            </div>
                            <div class="swiper-button-next" tabindex="0" role="button" aria-label="undefined"
                                aria-controls="Next slide" aria-disabled="false"></div>
                            <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button"
                                aria-label="undefined" aria-controls="Previous slide" aria-disabled="true"></div>
                            <div class="swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal"><span
                                    class="swiper-pagination-current">1</span> / <span
                                    class="swiper-pagination-total">9</span></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                        <!-- Slider main container -->
                    </div>
                </div>
                <div class="col-lg-8 media_content">
                    <div class="media">
                        <img class="mr-3"
                            src="{{ asset(Auth::user()->UserBusinessDetail->BusinessUser->profile_pic ?? '') }}"
                            width="100" alt="Generic placeholder image">
                        <div class="media-body">
                            <h3 class="mt-0 blue"> <span class="property_beds">2 Bedroom</span> <span
                                    class="property_type">Basement Flat</span><span
                                    class="ab-right sale_price">$250,000.00</span></h3>
                            <p class="gray address">Vanguard Drive, Etobicoke ON M9B 5E7 <span
                                    class="ab-right for_type">For Sale</span></p>
                        </div>
                    </div>
                    <div class="pr-description">
                        <ul class="smart_realtor">
                            <li>
                                <p class="title">Smart Realtors</p>
                            </li>
                            <li><i class="fas fa-bed pr-2 l-blue icons-p"></i> <span class="property_beds">3</span>
                            </li>
                            <li><i class="pl-2 pr-2 fas fa-bath l-blue"></i> <span class="property_baths">1</span> </li>
                            <li><i class="pl-2 fas fa-cube l-blue"></i> <span
                                    class="property_type">Flat/Apartment</span> </li>
                        </ul>
                        <h4 class="blue">Property Description</h4>
                        <p class="addReadMore showlesscontent description">that I hired the above service provider and
                            that
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
                        {{-- <div class="col-md-12 card-in-heart">
                      <a href="#!" class="heart"><i class="far fa-heart"></i></a>
                      <a href="#!" class="share"><i class="fas fa-share-square"></i></a>
                      <a href="#!" class="share mt-2"><i class="far fa-comment-alt"></i></a>
                   </div> --}}
                        <h4 class="blue">Other information</h4>
                        <p class="addReadMore showlesscontent other_info">that I hired the above service provider and
                            that
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
                    </div>
                    <div class="contact-desc0 pb-3">
                        <a href="#"><i class="fas fa-user-alt l-blue"></i> Contact person |
                            {{ Auth::user()->UserBusinessDetail->BusinessUser->fullname ?? '' }}</a>
                    </div>
                    <div class="contact-desc">
                        <a href="tel: {{ Auth::user()->UserBusinessDetail->business_phone ?? '' }}"><i
                                class="fas fa-phone-alt l-blue pr-2"></i>
                            {{ Auth::user()->UserBusinessDetail->business_phone ?? '' }}</a> <a
                            href="mailto:{{ Auth::user()->UserDetail->email }}"><i
                                class="fas fa-envelope l-blue pl-2 pr-2"></i>
                            {{ Auth::user()->UserDetail->email }}</a>
                        {{-- <a href="#!" class="views"><i class="fas fa-eye l-blue"></i> Viewed | 10</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
