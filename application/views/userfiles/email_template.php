<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title></title>
	<style>
		table td{
			padding: 5px 10px 5px 10px;
		}
		table tr{
			background: #eee;
		}
		table tr:nth-child(odd){
			background: #eef8fb;
		}
	</style>
</head>
<body>
	<table>
	<tr>
		<td>Title</td>
		<td> - </td>
		<td><?=$title?></td>
	</tr>
	<tr>
		<td>Email Address</td>
		<td> - </td>
		<td><?=$email?></td>
	</tr>
	<tr>
		<td>Subject</td>
		<td> - </td>
		<td><?=$subject?></td>
	</tr>
	<tr>
		<td>Message</td>
		<td> - </td>
		<td><?=$message?></td>
	</tr>
</table>
</body>
</html>
