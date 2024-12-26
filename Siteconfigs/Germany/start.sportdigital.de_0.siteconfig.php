<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'start.sportdigital.de',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-07-17',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Berlin',
  'culture' => 'de',
  'max_day' => '21.1',
  'url1' => 'https://start.sportdigital.de/tvprogramm/##channel##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'show' => '(<div class="ppProgram_block.*?<h3>.*?<\\/div>)',
  'start' => '"ppTime.*?">(\\d+[\\.:]\\d+)',
  'start_format' => 'H#i',
  'title' => '<h3>(.*?)<\\/h3>',
  'desc' => '<p>(.*?)<\\/p>',
  'category' => 'Uhr\\s*-\\s*(.*?)<|#|"ppTime_live">(.*?)<\\/span>|#|"ppTime_tipp">(.*?)<\\/span>',
  'showicon' => '"image":\\s*\\[\\s*"(.*?)"',
  'channel_logo' => '<section id="epgheadersection".*?<img src="(.*?)"',
  'ccurl1' => 'https://start.sportdigital.de/tvprogramm',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'ccchannel_block' => '<a class="btn.*?<\\/a>',
  'ccchannel_id' => '\\/tvprogramm\\/(.*?)"',
  'ccchannel_name' => 'sm-inline">(.*?)<\\/',
);
?>