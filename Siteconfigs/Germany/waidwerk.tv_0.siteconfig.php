<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'waidwerk.tv',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-07-06',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Berlin',
  'culture' => 'de',
  'max_day' => '3.1',
  'url1' => 'https://waidwerk.tv/epg/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'show' => '(<div class="vc_gitem-zone-mini">.*?<div class="vc_clearfix">)',
  'start' => 'broadcast time .*?>(\\d{2}[\\.:]\\d{2})',
  'start_format' => 'H#i',
  'title' => 'post_title">(.*?)<\\/',
  'channel_logo' => '||#add#https://waidwerk.tv/wp-content/uploads/2018/07/waidwerk.png',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#waidwerktv',
  'ccchannel_name' => '||#set#Waidwerk TV',
);
?>