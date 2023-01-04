<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'alsharqiya.com[ar]',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-01-04',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Baghdad',
  'culture' => 'ar',
  'max_day' => '6.1',
  'url1' => 'https://www.alsharqiya.com/ar/tv-schedule',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=utf-8',
  'urldate_format1' => '#daylist#1|2|3|4|5|6',
  'stopdate_format1' => '#daycounter#1',
  'show' => 'id="solid-justified-tab[##urldate1##-##stopdate1##]">.*?(?:<div class="col-xs-)(.*?)(?:<\\/div>\\s*<\\/div>).*?<\\/div>\\s*<\\/div>\\s*(?:<div class="col-md-4">|<div class="tab-pane)||#include#>##channel##<',
  'start' => '"schedule-hour">(.*?)<\\/',
  'start_format' => 'H#i',
  'title' => '<div class="title.*?>(.*?)<\\/h3>',
  'desc' => '<p>(.*?)<\\/p>',
  'showicon' => 'src="(.*?)"||#addstart#https://www.alsharqiya.com',
  'channel_logo' => '||#add#https://www.alsharqiya.com/Content/##cclogo##logo.png',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#برامج الشرقية|برامج الشرقية نيوز',
  'ccchannel_name' => '||#set#ALSHARQIYA|ALSHARQIYA NEWS',
  'ccchannel_logo' => '||#set#web-assets/img/|admin-assets/uploads/lives/191968_image_824949_image_Sharqiya_News_',
);
?>