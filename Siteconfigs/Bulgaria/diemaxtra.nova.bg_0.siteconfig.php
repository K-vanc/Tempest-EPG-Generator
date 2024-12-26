<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'diemaxtra.nova.bg',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-12-01',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Sofia',
  'culture' => 'bg',
  'max_day' => '7.1',
  'url1' => 'https://diemaxtra.nova.bg/##channel##/schedule',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'show' => '<ul class="tv_content">.*?(?:<li>)(.*?)(?:<\\/li>).*?<\\/ul>',
  'start' => '<p class="time">(.*?)<',
  'start_format' => 'H#i',
  'title' => '<p class="title">(.*?)<\\/p>',
  'desc' => '<p class="description">(.*?)<\\/p>',
  'ccurl1' => 'https://diemaxtra.nova.bg/diemasport/schedule',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'cccontent_type1' => 'text/html; charset=UTF-8',
  'ccchannel_id' => '<li class="ds(?:\\d)? main-menu"><a href="\\/(.*?)"',
  'ccchannel_name' => '<li class="ds(?:\\d)? main-menu"><a href="\\/.*?">(.*?)<\\/a>',
);
?>