<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'tvprofil.net',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-05-08',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Zagreb',
  'culture' => 'hr',
  'max_day' => '7',
  'url1' => 'https://tvprofil.net/xmltv/data/##channel##/##urldate1##_##channel##_tvprofil.net.xml',
  'requestOption1' => '1',
  'urldate_format1' => 'Y-m-d',
  'show' => '(<programme.*?<\\/programme>)',
  'start' => 'start="(\\d+)',
  'start_format' => 'YmdHis',
  'stop' => 'stop="(\\d+)',
  'stop_format' => 'YmdHis',
  'title' => '<title.*?>(.*?)<\\/title>',
  'desc' => '<desc.*?>(.*?)<\\/desc>',
  'channel_logo' => '<icon src="(.*?)"',
  'ccurl1' => 'https://tvprofil.net/xmltv/data/channel-list.tvprofil.net.xml',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '<channel id="(.*?)">',
  'ccchannel_name' => '<display-name>(.*?)<\\/',
);
?>