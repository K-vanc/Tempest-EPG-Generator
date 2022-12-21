<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'watchyour.tv',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-12-21',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'en',
  'max_day' => '2.1',
  'url1' => 'https://www.watchyour.tv/guide.json',
  'requestOption1' => '1',
  'accept_header1' => '*/*',
  'content_type1' => 'application/json',
  'host_header1' => 'www.watchyour.tv',
  'origin_header1' => 'https://www.watchyour.tv',
  'XMLHttpRequest1' => 'on',
  'show' => '"id":"##channel##","shows":\\[.*?(?:{)(.*?)(?:}).*?\\]',
  'start' => '"tms":"(\\d+)',
  'start_format' => 'unix',
  'title' => '"name":"(.*?)",',
  'category' => '"category":"(.*?)"',
  'channel_logo' => '"icon":"(\\S+)","language":"\\w+","id":"##channel##"',
  'ccurl1' => 'https://www.watchyour.tv/channels.php',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'cccontent_type1' => 'text/html; charset=UTF-8',
  'cchost_header1' => 'www.watchyour.tv',
  'ccchannel_block' => '<li><div class="thumbnail text-center">.*?<\\/li>',
  'ccchannel_id' => 'php\\?id=(\\d+)',
  'ccchannel_name' => '<div align="center".*?>(.*?)<\\/div>',
);
?>