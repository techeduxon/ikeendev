<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function starting_reading($ready_data){
	
	if ($ready_data['hall']  == 'A') {
     	$hall = 'Aahvana';
	}elseif ($ready_data['hall']  == 'B') {
     	$hall  = 'Aathidya';
	}elseif ($ready_data['hall']  == 'Both') {
	   $hall  = 'Aahvana & Aathidya';
	}
 
$massage ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<!--[if gte mso 9]>
	<xml>
		<o:OfficeDocumentSettings>
		<o:AllowPNG/>
		<o:PixelsPerInch>96</o:PixelsPerInch>
		</o:OfficeDocumentSettings>
	</xml>
	<![endif]-->
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="format-detection" content="date=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="x-apple-disable-message-reformatting" />
    <!--[if !mso]><!-->
   	<link href="https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i" rel="stylesheet" />
    
	<title>Aahvana</title>
	<!--[if gte mso 9]>
	<style type="text/css" media="all">
		sup { font-size: 100% !important; }
	</style>
	<![endif]-->
	

	<style type="text/css" media="screen">
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f6eddc; -webkit-text-size-adjust:none }
		a { color:#000001; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
		.mcnPreviewText { display: none !important; }
		.text-footer2 a { color: #ffffff; } 
		
		/* Mobile styles */
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
			.mobile-shell { width: 100% !important; min-width: 100% !important; }
			
			.m-center { text-align: center !important; }
			.m-left { text-align: left !important; margin-right: auto !important; }
			
			.center { margin: 0 auto !important; }
			.content2 { padding: 8px 15px 12px !important; }
			.t-left { float: left !important; margin-right: 30px !important; }
			.t-left-2  { float: left !important; }
			
			.td { width: 100% !important; min-width: 100% !important; }

			.content { padding: 30px 15px !important; }
			.section { padding: 30px 15px 0px !important; }

			.m-br-15 { height: 15px !important; }
			.mpb5 { padding-bottom: 5px !important; }
			.mpb15 { padding-bottom: 15px !important; }
			.mpb20 { padding-bottom: 20px !important; }
			.mpb30 { padding-bottom: 30px !important; }
			.mp30 { padding-bottom: 30px !important; }
			.m-padder { padding: 0px 15px !important; }
			.m-padder2 { padding-left: 15px !important; padding-right: 15px !important; }
			.p70 { padding: 30px 0px !important; }
			.pt70 { padding-top: 30px !important; }
			.p0-15 { padding: 0px 15px !important; }
			.p30-15 { padding: 30px 15px !important; }			
			.p30-15-0 { padding: 30px 15px 0px 15px !important; }			
			.p0-15-30 { padding: 0px 15px 30px 15px !important; }			


			.text-footer { text-align: center !important; }

			.m-td,
			.m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

			.m-block { display: block !important; }

			.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

			.column,
			.column-dir,
			.column-top,
			.column-empty,
			.column-top-30,
			.column-top-60,
			.column-empty2,
			.column-bottom { float: left !important; width: 100% !important; display: block !important; }

			.column-empty { padding-bottom: 15px !important; }
			.column-empty2 { padding-bottom: 30px !important; }

			.content-spacing { width: 15px !important; }
		}
	</style>
</head>
<body class="body"style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f6eddc; -webkit-text-size-adjust:none;">


		
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6eddc">
		<tr>
			<td align="center" valign="top">
				
				<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
					<tr>
						<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
							
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15" style="padding: 40px 0px 20px 0px;">
										dd
									</td>
								</tr>
								
								
								<tr>
									<td bgcolor="#ffffff" class="p30-15 img-center" style="padding: 30px; border-radius: 20px 20px 0px 0px; font-size:0pt; line-height:0pt; text-align:center;"><a href="#" target="_blank"><img src="'.base_url('assets/images/aavhana-logo.png').'" width="200"  mc:edit="image_6" style="max-width:146px;" border="0" alt="" /></a></td>
								</tr>
								
								
								
								
							</table>
						 </td>
                    </tr>
                </table>    	

								
			
			<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6eddc">
				<tr>
					<td align="center" valign="top">
						
						<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
							<tr>
								<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
									
										
									
									<div mc:repeatable="Select" mc:variant="Section 1">
										<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ebebeb">
											
											<tr>
												<td class="p30-15-0" style="padding: 50px 30px 0px;" bgcolor="#ffffff">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
													
														<tr>
														
															<td class="h2-center"style="color:#000000; font-family: Playfair Display, Times, Times New Roman, serif; font-size:32px; line-height:36px; text-align:center; padding-bottom:20px;"><div mc:edit="text_4">'.$ready_data['event_name'].'</div><br></td>

														</tr>
														<tr>
															<td class="text-center"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:18px; line-height:22px; text-align:left; padding-bottom:22px;">Dear  '.$ready_data['name'].'! <br> <br> Your electricity meter has been initiated for '.$hall.' and the initial reading  is '. $ready_data['reading'].'.</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</div>
									
                                  


							
							
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15-0" bgcolor="#ffffff" style="border-radius: 0px 0px 20px 20px; padding: 70px 30px 0px 30px;">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
										 	<tr>
												<td class="m-padder2 pb30" align="center"style="padding-bottom:30px;">
													<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
														<tr>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_facebook.png" width="26" height="26" mc:edit="image_27" style="max-width:26px;" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_youtube.png" width="26" height="26" mc:edit="image_30" style="max-width:26px;" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_instagram.png" width="26" height="26" mc:edit="image_31" style="max-width:26px;" border="0" alt="" /></a></td>
															
													</table>
												</td>
											</tr>
											<tr>
												<td align="center" class="p30-15" style="border-top: 1px solid #ebebeb; padding: 30px;">
													<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
														<tr>
															<th class="column-top" width="250"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="text-footer"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:13px; line-height:22px; text-align:left;">
																			<div mc:edit="text_55">
																				<strong>Address</strong><br />
																				 <address>#39-5-3/2/1, Main Road Near Varma Complex Muralinagar, Visakhapatnam - 530007,Andhra Pradesh,INDIA</address>
																			</div>
																		</td>
																	</tr>
																</table>
															</th>
															<th class="column-empty" width="20"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
															<th class="column-top" width="250"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="text-footer"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:13px; line-height:22px; text-align:left;">
																			<div mc:edit="text_56">
																				<strong>Contact Us</strong><br />
																				<p>Ph:+91 9391238211/ +91 9030927449</p><p>Email: Info@aahvana.co</p>
																			</div>
																		</td>
																	</tr>
																</table>
															</th>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="text-footer2 p30-15" style="padding: 30px 15px 50px 15px; color:#a9b6e0; font-family:"Raleway", Arial,sans-serif; font-size:12px; line-height:22px; text-align:center;">
									</td>
								</tr>
							</table>
							
						</td>
					</tr>
				</table>
				

			</td>
		</tr>
	</table>
</body>
</html>
';
return $massage;
}
 // for '.$hall.' on '.date('d/m/Y h:i A',strtotime($ready_data['time'])).'
function starting_reading2($ready_data){
	
	if ($ready_data['hall']  == 'A') {
     	$hall = 'Aahvana';
	}elseif ($ready_data['hall']  == 'B') {
     	$hall  = 'Aathidya';
	}elseif ($ready_data['hall']  == 'Both') {
	   $hall  = 'Aahvana & Aathidya';
	}
 
$massage ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<!--[if gte mso 9]>
	<xml>
		<o:OfficeDocumentSettings>
		<o:AllowPNG/>
		<o:PixelsPerInch>96</o:PixelsPerInch>
		</o:OfficeDocumentSettings>
	</xml>
	<![endif]-->
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="format-detection" content="date=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="x-apple-disable-message-reformatting" />
    <!--[if !mso]><!-->
   	<link href="https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i" rel="stylesheet" />
    
	<title>Aahvana</title>
	<!--[if gte mso 9]>
	<style type="text/css" media="all">
		sup { font-size: 100% !important; }
	</style>
	<![endif]-->
	

	<style type="text/css" media="screen">
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f6eddc; -webkit-text-size-adjust:none }
		a { color:#000001; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
		.mcnPreviewText { display: none !important; }
		.text-footer2 a { color: #ffffff; } 
		
		/* Mobile styles */
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
			.mobile-shell { width: 100% !important; min-width: 100% !important; }
			
			.m-center { text-align: center !important; }
			.m-left { text-align: left !important; margin-right: auto !important; }
			
			.center { margin: 0 auto !important; }
			.content2 { padding: 8px 15px 12px !important; }
			.t-left { float: left !important; margin-right: 30px !important; }
			.t-left-2  { float: left !important; }
			
			.td { width: 100% !important; min-width: 100% !important; }

			.content { padding: 30px 15px !important; }
			.section { padding: 30px 15px 0px !important; }

			.m-br-15 { height: 15px !important; }
			.mpb5 { padding-bottom: 5px !important; }
			.mpb15 { padding-bottom: 15px !important; }
			.mpb20 { padding-bottom: 20px !important; }
			.mpb30 { padding-bottom: 30px !important; }
			.mp30 { padding-bottom: 30px !important; }
			.m-padder { padding: 0px 15px !important; }
			.m-padder2 { padding-left: 15px !important; padding-right: 15px !important; }
			.p70 { padding: 30px 0px !important; }
			.pt70 { padding-top: 30px !important; }
			.p0-15 { padding: 0px 15px !important; }
			.p30-15 { padding: 30px 15px !important; }			
			.p30-15-0 { padding: 30px 15px 0px 15px !important; }			
			.p0-15-30 { padding: 0px 15px 30px 15px !important; }			


			.text-footer { text-align: center !important; }

			.m-td,
			.m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

			.m-block { display: block !important; }

			.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

			.column,
			.column-dir,
			.column-top,
			.column-empty,
			.column-top-30,
			.column-top-60,
			.column-empty2,
			.column-bottom { float: left !important; width: 100% !important; display: block !important; }

			.column-empty { padding-bottom: 15px !important; }
			.column-empty2 { padding-bottom: 30px !important; }

			.content-spacing { width: 15px !important; }
		}
	</style>
</head>
<body class="body"style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f6eddc; -webkit-text-size-adjust:none;">


		
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6eddc">
		<tr>
			<td align="center" valign="top">
				
				<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
					<tr>
						<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
							
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15" style="padding: 40px 0px 20px 0px;">
										dd
									</td>
								</tr>
								
								
								<tr>
									<td bgcolor="#ffffff" class="p30-15 img-center" style="padding: 30px; border-radius: 20px 20px 0px 0px; font-size:0pt; line-height:0pt; text-align:center;"><a href="#" target="_blank"><img src="'.base_url('assets/images/aavhana-logo.png').'" width="200"  mc:edit="image_6" style="max-width:146px;" border="0" alt="" /></a></td>
								</tr>
								
								
								
								
							</table>
						 </td>
                    </tr>
                </table>    	

								
			
			<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6eddc">
				<tr>
					<td align="center" valign="top">
						
						<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
							<tr>
								<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
									
										
									
									<div mc:repeatable="Select" mc:variant="Section 1">
										<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ebebeb">
											
											<tr>
												<td class="p30-15-0" style="padding: 50px 30px 0px;" bgcolor="#ffffff">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
													
														<tr>
														
															<td class="h2-center"style="color:#000000; font-family: Playfair Display, Times, Times New Roman, serif; font-size:32px; line-height:36px; text-align:center; padding-bottom:20px;"><div mc:edit="text_4">'.$ready_data['event_name'].'</div><br></td>

														</tr>
														<tr>
															<td class="text-center"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:18px; line-height:22px; text-align:left; padding-bottom:22px;">Dear  '. $ready_data['name'].'! <br> <br> Your electricity meter has been initiated and the initial reading  for '.$hall.' are '. $ready_data['reading1'].' and '. $ready_data['reading2'].'.</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</div>
									
                                  


							
							
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15-0" bgcolor="#ffffff" style="border-radius: 0px 0px 20px 20px; padding: 70px 30px 0px 30px;">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
										 	<tr>
												<td class="m-padder2 pb30" align="center"style="padding-bottom:30px;">
													<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
														<tr>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_facebook.png" width="26" height="26" mc:edit="image_27" style="max-width:26px;" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_youtube.png" width="26" height="26" mc:edit="image_30" style="max-width:26px;" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_instagram.png" width="26" height="26" mc:edit="image_31" style="max-width:26px;" border="0" alt="" /></a></td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td align="center" class="p30-15" style="border-top: 1px solid #ebebeb; padding: 30px;">
													<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
														<tr>
															<th class="column-top" width="250"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="text-footer"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:13px; line-height:22px; text-align:left;">
																			<div mc:edit="text_55">
																				<strong>Address</strong><br />
																				 <address>#39-5-3/2/1, Main Road Near Varma Complex Muralinagar, Visakhapatnam - 530007,Andhra Pradesh,INDIA</address>
																			</div>
																		</td>
																	</tr>
																</table>
															</th>
															<th class="column-empty" width="20"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
															<th class="column-top" width="250"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="text-footer"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:13px; line-height:22px; text-align:left;">
																			<div mc:edit="text_56">
																				<strong>Contact Us</strong><br />
																				<p>Ph:+91 9391238211/ +91 9030927449</p><p>Email: Info@aahvana.co</p>
																			</div>
																		</td>
																	</tr>
																</table>
															</th>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="text-footer2 p30-15" style="padding: 30px 15px 50px 15px; color:#a9b6e0; font-family:"Raleway", Arial,sans-serif; font-size:12px; line-height:22px; text-align:center;">
									</td>
								</tr>
							</table>
							
						</td>
					</tr>
				</table>
				

			</td>
		</tr>
	</table>
</body>
</html>
';
return $massage;
}

// for '.$hall.' on '.date('d/m/Y h:i A',strtotime($ready_data['time'])).'

function end_reading($ready_data){
	
	if ($ready_data['hall']  == 'A') {
     	$hall = 'Aahvana';
	}elseif ($ready_data['hall']  == 'B') {
     	$hall  = 'Aathidya';
	}elseif ($ready_data['hall']  == 'Both') {
	   $hall  = 'Aahvana & Aathidya';
	}
 
$massage ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<!--[if gte mso 9]>
	<xml>
		<o:OfficeDocumentSettings>
		<o:AllowPNG/>
		<o:PixelsPerInch>96</o:PixelsPerInch>
		</o:OfficeDocumentSettings>
	</xml>
	<![endif]-->
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="format-detection" content="date=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="x-apple-disable-message-reformatting" />
    <!--[if !mso]><!-->
   	<link href="https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i" rel="stylesheet" />
    
	<title>Aahvana</title>
	<!--[if gte mso 9]>
	<style type="text/css" media="all">
		sup { font-size: 100% !important; }
	</style>
	<![endif]-->
	

	<style type="text/css" media="screen">
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f6eddc; -webkit-text-size-adjust:none }
		a { color:#000001; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
		.mcnPreviewText { display: none !important; }
		.text-footer2 a { color: #ffffff; } 
		
		/* Mobile styles */
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
			.mobile-shell { width: 100% !important; min-width: 100% !important; }
			
			.m-center { text-align: center !important; }
			.m-left { text-align: left !important; margin-right: auto !important; }
			
			.center { margin: 0 auto !important; }
			.content2 { padding: 8px 15px 12px !important; }
			.t-left { float: left !important; margin-right: 30px !important; }
			.t-left-2  { float: left !important; }
			
			.td { width: 100% !important; min-width: 100% !important; }

			.content { padding: 30px 15px !important; }
			.section { padding: 30px 15px 0px !important; }

			.m-br-15 { height: 15px !important; }
			.mpb5 { padding-bottom: 5px !important; }
			.mpb15 { padding-bottom: 15px !important; }
			.mpb20 { padding-bottom: 20px !important; }
			.mpb30 { padding-bottom: 30px !important; }
			.mp30 { padding-bottom: 30px !important; }
			.m-padder { padding: 0px 15px !important; }
			.m-padder2 { padding-left: 15px !important; padding-right: 15px !important; }
			.p70 { padding: 30px 0px !important; }
			.pt70 { padding-top: 30px !important; }
			.p0-15 { padding: 0px 15px !important; }
			.p30-15 { padding: 30px 15px !important; }			
			.p30-15-0 { padding: 30px 15px 0px 15px !important; }			
			.p0-15-30 { padding: 0px 15px 30px 15px !important; }			


			.text-footer { text-align: center !important; }

			.m-td,
			.m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

			.m-block { display: block !important; }

			.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

			.column,
			.column-dir,
			.column-top,
			.column-empty,
			.column-top-30,
			.column-top-60,
			.column-empty2,
			.column-bottom { float: left !important; width: 100% !important; display: block !important; }

			.column-empty { padding-bottom: 15px !important; }
			.column-empty2 { padding-bottom: 30px !important; }

			.content-spacing { width: 15px !important; }
		}
	</style>
</head>
<body class="body"style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f6eddc; -webkit-text-size-adjust:none;">


		
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6eddc">
		<tr>
			<td align="center" valign="top">
				
				<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
					<tr>
						<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
							
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15" style="padding: 40px 0px 20px 0px;">
										dd
									</td>
								</tr>
								
								
								<tr>
									<td bgcolor="#ffffff" class="p30-15 img-center" style="padding: 30px; border-radius: 20px 20px 0px 0px; font-size:0pt; line-height:0pt; text-align:center;"><a href="#" target="_blank"><img src="'.base_url('assets/images/aavhana-logo.png').'" width="200"  mc:edit="image_6" style="max-width:146px;" border="0" alt="" /></a></td>
								</tr>
								
								
								
								
							</table>
						 </td>
                    </tr>
                </table>    	

								
			
			<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6eddc">
				<tr>
					<td align="center" valign="top">
						
						<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
							<tr>
								<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
									
										
									
									<div mc:repeatable="Select" mc:variant="Section 1">
										<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ebebeb">
											
											<tr>
												<td class="p30-15-0" style="padding: 50px 30px 0px;" bgcolor="#ffffff">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
													
														<tr>
														
															<td class="h2-center"style="color:#000000; font-family: Playfair Display, Times, Times New Roman, serif; font-size:32px; line-height:36px; text-align:center; padding-bottom:20px;"><div mc:edit="text_4">'.$ready_data['event_name'].'</div><br></td>

														</tr>
														<tr>
															<td class="text-center"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:18px; line-height:22px; text-align:left; padding-bottom:22px;">Dear  '.$ready_data['name'].'! <br> <br> Your event has been concluded and your electricity meter reading at the end of the event for '.$hall.' is ' .$ready_data['reading'].'. Your total electricity charges are Rs.'.$ready_data['price'].' at the rate of Rs.'.$ready_data['charge'].' per unit for . <br> <br> Your event has been successfully completed. Hope you had a memorable experience with us and will continue to keep choosing us for your events! <br> <br> Please leave your valuable feedback to help us serve better next time!</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</div>
									
                                  


							
							
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15-0" bgcolor="#ffffff" style="border-radius: 0px 0px 20px 20px; padding: 70px 30px 0px 30px;">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
										 	<tr>
												<td class="m-padder2 pb30" align="center"style="padding-bottom:30px;">
													<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
														<tr>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_facebook.png" width="26" height="26" mc:edit="image_27" style="max-width:26px;" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_youtube.png" width="26" height="26" mc:edit="image_30" style="max-width:26px;" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_instagram.png" width="26" height="26" mc:edit="image_31" style="max-width:26px;" border="0" alt="" /></a></td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td align="center" class="p30-15" style="border-top: 1px solid #ebebeb; padding: 30px;">
													<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
														<tr>
															<th class="column-top" width="250"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="text-footer"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:13px; line-height:22px; text-align:left;">
																			<div mc:edit="text_55">
																				<strong>Address</strong><br />
																				 <address>#39-5-3/2/1, Main Road Near Varma Complex Muralinagar, Visakhapatnam - 530007,Andhra Pradesh,INDIA</address>
																			</div>
																		</td>
																	</tr>
																</table>
															</th>
															<th class="column-empty" width="20"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
															<th class="column-top" width="250"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="text-footer"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:13px; line-height:22px; text-align:left;">
																			<div mc:edit="text_56">
																				<strong>Contact Us</strong><br />
																				<p>Ph:+91 9391238211/ +91 9030927449</p><p>Email: Info@aahvana.co</p>
																			</div>
																		</td>
																	</tr>
																</table>
															</th>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="text-footer2 p30-15" style="padding: 30px 15px 50px 15px; color:#a9b6e0; font-family:"Raleway", Arial,sans-serif; font-size:12px; line-height:22px; text-align:center;">
									</td>
								</tr>
							</table>
							
						</td>
					</tr>
				</table>
				

			</td>
		</tr>
	</table>
</body>
</html>
';
return $massage;
}
// '.$hall.' on '.date('d/m/Y h:i A',strtotime($ready_data['time'])).'

function end_reading2($ready_data){
	
	if ($ready_data['hall']  == 'A') {
     	$hall = 'Aahvana';
	}elseif ($ready_data['hall']  == 'B') {
     	$hall  = 'Aathidya';
	}elseif ($ready_data['hall']  == 'Both') {
	   $hall  = 'Aahvana & Aathidya';
	}
 
$massage ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<!--[if gte mso 9]>
	<xml>
		<o:OfficeDocumentSettings>
		<o:AllowPNG/>
		<o:PixelsPerInch>96</o:PixelsPerInch>
		</o:OfficeDocumentSettings>
	</xml>
	<![endif]-->
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="format-detection" content="date=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="x-apple-disable-message-reformatting" />
    <!--[if !mso]><!-->
   	<link href="https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i" rel="stylesheet" />
    
	<title>Aahvana</title>
	<!--[if gte mso 9]>
	<style type="text/css" media="all">
		sup { font-size: 100% !important; }
	</style>
	<![endif]-->
	

	<style type="text/css" media="screen">
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f6eddc; -webkit-text-size-adjust:none }
		a { color:#000001; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
		.mcnPreviewText { display: none !important; }
		.text-footer2 a { color: #ffffff; } 
		
		/* Mobile styles */
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
			.mobile-shell { width: 100% !important; min-width: 100% !important; }
			
			.m-center { text-align: center !important; }
			.m-left { text-align: left !important; margin-right: auto !important; }
			
			.center { margin: 0 auto !important; }
			.content2 { padding: 8px 15px 12px !important; }
			.t-left { float: left !important; margin-right: 30px !important; }
			.t-left-2  { float: left !important; }
			
			.td { width: 100% !important; min-width: 100% !important; }

			.content { padding: 30px 15px !important; }
			.section { padding: 30px 15px 0px !important; }

			.m-br-15 { height: 15px !important; }
			.mpb5 { padding-bottom: 5px !important; }
			.mpb15 { padding-bottom: 15px !important; }
			.mpb20 { padding-bottom: 20px !important; }
			.mpb30 { padding-bottom: 30px !important; }
			.mp30 { padding-bottom: 30px !important; }
			.m-padder { padding: 0px 15px !important; }
			.m-padder2 { padding-left: 15px !important; padding-right: 15px !important; }
			.p70 { padding: 30px 0px !important; }
			.pt70 { padding-top: 30px !important; }
			.p0-15 { padding: 0px 15px !important; }
			.p30-15 { padding: 30px 15px !important; }			
			.p30-15-0 { padding: 30px 15px 0px 15px !important; }			
			.p0-15-30 { padding: 0px 15px 30px 15px !important; }			


			.text-footer { text-align: center !important; }

			.m-td,
			.m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

			.m-block { display: block !important; }

			.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

			.column,
			.column-dir,
			.column-top,
			.column-empty,
			.column-top-30,
			.column-top-60,
			.column-empty2,
			.column-bottom { float: left !important; width: 100% !important; display: block !important; }

			.column-empty { padding-bottom: 15px !important; }
			.column-empty2 { padding-bottom: 30px !important; }

			.content-spacing { width: 15px !important; }
		}
	</style>
</head>
<body class="body"style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f6eddc; -webkit-text-size-adjust:none;">


		
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6eddc">
		<tr>
			<td align="center" valign="top">
				
				<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
					<tr>
						<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
							
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15" style="padding: 40px 0px 20px 0px;">
										dd
									</td>
								</tr>
								
								
								<tr>
									<td bgcolor="#ffffff" class="p30-15 img-center" style="padding: 30px; border-radius: 20px 20px 0px 0px; font-size:0pt; line-height:0pt; text-align:center;"><a href="#" target="_blank"><img src="'.base_url('assets/images/aavhana-logo.png').'" width="200"  mc:edit="image_6" style="max-width:146px;" border="0" alt="" /></a></td>
								</tr>
								
								
								
								
							</table>
						 </td>
                    </tr>
                </table>    	

								
			
			<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6eddc">
				<tr>
					<td align="center" valign="top">
						
						<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
							<tr>
								<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
									
										
									
									<div mc:repeatable="Select" mc:variant="Section 1">
										<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ebebeb">
											
											<tr>
												<td class="p30-15-0" style="padding: 50px 30px 0px;" bgcolor="#ffffff">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
													
														<tr>
														
															<td class="h2-center"style="color:#000000; font-family: Playfair Display, Times, Times New Roman, serif; font-size:32px; line-height:36px; text-align:center; padding-bottom:20px;"><div mc:edit="text_4">'.$ready_data['event_name'].'</div><br></td>

														</tr>
														<tr>
															<td class="text-center"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:18px; line-height:22px; text-align:left; padding-bottom:22px;">Dear'.$ready_data['name'].'! <br> <br> Your event has been concluded and your electricity meter reading at the end of the even for '.$hall.'  are '.$ready_data['reading1'].' and  '.$ready_data['reading2'].'. Your total electricity charges are Rs.'.$ready_data['price'].' at the rate of Rs.'.$ready_data['charge'].' per unit for . <br> <br> Your event has been successfully completed. Hope you had a memorable experience with us and will continue to keep choosing us for your events! <br> <br> Please leave your valuable feedback to help us serve better next time!</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</div>
									
                                  


							
							
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15-0" bgcolor="#ffffff" style="border-radius: 0px 0px 20px 20px; padding: 70px 30px 0px 30px;">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
										 	<tr>
												<td class="m-padder2 pb30" align="center"style="padding-bottom:30px;">
													<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
														<tr>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_facebook.png" width="26" height="26" mc:edit="image_27" style="max-width:26px;" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_youtube.png" width="26" height="26" mc:edit="image_30" style="max-width:26px;" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_instagram.png" width="26" height="26" mc:edit="image_31" style="max-width:26px;" border="0" alt="" /></a></td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td align="center" class="p30-15" style="border-top: 1px solid #ebebeb; padding: 30px;">
													<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
														<tr>
															<th class="column-top" width="250"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="text-footer"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:13px; line-height:22px; text-align:left;">
																			<div mc:edit="text_55">
																				<strong>Address</strong><br />
																				 <address>#39-5-3/2/1, Main Road Near Varma Complex Muralinagar, Visakhapatnam - 530007,Andhra Pradesh,INDIA</address>
																			</div>
																		</td>
																	</tr>
																</table>
															</th>
															<th class="column-empty" width="20"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
															<th class="column-top" width="250"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="text-footer"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:13px; line-height:22px; text-align:left;">
																			<div mc:edit="text_56">
																				<strong>Contact Us</strong><br />
																				<p>Ph:+91 9391238211/ +91 9030927449</p><p>Email: Info@aahvana.co</p>
																			</div>
																		</td>
																	</tr>
																</table>
															</th>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="text-footer2 p30-15" style="padding: 30px 15px 50px 15px; color:#a9b6e0; font-family:"Raleway", Arial,sans-serif; font-size:12px; line-height:22px; text-align:center;">
									</td>
								</tr>
							</table>
							
						</td>
					</tr>
				</table>
				

			</td>
		</tr>
	</table>
</body>
</html>
';
return $massage;
}


function brossermsg(){
	
 
$massage ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<!--[if gte mso 9]>
	<xml>
		<o:OfficeDocumentSettings>
		<o:AllowPNG/>
		<o:PixelsPerInch>96</o:PixelsPerInch>
		</o:OfficeDocumentSettings>
	</xml>
	<![endif]-->
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="format-detection" content="date=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="x-apple-disable-message-reformatting" />
    <!--[if !mso]><!-->
   	<link href="https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i" rel="stylesheet" />
    
	<title>Aahvana</title>
	<!--[if gte mso 9]>
	<style type="text/css" media="all">
		sup { font-size: 100% !important; }
	</style>
	<![endif]-->
	

	<style type="text/css" media="screen">
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f6eddc; -webkit-text-size-adjust:none }
		a { color:#000001; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
		.mcnPreviewText { display: none !important; }
		.text-footer2 a { color: #ffffff; } 
		
		/* Mobile styles */
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
			.mobile-shell { width: 100% !important; min-width: 100% !important; }
			
			.m-center { text-align: center !important; }
			.m-left { text-align: left !important; margin-right: auto !important; }
			
			.center { margin: 0 auto !important; }
			.content2 { padding: 8px 15px 12px !important; }
			.t-left { float: left !important; margin-right: 30px !important; }
			.t-left-2  { float: left !important; }
			
			.td { width: 100% !important; min-width: 100% !important; }

			.content { padding: 30px 15px !important; }
			.section { padding: 30px 15px 0px !important; }

			.m-br-15 { height: 15px !important; }
			.mpb5 { padding-bottom: 5px !important; }
			.mpb15 { padding-bottom: 15px !important; }
			.mpb20 { padding-bottom: 20px !important; }
			.mpb30 { padding-bottom: 30px !important; }
			.mp30 { padding-bottom: 30px !important; }
			.m-padder { padding: 0px 15px !important; }
			.m-padder2 { padding-left: 15px !important; padding-right: 15px !important; }
			.p70 { padding: 30px 0px !important; }
			.pt70 { padding-top: 30px !important; }
			.p0-15 { padding: 0px 15px !important; }
			.p30-15 { padding: 30px 15px !important; }			
			.p30-15-0 { padding: 30px 15px 0px 15px !important; }			
			.p0-15-30 { padding: 0px 15px 30px 15px !important; }			


			.text-footer { text-align: center !important; }

			.m-td,
			.m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

			.m-block { display: block !important; }

			.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

			.column,
			.column-dir,
			.column-top,
			.column-empty,
			.column-top-30,
			.column-top-60,
			.column-empty2,
			.column-bottom { float: left !important; width: 100% !important; display: block !important; }

			.column-empty { padding-bottom: 15px !important; }
			.column-empty2 { padding-bottom: 30px !important; }

			.content-spacing { width: 15px !important; }
		}
	</style>
</head>
<body class="body"style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f6eddc; -webkit-text-size-adjust:none;">


		
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6eddc">
		<tr>
			<td align="center" valign="top">
				
				<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
					<tr>
						<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
							
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15" style="padding: 40px 0px 20px 0px;">
										dd
									</td>
								</tr>
								
								
								<tr>
									<td bgcolor="#ffffff" class="p30-15 img-center" style="padding: 30px; border-radius: 20px 20px 0px 0px; font-size:0pt; line-height:0pt; text-align:center;"><a href="#" target="_blank"><img src="'.base_url('assets/images/aavhana-logo.png').'" width="200"  mc:edit="image_6" style="max-width:146px;" border="0" alt="" /></a></td>
								</tr>
								
								
								
								
							</table>
						 </td>
                    </tr>
                </table>    	

								
			
			<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6eddc">
				<tr>
					<td align="center" valign="top">
						
						<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
							<tr>
								<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
									
										
									
									<div mc:repeatable="Select" mc:variant="Section 1">
										<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ebebeb">
											
											<tr>
												<td class="p30-15-0" style="padding: 50px 30px 0px;" bgcolor="#ffffff">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
													
														
														<tr>
															<td class="text-center"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:18px; line-height:22px; text-align:left; padding-bottom:22px;">Greetings..<br> <br> Thank your for choosing us. Looking forward to serve you.<br> <br> Please take a look at the services we offer in the Brochure attached herewith </td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</div>
									
                                  


							
							
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15-0" bgcolor="#ffffff" style="border-radius: 0px 0px 20px 20px; padding: 70px 30px 0px 30px;">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
										 	<tr>
												<td class="m-padder2 pb30" align="center"style="padding-bottom:30px;">
													<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
														<tr>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_facebook.png" width="26" height="26" mc:edit="image_27" style="max-width:26px;" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_youtube.png" width="26" height="26" mc:edit="image_30" style="max-width:26px;" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_instagram.png" width="26" height="26" mc:edit="image_31" style="max-width:26px;" border="0" alt="" /></a></td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td align="center" class="p30-15" style="border-top: 1px solid #ebebeb; padding: 30px;">
													<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
														<tr>
															<th class="column-top" width="250"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="text-footer"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:13px; line-height:22px; text-align:left;">
																			<div mc:edit="text_55">
																				<strong>Address</strong><br />
																				 <address>#39-5-3/2/1, Main Road Near Varma Complex Muralinagar, Visakhapatnam - 530007,Andhra Pradesh,INDIA</address>
																			</div>
																		</td>
																	</tr>
																</table>
															</th>
															<th class="column-empty" width="20"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
															<th class="column-top" width="250"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="text-footer"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:13px; line-height:22px; text-align:left;">
																			<div mc:edit="text_56">
																				<strong>Contact Us</strong><br />
																				<p>Ph:+91 9391238211/ +91 9030927449</p><p>Email: Info@aahvana.co</p>
																			</div>
																		</td>
																	</tr>
																</table>
															</th>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="text-footer2 p30-15" style="padding: 30px 15px 50px 15px; color:#a9b6e0; font-family:"Raleway", Arial,sans-serif; font-size:12px; line-height:22px; text-align:center;">
									</td>
								</tr>
							</table>
							
						</td>
					</tr>
				</table>
				

			</td>
		</tr>
	</table>
</body>
</html>
';
return $massage;
}

function feedbackmsg($name){
	
 
$massage ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<!--[if gte mso 9]>
	<xml>
		<o:OfficeDocumentSettings>
		<o:AllowPNG/>
		<o:PixelsPerInch>96</o:PixelsPerInch>
		</o:OfficeDocumentSettings>
	</xml>
	<![endif]-->
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="format-detection" content="date=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="x-apple-disable-message-reformatting" />
    <!--[if !mso]><!-->
   	<link href="https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i" rel="stylesheet" />
    
	<title>Aahvana</title>
	<!--[if gte mso 9]>
	<style type="text/css" media="all">
		sup { font-size: 100% !important; }
	</style>
	<![endif]-->
	

	<style type="text/css" media="screen">
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f6eddc; -webkit-text-size-adjust:none }
		a { color:#000001; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
		.mcnPreviewText { display: none !important; }
		.text-footer2 a { color: #ffffff; } 
		
		/* Mobile styles */
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
			.mobile-shell { width: 100% !important; min-width: 100% !important; }
			
			.m-center { text-align: center !important; }
			.m-left { text-align: left !important; margin-right: auto !important; }
			
			.center { margin: 0 auto !important; }
			.content2 { padding: 8px 15px 12px !important; }
			.t-left { float: left !important; margin-right: 30px !important; }
			.t-left-2  { float: left !important; }
			
			.td { width: 100% !important; min-width: 100% !important; }

			.content { padding: 30px 15px !important; }
			.section { padding: 30px 15px 0px !important; }

			.m-br-15 { height: 15px !important; }
			.mpb5 { padding-bottom: 5px !important; }
			.mpb15 { padding-bottom: 15px !important; }
			.mpb20 { padding-bottom: 20px !important; }
			.mpb30 { padding-bottom: 30px !important; }
			.mp30 { padding-bottom: 30px !important; }
			.m-padder { padding: 0px 15px !important; }
			.m-padder2 { padding-left: 15px !important; padding-right: 15px !important; }
			.p70 { padding: 30px 0px !important; }
			.pt70 { padding-top: 30px !important; }
			.p0-15 { padding: 0px 15px !important; }
			.p30-15 { padding: 30px 15px !important; }			
			.p30-15-0 { padding: 30px 15px 0px 15px !important; }			
			.p0-15-30 { padding: 0px 15px 30px 15px !important; }			


			.text-footer { text-align: center !important; }

			.m-td,
			.m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

			.m-block { display: block !important; }

			.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

			.column,
			.column-dir,
			.column-top,
			.column-empty,
			.column-top-30,
			.column-top-60,
			.column-empty2,
			.column-bottom { float: left !important; width: 100% !important; display: block !important; }

			.column-empty { padding-bottom: 15px !important; }
			.column-empty2 { padding-bottom: 30px !important; }

			.content-spacing { width: 15px !important; }
		}
	</style>
</head>
<body class="body"style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f6eddc; -webkit-text-size-adjust:none;">


		
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6eddc">
		<tr>
			<td align="center" valign="top">
				
				<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
					<tr>
						<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
							
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15" style="padding: 40px 0px 20px 0px;">
										dd
									</td>
								</tr>
								
								
								<tr>
									<td bgcolor="#ffffff" class="p30-15 img-center" style="padding: 30px; border-radius: 20px 20px 0px 0px; font-size:0pt; line-height:0pt; text-align:center;"><a href="#" target="_blank"><img src="'.base_url('assets/images/aavhana-logo.png').'" width="200"  mc:edit="image_6" style="max-width:146px;" border="0" alt="" /></a></td>
								</tr>
								
								
								
								
							</table>
						 </td>
                    </tr>
                </table>    	

								
			
			<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6eddc">
				<tr>
					<td align="center" valign="top">
						
						<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
							<tr>
								<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
									
										
									
									<div mc:repeatable="Select" mc:variant="Section 1">
										<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ebebeb">
											
											<tr>
												<td class="p30-15-0" style="padding: 50px 30px 0px;" bgcolor="#ffffff">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
													
														
														<tr>
															<td class="text-center"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:18px; line-height:22px; text-align:left; padding-bottom:22px;">Dear '.$name.' <br> <br> We hope your event execution was up to your expectations! Thank you for your feedback!  We hope to make your events even better next time. <br> <br> NOTE: Kindly let us know if you have not provided this feedback. Just reply to this email, Happy to help you. <br> <br> Have a good one! <br> <br> Kind Regards <br> <br> Team AAHVANA. </td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</div>
									
                                  


							
							
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15-0" bgcolor="#ffffff" style="border-radius: 0px 0px 20px 20px; padding: 70px 30px 0px 30px;">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
										 	<tr>
												<td class="m-padder2 pb30" align="center"style="padding-bottom:30px;">
													<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
														<tr>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_facebook.png" width="26" height="26" mc:edit="image_27" style="max-width:26px;" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_youtube.png" width="26" height="26" mc:edit="image_30" style="max-width:26px;" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_instagram.png" width="26" height="26" mc:edit="image_31" style="max-width:26px;" border="0" alt="" /></a></td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td align="center" class="p30-15" style="border-top: 1px solid #ebebeb; padding: 30px;">
													<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
														<tr>
															<th class="column-top" width="250"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="text-footer"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:13px; line-height:22px; text-align:left;">
																			<div mc:edit="text_55">
																				<strong>Address</strong><br />
																				 <address>#39-5-3/2/1, Main Road Near Varma Complex Muralinagar, Visakhapatnam - 530007,Andhra Pradesh,INDIA</address>
																			</div>
																		</td>
																	</tr>
																</table>
															</th>
															<th class="column-empty" width="20"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
															<th class="column-top" width="250"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="text-footer"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:13px; line-height:22px; text-align:left;">
																			<div mc:edit="text_56">
																				<strong>Contact Us</strong><br />
																				<p>Ph:+91 9391238211/ +91 9030927449</p><p>Email: Info@aahvana.co</p>
																			</div>
																		</td>
																	</tr>
																</table>
															</th>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="text-footer2 p30-15" style="padding: 30px 15px 50px 15px; color:#a9b6e0; font-family:"Raleway", Arial,sans-serif; font-size:12px; line-height:22px; text-align:center;">
									</td>
								</tr>
							</table>
							
						</td>
					</tr>
				</table>
				

			</td>
		</tr>
	</table>
</body>
</html>
';
return $massage;
}

function invoicemsg(){
	
 
$massage ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<!--[if gte mso 9]>
	<xml>
		<o:OfficeDocumentSettings>
		<o:AllowPNG/>
		<o:PixelsPerInch>96</o:PixelsPerInch>
		</o:OfficeDocumentSettings>
	</xml>
	<![endif]-->
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="format-detection" content="date=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="x-apple-disable-message-reformatting" />
    <!--[if !mso]><!-->
   	<link href="https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i" rel="stylesheet" />
    
	<title>Aahvana</title>
	<!--[if gte mso 9]>
	<style type="text/css" media="all">
		sup { font-size: 100% !important; }
	</style>
	<![endif]-->
	

	<style type="text/css" media="screen">
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f6eddc; -webkit-text-size-adjust:none }
		a { color:#000001; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
		.mcnPreviewText { display: none !important; }
		.text-footer2 a { color: #ffffff; } 
		
		/* Mobile styles */
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
			.mobile-shell { width: 100% !important; min-width: 100% !important; }
			
			.m-center { text-align: center !important; }
			.m-left { text-align: left !important; margin-right: auto !important; }
			
			.center { margin: 0 auto !important; }
			.content2 { padding: 8px 15px 12px !important; }
			.t-left { float: left !important; margin-right: 30px !important; }
			.t-left-2  { float: left !important; }
			
			.td { width: 100% !important; min-width: 100% !important; }

			.content { padding: 30px 15px !important; }
			.section { padding: 30px 15px 0px !important; }

			.m-br-15 { height: 15px !important; }
			.mpb5 { padding-bottom: 5px !important; }
			.mpb15 { padding-bottom: 15px !important; }
			.mpb20 { padding-bottom: 20px !important; }
			.mpb30 { padding-bottom: 30px !important; }
			.mp30 { padding-bottom: 30px !important; }
			.m-padder { padding: 0px 15px !important; }
			.m-padder2 { padding-left: 15px !important; padding-right: 15px !important; }
			.p70 { padding: 30px 0px !important; }
			.pt70 { padding-top: 30px !important; }
			.p0-15 { padding: 0px 15px !important; }
			.p30-15 { padding: 30px 15px !important; }			
			.p30-15-0 { padding: 30px 15px 0px 15px !important; }			
			.p0-15-30 { padding: 0px 15px 30px 15px !important; }			


			.text-footer { text-align: center !important; }

			.m-td,
			.m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

			.m-block { display: block !important; }

			.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

			.column,
			.column-dir,
			.column-top,
			.column-empty,
			.column-top-30,
			.column-top-60,
			.column-empty2,
			.column-bottom { float: left !important; width: 100% !important; display: block !important; }

			.column-empty { padding-bottom: 15px !important; }
			.column-empty2 { padding-bottom: 30px !important; }

			.content-spacing { width: 15px !important; }
		}
	</style>
</head>
<body class="body"style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f6eddc; -webkit-text-size-adjust:none;">


		
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6eddc">
		<tr>
			<td align="center" valign="top">
				
				<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
					<tr>
						<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
							
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15" style="padding: 40px 0px 20px 0px;">
										dd
									</td>
								</tr>
								
								
								<tr>
									<td bgcolor="#ffffff" class="p30-15 img-center" style="padding: 30px; border-radius: 20px 20px 0px 0px; font-size:0pt; line-height:0pt; text-align:center;"><a href="#" target="_blank"><img src="'.base_url('assets/images/aavhana-logo.png').'" width="200"  mc:edit="image_6" style="max-width:146px;" border="0" alt="" /></a></td>
								</tr>
								
								
								
								
							</table>
						 </td>
                    </tr>
                </table>    	

								
			
			<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6eddc">
				<tr>
					<td align="center" valign="top">
						
						<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
							<tr>
								<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
									
										
									
									<div mc:repeatable="Select" mc:variant="Section 1">
										<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ebebeb">
											
											<tr>
												<td class="p30-15-0" style="padding: 50px 30px 0px;" bgcolor="#ffffff">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
													
														
														<tr>
															<td class="text-center"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:18px; line-height:22px; text-align:left; padding-bottom:22px;">Greetings..<br> <br> Thank you for choosing us. Looking forward to serving you.<br> <br> Please refer to the Invoice attached herewith</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</div>
									
                                  


							
							
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15-0" bgcolor="#ffffff" style="border-radius: 0px 0px 20px 20px; padding: 70px 30px 0px 30px;">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
										 	<tr>
												<td class="m-padder2 pb30" align="center"style="padding-bottom:30px;">
													<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
														<tr>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_facebook.png" width="26" height="26" mc:edit="image_27" style="max-width:26px;" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_youtube.png" width="26" height="26" mc:edit="image_30" style="max-width:26px;" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_instagram.png" width="26" height="26" mc:edit="image_31" style="max-width:26px;" border="0" alt="" /></a></td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td align="center" class="p30-15" style="border-top: 1px solid #ebebeb; padding: 30px;">
													<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
														<tr>
															<th class="column-top" width="250"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="text-footer"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:13px; line-height:22px; text-align:left;">
																			<div mc:edit="text_55">
																				<strong>Address</strong><br />
																				 <address>#39-5-3/2/1, Main Road Near Varma Complex Muralinagar, Visakhapatnam - 530007,Andhra Pradesh,INDIA</address>
																			</div>
																		</td>
																	</tr>
																</table>
															</th>
															<th class="column-empty" width="20"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
															<th class="column-top" width="250"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="text-footer"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:13px; line-height:22px; text-align:left;">
																			<div mc:edit="text_56">
																				<strong>Contact Us</strong><br />
																				<p>Ph:+91 9391238211/ +91 9030927449</p><p>Email: Info@aahvana.co</p>
																			</div>
																		</td>
																	</tr>
																</table>
															</th>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="text-footer2 p30-15" style="padding: 30px 15px 50px 15px; color:#a9b6e0; font-family:"Raleway", Arial,sans-serif; font-size:12px; line-height:22px; text-align:center;">
									</td>
								</tr>
							</table>
							
						</td>
					</tr>
				</table>
				

			</td>
		</tr>
	</table>
</body>
</html>
';
return $massage;
}


function welcome_pack($event){

    // $slot = explode(',', $event->timeslots);
    // if (!empty($slot)) {
    //  for ($i=0; $i < count($slot) ; $i++) { 
    //     if ($slot[$i] ==) {
    //     	# code...
    //     }
    //  }
    // }
    // die;
	if ($event->hall   == 'A') {
     	$hall = 'Aahvana';
	}elseif ($event->hall == 'B') {
     	$hall  = 'Aathidya';
	}elseif ($event->hall == 'Both') {
	   $hall  = 'Aahvana & Aathidya';
	}

	if ($event->event_name == 'Wedding') {
		$end = ' to '.date('d-m-Y',strtotime('+1 day'.$event->start));
	}else{
		$end = '';
	}
 
$massage ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<!--[if gte mso 9]>
	<xml>
		<o:OfficeDocumentSettings>
		<o:AllowPNG/>
		<o:PixelsPerInch>96</o:PixelsPerInch>
		</o:OfficeDocumentSettings>
	</xml>
	<![endif]-->
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="format-detection" content="date=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="x-apple-disable-message-reformatting" />
    <!--[if !mso]><!-->
   	<link href="https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i" rel="stylesheet" />
    
	<title>Aahvana</title>
	<!--[if gte mso 9]>
	<style type="text/css" media="all">
		sup { font-size: 100% !important; }
	</style>
	<![endif]-->
	

	<style type="text/css" media="screen">
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f6eddc; -webkit-text-size-adjust:none }
		a { color:#000001; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
		.mcnPreviewText { display: none !important; }
		.text-footer2 a { color: #ffffff; } 
		
		/* Mobile styles */
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
			.mobile-shell { width: 100% !important; min-width: 100% !important; }
			
			.m-center { text-align: center !important; }
			.m-left { text-align: left !important; margin-right: auto !important; }
			
			.center { margin: 0 auto !important; }
			.content2 { padding: 8px 15px 12px !important; }
			.t-left { float: left !important; margin-right: 30px !important; }
			.t-left-2  { float: left !important; }
			
			.td { width: 100% !important; min-width: 100% !important; }

			.content { padding: 30px 15px !important; }
			.section { padding: 30px 15px 0px !important; }

			.m-br-15 { height: 15px !important; }
			.mpb5 { padding-bottom: 5px !important; }
			.mpb15 { padding-bottom: 15px !important; }
			.mpb20 { padding-bottom: 20px !important; }
			.mpb30 { padding-bottom: 30px !important; }
			.mp30 { padding-bottom: 30px !important; }
			.m-padder { padding: 0px 15px !important; }
			.m-padder2 { padding-left: 15px !important; padding-right: 15px !important; }
			.p70 { padding: 30px 0px !important; }
			.pt70 { padding-top: 30px !important; }
			.p0-15 { padding: 0px 15px !important; }
			.p30-15 { padding: 30px 15px !important; }			
			.p30-15-0 { padding: 30px 15px 0px 15px !important; }			
			.p0-15-30 { padding: 0px 15px 30px 15px !important; }			


			.text-footer { text-align: center !important; }

			.m-td,
			.m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

			.m-block { display: block !important; }

			.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

			.column,
			.column-dir,
			.column-top,
			.column-empty,
			.column-top-30,
			.column-top-60,
			.column-empty2,
			.column-bottom { float: left !important; width: 100% !important; display: block !important; }

			.column-empty { padding-bottom: 15px !important; }
			.column-empty2 { padding-bottom: 30px !important; }

			.content-spacing { width: 15px !important; }
		}
	</style>
</head>
<body class="body"style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f6eddc; -webkit-text-size-adjust:none;">


		
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6eddc">
		<tr>
			<td align="center" valign="top">
				
				<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
					<tr>
						<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
							
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15" style="padding: 40px 0px 20px 0px;">
										dd
									</td>
								</tr>
								
								
								<tr>
									<td bgcolor="#ffffff" class="p30-15 img-center" style="padding: 30px; border-radius: 20px 20px 0px 0px; font-size:0pt; line-height:0pt; text-align:center;"><a href="#" target="_blank"><img src="'.base_url('assets/images/aavhana-logo.png').'" width="200"  mc:edit="image_6" style="max-width:146px;" border="0" alt="" /></a></td>
								</tr>
								
								
								
								
							</table>
						 </td>
                    </tr>
                </table>    	

								
			
			<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6eddc">
				<tr>
					<td align="center" valign="top">
						
						<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
							<tr>
								<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
									
										
									
									<div mc:repeatable="Select" mc:variant="Section 1">
										<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ebebeb">
											
											<tr>
												<td class="p30-15-0" style="padding: 50px 30px 0px;" bgcolor="#ffffff">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
													
														
														<tr>
															<td class="text-center"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:18px; line-height:22px; text-align:center; padding-bottom:22px;"><center>Booking Confirmed!</center><div style="text-align: left;" ><br>Dear '.$event->name.',<br> <br>Welcome to a tradition of Elegance and Hospitality!<br> <br>Congrats! Your booking is confirmed for '.$hall.' <br><ul><li>Booking ID : 000'.$event->id.' </li> <li>Customer Name : '.$event->name.' </li><li>Event Name: '.$event->event_name.' </li><li>Hall Name : '.  $hall.' </li><li>Date of Event : '.date('d-m-Y',strtotime($event->start)).$end.'</li><li>Event Slot : '.date('h:i A',strtotime($event->start)).' to  '.date('h:i A',strtotime($event->end)).'</li></ul><br>Please refer to our Terms and Conditions attached herewith. </div></td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</div>
									
                                  


							
							
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15-0" bgcolor="#ffffff" style="border-radius: 0px 0px 20px 20px; padding: 70px 30px 0px 30px;">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
										 	<tr>
												<td class="m-padder2 pb30" align="center"style="padding-bottom:30px;">
													<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
														<tr>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_facebook.png" width="26" height="26" mc:edit="image_27" style="max-width:26px;" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_youtube.png" width="26" height="26" mc:edit="image_30" style="max-width:26px;" border="0" alt="" /></a></td>
															<td class="img" width="40"style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="'. base_url('assets/') .'images/ico4_instagram.png" width="26" height="26" mc:edit="image_31" style="max-width:26px;" border="0" alt="" /></a></td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td align="center" class="p30-15" style="border-top: 1px solid #ebebeb; padding: 30px;">
													<table class="center" border="0" cellspacing="0" cellpadding="0"style="text-align:center;">
														<tr>
															<th class="column-top" width="250"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="text-footer"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:13px; line-height:22px; text-align:left;">
																			<div mc:edit="text_55">
																				<strong>Address</strong><br />
																				 <address>#39-5-3/2/1, Main Road Near Varma Complex Muralinagar, Visakhapatnam - 530007,Andhra Pradesh,INDIA</address>
																			</div>
																		</td>
																	</tr>
																</table>
															</th>
															<th class="column-empty" width="20"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; direction:ltr;"></th>
															<th class="column-top" width="250"style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="text-footer"style="color:#5d5c5c; font-family: Poppins, sans-serif!important; font-size:13px; line-height:22px; text-align:left;">
																			<div mc:edit="text_56">
																				<strong>Contact Us</strong><br />
																				<p>Ph:+91 9391238211/ +91 9030927449</p><p>Email: Info@aahvana.co</p>
																			</div>
																		</td>
																	</tr>
																</table>
															</th>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="text-footer2 p30-15" style="padding: 30px 15px 50px 15px; color:#a9b6e0; font-family:"Raleway", Arial,sans-serif; font-size:12px; line-height:22px; text-align:center;">
									</td>
								</tr>
							</table>
							
						</td>
					</tr>
				</table>
				

			</td>
		</tr>
	</table>
</body>
</html>
';
return $massage;
}


?>