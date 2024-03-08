<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		body{
			width:100%;
			/* background:  url("images/hero-bg.jpg") no-repeat center center;*/
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
			margin-top: 10px;
			
			margin-left: 300px;
		}
		.tbl{
			width:70%;
			height:200px;
			font-size: 25px;
			font-weight: bolder;
           }
           .tbl2{
           	width:40%;
           	margin-left: 170px;
           }
			
			#tf{
				width:100%;
				height:25px;
				font-size: 18px;
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
                  font-size: 13px;
                 letter-spacing: 1px;
                display: inline-block;
                 padding: 5px 20px;
                border-radius: 50px;
                  transition: 0.5s;
                 margin: 10px;
               border: 2px solid #fff;
                  color: #fff;
                  text-decoration: none;
              background-color: transparent;
			}
			#btn:hover {
				 background: lightgray;
 /* background: #2dc997;
  border: 2px solid #2dc997;*/
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



	<div class="box">
		<form method="post" action="./php/login_insert.php">
	 <table class="tbl" cellpadding="2px">
      <tr>
       <th colspan="4"><h3><u>Login</u></h3></th>
   </tr>
   <tr>
     <th colspan="2" align="left">Email :</th>
     <th colspan="2"><input type="email" id="tf" name="uemail"></th>
   </tr>
  <tr><th></th><th></th></tr>
   <tr>
     <th colspan="2" align="left">Password : </th>
    <th colspan="2"> <input type="Password" id="tf" name="upass"></th>
   </tr>
   </table>
   <table class="tbl2">
   	<tr>
       <th colspan="4" align="center"><input type="submit" id="btn" value="Login" name="btn_login"></th>
        
        	<th colspan="4"  align="center"><input type="reset" id="btn" value="Reset" class="btn2"></th>
        </tr>
   </table>

</form>
	</div>

</body>
</html>