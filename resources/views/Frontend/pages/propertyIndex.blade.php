@extends('Frontend.layouts.app')

@section('content')

    <section class="sec-2">
        <div class="container custom_container">
            <div class="row">
                <div class="col-md-12 m-cl">
                    <h2 class="blue mb-0" data-aos="fade-right" data-aos-duration="1500">Someone is checking this
                        out near you</h2>
                </div>
                <div class="col-lg-12">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-all" role="tab"
                                aria-controls="nav-home" aria-selected="true">All Type</a>
                            <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-home1" role="tab"
                                aria-controls="nav-profile" aria-selected="false">For Sale</a>
                            <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-profile1" role="tab"
                                aria-controls="nav-contact" aria-selected="false">For Rent</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="swiper home_page_slider">
                                <div class="swiper-wrapper">

                                    @foreach ($properties['all'] as $key => $property)
                                        <div class="swiper-slide">
                                            <div class="latest_properties_card" data-aos="fade-up" data-aos-duration="1500">
                                                <div class="card">
                                                    <div class="col-md-12 card-in-btn">
                                                        <a href="" class="btn btn-link">For
                                                            {{ $property->for_type ?? '' }}</a> <a href=""
                                                            class="btn btn-link">{{ $property->property_type ?? '' }}</a>
                                                    </div>
                                                    <div class="col-md-12 card-in-heart">
                                                        <a href="" class="heart" id="heartall{{ $key }}"
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
                                                        <a href="" class="share"><i
                                                                class="fas fa-share-square"></i></a>
                                                        <a href="" class="share share_message"><i
                                                                class="far fa-envelope"></i></a>
                                                    </div>
                                                    <div class="card-map col-md-12 d-flex justify-content-between">
                                                        <a href=""><i
                                                                class="fas fa-map-marker-alt"></i>{{ $property->address ?? '' }}</a>
                                                        <a href="" class="camera"><i class="fas fa-camera"></i>
                                                            1</a>
                                                    </div>
                                                    <img class="card-img-top"
                                                        src="{{ asset($property->cover_image ?? '') }}"
                                                        alt="Card image cap">
                                                    <a href="{{ route('PropertyDetail', $property->slug) }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title blue"><small>
                                                                    {{ $property->title ?? '' }}
                                                                    <i class="fas fa-check green"></i></small></h4>
                                                            <p class="card-text orange">
                                                                <b>${{ $property->sale_price }}</b>
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
                        <div class="tab-pane fade" id="nav-home1" role="tabpanel" aria-labelledby="nav-profile-tab">

                            <div class="swiper home_page_slider">
                                <div class="swiper-wrapper">

                                    @foreach ($properties['sale'] as $key => $property)
                                        <div class="swiper-slide">
                                            <div class="latest_properties_card" data-aos="fade-up" data-aos-duration="1500">
                                                <div class="card">
                                                    <div class="col-md-12 card-in-btn">
                                                        <a href="" class="btn btn-link">For
                                                            {{ $property->for_type ?? '' }}</a> <a href=""
                                                            class="btn btn-link">{{ $property->property_type ?? '' }}</a>
                                                    </div>
                                                    <div class="col-md-12 card-in-heart">
                                                        <a href="" class="heart"
                                                            id="heartsale{{ $key }}"
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
                                                        <a href="" class="share"><i
                                                                class="fas fa-share-square"></i></a>
                                                        <a href="" class="share share_message"><i
                                                                class="far fa-envelope"></i></a>
                                                    </div>
                                                    <div class="card-map col-md-12 d-flex justify-content-between">
                                                        <a href=""><i
                                                                class="fas fa-map-marker-alt"></i>{{ $property->address ?? '' }}</a>
                                                        <a href="" class="camera"><i class="fas fa-camera"></i>
                                                            1</a>
                                                    </div>
                                                    <img class="card-img-top"
                                                        src="{{ asset($property->cover_image ?? '') }}"
                                                        alt="Card image cap">
                                                    <a href="{{ route('PropertyDetail', $property->slug) }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title blue"><small>
                                                                    {{ $property->title ?? '' }}
                                                                    <i class="fas fa-check green"></i></small></h4>
                                                            <p class="card-text orange">
                                                                <b>${{ $property->sale_price }}</b>
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
                                                        <a href="" class="btn btn-link">For
                                                            {{ $property->for_type ?? '' }}</a> <a href=""
                                                            class="btn btn-link">{{ $property->property_type ?? '' }}</a>
                                                    </div>
                                                    <div class="col-md-12 card-in-heart">
                                                        <a href="" class="heart"
                                                            id="heartProp{{ $key }}"
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
                                                        <a href="" class="share"><i
                                                                class="fas fa-share-square"></i></a>
                                                        <a href="" class="share share_message"><i
                                                                class="far fa-envelope"></i></a>
                                                    </div>
                                                    <div class="card-map col-md-12 d-flex justify-content-between">
                                                        <a href=""><i
                                                                class="fas fa-map-marker-alt"></i>{{ $property->address ?? '' }}</a>
                                                        <a href="" class="camera"><i class="fas fa-camera"></i>
                                                            1</a>
                                                    </div>
                                                    <img class="card-img-top"
                                                        src="{{ asset($property->cover_image ?? '') }}"
                                                        alt="Card image cap">
                                                    <a href="{{ route('PropertyDetail', $property->slug) }}">
                                                        <div class="card-body">
                                                            <h4 class="card-title blue"><small>
                                                                    {{ $property->title ?? '' }}
                                                                    <i class="fas fa-check green"></i></small></h4>
                                                            <p class="card-text orange">
                                                                <b>${{ $property->sale_price }}</b>
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

@endsection
