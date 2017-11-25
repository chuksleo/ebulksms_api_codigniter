<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth
*
* Version: 2.5.2
*
* Author: Chukwuka Mark Chime
*		  chuksleo.mar@gmail.com
*         @markleomc
*

*
* Created:  10.01.2009
*
* Description: Below are relevant config values to authenticate with ebulk sms api 
*
* Requirements: PHP5 or above
*
*/

/*
| -------------------------------------------------------------------------
| Authentication credentials.
| -------------------------------------------------------------------------
|
*/
$config['username'] = 'chuksleo.mark@gmail.com';
$config['api_key'] = '42bbf4c2891f5401ef4a5d56e2abe48a738a1a12';



/*
| -------------------------------------------------------------------------
| Authentication URLS.
| -------------------------------------------------------------------------
|
*/
/*If you wish to use Ebulk Sms json format request*/
$config['json_url'] = 'http://maledi.local';

/*If you wish to use Ebulk Sms XML format request*/
$config['xml_url'] = 'http://api.ebulksms.com:8080/sendsms.xml';

/*If you wish to use Ebulk Sms HTTP format request*/
$config['http_get_url'] = 'http://api.ebulksms.com:8080/sendsms';


/*
| -------------------------------------------------------------------------
| Get Balance Request Url
| -------------------------------------------------------------------------
|
*/
$config['http_get_balance_url'] = "http://api.ebulksms.com:8080/balance";

/* End of file ion_auth.php */
/* Location: ./application/config/ion_auth.php */
