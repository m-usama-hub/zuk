@extends('Frontend.layouts.app')

@section('content')


    <section class="sec-2 sec-4">
        <div class="container custom_container">
            <div class="row">
                <div class="col-md-12 m-cl" data-aos="fade-right" data-aos-duration="1500">
                    <h2 class="blue mb-0">{{ __('' . $pageCms['Section Title'] ?? '') }}</h2>
                </div>
                <div class="col-lg-12">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home3" role="tab"
                                aria-controls="nav-home" aria-selected="true">{{ __('All Type') }}</a>
                            <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile3" role="tab"
                                aria-controls="nav-profile" aria-selected="false">{{ __('Newest') }}</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home3" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="swiper home_page_slider">
                                <div class="swiper-wrapper">
                                    @foreach ($items['all'] as $key => $item)
                                        <div class="swiper-slide">
                                            <div class="item_sale_card" data-aos="fade-up" data-aos-duration="1500">
                                                <div class="card" data-link="{{ $item->link }}">
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
                                                        @include('Frontend.pages.partials.shareElement',['link' =>
                                                        'google.com'])
                                                        @include('Frontend.pages.partials.messageElement',['id' =>
                                                        $item->id, 'title' => $item->title, 'modal' =>
                                                        'BusinessDetail','user' =>
                                                        $item->BusinessDetail->BusinessUser->fullname,'user_id' =>
                                                        $item->BusinessDetail->User->id])
                                                    </div>
                                                    <div class="card-map col-md-12 d-flex justify-content-between">
                                                        <a href="#!"><i
                                                                class="fas fa-map-marker-alt"></i>{{ $item->location_address }}</a>
                                                        <a href="#!" class="camera"><i class="fas fa-camera"></i>
                                                            {{ count($item->CoverImages) }}</a>
                                                    </div>
                                                    <img class="card-img-top"
                                                        src="{{ asset($item->FristCoverImage->path ?? $item->cover_image) }}"
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
                                                <div class="card" data-link="{{ $item->link }}">
                                                    <div class="col-md-12 card-in-btn">
                                                        <a href="#!"
                                                            class="btn btn-link">{{ $item->ItemCategory->category }}</a>
                                                        {{-- <a href="#!" class="btn btn-link">--------</a> --}}
                                                    </div>
                                                    <div class="col-md-12 card-in-heart">
                                                        <a href="#!" class="heart"><i
                                                                class="far fa-heart"></i></a>
                                                        @include('Frontend.pages.partials.shareElement',['link' =>
                                                        'google.com'])
                                                        @include('Frontend.pages.partials.messageElement',['id' =>
                                                        $item->id, 'title' => $item->title, 'modal' =>
                                                        'BusinessDetail','user' =>
                                                        $item->BusinessDetail->BusinessUser->fullname,'user_id' =>
                                                        $item->BusinessDetail->User->id])
                                                    </div>
                                                    <div class="card-map col-md-12 d-flex justify-content-between">
                                                        <a href="#!"><i
                                                                class="fas fa-map-marker-alt"></i>{{ $item->location_address }}</a>
                                                        <a href="#!" class="camera"><i class="fas fa-camera"></i>
                                                            {{ count($item->CoverImages) }}</a>
                                                    </div>
                                                    <img class="card-img-top" src="Frontend/img/sofa1.png"
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



@endsection
