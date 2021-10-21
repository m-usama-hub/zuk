<div class="cover_photo">
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
                <img src="{{ asset('Frontend/img/empty.png') }}" alt="" class="img-fluid display_image_1" id="display_image_1">
                </div>
                <div class="trash"><i class="upload_icons fas fa-trash trash_1" id="deleteImage"></i>
                </div>
                <div class="upload"><i class="upload_icons fas fa-file-upload" onclick="UploadUsing(this)"></i>
                </div>
                <div class="camera"><i class="upload_icons fas fa-camera" onclick="UploadUsing(this,'camera')"
                        id="camera"></i></div>

                <input type="file" required name="cover_image[]" class="UploadImageElement"
                    onchange="loadFile(event,'display_image_1')" style="display: none" />
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
                    <img src="{{ asset('Frontend/img/empty.png') }}" alt="" class="img-fluid display_image_2" id="display_image_2">
                </div>
                <div class="trash"><i class="upload_icons fas fa-trash trash_2" id="deleteImage"></i>
                </div>
                <div class="upload"><i class="upload_icons fas fa-file-upload" onclick="UploadUsing(this)"></i>
                </div>
                <div class="camera"><i class="upload_icons fas fa-camera" onclick="UploadUsing(this,'camera')"
                        id="camera"></i></div>

                <input type="file" required name="cover_image[]" class="UploadImageElement"
                    onchange="loadFile(event,'display_image_2')" style="display: none" />
            </div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3 / 6</div>
            <div class="img_background">
                <div class="cover">
                    <img src="Frontend/img/FOCUS.png" alt="" class="focus_size">
                    <p>Cover Photo</p>
                </div>
                <div class="empty_img">
                    <img src="{{ asset('Frontend/img/empty.png') }}" alt="" class="img-fluid display_image_3" id="display_image_3">
                </div>
                <div class="trash"><i class="upload_icons fas fa-trash trash_3" id="deleteImage"></i>
                </div>
                <div class="upload"><i class="upload_icons fas fa-file-upload" onclick="UploadUsing(this)"></i>
                </div>
                <div class="camera"><i class="upload_icons fas fa-camera" onclick="UploadUsing(this,'camera')"
                        id="camera"></i></div>

                <input type="file" required name="cover_image[]" class="UploadImageElement"
                    onchange="loadFile(event,'display_image_3')" style="display: none" />
            </div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 6</div>
            <div class="img_background">
                <div class="cover">
                    <img src="Frontend/img/FOCUS.png" alt="" class="focus_size">
                    <p>Cover Photo</p>
                </div>
                <div class="empty_img">
                    <img src="{{ asset('Frontend/img/empty.png') }}" alt="" class="img-fluid display_image_4" id="display_image_4">
                </div>
                <div class="trash"><i class="upload_icons fas fa-trash trash_4" id="deleteImage"></i>
                </div>
                <div class="upload"><i class="upload_icons fas fa-file-upload" onclick="UploadUsing(this)"></i>
                </div>
                <div class="camera"><i class="upload_icons fas fa-camera" onclick="UploadUsing(this,'camera')"
                        id="camera"></i></div>

                <input type="file" required name="cover_image[]" class="UploadImageElement"
                    onchange="loadFile(event,'display_image_4')" style="display: none" />
            </div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">5 / 6</div>
            <div class="img_background">
                <div class="cover">
                    <img src="Frontend/img/FOCUS.png" alt="" class="focus_size">
                    <p>Cover Photo</p>
                </div>
                <div class="empty_img">
                    <img src="{{ asset('Frontend/img/empty.png') }}" alt="" class="img-fluid display_image_6" id="display_image_6">
                </div>
                <div class="trash"><i class="upload_icons fas fa-trash trash_5" id="deleteImage"></i>
                </div>
                <div class="upload"><i class="upload_icons fas fa-file-upload" onclick="UploadUsing(this)"></i>
                </div>
                <div class="camera"><i class="upload_icons fas fa-camera" onclick="UploadUsing(this,'camera')"
                        id="camera"></i></div>

                <input type="file" required name="cover_image[]" class="UploadImageElement"
                    onchange="loadFile(event,'display_image_6')" style="display: none" />
            </div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">6 / 6</div>
            <div class="img_background">
                <div class="cover">
                    <img src="Frontend/img/FOCUS.png" alt="" class="focus_size">
                    <p>Cover Photo</p>
                </div>
                <div class="empty_img">
                    <img src="{{ asset('Frontend/img/empty.png') }}" alt="" class="img-fluid display_image_5" id="display_image_5">
                </div>
                <div class="trash"><i class="upload_icons fas fa-trash trash_6" id="deleteImage"></i>
                </div>
                <div class="upload"><i class="upload_icons fas fa-file-upload" onclick="UploadUsing(this)"></i>
                </div>
                <div class="camera"><i class="upload_icons fas fa-camera" onclick="UploadUsing(this,'camera')"
                        id="camera"></i></div>

                <input type="file" required name="cover_image[]" class="UploadImageElement"
                    onchange="loadFile(event,'display_image_5')" style="display: none" />
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