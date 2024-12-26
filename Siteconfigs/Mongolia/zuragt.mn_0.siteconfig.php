<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'zuragt.mn',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-04-18',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Ulaanbaatar',
  'culture' => 'mn',
  'max_day' => '6.1',
  'url1' => 'https://www.zuragt.mn/channel/##channel##/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'urldate_format1' => '#range#m-d',
  'grabber_1' => 'on',
  'gpattern_1' => '(.)||#replace#(.+)##(,)||##urldate1####|',
  'show' => '<h1>(?:##grabber_1##)<\\/h1>.*?(?:<li)(.*?)(?:<\\/li>).*?<\\/ul>',
  'start' => '"time">(.*?)<\\/',
  'start_format' => 'H#i',
  'title' => '="program">(.*?)<\\/',
  'channel_logo' => '<div class="tv-img-container">\\s*<img class="img-responsive" src="(.*?)"||#addstart#https:',
  'ccurl1' => 'https://www.zuragt.mn/choose-channels/',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'ccchannel_block' => '<ul class="dropdown-menu">.*?(?:<li>\\s*)(.*?)(?:\\s*<\\/li>).*?<\\/ul>',
  'ccchannel_id' => '"\\/channel\\/(.*?)\\/',
  'ccchannel_name' => '">(.*?)<\\/a>',
);
?>