<?php 
/* Copyright Jaakko Lukkari 2011 
 *  
 * This program is free software; you can redistribute it and/or modify 
 * it under the terms of the GNU General Public License as published by 
 * the Free Software Foundation; either version 2 of the License, or 
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful, but 
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY 
 * or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License 
 * for more details.
 * 
 * You should have received a copy of the GNU General Public License along 
 * with this program; if not, write to the Free Software Foundation, Inc., 
 * 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 */
defined( 'parentFile' ) or die( 'No direct access! Olet väärässä paikassa!' ); 
require_once($XELAVAARKISTODIR.'libs/mvc/c.php');
class RtmpgwXElavaArkistoController extends XElavaArkistoController  {
	
	function stop() {
	system('killall -9 rtmpgw');
	echo "rtmpgw killed";
}

function start() {
	global $XELAVAARKISTODIR;
		
	exec($XELAVAARKISTODIR."bin/rtmpgw -g 777 -q >/dev/null 2>&1 &");
	echo "rtmpgw started";
}
	
	
}