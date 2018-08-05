
<html>
	<head>
		<title>Registration form</title>
<style>
p.normal {
     width:600px;
    font-style: normal;
}

p.italic {
    font-style: italic;
}

p.oblique {
    font-style: oblique;
}
p  {
    color: black;
    font-family: courier;
    font-size: 160%;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 13px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
	background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 13px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	
	
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}
.button1:hover {
    background-color: #4CAF50;
    color: white;
}
.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
}
.button2:hover {
    background-color: #f44336;
    color: white;
}
</style>
		
		<div  align="center">
		<p class="normal"> Registration </p>
		</div>
		
		
	</head>
	
	<body>
	<style>

</style>

		<form  method="Post" id="reg_form" action="myFunction()">
		<div align="center">
	
        <table>
			
			  
			    <tr>
				<td> Name :    </td>
				</tr>
				<tr>
				<td> <input type="text" name="name" id="Name" value="" style="width:450px;height:35px;"></td>
			    </tr>
			   <tr>
				<td>Email Address :</td>
				</tr>
				<tr>
				<td><input type="text" name="email" id ="email" value="" style="width:450px;height:35px;"></td>
			  </tr>
			  <tr>
				<td>Password :</td>
				</tr>
				<tr>
				<td><input type="password" name="pass" id ="R_pass" value="" style="width:450px;height:35px;"></td>
			  </tr>
			  <tr>
				<td>Confirm Password :</td>
				</tr>
				<tr>
				<td><input type="password" name="c_pass" id ="R_c_pass" value="" style="width:450px;height:35px;"></td>
			  </tr>
			  <tr>
			  <td> </td>
			  </tr>
			  
			  <tr>
			  
				<td align="center"> <button type="button" class="button1" onclick="myFunction()">Register</button>
                <button class="button button2">Cancle</button></td>
			  </tr>			
    
	<tr>	
<td><p id="t" value="t" name="t">testing is done here</p></td>
	</tr>					
			  
		  </table>
		  </div>
		</form> 
		<script>



 

function myFunction() {

     var name=document.getElementById("Name").value);
     var email= document.getElementById("email").value);
	 var pass= document.getElementById("R_pass").value);
	 var c_pass= document.getElementById("R_c_pass").value);

	 if(name==""&&email==""&&pass==""&&c_pass==""&&(pass!=c_pass))
	 {
                  window.alert ("Fill up all option"); 
      }
 else
 {
	 		// form=document.getElementById('reg_form');

         //form.action='data.php';

        //form.submit();
		 document.getElementById("t").innerHTML=name+" "+email+" "+pass+" "+c_pass;
		}
		 }


	</body>
</html>