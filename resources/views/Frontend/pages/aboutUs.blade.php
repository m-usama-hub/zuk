@extends('Frontend.layouts.app')

@section('content')

        <section class="about_s2">
            <div class="container custom_container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn img-video-btn" data-toggle="modal" data-target="#exampleModal">
                            <div class="img-size">
                                <img src="Frontend/img/ab-modal.png" alt="" class="img-fluid">
                            </div>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <iframe width="470px" height="400" src="https://www.youtube.com/embed/5Peo-ivmupE"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="blue">About us</h1>
                        <p>Homzs has a heart for people and our aim is to build an online extension of happy communities
                            where happy people can search, find, share and enjoy everything they need to to make a happy
                            home: a place to live, some furniture for their homes, someone to improve their home, a place to
                            share a message, etc. We have created an intriguing place
                            where people can come together to help each other out in small or big ways.</p>

                        <p>So whether it’s a buyer for that “thing” you no longer need or a seller seller selling the
                            "thing" that you have been looking for or you are looking for someone to house share or
                            searching for a new home, or sharing a message that will help someone in your community,
                            Homzs makes it possible to search, find, share, and enjoy.</p>
                    </div>

                    <div class="col-lg-12 pt-5">
                        <h1 class="blue">Our vision & mission</h1>
                        <p>At Homzs, we help make it possible for search, find, share, and enjoy happen. From great deals
                            that save you a few extra dollars, to finding
                            a buyer who will enjoy something as much as you did</p>
                        <p>We make it possible, easy and enjoyable to find the thing you need to complete your home while
                            saving the planet or enhance your
                            community experience as you discover the things happening near you. Happy people make happy
                            communities and we are committed to
                            building happy communities.
                        </p>
                        <p>We do not like like waste because we believe that everything can find new purpose or use.</p>
                    </div>

                </div>
            </div>
        </section>

@endsection
