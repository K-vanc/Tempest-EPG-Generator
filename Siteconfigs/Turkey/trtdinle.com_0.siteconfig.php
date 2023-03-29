<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'trtdinle.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-03-29',
  'rev_no' => 'R0',
  'timezone' => '+0300',
  'culture' => 'tr',
  'max_day' => '7.1',
  'url1' => 'https://www.trtdinle.com/channel/##channel##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'www.trtdinle.com',
  'show' => '<div class="channel-epg-row">(.*?)><\\/div>',
  'start' => 'epg-time">\\s*(\\d{2}[\\.:]\\d{2})',
  'start_format' => 'H#i',
  'title' => 'title">(.*?)<\\/div>',
  'channel_logo' => '||#add#https://cdn-i.pr.trt.com.tr/trtdinle//##cclogo##||#replace#(w580)||w200',
  'ccurl1' => 'https://www.trtdinle.com/radyolar',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'cchost_header1' => 'www.trtdinle.com',
  'ccchannel_block' => '<div class="col-xs-5.*?"radio-channel-name".*?<\\/a><\\/div>',
  'ccchannel_id' => '"radio-channel-name".*?<a href="\\/channel\\/(.*?)"',
  'ccchannel_name' => '"radio-channel-name".*?<a href.*?>(.*?)<\\/a>||#replace#(:.*)||',
  'ccchannel_logo' => '<img src=".*?trtdinle\\/\\/(.*?)"',
);
?>