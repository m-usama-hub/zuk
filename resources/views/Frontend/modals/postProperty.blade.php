<div class="modal fade property" id="buisness_property" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog item_modal">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-md-3 col-12"> <img src="Frontend/img/Homzs.png" alt="" class="homzs"> </div>
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit "></i>Post a Property</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <form action="{{ route('property.store') }}" method="post" enctype="multipart/form-data"
                    autocomplete="off">
                    @csrf
                    <div class="col-md-12 col-12 row"> </div>
                    <div class="col-md-12 col-12">
                        <div class="row ">
                            <div class="col-md-3 col-12 person"> <img
                                    src="{{ asset(Auth::user()->UserDetail->profile_pic) }}" width="100" alt=""
                                    class="person">
                                <div class="profile">
                                    <h5>Profile photo</h5>
                                </div>
                            </div>
                            <div class="col-md-9 col-12">
                                <div class="row forms">
                                    <div class="col-md-6">
                                        <h5 class="source">Advert Source</h5>
                                        <div class="form-group text_fields">
                                            <select required name="source_type" class="text">
                                                <option value="Private">Private</option>
                                                <option value="Public">Public</option>
                                            </select>
                                        </div>
                                        <div class="form-group text_fields label_test">
                                            <label for="">Business Name</label>
                                            <p>{{ Auth::user()->UserBusinessDetail->business_name }}</p>
                                        </div>
                                        <div class="form-group text_fields label_test">
                                            <label for="">Business Phone</label>
                                            <p>{{ Auth::user()->UserBusinessDetail->business_phone }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="source">Advert type</h5>
                                        <div class="form-group text_fields">
                                            <select required name="for_type" class="text">
                                                <option value="Rent">For Rent</option>
                                                <option value="Sale">For Sale</option>
                                            </select>
                                        </div>
                                        <div class="form-group text_fields label_test">
                                            <label for="">Email Address</label>
                                            <p>{{ Auth::user()->UserDetail->email }}</p>
                                        </div>
                                        <div class="form-group text_fields label_test">
                                            <label for="">Contact person</label>
                                            <p>{{ Auth::user()->UserDetail->fullname }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 features">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="rows">
                                    <h5 class="property_info">
                                        Property type
                                    </h5>
                                    <select required name="property_type" class="details">
                                        <option value="Flat">Flat</option>
                                        <option value="Apartment">Apartment</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="rows">
                                    <h5 class="property_info">
                                        No. of Bedroom
                                    </h5>
                                    <select required name="property_beds" class="details">
                                        <option value="1 bedrooms">1 bedrooms</option>
                                        <option value="2 bedrooms">2 bedrooms</option>
                                        <option value="3 bedrooms">3 bedrooms</option>
                                        <option value="4 bedrooms">4 bedrooms</option>
                                        <option value="5 bedrooms">5 bedrooms</option>
                                        <option value="6 bedrooms">6 bedrooms</option>
                                        <option value="7 bedrooms">7 bedrooms</option>
                                        <option value="8 bedrooms">8 bedrooms</option>
                                        <option value="9 bedrooms">9 bedrooms</option>
                                        <option value="10 bedrooms">10 bedrooms</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="rows">
                                    <h5 class="property_info">
                                        No. of Bath
                                    </h5>
                                    <select required name="property_baths" class="details">
                                        <option value="1 bathrooms">1 bathrooms</option>
                                        <option value="2 bathrooms">2 bathrooms</option>
                                        <option value="3 bathrooms">3 bathrooms</option>
                                        <option value="4 bathrooms">4 bathrooms</option>
                                        <option value="5 bathrooms">5 bathrooms</option>
                                        <option value="6 bathrooms">6 bathrooms</option>
                                        <option value="7 bathrooms">7 bathrooms</option>
                                        <option value="8 bathrooms">8 bathrooms</option>
                                        <option value="9 bathrooms">9 bathrooms</option>
                                        <option value="10 bathrooms">10 bathrooms</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-12 property_custom">
                        <h5 class="property_info">
                            Property address
                        </h5>
                        <div class="row address">
                            <div class="col-md-6">
                                <div class="form-group fields">
                                    <input type="hidden" name="lat" class="latitude" placeholder="Address">
                                    <input type="hidden" name="lng" class='longitude' placeholder="Address">
                                    <input type="text" required name="address" id="propertyAddress"
                                        placeholder="Address">
                                </div>
                                <div class="form-group fields">
                                    <input type="text" required name="town" placeholder="Town">
                                </div>
                                <h5 class="property_info mt-2">Property Sales price</h5>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group fields">
                                    <input type="text" required name="country" placeholder="Country">
                                </div>
                                <div class="form-group fields">
                                    <input type="number" required name="zipcode" placeholder="Zip Code">
                                </div>
                                <div class="form-group fields">
                                    <input type="number" required name="sale_price" placeholder="$000,000,000">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text_fields">
                        <label for="" class="name mb-3">Property Title</label>
                        <input type="text" required name="title"
                            placeholder="Add your item name e.g. Samsung 60 Inches 4K HDTV" class="text">
                    </div>
                    <div class="text_area">
                        <textarea name="description" required class="description" cols="30" rows="10"
                            placeholder="Add property description"></textarea>
                        <div class="toggles">
                            <div class="free">
                                <p>Clear</p>
                                <div class="col-md-6 col-12 switch_div">
                                    <label class="switch">
                                        <input type="checkbox"> <span class="slider round"></span> </label>
                                </div>
                            </div>
                            <div class="use">
                                <p>Edit & use</p>
                                <div class="col-md-6 col-12 switch_div">
                                    <label class="switch">
                                        <input type="checkbox"> <span class="slider round"></span> </label>
                                </div>
                            </div>
                        </div>
                        <p class="limit">500 characters (10 words minimum).</p>
                    </div>
                    <div class="text_area2">
                        <textarea name="other_info" class="description" cols="30" rows="10" required
                            placeholder="Add other information"></textarea>
                        <p class="limit">500 characters</p>
                    </div>
                    <div class="cover_photo">
                        <div class="img_background">
                            <div class="cover">
                                <img src="Frontend/img/FOCUS.png" alt="" class="focus_size">
                                <p>Cover Photo</p>
                            </div>
                            <div class="empty_img">
                                <img src="Frontend/img/empty.png" alt="" class="img-fluid"
                                    id="display_image_property">
                            </div>
                            <div class="trash"><i class="upload_icons fas fa-trash" id="deleteImage"></i>
                            </div>
                            <div class="upload"><i class="upload_icons fas fa-file-upload"
                                    onclick="UploadUsing(this)"></i>
                            </div>
                            <div class="camera"><i class="upload_icons fas fa-camera"
                                    onclick="UploadUsing(this,'camera')" id="camera"></i></div>

                            <input type="file" required name="cover_image" class="UploadImageElement"
                                onchange="loadFile(event,'display_image_property')" style="display: none" />
                        </div>
                    </div>
                    <div class="policy">
                        <p>By posting this ad with Homzs you agree to our <a href="" class="terms">Terms of
                                Use</a>
                            and <a href="" class="terms">Privacy Policy.</a></p>
                        <a href=""></a>
                    </div>
                    <div class="buttons">
                        <button class="btn preview_form_data" type="button">PREVIEW</button>
                        <button class="btn draft_form_data" type="button">SAVE DRAFT</button>
                        <button class="btn publish_form_data" type="button">SAVE & PUBLISH</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
