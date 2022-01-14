<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Your Session OTP</title>
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
									
								<p style="font-size: 22px; padding: 0 30px;"> Your session OTP is</p><br />

								<div style="color:#5df9ff; font-size: 35px; margin: 30px auto 10px; width: 250px;font-family: Helvetica; "> {{$otp}} </div>
							</td>
						</tr>
						<tr>
							<td style="color:#666; text-align: center; font-size: 18px;"> If you have any questions, just reply to this email - we're always happy to help out. <a href="mailto:support@fly.com" style="color:#666;">Team Fly</a> </td>
						</tr>
						<tr>
			              	<td style="color:#666; text-align: center; font-size: 12px;padding-top: 20px;"> <a href="">unsubscribe</a></td>
			            </tr>
					</table>				 
	  			</td>	  			
	  		</tr>  		
	</table> 
  </body>
</html>