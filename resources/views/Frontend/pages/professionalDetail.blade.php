@extends('Frontend.layouts.app')

@section('content')
    <div class="p_detail pf_detail">
        <section class="pd-sec pt-5 mt-5 mb-5">
            <div class="container custom_container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ asset($pro->business_profile_pic) }}" alt="" class="img-fluid">
                                <h3 class="pt-5 blue">{{ $pro->totalReviewsCount }} Customer Reviews</h3>
                            </div>
                            <div class="col-lg-8 pf-shadow">
                                <div class="media">
                                    <img class="mr-3" src="{{ asset($pro->BusinessUser->profile_pic) }}"
                                        width="100" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h3 class="mt-0 blue">
                                            {{-- {{ $pro->UserBusinessCategoriesString() }} --}}
                                            {{ $pro->business_name }}
                                            <span class="ab-right"><small><i class="fas fa-star orange"></i>
                                                    {{ $pro->reviewsAvg ?? '0' }}/5</small></span>
                                        </h3>
                                        <p class="orange mb-0">{{ $pro->UserBusinessServicesString() }}
                                        </p>
                                        <p>27 Vanguard Drive, Etobicoke ON M9B 5E7</p>
                                    </div>
                                </div>
                                <div class="pr-description pt-3">
                                    <h4 class="blue pb-2">About Us </h4>
                                    <p>
                                        {{ $pro->business_details }}
                                    </p>
                                    <div class="col-md-12 card-in-heart">
                                        <a href="#!" class="heart" id="prof{{ $pro->id }}"
                                            style="border:{{ $pro->CheckFavourite() ?? '' ? '1px solid red' : '' }}; background: {{ $pro->CheckFavourite() ?? '' ? 'white' : '#dc5523' }} ">
                                            @if ($pro->CheckFavourite() ?? '')
                                                <i class="fas fa-heart" id="pro{{ $pro->title . '' . $pro->id }}"
                                                    onclick="DoUnfav('{{ $pro->id }}','{{ $pro->getTableName() }}',null,this.id)"
                                                    style="color:red;"></i>
                                            @else
                                                <i class="far fa-heart" id="pro{{ $pro->title . '' . $pro->id }}"
                                                    onclick="Dofav('{{ $pro->id }}','{{ $pro->getTableName() }}','BusinessDetail')"></i>
                                            @endif

                                        </a>
                                        @include('Frontend.pages.partials.shareElement',['link' => 'google.com'])
                                        @include('Frontend.pages.partials.messageElement',['id' => $pro->id, 'title' => $pro->business_name, 'modal' => 'BusinessDetail','user'  => $pro->BusinessUser->fullname,'user_id'  => $pro->User->id])
                                    
                                    </div>
                                </div>
                                <div class="contact-desc">
                                    <a href="tel: {{ $pro->BusinessUser->contact_no }}"><i
                                            class="fas fa-phone-alt l-blue pr-2"></i>
                                        {{ $pro->BusinessUser->contact_no }}</a> <a
                                        href="mailto:{{ $pro->BusinessUser->email }}"><i
                                            class="fas fa-envelope l-blue pl-2 pr-2"></i>
                                        {{ $pro->BusinessUser->email }}</a>

                                    @if (!$pro->is_business_owner_created)
                                        <a href="#" data-toggle="modal" data-target="#claim">
                                            Claim a Business</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-5 pf-row2">

                    @foreach ($pro->Reviews as $review)

                        <div class="col-lg-12 pf-shadow">
                            <div class="row">
                                <div class="col-lg-4 pf-reviews">
                                    <p><span class="orange">

                                            @for ($i = 0; $i < 5; $i++)
                                                @if (round($review->reviewAvg) > $i)
                                                    <i class="fas fa-star"></i>
                                                @else
                                                    <i class="fas fa-star" style="color: gray"></i>
                                                @endif
                                            @endfor

                                        </span> <span class="ab-right">{{ $review->reviewAvg ?? '0' }}/5</span></p>
                                    <p>Quality of Work 3<span class="ab-right">{{ $review->quality_rating }}</span>
                                    </p>
                                    <p>Timeliness<span class="ab-right">{{ $review->timeliness_rating }}</span></p>
                                    <p>Cleanliness<span class="ab-right">{{ $review->cleanliness_rating }}</span>
                                    </p>
                                    <p>On Budget<span class="ab-right">{{ $review->budget_rating }}</span></p>
                                    <p>Communication<span
                                            class="ab-right">{{ $review->coummunication_rating }}</span></p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="col-lg-8">
                                        <h3 class="blue">Received from
                                            {{ $review->User->UserDetail->fullname }} <span
                                                class="ab-right blue cal-size"><i class="fas fa-calendar"></i>
                                                {{ date('d M Y', strtotime($review->created_at)) }}</span></h3>
                                        <h5 class="pb-3 pt-2">{{ $review->service_provided }}</h5>
                                        <p>
                                            {{ $review->review }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    </div>


    <div class="modal fade abusereport " id="claim" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-triangle"></i>Claim
                        Business</h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <div class="custome_container">

                        <form action="{{ route('cliamBusiness') }}" method="post">
                            @csrf
                            <div class="pic_info">
                                <div class="pic">
                                    <img src="Frontend/img/Group410.png" alt="" class="image-fluid">
                                </div>
                                <div class="name">
                                    <h3>{{ $pro->business_name }}</h3>
                                </div>
                            </div>
                            <div class="report_title">
                                <label for="" class="title">
                                    Enter your email
                                </label>
                                <input type="text" name="email" id="text">
                            </div>
                            <input type="hidden" name="business_id" value="{{ $pro->id }}">
                            <div class="report_title">
                                <label for="" class="title">
                                    Enter your details here
                                </label>
                                <textarea name="details" id="text2" cols="30" rows="10"></textarea>
                            </div>
                            <div class="send">
                                <button type="submit" class="btn sending">Send my report</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
