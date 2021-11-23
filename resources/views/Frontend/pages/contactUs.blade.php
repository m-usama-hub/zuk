
@extends('Frontend.layouts.app')

@section('content')
<main class="login contact-us">
    <section id="section-1">
        <div class="container">
            <div class="justify-content-lg-center row get-in-touch-icon-row">
                <div class="col-xl-12 text-center">
                    <small>Contact Us</small>
                    <h1>Get in Touch</h1>
                </div>
                <div class="col-xl-4">
                    <div class="get-in-touch-icon">
                        <span><i class="far fa-envelope"></i></span>
                        <div class="email">
                            <h6>Email</h6>
                            <small>{{ GlobalHelper::SystemConfig('email') }}</small>
                        </div>
                    </div>

                </div>

                <div class="col-xl-4">
                    <div class="get-in-touch-icon">
                        <span><i class="far fa-map"></i></span>
                        <div class="email">
                            <h6>Address</h6>
                            <small>{{ GlobalHelper::SystemConfig('address') }}</small>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4">
                    <div class="get-in-touch-icon">
                        <span><i class="fas fa-headset"></i></span>
                        <div class="email">
                            <h6>Call At</h6>
                            <small>{{ GlobalHelper::SystemConfig('contactNo') }}</small>
                        </div>
                    </div>

                </div>
            </div>
            <div class="justify-content-lg-center row">
                <div class="col-lg-7-col-md-12 col-xl-7 text-center">
                    <div class="login-screen">
                        @include('Backend.layouts.message')
                        <div class="login-form">
                            <form action="{{ route('contactUsPost') }}" method="post">
                                @csrf
                                @method('post')
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="field-icon"><i class="fas fa-address-card"></i></span>
                                        </div>
                                        <input type="text" class="form-control" value="{{ Request::get('name') }}" name="name" placeholder="your name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="field-icon"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="email" class="form-control" value="{{ Request::get('email') }}" name="email" placeholder="example@abc.com" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Phone</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="field-icon"><i class="fas fa-phone-alt"></i></span>
                                        </div>
                                        <input type="tel" class="form-control" value="{{ Request::get('phone') }}" name="phone" placeholder="123465789" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Your Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="your message" required>{{ Request::get('message') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Submit">
                                    <a href="#"></a>
                                </div>
                                <div class="new-to-duago">
                                    <a href="{{ route('register') }}">New to DuaGo? <span>Create an Account Here</span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
