<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => '13tv.co.il',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-04-01',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Jerusalem',
  'culture' => 'he',
  'max_day' => '7.1',
  'url1' => 'https://13tv.co.il/tv-guide/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'cookie_header1' => 'Cookie: SERVERAID=s02-nodejs',
  'urldate_format1' => 'Y-m-d||#date#-1day',
  'show' => '({"desc".*?})||#exclude#"show_date":"##urldate1##"',
  'start' => '"start_time":"(.*?)"',
  'start_format' => 'H#i',
  'title' => '"title":"(.*?)",',
  'desc' => '"desc":"(.*?)",',
  'showicon' => '"image":"(.*?)"',
  'channel_logo' => '||#add#https://media.reshet.tv/image/upload/f_auto,q_auto:best/v1653491545/assets/2022/Logo_Beta.png',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#13tv',
  'ccchannel_name' => '||#set#13TV',
);
?>