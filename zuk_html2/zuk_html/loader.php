<!DOCTYPE html>
<html>
    <head>
        <title>JQuery File upload progress bar with file size validation</title>
        <style type="text/css">
            #file_error{ color: red; }
            #bar{ width:0%; margin:4px 0; height:32px;  background-color:#4298c8; }
            #percent{ text-align: center; color: #fffff;}
            #status{ color:#ffffff; }
            .form-field{ padding: 5px;}
            #loader{ display: none; position: absolute; z-index: 9999; padding-top: 80px; padding-left: 25%;}
            .formblock{ border:3px solid #892525; border-radius: 4px; width: 400px; margin: 30px auto; padding:4px;}
            #cfsubmit { background: #892525; border-radius: 3px; color: #fff; padding: 3px 7px;}
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
        <script type="text/javascript">
            $(function() {
            $(document).ready(function(){ 
                $('#cfsubmit').click(function(){ 
                    uploadform();
                });
            });
            });
            function uploadform(){
                var bar = $('#bar');
                var percent = $('#percent');
                var status = $('#statusbar'); 
                $('form').ajaxForm({
                    beforeSend: function(xhr) {
                        $("div.container").css({"opacity": "0.5"});
                        status.empty();
                        var percentVal = '0%';
                        bar.width(percentVal);
                        percent.html(percentVal);
                        $(".container").css({"opacity": "1"});
                        $(".container").css({"background": "none"});
                    },
                    uploadProgress: function(event, position, total, percentComplete) {
                        var percentVal = percentComplete + '%';
                        $('#percent').html(percentVal);
                        $('#bar').width(percentVal); 
                    },
                    complete: function(xhr) {
                        window.location = "index.php?msg=success"
                    }
                });
            }
        </script>
    </head>
    <body>
        <div class="formblock" style="opacity: 1;">
		<form action="" method="post" enctype="multipart/form-data">

            <div class="form-field">
                <label for="example-text-input" class="col-xs-4 col-form-label" >Upload File: </label>
                <input type="file" name="file[]" id="file"/>
            </div>
            <div id="file_error"></div>
            <div id="bararea">
                <div id="bar">
                    <div id="percent"></div>
                </div>
            </div>
            <div id="statusbar"></div>
            <div class="form-field">
                <label for="example-text-input" class="col-xs-4 col-form-label" ></label>
                <input type="submit" name="submit" id="cfsubmit" value="Submit"/> 
            </div>
		</form>
        </div>
    </body>
</html>