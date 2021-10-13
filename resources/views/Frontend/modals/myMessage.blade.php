<div class="modal fade messageper" id="personal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow: :scroll !important;">
    <div class="modal-dialog modal_body modal_2">
        <div class="modal-content">
            <div class="modal-header">
                <img src="{{ asset(Auth::user()->UserDetail->profile_pic) }}" width="100" alt="">
                <h5 class="modal-title" id="exampleModalLabel"><i class="far fa-comment-alt"></i>My
                    message</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <div class="col-md-12 col-12 message_popup">
                    <div class="row">
                        <div class="col-md-6 col-12 buisness_section">
                            @php
                                $messages = AppHelper::getMessages();
                            @endphp

                            @foreach ($messages as $key => $item)


                                
                                <div class="section clicktoreply" style="cursor: pointer;" data-toggle="collapse" href="#collapse{{ $item->id }}" aria-expanded="true" aria-controls="collapse{{ $item->id }}">

                                    <input type="hidden"  class="to_id" value="{{ $item->from_id }}">
                                    <input type="hidden"  class="parent_id" value="{{ $item->id }}">
                                    <input type="hidden"  class="table_record_id" value="{{ $item->table_record_id }}">
                                    <input type="hidden"  class="table_name" value="{{ $item->table_name }}">

                                    <div class="info">
                                        <h4> <span class="username">{{ $item->FromUser->UserDetail->fullname??'' }}</span> {{ date('h.i d M y', strtotime($item->created_at)) }}</h4>
                                    </div>
                                    <div class="note">
                                        <p class="body">{{ $item->body }}</p>
                                    </div>
                                    <p style="font-size: 10px;float: right;background: aliceblue;padding: 5px;margin-top: -14px;border-radius: 8px;">Replies: {{ count($item->MessageReplies) }}</p>
                                </div>

                                <div  id="collapse{{ $item->id }}" class="collapse">

                                    @foreach ($item->MessageReplies as $reply)

                                        <div class="section" style="width: 90%;margin-left: 28px;" class="collapse">

                                            {{-- <input type="hidden"  class="to_id" value="{{ $item->from_id }}">
                                            <input type="hidden"  class="parent_id" value="{{ $item->id }}">
                                            <input type="hidden"  class="table_record_id" value="{{ $item->table_record_id }}">
                                            <input type="hidden"  class="table_name" value="{{ $item->table_name }}"> --}}

                                            <div class="info">
                                                <h4> <span class="username">{{ $reply->FromUser->UserDetail->fullname??'' }}</span> {{ date('h.i d M y', strtotime($reply->created_at)) }}</h4>
                                            </div>
                                            <div class="note">
                                                <p class="body">{{ $reply->body }}</p>
                                            </div>

                                        </div>

                                    @endforeach
                                </div>
                            
                            @endforeach


                            {{-- <div class="section">
                                <div class="info">
                                    <h4>Jame D. 13.05 8 Jun 21</h4>

                                </div>
                                <div class="note">
                                    <p>To complete your signup kindly confirm your email address by
                                        clicking on the link in the email that we have</p>
                                </div>
                            </div>
                            <div class="section">
                                <div class="info">
                                    <h4>Jame D. 13.05 8 Jun 21</h4>

                                </div>
                                <div class="note">
                                    <p>To complete your signup kindly confirm your email address by
                                        clicking on the link in the email that we have</p>
                                </div>
                            </div> --}}

                        </div>

                        <div class="col-md-6 col-12 text_section chatmessage" style=" display: none;">
                            <div class="icons">
                                <div class="flag"><i class="fas fa-flag"></i></div>
                                <div class="minus"><i class="fas fa-minus-circle"></i>
                                </div>

                            </div>
                            <div class="col-md-12 col-12 message_receiver">
                                <h1 class="receiver">Message <span class="name">James Davey</span> </h1>
                            </div>
                            <div class="col-md-12 col-12 address_area">
                                <p class="address">Jame D. 13.05 8 Jun 21</p>
                                <p class="note">To complete your signup kindly
                                    confirmyour emailaddress by clicking on the linkin the email
                                    that we have</p>

                            </div>

                            <div class=" col-md-12 col-12 type_area">
                                <label for="" class="enter">Enter your message
                                    here</label>

                                <textarea name="wreview" id="message" class="text" rows="4"
                                    cols="50" required></textarea>
                            </div>
                            <div class="col-md-12 col-12 send">
                                <a href="#" onclick="sendMessage()" class="sending">Send my message</a>
                                <span href="#" style="display: none;" class="sendingloader">Sending.... 

                                    <div class="spinner-border" role="status" style="width: 10px; height: 10px;">
                                        <span class="sr-only">Loading...</span>
                                      </div>
                                </span>
                            </div>

                            {{-- <div class="col-md-12 rate_james">
                                <div class="rate">Rate James Dave.....</div>
                            </div> --}}
                        </div>
                        <div class="col-md-6 col-12 text_section nomessage" style="height: 10%;">
                            <div class="col-md-12 col-12">
                            <p class="address" style="margin: 51px;">Select Chat to send Message!</p></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
