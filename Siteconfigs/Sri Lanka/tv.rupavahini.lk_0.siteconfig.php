<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'tv.rupavahini.lk',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-08-18',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Colombo',
  'culture' => 'si',
  'max_day' => '7.1',
  'pastdayremover' => 'on',
  'url1' => 'https://tv.rupavahini.lk/tv-schedule/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'show' => '(\\["\\d+\\\\\\/\\d.*?\\])',
  'start' => '"(\\d+\\/\\d+\\/\\d+)"|#|[| |]"(\\d+:\\d+)',
  'start_format' => 'j/n/Y H#i',
  'title' => ':\\d{2}",\\s*"(.*?)"',
  'desc' => '.*","(.*?)"\\]',
  'channel_logo' => '||#add#https://tv.rupavahini.lk/wp-content/uploads/2023/10/logo-main.png?##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#rupavahinitv',
  'ccchannel_name' => '||#set#Rupavahini TV',
);
?>