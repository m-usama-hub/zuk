$(document).ready(function () {
    $(".alert").delay(5000).fadeOut("slow");
    $("#loginBtn").click(function (e) {
        $(this).html(
            `<div class="spinner-border" style="width: 20px; height: 20px;" role="status"><span class="sr-only">Loading...</span></div>`
        );

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        e.preventDefault();
        var email = $("input[name='login_email']").val();
        var password = $("input[name='login_password']").val();

        $.ajax({
            url: "/ajaxlogin",
            type: "POST",
            data: {
                email: email,
                password: password,
            },
            success: function (data) {
                if ($.isEmptyObject(data.error)) {
                    $("#loginBtn").html("Redirecting...");
                    // alert(data.success);
                    window.location = "/home";
                } else {
                    $("#loginBtn").html("SIGN IN");
                    printErrorMsg(data.error);
                }
            },
        });
    });

    function printErrorMsg(msg) {
        $("#print-error-msg-login").find("ul").html("");
        $("#print-error-msg-login").css("display", "block");
        $.each(msg, function (key, value) {
            $("#print-error-msg-login")
                .find("ul")
                .append("<li>" + value + "</li>");
        });
    }

    $('input[name="usertype"]').click(function (e) {
        var value = $('input[name="usertype"]:checked').val();
        if (value == "business") {
            $("#bname").css("display", "block");
            $("#bname").attr("required", "true");
        } else {
            $("#bname").css("display", "none");
            $("#bname").attr("required", "false");
        }
    });

    $("#create_business").click(function (e) {
        $(this).empty();

        $(this).parent().append(`
            <form action="/UpdateBusinessData" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="col-md-4 col-12 personal_box3">
                    <div class="header3">
                        <div class="upper_icon"><i class="far fa-edit" id="business_edit_but" style="cursor: pointer;"></i></div>
                        <div class="heading3">
                            <h1>Buisness Details</h1>
                        </div>
                    </div>
                    <div class="personal">
                        <div class="edit_profile3 person_edit_photo">
                            <img src="Frontend/img/buisness.png" alt="" class="img-fluid business_image w-25">
                            <i class="far fa-edit edit_business_logo edit_business_btn"  style="cursor: pointer; display:none;"></i>
                            <input type="file" name="business_logo" onchange="loadFileProfile(event)"
                                style="display: none;" id="business_logo"
                                accept="image/gif, image/jpeg, image/png">
                            <script>
                                function loadFileProfile(event) {
                                    $('.business_image').attr('src', URL.createObjectURL(event.target.files[0]))
                                };
                            </script>
                        </div>
                    </div>
                    <div class="photo_heading">
                        <h4>Profile photos</h4>
                    </div>
                    <div class="gr_photos">
                        <div class="custom_modal_swipper">
                            <img src="Frontend/img/Group413.png" alt="" class="pr_photo"
                            id="show_user_business_pic">
                            <div>
                                <div class="trash edit_business_btn" style="display: none;"><i class="fas fa-edit" id="edit_user_business_pic" style="cursor: pointer;"></i>
                                    <input type="file" name="user_business_pic"
                                        onchange="loadFileBusiness(event,'show_user_business_pic')"
                                        id="user_business_pic" style="display: none;" accept="image/gif, image/jpeg, image/png">
                                </div>
                                <script>
                                    function loadFileBusiness(event, id) {
                                        $('#' + id).attr('src', URL.createObjectURL(event.target.files[0]))
                                    };
                                </script>
                            </div>
                            <!-- Slider main container -->
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <p class="photo_heading">Profile videos</p>
                    </div>
                    <div class="gr_photos">
                        <div class="custom_modal_swipper">
                            <video class="pr_photo" controls id="show_user_business_video" src="Frontend/img/Group413.png"
                                style="border-radius: 16px;">
                            </video>
                            <div>
                                <div class="trash edit_business_btn" style="display: none;"><i class="fas fa-edit" id="edit_user_business_video" style="cursor: pointer;"></i>
                                    <input type="file" name="user_business_video"
                                        onchange="loadVideo(event,'show_user_business_video')"
                                        id="user_business_video" style="display: none;" accept="video/*">
                                </div>
                                <script>
                                    function loadVideo(event, id) {
                                        $('#' + id).attr('src', URL.createObjectURL(event.target.files[0]))
                                    };
                                </script>
                            </div>
                            <!-- Slider main container -->
                        </div>
                    </div>
                    <div class="form">
                        <label for="" class="labels">Buisness name</label>
                        <input type="text" name="business_name" class="textarea enable_business_edit" placeholder="James Electricals" >
                        <label for="" class="labels">Business phone</label>
                        <input type="number" name="business_phone" class="textarea enable_business_edit" placeholder="123 456 789" >
                        <label for="" class="labels">About my business</label>
                        <textarea name="business_details" id="" class="textarea enable_business_edit" cols="30" rows="10" ></textarea>
                        <label for="" class="labels">Business services</label>
                        <input type="text" class="textarea" placeholder="House rewiring Installations Inspections" disabled>

                        <div class="changepass">
                            <h4>Add a business service</h4>
                        </div>
                        <input type="text" class="p_textarea" placeholder="Service Name">
                        <input type="text" class="p_textarea" placeholder="Service description">
                    </div>

                <button class="btn btn-sm btn-primary edit_business_btn" type="submit"
                style="float: right;display: none;border-radius: 10px;"> Save</button>
                </div>
            </form>
        `);
    });

    $("#business_edit_but").click(function (e) {
        $(".enable_business_edit").attr("disabled", false);
        $(".edit_business_btn").css("display", "unset");
        $("#business_category_id").prop("disabled", false);
    });

    $("#profile_edit_but").click(function (e) {
        $(".enable_profile_edit").attr("disabled", false);
        $("#enable_profile_edit").css("display", "unset");
        $(".edit").css("display", "unset");
    });

    $("#open_edit").click(function (e) {
        $(".edit_btn").css("display", "unset");
        $("#about_me").attr("disabled", false);
    });

    $(".edit").click(function (e) {
        $("#profile_pic").trigger("click");
    });

    $(".edit_business_logo").click(function (e) {
        $("#business_logo").trigger("click");
    });

    $("#edit_user_profile_pic").click(function (e) {
        $("#user_profile_pic").trigger("click");
    });

    $("#edit_user_profile_video").click(function (e) {
        $("#user_profile_video").trigger("click");
    });

    $("#edit_user_business_pic").click(function (e) {
        $("#user_business_pic").trigger("click");
    });

    $("#edit_user_business_video").click(function (e) {
        $("#user_business_video").trigger("click");
    });

    $("#add_new_interest").click(function (e) {
        $("#add_new_interest_inputs").css("display", "flex");
    });

    $("#add_new_business").click(function (e) {
        $("#add_new_business_inputs").css("display", "flex");
    });

    $("#add_new").click(function (e) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        e.preventDefault();
        var interest = $("#interest_name").val();
        if (interest != null) {
            $.ajax({
                url: "/addUserInterest",
                type: "POST",
                data: {
                    interest: interest,
                },
                success: function (data) {
                    if (data.message == "") {
                        $("#all_interset").empty();
                        data.interest.forEach((interest) => {
                            $("#all_interset").append(
                                `
                                <i>` +
                                    interest.interest +
                                    ` <i class="fas fa-trash" data-toggle="tooltip" data-original-title="Delete" style="cursor: pointer;"></i></i><br>
                            `
                            );
                        });
                    } else {
                        alert(data.message);
                    }
                },
            });
        }
    });

    $("#add_new_business_service").click(function (e) {
        $(this).prop("disabled", true);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        e.preventDefault();
        var service_name = $("#service_name").val();
        if (service_name != null) {
            $.ajax({
                url: "/addUserBusinessService",
                type: "POST",
                data: {
                    service_name: service_name,
                },
                success: function (data) {
                    if (data.message == "") {
                        $("#all_business_services").empty();
                        data.service.forEach((service) => {
                            $("#all_business_services").append(
                                `
                                <i>` +
                                    service.service_name +
                                    ` <i class="fas fa-trash" data-toggle="tooltip" data-original-title="Delete" style="cursor: pointer;"></i></i><br>
                            `
                            );
                        });
                        $("#add_new_business_service").prop("disabled", false);
                    } else {
                        $("#add_new_business_service").prop("disabled", false);
                        alert(data.message);
                    }
                },
            });
        }
    });

    $("#all_interset").delegate(".fa-trash", "click", function (e) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        e.preventDefault();
        var interest = $(this).parent().text();

        $.ajax({
            url: "/deleteUserInterest",
            type: "POST",
            data: {
                interest: interest,
            },
            success: function (data) {
                if (data.message == "") {
                    $("#all_interset").empty();
                    data.interest.forEach((interest) => {
                        $("#all_interset").append(
                            `
                            <i>` +
                                interest.interest +
                                ` <i class="fas fa-trash" data-toggle="tooltip" data-original-title="Delete" style="cursor: pointer;"></i></i><br>
                        `
                        );
                    });
                } else {
                    alert(data.message);
                }
            },
        });
    });

    $("#all_business_services").delegate(".fa-trash", "click", function (e) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        e.preventDefault();
        var service_name = $(this).parent().text();

        $.ajax({
            url: "/deleteUserBusinessService",
            type: "POST",
            data: {
                service_name: service_name,
            },
            success: function (data) {
                if (data.message == "") {
                    $("#all_business_services").empty();
                    data.service.forEach((service) => {
                        $("#all_business_services").append(
                            `
                            <i>` +
                                service.service_name +
                                ` <i class="fas fa-trash" data-toggle="tooltip" data-original-title="Delete" style="cursor: pointer;"></i></i><br>
                        `
                        );
                    });
                } else {
                    alert(data.message);
                }
            },
        });
    });

    $(".update_privacy_settings").click(function (e) {
        var data = {
            id: $(this).attr("name"),
        };

        CallAction("/UpdatePrivacySettings", data);
    });

    if(Auth){

        paypal
            .Buttons({
                createOrder: function (data, actions) {
                    // This function sets up the details of the transaction, including the amount and line item details.
                    return actions.order.create({
                        application_context: {
                            user_action: "PAY_NOW",
                        },
                        purchase_units: [
                            {
                                amount: {
                                    value: $(".credits:checked").val(),
                                },
                            },
                        ],
                    });
                },

                onApprove: function (data, actions) {
                    var Postdata = {
                        amount: $(".credits:checked").val(),
                    };
                    CallAction("/paymentPost", Postdata, function (data) {
                        if (data) {
                            alert("Payment Successfull.");
                        } else {
                            alert("First create business account to make payments");
                        }
                    });
                },

                onCancel: function (data) {
                    alert("Payment Cancelled");
                },
            })
            .render("#paypal-button");

    }


    $("#VerifyPhoneNo").click(function (e) {
        $(".media").css("display", "none");
        $(".loader").css("display", "block");

        CallAction("/phone/verify", null, function (data) {
            if (data.status == true) {
                $(".loader").css("display", "none");
                $(".verified").html("Verify Contact No");
                $("#SMSresponse").html(data.message);
                $(".enter_code").css("display", "unset");
            } else {
                $(".verified").html("Verified");
                $(".media").css("display", "flex");
                $(".loader").css("display", "none");
                $("#SMSresponse").html("Something went Wrong..!");
            }
        });
    });

    $("#verification_click").click(function (e) {
        var code = $("#verification_code").val();

        var data = {
            code: code,
        };

        $(".parent_div").css("display", "none");
        $(".loader").css("display", "block");
        $(".enter_code").css("display", "none");

        CallAction("/phone/verify/code", data, function (data) {
            if (data.status == true) {
                // $('.parent_div').css('display','unset');
                $(".media").css("display", "flex");
                $(".loader").css("display", "none");
                $(".verified").html("Verified");
                $("#SMSresponse").css("display", "none");
                $(".enter_code").css("display", "none");
                $("#VerifyPhoneNo").css("display", "none");
                $(".fa-times").toggleClass("fas fa-times  fas fa-check");
            } else {
                $(".verified").html("Verify Contact No");
                $(".media").css("display", "none");
                $(".loader").css("display", "none");
                $("#SMSresponse").html(data.message);
                $(".enter_code").css("display", "block");
            }
        });
    });

    $("#freeitem").on("change", function () {
        var val = this.checked ? this.value : "";
        if (val == 1) {
            $("#itemPrice").parent().css("display", "none");
        } else {
            $("#itemPrice").parent().css("display", "flex");
        }
    });

    var quality_rating = 0;
    var timeliness_rating = 0;
    var cleanliness_rating = 0;
    var budget_rating = 0;
    var coummunication_rating = 0;

    function ShowAvgRating() {
        let avg = 0;
        avg =
            (parseFloat(quality_rating) +
                parseFloat(timeliness_rating) +
                parseFloat(cleanliness_rating) +
                parseFloat(budget_rating) +
                parseFloat(coummunication_rating)) /
            5;

        $("#setAvg").html(avg);
    }

    $('input[name="quality_rating"]:radio').change(function () {
        var a = $('input[name="quality_rating"]:checked').val();
        for (let index = 0; index < 5; index++) {
            if (index < a) {
                $("#st" + (index + 1)).css("color", "#fed112");
            } else {
                $("#st" + (index + 1)).css("color", "gray");
            }
        }

        quality_rating = a;
        console.log(a);
        ShowAvgRating();
    });

    $('input[name="timeliness_rating"]:radio').change(function () {
        var a = $('input[name="timeliness_rating"]:checked').val();
        for (let index = 0; index < 5; index++) {
            if (index < a) {
                $("#sttimeliness" + (index + 1)).css("color", "#fed112");
            } else {
                $("#sttimeliness" + (index + 1)).css("color", "gray");
            }
        }
        console.log(a);
        timeliness_rating = a;
        ShowAvgRating();
    });

    $('input[name="cleanliness_rating"]:radio').change(function () {
        var a = $('input[name="cleanliness_rating"]:checked').val();
        for (let index = 0; index < 5; index++) {
            if (index < a) {
                $("#stCleanliness" + (index + 1)).css("color", "#fed112");
            } else {
                $("#stCleanliness" + (index + 1)).css("color", "gray");
            }
        }
        console.log(a);
        cleanliness_rating = a;
        ShowAvgRating();
    });

    $('input[name="budget_rating"]:radio').change(function () {
        var a = $('input[name="budget_rating"]:checked').val();
        for (let index = 0; index < 5; index++) {
            if (index < a) {
                $("#stbudget" + (index + 1)).css("color", "#fed112");
            } else {
                $("#stbudget" + (index + 1)).css("color", "gray");
            }
        }
        console.log(a);
        budget_rating = a;
        ShowAvgRating();
    });

    $('input[name="coummunication_rating"]:radio').change(function () {
        var a = $('input[name="coummunication_rating"]:checked').val();
        for (let index = 0; index < 5; index++) {
            if (index < a) {
                $("#stcoummunication" + (index + 1)).css("color", "#fed112");
            } else {
                $("#stcoummunication" + (index + 1)).css("color", "gray");
            }
        }
        console.log(a);
        coummunication_rating = a;
        ShowAvgRating();
    });

    $(".preview_form_data").click(function (e) {
        let form = $(this).closest("form");

        if (form.validate()) {
            form.find("[name='draft']", "[name='publish']").remove();
    
            form.append(
                '<input type="hidden" name="preview" value="true" />'
            ).submit();
        }
    });

    $(".draft_form_data").click(function (e) {
        let form = $(this).closest("form");

        if (form.validate()) {
            form.find("[name='preview']", "[name='publish']").remove();
    
            form.append(
                '<input type="hidden" name="draft" value="true" />'
            ).submit();
        }
    });

    $(".publish_form_data").click(function (e) {
        let form = $(this).closest("form");

        if (form.validate()) {
            form.find("[name='preview']", "[name='draft']").remove();
    
            form.append(
                '<input type="hidden" name="publish" value="true" />'
            ).submit();
        }
    });
});

// function preview(event) {
//     let form = $(event).closest("form");

//     if (form.validate()) {
//         form.find("[name='draft']", "[name='publish']").remove();

//         form.append(
//             '<input type="hidden" name="preview" value="true" />'
//         ).submit();
//     }
// }

// function draft(event) {
//     $(event).closest("form").validate();
//     $(event)
//         .closest("form")
//         .find("[name='preview']", "[name='publish']")
//         .remove();
//     $(event)
//         .closest("form")
//         .append('<input type="hidden" name="draft" value="true" />')
//         .submit();
// }

// function publish(event) {
//     $(event).closest("form").validate();
//     $(event)
//         .closest("form")
//         .find("[name='preview']", "[name='draft']")
//         .remove();

//     $(event)
//         .closest("form")
//         .append('<input type="hidden" name="publish" value="true" />')
//         .submit();
// }

function UploadUsing(event, type = null) {
    var accept = 'accept="image/png, image/jpeg"';
    if (type == "camera") {
        accept = 'accept="image/*" capture';
    }
    $(event)
        .parent()
        .parent()
        .find(".UploadImageElement")
        .attr("accept", accept)
        .click();
}

function loadFile(event, id) {
    $("#" + id).attr("src", URL.createObjectURL(event.target.files[0]));
}

function deletePost(table, id, key) {
    $("#mypost" + key)
        .children()
        .css("display", "none");
    $("#mypost" + key).append(
        `<div class="spinner-border" style="margin: 72px 72px 73px 250px;" role="status"><span class="sr-only">Loading...</span></div>`
    );

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        url: "/deletePost",
        type: "POST",
        data: {
            table: table,
            id: id,
        },
        success: function (data) {
            if (data.status == true) {
                $("#mypost" + key)
                    .find(".spinner-border")
                    .remove();
                $("#mypost" + key)
                    .children()
                    .remove();
                $("#mypost" + key).append("<p>" + data.message + "</p>");
                setTimeout(function () {
                    $("#mypost" + key).remove();
                }, 3000);
            } else {
                $("#mypost" + key)
                    .find(".spinner-border")
                    .remove();
                $("#mypost" + key)
                    .children()
                    .css("display", "flex");

                alert(data.message);
            }
        },
    });
}

function getPostData(table, id, key, modalId) {
    $(".loader").css("display", "flex");
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        url: "/getPostData",
        type: "get",
        data: {
            table: table,
            id: id,
        },
        success: function (data) {
            if (data.status == true) {
                response = data.response;

                delete response.photo;

                const keys = Object.keys(response);

                keys.forEach((key, index) => {
                    if (`${key}` == "cover_image") {
                        $("#" + modalId)
                            .find(".img_background")
                            .find(".img-fluid")
                            .attr("src", `${response[key]}`);
                    } else if (
                        `${key}` == "isProfilePhotoPrivate" ||
                        `${key}` == "isPhonePrivate" ||
                        `${key}` == "isEmailPrivate" ||
                        `${key}` == "available_now" ||
                        `${key}` == "price_free"
                    ) {
                        var isChecked = `${response[key]}` == 1 ? true : false;

                        $("#" + modalId)
                            .find("[name=" + `${key}` + "]")
                            .prop("checked", isChecked);
                    } else if (
                        `${key}` == "interested_in" ||
                        `${key}` == "room_type" ||
                        `${key}` == "room_capacity" ||
                        `${key}` == "delivery_type" ||
                        `${key}` == "item_category_id" ||
                        `${key}` == "isFeatured"
                    ) {
                        $("#" + modalId)
                            .find("[name=" + `${key}` + "]")
                            .val(`${response[key]}`)
                            .change();
                    } else {
                        $("[name=" + `${key}` + "]").val(`${response[key]}`);
                    }
                });

                var formAction = $("#" + modalId)
                    .find("form")
                    .attr("action");

                var newFromAction = formAction + "?id=" + id + "&edit=true";

                $("#" + modalId)
                    .find("form")
                    .attr("action", newFromAction);

                $("#" + modalId).modal("toggle");
            } else {
                alert(data.message);
            }
            $(".loader").css("display", "none");
        },
    });
}

function DoUnfav(id, table, key = null, heartId = null) {
    if (key != null) {
        $("#myfav" + key)
            .children()
            .css("display", "none");
        $("#myfav" + key).append(
            `<div class="spinner-border" style="margin: 72px 72px 73px 250px;" role="status"><span class="sr-only">Loading...</span></div>`
        );
    }

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        url: "/DoUnfav",
        type: "post",
        data: {
            table: table,
            id: id,
        },
        success: function (data) {
            if (data.status == true) {
                if (key != null) {
                    $("#myfav" + key)
                        .find(".spinner-border")
                        .remove();
                    $("#myfav" + key)
                        .children()
                        .remove();
                    // $("#myfav" + key).append("<p>" + data.message + "</p>");
                    // setTimeout(function () {
                    //     $("#myfav" + key).remove();
                    // }, 3000);
                    location.reload();
                } else {
                    $("#" + heartId)
                        .parent()
                        .children()
                        .remove()
                        .append(
                            `
                        <i class="far fa-heart"
                        id="` +
                                heartId +
                                `"
                        onclick="favToggle(` +
                                id +
                                `,` +
                                table +
                                `,null,this.id)"></i>
                    `
                        );
                    location.reload();
                }
            } else {
                if (key != null) {
                    $("#myfav" + key)
                        .find(".spinner-border")
                        .remove();
                    $("#myfav" + key)
                        .children()
                        .css("display", "flex");
                }
                alert(data.message);
            }
        },
    });
}

function Dofav(id, table, model) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        url: "/Dofav",
        type: "post",
        data: {
            table: table,
            model: model,
            id: id,
        },
        success: function (data) {
            if (data.status == true) {
                // if (key != null) {
                //     $("#myfav" + key)
                //         .find(".spinner-border")
                //         .remove();
                //     $("#myfav" + key)
                //         .children()
                //         .remove();
                //     $("#myfav" + key).append("<p>" + data.message + "</p>");
                //     setTimeout(function () {
                //         $("#myfav" + key).remove();
                //     }, 3000);
                // }

                location.reload();
            } else {
                alert(data.message);
            }
        },
    });
}

function OpenRatingModal(company, services, address, business_id) {
    $("#rateme").find("#company").html(company);
    $("#rateme").find("#services").html(services);
    $("#rateme").find("#address").html(address);
    $("#rateme").find("#business_id").val(business_id);
    $("#rateme").modal("show");
}