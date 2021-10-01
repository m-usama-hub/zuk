<div class="modal fade get_verified_popup" id="getverified" tabindex="-1"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i
                    class="fas fa-check-circle"></i>Get Verified</h5>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
        <div class="modal-body">
            <div class="col-md-12 col-12">
                <p>Other user will have more confidence in connecting with if you are verified.
                    Simply click on any of the verifications options below to complete your
                    verification.</p>
            </div>
            <div class="col-md-12 col-12 simple">
                <p>Simply click on any of the verifications
                    options below to complete your
                    verification
                </p>
            </div>
            <div class="col-md-12 col-12 ">
                <h4 class="verified">Verified</h4>
            </div>
            <div class="col-md-12 col-12 " class="parent_div">
                <div class="media">
                    Email<i class="{{ Auth::user()->hasVerifiedEmail() ? 'fas fa-check' : 'fas fa-times' }}"></i>
                </div>
                <div class="media">
                    Phone <a href="#" style="display:{{ Auth::user()->UserDetail->hasVerifiedPhone() ? 'none' : 'unset' }}" id="VerifyPhoneNo">(Click to Verify)</a> <i class="{{ Auth::user()->UserDetail->hasVerifiedPhone() ? 'fas fa-check' : 'fas fa-times' }}"></i>
                </div>
                <div align="center">
                    <div class="spinner-border loader" role="status" style="display: none;" align="center">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <i id="SMSresponse" style="font-size: 11px;"></i>
                </div>

                <div class="enter_code" style="display: none; float:right">

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="2672" id="verification_code" aria-label="Recipient's username" required aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary" type="button" id="verification_click">Verify</button>
                        </div>
                      </div>
                </div>

                {{-- <div class="media">
                    Facebook<i class="{{ Auth::user()->hasVerifiedEmail() ? 'fas fa-check' : 'fas fa-times' }}"></i>
                </div> --}}
            </div>
        </div>
    </div>
</div>
</div>
