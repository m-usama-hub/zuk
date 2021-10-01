<div class="modal fade welcome_popup" id="welcome" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="col-md-12 col-12 img_welcome">
                    <img src="Frontend/img/Group 218.png" alt="" class="img-fluid">
                    <h5>Welcome to Homzs</h5>
                </div>
                <div class="sign_form">
                    <form action="">
                        <div class="form-group">
                            <input type="email" name="login_email" class="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="password" name="login_password" class="email" placeholder="Password">
                        </div>
                    </form>
                </div>
                <div class="terms_condition">
                    <p>By signing in with Homzs you agree to our <a href="" class="terms">Terms of Use</a> and
                        <a href="" class="terms"> Privacy Policy.</a>
                    </p>
                    @if (Route::has('password.request'))
                        <a class="forget_password" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
                <div class="form-group" align="center" id="print-error-msg-login">
                    <ul>

                    </ul>
                </div>
                <div class="sign_in_btn">
                    <button type="submit" id="loginBtn" class="btn confirm_email">Sign In</button>
                </div>
                <div class="col-md-12 col-12 icons">
                    <a href="{{ route('facebook-auth') }}?login=true" class="facebook_icon"> <i
                            class="fab fa-facebook-f"></i></a>
                    <a href="{{ route('google-auth') }}?login=true"><i class="fab fa-google red"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
