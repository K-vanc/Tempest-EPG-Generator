<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'derana.lk',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-08-10',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Colombo',
  'culture' => 'si',
  'max_day' => '8',
  'url1' => 'https://derana.lk/api/schedules/##urldate1##||#edit#("time":")(\\d:)##("time":")(.*?)\\s([AP]M)##(AM12)##("date":")(\\d{2})-(\\d{2})-(\\d{4})##("time":")AM##("time":")PM(12)||${1}0${2}##\\1\\3\\2##00##\\1\\4\\3\\2##\\1##\\1\\2',
  'requestOption1' => '1',
  'accept_header1' => '*/*',
  'origin_header1' => 'http://www.derana.lk',
  'urldate_format1' => 'd-m-Y',
  'show' => '"all_schedules":\\[.*?(?:{)(.*?)(?:}).*?\\]||#calc#"time":"PM(\\d+)||+12||#replace#("time":")PM||\\1',
  'sort' => '"date":"(.*?)"|#|[| |]"time":"(.*?)"||#replace#(\\s|:)||',
  'sortflag' => '2',
  'sortorder' => '1',
  'start' => '"time":"(.*?)"||#replace#(\\s|PM)||',
  'start_format' => 'H#i',
  'title' => '"dramaName":"(.*?)",',
  'showicon' => '"imageUrl":"(.*?)"',
  'channel_logo' => '||#add#http://www.derana.lk/images/logo/logo-color-bg-transparent.webp',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#tv_derana',
  'ccchannel_name' => '||#set#TV Derana',
);
?>