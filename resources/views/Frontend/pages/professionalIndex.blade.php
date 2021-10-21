@extends('Frontend.layouts.app')

@section('content')
    <section class="sec-2 sec-3">
        <div class="container custom_container">
            <div class="row">
                <div class="col-md-12 m-cl" data-aos="fade-right" data-aos-duration="1500">
                    <h2 class="blue mb-0">Professionals Near You</h2>
                </div>
                <div class="col-lg-12">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a href="#!" class="pt blue">Sort By</a>
                            <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home2" role="tab"
                                aria-controls="nav-home" aria-selected="true">Newest</a>
                            <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile2" role="tab"
                                aria-controls="nav-profile" aria-selected="false">Top</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home2" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="swiper home_page_slider">
                                <div class="swiper-wrapper">

                                    @foreach ($professionals['new'] as $key => $pro)
                                        <div class="swiper-slide">
                                            <div class="professional_near_card" data-aos="fade-up" data-aos-duration="1500">
                                                <div class="card">
                                                    <div class="col-md-12 card-in-btn">
                                                        {{-- <a href="#!" class="btn btn-link">25 Listings</a> --}}
                                                    </div>
                                                    <div class="col-md-12 card-in-heart">
                                                        <a href="#!" class="heart" id="prof{{ $key }}"
                                                            style="border:{{ $pro->CheckFavourite() ?? '' ? '1px solid red' : '' }}; background: {{ $pro->CheckFavourite() ?? '' ? 'white' : '#dc5523' }} ">
                                                            @if ($pro->CheckFavourite() ?? '')
                                                                <i class="fas fa-heart"
                                                                    id="pro{{ $pro->title . '' . $key }}"
                                                                    onclick="DoUnfav('{{ $pro->id }}','{{ $pro->getTableName() }}',null,this.id)"
                                                                    style="color:red;"></i>
                                                            @else
                                                                <i class="far fa-heart"
                                                                    id="pro{{ $pro->title . '' . $key }}"
                                                                    onclick="Dofav('{{ $pro->id }}','{{ $pro->getTableName() }}','BusinessDetail')"></i>
                                                            @endif

                                                        </a>
                                                        @include('Frontend.pages.partials.shareElement',['link' => 'google.com'])
                                                        @include('Frontend.pages.partials.messageElement',['id' => $pro->id, 'title' => $pro->business_name, 'modal' => 'BusinessDetail','user'  => $pro->BusinessUser->fullname,'user_id'  => $pro->User->id])
                                                    </div>
                                                    <div class="card-map col-md-12 d-flex justify-content-between">
                                                        <a href="#"
                                                            onclick="OpenRatingModal('{{ $pro->business_name }}','{{ $pro->UserBusinessServicesString() }}','Address','{{ $pro->id }}')">
                                                            <span>
                                                                @for ($i = 0; $i < 5; $i++)
                                                                    @if (round($pro->reviewsAvg) > $i)
                                                                        <i class="fas fa-star"></i>
                                                                    @else
                                                                        <i class="fas fa-star" style="color: gray"></i>
                                                                    @endif
                                                                @endfor
                                                            </span> {{ $pro->reviewComment }}

                                                        </a>
                                                        <a href="#!" class="camera"><i class="fas fa-camera"></i>
                                                            {{ count($pro->CoverImages) }}</a>
                                                    </div>
                                                    <img class="card-img-top"
                                                        src="{{ asset($pro->FristCoverImage->path ?? $pro->business_profile_pic) }}"
                                                        alt="Card image cap">
                                                    <a href="{{ route('ProfessionalDetail', $pro->slug) }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title blue"><small>
                                                                    {{-- {{ $pro->UserBusinessCategoriesString() }} --}}
                                                                    {{ $pro->business_name }}
                                                                </small>
                                                            </h4>
                                                            <p class="card-text orange d-flex align-items-center">
                                                                <b>{{ substr($pro->UserBusinessServicesString() ?? '', 0, 25) . '....' }}</b>
                                                            </p>
                                                            <p class="pb-3 gray">
                                                                {{ substr($pro->business_details ?? '', 0, 150) . '....' }}
                                                            </p>
                                                        </div>
                                                    </a>

                                                    <div class="col-md-12 card-footer">
                                                        <!--<button class="btn-link">-->
                                                        <!--   View Profile-->
                                                        <!--</button>-->
                                                        <img src="{{ asset($pro->BusinessUser->profile_pic) }}" alt=""
                                                            style="width:50px" class="img-fluid">
                                                        <div class="ab-right">
                                                            <a href="tel:{{ $pro->business_phone }}"><i class="fas fa-phone-alt"></i></a>
                                                            <a href="mail:{{ $pro->BusinessUser->email }}"><i class="far fa-envelope"></i></a>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="swiper home_page_slider">
                                <div class="swiper-wrapper">

                                    @foreach ($professionals['top'] as $pro)
                                        <div class="swiper-slide">
                                            <div class="professional_near_card" data-aos="fade-up" data-aos-duration="1500">
                                                <div class="card">
                                                    <div class="col-md-12 card-in-btn">
                                                        {{-- <a href="#!" class="btn btn-link">25 Listings</a> --}}
                                                    </div>
                                                    <div class="col-md-12 card-in-heart">
                                                        <a href="#!" class="heart"><i
                                                                class="far fa-heart"></i></a>
                                                        @include('Frontend.pages.partials.shareElement',['link' => 'google.com'])
                                                        @include('Frontend.pages.partials.messageElement',['id' => $pro->id, 'title' => $pro->business_name, 'modal' => 'BusinessDetail','user'  => $pro->BusinessUser->fullname,'user_id'  => $pro->User->id])
                                                    </div>
                                                    <div class="card-map col-md-12 d-flex justify-content-between">
                                                        <a href="#"
                                                            onclick="OpenRatingModal('{{ $pro->business_name }}','{{ $pro->UserBusinessServicesString() }}','Address','{{ $pro->id }}')">
                                                            <span>
                                                                @for ($i = 0; $i < 5; $i++)
                                                                    @if (round($pro->reviewAvg) > $i)
                                                                        <i class="fas fa-star"></i>
                                                                    @else
                                                                        <i class="fas fa-star" style="color: gray"></i>
                                                                    @endif
                                                                @endfor
                                                            </span> {{ $pro->reviewComment }}

                                                        </a>
                                                        <a href="#!" class="camera"><i class="fas fa-camera"></i>
                                                            {{ count($pro->CoverImages) }}</a>
                                                    </div>
                                                    <img class="card-img-top"
                                                        src="{{ asset($pro->FristCoverImage->path ?? $pro->business_profile_pic) }}"
                                                        alt="Card image cap">
                                                    <a href="{{ route('ProfessionalDetail', $pro->slug) }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title blue"><small>
                                                                    {{-- {{ $pro->UserBusinessCategoriesString() }} --}}
                                                                    {{ $pro->business_name }}
                                                                </small>
                                                            </h4>
                                                            <p class="card-text orange d-flex align-items-center">
                                                                <b>{{ substr($pro->UserBusinessServicesString() ?? '', 0, 25) . '....' }}</b>
                                                            </p>
                                                            <p class="pb-3 gray">
                                                                {{ substr($pro->business_details ?? '', 0, 150) . '....' }}
                                                            </p>
                                                        </div>
                                                    </a>

                                                    <div class="col-md-12 card-footer">
                                                        <!--<button class="btn-link">-->
                                                        <!--   View Profile-->
                                                        <!--</button>-->
                                                        <img src="{{ asset($pro->BusinessUser->profile_pic) }}" alt=""
                                                            style="width:50px" class="img-fluid">
                                                        <div class="ab-right">
                                                            <a href="tel:{{ $pro->business_phone }}"><i class="fas fa-phone-alt"></i></a>
                                                            <a href="mail:{{ $pro->BusinessUser->email }}"><i class="far fa-envelope"></i></a>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
