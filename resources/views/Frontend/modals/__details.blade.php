<div class="modal fade my_details_popup show" id="mydetails" tabindex="-1" aria-labelledby="exampleModalLabel"
    style="overflow: scroll;" aria-modal="true" role="dialog">
    <div class="modal-dialog">
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
                                    <h1>Personal Details</h1>
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
                                    <div
                                        class="swiper modalSwiper swiper-initialized swiper-horizontal swiper-pointer-events">
                                        <div class="swiper-wrapper" id="swiper-wrapper-2af7103c3e0421064d"
                                            aria-live="polite"
                                            style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">

                                        </div>
                                        <div class="swiper-button-next" tabindex="0" role="button"
                                            aria-label="undefined" aria-controls="Next slide" aria-disabled="false">
                                        </div>
                                        <div class="swiper-button-prev" tabindex="-1" role="button"
                                            aria-label="undefined" aria-controls="Previous slide" aria-disabled="true">
                                        </div>
                                        <div
                                            class="swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal">
                                            <span class="swiper-pagination-current">1</span> / <span
                                                class="swiper-pagination-total">9</span>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive"
                                            aria-atomic="true"></span>
                                    </div>
                                    {{-- <img src="{{ asset(Auth::user()->UserDetail->user_profile_pic) }}" alt=""
                                        class="pr_photo" id="show_user_profile_pic"> --}}
                                    <div>
                                        <div class="trash edit_btn"
                                            style="top: 42px;left: 82%; display:none;z-index: 9;color: black;"><i
                                                class="fas fa-upload" id="edit_user_profile_pic"
                                                style="cursor: pointer;"></i>
                                            <input type="file" name="user_profile_pic[]" multiple
                                                onchange="loadFileZZ(event,'show_user_profile_pic')"
                                                id="user_profile_pic" style="display: none;"
                                                accept="image/gif, image/jpeg, image/png">
                                        </div>
                                        {{-- <script>
                                            function loadFileZZ(event, id) {


                                                for (let index = 0; index < event.target.files.length; index++) {

                                                    $('#swiper-wrapper-2af7103c3e0421064d').append(`
                                                    <div class="swiper-slide">
                                                        <img src="` + URL.createObjectURL(event.target.files[index]) + `" alt="" class="pr_photo">
                                                        <div class="trash"><i class="fas fa-trash"></i>
                                                        </div>
                                                        <div class="camera"><i class="fas fa-camera"></i>
                                                        </div>
                                                    </div>`);
                                                }

                                                modalSwiper.initialize();

                                                $('#swiper-wrapper-2af7103c3e0421064d').children() //this replaces the onclick="" method
                                                    .on('click', '.fa-trash', function() {
                                                        this.parentElement.parentElement.remove();
                                                        modalSwiper.initialize();
                                                    });

                                            };


                                        </script> --}}
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
                                    <div class="custom_modal_swipper">
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
                                            {{-- <div class="camera" style=""><i class="fas fa-video"></i>
                                            </div> --}}
                                        </div>
                                        <!-- Slider main container -->
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
                                    <label for="" class="labels">About my business</label>
                                    <textarea name="business_details" id="" class="textarea enable_business_edit"
                                        cols="30" rows="10"
                                        disabled>{{ Auth::user()->UserBusinessDetail->business_details ?? '' }}</textarea>

                                    <label for="" class="labels">Business Category</label>
                                    <select id="business_category_id" name="business_category_id" class="textarea"
                                        required disabled="true">
                                        @foreach (AppHelper::professionalCategories() as $item)
                                            <option value="{{ $item->id }}"
                                                {{ Auth::user()->UserBusinessDetail ? ($item->id == Auth::user()->UserBusinessDetail->business_category_id ? 'selected' : '') : '' }}>
                                                {{ $item->category }}</option>
                                        @endforeach
                                    </select>


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

                                <button class="btn btn-sm btn-primary edit_business_btn" type="submit"
                                    style="float: right;display: none;border-radius: 10px;"> Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
