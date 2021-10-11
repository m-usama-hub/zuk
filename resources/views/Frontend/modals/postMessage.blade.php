<div class="modal fade postmessage" id="postmessage" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true" style="overflow: scroll">
    <div class="modal-dialog item_modal">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-md-3 col-12 header_image">
                    <img src="{{ asset('Frontend/img/Homzs.png') }}" style="    width: 63px;
                    margin-top: 15px;
                    margin-bottom: 15px;" class="homzs">
                </div>
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit "></i>Post a Message</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <form action="{{ route('message.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 col-12 house_mate_pop">
                        <div class="post_a_house_mate_detail" style="    margin-left: 20px; align-items: flex-end;">
                            <div class="person">
                                <img src="{{ asset(Auth::user()->UserDetail->profile_pic) }}" width="85" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="personal_info">
                                <div class="form-group text_fields" style="    width: 166%;">
                                    <div class="label_test" style="line-height: 1.1;">
                                        <div class="label_divs">
                                            <label for="">Name</label>
                                            <p style="margin-left: 63px;">{{ Auth::user()->UserDetail->fullname }}</p>
                                        </div>
                                        <div class="label_divs">
                                            <label for="">Private Phone</label>
                                            <p style="margin-left: 13px;">{{ Auth::user()->UserDetail->contact_no }}</p>
                                        </div>
                                        <div class="label_divs">
                                            <label for="">Email Address</label>
                                            <p style="margin-left: 15px;">{{ Auth::user()->UserDetail->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12 col-12 on">

                        <div class="switch_in_flex" style="margin: 0; margin-left: 25px;">
                            <div class="switches">
                                <p>Profile photo</p>
                                <div class="switch_div">
                                    <label class="switch">
                                        <input type="checkbox" name="isProfilePhotoPrivate" value="1">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="c switches">
                                <p>Private phone</p>
                                <div class=" switch_div">
                                    <label class="switch">
                                        <input type="checkbox" name="isPhonePrivate" value="1">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class=" switches">
                                <p>Email</p>
                                <div class="switch_div">
                                    <label class="switch">
                                        <input type="checkbox" name="isEmailPrivate" value="1">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text_fields custom-text-fields" style="width: 93%;margin-left: 17px;">
                        <input type="text" required
                            placeholder="Add your message tittle e.g. landscaping group for beginners" name="title"
                            class="text">
                    </div>
                    <div class="col-md-12 col-12 custom-text-area">
                        <textarea class="description" required cols="30" rows="10" placeholder="Add your message"
                            name="message">
                            </textarea>

                    </div>
                    <div class="col-md-12 col-12 broadcast" style="margin-left: 20px;">

                        <label for="">Broadcast radius</label>
                        <input type="hidden" name="lat" class="latitude" placeholder="Address">
                        <input type="hidden" name="lng" class='longitude' placeholder="Address">
                        <input type="text" placeholder="zip_code, country, address" required class="zip_code"
                            name="address" id="messageAddress" placeholder="Country">
                        <select name="broadcast_radius" class="radius">
                            <option value="">Radius</option>
                            <option value="1">1 mile</option>
                            <option value="2">2 mile</option>
                            <option value="3">3 mile</option>
                            <option value="4">4 mile</option>
                            <option value="5">5 mile</option>
                        </select>


                    </div>
                    <div class="col-md-12 col-12 cover_photo">
                        <div class="img_background">
                            <div class="cover">
                                <img src="Frontend/img/FOCUS.png" alt="" class="focus_size">
                                <p>Cover Photo</p>
                            </div>
                            <div class="empty_img">
                                <img src="Frontend/img/empty.png" alt="" class="img-fluid" id="display_image">
                            </div>
                            <div class="trash"><i class="upload_icons fas fa-trash" id="deleteImage"></i>
                            </div>
                            <div class="upload"><i class="upload_icons fas fa-file-upload"
                                    onclick="UploadUsing(this)"></i>
                            </div>
                            <div class="camera"><i class="upload_icons fas fa-camera"
                                    onclick="UploadUsing(this,'camera')" id="camera"></i></div>

                            <input type="file" required name="cover_image" class="UploadImageElement"
                                onchange="loadFile(event,'display_image')" style="display: none" />
                        </div>
                    </div>
                    <div class="col-md-12 col-12 policy">
                        <p>By posting this ad with Homzs you agree to our <a href="" class="terms">Terms of
                                Use</a>
                            and <a href="" class="terms">Privacy Policy.</a></p>
                        <a href=""></a>
                    </div>
                    <div class="col-md-12 col-12 buttons">
                        {{-- <button class="btn" type="button" onclick="preview(this)">PREVIEW</button>
                        <button class="btn" type="button" onclick="draft(this)">SAVE DRAFT</button>
                        <button class="btn" type="button" onclick="publish(this)">SAVE & PUBLISH</button> --}}

                        <button class="btn preview_form_data" type="button">PREVIEW</button>
                        <button class="btn draft_form_data" type="button">SAVE DRAFT</button>
                        <button class="btn publish_form_data" type="button">SAVE & PUBLISH</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
