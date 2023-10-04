<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'beinsports.com.tr',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-01-14',
  'rev_no' => 'R0',
  'timezone' => '+03:00',
  'culture' => 'tr',
  'max_day' => '1',
  'url1' => 'https://beinsports.com.tr/_next/data/372/tr-TR/yayin-akisi/##channel##/##urldate1##.json?rewriteIds=##channel##&rewriteIds=##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => '*/*',
  'host_header1' => 'beinsports.com.tr',
  'urldate_format1' => '#weekdayname#pazartesi|sali|carsamba|persembe|cuma|cumartesi|pazar',
  'show' => '({"channel_id":.*?})',
  'start' => '"event_time":"(.*?)"',
  'start_format' => 'H#i#s',
  'title' => '"name":"(.*?)",',
  'channel_logo' => '{"rewriteId":"##channel##","image":"(.*?)"',
  'ccurl1' => 'https://beinsports.com.tr/yayin-akisi',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'cchost_header1' => 'beinsports.com.tr',
  'ccchannel_block' => '"activeLeagues":\\[.*?(?:{)(.*?)(?:}).*?\\]',
  'ccchannel_id' => '"rewriteId":"(.*?)"',
  'ccchannel_name' => '"rewriteId":"(.*?)"||#replace#(-)|| ||#word#',
);
?>