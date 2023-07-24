<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'live.sevillafc.es',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-07-24',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Madrid',
  'culture' => 'es',
  'max_day' => '3.1',
  'url1' => 'https://live.sevillafc.es/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'live.sevillafc.es',
  'grabber_1' => 'on',
  'gpattern_1' => '||#add###channel##||#replace#(---)|||',
  'show' => 'id="block-views-block-media-programming-block-(?:##grabber_1##)">.*?(?:<div class="views-field views-field-field-programming-hour)(.*?programming-prog.*?)(?:<\\/div><\\/div>).*?<\\/div>\\s*<\\/div>\\s*<\\/div>',
  'start' => 'content">(\\d+:\\d+)',
  'start_format' => 'H#i',
  'title' => '.*"field-content">(.*)',
  'channel_logo' => '||#add###cclogo##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#1---2---3|4---5---6',
  'ccchannel_name' => '||#set#Sevilla FC TV|Sevilla FC Radio',
  'ccchannel_logo' => '||#set#https://sevillafc.es/sites/default/files/escudos/t179%402x_0.png|https://static-2.ivoox.com/audios/9/c/5/0/9c50ec67639b5990d3d68a587a371752_LG.jpg',
);
?>