<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'indosiar.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-10-09',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Jakarta',
  'culture' => 'id',
  'max_day' => '2.1',
  'url1' => 'https://www.indosiar.com/api/smart-schedule',
  'requestOption1' => '1',
  'accept_header1' => 'application/json, text/plain, */*',
  'content_type1' => 'application/json',
  'referer_header1' => 'https://www.indosiar.com/',
  'show' => '"(?:today|tomorrow)":\\[({.*?})\\]||#split#(},{)',
  'start' => '"schedule_start":"(.*?)"',
  'start_format' => 'Y-m-d H#i#s',
  'stop' => '"schedule_end":"(.*?)"',
  'stop_format' => 'Y-m-d H#i#s',
  'title' => '"title":"(.*?)",',
  'desc' => '"description":"(.*?)","',
  'showicon' => '"image":"(.*?)"||#addstart#https://cdn.indosiar.com/',
  'channel_logo' => '||#add#https://www.indosiar.com/assets/logo.png?##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#indosiar',
  'ccchannel_name' => '||#set#Indosiar',
);
?>