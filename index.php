<html>
<head>
    <title>Working with Sessions in PHP - MrBool Tutorial</title>
</head>
<body>

<form method="post" action="controller.php" />
    <fieldset id="fie">

    Retruning user, please login here
        <legend>Sign-in</legend><br />
            <label>Username : </label>
            
            <input type="text" name="username" id="username"  /><br />
            
            <label>Password :</label>
            
                <input type="password" name="password" id="password" /><br />
                <input type="submit" value="Sign-in" />	
    </fieldset>


</form>

<form method="post" action="NewUser.php" />
 <fieldset>

    If you are new here, then welcome to Axelonet's PHP webpage. Get yourself registered and move on.
    	<legend>Sign-Up</legend><br />
        	<label>Name : </label>

        	<input type="text" name="name" id="name" /><br />

        	<label>New Username :</label>
            
                <input type="newusername" name="newusername" id="newusername" /><br />
				
			<label>New Password :</label>
            
                <input type="newpassword" name="newpassword" id="newpassword" /><br />

                <input type="submit" value="Sign-Up" />	
    </fieldset>

</body>
</html>
 