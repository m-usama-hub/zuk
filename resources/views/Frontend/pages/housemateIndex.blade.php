@extends('Frontend.layouts.app')

@section('content')

    <div class="home find_housemate_page">
        <!--======= SECTION 2 ===== -->
        <section class="sec-2">
            <div class="container custom_container">
                <div class="row">
                    <div class="col-md-8 pb-3" data-aos="fade-right" data-aos-duration="1500">
                        <h2 class="blue mb-0 housemate_heading">Seeking to be your housemate</h2>
                    </div>
                    <div class="col-md-4">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link newest_btn active" id="nav-home-tab" data-toggle="tab" href="#nav-home1"
                                    role="tab" aria-controls="nav-home" aria-selected="true">Newest</a>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home1" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div class="row">
                                    <div class="swiper-container newestswiper">
                                        <div class="swiper-wrapper">

                                            @foreach ($housemates['all'] as $key => $housemate)

                                                <div class="swiper-slide">
                                                    <div class="card" data-aos="fade-up" data-aos-duration="1500">
                                                        <div class="col-md-12 card-in-heart">
                                                            <a href="#!" class="heart"
                                                                id="housemate{{ $key }}"
                                                                style="border:{{ $housemate->CheckFavourite() ?? '' ? '1px solid red' : '' }}; background: {{ $housemate->CheckFavourite() ?? '' ? 'white' : '#dc5523' }} ">
                                                                @if ($housemate->CheckFavourite() ?? '')
                                                                    <i class="fas fa-heart"
                                                                        id="housemate{{ $housemate->title . '' . $key }}"
                                                                        onclick="DoUnfav('{{ $housemate->id }}','{{ $housemate->getTableName() }}',null,this.id)"
                                                                        style="color:red;"></i>
                                                                @else
                                                                    <i class="far fa-heart"
                                                                        id="housemate{{ $housemate->title . '' . $key }}"
                                                                        onclick="Dofav('{{ $housemate->id }}','{{ $housemate->getTableName() }}','Housemate')"></i>
                                                                @endif

                                                            </a>
                                                            @include('Frontend.pages.partials.shareElement',['link' => 'google.com'])
                                                            @include('Frontend.pages.partials.messageElement',['id' => $housemate->id, 'title' => $housemate->title, 'modal' => 'Housemate','user'  => $housemate->BusinessDetail->BusinessUser->fullname,'user_id'  => $housemate->BusinessDetail->User->id])

                                                        </div>
                                                        <div class="card-map col-md-12 d-flex justify-content-between">
                                                            <a href="#!"><i
                                                                    class="fas fa-map-marker-alt"></i>{{ $housemate->address ?? '' }}</a>
                                                            <a href="#!" class="camera"><i class="fas fa-camera"></i>
                                                                1</a>
                                                        </div>
                                                        <a href="{{ $housemate->link }}" class="anchor_img"><img class="card-img-top"
                                                                src="{{ asset($housemate->cover_image) }}"
                                                                alt="Card image cap"></a>
                                                            <div class="card-body">
                                                                <h4 class="card-title blue">
                                                                    <small> <a href="{{ route('HousemateDetail', $housemate->slug) }}">{{ $housemate->title }}</a>
                                                                    </small>
                                                                </h4>
                                                                <h3> {{ $housemate->name }} <span
                                                                        class="person_profession">({{ $housemate->interested_in }}
                                                                        {{-- {{ $housemate->age }}, --}}
                                                                        {{ $housemate->room_type }})</span>
                                                                </h3>
                                                                {{-- <p class="card-text orange"><b>$1500<span
                                                                            class="per_month">/per
                                                                            month</span></b></p> --}}
                                                                <p class="pb-3 gray mini_para">
                                                                    {{ substr($housemate->description ?? '', 0, 150) . '....' }}
                                                                </p>
                                                                <div class="row no-gutters">
                                                                    <div class="col-md-12">
                                                                        <div class="room_available">
                                                                            <span class="blue">
                                                                                Available
                                                                            </span>
                                                                            <span class="orange custom_border">
                                                                                {{ $housemate->available_now == 1 ? 'Now' : $housemate->available_date }}
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    {{-- <div class="col-md-12">
                                                                        <div class="location_room">
                                                                            <span class="blue">
                                                                                Looking In
                                                                            </span>
                                                                            <span class="orange custom_border">
                                                                                California
                                                                            </span>
                                                                        </div>
                                                                    </div> --}}
                                                                    <div class="col-md-12">
                                                                        <div class="view_profile">
                                                                            <a href="{{ route('HousemateDetail', $housemate->slug) }}" class="btn">View
                                                                                Profile</a>
                                                                        </div>
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
            </div>
        </section>
    </div>

@endsection
