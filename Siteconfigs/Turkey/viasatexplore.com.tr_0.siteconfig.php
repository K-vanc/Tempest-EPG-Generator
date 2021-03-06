<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'viasatexplore.com.tr',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-05-04',
  'rev_no' => 'R0',
  'timezone' => '+03:00',
  'culture' => 'tr',
  'max_day' => '60',
  'url1' => 'https://www.viasatexplore.com.tr/?date=##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'host_header1' => 'www.viasatexplore.com.tr',
  'urldate_format1' => 'Y-m-d',
  'show' => '(<div class="timeanddate.*?<\\/li>)',
  'start' => '<h2>(\\d{2}:\\d{2})',
  'start_format' => 'H#i',
  'title' => 'id="title.*?value="(.*?)">',
  'subtitle' => 'id="episode.*?value="(.*?)">||#replace#^(\\d+)$||',
  'desc' => '<\\/h4>\\s*<p>(.*?)<\\/p>',
  'category' => 'id="genre.*?value="(.*?)">||#split#(\\/)',
  'showicon' => 'id="main_image.*?value="(.*?)">',
  'season' => '<h4>.*?\\s-\\sMevsim\\s(\\d+)',
  'episode' => 'id="episode\\S+\\s+value="(\\d+)">',
  'channel_logo' => '||#add#https://www.viasatexplore.com.tr/assets/images/ex-header-logo.png',
  'production_date' => 'id="productionYear.*?value="(\\d{4})',
  'country' => 'id="bline.*?value="(.*?),||#split#(\\/)',
  'rating' => 'id="parentalRating.*?value="(.*?)">',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#viasat_explore',
  'ccchannel_name' => '||#set#Viasat Explore',
);
?>