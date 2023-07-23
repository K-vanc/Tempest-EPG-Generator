<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'ondacadiz.es',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-07-23',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Madrid',
  'culture' => 'es',
  'max_day' => '7',
  'url1' => 'https://ondacadiz.es/programacion/television/##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'ondacadiz.es',
  'urldate_format1' => 'Ymd',
  'show' => '(<tr class=.*?<\\/tr>)',
  'start' => 'fecha-emision">(\\d+:\\d+)',
  'start_format' => 'H:i',
  'title' => 'hreflang="es">(.*?)<',
  'desc' => '<p><span>(.*?)<\\/p>\\s*<\\/td>||#replace#(<span>)||\\n',
  'category' => 'field-programa">\\((.*?)\\)||#split#(,|\\s-\\s|\\s\\/\\s)||#replace#(--)||',
  'channel_logo' => '||#add#https://ondacadiz.es/sites/default/files/logo_onda_cadiz_web_120_100_0.png',
  'pshown' => '"(redif)"',
  'new' => '"(estre)"',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#onda-cadiz',
  'ccchannel_name' => '||#set#Onda Cádiz',
);
?>