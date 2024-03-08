<?php 
 include('./loginverify.php');
 $name=$_SESSION['name'];
 $id=$_SESSION['id'];
 $con=mysqli_connect("localhost","root","","sports_management");
 $sql="SELECT username,age,mobile,email,address,FROM  user_registration WHERE userid=$id";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
 mysqli_close($con);
 ?>
 <html>
 <head>
 	<title>profileupdate</title>
 </head>
 	<body>
 <fieldset>
 	<legend align=center>&nbsp update profile</legend>
 <table height="400px">
                         
                            <tr>
                                <td>User name :</td>
                        <td><input name="username"  type="text" /></td></tr>
                            <tr>
                                <td>Age:</td>
                        <td><input name="age"  type="text" /></td></tr>
                            <tr>
                        <td> Mobile :</td>    
                                <td><input name="number"  type="number" /></td></tr>
                            <tr>
                        <td>Email:</td>
                                <td><input name="email"  type="text" /></td></tr>
                            <tr>
                        <td>Address:</td>
                                <td><input name="area" type="text"></td></tr>
                            <tr>
                               <div class="form-group">
							
								<td>&nbsp;</td>
								<td><input type="submit" value="UPDATE" class="btn btn-primary"> &nbsp

							</tr>

						</div>
					
                               
                                
                        </table>
 	</fieldset>
 	</body>
 	</html>


