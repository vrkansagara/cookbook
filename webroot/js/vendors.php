<?php
/* SVN FILE: $Id: vendors.php 689 2008-11-05 10:30:07Z AD7six $ */
/**
 * Short description for file.
 *
 * This file includes js vendor-files from /vendor/ directory if they need to
 * be accessible to the public.
 *
 * PHP versions 4 and 5
 *
 * CakePHP :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright (c)	2006, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright (c) 2006, Cake Software Foundation, Inc.
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP Project
 * @package       cake
 * @subpackage    cake.app.webroot.js
 * @since         CakePHP v 0.2.9
 * @version       $Revision: 689 $
 * @modifiedby    $LastChangedBy: AD7six $
 * @lastmodified  $Date: 2008-11-05 11:30:07 +0100 (Wed, 05 Nov 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Enter description here...
 */
$file = $_GET['file'];
$pos = strpos($file, '..');
if ($pos === false) {
	if(is_file('../../vendors/javascript/'.$file) && (preg_match('/(\/.+)\\.js/', $file)))
	{
		readfile('../../vendors/javascript/'.$file);
	}
} else {
	header('HTTP/1.1 404 Not Found');
}
?>