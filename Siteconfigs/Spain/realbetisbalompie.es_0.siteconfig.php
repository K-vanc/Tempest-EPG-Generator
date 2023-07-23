<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'realbetisbalompie.es',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-07-23',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Madrid',
  'culture' => 'es',
  'max_day' => '7.1',
  'first_day' => '0123456',
  'url1' => 'https://www.realbetisbalompie.es/rtvbetis/programacion-tv/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'www.realbetisbalompie.es',
  'show' => '<ul class="program-wrapper.*?(?:<li>)(.*?)(?:<\\/li>).*?<\\/ul>',
  'start' => 'hour">(\\d+:\\d+)',
  'start_format' => 'H#i',
  'title' => 'title">(.*?)<\\/div>',
  'desc' => 'desc">(.*?)<\\/div>',
  'channel_logo' => '||#add#https://www.realbetisbalompie.es/media/img/graphics/new_logos/logo_horizontal.svg',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#betis-tv',
  'ccchannel_name' => '||#set#Betis TV',
);
?>