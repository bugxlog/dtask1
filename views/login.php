<form method="POST" action="#" id="login_form" name="login_form" novalidate=""
 onsubmit="return validate_loginform()">
		<label>Username</label>
        <input type="text" id="lusername" name="lusername" placeholder="Username">
        <br>
		
		<label>Password</label>
        <input type="password" id="lpassword"  name="lpassword" placeholder="Password"><br>
		<label>Select Role</label>
        <select id="lrole"  name="lrole">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select><br>
        <button type="submit" name="login_form" >Login</button>
    </form>

    <div id="errormsg" style="color: red;"></div>

    <script language="javascript" for="login_form" type="text/javascript">
function validate_loginform() 
{ 	
	var x = 0;
	if($("#lusername").val() == ''){
        $("#errormsg").text("All fields are required");
        $("#lusername").css("border", "1px solid red");
		x = 1;
	}else{
		$("#errormsg").text(""); 
        $("#lusername").css("border", "");
	}

	if($("#lpassword").val() == ''){
		$("#errormsg").text("All fields are required");
        $("#lpassword").css("border", "1px solid red");
		x = 1;
	}else{
		$("#errormsg").text(""); 
        $("#lpassword").css("border", "");
	}
	if (x)
		return false;

	else if($("#lrole").val() == 'admin'){ 
alert('admin')
		var form = new FormData($('#login_form')[0]);
		form.append('lrole', $("#lrole").val());
		$.ajax({
			type: "POST",
			url: "scripts.php",
			data: form,
			cache: false,
			contentType: false,
			processData: false,
			success: function(res) {
              if (res === "authenticated") {
               
                window.location.href = "admindash.php";
            } else {
                $('#errormsg').html(res);
            }
		   

		}
	
	});
      return false;
	}
	else if($("#lrole").val() == 'user'){ 
alert('user');
var form = new FormData($('#login_form')[0]);
form.append('lrole', $("#lrole").val());
$.ajax({
	type: "POST",
	url: "scripts.php",
	data: form,
	cache: false,
	contentType: false,
	processData: false,
	success: function(res) { 
		if (res === "authenticated") {
               
                window.location.href = "userdash.php";
            } else {
                $('#errormsg').html(res);
            }
		   

		}



});
return false;
}





}	
</script>

    
