<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Registration | email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  
  <body style="padding:0; margin:0; font-family: Helvetica; color: #848484; font-size: 22px; text-align: left;">  	
     <table width="100%" height="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">  		
	  		<tr>
	  			<td bgcolor="#fff" style="padding: 0 ; text-align:center;" align="center" valign="top">                
                
	                <table width="800" align="center" cellpadding="0" cellspacing="0">
						<tr>
							<td height="50" style="text-align:center; padding:20px 0 20px; border-bottom: 1px solid #ddd;" align="center"> <img src="{{asset('logo.jpg')}}" /> </td>
						</tr>
					</table>    
    
				    <table width="800" align="center" cellpadding="0" cellspacing="0">				  		
						<tr>
							<td style="padding: 50px 25px; color:#000; font-size:12px; text-align: center;" bgcolor="#fff">
								<h2 style="font-weight: normal; font-size: 25px;"> Hello {{$user['first_name']}} {{$user['last_name']}}</h2>
									
								<p style="font-size: 22px; padding: 0 30px;"> Thank You | You are successfully registered with Fly.</p><br />
								<p style="font-size: 22px; padding: 0 30px;"> Please verify your account. </p>

								<a href="{{route('verifyUser',$user['id'])}}" target="_blank" style="background: #5df9ff; color:#000; font-size: 28px; margin: 30px auto 10px; border-radius: 40px; border:2px solid #fff; box-shadow: 0 0 10px rgba(0,0,0,.4); padding: 8px 20px; width: 250px;font-family: Helvetica; "> Verify Now </a>
							</td>
						</tr>
						<tr>
							<td style="color:#666; text-align: center; font-size: 18px;"> If you have any questions, just reply to this email - we're always happy to help out. <a href="#_" style="color:#666;">Team Fly</a> </td>
						</tr>
					</table>				 
	  			</td>	  			
	  		</tr>  		
	</table> 
  </body>
</html>