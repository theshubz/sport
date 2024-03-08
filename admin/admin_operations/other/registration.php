<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style type="text/css">
		body{
			width:100%;
/*	background: url("images/backgrounds.jpg") no-repeat center center; width:100%;*/
		}
		/*.header{
			width:100%;
			height:50px;
			
			margin-top: -20px;
			margin-left: -10px;
		}*/
		.logo{
			width:30%;
			

			margin-left: 20px;
		}

		.box{
			width:50%;
			margin-top: 20px;
			
			margin-left: 350px;
		}
		.tbl{
			width:70%;
			height:320px;
			font-size: 20px;
			font-weight: bolder;
			

			}
			.tbl2{
           	width:40%;
           	margin-left: 140px;
           }
			
			#tf{
				width:100%;
				height:20px;
				font-size: 15px;
				font-weight: bolder;
				border:3px solid white;
				background-color: transparent;
				border-radius: 8px;

				}
				#tf:hover {
                  background: lightgray;
                  
                  }
			#btn{
				font-family: "Poppins", sans-serif;
                text-transform: uppercase;
                  font-weight: 400;
                  font-size: 12px;
                 letter-spacing: 1px;
                display: inline-block;
                 padding: 5px 20px;
                border-radius: 30px;
                  transition: 0.5s;
                 margin: 10px;
               border: 2px solid #fff;
                  color: #fff;
                  text-decoration: none;
              background-color: transparent;
			}
			#btn:hover {
				 background: lightgray;
 /* background: #2dc997;*/
 /* border: 2px solid #2dc997;*/
}
.header{
	margin-top: 0px;
	
	width:95%;
	height:50px;
	
}
.links{
	float:right;
	margin-top: -20px;
	
	position: absolute;
	margin-left: 700px;
	
	width:30%;
	padding: 10px;
	word-spacing: 20px;
	text-align: center;

}
#link{
	text-decoration: none;
	
	color:blue;
	font-weight: bolder;
	padding:8px;
}
#link:hover{
	
	border-radius: 5px;
	background-color: gray;
	padding:8px;
}


	</style>
</head>
<body background="images/hero-bg.jpg">
	
  <header class="header">
  <font color="gray" size="6">Ship Management System</font>
   <div class="links">
   <a href="home.php" id="link">Home</a>
   <a href="login.php" id="link">Login</a>
   <a href="registration.php" id="link">Registration</a>
     </div>
  
  </header>
       

</div>
	<div class="box">
		<form method="post" action="./php/registration_insert.php">
	 <table class="tbl" cellpadding="2px">
      <tr>
       <th colspan="4" align="center"><h3><u>Admin Registration</u></h3></th>
   </tr>
   <tr>
     <th colspan="2" align="left">Name :</th>
     <th colspan="2" ><input type="text" id="tf" name="ad_name"></th>
   </tr>
   
   <tr>
       <th colspan="2" align="left">Email ID :</th>
       <th colspan="2" ><input type="email" id="tf" name="ad_email"></th>
   </tr>
   <tr>
     <th colspan="2" align="left"> Password :</th>
     <th colspan="2"><input type="Password" id="tf" name="ad_pass"></th>
 </tr>
 <!-- <tr>
     <th colspan="2" align="left"> Confirm Password :</th>
     <th colspan="2"><input type="Password" id="tf"></th>
 </tr> -->
 <tr>
     <th colspan="2" align="left">Phone No :</th>
   	<th colspan="2"><input type="number" id="tf" name="ad_mobile"></th>
   </tr>
   
   <tr>
       <th colspan="2" align="left"> Address :</th>
       <th colspan="2"><input type="text" id="tf" name="ad_add"></th>
     </tr>
    
     <tr>
     	<th colspan="2" align="left"> Gender :</th>
       <th colspan="2" align="left">Male<input type="radio" id="radio" name="gender" value="male"> &nbsp; &nbsp; &nbsp; &nbsp;
        Female<input type="radio" id="radio" name="gender" value="female"></th>
     </tr>
     
 </table>
 <table class="tbl2">
   	<tr>
       <th colspan="4" align="center"><input type="submit" id="btn" value="Register" name="btn_reg"></th>
        
        	<th colspan="4"  align="center"><input type="reset" id="btn" value="Reset" class="btn_reset"></th>
        </tr>
   </table>
 
</form>
	</div>

</body>
</html>