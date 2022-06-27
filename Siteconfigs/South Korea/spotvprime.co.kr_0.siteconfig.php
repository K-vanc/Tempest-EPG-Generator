<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'spotvprime.co.kr',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-06-27',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Seoul',
  'culture' => 'ko',
  'max_day' => '7',
  'url1' => 'https://www.spotvprime.co.kr/api/schedule/date/##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'application/json, text/plain, */*',
  'urldate_format1' => 'Y-m-d',
  'show' => '({.*?})',
  'start' => '"time":"(.*?)"',
  'start_format' => 'H#i',
  'title' => '"content":"(.*?)"',
  'category' => '"type":"(.*?)"',
  'channel_logo' => '||#add#https://www.spotvprime.co.kr/img/PRIME_logo_menu.5d5f17aa.png',
  'pshown' => '"type":"(재방송)"',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#SPOTVPrime',
  'ccchannel_name' => '||#set#SPOTVPrime',
);
?>