
    <link href="{{ asset('Frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/css/popup.css') }}" rel="stylesheet">

<div class="message_notification_popup" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="card">
        <div class="card-body">
            <div class="col-md-12 col-12 img_welcome">
                <img src="{{ asset('Frontend/img/logo.png') }}" alt="" class="img-fluid size">
            </div>
            <div class="notification">
                <p>Email notification sent to confirm a message has been received. When the user clicks
                    on the "Reply now" link, the message box will open up on Homzs website to allow the
                    user to respond to the message. If the user is not logged on to their account on the
                    website, the user will be prompted to login to access their messages.
                </p>
            </div>

            <div class="email_title">
                <p class="title">Email title</p>
                <p class="subject"> - RE: Zuk replied to your ad: {{ $title }}
                </p>
            </div>
            
            <div class="seller">
                <p class="title">Edward via Homzs Mail<{{ $email }}></p>
                <p class="subject"></p>
            </div>
            
            <span class="mail_time">{{ date('D, M d, h:i A') }}</span>
            
            <div class="me">
                <p>
                    To me<br>
                    {{ $body }} <br>
                    <a href="{{ url('/') }}" class="reply">Reply me</a>
                </p>
            </div>
            <div class="notification">
                <p>This message has been sent through Homzs mail, which keeps your email address
                    private. We recommend that you always reply via <a href="#!" class="sent">Homzs
                        messenger</a> instead of private email addresses. If there is anything about the
                    message that you think is suspicious, do not reply and make sure to <a href="#!"
                        class="sent">report it to us.</a> We want to look out for you so we look into
                    all reports and get back to you asap.
                </p>
            </div>
            <div class="safety_tips">
                <h3>To make sure you have the best experience with us, here are a few top safety tips when
                    buying and selling on Gumtree:
                </h3>
            </div>
            <div>
                <ul class="buy_selling">
                    <li>Try to share photos and ask lots of questions about the items you are buying and
                        selling. We recommend you use a courier to help with delivery.
                    </li>
                    <li>Use the PayPal 'Paying for an item or service' option to transfer money
                        securely. This is the only option covered by <a href="#!" class="sent"> PayPal's
                            Buyer Protection</a> policy.
                    </li>
                    <li>If you're a seller, log into your PayPal account to ensure you have received
                        payment. Never trust an email confirmation telling you so without verification.
                    </li>
                    <li>Be wary of links sent by other users that direct you to login to Homzs. You
                        should always access your account via the <a href="#!" class="sent">Homzs
                            homepage</a>
                    </li>
                </ul>
            </div>
            <div class="from">
                <p class="small">From</p>
                <p class="team">The Homzs Team</p>
            </div>
        </div>
    </div>
</div>
