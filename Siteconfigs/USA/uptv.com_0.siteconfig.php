<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'uptv.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-10-23',
  'rev_no' => 'R0',
  'timezone' => 'America/New_York',
  'culture' => 'en',
  'max_day' => '8.1',
  'url1' => 'https://uptv.com/schedule/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'show' => '(<article id=".*?<\\/article>)',
  'start' => '"schedule-time">(.*?)<',
  'start_format' => 'g#ia',
  'title' => '<p class="schedule-program-type.*?>(.*?)<\\/p>',
  'subtitle' => '<p class="schedule-program-title">(.*?)<\\/p>',
  'desc' => 'program-description">(.*?)<\\/p>',
  'showicon' => '<img src="(.*?)"',
  'channel_logo' => '||#add#https://uptv.com/wp-content/themes/uptv2020/img/uptv-logo-white.svg',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#uptv',
  'ccchannel_name' => '||#set#UPtv',
);
?>