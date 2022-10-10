<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'sriwijayatv.tv',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-10-10',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Kuala_Lumpur',
  'culture' => 'id',
  'max_day' => '7.1',
  'first_day' => '0123456',
  'url1' => 'https://sriwijayatv.tv/jadwal-hari-ini/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'show' => '<div class="ctu-content-span"><\\/div>.*?(?:<p.*?>)(.*?)(?:<\\/p>).*?<\\/p><\\/div>(?!<div class="jadwal-sekarang">)||#replace#(<.*?>)##(–)||##-',
  'start' => '^(\\d{2}[\\.:]\\d{2})',
  'start_format' => 'H#i',
  'title' => '\\d{2}\\s*-\\s*(.*)',
  'channel_logo' => '||#add#https://sriwijayatv.tv/wp-content/uploads/2021/01/sriwijaya-tv.jpg',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#sriwijaya-tv',
  'ccchannel_name' => '||#set#Sriwijaya TV',
);
?>