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

global $XELAVAARKISTODIR, $XELAVAARKISTOURL;

header("Content-Type: application/rss+xml");
echo  "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n";
?>
<rss version="2.0"  xmlns:media="http://purl.org/dc/elements/1.1/"  xmlns:dc="http://purl.org/dc/elements/1.1/">

<onEnter>	
	/* start rtmpgw */
	ret = getURL("");
</onEnter>

<onExit>
	/* stop rtmpgw */
	ret = getURL("");
</onExit>



<channel>
<title></title>
<?php 
$i=0;
foreach($this->menuitems as $item) {
$i++;
?>
<item>
<title><?php echo $item->name; ?></title>
<link><?php echo $XELAVAARKISTOURL; ?>index.php?option=<?php echo $item->component; ?></link>                    
<media:thumbnail url="<?php echo $XEEDIR; ?>images/mainmenuicons/<?php echo $item->image; ?>" />    
<image><?php echo $XELAVAARKISTODIR; ?>images/mainmenuicons/<?php echo $item->image; ?></image>    
<imageover><?php echo $XELAVAARKISTODIR; ?>images/mainmenuicons/<?php echo $item->imageover; ?></imageover> 
<itemid><?php echo $i; ?></itemid>
</item>
<?php } ?>


</channel>
</rss>



