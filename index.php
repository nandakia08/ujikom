<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>From Login</title>
</head>
<body>
	<div class="container">
		<div class="content">
			<h2>Silakan Login</h2>
				<form action="aksi/cek_login">				
				<div mb-3>
				<label for="exampleInputEmail1" class="form-label">username</label>
				<input type="text" name="username"form-control required id="ExampleInputEmail1">
				</div>
				<div class="mb-3">
					<label for="ExampleInputEmail1" class="form-label">password</label>
					<input type="text" name="password"form-control required id="ExampleInputEmail1">
				</div>
				<button class="btn btn-primary">Login</button>
		        <button class="btn btn-primary">register</button>
				</form>
			</div>
		</div>
	</div>
</head>