<!doctype html>
<?php include 'head.php';?>
<body class="home">
   <?php include 'header_nav.php';?>
   <!--======= SECTION 2 ===== -->
   <section class="multiple_popup">
      <div class="container custom_container">
         <div class="row">
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#abusereports">
               Abusereport
               </button>
               <div class="modal fade abusereport " id="abusereports" tabindex="-1"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel"><i
                              class="fas fa-exclamation-triangle"></i>Report Abuse</h5>
                           <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                           <div class="custome_container">
                              <div class="pic_info">
                                 <div class="pic">
                                    <img src="./img/Group410.png" alt="" class="image-fluid">
                                 </div>
                                 <div class="name">
                                    <h3>Susan Doyle</h3>
                                 </div>
                              </div>
                              <div class="report_title">
                                 <label for="" class="title">
                                 Enter your report title
                                 </label>
                                 <input type="text" name="text" id="text">
                              </div>
                              <div class="report">
                                 <a href="" class="reporting">Reporting</a>
                              </div>
                              <div class="pic_info">
                                 <div class="pic">
                                    <img src="./img/Group410.png" alt="" class="image-fluid">
                                 </div>
                                 <div class="name">
                                    <h3>Jason Electrical Inc.</h3>
                                 </div>
                              </div>
                              <div class="report_title">
                                 <label for="" class="title">
                                 Enter your report details here
                                 </label>
                                 <input type="text" name="text" id="text2">
                              </div>
                              <div class="send">
                                 <a href="#!" class=" btn sending">Send my report</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcredit">
               addcredit
               </button>
               <div class="modal fade add_creadit_popup" id="addcredit" tabindex="-1"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i>Add Credit
                           </h5>
                           <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                           <div class="col-md-12 col-12">
                              <h3 class="heading">Pay-Per-Click Subscription</h3>
                           </div>
                           <div class="col-md-12 col-12">
                              <p>Add credit to fund your premium advert postings. Your account is only charged
                                 when someone clicks on your advert
                              </p>
                           </div>
                           <div class="col-md-12 col-12">
                              <h4 class="heading">Add money</h4>
                           </div>
                           <!--<div class="col-md-12 col-12">-->
                           <!--    <form action="">-->
                           <!--</div>-->
                           <div class="col-md-12 col-12 cash_amounts">
                              <form action="">
                                 <div class="custom_radio_button">
                                    <input type="radio" id="test1" name="radio-group" checked>
                                    <label for="test1">$ 10</label>
                                 </div>
                                 <div class="custom_radio_button">
                                    <input type="radio" id="test2" name="radio-group" checked>
                                    <label for="">$ 20</label>    
                                 </div>
                                 <div class="custom_radio_button">
                                    <input type="radio" id="test3" name="radio-group" checked>
                                    <label for="">$ 50</label>
                                 </div>
                                 <div class="custom_radio_button">
                                    <input type="radio" id="test4" name="radio-group" checked>
                                    <label for="">$ 100</label>
                                 </div>
                              </form>
                           </div>
                           <div class="col-md-12 col-12">
                              <h4 class="paying">Pay Using</h4>
                           </div>
                           <div class="col-md-12 col-12">
                              <img src="./img/paypal.png" alt="" class="img-fluid size">
                              <img src="./img/Group 291.png" alt="" class="img-fluid visa">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adminabuse">
               Admin Abuse Popup
               </button>
               <div class="modal fade admin_abuse_popup " id="adminabuse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-triangle"></i>Report Abuse</h5>
                           <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                           <div class="col-md-12 col-12">
                              <div class="main_heading">
                                 <h1>Report Abuse</h1>
                              </div>
                           </div>
                           <div class="modal_data">
                              <div class="col-md-12 col-12">
                                 <div class="row">
                                    <div class="col-md-4 col-12 info">
                                       <div class="head_name">
                                          <h4>User reporting</h4>
                                          <ul>
                                             <li>Susan Doyle</li>
                                             <li>Susan Doyle</li>
                                             <li>Susan Doyle</li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-12 company">
                                       <div class="head_name">
                                          <h4>User reported</h4>
                                          <ul>
                                             <li>Jason Electrical Inc.</li>
                                             <li>Jason Electrical Inc.</li>
                                             <li>Jason Electrical Inc.</li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-12 company">
                                       <div class="head_name">
                                          <h4>Date received</h4>
                                          <ul>
                                             <li>12 November 2020</li>
                                             <li>12 November 2020</li>
                                             <li>12 November 2020</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal_admin_pannel">
                                 <div class="firstlink">
                                    <h5 class="panel">Admin Panel</h5>
                                 </div>
                                 <div class="pic_info">
                                    <div class="pic">
                                       <img src="./img/Group410.png" alt="" class="image-fluid">
                                    </div>
                                    <div class="name">
                                       <h4>Susan Doyle</h4>
                                    </div>
                                 </div>
                                 <div class="review">
                                    <p>This owner of this company is aggressive</p>
                                 </div>
                                 <div class="report">
                                    <a href="" class="reporting">Reporting</a>
                                 </div>
                                 <div class="pic_info">
                                    <div class="pic">
                                       <img src="./img/Group410.png" alt="" class="image-fluid">
                                    </div>
                                    <div class="name">
                                       <h4>Jason Electrical Inc.</h4>
                                    </div>
                                 </div>
                                 <div class="box">
                                    <div class="box_text">To complete your signup kindly confirmyour
                                       emailaddress by clicking on the linkin the 
                                       email that we have sent you in the email that we have 
                                       sent you.
                                       To complete your signup kindly 
                                       confirm your emailaddress by clicking on the link in 
                                       the email that we have sent you in the email that we 
                                       have sent you.
                                    </div>
                                 </div>
                                 <div class="send">
                                    <h5 class="adminreply">Send Admin reply</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteaccount">
               Delete Account Popup
               </button>
               <div class="modal fade delete_account_popup" id="deleteaccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash"></i>Delete account</h5>
                           <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                           <div class="col-md-12 col-12">
                              <h3 class="heading">Delete my account</h3>
                           </div>
                           <div class="col-md-12 col-12">
                              <p>Do you want us to permanently delete your usage data from our Homzs servers? By selecting this option, you cannot restore your history when you return to Homzs.</p>
                           </div>
                           <div class="col-md-12 col-12">
                              <form action="">
                                 <div class="custom_radio_btn">
                                    <input type="radio" name="confirm">
                                    <label class="confirm">Check to confirm</label>
                                 </div>
                              </form>
                           </div>
                           <div class="col-md-12 col-12">
                              <form action="" method="POST" >
                                 <input type="password" placeholder="Enter password to confirm request" id="pass">  
                              </form>
                           </div>
                           <div class="col-md-12 col-12">
                              <form action="" class="submit_pass">
                                 <button type="submit" class="btn submit_btn">SUBMIT YOUR REQUEST</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#email_confirmation">
               Email Confirmation
               </button>
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
                              <img src="./img/Image 1.png" alt="" class="img-fluid size">
                           </div>
                           <div class="col-md-12 col-12">
                              <div class="email_confirmation_text">
                                 <h2> <i class="fas fa-envelope-open-text"></i>Email Confirmation</h2>
                              </div>
                           </div>
                           <div class="col-md-12 col-12 img_welcome">
                              <h5>Welcome to Homzs</h5>
                           </div>
                           <div class="note">
                              <p class="take_momemt">
                                 Please take a moment to make sure we've got your email address right.
                              </p>
                              <p class="dontsign"> Didn't sign up for Homzs</p>
                              <a href="" class="tell"> Let us know</a>
                           </div>
                           <div class="col-md-12 col-12 btn">
                              <button type="submit" class="btn confirm_email">Confirm your email</button>
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
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#getverified">
               Get Verified
               </button>
               <div class="modal fade get_verified_popup" id="getverified" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-check-circle"></i>Get Verified</h5>
                           <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                           <div class="col-md-12 col-12">
                              <p>Other user will have more confidence in connecting with if you are verified. Simply click on any of the verifications options below to complete your verification.</p>
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
                           <div class="col-md-12 col-12 ">
                              <div class="media">
                                 Email<i class="fas fa-check"></i>
                              </div>
                              <div class="media">
                                 Phone<i class="fas fa-times"></i>
                              </div>
                              <div class="media">
                                 Facebook<i class="fas fa-times"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#message_notification">
               Message Notification
               </button>
               <div class="modal fade message_notification_popup" id="message_notification" tabindex="-1"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-body">
                           <div class="col-md-12 col-12 img_welcome">
                              <img src="./img/logo.png" alt="" class="img-fluid size">
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
                              <p class="subject"> - RE: Zuk replied to your ad: Wooden bed frame with 4 storage boxes
                              </p>
                           </div>
                           <div class="seller">
                              <p class="title">Edward via Homzs Mail</p>
                              <p class="subject"> &lt; Seller-17wqzx6fmgnq0@reply.homzs.ca&gt;</p>
                           </div>
                           <span class="mail_time">Wed, Jun 23, 4:43 PM (2 days ago)</span>
                           <div class="me">
                              <p>
                                 To me<br>
                                 Hi,<br>
                                 Yes still available. You don't want the storage boxes as well ?<br>
                                 Thanks <br>
                                 <a href="#" class="reply">Reply me</a>
                              </p>
                           </div>
                           <div class="notification">
                              <p>This message has been sent through Homzs mail, which keeps your email address
                                 private. We recommend that you always reply via <a href="" class="sent">Homzs
                                 messenger</a> instead of private email addresses. If there is anything about the
                                 message that you think is suspicious, do not reply and make sure to <a href=""
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
                                    securely. This is the only option covered by <a href="" class="sent"> PayPal's
                                    Buyer Protection</a> policy.
                                 </li>
                                 <li>If you're a seller, log into your PayPal account to ensure you have received
                                    payment. Never trust an email confirmation telling you so without verification.
                                 </li>
                                 <li>Be wary of links sent by other users that direct you to login to Homzs. You
                                    should always access your account via the <a href="" class="sent">Homzs
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
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mydetails">
               Details
               </button>
               <div class="modal fade my_details_popup show" id="mydetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog" >
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
                                       <div><i class="far fa-edit"></i></div>
                                    </div>
                                    <div class="personal">
                                       <div class="edit_profile person_edit_photo">
                                          <img src="./img/Group410.png" alt="" class="img-fluid  ">
                                       </div>
                                       <div class="profile">Profile photo</div>
                                    </div>
                                    <div class="form">
                                       <form action="">
                                          <label for="" class="labels">First Name</label>
                                          <input type="text" class="textarea" placeholder="James">
                                          <label for="" class="labels">Last name</label>
                                          <input type="text" class="textarea" placeholder="Andreson">
                                          <label for="" class="labels">Number</label>
                                          <input type="number" class="textarea" placeholder="647 584 5241 ">
                                          <label for="" class="labels">Address</label>
                                          <input type="text" class="textarea" placeholder="Brampon 
                                             Ontario
                                             L7A 4G6">
                                          <label for="" class="labels">Email</label>
                                          <input type="email" class="textarea" placeholder="first.name@gmail.com">
                                          <div class="changepass">
                                             <h4>Change Password</h4>
                                          </div>
                                          <input type="password" class="p_textarea" placeholder="Current Password">
                                          <input type="password" class="p_textarea" placeholder="New Password">
                                          <input type="password" class="p_textarea" placeholder="Confirm Password">
                                       </form>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-12 personal_box2">
                                    <div class="header">
                                       <div class="heading">
                                          <h1>My Profile</h1>
                                       </div>
                                       <div><i class="far fa-edit"></i></div>
                                    </div>
                                    <div class="personal">
                                       <div class="edit_profile">
                                          <img src="./img/Group410.png" alt="" class="img-fluid ">
                                       </div>
                                       <div class="profile">Profile photo</div>
                                    </div>
                                    <div class="photo_heading">
                                       <h4>Profile photos</h4>
                                    </div>
                                    <div class="custom_modal_swipper">
                                       <div class="swiper modalSwiper swiper-initialized swiper-horizontal swiper-pointer-events">
                                          <div class="swiper-wrapper" id="swiper-wrapper-2af7103c3e0421064d" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                             <div class="swiper-slide swiper-slide-active" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-camera"></i></div>
                                             </div>
                                             <div class="swiper-slide swiper-slide-next" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-camera"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-camera"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-camera"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-camera"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-camera"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-camera"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-camera"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-camera"></i></div>
                                             </div>
                                          </div>
                                          <div class="swiper-button-next" tabindex="0" role="button" aria-label="undefined" aria-controls="Next slide" aria-disabled="false"></div>
                                          <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="undefined" aria-controls="Previous slide" aria-disabled="true"></div>
                                          <div class="swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">9</span></div>
                                          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                       </div>
                                       <!-- Slider main container -->
                                    </div>
                                    <div class="col-md-12 col-12">
                                       <p class="photo_heading">Profile videos</p>
                                    </div>
                                    <div class="gr_photos">
                                       <div class="swiper modalSwiper swiper-initialized swiper-horizontal swiper-pointer-events">
                                          <div class="swiper-wrapper" id="swiper-wrapper-8fa79c7f109e07be9" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                             <div class="swiper-slide swiper-slide-active" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-video"></i></div>
                                             </div>
                                             <div class="swiper-slide swiper-slide-next" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-video"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-video"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-video"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-video"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-video"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-video"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-video"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-video"></i></div>
                                             </div>
                                          </div>
                                          <div class="swiper-button-next" tabindex="0" role="button" aria-label="undefined" aria-controls="Next slide" aria-disabled="false"></div>
                                          <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="undefined" aria-controls="Previous slide" aria-disabled="true"></div>
                                          <div class="swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">9</span></div>
                                          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                       </div>
                                    </div>
                                    <div class="form">
                                       <form action="">
                                          <label for="" class="labels">About me</label>
                                          <input type="text" class="textarea" placeholder="To complete your signup kindly confirm your email address by clicking on the linkin the email that we have sent you in the email that we
                                             ">
                                          <label for="" class="labels">My interests</label>
                                          <input type="text" class="textarea" placeholder="Travelling
                                             Hiking
                                             Home Decorating">
                                          <div class="changepass">
                                             <h4>Add an Interest</h4>
                                          </div>
                                          <input type="text" class="p_textarea" placeholder="Interest name">
                                          <input type="text" class="p_textarea" placeholder="Interest description">
                                       </form>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-12 personal_box3">
                                    <div class="header3">
                                       <div class="upper_icon"><i class="far fa-edit"></i></div>
                                       <div class="heading3">
                                          <h1>Buisness Details</h1>
                                       </div>
                                    </div>
                                    <div class="personal">
                                       <div class="edit_profile3 person_edit_photo">
                                          <img src="./img/buisness.png" alt="" class="img-fluid ">
                                       </div>
                                    </div>
                                    <div class="photo_heading">
                                       <h4>Profile photos</h4>
                                    </div>
                                    <div class="gr_photos">
                                       <div class="swiper modalSwiper swiper-initialized swiper-horizontal swiper-pointer-events">
                                          <div class="swiper-wrapper" id="swiper-wrapper-030becf1010c7a5e07" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                             <div class="swiper-slide swiper-slide-active" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-camera"></i></div>
                                             </div>
                                             <div class="swiper-slide swiper-slide-next" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-camera"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-camera"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-camera"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-camera"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-camera"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-camera"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-camera"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-camera"></i></div>
                                             </div>
                                          </div>
                                          <div class="swiper-button-next" tabindex="0" role="button" aria-label="undefined" aria-controls="Next slide" aria-disabled="false"></div>
                                          <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="undefined" aria-controls="Previous slide" aria-disabled="true"></div>
                                          <div class="swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">9</span></div>
                                          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                       </div>
                                       <!-- Slider main container -->
                                    </div>
                                    <div class="col-md-12 col-12">
                                       <p class="photo_heading">Profile videos</p>
                                    </div>
                                    <div class=" gr_photos">
                                       <div class="swiper modalSwiper swiper-initialized swiper-horizontal swiper-pointer-events">
                                          <div class="swiper-wrapper" id="swiper-wrapper-a58fa5f53daf13fb" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                             <div class="swiper-slide swiper-slide-active" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-video"></i></div>
                                             </div>
                                             <div class="swiper-slide swiper-slide-next" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-video"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-video"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-video"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-video"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-video"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-video"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-video"></i></div>
                                             </div>
                                             <div class="swiper-slide" style="width: 139px;">
                                                <img src="./img/Group413.png" alt="" class="pr_photo">
                                                <div class="trash"><i class="fas fa-trash"></i></div>
                                                <div class="camera"><i class="fas fa-video"></i></div>
                                             </div>
                                          </div>
                                          <div class="swiper-button-next" tabindex="0" role="button" aria-label="undefined" aria-controls="Next slide" aria-disabled="false"></div>
                                          <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="undefined" aria-controls="Previous slide" aria-disabled="true"></div>
                                          <div class="swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">9</span></div>
                                          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                       </div>
                                    </div>
                                    <div class="form">
                                       <form action="">
                                          <label for="" class="labels">Buisness name</label>
                                          <input type="text" class="textarea" placeholder="James Electricals">
                                          <label for="" class="labels">Business phone</label>
                                          <input type="number" class="textarea" placeholder="123 456 789">
                                          <label for="" class="labels">About my business</label>
                                          <input type="text" class="textarea" placeholder="To complete your signup kindly confirm your email address by clicking on the linkin the email that we have sent you in the email that we
                                             ">
                                          <label for="" class="labels">Business services</label>
                                          <input type="text" class="textarea" placeholder="House rewiring
                                             Installations
                                             Inspections">
                                          <div class="changepass">
                                             <h4>Add a business service</h4>
                                          </div>
                                          <input type="text" class="p_textarea" placeholder="Service Name">
                                          <input type="text" class="p_textarea" placeholder="Service description">
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#businessdetails">
               Professional Details
               </button>
               <div class="modal fade my_details_popup professional_details show" id="businessdetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog" >
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Add a professional detail</h5>
                           <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12 col-12 personal_box3">
                                 <div class="form">
                                    <form action="">
                                       <label for="" class="labels">Buisness name</label>
                                       <input type="text" class="textarea" placeholder="James Electricals">
                                       <label for="" class="labels">Business phone</label>
                                       <input type="number" class="textarea" placeholder="123 456 789">
                                       <label for="" class="labels">About my business</label>
                                       <input type="text" class="textarea" placeholder="To complete your signup kindly confirm your email address by clicking on the linkin the email that we have sent you in the email that we
                                          ">
                                       <label for="" class="labels">Business services</label>
                                       <input type="text" class="textarea" placeholder="House rewiring
                                          Installations
                                          Inspections">
                                       <div class="changepass">
                                          <h4>Add a business service</h4>
                                       </div>
                                       <input type="text" class="p_textarea" placeholder="Service Name">
                                       <input type="text" class="p_textarea" placeholder="Service description">
                                       <select name="info" class="details">
                                          <option value="">Option 1</option>
                                          <option value="">Option 2</option>
                                          <option value="">Option 3</option>
                                          <option value="">Option 4</option>
                                       </select>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mypost">
               My Post
               </button>
               <div class="modal fade my_post_popup" id="mypost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i>My posts</h5>
                           <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                           <div class="col-lg-12 detail-box mt-3">
                              <div class="row">
                                 <div class="col-lg-4">
                                    <img src="./img/buy_sell_details.png" alt="" class="img-fluid">
                                 </div>
                                 <div class="col-lg-8 media_content">
                                    <div class="media">
                                       <img class="mr-2" src="./img/modal_thumbnail.png" alt="Generic placeholder image">
                                       <div class="media-body">
                                          <h3 class="mt-0 blue">Toshiba 65 Inches 4K HD TV</h3>
                                          <div class="web_site_views">
                                             <i class="fas fa-star orange"></i>
                                             <i class="fas fa-star orange"></i>
                                             <i class="fas fa-star orange"></i>
                                             <i class="fas fa-star orange"></i>
                                             <a href="#!" class="views">123 reviews</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="pr-description">
                                       <h4 class="blue">Description</h4>
                                       <p class="addReadMore showlesscontent">that I hired the above service provider and that this review is based on my personal experience of the service I received and is my honest opinion of this company or person. I have not received any additional benefits or rewards for</span><span class="readMore" title="Click to Show More">  Read More</span><span class="readLess" title="Click to Show Less"> Read Less</span></p>
                                       <div class="col-md-12 card-in-heart">
                                          <a href="#!" class="heart"><i class="fas fa-trash"></i></a>
                                          <a href="#!" class="share "><i class="fas fa-share-square orange"></i></a>
                                          <a href="#!" class="share mt-2"><i class="far fa-edit"></i></a>
                                       </div>
                                    </div>
                                    <div class="contact-desc">
                                       <a href="tel: 647 985 5214"><i class="fas fa-phone-alt l-blue pr-2"></i> 647 985 5214</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12 detail-box mt-3">
                              <div class="row">
                                 <div class="col-lg-4">
                                    <img src="./img/buy_sell_details.png" alt="" class="img-fluid">
                                 </div>
                                 <div class="col-lg-8 media_content">
                                    <div class="media">
                                       <img class="mr-2" src="./img/modal_thumbnail.png" alt="Generic placeholder image">
                                       <div class="media-body">
                                          <h3 class="mt-0 blue">Toshiba 65 Inches 4K HD TV</h3>
                                          <div class="web_site_views">
                                             <i class="fas fa-star orange"></i>
                                             <i class="fas fa-star orange"></i>
                                             <i class="fas fa-star orange"></i>
                                             <i class="fas fa-star orange"></i>
                                             <a href="#!" class="views">123 reviews</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="pr-description">
                                       <h4 class="blue">Description</h4>
                                       <p class="addReadMore showlesscontent">that I hired the above service provider and that this review is based on my personal experience of the service I received and is my honest opinion of this company or person. I have not received any additional benefits or rewards for</span><span class="readMore" title="Click to Show More">  Read More</span><span class="readLess" title="Click to Show Less"> Read Less</span></p>
                                       <div class="col-md-12 card-in-heart">
                                          <a href="#!" class="heart"><i class="fas fa-trash"></i></a>
                                          <a href="#!" class="share "><i class="fas fa-share-square orange"></i></a>
                                          <a href="#!" class="share mt-2"><i class="far fa-edit"></i></a>
                                       </div>
                                    </div>
                                    <div class="contact-desc">
                                       <a href="tel: 647 985 5214"><i class="fas fa-phone-alt l-blue pr-2"></i> 647 985 5214</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12 detail-box mt-3">
                              <div class="row">
                                 <div class="col-lg-4">
                                    <img src="./img/buy_sell_details.png" alt="" class="img-fluid">
                                 </div>
                                 <div class="col-lg-8 media_content">
                                    <div class="media">
                                       <img class="mr-2" src="./img/modal_thumbnail.png" alt="Generic placeholder image">
                                       <div class="media-body">
                                          <h3 class="mt-0 blue">Toshiba 65 Inches 4K HD TV</h3>
                                          <div class="web_site_views">
                                             <i class="fas fa-star orange"></i>
                                             <i class="fas fa-star orange"></i>
                                             <i class="fas fa-star orange"></i>
                                             <i class="fas fa-star orange"></i>
                                             <a href="#!" class="views">123 reviews</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="pr-description">
                                       <h4 class="blue">Description</h4>
                                       <p class="addReadMore showlesscontent">that I hired the above service provider and that this review is based on my personal experience of the service I received and is my honest opinion of this company or person. I have not received any additional benefits or rewards for</span><span class="readMore" title="Click to Show More">  Read More</span><span class="readLess" title="Click to Show Less"> Read Less</span></p>
                                       <div class="col-md-12 card-in-heart">
                                          <a href="#!" class="heart"><i class="fas fa-trash"></i></a>
                                          <a href="#!" class="share "><i class="fas fa-share-square orange"></i></a>
                                          <a href="#!" class="share mt-2"><i class="far fa-edit"></i></a>
                                       </div>
                                    </div>
                                    <div class="contact-desc">
                                       <a href="tel: 647 985 5214"><i class="fas fa-phone-alt l-blue pr-2"></i> 647 985 5214</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#privacy">
               Privacy 
               </button>
               <div class="modal fade privacy_popup" id="privacy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel"><img src="./img/insurance.png" class="img-fluid">My privacy</h5>
                           <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                           <div class="heading">
                              <h4>Turn on display</h4>
                           </div>
                           <div class="toggler">
                              <p>first.last@gmail.com</p>
                              <div class="switch_div">
                                 <label class="switch">
                                 <input type="checkbox">
                                 <span class="slider round"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="toggler">
                              <p>647 857 4512</p>
                              <div class="switch_div">
                                 <label class="switch">
                                 <input type="checkbox">
                                 <span class="slider round"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="toggler">
                              <p>Profile picture</p>
                              <div class="switch_div">
                                 <label class="switch">
                                 <input type="checkbox">
                                 <span class="slider round"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="toggler">
                              <p>Turn off notifications</p>
                              <div class="switch_div">
                                 <label class="switch">
                                 <input type="checkbox">
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
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signup">
               Sign Up
               </button>
               <div class="modal fade signup_popup" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <!-- <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i>My posts</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div> -->
                        <div class="modal-body">
                           <div class="img_welcome">
                              <img src="./img/Group 218.png" alt="" class="img-fluid">
                           </div>
                           <div class="member">
                              <h4>Already a member?</h4>
                              <a href="" class="login">Login</a>
                           </div>
                           <div class="cash_amounts">
                              <form action="">
                                 <div class="custom_radio_button">
                                    <input type="radio" id="test1" name="radio-group" checked="">
                                    <label for="test1">Personal account</label>
                                 </div>
                                 <div class="custom_radio_button">
                                    <input type="radio" id="test2" name="radio-group" checked="">
                                    <label for="">Business account</label>    
                                 </div>
                              </form>
                           </div>
                           <form action="">
                              <input type="text" name="fname" class="email" placeholder="First Name">
                              <input type="text" name="lname" class="email" placeholder="Last Name">
                              <input type="text" name="bname" class="email" placeholder="Buisness Name">
                              <input type="text" name="address" class="email" placeholder="Address">
                              <input type="text" name="town" class="email" placeholder="Town">
                              <input type="text" name="city" class="email" placeholder="City">
                              <input type="number" name="zip" class="email" placeholder="Zip Code">
                              <input type="email" name="Email" class="email" placeholder="Email Address">
                              <input type="password" name="pass" class="email" placeholder="Password">
                              <input type="password" name="confirm_password" class="email"
                                 placeholder="Confirm Password">
                              <button type="submit" class="btn confirm_email">CONTINUE</button>
                           </form>
                           <div class="col-md-12 col-12">
                              </form>
                              <p class="or">OR</p>
                           </div>
                           <div class="col-md-12 col-12 icons">
                              <a href=""> <i class="fab fa-facebook blue"></i></a>
                              <a href=""><i class="fab fa-google red"></i></a>
                           </div>
                           <div class="col-md-12 col-12">
                              <p>By signing in with Homzs you agree to our <a href="" class="terms">Terms of Use</a>
                                 and <a href="" class="terms"> Privacy Policy.</a>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#welcome">
               Sign In
               </button>
               <div class="modal fade welcome_popup" id="welcome" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <!-- <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i>My posts</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div> -->
                        <div class="modal-body">
                           <div class="col-md-12 col-12 img_welcome">
                              <img src="./img/Group 218.png" alt="" class="img-fluid">
                              <h5>Welcome to Homzs</h5>
                           </div>
                           <div class="sign_form">
                              <form action="">
                                 <div class="form-group">
                                    <input type="email" name="Email"  class="email" placeholder="Email Address">
                                 </div>
                                 <div class="form-group">
                                    <input type="password" name="password" class="email" placeholder="Password">
                                 </div>
                              </form>
                           </div>
                           <div class="terms_condition">
                              <p>By signing in with Homzs you agree to our <a href="" class="terms">Terms of Use</a>  and <a href="" class="terms"> Privacy Policy.</a></p>
                              <a href="#!" class="forget_password"> Forget Password</a>
                           </div>
                           <div class="sign_in_btn"> 
                              <button type="submit" class="btn confirm_email">Sign In</button>              
                           </div>
                           <div class="col-md-12 col-12 icons">
                              <a href="#!" class="facebook_icon"> <i class="fab fa-facebook-f"></i></a>
                              <a href="#!"><i class="fab fa-google red"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myaccount">
               My Account Popup
               </button>
               <div class="modal fade my_account_popup" id="myaccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">
                              <i class="far fa-user"></i>My Account
                           </h5>
                           <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body display">
                           <div class="col-md-12 col-12 custom_row">
                              <div class="col-md-4 col-12 box">
                                 <h4 class="head">My details<i class="fas fa-edit"></i></h4>
                                 <p>Manage your account
                                    information here. 
                                 </p>
                              </div>
                              <div class="col-md-4 col-12 box">
                                 <h4 class="head">My message<i class="far fa-comment-alt"></i></h4>
                                 <p>Read, send, and delete
                                    your messages here.
                                 </p>
                              </div>
                              <div class="col-md-4 col-12 box">
                                 <h4 class="head">Favourites<i class="far fa-heart"></i></h4>
                                 <p>View and delete your
                                    saved favorites here. 
                                 </p>
                              </div>
                           </div>
                           <div class="col-md-12 col-12 custom_row" >
                              <div class="col-md-4 col-12 box">
                                 <h4 class="head">My posts<i class="fas fa-edit"></i></h4>
                                 <p>View, Pause , Edit , publish 
                                    and delete your post here
                                 </p>
                              </div>
                              <div class="col-md-4 col-12 box">
                                 <h4 class="head">My privacy<img src="./img/insurance.png" class="img-fluid"></h4>
                                 <p>Manage your account
                                    privacy settings here. 
                                 </p>
                              </div>
                              <div class="col-md-4 col-12 box">
                                 <h4 class="head">Add credit<i class="fas fa-credit-card"></i></h4>
                                 <p>Manage your pay-
                                    perclick account here
                                 </p>
                              </div>
                           </div>
                           <div class="col-md-12 col-12 custom_row" >
                              <div class="col-md-4 col-12 box">
                                 <h4 class="head">Get verified<i class="fas fa-check-circle"></i></h4>
                                 <p>Manage your account
                                    verification here. 
                                 </p>
                              </div>
                              <div class="col-md-4 col-12 box">
                                 <h4 class="head">Delete account<i class="fas fa-trash"></i></h4>
                                 <p>Manage your account
                                    deletion here. 
                                 </p>
                              </div>
                              <div class="col-md-4 col-12 box">
                                 <h4 class="head">My settings<i class="fas fa-cog"></i></h4>
                                 <p>Manage your account
                                    settings here. 
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#itemtosell">
               Item To Sell
               </button>
               <div class="modal fade item_sell_popup" id="itemtosell" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit "></i>Post an Item to Sell</h5>
                           <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-4 col-12">
                                 <img src="./img/Image 1.png" alt="" class="img-fluid homzs">
                                 <div class="Turn">
                                    <h4>Turn on Display</h4>
                                 </div>
                                 <div class="switches">
                                    <h5>Profile photo</h5>
                                    <div class="switch_div">
                                       <label class="switch">
                                       <input type="checkbox">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="switches">
                                    <h5>Private phone</h5>
                                    <div class="switch_div">
                                       <label class="switch">
                                       <input type="checkbox">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="switches">
                                    <h5>Email</h5>
                                    <div class="switch_div">
                                       <label class="switch">
                                       <input type="checkbox">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-8 col-12 person">
                                 <img src="./img/person.png" alt="" class="person">
                                 <div class="profile">
                                    <h5>Profile photo</h5>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 col-12">
                                       <div class="form-group text_fields">
                                          <form>
                                             <div class="label_test">
                                                <label for="">First Name</label>
                                                <p>John</p>
                                                <label for="">Last Name</label>
                                                <p >Smith</p>
                                                <label for="">Email Address</label>
                                                <p>someone@something.com</p>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                       <div class="form-group text_fields">
                                          <form class="test1">
                                             <div class="label_test">
                                                <label for="">Private Phone</label>
                                                <p >03030303</p>
                                                <label for="">Address</label>
                                                <p for="">street 5, ca</p>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group text_fields">
                              <input type="text" placeholder="Add item location e.g. Brampton On" class="text">
                           </div>
                           <div class="price ">
                              <div class="row">
                                 <div class="col-md-3 col-12 free switch_div">
                                    <p>Free</p>
                                    <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                    </label>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="dollars">
                                       <p>Price</p>
                                       <input type="number" class="dollar_number" placeholder="$0.00">
                                    </div>
                                 </div>
                                 <div class="col-md-5 col-12 delivery type">
                                    <div class="selection_box">
                                       <label>Delivery type</label>
                                       <select name="delivery_type" class="category">
                                          <option value="">COD</option>
                                          <option value="">CC</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group text_fields">
                              <label for="" class="name">Name</label>
                              <input type="text" placeholder="Add your item name e.g. Samsung 60 Inches 4K HDTV" class="text">
                           </div>
                           <div class="form-group">
                              <div class=" text_fields">
                                 <label for="" class="name">Category</label>
                                 <input type="text" placeholder="e.g. Electronics" class="text">
                                 <div class="text_field">
                                    <div class="row">
                                       <div class="col-md-10">
                                          <div class="form-group ">
                                             <input type="text" placeholder="Add a link to your website " class="text">
                                          </div>
                                       </div>
                                       <div class="col-md-2 col-12 free">
                                          <p>$4.69</p>
                                          <div class="switch_div">
                                             <label class="switch">
                                             <input type="checkbox">
                                             <span class="slider round"></span>
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="ad_stand">
                                 <div class=" type">
                                    <p>Make my ad stand out</p>
                                 </div>
                                 <div class=" selection_box">
                                    <select name="delivery_type" class="category">
                                       <option value="">Interested</option>
                                       <option value="">Not Interested</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="light_text">
                                 <p>Your item will appear on top of search result listing for the duration of the number of days you have selected.</p>
                              </div>
                              <div class="col-md-12 col-12" style="padding:0px;">
                                 <textarea id="item-description" class="description" name="w3review" rows="6" cols="50" placeholder="Add your item description"></textarea>
                              </div>
                              <div class="col-md-12 col-12 cover_photo">
                                 <div class="img_background">
                                    <div class="cover">
                                       <img src="./img/FOCUS.png" alt="" class="focus_size">
                                       <p>Cover Photo</p>
                                    </div>
                                    <div class="empty_img">
                                       <img src="./img/empty.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="trash"><i class="upload_icons fas fa-trash"></i></div>
                                    <div class="upload"><i class="upload_icons fas fa-file-upload"></i></div>
                                    <div class="camera"><i class="upload_icons fas fa-camera"></i></div>
                                 </div>
                              </div>
                              <div class="t_pay text-center mt-3">
                                 <span>Total to pay for your ad <input type="text" placeholder="$0.00"></span>
                              </div>
                              <div class="col-md-12 col-12 policy">
                                 <p>By posting this ad with Homzs you agree to our <a href="" class="terms">Terms of Use</a> and <a href="" class="terms">Privacy Policy.</a></p>
                                 <a href=""></a>
                              </div>
                              <div class="col-md-12 col-12 buttons">
                                 <button class="btn">PREVIEW</button>
                                 <button class="btn">SAVE</button>
                                 <button class="btn">PAUSE</button>
                                 <button class="btn">PUBLISH</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#personal">
               Message Person
               </button>
               <div class="modal fade messageper" id="personal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <img src="./img/person.png" alt="" >
                           <h5 class="modal-title" id="exampleModalLabel"><i class="far fa-comment-alt"></i>My message</h5>
                           <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                           <div class="col-md-12 col-12 message_popup">
                              <div class="row">
                                 <div class="col-md-6 col-12 buisness_section">
                                    <div class="section">
                                       <div class="info">
                                          <h4>Jame D. 13.05 8 Jun 21</h4>
                                       </div>
                                       <div class="note">
                                          <p>To complete your signup kindly confirm your email address by clicking on the link in the email that we have</p>
                                       </div>
                                    </div>
                                    <div class="section">
                                       <div class="info">
                                          <h4>Jame D. 13.05 8 Jun 21</h4>
                                       </div>
                                       <div class="note">
                                          <p>To complete your signup kindly confirm your email address by clicking on the link in the email that we have</p>
                                       </div>
                                    </div>
                                    <div class="section">
                                       <div class="info">
                                          <h4>Jame D. 13.05 8 Jun 21</h4>
                                       </div>
                                       <div class="note">
                                          <p>To complete your signup kindly confirm your email address by clicking on the link in the email that we have</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-12 text_section">
                                    <div class="icons">
                                       <div class="flag"><i class="fas fa-flag"></i></div>
                                       <div class="minus"><i class="fas fa-minus-circle"></i></div>
                                    </div>
                                    <div class="col-md-12 col-12 message_receiver">
                                       <h1 class="receiver">Message James Davey</h1>
                                    </div>
                                    <div class="col-md-12 col-12 address_area">
                                       <p class="address">Jame D. 13.05 8 Jun 21</p>
                                       <p class="note">To complete your signup kindly confirmyour emailaddress by clicking on the linkin the email that we have</p>
                                    </div>
                                    <div class=" col-md-12 col-12 type_area">
                                       <label for="" class="enter">Enter your message here</label>
                                       <textarea id="wreview" name="wreview"  class="text" rows="4" cols="50"></textarea>
                                    </div>
                                    <div class="col-md-12 col-12 send">
                                       <a href="" class="sending">Send my message</a>
                                    </div>
                                    <div class="col-md-12 rate_james">
                                       <div class="star">
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="72" height="14" viewBox="0 0 72 14">
                                             <defs>
                                                <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 835 166">
                                                   <image width="835" height="166" xlink:href="data:image/png;base64,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"/>
                                                </pattern>
                                             </defs>
                                             <rect id="toppng.com-five-star-rating-623x124" width="72" height="14" fill="url(#pattern)"/>
                                          </svg>
                                       </div>
                                       <div class="rate">Rate James Dave.....</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#posthousemate">
               House Mate
               </button>
               <div class="modal fade house_mate_pop" id="posthousemate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit "></i>Post a Housemate</h5>
                           <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                           <div class="logo_modal">
                              <img src="./img/Homzs.png" alt="" class="homzs">
                           </div>
                           <div class="row">
                              <div class="col-md-12 col-12">
                                 <div class="post_a_house_mate_detail">
                                    <div class="person">
                                       <img src="./img/person_new.png" alt="" class="img-fluid">
                                       <div class="profile">
                                          <h5>Profile photo</h5>
                                       </div>
                                    </div>
                                    <div class="personal_info">
                                       <div class="form-group text_fields">
                                          <div class="label_test">
                                             <label for="">Name</label>
                                             <p >John</p>
                                             <label for="">Age</label>
                                             <p >24</p>
                                             <label for="">Private Phone</label>
                                             <p >03030303</p>
                                             <label for="">Email Address</label>
                                             <p>Example@something.com</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-12 text_fields">
                              <input type="text" placeholder="Post title e.g. Married couple looking for one bed basement flat" class="text">
                           </div>
                           <div class="row ">
                              <div class="col-md-6 col-12  imp_dates">
                                 <h5 class="dates">Date available from</h5>
                                 <div class="col-md-12 col-12 free">
                                    <p>Available now</p>
                                    <div class="col-md-6 col-12 switch_div">
                                       <label class="switch">
                                       <input type="checkbox">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="col-md-12 col-12 areas">
                                    <h5 class="dates">Areas I am interested in</h5>
                                    <div class="col-md-6 col-12 selection_box">
                                       <select name="delivery_type" class="category">
                                          <option value="">COD</option>
                                          <option value="">CC</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 col-12 details">
                                 <div class="date">
                                    <select name="" class="months">
                                       <option value="">Jan</option>
                                       <option>feb</option>
                                       <option value="">Mar</option>
                                       <option value="">Apr</option>
                                       <option value="">May</option>
                                       <option value="">Jun</option>
                                       <option value="">Jul</option>
                                       <option value="">Aug</option>
                                       <option value="">Sep</option>
                                       <option value="">Oct</option>
                                       <option value="">Nov</option>
                                       <option value="">Dec</option>
                                    </select>
                                    <select name="" class="months">
                                       <option value="">1</option>
                                       <option value="">2</option>
                                       <option value="">3</option>
                                       <option value="">4</option>
                                       <option value="">5</option>
                                       <option value="">6</option>
                                       <option value="">7</option>
                                       <option value="">8</option>
                                       <option value="">9</option>
                                       <option value="">10</option>
                                       <option value="">11</option>
                                       <option value="">12</option>
                                       <option value="">13</option>
                                       <option value="">14</option>
                                       <option value="">15</option>
                                       <option value="">16</option>
                                       <option value="">17</option>
                                       <option value="">18</option>
                                       <option value="">19</option>
                                       <option value="">20</option>
                                       <option value="">21</option>
                                       <option value="">22</option>
                                       <option value="">23</option>
                                       <option value="">24</option>
                                       <option value="">25</option>
                                       <option value="">26</option>
                                       <option value="">27</option>
                                       <option value="">28</option>
                                       <option value="">29</option>
                                       <option value="">30</option>
                                       <option value="">31</option>
                                    </select>
                                    <select name="" class="months">
                                       <option value="">2011</option>
                                       <option>2012</option>
                                       <option value="">2013</option>
                                       <option value="">2014</option>
                                       <option value="">2015</option>
                                       <option value="">2016</option>
                                       <option value="">2017</option>
                                       <option value="">2018</option>
                                       <option value="">2019</option>
                                       <option value="">2020</option>
                                       <option value="">2021</option>
                                       <option value="">2022</option>
                                    </select>
                                 </div>
                                 <div class="col-md-12 col-12 info">
                                    <div class="col-md-12 col-12 text_fields">
                                       <input type="text" placeholder="e.g. Brampton" class="text">
                                    </div>
                                    <div class="col-md-12 col-12 text_fields">
                                       <select name="" class="text" >
                                          <option value="">furnished</option>
                                          <option value="">non-furnished</option>
                                       </select>
                                    </div>
                                    <div class="col-md-12 col-12 text_fields">
                                       <select name="" class="text">
                                          <option value="">Single room</option>
                                          <option value="">Double room</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 col-12 on">
                                 <div class="Turn">
                                    <h4>Turn on Display</h4>
                                 </div>
                                 <div class="switch_in_flex">
                                    <div class="switches">
                                       <p>Profile photo</p>
                                       <div class= "switch_div">
                                          <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                          </label>
                                       </div>
                                    </div>
                                    <div class="c switches">
                                       <p>Private phone</p>
                                       <div class=" switch_div">
                                          <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                          </label>
                                       </div>
                                    </div>
                                    <div class=" switches">
                                       <p>Email</p>
                                       <div class= "switch_div">
                                          <label class="switch">
                                          <input type="checkbox">
                                          <span class="slider round"></span>
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 col-12 text-area-custom">
                                 <textarea id="wreview" name="wreview" rows="6" cols="50" class="description" placeholder="Add your item description"></textarea>
                              </div>
                              <div class="col-md-12 col-12 cover_photo">
                                 <div class="img_background">
                                    <div class="cover">
                                       <img src="./img/FOCUS.png" alt="" class="focus_size">
                                       <p>Cover Photo</p>
                                    </div>
                                    <div class="empty_img">
                                       <img src="./img/empty.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="trash"><i class="upload_icons fas fa-trash"></i></div>
                                    <div class="upload"><i class="upload_icons fas fa-file-upload"></i></div>
                                    <div class="camera"><i class="upload_icons fas fa-camera"></i></div>
                                 </div>
                              </div>
                              <div class="col-md-12 col-12 policy">
                                 <p>By posting this ad with Homzs you agree to our <a href="" class="terms">Terms of Use</a> and <a href="" class="terms">Privacy Policy.</a></p>
                                 <a href=""></a>
                              </div>
                              <div class="col-md-12 col-12 buttons">
                                 <button class="btn">PREVIEW</button>
                                 <button class="btn">SAVE</button>
                                 <button class="btn">PAUSE</button>
                                 <button class="btn">PUBLISH</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rateme">
               Rate ME
               </button>
               <div class="modal fade rateme" id="rateme" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-star"></i>Rate me</h5>
                           <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                           <div class="col-md-12 col-12 submit">
                              <h4>
                                 Submit a review
                              </h4>
                              <p class="company">Jason Electricals Inc</p>
                              <a href="">Landscaping, Stonework, Deck</a>
                              <p>27 Vanguard Drive, Etobicoke ON M9B 5E7</p>
                           </div>
                           <div class="col-md-12 col-12 writing_div">
                              <label for="" class="labels">Enter the name of service provided</label>
                              <input type="text" class="textarea" >
                           </div>
                           <div class="col-md-12 col-12 writing_div">
                              <label for="" class="labels">Enter your written review</label>
                              <input type="text" class="textarea2" >
                           </div>
                           <div class="col-md-12 col-12 ratings">
                              <h4>
                                 Your rating is
                              </h4>
                              <p class="numbers">3.8/5</p>
                           </div>
                           <div class="col-md-12 col-12 criteria">
                              <p>Lowest</p>
                              <div class="star_count">1 2 3 4 5 </div>
                              <p>Highest</p>
                           </div>
                           <div class="col-md-12 col-12 criteria">
                              <p>Quality of work
                              </p>
                              <div class="stars"> 
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                              </div>
                              <div class="star_rating_custom">
                                 <p>N/A <input type="radio" class="radio_but"></p>
                              </div>
                           </div>
                           <div class="col-md-12 col-12 confirm ">
                              <p class="note"><b>I hereby confirm</b> that I hired the above service provider and that this review is based on my personal experience of the service that I received and is my honest opinion of this company or person. I have not received any additional benefits or rewards for providing this review.
                              </p>
                           </div>
                           <div class="col-md-12 submit_review">
                              <p class="head">Submit my review</p>
                              <p>By submitting this review you agree to our <a href="">Terms of Use
                                 and Privacy Policy.</a> 
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#postmessage">
               Post Message
               </button>
               <div class="modal fade postmessage" id="postmessage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <div class="col-md-3 col-12 header_image">
                              <img src="../Homzs/images/Homzs.png" alt="" class="homzs">
                           </div>
                           <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit "></i>Post a Message</h5>
                           <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                           <div class="logo_modal">
                              <img src="./img/Homzs.png" alt="" class="homzs">
                           </div>
                           <div class="col-md-12 col-12 house_mate_pop">
                              <div class="post_a_house_mate_detail">
                                 <div class="person">
                                    <img src="./img/person_new.png" alt="" class="img-fluid">
                                    <div class="profile">
                                       <h5>Profile photo</h5>
                                    </div>
                                 </div>
                                 <div class="personal_info">
                                    <div class="form-group text_fields">
                                       <div class="label_test">
                                          <label for="">Name</label>
                                          <p >John</p>
                                          <label for="">Age</label>
                                          <p >24</p>
                                          <label for="">Private Phone</label>
                                          <p >03030303</p>
                                          <label for="">Email Address</label>
                                          <p>Example@something.com</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-12 on">
                              <div class="switch_in_flex">
                                 <div class="switches">
                                    <p>Profile photo</p>
                                    <div class= "switch_div">
                                       <label class="switch">
                                       <input type="checkbox">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="c switches">
                                    <p>Private phone</p>
                                    <div class=" switch_div">
                                       <label class="switch">
                                       <input type="checkbox">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class=" switches">
                                    <p>Email</p>
                                    <div class= "switch_div">
                                       <label class="switch">
                                       <input type="checkbox">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="text_fields custom-text-fields">
                              <input type="text" placeholder="Add your message tittle e.g. landscaping group for beginners" class="text">
                           </div>
                           <div class="col-md-12 col-12 custom-text-area">
                              <textarea name="" class="description" cols="30" rows="10" placeholder="Add your message"></textarea>
                           </div>
                           <div class="col-md-12 col-12 broadcast">
                              <label for="">Broadcast radius</label>
                              <input type="number" class="zip_code" placeholder="Zip code, country">
                              <select name="" class="radius">
                                 <option value="">Radius</option>
                              </select>
                           </div>
                           <div class="col-md-12 col-12 cover_photo">
                              <div class="img_background">
                                 <div class="cover">
                                    <img src="./img/FOCUS.png" alt="" class="focus_size">
                                    <p>Cover Photo</p>
                                 </div>
                                 <div class="empty_img">
                                    <img src="./img/empty.png" alt="" class="img-fluid">
                                 </div>
                                 <div class="trash"><i class="upload_icons fas fa-trash"></i></div>
                                 <div class="upload"><i class="upload_icons fas fa-file-upload"></i></div>
                                 <div class="camera"><i class="upload_icons fas fa-camera"></i></div>
                              </div>
                           </div>
                           <div class="col-md-12 col-12 policy">
                              <p>By posting this ad with Homzs you agree to our <a href="" class="terms">Terms of Use</a> and <a href="" class="terms">Privacy Policy.</a></p>
                              <a href=""></a>
                           </div>
                           <div class="col-md-12 col-12 buttons">
                              <button class="btn">PREVIEW</button>
                              <button class="btn">SAVE</button>
                              <button class="btn">PAUSE</button>
                              <button class="btn">PUBLISH</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#postproject">
               post project
               </button>
               <div class="modal fade item_sell_popup show" id="postproject" tabindex="-1" aria-labelledby="exampleModalLabel">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit "></i>Post a Project</h5>
                           <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-4 col-12">
                                 <img src="./img/Image 1.png" alt="" class="img-fluid homzs">
                                 <div class="Turn">
                                    <h4>Turn on Display</h4>
                                 </div>
                                 <div class="switches">
                                    <h5>Profile photo</h5>
                                    <div class="switch_div">
                                       <label class="switch">
                                       <input type="checkbox">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="switches">
                                    <h5>Private phone</h5>
                                    <div class="switch_div">
                                       <label class="switch">
                                       <input type="checkbox">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="switches">
                                    <h5>Email</h5>
                                    <div class="switch_div">
                                       <label class="switch">
                                       <input type="checkbox">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-8 col-12 person">
                                 <img src="./img/person_new.png" alt="" class="person">
                                 <div class="profile">
                                    <h5>Profile photo</h5>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 col-12">
                                       <div class="form-group text_fields">
                                          <form>
                                             <div class="label_test">
                                                <label for="">First Name</label>
                                                <p for="">John</p>
                                                <label for="">Last Name</label>
                                                <p for="">Smith</p>
                                                <label for="">Email Address</label>
                                                <p>Example@something.com</p>
                                                <label for="">Add project location e.g. Brampton On</label>
                                                <p for=""> Perth On</p>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                       <div class="form-group text_fields">
                                          <form>
                                             <div class="label_test">
                                                <label for="">Private Phone</label>
                                                <p >03030303</p>
                                                <label for="">Address</label>
                                                <p for="">street 5, ca</p>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group text_fields">
                              <label for="" class="name mb-3">Project Title</label>
                              <input type="text" placeholder="Add your item name e.g. Samsung 60 Inches 4K HDTV" class="text">
                           </div>
                           <div class="form-group">
                              <div class="col-md-12 col-12" style="padding:0px;">
                                 <textarea id="item-description" class="description" name="w3review" rows="6" cols="50" placeholder="Add your item description"></textarea>
                              </div>
                              <div class="col-md-12 col-12 cover_photo">
                                 <div class="img_background">
                                    <div class="cover">
                                       <img src="./img/FOCUS.png" alt="" class="focus_size">
                                       <p>Cover Photo</p>
                                    </div>
                                    <div class="empty_img">
                                       <img src="./img/empty.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="trash"><i class="upload_icons fas fa-trash"></i></div>
                                    <div class="upload"><i class="upload_icons fas fa-file-upload"></i></div>
                                    <div class="camera"><i class="upload_icons fas fa-camera"></i></div>
                                 </div>
                              </div>
                              <div class="col-md-12 col-12 policy">
                                 <p>By posting this ad with Homzs you agree to our <a href="" class="terms">Terms of Use</a> and <a href="" class="terms">Privacy Policy.</a></p>
                                 <a href=""></a>
                              </div>
                              <div class="col-md-12 col-12 buttons">
                                 <button class="btn">PREVIEW</button>
                                 <button class="btn">SAVE</button>
                                 <button class="btn">PAUSE</button>
                                 <button class="btn">PUBLISH</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#private_property">
               Property
               </button>
               <div class="modal fade property" id="private_property" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <div class="col-md-3 col-12">
                              <img src="./img/Homzs.png" alt="" class="homzs">
                           </div>
                           <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit "></i>Post a Property</h5>
                           <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                           <div class="col-md-12 col-12 row">
                           </div>
                           <div class="col-md-12 col-12">
                              <div class="row ">
                                 <div class="col-md-3 col-12 person">
                                    <img src="./img/person_new.png" alt="" class="person">
                                    <div class="profile">
                                       <h5>Profile photo</h5>
                                    </div>
                                 </div>
                                 <div class="col-md-9 col-12">
                                    <div class="row forms">
                                       <div class="col-md-6">
                                          <h5 class="source">Advert Source</h5>
                                          <form action="">
                                             <div class="form-group text_fields">
                                                <select name="" class="text">
                                                   <option value="">Private</option>
                                                   <option value="">Public</option>
                                                </select>
                                             </div>
                                             <div class="form-group text_fields label_test">
                                                <label for="">First Name</label>
                                                <p for="">John</p>
                                             </div>
                                             <div class="form-group text_fields label_test">
                                                <label for="">Phone</label>
                                                <p >03030303</p>
                                             </div>
                                          </form>
                                       </div>
                                       <div class="col-md-6">
                                          <h5 class="source">Advert type</h5>
                                          <form action="">
                                             <div class="form-group text_fields">
                                                <select name="" class="text">
                                                   <option value="">For Rent</option>
                                                   <option value="">For Sale</option>
                                                </select>
                                             </div>
                                             <div class="form-group text_fields label_test">
                                                <label for="">Email Address</label>
                                                <p>Example@something.com</p>
                                             </div>
                                             <div class="form-group text_fields label_test">
                                                <label for="">Contact person</label>
                                                <p for="">Dave</p>
                                             </div>
                                          </form>
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
                                       <select name="info" class="details">
                                          <option value="">Flat/apartment</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-12">
                                    <div class="rows">
                                       <h5 class="property_info">
                                          No. of Bedroom
                                       </h5>
                                       <select name="info" class="details">
                                          <option value="">3 bedrooms</option>
                                          <option value="">2 bedrooms</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-12">
                                    <div class="rows">
                                       <h5 class="property_info">
                                          No. of Bath
                                       </h5>
                                       <select name="info" class="details">
                                          <option value="">2 bathrooms</option>
                                          <option value="">3 bathrooms</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-9 col-12">
                              <h5 class="property_info">
                                 Property address
                              </h5>
                              <div class="row address">
                                 <div class="col-md-6">
                                    <div class="form-group fields">
                                       <input type="text" placeholder="Address">
                                    </div>
                                    <div class="form-group fields">
                                       <input type="text" placeholder="Town">
                                    </div>
                                    <div class="form-group row">
                                       <label for="inputPassword" class="col-md-7 col-form-label">Rental Price</label>
                                       <div class="col-md-5">
                                          <input type="number" class="form-control amount" id="inputPassword" placeholder="$0.00">
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label for="inputPassword" class="col-md-7 col-form-label">Security Deposit</label>
                                       <div class="col-md-5">
                                          <input type="number" class="form-control amount" id="inputPassword" placeholder="$0.00">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group fields">
                                       <input type="text" placeholder="Country">
                                    </div>
                                    <div class="form-group fields">
                                       <input type="number" placeholder="Zip Code">
                                    </div>
                                    <div class="form-group fields">
                                       <select name="" class="boxes">
                                          <option value="">per calendar month</option>
                                       </select>
                                    </div>
                                    <div class="form-group fields">
                                       <select name="" class="boxes">
                                          <option value="">Furnished</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-12 rental ">
                              <div class="form-group fields">
                                 <select name="" class="box">
                                    <option value="">short term rental</option>
                                 </select>
                              </div>
                              <div class="date">
                                 <label for="">let available</label>
                                 <select name="" class="months">
                                    <option value="">Jan</option>
                                    <option>feb</option>
                                    <option value="">Mar</option>
                                    <option value="">Apr</option>
                                    <option value="">May</option>
                                    <option value="">Jun</option>
                                    <option value="">Jul</option>
                                    <option value="">Aug</option>
                                    <option value="">Sep</option>
                                    <option value="">Oct</option>
                                    <option value="">Nov</option>
                                    <option value="">Dec</option>
                                 </select>
                                 <select name="" class="months">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                    <option value="">6</option>
                                    <option value="">7</option>
                                    <option value="">8</option>
                                    <option value="">9</option>
                                    <option value="">10</option>
                                    <option value="">11</option>
                                    <option value="">12</option>
                                    <option value="">13</option>
                                    <option value="">14</option>
                                    <option value="">15</option>
                                    <option value="">16</option>
                                    <option value="">17</option>
                                    <option value="">18</option>
                                    <option value="">19</option>
                                    <option value="">20</option>
                                    <option value="">21</option>
                                    <option value="">22</option>
                                    <option value="">23</option>
                                    <option value="">24</option>
                                    <option value="">25</option>
                                    <option value="">26</option>
                                    <option value="">27</option>
                                    <option value="">28</option>
                                    <option value="">29</option>
                                    <option value="">30</option>
                                    <option value="">31</option>
                                 </select>
                                 <select name="" class="months">
                                    <option value="">2011</option>
                                    <option>2012</option>
                                    <option value="">2013</option>
                                    <option value="">2014</option>
                                    <option value="">2015</option>
                                    <option value="">2016</option>
                                    <option value="">2017</option>
                                    <option value="">2018</option>
                                    <option value="">2019</option>
                                    <option value="">2020</option>
                                    <option value="">2021</option>
                                    <option value="">2022</option>
                                 </select>
                              </div>
                           </div>
                           <div class="text_area">
                              <textarea name="" class="description" cols="30" rows="10" placeholder="Add property description"></textarea>
                              <div class="toggles">
                                 <div class="free">
                                    <p>Clear</p>
                                    <div class="col-md-6 col-12 switch_div">
                                       <label class="switch">
                                       <input type="checkbox">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="use">
                                    <p>Edit & use</p>
                                    <div class="col-md-6 col-12 switch_div">
                                       <label class="switch">
                                       <input type="checkbox">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <p class="limit">500 characters (10 words minimum).</p>
                           </div>
                           <div class="text_area2">
                              <textarea name="" class="description" cols="30" rows="10" placeholder="Add other information"></textarea>
                              <p class="limit">500 characters</p>
                           </div>
                           <div class="cover_photo">
                              <div class="img_background">
                                 <div class="cover">
                                    <img src="./img/FOCUS.png" alt="" class="focus_size">
                                    <p>Cover Photo</p>
                                 </div>
                                 <div class="empty_img">
                                    <img src="./img/empty.png" alt="" class="img-fluid">
                                 </div>
                                 <div class="trash"><i class="upload_icons fas fa-trash"></i></div>
                                 <div class="upload"><i class="upload_icons fas fa-file-upload"></i></div>
                                 <div class="camera"><i class="upload_icons fas fa-camera"></i></div>
                              </div>
                           </div>
                           <div class="policy">
                              <p>By posting this ad with Homzs you agree to our <a href="" class="terms">Terms of Use</a> and <a href="" class="terms">Privacy Policy.</a></p>
                              <a href=""></a>
                           </div>
                           <div class="buttons">
                              <button class="btn">PREVIEW</button>
                              <button class="btn">SAVE</button>
                              <button class="btn">PAUSE</button>
                              <button class="btn">PUBLISH</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buisness_property">
               Post a Property 2
               </button>
               <div class="modal fade property" id="buisness_property" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <div class="col-md-3 col-12">
                              <img src="./img/Homzs.png" alt="" class="homzs">
                           </div>
                           <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit "></i>Post a Property</h5>
                           <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                           <div class="col-md-12 col-12 row">
                           </div>
                           <div class="col-md-12 col-12">
                              <div class="row ">
                                 <div class="col-md-3 col-12 person">
                                    <img src="./img/person_new.png" alt="" class="person">
                                    <div class="profile">
                                       <h5>Profile photo</h5>
                                    </div>
                                 </div>
                                 <div class="col-md-9 col-12">
                                    <div class="row forms">
                                       <div class="col-md-6">
                                          <h5 class="source">Advert Source</h5>
                                          <form action="">
                                             <div class="form-group text_fields">
                                                <select name="" class="text">
                                                   <option value="">Private</option>
                                                   <option value="">Public</option>
                                                </select>
                                             </div>
                                             <div class="form-group text_fields label_test">
                                                <label for="">Name</label>
                                                <p >John</p>
                                             </div>
                                             <div class="form-group text_fields label_test">
                                                <label for="">Phone</label>
                                                <p >03030303</p>
                                             </div>
                                          </form>
                                       </div>
                                       <div class="col-md-6">
                                          <h5 class="source">Advert type</h5>
                                          <form action="">
                                             <div class="form-group text_fields">
                                                <select name="" class="text">
                                                   <option value="">For Rent</option>
                                                   <option value="">For Sale</option>
                                                </select>
                                             </div>
                                             <div class="form-group text_fields label_test">
                                                <label for="">Email Address</label>
                                                <p>Example@something.com</p>
                                             </div>
                                             <div class="form-group text_fields label_test">
                                                <label for="">Contact person</label>
                                                <p for="">Dave</p>
                                             </div>
                                          </form>
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
                                       <select name="info" class="details">
                                          <option value="">Flat/apartment</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-12">
                                    <div class="rows">
                                       <h5 class="property_info">
                                          No. of Bedroom
                                       </h5>
                                       <select name="info" class="details">
                                          <option value="">3 bedrooms</option>
                                          <option value="">2 bedrooms</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-12">
                                    <div class="rows">
                                       <h5 class="property_info">
                                          No. of Bath
                                       </h5>
                                       <select name="info" class="details">
                                          <option value="">2 bathrooms</option>
                                          <option value="">3 bathrooms</option>
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
                                       <input type="text" placeholder="Address">
                                    </div>
                                    <div class="form-group fields">
                                       <input type="text" placeholder="Town">
                                    </div>
                                    <h5 class="property_info mt-2">Property Sales price</h5>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group fields">
                                       <input type="text" placeholder="Country">
                                    </div>
                                    <div class="form-group fields">
                                       <input type="number" placeholder="Zip Code">
                                    </div>
                                    <div class="form-group fields">
                                       <input type="number" placeholder="$000,000,000">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="text_area">
                              <textarea name="" class="description" cols="30" rows="10" placeholder="Add property description"></textarea>
                              <div class="toggles">
                                 <div class="free">
                                    <p>Clear</p>
                                    <div class="col-md-6 col-12 switch_div">
                                       <label class="switch">
                                       <input type="checkbox">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="use">
                                    <p>Edit & use</p>
                                    <div class="col-md-6 col-12 switch_div">
                                       <label class="switch">
                                       <input type="checkbox">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <p class="limit">500 characters (10 words minimum).</p>
                           </div>
                           <div class="text_area2">
                              <textarea name="" class="description" cols="30" rows="10" placeholder="Add other information"></textarea>
                              <p class="limit">500 characters</p>
                           </div>
                           <div class="cover_photo">
                              <div class="img_background">
                                 <div class="cover">
                                    <img src="./img/FOCUS.png" alt="" class="focus_size">
                                    <p>Cover Photo</p>
                                 </div>
                                 <div class="empty_img">
                                    <img src="./img/empty.png" alt="" class="img-fluid">
                                 </div>
                                 <div class="trash"><i class="upload_icons fas fa-trash"></i></div>
                                 <div class="upload"><i class="upload_icons fas fa-file-upload"></i></div>
                                 <div class="camera"><i class="upload_icons fas fa-camera"></i></div>
                              </div>
                           </div>
                           <div class="policy">
                              <p>By posting this ad with Homzs you agree to our <a href="" class="terms">Terms of Use</a> and <a href="" class="terms">Privacy Policy.</a></p>
                              <a href=""></a>
                           </div>
                           <div class="buttons">
                              <button class="btn">PREVIEW</button>
                              <button class="btn">SAVE</button>
                              <button class="btn">PAUSE</button>
                              <button class="btn">PUBLISH</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--FOOTER PHP INCLUDE-->
   <?php include 'footer.php';?>
</html>