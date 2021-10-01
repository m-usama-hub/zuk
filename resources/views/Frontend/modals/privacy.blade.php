<div class="modal fade privacy_popup" id="privacy" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><img src="Frontend/img/insurance.png"
                    class="img-fluid">My privacy</h5>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
        <div class="modal-body">
            <div class="heading">
                <h4>Turn off display</h4>
            </div>
            <div class="toggler">
                <p>{{ Auth::user()->UserDetail->email }}</p>
                <div class="switch_div">
                    <label class="switch">
                        <input type="checkbox" class="update_privacy_settings" name="isEmailPublic" {{ Auth::user()->UserDetail->isEmailPublic ? 'checked' : '' }}>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <div class="toggler">
                <p>{{ Auth::user()->UserDetail->contact_no??'Phone no' }}</p>
                <div class="switch_div">
                    <label class="switch">
                        <input type="checkbox" class="update_privacy_settings" name="isPhoneNoPublic" {{ Auth::user()->UserDetail->isPhoneNoPublic ? 'checked' : '' }}>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <div class="toggler">
                <p>Profile picture</p>
                <div class="switch_div">
                    <label class="switch">
                        <input type="checkbox" class="update_privacy_settings" name="isProfilePicPublic" {{ Auth::user()->UserDetail->isProfilePicPublic ? 'checked' : '' }}>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <div class="toggler">
                <p>Turn off notifications</p>
                <div class="switch_div">
                    <label class="switch">
                        <input type="checkbox" class="update_privacy_settings" name="isNotificationEnabled" {{ Auth::user()->UserDetail->isNotificationEnabled ? 'checked' : '' }}>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <div class="toggler">
                <p>Pause account</p>
                <div class="switch_div">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <div class="heading mt-4">
                <h4>Unblock users</h4>
            </div>
            <div class="toggler">
                <p>Jason Electrical</p>
                <div class="switch_div">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <div class="toggler">
                <p>Smart Realtors</p>
                <div class="switch_div">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <div class="toggler">
                <p>Susan Hall</p>
                <div class="switch_div">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <div class="toggler">
                <p>more</p>
            </div>
        </div>
    </div>
</div>
</div>
