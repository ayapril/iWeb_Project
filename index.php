<?
session_start()
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html>
<head>
<meta http-equiv='content-type' content='text/html; charset=iso-8859-1' />
<title>Index FleamarketKG</title>
<meta name='keywords' content='' />
<meta name='description' content='' />
<link rel='stylesheet' type='text/css' href='sample.css' />
</head>
<body>
<div id='upbg'></div>
<div id='outer'>
  <div id='header'>
  	<div id='headercontent'>
			<h1><img src='http://i.imgur.com/nwrj6RX.png?1'/></h1>
		  <p>Flea market in Bishkek</p>
    </div>
  <div id='search'>
		<form method='post' action=''>
			<input type='text' class='text' name='search' />
			<input type='submit' class='submit' name='search' value='Search' />
		</form>
	</div>  
  </div>
	<div id='menu'>
			<ul>
			<li><a href='#'>Home</a></li>
			<li><a href='#'>Forums</a></li>
			<li><a href='#'>Help</a></li>
			<li><a href='#'>Search</a></li>
			<li><a href='#'>About Forum</a></li>
			<li><a href='#'>Notification</a></li>
			</ul>
	</div>
  <div id='menubottom'></div>  
  <div id='login'>
      <form method='post' action='user_validation.php'>
			<input type='text' class='login' value='email or mobile number' name='username' />
			<input type='password' class='login' name='password' />
			<input type='submit' name='login' value='Log-in' />
	    </form>
  </div>
	<div id='content_main'>
		<div id='register_form'>
			<form method='post' action='register.php'>
				<input type='text' size='30' class='reg' name='username' value='Email or mobile number'/>
				<input type='text' size='30' class='reg' name='reusername' value='Re-enter email or mobile number' />
				<input type='text' size='30' class='reg' name='first_name' value='First Name' />
				<input type='text' size='30' class='reg' name='last_name' value='Last Name' />
				<input type='password' size='30' class='reg' name='password' value='password' />
				<div id='radio_gender'>
					<input type='radio' name='user_gender' value='Female'>Female
					<input type='radio' name='user_gender' value='Male'>Male
				</div>
				<input type='submit' class='reg' name='sign_in' value='Register' />
		</div>
		<div id='notification'>
      <h5>NEWS</h5>
      <span><li>IMPORTANT: page test text whatever important very inportant blablabla</li></span>
  	</div>	
	</div>
	<div class='divider1'></div>
		<div id='forum_container'>
			<div id='primarycontent'>
				<div class='post'>
					<h4>Sell</h4>
					<div class='contentarea'></div>
				</div>		
				<div class='divider2'></div>
				<div class='post'>
					<h4>Buy</h4>
					<div class='contentarea'></div>
				</div>
				<div class='divider2'></div>		
				<div class='post'>
					<h4>Rent</h4>
					<div class='contentarea'></div>
				</div>
			</div>
		</div>	
	<div id='user_nav'>
		<div class='navigation'>
			<ul>
				<li><a href=''>Message</a></li>
				<li><a href=''>Post</a></li>
				<li><a href=''>My Info</a></li>
			</ul>
		</div>
	</div>
	<div id='footer'>
		<div class='left'>2015 FleamarketKG. All rights reserved</div>
	</div>
	
</div>
</body>
</html>