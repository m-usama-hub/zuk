<div class="modal fade postmessage" id="postmessage" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-md-3 col-12 header_image">
                    <img src="../Homzs/images/Homzs.png" alt="" class="homzs">
                </div>
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit "></i>Post a Message</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <form action="{{ route('message.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="logo_modal">
                        <img src="Frontend/img/Homzs.png" alt="" class="homzs">
                    </div>
                    <div class="col-md-12 col-12 house_mate_pop">
                        <div class="post_a_house_mate_detail">
                            <div class="person">
                                <img src="{{ asset(Auth::user()->UserDetail->profile_pic) }}" width="100" alt=""
                                    class="img-fluid">
                                <div class="profile">
                                    <h5>Profile photo</h5>
                                </div>
                            </div>
                            <div class="personal_info">
                                <div class="form-group text_fields">
                                    <input type="text" required placeholder="Name" name="name" class="text">
                                    <input type="number" required placeholder="Age" name="age" class="text">
                                    <input type="number" required placeholder="Phone" name="contact_no"
                                        class="text">
                                    <input type="email" required placeholder="Email Address" name="email"
                                        class="text">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12 col-12 on">

                        <div class="switch_in_flex">
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
                    <div class="text_fields custom-text-fields">
                        <input type="text" required
                            placeholder="Add your message tittle e.g. landscaping group for beginners" name="title"
                            class="text">
                    </div>
                    <div class="col-md-12 col-12 custom-text-area">
                        <textarea class="description" required cols="30" rows="10" placeholder="Add your message"
                            name="message">
                            </textarea>

                    </div>
                    <div class="col-md-12 col-12 broadcast">

                        <label for="">Broadcast radius</label>
                        <input type="number" required class="zip_code" name="zipcode"
                            placeholder="Zip code, country">
                        <select name="" class="radius">
                            <option value="">Radius</option>
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
