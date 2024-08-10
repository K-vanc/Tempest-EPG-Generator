<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'sirasatv.lk',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-08-10',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Colombo',
  'culture' => 'si',
  'max_day' => '7',
  'url1' => 'https://api.sirasatv.lk/api/programLineup?day=##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'application/json, text/javascript, */*; q=0.01',
  'origin_header1' => 'https://sirasatv.lk',
  'urldate_format1' => '#weekdayname#Monday|Tuesday|Wednesday|Thursday|Friday|Saturday|Sunday',
  'show' => '({"dramaId".*?})||#exclude#"time":null',
  'start' => '"time":"(\\d+[\\.:]\\d+)',
  'start_format' => 'H#i',
  'title' => '"name":"(.*?)",',
  'category' => '"type":"(.*?)"',
  'showicon' => '"image":"(.*?)"||#addstart#https://sirasatv.lk/imageUploads/dramas/',
  'channel_logo' => '||#add#https://sirasatv.lk/assets/images/Sirasa_TV_Logo.png',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#sirasatv',
  'ccchannel_name' => '||#set#Sirasa TV',
);
?>