<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'watania.tn',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-12-21',
  'rev_no' => 'R0',
  'timezone' => 'Africa/Tunis',
  'culture' => 'ar',
  'max_day' => '7.1',
  'first_day' => '6012345',
  'url1' => 'http://www.watania##channel##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'www.watania##cclogo##.tn',
  'show' => '<div id="menu.*?(?:<li class=)(.*?)(?:<\\/li>).*?<\\/ul>',
  'start' => '<span>(\\d+:\\d+)',
  'start_format' => 'H#i',
  'title' => '"elemProgTitre">(.*?)<\\/p>',
  'desc' => '"elemProgDesc">(.*?)<\\/p>',
  'showicon' => '<img src="(.*?)"',
  'channel_logo' => '||#add#http://www.watania2.tn/sites/default/files/styles/menu_logo_icons/public/menuimage/Watania##cclogo##%2075x75.png',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'ccchannel_id' => '||#set#1.tn/%D8%A7%D9%84%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC-%D8%A7%D9%84%D8%A3%D8%B3%D8%A8%D9%88%D8%B9%D9%8A|2.tn/%D8%AF%D9%84%D9%8A%D9%84-%D8%A7%D9%84%D8%A3%D8%B3%D8%A8%D9%88%D8%B9',
  'ccchannel_name' => '||#set#Watania 1|Watania 2',
  'ccchannel_logo' => '||#set#1|2',
);
?>