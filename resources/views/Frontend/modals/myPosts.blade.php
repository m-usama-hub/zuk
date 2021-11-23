<div class="modal fade my_post_popup" id="mypost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    style="overflow: scroll">
    <div class="modal-dialog modal_2 modal_body">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i>My
                    posts</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">

                @php
                    $myPosts = AppHelper::getMyposts();
                @endphp

                @if (count($myPosts) > 0)

                    @foreach ($myPosts as $key => $post)

                        <div class="col-lg-12 detail-box mt-3" id="mypost{{ $key }}">

                            <strong
                                class="{{ $post->status == 'Publish' ? 'publish' : 'draft' }}">{{ $post->status == 'Publish' ? 'Published' : 'Draft' }}</strong>

                            <div class="row" style="margin-top: -25px;">
                                <div class="col-lg-4">
                                    <img src="{{ asset($post->FristCoverImage->path ?? $post->cover_image) }}" alt=""
                                        class="img-fluid">
                                </div>
                                <div class="col-lg-8 media_content">
                                    <div class="media">
                                        <img class="mr-2"
                                            src="{{ asset(Auth::user()->UserDetail->profile_pic) }} " width="50"
                                            alt="Generic placeholder image">
                                        {{-- <div class="media-body">
                                            <h3 class="mt-0 blue"><a href="{{ $post->link }}">{{ $post->title }}</a></h3>
                                            <div class="web_site_views">
                                                <i class="fas fa-star orange"></i>
                                                <i class="fas fa-star orange"></i>
                                                <i class="fas fa-star orange"></i>
                                                <i class="fas fa-star orange"></i>
                                                <a href="#!" class="views">123 reviews</a>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="pr-description">
                                        <h4 class="blue">Description</h4>
                                        <p class="addReadMore showlesscontent">{{ $post->description }}</span><span
                                                class="readMore" title="Click to Show More"></span><span
                                                class="readLess" title="Click to Show Less"></span></p>
                                        <div class="col-md-12 card-in-heart">
                                            <a href="#!" style="padding: 4px; color:gray;"><i class="fas fa-trash"
                                                    onclick="confirm('Do you want to delete this item?') ? deletePost('{{ get_class($post)::getTableName() }}','{{ $post->id }}','{{ $key }}') : ''"></i></a>
                                            <a href="#!" class="share "><i
                                                    class="fas fa-share-square orange"></i></a>
                                            <a href="#!" class="share mt-2" data-dismiss="modal"
                                                onclick="getPostData('{{ get_class($post)::getTableName() }}','{{ $post->id }}','{{ $key }}','{{ get_class($post)::getModalId() }}')"><i
                                                    class="far fa-edit"></i></a>
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
