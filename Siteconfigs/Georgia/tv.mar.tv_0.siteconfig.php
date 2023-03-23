<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'tv.mar.tv',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-03-22',
  'rev_no' => 'R0',
  'timezone' => '##usertime##',
  'culture' => 'ka',
  'max_day' => '5.1',
  'pastdayremover' => 'on',
  'url1' => 'https://mw.mar.tv/martv/api/v1/epg/##channel##',
  'requestOption1' => '1',
  'accept_header1' => 'application/json',
  'host_header1' => 'mw.mar.tv',
  'origin_header1' => 'https://tv.mar.tv',
  'show' => '({"__type":"epg".*?})',
  'start' => '"timeStart":"(.*?)"',
  'start_format' => 'Y-m-d H#i#s',
  'stop' => '"timeEnd":"(.*?)"',
  'stop_format' => 'Y-m-d H#i#s',
  'title' => '"name":"(.*?)","',
  'channel_logo' => '||#add#https://static.mar.tv/logos/320/##channel##.png',
  'ccurl1' => 'https://mw.mar.tv/martv/api/v1/mobile/channels/free',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'application/json',
  'cchost_header1' => 'mw.mar.tv',
  'ccorigin_header1' => 'https://tv.mar.tv',
  'ccchannel_block' => '{"__type":"channel".*?}',
  'ccchannel_id' => '"id":(\\d+)',
  'ccchannel_name' => '"name":"(.*?)",',
);
?>