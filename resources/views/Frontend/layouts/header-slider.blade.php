<section class="home-sec1"
    style="background-image: url({{ asset(AppHelper::SystemConfig('header_cover_image')) }})">
    @php
        $data = AppHelper::getDataBasesOnPage();
    @endphp
    <div class="container custom_container">
        <div class="row align-items-center">
            <div class="col-md-8" data-aos="fade-right" data-aos-duration="1500">
                <h3 class="pb-3">{{ $data['heading'] ?? '' }}</h3>
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
                    {{-- <a href="#!">Post Your Project or Job</a> --}}

                    <a href='#!' data-toggle="modal"
                        data-target="{{ $data['ModalId'] ?? '' }}">{{ $data['LinkHtmlText'] ?? '' }}</a>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Button trigger modal -->
                <button type="button" class="btn img-video-btn" data-toggle="modal" data-target="#exampleModal">
                    <div class="img-size">
                        <img src="Frontend/img/video.png" alt="" class="img-fluid">
                    </div>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                {{-- <iframe width="470px" height="400" src="{{ asset(AppHelper::SystemConfig('header_video')) }}"
                                    frameborder="0"
                                    allow="accelerometer;hand clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
