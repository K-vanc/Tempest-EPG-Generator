<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'watchnost.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-01-21',
  'rev_no' => 'R0',
  'timezone' => '-05:00',
  'culture' => 'en',
  'max_day' => '2',
  'url1' => 'https://watchnost.com/schedule/?date=##urldate1##&timezone=-05:00',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'watchnost.com',
  'urldate_format1' => 'Y-m-d',
  'show' => '(<li class="flex.*?<\\/li>)',
  'start' => 'semibold">\\s*(\\d+:\\d+\\s\\S+)',
  'start_format' => 'h#i A',
  'title' => 'uppercase">(.*?)<\\/',
  'desc' => '<div>(.*?)<\\/div>',
  'category' => '400">(.*?)<\\/||#split#(,)',
  'showicon' => 'src="(.*?)"',
  'channel_logo' => '||#add#https://watchnost.com/wp-content/uploads/2023/01/Final-logo.png?##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#nost',
  'ccchannel_name' => '||#set#The Nostalgia Network',
);
?>