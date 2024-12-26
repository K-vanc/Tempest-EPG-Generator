<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'tvinfo.uz',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-02-29',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Tashkent',
  'culture' => 'uz',
  'max_day' => '5',
  'url1' => 'https://tvinfo.uz/##channel##?date=##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'tvinfo.uz',
  'urldate_format1' => 'Y-m-d',
  'show' => '(<div class="flex text-sm.*?<\\/div>\\s*<\\/div>)',
  'start' => 'shrink-0">\\s*(\\d+[\\.:]\\d+)',
  'start_format' => 'H#i',
  'title' => '<div class="">(.*?)<\\/',
  'channel_logo' => 'space-y-0">\\s*<img src="(.*?)"',
  'ccurl1' => 'https://tvinfo.uz/channels',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'cchost_header1' => 'tvinfo.uz',
  'ccchannel_block' => '<h3 class="grow leading-tight">.*?<\\/h3>',
  'ccchannel_id' => 'tvinfo.uz\\/(.*?)"',
  'ccchannel_name' => '<a href.*?>(.*?)<\\/',
);
?>