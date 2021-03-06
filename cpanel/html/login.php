<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>


	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body{
		margin:0px;
		user-select:none;
		font-family: 'Open Sans';
		overflow: hidden;
		user-select: none;
	}
	.left{
		width: 40%;
		float:left;
		height:100vh;
		background:white; 
		margin:0px;
	}
	.right{
		width:60%;
		float:left;
		height:100vh;
		background:#B2DFDB; 
		margin:0px;
	}
	.text{
		position: relative;
		height: 40%;
	}
	#logintxth1{
		font-family: 'Roboto';
	}
	.logintxth2{
		color:#898989;
		font-family: 'Open Sans';
	}
	#l_img{
		width:90%;
		height:auto;
		top: 40%;
		left: 2%;
		position: relative;
	}
	#form{
		position: relative;
		height: auto;
	}
	#righthellow{
	    font-size:50px;
		font-weight: 400;
	}
	#rightptag{
	    font-size:20px;
		color: #424242;
	}
	#gobtn{
		background: #33315d;
		border:none;
		color: white;
		letter-spacing: 1px;
		border-radius: 2px;
		transition: .2s;
	}
	#gobtn:hover{
		background: none;
		border:2px solid #33315d;
		color: #33315d;
	}

	#forgotp{
		color: rgb(0,0,0);
		float: right;
		width: 35%;
		line-height: 50px;
		font-size: 1.011vw;

	}

			/* Extra small devices (phones, 600px and down) */
		@media only screen and (max-width: 600px) {
			body{
				overflow-y: auto;
				overflow-x: hidden;
			}
			.left{
				margin-top: -50px;
				width: 100%;
				height: 50vh;
			}
			.left > img{
				margin-top: 20%;
			}
			.right{
				border-radius: 30px 30px 0px 0px; 
				margin-top: 50%;
				border:2px solid white;
				width: 100%;
				height: auto;
			}
			#righthellow , #rightptag{
				margin-top: 10px;
				text-align: center;
			}
			.form-control-lg{
				width: 90%;
			}
			.form-lg{
				margin-left: 5%;				
			}
			#gobtn{
				width: 30%;
				height: 40px;
				font-size: 1rem;
				margin-top: -50px;
				margin-left: 50px;
				}
			#forgotp{
				margin-top: -50px;
				font-size: .5rem;
				font-weight: 5 00;
			}
			.topformobile{
				margin-top: -100px;
			}
		}

		/* Small devices (portrait tablets and large phones, 600px and up) */
		@media only screen and (min-width: 600px) {}

		/* Medium devices (landscape tablets, 768px and up) */

		/* Large devices (laptops/desktops, 992px and up) */
		@media only screen and (min-width: 600px) {	
			
				.right{
					padding-left: 13vw;
					padding-top: 15vh;
				}
			#logintxth1{
					letter-spacing: 0.5px;
					font-weight: 50;
					font-size: 4vw;
				}
			.logintxth2{
					font-size: 1.2vw;
				}
				#form{
					width: 35vw;
				}
				#gobtn{
					width: 30%;
					height: 55px;
					font-size: 2rem;
				}
		}

		/* Extra large devices (large laptops and desktops, 1200px and up) */
		@media only screen and (min-width: 1200px) {
				.left{
					width: 30%;
				}
				.right{
					width: 70%;
					padding-left: 17vw;
					padding-top: 15vh;
				}
				#logintxth1{
					letter-spacing: 0.5px;
					font-weight: 1000;
					font-size: 4vw;
				}
				.logintxth2{
					font-size: 1.1vw;
				}
				#form{
					width: 35vw;
				}
				#gobtn{
					width: 30%;
					height: 55px;
					font-size: 2rem;
				}
		}


		.md-form input[type=text]{
			box-shadow: 0 1px 0 0 #000 !important;
			border-bottom: 1px solid #000 !important;
		}
		.md-form input[type=password]{
			box-shadow: 0 1px 0 0 #000 !important;
			border-bottom: 1px solid #000 !important;
		}
		.md-form input[type=text]:focus{
			box-shadow: 0 1px 0 0 #33315d !important;
			border-bottom: 1px solid #33315d !important;
		}
		.md-form input[type=password]:focus{
			box-shadow: 0 1px 0 0 #33315d !important;
			border-bottom: 1px solid #33315d !important;
		}
		.md-form input[type=text]:focus + #enroll,.md-form input[type=password]:focus + #passp {
			color:#33315d; 
		}
		.strike {
	        display: block;
	        text-align: center;
	        overflow: hidden;
	        white-space: nowrap; 
	    }

	    .strike > span {
	        position: relative;
	        display: inline-block;
	        color: black;

	    }
		
	    .strike > span:before,
	    .strike > span:after {
	        content: "";
	        position: absolute;
	        top: 50%;
	        width: 9999px;
	        height: 1px;
	        background: grey;
	    }

	    .strike > span:before {
	        right: 100%;
	        margin-right: 15px;
	    }

	    .strike > span:after {
	        left: 100%;
	        margin-left: 15px;
	    }
</style>
<body>
<div class="left">
	<div class="text">
		<h1>&nbsp;</h1>
		<center><h1 id="logintxth1">Login</h1></center>
		<br/>
		<center><p class="logintxth2">Book-Sharing is much better when <br/>you logged in.</p></center>
	</div>
	<img src="../img/login1.png" id="l_img">
</div>	
<div class="right">
	<form onsubmit="return valid()">
	<div id="form">	
		<b><h1 id="righthellow">Hello Admin !</h1></b>
		<br/>
		<div class="md-form form-lg">
		  <input type="text" id="inputLGEx" class="form-control form-control-lg" name="em">
		  <label for="inputLGEx" id="enroll">Username</label>
		</div>
		<br/>
		<div class="md-form form-lg">
		  <input type="password" id="inputLGEx1" class="form-control form-control-lg" name="ps">
		  <label for="inputLGEx1" id="passp">Password</label>
		</div>
		<br/>
		<br/>
		<br/>
		<br/>
		<div id="buttonForgot">
		<center><button id="gobtn">Go</button></center>
		</div>
		<br/>
		<br/>
		<br/>	
	</div>
	</form>
</div>
</body>
<script type="text/javascript">
	var form=document.forms[0];
var form=document.forms[0];
    function valid(){
        $.ajax({
            url:'../php/login.php',
            data:{
                id:form.em.value,
                pass:form.ps.value
            },
            type:"POST",
            success:function(a,b){
                console.log(a);
                if(a=="success"){
/*                    var cuki = "key1="+form.em.value+"; expires="+new Date(new Date().getTime()+9999999999999).toGMTString()+"; path=Books/cpanel/;";
                    document.cookie=cuki;
*/                    window.location.replace("../");
                }else
                alert(a);
            }
        });
        return false;
    }
</script>
</html>