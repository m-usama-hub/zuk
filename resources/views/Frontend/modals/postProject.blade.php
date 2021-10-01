<div class="modal fade item_sell_popup show" id="postproject" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit "></i>Post a Project</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <img src="Frontend/img/Image 1.png" alt="" class="img-fluid homzs">
                            <div class="Turn">
                                <h4>Turn on Display</h4>
                            </div>
                            <div class="switches">
                                <h5>Profile photo</h5>
                                <div class="switch_div">
                                    <label class="switch">
                                        <input type="checkbox" name="isProfilePhotoPrivate" value="1">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="switches">
                                <h5>Private phone</h5>
                                <div class="switch_div">
                                    <label class="switch">
                                        <input type="checkbox" name="isPhonePrivate" value="1">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="switches">
                                <h5>Email</h5>
                                <div class="switch_div">
                                    <label class="switch">
                                        <input type="checkbox" name="isEmailPrivate" value="1">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-12 person">
                            <img src="{{ asset(Auth::user()->UserDetail->profile_pic) }}" width="100" alt=""
                                class="person">
                            <div class="profile">
                                <h5>Profile photo</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group text_fields">
                                        <input type="text" required placeholder="First Name" name="firstname"
                                            class="text">
                                        <input type="text" required placeholder="Last Name" name="lastname"
                                            class="text">
                                        <input type="email" required placeholder="Email Address" name="email"
                                            class="text">
                                        <input type="text" required name="project_location"
                                            placeholder="Add project location e.g. Brampton On" class="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group text_fields">
                                        <input type="number" required placeholder="Private Phone" name="contact_no"
                                            class="text">
                                        <input type="text" required placeholder="Address" name="address"
                                            class="text">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text_fields">
                        <label for="" class="name mb-3">Project Title</label>
                        <input type="text" required name="title"
                            placeholder="Add your item name e.g. Samsung 60 Inches 4K HDTV" class="text">
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-12" style="padding:0px;">
                            <textarea id="item-description" class="description" required name="description" rows="6"
                                cols="50" placeholder="Add your item description"></textarea>
                        </div>
                        <div class="col-md-12 col-12 cover_photo">
                            <div class="img_background">
                                <div class="cover">
                                    <img src="Frontend/img/FOCUS.png" alt="" class="focus_size">
                                    <p>Cover Photo</p>
                                </div>
                                <div class="empty_img">
                                    <img src="Frontend/img/empty.png" alt="" class="img-fluid"
                                        id="display_image_project">
                                </div>
                                <div class="trash"><i class="upload_icons fas fa-trash" id="deleteImage"></i>
                                </div>
                                <div class="upload"><i class="upload_icons fas fa-file-upload"
                                        onclick="UploadUsing(this)"></i>
                                </div>
                                <div class="camera"><i class="upload_icons fas fa-camera"
                                        onclick="UploadUsing(this,'camera')" id="camera"></i></div>

                                <input type="file" required name="cover_image" class="UploadImageElement"
                                    onchange="loadFile(event,'display_image_project')" style="display: none" />
                            </div>
                        </div>
                        <div class="col-md-12 col-12 policy">
                            <p>By posting this ad with Homzs you agree to our <a href="" class="terms">Terms of
                                    Use</a> and <a href="" class="terms">Privacy Policy.</a></p>
                            <a href=""></a>
                        </div>
                        <div class="col-md-12 col-12 buttons">
                            <button class="btn preview_form_data" type="button">PREVIEW</button>
                            <button class="btn draft_form_data" type="button">SAVE DRAFT</button>
                            <button class="btn publish_form_data" type="button">SAVE & PUBLISH</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
