<form method="POST" action="#" id="signup_form" name="signup_form" novalidate=""
 onsubmit="return validate_signupform()">
		<label>Username</label>
        <input type="text" id="rusername" name="rusername" placeholder="Username">
        <br>
		
		<label>Password</label>
        <input type="password" id="rpassword"  name="rpassword" placeholder="Password"><br>
		<label>Select Role</label>
        <select id="rrole"  name="rrole">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select><br>
        <button type="submit" name="signup_form" >Sign Up</button>
    </form>
	  

    <div id="errormsg" style="color: red;"></div>


    <script language="javascript" for="signup_form" type="text/javascript">
function validate_signupform() 
{ 	
	var x = 0;
	if($("#rusername").val() == ''){
        $("#errormsg").text("All fields are required");
        $("#rusername").css("border", "1px solid red");
		x = 1;
	}else{
		$("#errormsg").text(""); 
        $("#rusername").css("border", "");
	}

	if($("#rpassword").val() == ''){
		$("#errormsg").text("All fields are required");
        $("#rpassword").css("border", "1px solid red");
		x = 1;
	}else{
		$("#errormsg").text(""); 
        $("#rpassword").css("border", "");
	}
	if (x)
		return false;
	else{ 
		var form = new FormData($('#signup_form')[0]);
		$.ajax({
			type: "POST",
			url: "scripts.php",
			data: form,
			cache: false,
			contentType: false,
			processData: false,
			success: function(res) {$('#errormsg').html(res);/**/window.setTimeout( window.location.href='login', 15000 ); }
      });
      return false;
	}
}	
</script>

    
