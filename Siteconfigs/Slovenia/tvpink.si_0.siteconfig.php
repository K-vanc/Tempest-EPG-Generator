<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'tvpink.si',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-07-28',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Ljubljana',
  'culture' => 'sl',
  'max_day' => '15.1',
  'url1' => 'https://www.tvpink.si/epg/spored.php?&kanal=##channel##-xmltv.xml',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html',
  'show' => '<br><br>(.*?)<br><\\/body>||#split#(<br>)',
  'start' => '^(.*?\\d{2}:\\d{2})||#replace#(\\&nbsp)||',
  'start_format' => 'd.m.Y-H#i',
  'title' => '\\d{2}:\\d{2}\\&nbsp(.*)||#replace#(\\&nbsp)|| ',
  'ccurl1' => 'https://www.tvpink.si/epg/spored.php',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'cccontent_type1' => 'text/html',
  'ccchannel_block' => '<a href=".*?<\\/a>',
  'ccchannel_id' => 'kanal=(.*?)-xmltv',
  'ccchannel_name' => 'xml">(.*?)<\\/a>',
);
?>