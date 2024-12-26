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
  'url1' => 'http://habitattv.com.tr/schedules.php?date=##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'habitattv.com.tr',
  'urldate_format1' => 'Y-m-d',
  'show' => '(<div id="\\d{10}.*?<\\/h2>.*?<\\/div>\\s*<\\/div>)',
  'start' => '<div\\sid="(\\d+)',
  'start_format' => 'unix',
  'title' => '"text-white-50"(?:\\s*)?>(.*?)<\\/span>',
  'subtitle' => '<span class="prg_bolum.*?>(.*?)<\\/span>',
  'desc' => '"accordion-body small pt-0"(?:\\s*)?>(.*?)<\\/div>',
  'showicon' => '<img class="thumb"\\s*src="(.*?)"||#replace#(480x270)||1920x720||#addstart#http://habitattv.com.tr/',
  'channel_logo' => '||#add#http://habitattv.com.tr/hbtt/assets/img/HABITAT_LOGO_small.png',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#habitat',
  'ccchannel_name' => '||#set#Habitat TV',
);
?>