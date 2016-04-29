<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.1.2.344
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Six Sigma training Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'sysadmin@winzest.com',
		'to' => 'sysadmin@winzest.com'
	),
	'fields' => array(
		'custom_U79946' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Select Your Time Zone to Check Pricing and Schedules',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Select Your Time Zone to Check Pricing and Schedules\' is required.'
			)
		)
	)
);

process_form($form);
?>
