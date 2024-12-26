<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'gmanetwork.com[int]',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-10-04',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Manila',
  'culture' => 'tl',
  'max_day' => '7.1',
  'first_day' => '6012345',
  'url1' => 'https://data.igma.tv/international/programguide/##channel##.gz',
  'requestOption1' => '1',
  'accept_header1' => 'application/json, text/javascript, */*; q=0.01',
  'referer_header1' => 'https://www.gmanetwork.com/',
  'show' => '\\[{.*?(?:"id")(.*?)(?:}}).*?}\\]',
  'start' => '"show_time":"(.*?)"',
  'start_format' => 'h:i:s a',
  'title' => '"show_name":"(.*?)",',
  'showicon' => '{"image_name":"(.*?)"||#addstart#https://aphrodite.gmanetwork.com/international/shows/show_thumb/320_240_',
  'ccurl1' => 'https://data.igma.tv/international/programguide/all_gptv.gz',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'application/json, text/javascript, */*; q=0.01',
  'ccreferer_header1' => 'https://www.gmanetwork.com/',
  'ccchannel_block' => '("(?:gptv|gltv|gntv)_feed":"\\d+)||#replace#(gptv)##(gltv)##(gntv)||GMA PINOY TV##GMA LIFE TV##GMA NEWS TV',
  'ccchannel_id' => 'feed":"(\\d+)',
  'ccchannel_name' => '^"(.*?)_',
);
?>