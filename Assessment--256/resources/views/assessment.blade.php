<body>
<form action = "assessmentpost" method = "POST">
 {{ csrf_field() }}
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
		<h2> Assessment Form:</h2>
		<table>
			<tr>
				<td>First Name: </td>
				<td><input type = "text" name = "firstname" /></td>
			</tr>

			<tr>
				<td>Last Name:</td>
				<td><input type = "text" name = "lastname" /></td>
			</tr>
			<tr>
			<td>Favortie Color: </td>
				<td><input type = "text" name = "color" /></td>
			</tr>
			<tr>
			<td>Birth Month: </td>
				<td><input type = "text" name = "month" /></td>
			</tr>
			<tr>
				<td colspan = "2" align = "center">
					<input type = "submit" value = "Submit" />
				</td>
		</table>
	</form>

	 
		</body>