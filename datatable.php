<!DOCTYPE html>
<html>
<head>
	<title>Data Table</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>
	<div class="container">
		<br><br>
		<h1>Data Table with JSON data</h1>
		<table id="data-table" class="table table-border">
			<thead>
				<tr>
					<th>Name</th>
					<th>Gender</th>
					<th>Designation</th>
				</tr>			
			</thead>
		</table>	
	</div>	
</body>
</html>

<script type="text/javascript">
	$(document).ready(function (){
		$('#data-table').DataTable({
			"ajax" : "myjson.json",
			"columns" : [
				{ "data" : "name" },
				{ "data" : "gender" },
				{ "data" : "designation" },
			]
		});
	});
</script>