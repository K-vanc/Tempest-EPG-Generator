<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'fxturkiye.com.tr',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-01-16',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'tr',
  'max_day' => '49',
  'episodeOption' => '1',
  'url1' => 'https://www.fxturkiye.com.tr/yayinakisi/fx/##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'www.fxturkiye.com.tr',
  'urldate_format1' => 'Ymd',
  'show' => '<section class="row day" data-magellan-destination="day##urldate1##.*?(?:<li class="acilia-schedule-event)(.*?)(?:<\\/li>).*?<\\/section>',
  'start' => 'data-datetime-timestamp="(\\d*)"',
  'start_format' => 'unix',
  'title' => '<div class="large-8 medium-8 small-8 column"><h3 >(.*?)<\\/h3>',
  'subtitle' => '<div class="large-8 medium-8 small-12 column description left"><h4>(.*?)\\,\\s*Sez',
  'desc' => '<p>(.*?)<\\/p>',
  'season' => '<div class="large-8 medium-8 small-12 column description left"><h4>.*?\\,\\s*Sezon\\s*(\\d+)',
  'episode' => '<div class="large-8 medium-8 small-12 column description left"><h4>.*?\\|\\s*Bölüm\\s*(\\d+)',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#fx',
  'ccchannel_name' => '||#set#FX',
);
?>