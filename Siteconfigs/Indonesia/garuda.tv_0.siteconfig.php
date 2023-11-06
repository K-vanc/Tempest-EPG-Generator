<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'garuda.tv',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-11-06',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Jakarta',
  'culture' => 'id',
  'max_day' => '7.1',
  'first_day' => '0123456',
  'url1' => 'https://garuda.tv/jadwal-acara/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'garuda.tv',
  'show' => '<tbody class="row-hover">.*?(?:<tr class)(.*?)(?:<\\/tr>).*?<\\/tbody>',
  'start' => '"column-1">(\\d+[:\\.]\\d+)',
  'start_format' => 'H#i',
  'title' => '"column-2">(.*?)<\\/',
  'category' => '"column-3">(.*?)<\\/',
  'channel_logo' => '||#add#https://garuda.tv/wp-content/uploads/2023/09/logo-web-garuda.tv_-2-1.svg',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#garuda-tv',
  'ccchannel_name' => '||#set#Garuda TV',
);
?>