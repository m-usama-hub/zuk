@extends('Frontend.layouts.app')

@section('content')
    <div class="p_detail housemate_details_page">

        <section class="pd-sec mt-5 mb-5">
            <div class="container custom_container">
                <div class="row">
                    <div class="col-lg-12 detail-box">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ asset($housemate->cover_image) }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-8 media_content">
                                <div class="media">
                                    <img class="mr-3" src="{{ asset($housemate->profile_pic) }}" width="100"
                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                    <h3 class="mt-0 blue">{{ $housemate->title }} 
                                        {{-- <span class="ab-right">$1200<span class="blue per_month">month</span></span> --}}
                                        </h3>
                                        {{-- <p class=""><span class=" ab-right gray">My Budget</span></p> --}}
                                        <ul class="single_room_details">
                                            <li class="gray">{{ $housemate->name }} </li>
                                            <li class="gray">Professional {{ $housemate->age }}</li>
                                            <li class="gray">{{ $housemate->room_capacity }}</li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="pr-description">
                                    <h4 class="blue">More About Me</h4>
                                    <p class="addReadMore showlesscontent">{{ $housemate->description }}</p>
                                    <div class="col-md-12 card-in-heart">
                                        
                                        <a href="#!" class="heart" id="heartProp{{ $housemate->id }}"
                                            style="background: {{ $housemate->CheckFavourite() ?? '' ? 'white' : '#dc5523' }}; border:{{ $housemate->CheckFavourite() ?? '' ? '1px solid red' : '' }} ">
                                            @if ($housemate->CheckFavourite() ?? '')
                                                <i class="fas fa-heart"
                                                    id="housematesale{{ $housemate->title . '' . $housemate->id }}"
                                                    onclick="DoUnfav('{{ $housemate->id }}','{{ $housemate->getTableName() }}',null,this.id)"
                                                    style="color:red;"></i>
                                            @else
                                                <i class="far fa-heart"
                                                    id="housematesale{{ $housemate->title . '' . $housemate->id }}"
                                                    onclick="Dofav('{{ $housemate->id }}','{{ $housemate->getTableName() }}','Housemate')"></i>
                                            @endif

                                        </a>

                                        <a href="#!" class="share"><i class="fas fa-share-square"></i></a>
                                        <a href="#!" class="share mt-2"><i class="far fa-comment-alt"></i></a>

                                    </div>
                                    <div class=" card-body">
                                        <div class="room_available">
                                            <span class="blue">
                                                Available
                                            </span>
                                            <span class="orange custom_border">
                                                {{ $housemate->available_now == 1 ? 'Now' : $housemate->available_date }}
                                            </span>
                                        </div>


                                        {{-- <div class="location_room">
                                            <span class="blue">
                                                Looking In
                                            </span>
                                            <span class="orange custom_border">
                                                California
                                            </span>
                                        </div> --}}

                                    </div>
                                </div>

                                <div class="contact-desc">
                                    <a href="tel: {{ $housemate->contact_no }}"><i class="fas fa-phone-alt l-blue pr-2"></i> {{ $housemate->contact_no }}</a> 
                                    <a href="mailto:{{ $housemate->email }}"><i
                                            class="fas fa-envelope l-blue pl-2 pr-2"></i> {{ $housemate->email }}</a>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
