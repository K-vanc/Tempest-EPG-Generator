<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'polar.cz',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-03-27',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Prague',
  'culture' => 'cs',
  'max_day' => '5.1',
  'url1' => 'https://polar.cz/program/json-list/get-##channel##||#replace#(XXXX)||##subpage1##',
  'requestOption1' => '2',
  'accept_header1' => 'application/json, text/javascript, */*; q=0.01',
  'host_header1' => 'polar.cz',
  'origin_header1' => 'https://polar.cz',
  'XMLHttpRequest1' => 'on',
  'urldate_format1' => '#range#Y-m-d',
  'subpage_format1' => '##urldate1##||#replace#(,)|||',
  'show' => '(\\\\u003Cdiv (?:id=\\\\u0022item-\\d+|class=\\\\u0022item font-weight-bold\\\\u0022\\\\u003E.*?description text).*?\\\\u003C\\\\\\/div\\\\u003E)||#replace#(:10)(.*?Po\\\\u010das\\\\u00ed)||:09x\\2',
  'start' => '(?:time|weight-bold)">\\s*(\\d+:\\d+)',
  'start_format' => 'H#i',
  'title' => '<\\/i>(.*?)(?:<\\/h4>|<\\/div>\\s*<)',
  'desc' => 'mb-3">(.*?)<\\/|>|class="description.*?>(.*?)<\\/',
  'channel_logo' => '||#add#https://polar.cz/img/web/layout/header/zive-##cclogo##.svg',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#program-for-web?date=XXXX|program2-for-web',
  'ccchannel_name' => '||#set#Polar|Polar2',
  'ccchannel_logo' => '||#set#polar|polar2',
);
?>