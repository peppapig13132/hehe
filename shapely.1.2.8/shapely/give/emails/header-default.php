<?php
/**
 * Email Header
 *
 * @package     Give/Templates/Emails
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly.

// For gmail compatibility, including CSS styles in head/body are stripped out therefore styles need to be inline. These variables contain rules which are added to the template inline. !important; is a gmail hack to prevent styles being stripped if it doesn't like something.
$body               = "
	background-color: #f6f6f6;
	font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
";
$wrapper            = "
	width:100%;
	-webkit-text-size-adjust:none !important;
	margin:0;
	padding: 30px 0 50px 0;
";
$template_container = "
	box-shadow:0 0 0 1px #f3f3f3 !important;
	border-radius:3px !important;
	background-color: #ffffff;
	border: 1px solid #e9e9e9;
	border-radius:3px !important;
	padding: 0px;
";
$template_header    = "
	color: #00000;
	border-top-left-radius:3px !important;
	border-top-right-radius:3px !important;
	border-bottom: 0;
	font-weight:bold;
	line-height:100%;
	text-align: center;
	vertical-align:middle;
";
$body_content       = "
	border-radius:3px !important;
	font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
";
$body_content_inner = "
	color: #000000;
	font-size:14px;
	font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	line-height:150%;
	text-align:left;
";
$header_content_h1  = "
	color: #000000;
	margin:0;
	padding: 28px 24px;
	display:block;
	font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	font-size:32px;
	font-weight: 500;
	line-height: 1.2;
";
$header_content  = "
	background-color: #ffffff;
	border-bottom: 4px solid #e2001a;
	padding: 20px;
";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title><?php echo get_bloginfo( 'name' ); ?></title>
	</head>
	<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="<?php echo $body; ?>">
		<div style="<?php echo $wrapper; ?>">
			<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
				<tr>
					<td align="center" valign="top">
						{email_logo}
						<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_container" style="<?php echo $template_container; ?>">
							<tr>
								<td align="center" valign="top">
									<!-- Header -->
									<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_header" style="<?php echo $template_header; ?>" bgcolor="#ffffff">
										<tr>
											<td align="center" style="<?php echo $header_content; ?>">
												<?php /*<h1 style="<?php echo $header_content_h1; ?>"><?php echo Give()->emails->get_heading(); ?></h1>*/ ?>
												<img src="https://he-he.org/wp-content/uploads/2020/03/logo.png" />
											</td>
										</tr>
									</table>
									<!-- End Header -->
								</td>
							</tr>
							<tr>
								<td align="center" valign="top">
									<!-- Body -->
									<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_body">
										<tr>
											<td valign="top" style="<?php echo $body_content; ?>">
												<!-- Content -->
												<table border="0" cellpadding="20" cellspacing="0" width="100%">
													<tr>
														<td valign="top">
															<div style="<?php echo $body_content_inner; ?>">
