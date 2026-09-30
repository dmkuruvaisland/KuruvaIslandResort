<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code
defined('WEBSITE_CODE')        OR define('WEBSITE_CODE', "W102_tempestqa");
defined('VALIDATE_URL') 	   OR define('VALIDATE_URL', "https://adeeb.in/web_validate/api.php?validate=".WEBSITE_CODE."&server=".$_SERVER['SERVER_NAME']);






/*
 * Web Site Front End
 */
defined('WEBSITE_NAME')      		OR define('WEBSITE_NAME', "hotel");
defined('SESSION_USER')      		OR define('SESSION_USER', "hotel_user");
defined('USER_TYPE')      			OR define('USER_TYPE', "USER_TYPE");
defined('USER_ID')      			OR define('USER_ID', "USER_ID");


defined('PAGE_NAME')      			OR define('PAGE_NAME', "page_name");


defined('API_TOKEN_KEY')      		OR define('API_TOKEN_KEY', "API_TOKEN_KEY");
defined('META_DESCRIPTION')   		OR define('META_DESCRIPTION', "");
defined('FACEBOOK_PAGE')      		OR define('FACEBOOK_PAGE', "https://www.facebook.com/techantena/");
defined('WHATSAPP')      			OR define('WHATSAPP', "9656670867");


defined('PAGINATION_PER_PAGE')    	OR define('PAGINATION_PER_PAGE', 30);



defined('USER_ADMIN')    		OR define('USER_ADMIN', 'USER_ADMIN');


/* FLASH MESSAGE TYPES */
defined('FLASH_TYPE')    		OR define('FLASH_TYPE', 'FLASH_TYPE');
defined('FLASH_MESSAGE')    	OR define('FLASH_MESSAGE', 'FLASH_MESSAGE');

defined('FLASH_SUCCESS')    	OR define('FLASH_SUCCESS', 'FLASH_SUCCESS');
defined('FLASH_ERROR')    		OR define('FLASH_ERROR', 'FLASH_ERROR');
defined('FLASH_WARNING')   		OR define('FLASH_WARNING', 'FLASH_WARNING');
defined('FLASH_INFO')    		OR define('FLASH_INFO', 'FLASH_INFO');

/* ACTION ITEMS */
defined('edit')    		OR define('edit', 'edit');
defined('add')    		OR define('add', 'add');
defined('view')    		OR define('view', 'view');
defined('delete')    	OR define('delete', 'delete');
defined('clone_item')   OR define('clone_item', 'clone_item');
