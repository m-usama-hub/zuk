<div class="modal fade signup_popup" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="img_welcome">
                    <img src="{{ asset('Frontend/img/Group 218.png') }}" alt="" class="img-fluid">
                </div>
                <div class="member">
                    <h4>Already a member?</h4>
                    <a href="#" data-toggle="modal" data-target="#welcome" data-dismiss="modal"
                        class="login">Login</a>

                </div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="cash_amounts">
                        <div class="custom_radio_button">
                            <input type="radio" id="test11" name="usertype" value="personal" required checked>
                            <label for="test11">Personal account</label>
                        </div>
                        <div class="custom_radio_button">
                            <input type="radio" id="test22" name="usertype" value="business" required>
                            <label for="test22">Business account</label>
                        </div>
                    </div>
                    <input type="text" name="firstname" class="email" placeholder="First Name" required>
                    <input type="text" name="lastname" class="email" placeholder="Last Name" required>
                    <input type="text" name="business_name" id="bname" class="email" placeholder="Buisness Name" style="display: none;">
                    <input type="text" name="address" class="email" placeholder="Address" required>
                    {{-- <input type="text" name="town" class="email" placeholder="Town">
                    <input type="text" name="city" class="email" placeholder="City">
                    <input type="number" name="zip" class="email" placeholder="Zip Code"> --}}
                    <input type="email" name="email" class="email" placeholder="Email Address" required>
                    <input type="password" name="password" class="email" placeholder="Password" required>
                    <input type="password" name="password_confirmation" class="email" placeholder="Confirm Password" required>
                    <button type="submit" class="btn confirm_email">CONTINUE</button>
                </form>
                <div class="col-md-12 col-12">
                    <p class="or">OR</p>
                </div>

                <div class="col-md-12 col-12 icons">
                    <a href="{{ route('facebook-auth') }}"> <i class="fab fa-facebook blue"></i></a>
                    <a href="{{ route('google-auth') }}"><i class="fab fa-google red"></i></a>
                </div>

                <div class="col-md-12 col-12">
                    <p>By signing in with Homzs you agree to our <a href="#!" class="terms">Terms of Use</a>
                        and <a href="#!" class="terms"> Privacy Policy.</a></p>
                </div>



            </div>
        </div>
    </div>
</div>
