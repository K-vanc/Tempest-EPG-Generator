<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'silkwaytv.kz',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-05-15',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Aqtobe',
  'culture' => 'tr',
  'max_day' => '5',
  'url1' => 'https://silkwaytv.kz/tr/schedule?date=##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'urldate_format1' => 'Y-m-d',
  'show' => '(<tr id class="table-schedule.*?<\\/tr>)',
  'start' => 'schedule__time1">(\\d+[:\\.]\\d+)',
  'start_format' => 'H#i',
  'title' => '"table-schedule__name.*?>(.*?)<\\/',
  'channel_logo' => '||#add#https://silkwaytv.kz/img/silknew.png?##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#silkway',
  'ccchannel_name' => '||#set#Silk Way TV',
);
?>