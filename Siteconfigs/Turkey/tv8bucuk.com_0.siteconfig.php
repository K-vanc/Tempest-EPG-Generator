<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'tv8bucuk.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-08-07',
  'rev_no' => 'R0',
  'timezone' => '+03:00',
  'culture' => 'tr',
  'max_day' => '7',
  'url1' => 'https://www.tv8bucuk.com/yayin-akisi/##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'www.tv8bucuk.com',
  'urldate_format1' => 'd-m-Y',
  'show' => '(<tr>.*?<\\/tr>)',
  'start' => '"stream-time">\\s*<span.*?>(\\d+:\\d+)',
  'start_format' => 'H#i',
  'title' => '"stream-name">(.*?)<',
  'category' => '"stream-type">(.*?)<',
  'showicon' => 'data-original="(.*?)"||#replace#(140x78)||480x320',
  'channel_logo' => '||#add#https://img.tv8bucuk.com/s/template/amp/images/tv8bucuk_logo.png',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#tv8,5',
  'ccchannel_name' => '||#set#TV 8,5',
);
?>