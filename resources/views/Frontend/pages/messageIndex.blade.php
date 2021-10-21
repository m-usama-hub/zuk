@extends('Frontend.layouts.app')

@section('content')

    <div class="home find_housemate_page share_message_page">
        <!--======= SECTION 2 ===== -->
        <section class="sec-2">
            <div class="container custom_container">
                <div class="row no-gutters">
                    <div class="col-md-8 pb-3" data-aos="fade-right" data-aos-duration="1500">
                        <h2 class="blue mb-0 housemate_heading">Share a message</h2>
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
                                            @foreach ($messages['all'] as $key => $message)
                                                <div class="swiper-slide">
                                                    <div class="card" data-aos="fade-up" data-aos-duration="1500">
                                                        <div class="col-md-12 card-in-heart">
                                                            <a href="#!" class="heart"
                                                                id="message{{ $key }}"
                                                                style="border:{{ $message->CheckFavourite() ?? '' ? '1px solid red' : '' }}; background: {{ $message->CheckFavourite() ?? '' ? 'white' : '#dc5523' }} ">
                                                                @if ($message->CheckFavourite() ?? '')
                                                                    <i class="fas fa-heart"
                                                                        id="messagesale{{ $message->title . '' . $key }}"
                                                                        onclick="DoUnfav('{{ $message->id }}','{{ $message->getTableName() }}',null,this.id)"
                                                                        style="color:red;"></i>
                                                                @else
                                                                    <i class="far fa-heart"
                                                                        id="messagesale{{ $message->title . '' . $key }}"
                                                                        onclick="Dofav('{{ $message->id }}','{{ $message->getTableName() }}','Message')"></i>
                                                                @endif

                                                            </a>
                                                            @include('Frontend.pages.partials.shareElement',['link' => 'google.com'])
                                                            @include('Frontend.pages.partials.messageElement',['id' => $message->id, 'title' => $message->title, 'modal' => 'Message','user'  => $message->BusinessDetail->BusinessUser->fullname,'user_id'  => $message->BusinessDetail->User->id])
                                                        
                                                        </div>
                                                        <div class="card-map col-md-12 d-flex justify-content-between">
                                                            <a href="#!"><i
                                                                    class="fas fa-map-marker-alt"></i>{{ $message->address ?? '' }}</a>
                                                            <a href="#!" class="camera"><i class="fas fa-camera"></i>
                                                                {{ count($message->CoverImages) }}</a>
                                                        </div>
                                                        <img class="card-img-top" src="{{ asset($message->FristCoverImage->path ?? $message->cover_image) }}"
                                                            alt="Card image cap">

                                                        <div class="card-body">
                                                            <h4 class="card-title blue"><small>
                                                                    <a
                                                                        href="{{ route('MessageDetail', $message->slug) }}">
                                                                        {{ $message->title ?? '' }}</a>
                                                                </small></h4>
                                                            <h3> {{ $message->name }} <span
                                                                    class="person_profession">{{ $message->BusinessDetail->address }}</span>
                                                            </h3>
                                                            <p class="pb-3 gray">
                                                                {{ substr($message->message ?? '', 0, 150) . '....' }}
                                                            </p>
                                                            <div class="row no-gutters">
                                                                <div class="col-md-3">
                                                                    <div class="room_available">
                                                                        <span class="blue">
                                                                            <i class="fas fa-thumbs-up"></i>
                                                                        </span>
                                                                        <span class=" custom_border">
                                                                            {{ count($message->Likes) }}
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="location_room">
                                                                        <span class="blue">
                                                                            <i class=" orange far fa-comment-alt"></i>
                                                                        </span>
                                                                        <span class=" custom_border">
                                                                            {{ count($message->Replies) }}
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="contact-desc">
                                                                        <ul>
                                                                            <li> <a
                                                                                    href="tel:{{ $message->contact_no }}"><i
                                                                                        class="fas fa-phone-alt l-blue pr-2"></i>
                                                                                    {{ $message->contact_no }}</a>
                                                                            </li>
                                                                            <li> <a href="mailto:{{ $message->email }}"><i
                                                                                        class="fas fa-envelope l-blue pl-2 pr-2"></i>
                                                                                    {{ $message->email }}</a></li>
                                                                        </ul>


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
