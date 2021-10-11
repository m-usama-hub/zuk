<div class="modal fade house_mate_pop" id="posthousemate" tabindex="-1" aria-labelledby="exampleModalLabel" style="overflow: scroll"
    aria-hidden="true">
    <div class="modal-dialog house_modal">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit "></i>Post a Housemate</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('housemate.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="logo_modal">
                        <img src="Frontend/img/Homzs.png" alt="" class="homzs">
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="post_a_house_mate_detail">
                                <div class="person">
                                    <img src="{{ asset(Auth::user()->UserDetail->profile_pic) }}" width="100" alt=""
                                        class="img-fluid">
                                    <div class="profile">
                                        <h5>Profile photo</h5>
                                    </div>
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
                    </div>
                    <div class="col-md-12 col-12 text_fields">
                        <input type="text" required name="title"
                            placeholder="Post title e.g. Married couple looking for one bed basement flat"
                            class="text">
                    </div>
                    <div class="row ">
                        <div class="col-md-6 col-12  imp_dates">
                            <h5 class="dates">Date available from</h5>
                            <div class="col-md-12 col-12 free">
                                <p>Available now</p>
                                <div class="col-md-6 col-12 switch_div">
                                    <label class="switch">
                                        <input type="checkbox" name="available_now" value="1">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 col-12 areas">
                                <h5 class="dates">Areas I am interested in</h5>
                                <div class="col-md-6 col-12 selection_box">
                                    <select name="interested_in" class="category">
                                        <option value="COD">COD</option>
                                        <option value="CC">CC</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 details">
                            {{-- <div class="date">
                                <input type="date" name="available_date" class="category" id="">
                            </div> --}}
                            <div class="col-md-12 col-12 info">
                                <div class="col-md-12 col-12 text_fields">

                                <input type="date" name="available_date" class="text" id="">
                                </div>
                                <div class="col-md-12 col-12 text_fields">
                                    <input type="hidden" name="lat" class="latitude" placeholder="Address">
                                    <input type="hidden" name="lng" class="longitude" placeholder="Address">
                                    <input type="text" required placeholder="e.g. Brampton" name="address" id="houseAddress"
                                        class="text">
                                </div>
                                <div class="col-md-12 col-12 text_fields">
                                    <select name="room_type" class="text" required>
                                        <option value="furnished">furnished</option>
                                        <option value="non-furnished">non-furnished</option>
                                    </select>
                                </div>
                                <div class="col-md-12 col-12 text_fields">
                                    <select name="room_capacity" class="text" required>
                                        <option value="Single room">Single room</option>
                                        <option value="Double room">Double room</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-12 on">
                            <div class="Turn">
                                <h4>Turn on Display</h4>
                            </div>
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
                        <div class="col-md-12 col-12 text-area-custom">
                            <textarea id="wreview" name="description" rows="6" cols="50" required class="description"
                                placeholder="Add your item description"></textarea>
                        </div>
                        <div class="col-md-12 col-12 cover_photo">
                            <div class="img_background">
                                <div class="cover">
                                    <img src="Frontend/img/FOCUS.png" alt="" class="focus_size">
                                    <p>Cover Photo</p>
                                </div>
                                <div class="empty_img">
                                    <img src="Frontend/img/empty.png" alt="" class="img-fluid"
                                        id="display_image_housemate">
                                </div>
                                <div class="trash"><i class="upload_icons fas fa-trash" id="deleteImage"></i>
                                </div>
                                <div class="upload"><i class="upload_icons fas fa-file-upload"
                                        onclick="UploadUsing(this)"></i>
                                </div>
                                <div class="camera"><i class="upload_icons fas fa-camera"
                                        onclick="UploadUsing(this,'camera')" id="camera"></i></div>

                                <input type="file" name="cover_image" class="UploadImageElement"
                                    onchange="loadFile(event,'display_image_housemate')" style="display: none"
                                    required />
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
