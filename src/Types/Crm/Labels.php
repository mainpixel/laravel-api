<?php
/**
 *
 * Copyright (C) 8/5/2016 (dd-mm-yyyy).
 * Mainpixel B.V.  - All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited.
 * Written by Jasper Berkhout <jasper@mainpixel.io>.
 *
 */
namespace Mainpixel\Api\Types\Crm;
use Mainpixel\Api\MainpixelApi;
class Labels extends MainpixelApi{
	protected $path = 'crm/labels';
	protected $allowed = [
		'list',
	];
}
