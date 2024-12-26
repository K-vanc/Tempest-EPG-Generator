<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'spotv.net',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-06-27',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Seoul',
  'culture' => 'ko',
  'max_day' => '7',
  'url1' => 'https://www.spotv.net/data/json/schedule/##channel##/Daily/D##urldate1##.json',
  'requestOption1' => '1',
  'content_type1' => 'application/json',
  'urldate_format1' => 'Ymd',
  'show' => '({.*?})',
  'start' => '"sch_hour":(\\d+)|#|[|:|]"sch_min":"(\\d+)',
  'start_format' => 'G:i',
  'title' => '"title":"(.*?)"',
  'category' => '"kind":"(.*?)",||#replace#(LIVE)||생방송',
  'channel_logo' => '||#add#https://www.spotv.net/images/##cclogo##',
  'pshown' => '"kind":"(재방송)"',
  'ccurl1' => 'https://www.spotv.net/schedule/schedule_01.asp?nowYear=##urldate1_1##&nowMonth=##urldate1_2##&nowDate=##urldate1_3##',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'cccontent_type1' => 'text/html',
  'cchost_header1' => 'www.spotv.net',
  'ccurldate_format1' => 'Y-m-d||#split#(-)',
  'ccchannel_block' => '<a href="javascript:channelChanege\\(.*?<\\/li>',
  'ccchannel_id' => 'channelChanege\\(\'(.*?)\'',
  'ccchannel_name' => 'calendar_(.*?)\\.||#replace#(_)##(spotvgolf)|| ##spotv golf||#upper#',
  'ccchannel_logo' => '\\/images\\/(.*?)"',
);
?>