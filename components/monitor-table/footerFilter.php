 <!-- footer issue filter   -->
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>


 <div class="container">
 <div class="row">
 	<div class="col-sm">
 <input type="text" class="filter" id="IssueTraking" placeholder="Issue ID/Tracking #" >
 <label ></label>
</div>
<div class="col-sm-md-auto">
 <div>
    <label>
        <input type="checkbox" id="security" checked="checked">
        Security
    </label>
    <label>
        <input type="checkbox" id="parking" checked="checked">
        Parking
    </label>
    <label>
        <input type="checkbox" id="maintenance" checked="checked">
        Maintenance
    </label>
    <label>
        <input type="checkbox" id="closed" checked="checked">
        Include Close
    </label>
 </div>
</div>
<div class="col-sm"></div>
 </div>






 <div class="row alert-secondary">
 	
 	<div class="col-auto" >
 		<div class="mt-1">
 		<img src="https://demo2.silvertracker.net/Images/summarysm.png">
		<img src="https://demo2.silvertracker.net/Images/vehiclesearch.png">
 		<img src="https://demo2.silvertracker.net/Images/taskbluesm.png">
 		<img src="https://demo2.silvertracker.net/Images/checkpointbluesm.png">
 		<img src="https://demo2.silvertracker.net/Images/gps.png">
 		<img src="https://demo2.silvertracker.net/Images/messageboardsm.png">
 		<img src="https://demo2.silvertracker.net/Images/NewNote.png">
 		</div>
 	</div>

 	<div class="col-5">
 		<div class="text-center mt-2">
 		<input type="button" id="cmdnew" value="New Action" style="background-color: #03508e; color: white;">
 	</div>
 	</div>

 	<div class="col-auto" >
 		<div class="float-right">
 		<img src="https://demo2.silvertracker.net/Images/StartNormal.png">
 		<img src="https://demo2.silvertracker.net/Images/PreviousNormal.png">
 		<label id="lblpage">1</label>
 		<img src="https://demo2.silvertracker.net/Images/NextNormal.png">
 		<input type="button" value="Update" style="color: white; background-color: #03508e; width: 100px">
 	</div>
 	</div>

 </div>

</div>


