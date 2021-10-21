@extends('Frontend.layouts.app')

@section('content')

    <!--======= News And Updates ===== -->
    <section class="home-sec2 pt-3 pb-3">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12" data-aos="fade-right" data-aos-duration="1500">
                    <h2 class="blue">News And Updates</h2>
                </div>
                <div class="col-lg-12">
                    <div class="swiper-container new_update_slider" data-aos="fade-up" data-aos-duration="1500">
                        <div class="swiper-wrapper">
                            @foreach ($news as $property)
                                <a href="{{ $property->link }}">
                                    <div class="swiper-slide">
                                        <div class="col-md-3 swp-shadow">
                                            <h2>{{ date('d', strtotime($property->created_at)) }}</h2>
                                            <p>{{ date('M', strtotime($property->created_at)) }}</p>
                                        </div>
                                        <div class="col-md-9 swp-icons">
                                            <h6 class="blue">{{ $property->title }}</h6>
                                            <div class="col-md-12 d-flex align-items-center">
                                                <p><i class="fas fa-user"></i>
                                                    {{ $property->BusinessDetail->BusinessUser->fullname }}</p>
                                                <p><i class="fas fa-comments"></i> {{ number_format($property->views) }}
                                                    Views</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>
                    <div class="swiper-button-next" id="swiper-button-next-news"></div>
                    <div class="swiper-button-prev" id="swiper-button-prev-news"></div>
                </div>

            </div>
        </div>
    </section>
    <!--======= Latest Properties ===== -->
    <section class="sec-2">
        <div class="container custom_container">
            <div class="row">
                <div class="col-md-12 m-cl">
                    <h2 class="blue mb-0" data-aos="fade-right" data-aos-duration="1500">Latest Properties</h2>
                </div>
                <div class="col-lg-12">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link  active" id="nav-profile-tab" data-toggle="tab" href="#nav-home1" role="tab"
                                aria-controls="nav-profile" aria-selected="false">For Sale</a>
                            <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-profile1" role="tab"
                                aria-controls="nav-contact" aria-selected="false">For Rent</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home1" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="swiper home_page_slider">
                                <div class="swiper-wrapper">

                                    @foreach ($properties['sale'] as $key => $property)
                                        <div class="swiper-slide">
                                            <div class="latest_properties_card" data-aos="fade-up" data-aos-duration="1500">
                                                <div class="card">
                                                    <div class="col-md-12 card-in-btn">
                                                        <a href="#!" class="btn btn-link">For
                                                            {{ $property->for_type ?? '' }}</a> <a href="#!"
                                                            class="btn btn-link">{{ $property->property_type ?? '' }}</a>
                                                    </div>
                                                    <div class="col-md-12 card-in-heart">
                                                        <a href="#!" class="heart" id="heartProp{{ $key }}"
                                                            style="border:{{ $property->CheckFavourite() ?? '' ? '1px solid red' : '' }}; background: {{ $property->CheckFavourite() ?? '' ? 'white' : '#dc5523' }} ">
                                                            @if ($property->CheckFavourite() ?? '')
                                                                <i class="fas fa-heart"
                                                                    id="propertysale{{ $property->title . '' . $key }}"
                                                                    onclick="DoUnfav('{{ $property->id }}','{{ $property->getTableName() }}',null,this.id)"
                                                                    style="color:red;"></i>
                                                            @else
                                                                <i class="far fa-heart"
                                                                    id="propertysale{{ $property->title . '' . $key }}"
                                                                    onclick="Dofav('{{ $property->id }}','{{ $property->getTableName() }}','Property')"></i>
                                                            @endif

                                                        </a>
                                                        @include('Frontend.pages.partials.shareElement',['link' => 'google.com'])
                                                        @include('Frontend.pages.partials.messageElement',['id' => $property->id, 'title' => $property->title, 'modal' => 'Property','user'  => $property->BusinessDetail->BusinessUser->fullname,'user_id'  => $property->BusinessDetail->User->id])
                                                    </div>
                                                    <div class="card-map col-md-12 d-flex justify-content-between">
                                                        <a href="#!"><i
                                                                class="fas fa-map-marker-alt"></i>{{ $property->address ?? '' }}</a>
                                                        <a href="#!" class="camera"><i class="fas fa-camera"></i>
                                                            {{ count($property->CoverImages) }}</a>
                                                    </div>
                                                    <img class="card-img-top"
                                                        src="{{ asset($property->FristCoverImage->path ?? $property->cover_image ?? '') }}"
                                                        alt="Card image cap">
                                                    <a href="{{ route('PropertyDetail', $property->slug) }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title blue"><small>
                                                                    {{ $property->title ?? '' }}
                                                                    <i class="fas fa-check green"></i></small></h4>
                                                            <p class="card-text orange">
                                                                <b>${{ number_format($property->sale_price) }}</b>
                                                            </p>
                                                            <p class="pb-3 gray">
                                                                {{ substr($property->description ?? '', 0, 150) . '....' }}
                                                            </p>
                                                            <div class="col-md-12 bed-icon pl-0">
                                                                <p><i class="fas fa-bed pr-2 l-blue"></i>
                                                                    {{ explode(' ', $property->property_beds ?? '')[0] }}
                                                                    <i class="pl-2 pr-2 fas fa-bath l-blue"></i>
                                                                    {{ explode(' ', $property->property_baths ?? '')[0] }}
                                                                    {{-- <i class="pl-2 fas fa-cube l-blue"></i> 510 ft2 --}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="col-md-12 d-flex align-items-center pb-2 card-footer">
                                                        <img src="{{ asset($property->BusinessDetail->BusinessUser->profile_pic) }}"
                                                            style="width: 50px;" class="img-fluid">
                                                        <p class="pl-2 gray">
                                                            {{ $property->BusinessDetail->BusinessUser->fullname }}
                                                        </p>
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
                        <div class="tab-pane fade" id="nav-profile1" role="tabpanel" aria-labelledby="nav-profile-tab">

                            <div class="swiper home_page_slider">
                                <div class="swiper-wrapper">

                                    @foreach ($properties['rent'] as $key => $property)
                                        <div class="swiper-slide">
                                            <div class="latest_properties_card" data-aos="fade-up" data-aos-duration="1500">
                                                <div class="card">
                                                    <div class="col-md-12 card-in-btn">
                                                        <a href="#!" class="btn btn-link">For
                                                            {{ $property->for_type ?? '' }}</a> <a href="#!"
                                                            class="btn btn-link">{{ $property->property_type ?? '' }}</a>
                                                    </div>
                                                    <div class="col-md-12 card-in-heart">
                                                        <a href="#!" class="heart"
                                                            id="heartProp2{{ $key }}"
                                                            style="border:{{ $property->CheckFavourite() ?? '' ? '1px solid red' : '' }}; background: {{ $property->CheckFavourite() ?? '' ? 'white' : '#dc5523' }} ">
                                                            @if ($property->CheckFavourite() ?? '')
                                                                <i class="fas fa-heart"
                                                                    id="propertysale{{ $property->title . '' . $key }}"
                                                                    onclick="DoUnfav('{{ $property->id }}','{{ $property->getTableName() }}',null,this.id)"
                                                                    style="color:red;"></i>
                                                            @else
                                                                <i class="far fa-heart"
                                                                    id="propertysale{{ $property->title . '' . $key }}"
                                                                    onclick="Dofav('{{ $property->id }}','{{ $property->getTableName() }}','Property')"></i>
                                                            @endif

                                                        </a>
                                                        @include('Frontend.pages.partials.shareElement',['link' => 'google.com'])
                                                        @include('Frontend.pages.partials.messageElement',['id' => $property->id, 'title' => $property->title, 'modal' => 'Property','user'  => $property->BusinessDetail->BusinessUser->fullname,'user_id'  => $property->BusinessDetail->User->id])
                                                    
                                                    </div>
                                                    <div class="card-map col-md-12 d-flex justify-content-between">
                                                        <a href="#!"><i
                                                                class="fas fa-map-marker-alt"></i>{{ $property->address ?? '' }}</a>
                                                        <a href="#!" class="camera"><i class="fas fa-camera"></i>
                                                            {{ count($property->CoverImages) }}</a>
                                                    </div>
                                                    <img class="card-img-top"
                                                        src="{{ asset($property->FristCoverImage->path ?? $property->cover_image ?? '') }}"
                                                        alt="Card image cap">
                                                    <a href="{{ route('PropertyDetail', $property->slug) }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title blue"><small>
                                                                    {{ $property->title ?? '' }}
                                                                    <i class="fas fa-check green"></i></small></h4>
                                                            <p class="card-text orange">
                                                                <b>${{ number_format($property->sale_price) }}</b>
                                                            </p>
                                                            <p class="pb-3 gray">
                                                                {{ substr($property->description ?? '', 0, 150) . '....' }}
                                                            </p>
                                                            <div class="col-md-12 bed-icon pl-0">
                                                                <p><i class="fas fa-bed pr-2 l-blue"></i>
                                                                    {{ explode(' ', $property->property_beds ?? '')[0] }}
                                                                    <i class="pl-2 pr-2 fas fa-bath l-blue"></i>
                                                                    {{ explode(' ', $property->property_baths ?? '')[0] }}
                                                                    {{-- <i class="pl-2 fas fa-cube l-blue"></i> 510 ft2 --}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="col-md-12 d-flex align-items-center pb-2 card-footer">
                                                        <img src="{{ asset($property->BusinessDetail->BusinessUser->profile_pic) }}"
                                                            style="width: 50px;" class="img-fluid">
                                                        <p class="pl-2 gray">
                                                            {{ $property->BusinessDetail->BusinessUser->fullname }}
                                                        </p>
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
    <!--======= Professionals Near You ===== -->
    <section class="sec-2 sec-3">
        <div class="container custom_container">
            <div class="row">
                <div class="col-md-12 m-cl" data-aos="fade-right" data-aos-duration="1500">
                    <h2 class="blue mb-0">Professionals Near You</h2>
                </div>
                <div class="col-lg-12">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a href="#!" class="pt blue"></a>
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
                                            <div class="professional_near_card" data-aos="fade-up"
                                                data-aos-duration="1500">
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
                                                            onclick="OpenRatingModal('{{ $pro->business_name }}','{{ $pro->UserBusinessServicesString() }}','Address','{{ $pro->id }}')"><span>
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
                                            <div class="professional_near_card" data-aos="fade-up"
                                                data-aos-duration="1500">
                                                <div class="card">
                                                    <div class="col-md-12 card-in-btn">
                                                        {{-- <a href="#!" class="btn btn-link">25 Listings</a> --}}
                                                    </div>
                                                    <div class="col-md-12 card-in-heart">
                                                        <a href="#!" class="heart" id="prof2{{ $key }}"
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========= Items for Sale ========= -->
    <section class="sec-2 sec-4">
        <div class="container custom_container">
            <div class="row">
                <div class="col-md-12 m-cl" data-aos="fade-right" data-aos-duration="1500">
                    <h2 class="blue mb-0">Items for Sale</h2>
                </div>
                <div class="col-lg-12">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home3" role="tab"
                                aria-controls="nav-home" aria-selected="true">All Type</a>
                            <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile3"
                                role="tab" aria-controls="nav-profile" aria-selected="false">Newest</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home3" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="swiper home_page_slider">
                                <div class="swiper-wrapper">
                                    @foreach ($items['all'] as $item)
                                        <div class="swiper-slide">
                                            <div class="item_sale_card" data-aos="fade-up" data-aos-duration="1500">
                                                <div class="card">
                                                    <div class="col-md-12 card-in-btn">
                                                        <a href="#!"
                                                            class="btn btn-link">{{ $item->ItemCategory->category }}</a>
                                                        {{-- <a href="#!" class="btn btn-link">--------</a> --}}
                                                    </div>
                                                    <div class="col-md-12 card-in-heart">
                                                        <a href="#!" class="heart" id="item{{ $key }}"
                                                            style="border:{{ $item->CheckFavourite() ?? '' ? '1px solid red' : '' }}; background: {{ $item->CheckFavourite() ?? '' ? 'white' : '#dc5523' }} ">
                                                            @if ($item->CheckFavourite() ?? '')
                                                                <i class="fas fa-heart"
                                                                    id="item{{ $item->title . '' . $key }}"
                                                                    onclick="DoUnfav('{{ $item->id }}','{{ $item->getTableName() }}',null,this.id)"
                                                                    style="color:red;"></i>
                                                            @else
                                                                <i class="far fa-heart"
                                                                    id="item{{ $item->title . '' . $key }}"
                                                                    onclick="Dofav('{{ $item->id }}','{{ $item->getTableName() }}','Item')"></i>
                                                            @endif

                                                        </a>
                                                        @include('Frontend.pages.partials.shareElement',['link' => 'google.com'])
                                                        @include('Frontend.pages.partials.messageElement',['id' => $item->id, 'title' => $item->title, 'modal' => 'BusinessDetail','user'  => $item->BusinessDetail->BusinessUser->fullname,'user_id'  => $item->BusinessDetail->User->id])
                                                    </div>
                                                    <div class="card-map col-md-12 d-flex justify-content-between">
                                                        <a href="#!"><i
                                                                class="fas fa-map-marker-alt"></i>{{ $item->location_address }}</a>
                                                        <a href="#!" class="camera"><i class="fas fa-camera"></i>
                                                            {{ count($item->CoverImages) }}</a>
                                                    </div>
                                                    <img class="card-img-top" src="{{ asset($item->FristCoverImage->path ?? $item->cover_image) }}"
                                                        alt="Card image cap">
                                                    <a href="{{ route('ItemDetail', $item->slug) }}">
                                                        <div class="card-body">
                                                            {{-- <div class="rating_buy_sell">
                                                                <span><i class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i></span>
                                                            </div> --}}
                                                            <h4 class="card-title blue"><small> {{ $item->title }} <i
                                                                        class="fas fa-check green"></i></small></h4>
                                                            <p class="card-text orange d-flex align-items-center">
                                                                <b>${{ $item->price_free == 1 ? '0' : number_format($item->price) }}</b>
                                                                {{-- <span class="sm-size">Only 3 Left</span> --}}
                                                            </p>
                                                            <p class="pb-3 gray">
                                                                {{ substr($item->description ?? '', 0, 150) . '....' }}
                                                            </p>
                                                        </div>
                                                    </a>
                                                    <div class="col-md-12 d-flex align-items-center pb-2 card-footer">
                                                        <img src="{{ asset($item->profile_pic) }}" style="width:50px"
                                                            alt="" class="img-fluid">
                                                        <p class="pl-2 gray">By
                                                            {{ $item->BusinessDetail->BusinessUser->fullname }}</p>
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
                        <div class="tab-pane fade" id="nav-profile3" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="swiper home_page_slider">
                                <div class="swiper-wrapper">
                                    @foreach ($items['new'] as $item)
                                        <div class="swiper-slide">
                                            <div class="item_sale_card" data-aos="fade-up" data-aos-duration="1500">
                                                <div class="card">
                                                    <div class="col-md-12 card-in-btn">
                                                        <a href="#!"
                                                            class="btn btn-link">{{ $item->ItemCategory->category }}</a>
                                                        {{-- <a href="#!" class="btn btn-link">--------</a> --}}
                                                    </div>
                                                    <div class="col-md-12 card-in-heart">
                                                        <a href="#!" class="heart" id="item2{{ $key }}"
                                                            style="border:{{ $item->CheckFavourite() ?? '' ? '1px solid red' : '' }}; background: {{ $item->CheckFavourite() ?? '' ? 'white' : '#dc5523' }} ">
                                                            @if ($item->CheckFavourite() ?? '')
                                                                <i class="fas fa-heart"
                                                                    id="item{{ $item->title . '' . $key }}"
                                                                    onclick="DoUnfav('{{ $item->id }}','{{ $item->getTableName() }}',null,this.id)"
                                                                    style="color:red;"></i>
                                                            @else
                                                                <i class="far fa-heart"
                                                                    id="item{{ $item->title . '' . $key }}"
                                                                    onclick="Dofav('{{ $item->id }}','{{ $item->getTableName() }}','Item')"></i>
                                                            @endif

                                                        </a>
                                                        @include('Frontend.pages.partials.shareElement',['link' => 'google.com'])
                                                        @include('Frontend.pages.partials.messageElement',['id' => $item->id, 'title' => $item->title, 'modal' => 'BusinessDetail','user'  => $item->BusinessDetail->BusinessUser->fullname,'user_id'  => $item->BusinessDetail->User->id])
                                                    </div>
                                                    <div class="card-map col-md-12 d-flex justify-content-between">
                                                        <a href="#!"><i
                                                                class="fas fa-map-marker-alt"></i>{{ $item->location_address }}</a>
                                                        <a href="#!" class="camera"><i class="fas fa-camera"></i>
                                                            {{ count($item->CoverImages) }}</a>
                                                    </div>
                                                    <img class="card-img-top" src="{{ asset($item->FristCoverImage->path ?? $item->cover_image) }}"
                                                        alt="Card image cap">
                                                    <a href="{{ route('ItemDetail', $item->slug) }}">
                                                        <div class="card-body">
                                                            {{-- <div class="rating_buy_sell">
                                                                <span><i class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i></span>
                                                            </div> --}}
                                                            <h4 class="card-title blue"><small> {{ $item->title }} <i
                                                                        class="fas fa-check green"></i></small></h4>
                                                            <p class="card-text orange d-flex align-items-center">
                                                                <b>${{ $item->price_free == 1 ? '0' : number_format($item->price) }}</b>
                                                                {{-- <span class="sm-size">Only 3 Left</span> --}}
                                                            </p>
                                                            <p class="pb-3 gray">
                                                                {{ substr($item->description ?? '', 0, 150) . '....' }}
                                                            </p>
                                                        </div>
                                                    </a>
                                                    <div class="col-md-12 d-flex align-items-center pb-2 card-footer">
                                                        <img src="{{ asset($item->profile_pic) }}" style="width:50px"
                                                            alt="" class="img-fluid">
                                                        <p class="pl-2 gray">By
                                                            {{ $item->BusinessDetail->BusinessUser->fullname }}</p>
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
    <!--======= Why Use Homzs? ======= -->
    <section class="sec-last">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12 text-center pb-4">
                    <p class="blue aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500">Check Video
                        Presentation To Find Out More About Us</p>
                    <h2 class="blue aos-init aos-animate" data-aos="fade-left" data-aos-duration="1500">Why Use Homzs?
                    </h2>
                    <a class="btn btn-play" type="button" data-toggle="modal" data-target="#exampleModal"> <i
                            class="fas fa-play"></i> </a>
                </div>
                <div class="col-lg-4 aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="media"> <img class="mr-4" src="Frontend/img/icon1.png"
                            alt="Generic placeholder image" width="70px" height="70px">
                        <div class="media-body">
                            <h5 class="mt-0 blue">24 Hours Support</h5>
                            <p class="gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="media"> <img class="mr-4" src="Frontend/img/icon2.png"
                            alt="Generic placeholder image" width="70px" height="70px">
                        <div class="media-body">
                            <h5 class="mt-0 blue">40,000 businesses services providers</h5>
                            <p class="gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="media"> <img class="mr-4" src="Frontend/img/icon2.png"
                            alt="Generic placeholder image" width="70px" height="70px">
                        <div class="media-body">
                            <h5 class="mt-0 blue">40,000 businesses services providers</h5>
                            <p class="gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('script')

    <script>
        AOS.init();
    </script>

@endpush
