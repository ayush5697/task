<?php include 'header.php'  ?>

<script>  

	function validateform(){  
		var name=document.myform.username.value;
		var email=document.myform.email.value;
		var emailp = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var mobile=document.myform.mobile.value;  
		var mobilep = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;

		if (name==null || name=="") {  
		  alert("Name can't be blank");
		  return false;  
		}

		if (email == '' || !emailp.test(email)) {
		    alert('Please enter a valid email address.');
		    return false;
		}       

		if(mobile=='' || !mobilep.match(mobile)) {
		  alert('Please enter a  mobile number.');
		  return false;
	    }
	}
</script> 

<div class="col-md-offset-3 col-md-6">
	<div class="form-user">
		<br><h3 style="color:blue; font-family: italic;" align="center"><b>Register User</b></h3>
		<div class="update-form">
		<form method="post" name="myform" action="insert.php" enctype="multipart/form-data" onsubmit="return validateform()">
			
			<input type="text" placeholder="NAME" name="username" class="form-control" style="font-weight: bold;">			

			<input type="email" placeholder="EMAIL*" name="email" class="form-control" style="font-weight: bold;">

			<input type="text" placeholder="MOBILE NO*" minlength="10" maxlength="10" name="mobile" class="form-control" style="font-weight: bold;">

			<div class="form-group col-lg-4 col-lg-offset-4">
          		<button type="submit" value="Register" name="submit" class="btn btn-primary" style="border-radius: 25px; width: 120px;">ADD USER</button>
      		</div>
      	</form>
      	</div>

	</div>	
</div>
        
<?php include 'footer.php'  ?>

            
          
            
              

              
              