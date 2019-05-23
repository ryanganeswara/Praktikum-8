<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>

<style type="text/css">		
form {
  border: 4px solid #f1f1f1;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: blue;
  color: white;
  border-radius: 20px;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
  left: 50%;
  transform: translateX(-50%);
  position: absolute;
  margin-top: 80px;
  width: 25%;
}

span.psw {
  float: right;
  padding-top: 16px;
}

@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }  
}
	</style>
</head>
<body>
	<form action="auth_login" method="post">
	
	  <div class="container">	  	
	  	<?php if($this->session->flashdata('message')): ?>
	  	<center><h4 style="color: red;"><?php echo $this->session->flashdata('message'); ?></h4></center>
	  	<?php endif; ?>
	    <center><label for="username"><b>Username</b></label></center>
	    <input type="text" placeholder="Masukkan Username" name="username" required>
	    <center><label for="password"><b>Password</b></label></center>
	    <input type="password" placeholder="Masukkan Password" name="password" required>
	    <button type="submit">LOGIN</button>		
	  </div>
	
	</form>
</body>
</html>