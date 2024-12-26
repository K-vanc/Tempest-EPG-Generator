<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'rmtv.bg',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-08-26',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Sofia',
  'culture' => 'bg',
  'max_day' => '7.1',
  'episodeOption' => '1',
  'first_day' => '0123456',
  'url1' => 'https://rmtv.bg/bg/tv-programa/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'rmtv.bg',
  'show' => '<div id="tabs-\\d.*?(?:<(?:p|br \\/)>\\s*)(\\d+.*?)(?:<(?:br |p)\\/>).*?<\\/div>\\s*<\\/div>',
  'start' => '^(\\d+[\\.:]\\d+)',
  'start_format' => 'H#i',
  'title' => '\\d\\s*(?:"|“)(.*?)(?:”|")',
  'category' => '” – (.*?)(?:$|,)',
  'season' => ',\\s*(\\d+)\\s*сезон',
  'episode' => ',\\s*(\\d+)\\s*еп\\.',
  'channel_logo' => '||#add#https://rmtv.bg/img/logo.png?##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#rmtv',
  'ccchannel_name' => '||#set#RM TV',
);
?>