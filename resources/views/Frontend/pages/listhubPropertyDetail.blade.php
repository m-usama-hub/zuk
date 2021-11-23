@extends('Frontend.layouts.app')

@section('content')
    <div class="p_detail pr-detail2">
        <section class="pd-sec mt-5 mb-5">
            <div class="container custom_container">
                <div class="row">
                    <div class="col-lg-12 detail-box mt-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="https://zuk.devcustomprojects.com/uploads/property/image/2021/September/yQQELuYeJxoLo6Ex20210924115051000000.jfif"
                                    alt="" class="img-fluid">
                                {{-- <img src="{{ $property['Media'][0]['MediaURL'] }}"
                                    alt="" class="img-fluid"> --}}
                            </div>
                            <div class="col-lg-8 media_content">
                                <div class="media">
                                    {{-- <img class="mr-3"
                                        src=""
                                        width="100" alt="Generic placeholder image"> --}}
                                    <div class="media-body">
                                        <h3 class="mt-0 blue">{{ $property['UnparsedAddress'] }}
                                            <span
                                                class="ab-right">${{ number_format($property['ListPrice']) }}</span>
                                        </h3>
                                        <p class="gray">
                                            {{ $property['PostalCity'] . ', ' . $property['StateOrProvince'] . ', ' . $property['Country'] . ', ' . $property['PostalCode'] }}
                                            <span class="ab-right">{{ $property['PropertySubType'] }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="pr-description">
                                    <ul class="smart_realtor">
                                        <li>
                                            <p>{{ $property['UnparsedAddress'] }}</p>
                                        </li>
                                        <li><i class="fas fa-bed pr-2 l-blue icons-p"></i>
                                            {{ $property['BedroomsTotal'] }}
                                        </li>
                                        <li><i class="pl-2 pr-2 fas fa-bath l-blue"></i>
                                            {{ $property['BathroomsFull'] }}
                                        </li>
                                        <li><i class="pl-2 fas fa-cube l-blue"></i>
                                            {{ number_format($property['LivingArea']) . ' Sqft' }}</li>
                                    </ul>
                                </div>
                                <div class="contact-desc0 pb-3">
                                    <a href="#"><i class="fas fa-user-alt l-blue"></i> Contact person |
                                        {{ $property['ListAgentFullName'] }}</a>
                                </div>
                                <div class="contact-desc">
                                    <a href="tel: {{ $property['ListAgentOfficePhone'] }}"><i
                                            class="fas fa-phone-alt l-blue pr-2"></i>
                                        {{ $property['ListAgentOfficePhone'] }}
                                    </a> <a href="mailto:{{ $property['ListAgentEmail'] }}"><i
                                            class="fas fa-envelope l-blue pl-2 pr-2"></i>
                                        {{ $property['ListAgentEmail'] }}</a>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
