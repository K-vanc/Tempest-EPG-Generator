<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'trtdinle.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-03-29',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'tr',
  'max_day' => '7.1',
  'url1' => 'https://www.trtdinle.com/api/detail?path=/channel/##channel##',
  'requestOption1' => '1',
  'accept_header1' => 'application/json, text/plain, */*',
  'host_header1' => 'www.trtdinle.com',
  'show' => '(?:\\[|,)({"name".*?})',
  'start' => '"startTime":"(.*?)\\.',
  'start_format' => 'Y-m-d\\TH#i#s',
  'stop' => '"endTime":"(.*?)\\.',
  'stop_format' => 'Y-m-d\\TH#i#s',
  'title' => '"name":"(.*?)",',
  'channel_logo' => '||#add#https://port-rotf.pr.trt.com.tr/r/trtdinle//w200/q95/##cclogo##',
  'ccurl1' => 'https://www.trtdinle.com/api/channels',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'application/json, text/plain, */*',
  'cchost_header1' => 'www.trtdinle.com',
  'ccchannel_block' => '{"id".*?}',
  'ccchannel_id' => '"path":"\\/channel\\/(.*?)"',
  'ccchannel_name' => '"title":"(.*?)",||#replace#(:.*)||',
  'ccchannel_logo' => '"imageUrl":".*?\\/trtdinle\\/(.*?)"',
);
?>