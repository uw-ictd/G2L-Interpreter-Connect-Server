<!DOCTYPE html>
<html>
	<head>
		<meta  name = "viewport" content = "initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no">

		<script src="dhtmlx/dhtmlxscheduler_mobile.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="dhtmlx/dhtmlxscheduler_mobile.css">

		<title>Event handling: add, delete, edit</title>
		<script type="text/javascript" charset="utf-8">
			//scheduler.config.init_date = new Date(2011,4,1);
			
			var uid = 1327694098489; //"scheduler"
			
			dhx.ready(function(){
				dhx.ui.fullScreen();
    			dhx.ui({
					view: "scheduler",
					id: uid,
					save: "recurring_events_connector.php"
				});
				$$("scheduler").load("recurring_events_connector.php?uid=" + uid, uid);
			});

		</script>
</head>
	<body>
	</body>
</html>