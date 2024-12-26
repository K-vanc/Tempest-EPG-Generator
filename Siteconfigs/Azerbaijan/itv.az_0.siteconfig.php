<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'itv.az',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-05-07',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Baku',
  'culture' => 'az',
  'max_day' => '7',
  'url1' => 'https://api.itv.az/api/schedules/##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'application/json, text/plain, */*',
  'content_type1' => 'application/json',
  'host_header1' => 'api.itv.az',
  'origin_header1' => 'https://itv.az',
  'urldate_format1' => '#weekdaynumber#7',
  'show' => '({"id".*?"type_id".*?})',
  'start' => '"start_time":"(.*?)"',
  'start_format' => 'H#i',
  'title' => '"title":"(.*?)",',
  'desc' => '"description":"(.*?)",',
  'channel_logo' => '||#add#https://itv.az/assets/images/itv-logo.png?##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#itv',
  'ccchannel_name' => '||#set#ITV',
);
?>