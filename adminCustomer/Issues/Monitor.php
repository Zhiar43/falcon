<!DOCTYPE html>
<!-- saved from url=(0065)https://demo2.silvertracker.net/AdminCustomer/Issues/Monitor.aspx -->
<html class="t-chrome t-chrome97"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="ROBOTS" content="NOINDEX, NOFOLLOW">

<title>
	Issue Tracking System
</title>
	<style type="text/css">

    .fancybox-opened
    {
        z-index: 100003 !important;
    }

    .wistia-fancybox #fancybox-overlay
    {
        z-index: 100001 !important;
    }



		.no-fouc
		{
			display: none;
		}

		.ui-dialog
		{
			z-index: 1000000 !important;
		}

		.ui-front
		{
			
		    z-index: 999999 !important;
		}

		.ui-widget-overlay
		{
			z-index: 999998 !important;
		}

		.ui-menu
		{
			width: 150px;
		}

		#menu
		{
			font-family: Roboto;
			
			margin: 0px;
			background-color: transparent;
			border: none;
			display: inline-block;
            color: gray;
		}

			#menu .k-item
			{
				font-family: Roboto;
                color: gray;
				background-color: transparent;
				border: none;
			}

		.k-menu .k-item .k-state-hover:hover
		{
			background-color: #03508e !important;
		}   
   
        /*REMOVES DROP DOWN ARROWS*/

        .k-menu .k-i-arrow-s 
        {
            display: none;
        }
        
        

            

  </style>

  	<!-- Bootstrap css & Script -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<link rel="shortcut icon" href="https://demo2.silvertracker.net/AdminCustomer/favicon.ico">
	<script type="text/javascript" async="" src="./Monitor_files/j8m4vnc4"></script><script src="./Monitor_files/jquery.min.js.download"></script>
	<script src="./Monitor_files/jquery-ui.min.js.download"></script>
	<script src="./Monitor_files/jquery-ui-timepicker-addon.js.download"></script>
	<script src="./Monitor_files/spin.min.js.download"></script><style type="text/css"></style>
	<script src="./Monitor_files/Common.js.download"></script>
	<script src="./Monitor_files/DTM.js.download"></script>
	<script src="./Monitor_files/jquery.easyModal.js.download"></script>
	
    <script async="" defer="" src="./Monitor_files/js" type="text/javascript"></script>
    

	
	
	
    <script charset="ISO-8859-1" src="./Monitor_files/popover-v1.js.download"></script>
    

	<link href="./Monitor_files/jquery-ui.css" rel="stylesheet"><link href="./Monitor_files/jquery-ui-timepicker-addon.css" rel="stylesheet">
	
	<script src="./Monitor_files/kendo.all.min.js.download"></script>
	<link href="./Monitor_files/kendo.common.min.css" rel="stylesheet"><link href="./Monitor_files/kendo.default.min.css" rel="stylesheet"><link href="./Monitor_files/css" rel="stylesheet" type="text/css"><link href="./Monitor_files/css(1)" rel="stylesheet">
    
    <script src="./Monitor_files/moment.min.js.download"></script>
    <link href="./Monitor_files/pikaday.css" rel="stylesheet">
    <script src="./Monitor_files/pikaday.js.download"></script>
    
    <link href="./Monitor_files/jquery.datetimepicker.min.css" rel="stylesheet">
    <script src="./Monitor_files/jquery.datetimepicker.full.min.js.download"></script>



	<script type="text/javascript">
		document.documentElement.className = 'no-fouc';
	</script>

	<script type="text/javascript">

		var CheckForAlert;

		function CheckAlert()
		{
		    var d = new Date();

			$.getJSON("/Alert.json?r=" + d, function (data)
			{
                
				$('#divUrgentMessages').empty();
				$('#divUrgentMessages').text(data[0].alertmessage);

			});
		}

		$(document).ready(function ()
		{
			$('.no-fouc').removeClass('no-fouc');

			// Check every 2 minutes for an alert message
			CheckAlert();

			CheckForAlert = setInterval(function () { CheckAlert() }, 120000);

			var d = new Date();
			$('#spnCopyYear').text(d.getFullYear());


			var iOS = false,
			p = navigator.platform;

            // DO THIS AS THE TOOLTIPS DO NOT WORK RIGHT ON A MAC!!
			if (p === 'iPad' || p === 'iPhone' || p === 'iPod' || p === 'Macintosh' || p === 'MacIntel')
			//if (p === 'iPad' || p === 'iPhone' || p === 'iPod')
			{

			    $('select').css("background", "url('/images/greydownarrow.png')  no-repeat right ");
			    $('select').css('background-color', '#d6dfe0');
			    $('select').css('-webkit-appearance', 'none');
			    $('select').css('background-size', '15px');
			    $('select').css('border-radius', '1px');

			}
			else
			{
			


				//$(document).tooltip({
				//	content: function ()
				//	{
				//		return $(this).prop('title');
				//	},
				//	show: { delay: 750 }
				//});
			}
			
			//$('select').css('background', 'green');

	

			$("form input").keypress(function (e)
			{

				console.log(e.which);

				//if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13) || (e.keyCode && e.keyCode == 13) || (e.keyCode && e.keyCode == 13))
				if ($.inArray(e.which, [13,34,39,124,94]) >= 0)
				{
					e.preventDefault();
					//alert('click');
					//$('.defaultclick').click();
					//return false;
				} else
				{
					return true;
				}
			});


			$("form textarea").keypress(function (e)
			{

			    //console.log(e.which);
                // 34 - apost, 39 - double quote,

			    if (USN == 'ttt')
			        return true;

				//if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13) || (e.keyCode && e.keyCode == 13) || (e.keyCode && e.keyCode == 13))
				if ($.inArray(e.which, [34, 39, 124, 94]) >= 0)
				{
					e.preventDefault();
					//alert('click');
					//$('.defaultclick').click();
					//return false;
				} else
				{
					return true;
				}
			});


			EnableToolTips();



			$("#menu").kendoMenu({ hoverDelay: 0 });
			

		});

		function EnableToolTips()
		{

			var Tips = new Object();

			$.ajax({
				type: "POST",
				contentType: "application/json; charset=utf-8",
				url: "/WebServices/Monitor.asmx/GetToolTipStatus",
				data: JSON.stringify(Tips),
				dataType: "json",
				success: function (msg)
				{
					var obj = JSON && JSON.parse(msg.d);

					$('#chkEnableToolTips').prop('checked', obj[0].ToolTipsEnabled);

				},
				error: function (msg)
				{
				//	ShowWarningDialog('Unable to Check the ToolTips');
				//	Common.LogAjaxError('AdminCustomer.master', 'EnableToolTips', msg.responseJSON.Message);
				}
			});
		}

		function SetToolTips()
		{
			// Get a list of users for searching/assignment
			var Filter = new Object();

			Filter.Key = 'EnableToolTips';
			Filter.Value = $('#chkEnableToolTips').prop('checked');

			$.ajax({
				type: "POST",
				contentType: "application/json; charset=utf-8",
				url: "/WebServices/Monitor.asmx/SetProfileParameter",
				data: JSON.stringify(Filter),
				dataType: "json",
				success: function (msg)
				{
				},
				error: function (msg)
				{
					ShowWarningDialog('Unable to set filter');
					Common.LogAjaxError('AdminCustomer.master', 'SetMonitorFilter', msg.responseJSON.Message);
				}
			});
		}

		function OpenHelp()
		{
		    Common.LogIntercomEvent('HelpClicked');
		    //window.open('http://www.silvertracsoftware.com/support?utm_campaign=Support&utm_medium=Link%20from%20within%20Silvertrac%20App&utm_source=Silvertrac%20Support%20Center', '_Help');
		    window.open('http://help.silvertracsoftware.com', '_Help');
					
		}

		function OpenMonitor()
		{
		    window.location.href = "/AdminCustomer/Issues/Monitor.aspx";

		}


	</script>

<link rel="stylesheet" type="text/css" href="./Monitor_files/StyleSheet.css"><link href="./Monitor_files/WebResource.axd" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><script type="text/javascript" charset="UTF-8" src="./Monitor_files/Common.js(1).download"></script><script type="text/javascript" charset="UTF-8" src="./Monitor_files/util.js.download"></script></head>

<body>
	
	<!-- <div id="spinbox" style="display: none;">
		<div style="text-align: center; margin-top: 7px;"><label id="spinboxLabel">Loading...</label></div>
	</div> -->



	<div id="warning" title="Alert Message" style="display: none; z-index: 2000000">
		<p id="alertmsg" class="WarningLabelLarge"></p>
	</div>

	<form method="post" action="https://demo2.silvertracker.net/AdminCustomer/Issues/Monitor.aspx" id="form1" enctype="multipart/form-data">
<div class="aspNetHidden">
<input type="hidden" name="fuAttachmentUpload_ClientState" id="fuAttachmentUpload_ClientState" value="">
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


<script src="./Monitor_files/WebResource(1).axd" type="text/javascript"></script>


<script type="text/javascript">
//<![CDATA[
var AllowParkingProgram = true; var AllowAdvancedParkingProgram = false; var AllowSecurityProgram = true; var AllowMaintenanceProgram = true; var AllowGPSViewing = true; var RoleName = 'Employee - Administrator'; var USN = 'adamlee'; var CU = 'G: Falcon Patrol Protection - (Austin, TX)'; var ANE = true; var CUID = '57066'; var FN = 'Adam'; var LN = 'Lee'; var EM = 'adamlee@falconpatrol.com'; var UID = '63722'; var SKey = false;var LTE = false;//]]>
</script>

<script src="./Monitor_files/Intercom.js.download" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource.axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(1).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(2).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(3).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(4).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(5).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(6).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(7).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(8).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(9).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(10).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(11).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(12).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(13).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(14).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(15).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(16).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(17).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(18).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(19).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(20).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(21).axd" type="text/javascript"></script>
<script src="./Monitor_files/ScriptResource(22).axd" type="text/javascript"></script>
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="1896EEF8">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="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">
</div>

		<script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('AdminCustomer$ScriptManager1', 'form1', [], [], [], 90, 'AdminCustomer');
//]]>
</script>


		<div id="divMain" style="width: 975px; margin: auto;">

			<div style="width: 975px;">
				<div id="divMainLogo" style="float: left;">
					<a id="hlMainLogo" href="https://demo2.silvertracker.net/Home.aspx" style="display:inline-block;border-style:None;"><img src="./Monitor_files/ReadStaticBinaryFile.aspx" style="border-style:None;max-width:550px;max-height:70px;padding-top:7px;"></a>
				</div>
				<div id="divQuickBar" class="QuickBarBackground">
                    
                    <input type="button" value="Issue Monitor" onclick="OpenMonitor();">
					<a href="../../index.php" class="btn btn-primary">Logout</a>
					<input type="button" class="HelpButton" value="Help" onclick="OpenHelp();">

    
					<div>
						

						<div style="float: right; font-size: x-small; margin: 5px 5px 5px 5px;"><label style="line-height: 1; min-height: 0px;">User: <b>(A) ADAMLEE</b></label><br><label style="line-height: 1; min-height: 0px;">ID:</label> <b>57066</b></div>
						<div style="float: right; font-size: x-small; margin: 10px 5px 5px 5px; vertical-align: top; display: none;">Tips: <input type="checkbox" id="chkEnableToolTips" onclick="SetToolTips();" title="This will enable/disable the help tool tips." style="margin-top: 0px;"></div>
						
					</div>
				</div>
			</div>
			<div style="clear: both;"></div>
			<div id="Div4" style="text-align: center;">
				
				<div><div class="NAVdropdown"><label class="NAVdropdownlabel">Issues</label><div class="NAVdropdown-content"><label class="NAVmenuitem" onclick="window.location.href=&#39;/AdminCustomer/Issues/Monitor.aspx&#39;" ;="">Issue Monitor</label><label class="NAVmenuitem" onclick="window.location.href=&#39;/AdminCustomer/Issues/Monitor.aspx?NewAction=true&#39;" ;="">New Action</label><label class="NAVmenuitem" onclick="window.location.href=&#39;/AdminCustomer/GPS/GPSMap2.aspx&#39;" ;="">GPS Map</label></div></div>|<div class="NAVdropdown"><label class="NAVdropdownlabel">Properties</label><div class="NAVdropdown-content"><label class="NAVmenuitem" onclick="window.location.href=&#39;/AdminCustomer/Properties/PropertyEdit.aspx&#39;" ;="">Property Maintenance</label><label class="NAVmenuitem" onclick="window.location.href=&#39;/AdminCustomer/Groups/EditGroupMembers.aspx&#39;" ;="">Group Management</label></div></div>|<div class="NAVdropdown"><label class="NAVdropdownlabel">Reporting</label><div class="NAVdropdown-content"><label class="NAVmenuitem" onclick="window.location.href=&#39;/AdminCustomer/reports/reporting.aspx&#39;" ;="">All Reports</label><label class="NAVmenuitem" onclick="window.location.href=&#39;/AdminCustomer/reports/reports.aspx&#39;" ;="">All Reports (Legacy)</label></div></div>|<div class="NAVdropdown"><label class="NAVdropdownlabel">Users</label><div class="NAVdropdown-content"><label class="NAVmenuitem" onclick="window.location.href=&#39;/AdminCustomer/Users/NewUser.aspx&#39;" ;="">Add New User</label><label class="NAVmenuitem" onclick="window.location.href=&#39;/AdminCustomer/Users/EditUser.aspx&#39;" ;="">Edit User</label><label class="NAVmenuitem" onclick="window.location.href=&#39;/AdminCustomer/Users/ChangePassword.aspx&#39;" ;="">Change Password</label><label class="NAVmenuitem" onclick="window.location.href=&#39;/AdminCustomer/Issues/Notifications.aspx&#39;" ;="">Edit Notifications</label></div></div>|<div class="NAVdropdown"><label class="NAVdropdownlabel">System</label><div class="NAVdropdown-content"><label class="NAVmenuitem" onclick="window.location.href=&#39;/AdminCustomer/System/SystemConfig.aspx&#39;" ;="">System Config</label><label class="NAVmenuitem" onclick="window.location.href=&#39;/AdminCustomer/System/DeviceMaintenance.aspx&#39;" ;="">Device Maintenance</label></div></div>|<div class="NAVdropdown"><label class="NAVdropdownlabel">Management</label><div class="NAVdropdown-content"><label class="NAVmenuitem" onclick="window.location.href=&#39;/AdminCustomer/ManagementCompany/NewManagement.aspx&#39;" ;="">New Management Company</label><label class="NAVmenuitem" onclick="window.location.href=&#39;/AdminCustomer/ManagementCompany/EditManagement.aspx&#39;" ;="">Edit Management Company</label></div></div></div>
			</div>

			<div id="divUrgentMessages" class="WarningLabel"></div>

			<div id="divMasterContent" style="width: 975px;">
				
	<script src="./Monitor_files/GPSMap2.js.download"></script>


        
	<script>

		function pageLoad()
		{
			if (isEmpty(getUrlVars()["NewAction"]) == false)
			{
				CreateNewIssue();
			}
		}

		function getUrlVars()
		{
			var vars = {};
			var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value)
			{
				vars[key] = value;
			});
			return vars;
		}

		var LastReceivedChatMessageID = 0;
		var RefreshChat = null;

		var RefreshCounter;
		var names;
		var PerformReload = false;
		var count = 150;
		var RowAlternate = false;

		jQuery.fn.center = function ()
		{
			this.css("position", "fixed");
			this.css("top", ($(window).height() / 2) - (this.outerHeight() / 2));
			this.css("left", ($(window).width() / 2) - (this.outerWidth() / 2));

			return this;
		}

		// On load, do this stuff
		$(function ()
		{

			if (self != top)
			{
				return;
			}
		

//  Get customer info

			var Post = new Object()
			Post.Action = 'CustomerGetDetail';

			$.ajax({
			    type: "POST",
			    contentType: "application/json; charset=utf-8",
			    url: "/API/API.ashx",
			    data: JSON.stringify(Post),
			    dataType: "json",
                async: false,
                success: function (msg) {
                    // CUSTOMER INFO

                    if (msg[0].AllowParkingProgram == true)
                        $('#lblIncludeParking').show();
                    else
                        $('#lblIncludeParking').hide();


                    /////////////////////////////////////////////////////////
                    if (msg[0].AllowMaintenanceProgram == true)
			            $('#lblIncludeMaintenance').show();
			        else
			            $('#lblIncludeMaintenance').hide();

			        if (msg[0].AllowSecurityProgram == true)
			            $('#lblIncludeSecurity').show();
			        else
			            $('#lblIncludeSecurity').hide();

			        if (msg[0].AllowParkingProgram == false && msg[0].AllowAdvancedParkingProgram == false)
			            $('#imgVehicleSearch').hide();
			        
                    // NEED TO ADD THESE TO REMEMBER CHECKBOX STATE

			        $('#chkIncludeSecurity').prop('checked', true)
			        $('#chkIncludeParking').prop('checked', false)
			        $('#chkIncludeMaintenance').prop('checked', true)
			        $('#chkIncludeClosed').prop('checked', true)
			        //chkIncludeSecurity.Checked = HttpContext.Current.Profile.GetPropertyValue("IncludeSecurity")
                    /////////////////////////////////////////////////////////


                    if (msg[0].AllowPassdownNotes == true)
                    {
                        
                    }
                    else
                    {
                        $('#imgPropertyNotes').hide();
                    }


                                                                                                                           //  J.Didieu
                    
                    //Case "SANDERSON", "TTT", "", "G.SULLIVAN", "D.DELEON", "CANDERSON", "SILVERTRAC"

                    //if (USN.toUpperCase() == 'TTT' || USN.toUpperCase() == '' || USN.toUpperCase() == 'D.DELEON' || USN.toUpperCase() == 'G.SULLIVAN' || USN.toUpperCase() == 'SILVERTRAC' || USN.toUpperCase() == 'CANDERSON')
                    
                    if (isEmpty(SKey) == false);
                    {
                        if (SKey == true)
                        {
                            $('#imgUserMap').show();
                        }
			        }

			            

			        switch (RoleName)
			        {
			            case 'Customer - Single Property Manager':
			                break;


			            case 'Customer - Maintenance Worker':
			            case 'Customer - Maintenance Supervisor': 
			                $('#chkIncludeMaintenance').prop('checked', true)

			                $('#chkIncludeParking').hide();
			                $('#chkIncludeParking').prop('checked', false)

			                $('#schkIncludeSecurity').hide();
			                $('#schkIncludeSecurity').prop('checked', false)


			                break;


			            case 'Customer - Management Company User':
			                break;


			            case 'Employee - Guard':
			                break;


			            case 'Employee - Dispatcher':
			                $('#imgPropertyNotes').show();

			                if (msg[0].AllowUserMap == true)
			                    $('#imgUserMap').show();

			                if (msg[0].EnableChat == true)
                                $('#imgMessage').show();
                            else
                                $('#imgMessage').hide();

                            break;


			            case 'Employee - Administrator':
			                $('#imgPropertyNotes').show();

			                if (msg[0].AllowUserMap == true)
			                    $('#imgUserMap').show();

			                if (msg[0].EnableChat == true)
			                    $('#imgMessage').show();
			                else
			                    $('#imgMessage').hide();


			                if (msg[0].EnableTimeCard == true)
			                    $('#imgTimeClock').show();
			                else
			                    $('#imgTimeClock').hide();

			                break;

			            case 'Employee - Supervisor':
			                $('#imgPropertyNotes').show();

			                if (msg[0].AllowUserMap == true)
			                    $('#imgUserMap').show();

			                if (msg[0].EnableChat == true)
			                    $('#imgMessage').show();
			                else
			                    $('#imgMessage').hide();


			                if (msg[0].EnableTimeCard == true)
			                    $('#imgTimeClock').show();
			                else
			                    $('#imgTimeClock').hide();


			                break;
                            
			            default:
			                break;


			           }


                    




			    },
			    error: function (msg) {
			    }
			});



			if (RoleName.indexOf("Customer") > -1)
			{
			    //$('#cmdNew').remove();

			    $('#cmdNew').css('visibility','hidden');

				$('#stxtCreatedBy').remove();
				$('#stxtAssignedTo').remove();
				$('#scmdCheckpoint').remove();
				$('#scmdTask').remove();
				$('#scboIssueLevel').css('margin-left', '110px');
				//$('#scmdVehicleSearch').remove();
			}


			if (isEmpty(getUrlVars()["IssueIDFK"]) == false)
			{
				$('#txtIssueTrackingLookup').val(getUrlVars()["IssueIDFK"]);
			}


		    // Update browser screen resolution
			var Post = new Object()
			Post.Action = 'UpdateUserScreenResolution';
			Post.ScreenWidth = window.screen.width;
			Post.ScreenHeight = window.screen.height;

			$.ajax({
			    type: "POST",
			    contentType: "application/json; charset=utf-8",
			    url: "/API/API.ashx",
			    data: JSON.stringify(Post),
			    dataType: "json",
			    success: function (msg)
        		{

		        },
		        error: function (msg) {
		        }
		    });




			// Start the refresh check
			RefreshCounter = setInterval(function () { ReloadCheck() }, 1000);


			// Set keypress behavior
			$("form input").keypress(function (e)
			{
				if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13))
				{
					
					GetMonitorListData();
				}
			});


            var picker = new Pikaday({
                field: document.getElementById('stxtCreatedDTM'),
                format: 'MMM D YYYY',
                onSelect: function() {
                    //console.log(this);
                    $('#txtClearCreatedDTM').css('display', 'fixed');
                   
                    GoSearch();
                }
            });





			//// Init the date picker
			//$('#stxtCreatedDTM').datepicker
			//		({
			//			onSelect: function (dateText)
			//			{
			//			    $('#stxtCreatedDTM').val(dateText);
			//			    GoSearch();
			//			}
			//		});



			$(".selector").autocomplete({
				select: function (event, ui) { }
			});

			$("#scboIssueTypeIDFK").change(function ()
			{

				$("#scboIssueTypeIDFK").toggleClass("FilterBoxSelected");
			}

			);


			

			GetMonitorListData();

			

		




            
			$('#imgStartPage').hover(function () {
			    $(this).attr('src', '/Images/StartHighlight.png');
			}, function () {
			    $(this).attr('src', '/Images/StartNormal.png');
			});

			$('#imgPreviousPage').hover(function () {
			    $(this).attr('src', '/Images/PreviousHighlight.png');
			}, function () {
			    $(this).attr('src', '/Images/PreviousNormal.png');
			});

			$('#imgNextPage').hover(function () {
			    $(this).attr('src', '/Images/NextHighlight.png');
			}, function () {
			    $(this).attr('src', '/Images/NextNormal.png');
			});





		})
		
		function MovementDetected(e)
		{
			count = 150;
		}

		function ReloadCheck()
		{
		    count -= 1;

		    CheckForReload();

			if (count < 1)
			{
			    myVar = null;


			    if (jQuery("#warning").css("display") == "inline")
			    {
                    // Don't do anything as the error box still is being displayed
			    }
			    else
			    {
			        GetMonitorListData();
			    }
				count = 160;
			}

		}

		function CheckForReload()
		{
			if (PerformReload == true)
			{
				PerformReload = false;
				GetMonitorListData();

				//$('#cmdGo').trigger('click');
			}

		}


		function CreateNewIssue()
		{
			$find('mpeNewIssue').show();
			LoadProperty();
			//InitCheckpointSummary();
			return false;
		}

		var RowClass = 'DataListAlternateRow';

		


		function AddMonitorRow(obj, Index) //IssueID, HasAudio, HasPhoto, PropertyName, IssueName, BaseIssueType, CreatedDTM, CreatedDTMLong, CreatedByUsername, CreatedByFullname, IssueLevel, AssignedTo, AssignedToFullName, IssueCSSColorStatus, IsCheckpoint, ReportedAsUrgent, ReportedIssueDetail)
		{
		    if (RowClass == 'DataListAlternateRow')
		    {
		        RowClass = 'DataListRow';
		    }
		    else
		    {
		        RowClass = 'DataListAlternateRow';
		    }

		    var template = $('#hidden-template-monitoritem').html();


		    var ShowCamera = 'hidden';

		    if (obj.NumberOfPhotos > 0)
		    {
		        ShowCamera = 'visible';
		    }

            
		    var ShowAudio = 'hidden';

		    if (obj.NumberOfWaves > 0)
		    {
		        ShowAudio = 'visible';
		    }

		    var ShowCheckpoint = 'none';
		    var ShowTask = 'none';
		    //var ShowUrgent


		    var ShowLevel = 'normal';

		    if (obj.IsCheckpoint == true)
		    {
		        ShowLevel = 'none';
		        ShowCheckpoint = 'normal';
		    }
		        


		    if (obj.TaskIDFK > 0)
		    {
		        ShowLevel = 'none';
		        ShowTask = 'normal';
		    }

		    //if (obj.ReportedAsUrgent == true)
		    if ( obj.AssignedToUsername == '')
		        obj.AssignedToUsername = '-';
		   
		    var urgentcss = '';
		    if (obj.ReportedAsUrgent == true)
		    {
		        urgentcss = 'Warning';
		    }

		    $('#divMonitorItems').append(template.format({
		        
		        ISSUEIDFK: obj.IssueIDFK,
		        PHOTOVISIBLE: ShowCamera,
		        AUDIOVISIBLE: ShowAudio,
		        PROPERTYNAME: obj.PropertyName,
		        ISSUENAME: obj.ReportedIssueName.substring(0, 28),
		        ISSUETYPECLASS: 'Monitor' + obj.BaseIssueType,
		        CREATEDDTM: FormatDate(obj.CreatedDTM, 'Short'),
		        CREATEDBY: obj.CreatedByUsername,
		        CREATEDBYFULLNAME: obj.CreatedByFullName,
		        ISSUECSSSTATUS:  obj.IssueCSSColorStatus,
		        ISSUESTATUS: '',
		        ISSUELEVEL: obj.IssueLevel,
		        ASSIGNEDTOUSERNAME: obj.AssignedToUsername,
		        ASSIGNEDTOFULLNAME: obj.AssignedToFullName,
		        ROWCLASS: RowClass,
		        SHOWCHECKPOINT: ShowCheckpoint,
		        SHOWTASK: ShowTask,
		        ISURGENT: urgentcss,
		        SHOWLEVEL: ShowLevel,
		        INDEX: Index,
		        TRACKINGNUMBER: obj.TrackingNumber,
		        REPORTEDISSUEDETAIL: obj.ReportedIssueDetail


		    }));

		    return;
		}
		    //obj.AssignedToUsername
		    //obj.AssignedToFullName;
		    //obj.AssignedToUserType
		    //obj.AssignedToDTM
		    //obj.AssignedToByUsername
		    //obj.ClosedDTM


			
			//n.value = obj.PropertyName;
			//n.value = obj.ReportedIssueName;
			//if (obj.ReportedIssueDetail.length > 0)
			//	cellIssueName.title = "Reported Issue Detail:  <span style='color: orange;'>" + obj.ReportedIssueDetail + "</span><br>"
			//	cellIssueName.title = "<span style='color: orange;'>No Issue Details Reported</span><br>"
			//$(n).text(FormatDate(obj.CreatedDTM, 'Short'));
			//cellCreatedDTM.title = FormatDate(obj.CreatedDTM, 'Long');
			//$(n).text(obj.CreatedByUsername);
			//$(n).css('font-size', 'small');
			////n.title = obj.CreatedByFullName;


			//n.title = "User Type:  <span style='color: orange;'>" + obj.CreatedByUserType + "</span><br>"


			//if (obj.IsCheckpoint == true)
			//{
			//	var img = document.createElement('img');
				
			//	img.title = 'This issue was created by a Checkpoint scan';
			//	if (obj.ReportedAsUrgent == true)
			//		var n = document.createTextNode(obj.IssueLevel);
			//	else if (obj.TaskIDFK > 0)
			//		img.title = 'This issue was created by a system Task';
			//		cellIssueLevel.appendChild(img);
			//		var n = document.createTextNode(obj.IssueLevel);
			//n.value = obj.AssignedToUsername;
			//n.title = obj.AssignedToFullName;

			//var tip = '';
			//tip = "Assigned To:  <span style='color: orange;'>" + obj.AssignedToFullName + "</span><br>"
			//tip += "User Type:  <span style='color: orange;'>" + obj.AssignedToUserType + "</span><br>"
			//tip += "Assigned Date:  <span style='color: orange;'>" + obj.AssignedToDTM + "</span><br>"
			//tip += "Assigned To By:  <span style='color: orange;'>" + obj.AssignedToByUsername + "</span><br>"
			//tip += "Closed Date:  <span style='color: orange;'>" + obj.ClosedDTM + "</span><br>"




		function NextPage()
		{
		    var num = +$('#lblPage').html() + 1;
			$('#lblPage').html(num);
			GetMonitorListData();

		}

		function PreviousPage()
		{
		    var num = +$('#lblPage').html() - 1;
			if (num == 0)
			{
				num = 1;
			}
			$('#lblPage').html(num);
			GetMonitorListData();

		}

		function FirstPage()
		{
		    $('#lblPage').html('1');
			GetMonitorListData();

		}

		function GoSearch()
		{
		    $('#lblPage').html(1);
			GetMonitorListData();
		}

		function GetMonitorListData()
		{

			StartSpinner();
			DisablePageButtons();
			// Introduce a small delay to prevent users from clicking tons of pages
			setTimeout(function () { 

			var Monitor = new Object();

			if ($('#txtIssueTrackingLookup').val() == 'Issue ID/Tracking #')
			{
				Monitor.IssueTrackingNumber = '';
			}
			else
			{
			    Monitor.IssueTrackingNumber = $('#txtIssueTrackingLookup').val();
			}

			if ($('#stxtCreatedBy').val() == 'Created By')
			{
				Monitor.CreatedBy = '';
			}
			else
			{
				Monitor.CreatedBy = $('#stxtCreatedBy').val();
				if (isEmpty(Monitor.CreatedBy) == true)
					Monitor.CreatedBy = '';
			}

			if ($('#stxtAssignedTo').val() == 'Assigned To')
			{
				Monitor.AssignedTo = '';

			}
			else
			{
				Monitor.AssignedTo = $('#stxtAssignedTo').val();
				if (isEmpty(Monitor.AssignedTo) == true)
					Monitor.AssignedTo = '';
			}

			if ($('#stxtCreatedDTM').val() == 'Created Date')
			{
				Monitor.CreatedDTM = '';
			}
			else
			{
				Monitor.CreatedDTM = $('#stxtCreatedDTM').val();
			}


			Monitor.Page = $('#lblPage').html();

			Monitor.IncludeClosed = $('#chkIncludeClosed').prop('checked');
			Monitor.IncludeSecurity = $('#chkIncludeSecurity').prop('checked');
			Monitor.IncludeParking = $('#chkIncludeParking').prop('checked');
			Monitor.IncludeMaintenance = $('#chkIncludeMaintenance').prop('checked');
			Monitor.PropertyIDFK = $('#scboPropertyIDFK').val();
			Monitor.IssueLevel = $('#scboIssueLevel').val();
			Monitor.IssueTypeIDFK = $('#scboIssueTypeIDFK').val();
			
			if (Monitor.IncludeSecurity == undefined)
				Monitor.IncludeSecurity = false;
			
			if (Monitor.IncludeMaintenance == undefined)
				Monitor.IncludeMaintenance = false;

			if (Monitor.IncludeParking == undefined)
				Monitor.IncludeParking = false;

			$.ajax({
				type: "POST",
				contentType: "application/json; charset=utf-8",
				url: "/WebServices/Monitor.asmx/GetMonitorList",
				data: JSON.stringify(Monitor),
				dataType: "json",
				success: function (msg)
				{
					RowAlternate = false;
					$('#divMonitorItems').empty();

					var obj = JSON && JSON.parse(msg.d);
					for (var idx in obj)
					{
					    AddMonitorRow(obj[idx], idx);
					}

					//$('.IssueStatus').hover(function() {
					//    BuildTip($(this));
					//    console.log('IN');
					//}, function() { 
					//    $('#hidden_div').hide();
					//    console.log('OUT');
					//});

					StopSpinner();
					EnablePageButtons();
				},
				//error: function (msg, status, error)
				//{
				    //EnablePageButtons();
					//ShowWarningDialog('No issues were found.  If you are new Customer, once you create issues, they will display here.');
					//StopSpinner();
					//Common.LogAjaxError('Monitor.aspx', 'GetMonitorListData', msg.responseJSON.Message);

				//}
			});

			}, 500);


		}

		//function BuildTip(sender)
		//{
		//    $('#hidden_div').empty();
		//    var idx = $(sender).data('index');
		//    var template = $('#hidden-template-monitoritemtips').html();
		    
		//    $('#hidden_div').append(template.format({
		//        ASSIGNEDTOFULLNAME: idx
		//    }));

		//    $('#hidden_div').show();
		//    var l = sender.position().left + sender.width() ;
		//    var t = sender.position().top;
		//    $('#hidden_div').offset({top: t, left: l });
		//}


		function EnablePageButtons()
		{
			
			$('#cmdPreviousPage').removeAttr('disabled');
			$('#cmdFirstPage').removeAttr('disabled');
			$('#cmdNextPage').removeAttr('disabled');
			
		}

		function DisablePageButtons()
		{

			$('#cmdPreviousPage').attr('disabled', 'disabled');
			$('#cmdFirstPage').attr('disabled', 'disabled');
			$('#cmdNextPage').attr('disabled', 'disabled');
		}

		function ShowVehicle(VehicleIDFK)
		{
		    //$find('mpeVehicleDetails').show();
		    
		    VehicleDetails.Open(VehicleIDFK, 100100);

			//LoadVehicleDetail(VehicleIDFK);
			return false;
		}


		function cancelVehicleSearch()
		{
			$find('mpeVehicleSearch').hide();
			return false;
		}



		function SetMonitorFilters(Filter)
		{
			// Get a list of users for searching/assignment
			var MonitorFilter = new Object();

			switch (Filter)
			{
				case 'Closed':
					MonitorFilter.Key = 'IncludeClosed';
					MonitorFilter.Value = $('#chkIncludeClosed').prop('checked');
					break;

				case 'Security':
					MonitorFilter.Key = 'IncludeSecurity';
					MonitorFilter.Value = $('#chkIncludeSecurity').prop('checked');
					break;

				case 'Parking':
					MonitorFilter.Key = 'IncludeParking';
					MonitorFilter.Value = $('#chkIncludeParking').prop('checked');
					break;

				case 'Maintenance':
					MonitorFilter.Key = 'IncludeMaintenance';
					MonitorFilter.Value = $('#chkIncludeMaintenance').prop('checked');
					break;


				default:
					break;

			}



			$.ajax({
				type: "POST",
				contentType: "application/json; charset=utf-8",
				url: "/WebServices/Monitor.asmx/SetProfileParameter",
				data: JSON.stringify(MonitorFilter),
				dataType: "json",
				success: function (msg)
				{



				},
				error: function (msg)
				{
					ShowWarningDialog('Unable to set filter');
					Common.LogAjaxError('Monitor.aspx', 'SetMonitorFilters', msg.responseJSON.Message);
				}
			});


		}

		function FindCreatedBy()
		{
			var a = SetCreatedBy;
			ShowUserSelector('', 0, a);
		}

		function SetCreatedBy()
		{
			if (UserSelectorSelectedUsername.length > 0)
			{
				$('#stxtCreatedBy').val(UserSelectorSelectedUsername)
				$('#txtClearCreatedBy').show();
				$('#txtClearCreatedBy').css('display', 'fixed');

				GoSearch();
			}
		}

		function ClearCreatedBy()
		{
			$('#stxtCreatedBy').val("Created By");
			$('#txtClearCreatedBy').hide();
			GoSearch();
		}

		function ClearCreatedDTM()
		{
		    $('#stxtCreatedDTM').val("Created Date");
		    $('#txtClearCreatedDTM').hide();
		    GoSearch();
		}
		

		function FindAssignedTo()
		{
			var a = SetAssignedTo;
			ShowUserSelector('', 0, a);
		}

		function SetAssignedTo()
		{
			if (UserSelectorSelectedUsername.length > 0)
			{
				$('#stxtAssignedTo').val(UserSelectorSelectedUsername)
				//$('#txtClearAssignedTo').show();
				$('#txtClearAssignedTo').css('display', 'fixed');
				GoSearch();
				//alert('PPPOOOFFF!!!!');
				//alert(UserSelectorSelectedUsername);
				//AssignIssueTo(UserSelectorSelectedUsername);
			}
		}

		function ClearAssignedTo()
		{
			$('#stxtAssignedTo').val("Assigned To");
			$('#txtClearAssignedTo').hide();
			GoSearch();
		}

		function StartFlashChat()
		{

		    var baloon = $('#scmdChat');
		    function runIt() {
		        if (blnRunChatFlash == true)
		        {
		            $('#scmdChat').animate({ opacity: '1' }, 150);
		            $('#scmdChat').animate({ opacity: '0.1' }, 150, runIt);
		        }
		        else
		        {
		            $('#scmdChat').css('opacity', '1.0');
		        }
		    }
		    runIt();


		}
		var blnRunChatFlash = true;

		function StopChatFlash()
		{
		    blnRunChatFlash = false;
		    $('#scmdChat').stop(true, true);
		    
		}


		function OpenChat()
		{
		    $("#MonitorMainChat").css({ left: -150, position: 'relative', width: '1350px' });
		    StopChatFlash();
		    UserChat.Open();
		    return false;
		}

		function CloseChat()
		{
		    $("#MonitorMainChat").css({ left: 0, position: 'relative', width: '975px' });
		    
		    UserChat.Close();
		    StartFlashChat();
		    return false;
		}

        
	    function ShowMap()
	    {
	        UserChatMap.Open();
	        return false;
	    }

	    function ShowTimecard()
	    {
	        TimeCardApproval.Open();
	        return false;
	    }

	    function ShowIssueSummary()
	    {
	        IssueSummary.Open();
	        return false;

	    }
        

	    function ShowVehicleSearch() {
	        VehicleSearch.Open();
	        return false;
	    }

	    function ShowCheckpointSummary()
	    {
	        CheckpointSummary.Open();
	        return false;
	    }

	    function ShowPhotoViewer(IssueIDFK)
	    {
	        PhotoViewer.Open(event, IssueIDFK);
	    }

	    function ShowTaskSummary()
	    {
	        TaskSummary.Open();
	        return false;
	    }

	    function OpenPropertyNotes()
	    {
	        PropertyNotes.Open();
	        return false;
	    }

    </script>

	<style>
		.ui-dialog-titlebar-close
		{
			display: none;
		}


     

	</style>

    <script>

</script>

    <input type="hidden" name="AdminCustomer$ContentPlaceHolder1$hidSearch" id="ContentPlaceHolder1_hidSearch">
    
    


    <div onmouseover="MovementDetected();" onkeydown="MovementDetected();">

        <div id="divIssueDetail" style="display: none; position: fixed; z-index: 100001;">
            





<script lang="javascript">
    var PropertyIDFK = 0;
    var TrackingNumber = '';

    var GPSIssueMap = {

        gpsMap: null,
        gpsFence: null,
        gpsMarker: null,
        gpsLat: 0,
        gpsLon: 0,

        InitMap: function()
    {
            // Init the google map
            GPSIssueMap.gpsMap = new google.maps.Map(document.getElementById('divGPSIssueMap'), {
            center: { lat: 38.4390123, lng: -97.2698398 },
            zoom: 4,
            mapTypeId: google.maps.MapTypeId.TERRAIN
        });
        },

        AddMarker: function (Longitude, Latitude, Radius)
        {
            var loc = new google.maps.LatLng(Latitude, Longitude);

            // Init the google map GPS marker
            GPSIssueMap.gpsMarker = new google.maps.Marker({
                position: loc, //{lat: 38.4390123, lng: -97.2698398},// { lat: Latitude, lng: Longitude }, //{ lat: PropertyAddressGeofence.gpsLat, lng: PropertyAddressGeofence.gpsLon}
                map: GPSIssueMap.gpsMap,
                draggable: false,
                title: Radius,
                visible: true
            });

            GPSIssueMap.gpsMap.setZoom(14);
            GPSIssueMap.gpsMap.setCenter(loc);
        },

        AddMarkerAddress: function (Longitude, Latitude, Radius) {
            var loc = new google.maps.LatLng(Latitude, Longitude);

            // Init the google map GPS marker
            GPSIssueMap.gpsMarker = new google.maps.Marker({
                position: loc, //{lat: 38.4390123, lng: -97.2698398},// { lat: Latitude, lng: Longitude }, //{ lat: PropertyAddressGeofence.gpsLat, lng: PropertyAddressGeofence.gpsLon}
                map: GPSIssueMap.gpsMap,
                draggable: false,
                title: Radius,
                visible: true,
                icon: '/Images/house.png'
            });

            GPSIssueMap.gpsMap.setZoom(14);
            GPSIssueMap.gpsMap.setCenter(loc);
        },

        AddCircle: function (Longitude, Latitude, Radius) {
            var loc = new google.maps.LatLng(Latitude, Longitude);

            var cityCircle = new google.maps.Circle({
                strokeColor: '#1800ff',
                strokeOpacity: 0.4,
                strokeWeight: 1,
                fillColor: '#1800ff',
                fillOpacity: 0.25,
                map: GPSIssueMap.gpsMap,
                center: loc,
                radius: (Radius * 1),
                title: 'Property Address'
            });
        }

    }


    function ShowGPSIssueMap()
    {
        $find('mpeShowGPS').show();

        GPSIssueMap.InitMap();

        

        GPSIssueMap.AddMarkerAddress($('#hidAddressLongitude').val(), $('#hidAddressLatitude').val(), '');

        GPSIssueMap.AddMarker($('#hidLongitude').val(), $('#hidLatitude').val(), 'Distance From Address: ' + $('#hidAddressRadius').val() + 'm');

        GPSIssueMap.AddCircle($('#hidAddressLongitude').val(), $('#hidAddressLatitude').val(), $('#hidAddressRadius').val());


        
        //zoomLocation($('#hidLongitude').val(), $('#hidLatitude').val()); // Longitude, Latitude);
        
        //addPushPin('loc', $('#hidLatitude').val(), $('#hidLongitude').val(), 'Yellow', $('#hidBaseIssueType').val().charAt(0), $('#hidIssueLevel').val())

        //addCircle(parseFloat($('#hidAddressLatitude').val()), parseFloat($('#hidAddressLongitude').val()));
    }


    // JQuery init
    $(document).ready(function () {


        $('#txtWorkCompletedDTM').datetimepicker({
            format: 'n/j/Y g:i A',
            formatTime: 'g:i A',
            validateOnBlur: false,
            onSelectDate: function (ct, $i) {
                //Reporting.ValidateDateRange();
            }

        });


        $('#txtAppointmentDTM').datetimepicker({
            format: 'n/j/Y g:i A',
            formatTime: 'g:i A',
            validateOnBlur: false,
            onSelectDate: function (ct, $i) {
                //Reporting.ValidateDateRange();
            }

        });

        //$('#txtWorkCompletedDTM').datetimepicker({
        //    timeFormat: "h:mm TT",
        //    dateFormat: "m/d/yy"
        //}
		//);

        //$('#txtAppointmentDTM').datetimepicker({
        //    timeFormat: "h:mm TT",
        //    dateFormat: "m/d/yy"
        //}
		//	);


        // Do this to remove any bad email characters
        $("#stxtToEmailAddress").keypress(function (key) {
            if (
					(key.charCode < 97 || key.charCode > 122) &&
				(key.charCode < 65 || key.charCode > 90) &&
				(key.charCode < 48 || key.charCode > 57) &&
				(key.charCode != 45) &&
				(key.charCode != 44) &&
				(key.charCode != 46) &&
				(key.charCode != 8) &&
				(key.charCode != 95) &&
				(key.charCode != 64)) return false;
            //46.  44,  64 @
        });

        // Add the change event for the assign to listbox

        $("#scboUserRoute").change(function () {
            LoadUsers();
        });

        $("#scboActualAddress").change(function () {
            $('#scboActualUnit').empty();
            $('#scboActualUnit').append('<option value="0">Choose</option>');
            LoadActualUnits(this.value, -1);
        });


        $("#slstUserList").change(function () {
            $("#hidAssignToUsername").val($(this).val());
        });


        $("#cmdSaveProblemAddress").click(function () {
            var SetActualProblemAddress = new Object();

            SetActualProblemAddress.IssueIDFK = $('#hidIssueIDFK').val();
            SetActualProblemAddress.PropertyAddressIDFK = $('#scboActualAddress').val();

            if ($('#scboActualUnit').css('display') == 'none')
            {
                SetActualProblemAddress.UnitIDFK = 0;
            }
            else
            {
                SetActualProblemAddress.UnitIDFK = $('#scboActualUnit').val();
            }

            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "/WebServices/Monitor.asmx/SetActualProblemAddress",
                data: JSON.stringify(SetActualProblemAddress),
                dataType: "json",
                success: function (msg) {
                    ShowIssueDetail($('#hidIssueIDFK').val());
                },
                error: function (msg) {

                    ShowWarningDialog('A error has occured changing the problem Address');
                    Common.LogAjaxError('wucIssueDetail.ascx', 'cmdSaveProblemAddress', msg.responseJSON.Message);
                }
            });

            return false;



        });




    });


    function PayIssue() {
        ShowViolationPayment($('#hidIssueIDFK').val(), IssuePaid);
    }

    function IssuePaid() {
        ShowIssueDetail($('#hidIssueIDFK').val())
    }


    function z(BinaryID, FileName, BinaryDatabaseIDFK, FileExtension) {
        window.parent.SetBinaryInfo('a', 'b', 'c', 'd')
    }


    function UploadStarted() {

        $("#scmdAddNewNote").prop("disabled", true);
        $("#scmdCancelNewNote").prop("disabled", true);
        $("#scmdAddNewNote").css({ opacity: 0.5 });
        $("#scmdCancelNewNote").css({ opacity: 0.5 });
        StartSpinner();
    }

    function UploadError() {
        $("#scmdAddNewNote").prop("disabled", false);
        $("#scmdCancelNewNote").prop("disabled", false);
        $("#scmdAddNewNote").css({ opacity: 1 });
        $("#scmdCancelNewNote").css({ opacity: 1 });

    }


    function UploadComplete(sender, args) {
        var span = $get("fuAttachmentUpload");
	    var txts = span.getElementsByTagName("input");
	    for (var i = 0; i < txts.length; i++)
	    {
	        if (txts[i].type == "file")
	        {
	            txts[i].value = "";
	        }
	    }

	    //alert(args.get_fileName());
	    $("#scmdAddNewNote").prop("disabled", false);
	    $("#scmdCancelNewNote").prop("disabled", false);
	    $("#scmdAddNewNote").css({ opacity: 1 });
	    $("#scmdCancelNewNote").css({ opacity: 1 });

	    $("#fuAttachmentUpload").hide();
	    $("#lblSelectAttachment").text(args.get_fileName());

	    StopSpinner();
	}


	function SetBinaryInfo(BinaryID, FileName, BinaryDatabaseIDFK, FileExtension) {

	    $('#hidBinaryUploadID', window.parent.document).val(BinaryID);
	    $('#hidFileName', window.parent.document).val(FileName);
	    $('#hidBinaryDatabaseIDFK', window.parent.document).val(BinaryDatabaseIDFK);
	    $('#hidFileExtension', window.parent.document).val(FileExtension);

	}


	function AddNote() {

	    $find('mpeAddNote').show();
	    $("#fuAttachmentUpload").show();

	    // Clear notes
	    $('#stxtAddNewNote').val('');
	    $('#hidBinaryUploadID', window.parent.document).val('0');
	    $('#hidFileName', window.parent.document).val('');
	    $('#hidBinaryDatabaseIDFK', window.parent.document).val('0');
	    $('#hidFileExtension', window.parent.document).val('');


	    return false;
	}

	function ReallyCloseIssue() {
	    PerformReload = true;
	    var CloseIssue = new Object();

	    CloseIssue.UserName = '';
	    CloseIssue.IssueIDFK = $('#hidIssueIDFK').val();
	    CloseIssue.ApproveIssue = $('#chkApproveIssue').prop('checked');
	    CloseIssue.BaseIssueType = 'Security';

	    $.ajax({
	        type: "POST",
	        contentType: "application/json; charset=utf-8",
	        url: "/WebServices/Monitor.asmx/CloseIssue",
	        data: JSON.stringify(CloseIssue),
	        dataType: "json",
	        success: function (msg) {
	            $find('mpeCloseIssue').hide();
	            $find('mpeIssueDetail').hide();
	        },
	        error: function (msg) {

	            ShowWarningDialog('A error has occured closing this issue.');
	            Common.LogAjaxError('wucIssueDetail.ascx', 'ReallyCloseIssue', msg.responseJSON.Message);
	        }
	    });

	    return false;
	}

	function AssignIssueTo(Username) {


	    var AssignIssue = new Object();

	    PerformReload = true;

	    AssignIssue.IssueIDFK = $('#hidIssueIDFK').val();
	    AssignIssue.AssignToUsername = Username;

	    $.ajax({
	        type: "POST",
	        contentType: "application/json; charset=utf-8",
	        url: "/WebServices/Monitor.asmx/AssignIssueTo",
	        data: JSON.stringify(AssignIssue),
	        dataType: "json",
	        success: function (msg) {

	            ShowIssueDetail($('#hidIssueIDFK').val());
	        },
	        error: function (msg) {
	            ShowWarningDialog('A error has occured assigning this issue.');
	            Common.LogAjaxError('wucIssueDetail.ascx', 'AssignIssueTo', msg.responseJSON.Message);
	        }
	    });

	    return false;


	}

	function AddNewNote() {

	    if ($('#stxtAddNewNote').val().length == 0)
	    {
	        ShowWarningDialog('You must add a note to save this.');
	        return;
	    }

	    var Note = new Object();

	    Note.IssueIDFK = $('#hidIssueIDFK').val();
	    Note.NoteDetail = $('#stxtAddNewNote').val();

	    Note.BinaryID = $('#hidBinaryUploadID').val();
	    Note.BinaryDatabaseIDFK = $('#hidBinaryDatabaseIDFK').val();
	    Note.FileName = $('#hidFileName').val();

	    $.ajax({
	        type: "POST",
	        contentType: "application/json; charset=utf-8",
	        url: "/WebServices/Monitor.asmx/AddIssueNote",
	        data: JSON.stringify(Note),
	        dataType: "json",
	        success: function (msg) {
	            $find('mpeAddNote').hide();
	            //ShowIssueDetail($('#hidIssueIDFK').val());
	        },
	        error: function (msg) {

	            ShowWarningDialog('A error has occured sending this note.');
	            Common.LogAjaxError('wucIssueDetail.ascx', 'AddNewNote', msg.responseJSON.Message);
	        }
	    });

	    LoadIssueNotes($('#hidIssueIDFK').val(), false);

	    return false;
	}

	function SendNewEmail() {

	    var Email = new Object();
	    StartSpinner();
	    $find('mpeEmailIssue').hide();

	    Email.FromEmailAddress = '';
	    Email.ToEmailAddress = $('#stxtToEmailAddress').val();
	    Email.Subject = $('#stxtSubject').val();
	    Email.Body = $('#stxtBody').val();

	    Email.IssueIDFK = $('#hidIssueIDFK').val();
	    Email.CustomerIDFK = 18;
	    Email.UserName = USN;
	    Email.AttachIssue = $('#schkAttachIssue').prop('checked');
	    Email.BaseIssueType = $('#hidBaseIssueType').val();

	    Email.IncludeInternalNotes = $('#hidIncludeNoteChecked').val();


	    $.ajax({
	        type: "POST",
	        contentType: "application/json; charset=utf-8",
	        url: "/WebServices/Monitor.asmx/SendEmail",
	        data: JSON.stringify(Email),
	        dataType: "json",
	        success: function (msg) {
	            StopSpinner();
	            ShowIssueDetail($('#hidIssueIDFK').val());
	        },
	        error: function (msg) {
	            StopSpinner();
	            $find('mpeEmailIssue').show();
	            ShowWarningDialog('A error has occured sending this email.');
	            Common.LogAjaxError('wucIssueDetail.ascx', 'SendNewEmail', msg.responseJSON.Message);
	        }
	    });

	    return false;
	}





	function TabChanged(sender) {
	    if (sender.get_activeTabIndex() == 1);
	    {

	    }

	}

	function ResetForm() {
	    // Reset controls
	    $('#cmdCloseIssue').hide();
	    $('#cmdAssignIssue').hide();
	    $('#cmdDisplayGPS').hide();
	    $('#cmdAssignIssue').attr('class', 'SaveButton');
	    $('#lblLocation').empty().hide();
	    $('#lblLocationTitle').hide();
	    $('#lblReportedBy').empty().hide();
	    $('#lblReportedByTitle').hide();
	    $('#imgBaseIssueType').hide();
	    $('#scboActualAddress').empty();
	    $('#scboActualUnit').empty();
	    $('#scboActualUnit').hide();
	    $('#divMaintenance').hide();
	    $('#divParking').hide();
	    $('#divSecurity').hide();
	    $('#scboActualAddress').append('<option value="0">Choose</option>');
	    $('#chkIncludeOriginalNotes').prop('checked', false);
	}

	function TrimUsername(Username) {
	    if (Username.length > 20)
	    {
	        Username = Left(Username, 20) + '...';
	    }

	    return Username;
	}

	function LoadActualAddress(AddressIDFK) {

	    var Address = new Object();

	    Address.PropertyIDFK = PropertyIDFK;

	    $.ajax({
	        type: "POST",
	        contentType: "application/json; charset=utf-8",
	        url: "/WebServices/Monitor.asmx/GetPropertyAddressList",
	        data: JSON.stringify(Address),
	        dataType: "json",
	        success: function (msg) {

	            var obj = JSON && JSON.parse(msg.d);

	            for (var ff in obj)
	            {
	                var sb = document.createElement("option");//create new option 
	                sb.value = obj[ff].PropertyAddressIDFK;
	                sb.text = obj[ff].Address;
	                if (AddressIDFK == obj[ff].PropertyAddressIDFK)
	                {
	                    sb.selected = true;
	                }
	                document.getElementById("scboActualAddress").options.add(sb);
	            }
	        },
	        error: function (msg) {
	           // ShowWarningDialog('A error has occured loading the Addresses.');
	           // Common.LogAjaxError('wucIssueDetail.ascx', '', msg.responseJSON.Message);
	        }
	    });

	}

	function LoadActualUnits(PropertyAddressIDFK, UnitIDFK) {

	    var Address = new Object();

	    Address.PropertyAddressIDFK = PropertyAddressIDFK;

	    $.ajax({
	        type: "POST",
	        contentType: "application/json; charset=utf-8",
	        url: "/WebServices/Monitor.asmx/GetUnitList",
	        data: JSON.stringify(Address),
	        dataType: "json",
	        success: function (msg) {

	            var obj = JSON && JSON.parse(msg.d);

	            if (obj.length == 0)
	            {
	                $('#scboActualUnit').hide();
	                $('#lblActualUnit').hide();
	            }
	            else
	            {
	                $('#scboActualUnit').show();
	                $('#lblActualUnit').show();

	                Common.LoadCombobox('scboActualUnit', 'UnitIDFK', 'UnitNumber', UnitIDFK, obj, 'Choose', 'Choose')
	            }
	        },
	        error: function (msg) {
	            Common.LogAjaxError('wucIssueDetail.ascx', 'LoadActualUnits', msg.responseJSON.Message);
	        }
	    });

	}

	function LoadIssueData(obj) {
	    ResetForm();

	    $(document).off().keyup();

	    $(document).on().keyup(function (e) {
	        $(document).off().keyup();
	        if (e.which == 27)
	            $find('mpeIssueDetail').hide();
	    });

	    PropertyIDFK = obj[0].PropertyIDFK;


	    if (AllowGPSViewing == true)
	    {
	        $('#cmdDisplayGPS').show();

	        if (obj[0].Longitude == null)
	        {
	            $('#cmdDisplayGPS').hide();
	        }

	    }


	    if (obj[0].IsCheckpoint == true)
	    {
	        $('#spnQRImage').show();
	    }
	    else
	    {
	        $('#spnQRImage').hide();
	    }

	    if (obj[0].ReportedAsUrgent == true)
	    {
	        $('#spnUrgent').show();
	    }
	    else
	    {
	        $('#spnUrgent').hide();
	    }

	    $('#spnLevel').text('Level ' + obj[0].IssueLevel);

	    if (obj[0].IssueLevel == 1)
	    {
	        $('#spnLevel').attr('class', 'IssueLevel1Color');
	        //$('#spnLevel').text('Level 1');
	        //$('#spnLevel').css('color', 'white');
	        //$('#spnLevel').css('background', 'red');//
	    }

	    if (obj[0].IssueLevel == 2)
	    {
	        $('#spnLevel').attr('class', 'IssueLevel2Color');
	        //$('#spnLevel').text('Level 2');
	        //$('#spnLevel').css('color', 'black');
	        //$('#spnLevel').css('background', 'yellow');
	    }

	    if (obj[0].IssueLevel == 3)
	    {
	        $('#spnLevel').attr('class', 'IssueLevel3Color');
	        //$('#spnLevel').text('Level 3');
	        //$('#spnLevel').css('color', 'white');
	        //$('#spnLevel').css('background', '#00ff00');
	    }

	    $('#lblIssueStatus').text(obj[0].IssueStatus);
	    $('#hidLongitude').val(obj[0].Longitude);
	    $('#hidLatitude').val(obj[0].Latitude);
	    $('#lblGPSCords').html(' (' + obj[0].Longitude + ', ' + obj[0].Latitude + ')');
	    $('#hidAddressLongitude').val(obj[0].AddressLongitude);
	    $('#hidAddressLatitude').val(obj[0].AddressLatitude);
	    $('#hidAddressRadius').val(obj[0].AddressRadius);
	    $('#hidTrackingNumber').val(obj[0].TrackingNumber);
	    $('#hidBaseIssueType').val(obj[0].BaseIssueType);
	    $('#hidIssueLevel').val(obj[0].IssueLevel);

	    TrackingNumber = obj[0].TrackingNumber;

	    var strTitle = 'Tracking Number: ' + obj[0].TrackingNumber + '\x0A';
	    strTitle += 'Device Phone Number: ' + obj[0].DevicePhoneNumber + '\x0A';
	    strTitle += 'Passcode: ' + obj[0].Passcode + '\x0A';
	    strTitle += 'Longitude: ' + obj[0].Longitude + '\x0A';
	    strTitle += 'Latitude: ' + obj[0].Latitude + '\x0A';

	    $('#lblIssueNumber').prop('title', strTitle);


	    $('#lblCreatedDTM').text(FormatDate(obj[0].CreatedDTM, 'Short') + ' ' + TrimUsername(obj[0].CreatedByFullName));
	    $('#lblCreatedDTM').prop('title', FormatDate(obj[0].CreatedDTM, 'Long') + ' ' + obj[0].CreatedByUserName + ' - ' + obj[0].CreatedByFullName);

	    $('#lblAssignedDTM').text(FormatDate(obj[0].AssignedToDTM, 'Short') + ' ' + TrimUsername(obj[0].AssignedToFullName));
	    $('#lblAssignedDTM').prop('title', FormatDate(obj[0].AssignedToDTM, 'Long') + ' ' + obj[0].AssignedToFullName);

	    $('#lblAcknowledgedDTM').text(FormatDate(obj[0].AcknowledgedDTM, 'Short') + ' ' + TrimUsername(obj[0].AcknowledgedByFullName));
	    $('#lblAcknowledgedDTM').prop('title', FormatDate(obj[0].AcknowledgedDTM, 'Long') + ' ' + obj[0].AcknowledgedByFullName);

	    $('#lblArrivedDTM').text(FormatDate(obj[0].InitialGuardArrivalDTM, 'Short') + ' ' + TrimUsername(obj[0].InitialGuardArrivalFullName));
	    $('#lblArrivedDTM').prop('title', FormatDate(obj[0].InitialGuardArrivalDTM, 'Long') + ' ' + obj[0].InitialGuardArrivalFullName);

	    $('#lblClosedDTM').text(FormatDate(obj[0].ClosedDTM, 'Short') + ' ' + TrimUsername(obj[0].ClosedByFullName));
	    $('#lblClosedDTM').prop('title', FormatDate(obj[0].ClosedDTM, 'Long') + ' ' + obj[0].ClosedByFullName);

	    $('#lblIssueType').text(obj[0].IssueName);
	    $('#lblIssueType').prop('title', obj[0].IssueNameLong);


	    $('#lblIssueType').removeClass('SecurityTextColor');
	    $('#lblIssueType').removeClass('ParkingTextColor');
	    $('#lblIssueType').removeClass('MaintenanceTextColor');

	    switch (obj[0].BaseIssueType)
	    {
	        case 'Security':
	            $('#lblIssueType').addClass('SecurityTextColor');
	            break;

	        case 'Parking':
	            $('#lblIssueType').addClass('ParkingTextColor');
	            break;

	        case 'Maintenance':
	            $('#lblIssueType').addClass('MaintenanceTextColor');
	            break;

	        default:
	            break;
	    }

	    $('#lblReportedDetail').text(obj[0].ReportedIssueDetail);

	    // Add the property info
	    $('#lblProperty').html(obj[0].PropertyName + '<br>' + obj[0].FullAddress + '<br>' + obj[0].CityStateZip);
	    $('#stxtSubject').val(obj[0].PropertyName + ' - ' + obj[0].IssueName);

	    if (isEmpty(obj[0].UnitNumber) == false)
	    {
	        $('#lblProperty').append('<br>Unit # ' + obj[0].UnitNumber);
	    }

	    // Add the location if available
	    if (isEmpty(obj[0].LocationName) == false)
	    {
	        $('#lblLocationTitle').show();
	        $('#lblLocation').show();
	        $('#lblLocation').text(obj[0].LocationName);
	    }

	    if (isEmpty(obj[0].ReportedByName) == false)
	    {
	        if (obj[0].ReportedByName == 'SYSTEM SYSTEM')
	        {
	            $('#lblReportedBy').append('SYSTEM<br>');
	        }
	        else
	        {
	            $('#lblReportedBy').append(obj[0].ReportedByName + '<br>');
	        }

	        $('#lblReportedByTitle').show();
	        $('#lblReportedBy').show();
	    }

	    if (obj[0].RemainAnonymous == true)
	    {
	        $('#lblAnonymous').show();
	    }
	    else
	    {
	        $('#lblAnonymous').hide();


	    }

	    if (isEmpty(obj[0].ReportedByPhoneNumber) == false)
	    {
	        $('#lblReportedBy').append(obj[0].ReportedByPhoneNumber + '<br>');
	        $('#lblReportedByTitle').show();
	        $('#lblReportedBy').show();
	    }

	    if (isEmpty(obj[0].ReportedByEmailAddress) == false)
	    {
	        $('#lblReportedBy').append(obj[0].ReportedByEmailAddress + '<br>');
	        $('#lblReportedByTitle').show();
	        $('#lblReportedBy').show();
	    }

	    //$('#imgBaseIssueType').attr('src', '/Images/grey' + obj[0].BaseIssueType + '.png');
	    //$('#imgBaseIssueType').show();

	    if (obj[0].BaseIssueType == 'Security')
	    {
	        $('#divSecurity').show();

	        if (isEmpty(obj[0].ReportedProblemUnit) == false)
	        {
	            $('#txtReportedProblemPropertyAddress').text(obj[0].ReportedProblemPropertyAddress + ' Unit# ' + obj[0].ReportedProblemUnit);
	            $('#txtReportedProblemPropertyAddress').prop('title', obj[0].ReportedProblemPropertyAddress + ' Unit# ' + obj[0].ReportedProblemUnit);
	        }
	        else
	        {
	            $('#txtReportedProblemPropertyAddress').text(obj[0].ReportedProblemPropertyAddress);
	            $('#txtReportedProblemPropertyAddress').prop('title', obj[0].ReportedProblemPropertyAddress);
	        }




	        $('#txtReportedIncidentDTM').text(FormatDate(obj[0].ReportedIncidentDTM, 'Long'));
	        $('#txtReportedIncidentDTM').prop('title', FormatDate(obj[0].ReportedIncidentDTM, 'Long'));

	        LoadActualAddress(obj[0].ActualProblemPropertyAddressIDFK);


	        if (isEmpty(obj[0].ActualProblemPropertyAddressIDFK) == false)
	        {
	            LoadActualUnits(obj[0].ActualProblemPropertyAddressIDFK, obj[0].ActualProblemUnitIDFK)
	        }
	    }

	    if (obj[0].BaseIssueType == 'Parking')
	    {
	        $('#divParking').show();

	        if (obj[0].ValidVehicleIDFK > 0)
	        {
	            $('#cmdValidVehicle').show();
	            $('#cmdValidVehicle').attr("onclick", "return ShowVehicle('" + obj[0].ValidVehicleIDFK + "');");
	        }
	        else
	        {
	            $('#cmdValidVehicle').hide();
	        }

	        $('#cmdViolatingVehicle').attr("onclick", "return ShowVehicle('" + obj[0].ViolatingVehicleIDFK + "');");

	        $('#cellOrigionalFeeAmount').val(FormatCurrency(obj[0].OrigionalFeeAmount));
	        $('#cellDiscountAmount').val(FormatCurrency(obj[0].DiscountAmount));
	        $('#cellTotalAmount').val(FormatCurrency(obj[0].OrigionalFeeAmount - obj[0].DiscountAmount));

	        $('#cellAppealIDFK').val(obj[0].AppealIDFK)
	        $('#cellInvoiceIDFK').val(obj[0].InvoiceIDFK)

	        if (obj[0].InvoiceIDFK > 0)
	        {
	            $('#cmdPayViolation').hide();
	        }
	        else
	        {
	            $('#cmdPayViolation').show();
	        }

	        if (obj[0].OrigionalFeeAmount == 0)
	        {
	            $('#cmdPayViolation').hide();
	        }


	        $('#cellNewAppealExpirationDTM').val(FormatDate(obj[0].NewAppealExpirationDTM, 'Mini'));
	        $('#cellNewAppealExpirationDTM').prop('title', FormatDate(obj[0].NewAppealExpirationDTM, 'Long'));

	        $('#cellPaymentDueDTM').val(FormatDate(obj[0].PaymentDueDTM, 'Mini'));
	        $('#cellPaymentDueDTM').prop('title', FormatDate(obj[0].PaymentDueDTM, 'Long'));

	        $('#cellPaymentDTM').val(FormatDate(obj[0].PaymentDTM, 'Mini'));
	        $('#cellPaymentDTM').prop('title', FormatDate(obj[0].PaymentDTM, 'Long'));
	    }

	    if (obj[0].BaseIssueType == 'Maintenance')
	    {
	        $('#cboWorkCompletedBy').empty();
	        $('#cboWorkCompletedBy').append('<option value="0">Choose</option>');
	        $('#divMaintenance').show();

	        if (isEmpty(obj[0].MaintenanceLocation) == false)
	        {

	        }

	        $('#lblMaintenanceLocation').text(obj[0].MaintenanceLocation);
	        $('#lblPermissionToEnter').text(obj[0].PermissionToEnter);
	        $('#lblWantsToScheduleAppointment').text(obj[0].WantsToScheduleAppointment);
	        $('#txtAppointmentDTM').val(obj[0].AppointmentDTM);

	        $('#txtWorkCompletedDTM').val(obj[0].WorkCompletedDTM);

	        $('#rdoMaintenancePriority_' + (obj[0].MaintenancePriority - 1)).prop('checked', true);


	        // Load the maintenance worker list
	        var MaintWorker = new Object();
	        MaintWorker.PropertyIDFK = PropertyIDFK;

	        $.ajax({
	            type: "POST",
	            contentType: "application/json; charset=utf-8",
	            url: "/WebServices/Monitor.asmx/GetMaintenanceWorkerList",
	            data: JSON.stringify(MaintWorker),
	            dataType: "json",
	            success: function (msg) {
	                var objWorker = JSON && JSON.parse(msg.d);

	                //Load maintenance worker list
	                for (var ff in objWorker)
	                {
	                    var sb = document.createElement("option");//create new option 
	                    sb.value = objWorker[ff].UserName;
	                    sb.text = objWorker[ff].FullName;
	                    if (obj[0].WorkCompletedByUsername == objWorker[ff].UserName)
	                    {
	                        sb.selected = true;
	                    }
	                    document.getElementById("cboWorkCompletedBy").options.add(sb);
	                }


	            },
	            error: function (msg) {
	                ShowWarningDialog('A error has occured loading the issue.');
	                Common.LogAjaxError('wucIssueDetail.ascx', 'LoadIssueData', msg.responseJSON.Message);
	            }
	        });

	    }

	    switch (obj[0].BaseIssueType)
	    {
	        case "Maintenance":

	            if (RoleName == 'Customer - Management Company User' || RoleName == 'Customer - Maintenance Supervisor' || RoleName == 'Customer - Single Property Manager')
	            {

	                if (obj[0].IssueStatus != 'Closed')
	                {
	                    $('#cmdCloseIssue').show();
	                    $('#cmdAssignIssue').show();
	                }
	            }

	            break;
	    }

	    switch (obj[0].IssueStatus)
	    {
	        case "New Unassigned Issue":
	            $('#lblIssueStatus').attr('class', 'IssueNewUnassignedIssueColor label-textbox text-center');
	            $('#cmdAssignIssue').attr('class', 'ImportantButton');
	            if (RoleName.indexOf("Emp") > -1)
	            {
	                $('#cmdCloseIssue').show();
	                $('#cmdAssignIssue').show();
	            }
	            break;

	        case "Acknowledged In Route":
	            $('#lblIssueStatus').attr('class', 'IssueAcknowledgedInRouteColor label-textbox text-center');
	            if (RoleName.indexOf("Emp") > -1)
	            {
	                $('#cmdCloseIssue').show();
	                $('#cmdAssignIssue').show();
	            }
	            break;

	        case "Arrived":
	            $('#lblIssueStatus').attr('class', 'IssueArrivedColor label-textbox text-center');
	            if (RoleName.indexOf("Emp") > -1)
	            {
	                $('#cmdCloseIssue').show();
	                $('#cmdAssignIssue').show();


	            }
	            break;

	        case "Closed":
	        case "Closed - Paid In Full":

	            $('#lblIssueStatus').attr('class', 'IssueClosedColor label-textbox text-center');
	            $('#cmdCloseIssue').hide();
	            $('#cmdAssignIssue').hide();

	            break;
        


	        case "NOT Acknowledged":
	            $('#lblIssueStatus').attr('class', 'IssueNOTAcknowledgedColor label-textbox text-center');
	            if (RoleName.indexOf("Emp") > -1)
	            {
	                $('#cmdCloseIssue').show();
	                $('#cmdAssignIssue').show();
	            }
	            break;

	        default:
	    }



	    if ($('#hidBaseIssueType').val() == 'Security' && RoleName.indexOf("Emp") > -1 && obj[0].IssueStatus != 'Closed')
	    {
	        $('#lblIssueType').addClass('IssueTypeHover');
	        $('#cmdSaveProblemAddress').show();
	    }
	    else
	    {
	        $('#lblIssueType').removeClass('IssueTypeHover');
	        $('#cmdSaveProblemAddress').hide();
	    }

	    if ($('#hidBaseIssueType').val() == 'Security' && RoleName == 'Employee - Administrator')
	    {
	        $('#lblIssueType').addClass('IssueTypeHover');
	        $('#cmdSaveProblemAddress').show();
	    }

	}

	function ShowIssueDetail(IssueIDFK) {

	    $('#divIssueNotes').empty();
	    $("#tblNotes").empty();
	    $("#hidIssueIDFK").val(IssueIDFK);
	    $('#lblIssueNumber').text(IssueIDFK);

	    $('#lblAssignedDTM').empty();
	    $('#lblAcknowledgedDTM').empty();
	    $('#lblArrivedDTM').empty();
	    $('#lblClosedDTM').empty();




	    $find('mpeIssueDetail').show();
	    
	    


	    var IssueDetail = new Object();


	    IssueDetail.IssueIDFK = IssueIDFK;

	    $.ajax({
	        type: "POST",
	        contentType: "application/json; charset=utf-8",
	        url: "/WebServices/Monitor.asmx/GetIssueDetail",
	        data: JSON.stringify(IssueDetail),
	        dataType: "json",
	        success: function (msg) {
	            var obj = JSON && JSON.parse(msg.d);
	            LoadIssueData(obj);
	        },
	        error: function (msg) {
	            ShowWarningDialog('A error has occured loading the issue.');
	            Common.LogAjaxError('wucIssueDetail.ascx', 'ShowIssueDetail', msg.responseJSON.Message);
	        }
	    });
	    $('#divOriginalNotes').css('visibility', 'hidden');
	    LoadIssueNotes(IssueIDFK, false);

	    return false;
	    $find('mpeIssueDetail').show();
	    $find('mpeIssueDetail').show();

	}

	function IncludeNoteChecked()
	{
	    var inc = $('#chkIncludeOriginalNotes').prop('checked');
	    LoadIssueNotes($('#hidIssueIDFK').val(), inc);
	    $('#hidIncludeNoteChecked').val(inc);

	}

	function LoadIssueNotes(IssueIDFK, IncludeInternal)
	{
	    $('#divIssueNotes').empty();
	    IssueDetailA.PhotoCount = 0;
	    IssueDetailA.AudioCount = 0;

	    var IssueDetail = new Object();
	    IssueDetail.IssueIDFK = IssueIDFK;
	    IssueDetail.IncludeInternal = IncludeInternal;
	    $.ajax({
	        type: "POST",
	        contentType: "application/json; charset=utf-8",
	        url: "/WebServices/Monitor.asmx/GetIssueDetailNotes",
	        data: JSON.stringify(IssueDetail),
	        dataType: "json",
	        success: function (msg) {
	            var obj = JSON && JSON.parse(msg.d);

	            for (var ff in obj)
	            {
	                IssueDetailA.LoadIssueNotes(obj[ff]);
	            }

	            $('#cmdAudio').prop('value', 'Audio - ' + IssueDetailA.AudioCount);
	            $('#cmdPhotos').prop('value', 'Photos - ' + IssueDetailA.PhotoCount);

	        },
	        error: function (msg) {
	            ShowWarningDialog('A error has occured while loading the notes.');
	            Common.LogAjaxError('wucIssueDetail.ascx', '', msg.responseJSON.Message);
	        }
	    });
	}


	function AssignIssue() {
	    var a = GetUserToAssign;
	    ShowUserSelector($('#hidBaseIssueType').val(), PropertyIDFK, a);
	}

	function GetUserToAssign() {
	    if (UserSelectorSelectedUsername.length > 0)
	    {
	        AssignIssueTo(UserSelectorSelectedUsername);
	    }
	}

	function LoadUsers() {
	    $("#slstUserList").empty();

	    var AssignList = new Object();

	    AssignList.PropertyIDFK = PropertyIDFK;
	    AssignList.BaseIssueType = $('#hidBaseIssueType').val();
	    AssignList.IncludeCustomers = true;
	    AssignList.RouteIDFK = $('#scboUserRoute').val();

	    $.ajax({
	        type: "POST",
	        contentType: "application/json; charset=utf-8",
	        url: "/WebServices/Monitor.asmx/GetAssignToList",
	        data: JSON.stringify(AssignList),
	        dataType: "json",
	        success: function (msg) {
	            var obj = JSON && JSON.parse(msg.d);

	            for (var ff in obj)
	            {
	                var sb = document.createElement("option");//create new option 
	                sb.value = obj[ff].UserName;

	                if (obj[ff].Hours > -1)
	                {
	                    sb.text = obj[ff].FullName + ' - ' + obj[ff].Hours + ' Hours ago';
	                }
	                else
	                {
	                    sb.text = obj[ff].FullName;
	                }

	                document.getElementById("slstUserList").options.add(sb);
	            }


	        },
	        error: function (msg) {

	            ShowWarningDialog('A error has occured Assigning this issue.');
	            Common.LogAjaxError('wucIssueDetail.ascx', 'LoadUsers', msg.responseJSON.Message);
	        }
	    });
	}

	function CloseIssue() {
	    $find('mpeCloseIssue').show();
	    if (USN.toUpperCase() == 'JPAGE' || USN.toUpperCase() == 'TTT' || CUID == '64653' || CUID == '69351' || CUID == '65004' || CUID == '18' || CUID == '75588' || CUID == '50910')
	    {
	        $('#chkApproveIssue').prop('checked', false);
	        $('#divApprove').show();
	    }
	    else
	    {
	        $('#divApprove').hide();
	    }
	    return false;
	}

	function SendEmail() {
	    $find('mpeEmailIssue').show();
	    $('#stxtToEmailAddress').val('');
	    //$('#stxtSubject').val('');
	    $('#stxtBody').val('');

	    return false;
	}

	function ScrubEmail(e, element) {
	    elm = element.id;
	    var code;
	    if (!e) var e = window.event;
	    if (e.which) code = e.which;
	    else if (e.keyCode) code = e.keyCode;
	    if ((code > 47 && code < 91) || (code > 95 && code < 105))
	    {

	        if (element.value.length == element.maxLength)
	        {
	            var phoneField = element.id;

	            phoneField = phoneField.replace("stxtPhone2", "stxtPhone3")
	            phoneField = phoneField.replace("stxtPhone1", "stxtPhone2")

	            document.getElementById(phoneField).focus();

	        }
	    }
	}

	function SaveMaintenanceDetail() {
	    var MaintenanceDetail = new Object();

	    MaintenanceDetail.IssueIDFK = $('#hidIssueIDFK').val();
	    MaintenanceDetail.AppointmentTime = $('#txtAppointmentDTM').val();
	    MaintenanceDetail.WorkCompletedByUsername = $('#cboWorkCompletedBy').val();
	    MaintenanceDetail.WorkCompletedTime = $('#txtWorkCompletedDTM').val();
	    MaintenanceDetail.Priority = $('#rdoMaintenancePriority input:checked').val();

	    $.ajax({
	        type: "POST",
	        contentType: "application/json; charset=utf-8",
	        url: "/WebServices/Monitor.asmx/SaveMaintenanceDetail",
	        data: JSON.stringify(MaintenanceDetail),
	        dataType: "json",
	        success: function (msg) {
	            ShowWarningDialog('Unit Information Updated Successfully!');
	        },
	        error: function (msg) {
	            ShowWarningDialog('A error has occured saving the changes.');
	            Common.LogAjaxError('wucIssueDetail.ascx', 'SaveMaintenanceDetail', msg.responseJSON.Message);
	        }
	    });
	}

	function ChangeIssueType() {
	    if ($('#hidBaseIssueType').val() == 'Security' && RoleName.indexOf("Emp") > -1 && $('#lblIssueStatus').text() != 'Closed')
	    {
	        var a = NewIssueTypeIDFK;
	        ShowIssueTypeSelector($('#hidBaseIssueType').val(), PropertyIDFK, a);
	    }
	    
	    if ($('#hidBaseIssueType').val() == 'Security' && RoleName.indexOf("Administrator") > -1 && $('#lblIssueStatus').text() == 'Closed')
	    {
	        var a = NewIssueTypeIDFK;
	        ShowIssueTypeSelector($('#hidBaseIssueType').val(), PropertyIDFK, a);
	    }


	}

	function NewIssueTypeIDFK() {
	    var IssueType = new Object();

	    IssueType.IssueIDFK = $('#hidIssueIDFK').val();
	    IssueType.NewIssueTypeIDFK = IssueTypeSelectorSelectedIssueTypeIDFK;

	    $.ajax({
	        type: "POST",
	        contentType: "application/json; charset=utf-8",
	        url: "/WebServices/Monitor.asmx/ChangeIssueType",
	        data: JSON.stringify(IssueType),
	        dataType: "json",
	        success: function (msg) {
	            ShowWarningDialog('Issue Type Changed Successfully!');
	            PerformReload = true;
	            ShowIssueDetail($('#hidIssueIDFK').val());

	        },
	        error: function (msg) {
	            ShowWarningDialog('A error has occured changing the Issue Type.');
	            Common.LogAjaxError('wucIssueDetail.ascx', 'NewIssueTypeIDFK', msg.responseJSON.Message);
	        }
	    });
	}
    


	var IssueDetailA =
        {
            PhotoCount: 0,
            AudioCount: 0,

            LoadIssueNotes: function (Note) {

                var IconName;
                var IconOnClick;
                var ImageClass = '';
                
                if (ANE == true && Note.IsInternalNote == true && (RoleName.indexOf('Employee') >= 0))
                {
                    $('#divOriginalNotes').css('visibility', 'visible');
                }

                switch (Note.NoteType.toUpperCase())
                {
                    case "PNG":

                    case "JPG":
                        //var i = PhotoCount;
                        IconName = '/Images/Camera.png';
                        ImageClass = 'Finger';

                        if (isEmpty(Note.NoteDetail) == true)
                        {
                            Note.NoteDetail = "Photo";
                        }

                        IconOnClick = "PhotoViewer.Open(''," + $('#hidIssueIDFK').val() + ", '" + TrackingNumber + "', " + Note.ID + ");";
                        IssueDetailA.PhotoCount += 1;

                        break;
                        //Photos.push("/BinaryFiles/GetBinaryFile.ashx?TrackingNumber=' + TrackingNumber + '&NoteIDFK=" + Note.ID);
                        


                    case "WAV":

                    case "MP3":
                        //var i = AudioCount;
                        IconName = '/Images/Speaker.png';
                        ImageClass = 'Finger';

                        if (isEmpty(Note.NoteDetail) == true)
                        {
                            Note.NoteDetail = "Audio";
                        }

                        IconOnClick = "AudioPlayer.Open(''," + $('#hidIssueIDFK').val() + ", '" + TrackingNumber + "', " + Note.ID + ");";

                        //Audios.push("/BinaryFiles/GetBinaryFile.ashx?TrackingNumber=' + TrackingNumber + '&NoteIDFK=" + Note.ID);
                        //IconOnClick = "JumpToAudio('/BinaryFiles/GetBinaryFile.ashx?TrackingNumber=" + TrackingNumber + "&NoteIDFK=" + Note.ID + "', " + i + ")";
                        IssueDetailA.AudioCount += 1;
                        break;

                    case "HTX":
                        IconName = '/Images/NewNotesm.png';
                        break;

                    case "EML":
                        IconName = '/Images/NewEmail.gif';
                        Note.NoteDetail = Note.NoteDetail.replace('Email To:', 'To: ');
                        Note.NoteDetail = Note.NoteDetail.replace('Email From:', 'From: ');
                        Note.NoteDetail = Note.NoteDetail.replace('Email Subject:', 'Subject: ');
                        Note.NoteDetail = Note.NoteDetail.replace('Email Body:', 'Body: ');

                        break;

                    case "WTX":
                        IconName = '/Images/NewNotesm.png';
                        break;

                    case "PDF":
                        IconName = '/Images/PDF.gif';
                        ImageClass = 'Finger';
                        IconOnClick = "window.open('/BinaryFiles/GetBinaryFile.ashx?TrackingNumber=" + TrackingNumber + "&NoteIDFK=" + Note.ID + "', 'blank');";
                        break;

                    case "XLS":
                        IconName = '/Images/Excel.gif';
                        ImageClass = 'Finger';
                        IconOnClick = "window.open('/BinaryFiles/GetBinaryFile.ashx?TrackingNumber=" + TrackingNumber + "&NoteIDFK=" + Note.ID + "', 'blank');";
                        break;

                    case "DOC":
                        IconName = '/Images/Word.gif';
                        ImageClass = 'Finger';
                        IconOnClick = "window.open('/BinaryFiles/GetBinaryFile.ashx?TrackingNumber=" + TrackingNumber + "&NoteIDFK=" + Note.ID + "', 'blank');";
                        break;

                    case "DOCX":
                        IconName = '/Images/Word.gif';
                        ImageClass = 'Finger';
                        IconOnClick = "window.open('/BinaryFiles/GetBinaryFile.ashx?TrackingNumber=" + TrackingNumber + "&NoteIDFK=" + Note.ID + "', 'blank');";
                        break;
                }



                var template = $('#hidden-template-issuenote').html();

                var cur = '';
                var z = '';

                if (ANE == true && (RoleName.indexOf('Employee') >= 0))
                {
                    var noteClick = 'onclick="IssueNoteEdit.Open(' + Note.IssueIDFK + ', ' + Note.ID + ');"';
                    var cur = 'cursor: pointer;';
                }

                if (Note.IsInternalNote == true && $('#chkIncludeOriginalNotes').prop('checked') == true)
                {
                    z = 'font-style: italic;';
                }
                 
                if (Note.IsInternalNote == true && $('#chkIncludeOriginalNotes').prop('checked') == false)
                    return;

                $('#divIssueNotes').prepend(template.format({
                    TIME: Note.Time,
                    DATE: Note.Date,
                    NOTEDETAIL: Note.NoteDetail,
                    NOTETYPE: Note.NoteType,
                    ICONONCLICK: IconOnClick,
                    IMAGECLASS: ImageClass,
                    IMAGENAME: IconName,
                    NOTEIDFK: Note.ID,
                    ISSUEIDFK: Note.IssueIDFK,
                    INTERNALNOTE: z,
                    ONCLICK: noteClick,
                    CURSOR: cur,
                    FULLNAME: Note.FullName
                }));
            }
                }

                //else if (Note.IsInternalNote == false)
                //{
                //    $('#divIssueNotes').prepend(template.format({
                //        TIME: Note.Time,
                //        DATE: Note.Date,
                //        NOTEDETAIL: Note.NoteDetail,
                //        NOTETYPE: Note.NoteType,
                //        ICONONCLICK: IconOnClick,
                //        IMAGECLASS: ImageClass,
                //        IMAGENAME: IconName,
                //        NOTEIDFK: Note.ID,
                //        ISSUEIDFK: Note.IssueIDFK,
                //        INTERNALNOTE: z,
                //        ONCLICK: noteClick
                //    }));
                //}



                //var usrSrc = $('#msgUserImage' + UserName.toUpperCase()).attr('src');
                //AddNoteTableRow(obj[ff].Time, obj[ff].Date, obj[ff].NoteType, obj[ff].NoteDetail, obj[ff].ID, obj[ff].CreatedByUsername, obj[ff].FullName);
                //if (isEmpty(usrSrc) == true)

            
        

</script>


<style>
    .IssueTypeHover:hover 
    {
        
        
        cursor: pointer;
        color: #03508e !important;
        
        
        
    }

    .NoteTime 
    {
        text-align: right; 
        display: block; 
        margin: 3px 2px 0px 10px; 
        font-size: small;
        min-height: 0px;
        line-height: 10px;
    }

    .NoteDate
    {
        text-align: right; 
        display: block; 
        margin: 1px 2px 3px 10px; 
        font-size: small; 
        font-weight: bold; 
        color: #668faa;
        min-height: 0px;
    }

    .NoteDetail
    {
        word-wrap: break-word;
        display: block; 
        width: 320px;
    }
</style>


<script id="hidden-template-issuenote" type="text/html">

    <div title="Created By: {FULLNAME}">
        <div style="float: left;">
            <img src="{IMAGENAME}" onclick="{ICONONCLICK}" class="{IMAGECLASS}" style="margin-top: 15px; margin-left: 20px;  width: 15px;" />
        </div>
        <div style="float: left; width: 74px;">
            <label class="NoteTime">{TIME}</label>
            <label class="NoteDate">{DATE}</label>
        </div>
        <div style="float: left;">
            <label {ONCLICK} class="label-textbox NoteDetail" style="{CURSOR} white-space: pre-wrap; {INTERNALNOTE}">{NOTEDETAIL}</label>
        </div>
    </div>
    <div style="clear: both;"></div>

</script>



<input type="hidden" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$hidIssueIDFK" id="hidIssueIDFK">
<input type="hidden" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$hidBaseIssueType" id="hidBaseIssueType">
<input type="hidden" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$hidIssueLevel" id="hidIssueLevel">
<input type="hidden" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$hidLongitude" id="hidLongitude">
<input type="hidden" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$hidLatitude" id="hidLatitude">
<input type="hidden" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$hidAddressLongitude" id="hidAddressLongitude">
<input type="hidden" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$hidAddressLatitude" id="hidAddressLatitude">
<input type="hidden" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$hidAddressRadius" id="hidAddressRadius">


<input type="hidden" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$hidTrackingNumber" id="hidTrackingNumber">
<input type="hidden" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$hidBinaryUploadID" id="hidBinaryUploadID">
<input type="hidden" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$hidBinaryDatabaseIDFK" id="hidBinaryDatabaseIDFK">
<input type="hidden" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$hidFileName" id="hidFileName">
<input type="hidden" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$hidFileExtension" id="hidFileExtension">
<input type="hidden" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$hidIncludeNoteChecked" id="hidIncludeNoteChecked" value="false">










<div style="width: 975px; height: 675px;">


    <div id="divIssueDetailHeader" class="PopupTitleBar">

        <div style="float: left;">
            <img id="imgBaseIssueType" src="https://demo2.silvertracker.net/AdminCustomer/Issues/Monitor.aspx" style="display: none;">
            <label>Issue Type</label>
            <span id="lblIssueType" onclick="ChangeIssueType();"></span>
        </div>
        <div style="float: right;">
            <label>Issue #</label>
            <span class="IssueDetailIssueNumberTextColor" id="lblIssueNumber"></span>
            <img id="cmdHide" src="./Monitor_files/CloseNormal.png" title="Close" style="cursor: pointer; display: none;">
            <div class="CloseIcon" onclick="$find(&#39;mpeIssueDetail&#39;).hide();" style="margin-left: 20px;"></div>
        </div>

    </div>



    <div class="PopupBody" style="height: 625px;">

        <div style="float: left; width: 485px; height: 525px; overflow-x: hidden;">

            <div style="width: 437px;" class="BodyLabel">
                Reported Detail
                    <span id="spnQRImage" style="float: right; margin-left: 10px; display: none;">
                        <img src="./Monitor_files/checkpointgreysm.png" title="Issue created from QR code" style="height: 25px; vertical-align: top;" alt=""></span>
                <span id="spnUrgent" style="float: right; color: red; margin: 0px 10px 0px 10px;" title="This issue was reported as Urgent!">Urgent</span>
                <span id="spnLevel" style="float: right; border-radius: 1px; border: 1px solid #cccccc; padding: 0px 15px 0px 15px;"></span>

            </div>
            <label id="lblReportedDetail" class="label-textbox" style="width: 420px;"></label>

            <label class="label-vertical">Property</label>
            <label id="lblProperty" class="label-textbox" style="width: 420px;"></label>

            <label class="label-vertical" id="lblLocationTitle">Location</label>
            <label id="lblLocation" class="label-textbox" style="width: 420px;"></label>

            <div class="label-vertical" id="lblReportedByTitle">Reported By</div>

            <label id="lblAnonymous" style="display: none;" class="WarningLabel">REMAIN ANONYMOUS</label>

            <label id="lblReportedBy" class="label-textbox" style="width: 420px;"></label>

            <div id="divSecurity">
                <label class="label-vertical">Reported Address</label>
                <label id="txtReportedProblemPropertyAddress" class="label-textbox" style="width: 420px;"></label>

                <label class="label-vertical">Approx Occurrence Time</label>
                <label id="txtReportedIncidentDTM" class="label-textbox" title="Approximate time reporting person believes this issue occured." style="width: 420px;"></label>

                <label class="label-vertical">Actual Address / Unit</label>
                <select id="scboActualAddress" style="width: 280px;"></select>
                <select id="scboActualUnit" style="width: 120px; display: none;"></select>

                <input id="cmdSaveProblemAddress" type="button" value="Save Address">

            </div>

            <div id="divParking">
                <div class="BodyLabel" id="Div1">Parking Detail</div>
                <table style="width: 100%;">
                    <tbody><tr>
                        <td class="cr">Appeal #</td>
                        <td>
                            <input type="text" class="Textbox TextboxReadOnly" readonly="" id="cellAppealIDFK" style="width: 110px;"></td>

                        <td class="cr">Invoice #</td>
                        <td>
                            <input type="text" class="Textbox TextboxReadOnly" readonly="" id="cellInvoiceIDFK" style="width: 90px;"></td>

                    </tr>
                    <tr>
                        <td class="cr">Appeal Exp Date</td>
                        <td>
                            <input type="text" class="Textbox TextboxReadOnly" readonly="" id="cellNewAppealExpirationDTM" style="width: 110px;"></td>

                        <td class="cr">Origional Fee</td>
                        <td>
                            <input type="text" class="Textbox TextboxReadOnly" readonly="" id="cellOrigionalFeeAmount" style="width: 90px;"></td>

                    </tr>
                    <tr>
                        <td class="cr">Payment Due</td>
                        <td>
                            <input type="text" class="Textbox TextboxReadOnly" readonly="" id="cellPaymentDueDTM" style="width: 110px;"></td>

                        <td class="cr">Discount</td>
                        <td>
                            <input type="text" class="Textbox TextboxReadOnly" readonly="" id="cellDiscountAmount" style="width: 90px;"></td>

                    </tr>
                    <tr>
                        <td class="cr">Payment Date</td>
                        <td>
                            <input type="text" class="Textbox TextboxReadOnly" readonly="" id="cellPaymentDTM" style="width: 110px;"></td>

                        <td class="cr">Total Amount</td>
                        <td>
                            <input type="text" class="Textbox TextboxReadOnly" readonly="" id="cellTotalAmount" style="width: 90px;"></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="cc">
                            <br>
                            <input id="cmdPayViolation" type="button" value="Pay Violation" onclick="PayIssue();">
                            <br>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" class="cc">

                            <input type="submit" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$cmdValidVehicle" value="Reported Valid Vehicle" id="cmdValidVehicle">
                            <input type="submit" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$cmdViolatingVehicle" value="Reported Violating Vehicle" id="cmdViolatingVehicle" style="margin-bottom: 20px;">


                        </td>
                    </tr>
                </tbody></table>
            </div>

            <div id="divMaintenance">
                <label class="LabelColor1">Maintenance Detail</label>

                <div>
                    <label class="label-horizontal" style="width: 170px;">Permission To Enter</label>
                    <label id="lblPermissionToEnter" class="label-textbox" style="width: 240px;"></label>
                </div>

                <div>
                    <label class="label-horizontal" style="width: 170px;">Schedule Appointment</label>
                    <label id="lblWantsToScheduleAppointment" class="label-textbox" style="width: 240px;"></label>
                </div>

                <div>
                    <label class="label-horizontal" style="width: 170px;">Priority</label>
                    <table id="rdoMaintenancePriority" name="mygroup" style="display: inline; vertical-align: sub;">
	<tbody><tr>
		<td><input id="rdoMaintenancePriority_0" type="radio" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$rdoMaintenancePriority" value="1"><label for="rdoMaintenancePriority_0">1</label></td><td><input id="rdoMaintenancePriority_1" type="radio" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$rdoMaintenancePriority" value="2"><label for="rdoMaintenancePriority_1">2</label></td><td><input id="rdoMaintenancePriority_2" type="radio" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$rdoMaintenancePriority" value="3"><label for="rdoMaintenancePriority_2">3</label></td><td><input id="rdoMaintenancePriority_3" type="radio" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$rdoMaintenancePriority" value="4"><label for="rdoMaintenancePriority_3">4</label></td><td><input id="rdoMaintenancePriority_4" type="radio" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$rdoMaintenancePriority" value="5"><label for="rdoMaintenancePriority_4">5</label></td>
	</tr>
</tbody></table>
                </div>

                <div>
                    <label class="label-horizontal" style="width: 170px;">Maintenance Location</label>
                    <label id="lblMaintenanceLocation" class="label-textbox" style="width: 240px;"></label>
                </div>

                <div>
                    <label class="label-horizontal" style="width: 170px;">Appointment Time</label>
                    <input name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$txtAppointmentDTM" type="text" id="txtAppointmentDTM" style="width:240px;">
                </div>

                <div>
                    <label class="label-horizontal" style="width: 170px;">Work Completed By</label>
                    <select id="cboWorkCompletedBy" style="width: 240px;">
                        <option></option>

                    </select>
                </div>

                <div>
                    <label class="label-horizontal" style="width: 170px;">Work Completed Time</label>
                    <input id="txtWorkCompletedDTM" type="text" value="" style="width: 240px;">
                </div>

                <div class="text-center">
                    <input id="cmdSaveMaintenance" type="button" value="Save Maintenance Changes" style="margin-top: 20px; margin-bottom: 20px;" onclick="SaveMaintenanceDetail();">
                </div>

            </div>




        </div>


        <div style="float: right; width: 466px; margin: 0px 0px 10px 0px;">

            <div class="text-right" style="margin-right: 18px;">

                <div>
                    <label class="label-horizontal">Status</label>
                    <label id="lblIssueStatus" class="IssueDetailStatus" style="width: 320px;"></label>
                </div>

                <div>
                    <label class="label-horizontal">Created</label>
                    <label id="lblCreatedDTM" class="label-textbox text-left text-nowrap" style="width: 320px;"></label>
                </div>

                <div>
                    <label class="label-horizontal">Assigned</label>
                    <label id="lblAssignedDTM" class="label-textbox text-left text-nowrap" style="width: 320px;"></label>
                </div>

                <div>
                    <label class="label-horizontal">Ack</label>
                    <label id="lblAcknowledgedDTM" class="label-textbox text-left text-nowrap" style="width: 320px;"></label>
                </div>

                <div>
                    <label class="label-horizontal">Arrived</label>
                    <label id="lblArrivedDTM" class="label-textbox text-left text-nowrap" style="width: 320px;"></label>
                </div>

                <div>
                    <label class="label-horizontal">Closed</label>
                    <label id="lblClosedDTM" class="label-textbox text-left text-nowrap" style="width: 320px;"></label>
                </div>
            </div>

            <div class="text-right" id="divOriginalNotes" style="visibility: hidden;">
                <label style="margin-right: 20px; cursor: pointer; font-style: italic;">Show Internal Notes<input type="checkbox" id="chkIncludeOriginalNotes" onclick="IncludeNoteChecked();"></label>
            </div>
            
            <div id="divIssueNotes" style=" height: 300px; overflow: auto;">
            </div>



        </div>



        <div style="padding-top: 20px; clear: both;">
            <input type="button" id="cmdAssignIssue" value="Assign To" style="display: none;" onclick="AssignIssue();">
            <input type="button" id="cmdAddNote" value="Add Note" onclick="AddNote();">
            <input type="button" id="cmdEmailIssue" value="Email" onclick="SendEmail();">

            <input type="submit" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$scmdPrintIssue" value="Print" onclick="Common.LogIntercomEvent(&#39;DownloadedIncidentReport&#39;);" id="scmdPrintIssue">

            <input id="cmdCloseIssue" type="button" value="Close" style="display: none;" onclick="CloseIssue();">
            <input id="cmdDisplayGPS" type="button" value="GPS Map" class="ImportantButton" onclick="return ShowGPSIssueMap();" style="display: none;">

            <input style="float: right;" type="button" id="cmdAudio" value="Audio" onclick="AudioPlayer.Open(event, $(&#39;#hidIssueIDFK&#39;).val(), TrackingNumber);">
            <input style="float: right;" type="button" id="cmdPhotos" value="Photos" onclick="PhotoViewer.Open(event, $(&#39;#hidIssueIDFK&#39;).val(), TrackingNumber);">

        </div>


    </div>



</div>






<div id="divGPSMap" style="width: 850px; display: none; position: fixed; z-index: 100001;">

    <div class="PopupTitleBar">
		<label>GPS Map Location</label>
        <div class="CloseIcon" id="btnMapClose"></div>
	</div>

	<div class="PopupBody">
        <div id="divGPSIssueMap" style="height: 500px; margin: 5px; border: 1px solid gray;">
        </div>
        <div style="text-align: center; color: red;">NOTE! GPS View within the Issue Details does NOT show photos or issue data when scrolling over the balloon.  This feature is ONLY available under the GPS Map located in the issues Tab on the Menu bar</div>
    </div>
</div>

<div id="divSendEmail" style="width: 550px; display: none; position: fixed; z-index: 100001;">

    <div class="PopupTitleBar">
        <label>Send Email</label>
        <input id="scmdCancelEmail" type="button" value="X" title="Cancel" style="display: none;">
        <div class="CloseIcon" onclick="$find(&#39;mpeEmailIssue&#39;).hide();"></div>
    </div>


    <div class="PopupBody">
        <div class="BodyLabel">To</div>
        <input type="text" name="email" id="stxtToEmailAddress" style="width: 510px">
        <label class="WarningLabel">For multiple recipients, make sure you separate the email addresses with a comma!</label>
        
        <div class="BodyLabel">Subject</div>
        <input name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$stxtSubject" type="text" id="stxtSubject" style="width:460px;">
        <input type="button" title="Clear Subject Line" value="X" style="margin-left: 10px;" onclick="$(&#39;#stxtSubject&#39;).val(&#39;&#39;);">
        
        <div class="BodyLabel">Body</div>
        <textarea name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$stxtBody" rows="2" cols="20" id="stxtBody" style="height:250px;width:510px;"></textarea>
        <input type="submit" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$scmdSendEmail" value="Send" onclick="return SendNewEmail();" id="scmdSendEmail">

        <span style="float: right; padding-right: 14px;"><input id="schkAttachIssue" type="checkbox" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$schkAttachIssue" checked="checked"><label for="schkAttachIssue">Attach This Issue To Email</label></span>

        
    </div>
</div>

<div id="divAddNote" style="width: 500px; display: none; position: fixed; z-index: 100001;">

    <div class="PopupTitleBar">
        <label>Add New Note or Attachment</label>
        <div class="CloseIcon" onclick="$find(&#39;mpeAddNote&#39;).hide();"></div>
        <input id="scmdCancelNewNote" type="button" value="X" title="Cancel" style="display: none; float: right; font-size: x-large; margin-top: 20px; margin-right: 10px; margin-left: 20px;">
    </div>

    <div class="PopupBody">
        <div class="BodyLabel">Note/Attachment Description</div>
        <textarea name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$stxtAddNewNote" rows="2" cols="20" id="stxtAddNewNote" style="height:250px;width:460px;margin-bottom: 10px;"></textarea>
        
        <div class="BodyLabel" id="lblSelectAttachment">Select Attachment</div>

        <div id="fuAttachmentUpload" class="HelpButton">
	<input type="hidden" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$fuAttachmentUpload$ctl00"><div><input name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$fuAttachmentUpload$ctl02" type="file" id="AdminCustomer_ContentPlaceHolder1_wucIssueDetail_fuAttachmentUpload_ctl02" style="width:400px;"></div>
</div>

        <div style="text-align: center;">
            <input id="scmdAddNewNote" type="button" value="Add Note or Attachment" onclick="AddNewNote();" style="margin: 5px;">
        </div>
    </div>

</div>

<div id="divCloseIssue" style="width: 500px; display: none; position: fixed; z-index: 100001;">
    <div class="PopupTitleBar">
        <label>Close Issue</label>
    </div>
    <div class="PopupBody" style="text-align: center;">
        <br>
        Are you sure you would like to Close this Issue?<br>
        <br>
        Although viewing and adding additional notes can be completed to a Closed Issue at anytime, Closed issues CANNOT be re-opened.
		<br>
        <br>
        A Closed Issue simply indicates the issue has been handled and completed to it's full extent.
		<br>
        <br>
        <div id="divApprove" style="margin: 10px; display: none;">
            <label class="WarningLabel" title="This will close the issue and add a note indicating it was approved.  This also will send a notification to users that have subscribed to a Notify on Close issue type.">Approve Issue<input type="checkbox" id="chkApproveIssue"></label>
        </div>
        <div style="text-align: center;">

            <input type="button" id="cmdReallyCloseIssue" value="Yes, Close This Issue!" title="Yes, Close This Issue!" onclick="ReallyCloseIssue();">
            <input type="submit" name="AdminCustomer$ContentPlaceHolder1$wucIssueDetail$cmdCancelClose" value="Cancel" id="cmdCancelClose">
        </div>
        <br>

    </div>
</div>


<div id="divPicZoom" style="width: 660px; z-index: 100001; display: none; height: 500px; position: fixed;">

    <div class="divIssueTitleBar" style="border-bottom: solid 1px gray;">
        <span class="HeaderLabel" style="color: white;">Photo</span>
        <input id="cmdClosePic" type="button" value="X" style="float: right; font-size: x-large; margin-top: 20px; margin-right: 10px; margin-left: 20px;">
    </div>



    <div class="DivBodyLarge" style="padding: 10px;">
        <img id="imgZoomPic" src="https://demo2.silvertracker.net/AdminCustomer/Issues/Monitor.aspx" style="width: 640px" alt="">
    </div>
</div>




<script lang="javascript">

	

	$(function ()
	{

	});

	var IssueNoteEdit = {

	    CallBackOnClose: null,
	    mIssueIDFK: 0,
        mNoteIDFK: 0,

		Open: function(IssueIDFK, NoteIDFK, CallBack)
		{
			this.Clear();
			this.CallBackOnClose = CallBack;	
			Common.Show('divIssueNoteEdit', 17000);

			$(document).off().keyup();

			$(document).on().keyup(function (e)
			{
				$(document).off().keyup();
				if (e.which == 27)
					IssueNoteEdit.Close();
			});

			IssueNoteEdit.LoadNote(IssueIDFK, NoteIDFK);
		},

		Close: function()
		{
			Common.Pop('divIssueNoteEdit');
			this.Clear();
			//this.CallBackOnClose();
			
		},

		Clear: function()
		{
		},

		LoadNote: function(IssueIDFK, NoteIDFK)
		{
		    IssueNoteEdit.mIssueIDFK = IssueIDFK;
		    IssueNoteEdit.mNoteIDFK = NoteIDFK;

			var Post = new Object()
			Post.Action = 'GetIssueDetailNote';
			Post.IssueIDFK = IssueIDFK;
			Post.NoteIDFK = NoteIDFK;

			$.ajax({
				type: "POST",
				contentType: "application/json; charset=utf-8",
				url: "/API/API.ashx",
				data: JSON.stringify(Post),
				dataType: "json",
				success: function (msg)
				{

				    $('#txtNoteDetail').val(msg[0].NoteDetail);
				    $('#lblFullName').text(msg[0].Date + ' ' + msg[0].Time + ' - ' + msg[0].FullName);

				    if (msg[0].IsInternalNote == true)
				    {
				       // $('#cmdMarkAvailable').show();
				    }

					//for (var item in msg)
					//{
					//	// Objects - msg[item].PropertyIDFK
					//}

					//if (msg.length == 0)
						//ShowWarningDialog('No Items were found for this search.');

				},
				error: function (msg)
				{
					ShowWarningDialog('A error has occured.');
				}
			});

		},

		SaveNote: function (IssueIDFK, NoteIDFK) {

		    var Post = new Object()
		    Post.Action = 'SaveNoteEdited';
		    Post.IssueIDFK = IssueNoteEdit.mIssueIDFK;
		    Post.NoteIDFK = IssueNoteEdit.mNoteIDFK;
		    Post.NoteDetail = $('#txtNoteDetail').val();

		    $.ajax({
		        type: "POST",
		        contentType: "application/json; charset=utf-8",
		        url: "/API/API.ashx",
		        data: JSON.stringify(Post),
		        dataType: "json",
		        success: function (msg) {
		            IssueNoteEdit.Close();
		            ShowIssueDetail($('#hidIssueIDFK').val());
		            //if (msg.length == 0)
		            //ShowWarningDialog('No Items were found for this search.');

		        },
		        error: function (msg) {
		            ShowWarningDialog('A error has occured.');
		        }
		    });

		}

	}

</script>

<div id="divIssueNoteEditMask" class="PopupMask"></div>
<div id="divIssueNoteEdit" style="width: 900px; display: none;">

	<div class="PopupTitleBar">
		<label>Issue Note Detail</label>
		<div class="CloseIcon" onclick="IssueNoteEdit.Close();"></div>
	</div>

	<div class="PopupBody" style="padding: 10px;">
        <div>
            <label class="label-horizontal" style="width: 200px; vertical-align: top;">Created By</label>
            <label class="label-textbox" id="lblFullName"></label>
        </div>

        <div>
            <label class="label-horizontal" style="width: 200px; vertical-align: top;">Note Detail</label>
            <textarea id="txtNoteDetail" style="width: 600px; height: 250px;"></textarea>
        </div>


        <div class="text-center">
            <label class="WarningLabelSmall">Editing a Note will result in creation of a new Note and the old one will be flagged as Internal Only.</label><br>
            <input type="button" value="Save Edited Note" onclick="IssueNoteEdit.SaveNote();">
            <input type="button" value="Mark Available To All" id="cmdMarkAvailable" style="display: none;">
        </div>


    </div>
	
    

</div>


        <div id="mpeCloseIssue_backgroundElement" class="modalBackground" style="display: none; position: fixed; left: 0px; top: 0px; z-index: 10000;"></div><div id="mpeAddNote_backgroundElement" class="modalBackground" style="display: none; position: fixed; left: 0px; top: 0px; z-index: 10000;"></div><div id="mpeEmailIssue_backgroundElement" class="modalBackground" style="display: none; position: fixed; left: 0px; top: 0px; z-index: 10000;"></div><div id="mpeShowGPS_backgroundElement" class="modalBackground" style="display: none; position: fixed; left: 0px; top: 0px; z-index: 10000;"></div><div id="mpePicZoom_backgroundElement" class="modalBackground" style="display: none; position: fixed; left: 0px; top: 0px; z-index: 10000;"></div></div>

        <div id="MonitorMainChat">
            <div id="MonitorMain" style="width: 975px; height: 675px; vertical-align: top; display: inline-block;">
                <div class="DivHeaderLarge">
                    
                    <div class="left" style="width: 150px; height: 1px;"></div>
                
                    <div class="right text-right" style="width: 150px;">
                        
                        <a href="https://silvertracsoftware.wistia.com/medias/99ig7wuzxo?popover=true" class="wistia-popover[height=450,playerColor=bf262a,width=800]">
                            <input type="button" style="font-size: x-small !important;" class="HelpButton" value="Show Me How"></a>

                    </div>
                    
                    <div style="margin: 0 auto;">Issue Monitor</div>

                </div>

                <div class="DivBodyLarge" style="padding: 1px;">
                    <div style="padding: 1px;">
                        <label style="font-size: small; width: 80px;" class="text-center">Issue ID</label>
                        <label style="width: 38px;"></label>
                        <select name="AdminCustomer$ContentPlaceHolder1$scboPropertyIDFK" id="scboPropertyIDFK" class="FilterWatermark" onchange="GoSearch();" style="width: 166px;">
	<option selected="selected" value="0">Property Name</option>
	<option value="67667">Alpha Patrol </option>
	<option value="98306">Article Building</option>
	<option value="101893">Austin American Statesman</option>
	<option value="101135">Ben White Bingo</option>
	<option value="67668">Bravo Patrol </option>
	<option value="97891">Cambria Hotel Construction</option>
	<option value="102516">CKD Corporation</option>
	<option value="87290">Corazon Apartments</option>
	<option value="40457">Crossroads Apartments</option>
	<option value="65405">CryoLife</option>
	<option value="26414">Falcon Patrol Office </option>
	<option value="95469">Goodnight Ranch</option>
	<option value="85393">H-Mart</option>
	<option value="98683">Holiday Inn 8111 </option>
	<option value="101724">Lanier Village</option>
	<option value="101824">Manor High School</option>
	<option value="102406">Manor ISD Patrols</option>
	<option value="101825">Manor Middle School</option>
	<option value="101821">Manor Sr. High School</option>
	<option value="97182">Menlo @ Mueller</option>
	<option value="97016">Motel 6 @ IH 35</option>
	<option value="91979">MT Supermarket</option>
	<option value="84390">Officer Vehicle Inspection </option>
	<option value="64356">Pointe On Rio</option>
	<option value="64099">River Ranch</option>
	<option value="99537">Riverside Ben White Assemblage LLC</option>
	<option value="98929">Rosemont </option>
	<option value="101347">Samoo Associates</option>
	<option value="102135">Siena Patio Homes</option>
	<option value="94609">Standby Officer </option>
	<option value="86038">Supervisor </option>
	<option value="93919">Test Property</option>
	<option value="100210">Test2</option>
	<option value="100209">The Grand Tuscany</option>
	<option value="68081">Tropicana 1</option>
	<option value="97474">Ventura Apartments/Quail Creek Apartments</option>
	<option value="40636">Villas Del Sol </option>
	<option value="62045">Wildwood Apartments </option>

</select>
                        <select name="AdminCustomer$ContentPlaceHolder1$scboIssueTypeIDFK" id="scboIssueTypeIDFK" class="FilterWatermark" onchange="GoSearch();" style="width: 170px;">
	<option selected="selected" value="0">Reported Issue</option>
	<option value="246692">(S) 1. property inspection</option>
	<option value="184849">(S) 3</option>
	<option value="207697">(S) Alarm </option>
	<option value="366334">(S) Apartment 131</option>
	<option value="126604">(S) APD </option>
	<option value="415538">(S) Bag Inspection</option>
	<option value="273996">(S) Bathroom Break (end)</option>
	<option value="273995">(S) Bathroom Break (start)</option>
	<option value="415537">(S) Camera Violation</option>
	<option value="127101">(S) Car broken into. </option>
	<option value="348409">(S) Clock In </option>
	<option value="348410">(S) Clock Out </option>
	<option value="327300">(S) Club Room</option>
	<option value="150611">(S) Courtesy call </option>
	<option value="164865">(S) Criminal Trespassing </option>
	<option value="123747">(S) Default</option>
	<option value="386841">(S) Delivery Bay</option>
	<option value="150446">(S) Disturbance </option>
	<option value="126945">(S) door found unsecured </option>
	<option value="158575">(S) Drinking Alcohol In Public </option>
	<option value="414586">(S) Employee Escort</option>
	<option value="207696">(S) EMS </option>
	<option value="368191">(S) End Lunch</option>
	<option value="348414">(S) End Lunch Break </option>
	<option value="302878">(S) End Shift Vehicle Inspection</option>
	<option value="190822">(S) Entrance Gate </option>
	<option value="190823">(S) Exit Gate </option>
	<option value="327299">(S) Exterior Patrol</option>
	<option value="150444">(S) Fight</option>
	<option value="124458">(S) fire </option>
	<option value="294169">(S) Fire Watch</option>
	<option value="179147">(S) Fire Watch Security Inspection</option>
	<option value="207698">(S) Fitness Center </option>
	<option value="368227">(S) Floor levels (1 to 3)</option>
	<option value="368194">(S) Floor levels (10 to 15)</option>
	<option value="368193">(S) Floor levels (16 to 21)</option>
	<option value="368192">(S) Floor levels (22 to 27)</option>
	<option value="368195">(S) Floor levels (4 to 9)</option>
	<option value="327297">(S) Garage</option>
	<option value="386737">(S) Garbage Pick Up</option>
	<option value="419884">(S) HOA Violation</option>
	<option value="150443">(S) Homeless On the property </option>
	<option value="311079">(S) Hourly Patrol </option>
	<option value="416651">(S) Hourly Report</option>
	<option value="327302">(S) Interior</option>
	<option value="327355">(S) Interior patrol</option>
	<option value="419883">(S) Landscaping Issue</option>
	<option value="152884">(S) Laundry Room</option>
	<option value="204733">(S) Light Check up</option>
	<option value="245963">(S) Lights Checkup </option>
	<option value="130748">(S) Lights out</option>
	<option value="377145">(S) Loading Bay</option>
	<option value="191665">(S) Lost and found </option>
	<option value="150445">(S) Loudness</option>
	<option value="261865">(S) Lunch Break </option>
	<option value="263434">(S) Lunch break finish</option>
	<option value="156072">(S) Mailing Area/Mailbox </option>
	<option value="368200">(S) Marketplace</option>
	<option value="127100">(S) OFF DUTY </option>
	<option value="320148">(S) Off-Site</option>
	<option value="127099">(S) on duty </option>
	<option value="320149">(S) On-site</option>
	<option value="149726">(S) Parking Lot </option>
	<option value="300286">(S) Patrol Unit Inspection </option>
	<option value="386139">(S) Phase 1</option>
	<option value="386140">(S) Phase 2</option>
	<option value="184847">(S) point 1</option>
	<option value="184848">(S) point 2</option>
	<option value="268184">(S) Police </option>
	<option value="132422">(S) POOL </option>
	<option value="126947">(S) property inspection  </option>
	<option value="384253">(S) Radio Check</option>
	<option value="332508">(S) Resident Room Access</option>
	<option value="158576">(S) Residents Volition </option>
	<option value="274010">(S) Restroom </option>
	<option value="150447">(S) Robbery </option>
	<option value="327298">(S) Rooftop</option>
	<option value="368534">(S) Rooftop Park and Amenities </option>
	<option value="311077">(S) Shoplifting </option>
	<option value="190825">(S) Smoking Marijuana in Public </option>
	<option value="267881">(S) SMPD</option>
	<option value="359960">(S) Stairwells</option>
	<option value="348412">(S) Start Lunch </option>
	<option value="348413">(S) Start Lunch Break </option>
	<option value="302877">(S) start shift Vehicle Inspection</option>
	<option value="278224">(S) Storage Room </option>
	<option value="252665">(S) Supervisor Inspection </option>
	<option value="252919">(S) Supervisor Report </option>
	<option value="164461">(S) Suspicious Activity </option>
	<option value="274132">(S) Tow Request </option>
	<option value="318505">(S) Trespassing </option>
	<option value="377905">(S) Unit 663</option>
	<option value="316719">(S) Vacant Apartment Check</option>
	<option value="403726">(S) Vandalism or Break In</option>
	<option value="318504">(S) Vehicle accident  </option>
	<option value="296989">(S) Vehicle Inspection </option>
	<option value="149725">(S) Warning Ticket </option>
	<option value="160356">(S) Weekend DayTime Patrol </option>
	<option value="419304">(S) Yard Violation</option>
	<option value="246729">(P) 1st Violation</option>
	<option value="273997">(P) Parking pass</option>
	<option value="419881">(P) Parking Violation</option>
	<option value="419880">(P) Vehicle parked on Roadway</option>
	<option value="419882">(P) Vehicle Repairs</option>
	<option value="124457">(M) property damage </option>

</select>
                        <input name="AdminCustomer$ContentPlaceHolder1$stxtCreatedDTM" type="text" id="stxtCreatedDTM" class="FilterWatermark" placeholder="Created Date" style="width: 140px;">
                        <label id="txtClearCreatedDTM" class="WarningLabel" onclick="ClearCreatedDTM();" title="Clears the Created Date Field" style="cursor: pointer; position: fixed; margin-left: -25px; margin-top: 4px; display: none; ">X</label>  

                        <input id="stxtCreatedBy" type="text" class="FilterWatermark" style="width: 85px;" readonly="" onclick="FindCreatedBy();" placeholder="Created By">
                        <label id="txtClearCreatedBy" class="WarningLabel" onclick="ClearCreatedBy();" title="Clears the Created By Field" style="cursor: pointer; position: fixed; margin-left: -25px; margin-top: 4px; display: none; ">X</label>  

                        <select id="scboIssueLevel" class="FilterWatermark" onchange="GoSearch();" style="width: 55px;">
                            <option value="0">All</option>
                            <option value="1">Level 1</option>
                            <option value="2">Level 2</option>
                            <option value="3">Checkpoints</option>
                            <option value="4">Tasks</option>
                            <option value="5">Web User</option>
                        </select>
                        <label id="txtClearAssignedTo" class="WarningLabel" onclick="ClearAssignedTo();" title="Clears the Assigned To Field" style="cursor: pointer; position: fixed; margin-left: 90px; margin-top: 4px; display: none; ">X</label>  
                        <input type="text" id="stxtAssignedTo" class="FilterWatermark" placeholder="Assigned To" readonly="" style="font-size: small; width: 90px;" onclick="FindAssignedTo();">
                        
                    </div>

                    <div id="divMonitorItems" style="height: 480px;">
    <div class="DataListRow" style="padding: 1px; cursor: pointer;" onclick="ShowIssueDetail(623486643);">
        <label class="MonitorIssueID text-mono text-center text-nowrap" style="width: 80px;">623486643</label>
        <img src="./Monitor_files/Camera.png" title="Issue Has Photos" style="cursor: pointer; visibility: visible;" onclick="PhotoViewer.Open(event, 623486643, &#39;8C6AD77D-0579-46D8-A236-E7D7B71E145A&#39;, null); ">
        <img src="./Monitor_files/Speaker.png" title="Issue Has Audio Attachments" style="cursor: pointer; visibility: hidden;" onclick="AudioPlayer.Open(623486643, &#39;8C6AD77D-0579-46D8-A236-E7D7B71E145A&#39;, null);">
        <label class="text-nowrap" style="width: 180px; font-size: small;">Austin American Statesman</label>
        <label class="text-nowrap MonitorSecurity" style="width: 185px; font-size: small;" title="">property inspection  </label>
        <label class="text-nowrap text-monofont" style="width: 152px;">Sun 1/23 12:01 PM</label>
        <label class="text-nowrap text-center" style="width: 100px; font-size: small; text-transform: uppercase;" title="Gabriel Cunningham">gabrielcunn</label>
        <label class="text-center " style="width: 70px; display: normal;">3</label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/taskgraysm.png" style="height: 20px; vertical-align: middle;"></label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/checkpointgreysm.png" title="This issue was created by a Checkpoint scan" style="height: 20px; vertical-align: middle; "></label>
        <label class="IssueStatus text-nowrap IssueClosed" data-index="0" style="width: 100px; text-transform: uppercase;" title="Gabriel Cunningham">gabrielcunn</label>
    </div>

    <div class="DataListAlternateRow" style="padding: 1px; cursor: pointer;" onclick="ShowIssueDetail(623485969);">
        <label class="MonitorIssueID text-mono text-center text-nowrap" style="width: 80px;">623485969</label>
        <img src="./Monitor_files/Camera.png" title="Issue Has Photos" style="cursor: pointer; visibility: visible;" onclick="PhotoViewer.Open(event, 623485969, &#39;C90A4C69-C644-4768-820C-5B9934FFEB2D&#39;, null); ">
        <img src="./Monitor_files/Speaker.png" title="Issue Has Audio Attachments" style="cursor: pointer; visibility: hidden;" onclick="AudioPlayer.Open(623485969, &#39;C90A4C69-C644-4768-820C-5B9934FFEB2D&#39;, null);">
        <label class="text-nowrap" style="width: 180px; font-size: small;">MT Supermarket</label>
        <label class="text-nowrap MonitorSecurity" style="width: 185px; font-size: small;" title="">Hourly Patrol </label>
        <label class="text-nowrap text-monofont" style="width: 152px;">Sun 1/23 12:07 PM</label>
        <label class="text-nowrap text-center" style="width: 100px; font-size: small; text-transform: uppercase;" title="Saad Al-Talibawi">saltalibawi</label>
        <label class="text-center " style="width: 70px; display: normal;">3</label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/taskgraysm.png" style="height: 20px; vertical-align: middle;"></label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/checkpointgreysm.png" title="This issue was created by a Checkpoint scan" style="height: 20px; vertical-align: middle; "></label>
        <label class="IssueStatus text-nowrap IssueClosed" data-index="1" style="width: 100px; text-transform: uppercase;" title="Saad Al-Talibawi">saltalibawi</label>
    </div>

    <div class="DataListRow" style="padding: 1px; cursor: pointer;" onclick="ShowIssueDetail(623478113);">
        <label class="MonitorIssueID text-mono text-center text-nowrap" style="width: 80px;">623478113</label>
        <img src="./Monitor_files/Camera.png" title="Issue Has Photos" style="cursor: pointer; visibility: visible;" onclick="PhotoViewer.Open(event, 623478113, &#39;39875768-ED6D-4C52-BCD8-1A9A32510046&#39;, null); ">
        <img src="./Monitor_files/Speaker.png" title="Issue Has Audio Attachments" style="cursor: pointer; visibility: hidden;" onclick="AudioPlayer.Open(623478113, &#39;39875768-ED6D-4C52-BCD8-1A9A32510046&#39;, null);">
        <label class="text-nowrap" style="width: 180px; font-size: small;">Austin American Statesman</label>
        <label class="text-nowrap MonitorSecurity" style="width: 185px; font-size: small;" title="">property inspection  </label>
        <label class="text-nowrap text-monofont" style="width: 152px;">Sun 1/23 11:11 AM</label>
        <label class="text-nowrap text-center" style="width: 100px; font-size: small; text-transform: uppercase;" title="Gabriel Cunningham">gabrielcunn</label>
        <label class="text-center " style="width: 70px; display: normal;">3</label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/taskgraysm.png" style="height: 20px; vertical-align: middle;"></label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/checkpointgreysm.png" title="This issue was created by a Checkpoint scan" style="height: 20px; vertical-align: middle; "></label>
        <label class="IssueStatus text-nowrap IssueClosed" data-index="2" style="width: 100px; text-transform: uppercase;" title="Gabriel Cunningham">gabrielcunn</label>
    </div>

    <div class="DataListAlternateRow" style="padding: 1px; cursor: pointer;" onclick="ShowIssueDetail(623477245);">
        <label class="MonitorIssueID text-mono text-center text-nowrap" style="width: 80px;">623477245</label>
        <img src="./Monitor_files/Camera.png" title="Issue Has Photos" style="cursor: pointer; visibility: visible;" onclick="PhotoViewer.Open(event, 623477245, &#39;685E1BD1-1A41-451C-AEB1-89D3E7AF1620&#39;, null); ">
        <img src="./Monitor_files/Speaker.png" title="Issue Has Audio Attachments" style="cursor: pointer; visibility: hidden;" onclick="AudioPlayer.Open(623477245, &#39;685E1BD1-1A41-451C-AEB1-89D3E7AF1620&#39;, null);">
        <label class="text-nowrap" style="width: 180px; font-size: small;">MT Supermarket</label>
        <label class="text-nowrap MonitorSecurity" style="width: 185px; font-size: small;" title="">Hourly Patrol </label>
        <label class="text-nowrap text-monofont" style="width: 152px;">Sun 1/23 11:10 AM</label>
        <label class="text-nowrap text-center" style="width: 100px; font-size: small; text-transform: uppercase;" title="Saad Al-Talibawi">saltalibawi</label>
        <label class="text-center " style="width: 70px; display: normal;">3</label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/taskgraysm.png" style="height: 20px; vertical-align: middle;"></label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/checkpointgreysm.png" title="This issue was created by a Checkpoint scan" style="height: 20px; vertical-align: middle; "></label>
        <label class="IssueStatus text-nowrap IssueClosed" data-index="3" style="width: 100px; text-transform: uppercase;" title="Saad Al-Talibawi">saltalibawi</label>
    </div>

    <div class="DataListRow" style="padding: 1px; cursor: pointer;" onclick="ShowIssueDetail(623468417);">
        <label class="MonitorIssueID text-mono text-center text-nowrap" style="width: 80px;">623468417</label>
        <img src="./Monitor_files/Camera.png" title="Issue Has Photos" style="cursor: pointer; visibility: visible;" onclick="PhotoViewer.Open(event, 623468417, &#39;E4B0EB71-AEB8-4F4F-BB8C-91B203A8B8DA&#39;, null); ">
        <img src="./Monitor_files/Speaker.png" title="Issue Has Audio Attachments" style="cursor: pointer; visibility: hidden;" onclick="AudioPlayer.Open(623468417, &#39;E4B0EB71-AEB8-4F4F-BB8C-91B203A8B8DA&#39;, null);">
        <label class="text-nowrap" style="width: 180px; font-size: small;">Austin American Statesman</label>
        <label class="text-nowrap MonitorSecurity" style="width: 185px; font-size: small;" title="">property inspection  </label>
        <label class="text-nowrap text-monofont" style="width: 152px;">Sun 1/23 10:01 AM</label>
        <label class="text-nowrap text-center" style="width: 100px; font-size: small; text-transform: uppercase;" title="Gabriel Cunningham">gabrielcunn</label>
        <label class="text-center " style="width: 70px; display: normal;">3</label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/taskgraysm.png" style="height: 20px; vertical-align: middle;"></label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/checkpointgreysm.png" title="This issue was created by a Checkpoint scan" style="height: 20px; vertical-align: middle; "></label>
        <label class="IssueStatus text-nowrap IssueClosed" data-index="4" style="width: 100px; text-transform: uppercase;" title="Gabriel Cunningham">gabrielcunn</label>
    </div>

    <div class="DataListAlternateRow" style="padding: 1px; cursor: pointer;" onclick="ShowIssueDetail(623467435);">
        <label class="MonitorIssueID text-mono text-center text-nowrap" style="width: 80px;">623467435</label>
        <img src="./Monitor_files/Camera.png" title="Issue Has Photos" style="cursor: pointer; visibility: visible;" onclick="PhotoViewer.Open(event, 623467435, &#39;3A99D2DD-BB98-4C26-9DBA-6B17DEECF7F1&#39;, null); ">
        <img src="./Monitor_files/Speaker.png" title="Issue Has Audio Attachments" style="cursor: pointer; visibility: hidden;" onclick="AudioPlayer.Open(623467435, &#39;3A99D2DD-BB98-4C26-9DBA-6B17DEECF7F1&#39;, null);">
        <label class="text-nowrap" style="width: 180px; font-size: small;">MT Supermarket</label>
        <label class="text-nowrap MonitorSecurity" style="width: 185px; font-size: small;" title="">Hourly Patrol </label>
        <label class="text-nowrap text-monofont" style="width: 152px;">Sun 1/23 10:05 AM</label>
        <label class="text-nowrap text-center" style="width: 100px; font-size: small; text-transform: uppercase;" title="Saad Al-Talibawi">saltalibawi</label>
        <label class="text-center " style="width: 70px; display: normal;">3</label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/taskgraysm.png" style="height: 20px; vertical-align: middle;"></label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/checkpointgreysm.png" title="This issue was created by a Checkpoint scan" style="height: 20px; vertical-align: middle; "></label>
        <label class="IssueStatus text-nowrap IssueClosed" data-index="5" style="width: 100px; text-transform: uppercase;" title="Saad Al-Talibawi">saltalibawi</label>
    </div>

    <div class="DataListRow" style="padding: 1px; cursor: pointer;" onclick="ShowIssueDetail(623460735);">
        <label class="MonitorIssueID text-mono text-center text-nowrap" style="width: 80px;">623460735</label>
        <img src="./Monitor_files/Camera.png" title="Issue Has Photos" style="cursor: pointer; visibility: visible;" onclick="PhotoViewer.Open(event, 623460735, &#39;6D506C64-BC32-46C2-BFED-F749D9172802&#39;, null); ">
        <img src="./Monitor_files/Speaker.png" title="Issue Has Audio Attachments" style="cursor: pointer; visibility: hidden;" onclick="AudioPlayer.Open(623460735, &#39;6D506C64-BC32-46C2-BFED-F749D9172802&#39;, null);">
        <label class="text-nowrap" style="width: 180px; font-size: small;">Austin American Statesman</label>
        <label class="text-nowrap MonitorSecurity" style="width: 185px; font-size: small;" title="">property inspection  </label>
        <label class="text-nowrap text-monofont" style="width: 152px;">Sun 1/23 &nbsp;9:15 AM</label>
        <label class="text-nowrap text-center" style="width: 100px; font-size: small; text-transform: uppercase;" title="Gabriel Cunningham">gabrielcunn</label>
        <label class="text-center " style="width: 70px; display: normal;">3</label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/taskgraysm.png" style="height: 20px; vertical-align: middle;"></label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/checkpointgreysm.png" title="This issue was created by a Checkpoint scan" style="height: 20px; vertical-align: middle; "></label>
        <label class="IssueStatus text-nowrap IssueClosed" data-index="6" style="width: 100px; text-transform: uppercase;" title="Gabriel Cunningham">gabrielcunn</label>
    </div>

    <div class="DataListAlternateRow" style="padding: 1px; cursor: pointer;" onclick="ShowIssueDetail(623457445);">
        <label class="MonitorIssueID text-mono text-center text-nowrap" style="width: 80px;">623457445</label>
        <img src="./Monitor_files/Camera.png" title="Issue Has Photos" style="cursor: pointer; visibility: visible;" onclick="PhotoViewer.Open(event, 623457445, &#39;9D7E05E5-FFF5-4A87-886E-60FE80E17A1F&#39;, null); ">
        <img src="./Monitor_files/Speaker.png" title="Issue Has Audio Attachments" style="cursor: pointer; visibility: hidden;" onclick="AudioPlayer.Open(623457445, &#39;9D7E05E5-FFF5-4A87-886E-60FE80E17A1F&#39;, null);">
        <label class="text-nowrap" style="width: 180px; font-size: small;">MT Supermarket</label>
        <label class="text-nowrap MonitorSecurity" style="width: 185px; font-size: small;" title="">on duty </label>
        <label class="text-nowrap text-monofont" style="width: 152px;">Sun 1/23 &nbsp;9:05 AM</label>
        <label class="text-nowrap text-center" style="width: 100px; font-size: small; text-transform: uppercase;" title="Saad Al-Talibawi">saltalibawi</label>
        <label class="text-center " style="width: 70px; display: normal;">3</label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/taskgraysm.png" style="height: 20px; vertical-align: middle;"></label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/checkpointgreysm.png" title="This issue was created by a Checkpoint scan" style="height: 20px; vertical-align: middle; "></label>
        <label class="IssueStatus text-nowrap IssueClosed" data-index="7" style="width: 100px; text-transform: uppercase;" title="Saad Al-Talibawi">saltalibawi</label>
    </div>

    <div class="DataListRow" style="padding: 1px; cursor: pointer;" onclick="ShowIssueDetail(623448740);">
        <label class="MonitorIssueID text-mono text-center text-nowrap" style="width: 80px;">623448740</label>
        <img src="./Monitor_files/Camera.png" title="Issue Has Photos" style="cursor: pointer; visibility: visible;" onclick="PhotoViewer.Open(event, 623448740, &#39;B3F8A2BA-0F2B-476C-9F3B-EB4BB334CAE8&#39;, null); ">
        <img src="./Monitor_files/Speaker.png" title="Issue Has Audio Attachments" style="cursor: pointer; visibility: hidden;" onclick="AudioPlayer.Open(623448740, &#39;B3F8A2BA-0F2B-476C-9F3B-EB4BB334CAE8&#39;, null);">
        <label class="text-nowrap" style="width: 180px; font-size: small;">Austin American Statesman</label>
        <label class="text-nowrap MonitorSecurity" style="width: 185px; font-size: small;" title="">property inspection  </label>
        <label class="text-nowrap text-monofont" style="width: 152px;">Sun 1/23 &nbsp;8:05 AM</label>
        <label class="text-nowrap text-center" style="width: 100px; font-size: small; text-transform: uppercase;" title="Gabriel Cunningham">gabrielcunn</label>
        <label class="text-center " style="width: 70px; display: normal;">3</label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/taskgraysm.png" style="height: 20px; vertical-align: middle;"></label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/checkpointgreysm.png" title="This issue was created by a Checkpoint scan" style="height: 20px; vertical-align: middle; "></label>
        <label class="IssueStatus text-nowrap IssueClosed" data-index="8" style="width: 100px; text-transform: uppercase;" title="Gabriel Cunningham">gabrielcunn</label>
    </div>

    <div class="DataListAlternateRow" style="padding: 1px; cursor: pointer;" onclick="ShowIssueDetail(623439022);">
        <label class="MonitorIssueID text-mono text-center text-nowrap" style="width: 80px;">623439022</label>
        <img src="./Monitor_files/Camera.png" title="Issue Has Photos" style="cursor: pointer; visibility: visible;" onclick="PhotoViewer.Open(event, 623439022, &#39;A7C14A0C-F36F-44C7-8B0D-45F43AC642A1&#39;, null); ">
        <img src="./Monitor_files/Speaker.png" title="Issue Has Audio Attachments" style="cursor: pointer; visibility: hidden;" onclick="AudioPlayer.Open(623439022, &#39;A7C14A0C-F36F-44C7-8B0D-45F43AC642A1&#39;, null);">
        <label class="text-nowrap" style="width: 180px; font-size: small;">Austin American Statesman</label>
        <label class="text-nowrap MonitorSecurity" style="width: 185px; font-size: small;" title="">property inspection  </label>
        <label class="text-nowrap text-monofont" style="width: 152px;">Sun 1/23 &nbsp;7:09 AM</label>
        <label class="text-nowrap text-center" style="width: 100px; font-size: small; text-transform: uppercase;" title="Gabriel Cunningham">gabrielcunn</label>
        <label class="text-center " style="width: 70px; display: normal;">3</label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/taskgraysm.png" style="height: 20px; vertical-align: middle;"></label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/checkpointgreysm.png" title="This issue was created by a Checkpoint scan" style="height: 20px; vertical-align: middle; "></label>
        <label class="IssueStatus text-nowrap IssueClosed" data-index="9" style="width: 100px; text-transform: uppercase;" title="Gabriel Cunningham">gabrielcunn</label>
    </div>

    <div class="DataListRow" style="padding: 1px; cursor: pointer;" onclick="ShowIssueDetail(623435298);">
        <label class="MonitorIssueID text-mono text-center text-nowrap" style="width: 80px;">623435298</label>
        <img src="./Monitor_files/Camera.png" title="Issue Has Photos" style="cursor: pointer; visibility: visible;" onclick="PhotoViewer.Open(event, 623435298, &#39;87E9859C-27E8-4433-A782-1F1D1B42CE49&#39;, null); ">
        <img src="./Monitor_files/Speaker.png" title="Issue Has Audio Attachments" style="cursor: pointer; visibility: hidden;" onclick="AudioPlayer.Open(623435298, &#39;87E9859C-27E8-4433-A782-1F1D1B42CE49&#39;, null);">
        <label class="text-nowrap" style="width: 180px; font-size: small;">Motel 6 @ IH 35</label>
        <label class="text-nowrap MonitorSecurity" style="width: 185px; font-size: small;" title="">OFF DUTY </label>
        <label class="text-nowrap text-monofont" style="width: 152px;">Sun 1/23 &nbsp;6:58 AM</label>
        <label class="text-nowrap text-center" style="width: 100px; font-size: small; text-transform: uppercase;" title="Abdulmalek Alobaidi">abdulmalek12</label>
        <label class="text-center " style="width: 70px; display: normal;">3</label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/taskgraysm.png" style="height: 20px; vertical-align: middle;"></label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/checkpointgreysm.png" title="This issue was created by a Checkpoint scan" style="height: 20px; vertical-align: middle; "></label>
        <label class="IssueStatus text-nowrap IssueClosed" data-index="10" style="width: 100px; text-transform: uppercase;" title="Abdulmalek Alobaidi">abdulmalek12</label>
    </div>

    <div class="DataListAlternateRow" style="padding: 1px; cursor: pointer;" onclick="ShowIssueDetail(623433619);">
        <label class="MonitorIssueID text-mono text-center text-nowrap" style="width: 80px;">623433619</label>
        <img src="./Monitor_files/Camera.png" title="Issue Has Photos" style="cursor: pointer; visibility: visible;" onclick="PhotoViewer.Open(event, 623433619, &#39;2B49C609-5EE7-498E-83A3-377E213B9283&#39;, null); ">
        <img src="./Monitor_files/Speaker.png" title="Issue Has Audio Attachments" style="cursor: pointer; visibility: hidden;" onclick="AudioPlayer.Open(623433619, &#39;2B49C609-5EE7-498E-83A3-377E213B9283&#39;, null);">
        <label class="text-nowrap" style="width: 180px; font-size: small;">Motel 6 @ IH 35</label>
        <label class="text-nowrap MonitorSecurity" style="width: 185px; font-size: small;" title="">property inspection  </label>
        <label class="text-nowrap text-monofont" style="width: 152px;">Sun 1/23 &nbsp;6:48 AM</label>
        <label class="text-nowrap text-center" style="width: 100px; font-size: small; text-transform: uppercase;" title="Abdulmalek Alobaidi">abdulmalek12</label>
        <label class="text-center " style="width: 70px; display: normal;">3</label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/taskgraysm.png" style="height: 20px; vertical-align: middle;"></label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/checkpointgreysm.png" title="This issue was created by a Checkpoint scan" style="height: 20px; vertical-align: middle; "></label>
        <label class="IssueStatus text-nowrap IssueClosed" data-index="11" style="width: 100px; text-transform: uppercase;" title="Abdulmalek Alobaidi">abdulmalek12</label>
    </div>

    <div class="DataListRow" style="padding: 1px; cursor: pointer;" onclick="ShowIssueDetail(623424339);">
        <label class="MonitorIssueID text-mono text-center text-nowrap" style="width: 80px;">623424339</label>
        <img src="./Monitor_files/Camera.png" title="Issue Has Photos" style="cursor: pointer; visibility: visible;" onclick="PhotoViewer.Open(event, 623424339, &#39;F23A7B86-041E-4932-B0E6-8E6BFDAE0792&#39;, null); ">
        <img src="./Monitor_files/Speaker.png" title="Issue Has Audio Attachments" style="cursor: pointer; visibility: hidden;" onclick="AudioPlayer.Open(623424339, &#39;F23A7B86-041E-4932-B0E6-8E6BFDAE0792&#39;, null);">
        <label class="text-nowrap" style="width: 180px; font-size: small;">Austin American Statesman</label>
        <label class="text-nowrap MonitorSecurity" style="width: 185px; font-size: small;" title="">property inspection  </label>
        <label class="text-nowrap text-monofont" style="width: 152px;">Sun 1/23 &nbsp;6:00 AM</label>
        <label class="text-nowrap text-center" style="width: 100px; font-size: small; text-transform: uppercase;" title="Gabriel Cunningham">gabrielcunn</label>
        <label class="text-center " style="width: 70px; display: normal;">3</label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/taskgraysm.png" style="height: 20px; vertical-align: middle;"></label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/checkpointgreysm.png" title="This issue was created by a Checkpoint scan" style="height: 20px; vertical-align: middle; "></label>
        <label class="IssueStatus text-nowrap IssueClosed" data-index="12" style="width: 100px; text-transform: uppercase;" title="Gabriel Cunningham">gabrielcunn</label>
    </div>

    <div class="DataListAlternateRow" style="padding: 1px; cursor: pointer;" onclick="ShowIssueDetail(623423978);">
        <label class="MonitorIssueID text-mono text-center text-nowrap" style="width: 80px;">623423978</label>
        <img src="./Monitor_files/Camera.png" title="Issue Has Photos" style="cursor: pointer; visibility: visible;" onclick="PhotoViewer.Open(event, 623423978, &#39;A9571CC4-7946-43EC-9700-8B102BC96CA7&#39;, null); ">
        <img src="./Monitor_files/Speaker.png" title="Issue Has Audio Attachments" style="cursor: pointer; visibility: hidden;" onclick="AudioPlayer.Open(623423978, &#39;A9571CC4-7946-43EC-9700-8B102BC96CA7&#39;, null);">
        <label class="text-nowrap" style="width: 180px; font-size: small;">Rosemont </label>
        <label class="text-nowrap MonitorSecurity" style="width: 185px; font-size: small;" title="">OFF DUTY </label>
        <label class="text-nowrap text-monofont" style="width: 152px;">Sun 1/23 &nbsp;5:42 AM</label>
        <label class="text-nowrap text-center" style="width: 100px; font-size: small; text-transform: uppercase;" title="Ricardo Amaya">ricardoamaya</label>
        <label class="text-center " style="width: 70px; display: normal;">3</label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/taskgraysm.png" style="height: 20px; vertical-align: middle;"></label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/checkpointgreysm.png" title="This issue was created by a Checkpoint scan" style="height: 20px; vertical-align: middle; "></label>
        <label class="IssueStatus text-nowrap IssueClosed" data-index="13" style="width: 100px; text-transform: uppercase;" title="Ricardo Amaya">ricardoamaya</label>
    </div>

    <div class="DataListRow" style="padding: 1px; cursor: pointer;" onclick="ShowIssueDetail(623423383);">
        <label class="MonitorIssueID text-mono text-center text-nowrap" style="width: 80px;">623423383</label>
        <img src="./Monitor_files/Camera.png" title="Issue Has Photos" style="cursor: pointer; visibility: visible;" onclick="PhotoViewer.Open(event, 623423383, &#39;B9472E31-2A5A-41D0-AEB8-7CCCB7F87BCA&#39;, null); ">
        <img src="./Monitor_files/Speaker.png" title="Issue Has Audio Attachments" style="cursor: pointer; visibility: hidden;" onclick="AudioPlayer.Open(623423383, &#39;B9472E31-2A5A-41D0-AEB8-7CCCB7F87BCA&#39;, null);">
        <label class="text-nowrap" style="width: 180px; font-size: small;">Alpha Patrol </label>
        <label class="text-nowrap MonitorSecurity" style="width: 185px; font-size: small;" title="">OFF DUTY </label>
        <label class="text-nowrap text-monofont" style="width: 152px;">Sun 1/23 &nbsp;5:54 AM</label>
        <label class="text-nowrap text-center" style="width: 100px; font-size: small; text-transform: uppercase;" title="Alex Whitby">alexwhitby</label>
        <label class="text-center " style="width: 70px; display: normal;">3</label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/taskgraysm.png" style="height: 20px; vertical-align: middle;"></label>
        <label class="text-center" style="width: 70px; display: none;"><img src="./Monitor_files/checkpointgreysm.png" title="This issue was created by a Checkpoint scan" style="height: 20px; vertical-align: middle; "></label>
        <label class="IssueStatus text-nowrap IssueClosed" data-index="14" style="width: 100px; text-transform: uppercase;" title="Alex Whitby">alexwhitby</label>
    </div>
</div>

                    <div style="margin: 10px;">

                        <input type="text" id="txtIssueTrackingLookup" placeholder="Issue ID/Tracking #" class="FilterWatermark" style="width: 175px; float: left;">
                        
                        <label class="label-fullheight" style="width: 175px; height: 1px; float: right;"></label>

                        <div style="text-align: center; margin: auto 0;">
                            <label class="label-fullheight" id="lblIncludeSecurity"><input type="checkbox" id="chkIncludeSecurity" title="Include Security Issues" checked="checked" onclick="SetMonitorFilters(&#39;Security&#39;);">Security</label>
                            <label class="label-fullheight" id="lblIncludeParking"><input type="checkbox" id="chkIncludeParking" title="Include Parking Issues" checked="checked" onclick="SetMonitorFilters(&#39;Parking&#39;);">Parking</label>
                            <label class="label-fullheight" id="lblIncludeMaintenance"><input type="checkbox" id="chkIncludeMaintenance" title="Include Maintenance Issues" checked="checked" onclick="SetMonitorFilters(&#39;Maintenance&#39;);">Maintenance</label>
                            <label class="label-fullheight" id="lblIncludeClosed"><input type="checkbox" id="chkIncludeClosed" title="Include Closed Issues" checked="checked" onclick="SetMonitorFilters(&#39;Closed&#39;);">Include Closed</label>
                        </div>
                    </div>

                    <style>
                            .ICN

                            {
                                cursor: pointer;
                                height: 32px;
                                padding: 0px 5px 0px 5px;
                                margin-top: 2px
                            }
                        </style>

                    <div style="padding: 10px; background-color: #f1f1f1;">

                        <div class="left" style="width: 370px;">
                            <img id="imgIssueSummary" src="./Monitor_files/summarysm.png" onclick="ShowIssueSummary();" title="Display Issue Summary" class="ICN">
                            <img id="imgVehicleSearch2" src="./Monitor_files/vehiclesearch.png" onclick="ShowVehicleSearch();" title="Vehicle Search" class="ICN">
                            <img id="imgTasks" src="./Monitor_files/taskbluesm.png" onclick="ShowTaskSummary();" title="Task Summary" class="ICN">
                            <img id="imgCheckpoints" src="./Monitor_files/checkpointbluesm.png" onclick="ShowCheckpointSummary();" title="Checkpoint Summary" class="ICN">
                            <img id="imgTimeClock" src="./Monitor_files/timeclocksm.png" onclick="ShowTimecard();" title="Timecard Approval" class="ICN" style="display: none;">
                            <img id="imgUserMap" src="./Monitor_files/gps.png" onclick="ShowMap();" title="User Map" style="" class="ICN">
                            <img id="imgMessage" src="./Monitor_files/messageboardsm.png" onclick="OpenChat();" title="Message Board" class="ICN" style="">
                            <img id="imgPropertyNotes" src="./Monitor_files/NewNote.png" onclick="OpenPropertyNotes();" style="" title="Property Notes" class="ICN">
                        </div>

                        <div class="right text-right" style="width: 370px;">
                                <img id="imgStartPage" src="./Monitor_files/StartNormal.png" onclick="FirstPage();" title="Go to first page" class="ICN">
                                <img id="imgPreviousPage" src="./Monitor_files/PreviousNormal.png" onclick="PreviousPage();" title="Go to previous page" class="ICN">
                                <label id="lblPage" class="MonitorPageNumber" title="Page Number">1</label>
                                <img id="imgNextPage" src="./Monitor_files/NextNormal.png" onclick="NextPage();" title="Go to next page" class="ICN">
                                <input id="cmdGoGo" class="right" type="button" style="width: 100px;" value="Update" onclick="GoSearch();">
                        </div>

                        <div class="text-center" style="margin: 0 auto;"><input type="button" id="cmdNew" onclick="CreateNewIssue();" value="New Action" title="Click here to add a new issue!"></div>

                    </div>

                </div>

            </div>

            






<script lang="javascript">
	

	var UserChat = {

		CallBackOnClose: null,
		LastReceivedMessageID: 1,
        LastReadMessageID: 1,
		RefreshChat: null,
		ToUserName: '',
		LastUserNameViewed: '',
		interval: null,
        SelectedUsername: '',

		delay: (function ()
		{
		    var timer = 0;
		    return function (callback, ms)
		    {
		        clearTimeout(timer);
		        timer = setTimeout(callback, ms);
		    };
		})(),


		Init: function ()
		{
            // Clear the timer to prevent multiple instances
		    clearInterval(UserChat.RefreshChat);

		    // Every 10 seconds, check for a new chat message
		    UserChat.RefreshChat = setInterval(function () { UserChat.CheckForNewMessages() }, 10000);


		    
		    

		},

		Open: function (FullName, UserName, CallBack) {

		    this.Clear();
		    this.CallBackOnClose = CallBack;
		    
		    $('#divUserChat').css('display', 'inline-block');

		    $(document).off().keyup();

		    $(document).on().keyup(function (e) {
		        $(document).off().keyup();
		        if (e.which == 27)
		            UserChat.CloseMessageWindow();
		    });

		    // Auto populates the user list as the user types.  This has a slight delay to reduce premature searches.
		    $('#txtChatUser').keyup(function () {
		        UserChat.delay(function () {
		            UserChat.LoadUserList();
		        }, 400);
		    });

		    UserChat.LoadUserList();
		    UserChat.LoadMessages();

		    $('#txtChatMessage').focus();

            // Remove this later
		    UserChat.Init();

		},

		Clear: function () {
		    $('#divChatLog').empty();
		},

		Close: function () {
		    this.Clear();
		    clearInterval(UserChat.RefreshChat);
		    $('#divUserChat').hide();
		},

		CloseMessageWindow: function () 
		{
		    Common.Pop('divUserChatMessage');
		    UserChat.SelectedUsername = '';
		},








		UserMessageReceived: function(UserName)
		{
		    $('#msgNewMessageCount' + UserName).show();
		    var i;
		    i = parseInt($('#msgNewMessageCount' + UserName).text()) + 1;
		    $('#msgNewMessageCount' + UserName).text(i);

		    //msgDIVTTT

		    $('#msgDIV' + UserName).attr('data-mc', i);//" class="hv" data-mc="{MESSAGECOUNT}"

		    //$(this).attr('data-fruit', '7');

		    SortByMessages();

		    //display: inline - block;

		    //$('#NewMessage' + UserName.toUpperCase()).show();
		},
		

		UserSelected: function(FullName, UserName)
		{
		    UserChat.SelectedUsername = UserName;

		    $('#divChatLog').empty();

		    $('#lblChatTitle').text('MESSAGE BOARD - ' + FullName);
		    UserChat.ToUserName = UserName;

		    $('#msgNewMessageCount' + UserName.toUpperCase()).hide();
		    $('#msgNewMessageCount' + UserName).text('0');
		    //$('#NewMessage' + UserName.toUpperCase()).hide();
		    Common.Show('divUserChatMessage', 20000);

		    UserChat.LoadMessages();

		    $('#txtChatMessage').focus();

		    $(document).off().keyup();

		    $(document).on().keyup(function (e) {
		        $(document).off().keyup();
		        if (e.which == 27)
		            UserChat.CloseMessageWindow();
		    });

		    
		    $("#txtChatMessage").off().keypress();
		    // Set keypress behavior
		    $("#txtChatMessage").keypress(function (e) {
		        if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13))
		        {
		            e.preventDefault();
		            UserChat.SendChatMessage();
		        }
		    });

		},

		LoadUserList: function()
		{
		    $('#divActiveUsers').empty();
		    var template = $('#hidden-template').html();

			var Post = new Object()
			Post.Action = 'ChatUsersGetList';
			Post.SearchValue = $('#txtChatUser').val();

			$.ajax({
				type: "POST",
				contentType: "application/json; charset=utf-8",
				url: "/API/API.ashx",
				data: JSON.stringify(Post),
				dataType: "json",
				success: function (msg)
				{

					for (var item in msg)
					{
					    var num = Math.round(Math.random() * 4) + 1

					    if (isEmpty(msg[item].PhotoBinaryFileIDFK) == true || msg[item].PhotoBinaryFileIDFK == 0)
					    {
					        $('#divActiveUsers').append(template.format({ IMAGESOURCE: "/Images/usersm50.png", MESSAGECOUNT: "0", FULLNAME: msg[item].FirstName + ' ' + msg[item].LastName, USERNAME: msg[item].UserName.toUpperCase(), CURRENTPROPERTY: msg[item].PropertyName }));
//					        UserChat.AddUser(msg[item].FirstName + ' ' + msg[item].LastName, msg[item].PropertyName, '/Images/DefaultUserPhotoSM.png', 'User', msg[item].LongPropertyName, msg[item].UserName);
					    }
					    else
					    {
					        $('#divActiveUsers').append(template.format({ IMAGESOURCE: '/BinaryFiles/GetUserPhoto.ashx?BinaryIDFK=' + msg[item].PhotoBinaryFileIDFK + '&Username=CSmith&UseThumbnail=true', MESSAGECOUNT: '0', FULLNAME: msg[item].FirstName + ' ' + msg[item].LastName, USERNAME: msg[item].UserName.toUpperCase(), CURRENTPROPERTY: msg[item].PropertyName }));
					        //UserChat.AddUser(msg[item].FirstName + ' ' + msg[item].LastName, msg[item].PropertyName, '/BinaryFiles/GetUserPhoto.ashx?BinaryIDFK=' + msg[item].PhotoBinaryFileIDFK + '&Username=CSmith&UseThumbnail=true', 'User', msg[item].LongPropertyName, msg[item].UserName);
					    }
					}

					if (msg.length == 0)
						ShowWarningDialog('No Active Users Were Found');

				},
				error: function (msg)
				{
				    ShowWarningDialog('A error has occured.');
				    Common.LogAjaxError('UserChat.ascx', 'LoadUserList', msg.responseJSON.Message);
				},
				async: false
			});

		},
        

		RefreshUserList: function ()
		{

		    $('.hv').attr('data-isactive', false);
		    //id="msgDIV{USERNAME}" class="hv" data-mc="{MESSAGECOUNT}" data-isactive="true" onclic

		    var template = $('#hidden-template').html();

		    var Post = new Object()
		    Post.Action = 'ChatUsersGetList';
		    Post.SearchValue = '';

		    $.ajax({
		        type: "POST",
		        contentType: "application/json; charset=utf-8",
		        url: "/API/API.ashx",
		        data: JSON.stringify(Post),
		        dataType: "json",
		        success: function (msg) {

		            for (var item in msg)
		            {
		                //var num = Math.round(Math.random() * 4) + 1

		                $('#msgPropertyName' + msg[item].UserName.toUpperCase()).text(msg[item].PropertyName);
		                $('#msgDIV' + msg[item].UserName.toUpperCase()).attr('data-isactive', true);

		                if (!$("#msgDIV" + msg[item].UserName.toUpperCase()).length)
		                {
		                    // not exists
		                    if (isEmpty(msg[item].PhotoBinaryFileIDFK) == true || msg[item].PhotoBinaryFileIDFK == 0)
		                    {
		                        $('#divActiveUsers').append(template.format({ IMAGESOURCE: "/Images/usersm50.png", MESSAGECOUNT: "0", FULLNAME: msg[item].FirstName + ' ' + msg[item].LastName, USERNAME: msg[item].UserName.toUpperCase(), CURRENTPROPERTY: msg[item].PropertyName }));
		                    }
		                    else
		                    {
		                        $('#divActiveUsers').append(template.format({ IMAGESOURCE: '/BinaryFiles/GetUserPhoto.ashx?BinaryIDFK=' + msg[item].PhotoBinaryFileIDFK + '&Username=CSmith&UseThumbnail=true', MESSAGECOUNT: '0', FULLNAME: msg[item].FirstName + ' ' + msg[item].LastName, USERNAME: msg[item].UserName.toUpperCase(), CURRENTPROPERTY: msg[item].PropertyName }));
		                    }

		                }


		            }

		            // REMOVE ALL INACTIVE USERS
		            $('[data-isactive=false]').remove();



		         //   if (msg.length == 0)
		                //ShowWarningDialog('No Active Users Were Found');

		        },
		        error: function (msg) {
		            ShowWarningDialog('A error has occured.');
		            Common.LogAjaxError('UserChat.ascx', 'RefreshUserList', msg.responseJSON.Message);
		        },
		        async: false
		    });

		},

	    LoadMessages: function () {

	        var Post = new Object()
	        Post.Action = 'ChatGetMessages';
	        Post.FilterUserName = UserChat.SelectedUsername;
	        Post.LastReceivedMessageID = 1;

	        $.ajax({
	            type: "POST",
	            contentType: "application/json; charset=utf-8",
	            url: "/API/API.ashx",
	            data: JSON.stringify(Post),
	            dataType: "json",
	            success: function (msg) {
	                for (var item in msg)
	                {

	                    if (msg[item].MessageDirection == 'Outbound')
	                    {
	                        UserChat.AddOutboundMessage(msg[item].CreatedDTM, msg[item].Body, msg[item].FromUser, msg[item].PropertyName, msg[item].FromUsername);
	                    }
	                    else
	                    {
	                        // Its a new inbound message
	                        UserChat.AddInboundMessage(msg[item].CreatedDTM, msg[item].Body, msg[item].FromUser, msg[item].PropertyName, msg[item].FromUsername);
	                    }

	                    UserChat.LastReceivedMessageID = Math.max(UserChat.LastReceivedMessageID, msg[item].ID);

	                }

	            },
	            error: function (msg) {
	                // ShowWarningDialog('A error has occured in Load Messages.');
	                Common.LogAjaxError('UserChat.ascx', 'LoadMessages', msg.responseJSON.Message);
	            }
	        });
	    },

	    CheckForNewMessages: function () {
	        UserChat.RefreshUserList();

	        var Post = new Object()
	        Post.Action = 'ChatGetMessages';
	        Post.FilterUserName = UserChat.ToUserName;
	        Post.LastReceivedMessageID = UserChat.LastReceivedMessageID;

	        $.ajax({
	            type: "POST",
	            contentType: "application/json; charset=utf-8",
	            url: "/API/API.ashx",
	            data: JSON.stringify(Post),
	            dataType: "json",
	            success: function (msg) {
	                for (var item in msg)
	                {

	                    //var LastID = UserChat.LastReceivedMessageID;

	                    if (UserChat.LastReceivedMessageID >= msg[item].ID)
	                    {
	                        // No message arrived
	                        return;
	                    }

	                    if (msg[item].MessageDirection == 'Outbound')
	                    {
	                        UserChat.AddOutboundMessage(msg[item].CreatedDTM, msg[item].Body, msg[item].FromUser, msg[item].PropertyName, msg[item].FromUsername);
	                    }
	                    else
	                    {

	                        // Do UserChat MessageCallback here
	                        //$('#divUserChat').css('display') == 'block' &&

	                        if ( UserChat.SelectedUsername.toUpperCase() == msg[item].FromUsername.toUpperCase())
	                        {
	                            // Add an inbound message if the Chat message window is open and the message is from the selected User
	                            UserChat.AddInboundMessage(msg[item].CreatedDTM, msg[item].Body, msg[item].FromUser, msg[item].PropertyName, msg[item].FromUsername);
	                        }
	                        else
	                        {
                                // Add notification message to user list to indicate a new message
	                            UserChat.UserMessageReceived(msg[item].FromUsername.toUpperCase());
	                        }



	                    }

	                    // Update the last received message
	                    if (UserChat.LastReceivedMessageID < msg[item].ID)
	                    {
	                        UserChat.LastReceivedMessageID = msg[item].ID
	                    }
	                    
	                    

	                }

	            },
	            error: function (msg) {
	                //ShowWarningDialog('A error has occured in Check For New Messages.');
	                Common.LogAjaxError('UserChat.ascx', 'CheckForNewMessages', msg.responseJSON.Message);
	            }
	        });
	    },

	    AddOutboundMessage: function (Time, Message, User, PropertyName, UserName) {

	        var template = $('#hidden-template-outboundchat').html();

	        var usrSrc = $('#msgUserImage' + UserName.toUpperCase()).attr('src');

	        if (isEmpty(usrSrc) == true)
	            usrSrc = '/Images/usersm50.png';

	        $('#divChatLog').prepend(template.format({ FULLNAME: User, DTM: FormatDate(Time, 'Short'), PROPNAME: PropertyName, MESSAGE: Message, USERIMAGESRC: usrSrc }));
        


	    },

	    AddInboundMessage: function (Time, Message, User, PropertyName, UserName) {

	        
	        

	        var template = $('#hidden-template-inboundchat').html();

	        var usrSrc = $('#msgUserImage' + UserName.toUpperCase()).attr('src');

	        if (isEmpty(usrSrc) == true)
	            usrSrc = '/Images/usersm50.png';
	        
	        $('#divChatLog').prepend(template.format({ FULLNAME: User, DTM: FormatDate(Time, 'Short'), PROPNAME: PropertyName, MESSAGE: Message, USERIMAGESRC: usrSrc }));
	        //msgUserImage{USERNAME}USERIMAGESRC



	    },


	    SendChatMessage: function () {

	        if ($('#txtChatMessage').val() == '')
	        {
	            return;
	        }


	        if (UserChat.ToUserName == 'All Users')
	        {


	            $("#alertmsg").html("WARNING This will send a message to ALL devices logged in?  Are you sure you want to send this message?");
	            $("#warning").css("display", "inline");
	            $("#warning").dialog
				    (
					    {
					        modal: true,

					        buttons:
						    {
						        "Confirm": function () {
						            $(this).dialog("close");
						            UserChat.SendChatMessageConfirm();

						        },
						        "Cancel": function () {
						            $(this).dialog("close");
						            if (isEmpty(cancel) == false)
						            {
						                window[cancel]();
						            }
						        }
						    }
					    }
				    );
	        }
	        else
	        {
	            UserChat.SendChatMessageConfirm();
	        }
	    },


	    SendChatMessageConfirm: function () {


	        var Post = new Object()
	        Post.Action = 'ChatSendToDevice';
	        Post.Body = $('#txtChatMessage').val();
	        Post.ToUserName = UserChat.ToUserName;

	        $.ajax({
	            type: "POST",
	            contentType: "application/json; charset=utf-8",
	            url: "/API/API.ashx",
	            data: JSON.stringify(Post),
	            dataType: "json",
	            success: function (msg) {

	                UserChat.CheckForNewMessages();
	                $('#txtChatMessage').val('');
	                $('#txtChatMessage').focus();

	            },
	            error: function (msg) {
	                ShowWarningDialog('A error has occured.');
	                Common.LogAjaxError('UserChat.ascx', 'SendChatMessage', msg.responseJSON.Message);
	            }
	        });



	    }


	}


	function SortByMessages() {
	    var $wrapper = $('#divActiveUsers');
	    $wrapper.find('.hv').sort(function (b, a) {
	        return +a.getAttribute('data-mc') - +b.getAttribute('data-mc');
	    })
        .appendTo($wrapper);
	}



	//String.prototype.format = function (placeholders) {
	//    var s = this;
	//    for (var propertyName in placeholders)
	//    {
	//        var re = new RegExp('{' + propertyName + '}', 'gm');
	//        s = s.replace(re, placeholders[propertyName]);
	//    }
	//    return s;
	//};



    //var d = $('<div />').attr({
    //    class: 'ChatMessageOutbound',
    //});

    //var s = $('<span />').attr({
    //    style: 'color: chartreuse;'
    //})

    //s.append(Time + ' - ');

    //d.append(s);
    //d.append(Message);

    //$('#divChatLog').append(d);


    //var x = $('<div />')

    //var d = $('<div />').attr({
    //    class: 'ChatMessageInbound',
    //});

    //var s = $('<span />').attr({
    //    style: 'color: gold;'
    //})

    //s.append(Time + ' - ' + User + ' - ');

    //d.append(s);
    //d.append(Message);



    //$('#divChatLog').append(d);




    //var i = $('<div />').attr({

    //    class: "ChatMessageReply"

    //});

    //var ii = $('<img />').attr({
    //    src: "/Images/Reply.png",
    //    style: "height: 14px;"
    //});

    //i.append(ii);
    //i.append("Pf");
    //x.append(d);
    //x.append(i);


    //$('#divChatLog').prepend(x);//.append(d);


    //AddUser: function (FullName, Property, ImageURL, Class, PropertyName, UserName) {
    //    var d = $('<div />').attr({
    //        class: Class,
    //        style: 'padding: 5px 0px 5px 5px;',
    //        title: PropertyName,
    //        onclick: 'UserChat.UserSelected("' + FullName + '","' + UserName + '");'
    //    });

    //    var i = $('<img />').attr({
    //        src: ImageURL,
    //        class: 'Face'
    //    });


    //    d.append(i);
    //    d.append($('<div class="UserBadge">4444</div>'));

    //    var d2 = $('<div />').attr({
    //        style: 'float: left; line-height: 25px;'
    //    });

    //    //d2.append($('<div />').attr({

    //    //    style: 'float: left; margin: 0px 5px 0px 5px;',
    //    //    id: 'NewMessage' + UserName.toUpperCase()
    //    //}));



    //    d2.append($('<img />').attr({
    //        src: '/Images/NewNote.gif',
    //        style: 'margin: 0px 5px 0px 5px; display: none;',
    //        id: 'NewMessage' + UserName.toUpperCase()
    //    }));

    //    d2.append(FullName + '<br>');

    //    if (Property == '(No Property)')
    //    {
    //        d2.append('<span style="color: red;">' + Property + '</span>');
    //    }
    //    else
    //    {
    //        d2.append(Property);
    //    }

    //    d.append(d2);

    //    var dc = $('<div />').attr({
    //        style: 'clear: both;'
    //    })

    //    d.append(dc);


    //    $('#divActiveUsers').append(d);
    //},

</script>





<style>
   .NewMessageAlert 
   {
        font-size: medium;
        background: #aa2626;
        border: 1px solid grey;
        color: white;
        padding: 1px 5px 1px 5px;
        border-radius: 5px;
        font-family: Arial;
        
        position: absolute; 
        top: 0px; 
        left: 45px;
        display: none;
    }

    .hv
    {
        font-family: Arial;
        padding: 10px 8px 5px 0px ;
        position: relative; 
        height: 48px; 
        width: 268px;

    }

    .hv:hover
    {
        color: white;
        background: #03508e;
        cursor: pointer;
    }
    
    .Image
    {
        position: absolute; 
        top: 5px; 
        left: 5px; 
        border: 1px solid grey; 
        border-radius: 3px;
    }

    .chk
    {
        overflow: auto; 
        border-radius: 4px;  
        background: #E6E6E6; 
        display: inline-block;

    }

    .FullName
    {
        position: absolute; top: 10px; left: 67px;
    }

    .PropertyName
    {
        position: absolute; top: 30px; left: 67px;

    }
</style>


<script id="hidden-template" type="text/html">
    
    <div id="msgDIV{USERNAME}" class="hv" data-mc="{MESSAGECOUNT}" data-isactive="true" onclick="UserChat.UserSelected('{FULLNAME}', '{USERNAME}');">
        <img id="msgUserImage{USERNAME}" class="Image" src="{IMAGESOURCE}" />
        <div id="msgNewMessageCount{USERNAME}" class="NewMessageAlert">{MESSAGECOUNT}</div>
        <div class="FullName">{FULLNAME}</div>
        <div id="msgPropertyName{USERNAME}" class="PropertyName">{CURRENTPROPERTY}</div>
    </div>

</script>

<script id="hidden-template-outboundchat" type="text/html">
    
    <div style="margin-top: 5px;">
        <div  style="display: inline-block; color: #665; font-size: small; float: left; text-align: right; width: 140px;">
            <div>{FULLNAME}</div>
            <div>{DTM}</div>
            <div>{PROPNAME}</div>
        </div>
        <img class="InputboxGradient" style="float: left; margin-left: 5px; border-top: 1px solid #aaa; border-left: 1px solid #aaa; border-bottom: 1px solid #aaa; border-radius: 3px 0px 0px 3px;" src="{USERIMAGESRC}" />
        <div style="display: inline-block; float: left; background: #fff1a2;  width: 500px; min-height: 40px; color: #665; border: 1px solid #aaa; border-radius: 0px 3px 3px 0px; padding: 5px;">
            {MESSAGE}
        </div>
    </div>
    <div style="clear: both;"></div>

</script>

<script id="hidden-template-inboundchat" type="text/html">

     <div style="margin-top: 5px;">
            <div style="display: inline-block; background: #ffc300;  float: left; margin-left: 197px; width: 500px; min-height: 40px; border: 1px solid #aaa; border-radius: 3px 0px 0px 3px; padding: 5px; ">
               {MESSAGE}
            </div>
         <img class="InputboxGradient" style="border-top: 1px solid #aaa; border-right: 1px solid #aaa; border-bottom: 1px solid #aaa; border-radius: 0px 3px 3px 0px; float: left;" src="{USERIMAGESRC}" />
            <div style="display: inline-block; font-size: small; float: left; margin-left: 5px; width: 140px;">
                <div>{FULLNAME}</div>
                <div>{DTM}</div>
                <div>{PROPNAME}</div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </script>




<div id="divUserChatMask" style="background: rgb(51, 51, 51); opacity: 0.8; left: 0px; top: 0px; width: 0%; height: 0%; position: fixed; display: none;"></div>
<div id="divUserChat" class="PopupWindow" style="width: 300px; height: 675px; display: none;">

    <div class="DivHeaderLarge">
        <img src="./Monitor_files/CloseNormal.png" style="height: 20px; float: right; cursor: pointer;" onclick="CloseChat();">
        Message Board
    </div>

    <div class="DivBodyLarge" style="padding: 10px;">

            <input type="text" id="txtChatUser">
            <label>Find</label>
            <div id="divActiveUsers" style="border: 1px solid silver; margin: 5px 0px 5px 2px; border-radius: 1px; height: 521px; overflow: auto; ">


            </div>
            <div style="text-align: center; margin">
                <input type="button" value="All Users" style="margin-top: 8px;" onclick="UserChat.UserSelected(&#39;All Users&#39;, &#39;All Users&#39;);">
            </div>
    </div>
</div>


<div id="divUserChatMessageMask" class="PopupMask"></div>
<div id="divUserChatMessage" style="width: 975px; display: none;">

    <div class="PopupTitleBar">
        <label id="lblChatTitle">MESSAGE BOARD - (USERNAME)</label>
        <div class="CloseIcon" onclick="UserChat.CloseMessageWindow();"></div>
    </div>

    <div class="PopupBody" style="padding: 10px;">
        <div id="divChatLog" style="height: 370px; overflow: auto;  padding: 4px; margin-bottom: 10px;"></div>

        <input type="text" value="" id="txtChatMessage" style="width: 770px;">
        <input type="button" value="Send" onclick="UserChat.SendChatMessage();">

    </div>

</div>
        </div>
    <div id="mpeIssueDetail_backgroundElement" class="modalBackground" style="display: none; position: fixed; left: 0px; top: 0px; z-index: 10000;"></div></div>


<script id="hidden-template-monitoritem" type="text/html">
    <div class="{ROWCLASS}" style="padding: 1px; cursor: pointer;" onclick="ShowIssueDetail({ISSUEIDFK});">
        <label class="MonitorIssueID text-mono text-center text-nowrap"  style="width: 80px;">{ISSUEIDFK}</label>
        <img src="/Images/Camera.png" title="Issue Has Photos" style="cursor: pointer; visibility: {PHOTOVISIBLE};" onclick="PhotoViewer.Open(event, {ISSUEIDFK}, '{TRACKINGNUMBER}', null); " />
        <img src="/Images/Speaker.png" title="Issue Has Audio Attachments" style="cursor: pointer; visibility: {AUDIOVISIBLE};" onclick="AudioPlayer.Open({ISSUEIDFK}, '{TRACKINGNUMBER}', null);" />
        <label class="text-nowrap" style="width: 180px; font-size: small;">{PROPERTYNAME}</label>
        <label class="text-nowrap {ISSUETYPECLASS}" style="width: 185px; font-size: small;" title="{REPORTEDISSUEDETAIL}">{ISSUENAME}</label>
        <label class="text-nowrap text-monofont" style="width: 152px;">{CREATEDDTM}</label>
        <label class="text-nowrap text-center" style="width: 100px; font-size: small; text-transform: uppercase;" title="{CREATEDBYFULLNAME}">{CREATEDBY}</label>
        <label class="text-center {ISURGENT}" style="width: 70px; display: {SHOWLEVEL};">{ISSUELEVEL}</label>
        <label class="text-center" style="width: 70px; display: {SHOWTASK};"><img src="/Images/taskgraysm.png" style="height: 20px; vertical-align: middle;" /></label>
        <label class="text-center" style="width: 70px; display: {SHOWCHECKPOINT};"><img src="/Images/checkpointgreysm.png" title="This issue was created by a Checkpoint scan" style="height: 20px; vertical-align: middle; " /></label>
        <label class="IssueStatus text-nowrap {ISSUECSSSTATUS}" data-Index="{INDEX}" style="width: 100px; text-transform: uppercase;" title="{ASSIGNEDTOFULLNAME}">{ASSIGNEDTOUSERNAME}</label>
    </div>
</script>



<script id="hidden-template-monitoritemtips" type="text/html">



        <label class="inline-block">Assigned To:</label>
        <span style="color: orange;">{ASSIGNEDTOFULLNAME}</span>

    




</script>









    <script>


        //var cellBinary = row.insertCell(1);
        //if (obj.NumberOfPhotos > 0)
        //{
        //    var img = document.createElement('img');
        //    img.title = 'Issue Has Photos';
        //    img.setAttribute('titleishelp', 'true');
        //    img.src = '/Images/Camera.png';
        //    img.style.cursor = 'pointer';

        //    img.onclick = function ()
        //    {
        //        PhotoViewer.Open(obj.IssueIDFK, obj.TrackingNumber, null);
        //    }

        //    //{ alert('abc'); };// "PhotoViewer.Open(" + obj.IssueIDFK + ", '" + obj.TrackingNumber + "', null);";

        //    cellBinary.appendChild(img);
        //}

        //if (obj.NumberOfWaves > 0)
        //{
        //    var img = document.createElement('img');
        //    img.title = 'Issue Has Audio Attachments';
        //    img.setAttribute('titleishelp', 'true');
        //    img.src = '/Images/Speaker.png';
        //    img.style.cursor = 'pointer';

        //    img.onclick = function () {
        //        AudioPlayer.Open(obj.IssueIDFK, obj.TrackingNumber, null);
        //    }
        //    cellBinary.appendChild(img);
        //}



    </script>

    


<script lang="javascript">

	$(function ()
	{

		$('#divVehicleDetail').easyModal(
				{
					top: 100,
					autoOpen: false,
					overlayOpacity: 0.8,
					overlayColor: "#333",
					overlayClose: false,
					closeOnEscape: true
				});

		// Load Vehicle Colors
		$.getJSON("/Scripts/JSONConstants/VehicleColors.json", function (data)
		{
			$('#cboVehicleColor').empty();
			$('#cboVehicleColor').append('<option value="Choose">Choose</option>');

			for (var item in data)
			{
				$('#cboVehicleColor').append('<option value="' + data[item].color + '">' + data[item].color + '</option>');
			}
		});


		// Load Vehicle States
		$.getJSON("/Scripts/JSONConstants/StateList.json", function (data)
		{
			$('#cboPlateState').empty();
			$('#cboPlateState').append('<option value="Choose">Choose</option>');

			for (var item in data)
			{
				$('#cboPlateState').append('<option value="' + data[item].stateabbreviation + '">' + data[item].statename + '</option>');
			}
		});

		// Load Vehicle Makes
		$.getJSON("/Scripts/JSONConstants/VehicleMakes.json", function (data)
		{
			$('#cboVehicleMake').empty();
			$('#cboVehicleMake').append('<option value="Choose">Choose</option>');

			for (var item in data)
			{
				$('#cboVehicleMake').append('<option value="' + data[item].vehiclemake + '">' + data[item].vehiclemake + '</option>');
			}
		});

	});

	var VehicleDetails = {
	
		VehicleDetailIDFK: 0,


		Open: function (VehicleIDFK, zindex, CallBack)
		{


			$('#divVehicleDetail').easyModal(
				{
					top: 100,
					autoOpen: false,
					overlayOpacity: 0.8,
					overlayColor: "#333",
					overlayClose: false,
					closeOnEscape: true,
					zIDX: zindex
				});



			$('#divVehicleDetail').trigger('openModal');
			this.CallBackOnClose = CallBack;
			this.LoadVehicleDetail(VehicleIDFK);
			VehicleDetailIDFK = VehicleIDFK;
		},

		Close: function ()
		{
			$('#divVehicleDetail').trigger('closeModal');
		},

		LoadVehicleDetail: function(VehicleIDFK)
		{
			

			var self = this;
			this.ClearForm();
			document.getElementById("scmdSaveVehicle").style.display = 'inline';

			$('#hidVehicleIDFK').val(VehicleIDFK);

			var VehicleDetail = new Object();
			VehicleDetail.Username = "ttt";
			VehicleDetail.VehicleIDFK = VehicleIDFK;

			$.ajax({
				type: "POST",
				contentType: "application/json; charset=utf-8",
				url: "/WebServices/Vehicles.asmx/GetVehicleInfo",
				data: JSON.stringify(VehicleDetail),
				dataType: "json",
				success: function (msg)
				{
					var obj = JSON && JSON.parse(msg.d);

					if (isEmpty(obj[0].PermitIDFK) == true)
					{
						$('#txtVehiclePermitNumber').attr('readonly', 'true');
						$('#txtVehiclePermitNumber').attr('class', 'Textbox TextboxReadOnly');// .attr('readonly', 'true');
						$('#chkIsPermitActive').attr('disabled', 'true');
						$('#scmdReprintMailer').hide();
					}
					else
					{
						$('#scmdReprintMailer').show();
					}

					$('#txtVehiclePropertyName').text(obj[0].PropertyName);
					$('#txtAddress').text(obj[0].FullAddress);

					$('#txtVehicleCreatedDTM').text(FormatDate(obj[0].CreatedDTM, 'Short'));
					$('#txtVehicleCreatedDTM').prop('title', FormatDate(obj[0].CreatedDTM, 'Long'));
					$('#txtVehicleCreatedBy').text(obj[0].CreatedByUsername);

					$('#txtResidentName').text(obj[0].FirstName + ' ' + obj[0].LastName);
					$('#txtResidentPhone').text(obj[0].PhoneNumber);
					
					$('#txtVehicleInvoiceNumber').text(obj[0].InvoiceIDFK);


					$('#txtLicensePlateNumber').val(obj[0].LicensePlateNumber);
					$('#txtVehicleModel').val(obj[0].ModelOfVehicle);
					$('#txtVehicleVIN').val(obj[0].VIN);
					$('#txtVehiclePermitNumber').val(obj[0].PermitNumber);

					$('#cboPlateState').val(obj[0].LicensePlateState);

					$('#cboVehicleMake').val(obj[0].MakeOfVehicle);
					$('#cboVehicleColor').val(obj[0].VehicleColor);



					$('#txtVehicleComments').val(obj[0].VehicleComments);

					$('#chkIsVehicleActive').prop("checked", obj[0].IsVehicleActive);
					$('#chkIsPermitActive').prop("checked", obj[0].IsPermitActive);

					self.LoadVehicleHistory(VehicleDetailIDFK);


				},
				error: function (msg)
				{
				    ShowWarningDialog('Unable to load vehicle');
				    Common.LogAjaxError('wucVehicleDetails.ascx', 'LoadVehicleDetail', msg.responseJSON.Message);
				}
			});
		},

		SaveVehicleDetail: function()
		{

			ShowWarningDialog(NullToString($('#cboPlateState').val()));

			var VehicleDetail = new Object();

			VehicleDetail.VehicleIDFK = $('#hidVehicleIDFK').val();
			VehicleDetail.VehiclePermitNumber = $('#txtVehiclePermitNumber').val();
			VehicleDetail.VehicleComments = $('#txtVehicleComments').val();
			VehicleDetail.VehicleModel = $('#txtVehicleModel').val();
			VehicleDetail.VehicleVIN = $('#txtVehicleVIN').val();
		
			VehicleDetail.LicensePlateNumber = NullToString($('#txtLicensePlateNumber').val());

			VehicleDetail.PlateState = NullToString($('#cboPlateState').val());
			VehicleDetail.VehicleColor = NullToString($('#cboVehicleColor').val());
			VehicleDetail.VehicleMake = NullToString($('#cboVehicleMake').val());

			VehicleDetail.IsPermitActive = $('#chkIsPermitActive').prop('checked');
			VehicleDetail.IsVehicleActive = $('#chkIsVehicleActive').prop('checked');

			$.ajax({
				type: "POST",
				contentType: "application/json; charset=utf-8",
				url: "/WebServices/Vehicles.asmx/SaveVehicleDetail",
				data: JSON.stringify(VehicleDetail),
				dataType: "json",
				success: function (msg)
				{
					
					ShowWarningDialog("Vehicle Saved Successfully!");
					return false;
				},
				error: function (msg)
				{
				    ShowWarningDialog('Unable to save vehicle detail');
				    Common.LogAjaxError('wucVehicleDetails.ascx', 'SaveVehicleDetail', msg.responseJSON.Message);
					return false;
				},
				async: false
			});

		},

		addRow: function(a, b, c)
		{

			var table = document.getElementById('tblHistory');

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			//var cell1 = row.insertCell(0);
			//cell1.innerHTML = a;



			var cellIcon = row.insertCell(0);
			cellIcon.style.textDecoration = 'none';
			var l = document.createElement('a');
			l.href = '/AdminCustomer/Issues/Monitor.aspx?IssueIDFK=' + a;

			var lt = document.createTextNode(a);
			cellIcon.style.color = "blue";
			cellIcon.style.cursor = 'pointer';
			cellIcon.title = 'Click on Issue ID # to open the Issue Detail Screen.';
			cellIcon.setAttribute('titleishelp', 'true');

			l.appendChild(lt);
			//l.onclick = function () { ShowIssueDetail(obj.IssueIDFK); };
			cellIcon.appendChild(l);





			var cell2 = row.insertCell(1);
			cell2.innerHTML = b;

			var cell3 = row.insertCell(2);
			cell3.innerHTML = c;

			return false;
		},

		CreateHistoryHeaderRow: function()
		{
			var table = document.getElementById('tblHistory');

			var header = table.createTHead();

			var row = header.insertRow(0);

			var h1 = document.createElement('th');
			h1.innerHTML = 'Issue #';
			h1.className = "LabelColor1";

			var h2 = document.createElement('th');
			h2.innerHTML = 'Issue Name';
			h2.className = "LabelColor1";

			var h3 = document.createElement('th');
			h3.innerHTML = 'Issue Status';
			h3.className = "LabelColor1";

			row.appendChild(h1);
			row.appendChild(h2);
			row.appendChild(h3);

		},

		LoadVehicleHistory: function(VehicleIDFK)
		{
			var self = this;

			var VehicleDetail = new Object();
			VehicleDetail.Username = "ttt";
			VehicleDetail.VehicleIDFK = VehicleIDFK;

			$.ajax({
				type: "POST",
				contentType: "application/json; charset=utf-8",
				url: "/WebServices/Vehicles.asmx/GetVehicleViolationHistory",
				data: JSON.stringify(VehicleDetail),
				dataType: "json",
				success: function (msg)
				{
					var obj = JSON && JSON.parse(msg.d);

					self.CreateHistoryHeaderRow();

					for (var ff in obj)
					{
						self.addRow(obj[ff].IssueID, obj[ff].IssueName, obj[ff].IssueStatus);
					}

				},
				error: function (msg)
				{
				    ShowWarningDialog('Unable to load vehicle history');
				    Common.LogAjaxError('wucVehicleDetails.ascx', 'LoadVehicleHistory', msg.responseJSON.Message);
				}
			});



		},

		ClearForm: function()
		{
			//$('#chkIsVehicleActive').prop("checked", false);
			//$('#chkIsPermitActive').prop("checked", false);
			$('#tblHistory').empty();
			$('#txtVehicleCreatedDTM').val('');
			$('#txtVehicleCreatedBy').val('');
			$('#txtLicensePlateNumber').val('');
			$('#txtVehicleModel').val('');
			$('#txtVehicleVIN').val('');
			$('#txtVehiclePermitNumber').val('');

			$('#txtAddress').val('');
			$('#txtPropertyName').val('');


			$('#txtResidentPhone').val('');
			$('#txtResidentName').val('');
			$('#txtVehicleInvoiceNumber').val('');

			$('#cboPlateState').prop('selectedIndex', 0);
			$('#cboVehicleMake').prop('selectedIndex', 0);
			$('#cboVehicleColor').prop('selectedIndex', 0);
			//$('#scboVehicleYear').prop('selectedIndex', 0);



			$('#txtVehiclePermitNumber').removeAttr('readonly');
			$('#txtVehiclePermitNumber').attr('class', 'Textbox');// .attr('readonly', 'true');
			$('#chkIsPermitActive').removeAttr('disabled');


		}

	}

</script>

<input type="hidden" name="AdminCustomer$ContentPlaceHolder1$wucVehicleDetails$hidVehicleIDFK" id="hidVehicleIDFK">

<div id="divVehicleDetail" style="width: 975px; height: 550px; display: none; position: fixed; z-index: 0; left: 50%; top: 100px;">

    <div class="PopupTitleBar">
		<label>Vehicle Detail</label>
        <div class="CloseIcon" onclick="VehicleDetails.Close();"></div>
	</div>


	<div class="PopupBody">
		<div style="float: left;">
            <div>
                <label class="label-horizontal" style="width: 115px;">Property Name</label>
                <label id="txtVehiclePropertyName" class="label-textbox" style="width: 405px;"></label>
            </div>

            <div>
                <label class="label-horizontal" style="width: 115px;">Address</label>
                <label id="txtAddress" class="label-textbox" style="width: 405px;"></label>
            </div>

            <div>
                <label class="label-horizontal" style="width: 115px;">Created Date</label>
                <label id="txtVehicleCreatedDTM" class="label-textbox" style="width: 145px;"></label>
                <label class="label-horizontal" style="width: 95px;">Created By</label>
                <label id="txtVehicleCreatedBy" class="label-textbox" style="width: 135px;"></label>
            </div>

            <div>
                <label class="label-horizontal" style="width: 115px;">Resident Name</label>
                <label id="txtResidentName" class="label-textbox" style="width: 145px;"></label>
                <label class="label-horizontal" style="width: 95px;">Phone</label>
                <label id="txtResidentPhone" class="label-textbox" style="width: 135px;"></label>
            </div>

            <div>
                <label class="label-horizontal" style="width: 115px;">Invoice #</label>
                <label id="txtVehicleInvoiceNumber" class="label-textbox" style="width: 145px;"></label>
            </div>

            <div>
                <label class="label-horizontal" style="width: 115px;">Plate Number</label>
                <input type="text" id="txtLicensePlateNumber" value="" style="width: 145px;">
                <label class="label-horizontal" style="width: 95px;">Permit #</label>
                
                <input name="AdminCustomer$ContentPlaceHolder1$wucVehicleDetails$txtVehiclePermitNumber" type="text" id="txtVehiclePermitNumber" style="width: 135px;">



            </div>

            <div>
                <label class="label-horizontal" style="width: 115px;">VIN</label>
                <input type="text" id="txtVehicleVIN" value="" style="width: 145px;">
                <label class="label-horizontal" style="width: 95px;">Model</label>
                <input type="text" id="txtVehicleModel" value="" style="width: 135px;">
            </div>

            <div>
                <label class="label-horizontal" style="width: 115px;">Make</label>
                <select id="cboVehicleMake" style="width: 145px;"><option value="Choose">Choose</option><option value="Acura">Acura</option><option value="Alpha Romeo">Alpha Romeo</option><option value="American Motors">American Motors</option><option value="Audi">Audi</option><option value="Austin Healy">Austin Healy</option><option value="Bentley">Bentley</option><option value="BMW">BMW</option><option value="Buick">Buick</option><option value="Cadillac">Cadillac</option><option value="Chevrolet">Chevrolet</option><option value="Chrysler">Chrysler</option><option value="Daewoo">Daewoo</option><option value="Daihatsu">Daihatsu</option><option value="Datsun">Datsun</option><option value="DeLorean">DeLorean</option><option value="Dodge">Dodge</option><option value="Eagle">Eagle</option><option value="Ferrari">Ferrari</option><option value="Fiat">Fiat</option><option value="Ford">Ford</option><option value="Geo">Geo</option><option value="GMC">GMC</option><option value="Harley Davidson">Harley Davidson</option><option value="Honda">Honda</option><option value="Hummer">Hummer</option><option value="Hyundai">Hyundai</option><option value="Infiniti">Infiniti</option><option value="International">International</option><option value="Isuzu">Isuzu</option><option value="Jaguar">Jaguar</option><option value="Jeep">Jeep</option><option value="Jensen Healy">Jensen Healy</option><option value="Kawasaki">Kawasaki</option><option value="Kia">Kia</option><option value="Kurbmaster">Kurbmaster</option><option value="Lamborghini">Lamborghini</option><option value="Lancia">Lancia</option><option value="Land Rover">Land Rover</option><option value="Lexus">Lexus</option><option value="Lincoln">Lincoln</option><option value="Lotus">Lotus</option><option value="Mack Truck">Mack Truck</option><option value="May Bach">May Bach</option><option value="Mazda">Mazda</option><option value="Mazerati">Mazerati</option><option value="Mercedes Benz">Mercedes Benz</option><option value="Mercury">Mercury</option><option value="Merkur">Merkur</option><option value="MG">MG</option><option value="Mini">Mini</option><option value="Mitsubishi">Mitsubishi</option><option value="Nissan">Nissan</option><option value="Oldsmobile">Oldsmobile</option><option value="Other">Other</option><option value="Pantera">Pantera</option><option value="Peugeot">Peugeot</option><option value="Plymouth">Plymouth</option><option value="Pontiac">Pontiac</option><option value="Porsche">Porsche</option><option value="Rambler">Rambler</option><option value="Renault">Renault</option><option value="Rolls Royce">Rolls Royce</option><option value="Rover">Rover</option><option value="Saab">Saab</option><option value="Saturn">Saturn</option><option value="Scion">Scion</option><option value="Subaru">Subaru</option><option value="Suzuki">Suzuki</option><option value="Toyota">Toyota</option><option value="Triumph">Triumph</option><option value="Volkswagen">Volkswagen</option><option value="Volvo">Volvo</option><option value="Yamaha">Yamaha</option><option value="Yugo">Yugo</option></select>
                <label class="label-horizontal" style="width: 95px;">Plate State</label>
                <select id="cboPlateState" style="width: 135px;"><option value="Choose">Choose</option><option value="AZ">Arizona</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MX">Mexico</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OK">Oaklahoma</option><option value="OH">Ohio</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option><option value="AB">Alberta</option><option value="BC">British Columbia</option><option value="MB">Manitoba</option><option value="NB">New Brunswick</option><option value="NL">Newfoundland and Labrador</option><option value="NT">Northwest Territories</option><option value="NS">Nova Scotia</option><option value="NU">Nunavut</option><option value="ON">Ontario</option><option value="PE">Price Edward Island</option><option value="QC">Quebec</option><option value="SK">Saskatchewan</option><option value="YT">Yukon</option><option value="ACT">Australian Capital Territory</option><option value="NSW">New South Wales</option><option value="NT">Northern Territory</option><option value="QLD">Queensland</option><option value="SA">South Australia</option><option value="TAS">Tasmania</option><option value="VIC">Victoria</option><option value="WAU">Western Australia</option><option value="NZ">New Zealand</option></select>
            </div>

            <div>
                <label class="label-horizontal" style="width: 115px;">Color</label>
                <select id="cboVehicleColor" style="width: 145px;"><option value="Choose">Choose</option><option value="Beige">Beige</option><option value="Black">Black</option><option value="Blue">Blue</option><option value="Bronze">Bronze</option><option value="Brown">Brown</option><option value="Burgundy">Burgundy</option><option value="Cream">Cream</option><option value="Gold">Gold</option><option value="Gray">Gray</option><option value="Green">Green</option><option value="Maroon">Maroon</option><option value="Orange">Orange</option><option value="Other">Other</option><option value="Purple">Purple</option><option value="Red">Red</option><option value="Silver">Silver</option><option value="Tan">Tan</option><option value="Turquoise">Turquoise</option><option value="White">White</option><option value="Yellow">Yellow</option></select>
            </div>

            <div>
                <label class="label-horizontal" style="width: 115px; vertical-align: top;">Comments</label>
                <textarea id="txtVehicleComments" style="width: 405px;"></textarea>
            </div>

            <input id="chkIsVehicleActive" type="checkbox" name="AdminCustomer$ContentPlaceHolder1$wucVehicleDetails$chkIsVehicleActive"><label for="chkIsVehicleActive">Vehicle Is Active</label>
            <input id="chkIsPermitActive" type="checkbox" name="AdminCustomer$ContentPlaceHolder1$wucVehicleDetails$chkIsPermitActive"><label for="chkIsPermitActive">Permit Is Active</label>

		
		</div>

		<div style="float: right; width: 380px;">
			<div class="DivHeaderLarge">Vehicle History</div>
			<div class="DivBodyLarge" style="height: 300px; overflow: auto;">
				<table id="tblHistory" class="GridView" style="background: transparent; font-size: small;">
				</table>
			</div>

		  </div>






		<div style="clear: both;"></div>
		<div style="text-align: center;">
			
			<input type="button" id="scmdSaveVehicle" value="Save Vehicle" onclick="return VehicleDetails.SaveVehicleDetail();">
			<input type="submit" name="AdminCustomer$ContentPlaceHolder1$wucVehicleDetails$scmdReprintMailer" value="Reprint Permit Mailer" id="scmdReprintMailer">
		</div>

		
	</div>
</div>


    
    <div id="divNewIssue" style="width: 975px; z-index: 100001; display: none; position: fixed;">
        



<script src="./Monitor_files/TreeView.js.download"></script>


<script lang="javascript">

	var AllowPropertyParkingProgram = false;
	var AllowPropertySecurityProgram = false;
	var AllowPropertyMaintenanceProgram = false;

	var mPropertyIDFK = 0;
	var mPropertyAddressIDFK = 0;
	var mUnitIDFK = 0;
	var mResidentIDFK = 0;

	var SearchBy = '';

	// Init
	$(function ()
	{



		$("form input").keypress(function (e)
		{
			if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13))
			{
				//$('.defaultclick').click();
				FindProperty('Property');
			}
		});

		$('#divFind').hover(function ()
		{
			$('#divSearchType').fadeIn(100)
		}, function ()
		{
			$('#divSearchType').fadeOut(100)
		})


		$('#cboIssueType').change(function () {
		    var selected = $(this).find('option:selected');
		    var extra = selected.data('autoclose');
		    if (extra == true)
		    {
		        $('#divAutoClose').show();
		        $('#chkAutoCloseIssue').prop('checked', true);
		    }
		    else
		    {
		        $('#divAutoClose').hide();
		        $('#chkAutoCloseIssue').prop('checked', false);
		    }
		});

		$('#cboSecurityProblemAddress').change(function ()
		{
			$('#cboSecurityProblemUnit').empty();
			$('#cboLocations').empty();

			if ($('#cboSecurityProblemAddress').val() == 0)
			{


			}
			else
			{
				LoadProblemUnits($('#cboSecurityProblemAddress').val());
				LoadLocations($('#cboSecurityProblemAddress').val());
			}


		});

	});

	// Load Property List
	function LoadProperty()
	{
		SetMode('Empty');
		$('#divShortHistory').empty();

		$("#tvwProperty").empty();
		$('#txtReportedIssueDetail').val('');
		$('#lblAssignToUsername').text('');
		$('#cboSecurityProblemAddress').empty();
		$('#cboSecurityProblemUnit').empty();
		$('#cboIssueType').empty();

		$('#divIssueType').hide();
		$('#divPropertyDetail').hide();
		$('#divNewSecurityIssue').hide();
		$('#divNewParkingIssue').hide();
		$('#divNewMaintenanceIssue').hide();

		var prop = new Object()
		SearchBy = '';
		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/GetPropertyList",
			data: JSON.stringify(prop),
			dataType: "json",
			success: function (msg)
			{

				var obj = JSON && JSON.parse(msg.d);
				LoadTree(obj, 'Property');


			},
			error: function (msg)
			{
			    ShowWarningDialog('A error has occured Getting the Property Data.');
			    Common.LogAjaxError('wucNewIssue.ascx', 'LoadProperty', msg.responseJSON.Message);
			}
		});

		$('#txtSearch').focus();

	}

	function LoadPropertyShortHistory(PropertyIDFK)
	{

		$('#divShortHistory').empty();


		var prop = new Object()
		prop.PropertyIDFK = PropertyIDFK;

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/GetPropertyShortHistory",
			data: JSON.stringify(prop),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);

				for (var ff in obj)
				{
				    var link = 'onclick="ShowIssueDetail(' + obj[ff].IssueIDFK + ')"';

					var html = '<div class="RecentIssue" title="Click to Open This Issue" ' + link + ' >';
					html += FormatDate(obj[ff].CreatedDTM, 'Short');
					html += '<div style="float: right;" class="WarningLabelMedium">' + obj[ff].Age + '<img src="/Images/grey' + obj[ff].BaseIssueType + '20.png" /></div>';

					html += '<br>' + obj[ff].IssueName + '<br>';
					html += '<b>' + obj[ff].IssueStatus + '</b><br>';
					html += obj[ff].FullAddress + '<br>';

					//html += '<div style="text-align: center"><input type="button"  value="Open Issue" style="margin-right: 10px; display: none;" onclick="ShowIssueDetail(' + obj[ff].IssueIDFK + ');" /></div>'

					$('#divShortHistory').append(html);


				}
			},
			error: function (msg)
			{
			    ShowWarningDialog('A error has occured Getting Property Recent History.');
			    Common.LogAjaxError('wucNewIssue.ascx', 'LoadPropertyShortHistory', msg.responseJSON.Message);
			}
		});

	}

	function FindProperty(SearchType)
	{
		//$("#tvwProperty").data("kendoTreeView").dataSource.data([]);

		var FindProperty = new Object()
		FindProperty.SearchType = SearchType;
		FindProperty.SearchValue = $('#txtSearch').val();
		//SearchBy = SearchType;

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/FindProperty",
			data: JSON.stringify(FindProperty),
			dataType: "json",
			success: function (msg)
			{

				var obj = JSON && JSON.parse(msg.d);
				LoadTree(obj, SearchType);

			},
			error: function (msg)
			{
			    ShowWarningDialog('A error has occured Searching the Monitor Data.');
			    Common.LogAjaxError('wucNewIssue.ascx', 'FindProperty', msg.responseJSON.Message);
			}
		});

	}

	function NewSecurityIssue(PropertyIDFK, PropertyAddressIDFK, UnitIDFK, ResidentIDFK)
	{

		SetMode('NewSecurityIssue');
		mPropertyIDFK = PropertyIDFK;
		mPropertyAddressIDFK = PropertyAddressIDFK;
		mUnitIDFK = UnitIDFK || 0;
		mResidentIDFK = ResidentIDFK || 0;

		LoadIssueType('Security', PropertyIDFK);
		LoadProblemAddresses(PropertyIDFK, PropertyAddressIDFK);
		LoadProblemUnits(PropertyAddressIDFK);
		LoadLocations(PropertyAddressIDFK);
		$('#lblAssignToUsername').text('');
	}

	function NewParkingIssue(PropertyIDFK, PropertyAddressIDFK, UnitIDFK, ResidentIDFK)
	{
		SetMode('NewParkingIssue');
		mPropertyIDFK = PropertyIDFK;
		mPropertyAddressIDFK = PropertyAddressIDFK;
		mUnitIDFK = UnitIDFK || 0;
		mResidentIDFK = ResidentIDFK || 0;

		LoadIssueType('Parking', PropertyIDFK);
	}

	function NewMaintenanceIssue(PropertyIDFK, PropertyAddressIDFK, UnitIDFK, ResidentIDFK)
	{
		SetMode('NewMaintenanceIssue');
		mPropertyIDFK = PropertyIDFK;
		mPropertyAddressIDFK = PropertyAddressIDFK;
		mUnitIDFK = UnitIDFK || 0;
		mResidentIDFK = ResidentIDFK || 0;

		LoadIssueType('Maintenance', PropertyIDFK);
	}

	function NewTemporaryPermit(PropertyIDFK, PropertyAddressIDFK, UnitIDFK, ResidentIDFK)
	{
		//divTemporaryParkingPermit
		SetMode('NewTemporaryParkingPermit');
		mPropertyIDFK = PropertyIDFK;
		mPropertyAddressIDFK = PropertyAddressIDFK;
		mUnitIDFK = UnitIDFK || 0;
		mResidentIDFK = ResidentIDFK || 0;
	}

	function AddSecurityIssue()
	{




		if ($('#cboIssueType').val() == 0)
		{
			ShowWarningDialog('Please Select A Issue Type To Continue');
			return;
		}

		if ($('#cboSecurityProblemAddress').val() == 0)
		{
			ShowWarningDialog('Please Select A Address To Continue');
			return;
		}


		if ($('#txtReportedIssueDetail').val().length == 0)
		{
			ShowWarningDialog('Please Enter a Problem Description To Continue');
			return;
		}

		var NewIssue = new Object()
		NewIssue.PropertyIDFK = mPropertyIDFK;
		NewIssue.IssueTypeIDFK = $('#cboIssueType').val();
		NewIssue.ReportedIssueDetail = $('#txtReportedIssueDetail').val();
		NewIssue.AssignToUsername = $('#lblAssignToUsername').text();
		NewIssue.UnitIDFK = mUnitIDFK;
		NewIssue.PropertyAddressIDFK = mPropertyAddressIDFK;
		NewIssue.ResidentIDFK = mResidentIDFK;
		NewIssue.BaseIssueType = 'Security';
		NewIssue.Location = $('#cboLocations').val();

		if ($("#chkRemainAnonymous").is(':checked'))
		{
			NewIssue.RemainAnonymous = true;
		}
		else
		{
			NewIssue.RemainAnonymous = false;
		}

		if ($("#chkAutoCloseIssue").is(':checked'))
		{
		    NewIssue.CloseIssue = true;
		}
		else
		{
		    NewIssue.CloseIssue = false;
		}
        

		NewIssue.ProblemPropertyAddressIDFK = $('#cboSecurityProblemAddress').val();
		NewIssue.ProblemPropertyUnitNumber = $('#cboSecurityProblemUnit').val();

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/AddNewSecurityIssue",
			data: JSON.stringify(NewIssue),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);

				ShowWarningDialog('Issue Number ' + obj[0].IssueIDFK + ' has been added Successfully!');
				$('#txtReportedIssueDetail').val('');
				$('#cboIssueType').val(0);

				LoadPropertyShortHistory(mPropertyIDFK);

			},
			error: function (msg)
			{
				ShowWarningDialog('Unable to add issue.  Please check the data and try again.');
				Common.LogAjaxError('wucNewIssue.ascx', 'AddSecurityIssue', msg.responseJSON.Message)
			}
		});

	}

	function AddMaintenanceIssue()
	{

		// Validate issue type
		if ($('#cboIssueType').val() == 0)
		{
			ShowWarningDialog('Please Select A Issue Type To Continue');
			return;
		}

		// Validate issue detail
		if ($('#txtReportedIssueDetail').val().length == 0)
		{
			ShowWarningDialog('Please Enter a Problem Description To Continue');
			return;
		}


		if (isEmpty($("input[name='Appointment']:checked").val()))
		{
			ShowWarningDialog('You must choose an appointment method.');
			return;

		}


		var NewIssue = new Object()
		NewIssue.PropertyIDFK = mPropertyIDFK;
		NewIssue.IssueTypeIDFK = $('#cboIssueType').val();
		NewIssue.ReportedIssueDetail = $('#txtReportedIssueDetail').val();
		NewIssue.AssignToUsername = $('#lblAssignToUsernameMaintenance').text();
		NewIssue.UnitIDFK = mUnitIDFK;
		NewIssue.PropertyAddressIDFK = mPropertyAddressIDFK;
		NewIssue.ResidentIDFK = mResidentIDFK;
		NewIssue.MaintenanceIssueLocation = $('#txtMaintenanceLocation').val();

		

		if ($('#rdoSchedule').prop('checked') == true)
		{
			NewIssue.ScheduleAppointment = true;
		}
		else
		{
			NewIssue.ScheduleAppointment = false;
		}




		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/AddNewMaintenanceIssue",
			data: JSON.stringify(NewIssue),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);

				ShowWarningDialog('Issue Number ' + obj[0].IssueIDFK + ' has been added Successfully!');
				$('#txtReportedIssueDetail').val('');
				$('#cboIssueType').val(0);

				LoadPropertyShortHistory(mPropertyIDFK);


			},
			error: function (msg)
			{
				ShowWarningDialog('Unable to add issue.  Please check the data and try again.');
				Common.LogAjaxError('wucNewIssue.ascx', 'AddMaintenanceIssue', msg.responseJSON.Message)
			}
		});
	}

	function AddParkingIssue()
	{

		// Validate issue type
		if ($('#cboIssueType').val() == 0)
		{
			ShowWarningDialog('Please Select A Issue Type To Continue');
			return;
		}

		// Validate issue detail
		if ($('#txtReportedIssueDetail').val().length == 0)
		{
			ShowWarningDialog('Please Enter a Problem Description To Continue');
			return;
		}
        

		var NewIssue = new Object()
		NewIssue.PropertyIDFK = mPropertyIDFK;
		NewIssue.IssueTypeIDFK = $('#cboIssueType').val();
		NewIssue.ReportedIssueDetail = $('#txtReportedIssueDetail').val();
		NewIssue.AssignToUsername = $('#lblAssignToUsernameParking').text();
		NewIssue.UnitIDFK = mUnitIDFK;
		NewIssue.PropertyAddressIDFK = mPropertyAddressIDFK;
		NewIssue.ResidentIDFK = mResidentIDFK;

		NewIssue.ParkingSpaceNumber = $('#txtParkingSpaceNumber').val();

		NewIssue.ViolatingLicensePlate = $('#txtViolatingLicensePlate').val();
		NewIssue.ViolatingPlateState = $('#scboViolatingPlateState').val();
		NewIssue.ViolatingMake = $('#scboViolatingMake').val();
		NewIssue.ViolatingModel = $('#txtViolatingModel').val();
		NewIssue.ViolatingColor = $('#scboViolatingColor').val();

		NewIssue.ValidLicensePlate = $('#txtValidLicensePlate').val();
		NewIssue.ValidPlateState = $('#scboValidPlateState').val();
		NewIssue.ValidMake = $('#scboValidMake').val();
		NewIssue.ValidModel = $('#txtValidModel').val();
		NewIssue.ValidColor = $('#scboValidColor').val();

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/AddNewParkingIssue",
			data: JSON.stringify(NewIssue),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);

				ShowWarningDialog('Issue Number ' + obj[0].IssueIDFK + ' has been added Successfully!');
				$('#txtReportedIssueDetail').val('');
				$('#cboIssueType').val(0);
				LoadPropertyShortHistory(mPropertyIDFK);

			},
			error: function (msg)
			{
				ShowWarningDialog('Unable to add issue.  Please check the data and try again.');
				Common.LogAjaxError('wucNewIssue.ascx', 'AddParkingIssue', msg.responseJSON.Message)
			}
		});
	}


	function ClearResident()
	{
			mResidentIDFK = 0;

			$('#txtResidentFirstName').val('');
			$('#txtResidentLastName').val('');
			$('#txtResidentEmailAddress').val('');
			$('#txtResidentNotes').val('');

			$('#wucResidentPhone_stxtPhone').val('');

			$('#wucResidentCell_stxtPhone').val('');

	}

	function SaveResident()
	{

	    if (isEmpty($('#txtResidentFirstName').val()) == true || isEmpty($('#txtResidentLastName').val()) == true)
	    {
	        ShowWarningDialog('A First and Last name are required.');
	        return false;
	    }

		var Resident = new Object()
		Resident.PropertyIDFK = mPropertyIDFK;
		Resident.FirstName = $('#txtResidentFirstName').val();
		Resident.LastName = $('#txtResidentLastName').val();
		Resident.Email = $('#txtResidentEmailAddress').val();
		Resident.ResidentNotes = $('#txtResidentNotes').val();

		Resident.HomePhone = $('#wucResidentPhone_stxtPhone').val();
		if (Resident.HomePhone.length != 10 && Resident.HomePhone.length != 0)
		{
			ShowWarningDialog('The Home Phone Number is not Accurate');
			return false;
		}

		Resident.CellPhone = $('#wucResidentCell_stxtPhone').val();
		if (Resident.CellPhone.length != 10 && Resident.CellPhone.length != 0)
		{
			ShowWarningDialog('The Cell Phone Number is not Accurate');
			return false;
		}

		if (mResidentIDFK == 0)
		{
			AddNewResident(Resident);
		}
		else
		{
			SaveResidentDetail(Resident);
		}

	}

	function AddNewResident(Resident)
	{
		
		Resident.PropertyAddressIDFK = mPropertyAddressIDFK;
		Resident.UnitIDFK = mUnitIDFK;

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/AddNewResident",
			data: JSON.stringify(Resident),
			dataType: "json",
			success: function (msg)
			{
				var nn = tree.get_selectedNode();
				var p = nn.get_parent();

				p.collapse();
				p.get_nodes().clear();

				ShowWarningDialog('Resident Added Successfully!');
				ClearResident();
			},
			error: function (msg)
			{
				ShowWarningDialog('A error has occured Adding the Resident.');
				Common.LogAjaxError('wucNewIssue.ascx', 'AddNewResident', msg.responseJSON.Message)
			}
		});

	}

	function SaveResidentDetail(Resident)
	{
		
		Resident.ResidentIDFK = mResidentIDFK;

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/SaveResident",
			data: JSON.stringify(Resident),
			dataType: "json",
			success: function (msg)
			{
				var nn = tree.get_selectedNode();
				var p = nn.get_parent();
				
				p.collapse();
				p.get_nodes().clear();
				
				ShowWarningDialog('Save Successful!');
			},
			error: function (msg)
			{
				ShowWarningDialog('A error has occured Saving the Resident.');
				Common.LogAjaxError('wucNewIssue.ascx', 'SaveResidentDetail', msg.responseJSON.Message)
			}
		});






	}

	function LoadIssueType(BaseIssueType, PropertyIDFK)
	{

		$('#cboIssueType').empty();
		$('#cboIssueType').append('<option value="0">Choose</option>');

		var prop = new Object()
		prop.PropertyIDFK = PropertyIDFK;
		prop.BaseIssueType = BaseIssueType;

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/GetIssueTypeList",
			data: JSON.stringify(prop),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);

				for (var ff in obj)
				{
				    $('#cboIssueType').append('<option value="' + obj[ff].IssueTypeIDFK + '" data-autoclose="' + obj[ff].AutoCloseWhenCreated + '">' + obj[ff].IssueName + '</option>');

				}
			},
			error: function (msg)
			{
				ShowWarningDialog('A error has occured loading issue types.');
				Common.LogAjaxError('wucNewIssue.ascx', 'LoadIssueType', msg.responseJSON.Message)
			}
		});

	}
	

	function LoadTree(obj, SearchType)
	{
		tree = $find('RadTreeView1');

		tree.get_nodes().clear();

		for (var ff in obj)
		{
			switch (SearchType)
			{
				case "Property":
					AddNode(obj[ff].PropertyName, '', false, 'Property', obj[ff].ID, null, null, null, null);
					break;

				case "Address":
					AddNode(obj[ff].Address, '', false, 'PropertyAddress', obj[ff].PropertyIDFK, obj[ff].PropertyAddressIDFK, null, null, null);

					//propTree.append([{ text: obj[ff].Address, title: obj[ff].PropertyName, PropertyIDFK: obj[ff].PropertyIDFK, PropertyAddressIDFK: obj[ff].PropertyAddressIDFK, NodeType: 'PropertyAddress', hasChildren: true }]);
					break;

				default:
					break;
			}
		}

		if (obj.length == 0)
			ShowWarningDialog('No Items were found for this search.');

	}

	function LoadPropertyDetail(PropertyIDFK)
	{
		var Property = new Object()

		Property.PropertyIDFK = PropertyIDFK;


		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/GetPropertyDetail",
			data: JSON.stringify(Property),
			dataType: "json",
			success: function (msg)
			{

				var obj = JSON && JSON.parse(msg.d);

				$('#lblPropertyNotes').text(obj[0].PropertyDescription);

				AllowPropertyParkingProgram = obj[0].AllowParkingProgram;
				AllowPropertySecurityProgram = obj[0].AllowSecurityProgram;
				AllowPropertyMaintenanceProgram = obj[0].AllowMaintenanceProgram;

			},
			error: function (msg)
			{
			    ShowWarningDialog('A error has occured Getting the Property Detail.');
			    Common.LogAjaxError('wucNewIssue.ascx', 'LoadPropertyDetail', msg.responseJSON.Message);
			}
		});
	}

	function LoadUnitDetail(UnitIDFK)
	{
		var Unit = new Object()
		Unit.UnitIDFK = UnitIDFK;



		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/GetUnitDetail",
			data: JSON.stringify(Unit),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);

				$('#lblUnitNumber').text(obj[0].UnitNumber);
				$('#chkIsUnitActive').prop('checked', obj[0].IsUnitActive);
				$('#lblMaximumParkingPermits').text(obj[0].MaximumParkingPermits);
				$('#lblParkingSpaces').text(obj[0].ParkingSpaces);

				$('#lblSecurityViolations').text(obj[0].SecurityViolationCount);
				$('#cmdResetSecurityViolations').prop('title', 'Last Reset: ' + (obj[0].SecurityViolationResetDTM || 'Never'));

				$('#lblReportedSecurity').text(obj[0].SecurityIssuesReportedCount);
				$('#cmdResetReportedSecurity').prop('title', 'Last Reset: ' + (obj[0].SecurityIssuesReportedResetDTM || 'Never'));

				$('#lblReportedParking').text(obj[0].ParkingIssuesReportedCount);
				$('#cmdResetReportedParking').prop('title', 'Last Reset: ' + (obj[0].ParkingIssuesReportedResetDTM || 'Never'));

				$('#lblReportedMaintenance').text(obj[0].MaintenanceIssuesReportedCount);
				$('#cmdResetReportedMaintenance').prop('title', 'Last Reset: ' + (obj[0].MaintenanceIssuesReportedResetDTM || 'Never'));


				
				
				
				
			},
			error: function (msg)
			{
			    ShowWarningDialog('A error has occured Getting the Unit Detail.');
			    Common.LogAjaxError('wucNewIssue.ascx', 'LoadUnitDetail', msg.responseJSON.Message);
			}
		});
	}

	function SetMode(Selected)
	{

		$('#divIssueType').hide();
		$('#divPropertyDetail').hide();
		$('#divNewSecurityIssue').hide();
		$('#divNewParkingIssue').hide();
		$('#divNewMaintenanceIssue').hide();
		$('#divResident').hide();
		$('#divTemporaryParkingPermit').hide();
		$('#divUnitDetail').hide();

		$('#divAutoClose').hide();
		$('#chkAutoCloseIssue').prop('checked', false);

		switch (Selected)
		{
			case 'Property':
				$('#divPropertyDetail').show();
				break;

			case 'PropertyAddress':
				$('#cboSecurityProblemUnit').empty();
				$('#divPropertyDetail').show();
				break;

			case 'UnitNumber':
				$('#divUnitDetail').show();
				break;

			case 'Resident':
				$('#divResident').show();
				break;

			case 'EditResident':
				$('#divResident').show();
				break;

			case 'NewResident':
				$('#divResident').show();
				break;

			case 'NewSecurityIssue':
				$('#divIssueType').show();
				$('#divNewSecurityIssue').show();
				break;

			case 'NewParkingIssue':
				$('#divIssueType').show();
				$('#divNewParkingIssue').show();
				break;

			case 'NewMaintenanceIssue':
				$('#divIssueType').show();
				$('#divNewMaintenanceIssue').show();
				break;

			case 'NewResidentSecurityIssue':
				break;

			case 'NewTemporaryParkingPermit':
				$('#divTemporaryParkingPermit').show();

				break;


			default:
				break;

		}


	}


	function LoadProblemAddresses(PropertyIDFK, PropertyAddressIDFK)
	{
		$('#cboSecurityProblemAddress').empty();

		var prop = new Object()
		prop.PropertyIDFK = PropertyIDFK;

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/GetPropertyAddressList",
			data: JSON.stringify(prop),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);
				$('#cboSecurityProblemAddress').append('<option value="0">Choose Problem Address</option>');

				for (var ff in obj)
				{
					if (PropertyAddressIDFK == obj[ff].PropertyAddressIDFK)
					{
						$('#cboSecurityProblemAddress').append('<option selected value="' + obj[ff].PropertyAddressIDFK + '">' + obj[ff].Address + '</option>');
					}
					else
					{
						$('#cboSecurityProblemAddress').append('<option value="' + obj[ff].PropertyAddressIDFK + '">' + obj[ff].Address + '</option>');
					}
				}
			},
			error: function (msg)
			{
			    ShowWarningDialog('Unable to load a list of the problem Addresses.');
			    Common.LogAjaxError('wucNewIssue.ascx', 'LoadProblemAddresses', msg.responseJSON.Message);
			}
		});
	}

	function LoadProblemUnits(PropertyAddressIDFK)
	{

		$('#cboSecurityProblemUnit').empty();

		var prop = new Object()
		prop.PropertyAddressIDFK = PropertyAddressIDFK;

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/GetUnitList",
			data: JSON.stringify(prop),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);
				$('#cboSecurityProblemUnit').append('<option value="0">Choose Problem Unit</option>');

				for (var ff in obj)
				{
					$('#cboSecurityProblemUnit').append('<option value="' + obj[ff].UnitNumber + '">' + obj[ff].UnitNumber + '</option>');
				}
			},
			error: function (msg)
			{
			    ShowWarningDialog('A error has occured Getting the Problem Unit List.');
			    Common.LogAjaxError('wucNewIssue.ascx', 'LoadProblemUnits', msg.responseJSON.Message);
			}
		});

	}

	function LoadLocations(PropertyAddressIDFK)
	{

		$('#cboLocations').empty();

		var prop = new Object()
		prop.PropertyAddressIDFK = PropertyAddressIDFK;
		prop.PropertyIDFK = mPropertyIDFK;

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/GetLocationList",
			data: JSON.stringify(prop),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);
				$('#cboLocations').append('<option value="Default">Choose Problem Location</option>');

				for (var ff in obj)
				{
					$('#cboLocations').append('<option value="' + obj[ff].LocationName + '">' + obj[ff].LocationName + '</option>');
				}
			},
			error: function (msg)
			{
				
			    ShowWarningDialog('A error has occured Loading the Locations');
			    Common.LogAjaxError('wucNewIssue.ascx', 'LoadLocations', msg.responseJSON.Message)
			}
		});

	}

	function SetUser()
	{
		if (UserSelectorSelectedUsername.length > 0)
		{
			switch (UserIssueType)
			{
				case "Security":
					$('#lblAssignToUsername').text(UserSelectorSelectedUsername);
					break;

				case "Parking":
					$('#lblAssignToUsernameParking').text(UserSelectorSelectedUsername);
					break;

				case "Maintenance":
					$('#lblAssignToUsernameMaintenance').text(UserSelectorSelectedUsername);
					break;

				default:
					break;
			}


		}
	}

	var UserIssueType = '';

	function ChooseUsernameForSecurity()
	{
		var a = SetUser;
		UserIssueType = 'Security';
		ShowUserSelector('Security', mPropertyIDFK, a);
	}

	function ChooseUsernameForParking()
	{
		var a = SetUser;
		UserIssueType = 'Parking';
		ShowUserSelector('Parking', mPropertyIDFK, a);
	}

	function ChooseUsernameForMaintenance()
	{
		var a = SetUser;
		UserIssueType = 'Maintenance';
		ShowUserSelector('Maintenance', mPropertyIDFK, a);
	}


	function ClientNodeClicked(sender, eventArgs)
	{
		var node = eventArgs.get_node();

		if (node.get_attributes().getAttribute('Selectable') == false)
		{
			node.set_selected(false);

			var nodeChildNodes = node.get_allNodes();

			//console.log(nodeChildNodes[0].get_text());


			if ((nodeChildNodes.length == 1 && nodeChildNodes[0].get_text() == 'Loading....') || (nodeChildNodes.length == 0))
			{
				if (nodeChildNodes.length > 0)
				{
					node.get_nodes().remove(nodeChildNodes[0]);
				}

				switch (node.get_attributes().getAttribute('Action'))
				{
					case 'Property':
						SetMode('Property');
						LoadPropertyShortHistory(node.get_attributes().getAttribute('PropertyIDFK'));
						LoadPropertyDetail(node.get_attributes().getAttribute('PropertyIDFK'));
						radLoadPropertyAddresses(node.get_attributes().getAttribute('PropertyIDFK'), node);
						mPropertyIDFK = node.get_attributes().getAttribute('PropertyIDFK');
						mPropertyAddressIDFK = 0;
						mUnitIDFK = 0;
						ClearResident();
						break;

					case 'PropertyAddress':
						SetMode('PropertyAddress');
						LoadPropertyDetail(node.get_attributes().getAttribute('PropertyIDFK'));
						radLoadAddressUnits(node.get_attributes().getAttribute('PropertyIDFK'), node.get_attributes().getAttribute('PropertyAddressIDFK'), node);
						mPropertyIDFK = node.get_attributes().getAttribute('PropertyIDFK');
						mPropertyAddressIDFK = node.get_attributes().getAttribute('PropertyAddressIDFK');
						mUnitIDFK = 0;
						ClearResident();
						break;

					case 'Unit':
						SetMode('UnitNumber');
						LoadUnitDetail(node.get_attributes().getAttribute('UnitIDFK'))
						radLoadUnitResidents(node.get_attributes().getAttribute('PropertyIDFK'), node.get_attributes().getAttribute('PropertyAddressIDFK'), node.get_attributes().getAttribute('UnitIDFK'), node);
						mPropertyIDFK = node.get_attributes().getAttribute('PropertyIDFK');
						mPropertyAddressIDFK = node.get_attributes().getAttribute('PropertyAddressIDFK');
						mUnitIDFK = node.get_attributes().getAttribute('UnitIDFK');
						ClearResident();
						break;

					default:
						break;

				}


			}
			else
			{
				// Already Loaded
				switch (node.get_attributes().getAttribute('Action'))
				{
					case 'Property':
						SetMode('Property');
						LoadPropertyShortHistory(node.get_attributes().getAttribute('PropertyIDFK'));
						LoadPropertyDetail(node.get_attributes().getAttribute('PropertyIDFK'));
						//radLoadPropertyAddresses(node.get_attributes().getAttribute('PropertyIDFK'), node);
						mPropertyIDFK = node.get_attributes().getAttribute('PropertyIDFK');
						break;

					case 'PropertyAddress':
						SetMode('PropertyAddress');
						mPropertyIDFK = node.get_attributes().getAttribute('PropertyIDFK');
						mPropertyAddressIDFK = node.get_attributes().getAttribute('PropertyAddressIDFK');
						//radLoadAddressUnits(node.get_attributes().getAttribute('PropertyIDFK'), node.get_attributes().getAttribute('PropertyAddressIDFK'), node);
						break;

					case 'Unit':
						SetMode('UnitNumber');

						mPropertyIDFK = node.get_attributes().getAttribute('PropertyIDFK');
						mPropertyAddressIDFK = node.get_attributes().getAttribute('PropertyAddressIDFK');
						mUnitIDFK = node.get_attributes().getAttribute('UnitIDFK');

						LoadUnitDetail(node.get_attributes().getAttribute('UnitIDFK'))

						//radLoadUnitResidents(node.get_attributes().getAttribute('PropertyIDFK'), node.get_attributes().getAttribute('PropertyAddressIDFK'), node.get_attributes().getAttribute('UnitIDFK'), node);
						break;

					default:
						break;
				}
			}
			node.toggle();
		}


		else
		{
			// Selected node
			switch (node.get_attributes().getAttribute('Action'))
			{
				case 'Resident':
					SetMode('Resident');
					node.get_nodes().clear();
					
					var ff = node.get_parent().get_allNodes();

					//var ff = node.get_parent().get_nodes();

					
					for (var i = 0; i < ff.length; i++)
					{
						if (ff[i].get_nodes() != null)
						{
							ff[i].collapse();
						}
					}
			
					radLoadSingleResident(node.get_attributes().getAttribute('PropertyIDFK'), node.get_attributes().getAttribute('PropertyAddressIDFK'), node.get_attributes().getAttribute('UnitIDFK'), node.get_attributes().getAttribute('ResidentIDFK'), node);
					break;

				case 'NewResident':
					SetMode('Resident');
					ClearResident();
					break;

				case 'NewSecurityIssue':
					NewSecurityIssue(node.get_attributes().getAttribute('PropertyIDFK'), node.get_attributes().getAttribute('PropertyAddressIDFK'), node.get_attributes().getAttribute('UnitIDFK'), node.get_attributes().getAttribute('ResidentIDFK'));
					break;

				case 'NewParkingIssue':
					NewParkingIssue(node.get_attributes().getAttribute('PropertyIDFK'), node.get_attributes().getAttribute('PropertyAddressIDFK'), node.get_attributes().getAttribute('UnitIDFK'), node.get_attributes().getAttribute('ResidentIDFK'));
					break;

				case 'NewMaintenanceIssue':
					NewMaintenanceIssue(node.get_attributes().getAttribute('PropertyIDFK'), node.get_attributes().getAttribute('PropertyAddressIDFK'), node.get_attributes().getAttribute('UnitIDFK'), node.get_attributes().getAttribute('ResidentIDFK'));
					break;

				case 'NewTemporaryPermit':
					NewTemporaryPermit(node.get_attributes().getAttribute('PropertyIDFK'), node.get_attributes().getAttribute('PropertyAddressIDFK'), node.get_attributes().getAttribute('UnitIDFK'), node.get_attributes().getAttribute('ResidentIDFK'));
					break;
					
				default:
					alert(node.get_attributes().getAttribute('Action'));
					break;

			}
		}
	}




	function radLoadPropertyAddresses(PropertyIDFK, SelectedNode)
	{

		LoadPropertyDetail(PropertyIDFK);

		var prop = new Object()
		prop.PropertyIDFK = PropertyIDFK;
		//prop.SearchBy = SearchBy;

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/GetPropertyAddressList",
			data: JSON.stringify(prop),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);

				for (var ff in obj)
				{
					AddNode(obj[ff].Address, '', false, 'PropertyAddress', PropertyIDFK, obj[ff].PropertyAddressIDFK, null, null, SelectedNode);

				}
			},
			error: function (msg)
			{
			    ShowWarningDialog('A error has occured Getting the Property Address Information.');// + JSON.stringify(msg));
			    Common.LogAjaxError('wucNewIssue.ascx', 'radLoadPropertyAddresses', msg.responseJSON.Message);
			}
		});
	}

	function radLoadAddressUnits(PropertyIDFK, PropertyAddressIDFK, SelectedNode)
	{

		var prop = new Object()
		prop.PropertyAddressIDFK = PropertyAddressIDFK;

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/GetUnitList",
			data: JSON.stringify(prop),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);


				// Add the Address Actions/Units
				if (AllowSecurityProgram == true && AllowPropertySecurityProgram == true)
				{
					AddNode('New Security Issue', '/Images/greysecurity20.png', true, 'NewSecurityIssue', PropertyIDFK, PropertyAddressIDFK, null, null, SelectedNode);
				}

				if (AllowParkingProgram == true && AllowPropertyParkingProgram == true)
				{
					AddNode('New Parking Issue', '/Images/greyparking20.png', true, 'NewParkingIssue', PropertyIDFK, PropertyAddressIDFK, null, null, SelectedNode);
				}

				if (AllowMaintenanceProgram == true && AllowPropertyMaintenanceProgram == true)
				{
					AddNode('New Maintenance Issue', '/Images/greymaintenance20.png', true, 'NewMaintenanceIssue', PropertyIDFK, PropertyAddressIDFK, null, null, SelectedNode);
				}

				for (var ff in obj)
				{
					AddNode(obj[ff].UnitNumber, '', false, 'Unit', PropertyIDFK, PropertyAddressIDFK, obj[ff].UnitIDFK, null, SelectedNode);
				}
			},
			error: function (msg)
			{
			    ShowWarningDialog('A error has occured Getting the Unit Information.');// + JSON.stringify(msg));
			    Common.LogAjaxError('wucNewIssue.ascx', 'radLoadAddressUnits', msg.responseJSON.Message);
			}
		});

	}

	function radLoadUnitResidents(PropertyIDFK, PropertyAddressIDFK, UnitIDFK, SelectedNode)
	{
		var resident = new Object()
		resident.UnitIDFK = UnitIDFK;

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/GetResidentList",
			data: JSON.stringify(resident),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);
				AddNode('New Resident', '/Images/greyresident20.png', true, 'NewResident', PropertyIDFK, PropertyAddressIDFK, UnitIDFK, null, SelectedNode);


				// Add the Address Actions/Units
				if (AllowSecurityProgram == true && AllowPropertySecurityProgram == true)
				{
					AddNode('New Security Issue', '/Images/greysecurity20.png', true, 'NewSecurityIssue', PropertyIDFK, PropertyAddressIDFK, UnitIDFK, null, SelectedNode);
				}

				if (AllowParkingProgram == true && AllowPropertyParkingProgram == true)
				{
					AddNode('New Parking Issue', '/Images/greyparking20.png', true, 'NewParkingIssue', PropertyIDFK, PropertyAddressIDFK, UnitIDFK, null, SelectedNode);
				}

				if (AllowMaintenanceProgram == true && AllowPropertyMaintenanceProgram == true)
				{
					AddNode('New Maintenance Issue', '/Images/greymaintenance20.png', true, 'NewMaintenanceIssue', PropertyIDFK, PropertyAddressIDFK, UnitIDFK, null, SelectedNode);
				}

				for (var ff in obj)
				{
					if (obj[ff].IsActiveResident == true)
					{
						AddNode(obj[ff].FullName, '', true, 'Resident', PropertyIDFK, PropertyAddressIDFK, UnitIDFK, obj[ff].ResidentIDFK, SelectedNode);
					}
					else
						{
					AddNode('(INACTIVE)' + obj[ff].FullName, '', true, 'Resident', PropertyIDFK, PropertyAddressIDFK, UnitIDFK, obj[ff].ResidentIDFK, SelectedNode);
					}
					//propTree.append([{ PropertyIDFK: PropertyIDFK, PropertyAddressIDFK: PropertyAddressIDFK, UnitIDFK: UnitIDFK, ResidentIDFK: obj[ff].ResidentIDFK, text: obj[ff].FullName, title: obj[ff].FullName, hasChildren: true, NodeType: 'Resident' }], UnitNode);
				}

				//treeview.expand(UnitNode);

				//var treeview = $("#tvwProperty").data("kendoTreeView");
				//propTree.expand(UnitNode);

			},
			error: function (msg)
			{
			    ShowWarningDialog('A error has occured Getting the Resident Data.' + JSON.stringify(msg));
			    Common.LogAjaxError('wucNewIssue.ascx', 'radLoadUnitResidents', msg.responseJSON.Message);
			}
		});
	}

	function radLoadSingleResident(PropertyIDFK, PropertyAddressIDFK, UnitIDFK, ResidentIDFK, SelectedNode)
	{

		ClearResident();

		mResidentIDFK = ResidentIDFK;
		mPropertyIDFK = PropertyIDFK;

		var resident = new Object()
		resident.ResidentIDFK = ResidentIDFK;

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/GetResident",
			data: JSON.stringify(resident),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);

				$('#txtResidentFirstName').val(obj[0].FirstName);
				$('#txtResidentLastName').val(obj[0].LastName);
				$('#txtResidentEmailAddress').val(obj[0].EmailAddress);
				$('#txtResidentNotes').val(obj[0].MedicalInformation);
				$('#chkIsActiveResident').prop('checked', obj[0].IsActiveResident);
				
				if (obj[0].PhoneNumber.length == 10)
				{
					$('#wucResidentPhone_stxtPhone').val(obj[0].PhoneNumber);
				}
	

				if (obj[0].CellNumber.length == 10)
				{
					$('#wucResidentCell_stxtPhone').val(obj[0].CellNumber);
				}

				
				



				if (AllowSecurityProgram == true && AllowPropertySecurityProgram == true)
				{
					AddNode('New Security Issue', '/Images/greysecurity20.png', true, 'NewSecurityIssue', PropertyIDFK, PropertyAddressIDFK, UnitIDFK, ResidentIDFK, SelectedNode);
				}

				if (AllowParkingProgram == true && AllowPropertyParkingProgram == true)
				{
					AddNode('New Parking Issue', '/Images/greyparking20.png', true, 'NewParkingIssue', PropertyIDFK, PropertyAddressIDFK, UnitIDFK, ResidentIDFK, SelectedNode);
				}

				if (AllowMaintenanceProgram == true && AllowPropertyMaintenanceProgram == true)
				{
					AddNode('New Maintenance Issue', '/Images/greymaintenance20.png', true, 'NewMaintenanceIssue', PropertyIDFK, PropertyAddressIDFK, UnitIDFK, ResidentIDFK, SelectedNode);
				}

				if (AllowParkingProgram == true && AllowPropertyParkingProgram == true)
				{
					AddNode('New Temporary Parking Permit', '/Images/greypermit20.png', true, 'NewTemporaryPermit', PropertyIDFK, PropertyAddressIDFK, UnitIDFK, ResidentIDFK, SelectedNode);
				}


				SelectedNode.toggle();

			},
			error: function (msg)
			{
			    ShowWarningDialog('A error has occured Getting the Resident Detail.');
			    Common.LogAjaxError('wucNewIssue.ascx', 'radLoadSingleResident', msg.responseJSON.Message);
			}
		});
	}



	function GeneratePermit()
	{

	
		if ($('#scboTemporaryMake.TemporaryPermit').val() == 'Choose')
		{
			ShowWarningDialog('Please Select A Vehicle Make To Continue');
			return;
		}


		if ($('#scboTemporaryColor.TemporaryPermit').val() == 'Choose')
		{
			ShowWarningDialog('Please Select A Vehicle Color To Continue');
			return;
		}

		if ($('#cboPermitLength.TemporaryPermit').val() == 'Choose')
		{
			ShowWarningDialog('Please Set the Permit days');
			return;
		}

		if ($('#txtModel.TemporaryPermit').val().length == 0)
		{
			ShowWarningDialog('Please Enter a Vehicle Model To Continue');
			return;
		}

		if ($('#txtLicensePlateNumber.TemporaryPermit').val().length + $('#txtVIN').val().length == 0)
		{
			ShowWarningDialog('You must enter a License Plate OR Last 8 of vehicle VIN to continue.');
			return;
		}


		var TempPermit = new Object()
		TempPermit.PropertyIDFK = mPropertyIDFK;
		TempPermit.PropertyAddressIDFK = mPropertyAddressIDFK;
		TempPermit.UnitIDFK = mUnitIDFK;
		TempPermit.ResidentIDFK = mResidentIDFK;

		TempPermit.LicensePlate = $('#txtLicensePlateNumber.TemporaryPermit').val();
		TempPermit.PlateState = $('#scboTemporaryPlateState.TemporaryPermit').val();
		TempPermit.Make = $('#scboTemporaryMake.TemporaryPermit').val();
		TempPermit.Model = $('#txtModel.TemporaryPermit').val();
		TempPermit.Color = $('#scboTemporaryColor.TemporaryPermit').val();
		TempPermit.VIN = $('#txtVIN.TemporaryPermit').val();
		TempPermit.PermitDays = $('#cboPermitLength.TemporaryPermit').val();
		TempPermit.Comments = $('#txtComments.TemporaryPermit').val();


		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/NewTempPermit",
			data: JSON.stringify(TempPermit),
			dataType: "json",
			success: function (msg)
			{

				var obj = JSON && JSON.parse(msg.d);
				//alert(obj[0].PermitNumber);
				//ShowWarningDialog('Issue Number ' + obj[0].IssueIDFK;

				var nn = tree.get_selectedNode();
				var p = nn.get_parent();

				p.collapse();
				p.get_nodes().clear();
				ClearTemporaryPermit();
				ShowWarningDialog('Temporary Parking Permit Added Successful!  Permit #' + obj[0].PermitNumber);
				
				SetMode('UnitNumber');
			},
			error: function (msg)
			{
				ShowWarningDialog('A error has occured Generating the Permit.');
				Common.LogAjaxError('wucNewIssue.ascx', 'GeneratePermit', msg.responseJSON.Message);
			}
		});

	}


	function ClearTemporaryPermit()
	{
		$('#txtLicensePlateNumber.TemporaryPermit').val('');
		$('#scboTemporaryPlateState.TemporaryPermit').val('Choose');
		$('#scboTemporaryMake.TemporaryPermit').val('Choose');
		$('#txtModel.TemporaryPermit').val('');
		$('#scboTemporaryColor.TemporaryPermit').val('Choose');
		$('#txtVIN.TemporaryPermit').val('');
		$('#cboPermitLength.TemporaryPermit').val('Choose');
		$('#txtComments.TemporaryPermit').val('');
	}


	function ResetCounter(CounterType)
	{


		$('#cboLocations').empty();

		var unit = new Object()
		unit.PropertyIDFK = mPropertyIDFK;
		unit.PropertyAddressIDFK = mPropertyAddressIDFK;
		unit.UnitIDFK = mUnitIDFK
		unit.CounterType = CounterType;
		

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/ResetCounter",
			data: JSON.stringify(unit),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);

				switch (CounterType)
				{
					case 'SecurityViolations':
						$('#lblSecurityViolations').text('0');
						$('#cmdResetSecurityViolations').prop('title', 'Last Reset: A Moment Ago');
						break;

					case 'ReportedSecurity':
						$('#lblReportedSecurity').text('0');
						$('#cmdResetReportedSecurity').prop('title', 'Last Reset: A Moment Ago');
						break;

					case 'ReportedParking':
						$('#lblReportedParking').text('0');
						$('#cmdResetReportedParking').prop('title', 'Last Reset: A Moment Ago');
						break;

					case 'ReportedMaintenance':
						$('#lblReportedMaintenance').text('0');
						$('#cmdResetReportedMaintenance').prop('title', 'Last Reset: A Moment Ago');
						break;

				}






			},
			error: function (msg)
			{
			    
			    ShowWarningDialog('Unable to Reset Counter!');
			    Common.LogAjaxError('wucNewIssue.ascx', 'ResetCounter', msg.responseJSON.Message);
			}
		});
		//SecurityViolations,ReportedSecurity,ReportedParking,ReportedMaintenance
	}

	function ViewUnitHistory()
	{
		ShowWarningDialog('Not yet active');
	}


</script>

<style>


    .RecentIssue
    {
        margin: 4px; 
        padding: 4px; 
        border: 1px solid silver; 
        border-radius: 1px;
    }

    .RecentIssue:hover
    {
        color: white;
        background-color: #03508e;
    }

    .fancybox-opened
    {
        z-index: 100003 !important;
    }

    .wistia-fancybox #fancybox-overlay
    {
        z-index: 100001 !important;
    }



</style>

<div id="divNewIssueTitlebar" class="PopupTitleBar">
    <label>New Issue</label>


    <input id="cmdCloseNewIssue" type="button" value="X" style="display: none;">
    <div class="CloseIcon" onclick="$find(&#39;mpeNewIssue&#39;).hide();"></div>

    <div style="float: right;">
        <a href="https://fast.wistia.net/embed/iframe/mbtf0v1rir?popover=true" class="wistia-popover[height=360,playerColor=bf262a,width=640]">
            <input type="button" class="HelpButton ShowMeHow" value="Show Me How" style="margin: 28px 28px 0px 0px;"></a>
    </div>
</div>

<div class="PopupBody" style="padding: 0px 5px 0px 5px;">

    <div style="float: left; padding: 5px; width: 300px; border-right: 1px solid #ababab; border-bottom-right-radius: 0px; height: 600px;">
        <label class="LabelColor1">Property Reporting This Issue</label>

		<div id="divSearch" style="margin: 5px;">
            <input type="text" id="txtSearch">
            <div id="divFind" style="float: right;">
                <input id="cmdTemp" type="button" value="Find">


                <div id="divSearchType" style="display: none; position: absolute; margin: -35px 0px 0px 0px; background: whitesmoke; border-radius: 7px; z-index: 100004">
                    <input id="cmdFindProperty" type="button" value="Find Property" style="margin: 3px; width: 150px;" onclick="FindProperty(&#39;Property&#39;);"><br>
                    <input id="cmdFindAddress" type="button" value="Find Address" style="margin: 3px; width: 150px;" onclick="FindProperty(&#39;Address&#39;);"><br>
                </div>

            </div>

        </div>

        <div style="overflow: auto; height: 525px;">
            <div id="RadTreeView1" class="RadTreeView RadTreeView_">
	<!-- 2020.1.114.45 --><input id="RadTreeView1_ClientState" name="RadTreeView1_ClientState" type="hidden" autocomplete="off" value="{&quot;expandedNodes&quot;:[],&quot;collapsedNodes&quot;:[],&quot;logEntries&quot;:[],&quot;selectedNodes&quot;:[],&quot;checkedNodes&quot;:[],&quot;scrollPosition&quot;:0}">
</div>
        </div>


    </div>



    <div style="float: right; width: 300px; border-left: 1px solid #ababab; border-bottom-left-radius: 0px; height: 600px; padding: 5px;">
        <label class="LabelColor1">Property Issue History <span class="WarningLabelMedium">(Past 8 hrs)</span></label>
        <div id="divShortHistory" style="height: 575px; overflow: auto;">
        </div>
    </div>


    
    <div style="padding-top: 5px; margin: 0 auto; height: 600px; width: 330px; border-radius: 0px;">
        <label class="LabelColor1">Issue Detail - Please describe the problem</label>
	    <textarea id="txtReportedIssueDetail" class="required" cols="20" rows="5" style="width: 305px;"></textarea>

        <div id="divPropertyDetail" style="display: none; margin: 5px; height: 400px; overflow: auto;">
            <b>Property Notes</b><br>
            <label id="lblPropertyNotes"></label>

        </div>

        <div id="divIssueType" style="display: none;">
            <label>Issue Type</label>
            <select id="cboIssueType" class="required" style="width: 305px;"></select>
        </div>

        <div id="divNewSecurityIssue" style="display: none;">
            <label>Problem Address</label>
            <select id="cboSecurityProblemAddress" class="required" style="width: 305px;">
                <option>Choose Problem Address</option>
            </select>
            
            <label>Problem Unit</label>
            <select id="cboSecurityProblemUnit" style="width: 305px;">
                <option>Choose Problem Unit</option>
            </select>

            <label>Location (OPTIONAL)</label>
            <select id="cboLocations" style="width: 305px;">
            </select>

            <label>Assign This Issue To</label>
            <div>
                <label class="label-textbox" id="lblAssignToUsername" style="width: 150px;"></label>
                <input type="button" onclick="ChooseUsernameForSecurity();" value="Choose" style="margin-left: 10px;">
            </div>


            <div style="margin: 5px 0px 10px 0px">
                <label for="chkRemainAnonymous">
                    <input type="checkbox" class="Checkbox" id="chkRemainAnonymous">Prefer to Remain Anonymous</label>
            </div>

            <div id="divAutoClose" style="margin: 5px 0px 10px 0px; display: none;">
                <label for="chkAutoCloseIssue">
                    <input type="checkbox" class="Checkbox" id="chkAutoCloseIssue">Close This Issue</label>
            </div>

            <div style="text-align: center; margin: 20px;">
                <input type="button" value="Add Security Issue" onclick="AddSecurityIssue();" title="Create new Security Issue">
            </div>


        </div>

        <div id="divNewParkingIssue" style="display: none; height: 380px; overflow-x: hidden; overflow-y: auto;">
            <label class="label-horizontal">Assign This Issue To</label>
			<div>
                <label class="label-textbox" id="lblAssignToUsernameParking" style="width: 150px;"></label>
                <input type="button" onclick="ChooseUsernameForParking();" value="Choose">
            </div>

            Parking Stall Number (If Applicable)
			<div>
                <input type="text" value="" id="txtParkingSpaceNumber">
            </div>

            <style>
                .ValidVehicle
                {
                    width: 100px;
                    background-color: rgb(96, 137, 96) !important;
                    color: white;
                }
                .ViolatingVehicle
                {
                    width: 100px;
                    background-color: rgb(163, 63, 63)  !important;
                    color: white !important;

                }
            </style>

            <table>
                <tbody><tr>
                    <td style="text-align: right;">Vehicle(s)</td>
                    <td style="text-align: center;">Violating </td>
                    <td style="text-align: center;">Valid</td>
                </tr>
                <tr>
                    <td style="text-align: right;">Lic Plate</td>
                    <td>
                        <input type="text" value="" id="txtViolatingLicensePlate" class="ViolatingVehicle">
                    </td>
                    <td>
                        <input type="text" value="" id="txtValidLicensePlate" class="ValidVehicle">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">Plate State</td>
                    <td>

                        <select name="AdminCustomer$ContentPlaceHolder1$wucNewIssue$scboViolatingPlateState" id="scboViolatingPlateState" class="ViolatingVehicle">
	<option selected="selected" value="Choose">Choose</option>
	<option value="AZ">AZ</option>
	<option value="AL">AL</option>
	<option value="AK">AK</option>
	<option value="AR">AR</option>
	<option value="CA">CA</option>
	<option value="CO">CO</option>
	<option value="CT">CT</option>
	<option value="DE">DE</option>
	<option value="DC">DC</option>
	<option value="FL">FL</option>
	<option value="GA">GA</option>
	<option value="HI">HI</option>
	<option value="ID">ID</option>
	<option value="IL">IL</option>
	<option value="IN">IN</option>
	<option value="IA">IA</option>
	<option value="KS">KS</option>
	<option value="KY">KY</option>
	<option value="LA">LA</option>
	<option value="ME">ME</option>
	<option value="MD">MD</option>
	<option value="MA">MA</option>
	<option value="MX">MX</option>
	<option value="MI">MI</option>
	<option value="MN">MN</option>
	<option value="MS">MS</option>
	<option value="MO">MO</option>
	<option value="MT">MT</option>
	<option value="NE">NE</option>
	<option value="NV">NV</option>
	<option value="NH">NH</option>
	<option value="NJ">NJ</option>
	<option value="NM">NM</option>
	<option value="NY">NY</option>
	<option value="NC">NC</option>
	<option value="ND">ND</option>
	<option value="OK">OK</option>
	<option value="OH">OH</option>
	<option value="OR">OR</option>
	<option value="PA">PA</option>
	<option value="RI">RI</option>
	<option value="SC">SC</option>
	<option value="SD">SD</option>
	<option value="TN">TN</option>
	<option value="TX">TX</option>
	<option value="UT">UT</option>
	<option value="VT">VT</option>
	<option value="VA">VA</option>
	<option value="WA">WA</option>
	<option value="WV">WV</option>
	<option value="WI">WI</option>
	<option value="WY">WY</option>
	<option value="AB">AB</option>
	<option value="BC">BC</option>
	<option value="MB">MB</option>
	<option value="NB">NB</option>
	<option value="NL">NL</option>
	<option value="NT">NT</option>
	<option value="NS">NS</option>
	<option value="NU">NU</option>
	<option value="ON">ON</option>
	<option value="PE">PE</option>
	<option value="QC">QC</option>
	<option value="SK">SK</option>
	<option value="YT">YT</option>

</select>
                    </td>
                    <td>
                        <select name="AdminCustomer$ContentPlaceHolder1$wucNewIssue$scboValidPlateState" id="scboValidPlateState" class="ValidVehicle">
	<option selected="selected" value="Choose">Choose</option>
	<option value="AZ">AZ</option>
	<option value="AL">AL</option>
	<option value="AK">AK</option>
	<option value="AR">AR</option>
	<option value="CA">CA</option>
	<option value="CO">CO</option>
	<option value="CT">CT</option>
	<option value="DE">DE</option>
	<option value="DC">DC</option>
	<option value="FL">FL</option>
	<option value="GA">GA</option>
	<option value="HI">HI</option>
	<option value="ID">ID</option>
	<option value="IL">IL</option>
	<option value="IN">IN</option>
	<option value="IA">IA</option>
	<option value="KS">KS</option>
	<option value="KY">KY</option>
	<option value="LA">LA</option>
	<option value="ME">ME</option>
	<option value="MD">MD</option>
	<option value="MA">MA</option>
	<option value="MX">MX</option>
	<option value="MI">MI</option>
	<option value="MN">MN</option>
	<option value="MS">MS</option>
	<option value="MO">MO</option>
	<option value="MT">MT</option>
	<option value="NE">NE</option>
	<option value="NV">NV</option>
	<option value="NH">NH</option>
	<option value="NJ">NJ</option>
	<option value="NM">NM</option>
	<option value="NY">NY</option>
	<option value="NC">NC</option>
	<option value="ND">ND</option>
	<option value="OK">OK</option>
	<option value="OH">OH</option>
	<option value="OR">OR</option>
	<option value="PA">PA</option>
	<option value="RI">RI</option>
	<option value="SC">SC</option>
	<option value="SD">SD</option>
	<option value="TN">TN</option>
	<option value="TX">TX</option>
	<option value="UT">UT</option>
	<option value="VT">VT</option>
	<option value="VA">VA</option>
	<option value="WA">WA</option>
	<option value="WV">WV</option>
	<option value="WI">WI</option>
	<option value="WY">WY</option>
	<option value="AB">AB</option>
	<option value="BC">BC</option>
	<option value="MB">MB</option>
	<option value="NB">NB</option>
	<option value="NL">NL</option>
	<option value="NT">NT</option>
	<option value="NS">NS</option>
	<option value="NU">NU</option>
	<option value="ON">ON</option>
	<option value="PE">PE</option>
	<option value="QC">QC</option>
	<option value="SK">SK</option>
	<option value="YT">YT</option>

</select>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">Make</td>
                    <td>
                        <select name="AdminCustomer$ContentPlaceHolder1$wucNewIssue$scboViolatingMake" id="scboViolatingMake" class="ViolatingVehicle" title="This is the make of the vehicle (Toyota/Honda/Ford/etc)">
	<option selected="selected" value="Choose">Choose</option>
	<option value="Acura">Acura</option>
	<option value="Alfa Romeo">Alfa Romeo</option>
	<option value="American Motors">American Motors</option>
	<option value="Aston Martin">Aston Martin</option>
	<option value="Audi">Audi</option>
	<option value="Austin Healy">Austin Healy</option>
	<option value="Bentley">Bentley</option>
	<option value="BMW">BMW</option>
	<option value="Buick">Buick</option>
	<option value="Cadillac">Cadillac</option>
	<option value="Chevrolet">Chevrolet</option>
	<option value="Chrysler">Chrysler</option>
	<option value="Daewoo">Daewoo</option>
	<option value="Daihatsu">Daihatsu</option>
	<option value="Datsun">Datsun</option>
	<option value="DeLorean">DeLorean</option>
	<option value="Dodge">Dodge</option>
	<option value="Eagle">Eagle</option>
	<option value="Ferrari">Ferrari</option>
	<option value="Fiat">Fiat</option>
	<option value="Ford">Ford</option>
	<option value="Geo">Geo</option>
	<option value="GMC">GMC</option>
	<option value="Harley Davidson">Harley Davidson</option>
	<option value="Honda">Honda</option>
	<option value="Hummer">Hummer</option>
	<option value="Hyundai">Hyundai</option>
	<option value="Infiniti">Infiniti</option>
	<option value="International">International</option>
	<option value="Isuzu">Isuzu</option>
	<option value="Jaguar">Jaguar</option>
	<option value="Jeep">Jeep</option>
	<option value="Jensen Healy">Jensen Healy</option>
	<option value="Kawasaki">Kawasaki</option>
	<option value="Kia">Kia</option>
	<option value="Kurbmaster">Kurbmaster</option>
	<option value="Lamborghini">Lamborghini</option>
	<option value="Lancia">Lancia</option>
	<option value="Land Rover">Land Rover</option>
	<option value="Lexus">Lexus</option>
	<option value="Lincoln">Lincoln</option>
	<option value="Lotus">Lotus</option>
	<option value="Mack Truck">Mack Truck</option>
	<option value="May Bach">May Bach</option>
	<option value="Mazda">Mazda</option>
	<option value="Mazerati">Mazerati</option>
	<option value="Mercedes Benz">Mercedes Benz</option>
	<option value="Mercury">Mercury</option>
	<option value="Merkur">Merkur</option>
	<option value="MG">MG</option>
	<option value="Mini">Mini</option>
	<option value="Mitsubishi">Mitsubishi</option>
	<option value="Nissan">Nissan</option>
	<option value="Oldsmobile">Oldsmobile</option>
	<option value="Other">Other</option>
	<option value="Pantera">Pantera</option>
	<option value="Peugeot">Peugeot</option>
	<option value="Plymouth">Plymouth</option>
	<option value="Pontiac">Pontiac</option>
	<option value="Porsche">Porsche</option>
	<option value="Rambler">Rambler</option>
	<option value="Renault">Renault</option>
	<option value="Rolls Royce">Rolls Royce</option>
	<option value="Rover">Rover</option>
	<option value="Saab">Saab</option>
	<option value="Saturn">Saturn</option>
	<option value="Scion">Scion</option>
	<option value="Subaru">Subaru</option>
	<option value="Suzuki">Suzuki</option>
	<option value="Tesla">Tesla</option>
	<option value="Toyota">Toyota</option>
	<option value="Triumph">Triumph</option>
	<option value="Volkswagen">Volkswagen</option>
	<option value="Volvo">Volvo</option>
	<option value="Yamaha">Yamaha</option>
	<option value="Yugo">Yugo</option>

</select>

                    </td>
                    <td>
                        <select name="AdminCustomer$ContentPlaceHolder1$wucNewIssue$scboValidMake" id="scboValidMake" class="ValidVehicle" title="This is the make of the vehicle (Toyota/Honda/Ford/etc)">
	<option selected="selected" value="Choose">Choose</option>
	<option value="Acura">Acura</option>
	<option value="Alfa Romeo">Alfa Romeo</option>
	<option value="American Motors">American Motors</option>
	<option value="Aston Martin">Aston Martin</option>
	<option value="Audi">Audi</option>
	<option value="Austin Healy">Austin Healy</option>
	<option value="Bentley">Bentley</option>
	<option value="BMW">BMW</option>
	<option value="Buick">Buick</option>
	<option value="Cadillac">Cadillac</option>
	<option value="Chevrolet">Chevrolet</option>
	<option value="Chrysler">Chrysler</option>
	<option value="Daewoo">Daewoo</option>
	<option value="Daihatsu">Daihatsu</option>
	<option value="Datsun">Datsun</option>
	<option value="DeLorean">DeLorean</option>
	<option value="Dodge">Dodge</option>
	<option value="Eagle">Eagle</option>
	<option value="Ferrari">Ferrari</option>
	<option value="Fiat">Fiat</option>
	<option value="Ford">Ford</option>
	<option value="Geo">Geo</option>
	<option value="GMC">GMC</option>
	<option value="Harley Davidson">Harley Davidson</option>
	<option value="Honda">Honda</option>
	<option value="Hummer">Hummer</option>
	<option value="Hyundai">Hyundai</option>
	<option value="Infiniti">Infiniti</option>
	<option value="International">International</option>
	<option value="Isuzu">Isuzu</option>
	<option value="Jaguar">Jaguar</option>
	<option value="Jeep">Jeep</option>
	<option value="Jensen Healy">Jensen Healy</option>
	<option value="Kawasaki">Kawasaki</option>
	<option value="Kia">Kia</option>
	<option value="Kurbmaster">Kurbmaster</option>
	<option value="Lamborghini">Lamborghini</option>
	<option value="Lancia">Lancia</option>
	<option value="Land Rover">Land Rover</option>
	<option value="Lexus">Lexus</option>
	<option value="Lincoln">Lincoln</option>
	<option value="Lotus">Lotus</option>
	<option value="Mack Truck">Mack Truck</option>
	<option value="May Bach">May Bach</option>
	<option value="Mazda">Mazda</option>
	<option value="Mazerati">Mazerati</option>
	<option value="Mercedes Benz">Mercedes Benz</option>
	<option value="Mercury">Mercury</option>
	<option value="Merkur">Merkur</option>
	<option value="MG">MG</option>
	<option value="Mini">Mini</option>
	<option value="Mitsubishi">Mitsubishi</option>
	<option value="Nissan">Nissan</option>
	<option value="Oldsmobile">Oldsmobile</option>
	<option value="Other">Other</option>
	<option value="Pantera">Pantera</option>
	<option value="Peugeot">Peugeot</option>
	<option value="Plymouth">Plymouth</option>
	<option value="Pontiac">Pontiac</option>
	<option value="Porsche">Porsche</option>
	<option value="Rambler">Rambler</option>
	<option value="Renault">Renault</option>
	<option value="Rolls Royce">Rolls Royce</option>
	<option value="Rover">Rover</option>
	<option value="Saab">Saab</option>
	<option value="Saturn">Saturn</option>
	<option value="Scion">Scion</option>
	<option value="Subaru">Subaru</option>
	<option value="Suzuki">Suzuki</option>
	<option value="Tesla">Tesla</option>
	<option value="Toyota">Toyota</option>
	<option value="Triumph">Triumph</option>
	<option value="Volkswagen">Volkswagen</option>
	<option value="Volvo">Volvo</option>
	<option value="Yamaha">Yamaha</option>
	<option value="Yugo">Yugo</option>

</select>

                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">Model</td>
                    <td>
                        <input type="text" value="" id="txtViolatingModel" class="ViolatingVehicle">
                    </td>
                    <td>
                        <input type="text" value="" id="txtValidModel" class="ValidVehicle">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">Color</td>
                    <td>
                        <select name="AdminCustomer$ContentPlaceHolder1$wucNewIssue$scboViolatingColor" id="scboViolatingColor" class="ViolatingVehicle">
	<option selected="selected" value="Choose">Choose</option>
	<option value="Beige">Beige</option>
	<option value="Black">Black</option>
	<option value="Blue">Blue</option>
	<option value="Bronze">Bronze</option>
	<option value="Brown">Brown</option>
	<option value="Burgundy">Burgundy</option>
	<option value="Cream">Cream</option>
	<option value="Gold">Gold</option>
	<option value="Gray">Gray</option>
	<option value="Green">Green</option>
	<option value="Maroon">Maroon</option>
	<option value="Orange">Orange</option>
	<option value="Other">Other</option>
	<option value="Purple">Purple</option>
	<option value="Red">Red</option>
	<option value="Silver">Silver</option>
	<option value="Tan">Tan</option>
	<option value="Turquoise">Turquoise</option>
	<option value="White">White</option>
	<option value="Yellow">Yellow</option>

</select>
                    </td>
                    <td>
                        <select name="AdminCustomer$ContentPlaceHolder1$wucNewIssue$scboValidColor" id="scboValidColor" class="ValidVehicle">
	<option selected="selected" value="Choose">Choose</option>
	<option value="Beige">Beige</option>
	<option value="Black">Black</option>
	<option value="Blue">Blue</option>
	<option value="Bronze">Bronze</option>
	<option value="Brown">Brown</option>
	<option value="Burgundy">Burgundy</option>
	<option value="Cream">Cream</option>
	<option value="Gold">Gold</option>
	<option value="Gray">Gray</option>
	<option value="Green">Green</option>
	<option value="Maroon">Maroon</option>
	<option value="Orange">Orange</option>
	<option value="Other">Other</option>
	<option value="Purple">Purple</option>
	<option value="Red">Red</option>
	<option value="Silver">Silver</option>
	<option value="Tan">Tan</option>
	<option value="Turquoise">Turquoise</option>
	<option value="White">White</option>
	<option value="Yellow">Yellow</option>

</select>
                    </td>
                </tr>
            </tbody></table>

            <div style="text-align: center; margin: 10px 0px 0px 0px;">
                <input type="button" onclick="AddParkingIssue();" value="Add Parking Issue" title="Create new Parking Issue">
            </div>

        </div>

        <div id="divNewMaintenanceIssue" style="display: none; height: 380px; overflow-y: auto; overflow-x: hidden;">
            <div>
                <label class="label-horizontal">Maintenance Issue Location</label>
                <textarea id="txtMaintenanceLocation" class="required" cols="20" rows="2" style="width: 300px;"></textarea>
            </div>

            <div>
                <label class="label-horizontal">Assign This Issue To</label>
            </div>
            <div>
                <label class="label-textbox" id="lblAssignToUsernameMaintenance" style="width: 150px;"></label>
                <input type="button" onclick="ChooseUsernameForMaintenance();" value="Choose">
            </div>
            


            <div style="text-align: center;">
                Please select if you want to schedule an appointment or if you would like the maintenance personel to enter your complex at anytime.<br>
                <br>
                <span class="WarningLabelMedium">VERY IMPORTANT!</span>
            </div>
            <div style="margin: 5px 0px 10px 0px">
                <label for="rdoSchedule">
                    <input id="rdoSchedule" type="radio" value="Schedule" name="Appointment">I want to schedule an appointment.</label><br>
                <label for="rdoAnytime">
                    <input id="rdoAnytime" type="radio" value="Anytime" name="Appointment">They may come in to my home without notice.</label><br>
            </div>

            <div style="text-align: center; margin: 20px;">
                <input type="button" onclick="AddMaintenanceIssue();" value="Add Maintenance Issue" titleishelp="true" title="Create new Maintenance Issue">
            </div>
        </div>

        <div id="divResident" style="margin: 5px; display: none;">
            <div>
                <label class="label-horizontal">Resident First/Last Name</label>
                <label for="chkIsActiveResident" style="float: right; display: none;">
                    <input type="checkbox" class="Checkbox" id="chkIsActiveResident">Is Active</label>
            </div>
            <div>
                <input type="text" value="" id="txtResidentFirstName" style="width: 140px;">
                <input type="text" value="" id="txtResidentLastName" style="width: 140px;">
            </div>

            
			<div>
                <label class="label-horizontal">Resident Email Address</label>
                <input type="text" value="" id="txtResidentEmailAddress" style="width: 300px;">
            </div>

            
			<div>
                <label class="label-horizontal">Resident Home Phone</label>
                

<script lang="javascript">


	//var PhoneNumber = "";
	//var elm = "";

	//function autoTab(e, element)
	//{
	//	elm = element.id;
	//	var code;
	//	if (!e) var e = window.event;
	//	if (e.which) code = e.which;
	//	else if (e.keyCode) code = e.keyCode;
	//	if ((code > 47 && code < 58) || (code > 95 && code < 105))
	//	{

	//		if (element.value.length == element.maxLength)
	//		{
	//			var phoneField = element.id;

	//			phoneField = phoneField.replace("stxtPhone2", "stxtPhone3")
	//			phoneField = phoneField.replace("stxtPhone1", "stxtPhone2")

	//			document.getElementById(phoneField).focus();

	//		}

	//	}
	//	else
	//	{
	//		return false;
	//	}

	//}


	//function getPhoneNumbera()
	//{
	//	phoneField = elm.replace("stxtPhone2", "stxtPhone1")
	//	phoneField = phoneField.replace("stxtPhone3", "stxtPhone1")

	//}

	function getPhoneNumber()
	{
		

		//phoneField = elm.replace("stxtPhone2", "stxtPhone1")
		//phoneField = phoneField.replace("stxtPhone3", "stxtPhone1")

		//alert($('[id$="stxtPhone1"]').val() + $('[id$="stxtPhone2"]').val() + $('[id$="stxtPhone3"]').val());

		return $('[id$="stxtPhone1"]').val() + $('[id$="stxtPhone2"]').val() + $('[id$="stxtPhone3"]').val();
		

		
	}


	function Check(e, element)
	{

		var code = e.which || e.keyCode;

		if (code == 8 || code == 0) return;

		if (code > 47 && code < 58)
		{
		    return true;
		}
		else
		{
			return false;
		}
	}

	
	//$(document).ready(function ()
	//{
	//    //	alert($(this).parent()[0].id);

	//    //	// Do this to remove any bad email characters
	//    //	$('[id$="stxtPhone1"]').keypress(function (key)
	//    //	{
	//    //		if (key.charCode < 48 || key.charCode > 57) return false;

	//    //		if ($(this).val().length == 2)
	//    //			$(this).next('input').focus();

	//    //		//46.  44,  64 @
	//    //	});
	//    //})
	//    ////onkeypress="return autoTab(event, this);"

	//    $('#wucPhone_stxtPhone').keyup(function ()
	//    {
	//        return Check(event, this);
	//    });
	//});

</script>

<div class="nw">
	<input name="AdminCustomer$ContentPlaceHolder1$wucNewIssue$wucResidentPhone$stxtPhone" type="text" maxlength="20" id="wucResidentPhone_stxtPhone" onkeypress="return Check(event, this);" style="width:150px;">
</div>

            </div>

            
			<div>
                <label class="label-horizontal">Resident Cell Phone</label>
                

<script lang="javascript">


	//var PhoneNumber = "";
	//var elm = "";

	//function autoTab(e, element)
	//{
	//	elm = element.id;
	//	var code;
	//	if (!e) var e = window.event;
	//	if (e.which) code = e.which;
	//	else if (e.keyCode) code = e.keyCode;
	//	if ((code > 47 && code < 58) || (code > 95 && code < 105))
	//	{

	//		if (element.value.length == element.maxLength)
	//		{
	//			var phoneField = element.id;

	//			phoneField = phoneField.replace("stxtPhone2", "stxtPhone3")
	//			phoneField = phoneField.replace("stxtPhone1", "stxtPhone2")

	//			document.getElementById(phoneField).focus();

	//		}

	//	}
	//	else
	//	{
	//		return false;
	//	}

	//}


	//function getPhoneNumbera()
	//{
	//	phoneField = elm.replace("stxtPhone2", "stxtPhone1")
	//	phoneField = phoneField.replace("stxtPhone3", "stxtPhone1")

	//}

	function getPhoneNumber()
	{
		

		//phoneField = elm.replace("stxtPhone2", "stxtPhone1")
		//phoneField = phoneField.replace("stxtPhone3", "stxtPhone1")

		//alert($('[id$="stxtPhone1"]').val() + $('[id$="stxtPhone2"]').val() + $('[id$="stxtPhone3"]').val());

		return $('[id$="stxtPhone1"]').val() + $('[id$="stxtPhone2"]').val() + $('[id$="stxtPhone3"]').val();
		

		
	}


	function Check(e, element)
	{

		var code = e.which || e.keyCode;

		if (code == 8 || code == 0) return;

		if (code > 47 && code < 58)
		{
		    return true;
		}
		else
		{
			return false;
		}
	}

	
	//$(document).ready(function ()
	//{
	//    //	alert($(this).parent()[0].id);

	//    //	// Do this to remove any bad email characters
	//    //	$('[id$="stxtPhone1"]').keypress(function (key)
	//    //	{
	//    //		if (key.charCode < 48 || key.charCode > 57) return false;

	//    //		if ($(this).val().length == 2)
	//    //			$(this).next('input').focus();

	//    //		//46.  44,  64 @
	//    //	});
	//    //})
	//    ////onkeypress="return autoTab(event, this);"

	//    $('#wucPhone_stxtPhone').keyup(function ()
	//    {
	//        return Check(event, this);
	//    });
	//});

</script>

<div class="nw">
	<input name="AdminCustomer$ContentPlaceHolder1$wucNewIssue$wucResidentCell$stxtPhone" type="text" maxlength="20" id="wucResidentCell_stxtPhone" onkeypress="return Check(event, this);" style="width:150px;">
</div>

            </div>

            
			<div>
                <label class="label-horizontal">Resident Notes</label>
                <textarea id="txtResidentNotes" class="required" cols="20" rows="4" style="width: 300px;"></textarea>
            </div>

            <div style="text-align: center; margin-top: 5px;">
                <input type="button" onclick="SaveResident();" value="Add/Save Resident">
            </div>

        </div>

        <div id="divTemporaryParkingPermit" style="margin: 5px; display: none;">
            

            <label class="label-horizontal" style="width: 110px;">License Plate</label>
            <input type="text" value="" id="txtLicensePlateNumber" class="TemporaryPermit" style="width: 183px;">

            <label class="label-horizontal" style="width: 110px;">Plate State</label>
            <select name="AdminCustomer$ContentPlaceHolder1$wucNewIssue$scboTemporaryPlateState" id="scboTemporaryPlateState" class="TemporaryPermit" title="This is the State of the License Plate (CA/WA/NY/FL/etc)" style="width: 183px;">
	<option selected="selected" value="Choose">Choose</option>
	<option value="AZ">AZ</option>
	<option value="AL">AL</option>
	<option value="AK">AK</option>
	<option value="AR">AR</option>
	<option value="CA">CA</option>
	<option value="CO">CO</option>
	<option value="CT">CT</option>
	<option value="DE">DE</option>
	<option value="DC">DC</option>
	<option value="FL">FL</option>
	<option value="GA">GA</option>
	<option value="HI">HI</option>
	<option value="ID">ID</option>
	<option value="IL">IL</option>
	<option value="IN">IN</option>
	<option value="IA">IA</option>
	<option value="KS">KS</option>
	<option value="KY">KY</option>
	<option value="LA">LA</option>
	<option value="ME">ME</option>
	<option value="MD">MD</option>
	<option value="MA">MA</option>
	<option value="MX">MX</option>
	<option value="MI">MI</option>
	<option value="MN">MN</option>
	<option value="MS">MS</option>
	<option value="MO">MO</option>
	<option value="MT">MT</option>
	<option value="NE">NE</option>
	<option value="NV">NV</option>
	<option value="NH">NH</option>
	<option value="NJ">NJ</option>
	<option value="NM">NM</option>
	<option value="NY">NY</option>
	<option value="NC">NC</option>
	<option value="ND">ND</option>
	<option value="OK">OK</option>
	<option value="OH">OH</option>
	<option value="OR">OR</option>
	<option value="PA">PA</option>
	<option value="RI">RI</option>
	<option value="SC">SC</option>
	<option value="SD">SD</option>
	<option value="TN">TN</option>
	<option value="TX">TX</option>
	<option value="UT">UT</option>
	<option value="VT">VT</option>
	<option value="VA">VA</option>
	<option value="WA">WA</option>
	<option value="WV">WV</option>
	<option value="WI">WI</option>
	<option value="WY">WY</option>
	<option value="AB">AB</option>
	<option value="BC">BC</option>
	<option value="MB">MB</option>
	<option value="NB">NB</option>
	<option value="NL">NL</option>
	<option value="NT">NT</option>
	<option value="NS">NS</option>
	<option value="NU">NU</option>
	<option value="ON">ON</option>
	<option value="PE">PE</option>
	<option value="QC">QC</option>
	<option value="SK">SK</option>
	<option value="YT">YT</option>

</select>

            <label class="label-horizontal" style="width: 110px;">Vehicle Make</label>
            <select name="AdminCustomer$ContentPlaceHolder1$wucNewIssue$scboTemporaryMake" id="scboTemporaryMake" class="required TemporaryPermit" title="This is the make of the vehicle (Toyota/Honda/Ford/etc)" style="width: 183px;">
	<option selected="selected" value="Choose">Choose</option>
	<option value="Acura">Acura</option>
	<option value="Alfa Romeo">Alfa Romeo</option>
	<option value="American Motors">American Motors</option>
	<option value="Aston Martin">Aston Martin</option>
	<option value="Audi">Audi</option>
	<option value="Austin Healy">Austin Healy</option>
	<option value="Bentley">Bentley</option>
	<option value="BMW">BMW</option>
	<option value="Buick">Buick</option>
	<option value="Cadillac">Cadillac</option>
	<option value="Chevrolet">Chevrolet</option>
	<option value="Chrysler">Chrysler</option>
	<option value="Daewoo">Daewoo</option>
	<option value="Daihatsu">Daihatsu</option>
	<option value="Datsun">Datsun</option>
	<option value="DeLorean">DeLorean</option>
	<option value="Dodge">Dodge</option>
	<option value="Eagle">Eagle</option>
	<option value="Ferrari">Ferrari</option>
	<option value="Fiat">Fiat</option>
	<option value="Ford">Ford</option>
	<option value="Geo">Geo</option>
	<option value="GMC">GMC</option>
	<option value="Harley Davidson">Harley Davidson</option>
	<option value="Honda">Honda</option>
	<option value="Hummer">Hummer</option>
	<option value="Hyundai">Hyundai</option>
	<option value="Infiniti">Infiniti</option>
	<option value="International">International</option>
	<option value="Isuzu">Isuzu</option>
	<option value="Jaguar">Jaguar</option>
	<option value="Jeep">Jeep</option>
	<option value="Jensen Healy">Jensen Healy</option>
	<option value="Kawasaki">Kawasaki</option>
	<option value="Kia">Kia</option>
	<option value="Kurbmaster">Kurbmaster</option>
	<option value="Lamborghini">Lamborghini</option>
	<option value="Lancia">Lancia</option>
	<option value="Land Rover">Land Rover</option>
	<option value="Lexus">Lexus</option>
	<option value="Lincoln">Lincoln</option>
	<option value="Lotus">Lotus</option>
	<option value="Mack Truck">Mack Truck</option>
	<option value="May Bach">May Bach</option>
	<option value="Mazda">Mazda</option>
	<option value="Mazerati">Mazerati</option>
	<option value="Mercedes Benz">Mercedes Benz</option>
	<option value="Mercury">Mercury</option>
	<option value="Merkur">Merkur</option>
	<option value="MG">MG</option>
	<option value="Mini">Mini</option>
	<option value="Mitsubishi">Mitsubishi</option>
	<option value="Nissan">Nissan</option>
	<option value="Oldsmobile">Oldsmobile</option>
	<option value="Other">Other</option>
	<option value="Pantera">Pantera</option>
	<option value="Peugeot">Peugeot</option>
	<option value="Plymouth">Plymouth</option>
	<option value="Pontiac">Pontiac</option>
	<option value="Porsche">Porsche</option>
	<option value="Rambler">Rambler</option>
	<option value="Renault">Renault</option>
	<option value="Rolls Royce">Rolls Royce</option>
	<option value="Rover">Rover</option>
	<option value="Saab">Saab</option>
	<option value="Saturn">Saturn</option>
	<option value="Scion">Scion</option>
	<option value="Subaru">Subaru</option>
	<option value="Suzuki">Suzuki</option>
	<option value="Tesla">Tesla</option>
	<option value="Toyota">Toyota</option>
	<option value="Triumph">Triumph</option>
	<option value="Volkswagen">Volkswagen</option>
	<option value="Volvo">Volvo</option>
	<option value="Yamaha">Yamaha</option>
	<option value="Yugo">Yugo</option>

</select>

            <label class="label-horizontal" style="width: 110px;">Vehicle Model</label>
            <input type="text" value="" id="txtModel" class="required TemporaryPermit" style="width: 183px;">

            <label class="label-horizontal" style="width: 110px;">Vehicle Color</label>
            <select name="AdminCustomer$ContentPlaceHolder1$wucNewIssue$scboTemporaryColor" id="scboTemporaryColor" class="required TemporaryPermit" style="width: 183px;">
	<option selected="selected" value="Choose">Choose</option>
	<option value="Beige">Beige</option>
	<option value="Black">Black</option>
	<option value="Blue">Blue</option>
	<option value="Bronze">Bronze</option>
	<option value="Brown">Brown</option>
	<option value="Burgundy">Burgundy</option>
	<option value="Cream">Cream</option>
	<option value="Gold">Gold</option>
	<option value="Gray">Gray</option>
	<option value="Green">Green</option>
	<option value="Maroon">Maroon</option>
	<option value="Orange">Orange</option>
	<option value="Other">Other</option>
	<option value="Purple">Purple</option>
	<option value="Red">Red</option>
	<option value="Silver">Silver</option>
	<option value="Tan">Tan</option>
	<option value="Turquoise">Turquoise</option>
	<option value="White">White</option>
	<option value="Yellow">Yellow</option>

</select>

            <label class="label-horizontal" style="width: 110px;">Vehicle VIN</label>
            <input type="text" value="" id="txtVIN" class="TemporaryPermit" style="width: 183px;">

            <label class="label-horizontal" style="width: 110px;">Permit Days</label>

            <select id="cboPermitLength" class="required TemporaryPermit" style="width: 183px;" title="This is the length of days that the temporary permit will be">
                <option>Choose</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
            </select>


            <label class="label-horizontal" style="width: 110px;">Comments</label>
            <textarea id="txtComments" class="TemporaryPermit" cols="20" rows="3" style="width: 183px; vertical-align: top;"></textarea>

            <div style="text-align: center; margin: 20px;">
                <input type="button" onclick="GeneratePermit();" value="Generate Temporary Permit" style="margin-left: 10px;">
            </div>
        </div>

        <div id="divUnitDetail" style="display: none;">
            
			<div>
                <label class="label-horizontal">Unit Number</label>
                <label class="label-textbox" id="lblUnitNumber" style="width: 300px;">
            </label></div>

            <div style="display: none;">
                <label for="chkIsUnitActive">
                    <input type="checkbox" id="chkIsUnitActive" class="Checkbox">Is Unit Active</label>
            </div>

            <div>
                <label class="label-horizontal">Current/Maximum Parking Permits</label>
                <label class="label-textbox" id="lblMaximumParkingPermits" style="width: 300px;">
            </label></div>

			<div>
                <label class="label-horizontal">Parking Spaces</label>
                <label class="label-textbox" id="lblParkingSpaces" style="width: 300px;">
            </label></div>

            <label class="label-horizontal">Issue Summary</label>
			<table class="Textbox TextboxReadOnly" style="width: 300px;">

                <tbody><tr>
                    <td style="text-align: right;">Security Violations</td>
                    <td style="text-align: center; width: 75px;">
                        <label id="lblSecurityViolations">0</label></td>
                    <td>
                        <input type="button" id="cmdResetSecurityViolations" value="Reset" title="" onclick="ResetCounter(&#39;SecurityViolations&#39;);"></td>
                </tr>
                <tr>
                    <td style="text-align: right;">Reported Security</td>
                    <td style="text-align: center;">
                        <label id="lblReportedSecurity">0</label></td>
                    <td>
                        <input type="button" id="cmdResetReportedSecurity" value="Reset" title="" onclick="ResetCounter(&#39;ReportedSecurity&#39;);"></td>
                </tr>
                <tr>
                    <td style="text-align: right;">Reported Parking</td>
                    <td style="text-align: center;">
                        <label id="lblReportedParking">0</label></td>
                    <td>
                        <input type="button" id="cmdResetReportedParking" value="Reset" title="" onclick="ResetCounter(&#39;ReportedParking&#39;);"></td>
                </tr>
                <tr>
                    <td style="text-align: right;">Reported Maint</td>
                    <td style="text-align: center;">
                        <label id="lblReportedMaintenance">0</label></td>
                    <td>
                        <input type="button" id="cmdResetReportedMaintenance" value="Reset" title="" onclick="ResetCounter(&#39;ReportedMaintenance&#39;);"></td>
                </tr>
            </tbody></table>

            <div style="text-align: center; margin: 20px; display: none;">
                <input type="button" value="View Unit History" onclick="ViewUnitHistory();" title="Unit History">
            </div>

        </div>







    </div>

    <div style="padding: 10px;"></div>
</div>



<script>

	/*
function NodeExpanded(e)
{
	//'if (e.node.children.length == 1)
	//NodeSelected(e);
	if (NodeCHACHA == true)
	{
		NodeCHACHA = false;
	}
	else
	{
		NodeSelected(e);
	}
}

function NodeSelected(e)
{
	NodeCHACHA = true;

	var treeviewA = $("#tvwProperty").data("kendoTreeView");

	SetMode(treeviewA.dataItem(e.node).NodeType);



	switch (treeviewA.dataItem(e.node).NodeType)
	{
		case 'Property':
			// Property selected so load the addresses
			if (e.node.children.length == 1)
			{
				// If the property addresses have not been loaded
				LoadPropertyAddress(treeviewA.dataItem(e.node).propertyidfk, $(e.node), SearchBy);
			}

			LoadPropertyShortHistory(treeviewA.dataItem(e.node).propertyidfk);
			LoadPropertyDetail(treeviewA.dataItem(e.node).propertyidfk);
			break;

		case 'PropertyAddress':
			// Property Address was selected so load the units

			if (e.node.children.length == 1)
			{
				LoadUnits(treeviewA.dataItem(e.node).PropertyIDFK, treeviewA.dataItem(e.node).PropertyAddressIDFK, $(e.node));
			}

			$('#cboSecurityProblemAddress').val(treeviewA.dataItem(e.node).PropertyAddressIDFK);
			break;


		case 'UnitNumber':
			if (e.node.children.length == 1)
			{
				LoadResidents(treeviewA.dataItem(e.node).PropertyIDFK, treeviewA.dataItem(e.node).PropertyAddressIDFK, treeviewA.dataItem(e.node).UnitIDFK, $(e.node));
			}
			LoadUnitDetail(treeviewA.dataItem(e.node).UnitIDFK)

			break;


		case 'Resident':
			if (e.node.children.length == 1)
			{

				LoadResident(treeviewA.dataItem(e.node).PropertyIDFK, treeviewA.dataItem(e.node).PropertyAddressIDFK, treeviewA.dataItem(e.node).UnitIDFK, treeviewA.dataItem(e.node).ResidentIDFK, $(e.node));
			}


			break;

		case 'NewResident':

			mResidentIDFK = 0;

			$('#txtResidentFirstName').val('');
			$('#txtResidentLastName').val('');
			$('#txtResidentEmailAddress').val('');
			$('#txtResidentNotes').val('');

			$('#wucResidentPhone_stxtPhone1').val('');
			$('#wucResidentPhone_stxtPhone2').val('');
			$('#wucResidentPhone_stxtPhone3').val('');

			$('#wucResidentCell_stxtPhone1').val('');
			$('#wucResidentCell_stxtPhone2').val('');
			$('#wucResidentCell_stxtPhone3').val('');
			SetMode('Resident');

			break;

		case 'NewSecurityIssue':

			NewSecurityIssue(treeviewA.dataItem(e.node).PropertyIDFK, treeviewA.dataItem(e.node).PropertyAddressIDFK, treeviewA.dataItem(e.node).UnitIDFK, treeviewA.dataItem(e.node).ResidentIDFK);
			break;

		case 'NewParkingIssue':

			NewParkingIssue(treeviewA.dataItem(e.node).PropertyIDFK, treeviewA.dataItem(e.node).PropertyAddressIDFK, treeviewA.dataItem(e.node).UnitIDFK, treeviewA.dataItem(e.node).ResidentIDFK);
			break;


		case 'NewMaintenanceIssue':

			NewMaintenanceIssue(treeviewA.dataItem(e.node).PropertyIDFK, treeviewA.dataItem(e.node).PropertyAddressIDFK, treeviewA.dataItem(e.node).UnitIDFK, treeviewA.dataItem(e.node).ResidentIDFK);
			break;

		case 'NewResidentSecurityIssue':

			break;

		default:

			break;


	}

	var treeview = $("#tvwProperty").data("kendoTreeView");
	treeview.expand(e.node);

}



function LoadPropertyAddress(PropertyIDFK, PropertyNode, SearchBy)
{
	// Load Property Address List
	var prop = new Object()
	prop.PropertyIDFK = PropertyIDFK;
	//prop.SearchBy = SearchBy;

	$.ajax({
		type: "POST",
		contentType: "application/json; charset=utf-8",
		url: "/WebServices/Monitor.asmx/GetPropertyAddressList",
		data: JSON.stringify(prop),
		dataType: "json",
		success: function (msg)
		{
			var obj = JSON && JSON.parse(msg.d);

			for (var ff in obj)
			{
				propTree.append([{ text: obj[ff].Address, title: obj[ff].Address, PropertyIDFK: PropertyIDFK, PropertyAddressIDFK: obj[ff].PropertyAddressIDFK, NodeType: 'PropertyAddress' }], PropertyNode);
			}
		},
		
		{
			ShowWarningDialog('A error has occured Getting the Property Address Information.' + JSON.stringify(msg));
		}
	});
}

function LoadUnits(PropertyIDFK, PropertyAddressIDFK, AddressNode)
{
	var prop = new Object()
	prop.PropertyAddressIDFK = PropertyAddressIDFK;

	$.ajax({
		type: "POST",
		contentType: "application/json; charset=utf-8",
		url: "/WebServices/Monitor.asmx/GetUnitList",
		data: JSON.stringify(prop),
		dataType: "json",
		success: function (msg)
		{
			var obj = JSON && JSON.parse(msg.d);

			// Add the New actions
			if (AllowSecurityProgram == true && AllowPropertySecurityProgram == true)
				propTree.append([{ text: "New Security Issue", title: '', hasChildren: false, NodeType: 'NewSecurityIssue', PropertyIDFK: PropertyIDFK, PropertyAddressIDFK: PropertyAddressIDFK, UnitIDFK: 0, ResidentIDFK: 0, nodelevel: 'Address', image: '/Images/greysecurity20.png' }], AddressNode);

			if (AllowParkingProgram == true && AllowPropertyParkingProgram == true)
			{
				propTree.append([{ text: "New Parking Issue", title: '', hasChildren: false, NodeType: 'NewParkingIssue', PropertyIDFK: PropertyIDFK, PropertyAddressIDFK: PropertyAddressIDFK, UnitIDFK: 0, ResidentIDFK: 0, nodelevel: 'Address', image: '/Images/greyparking20.png' }], AddressNode);
			}

			if (AllowMaintenanceProgram == true && AllowPropertyMaintenanceProgram == true)
			{
				propTree.append([{ text: "New Maintenance Issue", title: '', hasChildren: false, NodeType: 'NewMaintenanceIssue', PropertyIDFK: PropertyIDFK, PropertyAddressIDFK: PropertyAddressIDFK, UnitIDFK: 0, ResidentIDFK: 0, nodelevel: 'Address', image: '/Images/greymaintenance20.png' }], AddressNode);
			}

			for (var ff in obj)
			{
				propTree.append([{ text: obj[ff].UnitNumber, title: obj[ff].UnitNumber, hasChildren: true, PropertyIDFK: PropertyIDFK, PropertyAddressIDFK: PropertyAddressIDFK, UnitIDFK: obj[ff].UnitIDFK, NodeType: 'UnitNumber' }], AddressNode);
			}
		},
		
		{
			ShowWarningDialog('A error has occured Getting the Unit Information.' + JSON.stringify(msg));
		}
	});
}


function LoadResidents(PropertyIDFK, PropertyAddressIDFK, UnitIDFK, UnitNode)
{

	var resident = new Object()
	resident.UnitIDFK = UnitIDFK;

	$.ajax({
		type: "POST",
		contentType: "application/json; charset=utf-8",
		url: "/WebServices/Monitor.asmx/GetResidentList",
		data: JSON.stringify(resident),
		dataType: "json",
		success: function (msg)
		{
			var obj = JSON && JSON.parse(msg.d);
			propTree.append([{ text: "New Resident", title: 'Add a New Resident', hasChildren: false, NodeType: 'NewResident', image: '/Images/greyresident20.png' }], UnitNode);


			if (AllowSecurityProgram == true && AllowPropertySecurityProgram == true)
			{
				propTree.append([{
					text: "New Security Issue",
					title: 'Create a New Security Issue',
					hasChildren: false,
					expanded: true,
					NodeType: 'NewSecurityIssue',
					image: '/Images/greysecurity20.png',
					PropertyIDFK: PropertyIDFK,
					PropertyAddressIDFK: PropertyAddressIDFK,
					UnitIDFK: UnitIDFK,
					ResidentIDFK: 0,
				}], UnitNode);
			}

			if (AllowParkingProgram == true && AllowPropertyParkingProgram == true)
			{
				propTree.append([{
					text: "New Parking Issue",
					title: 'Create a New Parking Issue',
					hasChildren: false,
					expanded: true,
					NodeType: 'NewParkingIssue',
					image: '/Images/greyparking20.png',
					PropertyIDFK: PropertyIDFK,
					PropertyAddressIDFK: PropertyAddressIDFK,
					UnitIDFK: UnitIDFK,
					ResidentIDFK: 0,
				}], UnitNode);
			}

			if (AllowMaintenanceProgram == true & AllowPropertyMaintenanceProgram == true)
			{
				propTree.append([{
					text: "New Maintenance Issue",
					title: 'Create a New Maintenance Issue',
					hasChildren: false,
					expanded: true,
					NodeType: 'NewMaintenanceIssue',
					image: '/Images/greymaintenance20.png',
					PropertyIDFK: PropertyIDFK,
					PropertyAddressIDFK: PropertyAddressIDFK,
					UnitIDFK: UnitIDFK,
					ResidentIDFK: 0,
				}], UnitNode);
			}

			for (var ff in obj)
			{
				propTree.append([{ PropertyIDFK: PropertyIDFK, PropertyAddressIDFK: PropertyAddressIDFK, UnitIDFK: UnitIDFK, ResidentIDFK: obj[ff].ResidentIDFK, text: obj[ff].FullName, title: obj[ff].FullName, hasChildren: true, NodeType: 'Resident' }], UnitNode);
			}
			//treeview.expand(UnitNode);

			//var treeview = $("#tvwProperty").data("kendoTreeView");
			propTree.expand(UnitNode);

		},
		
		{
			ShowWarningDialog('A error has occured Getting the Resident Data.' + JSON.stringify(msg));
		}
	});
}




	function LoadResident(PropertyIDFK, PropertyAddressIDFK, UnitIDFK, ResidentIDFK, ResidentNode)
	{
		mResidentIDFK = ResidentIDFK;
		mPropertyIDFK = PropertyIDFK;

		var resident = new Object()
		resident.ResidentIDFK = ResidentIDFK;

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/GetResident",
			data: JSON.stringify(resident),
			dataType: "json",
			success: function (msg)
			{
				//propTree.append([{
				//	ResidentActions: "Edit Resident",
				//	text: 'Edit Resident',
				//	hasChildren: false,
				//	expanded: true,
				//	NodeType: 'EditResident',
				//	image: '/Images/greyresident20.png',
				//	PropertyIDFK: PropertyIDFK,
				//	PropertyAddressIDFK: PropertyAddressIDFK,
				//	UnitIDFK: UnitIDFK,
				//	ResidentIDFK: ResidentIDFK,
				//}], ResidentNode);


				var obj = JSON && JSON.parse(msg.d);

				$('#txtResidentFirstName').val(obj[0].FirstName);
				$('#txtResidentLastName').val(obj[0].LastName);
				$('#txtResidentEmailAddress').val(obj[0].EmailAddress);
				$('#txtResidentNotes').val(obj[0].ResidentNotes);





				if (AllowSecurityProgram == true && AllowPropertySecurityProgram == true)
				{
					propTree.append([{
						text: "New Security Issue",
						title: 'Create a New Security Issue',
						hasChildren: false,
						expanded: true,
						NodeType: 'NewSecurityIssue',
						image: '/Images/greysecurity20.png',
						PropertyIDFK: PropertyIDFK,
						PropertyAddressIDFK: PropertyAddressIDFK,
						UnitIDFK: UnitIDFK,
						ResidentIDFK: ResidentIDFK
					}], ResidentNode);
				}

				if (AllowParkingProgram == true && AllowPropertyParkingProgram == true)
				{

					propTree.append([{
						text: "New Parking Issue",
						title: 'Create a New Parking Issue',
						hasChildren: false,
						expanded: true,
						NodeType: 'NewParkingIssue',
						image: '/Images/greyparking20.png',
						PropertyIDFK: PropertyIDFK,
						PropertyAddressIDFK: PropertyAddressIDFK,
						UnitIDFK: UnitIDFK,
						ResidentIDFK: ResidentIDFK,
					}], ResidentNode);
				}

				if (AllowMaintenanceProgram == true && AllowPropertyMaintenanceProgram == true)
				{
					propTree.append([{
						text: "New Maintenance Issue",
						title: 'Create a New Maintenance Issue',
						hasChildren: false,
						expanded: true,
						NodeType: 'NewMaintenanceIssue',
						image: '/Images/greymaintenance20.png',
						PropertyIDFK: PropertyIDFK,
						PropertyAddressIDFK: PropertyAddressIDFK,
						UnitIDFK: UnitIDFK,
						ResidentIDFK: ResidentIDFK,
					}], ResidentNode);
				}

				if (AllowParkingProgram == true && AllowPropertyParkingProgram == true)
				{

					propTree.append([{
						text: "New Temp Permit",
						title: 'Create a New Temporary Parking Permit',
						hasChildren: false,
						expanded: true,
						NodeType: 'NewTemporaryParkingPermit',
						image: '/Images/greypermit20.png',
						PropertyIDFK: PropertyIDFK,
						PropertyAddressIDFK: PropertyAddressIDFK,
						UnitIDFK: UnitIDFK,
						ResidentIDFK: ResidentIDFK,
					}], ResidentNode);
				}

			},
			
			{
				ShowWarningDialog('A error has occured Getting the Resident Detail.' + JSON.stringify(msg));
			}
		});
	}



*/


</script>
    </div>


    



<script lang="javascript">

	var mCallback;

	// On Load
	$(function ()
	{

		$('#divViolationPayment').easyModal(
		{
			top: 100,
			autoOpen: false,
			overlayOpacity: 0.8,
			overlayColor: "#333",
			overlayClose: false,
			closeOnEscape: true
		});

		var year = new Date().getFullYear();

		$('#cboExpirationYear').append(new Option('Choose', '0'));
		$('#cboExpirationYear').append(new Option(year, year));
		$('#cboExpirationYear').append(new Option(year + 1, year + 1));
		$('#cboExpirationYear').append(new Option(year + 2, year + 2));
		$('#cboExpirationYear').append(new Option(year + 3, year + 3));
		$('#cboExpirationYear').append(new Option(year + 4, year + 4));
		$('#cboExpirationYear').append(new Option(year + 5, year + 5));
		$('#cboExpirationYear').append(new Option(year + 6, year + 6));
		$('#cboExpirationYear').append(new Option(year + 7, year + 7));
		$('#cboExpirationYear').append(new Option(year + 8, year + 8));
		$('#cboExpirationYear').append(new Option(year + 9, year + 9));
		$('#cboExpirationYear').append(new Option(year + 10, year + 10));

		$("#txtDiscountAmount").keypress(function (key)
		{
			if ((key.keyCode < 48 || key.keyCode > 57) && (key.keyCode != 52) && (key.keyCode != 36) && (key.keyCode != 46))
			{
				return false;
			}
		});


		$('#txtDiscountAmount').bind("cut copy paste", function (e)
		{
			e.preventDefault();
		});

		$('#txtDiscountAmount').blur(function ()
		{
			$('#txtDiscountAmount').val(FormatCurrency(Discount));
		});

		var Discount;

		$("#txtDiscountAmount").keyup(function (key)
		{

			var OrigFee = $('#txtOrigionalFeeAmount').val().replace('$', '').replace(' ', '');
			Discount = $('#txtDiscountAmount').val().replace('$', '').replace(' ', '')

			if ($.isNumeric(OrigFee - Discount))
			{
				$('#txtTotalAmount').val(FormatCurrency(OrigFee - Discount));

			}




		});

	})


	
	function ShowViolationPayment(IssueIDFK, Callback)
	{
		mCallback = Callback;

		ClearPayment();

		$('#divViolationPayment').trigger('openModal');

		LoadIssueForPayment(IssueIDFK);


	}



	function ClearPayment()
	{

		$('#cc1').hide();
		$('#cc2').hide();
		$('#cc3').hide();
		$('#cc4').hide();
		$('#cc5').hide();

		$('#pc').hide();
		$('#pc1').hide();
		$('#check').hide();


		$('#txtIssueIDFK').val('');

		$('#txtFirstName').val('');
		$('#txtLastName').val('');
		$('#txtAddress').val('');
		$('#stxtCity').val('');
		$('#scboState').val('');
		$('#stxtZip').val('');
		$('#txtEmailAddress').val('');

		$('#wucPhoneNumberPayment_stxtPhone').val('');

		$('#wucCellNumberPayment_stxtPhone').val('');

		$('#txtDiscountAmount').val('');
		$('#cboPaymentMethod').val('0');

		$('#txtCreditCardNumber').val('');
		$('#txtNameOnCard').val('');
		$('#cboExpirationYear').val('0');
		$('#cboExpirationMonth').val('0');
		$('#txtCCID').val('');
		$('#txtZipCode').val('');

		$('#txtCheckNumber').val('');

	}

	function PaymentMethod()
	{

		// Hide all
		$('#cc1').hide();
		$('#cc2').hide();
		$('#cc3').hide();
		$('#cc4').hide();
		$('#cc5').hide();

		$('#pc').hide();
		$('#pc1').hide();
		$('#check').hide();

		switch ($('#cboPaymentMethod').val())
		{
			case 'Choose':
				break;

			case 'Mastercard': case 'VISA':
				$('#cc1').show();
				$('#cc2').show();
				$('#cc3').show();
				$('#cc4').show();
				$('#cc5').show();
				break;

			case 'Cash':
				$('#pc').show();
				$('#pc1').show();
				break;

			case 'Check':
				$('#check').show();
				break;
		}
	}

	function LoadIssueForPayment(IssueIDFK)
	{

		var IssueDetail = new Object();


		IssueDetail.IssueIDFK = IssueIDFK;

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/GetIssueDetail",
			data: JSON.stringify(IssueDetail),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);
				$('#txtIssueIDFK').val(IssueIDFK);
				$('#txtOrigionalFeeAmount').val(FormatCurrency(obj[0].OrigionalFeeAmount));
				$('#txtTotalAmount').val(FormatCurrency(obj[0].OrigionalFeeAmount));
				$('#txtDiscountAmount').val('$ 0.00');
				//LoadIssueData(obj);

			},
			error: function (msg)
			{
			    ShowWarningDialog('A error has occured loading the issue.');
			    Common.LogAjaxError('wucViolationPayment.ascx', 'LoadIssueForPayment', msg.responseJSON.Message);
			}
		});

	}


	function MakePayment()
	{
		// Validate fields
		if ($('#txtFirstName').val() == '')
		{
			ShowWarningDialog('A First Name is required.');
			return;
		}

		if ($('#txtLastName').val() == '')
		{
			ShowWarningDialog('A Last Name is required.');
			return;
		}

		if ($('#txtEmailAddress').val() == '')
		{
			ShowWarningDialog('A Email Address is required.');
			return;
		}

		

		if ($('#txtAddress').val() == '')
		{
			ShowWarningDialog('A Address is required.');
			return;
		}

		switch ($('#cboPaymentMethod').val())
		{
			case '0':
				ShowWarningDialog('You must select a payment method.');
				return;
				break;

			case 'Mastercard': case 'VISA':
				if (
					$('#txtCreditCardNumber').val() == '' ||
					$('#txtNameOnCard').val() == '' ||
					$('#cboExpirationMonth').val() == '0' ||
					$('#cboExpirationYear').val() == '0' ||
					$('#txtCCID').val() == '' ||
					$('#txtZipCode').val() == ''
					)
				{
					ShowWarningDialog('The Credit Card information is not complete.  Please check the information and try again.');
				}
				break;

			case 'Check':
				if ($('#txtCheckNumber').val() == '')
					ShowWarningDialog('A Checknumber is required.');
				return;
				break;
		}


		// Make payment

		var Payment = new Object();

		Payment.IssueIDFK = $('#txtIssueIDFK').val();

		Payment.FirstName = $('#txtFirstName').val();
		Payment.LastName = $('#txtLastName').val();
		Payment.Address = $('#txtAddress').val();
		Payment.City = $('#stxtCity').val();
		Payment.State = $('#scboState').val();
		Payment.Zip = $('#stxtZip').val();
		Payment.Email = $('#txtEmailAddress').val();

		var PhoneNumber = $('#wucPhoneNumberPayment_stxtPhone').val();
		var CellNumber = $('#wucCellNumberPayment_stxtPhone').val();

		Payment.PhoneNumber = PhoneNumber;
		Payment.CellNumber = CellNumber;

		Payment.DiscountAmount = $('#txtDiscountAmount').val();
		Payment.PaymentMethod = $('#cboPaymentMethod').val();

		Payment.CreditCardNumber = $('#txtCreditCardNumber').val();
		Payment.NameOnCard = $('#txtNameOnCard').val();
		Payment.ExpirationYear = $('#cboExpirationYear').val();
		Payment.ExpirationMonth = $('#cboExpirationMonth').val();
		Payment.CCID = $('#txtCCID').val();
		Payment.CardZipCode = $('#txtZipCode').val();

		Payment.CheckNumber = $('#txtCheckNumber').val();

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Payments.asmx/MakePayment",
			data: JSON.stringify(Payment),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);

				alert(obj[0].ChargeResult);
				alert(obj[0].InvoiceNumber);

				//$('#txtIssueIDFK').val(IssueIDFK);
				//$('#txtOrigionalFeeAmount').val(FormatCurrency(obj[0].OrigionalFeeAmount));
				//$('#txtTotalAmount').val(FormatCurrency(obj[0].OrigionalFeeAmount));
				//$('#txtDiscountAmount').val('$ 0.00');
				//LoadIssueData(obj);

				if (isEmpty(mCallback) == false)
				{
					mCallback();
				}

				$('#divViolationPayment').trigger('closeModal');



			},
			error: function (msg)
			{
				ShowWarningDialog('Unable to process payment.');
				Common.LogAjaxError('wucViolationPayment.ascx', 'MakePayment', msg.responseJSON.Message);
			}
		});

		


	}
	

	function CancelPayment()
	{

		$('#divViolationPayment').trigger('closeModal');
	}


</script>

	<div id="divViolationPayment" style="width: 850px; margin: 0px auto; display: none; position: fixed; z-index: 0; left: 50%; top: 100px;">
		<div class="PopupTitleBar">
		<label>Pay Violation</label>
		<input type="button" value="X" onclick="CancelPayment();">
	</div>

	<div class="PopupBody">

		<div style="float: left;">
			<table>
				<tbody><tr>
					<td class="TableLabelMedium">First Name</td>
					<td>
						<input type="text" id="txtFirstName" class="Textbox Required" style="width: 229px;">
					</td>
				</tr>
				<tr>
					<td class="TableLabelMedium">Last Name</td>
					<td>
						<input type="text" id="txtLastName" class="Textbox Required" style="width: 229px;">
					</td>
				</tr>
				<tr>
					<td class="TableLabelMedium">Address</td>
					<td>
						<input type="text" class="Textbox Required" id="txtAddress" style="width: 229px;">
					</td>
				</tr>
				<tr>
					<td class="TableLabelMedium">City, State, Zip</td>
					<td>
						
<div style="vertical-align: top;">
    <input name="AdminCustomer$ContentPlaceHolder1$wucViolationPayment$wucPaymentCityStateZip$stxtCity" type="text" id="stxtCity" autocomplete="off" style="width:100px;">
    <select name="AdminCustomer$ContentPlaceHolder1$wucViolationPayment$wucPaymentCityStateZip$scboState" id="scboState" autocomplete="off" style="max-width:60px;">
	<option value="AK">AK</option>
	<option value="AL">AL</option>
	<option value="AR">AR</option>
	<option value="AZ">AZ</option>
	<option selected="selected" value="CA">CA</option>
	<option value="CO">CO</option>
	<option value="CT">CT</option>
	<option value="DC">DC</option>
	<option value="DE">DE</option>
	<option value="FL">FL</option>
	<option value="GA">GA</option>
	<option value="HI">HI</option>
	<option value="IA">IA</option>
	<option value="ID">ID</option>
	<option value="IL">IL</option>
	<option value="IN">IN</option>
	<option value="KS">KS</option>
	<option value="KY">KY</option>
	<option value="LA">LA</option>
	<option value="MA">MA</option>
	<option value="MD">MD</option>
	<option value="ME">ME</option>
	<option value="MI">MI</option>
	<option value="MN">MN</option>
	<option value="MO">MO</option>
	<option value="MS">MS</option>
	<option value="MT">MT</option>
	<option value="MX">MX</option>
	<option value="NC">NC</option>
	<option value="ND">ND</option>
	<option value="NE">NE</option>
	<option value="NH">NH</option>
	<option value="NJ">NJ</option>
	<option value="NM">NM</option>
	<option value="NV">NV</option>
	<option value="NY">NY</option>
	<option value="OH">OH</option>
	<option value="OK">OK</option>
	<option value="OR">OR</option>
	<option value="PA">PA</option>
	<option value="RI">RI</option>
	<option value="SC">SC</option>
	<option value="SD">SD</option>
	<option value="TN">TN</option>
	<option value="TX">TX</option>
	<option value="UT">UT</option>
	<option value="VA">VA</option>
	<option value="VT">VT</option>
	<option value="WA">WA</option>
	<option value="WI">WI</option>
	<option value="WV">WV</option>
	<option value="WY">WY</option>
	<option value="NZ"></option>
	<option value="AB">AB (CAN)</option>
	<option value="BC">BC (CAN)</option>
	<option value="MB">MB (CAN)</option>
	<option value="NB">NB (CAN)</option>
	<option value="NL">NL (CAN)</option>
	<option value="NS">NS (CAN)</option>
	<option value="NT">NT (CAN)</option>
	<option value="NU">NU (CAN)</option>
	<option value="ON">ON (CAN)</option>
	<option value="PE">PE (CAN)</option>
	<option value="QC">QC (CAN)</option>
	<option value="SK">SK (CAN)</option>
	<option value="YT">YT (CAN)</option>
	<option value="--">-- (AU)</option>
	<option value="ACT">ACT (AU)</option>
	<option value="NSW">NSW (AU)</option>
	<option value="NT">NT (AU)</option>
	<option value="QLD">QLD (AU)</option>
	<option value="SA">SA (AU)</option>
	<option value="TAS">TAS (AU)</option>
	<option value="VIC">VIC (AU)</option>
	<option value="WAU">WAU (AU)</option>

</select>
    <input name="AdminCustomer$ContentPlaceHolder1$wucViolationPayment$wucPaymentCityStateZip$stxtZip" type="text" id="stxtZip" autocomplete="off" style="width:50px;">
</div>

					</td>
				</tr>
				<tr>
					<td class="TableLabelMedium">Email Address</td>
					<td>
						<input type="text" class="Textbox Required" id="txtEmailAddress" style="width: 229px;">
					</td>
				</tr>
				<tr>
					<td class="TableLabelMedium">Phone Number</td>
					<td>
						

<script lang="javascript">


	//var PhoneNumber = "";
	//var elm = "";

	//function autoTab(e, element)
	//{
	//	elm = element.id;
	//	var code;
	//	if (!e) var e = window.event;
	//	if (e.which) code = e.which;
	//	else if (e.keyCode) code = e.keyCode;
	//	if ((code > 47 && code < 58) || (code > 95 && code < 105))
	//	{

	//		if (element.value.length == element.maxLength)
	//		{
	//			var phoneField = element.id;

	//			phoneField = phoneField.replace("stxtPhone2", "stxtPhone3")
	//			phoneField = phoneField.replace("stxtPhone1", "stxtPhone2")

	//			document.getElementById(phoneField).focus();

	//		}

	//	}
	//	else
	//	{
	//		return false;
	//	}

	//}


	//function getPhoneNumbera()
	//{
	//	phoneField = elm.replace("stxtPhone2", "stxtPhone1")
	//	phoneField = phoneField.replace("stxtPhone3", "stxtPhone1")

	//}

	function getPhoneNumber()
	{
		

		//phoneField = elm.replace("stxtPhone2", "stxtPhone1")
		//phoneField = phoneField.replace("stxtPhone3", "stxtPhone1")

		//alert($('[id$="stxtPhone1"]').val() + $('[id$="stxtPhone2"]').val() + $('[id$="stxtPhone3"]').val());

		return $('[id$="stxtPhone1"]').val() + $('[id$="stxtPhone2"]').val() + $('[id$="stxtPhone3"]').val();
		

		
	}


	function Check(e, element)
	{

		var code = e.which || e.keyCode;

		if (code == 8 || code == 0) return;

		if (code > 47 && code < 58)
		{
		    return true;
		}
		else
		{
			return false;
		}
	}

	
	//$(document).ready(function ()
	//{
	//    //	alert($(this).parent()[0].id);

	//    //	// Do this to remove any bad email characters
	//    //	$('[id$="stxtPhone1"]').keypress(function (key)
	//    //	{
	//    //		if (key.charCode < 48 || key.charCode > 57) return false;

	//    //		if ($(this).val().length == 2)
	//    //			$(this).next('input').focus();

	//    //		//46.  44,  64 @
	//    //	});
	//    //})
	//    ////onkeypress="return autoTab(event, this);"

	//    $('#wucPhone_stxtPhone').keyup(function ()
	//    {
	//        return Check(event, this);
	//    });
	//});

</script>

<div class="nw">
	<input name="AdminCustomer$ContentPlaceHolder1$wucViolationPayment$wucPhoneNumberPayment$stxtPhone" type="text" maxlength="20" id="wucPhoneNumberPayment_stxtPhone" onkeypress="return Check(event, this);" style="width:150px;">
</div>

					</td>
				</tr>
				<tr>
					<td class="TableLabelMedium">Cell Number</td>
					<td>
						

<script lang="javascript">


	//var PhoneNumber = "";
	//var elm = "";

	//function autoTab(e, element)
	//{
	//	elm = element.id;
	//	var code;
	//	if (!e) var e = window.event;
	//	if (e.which) code = e.which;
	//	else if (e.keyCode) code = e.keyCode;
	//	if ((code > 47 && code < 58) || (code > 95 && code < 105))
	//	{

	//		if (element.value.length == element.maxLength)
	//		{
	//			var phoneField = element.id;

	//			phoneField = phoneField.replace("stxtPhone2", "stxtPhone3")
	//			phoneField = phoneField.replace("stxtPhone1", "stxtPhone2")

	//			document.getElementById(phoneField).focus();

	//		}

	//	}
	//	else
	//	{
	//		return false;
	//	}

	//}


	//function getPhoneNumbera()
	//{
	//	phoneField = elm.replace("stxtPhone2", "stxtPhone1")
	//	phoneField = phoneField.replace("stxtPhone3", "stxtPhone1")

	//}

	function getPhoneNumber()
	{
		

		//phoneField = elm.replace("stxtPhone2", "stxtPhone1")
		//phoneField = phoneField.replace("stxtPhone3", "stxtPhone1")

		//alert($('[id$="stxtPhone1"]').val() + $('[id$="stxtPhone2"]').val() + $('[id$="stxtPhone3"]').val());

		return $('[id$="stxtPhone1"]').val() + $('[id$="stxtPhone2"]').val() + $('[id$="stxtPhone3"]').val();
		

		
	}


	function Check(e, element)
	{

		var code = e.which || e.keyCode;

		if (code == 8 || code == 0) return;

		if (code > 47 && code < 58)
		{
		    return true;
		}
		else
		{
			return false;
		}
	}

	
	//$(document).ready(function ()
	//{
	//    //	alert($(this).parent()[0].id);

	//    //	// Do this to remove any bad email characters
	//    //	$('[id$="stxtPhone1"]').keypress(function (key)
	//    //	{
	//    //		if (key.charCode < 48 || key.charCode > 57) return false;

	//    //		if ($(this).val().length == 2)
	//    //			$(this).next('input').focus();

	//    //		//46.  44,  64 @
	//    //	});
	//    //})
	//    ////onkeypress="return autoTab(event, this);"

	//    $('#wucPhone_stxtPhone').keyup(function ()
	//    {
	//        return Check(event, this);
	//    });
	//});

</script>

<div class="nw">
	<input name="AdminCustomer$ContentPlaceHolder1$wucViolationPayment$wucCellNumberPayment$stxtPhone" type="text" maxlength="20" id="wucCellNumberPayment_stxtPhone" onkeypress="return Check(event, this);" style="width:150px;">
</div>

					</td>
				</tr>

			</tbody></table>
		</div>

		<div style="float: right;">
			<table>
				<tbody><tr>
					<td class="TableLabelMedium">
						Issue Number
					</td>
					<td>
						<input type="text" class="Textbox TextboxReadOnly" id="txtIssueIDFK" readonly="true">
					</td>
				</tr>
				<tr>
					<td class="TableLabelMedium">
						Original Fee Amount
					</td>
					<td>
						<input type="text" class="Textbox TextboxReadOnly" id="txtOrigionalFeeAmount" readonly="true">
					</td>
				</tr>
				<tr>
					<td class="TableLabelMedium">
						Discount Amount
					</td>
					<td>
						<input type="text" class="Textbox" id="txtDiscountAmount">
					</td>
				</tr>
				<tr>
					<td class="TableLabelMedium">
						Total Amount
					</td>
					<td>
						<input type="text" class="Textbox TextboxReadOnly" id="txtTotalAmount" readonly="true">
					</td>
				</tr>
				<tr>
					<td class="TableLabelMedium">
						Payment Method
					</td>
					<td>
						<select name="AdminCustomer$ContentPlaceHolder1$wucViolationPayment$cboPaymentMethod" id="cboPaymentMethod" class="Combobox Required" onchange="PaymentMethod();" style="width: 213px;">
	<option selected="selected" value="0">Choose</option>
	<option value="VISA">VISA</option>
	<option value="Mastercard">Mastercard</option>
	<option value="Cash">Cash</option>
	<option value="Check">Check</option>

</select>
					</td>
				</tr>




				<tr id="cc1" style="display: none;">
					<td class="TableLabelMedium">Credit Card Number</td>
					<td>
						<input type="text" class="Textbox Required" id="txtCreditCardNumber">
					</td>
				</tr>
				<tr id="cc2" style="display: none;">
					<td class="TableLabelMedium">Name on Card</td>
					<td>
						<input type="text" class="Textbox Required" id="txtNameOnCard">
					</td>
				</tr>
				<tr id="cc3" style="display: none;">
					<td class="TableLabelMedium">Expiration Date</td>
					<td>
						<select id="cboExpirationMonth" class="Combobox Required">
							<option value="0">Choose</option>
							<option value="1">1-Jan</option>
							<option value="2">2-Feb</option>
							<option value="3">3-Mar</option>
							<option value="4">4-Apr</option>
							<option value="5">5-May</option>
							<option value="6">6-Jun</option>
							<option value="7">7-Jul</option>
							<option value="8">8-Aug</option>
							<option value="9">9-Sep</option>
							<option value="10">10-Oct</option>
							<option value="11">11-Nov</option>
							<option value="12">12-Decr</option>
						</select>

						<select id="cboExpirationYear" class="Combobox Required" style="margin-left: 5px;">
						<option value="0">Choose</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option></select>

						
						
					</td>
				</tr>
				<tr id="cc4" style="display: none;">
					<td class="TableLabelMedium">CCID</td>
					<td>
						<input type="text" class="Textbox Required" id="txtCCID">
					</td>
				</tr>
				<tr id="cc5" style="display: none;">
					<td class="TableLabelMedium">CardZip/Postal Code</td>
					<td>
						<input type="text" class="Textbox Required" id="txtZipCode">
					</td>
				</tr>



				<tr id="check" style="display: none;">
					<td class="cr">
						<span id="ContentPlaceHolder1_wucViolationPayment_lblCheckNumber" class="FieldInputLabelsRight">Check Number</span>
					</td>
					<td>
						<input type="text" class="Textbox Required" id="txtCheckNumber">

					</td>
				</tr>

			</tbody></table>

		</div>
		<div style="clear: both;"></div>
		<div style="text-align: center;">
			<input type="button" value="Pay Violation" onclick="MakePayment();">
		</div>
	</div>

</div>




    



<script lang="javascript">

	
	var mBaseIssueType = '';
	var mPropertyIDFK = 0;
	var mCallback;
	var UserSelectorSelectedUsername;
	
	// On Load
	$(function ()
	{




		$('#divUserSelector').easyModal(
				{
					top: 100,
					autoOpen: false,
					overlayOpacity: 0.8,
					overlayColor: "#333",
					overlayClose: false,
					closeOnEscape: true,
					zIDX: 1000000
				});

		$('#divUserSelector').draggable();

		var delay = (function ()
		{
			var timer = 0;
			return function (callback, ms)
			{
				clearTimeout(timer);
				timer = setTimeout(callback, ms);
			};
		})();


		$('#OpSearch').keyup(function ()
		{
			delay(function ()
			{
				LoadUserList();
			}, 400);
		});


		$('#lstUsers').dblclick(function ()
		{
			UserSelected();
		});

		$('#cboUserManagementCompany').change(function ()
		{

			if ($('#cboUserManagementCompany').val() == 0)
			{
				$('#chkCustomers').prop('checked', false);
			}
			else
			{
				$('#chkCustomers').prop('checked', true);
			}
			

			LoadUserList();
		});

	});
	
	function ShowUserSelector(BaseIssueType, PropertyIDFK, Callback)
	{
		$('#divUserSelector').trigger('openModal');

		UserSelectorSelectedUsername = '';
		LoadManagementCompanyList();



		mBaseIssueType = BaseIssueType;
		mPropertyIDFK = PropertyIDFK;
		mCallback = Callback;

		LoadUserList();

	}


	function UserSelected()
	{
		
		if  (isEmpty($('#lstUsers').val()))
		{
			$('#usrWarning').show();
			//ShowWarningDialog('You must select a user or cancel to continue.');
			return;
		}

		$('#usrWarning').hide();
		UserSelectorSelectedUsername = $('#lstUsers').val();

		if (isEmpty(mCallback) == false)
		{
			mCallback();
		}

		$('#divUserSelector').trigger('closeModal');

	}



	function CancelUserSelector()
	{
		UserSelectorSelectedUsername = '';
		$('#divUserSelector').trigger('closeModal');
	}

		function LoadUserList()
	{

		$("#lstUsers").empty();

		var AssignList = new Object();

		AssignList.PropertyIDFK = mPropertyIDFK;
		AssignList.BaseIssueType = mBaseIssueType;
		AssignList.RouteIDFK = 0;

		AssignList.IncludeGuards = $("#chkGuards").is(':checked');
		AssignList.IncludeSupAdmins = $("#chkSupAdmins").is(':checked');
		AssignList.IncludeDispatchers = $("#chkDispatchers").is(':checked');
		AssignList.IncludeCustomers = $("#chkCustomers").is(':checked');
		AssignList.IncludeInactive = $("#chkInactive").is(':checked');
		AssignList.UserSearch = $("#OpSearch").val();
		AssignList.ManagementCompanyIDFK = $('#cboUserManagementCompany').val();
		

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/GetIssueUserList",
			data: JSON.stringify(AssignList),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);

				for (var ff in obj)
				{
					var sb = document.createElement("option");//create new option 
					sb.value = obj[ff].UserName;

					if (obj[ff].Hours > -1)
					{
						sb.text = obj[ff].FullName + ' - ' + obj[ff].Hours + ' Hours ago';
					}
					else
					{
						sb.text = obj[ff].FullName;
					}
					//$('#lstUsers').append(new Option(obj[ff].FullName, obj[ff].FullName));
					document.getElementById("lstUsers").options.add(sb);
				}


			},
			error: function (msg)
			{

			    ShowWarningDialog('A error has occured Loading the user list.');
			    Common.LogAjaxError('wucUserSelector.ascx', 'LoadUserList', msg.responseJSON.Message);
			}
		});
	}

	function LoadManagementCompanyList()
	{
		$('#cboUserManagementCompany').empty();

		var sb = document.createElement("option");//create new option 
		sb.value = '0';
		sb.text = 'Choose';
		document.getElementById("cboUserManagementCompany").options.add(sb);

		var Mgmt = new Object();

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Management.asmx/GetManagementCompanyList",
			data: JSON.stringify(Mgmt),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);

				for (var ff in obj)
				{
					var sb = document.createElement("option");//create new option 
					sb.value = obj[ff].ID;
					sb.text = obj[ff].CompanyName;
					document.getElementById("cboUserManagementCompany").options.add(sb);
				}


			},
			error: function (msg)
			{

			    ShowWarningDialog('A error has occured loading the Management Company List.');
			    Common.LogAjaxError('wucUserSelector.ascx', 'LoadManagementCompanyList', msg.responseJSON.Message);
			}
		});
	}

	//function LoadRoutes(PropertyIDFK)
	//{


	//	$('#cboUserRoute').empty();

	//	var sb = document.createElement("option");//create new option 
	//	sb.value = '0';
	//	sb.text = 'All Users'
	//	document.getElementById("cboUserRoute").options.add(sb);

	//	var Routes = new Object();

	//	Routes.PropertyIDFK = PropertyIDFK;

	//	$.ajax({
	//		type: "POST",
	//		contentType: "application/json; charset=utf-8",
	//		url: "/WebServices/Monitor.asmx/GetAssignToRoutes",
	//		data: JSON.stringify(Routes),
	//		dataType: "json",
	//		success: function (msg)
	//		{
	//			var obj = JSON && JSON.parse(msg.d);

	//			for (var ff in obj)
	//			{
	//				var sb = document.createElement("option");//create new option 
	//				sb.value = obj[ff].RouteIDFK;
	//				sb.text = obj[ff].GroupName;
	//				document.getElementById("cboRoutes").options.add(sb);
	//			}


	//		},
	//		
	//		{

	//			ShowWarningDialog('A error has occured Getting the Routes List.');
	//		}
	//	});
	//}

</script>




<div id="divUserSelector" style="display: none; position: fixed; z-index: 0; left: 50%; top: 100px;" class="ui-draggable ui-draggable-handle">

    <div class="PopupTitleBar">
        <label>Choose User</label>
        
        <div class="CloseIcon" onclick="CancelUserSelector();"></div>
    </div>

    <div class="PopupBody">
        <input type="hidden" name="AdminCustomer$ContentPlaceHolder1$wucUserSelector$hidAssignToUsername" id="hidAssignToUsername">

        <div>
            <div style="margin: 10px;">
                Include
			<label for="chkGuards" title="Include Guards">
                <input id="chkGuards" type="checkbox" checked="checked" class="Checkbox" onclick="LoadUserList();">Guards</label>
                <label for="chkSupAdmins" title="Include Supervisors and Administrators">
                    <input id="chkSupAdmins" type="checkbox" class="Checkbox" onclick="LoadUserList();">Sup/Admins</label>
                <label for="chkDispatchers" title="Include Dispatchers">
                    <input id="chkDispatchers" type="checkbox" class="Checkbox" onclick="LoadUserList();">Dispatchers</label>
                <label for="chkCustomers" title="Include Customers">
                    <input id="chkCustomers" type="checkbox" class="Checkbox" onclick="LoadUserList();">Customers</label>
                <label for="chkInactive" title="Include Inactive Users">
                    <input id="chkInactive" type="checkbox" class="Checkbox" onclick="LoadUserList();">Inactive</label>
            </div>


            <div>
                <select id="lstUsers" size="10" style="width: 560px; height: 250px;"></select>
            </div>

            <div>
                <label style="display: block;">Management Company</label>
                <select id="cboUserManagementCompany" style="width: 560px;">
                </select>

                <label style="display: block;">Search First/Last/User Name</label>
                <label for="" style="display: none;">Chrome Autocomplete Blocker</label>
                <input type="text" id="OpSearch" style="width: 560px;">

            </div>


        </div>




        <div style="text-align: center; clear: both;">
            <label id="usrWarning" class="WarningLabel" style="display: none;">You must select a user or cancel to continue.</label>
            <input type="button" id="cmdSelectUser" onclick="UserSelected();" value="Select User" style="margin: 10px;">
        </div>


    </div>

</div>


    


<script lang="javascript">

	
	var mBaseIssueType = '';
	var mPropertyIDFK = 0;
	var mCallback;
	var IssueTypeSelectorSelectedIssueTypeIDFK = 0;
	
	// On Load
	$(function ()
	{
		$('#divIssueTypeSelector').easyModal(
				{
					top: 100,
					autoOpen: false,
					overlayOpacity: 0.8,
					overlayColor: "#333",
					overlayClose: false,
					closeOnEscape: true,
					zIDX: 120000
				});

		$('#lstIssueType').dblclick(function ()
		{
			IssueTypeSelected();
		});

	});




	function ShowIssueTypeSelector(BaseIssueType, PropertyIDFK, Callback)
	{
		$('#divIssueTypeSelector').trigger('openModal');

		IssueTypeSelectorSelectedIssueTypeIDFK = 0;

		mBaseIssueType = BaseIssueType;
		mPropertyIDFK = PropertyIDFK;
		mCallback = Callback;

		LoadIssueTypeList(BaseIssueType);
	}

	
	function IssueTypeSelected()
	{

		if (isEmpty($('#lstIssueType').val()))
		{
			ShowWarningDialog('You must select a Issue Type or cancel to continue.');
			return;
		}

		IssueTypeSelectorSelectedIssueTypeIDFK = $('#lstIssueType').val();

		if (isEmpty(mCallback) == false)
		{
			mCallback();
		}

		$('#divIssueTypeSelector').trigger('closeModal');

	}



	function CancelIssueTypeSelector()
	{
		IssueTypeSelectorSelectedIssueTypeIDFK = 0;
		$('#divIssueTypeSelector').trigger('closeModal');
	}

	function LoadIssueTypeList()
	{

		$("#lstIssueType").empty();

		var IssueTypes = new Object();

		IssueTypes.PropertyIDFK = mPropertyIDFK;
		IssueTypes.BaseIssueType = mBaseIssueType;

		$.ajax({
			type: "POST",
			contentType: "application/json; charset=utf-8",
			url: "/WebServices/Monitor.asmx/GetIssueTypeList",
			data: JSON.stringify(IssueTypes),
			dataType: "json",
			success: function (msg)
			{
				var obj = JSON && JSON.parse(msg.d);

				for (var ff in obj)
				{
					var sb = document.createElement("option");//create new option 
					sb.value = obj[ff].IssueTypeIDFK;
					sb.text = obj[ff].IssueName;

					document.getElementById("lstIssueType").options.add(sb);
				}


			},
			error: function (msg)
			{

			    ShowWarningDialog('A error has occured Loading the Issue Type list.');
			    Common.LogAjaxError('wucIssueTypeSelector.ascx', 'LoadIssueTypeList', msg.responseJSON.Message);
			}
		});
	}


	</script>

<div id="divIssueTypeSelector" style="width: 580px; display: none; position: fixed; z-index: 0; left: 50%; top: 100px;">

	<div class="PopupTitleBar">
		<label>Choose Issue Type</label>
		<input id="cmdCancelIssueTypeSelector" type="button" value="X" onclick="CancelIssueTypeSelector();">
	</div>

	<div class="PopupBody">
		<input type="hidden" name="AdminCustomer$ContentPlaceHolder1$wucIssueTypeSelector$hidNewIssueTypeIDFK" id="hidNewIssueTypeIDFK">
		<div>
				<select id="lstIssueType" size="10" style="width: 530px; height: 150px;"></select>
		</div>

		<div style="text-align: center; clear: both;">
			<input type="button" id="cmdSelectIssueType" onclick="IssueTypeSelected();" value="Select Issue Type">
		</div>


	</div>

</div>


    

<script lang="javascript">



    $(function () {


        $('#txtTimeIn').datetimepicker({
            format: 'n/j/Y g:i A',
            formatTime: 'g:i A',
            validateOnBlur: false,
            onSelectDate: function (ct, $i) {
                //Reporting.ValidateDateRange();
            }

        });

        $('#txtTimeOut').datetimepicker({
            format: 'n/j/Y g:i A',
            formatTime: 'g:i A',
            validateOnBlur: false,
            onSelectDate: function (ct, $i) {
                //Reporting.ValidateDateRange();
            }

        });


    });

    var TimeCardApproval = {

        CallBackOnClose: null,

        Open: function (CallBack) {
            this.Clear();
            this.CallBackOnClose = CallBack;
            Common.Show('divTimeCardApproval', 17000);

            $(document).off().keyup();

            $(document).on().keyup(function (e) {
                $(document).off().keyup();
                if (e.which == 27)
                    TimeCardApproval.Close();
            });


            this.LoadTimecards();

            //$('#txtTimeIn').datetimepicker({ timeFormat: "h:mm TT", dateFormat: "m/d/yy" });
           // $('#txtTimeIn').datepicker({ dateFormat: "m/d/yy" });
          //  $('#txtTimeOut').datepicker({ dateFormat: "m/d/yy" });






        },

        Close: function () {
            Common.Pop('divTimeCardApproval');
            this.Clear();
            
            //this.CallBackOnClose();
        },

        Clear: function () {
        },

        LoadTimecards: function () {
            $('#divTimecardList').empty();

            var Post = new Object()
            Post.Action = "UserTimeClockGetItems";
            Post.ShiftID = $('#txtShiftID').val();
            Post.DateIn = $('#txtTimeIn').val();
            Post.DateOut = $('#txtTimeOut').val();
            Post.TimeClockUserName = $('#txtTimeClockUserName').val();
            Post.Status = $('#cboShiftStatus').val();

            

           

            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "/API/API.ashx",
                data: JSON.stringify(Post),
                dataType: "json",
                success: function (msg) {

                    var template = $('#hidden-template-timecardentry').html();

                    for (var item in msg)
                    {
                        var DisplayStatus = 'none'

                        if (isEmpty(msg[item].ShiftApproved) == true)
                            DisplayStatus = 'normal'

                        $('#divTimecardList').prepend(template.format({
                            SHIFTID: msg[item].ShiftID,
                            OFFICERNAME: msg[item].FullName,
                            CLOCKINDTM: FormatDate(msg[item].ClockInDTM, 'Medium'),
                            CLOCKOUTDTM: FormatDate(msg[item].ClockOutDTM, 'Medium'),
                            TIMEDIFF: msg[item].TimeDiff,
                            CLOCKINGPSLONGITUDE: msg[item].ClockInGPSLongitude,
                            CLOCKINGPSLATITUDE: msg[item].ClockInGPSLatitude,
                            CLOCKOUTGPSLONGITUDE: msg[item].ClockOutGPSLongitude,
                            CLOCKOUTGPSLATITUDE: msg[item].ClockOutGPSLatitude,
                            DISPLAYSTATUS: DisplayStatus,
                            VISIBILITY: msg[item].ValidGPSData

                        }));

                        //$('#dtmTimeClockIn' + msg[item].ShiftID).datetimepicker
                        //    ({
                        //        timeFormat: "h:mm TT",
                        //        dateFormat: "m/d/yy",
                        //        hour: 12,
                        //        minute: 0,
                        //        second: 0,
                        //        onSelect: function (dateText)
                        //        {

                        //            var ShiftID = $(this).attr('id').replace('dtmTimeClockIn', '');
                        //            TimeCardApproval.TimeCheck(ShiftID);

                    
                        //        }
                        //    });

                        //$('#dtmTimeClockOut' + msg[item].ShiftID).datetimepicker
                        //({
                        //    timeFormat: "h:mm TT",
                        //    dateFormat: "m/d/yy",
                        //    hour: 12,
                        //    minute: 0,
                        //    second: 0,
                        //    onSelect: function (dateText) {

                        //        var ShiftID = $(this).attr('id').replace('dtmTimeClockOut', '');
                        //        TimeCardApproval.TimeCheck(ShiftID);
                               
                        //    }
                        //});

                    }

                },
                error: function (msg) {
                    ShowWarningDialog('A error has occured.');
                }
            });

        },

        TimeCheck: function(ShiftID)
        {
            var txtStartDate = $('#lblTimeClockIn' + ShiftID);
            var txtEndDate = $('#lblTimeClockOut' + ShiftID);

            var StartDate = new Date($(txtStartDate).text());
            var EndDate = new Date($(txtEndDate).text());

            $('#txtTimeDiff' + ShiftID).val(Common.ShowDTMDiffHoursMinutes(StartDate, EndDate));

            //if (StartDate >= EndDate)
            //{
            //    ShowWarningDialog("Time Out MUST be greater than Time In.");
            //    return -1;
            //}
            //else
            //{
            //    $('#txtTimeDiff' + ShiftID).val(Common.ShowDTMDiffHoursMinutes(StartDate, EndDate));
            //}
        },


        ShowGPS: function (ShiftID, a,b,c,d)
        {
            //alert(ShiftID);
            TimeCardGPSMap.Open(ShiftID, a, b, c, d);

        },

        ApproveShift: function (ShiftID)
        {

            if (TimeCardApproval.TimeCheck(ShiftID) == -1)
            {
                return;
            }

                $("#alertmsg").html("Are you sure you want to Approve this Shift?  This CANNOT be undone!");
                $("#warning").css("display", "inline");
                $("#warning").dialog
                    (
                        {
                            modal: true,

                            buttons:
                            {
                                "Confirm": function () {
                                    $(this).dialog("close");
                                    TimeCardApproval.ApproveShiftConfirm(ShiftID);
                                },
                                "Cancel": function () {
                                    $(this).dialog("close");
                                    if (isEmpty(cancel) == false)
                                    {
                                        window[cancel]();
                                    }
                                }
                            }
                        }
                    );

            
        },

        ApproveShiftConfirm: function (ShiftID) {

            var Post = new Object();
            Post.Action = "UserTimeClockApproveShift";
            Post.ShiftID = ShiftID;
            Post.StartDTM = $('#lblTimeClockIn' + ShiftID).text();
            Post.EndDTM = $('#lblTimeClockOut' + ShiftID).text();

            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "/API/API.ashx",
                data: JSON.stringify(Post),
                dataType: "json",
                success: function (msg) {
                    TimeCardApproval.LoadTimecards();
                },
                error: function (msg) {
                    ShowWarningDialog('Unable to Approve Shift');
                }
            });

        },

        DenyShift: function (ShiftID)
        {


            $("#alertmsg").html("Are you sure you want to Deny this Shift?  You will not be able to modify the shift times or re-approve this shift!  This CANNOT be undone!");
            $("#warning").css("display", "inline");
            $("#warning").dialog
                (
                    {
                        modal: true,

                        buttons:
                        {
                            "Confirm": function () {
                                $(this).dialog("close");
                                TimeCardApproval.DenyShiftConfirm(ShiftID);
                            },
                            "Cancel": function () {
                                $(this).dialog("close");
                                if (isEmpty(cancel) == false)
                                {
                                    window[cancel]();
                                }
                            }
                        }
                    }
                );
        },

        DenyShiftConfirm: function (ShiftID)
        {
            var Post = new Object();
            Post.Action = "UserTimeClockDenyShift";
            Post.ShiftID = ShiftID;

            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "/API/API.ashx",
                data: JSON.stringify(Post),
                dataType: "json",
                success: function (msg) {
                    TimeCardApproval.LoadTimecards();
                },
                error: function (msg) {
                    ShowWarningDialog('Unable to Deny Shift');
                }
            });
        },

        ChooseUser: function () {

            var a = TimeCardApproval.SetUser;
            ShowUserSelector('', 0, a);
            
        },

        SetUser: function () {

            if (UserSelectorSelectedUsername.length > 0)
            {
                $('#txtTimeClockUserName').val(UserSelectorSelectedUsername);
                //$('#txtClearCreatedBy').show();
                //$('#txtClearCreatedBy').css('display', 'fixed');

            }

        },

        OpenTimeEntry: function (ShiftID)
        {
                TimeCardEntry.Open(ShiftID);
                return false;
        }






    }



    //var ShiftID = $(this).attr('id').replace('dtmTimeClockIn', '');

    //var txtStartDate = $(this);
    //var txtEndDate = $('#' + $(this).attr('id').replace('dtmTimeClockIn', 'dtmTimeClockOut'));

    //var StartDate = new Date($(txtStartDate).val());
    //var EndDate = new Date($(txtEndDate).val());

    //console.log(StartDate);
    //console.log(EndDate);

    //if (StartDate >= EndDate)
    //{
    //    ShowWarningDialog("Time in cannot be later than time out.");
    //}
    //else
    //{

    //    $('#txtTimeDiff' + ShiftID).val(Common.ShowDTMDiffHoursMinutes(StartDate, EndDate));
    //}


    //                                        console.log($('#dtmTimeClockOut' + msg[item].ShiftID).val());
    //var txtEndDate = $(this);
    //var txtStartDate = $('#' + $(this).attr('id').replace('dtmTimeClockOut', 'dtmTimeClockIn'));

    //var StartDate = new Date($(txtStartDate).val());
    //var EndDate = new Date($(txtEndDate).val());

    //console.log('START:' + StartDate);
    //console.log('END:' + EndDate);

    //if (StartDate >= EndDate)
    //    ShowWarningDialog("Time in cannot be later than time out.");



    /*
	    AddTimecardRow: function (TimeCard)
	    {
	        

	        $('<div />').attr({ id: 'div' + TimeCard.ID }).appendTo('#divTimecardList');

	        

        	//$('<input />').attr({ type: 'button', onclick: 'CheckpointDetail.Open(' + TimeCardApproval.CheckpointPropertyIDFK + ',' + Checkpoint.CheckpointIDFK + ', ' + TimeCardApproval.ReloadCheckpoints + ');', value: 'Edit', class: 'SaveButton duck', style: 'font-size: small; margin-right: 4px !important' }).appendTo('#' + 'div' + Checkpoint.CheckpointIDFK);


	        TimeCardApproval.AddTimecardElement('text', TimeCard.ID, '60px', TimeCard.ID, '');
	        TimeCardApproval.AddTimecardElement('text', TimeCard.FullName, '120px', TimeCard.ID, '');
	        TimeCardApproval.AddTimecardElement('text', TimeCard.GroupName, '120px', TimeCard.ID, '');

	        TimeCardApproval.AddTimecardElement('datetime', FormatDate(TimeCard.ClockInDTM, 'Short'), '120px', TimeCard.ID, FormatDate(TimeCard.ClockInDTM, 'Long'), 'ClockIn');
	        TimeCardApproval.AddTimecardElement('datetime', FormatDate(TimeCard.ClockOutDTM, 'Short'), '120px', TimeCard.ID , '', 'ClockOut');


//	        TimeCardApproval.AddTimecardElement('text', TimeCard.ClockOutGPSLongitude, '20px', TimeCard.ID, '');
	        
	        TimeCardApproval.AddTimecardElement('text', TimeCard.TimeDiff, '75px', TimeCard.ID, '');

	        $('<input />').attr({ type: 'button', onclick: 'TimeCardApproval.DeleteCheckpoint(' + TimeCard.ID + ');', value: 'GPS', class: 'SaveButton duck', style: 'font-size: small; margin-left: 10px !important; margin-right: 4px !important' }).appendTo('#' + 'div' + TimeCard.ID);
	        $('<input />').attr({ type: 'button', onclick: 'TimeCardApproval.DeleteCheckpoint(' + TimeCard.ID + ');', value: 'Approve', class: 'SaveButton duck', style: 'font-size: small; margin-right: 4px !important' }).appendTo('#' + 'div' + TimeCard.ID);
	        $('<input />').attr({ type: 'button', onclick: 'TimeCardApproval.DeleteCheckpoint(' + TimeCard.ID + ');', value: 'Deny', class: 'SaveButton duck', style: 'font-size: small;  margin-right: 4px !important' }).appendTo('#' + 'div' + TimeCard.ID);



	        //TimeCardApproval.AddTimecardElement('checkbox', TimeCard.CheckpointIsActive ? 1 : -1, 0, TimeCard.CheckpointIDFK, 'Is Active', TimeCard.CheckpointIsActive);
	        //TimeCardApproval.AddTimecardElement('checkbox', TimeCard.EnableOverdueAlert ? 1 : -1, 0, TimeCard.CheckpointIDFK, 'Report if Missed', TimeCard.CheckpointIsActive);
	    },

	    AddTimecardElement: function (Type, Value, Width, TimeClockID, Title, idPrefix)
	    {

	        if (Type == 'text')
	            $('<input />').attr({ type: Type, value: Value, class: 'Textbox TextboxReadOnly', disabled: true, style: 'margin-left: 2px !important; margin-right: 2px !important; font-size: small; width: ' + Width }).appendTo('#' + 'div' + TimeClockID);

	        if (Type == 'datetime')

	            $('<input />').attr({ type: 'text', value: Value, id: idPrefix + TimeClockID, class: 'Textbox', style: 'margin-left: 2px !important; margin-right: 2px !important; font-size: small; width: ' + Width }).appendTo('#' + 'div' + TimeClockID);

	        $('#' + idPrefix + TimeClockID).datetimepicker
                ({
                    //altField: "#hidStartDate",
                    //altFieldTimeOnly: false,
                    //altTimeFormat: "h:mm:ss TT",
                    //altFormat: "m/d/yy",

                    timeFormat: "h:mm TT",
                    dateFormat: "D m/d",

                    //defaultValue: $('#hidStartDate').val(),
                    hour: 12,
                    minute: 0,
                    second: 0,
                    //minDateTime: new Date(2014, 3, 2, 0, 0, 0, 0),
                    //maxDateTime: new Date(2014, 3, 20, 23, 0, 0, 0),
                    onSelect: function (dateText) { //ValidateStartDateRange('StartDate', dateText); 
                    }
                });

	        //return DOWName + ' ' + (dtm.getMonth() + 1) + '/' + dtm.getDate() + ' ' + Hour + ':' + Minute + ' ' + AMPM;

	        if (Type == 'checkbox' && Value >= 0)
	            $('<input />').attr({ type: Type, class: 'Checkbox', checked: 'checked', disabled: true, title: Title, style: 'font-size: small; margin-left: 4px !important; margin-right: 4px !important;  padding: 0px !important;' }).appendTo('#' + 'div' + TimeClockID);

	        if (Type == 'checkbox' && Value < 0)
	            $('<input />').attr({ type: Type, class: 'Checkbox', title: Title, disabled: true, style: 'font-size: small; margin-left: 4px !important; margin-right: 4px !important;  padding: 0px !important;' }).appendTo('#' + 'div' + TimeClockID);

	    }
	}
    */

</script>

<div id="divTimeCardApprovalMask" class="PopupMask"></div>
<div id="divTimeCardApproval" style="width: 975px; display: none;">

    <div class="PopupTitleBar">
        <label>Shifts Awaiting Approval</label>
        <div class="CloseIcon" onclick="TimeCardApproval.Close();"></div>
    </div>

    <div class="PopupBody" style="padding: 10px;">

        <div style="margin-top: 15px;" id="divCheckpointHeader">
            <input type="text" id="txtShiftID" class="FilterWatermark" placeholder="Shift ID" style="width: 65px;">
            <input type="text" id="txtTimeClockUserName" readonly="" class="FilterWatermark" placeholder="Officer Name" onclick="TimeCardApproval.ChooseUser();" style="width: 108px;">
            <input type="button" style="" value="X" onclick="$(&#39;#txtTimeClockUserName&#39;).val(&#39;&#39;);">
            

            <input type="text" id="txtTimeIn" class="FilterWatermark" placeholder="Time In" style="width: 160px;">
            <input type="text" id="txtTimeOut" class="FilterWatermark" placeholder="Time Out" style="width: 160px;">
            <label class="label-tableheader" style="width: 75px;">Total Time</label>
            <select id="cboShiftStatus" class="FilterWatermark" onchange="TimeCardApproval.FindShifts();" style="width: 126px;">
                            <option value="Waiting Approval">Waiting Approval</option>
                            <option value="Approved">Approved</option>
                            <option value="Denied">Denied</option>               

        </select>
            <input type="button" style="" value="Update" onclick="TimeCardApproval.LoadTimecards();">
        </div>

        <div id="divTimecardList" style="overflow: auto; height: 350px; margin-bottom: 10px;">
        </div>

        
        
        <div style="text-align: center; display: none;">
            <input type="button" value="Upload Approved Shifts to Team" onclick="TimeCardApproval.PostToTeam();">
            
            
        </div>


    </div>
</div>



<script id="hidden-template-timecardentry" type="text/html">

    <div style="margin-top: 3px;">
        <div class="divHighlight" style="cursor: pointer; display: inline-block; vertical-align: middle;"  onclick="TimeCardApproval.OpenTimeEntry({SHIFTID});">
                <label id="{SHIFTID}" class="label-textbox" style="width: 65px;" >{SHIFTID}</label>
            <label class="label-textbox" style="width: 150px;" >{OFFICERNAME}</label>
            <label id="lblTimeClockIn{SHIFTID}" class="label-textbox" style="width: 160px;" >{CLOCKINDTM}</label>
            <label id="lblTimeClockOut{SHIFTID}" class="label-textbox" style="width: 160px;" >{CLOCKOUTDTM}</label>
            <label class="label-textbox nw" style="width: 75px;font-size: small; vertical-align: top;" >{TIMEDIFF}</label>

        </div>

        <input type="button" id="{GPSMAP}"  style="font-size: medium; visibility: {VISIBILITY}" value="GPS" onclick="TimeCardApproval.ShowGPS('{SHIFTID}', '{CLOCKINGPSLONGITUDE}', '{CLOCKINGPSLATITUDE}', '{CLOCKOUTGPSLONGITUDE}', '{CLOCKOUTGPSLATITUDE}')" />
        <input type="button" id="{APPROVE}"  style="font-size: medium; display: {DISPLAYSTATUS};" value="Approve" onclick="TimeCardApproval.ApproveShift('{SHIFTID}');" />
        <input type="button" id="{DENY}"  style="font-size: medium; display: {DISPLAYSTATUS};" value="Deny" onclick="TimeCardApproval.DenyShift('{SHIFTID}');" />
    </div>




</script>







    
    


<script src="./Monitor_files/moment.min.js.download"></script>
<script src="./Monitor_files/GoogleMaps.js.download"></script>
<script lang="javascript">

	

	$(function ()
	{

        // Enable ths to auto track

	    //setInterval(function () {
	    //    console.log(GoogleMaps.markerArray.length);
	    //    GoogleMaps.ClearMarkers();
	    //    UserChatMap.LoadIssues();
	        
	    //}, 10000);

	    $('#txtChatMapStartDTM').datetimepicker({
	        format: 'n/j/Y g:i A',
	        formatTime: 'g:i A',
	        validateOnBlur: false,
            onClose: function (ct, $i) {
	            //Reporting.ValidateDateRange();
	            //if ($('#txtChatMapEndDTM').val() == 'End Date' )
	            //{
	            //    var d = new Date($('#txtChatMapStartDTM').val())
	            //    d.setHours(d.getHours() + 8);

	            //    var s = FormatDate(d.toString(), 'Medium');
	            //    $('#txtChatMapEndDTM').val(s);
	                
	            //    //$('#txtChatMapEndDTM').val($('#txtChatMapStartDTM').val());
	            //}
	        }

	    });

	    $('#txtChatMapEndDTM').datetimepicker({
	        format: 'n/j/Y g:i A',
	        formatTime: 'g:i A',
	        validateOnBlur: false,
	        onSelectDate: function (ct, $i) {
	           // var f = new Date(2004, 1, 3, 4, 1, 0);
	           // alert(f);

	            //Reporting.ValidateDateRange();
	        }

	    });

	});

	var map;

	var UserChatMap = {

	    CallBackOnClose: null,
	    GPSTrack: null,
	    GPSIndex: -1,
	    Timer: null,
	    Properties: null,
	    Users: null,
	    TrackInterval: 200,
	    PlayingTrack: false,

	    lll: function()
	    {
	        console.log('ffff');
	    },

	    Open: function(CallBack)
	    {
	        this.Clear();
	        this.CallBackOnClose = CallBack;	
	        Common.Show('divUserChatMap', 17000);

	        $(document).off().keyup();

	        $(document).on().keyup(function (e)
	        {
	            $(document).off().keyup();
	            if (e.which == 27)
	                UserChatMap.Close();
	        });


	        UserChatMap.InitGOO();



	    },


	    InitGOO: function()
	    {
            
	        //if (GoogleMaps.gpsMap != null)
	        //{
	        //    GoogleMaps.gpsMap.entities.clear();
	        //    GoogleMaps.gpsMap = null;
	        //}

	        GoogleMaps.InitMap('myMapo');

		    

	        UserChatMap.LoadUserLocations();

	        UserChatMap.LoadProperties();

	        UserChatMap.LoadIssues();


	        GoogleMaps.AddControlBox();

	        GoogleMaps.FitMarkers();

	        //UserChatMap.LoadGPSTrack();
            
		    

	    },

	    ReloadMap: function()
	    {
	        GoogleMaps.ClearMarkers();
	        UserChatMap.LoadUserLocations();

	        UserChatMap.LoadProperties();

	        UserChatMap.LoadIssues();


	        GoogleMaps.AddControlBox();

	        GoogleMaps.FitMarkers();
	    },

	    ChooseUser: function()
	    {
	        var a = UserChatMap.UserChosen;
	        ShowUserSelector('', 0, a);
	    },

	    UserClicked: function(Username)
	    {
	        $('#txtUserChosen').val(Username);
	        $('#txtClearUserChosen').show();
	        $('#txtClearUserChosen').css('display', 'fixed');
	        $('#txtChatMapEndDTM').val(moment().format("M/D/YYYY h:mm A"));
	        $('#txtChatMapStartDTM').val(moment().subtract(18, 'hour').format("M/D/YYYY h:mm A"));
	    },

	    UserChosen: function()
	    {
	        if (UserSelectorSelectedUsername.length > 0)
	        {
	            UserChatMap.UserClicked(UserSelectorSelectedUsername);
	        }
	    },

        ClearUserChosen: function()
        {
            $('#txtUserChosen').val("Choose User");
            $('#txtClearUserChosen').hide();
            

        },


	  

		Close: function()
		{
			Common.Pop('divUserChatMap');
			this.Clear();
			//this.CallBackOnClose();
			
		},

		Clear: function()
		{
		},

		LoadProperties: function()
		{
		    var Post = new Object()
		    Post.Action = 'UserMapGetProperties';
		    Post.SearchValue = '';

		    $.ajax({
		        type: "POST",
		        contentType: "application/json; charset=utf-8",
		        url: "/API/API.ashx",
		        data: JSON.stringify(Post),
		        dataType: "json",
		        success: function (msg) {

		            UserChatMap.Properties = msg;

		            $('#cboUserMapProperty').empty();
		            $('#cboUserMapProperty').append('<option value="Choose">Locate Property</option>');
		            

		            for (var item in msg)
		            {
		                GoogleMaps.AddCircle(msg[item].GPSLongitude, msg[item].GPSLatitude, msg[item]);
		                $('#cboUserMapProperty').append('<option value="' + msg[item].PropertyIDFK + '">' + msg[item].PropertyName + '</option>');
		            }


		        },
		        error: function (msg) {
		            ShowWarningDialog('A error has occured.');
		            Common.LogAjaxError('UserChatMap.ascx', 'LoadUserLocations', msg.responseJSON.Message);
		        },
		        async: false
		    });
		},

		LocateAddress: function()
		{
		    var idx = $('#cboUserMapProperty').prop('selectedIndex') - 1;

		    if (UserChatMap.Properties[idx].GPSLongitude == "")
		    {
                ShowWarningDialog("This Property does not have GPS data.  Please add it in the Property Maintenance section.")
		        return;
		    }

		    GoogleMaps.ZoomTo(UserChatMap.Properties[idx].GPSLatitude, UserChatMap.Properties[idx].GPSLongitude);



		},

		LocateUser: function () {
		    var idx = $('#cboUserMapGuard').prop('selectedIndex') - 1;
		    GoogleMaps.ZoomTo(UserChatMap.Users[idx].LastGPSLatitude, UserChatMap.Users[idx].LastGPSLongitude);
		    UserChatMap.UserClicked(UserChatMap.Users[idx].SelectedUserName);
		},


		LoadUserLocations: function()
		{
		    var Post = new Object()
		    Post.Action = 'UserMapGetList';
		    Post.SearchValue = '';

		    $.ajax({
		        type: "POST",
		        contentType: "application/json; charset=utf-8",
		        url: "/API/API.ashx",
		        data: JSON.stringify(Post),
		        dataType: "json",
		        success: function (msg) {

		            var minLong = 0;
		            var maxLong = -200;

		            var minLat = 200;
		            var maxLat = 0;
		            

		            $('#cboUserMapGuard').empty();
		            $('#cboUserMapGuard').append('<option value="Choose">Locate Guard</option>');

		            UserChatMap.Users = msg;
		            
		            for (var item in msg)
		            {

		                // Add guard to drop down cboUserMapGuard
		                $('#cboUserMapGuard').append('<option value="' + msg[item].SelectedUserName + '">' + msg[item].FullName + '</option>');

		                if (minLong > msg[item].LastGPSLongitude * 1) // should be -115 or something
		                    minLong = msg[item].LastGPSLongitude * 1;

		                if (maxLong < msg[item].LastGPSLongitude * 1)// should be -115 or something
		                    maxLong = msg[item].LastGPSLongitude * 1;

		                if (minLat > msg[item].LastGPSLatitude * 1)
		                    minLat = msg[item].LastGPSLatitude * 1;

		                if (maxLat < msg[item].LastGPSLatitude * 1)
		                    maxLat = msg[item].LastGPSLatitude * 1;


		                //Action, Longitude, Latitude, Rotation, MarkerObjectData, AutoZoom
		                GoogleMaps.AddMarker("UserLocation", msg[item].LastGPSLongitude, msg[item].LastGPSLatitude, 0, msg[item], false);

		                //if (msg[item].LongPropertyName == '(No Property)')
		                //{
		                //    GoogleMaps.AddMarker(msg[item].LastGPSLongitude, msg[item].LastGPSLatitude, msg[item], false);
		                //}
		                //else
		                //{
		                //    GoogleMaps.AddMarker(msg[item].LastGPSLongitude, msg[item].LastGPSLatitude, msg[item], false);
		                //}

		                
		            }


		        },
		        error: function (msg) {
		            ShowWarningDialog('A error has occured.');
		            Common.LogAjaxError('UserChatMap.ascx', 'LoadUserLocations', msg.responseJSON.Message);
		        },
		        async: false
		    });

		},

		TickGPSMap: function()
		{

		    if (isEmpty(UserChatMap.GPSTrack) == true)
		        return;

		    //var f = Math.atan2(Longitude, Latitude) * 180 / Math.PI;
		    // Math.Atan2(start.Y - end.Y, end.X - start.X) * Rad2Deg;

		    UserChatMap.GPSIndex += 1;

		    if (UserChatMap.GPSIndex >= UserChatMap.GPSTrack.length)
		    {
		        UserChatMap.StopTrack();
		        return;
		    }

		    lon1 = UserChatMap.GPSTrack[UserChatMap.GPSIndex].Longitude;
		    lat1 = UserChatMap.GPSTrack[UserChatMap.GPSIndex].Latitude;

		    var degg = 0;

		    if (UserChatMap.GPSIndex + 1 < UserChatMap.GPSTrack.length)
		    {
		        lon2 = UserChatMap.GPSTrack[+UserChatMap.GPSIndex + 1].Longitude;
		        lat2 = UserChatMap.GPSTrack[+UserChatMap.GPSIndex + 1].Latitude;

		        degg = Math.atan2(lon2 - lon1, lat2 - lat1) * 180 / Math.PI;
		    }




		 
		    //Action, Longitude, Latitude, Rotation, MarkerObjectData, AutoZoom
		    GoogleMaps.AddMarker(UserChatMap.GPSTrack[UserChatMap.GPSIndex].Action, UserChatMap.GPSTrack[UserChatMap.GPSIndex].Longitude, UserChatMap.GPSTrack[UserChatMap.GPSIndex].Latitude, degg, UserChatMap.GPSTrack[UserChatMap.GPSIndex], true);


		    $('#lblChatCurrentDTM').text(UserChatMap.GPSTrack[UserChatMap.GPSIndex].GPSGMTDateTime);

		    if ($('#chkHideFootprints').prop('checked') == true)
		    {

		        if (UserChatMap.GPSIndex >= 10)
		        {
		            GoogleMaps.markerArray[UserChatMap.GPSIndex - 10].setMap(null);
		        }
		    }

		    if (UserChatMap.PlayingTrack == true)
		        setTimeout(UserChatMap.TickGPSMap, UserChatMap.TrackInterval);

		        //gpsMarker.setIcon({
		        //    path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
		        //    scale: 6,
		        //    fillColor: GoogleMaps.GetArrowColor(MarkerObjectData.Speed),
		        //    fillOpacity: 0.8,
		        //    strokeWeight: 1,
		        //    rotation: Rotation
		        //});

		    //console.log(lon1);
		    //console.log(lat1);
		    //console.log(lon2);
		    //console.log(lat2);

		    //var degg = Math.atan2(lon1 - lon2, lat1 - lat2) * 180 / Math.PI;

		    //var Degree = Math.atan2(msg[item].Longitude - msg[item + 1].Longitude, msg[item].Latitude - msg[item + 1].Latitude) * 180 / Math.PI;

		    //GoogleMaps.AddMarker(UserChatMap.GPSTrack[UserChatMap.GPSIndex].Longitude, UserChatMap.GPSTrack[UserChatMap.GPSIndex].Latitude, UserChatMap.GPSTrack[UserChatMap.GPSIndex], true, degg);


	

		},

		LoadGPSTrack: function()
		{
		 

		        var Post = new Object()
		        Post.Action = 'UserMapGetGPSTrack';
		        Post.MapUserName = $('#txtUserChosen').val();
		        Post.StartDTM = $('#txtChatMapStartDTM').val();
		        Post.EndDTM = $('#txtChatMapEndDTM').val();

		    //Post.SearchValue = '';
            

		        $.ajax({
		            type: "POST",
		            contentType: "application/json; charset=utf-8",
		            url: "/API/API.ashx",
		            data: JSON.stringify(Post),
		            dataType: "json",
		            success: function (msg) {

		                if (isEmpty(msg) == true)
		                {
		                    ShowWarningDialog("No Data was found for this time period.  Please try changing your date range.");
		                    $('#cmdPlayPause').val('Play');
		                    return false;
		                }


		                UserChatMap.GPSTrack = msg;



		                return;

		                for (var item in msg)
		                {

		                    //var f = Math.atan2(Longitude, Latitude) * 180 / Math.PI;
		                    // Math.Atan2(start.Y - end.Y, end.X - start.X) * Rad2Deg;

		                    lon1 = msg[item].Longitude;
		                    lat1 = msg[item].Latitude;

		                    lon2 = msg[+item + 1].Longitude;
		                    lat2 = msg[+item + 1].Latitude;

		                    console.log(lon1);
		                    console.log(lat1);
		                    console.log(lon2);
		                    console.log(lat2);

		                    var degg = Math.atan2(lon1 - lon2, lat1 - lat2) * 180 / Math.PI;
		                    //var Degree = Math.atan2(msg[item].Longitude - msg[item + 1].Longitude, msg[item].Latitude - msg[item + 1].Latitude) * 180 / Math.PI;


		                    GoogleMaps.AddMarker(msg[item].Longitude, msg[item].Latitude, msg[item], true, degg);

		                    //GoogleMaps.AddCircle(msg[item].GPSLongitude, msg[item].GPSLatitude, msg[item]);


		                    //const double Rad2Deg = 180.0 / Math.PI;
		                    

		                    //Math.Atan2(start.Y - end.Y, end.X - start.X) * Rad2Deg;

		                }


		            },
		            error: function (msg) {
		                ShowWarningDialog('A error has occured.');
		                Common.LogAjaxError('UserChatMap.ascx', 'LoadUserLocations', msg.responseJSON.Message);
		            },
		            async: false
		        });
		    },

		PlayTrackOLD: function()
		{

		    UserChatMap.LoadGPSTrack();

		    UserChatMap.GPSIndex = -1;
		    GoogleMaps.ClearMarkers();
		    // Clear Markers
            UserChatMap.Timer = setInterval(function () {
		        UserChatMap.TickGPSMap();

            }, UserChatMap.TrackInterval);
		},


        PlayPauseTrack: function()
        {

            if ($('#txtChatMapStartDTM').val() == 'Start Date' || $('#txtChatMapEndDTM').val() == 'End Date')
            {
                ShowWarningDialog("Please select a Start and End Date");
                return;
            }


            if (UserChatMap.GPSTrack == null)
            {
                if (UserChatMap.LoadGPSTrack() == false)
                    return;
                UserChatMap.GPSIndex = -1;

                // Clear Markers
                GoogleMaps.ClearMarkers();


            }

            if (UserChatMap.PlayingTrack == true)
            {
                $('#cmdPlayPause').val('Play')
                UserChatMap.PlayingTrack = false;
            }
            else
            {
                $('#cmdPlayPause').val('Pause')
                UserChatMap.PlayingTrack = true;
                setTimeout(UserChatMap.TickGPSMap, 500);
            }



            
            

            //}, UserChatMap.TrackInterval);
        },

		RestartTrack: function ()
		{
		    //clearInterval(UserChatMap.Timer);
		    UserChatMap.PlayingTrack = false;
		    UserChatMap.GPSTrack = null;
		    UserChatMap.PlayPauseTrack();
		},

		SetTickrate: function(Interval)
		{
		    UserChatMap.TrackInterval = (3000 - Interval);
		},

		LoadIssues: function()
		{
		
		    var Post = new Object()
		    Post.Action = 'UserMapGetIssues';
		    Post.SearchValue = '';

		    $.ajax({
		        type: "POST",
		        contentType: "application/json; charset=utf-8",
		        url: "/API/API.ashx",
		        data: JSON.stringify(Post),
		        dataType: "json",
		        success: function (msg) {

		            for (var item in msg)
		            {
		                //GoogleMaps.AddMarker(msg[item].GPSLongitude, msg[item].GPSLatitude, msg[item], true);

		                //Action, Longitude, Latitude, Rotation, MarkerObjectData, AutoZoom
		                GoogleMaps.AddMarker(msg[item].IssueStatus, msg[item].GPSLongitude, msg[item].GPSLatitude, 0, msg[item], true);


		            }


		        },
		        error: function (msg) {
		            ShowWarningDialog('A error has occured.');
		            Common.LogAjaxError('UserChatMap.ascx', 'LoadUserLocations', msg.responseJSON.Message);
		        },
		        async: false
		    });
		},
	

        
	addPushPin: function (id, latitude, longitude, label, level, User)
	{
	    var pinicon = "";
	    if (level == 1)
	    {
	        pinicon = "/Images/PushPinRed.png"
	    }

	    if (level == 2)
	    {
	        pinicon = "/Images/PushPinYellow.png"
	    }

	    if (level == 3)
	    {
	        pinicon = "/Images/PushPinGreen.png"
	    }

	    var pushpinOptions = { icon: pinicon, text: label, visible: true, textOffset: offset };

	    var offset = new Microsoft.Maps.Point(0, 5);


	    var pushpin = new Microsoft.Maps.Pushpin(map.getCenter(), pushpinOptions);

	    Microsoft.Maps.Events.addHandler(pushpin, 'click', GuardClicked);

	    pushpin.id = id;
	    pushpin.user = User;

	    pushpin.setLocation(new Microsoft.Maps.Location(latitude, longitude));

	    // Create the infobox for the pushpin
	    map.entities.push(pushpin);
	}




	}

	GuardClicked = function (e, s) {
	    var obj = e.target;
	    var info = "Events info - " + e.eventName + "\n";
	    info += "Target  : " + obj.toString();

	    pinInfobox.setLocation(e.target.getLocation());
	    pinInfobox.setOptions({ visible: true });

	    //alert(s);
	    //alert(obj.user.FirstName + ' ' + obj.user.LastName + ' - ' + obj.user.LongPropertyName);
//	    pinInfobox.setLocation(e.target.getLocation());
	    //pinInfobox.setOptions({ visible: true });
	    //CheckForUpdate(obj.id);

	    var usr = null;

	    var Post = new Object()
	    Post.Action = 'UserMapGetDetail';
	    Post.MapUserName = obj.user.UserName;

	    $.ajax({
	        type: "POST",
	        contentType: "application/json; charset=utf-8",
	        url: "/API/API.ashx",
	        data: JSON.stringify(Post),
	        dataType: "json",
	        success: function (msg)
	        {
	            usr = msg[0];
	        }

	    ,
	        error: function (msg) {
	        ShowWarningDialog('A error has occured.');
	        Common.LogAjaxError('UserChatMap.ascx', 'GuardClicked', msg.responseJSON.Message);
	    },
	        async: false
	    });

	    setInfoBoxHTMLContent(obj, usr);

	}


	function setInfoBoxHTMLContent(obj, usr) {

	    pinInfobox.setOptions({ visible: true, showCloseButton: true });
	    var s = '<div class="GPSInfoBoxdiv">';
	    s += "<button style='float: right;' onclick='pinInfobox.setOptions({ visible: false});' type='button' class='SaveButton'>X</button>";
	    s += '<span class="GPSInfoBoxTitle">' + obj.user.FullName + '</span><br><br>';


	    s += '<div class="GPSInfoBoxBody">' + obj.user.LongPropertyName + '</div>';
	    s += '<div class="GPSInfoBoxBody">Arrived At: ' + obj.user.ArrivedAtPropertyDTM + '</div>';
	    if (isEmpty(obj.user.DevicePhoneNumber) == false)
	    {
	        s += '<div class="GPSInfoBoxBody">Phone Number: ' + obj.user.DevicePhoneNumber + '</div>';
	    }

	    s += '';
	    s += '';
	    s += '</div>';

        //alert(usr.UserName)


	    pinInfobox.setHtmlContent(s);

	    //map.entities.clear();
	    //var infoboxOptions = { width: 200, height: 100, showCloseButton: true, zIndex: 0, offset: new Microsoft.Maps.Point(10, 0), showPointer: true };
	    //var defaultInfobox = new Microsoft.Maps.Infobox(map.getCenter(), infoboxOptions);
	    //map.entities.push(defaultInfobox);
	    //defaultInfobox.setHtmlContent('<div id="infoboxText" style="background-color:White; border-style:solid;border-width:medium; border-color:DarkOrange; min-height:100px; width:240px;"><b id="infoboxTitle" style="position:absolute; top:10px; left:10px; width:220px;">myTitle</b><a id="infoboxDescription" style="position:absolute; top:30px; left:10px; width:220px;">Description</a></div>');
	}



	var pinInfobox = null;

	

</script>

<style>
  
.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}
</style>
<div id="divUserChatMapMask" class="PopupMask"></div>
<div id="divUserChatMap" style="width: 900px; display: none;">

	<div class="PopupTitleBar">
		<label>Live User Map</label>
		<input type="button" value="X" onclick="UserChatMap.Close();">
	</div>

	<div class="PopupBody" style="padding: 10px;">
        	<div id="myMapo" style="width: 880px; height: 600px; position: relative; border: 1px solid gray;">
		    </div>
	</div>

    <div id="chicken">

        <select id="cboUserMapProperty" style="display: block; width: 180px;" onchange="UserChatMap.LocateAddress();">

        </select>

        <select id="cboUserMapGuard" style="display: block; width: 180px;" onchange="UserChatMap.LocateUser();">

        </select>

        <label style="font-size: medium; line-height: 30px;">Property Outlines<input type="Checkbox"></label>

        <img src="./Monitor_files/Refreshsm.png" style="vertical-align: middle; max-height: 30px; max-width: 30px;" onclick="UserChatMap.ReloadMap();" title="Reloads Map">

        <hr>

        <input id="txtUserChosen" type="text" class="FilterWatermark" style="width: 180px; cursor: pointer;" readonly="" onclick="UserChatMap.ChooseUser();" placeholder="Choose User">
        <label id="txtClearUserChosen" class="WarningLabel" onclick="UserChatMap.ClearUserChosen();" title="Clears this field" style="cursor: pointer; position: fixed; margin-left: -25px; margin-top: 4px; display: none; ">X</label>  
        <input id="txtChatMapStartDTM" style="display: block;" type="text" value="Start Date">
        <label id="lblChatCurrentDTM" class="label-textbox" style="display: block; font-size: 14px;"></label>
        
        <input id="txtChatMapEndDTM" style="display: block;" type="text" value="End Date">
       

        <label style="display: block; font-size: medium; line-height: 30px;">Hide Footprints<input type="Checkbox" id="chkHideFootprints"></label>

        
        <label style="display: block; font-size: medium; line-height: 30px;">Playback Speed</label>

        <input type="range" min="50" max="3000" value="2500" step="100" class="slider" id="myRange" style="width: 190px; display: block;" oninput="UserChatMap.SetTickrate(this.value);">
        
        <br>
        
        
        

        <input type="button" value="Play" style="width: 92px;" onclick="UserChatMap.PlayPauseTrack();" id="cmdPlayPause">
        
        <input type="button" value="Restart" style="width: 92px;" onclick="UserChatMap.RestartTrack();">


    </div>

</div>


 

    


<script lang="javascript">

	

	$(function ()
	{

	});

	var TimeCardGPSMap = {

	    CallBackOnClose: null,
	    gpsMap: null,
	    gpsFence: null,
	    gpsMarker: null,
	    gpsClockInMarker: null,
        gpsClockOutMarker: null,
	    gpsLat: 0,
	    gpsLon: 0,
	    PropertyAddressIDFK: 0,
	    gpsRadius: 50,
	    EditPropertyIDFK: 0,

	    CallBackOnClose: null,
	    ClockInLocation: null,
	    ClockOutLocation: null,

	    Open: function (CallBack, ClockInGPSLongitude, ClockInGPSLatitude, ClockOutGPSLongitude, ClockOutGPSLatitude) {
	        this.Clear();
	        this.CallBackOnClose = CallBack;
	        Common.Show('divTimeCardGPSMap', 18000);
	        
	        TimeCardGPSMap.ClockInLocation = new google.maps.LatLng({ lat: parseFloat(ClockInGPSLatitude), lng: parseFloat(ClockInGPSLongitude) });
	        TimeCardGPSMap.ClockOutLocation = new google.maps.LatLng({ lat: parseFloat(ClockOutGPSLatitude), lng: parseFloat(ClockOutGPSLongitude) });


	        $(document).off().keyup();

	        $(document).on().keyup(function (e) {
	            $(document).off().keyup();
	            if (e.which == 27)
	                TimeCardGPSMap.Close();
	        });

	        TimeCardGPSMap.InitMap();
	    },

	    Close: function () {
	        Common.Pop('divTimeCardGPSMap');
	        this.Clear();
	        //this.CallBackOnClose();

	    },

	    Clear: function () {
	    },

	    InitMap: function () {

	        


	        // Init the google map
	        TimeCardGPSMap.gpsMap = new google.maps.Map(document.getElementById('gpsTimecardMap'), {
	            center: TimeCardGPSMap.ClockInLocation,// { lat: 38.4390123, lng: -97.2698398 },
	            zoom: 10,
	            mapTypeId: google.maps.MapTypeId.TERRAIN
	        });

	       // var Icon = new GIcon();
	        //Icon.image = "PushPinGreen.png";
	        //Icon.iconSize = new GSize(20, 34);
	        //Icon.shadow = "myshadow.png";
	        //Icon.shadowSize = new GSize(36, 34);
	        //Icon.iconAnchor = new GPoint(5, 34);
	        //Icon.infoWindowAnchor = new GPoint(5, 2);
	        //Icon.transparent = "mytran.png";

	        // Init the google map GPS marker
	        TimeCardGPSMap.gpsClockInMarker = new google.maps.Marker({
	            position: TimeCardGPSMap.ClockInLocation,
	            map: TimeCardGPSMap.gpsMap,
	            draggable: false,
	            title: "Clocked In",
	            visible: true,
	            icon: '/Images/PushPinGreen.png'
	        });

	        TimeCardGPSMap.gpsClockOutMarker = new google.maps.Marker({
	            position: TimeCardGPSMap.ClockOutLocation,
	            map: TimeCardGPSMap.gpsMap,
	            draggable: false,
	            title: "Clocked Out",
	            visible: true,
	            icon: {
	                url: "/Images/PushPinFinish2.png",
	                anchor: new google.maps.Point(25, 39)
	            }//Icon//'/Images/PushPinFinish.png'
                    
	        });

	        TimeCardGPSMap.DrawCircle(TimeCardGPSMap.ClockInLocation);
	        TimeCardGPSMap.DrawCircle(TimeCardGPSMap.ClockOutLocation);

	        // Init the google map Circle/Radius
	        //TimeCardGPSMap.gpsFence = new google.maps.Circle({
	        //    strokeColor: '#6bfd61',
	        //    strokeOpacity: 0.8,
	        //    strokeWeight: 2,
	        //    fillColor: '#edf3b2',
	        //    fillOpacity: 0.5,
	        //    map: TimeCardGPSMap.gpsMap,
	        //    center: ClockInLocation,
	        //    radius: 250,
	        //    visible: true
	        //});http://devx.silvertracker.local/images/PushPinGreen.png

	        //http://devx.silvertracker.local/images/PushPinFinish.png
	       
	        
	    },

	    DrawCircle: function (Location)
	    {
	        var f = new google.maps.Circle({
	            strokeColor: '#6bfd61',
	            strokeOpacity: 0.8,
	            strokeWeight: 2,
	            fillColor: '#edf3b2',
	            fillOpacity: 0.5,
	            map: TimeCardGPSMap.gpsMap,
	            center: Location,
	            radius: 250,
	            visible: true
	        });

	    }


	}
		

	

</script>

<div id="divTimeCardGPSMapMask" class="PopupMask"></div>
<div id="divTimeCardGPSMap" style="width: 975px; display: none;">

	<div class="PopupTitleBar">
		<label>Time Card GPS Map</label>
		<input type="button" value="X" onclick="TimeCardGPSMap.Close();">
	</div>

	<div class="PopupBody" style="padding: 10px;">

        <div id="gpsTimecardMap" style="float: left; width: 950px; height: 550px; opacity: .7;"></div>
 

        <div style="clear: both;"></div>

	</div>

</div>


    


<script lang="javascript">



    $(function () {

    });

    var IssueSummary = {

        CallBackOnClose: null,

        Open: function (CallBack) {
            this.Clear();
            this.CallBackOnClose = CallBack;
            Common.Show('divIssueSummary', 17000);

            $(document).off().keyup();

            $(document).on().keyup(function (e) {
                $(document).off().keyup();
                if (e.which == 27)
                    IssueSummary.Close();
            });

            IssueSummary.InitSummary();
        },

        Close: function () {
            Common.Pop('divIssueSummary');
            this.Clear();
            //this.CallBackOnClose();

        },

        Clear: function () {
        },

        Data: function () {
            var Post = new Object()
            Post.Param = Parameter1;

            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "/API/API.ashx",
                data: JSON.stringify(Post),
                dataType: "json",
                success: function (msg) {


                    for (var item in msg)
                    {
                        // Objects - msg[item].PropertyIDFK
                    }

                    //if (msg.length == 0)
                    //ShowWarningDialog('No Items were found for this search.');

                },
                error: function (msg) {
                    ShowWarningDialog('A error has occured.');
                }
            });

        }

	,






        // On load, do this stuff
        InitSummary: function () {
            $("#tblIssueSummarySecurity tr:gt(0)").remove();
            $("#tblIssueSummaryParking tr:gt(0)").remove();
            $("#tblIssueSummaryMaintenance tr:gt(0)").remove();


            var Summary = new Object();
            Summary.PropertyIDFK = 0;

            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "/WebServices/Monitor.asmx/GetIssueSummary",
                data: JSON.stringify(Summary),
                dataType: "json",
                success: function (msg) {

                    var obj = JSON && JSON.parse(msg.d);
                    IssueSummary.LoadIssueSummary(obj);

                },
                error: function (msg) {
                    ShowWarningDialog('Error getting Issue Summary');
                    Common.LogAjaxError('wucIssueSummary.ascx', 'InitSummary', msg.responseJSON.Message);
                }
            });
        },

        LoadIssueSummary: function (obj) {

            for (var ff in obj)
            {
                switch (obj[ff].IssueType)
                {
                    case 'Security':
                        var table = document.getElementById('tblIssueSummarySecurity');
                        IssueSummary.LoadSummary(obj[ff], table)
                        break;

                    case 'Parking':
                        var table = document.getElementById('tblIssueSummaryParking');
                        IssueSummary.LoadSummary(obj[ff], table)
                        break;

                    case 'Maintenance':
                        var table = document.getElementById('tblIssueSummaryMaintenance');
                        IssueSummary.LoadSummary(obj[ff], table)
                        break;
                }
            }
        },


        LoadSummary: function (obj, table) {

            //var table = document.getElementById('tblIssueSummarySecurity');
            var row = table.insertRow(table.rows.length); // Security

            IssueSummary.AddCell(row, obj.IssueLevel);
            IssueSummary.AddCell(row, obj.Unassigned);
            IssueSummary.AddCell(row, obj.Open);
            IssueSummary.AddCell(row, obj.ZeroThree);
            IssueSummary.AddCell(row, obj.ThreeSix);
            IssueSummary.AddCell(row, obj.SixTwelve);
            IssueSummary.AddCell(row, obj.TwelveTwentyFour);
            IssueSummary.AddCell(row, obj.TwentyFourPlus);








        },



        AddCell: function (row, text) {
            var cellIcon = row.insertCell();
            cellIcon.style.textDecoration = 'none';
            var lt = document.createTextNode(text);
            cellIcon.appendChild(lt);

        }

    }


</script>

<div id="divIssueSummaryMask" class="PopupMask"></div>
<div id="divIssueSummary" style="width: 900px; display: none;">
    <div class="PopupTitleBar">
        <label>Issue Summary</label>
        <div class="CloseIcon" onclick="IssueSummary.Close();"></div>
    </div>

    <div class="PopupBody">
        <label class="LabelColor1" style="font-size: medium;">Security</label>
        <table id="tblIssueSummarySecurity" class="SummaryTable">
            <tbody><tr>
                <th>Issue Level</th>
                <th>Issues Unassigned</th>
                <th>Open Total</th>
                <th>0-3 Hours</th>
                <th>3-6 Hours</th>
                <th>6-12 Hours</th>
                <th>12-24 Hours</th>
                <th>24+ Hours</th>
            </tr>
        </tbody></table>


        <label class="LabelColor1" style="font-size: medium;">Parking</label>
        <table id="tblIssueSummaryParking" class="SummaryTable">
            <tbody><tr>
                <th>Issue Level</th>
                <th>Issues Unassigned</th>
                <th>Open Total</th>
                <th>0-3 Hours</th>
                <th>3-6 Hours</th>
                <th>6-12 Hours</th>
                <th>12-24 Hours</th>
                <th>24+ Hours</th>
            </tr>
        </tbody></table>


        <label class="LabelColor1" style="font-size: medium;">Maintenance</label>
        <table id="tblIssueSummaryMaintenance" class="SummaryTable">
            <tbody><tr>
                <th>Issue Level</th>
                <th>Issues Unassigned</th>
                <th>Open Total</th>
                <th>0-3 Hours</th>
                <th>3-6 Hours</th>
                <th>6-12 Hours</th>
                <th>12-24 Hours</th>
                <th>24+ Hours</th>
            </tr>
        </tbody></table>
    </div>


</div>

    
    


<script lang="javascript">

	

	$(function ()
	{

	});

	var TaskSummary = {

		CallBackOnClose: null,

		Open: function(CallBack)
		{
			this.Clear();
			this.CallBackOnClose = CallBack;	
			Common.Show('divTaskSummary', 17000);

			$(document).off().keyup();

			$(document).on().keyup(function (e)
			{
				$(document).off().keyup();
				if (e.which == 27)
					TaskSummary.Close();
			});

			TaskSummary.InitTaskSummary();
		},

		Close: function()
		{
			Common.Pop('divTaskSummary');
			this.Clear();
			//this.CallBackOnClose();
			
		},

		Clear: function()
		{
		},

		InitTaskSummary: function()
	    {

		$("#tblOpenTasks tr:gt(0)").remove();

        var Tasks = new Object();

        Tasks.PropertyIDFK = 0;

        $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: "/WebServices/Monitor.asmx/GetTaskSummary",
            data: JSON.stringify(Tasks),
            dataType: "json",
            success: function (msg)
            {
                var obj = JSON && JSON.parse(msg.d);

                for (var ff in obj)
                {
                    TaskSummary.AddTaskRow(obj[ff]);
                }
            },
            error: function (msg)
            {
                ShowWarningDialog('Error in getting Tasks');
                Common.LogAjaxError('TaskSummary.ascx', 'InitTaskSummary', msg.responseJSON.Message);
            }
        });


        },

    	AddTaskRow: function(obj)
    {

        var table = document.getElementById('tblOpenTasks');
        var row = table.insertRow(table.rows.length);
        var cellIcon = row.insertCell(0);
        cellIcon.style.textDecoration = 'none';
        cellIcon.title = 'Click to open Issue';
        var l = document.createElement('a');
        var lt = document.createTextNode(obj.TaskName);
        cellIcon.style.color = "blue";
        cellIcon.style.cursor = 'pointer';
        cellIcon.style.textAlign = 'left';
        l.appendChild(lt);
        l.onclick = function () { ShowIssueDetail(obj.IssueIDFK); };
        cellIcon.appendChild(l);

        TaskSummary.BuildTextTableCell(row, 1, '175px', obj.IssueName + ' (' + obj.IssueLevel + ')', 'left');
        TaskSummary.BuildTextTableCell(row, 2, '175px', obj.PropertyName, 'left');
        TaskSummary.BuildTextTableCell(row, 3, '175px', obj.IssueStatus, 'center');

        TaskSummary.BuildTextTableCell(row, 4, '175px', obj.CreatedDTM, 'center', obj.TaskAge + ' Old');

	
        TaskSummary.BuildTextTableCell(row, 5, '175px', obj.AssignedToUsername, 'center');

    },

	    BuildTextTableCell: function(TableRow, CellNumber, Width, Text, Align, Title)
    {
        var cell = TableRow.insertCell(CellNumber);
        var n = document.createTextNode(Text);
        cell.style.textAlign = Align;
        cell.title = Title || '';

        cell.appendChild(n);
    }

	}

</script>

<div id="divTaskSummaryMask" class="PopupMask"></div>
<div id="divTaskSummary" style="width: 975px; display: none;">

    <div class="PopupTitleBar">
        <label>Task Summary</label>
        <div class="CloseIcon" onclick="TaskSummary.Close();"></div>
    </div>

    <div class="PopupBody">
        <table id="tblOpenTasks" class="SummaryTable" style="width: 945px;">
            <tbody><tr>
                <th>Task Name</th>
                <th>Issue Type</th>
                <th>Property Name</th>
                <th>Status</th>
                <th>Created Date/Age</th>
                <th>Assigned To</th>
            </tr>
        </tbody></table>
    </div>
</div>



    


<script lang="javascript">



    $(function () {

    });

    var CheckpointSummary = {

        CallBackOnClose: null,

        Open: function (CallBack) {
            this.Clear();
            this.CallBackOnClose = CallBack;
            Common.Show('divCheckpointSummary', 17000);

            $(document).off().keyup();

            $(document).on().keyup(function (e) {
                $(document).off().keyup();
                if (e.which == 27)
                    CheckpointSummary.Close();
            });

            CheckpointSummary.InitCheckpointSummary();
        },

        Close: function () {
            Common.Pop('divCheckpointSummary');
            this.Clear();
            //this.CallBackOnClose();

        },

        Clear: function () {
        },


        InitCheckpointSummary: function () {

            $("#tblCheckpointSummary tr:gt(0)").remove();

            var Checkpoints = new Object();

            Checkpoints.PropertyIDFK = 0;

            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "/WebServices/Monitor.asmx/GetCheckpointSummary",
                data: JSON.stringify(Checkpoints),
                dataType: "json",
                success: function (msg) {
                    var obj = JSON && JSON.parse(msg.d);

                    for (var ff in obj)
                    {
                        CheckpointSummary.AddCheckpointRow(obj[ff]);
                    }
                },
                error: function (msg) {
                    ShowWarningDialog('Error in getting Checkpoints');
                    Common.LogAjaxError('wucCheckpointSummary.ascx', 'InitCheckpointSummary', msg.responseJSON.Message);
                }
            });


        },

        AddCheckpointRow: function (obj) {

            var table = document.getElementById('tblCheckpointSummary');
            var row = table.insertRow(table.rows.length);

            // Checkpoint Name
            var cellCheckpointName = row.insertCell(0);
            var n = document.createElement("input")
            n.style.backgroundColor = "transparent";
            n.style.width = '175px';
            n.style.margin = '0px';
            n.style.border = '0px';
            n.value = obj.CheckpointName;
            n.title = "Checkpoint Location:  <span style='color: orange;'>" + obj.Location + "</span><br>"
            n.title += "Checkpoint Notes:  <span style='color: orange;'>" + obj.CheckpointNotes + "</span><br>"
            cellCheckpointName.appendChild(n);

            // Issue Type
            var cellPropertyName = row.insertCell(1);
            var n = document.createElement("input")
            n.style.backgroundColor = "transparent";
            n.style.width = '175px';
            n.style.margin = '0px';
            n.style.border = '0px';
            n.value = obj.IssueName;
            cellPropertyName.appendChild(n);

            // Property Name
            var cellPropertyName = row.insertCell(2);
            var n = document.createElement("input")
            n.style.backgroundColor = "transparent";
            n.style.width = '175px';
            n.style.margin = '0px';
            n.style.border = '0px';
            n.value = obj.PropertyName;
            cellPropertyName.appendChild(n);

            // Last Hit Date
            var cellLastHitDate = row.insertCell(3);
            var n = document.createElement("input")
            n.style.backgroundColor = "transparent";
            n.style.width = '175px';
            n.style.margin = '0px';
            n.style.border = '0px';
            n.style.textAlign = 'center';
            n.value = FormatDate(obj.LastHitDTM, 'Short');
            cellLastHitDate.appendChild(n);

            // Last Hit By
            var cellLastHitBy = row.insertCell(4);
            var n = document.createElement("input")
            n.style.backgroundColor = "transparent";
            n.style.width = '175px';
            n.style.margin = '0px';
            n.style.border = '0px';
            n.style.textAlign = 'center';
            n.value = obj.LastHitByUserName;
            cellLastHitBy.appendChild(n);

        }

    }

</script>


<style>


</style>

<div id="divCheckpointSummaryMask" class="PopupMask"></div>
<div id="divCheckpointSummary" style="width: 975px; display: none;">

    <div class="PopupTitleBar">
        <label>Checkpoint Summary</label>
        <div id="cmdCloseCheckpointSummary" class="CloseIcon" onclick="CheckpointSummary.Close();"></div>
    </div>

    <div class="PopupBody" style="height: 500px; overflow: auto; clear: both; ">
        <table id="tblCheckpointSummary" class="SummaryTable" style="width: 945px;">
            <tbody><tr>
                <th>Checkpoint Name</th>
                <th>Issue Type</th>
                <th>Property Name</th>
                <th>Last Hit Date</th>
                <th>Last Hit By</th>
            </tr>
        </tbody></table>
    </div>
</div>





    


<script lang="javascript">



    $(function () {

    });

    var PhotoViewer = {

        CallBackOnClose: null,
        IssueIDFK: 0,
        Photos: [],
        CurrentPhotoIndex: 0,

        Open: function (e, IssueID, TrackingNumber, NoteIDFK, CallBack) {
            if (isEmpty(e) == false) {
                e.stopPropagation();
            }

            this.Clear();
            this.CallBackOnClose = CallBack;
            PhotoViewer.IssueIDFK = IssueID;

            Common.Show('divPhotoViewer', 120000);

            $(document).off().keyup();

            $(document).on().keyup(function (e) {
                $(document).off().keyup();
                if (e.which == 27)
                    PhotoViewer.Close();
            });

            PhotoViewer.LoadPhotoList(IssueID, TrackingNumber, NoteIDFK);
        },

        Close: function () {
            Common.Pop('divPhotoViewer');
            this.Clear();
        },

        Clear: function () {
            PhotoViewer.PhotoCount = 0;
            PhotoViewer.PicID = 0;
            PhotoViewer.CurrentPhoto = 1;
            PhotoViewer.Photos = [];
        },

        NextImage: function () {
            PhotoViewer.CurrentPhotoIndex += 1;
            if (PhotoViewer.CurrentPhotoIndex >= PhotoViewer.Photos.length) {
                PhotoViewer.CurrentPhotoIndex = PhotoViewer.Photos.length - 1;
            }

            PhotoViewer.ShowPhoto(PhotoViewer.CurrentPhotoIndex);

            return false;

        },

        PreviousImage: function () {
            PhotoViewer.CurrentPhotoIndex -= 1;
            if (PhotoViewer.CurrentPhotoIndex < 0) {
                PhotoViewer.CurrentPhotoIndex = 0;
            }

            PhotoViewer.ShowPhoto(PhotoViewer.CurrentPhotoIndex);

            return false;
        },

        LoadPhotoList: function (IssueIDFK, TrackingNumber, NoteIDFK) {
            {
                $('#imgPhotoViewer').attr("src", '');

                var Post = new Object();
                Post.Action = "GetIssueDetailNotes";
                Post.IssueIDFK = IssueIDFK;
                Post.NoteType = 'JPG';

                $.ajax({
                    type: "POST",
                    contentType: "application/json; charset=utf-8",
                    url: "/API/API.ashx",
                    data: JSON.stringify(Post),
                    dataType: "json",
                    success: function (msg) {

                        for (var item in msg) {
                            var ph = [];
                            ph.PhotoURL = '/BinaryFiles/GetBinaryFile.ashx?TrackingNumber=' + TrackingNumber + '&NoteIDFK=' + msg[item].ID;
                            ph.NoteIDFK = msg[item].ID;
                            PhotoViewer.Photos.push(ph);
                        }

                        PhotoViewer.CurrentPhotoIndex = PhotoViewer.GetCurrentPhotoIndex(NoteIDFK);
                        PhotoViewer.ShowPhoto(PhotoViewer.CurrentPhotoIndex);
                    },
                    error: function (msg) {
                        ShowWarningDialog('A error has occured.');
                    }
                });

            }

        },

        GetCurrentPhotoIndex: function (NoteIDFK) {

            var PhotoIndex = 0;

            if (isEmpty(NoteIDFK) == false) {
                for (var p in PhotoViewer.Photos) {
                    if (PhotoViewer.Photos[p].NoteIDFK == NoteIDFK) {
                        PhotoIndex = p;
                        break;
                    }
                }

            }

            return PhotoIndex;
        },

        ShowPhoto: function (PhotoIndex) {
            if (PhotoViewer && PhotoViewer.Photos.length > PhotoIndex && PhotoIndex >= 0) {
                $('#imgPhotoViewer').attr("src", PhotoViewer.Photos[PhotoIndex].PhotoURL);

                switch (PhotoViewer.Photos.length) {
                    case 0:
                        $('#lblPhotoViewerTitle').html('No Photos');
                        break;

                    case 1:
                        $('#lblPhotoViewerTitle').text('Only Photo');
                        break;

                    default:
                        $('#lblPhotoViewerTitle').text('Photo Count ' + (parseInt(PhotoIndex) + 1) + '/' + PhotoViewer.Photos.length);
                        break;
                }
            }
        }

    }

</script>

<div id="divPhotoViewerMask" class="PopupMask"></div>
<div id="divPhotoViewer" style="display: none;">

    <div class="PopupTitleBar">
        <label id="lblPhotoViewerTitle"></label>
        <div class="CloseIcon" onclick="PhotoViewer.Close();"></div>
    </div>

    <div class="PopupBody" style="padding: 10px;">
        <div style="text-align: center;">
            <img src="./Monitor_files/PreviousNormal.png" style="padding-bottom: 220px; cursor: pointer;" onclick="PhotoViewer.PreviousImage();">
            <img id="imgPhotoViewer" height="480" width="640" src="https://demo2.silvertracker.net/AdminCustomer/Issues/Monitor.aspx" style="border: 1px solid silver; border-radius: 2px;">
            <img src="./Monitor_files/NextNormal.png" style="padding-bottom: 220px; cursor: pointer;" onclick="PhotoViewer.NextImage();">
        </div>
    </div>

</div>



    
    


<script lang="javascript">

	

	$(function ()
	{

	});

	var VehicleSearch = {

		CallBackOnClose: null,

		Open: function(CallBack)
		{
			this.Clear();
			this.CallBackOnClose = CallBack;	
			Common.Show('divVehicleSearch', 21000);

			$(document).off().keyup();

			$(document).on().keyup(function (e)
			{
				$(document).off().keyup();
				if (e.which == 27)
					VehicleSearch.Close();
			});


			//VehicleSearch.FindVehicle();



		},

		Close: function()
		{
			Common.Pop('divVehicleSearch');
			this.Clear();
			//this.CallBackOnClose();
			
		},

		Clear: function()
		{
		    $('#divVehicleResults').empty();
		    $('#txtLicensePlate').val('');
		    $('#txtPermitNumber').val('');
		    $('#txtVINSearch').val('');
		    //scboVehiclePropertyIDFK

		},

		Data: function()
		{
			var Post = new Object()
			Post.Param = Parameter1;

			$.ajax({
				type: "POST",
				contentType: "application/json; charset=utf-8",
				url: "/API/API.ashx",
				data: JSON.stringify(Post),
				dataType: "json",
				success: function (msg)
				{
	

					for (var item in msg)
					{
						// Objects - msg[item].PropertyIDFK
					}

					//if (msg.length == 0)
						//ShowWarningDialog('No Items were found for this search.');

				},
				error: function (msg)
				{
					ShowWarningDialog('A error has occured.');
				}
			});

		},

		FindVehicle: function()
		{
		    $('#divVehicleResults').empty();

		    StartSpinner();
		    var Vehicle = new Object();

		    Vehicle.LicensePlate = $('#txtLicensePlate').val();
		    Vehicle.PermitNumber = $('#txtPermitNumber').val();
		    Vehicle.VIN = $('#txtVINSearch').val();
		    Vehicle.PartialMatch = true;// $('#chkPartialMatch').prop('checked');
		    Vehicle.PropertyIDFK = $('#scboVehiclePropertyIDFK').val();

		    $.ajax({
		        type: "POST",
		        contentType: "application/json; charset=utf-8",
		        url: "/WebServices/Monitor.asmx/VehicleSearch",
		        data: JSON.stringify(Vehicle),
		        dataType: "json",
		        success: function (msg) {

		            var obj = JSON && JSON.parse(msg.d);

		            for (var item in obj)
		            {
		                VehicleSearch.AddVehicleRow(obj[item])
		            }

		        
		            StopSpinner();
		        },
		        error: function (msg) {
		            ShowWarningDialog('A error has occured Performing a Vehicle Search');
		            Common.LogAjaxError('VehicleSearch.ascx', 'FindVehicle', msg.responseJSON.Message);
		            StopSpinner();
		        }
		    });

		},

		AddVehicleRow: function(Vehicle)
		{




//		    var obj = JSON && JSON.parse(msg.d);

//		    var Vehicle = new Object()

//		    Vehicle.VehicleIDFK = 1234567,
//            Vehicle.LicensePlate = 'abc123',
//            Vehicle.PermitNumber = '123131-31313',
//            Vehicle.VIN = '12345abcde1234567',
//            Vehicle.PropertyName = 'Northwestern University',
//            Vehicle.ExpiresDTM = '12/12/2012 10:10 AM'


//		    AddVehicleRow(
//Vehicle.VehicleIDFK,
//Vehicle.LicensePlateNumber,
//Vehicle.PermitNumber,
//Vehicle.VIN,
//Vehicle.PropertyName,
//Vehicle.ExpiresDTM,

		    
		    var template = $('#hidden-template-vehiclesearch').html();

		    $('#divVehicleResults').append(template.format({
		        VEHICLEIDFK: Vehicle.VehicleIDFK,
		        LICENSEPLATE: Vehicle.LicensePlateNumber,
		        PERMITNUMBER: Vehicle.PermitNumber,
		        VIN: Vehicle.VIN,
		        PROPERTYNAME: Vehicle.PropertyName,
		        EXPIRESDTM: FormatDate(Vehicle.ExpiresDTM, 'Short')
		    }));

	//	    Vehicle.IsVehicleActive,
//Vehicle.IsPermitActive


		}

	}

</script>

<div id="divVehicleSearchMask" class="PopupMask"></div>
<div id="divVehicleSearch" style="width: 975px; display: none;">

    <div class="PopupTitleBar">
        <label>Vehicle Search</label>
        <div class="CloseIcon" onclick="VehicleSearch.Close();"></div>
    </div>


    <div class="PopupBody" style="padding: 10px;">

        <div style="margin-top: 15px;" id="divTimeCardHeader">
            <label class="text-center" style="width: 80px;">Vehicle ID</label>
            <label class="text-center" style="width: 100px;">License Plate</label>
            <label class="text-center" style="width: 120px;">Permit Number</label>
            <label class="text-center" style="width: 160px;">VIN</label>
            <label class="text-center" style="width: 260px;">Property Name</label>
            <label class="text-center" style="width: 170px;">Expires</label>
        </div>

        <div id="divVehicleResults" style="overflow: auto; height: 400px; margin-bottom: 10px;">
        </div>

        <div>
            <input type="text" id="txtLicensePlate" class="FilterWatermark" placeholder="License Plate" style="margin-left: 90px; width: 86px;">
            <input type="text" id="txtPermitNumber" class="FilterWatermark" placeholder="Permit Number" style="width: 106px;">
            <input type="text" id="txtVINSearch" class="FilterWatermark" placeholder="VIN" style="width: 146px;">

            <select name="AdminCustomer$ContentPlaceHolder1$VehicleSearch$scboVehiclePropertyIDFK" id="scboVehiclePropertyIDFK" class="FilterWatermark" style="width: 246px;">
	<option selected="selected" value="0">Property Name</option>
	<option value="67667">Alpha Patrol </option>
	<option value="98306">Article Building</option>
	<option value="101893">Austin American Statesman</option>
	<option value="101135">Ben White Bingo</option>
	<option value="67668">Bravo Patrol </option>
	<option value="97891">Cambria Hotel Construction</option>
	<option value="102516">CKD Corporation</option>
	<option value="87290">Corazon Apartments</option>
	<option value="40457">Crossroads Apartments</option>
	<option value="65405">CryoLife</option>
	<option value="26414">Falcon Patrol Office </option>
	<option value="95469">Goodnight Ranch</option>
	<option value="85393">H-Mart</option>
	<option value="98683">Holiday Inn 8111 </option>
	<option value="101724">Lanier Village</option>
	<option value="101824">Manor High School</option>
	<option value="102406">Manor ISD Patrols</option>
	<option value="101825">Manor Middle School</option>
	<option value="101821">Manor Sr. High School</option>
	<option value="97182">Menlo @ Mueller</option>
	<option value="97016">Motel 6 @ IH 35</option>
	<option value="91979">MT Supermarket</option>
	<option value="84390">Officer Vehicle Inspection </option>
	<option value="64356">Pointe On Rio</option>
	<option value="64099">River Ranch</option>
	<option value="99537">Riverside Ben White Assemblage LLC</option>
	<option value="98929">Rosemont </option>
	<option value="101347">Samoo Associates</option>
	<option value="102135">Siena Patio Homes</option>
	<option value="94609">Standby Officer </option>
	<option value="86038">Supervisor </option>
	<option value="93919">Test Property</option>
	<option value="100210">Test2</option>
	<option value="100209">The Grand Tuscany</option>
	<option value="68081">Tropicana 1</option>
	<option value="97474">Ventura Apartments/Quail Creek Apartments</option>
	<option value="40636">Villas Del Sol </option>
	<option value="62045">Wildwood Apartments </option>

</select>

            
            <input id="Button1" type="button" value="Search" onclick="VehicleSearch.FindVehicle();">

        </div>

        <div>Search Results will be capped at 100</div>
        <div>To find a vehicle based on a specific unit/location, please use Unit Maintenance.</div>

    </div>
</div>



<script id="hidden-template-vehiclesearch" type="text/html">

    <div class="divHighlight" style="cursor: pointer;" onclick="VehicleDetails.Open({VEHICLEIDFK}, 100100);">
        <label class="text-center text-mono" style="width: 80px; vertical-align: middle; cursor: pointer;">{VEHICLEIDFK}</label>
        <label class="text-center text-mono" style="width: 100px; vertical-align: middle; cursor: pointer;">{LICENSEPLATE}</label>
        <label class="text-center text-mono" style="width: 120px; vertical-align: middle; cursor: pointer;">{PERMITNUMBER}</label>
        <label class="text-center text-mono" style="width: 160px; vertical-align: middle; cursor: pointer;">{VIN}</label>
        <label class="text-center text-mono" style="width: 260px; vertical-align: middle; cursor: pointer;">{PROPERTYNAME}</label>
        <label class="text-center text-mono" style="width: 170px; vertical-align: middle;  cursor: pointer; font-size: small;">{EXPIRESDTM}</label>
    </div>

</script>


             





    


<script lang="javascript">

    $(function () {

        //vid.pause = function () { AudioEnded() };
    });

    var AudioPlayer = {


        CallBackOnClose: null,
        IssueIDFK: 0,
        Audios: [],
        CurrentAudioIndex: 0,
        vid: null,
        counter: 0,

        Open: function (e, IssueID, TrackingNumber, NoteIDFK, CallBack) {
            if (isEmpty(e) == false)
            {
                e.stopPropagation();
            }

            this.Clear();
            this.CallBackOnClose = CallBack;
            AudioPlayer.IssueIDFK = IssueID;

            Common.Show('divAudioPlayer', 120000);

            $(document).off().keyup();

            $(document).on().keyup(function (e) {
                $(document).off().keyup();
                if (e.which == 27)
                    AudioPlayer.Close();
            });

            AudioPlayer.vid = document.getElementById("audioPlayer");

            // Assign an ontimeupdate event to the <video> element, and execute a function if the current playback position has changed
            AudioPlayer.vid.ontimeupdate = function () { AudioPlayer.PlayingAudio() };
            AudioPlayer.vid.onended = function () { AudioPlayer.AudioEnded() };
            AudioPlayer.vid.abort = function () { AudioPlayer.AudioEnded() };
            AudioPlayer.vid.error = function () { AudioPlayer.AudioEnded() };
            AudioPlayer.vid.stalled = function () { AudioPlayer.AudioEnded() };
            AudioPlayer.vid.suspend = function () { AudioPlayer.AudioEnded() };

            AudioPlayer.LoadAudioList(IssueID, TrackingNumber, NoteIDFK);

        },

        Close: function () {
            Common.Pop('divAudioPlayer');
            this.Clear();
            //this.CallBackOnClose();

        },

        Clear: function () {

            AudioPlayer.Audios = [];
            AudioPlayer.CurrentAudioIndex = 0;
        },

        SetAudioCount: function () {
            switch (AudioPlayer.Audios.length)
            {
                case 0:
                    $('#lblAudioPlayerTitle').html('No Audios');
                    break;

                case 1:
                    $('#lblAudioPlayerTitle').text('Only Audio');
                    break;

                default:
                    $('#lblAudioPlayerTitle').text('Audio Count ' + (AudioPlayer.CurrentAudioIndex + 1) + '/' + AudioPlayer.Audios.length);
                    break;
            }
        },

        LoadAudioList: function (IssueIDFK, TrackingNumber, NoteIDFK) {
            {
                var Post = new Object();
                Post.Action = "GetIssueDetailNotes";
                Post.IssueIDFK = IssueIDFK;
                Post.NoteType = 'MP3';

                $.ajax({
                    type: "POST",
                    contentType: "application/json; charset=utf-8",
                    url: "/API/API.ashx",
                    data: JSON.stringify(Post),
                    dataType: "json",
                    success: function (msg) {

                        for (var item in msg)
                        {
                            var au = [];
                            au.AudioURL = '/BinaryFiles/GetBinaryFile.ashx?TrackingNumber=' + TrackingNumber + '&NoteIDFK=' + msg[item].ID;
                            au.NoteIDFK = msg[item].ID;
                            AudioPlayer.Audios.push(au);
                        }

                        AudioPlayer.CurrentAudioIndex = AudioPlayer.GetCurrentAudioIndex(NoteIDFK);
                        AudioPlayer.LoadAudio(AudioPlayer.CurrentAudioIndex);
                    },
                    error: function (msg) {
                        ShowWarningDialog('A error has occured.');
                    }
                });

            }

        },

        NextAudio: function ()
        {
            AudioPlayer.CurrentAudioIndex += 1;
            if (AudioPlayer.CurrentAudioIndex >= AudioPlayer.Audios.length)
            {
                AudioPlayer.CurrentAudioIndex = AudioPlayer.Audios.length - 1;
            }

            AudioPlayer.LoadAudio(AudioPlayer.CurrentAudioIndex);

            return false;
        },

        PreviousAudio: function ()
        {
            AudioPlayer.CurrentAudioIndex -= 1;
            if (AudioPlayer.CurrentAudioIndex < 0)
            {
                AudioPlayer.CurrentAudioIndex = 0;
            }

            AudioPlayer.LoadAudio(AudioPlayer.CurrentAudioIndex)
            return false;
        },

        LoadAudio: function (AudioIndex)
        {
            //$('#AudioDownload').attr("href", AudioPlayer.Audios[AudioIndex].AudioURL);

            $('#AudioPlayerDownload').attr("href", AudioPlayer.Audios[AudioIndex].AudioURL);
            $('#audioPlayer').attr("src", AudioPlayer.Audios[AudioIndex].AudioURL);

            switch (AudioPlayer.Audios.length)
            {
                case 0:
                    $('#lblAudioPlayerTitle').html('No Audio Files');
                    break;

                case 1:
                    $('#lblAudioPlayerTitle').text('Only Audio File');
                    break;

                default:
                    $('#lblAudioPlayerTitle').text('Audio File Count ' + (parseInt(AudioIndex) + 1) + '/' + AudioPlayer.Audios.length);
                    break;
            }
        },


        GetCurrentAudioIndex: function (NoteIDFK) {

            var AudioIndex = 0;

            if (isEmpty(NoteIDFK) == false)
            {
                for (var p in AudioPlayer.Audios)
                {
                    if (AudioPlayer.Audios[p].NoteIDFK == NoteIDFK)
                    {
                        AudioIndex = p;
                        break;
                    }
                }

            }

            return AudioIndex;
        },


        PlayingAudio: function () {
            // Display the current position of the video in a <p> element with id="demo"
            //document.getElementById("demo").innerHTML = vid.currentTime;

            if ($('#AudioStatusLabel').html() == 'Click down arrow to download file')
                return;

            AudioPlayer.counter += 1;

            if (AudioPlayer.counter == 1)
            {
                $('#AudioStatusLabel').html('Playing File......');
            }

            if (AudioPlayer.counter == 2)
            {
                $('#AudioStatusLabel').html('...Playing File...');
            }
            
            if (AudioPlayer.counter == 3)
            {
                $('#AudioStatusLabel').html('......Playing File');
            }

            if (AudioPlayer.counter > 3)
            {
                AudioPlayer.counter = 0;
            }
            console.log(AudioPlayer.counter);
        },

        AudioEnded: function () {


            $('#AudioStatusLabel').html('Click down arrow to download file');
            counter = 0;
        },

        ReloadPlayer: function () {

        },

        AudioFinished: function () {

        },

        StopAudio: function () {
            $('#audioPlayer').trigger('abort');
            AudioPlayer.AudioEnded();
        },

        PauseAudio: function () {
            $('#audioPlayer').trigger('pause');
            AudioPlayer.AudioEnded();

        },

        PlayAudio: function () {



            $('#audioPlayer').trigger('play');
            $('#AudioStatusLabel').html('Playing File...');


        },

        progressBar: function () {
            console.log(song.currentTime + ' ' + song.duration);
        }

    }

    /*



      //for (var item in msg)
                        //{
                        //    AudioPlayer.Audios.push('/BinaryFiles/GetBinaryFile.ashx?TrackingNumber=' + TrackingNumber + '&NoteIDFK=' + msg[item].ID);

                        //    if (NoteIDFK == msg[item].ID)
                        //        AudioPlayer.LastAudioSource = '/BinaryFiles/GetBinaryFile.ashx?TrackingNumber=' + TrackingNumber + '&NoteIDFK=' + msg[item].ID;
                        //}

                        //AudioPlayer.SetAudioCount();

                        //if (AudioPlayer.LastAudioSource == '')
                        //{
                        //    AudioPlayer.CurrentAudioAudioCount;
                        //    AudioPlayer.LastAudioSource = AudioPlayer.Audios[0];
                        //}

                        //if (msg.length == 0)
                        //ShowWarningDialog('No Items were found for this search.');

     //AudioPlayer.CurrentAudio += 1;
            //if (AudioPlayer.CurrentAudio >= AudioPlayer.Audios.length)
            //{
            //    AudioPlayer.CurrentAudio = AudioPlayer.Audios.length - 1;
            //}


            //$('#audioPlayer').attr("src", AudioPlayer.Audios[AudioPlayer.CurrentAudio]);

            //AudioPlayer.SetAudioCount();

            //AudioPlayer.LastAudioSource = AudioPlayer.Audios[AudioPlayer.CurrentAudio];
            //$('#AudioDownload').attr("href", AudioPlayer.LastAudioSource);
            //return false;


        //AudioPlayer.CurrentAudio -= 1;
            //if (AudioPlayer.CurrentAudio < 0)
            //{
            //    AudioPlayer.CurrentAudio = 0;
            //}

            //$('#audioPlayer').attr("src", AudioPlayer.Audios[AudioPlayer.CurrentAudio]);

            //AudioPlayer.SetAudioCount()

            //AudioPlayer.LastAudioSource = AudioPlayer.Audios[AudioPlayer.CurrentAudio];
            //$('#AudioDownload').attr("href", AudioPlayer.LastAudioSource);
            //return false;

            //$('#AudioPlayerDownload').attr("href", AudioPlayer.LastAudioSource);
            //$('#audioPlayer').attr("src", AudioPlayer.LastAudioSource);
    // Display the current position of the video in a <p> element with id="demo"
    //document.getElementById("demo").innerHTML = vid.currentTime;

    //$("#Player").load("Home/Player", function ()
    //{
    //	$('#audioPlayer').removeAttr("onplay");
    //	$('#audioPlayer').prop("autoplay", true);
    //	//alert('Load was performed.');
    //});

    //$('#audioPlayer').removeAttr("onplay");
    //$('#audioPlayer').prop("autoplay", true);

    //song = document.getElementById('audioPlayer');

    //song.src = LastAudioSource;

    //song.addEventListener('ended', AudioFinished);
    //song.addEventListener("timeupdate", progressBar, true);


    //var song = document.getElementById ('audioPlayer')[0];
    //if (song.paused)
    //	song.play();
    //else
    //	song.pause();

    //NextAudio: function () {
    //    AudioPlayer.CurrentAudio += 1;
    //    if (AudioPlayer.CurrentAudio >= AudioPlayer.Audios.length)
    //    {
    //        AudioPlayer.CurrentAudio = AudioPlayer.Audios.length - 1;
    //    }

    //    //$('#imgAudioPlayer').attr("src", AudioPlayer.Audios[AudioPlayer.CurrentAudio]);

    //    AudioPlayer.SetAudioCount();


    //    return false;

    //},

    //PreviousAudio: function () {
    //    AudioPlayer.CurrentAudio -= 1;
    //    if (AudioPlayer.CurrentAudio < 0)
    //    {
    //        AudioPlayer.CurrentAudio = 0;
    //    }

    //   // $('#imgAudioPlayer').attr("src", AudioPlayer.Audios[AudioPlayer.CurrentAudio]);

    //    AudioPlayer.SetAudioCount()

    //    return false;
    //},

    */

</script>

<div id="divAudioPlayerMask" class="PopupMask"></div>
<div id="divAudioPlayer" style="width: 900px; display: none;">

    <div class="PopupTitleBar">
        <label id="lblAudioPlayerTitle">Audio Player</label>
        <div class="CloseIcon" onclick="AudioPlayer.Close();"></div>
    </div>

    <div class="PopupBody" style="padding: 10px;">


        <div style="text-align: center; margin-top: 75px;">
            <input type="image" class="StandardButton" title="Previous Audio" src="./Monitor_files/Previous.png" style="padding: 15px;" onclick="AudioPlayer.PreviousAudio(); return false;">
            <input type="image" class="StandardButton" title="Play Audio" src="./Monitor_files/Play.png" style="padding: 15px;" onclick="AudioPlayer.PlayAudio(); return false;">
            <input type="image" class="StandardButton" title="Stop Playback" src="./Monitor_files/Stop.png" style="padding: 15px;" onclick="AudioPlayer.PauseAudio(); return false;">

            <a id="AudioPlayerDownload" style="text-decoration: none;" download="AudioFile" href="https://demo2.silvertracker.net/AdminCustomer/Issues/Monitor.aspx">
                <img title="Download Audio File" class="StandardButton" src="./Monitor_files/Download.png" style="padding: 15px;"></a>

            <input type="image" class="StandardButton" title="Next Playback" src="./Monitor_files/Next.png" style="padding: 15px;" onclick="AudioPlayer.NextAudio(); return false;">
            <label class="block" style="padding: 30px;" id="AudioStatusLabel">Click down arrow to download file</label>

        </div>
        <div id="divAudioCount" style="text-align: center; font-size: small; color: black;">
        </div>

        <audio id="audioPlayer" preload="auto" onplay="AudioPlayer.ReloadPlayer()">
            <source src="" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>


    </div>

</div>




    


<script lang="javascript">

	

    $(function ()
    {
        $('#txtNoteFinish').datetimepicker({
            format: 'n/j/Y g:i A',
            formatTime: 'g:i A',
            validateOnBlur: false
        });
    });

	var PropertyNotes = {

		CallBackOnClose: null,

		Open: function(CallBack)
		{
			this.Clear();
			this.CallBackOnClose = CallBack;	
			Common.Show('divPropertyNotes', 17000);

			$(document).off().keyup();

			$(document).on().keyup(function (e)
			{
				$(document).off().keyup();
				if (e.which == 27)
					PropertyNotes.Close();
			});

			PropertyNotes.LoadProperties();

		    // Setup the address change event
			$('#cboProperty').off().change();
			$('#cboProperty').on().change(function () {
			        PropertyNotes.LoadNotes();
			});

		},

		Close: function()
		{
			Common.Pop('divPropertyNotes');
			this.Clear();
			//this.CallBackOnClose();
			
		},

		Clear: function()
		{
		    $('#txtNote').val('');
		    $('#txtNoteFinish').val('');
            
		},

		LoadProperties: function () {
		    var Post = new Object()

		    Post.Action = 'GetPropertyList'
		    Post.SearchBy = '';
		    Post.IncludeInactive = false;

		    $.ajax({
		        type: "POST",
		        contentType: "application/json; charset=utf-8",
		        url: "/API/API.ashx",
		        data: JSON.stringify(Post),
		        dataType: "json",
		        success: function (msg) {
		            {
		                $('#cboProperty').empty();
		                $('#cboProperty').append('<option value="0">Choose</option>');

		                for (var ff in msg)
		                {
		                    $('#cboProperty').append('<option value="' + msg[ff].ID + '">' + msg[ff].PropertyName + '</option>');
		                }
		            }

		        },
		        error: function (msg) {
		            ShowWarningDialog('Error in Loading Property List');
		            Common.LogAjaxError('PropertyAddNew', 'PropertyAddNew', msg.responseJSON.Message);
		        },
		        async: false
		    });
		},

		LoadNotes: function () {
            
		    $('#divNoteList').empty();

		    $('#divNoteHeader').hide();

		    //if ($('#cboProperty').val() == '0')
		    //{
		        
		    //    return false;
		    //}
		    

		    var Post = new Object();

		    Post.Action = 'GetPassdownNotes';
		    Post.PropertyIDFK = $('#cboProperty').val();

		    $.ajax({
		        type: "POST",
		        contentType: "application/json; charset=utf-8",
		        url: "/API/API.ashx",
		        data: JSON.stringify(Post),
		        dataType: "json",
		        success: function (msg) {
		            {

		                for (var ff in msg)
		               {
		                   $('#divNoteHeader').show();

		                   var template = $('#hidden-template-passdown').html();

		                   var Decoration = 'none';
		                   if (msg[ff].Expired == true)
		                       Decoration = 'line-through';

		                   $('#divNoteList').append(template.format({
		                       PROPERTYNAME: msg[ff].PropertyName,
		                       EXPIRES: msg[ff].ExpiresDTM,
		                       NOTE: msg[ff].Note,
		                       NOTEIDFK: msg[ff].ID,
                               DECORATION: Decoration
		                   }));

		                }
		            }

		        },
		        error: function (msg) {
		            ShowWarningDialog('Error in Loading Property List');
		            Common.LogAjaxError('PropertyAddNew', 'PropertyAddNew', msg.responseJSON.Message);
		        },
		        async: false
		    });
		},

		ExpireNote: function(NoteIDFK)
		{

		    var Post = new Object()

		    Post.Action = 'ExpirePassdownNote'
		    Post.NoteIDFK = NoteIDFK;

		    $.ajax({
		        type: "POST",
		        contentType: "application/json; charset=utf-8",
		        url: "/API/API.ashx",
		        data: JSON.stringify(Post),
		        dataType: "json",
		        success: function (msg) {
		            {
		                ShowWarningDialog('Note Expired!');
		                PropertyNotes.LoadNotes();
		            }
		        },
		        error: function (msg) {
		            ShowWarningDialog('Error in Loading Property List');
		            Common.LogAjaxError('PropertyAddNew', 'PropertyAddNew', msg.responseJSON.Message);
		        },
		        async: false
		    });





		    //alert(NoteIDFK);

		},

		AddNewNote: function()
		{

		    if ($('#cboProperty').val() == '0')
		    {
		        ShowWarningDialog('Please Choose a Property to continue.');
		        return false;
		    }

		    if (
                isEmpty($('#txtNote').val()) == true
                ||
                isEmpty($('#txtNoteFinish').val()) == true
                )
		    {
                ShowWarningDialog('A Note and Ending time are required.');
                return false;
		    }
		    
            
		    var Post = new Object();

		    Post.Action = 'AddPassdownNote';
		    Post.PropertyIDFK = $('#cboProperty').val();
		    Post.Note = $('#txtNote').val();
		    Post.ExpiresDTM = $('#txtNoteFinish').val();


		    $.ajax({
		        type: "POST",
		        contentType: "application/json; charset=utf-8",
		        url: "/API/API.ashx",
		        data: JSON.stringify(Post),
		        dataType: "json",
		        success: function (msg) {
		            {
		                ShowWarningDialog('Added Successfully!');
		                PropertyNotes.Clear();
		                PropertyNotes.LoadNotes();
		            }

		        },
		        error: function (msg) {
		            ShowWarningDialog('Error in Loading Property List');
		            Common.LogAjaxError('PropertyAddNew', 'PropertyAddNew', msg.responseJSON.Message);
		        },
		        async: false
		    });
		}
	}

</script>

<div id="divPropertyNotesMask" class="PopupMask"></div>
<div id="divPropertyNotes" style="width: 900px; display: none;">

	<div class="PopupTitleBar">
		<label>Property Alerts/Notes</label>
		<div class="CloseIcon" onclick="PropertyNotes.Close();"></div>
	</div>

	<div class="PopupBody" style="padding: 10px;">

        <div>
			<div style="float: left;">
                <label class="label-vertical">Choose An Property</label>
				<select id="cboProperty" class="FilterWatermark"><option value="Choose">Choose</option></select>
			</div>

		</div>

		<div style="clear: both;"></div>
		<div style="display: none;" id="divNoteHeader">
            <label class="label-tableheader" style="width: 32px;"></label>
            <label class="label-tableheader" style="width: 160px;">Ends</label>
            <label class="label-tableheader" style="width: 600px;">Note</label>
		</div>
		
		<div id="divNoteList" style="overflow: auto; height: 350px; margin-bottom: 10px;">
			
		</div>

        <div>
            <label class="label-tableheader" style="width: 520px;">Note</label>
            <label class="label-tableheader" style="width: 160px;">Note Ends</label>
		</div>
		<div>
            <input type="text" id="txtNote" style="width: 520px;" maxlength="2000">
            <input type="text" id="txtNoteFinish" style="width: 160px; z-index: 100000">
			<input type="button" value="Add New Note" onclick="PropertyNotes.AddNewNote();">
		</div>

		<div style="clear: both;"></div>
        </div>
</div>






<script id="hidden-template-passdown" type="text/html">
    <div>
        <input type="button" value="X" title="Expire Note Now" onclick="PropertyNotes.ExpireNote({NOTEIDFK});" />
    
        <div class="divHighlight" style="display: inline-block; cursor: pointer; vertical-align: top;"  onclick="CheckpointDetail.Open({CHECKPOINTPROPERTYIDFK}, {CHECKPOINTIDFK}, PropertyCheckpointAddEdit.ReloadCheckpoints);" >
            <label class="label-textbox" style="width: 180px; text-decoration: {DECORATION};">{EXPIRES}</label>
            <label class="label-textbox" style="width: 600px; text-decoration: {DECORATION};">{NOTE}</label>
        </div>
    </div>
</script>


    


<script lang="javascript">

	

	$(function ()
	{

	});

	var TimeCardEntry = {

		CallBackOnClose: null,

		Open: function(ShiftID, CallBack)
		{
			this.Clear();
			this.CallBackOnClose = CallBack;	
			Common.Show('divTimeCardEntry', 19000);

			$(document).off().keyup();

			$(document).on().keyup(function (e)
			{
				$(document).off().keyup();
				if (e.which == 27)
					TimeCardEntry.Close();
			});

			//$('#txtFinalClockIn').datetimepicker({ timeFormat: "h:mm TT", dateFormat: "m/d/yy" });
			//$('#txtFinalClockOut').datetimepicker({ timeFormat: "h:mm TT", dateFormat: "m/d/yy" });

			TimeCardEntry.LoadEntry(ShiftID);

		},

		Close: function()
		{
			Common.Pop('divTimeCardEntry');
			this.Clear();
			//this.CallBackOnClose();
			
		},

		Clear: function()
		{

		    $('#lblShiftID').text('');
		    $('#lblTimeUser').text('');
		    $('#lblClockIn').text('');
		    $('#lblClockOut').text('');
		    $('#lblShiftApprovedByFullName').text('');

		    $('#txtFinalClockOut').val('');
		    $('#txtFinalClockIn').val('');

	        $('#cmdSaveCheckpoint').hide();

		},

		LoadEntry: function(ShiftID)
		{
		    var Post = new Object();
		    Post.Action = "UserTimeClockGetEntry";
			Post.ShiftID = ShiftID;

			$.ajax({
				type: "POST",
				contentType: "application/json; charset=utf-8",
				url: "/API/API.ashx",
				data: JSON.stringify(Post),
				dataType: "json",
				success: function (msg)
				{
	

				    $('#lblShiftID').text(ShiftID);
				    $('#lblTimeUser').text(msg[0].FullName);
				    $('#lblClockIn').text(msg[0].ClockInDTM);
				    $('#lblClockOut').text(msg[0].ClockOutDTM);
				    $('#lblShiftApprovedByFullName').text(msg[0].ShiftApprovedByFullName);
				    
				    $('#txtFinalClockOut').val(msg[0].FinalClockOutDTM);
				    $('#txtFinalClockIn').val(msg[0].FinalClockInDTM);

				    if (isEmpty(msg[0].ShiftApproved) == true)
				    {
				        $('#cmdSaveCheckpoint').show();
				    }
				    else
				    {
				        $('#cmdSaveCheckpoint').hide();
				    }



					//if (msg.length == 0)
						//ShowWarningDialog('No Items were found for this search.');

				},
				error: function (msg)
				{
					ShowWarningDialog('A error has occured.');
				}
			});

		},
		ApproveShift: function (ShiftID) {

		if (TimeCardApproval.TimeCheck(ShiftID) == -1)
		    {
		        return;
		    }

		    $("#alertmsg").html("Are you sure you want to Approve this Shift?  This CANNOT be undone!");
		    $("#warning").css("display", "inline");
		    $("#warning").dialog
                (
                    {
                        modal: true,

                        buttons:
                        {
                            "Confirm": function () {
                                $(this).dialog("close");
                                TimeCardEntry.ApproveShiftConfirm(ShiftID);
                            },
                            "Cancel": function () {
                                $(this).dialog("close");
                                if (isEmpty(cancel) == false)
                                {
                                    window[cancel]();
                                }
                            }
                        }
                    }
                );

            
		},

		ApproveShiftConfirm: function (ShiftID) {

		    var Post = new Object();
		    Post.Action = "UserTimeClockApproveShift";
		    Post.ShiftID = ShiftID;
		    Post.StartDTM = $('#txtFinalClockIn').val();
		    Post.EndDTM = $('#txtFinalClockOut').val();

		    $.ajax({
		        type: "POST",
		        contentType: "application/json; charset=utf-8",
		        url: "/API/API.ashx",
		        data: JSON.stringify(Post),
		        dataType: "json",
		        success: function (msg) {
		            TimeCardApproval.LoadTimecards();
		            TimeCardEntry.Close();
		        },
		        error: function (msg) {
		            ShowWarningDialog('Unable to Approve Shift');
		        }
		    });

		},

	}

</script>

<div id="divTimeCardEntryMask" class="PopupMask"></div>
<div id="divTimeCardEntry" style="width: 500px; display: none;">

	<div class="PopupTitleBar">
		<label>Time Card Entry</label>
		<div class="CloseIcon" onclick="TimeCardEntry.Close();"></div>
	</div>

	<div class="PopupBody" style="padding: 10px;">
        <div>
		    <label class="text-right" style="width: 140px;">Shift ID</label>
            <label class="text-left label-textbox" id="lblShiftID" style="width: 300px;"></label>
        </div>
        <div>
		    <label class="text-right" style="width: 140px;">Shift Approved By</label>
            <label class="text-left label-textbox" id="lblShiftApprovedByFullName" style="width: 300px;"></label>
        </div>
        <div>
		    <label class="text-right" style="width: 140px;">User</label>
            <label class="text-left label-textbox" id="lblTimeUser" style="width: 300px;"></label>
        </div>
        <div>
		    <label class="text-right" style="width: 140px;">Original Clock In</label>
            <label class="text-left label-textbox" id="lblClockIn" style="width: 300px;"></label>
        </div>
        <div>
		    <label class="text-right" style="width: 140px;">Adjusted Clock In</label>
            <input type="text" id="txtFinalClockIn" style="width: 300px;" maxlength="50">
        </div>
        <div>
		    <label class="text-right" style="width: 140px;">Original Clock Out</label>
            <label class="text-left label-textbox" id="lblClockOut" style="width: 300px;"></label>
        </div>
        <div>
		    <label class="text-right" style="width: 140px;">Adjusted Clock Out</label>
            <input type="text" id="txtFinalClockOut" style="width: 300px;" maxlength="50">
        </div>
		
       	<div style="text-align: center;">
    		<input id="cmdSaveCheckpoint" type="button" value="Save and Approve Shift" style="margin: 10px; display: none;" onclick="TimeCardEntry.ApproveShift($(&#39;#lblShiftID&#39;).text());">
	    	<input type="button" value="Cancel" style="margin: 10px;" onclick="TimeCardEntry.Close();">
    	</div>
        

    </div>

</div>



				<div style="text-align: center; font-size: x-small; color: gray; margin: 5px;">© Copyright <span id="spnCopyYear">2022</span> Silvertrac Software, Inc.</div>


			<div id="mpeNewIssue_backgroundElement" class="modalBackground" style="display: none; position: fixed; left: 0px; top: 0px; z-index: 10000;"></div></div>

		</div>
	
        


<script lang="javascript">

	





	var delayCustChange = (function () {
	    var timer = 0;
	    return function (callback, ms) {
	        clearTimeout(timer);
	        timer = setTimeout(callback, ms);
	    };
	})();



	var CustomerChange = {

		CallBackOnClose: null,


		Open: function(CallBack)
		{
			this.Clear();
			this.CallBackOnClose = CallBack;	
			Common.Show('divCustomerChange', 17000);

			$(document).off().keyup();

			$('#txtCustomerSearch').keyup(function () {
			    delayCustChange(function () {
			        CustomerChange.LoadCustList();
			    }, 400);
			});

			

			$('#txtCCPassword').keypress(function (e) {
			    
			    if (e.which == 13)
			    {
			        e.preventDefault();
			        CustomerChange.Verify();
			    }
			});

			


			$(document).on().keyup(function (e)
			{
				$(document).off().keyup();
				if (e.which == 27)
				    CustomerChange.Close();
			});

			$('#txtCCPassword').focus();
		},

		Close: function()
		{
		    $('#divVerifyPassword').show();
		    $('#divAdmin').hide();
            
		    $('#txtCCPassword').val('');
			Common.Pop('divCustomerChange');
			this.Clear();
			//this.CallBackOnClose();
			
		},

		Clear: function()
		{
		},

		LoadCustList: function ()
		{
		    var Post = new Object()
		    Post.Action = 'CustomerGetAdminList';
		    Post.CustomerName = $('#txtCustomerSearch').val();
		    Post.IncludeInactive = true;

			$.ajax({
				type: "POST",
				contentType: "application/json; charset=utf-8",
				url: "/API/API.ashx",
				data: JSON.stringify(Post),
				dataType: "json",
				success: function (msg)
				{
	

					for (var item in msg)
					{
					    $('#cboCustomer').empty();

					    for (var ff in msg)
					    {
					        $('#cboCustomer').append('<option value="' + msg[ff].ID + '">' + msg[ff].CustomerName + '</option>');
					    }

						// Objects - msg[item].PropertyIDFK
					}

					//if (msg.length == 0)
						//ShowWarningDialog('No Items were found for this search.');

				},
				error: function (msg)
				{
					ShowWarningDialog('A error has occured.');
				}
			});

		},

		Verify: function()
		{
		    var Post = new Object()
		    Post.Action = 'UserVerifyPassword';
		    Post.Password = $('#txtCCPassword').val();

		    $.ajax({
		        type: "POST",
		        contentType: "application/json; charset=utf-8",
		        url: "/API/API.ashx",
		        data: JSON.stringify(Post),
		        dataType: "json",
		        success: function (msg) {

		            for (var item in msg)
		            {
		                if (msg[item].CustomerIDFK > 0)
		                {
		                    $('#divVerifyPassword').hide();
		                    $('#divAdmin').show();
		                }

		            }

		            //if (msg.length == 0)
		            //ShowWarningDialog('No Items were found for this search.');

		        },
		        error: function (msg) {
		            ShowWarningDialog('A error has occured.');
		        }
		    });

		},

		AddNewCustomer: function()
		{
		    var Post = new Object()
		    Post.Action = 'CustomerAddNew';
		    Post.CustomerName = $('#txtCustomerName').val();
		    Post.URLPrefix = $('#txtURLPrefix').val();
		    Post.AdminName = $('#txtAdminName').val();
		    Post.AdminPassword = $('#txtAdminPassword').val();
		    Post.AdminFirstName = $('#txtAdminFirstName').val();
		    Post.AdminLastName = $('#txtAdminLastName').val();
		    Post.AdminEmailAddress = $('#txtAdminEmailAddress').val();


		    $.ajax({
		        type: "POST",
		        contentType: "application/json; charset=utf-8",
		        url: "/API/API.ashx",
		        data: JSON.stringify(Post),
		        dataType: "json",
		        success: function (msg) {
		            ShowWarningDialog('Customer Added Successfully!');
		            $('#txtCustomerName').val('');
		            $('#txtURLPrefix').val('');
		            $('#txtAdminName').val('');
		            $('#txtAdminPassword').val('');
		            $('#txtAdminFirstName').val('');
		            $('#txtAdminLastName').val('');
		            $('#txtAdminEmailAddress').val('');

		            //window.location.href = '/AdminCustomer/Issues/Monitor.aspx';
		            //if (msg.length == 0)
		            //ShowWarningDialog('No Items were found for this search.');

		        },
		        error: function (msg) {
		            ShowWarningDialog('A error has occured.');
		        }
		    });
		},

		UserChangeCustomer: function()
		{
		    var Post = new Object()
		    Post.Action = 'UserChangeCustomer';
		    Post.ToCustomerIDFK = $('#cboCustomer').val();
		    Post.Password = $('#txtCCPassword').val();

		    $.ajax({
		        type: "POST",
		        contentType: "application/json; charset=utf-8",
		        url: "/API/API.ashx",
		        data: JSON.stringify(Post),
		        dataType: "json",
		        success: function (msg) {
		            window.location.href = '/AdminCustomer/Issues/Monitor.aspx';
		            //if (msg.length == 0)
		            //ShowWarningDialog('No Items were found for this search.');

		        },
		        error: function (msg) {
		            ShowWarningDialog('Arf, Arf!  A error has occured.');
		        }
		    });

		    //cboCustomer
		    //Case "UserChangeCustomer"
		    //Prop.UserChangeCustomer(dict("ToCustomerIDFK"), UserName, dict("Password"))
		}



	}

</script>

<div id="divCustomerChangeMask" class="PopupMask"></div>
<div id="divCustomerChange" style="width: 900px; display: none;">

    <div class="PopupTitleBar">
        <label>System Administration</label>
        <div class="CloseIcon" onclick="CustomerChange.Close();"></div>
    </div>

    <div class="PopupBody" style="padding: 10px;">

        <div id="divVerifyPassword">
            Password<br>
            <input type="text" id="txtCCPassword" style="-webkit-text-security: disc;"><br>
            <input type="button" value="Go" onclick="CustomerChange.Verify();">

        </div>

        <div id="divAdmin" style="display: none;">

            <div style="background:#e1e2e2; padding: 5px; width: 380px;">
                Change To Customer (Customer Name or ID)
                <div style="margin-left: 10px; ">
                    <input type="text" id="txtCustomerSearch" style="display: block; width: 350px;">
                    <label class="WarningLabel">3 Character Minimum</label>
                    <select id="cboCustomer" size="10" style="height: 150px; width: 350px; display: block;">
                    </select>
                    <input type="button" value="Change" onclick="CustomerChange.UserChangeCustomer();">
                </div>
            </div>

            
            <div style="background:#e1e2e2; padding: 5px; margin-top: 5px; width: 380px;">
                Add New Customer
        <div style="margin-left: 10px;">
            <label class="BodyLabel" style="display: block;">Customer Name</label>
            <input id="txtCustomerName" type="text" style="width: 230px;">

            <label class="BodyLabel" style="display: block;">URL Prefix</label>
            <input id="txtURLPrefix" type="text" style="width: 230px;"><br>

            <label class="BodyLabel" style="display: block;">Admin User Name</label>
            <input id="txtAdminName" type="text" style="width: 230px;"><br>

            <label class="BodyLabel" style="display: block;">Admin Password</label>
            <input id="txtAdminPassword" type="text" style="width: 230px;"><br>

            <label class="BodyLabel" style="display: block;">Admin First Name</label>
            <input id="txtAdminFirstName" type="text" style="width: 230px;"><br>

            <label class="BodyLabel" style="display: block;">Admin Last Name</label>
            <input id="txtAdminLastName" type="text" style="width: 230px;"><br>

            <label class="BodyLabel" style="display: block;">Admin Email</label>
            <input id="txtAdminEmailAddress" type="text" style="width: 230px;"><br>

            

            <input type="button" value="Add New Customer" onclick="CustomerChange.AddNewCustomer();">
        </div>
                </div>
        </div>
    </div>

</div>

        	
	

<script type="text/javascript">
//<![CDATA[
Telerik.Web.UI.RadTreeView._preInitialize("RadTreeView1","0");Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"modalBackground","CancelControlID":"cmdHide","Drag":true,"OnCancelScript":"CheckForReload();","PopupControlID":"divIssueDetail","PopupDragHandleControlID":"divIssueDetailHeader","Y":5,"dynamicServicePath":"/AdminCustomer/Issues/Monitor.aspx","id":"mpeIssueDetail","repositionMode":0}, null, null, $get("ContentPlaceHolder1_hidSearch"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"modalBackground","CancelControlID":"cmdCloseNewIssue","Drag":true,"OnCancelScript":"GetMonitorListData();","PopupControlID":"divNewIssue","PopupDragHandleControlID":"divNewIssueTitlebar","dynamicServicePath":"/AdminCustomer/Issues/Monitor.aspx","id":"mpeNewIssue"}, null, null, $get("ContentPlaceHolder1_hidSearch"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"modalBackground","CancelControlID":"cmdCancelClose","PopupControlID":"divCloseIssue","dynamicServicePath":"/AdminCustomer/Issues/Monitor.aspx","id":"mpeCloseIssue"}, null, null, $get("hidIssueIDFK"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"modalBackground","CancelControlID":"scmdCancelNewNote","PopupControlID":"divAddNote","dynamicServicePath":"/AdminCustomer/Issues/Monitor.aspx","id":"mpeAddNote"}, null, null, $get("hidIssueIDFK"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"modalBackground","CancelControlID":"scmdCancelEmail","PopupControlID":"divSendEmail","dynamicServicePath":"/AdminCustomer/Issues/Monitor.aspx","id":"mpeEmailIssue"}, null, null, $get("hidIssueIDFK"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"modalBackground","CancelControlID":"btnMapClose","PopupControlID":"divGPSMap","dynamicServicePath":"/AdminCustomer/Issues/Monitor.aspx","id":"mpeShowGPS"}, null, null, $get("hidIssueIDFK"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"modalBackground","CancelControlID":"cmdClosePic","PopupControlID":"divPicZoom","dynamicServicePath":"/AdminCustomer/Issues/Monitor.aspx","id":"mpePicZoom"}, null, null, $get("hidIssueIDFK"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.AsyncFileUpload, {"clientStateField":$get("fuAttachmentUpload_ClientState"),"completeBackColor":"DarkGray","errorBackColor":"Red","formName":"form1","inputFile":$get("AdminCustomer_ContentPlaceHolder1_wucIssueDetail_fuAttachmentUpload_ctl02"),"postBackUrl":"/AdminCustomer/Issues/Monitor.aspx","uploadingBackColor":"Black"}, {"uploadComplete":UploadComplete,"uploadError":UploadError,"uploadStarted":UploadStarted}, null, $get("fuAttachmentUpload"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadTreeView, {"_showLineImages":false,"_skin":"","_uniqueId":"AdminCustomer$ContentPlaceHolder1$wucNewIssue$RadTreeView1","clientStateFieldID":"RadTreeView1_ClientState","collapseAnimation":"{\"duration\":200}","expandAnimation":"{\"duration\":200}","nodeData":[]}, {"nodeClicked":ClientNodeClicked}, null, $get("RadTreeView1"));
});
//]]>
</script>
</form>

    




<div class="pika-single is-hidden is-bound" style="position: static; left: auto; top: auto;"></div><div class="xdsoft_datetimepicker xdsoft_noselect xdsoft_"><div class="xdsoft_datepicker active"><div class="xdsoft_monthpicker"><button type="button" class="xdsoft_prev" style="visibility: visible;"></button><button type="button" class="xdsoft_today_button" style="visibility: visible;"></button><div class="xdsoft_label xdsoft_month"><span>January</span><div class="xdsoft_select xdsoft_monthselect xdsoft_scroller_box"><div style="margin-top: 0px;"><div class="xdsoft_option xdsoft_current" data-value="0">January</div><div class="xdsoft_option " data-value="1">February</div><div class="xdsoft_option " data-value="2">March</div><div class="xdsoft_option " data-value="3">April</div><div class="xdsoft_option " data-value="4">May</div><div class="xdsoft_option " data-value="5">June</div><div class="xdsoft_option " data-value="6">July</div><div class="xdsoft_option " data-value="7">August</div><div class="xdsoft_option " data-value="8">September</div><div class="xdsoft_option " data-value="9">October</div><div class="xdsoft_option " data-value="10">November</div><div class="xdsoft_option " data-value="11">December</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><i></i></div><div class="xdsoft_label xdsoft_year"><span>2022</span><div class="xdsoft_select xdsoft_yearselect xdsoft_scroller_box"><div style="margin-top: 0px;"><div class="xdsoft_option " data-value="1950">1950</div><div class="xdsoft_option " data-value="1951">1951</div><div class="xdsoft_option " data-value="1952">1952</div><div class="xdsoft_option " data-value="1953">1953</div><div class="xdsoft_option " data-value="1954">1954</div><div class="xdsoft_option " data-value="1955">1955</div><div class="xdsoft_option " data-value="1956">1956</div><div class="xdsoft_option " data-value="1957">1957</div><div class="xdsoft_option " data-value="1958">1958</div><div class="xdsoft_option " data-value="1959">1959</div><div class="xdsoft_option " data-value="1960">1960</div><div class="xdsoft_option " data-value="1961">1961</div><div class="xdsoft_option " data-value="1962">1962</div><div class="xdsoft_option " data-value="1963">1963</div><div class="xdsoft_option " data-value="1964">1964</div><div class="xdsoft_option " data-value="1965">1965</div><div class="xdsoft_option " data-value="1966">1966</div><div class="xdsoft_option " data-value="1967">1967</div><div class="xdsoft_option " data-value="1968">1968</div><div class="xdsoft_option " data-value="1969">1969</div><div class="xdsoft_option " data-value="1970">1970</div><div class="xdsoft_option " data-value="1971">1971</div><div class="xdsoft_option " data-value="1972">1972</div><div class="xdsoft_option " data-value="1973">1973</div><div class="xdsoft_option " data-value="1974">1974</div><div class="xdsoft_option " data-value="1975">1975</div><div class="xdsoft_option " data-value="1976">1976</div><div class="xdsoft_option " data-value="1977">1977</div><div class="xdsoft_option " data-value="1978">1978</div><div class="xdsoft_option " data-value="1979">1979</div><div class="xdsoft_option " data-value="1980">1980</div><div class="xdsoft_option " data-value="1981">1981</div><div class="xdsoft_option " data-value="1982">1982</div><div class="xdsoft_option " data-value="1983">1983</div><div class="xdsoft_option " data-value="1984">1984</div><div class="xdsoft_option " data-value="1985">1985</div><div class="xdsoft_option " data-value="1986">1986</div><div class="xdsoft_option " data-value="1987">1987</div><div class="xdsoft_option " data-value="1988">1988</div><div class="xdsoft_option " data-value="1989">1989</div><div class="xdsoft_option " data-value="1990">1990</div><div class="xdsoft_option " data-value="1991">1991</div><div class="xdsoft_option " data-value="1992">1992</div><div class="xdsoft_option " data-value="1993">1993</div><div class="xdsoft_option " data-value="1994">1994</div><div class="xdsoft_option " data-value="1995">1995</div><div class="xdsoft_option " data-value="1996">1996</div><div class="xdsoft_option " data-value="1997">1997</div><div class="xdsoft_option " data-value="1998">1998</div><div class="xdsoft_option " data-value="1999">1999</div><div class="xdsoft_option " data-value="2000">2000</div><div class="xdsoft_option " data-value="2001">2001</div><div class="xdsoft_option " data-value="2002">2002</div><div class="xdsoft_option " data-value="2003">2003</div><div class="xdsoft_option " data-value="2004">2004</div><div class="xdsoft_option " data-value="2005">2005</div><div class="xdsoft_option " data-value="2006">2006</div><div class="xdsoft_option " data-value="2007">2007</div><div class="xdsoft_option " data-value="2008">2008</div><div class="xdsoft_option " data-value="2009">2009</div><div class="xdsoft_option " data-value="2010">2010</div><div class="xdsoft_option " data-value="2011">2011</div><div class="xdsoft_option " data-value="2012">2012</div><div class="xdsoft_option " data-value="2013">2013</div><div class="xdsoft_option " data-value="2014">2014</div><div class="xdsoft_option " data-value="2015">2015</div><div class="xdsoft_option " data-value="2016">2016</div><div class="xdsoft_option " data-value="2017">2017</div><div class="xdsoft_option " data-value="2018">2018</div><div class="xdsoft_option " data-value="2019">2019</div><div class="xdsoft_option " data-value="2020">2020</div><div class="xdsoft_option " data-value="2021">2021</div><div class="xdsoft_option xdsoft_current" data-value="2022">2022</div><div class="xdsoft_option " data-value="2023">2023</div><div class="xdsoft_option " data-value="2024">2024</div><div class="xdsoft_option " data-value="2025">2025</div><div class="xdsoft_option " data-value="2026">2026</div><div class="xdsoft_option " data-value="2027">2027</div><div class="xdsoft_option " data-value="2028">2028</div><div class="xdsoft_option " data-value="2029">2029</div><div class="xdsoft_option " data-value="2030">2030</div><div class="xdsoft_option " data-value="2031">2031</div><div class="xdsoft_option " data-value="2032">2032</div><div class="xdsoft_option " data-value="2033">2033</div><div class="xdsoft_option " data-value="2034">2034</div><div class="xdsoft_option " data-value="2035">2035</div><div class="xdsoft_option " data-value="2036">2036</div><div class="xdsoft_option " data-value="2037">2037</div><div class="xdsoft_option " data-value="2038">2038</div><div class="xdsoft_option " data-value="2039">2039</div><div class="xdsoft_option " data-value="2040">2040</div><div class="xdsoft_option " data-value="2041">2041</div><div class="xdsoft_option " data-value="2042">2042</div><div class="xdsoft_option " data-value="2043">2043</div><div class="xdsoft_option " data-value="2044">2044</div><div class="xdsoft_option " data-value="2045">2045</div><div class="xdsoft_option " data-value="2046">2046</div><div class="xdsoft_option " data-value="2047">2047</div><div class="xdsoft_option " data-value="2048">2048</div><div class="xdsoft_option " data-value="2049">2049</div><div class="xdsoft_option " data-value="2050">2050</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><i></i></div><button type="button" class="xdsoft_next" style="visibility: visible;"></button></div><div class="xdsoft_calendar"><table><thead><tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr></thead><tbody><tr><td data-date="26" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_other_month xdsoft_weekend" title=""><div>26</div></td><td data-date="27" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date xdsoft_other_month" title=""><div>27</div></td><td data-date="28" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date xdsoft_other_month" title=""><div>28</div></td><td data-date="29" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date xdsoft_other_month" title=""><div>29</div></td><td data-date="30" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date xdsoft_other_month" title=""><div>30</div></td><td data-date="31" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date xdsoft_other_month" title=""><div>31</div></td><td data-date="1" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>1</div></td></tr><tr><td data-date="2" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>2</div></td><td data-date="3" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>3</div></td><td data-date="4" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>4</div></td><td data-date="5" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>5</div></td><td data-date="6" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>6</div></td><td data-date="7" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>7</div></td><td data-date="8" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>8</div></td></tr><tr><td data-date="9" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>9</div></td><td data-date="10" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>10</div></td><td data-date="11" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>11</div></td><td data-date="12" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>12</div></td><td data-date="13" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>13</div></td><td data-date="14" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>14</div></td><td data-date="15" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>15</div></td></tr><tr><td data-date="16" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>16</div></td><td data-date="17" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>17</div></td><td data-date="18" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>18</div></td><td data-date="19" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>19</div></td><td data-date="20" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>20</div></td><td data-date="21" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>21</div></td><td data-date="22" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>22</div></td></tr><tr><td data-date="23" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_current xdsoft_today xdsoft_weekend" title=""><div>23</div></td><td data-date="24" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>24</div></td><td data-date="25" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>25</div></td><td data-date="26" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>26</div></td><td data-date="27" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>27</div></td><td data-date="28" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>28</div></td><td data-date="29" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>29</div></td></tr><tr><td data-date="30" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>30</div></td><td data-date="31" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>31</div></td><td data-date="1" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date xdsoft_other_month" title=""><div>1</div></td><td data-date="2" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date xdsoft_other_month" title=""><div>2</div></td><td data-date="3" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date xdsoft_other_month" title=""><div>3</div></td><td data-date="4" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date xdsoft_other_month" title=""><div>4</div></td><td data-date="5" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_other_month xdsoft_weekend" title=""><div>5</div></td></tr></tbody></table></div><button type="button" class="xdsoft_save_selected blue-gradient-button" style="display: none;">Save Selected</button></div><div class="xdsoft_timepicker active"><button type="button" class="xdsoft_prev"></button><div class="xdsoft_time_box xdsoft_scroller_box"><div class="xdsoft_time_variant" style="margin-top: 0px;"><div class="xdsoft_time " data-hour="0" data-minute="0">12:00 AM</div><div class="xdsoft_time " data-hour="1" data-minute="0">1:00 AM</div><div class="xdsoft_time " data-hour="2" data-minute="0">2:00 AM</div><div class="xdsoft_time " data-hour="3" data-minute="0">3:00 AM</div><div class="xdsoft_time " data-hour="4" data-minute="0">4:00 AM</div><div class="xdsoft_time " data-hour="5" data-minute="0">5:00 AM</div><div class="xdsoft_time " data-hour="6" data-minute="0">6:00 AM</div><div class="xdsoft_time " data-hour="7" data-minute="0">7:00 AM</div><div class="xdsoft_time " data-hour="8" data-minute="0">8:00 AM</div><div class="xdsoft_time " data-hour="9" data-minute="0">9:00 AM</div><div class="xdsoft_time " data-hour="10" data-minute="0">10:00 AM</div><div class="xdsoft_time " data-hour="11" data-minute="0">11:00 AM</div><div class="xdsoft_time " data-hour="12" data-minute="0">12:00 PM</div><div class="xdsoft_time " data-hour="13" data-minute="0">1:00 PM</div><div class="xdsoft_time " data-hour="14" data-minute="0">2:00 PM</div><div class="xdsoft_time " data-hour="15" data-minute="0">3:00 PM</div><div class="xdsoft_time " data-hour="16" data-minute="0">4:00 PM</div><div class="xdsoft_time " data-hour="17" data-minute="0">5:00 PM</div><div class="xdsoft_time " data-hour="18" data-minute="0">6:00 PM</div><div class="xdsoft_time " data-hour="19" data-minute="0">7:00 PM</div><div class="xdsoft_time " data-hour="20" data-minute="0">8:00 PM</div><div class="xdsoft_time " data-hour="21" data-minute="0">9:00 PM</div><div class="xdsoft_time xdsoft_current" data-hour="22" data-minute="0">10:00 PM</div><div class="xdsoft_time " data-hour="23" data-minute="0">11:00 PM</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><button type="button" class="xdsoft_next"></button></div></div><div class="xdsoft_datetimepicker xdsoft_noselect xdsoft_"><div class="xdsoft_datepicker active"><div class="xdsoft_monthpicker"><button type="button" class="xdsoft_prev" style="visibility: visible;"></button><button type="button" class="xdsoft_today_button" style="visibility: visible;"></button><div class="xdsoft_label xdsoft_month"><span>January</span><div class="xdsoft_select xdsoft_monthselect xdsoft_scroller_box"><div style="margin-top: 0px;"><div class="xdsoft_option xdsoft_current" data-value="0">January</div><div class="xdsoft_option " data-value="1">February</div><div class="xdsoft_option " data-value="2">March</div><div class="xdsoft_option " data-value="3">April</div><div class="xdsoft_option " data-value="4">May</div><div class="xdsoft_option " data-value="5">June</div><div class="xdsoft_option " data-value="6">July</div><div class="xdsoft_option " data-value="7">August</div><div class="xdsoft_option " data-value="8">September</div><div class="xdsoft_option " data-value="9">October</div><div class="xdsoft_option " data-value="10">November</div><div class="xdsoft_option " data-value="11">December</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><i></i></div><div class="xdsoft_label xdsoft_year"><span>2022</span><div class="xdsoft_select xdsoft_yearselect xdsoft_scroller_box"><div style="margin-top: 0px;"><div class="xdsoft_option " data-value="1950">1950</div><div class="xdsoft_option " data-value="1951">1951</div><div class="xdsoft_option " data-value="1952">1952</div><div class="xdsoft_option " data-value="1953">1953</div><div class="xdsoft_option " data-value="1954">1954</div><div class="xdsoft_option " data-value="1955">1955</div><div class="xdsoft_option " data-value="1956">1956</div><div class="xdsoft_option " data-value="1957">1957</div><div class="xdsoft_option " data-value="1958">1958</div><div class="xdsoft_option " data-value="1959">1959</div><div class="xdsoft_option " data-value="1960">1960</div><div class="xdsoft_option " data-value="1961">1961</div><div class="xdsoft_option " data-value="1962">1962</div><div class="xdsoft_option " data-value="1963">1963</div><div class="xdsoft_option " data-value="1964">1964</div><div class="xdsoft_option " data-value="1965">1965</div><div class="xdsoft_option " data-value="1966">1966</div><div class="xdsoft_option " data-value="1967">1967</div><div class="xdsoft_option " data-value="1968">1968</div><div class="xdsoft_option " data-value="1969">1969</div><div class="xdsoft_option " data-value="1970">1970</div><div class="xdsoft_option " data-value="1971">1971</div><div class="xdsoft_option " data-value="1972">1972</div><div class="xdsoft_option " data-value="1973">1973</div><div class="xdsoft_option " data-value="1974">1974</div><div class="xdsoft_option " data-value="1975">1975</div><div class="xdsoft_option " data-value="1976">1976</div><div class="xdsoft_option " data-value="1977">1977</div><div class="xdsoft_option " data-value="1978">1978</div><div class="xdsoft_option " data-value="1979">1979</div><div class="xdsoft_option " data-value="1980">1980</div><div class="xdsoft_option " data-value="1981">1981</div><div class="xdsoft_option " data-value="1982">1982</div><div class="xdsoft_option " data-value="1983">1983</div><div class="xdsoft_option " data-value="1984">1984</div><div class="xdsoft_option " data-value="1985">1985</div><div class="xdsoft_option " data-value="1986">1986</div><div class="xdsoft_option " data-value="1987">1987</div><div class="xdsoft_option " data-value="1988">1988</div><div class="xdsoft_option " data-value="1989">1989</div><div class="xdsoft_option " data-value="1990">1990</div><div class="xdsoft_option " data-value="1991">1991</div><div class="xdsoft_option " data-value="1992">1992</div><div class="xdsoft_option " data-value="1993">1993</div><div class="xdsoft_option " data-value="1994">1994</div><div class="xdsoft_option " data-value="1995">1995</div><div class="xdsoft_option " data-value="1996">1996</div><div class="xdsoft_option " data-value="1997">1997</div><div class="xdsoft_option " data-value="1998">1998</div><div class="xdsoft_option " data-value="1999">1999</div><div class="xdsoft_option " data-value="2000">2000</div><div class="xdsoft_option " data-value="2001">2001</div><div class="xdsoft_option " data-value="2002">2002</div><div class="xdsoft_option " data-value="2003">2003</div><div class="xdsoft_option " data-value="2004">2004</div><div class="xdsoft_option " data-value="2005">2005</div><div class="xdsoft_option " data-value="2006">2006</div><div class="xdsoft_option " data-value="2007">2007</div><div class="xdsoft_option " data-value="2008">2008</div><div class="xdsoft_option " data-value="2009">2009</div><div class="xdsoft_option " data-value="2010">2010</div><div class="xdsoft_option " data-value="2011">2011</div><div class="xdsoft_option " data-value="2012">2012</div><div class="xdsoft_option " data-value="2013">2013</div><div class="xdsoft_option " data-value="2014">2014</div><div class="xdsoft_option " data-value="2015">2015</div><div class="xdsoft_option " data-value="2016">2016</div><div class="xdsoft_option " data-value="2017">2017</div><div class="xdsoft_option " data-value="2018">2018</div><div class="xdsoft_option " data-value="2019">2019</div><div class="xdsoft_option " data-value="2020">2020</div><div class="xdsoft_option " data-value="2021">2021</div><div class="xdsoft_option xdsoft_current" data-value="2022">2022</div><div class="xdsoft_option " data-value="2023">2023</div><div class="xdsoft_option " data-value="2024">2024</div><div class="xdsoft_option " data-value="2025">2025</div><div class="xdsoft_option " data-value="2026">2026</div><div class="xdsoft_option " data-value="2027">2027</div><div class="xdsoft_option " data-value="2028">2028</div><div class="xdsoft_option " data-value="2029">2029</div><div class="xdsoft_option " data-value="2030">2030</div><div class="xdsoft_option " data-value="2031">2031</div><div class="xdsoft_option " data-value="2032">2032</div><div class="xdsoft_option " data-value="2033">2033</div><div class="xdsoft_option " data-value="2034">2034</div><div class="xdsoft_option " data-value="2035">2035</div><div class="xdsoft_option " data-value="2036">2036</div><div class="xdsoft_option " data-value="2037">2037</div><div class="xdsoft_option " data-value="2038">2038</div><div class="xdsoft_option " data-value="2039">2039</div><div class="xdsoft_option " data-value="2040">2040</div><div class="xdsoft_option " data-value="2041">2041</div><div class="xdsoft_option " data-value="2042">2042</div><div class="xdsoft_option " data-value="2043">2043</div><div class="xdsoft_option " data-value="2044">2044</div><div class="xdsoft_option " data-value="2045">2045</div><div class="xdsoft_option " data-value="2046">2046</div><div class="xdsoft_option " data-value="2047">2047</div><div class="xdsoft_option " data-value="2048">2048</div><div class="xdsoft_option " data-value="2049">2049</div><div class="xdsoft_option " data-value="2050">2050</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><i></i></div><button type="button" class="xdsoft_next" style="visibility: visible;"></button></div><div class="xdsoft_calendar"><table><thead><tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr></thead><tbody><tr><td data-date="26" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_other_month xdsoft_weekend" title=""><div>26</div></td><td data-date="27" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date xdsoft_other_month" title=""><div>27</div></td><td data-date="28" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date xdsoft_other_month" title=""><div>28</div></td><td data-date="29" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date xdsoft_other_month" title=""><div>29</div></td><td data-date="30" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date xdsoft_other_month" title=""><div>30</div></td><td data-date="31" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date xdsoft_other_month" title=""><div>31</div></td><td data-date="1" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>1</div></td></tr><tr><td data-date="2" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>2</div></td><td data-date="3" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>3</div></td><td data-date="4" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>4</div></td><td data-date="5" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>5</div></td><td data-date="6" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>6</div></td><td data-date="7" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>7</div></td><td data-date="8" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>8</div></td></tr><tr><td data-date="9" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>9</div></td><td data-date="10" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>10</div></td><td data-date="11" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>11</div></td><td data-date="12" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>12</div></td><td data-date="13" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>13</div></td><td data-date="14" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>14</div></td><td data-date="15" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>15</div></td></tr><tr><td data-date="16" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>16</div></td><td data-date="17" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>17</div></td><td data-date="18" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>18</div></td><td data-date="19" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>19</div></td><td data-date="20" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>20</div></td><td data-date="21" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>21</div></td><td data-date="22" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>22</div></td></tr><tr><td data-date="23" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_current xdsoft_today xdsoft_weekend" title=""><div>23</div></td><td data-date="24" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>24</div></td><td data-date="25" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>25</div></td><td data-date="26" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>26</div></td><td data-date="27" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>27</div></td><td data-date="28" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>28</div></td><td data-date="29" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>29</div></td></tr><tr><td data-date="30" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>30</div></td><td data-date="31" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>31</div></td><td data-date="1" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date xdsoft_other_month" title=""><div>1</div></td><td data-date="2" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date xdsoft_other_month" title=""><div>2</div></td><td data-date="3" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date xdsoft_other_month" title=""><div>3</div></td><td data-date="4" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date xdsoft_other_month" title=""><div>4</div></td><td data-date="5" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_other_month xdsoft_weekend" title=""><div>5</div></td></tr></tbody></table></div><button type="button" class="xdsoft_save_selected blue-gradient-button" style="display: none;">Save Selected</button></div><div class="xdsoft_timepicker active"><button type="button" class="xdsoft_prev"></button><div class="xdsoft_time_box xdsoft_scroller_box"><div class="xdsoft_time_variant" style="margin-top: 0px;"><div class="xdsoft_time " data-hour="0" data-minute="0">12:00 AM</div><div class="xdsoft_time " data-hour="1" data-minute="0">1:00 AM</div><div class="xdsoft_time " data-hour="2" data-minute="0">2:00 AM</div><div class="xdsoft_time " data-hour="3" data-minute="0">3:00 AM</div><div class="xdsoft_time " data-hour="4" data-minute="0">4:00 AM</div><div class="xdsoft_time " data-hour="5" data-minute="0">5:00 AM</div><div class="xdsoft_time " data-hour="6" data-minute="0">6:00 AM</div><div class="xdsoft_time " data-hour="7" data-minute="0">7:00 AM</div><div class="xdsoft_time " data-hour="8" data-minute="0">8:00 AM</div><div class="xdsoft_time " data-hour="9" data-minute="0">9:00 AM</div><div class="xdsoft_time " data-hour="10" data-minute="0">10:00 AM</div><div class="xdsoft_time " data-hour="11" data-minute="0">11:00 AM</div><div class="xdsoft_time " data-hour="12" data-minute="0">12:00 PM</div><div class="xdsoft_time " data-hour="13" data-minute="0">1:00 PM</div><div class="xdsoft_time " data-hour="14" data-minute="0">2:00 PM</div><div class="xdsoft_time " data-hour="15" data-minute="0">3:00 PM</div><div class="xdsoft_time " data-hour="16" data-minute="0">4:00 PM</div><div class="xdsoft_time " data-hour="17" data-minute="0">5:00 PM</div><div class="xdsoft_time " data-hour="18" data-minute="0">6:00 PM</div><div class="xdsoft_time " data-hour="19" data-minute="0">7:00 PM</div><div class="xdsoft_time " data-hour="20" data-minute="0">8:00 PM</div><div class="xdsoft_time " data-hour="21" data-minute="0">9:00 PM</div><div class="xdsoft_time xdsoft_current" data-hour="22" data-minute="0">10:00 PM</div><div class="xdsoft_time " data-hour="23" data-minute="0">11:00 PM</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><button type="button" class="xdsoft_next"></button></div></div><div style="display: none; position: fixed; z-index: 0; top: 0px; left: 0px; height: 100%; width: 100%; background: rgb(51, 51, 51); opacity: 0.8; overflow: auto;"></div><div style="display: none; position: fixed; z-index: 0; top: 0px; left: 0px; height: 100%; width: 100%; background: rgb(51, 51, 51); opacity: 0.8; overflow: auto;"></div><div style="display: none; position: fixed; z-index: 0; top: 0px; left: 0px; height: 100%; width: 100%; background: rgb(51, 51, 51); opacity: 0.8; overflow: auto;"></div><div style="display: none; position: fixed; z-index: 0; top: 0px; left: 0px; height: 100%; width: 100%; background: rgb(51, 51, 51); opacity: 0.8; overflow: auto;"></div><div class="xdsoft_datetimepicker xdsoft_noselect xdsoft_"><div class="xdsoft_datepicker active"><div class="xdsoft_monthpicker"><button type="button" class="xdsoft_prev" style="visibility: visible;"></button><button type="button" class="xdsoft_today_button" style="visibility: visible;"></button><div class="xdsoft_label xdsoft_month"><span>January</span><div class="xdsoft_select xdsoft_monthselect xdsoft_scroller_box"><div style="margin-top: 0px;"><div class="xdsoft_option xdsoft_current" data-value="0">January</div><div class="xdsoft_option " data-value="1">February</div><div class="xdsoft_option " data-value="2">March</div><div class="xdsoft_option " data-value="3">April</div><div class="xdsoft_option " data-value="4">May</div><div class="xdsoft_option " data-value="5">June</div><div class="xdsoft_option " data-value="6">July</div><div class="xdsoft_option " data-value="7">August</div><div class="xdsoft_option " data-value="8">September</div><div class="xdsoft_option " data-value="9">October</div><div class="xdsoft_option " data-value="10">November</div><div class="xdsoft_option " data-value="11">December</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><i></i></div><div class="xdsoft_label xdsoft_year"><span>2022</span><div class="xdsoft_select xdsoft_yearselect xdsoft_scroller_box"><div style="margin-top: 0px;"><div class="xdsoft_option " data-value="1950">1950</div><div class="xdsoft_option " data-value="1951">1951</div><div class="xdsoft_option " data-value="1952">1952</div><div class="xdsoft_option " data-value="1953">1953</div><div class="xdsoft_option " data-value="1954">1954</div><div class="xdsoft_option " data-value="1955">1955</div><div class="xdsoft_option " data-value="1956">1956</div><div class="xdsoft_option " data-value="1957">1957</div><div class="xdsoft_option " data-value="1958">1958</div><div class="xdsoft_option " data-value="1959">1959</div><div class="xdsoft_option " data-value="1960">1960</div><div class="xdsoft_option " data-value="1961">1961</div><div class="xdsoft_option " data-value="1962">1962</div><div class="xdsoft_option " data-value="1963">1963</div><div class="xdsoft_option " data-value="1964">1964</div><div class="xdsoft_option " data-value="1965">1965</div><div class="xdsoft_option " data-value="1966">1966</div><div class="xdsoft_option " data-value="1967">1967</div><div class="xdsoft_option " data-value="1968">1968</div><div class="xdsoft_option " data-value="1969">1969</div><div class="xdsoft_option " data-value="1970">1970</div><div class="xdsoft_option " data-value="1971">1971</div><div class="xdsoft_option " data-value="1972">1972</div><div class="xdsoft_option " data-value="1973">1973</div><div class="xdsoft_option " data-value="1974">1974</div><div class="xdsoft_option " data-value="1975">1975</div><div class="xdsoft_option " data-value="1976">1976</div><div class="xdsoft_option " data-value="1977">1977</div><div class="xdsoft_option " data-value="1978">1978</div><div class="xdsoft_option " data-value="1979">1979</div><div class="xdsoft_option " data-value="1980">1980</div><div class="xdsoft_option " data-value="1981">1981</div><div class="xdsoft_option " data-value="1982">1982</div><div class="xdsoft_option " data-value="1983">1983</div><div class="xdsoft_option " data-value="1984">1984</div><div class="xdsoft_option " data-value="1985">1985</div><div class="xdsoft_option " data-value="1986">1986</div><div class="xdsoft_option " data-value="1987">1987</div><div class="xdsoft_option " data-value="1988">1988</div><div class="xdsoft_option " data-value="1989">1989</div><div class="xdsoft_option " data-value="1990">1990</div><div class="xdsoft_option " data-value="1991">1991</div><div class="xdsoft_option " data-value="1992">1992</div><div class="xdsoft_option " data-value="1993">1993</div><div class="xdsoft_option " data-value="1994">1994</div><div class="xdsoft_option " data-value="1995">1995</div><div class="xdsoft_option " data-value="1996">1996</div><div class="xdsoft_option " data-value="1997">1997</div><div class="xdsoft_option " data-value="1998">1998</div><div class="xdsoft_option " data-value="1999">1999</div><div class="xdsoft_option " data-value="2000">2000</div><div class="xdsoft_option " data-value="2001">2001</div><div class="xdsoft_option " data-value="2002">2002</div><div class="xdsoft_option " data-value="2003">2003</div><div class="xdsoft_option " data-value="2004">2004</div><div class="xdsoft_option " data-value="2005">2005</div><div class="xdsoft_option " data-value="2006">2006</div><div class="xdsoft_option " data-value="2007">2007</div><div class="xdsoft_option " data-value="2008">2008</div><div class="xdsoft_option " data-value="2009">2009</div><div class="xdsoft_option " data-value="2010">2010</div><div class="xdsoft_option " data-value="2011">2011</div><div class="xdsoft_option " data-value="2012">2012</div><div class="xdsoft_option " data-value="2013">2013</div><div class="xdsoft_option " data-value="2014">2014</div><div class="xdsoft_option " data-value="2015">2015</div><div class="xdsoft_option " data-value="2016">2016</div><div class="xdsoft_option " data-value="2017">2017</div><div class="xdsoft_option " data-value="2018">2018</div><div class="xdsoft_option " data-value="2019">2019</div><div class="xdsoft_option " data-value="2020">2020</div><div class="xdsoft_option " data-value="2021">2021</div><div class="xdsoft_option xdsoft_current" data-value="2022">2022</div><div class="xdsoft_option " data-value="2023">2023</div><div class="xdsoft_option " data-value="2024">2024</div><div class="xdsoft_option " data-value="2025">2025</div><div class="xdsoft_option " data-value="2026">2026</div><div class="xdsoft_option " data-value="2027">2027</div><div class="xdsoft_option " data-value="2028">2028</div><div class="xdsoft_option " data-value="2029">2029</div><div class="xdsoft_option " data-value="2030">2030</div><div class="xdsoft_option " data-value="2031">2031</div><div class="xdsoft_option " data-value="2032">2032</div><div class="xdsoft_option " data-value="2033">2033</div><div class="xdsoft_option " data-value="2034">2034</div><div class="xdsoft_option " data-value="2035">2035</div><div class="xdsoft_option " data-value="2036">2036</div><div class="xdsoft_option " data-value="2037">2037</div><div class="xdsoft_option " data-value="2038">2038</div><div class="xdsoft_option " data-value="2039">2039</div><div class="xdsoft_option " data-value="2040">2040</div><div class="xdsoft_option " data-value="2041">2041</div><div class="xdsoft_option " data-value="2042">2042</div><div class="xdsoft_option " data-value="2043">2043</div><div class="xdsoft_option " data-value="2044">2044</div><div class="xdsoft_option " data-value="2045">2045</div><div class="xdsoft_option " data-value="2046">2046</div><div class="xdsoft_option " data-value="2047">2047</div><div class="xdsoft_option " data-value="2048">2048</div><div class="xdsoft_option " data-value="2049">2049</div><div class="xdsoft_option " data-value="2050">2050</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><i></i></div><button type="button" class="xdsoft_next" style="visibility: visible;"></button></div><div class="xdsoft_calendar"><table><thead><tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr></thead><tbody><tr><td data-date="26" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_other_month xdsoft_weekend" title=""><div>26</div></td><td data-date="27" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date xdsoft_other_month" title=""><div>27</div></td><td data-date="28" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date xdsoft_other_month" title=""><div>28</div></td><td data-date="29" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date xdsoft_other_month" title=""><div>29</div></td><td data-date="30" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date xdsoft_other_month" title=""><div>30</div></td><td data-date="31" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date xdsoft_other_month" title=""><div>31</div></td><td data-date="1" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>1</div></td></tr><tr><td data-date="2" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>2</div></td><td data-date="3" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>3</div></td><td data-date="4" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>4</div></td><td data-date="5" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>5</div></td><td data-date="6" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>6</div></td><td data-date="7" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>7</div></td><td data-date="8" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>8</div></td></tr><tr><td data-date="9" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>9</div></td><td data-date="10" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>10</div></td><td data-date="11" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>11</div></td><td data-date="12" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>12</div></td><td data-date="13" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>13</div></td><td data-date="14" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>14</div></td><td data-date="15" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>15</div></td></tr><tr><td data-date="16" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>16</div></td><td data-date="17" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>17</div></td><td data-date="18" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>18</div></td><td data-date="19" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>19</div></td><td data-date="20" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>20</div></td><td data-date="21" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>21</div></td><td data-date="22" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>22</div></td></tr><tr><td data-date="23" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_current xdsoft_today xdsoft_weekend" title=""><div>23</div></td><td data-date="24" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>24</div></td><td data-date="25" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>25</div></td><td data-date="26" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>26</div></td><td data-date="27" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>27</div></td><td data-date="28" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>28</div></td><td data-date="29" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>29</div></td></tr><tr><td data-date="30" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>30</div></td><td data-date="31" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>31</div></td><td data-date="1" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date xdsoft_other_month" title=""><div>1</div></td><td data-date="2" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date xdsoft_other_month" title=""><div>2</div></td><td data-date="3" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date xdsoft_other_month" title=""><div>3</div></td><td data-date="4" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date xdsoft_other_month" title=""><div>4</div></td><td data-date="5" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_other_month xdsoft_weekend" title=""><div>5</div></td></tr></tbody></table></div><button type="button" class="xdsoft_save_selected blue-gradient-button" style="display: none;">Save Selected</button></div><div class="xdsoft_timepicker active"><button type="button" class="xdsoft_prev"></button><div class="xdsoft_time_box xdsoft_scroller_box"><div class="xdsoft_time_variant" style="margin-top: 0px;"><div class="xdsoft_time " data-hour="0" data-minute="0">12:00 AM</div><div class="xdsoft_time " data-hour="1" data-minute="0">1:00 AM</div><div class="xdsoft_time " data-hour="2" data-minute="0">2:00 AM</div><div class="xdsoft_time " data-hour="3" data-minute="0">3:00 AM</div><div class="xdsoft_time " data-hour="4" data-minute="0">4:00 AM</div><div class="xdsoft_time " data-hour="5" data-minute="0">5:00 AM</div><div class="xdsoft_time " data-hour="6" data-minute="0">6:00 AM</div><div class="xdsoft_time " data-hour="7" data-minute="0">7:00 AM</div><div class="xdsoft_time " data-hour="8" data-minute="0">8:00 AM</div><div class="xdsoft_time " data-hour="9" data-minute="0">9:00 AM</div><div class="xdsoft_time " data-hour="10" data-minute="0">10:00 AM</div><div class="xdsoft_time " data-hour="11" data-minute="0">11:00 AM</div><div class="xdsoft_time " data-hour="12" data-minute="0">12:00 PM</div><div class="xdsoft_time " data-hour="13" data-minute="0">1:00 PM</div><div class="xdsoft_time " data-hour="14" data-minute="0">2:00 PM</div><div class="xdsoft_time " data-hour="15" data-minute="0">3:00 PM</div><div class="xdsoft_time " data-hour="16" data-minute="0">4:00 PM</div><div class="xdsoft_time " data-hour="17" data-minute="0">5:00 PM</div><div class="xdsoft_time " data-hour="18" data-minute="0">6:00 PM</div><div class="xdsoft_time " data-hour="19" data-minute="0">7:00 PM</div><div class="xdsoft_time " data-hour="20" data-minute="0">8:00 PM</div><div class="xdsoft_time " data-hour="21" data-minute="0">9:00 PM</div><div class="xdsoft_time xdsoft_current" data-hour="22" data-minute="0">10:00 PM</div><div class="xdsoft_time " data-hour="23" data-minute="0">11:00 PM</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><button type="button" class="xdsoft_next"></button></div></div><div class="xdsoft_datetimepicker xdsoft_noselect xdsoft_"><div class="xdsoft_datepicker active"><div class="xdsoft_monthpicker"><button type="button" class="xdsoft_prev" style="visibility: visible;"></button><button type="button" class="xdsoft_today_button" style="visibility: visible;"></button><div class="xdsoft_label xdsoft_month"><span>January</span><div class="xdsoft_select xdsoft_monthselect xdsoft_scroller_box"><div style="margin-top: 0px;"><div class="xdsoft_option xdsoft_current" data-value="0">January</div><div class="xdsoft_option " data-value="1">February</div><div class="xdsoft_option " data-value="2">March</div><div class="xdsoft_option " data-value="3">April</div><div class="xdsoft_option " data-value="4">May</div><div class="xdsoft_option " data-value="5">June</div><div class="xdsoft_option " data-value="6">July</div><div class="xdsoft_option " data-value="7">August</div><div class="xdsoft_option " data-value="8">September</div><div class="xdsoft_option " data-value="9">October</div><div class="xdsoft_option " data-value="10">November</div><div class="xdsoft_option " data-value="11">December</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><i></i></div><div class="xdsoft_label xdsoft_year"><span>2022</span><div class="xdsoft_select xdsoft_yearselect xdsoft_scroller_box"><div style="margin-top: 0px;"><div class="xdsoft_option " data-value="1950">1950</div><div class="xdsoft_option " data-value="1951">1951</div><div class="xdsoft_option " data-value="1952">1952</div><div class="xdsoft_option " data-value="1953">1953</div><div class="xdsoft_option " data-value="1954">1954</div><div class="xdsoft_option " data-value="1955">1955</div><div class="xdsoft_option " data-value="1956">1956</div><div class="xdsoft_option " data-value="1957">1957</div><div class="xdsoft_option " data-value="1958">1958</div><div class="xdsoft_option " data-value="1959">1959</div><div class="xdsoft_option " data-value="1960">1960</div><div class="xdsoft_option " data-value="1961">1961</div><div class="xdsoft_option " data-value="1962">1962</div><div class="xdsoft_option " data-value="1963">1963</div><div class="xdsoft_option " data-value="1964">1964</div><div class="xdsoft_option " data-value="1965">1965</div><div class="xdsoft_option " data-value="1966">1966</div><div class="xdsoft_option " data-value="1967">1967</div><div class="xdsoft_option " data-value="1968">1968</div><div class="xdsoft_option " data-value="1969">1969</div><div class="xdsoft_option " data-value="1970">1970</div><div class="xdsoft_option " data-value="1971">1971</div><div class="xdsoft_option " data-value="1972">1972</div><div class="xdsoft_option " data-value="1973">1973</div><div class="xdsoft_option " data-value="1974">1974</div><div class="xdsoft_option " data-value="1975">1975</div><div class="xdsoft_option " data-value="1976">1976</div><div class="xdsoft_option " data-value="1977">1977</div><div class="xdsoft_option " data-value="1978">1978</div><div class="xdsoft_option " data-value="1979">1979</div><div class="xdsoft_option " data-value="1980">1980</div><div class="xdsoft_option " data-value="1981">1981</div><div class="xdsoft_option " data-value="1982">1982</div><div class="xdsoft_option " data-value="1983">1983</div><div class="xdsoft_option " data-value="1984">1984</div><div class="xdsoft_option " data-value="1985">1985</div><div class="xdsoft_option " data-value="1986">1986</div><div class="xdsoft_option " data-value="1987">1987</div><div class="xdsoft_option " data-value="1988">1988</div><div class="xdsoft_option " data-value="1989">1989</div><div class="xdsoft_option " data-value="1990">1990</div><div class="xdsoft_option " data-value="1991">1991</div><div class="xdsoft_option " data-value="1992">1992</div><div class="xdsoft_option " data-value="1993">1993</div><div class="xdsoft_option " data-value="1994">1994</div><div class="xdsoft_option " data-value="1995">1995</div><div class="xdsoft_option " data-value="1996">1996</div><div class="xdsoft_option " data-value="1997">1997</div><div class="xdsoft_option " data-value="1998">1998</div><div class="xdsoft_option " data-value="1999">1999</div><div class="xdsoft_option " data-value="2000">2000</div><div class="xdsoft_option " data-value="2001">2001</div><div class="xdsoft_option " data-value="2002">2002</div><div class="xdsoft_option " data-value="2003">2003</div><div class="xdsoft_option " data-value="2004">2004</div><div class="xdsoft_option " data-value="2005">2005</div><div class="xdsoft_option " data-value="2006">2006</div><div class="xdsoft_option " data-value="2007">2007</div><div class="xdsoft_option " data-value="2008">2008</div><div class="xdsoft_option " data-value="2009">2009</div><div class="xdsoft_option " data-value="2010">2010</div><div class="xdsoft_option " data-value="2011">2011</div><div class="xdsoft_option " data-value="2012">2012</div><div class="xdsoft_option " data-value="2013">2013</div><div class="xdsoft_option " data-value="2014">2014</div><div class="xdsoft_option " data-value="2015">2015</div><div class="xdsoft_option " data-value="2016">2016</div><div class="xdsoft_option " data-value="2017">2017</div><div class="xdsoft_option " data-value="2018">2018</div><div class="xdsoft_option " data-value="2019">2019</div><div class="xdsoft_option " data-value="2020">2020</div><div class="xdsoft_option " data-value="2021">2021</div><div class="xdsoft_option xdsoft_current" data-value="2022">2022</div><div class="xdsoft_option " data-value="2023">2023</div><div class="xdsoft_option " data-value="2024">2024</div><div class="xdsoft_option " data-value="2025">2025</div><div class="xdsoft_option " data-value="2026">2026</div><div class="xdsoft_option " data-value="2027">2027</div><div class="xdsoft_option " data-value="2028">2028</div><div class="xdsoft_option " data-value="2029">2029</div><div class="xdsoft_option " data-value="2030">2030</div><div class="xdsoft_option " data-value="2031">2031</div><div class="xdsoft_option " data-value="2032">2032</div><div class="xdsoft_option " data-value="2033">2033</div><div class="xdsoft_option " data-value="2034">2034</div><div class="xdsoft_option " data-value="2035">2035</div><div class="xdsoft_option " data-value="2036">2036</div><div class="xdsoft_option " data-value="2037">2037</div><div class="xdsoft_option " data-value="2038">2038</div><div class="xdsoft_option " data-value="2039">2039</div><div class="xdsoft_option " data-value="2040">2040</div><div class="xdsoft_option " data-value="2041">2041</div><div class="xdsoft_option " data-value="2042">2042</div><div class="xdsoft_option " data-value="2043">2043</div><div class="xdsoft_option " data-value="2044">2044</div><div class="xdsoft_option " data-value="2045">2045</div><div class="xdsoft_option " data-value="2046">2046</div><div class="xdsoft_option " data-value="2047">2047</div><div class="xdsoft_option " data-value="2048">2048</div><div class="xdsoft_option " data-value="2049">2049</div><div class="xdsoft_option " data-value="2050">2050</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><i></i></div><button type="button" class="xdsoft_next" style="visibility: visible;"></button></div><div class="xdsoft_calendar"><table><thead><tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr></thead><tbody><tr><td data-date="26" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_other_month xdsoft_weekend" title=""><div>26</div></td><td data-date="27" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date xdsoft_other_month" title=""><div>27</div></td><td data-date="28" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date xdsoft_other_month" title=""><div>28</div></td><td data-date="29" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date xdsoft_other_month" title=""><div>29</div></td><td data-date="30" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date xdsoft_other_month" title=""><div>30</div></td><td data-date="31" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date xdsoft_other_month" title=""><div>31</div></td><td data-date="1" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>1</div></td></tr><tr><td data-date="2" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>2</div></td><td data-date="3" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>3</div></td><td data-date="4" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>4</div></td><td data-date="5" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>5</div></td><td data-date="6" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>6</div></td><td data-date="7" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>7</div></td><td data-date="8" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>8</div></td></tr><tr><td data-date="9" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>9</div></td><td data-date="10" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>10</div></td><td data-date="11" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>11</div></td><td data-date="12" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>12</div></td><td data-date="13" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>13</div></td><td data-date="14" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>14</div></td><td data-date="15" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>15</div></td></tr><tr><td data-date="16" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>16</div></td><td data-date="17" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>17</div></td><td data-date="18" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>18</div></td><td data-date="19" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>19</div></td><td data-date="20" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>20</div></td><td data-date="21" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>21</div></td><td data-date="22" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>22</div></td></tr><tr><td data-date="23" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_current xdsoft_today xdsoft_weekend" title=""><div>23</div></td><td data-date="24" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>24</div></td><td data-date="25" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>25</div></td><td data-date="26" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>26</div></td><td data-date="27" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>27</div></td><td data-date="28" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>28</div></td><td data-date="29" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>29</div></td></tr><tr><td data-date="30" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>30</div></td><td data-date="31" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>31</div></td><td data-date="1" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date xdsoft_other_month" title=""><div>1</div></td><td data-date="2" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date xdsoft_other_month" title=""><div>2</div></td><td data-date="3" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date xdsoft_other_month" title=""><div>3</div></td><td data-date="4" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date xdsoft_other_month" title=""><div>4</div></td><td data-date="5" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_other_month xdsoft_weekend" title=""><div>5</div></td></tr></tbody></table></div><button type="button" class="xdsoft_save_selected blue-gradient-button" style="display: none;">Save Selected</button></div><div class="xdsoft_timepicker active"><button type="button" class="xdsoft_prev"></button><div class="xdsoft_time_box xdsoft_scroller_box"><div class="xdsoft_time_variant" style="margin-top: 0px;"><div class="xdsoft_time " data-hour="0" data-minute="0">12:00 AM</div><div class="xdsoft_time " data-hour="1" data-minute="0">1:00 AM</div><div class="xdsoft_time " data-hour="2" data-minute="0">2:00 AM</div><div class="xdsoft_time " data-hour="3" data-minute="0">3:00 AM</div><div class="xdsoft_time " data-hour="4" data-minute="0">4:00 AM</div><div class="xdsoft_time " data-hour="5" data-minute="0">5:00 AM</div><div class="xdsoft_time " data-hour="6" data-minute="0">6:00 AM</div><div class="xdsoft_time " data-hour="7" data-minute="0">7:00 AM</div><div class="xdsoft_time " data-hour="8" data-minute="0">8:00 AM</div><div class="xdsoft_time " data-hour="9" data-minute="0">9:00 AM</div><div class="xdsoft_time " data-hour="10" data-minute="0">10:00 AM</div><div class="xdsoft_time " data-hour="11" data-minute="0">11:00 AM</div><div class="xdsoft_time " data-hour="12" data-minute="0">12:00 PM</div><div class="xdsoft_time " data-hour="13" data-minute="0">1:00 PM</div><div class="xdsoft_time " data-hour="14" data-minute="0">2:00 PM</div><div class="xdsoft_time " data-hour="15" data-minute="0">3:00 PM</div><div class="xdsoft_time " data-hour="16" data-minute="0">4:00 PM</div><div class="xdsoft_time " data-hour="17" data-minute="0">5:00 PM</div><div class="xdsoft_time " data-hour="18" data-minute="0">6:00 PM</div><div class="xdsoft_time " data-hour="19" data-minute="0">7:00 PM</div><div class="xdsoft_time " data-hour="20" data-minute="0">8:00 PM</div><div class="xdsoft_time " data-hour="21" data-minute="0">9:00 PM</div><div class="xdsoft_time xdsoft_current" data-hour="22" data-minute="0">10:00 PM</div><div class="xdsoft_time " data-hour="23" data-minute="0">11:00 PM</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><button type="button" class="xdsoft_next"></button></div></div><div class="xdsoft_datetimepicker xdsoft_noselect xdsoft_"><div class="xdsoft_datepicker active"><div class="xdsoft_monthpicker"><button type="button" class="xdsoft_prev" style="visibility: visible;"></button><button type="button" class="xdsoft_today_button" style="visibility: visible;"></button><div class="xdsoft_label xdsoft_month"><span>January</span><div class="xdsoft_select xdsoft_monthselect xdsoft_scroller_box"><div style="margin-top: 0px;"><div class="xdsoft_option xdsoft_current" data-value="0">January</div><div class="xdsoft_option " data-value="1">February</div><div class="xdsoft_option " data-value="2">March</div><div class="xdsoft_option " data-value="3">April</div><div class="xdsoft_option " data-value="4">May</div><div class="xdsoft_option " data-value="5">June</div><div class="xdsoft_option " data-value="6">July</div><div class="xdsoft_option " data-value="7">August</div><div class="xdsoft_option " data-value="8">September</div><div class="xdsoft_option " data-value="9">October</div><div class="xdsoft_option " data-value="10">November</div><div class="xdsoft_option " data-value="11">December</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><i></i></div><div class="xdsoft_label xdsoft_year"><span>2022</span><div class="xdsoft_select xdsoft_yearselect xdsoft_scroller_box"><div style="margin-top: 0px;"><div class="xdsoft_option " data-value="1950">1950</div><div class="xdsoft_option " data-value="1951">1951</div><div class="xdsoft_option " data-value="1952">1952</div><div class="xdsoft_option " data-value="1953">1953</div><div class="xdsoft_option " data-value="1954">1954</div><div class="xdsoft_option " data-value="1955">1955</div><div class="xdsoft_option " data-value="1956">1956</div><div class="xdsoft_option " data-value="1957">1957</div><div class="xdsoft_option " data-value="1958">1958</div><div class="xdsoft_option " data-value="1959">1959</div><div class="xdsoft_option " data-value="1960">1960</div><div class="xdsoft_option " data-value="1961">1961</div><div class="xdsoft_option " data-value="1962">1962</div><div class="xdsoft_option " data-value="1963">1963</div><div class="xdsoft_option " data-value="1964">1964</div><div class="xdsoft_option " data-value="1965">1965</div><div class="xdsoft_option " data-value="1966">1966</div><div class="xdsoft_option " data-value="1967">1967</div><div class="xdsoft_option " data-value="1968">1968</div><div class="xdsoft_option " data-value="1969">1969</div><div class="xdsoft_option " data-value="1970">1970</div><div class="xdsoft_option " data-value="1971">1971</div><div class="xdsoft_option " data-value="1972">1972</div><div class="xdsoft_option " data-value="1973">1973</div><div class="xdsoft_option " data-value="1974">1974</div><div class="xdsoft_option " data-value="1975">1975</div><div class="xdsoft_option " data-value="1976">1976</div><div class="xdsoft_option " data-value="1977">1977</div><div class="xdsoft_option " data-value="1978">1978</div><div class="xdsoft_option " data-value="1979">1979</div><div class="xdsoft_option " data-value="1980">1980</div><div class="xdsoft_option " data-value="1981">1981</div><div class="xdsoft_option " data-value="1982">1982</div><div class="xdsoft_option " data-value="1983">1983</div><div class="xdsoft_option " data-value="1984">1984</div><div class="xdsoft_option " data-value="1985">1985</div><div class="xdsoft_option " data-value="1986">1986</div><div class="xdsoft_option " data-value="1987">1987</div><div class="xdsoft_option " data-value="1988">1988</div><div class="xdsoft_option " data-value="1989">1989</div><div class="xdsoft_option " data-value="1990">1990</div><div class="xdsoft_option " data-value="1991">1991</div><div class="xdsoft_option " data-value="1992">1992</div><div class="xdsoft_option " data-value="1993">1993</div><div class="xdsoft_option " data-value="1994">1994</div><div class="xdsoft_option " data-value="1995">1995</div><div class="xdsoft_option " data-value="1996">1996</div><div class="xdsoft_option " data-value="1997">1997</div><div class="xdsoft_option " data-value="1998">1998</div><div class="xdsoft_option " data-value="1999">1999</div><div class="xdsoft_option " data-value="2000">2000</div><div class="xdsoft_option " data-value="2001">2001</div><div class="xdsoft_option " data-value="2002">2002</div><div class="xdsoft_option " data-value="2003">2003</div><div class="xdsoft_option " data-value="2004">2004</div><div class="xdsoft_option " data-value="2005">2005</div><div class="xdsoft_option " data-value="2006">2006</div><div class="xdsoft_option " data-value="2007">2007</div><div class="xdsoft_option " data-value="2008">2008</div><div class="xdsoft_option " data-value="2009">2009</div><div class="xdsoft_option " data-value="2010">2010</div><div class="xdsoft_option " data-value="2011">2011</div><div class="xdsoft_option " data-value="2012">2012</div><div class="xdsoft_option " data-value="2013">2013</div><div class="xdsoft_option " data-value="2014">2014</div><div class="xdsoft_option " data-value="2015">2015</div><div class="xdsoft_option " data-value="2016">2016</div><div class="xdsoft_option " data-value="2017">2017</div><div class="xdsoft_option " data-value="2018">2018</div><div class="xdsoft_option " data-value="2019">2019</div><div class="xdsoft_option " data-value="2020">2020</div><div class="xdsoft_option " data-value="2021">2021</div><div class="xdsoft_option xdsoft_current" data-value="2022">2022</div><div class="xdsoft_option " data-value="2023">2023</div><div class="xdsoft_option " data-value="2024">2024</div><div class="xdsoft_option " data-value="2025">2025</div><div class="xdsoft_option " data-value="2026">2026</div><div class="xdsoft_option " data-value="2027">2027</div><div class="xdsoft_option " data-value="2028">2028</div><div class="xdsoft_option " data-value="2029">2029</div><div class="xdsoft_option " data-value="2030">2030</div><div class="xdsoft_option " data-value="2031">2031</div><div class="xdsoft_option " data-value="2032">2032</div><div class="xdsoft_option " data-value="2033">2033</div><div class="xdsoft_option " data-value="2034">2034</div><div class="xdsoft_option " data-value="2035">2035</div><div class="xdsoft_option " data-value="2036">2036</div><div class="xdsoft_option " data-value="2037">2037</div><div class="xdsoft_option " data-value="2038">2038</div><div class="xdsoft_option " data-value="2039">2039</div><div class="xdsoft_option " data-value="2040">2040</div><div class="xdsoft_option " data-value="2041">2041</div><div class="xdsoft_option " data-value="2042">2042</div><div class="xdsoft_option " data-value="2043">2043</div><div class="xdsoft_option " data-value="2044">2044</div><div class="xdsoft_option " data-value="2045">2045</div><div class="xdsoft_option " data-value="2046">2046</div><div class="xdsoft_option " data-value="2047">2047</div><div class="xdsoft_option " data-value="2048">2048</div><div class="xdsoft_option " data-value="2049">2049</div><div class="xdsoft_option " data-value="2050">2050</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><i></i></div><button type="button" class="xdsoft_next" style="visibility: visible;"></button></div><div class="xdsoft_calendar"><table><thead><tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr></thead><tbody><tr><td data-date="26" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_other_month xdsoft_weekend" title=""><div>26</div></td><td data-date="27" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date xdsoft_other_month" title=""><div>27</div></td><td data-date="28" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date xdsoft_other_month" title=""><div>28</div></td><td data-date="29" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date xdsoft_other_month" title=""><div>29</div></td><td data-date="30" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date xdsoft_other_month" title=""><div>30</div></td><td data-date="31" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date xdsoft_other_month" title=""><div>31</div></td><td data-date="1" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>1</div></td></tr><tr><td data-date="2" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>2</div></td><td data-date="3" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>3</div></td><td data-date="4" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>4</div></td><td data-date="5" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>5</div></td><td data-date="6" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>6</div></td><td data-date="7" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>7</div></td><td data-date="8" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>8</div></td></tr><tr><td data-date="9" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>9</div></td><td data-date="10" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>10</div></td><td data-date="11" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>11</div></td><td data-date="12" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>12</div></td><td data-date="13" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>13</div></td><td data-date="14" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>14</div></td><td data-date="15" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>15</div></td></tr><tr><td data-date="16" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>16</div></td><td data-date="17" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>17</div></td><td data-date="18" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>18</div></td><td data-date="19" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>19</div></td><td data-date="20" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>20</div></td><td data-date="21" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>21</div></td><td data-date="22" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>22</div></td></tr><tr><td data-date="23" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_current xdsoft_today xdsoft_weekend" title=""><div>23</div></td><td data-date="24" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>24</div></td><td data-date="25" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>25</div></td><td data-date="26" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>26</div></td><td data-date="27" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>27</div></td><td data-date="28" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>28</div></td><td data-date="29" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>29</div></td></tr><tr><td data-date="30" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>30</div></td><td data-date="31" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>31</div></td><td data-date="1" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date xdsoft_other_month" title=""><div>1</div></td><td data-date="2" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date xdsoft_other_month" title=""><div>2</div></td><td data-date="3" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date xdsoft_other_month" title=""><div>3</div></td><td data-date="4" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date xdsoft_other_month" title=""><div>4</div></td><td data-date="5" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_other_month xdsoft_weekend" title=""><div>5</div></td></tr></tbody></table></div><button type="button" class="xdsoft_save_selected blue-gradient-button" style="display: none;">Save Selected</button></div><div class="xdsoft_timepicker active"><button type="button" class="xdsoft_prev"></button><div class="xdsoft_time_box xdsoft_scroller_box"><div class="xdsoft_time_variant" style="margin-top: 0px;"><div class="xdsoft_time " data-hour="0" data-minute="0">12:00 AM</div><div class="xdsoft_time " data-hour="1" data-minute="0">1:00 AM</div><div class="xdsoft_time " data-hour="2" data-minute="0">2:00 AM</div><div class="xdsoft_time " data-hour="3" data-minute="0">3:00 AM</div><div class="xdsoft_time " data-hour="4" data-minute="0">4:00 AM</div><div class="xdsoft_time " data-hour="5" data-minute="0">5:00 AM</div><div class="xdsoft_time " data-hour="6" data-minute="0">6:00 AM</div><div class="xdsoft_time " data-hour="7" data-minute="0">7:00 AM</div><div class="xdsoft_time " data-hour="8" data-minute="0">8:00 AM</div><div class="xdsoft_time " data-hour="9" data-minute="0">9:00 AM</div><div class="xdsoft_time " data-hour="10" data-minute="0">10:00 AM</div><div class="xdsoft_time " data-hour="11" data-minute="0">11:00 AM</div><div class="xdsoft_time " data-hour="12" data-minute="0">12:00 PM</div><div class="xdsoft_time " data-hour="13" data-minute="0">1:00 PM</div><div class="xdsoft_time " data-hour="14" data-minute="0">2:00 PM</div><div class="xdsoft_time " data-hour="15" data-minute="0">3:00 PM</div><div class="xdsoft_time " data-hour="16" data-minute="0">4:00 PM</div><div class="xdsoft_time " data-hour="17" data-minute="0">5:00 PM</div><div class="xdsoft_time " data-hour="18" data-minute="0">6:00 PM</div><div class="xdsoft_time " data-hour="19" data-minute="0">7:00 PM</div><div class="xdsoft_time " data-hour="20" data-minute="0">8:00 PM</div><div class="xdsoft_time " data-hour="21" data-minute="0">9:00 PM</div><div class="xdsoft_time xdsoft_current" data-hour="22" data-minute="0">10:00 PM</div><div class="xdsoft_time " data-hour="23" data-minute="0">11:00 PM</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><button type="button" class="xdsoft_next"></button></div></div><div class="xdsoft_datetimepicker xdsoft_noselect xdsoft_"><div class="xdsoft_datepicker active"><div class="xdsoft_monthpicker"><button type="button" class="xdsoft_prev" style="visibility: visible;"></button><button type="button" class="xdsoft_today_button" style="visibility: visible;"></button><div class="xdsoft_label xdsoft_month"><span>January</span><div class="xdsoft_select xdsoft_monthselect xdsoft_scroller_box"><div style="margin-top: 0px;"><div class="xdsoft_option xdsoft_current" data-value="0">January</div><div class="xdsoft_option " data-value="1">February</div><div class="xdsoft_option " data-value="2">March</div><div class="xdsoft_option " data-value="3">April</div><div class="xdsoft_option " data-value="4">May</div><div class="xdsoft_option " data-value="5">June</div><div class="xdsoft_option " data-value="6">July</div><div class="xdsoft_option " data-value="7">August</div><div class="xdsoft_option " data-value="8">September</div><div class="xdsoft_option " data-value="9">October</div><div class="xdsoft_option " data-value="10">November</div><div class="xdsoft_option " data-value="11">December</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><i></i></div><div class="xdsoft_label xdsoft_year"><span>2022</span><div class="xdsoft_select xdsoft_yearselect xdsoft_scroller_box"><div style="margin-top: 0px;"><div class="xdsoft_option " data-value="1950">1950</div><div class="xdsoft_option " data-value="1951">1951</div><div class="xdsoft_option " data-value="1952">1952</div><div class="xdsoft_option " data-value="1953">1953</div><div class="xdsoft_option " data-value="1954">1954</div><div class="xdsoft_option " data-value="1955">1955</div><div class="xdsoft_option " data-value="1956">1956</div><div class="xdsoft_option " data-value="1957">1957</div><div class="xdsoft_option " data-value="1958">1958</div><div class="xdsoft_option " data-value="1959">1959</div><div class="xdsoft_option " data-value="1960">1960</div><div class="xdsoft_option " data-value="1961">1961</div><div class="xdsoft_option " data-value="1962">1962</div><div class="xdsoft_option " data-value="1963">1963</div><div class="xdsoft_option " data-value="1964">1964</div><div class="xdsoft_option " data-value="1965">1965</div><div class="xdsoft_option " data-value="1966">1966</div><div class="xdsoft_option " data-value="1967">1967</div><div class="xdsoft_option " data-value="1968">1968</div><div class="xdsoft_option " data-value="1969">1969</div><div class="xdsoft_option " data-value="1970">1970</div><div class="xdsoft_option " data-value="1971">1971</div><div class="xdsoft_option " data-value="1972">1972</div><div class="xdsoft_option " data-value="1973">1973</div><div class="xdsoft_option " data-value="1974">1974</div><div class="xdsoft_option " data-value="1975">1975</div><div class="xdsoft_option " data-value="1976">1976</div><div class="xdsoft_option " data-value="1977">1977</div><div class="xdsoft_option " data-value="1978">1978</div><div class="xdsoft_option " data-value="1979">1979</div><div class="xdsoft_option " data-value="1980">1980</div><div class="xdsoft_option " data-value="1981">1981</div><div class="xdsoft_option " data-value="1982">1982</div><div class="xdsoft_option " data-value="1983">1983</div><div class="xdsoft_option " data-value="1984">1984</div><div class="xdsoft_option " data-value="1985">1985</div><div class="xdsoft_option " data-value="1986">1986</div><div class="xdsoft_option " data-value="1987">1987</div><div class="xdsoft_option " data-value="1988">1988</div><div class="xdsoft_option " data-value="1989">1989</div><div class="xdsoft_option " data-value="1990">1990</div><div class="xdsoft_option " data-value="1991">1991</div><div class="xdsoft_option " data-value="1992">1992</div><div class="xdsoft_option " data-value="1993">1993</div><div class="xdsoft_option " data-value="1994">1994</div><div class="xdsoft_option " data-value="1995">1995</div><div class="xdsoft_option " data-value="1996">1996</div><div class="xdsoft_option " data-value="1997">1997</div><div class="xdsoft_option " data-value="1998">1998</div><div class="xdsoft_option " data-value="1999">1999</div><div class="xdsoft_option " data-value="2000">2000</div><div class="xdsoft_option " data-value="2001">2001</div><div class="xdsoft_option " data-value="2002">2002</div><div class="xdsoft_option " data-value="2003">2003</div><div class="xdsoft_option " data-value="2004">2004</div><div class="xdsoft_option " data-value="2005">2005</div><div class="xdsoft_option " data-value="2006">2006</div><div class="xdsoft_option " data-value="2007">2007</div><div class="xdsoft_option " data-value="2008">2008</div><div class="xdsoft_option " data-value="2009">2009</div><div class="xdsoft_option " data-value="2010">2010</div><div class="xdsoft_option " data-value="2011">2011</div><div class="xdsoft_option " data-value="2012">2012</div><div class="xdsoft_option " data-value="2013">2013</div><div class="xdsoft_option " data-value="2014">2014</div><div class="xdsoft_option " data-value="2015">2015</div><div class="xdsoft_option " data-value="2016">2016</div><div class="xdsoft_option " data-value="2017">2017</div><div class="xdsoft_option " data-value="2018">2018</div><div class="xdsoft_option " data-value="2019">2019</div><div class="xdsoft_option " data-value="2020">2020</div><div class="xdsoft_option " data-value="2021">2021</div><div class="xdsoft_option xdsoft_current" data-value="2022">2022</div><div class="xdsoft_option " data-value="2023">2023</div><div class="xdsoft_option " data-value="2024">2024</div><div class="xdsoft_option " data-value="2025">2025</div><div class="xdsoft_option " data-value="2026">2026</div><div class="xdsoft_option " data-value="2027">2027</div><div class="xdsoft_option " data-value="2028">2028</div><div class="xdsoft_option " data-value="2029">2029</div><div class="xdsoft_option " data-value="2030">2030</div><div class="xdsoft_option " data-value="2031">2031</div><div class="xdsoft_option " data-value="2032">2032</div><div class="xdsoft_option " data-value="2033">2033</div><div class="xdsoft_option " data-value="2034">2034</div><div class="xdsoft_option " data-value="2035">2035</div><div class="xdsoft_option " data-value="2036">2036</div><div class="xdsoft_option " data-value="2037">2037</div><div class="xdsoft_option " data-value="2038">2038</div><div class="xdsoft_option " data-value="2039">2039</div><div class="xdsoft_option " data-value="2040">2040</div><div class="xdsoft_option " data-value="2041">2041</div><div class="xdsoft_option " data-value="2042">2042</div><div class="xdsoft_option " data-value="2043">2043</div><div class="xdsoft_option " data-value="2044">2044</div><div class="xdsoft_option " data-value="2045">2045</div><div class="xdsoft_option " data-value="2046">2046</div><div class="xdsoft_option " data-value="2047">2047</div><div class="xdsoft_option " data-value="2048">2048</div><div class="xdsoft_option " data-value="2049">2049</div><div class="xdsoft_option " data-value="2050">2050</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><i></i></div><button type="button" class="xdsoft_next" style="visibility: visible;"></button></div><div class="xdsoft_calendar"><table><thead><tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr></thead><tbody><tr><td data-date="26" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_other_month xdsoft_weekend" title=""><div>26</div></td><td data-date="27" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date xdsoft_other_month" title=""><div>27</div></td><td data-date="28" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date xdsoft_other_month" title=""><div>28</div></td><td data-date="29" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date xdsoft_other_month" title=""><div>29</div></td><td data-date="30" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date xdsoft_other_month" title=""><div>30</div></td><td data-date="31" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date xdsoft_other_month" title=""><div>31</div></td><td data-date="1" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>1</div></td></tr><tr><td data-date="2" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>2</div></td><td data-date="3" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>3</div></td><td data-date="4" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>4</div></td><td data-date="5" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>5</div></td><td data-date="6" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>6</div></td><td data-date="7" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>7</div></td><td data-date="8" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>8</div></td></tr><tr><td data-date="9" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>9</div></td><td data-date="10" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>10</div></td><td data-date="11" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>11</div></td><td data-date="12" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>12</div></td><td data-date="13" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>13</div></td><td data-date="14" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>14</div></td><td data-date="15" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>15</div></td></tr><tr><td data-date="16" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>16</div></td><td data-date="17" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>17</div></td><td data-date="18" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>18</div></td><td data-date="19" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>19</div></td><td data-date="20" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>20</div></td><td data-date="21" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>21</div></td><td data-date="22" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>22</div></td></tr><tr><td data-date="23" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_current xdsoft_today xdsoft_weekend" title=""><div>23</div></td><td data-date="24" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>24</div></td><td data-date="25" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>25</div></td><td data-date="26" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>26</div></td><td data-date="27" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>27</div></td><td data-date="28" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>28</div></td><td data-date="29" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>29</div></td></tr><tr><td data-date="30" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>30</div></td><td data-date="31" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>31</div></td><td data-date="1" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date xdsoft_other_month" title=""><div>1</div></td><td data-date="2" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date xdsoft_other_month" title=""><div>2</div></td><td data-date="3" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date xdsoft_other_month" title=""><div>3</div></td><td data-date="4" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date xdsoft_other_month" title=""><div>4</div></td><td data-date="5" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_other_month xdsoft_weekend" title=""><div>5</div></td></tr></tbody></table></div><button type="button" class="xdsoft_save_selected blue-gradient-button" style="display: none;">Save Selected</button></div><div class="xdsoft_timepicker active"><button type="button" class="xdsoft_prev"></button><div class="xdsoft_time_box xdsoft_scroller_box"><div class="xdsoft_time_variant" style="margin-top: 0px;"><div class="xdsoft_time " data-hour="0" data-minute="0">12:00 AM</div><div class="xdsoft_time " data-hour="1" data-minute="0">1:00 AM</div><div class="xdsoft_time " data-hour="2" data-minute="0">2:00 AM</div><div class="xdsoft_time " data-hour="3" data-minute="0">3:00 AM</div><div class="xdsoft_time " data-hour="4" data-minute="0">4:00 AM</div><div class="xdsoft_time " data-hour="5" data-minute="0">5:00 AM</div><div class="xdsoft_time " data-hour="6" data-minute="0">6:00 AM</div><div class="xdsoft_time " data-hour="7" data-minute="0">7:00 AM</div><div class="xdsoft_time " data-hour="8" data-minute="0">8:00 AM</div><div class="xdsoft_time " data-hour="9" data-minute="0">9:00 AM</div><div class="xdsoft_time " data-hour="10" data-minute="0">10:00 AM</div><div class="xdsoft_time " data-hour="11" data-minute="0">11:00 AM</div><div class="xdsoft_time " data-hour="12" data-minute="0">12:00 PM</div><div class="xdsoft_time " data-hour="13" data-minute="0">1:00 PM</div><div class="xdsoft_time " data-hour="14" data-minute="0">2:00 PM</div><div class="xdsoft_time " data-hour="15" data-minute="0">3:00 PM</div><div class="xdsoft_time " data-hour="16" data-minute="0">4:00 PM</div><div class="xdsoft_time " data-hour="17" data-minute="0">5:00 PM</div><div class="xdsoft_time " data-hour="18" data-minute="0">6:00 PM</div><div class="xdsoft_time " data-hour="19" data-minute="0">7:00 PM</div><div class="xdsoft_time " data-hour="20" data-minute="0">8:00 PM</div><div class="xdsoft_time " data-hour="21" data-minute="0">9:00 PM</div><div class="xdsoft_time xdsoft_current" data-hour="22" data-minute="0">10:00 PM</div><div class="xdsoft_time " data-hour="23" data-minute="0">11:00 PM</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><button type="button" class="xdsoft_next"></button></div></div><div class="xdsoft_datetimepicker xdsoft_noselect xdsoft_"><div class="xdsoft_datepicker active"><div class="xdsoft_monthpicker"><button type="button" class="xdsoft_prev" style="visibility: visible;"></button><button type="button" class="xdsoft_today_button" style="visibility: visible;"></button><div class="xdsoft_label xdsoft_month"><span>January</span><div class="xdsoft_select xdsoft_monthselect xdsoft_scroller_box"><div style="margin-top: 0px;"><div class="xdsoft_option xdsoft_current" data-value="0">January</div><div class="xdsoft_option " data-value="1">February</div><div class="xdsoft_option " data-value="2">March</div><div class="xdsoft_option " data-value="3">April</div><div class="xdsoft_option " data-value="4">May</div><div class="xdsoft_option " data-value="5">June</div><div class="xdsoft_option " data-value="6">July</div><div class="xdsoft_option " data-value="7">August</div><div class="xdsoft_option " data-value="8">September</div><div class="xdsoft_option " data-value="9">October</div><div class="xdsoft_option " data-value="10">November</div><div class="xdsoft_option " data-value="11">December</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><i></i></div><div class="xdsoft_label xdsoft_year"><span>2022</span><div class="xdsoft_select xdsoft_yearselect xdsoft_scroller_box"><div style="margin-top: 0px;"><div class="xdsoft_option " data-value="1950">1950</div><div class="xdsoft_option " data-value="1951">1951</div><div class="xdsoft_option " data-value="1952">1952</div><div class="xdsoft_option " data-value="1953">1953</div><div class="xdsoft_option " data-value="1954">1954</div><div class="xdsoft_option " data-value="1955">1955</div><div class="xdsoft_option " data-value="1956">1956</div><div class="xdsoft_option " data-value="1957">1957</div><div class="xdsoft_option " data-value="1958">1958</div><div class="xdsoft_option " data-value="1959">1959</div><div class="xdsoft_option " data-value="1960">1960</div><div class="xdsoft_option " data-value="1961">1961</div><div class="xdsoft_option " data-value="1962">1962</div><div class="xdsoft_option " data-value="1963">1963</div><div class="xdsoft_option " data-value="1964">1964</div><div class="xdsoft_option " data-value="1965">1965</div><div class="xdsoft_option " data-value="1966">1966</div><div class="xdsoft_option " data-value="1967">1967</div><div class="xdsoft_option " data-value="1968">1968</div><div class="xdsoft_option " data-value="1969">1969</div><div class="xdsoft_option " data-value="1970">1970</div><div class="xdsoft_option " data-value="1971">1971</div><div class="xdsoft_option " data-value="1972">1972</div><div class="xdsoft_option " data-value="1973">1973</div><div class="xdsoft_option " data-value="1974">1974</div><div class="xdsoft_option " data-value="1975">1975</div><div class="xdsoft_option " data-value="1976">1976</div><div class="xdsoft_option " data-value="1977">1977</div><div class="xdsoft_option " data-value="1978">1978</div><div class="xdsoft_option " data-value="1979">1979</div><div class="xdsoft_option " data-value="1980">1980</div><div class="xdsoft_option " data-value="1981">1981</div><div class="xdsoft_option " data-value="1982">1982</div><div class="xdsoft_option " data-value="1983">1983</div><div class="xdsoft_option " data-value="1984">1984</div><div class="xdsoft_option " data-value="1985">1985</div><div class="xdsoft_option " data-value="1986">1986</div><div class="xdsoft_option " data-value="1987">1987</div><div class="xdsoft_option " data-value="1988">1988</div><div class="xdsoft_option " data-value="1989">1989</div><div class="xdsoft_option " data-value="1990">1990</div><div class="xdsoft_option " data-value="1991">1991</div><div class="xdsoft_option " data-value="1992">1992</div><div class="xdsoft_option " data-value="1993">1993</div><div class="xdsoft_option " data-value="1994">1994</div><div class="xdsoft_option " data-value="1995">1995</div><div class="xdsoft_option " data-value="1996">1996</div><div class="xdsoft_option " data-value="1997">1997</div><div class="xdsoft_option " data-value="1998">1998</div><div class="xdsoft_option " data-value="1999">1999</div><div class="xdsoft_option " data-value="2000">2000</div><div class="xdsoft_option " data-value="2001">2001</div><div class="xdsoft_option " data-value="2002">2002</div><div class="xdsoft_option " data-value="2003">2003</div><div class="xdsoft_option " data-value="2004">2004</div><div class="xdsoft_option " data-value="2005">2005</div><div class="xdsoft_option " data-value="2006">2006</div><div class="xdsoft_option " data-value="2007">2007</div><div class="xdsoft_option " data-value="2008">2008</div><div class="xdsoft_option " data-value="2009">2009</div><div class="xdsoft_option " data-value="2010">2010</div><div class="xdsoft_option " data-value="2011">2011</div><div class="xdsoft_option " data-value="2012">2012</div><div class="xdsoft_option " data-value="2013">2013</div><div class="xdsoft_option " data-value="2014">2014</div><div class="xdsoft_option " data-value="2015">2015</div><div class="xdsoft_option " data-value="2016">2016</div><div class="xdsoft_option " data-value="2017">2017</div><div class="xdsoft_option " data-value="2018">2018</div><div class="xdsoft_option " data-value="2019">2019</div><div class="xdsoft_option " data-value="2020">2020</div><div class="xdsoft_option " data-value="2021">2021</div><div class="xdsoft_option xdsoft_current" data-value="2022">2022</div><div class="xdsoft_option " data-value="2023">2023</div><div class="xdsoft_option " data-value="2024">2024</div><div class="xdsoft_option " data-value="2025">2025</div><div class="xdsoft_option " data-value="2026">2026</div><div class="xdsoft_option " data-value="2027">2027</div><div class="xdsoft_option " data-value="2028">2028</div><div class="xdsoft_option " data-value="2029">2029</div><div class="xdsoft_option " data-value="2030">2030</div><div class="xdsoft_option " data-value="2031">2031</div><div class="xdsoft_option " data-value="2032">2032</div><div class="xdsoft_option " data-value="2033">2033</div><div class="xdsoft_option " data-value="2034">2034</div><div class="xdsoft_option " data-value="2035">2035</div><div class="xdsoft_option " data-value="2036">2036</div><div class="xdsoft_option " data-value="2037">2037</div><div class="xdsoft_option " data-value="2038">2038</div><div class="xdsoft_option " data-value="2039">2039</div><div class="xdsoft_option " data-value="2040">2040</div><div class="xdsoft_option " data-value="2041">2041</div><div class="xdsoft_option " data-value="2042">2042</div><div class="xdsoft_option " data-value="2043">2043</div><div class="xdsoft_option " data-value="2044">2044</div><div class="xdsoft_option " data-value="2045">2045</div><div class="xdsoft_option " data-value="2046">2046</div><div class="xdsoft_option " data-value="2047">2047</div><div class="xdsoft_option " data-value="2048">2048</div><div class="xdsoft_option " data-value="2049">2049</div><div class="xdsoft_option " data-value="2050">2050</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><i></i></div><button type="button" class="xdsoft_next" style="visibility: visible;"></button></div><div class="xdsoft_calendar"><table><thead><tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr></thead><tbody><tr><td data-date="26" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_other_month xdsoft_weekend" title=""><div>26</div></td><td data-date="27" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date xdsoft_other_month" title=""><div>27</div></td><td data-date="28" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date xdsoft_other_month" title=""><div>28</div></td><td data-date="29" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date xdsoft_other_month" title=""><div>29</div></td><td data-date="30" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date xdsoft_other_month" title=""><div>30</div></td><td data-date="31" data-month="11" data-year="2021" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date xdsoft_other_month" title=""><div>31</div></td><td data-date="1" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>1</div></td></tr><tr><td data-date="2" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>2</div></td><td data-date="3" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>3</div></td><td data-date="4" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>4</div></td><td data-date="5" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>5</div></td><td data-date="6" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>6</div></td><td data-date="7" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>7</div></td><td data-date="8" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>8</div></td></tr><tr><td data-date="9" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>9</div></td><td data-date="10" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>10</div></td><td data-date="11" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>11</div></td><td data-date="12" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>12</div></td><td data-date="13" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>13</div></td><td data-date="14" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>14</div></td><td data-date="15" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>15</div></td></tr><tr><td data-date="16" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>16</div></td><td data-date="17" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>17</div></td><td data-date="18" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>18</div></td><td data-date="19" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>19</div></td><td data-date="20" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>20</div></td><td data-date="21" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>21</div></td><td data-date="22" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>22</div></td></tr><tr><td data-date="23" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_current xdsoft_today xdsoft_weekend" title=""><div>23</div></td><td data-date="24" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>24</div></td><td data-date="25" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date" title=""><div>25</div></td><td data-date="26" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date" title=""><div>26</div></td><td data-date="27" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date" title=""><div>27</div></td><td data-date="28" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date" title=""><div>28</div></td><td data-date="29" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_weekend" title=""><div>29</div></td></tr><tr><td data-date="30" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week0 xdsoft_date xdsoft_weekend" title=""><div>30</div></td><td data-date="31" data-month="0" data-year="2022" class="xdsoft_date xdsoft_day_of_week1 xdsoft_date" title=""><div>31</div></td><td data-date="1" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week2 xdsoft_date xdsoft_other_month" title=""><div>1</div></td><td data-date="2" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week3 xdsoft_date xdsoft_other_month" title=""><div>2</div></td><td data-date="3" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week4 xdsoft_date xdsoft_other_month" title=""><div>3</div></td><td data-date="4" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week5 xdsoft_date xdsoft_other_month" title=""><div>4</div></td><td data-date="5" data-month="1" data-year="2022" class="xdsoft_date xdsoft_day_of_week6 xdsoft_date xdsoft_other_month xdsoft_weekend" title=""><div>5</div></td></tr></tbody></table></div><button type="button" class="xdsoft_save_selected blue-gradient-button" style="display: none;">Save Selected</button></div><div class="xdsoft_timepicker active"><button type="button" class="xdsoft_prev"></button><div class="xdsoft_time_box xdsoft_scroller_box"><div class="xdsoft_time_variant" style="margin-top: 0px;"><div class="xdsoft_time " data-hour="0" data-minute="0">12:00 AM</div><div class="xdsoft_time " data-hour="1" data-minute="0">1:00 AM</div><div class="xdsoft_time " data-hour="2" data-minute="0">2:00 AM</div><div class="xdsoft_time " data-hour="3" data-minute="0">3:00 AM</div><div class="xdsoft_time " data-hour="4" data-minute="0">4:00 AM</div><div class="xdsoft_time " data-hour="5" data-minute="0">5:00 AM</div><div class="xdsoft_time " data-hour="6" data-minute="0">6:00 AM</div><div class="xdsoft_time " data-hour="7" data-minute="0">7:00 AM</div><div class="xdsoft_time " data-hour="8" data-minute="0">8:00 AM</div><div class="xdsoft_time " data-hour="9" data-minute="0">9:00 AM</div><div class="xdsoft_time " data-hour="10" data-minute="0">10:00 AM</div><div class="xdsoft_time " data-hour="11" data-minute="0">11:00 AM</div><div class="xdsoft_time " data-hour="12" data-minute="0">12:00 PM</div><div class="xdsoft_time " data-hour="13" data-minute="0">1:00 PM</div><div class="xdsoft_time " data-hour="14" data-minute="0">2:00 PM</div><div class="xdsoft_time " data-hour="15" data-minute="0">3:00 PM</div><div class="xdsoft_time " data-hour="16" data-minute="0">4:00 PM</div><div class="xdsoft_time " data-hour="17" data-minute="0">5:00 PM</div><div class="xdsoft_time " data-hour="18" data-minute="0">6:00 PM</div><div class="xdsoft_time " data-hour="19" data-minute="0">7:00 PM</div><div class="xdsoft_time " data-hour="20" data-minute="0">8:00 PM</div><div class="xdsoft_time " data-hour="21" data-minute="0">9:00 PM</div><div class="xdsoft_time xdsoft_current" data-hour="22" data-minute="0">10:00 PM</div><div class="xdsoft_time " data-hour="23" data-minute="0">11:00 PM</div></div><div class="xdsoft_scrollbar"><div class="xdsoft_scroller" style="display: block; height: 10px; margin-top: 0px;"></div></div></div><button type="button" class="xdsoft_next"></button></div></div><link rel="stylesheet" id="wistia_popover_css" href="./Monitor_files/jquery.fancybox.css"><iframe id="intercom-frame" style="position: absolute !important; opacity: 0 !important; width: 1px !important; height: 1px !important; top: 0 !important; left: 0 !important; border: none !important; display: block !important; z-index: -1 !important; pointer-events: none;" aria-hidden="true" tabindex="-1" title="Intercom" src="./Monitor_files/saved_resource.html"></iframe><div class="intercom-lightweight-app"><div class="intercom-lightweight-app-launcher intercom-launcher" role="button" tabindex="0" aria-label="Open Intercom Messenger" aria-live="polite"><div class="intercom-lightweight-app-launcher-icon intercom-lightweight-app-launcher-icon-open"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 32"><path d="M28 32s-4.714-1.855-8.527-3.34H3.437C1.54 28.66 0 27.026 0 25.013V3.644C0 1.633 1.54 0 3.437 0h21.125c1.898 0 3.437 1.632 3.437 3.645v18.404H28V32zm-4.139-11.982a.88.88 0 00-1.292-.105c-.03.026-3.015 2.681-8.57 2.681-5.486 0-8.517-2.636-8.571-2.684a.88.88 0 00-1.29.107 1.01 1.01 0 00-.219.708.992.992 0 00.318.664c.142.128 3.537 3.15 9.762 3.15 6.226 0 9.621-3.022 9.763-3.15a.992.992 0 00.317-.664 1.01 1.01 0 00-.218-.707z"></path></svg></div><div class="intercom-lightweight-app-launcher-icon intercom-lightweight-app-launcher-icon-minimize"><svg viewBox="0 0 16 14" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M.116 4.884l1.768-1.768L8 9.232l6.116-6.116 1.768 1.768L8 12.768.116 4.884z"></path></svg></div></div><style id="intercom-lightweight-app-style" type="text/css">
  @keyframes intercom-lightweight-app-launcher {
    from {
      opacity: 0;
      transform: scale(0.5);
    }
    to {
      opacity: 1;
      transform: scale(1);
    }
  }

  @keyframes intercom-lightweight-app-gradient {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  @keyframes intercom-lightweight-app-messenger {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .intercom-lightweight-app {
    position: fixed;
    z-index: 2147483001;
    width: 0;
    height: 0;
    font-family: intercom-font, "Helvetica Neue", "Apple Color Emoji", Helvetica, Arial, sans-serif;
  }

  .intercom-lightweight-app-gradient {
    position: fixed;
    z-index: 2147483002;
    width: 500px;
    height: 500px;
    bottom: 0;
    right: 0;
    pointer-events: none;
    background: radial-gradient(
      ellipse at bottom right,
      rgba(29, 39, 54, 0.16) 0%,
      rgba(29, 39, 54, 0) 72%);
    animation: intercom-lightweight-app-gradient 200ms ease-out;
  }

  .intercom-lightweight-app-launcher {
    position: fixed;
    z-index: 2147483003;
    bottom: 20px;
    right: 20px;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #06467d;
    cursor: pointer;
    box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.06), 0 2px 32px 0 rgba(0, 0, 0, 0.16);
    animation: intercom-lightweight-app-launcher 250ms ease;
  }

  .intercom-lightweight-app-launcher:focus {
    outline: none;
    
  }

  .intercom-lightweight-app-launcher-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 0;
    left: 0;
    width: 60px;
    height: 60px;
    transition: transform 100ms linear, opacity 80ms linear;
  }

  .intercom-lightweight-app-launcher-icon-open {
    
        opacity: 1;
        transform: rotate(0deg) scale(1);
      
  }

  .intercom-lightweight-app-launcher-icon-open svg {
    width: 28px;
    height: 32px;
  }

  .intercom-lightweight-app-launcher-icon-open svg path {
    fill: rgb(255, 255, 255);
  }

  .intercom-lightweight-app-launcher-icon-self-serve {
    
        opacity: 1;
        transform: rotate(0deg) scale(1);
      
  }

  .intercom-lightweight-app-launcher-icon-self-serve svg {
    height: 56px;
  }

  .intercom-lightweight-app-launcher-icon-self-serve svg path {
    fill: rgb(255, 255, 255);
  }

  .intercom-lightweight-app-launcher-custom-icon-open {
    max-height: 36px;
    max-width: 36px;
    
        opacity: 1;
        transform: rotate(0deg) scale(1);
      
  }

  .intercom-lightweight-app-launcher-icon-minimize {
    
        opacity: 0;
        transform: rotate(-60deg) scale(0);
      
  }

  .intercom-lightweight-app-launcher-icon-minimize svg {
    width: 16px;
  }

  .intercom-lightweight-app-launcher-icon-minimize svg path {
    fill: rgb(255, 255, 255);
  }

  .intercom-lightweight-app-messenger {
    position: fixed;
    z-index: 2147483003;
    overflow: hidden;
    background-color: white;
    animation: intercom-lightweight-app-messenger 250ms ease-out;
    
        width: 376px;
        height: calc(100% - 120px);
        max-height: 704px;
        min-height: 250px;
        right: 20px;
        bottom: 100px;
        box-shadow: 0 5px 40px rgba(0,0,0,0.16);
        border-radius: 8px;
      
  }

  .intercom-lightweight-app-messenger-header {
    height: 75px;
    background: linear-gradient(
      135deg,
      rgb(40, 94, 112) 0%,
      rgb(13, 31, 37) 100%
    );
  }

  @media print {
    .intercom-lightweight-app {
      display: none;
    }
  }
</style></div><style id="wistia_22_style" type="text/css" class="wistia_injected_style">
@font-face {
font-family: 'WistiaPlayerInterNumbersSemiBold';
font-feature-settings: 'tnum' 1;
src: url(data:application/x-font-woff;charset=utf-8;base64,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);
}
</style></body></html>