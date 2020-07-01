<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form action="sapa" method="post">
	@csrf
	<h1>Buat Account Baru</h1>
	<h2>Sign Up Form</h2>
	<p>First Name : </p>
	<input type="text" name="first_name">
	<p>Last Name : </p>
	<input type="text" name="last_name">
	<br>
	<br>
	<label>Gender</label><br>
	<br>
	<input type="radio" name="ge"> Male<br>
	<input type="radio" name="ge"> Female<br>
	<input type="radio" name="ge"> Other<br>
	<br>
	<label>Nationality</label><br>
	<br>
	<select>
		<option>Indonesia</option>
		<option>Inggris</option>
		<option>Belanda</option>
	</select>
	<br>
	<br>
	<label>Language spoken</label><br>
	<br>
	<input type="checkbox"> Male<br>
	<input type="checkbox"> Female<br>
	<input type="checkbox"> Other<br>
	<br>	
	<br>
	<br>
	<label>Bio</label><br>
	<br>
	<textarea cols="40" rows="15">
	</textarea>
	<br>
	<br>
	<button type="submit">Sign Up</button>
	</form>
</body>
</html>