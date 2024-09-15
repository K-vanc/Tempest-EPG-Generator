<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'channeleye.lk',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-09-15',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Colombo',
  'culture' => 'si',
  'max_day' => '7.1',
  'pastdayremover' => 'on',
  'url1' => 'https://channeleye.lk/tv-schedule/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'show' => 'var data\\s*=\\s*\\[\\[(.*?)\\]\\]||#split#(\\],\\s*\\[)||#exclude#"Date",||#replace#"(\\d+\\\\\\/)(\\d\\\\\\/)##("\\d+:\\d+)"||"${1}0${2}##\\1:00"',
  'sort' => '"(\\d+\\/\\d+\\/\\d+)|#|[| |]"(\\d+:\\d+.*?)"',
  'sortflag' => '3',
  'sortorder' => '1',
  'start' => '"(\\d+\\/\\d+\\/\\d+)|#|[| |](\\d+:\\d+.*?)"||#convert#j/m/Y H:i:s#d/m/Y H:i:s',
  'start_format' => 'd/m/Y H#i#s',
  'title' => ':\\d+","(.*?)(?:-)?"',
  'desc' => ':\\d+",".*?","(.*?)"$',
  'channel_logo' => '||#add#https://channeleye.lk/wp-content/uploads/2022/05/1-1-e1701650048686.png',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#channel_eye',
  'ccchannel_name' => '||#set#Channel Eye',
);
?>