<div class="modal fade my_details_popup show" id="mydetails" tabindex="-1" aria-labelledby="exampleModalLabel"
    style="overflow: scroll;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal_body">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">My Details</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <div class="col-md-12 col-12">
                    <div class="row">
                        <div class="col-md-4 col-12 personal_box">
                            <div class="header">
                                <div class="heading">
                                    <h1>{{ __('Personal Details') }}</h1>
                                </div>
                                <div><i class="far fa-edit" id="profile_edit_but" style="cursor: pointer;"></i></div>
                            </div>
                            <form action="{{ route('updateProfile') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="personal">
                                    <div class="edit_profile person_edit_photo">
                                        <img src="{{ asset(Auth::user()->UserDetail->profile_pic) }}" alt=""
                                            class="img-fluid profile_image w-25">
                                        <i class="far fa-edit edit" style="cursor: pointer; display:none;"></i>
                                        <input type="file" name="profile_pic" onchange="loadFileProfilePic(event)"
                                            style="display: none;" id="profile_pic"
                                            accept="image/gif, image/jpeg, image/png">
                                        <script>
                                            function loadFileProfilePic(event) {
                                                $('.profile_image').attr('src', URL.createObjectURL(event.target.files[0]))
                                            };
                                        </script>
                                    </div>
                                    <div class="profile">Profile photo</div>
                                </div>
                                <div class="form">

                                    <label for="" class="labels">First Name</label>
                                    <input type="text" name="firstname" class="textarea enable_profile_edit"
                                        value="{{ Auth::user()->UserDetail->firstname }}" placeholder="James"
                                        disabled>
                                    <label for="" class="labels">Last name</label>
                                    <input type="text" name="lastname" class="textarea enable_profile_edit"
                                        value="{{ Auth::user()->UserDetail->lastname }}" placeholder="Andreson"
                                        disabled>
                                    <label for="" class="labels">Number</label>
                                    <input type="number" name="contact_no" class="textarea enable_profile_edit"
                                        value="{{ Auth::user()->UserDetail->contact_no }}" placeholder="647 584 5241 "
                                        disabled>
                                    <label for="" class="labels">Address</label>
                                    <input type="text" name="address" class="textarea enable_profile_edit"
                                        value="{{ Auth::user()->UserDetail->address }}"
                                        placeholder="Brampon Ontario L7A 4G6" disabled>
                                    <label for="" class="labels">Email</label>
                                    <input type="email" name="email" class="textarea enable_profile_edit"
                                        value="{{ Auth::user()->email }}" placeholder="first.name@gmail.com" disabled>
                                    <div class="changepass">
                                        <h4>Change Password</h4>
                                    </div>
                                    <input type="password" class="p_textarea enable_profile_edit"
                                        name="current_password" placeholder="Current Password" disabled>
                                    <input type="password" class="p_textarea enable_profile_edit" name="password"
                                        placeholder="New Password" disabled>
                                    <input type="password" class="p_textarea enable_profile_edit"
                                        name="password_confirm" placeholder="Confirm Password" disabled>
                                    <button class="btn btn-sm btn-primary " id="enable_profile_edit" type="submit"
                                        style="float: right;display: none;border-radius: 10px;"> Save</button>
                                </div>
                            </form>

                        </div>
                        <div class="col-md-4 col-12 personal_box2">
                            <form action="{{ route('updateProfile') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="header">
                                    <div class="heading">
                                        <h1>My Profile</h1>
                                    </div>
                                    <div><i class="far fa-edit" id="open_edit" style="cursor: pointer;"></i></div>
                                </div>
                                {{-- <div class="personal">
                                    <div class="edit_profile">
                                        <img src="{{ asset(Auth::user()->UserDetail->profile_pic) }}" alt=""
                                            class="img-fluid profile_image w-25">
                                    </div>
                                    <div class="profile">Profile photo</div>
                                </div> --}}
                                <div class="photo_heading">
                                    <h4>Profile photos</h4>
                                </div>
                                <div class="custom_modal_swipper">
                                    <img src="{{ asset(Auth::user()->UserDetail->user_profile_pic) }}" alt=""
                                        class="pr_photo" id="show_user_profile_pic">
                                    <div>
                                        <div class="trash edit_btn" style="top: 176px;left: 82%; display:none;"><i
                                                class="fas fa-edit" id="edit_user_profile_pic"
                                                style="cursor: pointer;"></i>
                                            <input type="file" name="user_profile_pic"
                                                onchange="loadFilex(event,'show_user_profile_pic')"
                                                id="user_profile_pic" style="display: none;"
                                                accept="image/gif, image/jpeg, image/png">
                                        </div>
                                        <script>
                                            function loadFilex(event, id) {
                                                $('#' + id).attr('src', URL.createObjectURL(event.target.files[0]))
                                            };
                                        </script>
                                        {{-- <div class="camera" style="bottom: 409px;right: 24px;"><i class="fas fa-camera"></i>
                                        </div> --}}
                                    </div>
                                    <!-- Slider main container -->
                                </div>
                                <div class="col-md-12 col-12">
                                    <p class="photo_heading">Profile videos</p>
                                </div>
                                <div class="gr_photos">
                                    <div class="custom_modal_swipper">
                                        <video class="pr_photo" controls id="show_user_profile_video"
                                            src="{{ asset(Auth::user()->UserDetail->user_profile_video) }}"
                                            style="border-radius: 16px;">
                                        </video>
                                        <div>
                                            <div class="trash edit_btn" style="display: none;"><i class="fas fa-edit"
                                                    id="edit_user_profile_video" style="cursor: pointer;"></i>
                                                <input type="file" name="user_profile_video"
                                                    onchange="loadVideo(event,'show_user_profile_video')"
                                                    id="user_profile_video" style="display: none;" accept="video/*">
                                            </div>
                                            <script>
                                                function loadVideo(event, id) {
                                                    $('#' + id).attr('src', URL.createObjectURL(event.target.files[0]))
                                                };
                                            </script>
                                            {{-- <div class="camera" style=""><i class="fas fa-video"></i>
                                            </div> --}}
                                        </div>
                                        <!-- Slider main container -->
                                    </div>
                                </div>
                                <div class="form">
                                    <label for="" class="labels">About me</label>
                                    <textarea name="details" id="about_me" class="textarea" cols="30" rows="10"
                                        disabled>{{ Auth::user()->UserDetail->details }}</textarea>
                                    <label for="" class="labels">My interests</label>
                                    <div class="textarea" id="all_interset" style="font-size: 11px;">
                                        @foreach (Auth::user()->UserDetail->UserInterests as $item)
                                            <i>{{ $item->interest }} <i class="fas fa-trash edit_btn"
                                                    data-toggle="tooltip" data-original-title="Delete"
                                                    style="cursor: pointer; display:none;"></i></i><br>
                                        @endforeach
                                    </div>
                                    <div class="changepass edit_btn" style="display: none;">
                                        <h4>Add an Interest <i class="fas fa-plus" id="add_new_interest"
                                                style="cursor: pointer;"></i></h4>
                                    </div>
                                    <div id="add_new_interest_inputs" style="display:none;">
                                        <input type="text" class="p_textarea" id="interest_name"
                                            placeholder="Interest name">
                                        <button class="btn btn-sm btn-link"
                                            style="padding: 4px;margin-left: 5px;font-size: 11px;margin-bottom: 5px;border: 1px solid;border-radius: 8px;"
                                            id="add_new">Add</button>
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-primary edit_btn" type="submit"
                                    style="float: right;display: none;border-radius: 10px;"> Save</button>
                            </form>
                        </div>
                        <div class="col-md-4 col-12 personal_box3">

                            <form action="{{ route('UpdateBusinessData') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="header3">
                                    <div class="upper_icon"><i class="far fa-edit" id="business_edit_but"
                                            style="cursor: pointer;"></i></div>
                                    <div class="heading3">
                                        <h1>Buisness Details</h1>
                                    </div>
                                </div>

                                <div class="personal">
                                    <div class="edit_profile3 person_edit_photo">
                                        <img src="{{ asset(Auth::user()->UserBusinessDetail->business_logo ?? 'Frontend/img/buisness.png') }}"
                                            alt="" class="img-fluid business_image w-25">
                                        <i class="far fa-edit edit_business_logo edit_business_btn"
                                            style="cursor: pointer; display:none;"></i>
                                        <input type="file" name="business_logo" onchange="loadFileProfile(event)"
                                            style="display: none;" id="business_logo"
                                            accept="image/gif, image/jpeg, image/png">
                                        <script>
                                            function loadFileProfile(event) {
                                                $('.business_image').attr('src', URL.createObjectURL(event.target.files[0]))
                                            };
                                        </script>
                                    </div>
                                </div>
                                <div class="photo_heading">
                                    <h4>Profile photos</h4>
                                </div>
                                <div class="gr_photos">
                                    {{-- <div class="custom_modal_swipper">
                                        <img src="{{ asset(Auth::user()->UserBusinessDetail->business_profile_pic ?? 'Frontend/img/Group413.png') }}"
                                            alt="" class="pr_photo" id="show_user_business_pic">
                                        <div>
                                            <div class="trash edit_business_btn" style="display: none;"><i
                                                    class="fas fa-edit" id="edit_user_business_pic"
                                                    style="cursor: pointer;"></i>
                                                <input type="file" name="user_business_pic"
                                                    onchange="loadFileBusiness(event,'show_user_business_pic')"
                                                    id="user_business_pic" style="display: none;"
                                                    accept="image/gif, image/jpeg, image/png">
                                            </div>
                                            <script>
                                                function loadFileBusiness(event, id) {
                                                    $('#' + id).attr('src', URL.createObjectURL(event.target.files[0]))
                                                };
                                            </script>
                                        </div>


                                        <!-- Slider main container -->
                                    </div> --}}

                                    <div class="cover_photo" style="background: aqua;">
                                        <!-- Slideshow container -->
                                        <div class="slideshow-container">
                                            <!-- Full-width images with number and caption text -->
                                            <div class="mySlides fade" style="display: block;">
                                                <div class="numbertext">1 / 6</div>
                                                <div class="img_background">
                                                    <div class="cover">
                                                        <img src="Frontend/img/FOCUS.png" alt="" class="focus_size">
                                                        <p>Cover Photo</p>
                                                    </div>
                                                    <div class="empty_img">
                                                        <img src="{{ asset(Auth::user()->UserBusinessDetail->CoverImages[0]->path ?? 'Frontend/img/empty.png') }}"
                                                            alt="" class="img-fluid display_image_1"
                                                            id="display_image_1">
                                                    </div>
                                                    <div class="trash"><i
                                                            class="upload_icons fas fa-trash trash_1" id="deleteImage"
                                                            onclick='DeleteImage({{ Auth::user()->UserBusinessDetail->CoverImages[0]->id ?? 0 }},"display_image_1","mydetails");'></i>
                                                    </div>
                                                    <div class="upload"><i
                                                            class="upload_icons fas fa-file-upload"
                                                            onclick="UploadUsing(this)"></i>
                                                    </div>
                                                    <div class="camera"><i class="upload_icons fas fa-camera"
                                                            onclick="UploadUsing(this,'camera')" id="camera"></i></div>

                                                    <input type="file" required name="cover_image[]"
                                                        class="UploadImageElement"
                                                        onchange="loadFile(event,'display_image_1')"
                                                        style="display: none" />
                                                </div>
                                            </div>
                                            <div class="mySlides fade">
                                                <div class="numbertext">2 / 6</div>
                                                <div class="img_background">
                                                    <div class="cover">
                                                        <img src="Frontend/img/FOCUS.png" alt="" class="focus_size">
                                                        <p>Cover Photo</p>
                                                    </div>
                                                    <div class="empty_img">
                                                        <img src="{{ asset(Auth::user()->UserBusinessDetail->CoverImages[1]->path ?? 'Frontend/img/empty.png') }}"
                                                            alt="" class="img-fluid display_image_2"
                                                            id="display_image_2">
                                                    </div>
                                                    <div class="trash"><i
                                                            class="upload_icons fas fa-trash trash_2" id="deleteImage"
                                                            onclick='DeleteImage({{ Auth::user()->UserBusinessDetail->CoverImages[1]->id ?? 0 }},"display_image_2","mydetails");'></i>
                                                    </div>
                                                    <div class="upload"><i
                                                            class="upload_icons fas fa-file-upload"
                                                            onclick="UploadUsing(this)"></i>
                                                    </div>
                                                    <div class="camera"><i class="upload_icons fas fa-camera"
                                                            onclick="UploadUsing(this,'camera')" id="camera"></i></div>

                                                    <input type="file" required name="cover_image[]"
                                                        class="UploadImageElement"
                                                        onchange="loadFile(event,'display_image_2')"
                                                        style="display: none" />
                                                </div>
                                            </div>
                                            <div class="mySlides fade">
                                                <div class="numbertext">3 / 6</div>
                                                <div class="img_background">
                                                    <div class="cover">
                                                        <img src="Frontend/img/FOCUS.png" alt=""
                                                            class="focus_size">
                                                        <p>Cover Photo</p>
                                                    </div>
                                                    <div class="empty_img">
                                                        <img src="{{ asset(Auth::user()->UserBusinessDetail->CoverImages[2]->path ?? 'Frontend/img/empty.png') }}"
                                                            alt="" class="img-fluid display_image_3"
                                                            id="display_image_3">
                                                    </div>
                                                    <div class="trash"><i
                                                            class="upload_icons fas fa-trash trash_3" id="deleteImage"
                                                            onclick='DeleteImage({{ Auth::user()->UserBusinessDetail->CoverImages[2]->id ?? 0 }},"display_image_3","mydetails");'></i>
                                                    </div>
                                                    <div class="upload"><i
                                                            class="upload_icons fas fa-file-upload"
                                                            onclick="UploadUsing(this)"></i>
                                                    </div>
                                                    <div class="camera"><i class="upload_icons fas fa-camera"
                                                            onclick="UploadUsing(this,'camera')" id="camera"></i></div>

                                                    <input type="file" required name="cover_image[]"
                                                        class="UploadImageElement"
                                                        onchange="loadFile(event,'display_image_3')"
                                                        style="display: none" />
                                                </div>
                                            </div>
                                            <div class="mySlides fade">
                                                <div class="numbertext">4 / 6</div>
                                                <div class="img_background">
                                                    <div class="cover">
                                                        <img src="Frontend/img/FOCUS.png" alt=""
                                                            class="focus_size">
                                                        <p>Cover Photo</p>
                                                    </div>
                                                    <div class="empty_img">
                                                        <img src="{{ asset(Auth::user()->UserBusinessDetail->CoverImages[3]->path ?? 'Frontend/img/empty.png') }}"
                                                            alt="" class="img-fluid display_image_4"
                                                            id="display_image_4">
                                                    </div>
                                                    <div class="trash"><i
                                                            class="upload_icons fas fa-trash trash_4" id="deleteImage"
                                                            onclick='DeleteImage({{ Auth::user()->UserBusinessDetail->CoverImages[3]->id ?? 0 }},"display_image_4","mydetails");'></i>
                                                    </div>
                                                    <div class="upload"><i
                                                            class="upload_icons fas fa-file-upload"
                                                            onclick="UploadUsing(this)"></i>
                                                    </div>
                                                    <div class="camera"><i class="upload_icons fas fa-camera"
                                                            onclick="UploadUsing(this,'camera')" id="camera"></i></div>

                                                    <input type="file" required name="cover_image[]"
                                                        class="UploadImageElement"
                                                        onchange="loadFile(event,'display_image_4')"
                                                        style="display: none" />
                                                </div>
                                            </div>
                                            <div class="mySlides fade">
                                                <div class="numbertext">5 / 6</div>
                                                <div class="img_background">
                                                    <div class="cover">
                                                        <img src="Frontend/img/FOCUS.png" alt=""
                                                            class="focus_size">
                                                        <p>Cover Photo</p>
                                                    </div>
                                                    <div class="empty_img">
                                                        <img src="{{ asset(Auth::user()->UserBusinessDetail->CoverImages[4]->path ?? 'Frontend/img/empty.png') }}"
                                                            alt="" class="img-fluid display_image_6"
                                                            id="display_image_6">
                                                    </div>
                                                    <div class="trash"><i
                                                            class="upload_icons fas fa-trash trash_5" id="deleteImage"
                                                            onclick='DeleteImage({{ Auth::user()->UserBusinessDetail->CoverImages[4]->id ?? 0 }},"display_image_6","mydetails");'></i>
                                                    </div>
                                                    <div class="upload"><i
                                                            class="upload_icons fas fa-file-upload"
                                                            onclick="UploadUsing(this)"></i>
                                                    </div>
                                                    <div class="camera"><i class="upload_icons fas fa-camera"
                                                            onclick="UploadUsing(this,'camera')" id="camera"></i></div>

                                                    <input type="file" required name="cover_image[]"
                                                        class="UploadImageElement"
                                                        onchange="loadFile(event,'display_image_6')"
                                                        style="display: none" />
                                                </div>
                                            </div>
                                            <div class="mySlides fade">
                                                <div class="numbertext">6 / 6</div>
                                                <div class="img_background">
                                                    <div class="cover">
                                                        <img src="Frontend/img/FOCUS.png" alt=""
                                                            class="focus_size">
                                                        <p>Cover Photo</p>
                                                    </div>
                                                    <div class="empty_img">
                                                        <img src="{{ asset(Auth::user()->UserBusinessDetail->CoverImages[5]->path ?? 'Frontend/img/empty.png') }}"
                                                            alt="" class="img-fluid display_image_5"
                                                            id="display_image_5">
                                                    </div>
                                                    <div class="trash"><i
                                                            class="upload_icons fas fa-trash trash_6" id="deleteImage"
                                                            onclick='DeleteImage({{ Auth::user()->UserBusinessDetail->CoverImages[5]->id ?? 0 }},"display_image_5","mydetails");'></i>
                                                    </div>
                                                    <div class="upload"><i
                                                            class="upload_icons fas fa-file-upload"
                                                            onclick="UploadUsing(this)"></i>
                                                    </div>
                                                    <div class="camera"><i class="upload_icons fas fa-camera"
                                                            onclick="UploadUsing(this,'camera')" id="camera"></i></div>

                                                    <input type="file" required name="cover_image[]"
                                                        class="UploadImageElement"
                                                        onchange="loadFile(event,'display_image_5')"
                                                        style="display: none" />
                                                </div>
                                            </div>
                                            <!-- Next and previous buttons -->
                                            {{-- <a class="prev prev_button">&#10094;</a>
                                            <a class="next next_button">&#10095;</a> --}}
                                        </div>
                                        <br>
                                        <!-- The dots/circles -->
                                        <div style="text-align:center">
                                            <span class="dot activeDot"></span>
                                            <span class="dot"></span>
                                            <span class="dot"></span>
                                            <span class="dot"></span>
                                            <span class="dot"></span>
                                            <span class="dot"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <p class="photo_heading">Profile videos</p>
                                </div>
                                <div class="gr_photos">
                                    <div class="custom_modal_swipper">
                                        <video class="pr_photo" controls id="show_user_business_video"
                                            src="{{ Auth::user()->UserBusinessDetail->business_profile_video ?? '' }}"
                                            style="border-radius: 16px;">
                                        </video>
                                        <div>
                                            <div class="trash edit_business_btn" style="display: none;"><i
                                                    class="fas fa-edit" id="edit_user_business_video"
                                                    style="cursor: pointer;"></i>
                                                <input type="file" name="user_business_video"
                                                    onchange="loadVideo(event,'show_user_business_video')"
                                                    id="user_business_video" style="display: none;" accept="video/*">
                                            </div>
                                            <script>
                                                function loadVideo(event, id) {
                                                    $('#' + id).attr('src', URL.createObjectURL(event.target.files[0]))
                                                };
                                            </script>
                                            {{-- <div class="camera" style=""><i class="fas fa-video"></i>
                                            </div> --}}
                                        </div>
                                        <!-- Slider main container -->
                                    </div>
                                </div>
                                <div class="form">
                                    <label for="" class="labels">Buisness name</label>
                                    <input type="text" name="business_name" class="textarea enable_business_edit"
                                        value="{{ Auth::user()->UserBusinessDetail->business_name ?? '' }}"
                                        placeholder="James Electricals" disabled required>
                                    <label for="" class="labels">Business phone</label>
                                    <input type="number" name="business_phone" class="textarea enable_business_edit"
                                        value="{{ Auth::user()->UserBusinessDetail->business_phone ?? '' }}"
                                        placeholder="123 456 789" disabled required>
                                    <label for="" class="labels">Business Address</label>
                                    <input type="hidden" name="lat" class="latitude" placeholder="Address">
                                    <input type="hidden" name="lng" class='longitude' placeholder="Address">
                                    <input type="text" name="address" class="textarea enable_business_edit"
                                        id="professionalAddress"
                                        value="{{ Auth::user()->UserBusinessDetail->address ?? '' }}"
                                        placeholder="zipcode, country, town" disabled required>
                                    <label for="" class="labels">About my business</label>
                                    <textarea name="business_details" id="" class="textarea enable_business_edit"
                                        cols="30" rows="10"
                                        disabled>{{ Auth::user()->UserBusinessDetail->business_details ?? '' }}</textarea>

                                    {{-- <label for="" class="labels">Business Category</label>
                                    <select id="business_category_id" name="business_category_id" class="textarea"
                                        required disabled="true">
                                        @foreach (AppHelper::professionalCategories() as $item)
                                            <option value="{{ $item->id }}"
                                                {{ Auth::user()->UserBusinessDetail ? ($item->id == Auth::user()->UserBusinessDetail->business_category_id ? 'selected' : '') : '' }}>
                                                {{ $item->category }}</option>
                                        @endforeach
                                    </select> --}}


                                    <label for="" class="labels">Business Category</label>
                                    <div class="textarea" id="all_business_categories" style="font-size: 11px;">
                                        @foreach (Auth::user()->UserBusinessDetail->ProfessionalBusinessCategories ?? [] as $item)

                                            <i>{{ $item->category }}
                                                <input type="hidden" class="category_id"
                                                    value="{{ $item->id }}">
                                                <i class="fas fa-trash edit_business_btn" data-toggle="tooltip"
                                                    data-original-title="Delete"
                                                    style="cursor: pointer; display:none;"></i></i><br>
                                        @endforeach
                                    </div>

                                    <div class="changepass edit_business_btn" style="display: none;">
                                        <h4>Add a business category <i class="fas fa-plus"
                                                id="add_new_business_category" style="cursor: pointer;"></i></h4>
                                    </div>
                                    <div id="add_new_business_category_inputs" style="display:none;">
                                        <select id="business_category_id" class="textarea">
                                            @foreach (AppHelper::professionalCategories() as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ $item->category }}</option>
                                            @endforeach
                                        </select>
                                        <button class="btn btn-sm"
                                            style="padding: 4px;margin-left: 5px;font-size: 11px;margin-bottom: 5px;border: 1px solid;border-radius: 8px;"
                                            id="add_new_business_category">Add</button>
                                    </div>


                                    <label for="" class="labels">Business services</label>
                                    <div class="textarea" id="all_business_services" style="font-size: 11px;">
                                        @foreach (Auth::user()->UserBusinessDetail->UserBusinessServices ?? [] as $item)
                                            <i>{{ $item->service_name }} <i class="fas fa-trash edit_business_btn"
                                                    data-toggle="tooltip" data-original-title="Delete"
                                                    style="cursor: pointer; display:none;"></i></i><br>
                                        @endforeach
                                    </div>



                                    <div class="changepass edit_business_btn" style="display: none;">
                                        <h4>Add a business service <i class="fas fa-plus" id="add_new_business"
                                                style="cursor: pointer;"></i></h4>
                                    </div>
                                    <div id="add_new_business_inputs" style="display:none;">
                                        <input type="text" class="p_textarea" id="service_name"
                                            placeholder="Service name">
                                        <button class="btn btn-sm"
                                            style="padding: 4px;margin-left: 5px;font-size: 11px;margin-bottom: 5px;border: 1px solid;border-radius: 8px;"
                                            id="add_new_business_service">Add</button>
                                    </div>
                                </div>

                                <button class="btn btn-sm btn-primary edit_business_btn publish_form_data"
                                    type="submit" style="float: right;display: none;border-radius: 10px;"> Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
