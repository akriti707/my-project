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
           width:260px;
           height:400px;
           top:50%;
           left:50%;
           transform:translate(-50%,-50%);
           box-sizing:border-box;
		   position:absolute;
		   padding:40px 20px;
		} 
.usrimg{  width:100px;
  		  height:60px;
		 
		  overflow:hidden;
		  position:absolute;
		  top:calc(-100px/2);
		  left:calc(50%-50px);
		} 
h2{ margin:0px;
	padding:0 0 10px;
    text-align:center;
   }	
.log-box input{ width:100%;
				margin-bottom:20px;
			   }
.log-box input[type="email"],.log-box input[type="password"],.log-box input[type="number"],.log-box input[type="text"]
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
.log-box input[type="submit"]{ 
                                width:40%;
								border:none;
								outline:none;
								height:30px;
								font-size:18px;
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
<div class="reg">
<h2>Register To Your Account</h2>

<input type="email" placeholder="email">
<input type="text" placeholder="name">
<input type="password" placeholder="password">
<input type="password" placeholder="confirm password"><br>
<input type="submit" value="register">
</div>
</body>
</html>