<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'tgrtbelgesel.com',
  'creator_name' => 'Kvanc',
  'creation_date' => '2023-01-07',
  'rev_no' => 'R0',
  'timezone' => '+03:00',
  'culture' => 'tr',
  'max_day' => '7.1',
  'first_day' => '0123456',
  'url1' => 'https://www.tgrtbelgesel.com.tr/yayin-akisi',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'show' => '<\\/strong><\\/h2>.*?(?:<p>|\\/>)(.*?)(?:<br|<\\/p>).*?<\\/div>',
  'start' => '^(\\d{2}[\\.:]\\d{2})',
  'start_format' => 'H#i',
  'title' => '\\d{2}[\\.:]\\d{2}\\s(.*?)$',
  'channel_logo' => '||#add#https://www.tgrtbelgesel.com.tr/wp-content/uploads/2021/08/TGRT_Belgesel_Logo.png?##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#tgrt-belgesel',
  'ccchannel_name' => '||#set#TGRT Belgesel',
);
?>