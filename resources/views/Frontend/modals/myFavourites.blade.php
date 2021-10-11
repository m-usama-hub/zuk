<div class="modal fade my_post_popup" id="myfavourites" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true" style="overflow: scroll">
    <div class="modal-dialog modal_3 modal_body">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i>My
                    Favourites</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">

                @php
                    $myfavourites = AppHelper::getMyfavourites();
                @endphp

                @if (count($myfavourites) > 0)

                    @foreach ($myfavourites as $key => $post)

                        <div class="col-lg-12 detail-box mt-3" id="myfav{{ $key }}">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="{{ asset($post->cover_image) }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-8 media_content">
                                    <div class="media">
                                        <img class="mr-2" src="{{ asset(Auth::user()->UserDetail->profile_pic) }} "
                                            width="50" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h3 class="mt-0 blue"><a href="{{ $post->link }}">{{ $post->title }}</a></h3>
                                            <div class="web_site_views">
                                                <i class="fas fa-star orange"></i>
                                                <i class="fas fa-star orange"></i>
                                                <i class="fas fa-star orange"></i>
                                                <i class="fas fa-star orange"></i>
                                                <a href="#!" class="views">123 reviews</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pr-description">
                                        <h4 class="blue">Description</h4>
                                        <p class="addReadMore showlesscontent">{{ $post->description }}</span><span
                                                class="readMore" title="Click to Show More"></span><span
                                                class="readLess" title="Click to Show Less"></span></p>
                                        <div class="col-md-12 card-in-heart">
                                            <a href="#!" class="heart"
                                                style="background: {{ $post->IsFavourite ? 'white' : '#dc5523' }}; padding: 2px;">
                                                @if ($post->IsFavourite)
                                                    <i class="fas fa-heart"
                                                        onclick="DoUnfav('{{ $post->id }}','{{ $post->getTableName() }}','{{ $key }}')"
                                                        style="color:red;"></i>
                                                @endif

                                            </a>
                                            <a href="#!" class="share"><i class="fas fa-share-square"></i></a>
                                            <a href="#!" class="share share_message"><i class="far fa-envelope"></i></a>
                                        </div>
                                    </div>
                                    <div class="contact-desc">
                                        <a href="tel: 647 985 5214"><i
                                                class="fas fa-phone-alt l-blue pr-2"></i>{{ $post->contact_no }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach


                @else

                    <p style="    margin-top: 30px;
                    margin-left: 12px;"><strong>No post Found.</strong></p>

                @endif

            </div>
        </div>
    </div>
</div>
