<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'investor.id',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-12-08',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Jakarta',
  'culture' => 'id',
  'max_day' => '7.1',
  'first_day' => '0123456',
  'url1' => 'https://investor.id/idtv-live-streaming',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'show' => '<div class="tab-pane.*?(?:<div class="p-3">)(.*?)(?:<\\/span>).*?<\\/div>\\s*<\\/div>\\s*<\\/div>',
  'start' => '<\\/svg>.*?(\\d+:\\d+)',
  'start_format' => 'H#i',
  'stop' => '\\d+:\\d+\\s*-\\s*(\\d+:\\d+)',
  'stop_format' => 'H#i',
  'title' => '<p class="text-uppercase.*?>(.*?)<\\/p>',
  'channel_logo' => '||#add#https://investor.id/img/idtv.png?##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#idtv',
  'ccchannel_name' => '||#set#IDTV',
);
?>