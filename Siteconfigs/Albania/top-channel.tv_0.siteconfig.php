<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'top-channel.tv',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-10-17',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Tirane',
  'culture' => 'sq',
  'max_day' => '7.1',
  'first_day' => '0123456',
  'url1' => 'https://top-channel.tv/guida/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'show' => '<div class="daily".*?(?:<div class="dcon)(.*?)(?:<\\/div>\\s*<div class="clearfix"><\\/div>).*?<div class="clearfix"><\\/div>\\s*<div class="clearfix"><\\/div>',
  'start' => '>\\s*(\\d{2}[\\.:]\\d{2})',
  'start_format' => 'H#i',
  'title' => '<div class="dt.*?>(.*?)<div',
  'channel_logo' => '||#add#https://top-channel.tv/wp-content/themes/topchannel/assets/images/logo.png?##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#top-channel',
  'ccchannel_name' => '||#set#Top Channel',
);
?>