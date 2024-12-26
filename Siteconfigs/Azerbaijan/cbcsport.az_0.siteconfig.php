<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'cbcsport.az',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-05-07',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Baku',
  'culture' => 'az',
  'max_day' => '2.1',
  'url1' => 'https://www.cbcsport.az/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'www.cbcsport.az',
  'show' => '<div class="tv-program-block">(.*?)<\\/div>',
  'start' => '<span class="d.*?>\\s*(\\d{2}[\\.:]\\d{2})',
  'start_format' => 'H#i',
  'title' => '<p>(.*?)<\\/p>',
  'category' => '<span class="badge.*?>(.*?)<\\/span>',
  'channel_logo' => '||#add#https://www.cbcsport.az/assets_new/logo/logo.png?##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#cbcsport',
  'ccchannel_name' => '||#set#CBC Sport',
);
?>