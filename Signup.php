<html>
<head>
<style>
.header
{font-family:trebuchet ms;
color:red;
font size:20;
/*background-color:black;*/
padding:20px;}
body
{background-image:url(Wolverine.jpg);
font-family:times new roman;
color:white;
background-color:white;
}
</style>
<title>Movies Hunt</title>
<script src="gen_validatorv4.js" type="text/javascript"></script>
</head>

<body link="black"vlink="yellow"alink="yellow">
<div class="header">
<h1>### SignUp ###</h1>
 </div>
<pre>
<br>                                       <fieldset ><legend><font size="5" face=times><b>Enter your details here : </b><font></legend>
<form action="signedup.php" method="POST"id="signin">
Email-Id         <input type="text" name="email_id"><br>
Name             <input type="text" name="name"><br>
Mobile number    <input type="text" name="mob"><br>
Password         <input type="password" name="password"><br><br>
<input type="submit" value="Sign Up" name="signup" style="height:30px; width:100px">
</form>
</fieldset>
<script  type="text/javascript">
 var frmvalidator = new Validator("signin");
 frmvalidator.addValidation("email_id","email");
 frmvalidator.addValidation("email_id","req");
 frmvalidator.addValidation("name","req","Please enter your Name");
 frmvalidator.addValidation("name","maxlen=20","Max length for Name is 20");
 frmvalidator.addValidation("mob","maxlen=10","Please Enter a valid phone number");
 frmvalidator.addValidation("mob","minlen=10","Please Enter a valid phone number");
 frmvalidator.addValidation("mob","req","Entering your mobile no is compulsory");
 frmvalidator.addValidation("mob","numeric","Please Enter a valid phone number");
 frmvalidator.addValidation("password","req","Please Provide us with a Password to secure your account");
 
 </script>
</pre>
<center><p><font size="4">Contact us<br>@9087003258</font></p></center>
</body>
</html>