<item>
<title><![CDATA[<?php echo $item->title; ?>]]></title>
<description><![CDATA[<?php echo $item->program_episode_description_text; ?>]]></description>
<link>http://localhost:777/?r=rtmp://streamh1.nelonen.fi/hot/<?php $osat=explode(".",$item->video_filename); echo $osat[1]; ?>:<?php echo $item->video_filename; ?></link>
<enclosure type="video/flv"  url="http://localhost:777/?r=rtmp://streamh1.nelonen.fi/hot/<?php $osat=explode(".",$item->video_filename); echo $osat[1]; ?>:<?php echo $item->video_filename; ?>" />
</item>