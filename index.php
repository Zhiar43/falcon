


<!DOCTYPE html>
<!-- saved from url=(0053)https://demo2.silvertracker.net/Subscriber/Login.aspx -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="ROBOTS" content="NOINDEX, NOFOLLOW">


<title>
	Silvertrac
</title><link rel="shortcut icon" href="https://demo2.silvertracker.net/favicon.ico">
	
<!--[if lt IE 9]>  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="/Scripts/json3.min.js"></script>
<![endif]-->  
<!--[if gte IE 9]><!-->  
    <script src="./Silvertrac_files/jquery.min.js.download"></script>
<!--<![endif]--> 
	
    

	<script src="./Silvertrac_files/jquery-ui.js.download"></script>

	<script src="./Silvertrac_files/jquery-ui-timepicker-addon.js.download"></script>
	<script src="./Silvertrac_files/spin.min.js.download"></script><style type="text/css"></style>
	<script src="./Silvertrac_files/Common.js.download"></script>

	<link href="./Silvertrac_files/jquery-ui-timepicker-addon.css" rel="stylesheet"><link href="./Silvertrac_files/jquery-ui.css" rel="stylesheet"><link href="./Silvertrac_files/css" rel="stylesheet" type="text/css"><link href="./Silvertrac_files/css(1)" rel="stylesheet">

	<script lang="javascript">

		$(document).ready(function ()
		{
			$(document).tooltip();

			var d = new Date();
			$('#spnCopyYear').text(d.getFullYear());

		});

		function ShowWarningDialog(warningmessage)
		{
			jQuery("#alertmsg").html(warningmessage);
			jQuery("#warning").css("display", "inline");
			jQuery("#warning").dialog
				(
					{
						modal: true,

						buttons:
						{
							"Ok": function ()
							{
								jQuery("#warning").css("display", "none");
								jQuery(this).dialog("close");
							}
						}
					}
				);

		}

	</script>
<link rel="stylesheet" type="text/css" href="./Silvertrac_files/StyleSheet.css"></head>

<body>
    <form method="post" action="login.php" id="">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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">
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="./Silvertrac_files/WebResource.axd" type="text/javascript"></script>


<script src="./Silvertrac_files/ScriptResource.axd" type="text/javascript"></script>
<script src="./Silvertrac_files/ScriptResource(1).axd" type="text/javascript"></script>
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="3A40B262">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="EGQylSbAOJEUQn8RHbSV36SmhYoe725/8yReQIBA6XCda//Dd4zI4SrzZbuWc5VRnPYy1Z3I2YnPRViCjDhyUMSXROyGPKlpKdIYW0/niBIQr8qIhBe8P3tqtYOqYqN0LAL2ONTa7iTbpeB5ryVgWMd8CkeqD6w+zAwzN4tQH7mUuCSXA/VLi4K/n0slFB4KWa+LMVmRdGszXhat0GDeqQ==">
</div>
        <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', 'form1', [], [], [], 90, 'ctl00');
//]]>
</script>


        
        <div id="warning" title="Alert Message" style="display: none;">
            <p id="alertmsg" class="WarningLabelLarge"></p>
        </div>

        <div style="width: 975px; margin: auto;">
            <div>
                <div class="left">
                    <a id="hlHome" href="#">
                        <h1>Falcon Co. </h1>
                    </a>
                </div>

                <div class="right text-right" style="margin-top: 10px;">
                        <img id="imgSmallLogo" src="./Silvertrac_files/ResellerSmallLogoBlank.png" style="margin-right: 10px; vertical-align: middle;">
                        <input type="button" value="Login" style="vertical-align: middle;" onclick="Common.OpenWindow(&#39;/Subscriber/Login.aspx&#39;);">
                    
                </div>
            </div>

            <div>
                <div style="clear: both;">
                    <div><div class="NAVdropdown"><label class="NAVdropdownlabel" style="cursor: pointer;" onclick="Common.OpenWindow(&#39;/home.aspx&#39;)">Residents Area Home</label></div>|<div class="NAVdropdown"><label class="NAVdropdownlabel" style="cursor: pointer;" onclick="Common.OpenWindow(&#39;/Subscriber/NewPermitOrders/OrderPermit.aspx&#39;)">Register Vehicle</label></div>|<div class="NAVdropdown"><label class="NAVdropdownlabel">Report An Issue</label><div class="NAVdropdown-content"><label class="NAVmenuitem" onclick="window.location.href=&#39;/Subscriber/SecurityIssue/SecurityIssue.aspx&#39;" ;="">Security</label><label class="NAVmenuitem" onclick="window.location.href=&#39;/Subscriber/ParkingIssue/ParkingIssue.aspx&#39;" ;="">Parking</label><label class="NAVmenuitem" onclick="window.location.href=&#39;/Subscriber/MaintenanceIssue/MaintenanceIssue.aspx&#39;" ;="">Maintenance</label></div></div>|<div class="NAVdropdown"><label class="NAVdropdownlabel">Parking Violation</label><div class="NAVdropdown-content"><label class="NAVmenuitem" onclick="window.location.href=&#39;/Subscriber/Violation/PayViolation.aspx&#39;" ;="">View</label><label class="NAVmenuitem" onclick="window.location.href=&#39;/Subscriber/Violation/PayViolation.aspx&#39;" ;="">Pay</label><label class="NAVmenuitem" onclick="window.location.href=&#39;/Subscriber/Violation/PayViolation.aspx?2&#39;" ;="">Appeal</label></div></div>
                </div>
            </div>

            <div style="width: 975px; margin-top: 15px;">
                

    <script>

        $(function ()
        {

        });

        var Login = 
            {
                VerifyInfo: function()
                {
                    if (isEmpty($('#UserName').val()))
                    {
                        ShowWarningDialog('A User Name and Password are required');
                        return false;
                    }
                }
        
            }
            <?php

        if(isset($_GET["error"])){ ?>
             ShowWarningDialog('<?php echo $_GET["error"]; ?>');
        <?php } ?>

    </script>
   

    <div style="width: 380px; margin: 0 auto;">
        <table id="ContentPlaceHolder1_LoginItem" cellspacing="0" cellpadding="0" style="width:400px;border-collapse:collapse;">
	<tbody><tr>
		<td>
                <div>
                    <div class="DivHeaderLarge">Login</div>

                    <div class="DivBodyLarge" style="padding: 20px;">
                        <div>
                            <input name="username" type="text" id="UserName" class="right" style="width:200px;">
                            <label class="label-horizontal right">User Name</label>
                        </div>

                        <div>
                            <input name="password" type="password" id="Password" class="right" style="width:200px;">
                            <label class="label-horizontal right">Password</label>
                        </div>

                        <div class="text-center clear">
                            <input type="submit" name="ctl00$ContentPlaceHolder1$LoginItem$LoginButton" value="Log In" onclick="return Login.VerifyInfo();" id="LoginButton" style="margin: 15px;">
                        </div>

                    </div>
                </div>
            </td>
	</tr>
</tbody></table>

        
		


        <table id="ContentPlaceHolder1_PasswordRecovery1" cellspacing="0" cellpadding="0" style="width:400px;border-collapse:collapse;margin-top: 40px;">
	<tbody><tr>
		<td>
                <div>
                    <div class="DivHeaderLarge">Forgot Your Password?</div>
                    <div class="DivBodyLarge" style="padding: 20px;">

                        <div class="text-center">
                                <input name="ctl00$ContentPlaceHolder1$PasswordRecovery1$UserNameContainerID$UserName" type="text" id="ContentPlaceHolder1_PasswordRecovery1_UserNameContainerID_UserName" class="right" style="width:200px;">
                                <label class="label-horizontal right">User Name</label>
                        </div>
                            
                        <div class="text-center clear">
                            <input type="submit" name="ctl00$ContentPlaceHolder1$PasswordRecovery1$UserNameContainerID$SubmitButton" value="Submit" id="ContentPlaceHolder1_PasswordRecovery1_UserNameContainerID_SubmitButton" style="margin: 15px;">
                        </div>

                        <div class="text-center" style="margin-top: 15px;">
                            <label class="label" style="font-size: small;">Enter your User Name to receive your password</label>
                        </div>

                        
                        <div class="label" style="text-align: center;">
                            
                        </div>

                    </div>
                </div>
            </td>
	</tr>
</tbody></table>

    </div>

                <div class="text-center">
                    <label style="font-size: x-small;">© Copyright <span id="spnCopyYear">2022</span>Silvertrac Software, Inc.</label>
                </div>

            </div>
        </div>
    


</div></form></body></html>