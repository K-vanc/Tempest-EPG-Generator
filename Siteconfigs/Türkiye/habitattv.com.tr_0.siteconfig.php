<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'habitattv.com.tr',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-03-12',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'tr',
  'max_day' => '40',
  'url1' => 'http://habitattv.com.tr/hbtt/main/schedules.php?date=##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'host_header1' => 'habitattv.com.tr',
  'urldate_format1' => 'Y-m-d',
  'show' => '<tbody>.*?(?:<tr class="schedule_row)(.*?)(?:<\\/tr>).*?<\\/tbody>',
  'start' => '\\sid="(\\d+)',
  'start_format' => 'unix',
  'title' => '<span class="prg_kusak"(?:\\s*)?>(.*?)<\\/span>',
  'subtitle' => '<span class="prg_bolum"(?:\\s*)?>(.*?)<\\/span>',
  'desc' => '<span class="prg_info"(?:\\s*)?>(.*?)<\\/span>',
  'showicon' => '<img  src="\\.\\.(.*?)"||#replace#(240x135)||1920x720||#addstart#http://habitattv.com.tr/hbtt',
  'channel_logo' => '||#add#http://habitattv.com.tr/hbtt/assets/img/HABITAT_LOGO_small.png',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#habitat',
  'ccchannel_name' => '||#set#Habitat TV',
);
?>