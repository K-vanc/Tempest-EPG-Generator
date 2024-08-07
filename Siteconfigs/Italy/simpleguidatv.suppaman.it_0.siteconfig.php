<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'simpleguidatv.suppaman.it',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-07-31',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Rome',
  'culture' => 'it',
  'max_day' => '10',
  'episodeOption' => '1',
  'first_show' => '3',
  'url1' => 'https://simpleguidatv.suppaman.it:4443/api/getPrograms.php||#edit#("id":\\s*")(\\d+)"||\\1d1=##urldate1##&canale=##channel##&id=\\2"',
  'requestOption1' => '2',
  'post_data1' => 'd1=##urldate1##&canale=##channel##',
  'accept_header1' => 'application/json, text/javascript, */*; q=0.01',
  'content_type1' => 'application/x-www-form-urlencoded; charset=UTF-8',
  'host_header1' => 'simpleguidatv.suppaman.it:4443',
  'origin_header1' => 'https://simpleguidatv.suppaman.it',
  'urldate_format1' => 'java',
  'show' => '({\\s*"titolo".*?})',
  'start' => '"orainizio":"(.*?)"',
  'start_format' => 'H#i',
  'title' => '"titolo":"(.*?)",',
  'subtitle' => '"titolo_ep":"(.*?)",',
  'category' => '"generi":"(.*?)"||#split#(,)',
  'season' => '\\sS(\\d+)|>|\\s([IVMCDL]+)\\sep\\.||#roman#',
  'episode' => 'S\\d+\\s*E(?:[Pp])?(\\d+)|>|\\s[Ee][Pp](?:\\.)?\\s*(\\d+)',
  'channel_logo' => '||#add#https://simpleguidatv.suppaman.it/files/images/channel_logo/##cclogo##.png',
  'pagekey1' => '"id":"(d1=.*?)"',
  'detail_url1' => 'https://simpleguidatv.suppaman.it:4443/api/getProgram.php',
  'detail_requestOption1' => '2',
  'detail_post_data1' => '##pagekey1##',
  'detail_accept_header1' => 'application/json, text/javascript, */*; q=0.01',
  'detail_content_type1' => 'application/x-www-form-urlencoded; charset=UTF-8',
  'detail_host_header1' => 'simpleguidatv.suppaman.it:4443',
  'detail_origin_header1' => 'https://simpleguidatv.suppaman.it',
  'detail_desc' => '"description":"(.*?)"(?:,|})',
  'ccurl1' => 'https://simpleguidatv.suppaman.it/?canale=rai1&data=##urldate1##',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'cchost_header1' => 'simpleguidatv.suppaman.it',
  'ccurldate_format1' => 'Y-m-d',
  'ccchannel_block' => '<div class="canale.*?<\\/div>',
  'ccchannel_id' => 'channelname=\'(.*?)\'',
  'ccchannel_name' => 'channelnamefancy=\'(.*?)\'',
  'ccchannel_logo' => '\\/channel_logo\\/(.*?)\\.png',
);
?>