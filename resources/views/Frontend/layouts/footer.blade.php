<footer>
    <div class="footer">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-2">
                    <a href="./index.php">
                        <img src="Frontend/img/footer.png" class="img-fluid" alt="">
                    </a>

                </div>
                <div class="col-lg-2">
                    <h5 class="blue">{{ __('Our Bussiness') }}</h5>
                    <ul class="list-style text-small">
                        <li><a class="text-muted" href="about_us.php">{{ __('About Us') }}</a></li>
                        <li><a class="text-muted" href="#!">{{ __('Contact Us') }}</a></li>
                        <li><a class="text-muted" href="#!">{{ __('Terms Of Use') }}</a></li>
                        <li><a class="text-muted" href="#!">{{ __('Privacy Policy') }}</a></li>
                        <li><a class="text-muted" href="#!">{{ __('Rate Us') }}</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h5 class="blue">{{ __('Help') }}</h5>
                    <ul class="list-style text-small">
                        <li><a class="text-muted" href="#!">{{ __('FAQ') }}</a></li>
                        <li><a class="text-muted" href="#!">{{ __('Support') }}</a></li>
                        <li><a class="text-muted" href="#!">{{ __('Join') }}</a></li>
                        <li><a class="text-muted" href="#!">{{ __('Support') }}</a></li>
                        {{-- <li><a class="text-muted" href="#!">{{ __('Add Your Business') }}</a></li> --}}
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul class="list-style text-small footer_three">

                        @if (Auth::user())
                            @if (Auth::user()->UserHasBusinessProfile())
                                <li><a class="text-muted" type="button" data-toggle="modal"
                                        data-target="#postproject">{{ __('Add A project Or Job') }} </a>
                                </li>
                                <li><a class="text-muted" type="button" data-toggle="modal"
                                        data-target="#buisness_property">{{ __('' . AppHelper::getCmsData('indexProperty', 'Page Modal')) }}
                                    </a></li>
                                <li><a class="text-muted" type="button" data-toggle="modal"
                                        data-target="#itemtosell">{{ __('' . AppHelper::getCmsData('indexItem', 'Page Modal')) }}
                                    </a></li>
                                <li><a class="text-muted" type="button" data-toggle="modal"
                                        data-target="#postmessage">{{ __('' . AppHelper::getCmsData('indexMessage', 'Page Modal')) }}
                                    </a></li>
                                <li><a class="text-muted" type="button" data-toggle="modal"
                                        data-target="#mydetails">{{ __('' . AppHelper::getCmsData('indexHousemate', 'Page Modal')) }}
                                    </a>
                                </li>
                            @endif
                        @endif

                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5 class="blue">{{ __('Newsletter') }}</h5>
                    <p>{{ __('Sign Up to our newsletter and get lastest news and updates') }}</p>
                    <form class="footer-form">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="{{ __('Email Address') }}">
                        </div>
                        <button type="submit"
                            class="btn btn-link text-white subscribe_btn">{{ __('Subscribe') }}</button>
                        <a href="#!" class="green"><i class="fab fa-instagram"></i></a> <a href="#!"
                            class="green"><i class="fab fa-facebook-f"></i></a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center copy-right">
        <div class="custom_container">
            <p>
                {{ __('' . AppHelper::SystemConfig('footer_text')) }}
            </p>
            <p>{{ __('' . AppHelper::SystemConfig('footer_cprt')) }}</p>
        </div>
    </div>

</footer>
