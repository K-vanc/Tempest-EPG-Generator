<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'azeri.sahartv.ir',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-05-07',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Baku',
  'culture' => 'az',
  'max_day' => '5',
  'url1' => 'https://azeri.sahartv.ir/tv/tv_proqram?date=##urldate1##&tz=Asia/Baku',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'azeri.sahartv.ir',
  'urldate_format1' => 'm/d/Y',
  'show' => '<tr>\\s*(<td.*?)<\\/tr>',
  'start' => '<span>(\\d{2}[\\.:]\\d{2})',
  'start_format' => 'H#i',
  'duration' => '<span>(\\d+)<\\/span>||#format#m',
  'title' => '<h3>(.*?)<\\/h3>',
  'channel_logo' => '||#add#https://azeri.sahartv.ir/theme/radios/img/sahartv_logo.png?##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#sahartv',
  'ccchannel_name' => '||#set#Sahar TV',
);
?>