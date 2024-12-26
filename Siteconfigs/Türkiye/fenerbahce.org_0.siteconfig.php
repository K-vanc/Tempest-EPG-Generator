<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'fenerbahce.org',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-07-02',
  'rev_no' => 'R0',
  'timezone' => '+03:00',
  'culture' => 'tr',
  'max_day' => '7.1',
  'first_day' => '0123456',
  'url1' => 'https://www.fenerbahce.org/fenerbahcetv/yayinakisi',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=utf-8',
  'show' => '<h4 class="info-text">.*?<\\/strong><br \\/>.*?(?:(?<!strong><)br \\/>)(.*?)(?:<).*?\\/h4>||#replace#(^$)||xxxxx',
  'start' => '^(\\d{2}[\\.:]\\d{2})',
  'start_format' => 'H#i',
  'title' => '[\\.:]\\d{2}\\s(.*?)$||#word#',
  'channel_logo' => '||#add#https://upload.wikimedia.org/wikipedia/en/4/43/Fenerbahce_TV_Logo.jpg',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#fbtv',
  'ccchannel_name' => '||#set#FB TV',
);
?>