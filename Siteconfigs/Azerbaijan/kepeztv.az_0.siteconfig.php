<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'kepeztv.az',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-05-06',
  'rev_no' => 'R0',
  'remarks' => 'Required Minimum Tempest Version 1.7',
  'timezone' => 'Asia/Baku',
  'culture' => 'az',
  'max_day' => '7.1',
  'first_day' => '0123456',
  'url1' => 'http://www.kepeztv.az/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'www.kepeztv.az',
  'proc_on_err1' => 'on',
  'show' => '<div id="data">.*?(?:<tr)(.*?)(?:<\\/tr>).*?<\\/div>',
  'start' => '<span>(\\d+[:\\.]\\d+)',
  'start_format' => 'H#i',
  'title' => '<a>(.*?)<\\/a>',
  'channel_logo' => '||#add#http://kepeztv.az/img/logo_navi2.png?##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#kepeztv',
  'ccchannel_name' => '||#set#Kepez TV',
);
?>