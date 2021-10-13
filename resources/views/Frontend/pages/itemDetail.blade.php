@extends('Frontend.layouts.app')

@section('content')


    <div class="p_detail buy_sell_detail_page">
        <section class="pd-sec mt-5 mb-5">
            <div class="container custom_container">
                <div class="row">
                    <div class="col-lg-12 detail-box mt-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ asset($item->cover_image) }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-8 media_content">
                                <div class="media">
                                    <img class="mr-3"
                                        src="{{ asset($item->profile_pic) }}"
                                        class="img-fluid" alt="Generic placeholder image" width="100">
                                    <div class="media-body">
                                        <h3 class="mt-0 blue">{{ $item->title }} <span
                                                class="ab-right">{{ $item->price_free == 1 ? '$0.00' : '$' . number_format($item->price) }}</span>
                                        </h3>
                                        <p class="gray"> <span
                                                class="ab-right">{{ $item->category }}</span> <span
                                                class="ab-right collection">{{ $item->delivery_type }}</span></p>
                                        <ul class="single_room_details">
                                            <li class="gray">{{ $item->location_address }}</li>
                                            <li>{{ $item->BusinessDetail->BusinessUser->fullname }}</li>
                                        </ul>

                                    </div>

                                </div>
                                <div class="pr-description">

                                    <h4 class="blue">Description</h4>
                                    <p class="addReadMore showlesscontent">{{ $item->description }}</p>
                                    <div class="col-md-12 card-in-heart">
                                        <a href="#!" class="heart" id="heartProp{{ $item->id }}"
                                            style="background: {{ $item->CheckFavourite() ?? '' ? 'white' : '#dc5523' }}; border:{{ $item->CheckFavourite() ?? '' ? '1px solid red' : '' }} ">
                                            @if ($item->CheckFavourite() ?? '')
                                                <i class="fas fa-heart"
                                                    id="itemsale{{ $item->title . '' . $item->id }}"
                                                    onclick="DoUnfav('{{ $item->id }}','{{ $item->getTableName() }}',null,this.id)"
                                                    style="color:red;"></i>
                                            @else
                                                <i class="far fa-heart"
                                                    id="itemsale{{ $item->title . '' . $item->id }}"
                                                    onclick="Dofav('{{ $item->id }}','{{ $item->getTableName() }}','Item')"></i>
                                            @endif

                                        </a>
                                        <a href="#!" class="share"><i class="fas fa-share-square"></i></a>
                                        <a href="#!" class="share mt-2"><i class="far fa-comment-alt"></i></a>

                                    </div>

                                </div>
                                <div class="web_site_views">
                                    <a href="https://www.mywebsite.ca"> <img src="Frontend/img/icon-web.png"
                                            class="img-fluid" alt=""> {{ $item->website_link }}</a>
                                    <a href="#!" class="views">Viewed | {{ $item->views }}</a>
                                </div>

                                <div class="contact-desc">

                                    <a href="tel:{{ $item->contact_no }}"><i
                                            class="fas fa-phone-alt l-blue pr-2"></i>{{ $item->contact_no }}</a>
                                    <a href="mailto:{{ $item->email }}"><i
                                            class="fas fa-envelope l-blue pl-2 pr-2"></i>{{ $item->email }}</a>
                                    {{-- <a href="#!" class="views blue"><i class="fas fa-star orange"></i> 4.5/5</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                {{-- <div class="row">
                    <div class="col-md-12" align="center">
                        <button class="btn btn-lg btn-primary" type="submit">SAVE DRAFT</button>
                        <button class="btn btn-lg btn-secondary" type="button">SAVE & PUBLISH</button>
                    </div>
                </div> --}}
            </div>
        </section>
    </div>

@endsection
