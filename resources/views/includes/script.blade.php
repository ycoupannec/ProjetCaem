<!--GENERAL SCRIPT (BOOTSTRAP AND Cie)-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-------------------------------------->

<script>
var btnActivity = document.querySelectorAll(".activityCheckbox");
function displayActivity()
	{
		var count = 0;

		for (i=0 ; btnActivity[i] ; i++)
			{
				activityId = btnActivity[i].value;
				document.getElementById(activityId).classList.add("activityHide");

				if(btnActivity[i].checked)
					{
						count++;
						document.getElementById(activityId).classList.remove("activityHide");
					}

			}


		if(count == 0)
			{
				for(i=0 ; btnActivity[i] ; i++)
					{
						activityId = btnActivity[i].value;
						document.getElementById(activityId).classList.remove("activityHide");
					}
			}
	}
</script>
