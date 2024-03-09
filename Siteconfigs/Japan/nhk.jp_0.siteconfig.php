<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'nhk.jp',
  'creator_name' => 'Kivanc (せんぱい)',
  'creation_date' => '2024-03-09',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Tokyo',
  'culture' => 'ja',
  'max_day' => '8',
  'url1' => 'https://api.nhk.or.jp/r5/pg2/list/4/130/##channel##/##urldate1##.json',
  'requestOption1' => '1',
  'accept_header1' => '*/*',
  'host_header1' => 'api.nhk.or.jp',
  'origin_header1' => 'https://www.nhk.jp',
  'urldate_format1' => 'Y-m-d',
  'show' => '(,"event_id":.*?"play_control".*?})',
  'start' => '"start_time":"(.*?)\\+',
  'start_format' => 'Y-m-d\\TH#i#s',
  'stop' => '"end_time":"(.*?)\\+',
  'stop_format' => 'Y-m-d\\TH#i#s',
  'title' => '"title":"(.*?)",',
  'subtitle' => '"subtitle":"(.*?)",',
  'desc' => '"content":"(.*?)",',
  'showicon' => '"logo_l":{"url":"(.*?)"|#|"thumbnail_m":{"url":"(.*?)"',
  'channel_logo' => ',"logo_l":{"url":"(.*?)"',
  'actor' => '"act":"(.*?)",||#split#(，)',
  'pshown' => '"(rebroad)":"1"',
  'keyword' => '"keywords":\\["(.*?)"\\]||#replace#(",")||-',
  'ccurl1' => 'https://www.nhk.jp/timetable/static/assets/c4188c1.js',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => '*/*',
  'cchost_header1' => 'www.nhk.jp',
  'ccchannel_block' => 'channelList:function\\(\\){return new Map\\(\\[.*?\\]\\]\\]',
  'ccchannel_id' => 'x\\.d\\.(.*?),',
  'ccchannel_name' => ',\\["(.*?)",',
);
?>