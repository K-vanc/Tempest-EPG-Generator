<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'trt.net.tr',
  'creator_name' => 'Kivanc',
  'creation_date' => '2020-01-11',
  'rev_no' => 'R0',
  'timezone' => '+03:00',
  'culture' => 'tr',
  'max_day' => '7',
  'url1' => 'http://www.trt.net.tr/televizyon/akis.aspx?kanal=##channel##&gun=##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
  'content_type1' => 'text/html; charset=utf-8',
  'urldate_format1' => '#daylist#0|1|2|3|4|5|6',
  'show' => '<div id="gunlukAkisDIV">.*?(?:<p class="tur\\d*">)(.*?)(?:<\\/p>).*?<div style="clear:both">||#exclude#--#.',
  'start' => '<span class="aks0">(\\d{2}[\\.:]\\d{2})<\\/span>',
  'start_format' => 'H#i',
  'title' => '<span class="aks1">(.*?)<\\/span>',
  'ccurl1' => 'http://www.trt.net.tr/televizyon/akis.aspx?kanal=trt-1&gun=0',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
  'cccontent_type1' => 'text/html; charset=utf-8',
  'ccchannel_id' => '<li><a href="\\.\\/akis\\.aspx\\?kanal=(.*?)&',
  'ccchannel_name' => '<li><a href="\\.\\/akis\\.aspx\\?kanal=.*?>(.*?)<\\/a>',
);
?>