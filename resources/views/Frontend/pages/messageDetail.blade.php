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
                                    <img class="mr-3"
                                        src="{{ asset($message->profile_pic) }}" width="100"
                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h3 class="mt-0 blue">{{ $message->title }}<span class="ab-right"><i
                                                    class="far fa-calendar-alt"></i>{{ date('d M Y', strtotime($message->created_at)) }}</span>
                                        </h3>
                                        <ul class="single_room_details">
                                            <li class="gray">
                                                {{ $message->BusinessDetail->BusinessUser->fullname }}</li>
                                            <li class="gray"> {{ $message->BusinessDetail->address }}</li>
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
                                                    <i class="fas fa-thumbs-up" onclick="document.getElementById('liketoggle').submit();" style="color: {{ $message->CheckLike() ? 'green' : '' }}"></i>

                                                    <form action="{{ route('liketoggle',$message->id) }}?like={{ $message->CheckLike() }}" id="liketoggle" method="post" style="display: none;">@csrf</form>
                                            </span>
                                            <span class=" custom_border">
                                                {{ count($message->Likes) }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
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
                                                <li> <a href="tel: {{ $message->contact_no }}"><i
                                                            class="fas fa-phone-alt l-blue pr-2"></i>
                                                        {{ $message->contact_no }}</a></li>
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
                                    <img class="mr-3"
                                        src="{{ asset($message->profile_pic) }}"
                                        width="100" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h3 class="mt-0 blue">{{ $message->title }}<span class="ab-right"><i
                                                    class="far fa-calendar-alt"></i>{{ date('d M Y', strtotime($message->created_at)) }}</span>
                                        </h3>
                                        <ul class="single_room_details">
                                            <li class="gray">
                                                {{ $message->BusinessDetail->BusinessUser->fullname }}</li>
                                            <li class="gray"> {{ $message->BusinessDetail->address }}</li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="pr-description">
                                    <h4 class="blue">Description</h4>

                                    <p class="addReadMore showlesscontent">{{ $message->message }}</p>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-desc">
                                            <ul>
                                                <li> <a href="tel: {{ $message->contact_no }}"><i
                                                            class="fas fa-phone-alt l-blue pr-2"></i>
                                                        {{ $message->contact_no }}</a></li>
                                                <li> <a href="mailto:{{ $message->email }}"><i
                                                            class="fas fa-envelope l-blue pl-2 pr-2"></i>
                                                        {{ $message->email }}</a></li>
                                            </ul>


                                        </div>
                                    </div>
                                </div>
                                @foreach ($message->Replies as $reply)
                                    <div class="custom_like_message">

                                        @if (Auth::user()->id == $reply->user_id)
                                            
                                            <div class="room_available">
                                                <span class="blue">
                                                    <i class="fas fa-flag"></i>
                                                </span>

                                            </div>
                                            <div class="location_room">
                                                <span class="orange">
                                                   <i onclick="document.getElementById('deleteReply').submit();" class="fas fa-minus-circle"></i>
                                                   <form action="{{ route('deleteReply',$reply->id) }}" id="deleteReply" method="post">@csrf</form> 
                                                </span>
                                            </div>
                                        @endif

                                    </div>

                                    <div class="custom_comments_box">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="comments_person_details">
                                                    <img class="mr-3"
                                                        src="{{ asset($reply->User->UserDetail->profile_pic??'img/default.png') }}" width="60"
                                                        alt="Generic placeholder image">
                                                    <span class="person_name">{{ $reply->User->UserDetail->fullname ?? $reply->User->name }}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="comments_time">
                                                    <ul>
                                                        <li> <span class="time">{{ date('H.i A',strtotime($reply->created_at)) }}</span></li>
                                                        <li> <span class="date">{{ date('d M y',strtotime($reply->created_at)) }}</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p>{{ $reply->reply }}</p>
                                    </div>

                                @endforeach
                                

                                    @if (Auth::user())

                                    <div class="custom_comments_box">
                                        <form action="{{ route('doreply',$message->id) }}" method="post">
                                            @csrf
                                            <textarea rows="4" cols="75" placeholder="Enter your message here" name="message"></textarea>
                                            <div class="comments_form">
                                                <div class="row">
                                                    <div class="col-md-6">
    
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button type="submit" class="btn send_message_btn">Send my
                                                            Message</button>
                                                    </div>
                                                </div>
                                            </div>
    
                                        </form>
                                    </div>
                                        
                                    @endif




                            </div>


                        </div>

                    </div>



                </div>

            </div>
        </section>
    </div>
@endsection
