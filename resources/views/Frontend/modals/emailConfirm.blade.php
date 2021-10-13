<div class="modal fade email_confirmation_popup" id="email_confirmation" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i>My posts</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> -->
            <div class="modal-body">
                <div class="col-md-12 col-12 img_welcome">
                    <img src="Frontend/img/Image 1.png" alt="" class="img-fluid size">
                </div>
                <div class="col-md-12 col-12">
                    <div class="email_confirmation_text">
                        <h2> <i class="fas fa-envelope-open-text"></i>Email Confirmation</h2>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif
                </div>
                <div class="col-md-12 col-12 img_welcome">
                    <h5>Welcome to Homzs</h5>
                </div>
                <div class="note">
                    <p class="take_momemt">
                        Please take a moment to make sure we've got your email address right.
                    </p>
                    <p class="dontsign"> Didn't sign up for Homzs</p>
                    <a href="#!" class="tell"> Let us know</a>
                </div>
                <div class="col-md-12 col-12 btn">
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn confirm_email">{{ __('Confirm your email') }}</button>.
                    </form>
                </div>
                <div class="from">
                    <p class="small">From</p>
                    <p class="team">The Homzs Team</p>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')

    @if (Auth::user()->email_verified_at == null)
        <script>
            $(document).ready(function() {
                $('#email_confirmation').modal({
                    backdrop: 'static',
                    keyboard: false,
                    show: true
                });
            });
        </script>
    @endif


@endpush
