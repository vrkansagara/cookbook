<?php
/* SVN FILE: $Id: group.php 689 2008-11-05 10:30:07Z AD7six $ */
/**
 * Short description for file.
 *
 * Long description for file
 *
 * PHP versions 4 and 5
 *
 * Cake Bakery
 *
 * Copyright (c) 2006,	Cake Software Foundation, Inc.
 * 							1785 E. Sahara Avenue, Suite 490-204
 * 							Las Vegas, Nevada 89104
 *
 * Licensed under the CAKE SOFTWARE FOUNDATION LICENSE(CSFL) version 1.0
 * Redistributions of files must retain the above copyright notice.
 * You may not use this file except in compliance with the License.
 *
 * You may obtain a copy of the License at:
 * License page: http://www.cakefoundation.org/licenses/csfl/
 * Copyright page: http://www.cakefoundation.org/copyright/
 *
 * @filesource
 * @copyright     Copyright (c) 2006, Cake Software Foundation, Inc.
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP Project
 * @package       bakery
 * @subpackage    bakery.models
 * @since         Bakery v 1.0.0.0
 * @version       $Revision: 689 $
 * @modifiedby    $LastChangedBy: AD7six $
 * @lastmodified  $Date: 2008-11-05 11:30:07 +0100 (Wed, 05 Nov 2008) $
 * @license       http://www.cakefoundation.org/licenses/csfl/  The CSFL License
 */
/**
 * Short description for file.
 *
 * Long description for file
 *
 * @package       bakery
 * @subpackage    bakery.models
 * @since         Bakery v 1.0.0.0
 *
 */
class Group extends UsersAppModel {
/**
 * Enter description here...
 *
 * @var string
 */
    var $name = 'Group';
/**
 * Enter description here...
 *
 * @var unknown_type
 */
	var $validate = array('name' => VALID_NOT_EMPTY);

	var $belongsTo = array('Level' => array('className' => 'Users.Level'));

/**
 * Enter description here...
 *
 * @var array
 */
   var $hasMany = array('User'=> array('className' => 'Users.User'));
}
?>