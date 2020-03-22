<html>
<head>
<title></title>
<style>
body{  margin:0px;
       padding:0px;
	   font-family:sans-serif;
	   background:url(ig1.jpg);
	   background-size:cover;
	}
.log-box{  background:rgba(0,0,0,.5);
           color:#fff;
           width:280px;
           height:380px;
           top:50%;
           left:50%;
           transform:translate(-50%,-50%);
           box-sizing:border-box;
		   position:absolute;
		   padding:60px 30px;
		} 
.usrimg{  width:100px;
  		  height:60px;
		 
		  overflow:hidden;
		  position:absolute;
		  top:calc(-100px/2);
		  left:calc(50%-50px);
		} 
h2{ margin:0px;
	padding:0 0 20px;
    text-align:center;
   }	
.log-box input{ width:100%;
				margin-bottom:20px;
			   }
.log-box input[type="email"],.log-box input[type="password"],.log-box input[type="phone"]
{   border:none;
	border-bottom:1px solid #fff;
	background:transparent;
	outline:none;
	height:40px;
	color:#fff;
	font-size:16px;
}
::placeholder{ color:rgba(255,255,255,.5);
             }
.log-box input[type="button"],.log-box input[type="submit"]{ 
                                width:40%;
								border:none;
								outline:none;
								height:30px;
								font-size:16px;
								cursor:pointer;
								border-radius:60px;
							 }
a{ text-decoration:none;
   color:#fff;
 }   
							 
			   
              
</style>	
</head>
<body>
<div class="log-box">
<img class="usrimg" src="https://incubateind.com/images/IncubateIND%20Black.png"/>
<h2>Login To Your Account</h2>
<form action="wel.php">
<input placeholder="enter email" type="email" required=""/><br>
<input placeholder="enter password" type="password" required="" /><br>
<input placeholder="enter phone number" maxlength="10" type="phone"  required="" /><br>
<a href="register.php"><input type="button" value="Register"/></a> &nbsp&nbsp <input type="submit" value="Sign in"/>
</form>
</div>
</body>
</html>
