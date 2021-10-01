@extends('Frontend.layouts.app')

@section('content')
    <div class="p_detail housemate_details_page share_detail_page">
        <section class="pd-sec mt-5 mb-5">
            <div class="container custom_container">
                <div class="row">
                    <div class="col-lg-12 detail-box">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ asset($message->cover_image) }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-8 media_content">
                                <div class="media">
                                    <img class="mr-3" src="{{ asset($message->BusinessDetail->BusinessUser->profile_pic) }}" width="100" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h3 class="mt-0 blue">{{ $message->title }}<span class="ab-right"><i
                                                    class="far fa-calendar-alt"></i>{{ date('d M Y',strtotime($message->created_at)) }}</span></h3>
                                        <ul class="single_room_details">
                                            <li class="gray">{{ $message->BusinessDetail->BusinessUser->fullname }}</li>
                                            <li class="gray"> Etobicoke ON</li>
                                        </ul>
                                    </div>
    
                                </div>
                                <div class="pr-description">
                                    <h4 class="blue">Description</h4>
                                    <p class="addReadMore showlesscontent">{{ $message->message }}</p>
                                    <div class="col-md-12 card-in-heart">
                                        <a href="" class="heart" id="prof{{ $message->id }}"
                                        style="border:{{ $message->CheckFavourite() ?? '' ? '1px solid red' : '' }}; background: {{ $message->CheckFavourite() ?? '' ? 'white' : '#dc5523' }} ">
                                        @if ($message->CheckFavourite() ?? '')
                                            <i class="fas fa-heart"
                                                id="message{{ $message->title . '' . $message->id }}"
                                                onclick="DoUnfav('{{ $message->id }}','{{ $message->getTableName() }}',null,this.id)"
                                                style="color:red;"></i>
                                        @else
                                            <i class="far fa-heart"
                                                id="message{{ $message->title . '' . $message->id }}"
                                                onclick="Dofav('{{ $message->id }}','{{ $message->getTableName() }}','Message')"></i>
                                        @endif

                                    </a>
                                        <a href="#!" class="share"><i class="fas fa-share-square"></i></a>
                                        <a href="#!" class="share mt-2"><i class="far fa-comment-alt"></i></a>
    
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-md-2">
                                        <div class="room_available">
                                            <span class="blue">
                                                <i class="fas fa-thumbs-up"></i>
                                            </span>
                                            <span class=" custom_border">
                                                12
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="location_room">
                                            <span class="blue">
                                                <i class=" orange far fa-comment-alt"></i>
                                            </span>
                                            <span class=" custom_border">
                                                12
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-desc">
                                            <ul>
                                                <li> <a href="tel: {{ $message->contact_no }}"><i
                                                            class="fas fa-phone-alt l-blue pr-2"></i> {{ $message->contact_no }}</a></li>
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


                    <div class="col-lg-12 detail-box">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ asset($message->cover_image) }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-8 media_content">
                                <div class="media">
                                    <img class="mr-3" src="{{ asset($message->BusinessDetail->BusinessUser->profile_pic) }}" width="100" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h3 class="mt-0 blue">{{ $message->title }}<span class="ab-right"><i
                                                    class="far fa-calendar-alt"></i>{{ date('d M Y',strtotime($message->created_at)) }}</span></h3>
                                        <ul class="single_room_details">
                                            <li class="gray">{{ $message->BusinessDetail->BusinessUser->fullname }}</li>
                                            <li class="gray"> Etobicoke ON</li>
                                        </ul>
                                    </div>
    
                                </div>
                                <div class="pr-description">
                                    <h4 class="blue">Description</h4>
    
                                    <p class="addReadMore showlesscontent">{{ $message->message }}</p>
                                    <div class="col-md-12 card-in-heart">
                                        <a href="#!" class="heart"><i class="far fa-heart"></i></a>
                                        <a href="#!" class="share"><i class="fas fa-share-square"></i></a>
                                        <a href="#!" class="share mt-2"><i class="far fa-comment-alt"></i></a>
    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-desc">
                                            <ul>
                                                <li> <a href="tel: {{ $message->contact_no }}"><i
                                                            class="fas fa-phone-alt l-blue pr-2"></i> {{ $message->contact_no }}</a></li>
                                                <li> <a href="mailto:{{ $message->email }}"><i
                                                            class="fas fa-envelope l-blue pl-2 pr-2"></i>
                                                        {{ $message->email }}</a></li>
                                            </ul>
    
    
                                        </div>
                                    </div>
                                </div>
                                <div class="custom_like_message">
    
                                    <div class="room_available">
                                        <span class="blue">
                                            <i class="fas fa-flag"></i>
                                        </span>
    
                                    </div>
                                    <div class="location_room">
                                        <span class="orange">
                                            <i class="fas fa-minus-circle"></i>
                                        </span>
                                    </div>
                                </div>
    
                                <div class="custom_comments_box">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="comments_person_details">
                                                <img class="mr-3" src="{{ asset('Frontend/img/thumbnail_person.png') }}"
                                                    alt="Generic placeholder image">
                                                <span class="person_name"> Jame D.</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="comments_time">
                                                <ul>
                                                    <li> <span class="time">13.05</span></li>
                                                    <li> <span class="date">8 Jun 21</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>To complete your signup kindly confirmyour emailaddress by clicking on the linkin the
                                        email that we have sent you in the email that we have sent you.</p>
                                </div>
                                <div class="custom_comments_box">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="comments_person_details">
                                                <img class="mr-3" src="{{ asset('Frontend/img/thumbnail_person.png') }}"
                                                    alt="Generic placeholder image">
                                                <span class="person_name"> Jame D.</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="comments_time">
                                                <ul>
                                                    <li> <span class="time">13.05</span></li>
                                                    <li> <span class="date">8 Jun 21</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>To complete your signup kindly confirmyour emailaddress by clicking on the linkin the
                                        email that we have sent you in the email that we have sent you.</p>
                                    <form>
                                        <textarea rows="4" cols="75" placeholder="Enter your message here"></textarea>
                                        <div class="comments_form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="custom_like_message">
    
                                                        <div class="room_available">
                                                            <span class="blue">
                                                                <i class="fas fa-thumbs-up"></i>
                                                            </span>
                                                            <span class=" custom_border">
                                                                12
                                                            </span>
                                                        </div>
                                                        <div class="location_room">
                                                            <span class="blue">
                                                                <i class=" orange far fa-comment-alt"></i>
                                                            </span>
                                                            <span class=" custom_border">
                                                                12
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="submit" class="btn send_message_btn">Send my
                                                        Message</button>
                                                </div>
                                            </div>
                                        </div>
    
                                    </form>
    
    
                                </div>
    
                            </div>
                        </div>
    
                    </div>
    
    
    
                </div>
    
            </div>
        </section>
    </div>
@endsection
