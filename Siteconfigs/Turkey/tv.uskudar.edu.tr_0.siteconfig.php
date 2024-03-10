<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'tv.uskudar.edu.tr',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-03-10',
  'rev_no' => 'R0',
  'timezone' => '+03:00',
  'culture' => 'tr',
  'max_day' => '7.1',
  'first_show' => '0123456',
  'url1' => 'https://tv.uskudar.edu.tr/||#edit#(<p>Henüz yayın.*?<\\/p>)||<div class="item">\\1</div>',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'tv.uskudar.edu.tr',
  'show' => '(id="(?:pazartesi|sali|carsamba|persembe|cuma|cumartesi|pazar)">.*?(?:"item">)(.*?<\/div>)(?:).*?<\\/div>\\s*<\\/div>)||#exclude#Henüz yayın',
  'start' => '<p>\\s*<strong>\\s*(\\d+:\\d+)',
  'start_format' => 'H#i',
  'stop' => '-\\s*<strong>\\s*(\\d+:\\d+)',
  'stop_format' => 'H#i',
  'title' => '<\\/p>(.*?)$',
  'channel_logo' => '||#add#https://tv.uskudar.edu.tr/assets/img/uskudar-televizyonu-logo.png?##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#uskudar-tv',
  'ccchannel_name' => '||#set#ÜÜTV',
);
?>