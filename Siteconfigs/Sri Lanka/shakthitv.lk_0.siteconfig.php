<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'shakthitv.lk',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-08-18',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Colombo',
  'culture' => 'si',
  'max_day' => '7.1',
  'first_day' => '0123456',
  'url1' => 'https://shakthitv.lk/tv-guide/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'shakthitv.lk',
  'show' => '<tbody>.*?(?:<tr>)(.*?)(?:<\\/tr>).*?<\\/tbody>',
  'start' => '"row">\\s*(\\d+[\\.:]\\d+)',
  'start_format' => 'G#i',
  'title' => '<td>(.*?)<\\/',
  'channel_logo' => '||#add#https://shakthitv.lk/wp-content/uploads/2021/12/shakthi-tv-logo-90.png',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#shakthitv',
  'ccchannel_name' => '||#set#Shakthi TV',
);
?>