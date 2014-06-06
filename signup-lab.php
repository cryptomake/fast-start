<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/signup.css">
</head>
<body>
  <div class="form_wrapper">
  	<h4>Sign Up</h4>
  	<p>It's free and always will be.</p>
  	<form action="/signup.php" method="post" enctype="multipart/form-data">
  		<div class="input_field">
  		  <label for="first_name">First Name:</label>
  		  <input type="text" name="first_name">
  		</div>
  		
  		<div class="input_field">
  		  <label for="last_name">Last Name:</label>
  		  <input type="text" name="last_name">
  		</div>
  		
  		<div class="input_field">
  		  <label for="email">Your Email:</label>
  		  <input type="text" name="email">
  		</div>

  		<div class="input_field">
  		  <label for="reenter_email">Re-enter Email:</label>
  		  <input type="text" name="reenter_email">
  		</div>

  		<div class="input_field">
  		  <label for="password">New Passsword:</label>
  		  <input type="text" name="password">
  		</div>

  		<div class="select_sex">
  		  <label for="">I am:</label>
  		  <select>
  			<option>Select Sex:</option>
  			<option>Male</option>
  			<option>Famale</option>
  		  </select>
  		</div>

        <div class="input_birthday">
          <label>Birthday:</label>
  		  <select name="month_of_birth">
  		    <option>Month:</option>
  		    
          </select>
          <select name="day_of_birth">
  		    <option>Day:</option>
          </select>
          <select name="year_of_birth">
  		    <option>Year:</option>
          </select>
          <a class="message">Why do I need to provide this?</a>
        </div>
  		
  		<input type="submit" value="Sign Up">
  	</form>
  </div>
</body>
</html>