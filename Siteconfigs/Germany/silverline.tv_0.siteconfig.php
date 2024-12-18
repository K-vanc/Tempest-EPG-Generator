<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'silverline.tv',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-12-16',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Berlin',
  'culture' => 'de',
  'max_day' => '7',
  'url1' => 'https://silverline.tv/tv-programm/?date=##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'silverline.tv',
  'urldate_format1' => 'Ymd',
  'show' => '(<li class="(?:\\s*active\\s*)?">.*?<\\/li>)',
  'start' => '<time>\\s*(\\d+:\\d+)',
  'start_format' => 'H#i',
  'title' => '<h3>(.*?)<\\/h3>',
  'showicon' => '<img src="(.*?)"||#addstart#https://silverline.tv',
  'production_date' => '[A-Z]+\\s(\\d{4})',
  'director' => 'Regie:\\s*(.*?)<',
  'country' => '<br\\/>\\s*([A-Z]+)\\s',
  'length' => 'Länge:\\s(\\d+)',
  'pagekey1' => '<a href="(.*?)"',
  'detail_url1' => '##pagekey1##',
  'detail_requestOption1' => '1',
  'detail_accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'detail_host_header1' => 'silverline.tv',
  'detail_desc' => '"entry-content">\\s*<p>(.*?)<\\/p>',
  'detail_showicon' => 'data-desktop="(.*?)"||#replace#^(\\/\\/)||https://||#max#5',
  'detail_production_date' => '[A-Z]{2,3}\\s(\\d{4})',
  'detail_actor' => '<li>Darsteller:\\s*(.*?)<\\/li>||#split#(,)',
  'detail_director' => '<li>Regie:\\s*(.*?)<\\/li>||#split#(,)',
  'detail_country' => '<li>([A-Z]{2,3})\\s\\d',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#silverline.tv',
  'ccchannel_name' => '||#set#Silverline TV',
);
?>