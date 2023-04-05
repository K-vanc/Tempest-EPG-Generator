<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'snt.com.py',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-04-05',
  'rev_no' => 'R0',
  'timezone' => 'America/Asuncion',
  'culture' => 'es',
  'max_day' => '7.1',
  'first_day' => '0123456',
  'url1' => 'https://www.snt.com.py/programacion/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'www.snt.com.py',
  'show' => '<div class="tab_content shows-list.*?(?:<div class="item)(.*?)(?:<\\/div>\\s*<\\/div>).*?<\\/div>\\s*<\\/div>\\s*<\\/div>',
  'start' => '<p>(\\d{2}[\\.:]\\d{2})',
  'start_format' => 'H#i',
  'title' => '<p class="programa-name">(.*?)<\\/p>',
  'showicon' => '<img src="(.*?)"',
  'channel_logo' => '||#add#https://www.snt.com.py/wp-content/themes/albavision-theme/parts-web/0aae71cf/logo.png?ver=2022.04.29:1620',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#snt',
  'ccchannel_name' => '||#set#SNT',
);
?>