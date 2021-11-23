<div class="modal fade abusereport " id="abusereports" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-triangle"></i>Report Abuse
                </h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <form id="form">
                    <div class="custome_container">
                        <div class="pic_info">
                            <div class="pic">
                                <img src="./img/Group410.png" alt="" class="image-fluid">
                            </div>
                            <div class="name">
                                <h3>{{ Auth::user()->UserDetail->fullname }}</h3>
                            </div>
                        </div>
                        <div class="report_title">
                            <label for="" class="title">
                                Enter your report title
                            </label>
                            <input type="text" class="title_text" name="text" id="text" required>
                        </div>
                        <div class="report">
                            <a href="#!" class="reporting">Reporting</a>
                        </div>
                        <div class="pic_info">
                            <div class="pic">
                                <img src="./img/Group410.png" alt="" class="image-fluid">
                            </div>
                            <div class="name nameto">
                                <h3>Jason Electrical Inc.</h3>
                            </div>
                        </div>
                        <div class="report_title">
                            <label for="" class="title">
                                Enter your report details here
                            </label>
                            <input type="text" class="reason_text" name="text2" id="text2" required>
                        </div>
                        <div class="send">
                            <a href="#!" class=" btn sending">Send my report</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
