<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'gemtvasia.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-12-02',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Singapore',
  'culture' => 'en',
  'max_day' => '9',
  'episodeOption' => '1',
  'url1' => 'https://www.gemtvasia.com/schedule/ajax/hk/data/listings/1/##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html, */*; q=0.01',
  'referer_header1' => 'https://www.gemtvasia.com/schedule',
  'XMLHttpRequest1' => 'on',
  'urldate_format1' => 'Y/m/d',
  'show' => '(<li  class="listing.*?">.*?<\\/li>)',
  'start' => '"date">(.*?)<',
  'start_format' => 'g.ma',
  'title' => '"title">(.*?)<\\/||#replace#(^"|"$)||',
  'desc' => '"synopsis">(.*?)<\\/||#exclude#""||#replace#(^"|"$)||',
  'category' => '"genre">(.*?)<\\/',
  'showicon' => 'src="(.*?)"||#addstart#https://www.gemtvasia.com',
  'season' => 'Season\\s(\\d+)',
  'episode' => 'Episode\\s(\\d+)',
  'channel_logo' => '||#add#https://www.gemtvasia.com/sites/gemtvasia.com/files/logo-bigger.png?##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#gemtv',
  'ccchannel_name' => '||#set#Gem TV',
);
?>