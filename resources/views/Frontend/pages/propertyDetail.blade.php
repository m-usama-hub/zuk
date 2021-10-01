@extends('Frontend.layouts.app')

@section('content')
    <div class="p_detail pr-detail2">
        <section class="pd-sec mt-5 mb-5">
            <div class="container custom_container">
                <div class="row">
                    <div class="col-lg-12 detail-box mt-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ asset($property->cover_image) }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-8 media_content">
                                <div class="media">
                                    <img class="mr-3"
                                        src="{{ asset($property->BusinessDetail->BusinessUser->profile_pic) }}"
                                        width="100" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h3 class="mt-0 blue">{{ $property->property_beds }}
                                            {{ $property->property_type }} <span
                                                class="ab-right">${{ $property->sale_price }}</span></h3>
                                        <p class="gray">{{ $property->address }} <span
                                                class="ab-right">For {{ $property->for_type }}</span></p>
                                    </div>
                                </div>
                                <div class="pr-description">
                                    <ul class="smart_realtor">
                                        <li>
                                            <p>{{ $property->title }}</p>
                                        </li>
                                        <li><i class="fas fa-bed pr-2 l-blue icons-p"></i>
                                            {{ explode(' ', $property->property_beds ?? '')[0] }}
                                        </li>
                                        <li><i class="pl-2 pr-2 fas fa-bath l-blue"></i>
                                            {{ explode(' ', $property->property_baths ?? '')[0] }}
                                        </li>
                                        <li><i class="pl-2 fas fa-cube l-blue"></i> {{ $property->property_type }}</li>
                                    </ul>
                                    <h4 class="blue">Property Description</h4>
                                    <p class="addReadMore showlesscontent">
                                        {{ $property->description }}
                                    </p>
                                    <div class="col-md-12 card-in-heart">
                                        <a href="" class="heart" id="heartProp{{ $property->id }}"
                                            style="background: {{ $property->CheckFavourite() ?? '' ? 'white' : '#dc5523' }}; border:{{ $property->CheckFavourite() ?? '' ? '1px solid red' : '' }} ">
                                            @if ($property->CheckFavourite() ?? '')
                                                <i class="fas fa-heart"
                                                    id="propertysale{{ $property->title . '' . $property->id }}"
                                                    onclick="DoUnfav('{{ $property->id }}','{{ $property->getTableName() }}',null,this.id)"
                                                    style="color:red;"></i>
                                            @else
                                                <i class="far fa-heart"
                                                    id="propertysale{{ $property->title . '' . $property->id }}"
                                                    onclick="Dofav('{{ $property->id }}','{{ $property->getTableName() }}','Property')"></i>
                                            @endif

                                        </a>
                                        <a href="" class="share"><i class="fas fa-share-square"></i></a>
                                        <a href="" class="share mt-2"><i class="far fa-comment-alt"></i></a>
                                    </div>
                                    @if ($property->other_info)
                                        <h4 class="blue">Other information</h4>
                                        <p class="addReadMore showlesscontent">
                                            {{ $property->other_info }}
                                        </p>
                                    @endif

                                </div>
                                <div class="contact-desc0 pb-3">
                                    <a href="#"><i class="fas fa-user-alt l-blue"></i> Contact person |
                                        {{ $property->BusinessDetail->BusinessUser->fullname }}</a>
                                </div>
                                <div class="contact-desc">
                                    <a href="tel: {{ $property->contact_no }}"><i
                                            class="fas fa-phone-alt l-blue pr-2"></i>
                                        {{ $property->contact_no }}
                                    </a> <a href="mailto:{{ $property->email }}"><i
                                            class="fas fa-envelope l-blue pl-2 pr-2"></i> {{ $property->email }}</a>
                                    <a href="" class="views"><i class="fas fa-eye l-blue"></i> Viewed | {{ $property->views }}</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
