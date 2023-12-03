<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'animax-asia.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-12-03',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Singapore',
  'culture' => 'en',
  'max_day' => '7.1',
  'first_day' => '6012345',
  'url1' => 'https://www.animax-asia.com/schedule/ajax/seasia/data/grid/##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html, */*; q=0.01',
  'referer_header1' => 'https://www.animax-asia.com/',
  'XMLHttpRequest1' => 'on',
  'urldate_format1' => 'Y/m/d',
  'show' => '<div class="day">.*?(?:<div class="schedule-grid-item")(.*?)(?:<\\/div>\\s*<\\/div>\\s*<\\/div>).*?<\\/div>\\s*<\\/div>\\s*<\\/div>\\s*<\\/div>',
  'start' => '"time">(.*?)<\\/',
  'start_format' => 'g.ia',
  'title' => '"program-title">(.*?)<\\/',
  'subtitle' => '"episode-title">"(.*?)"',
  'channel_logo' => '||#add#https://www.animax-asia.com/sites/all/themes/responsive/responsive_animax_asia_2/logo.png?##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#animax-asia',
  'ccchannel_name' => '||#set#Animax Asia',
);
?>