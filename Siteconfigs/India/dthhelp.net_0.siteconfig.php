<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'dthhelp.net',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-03-01',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Kolkata',
  'culture' => 'en',
  'max_day' => '3.1',
  'agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 OPR/95.0.0.0',
  'url1' => 'https://www.dthhelp.net/epg/##channel##_guide.html',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'referer_header1' => 'https://www.dthhelp.net/epg/epg_channel_list.html',
  'show' => '<tr> <td>(.*?)<\\/tr>',
  'start' => '.*?<\\/td><td>.*?(\\d+[\.:]\\d+)\\sto\\s',
  'start_format' => 'H#i',
  'stop' => '\\sto\\s(.*?)<\\/td>',
  'stop_format' => 'H#i',
  'title' => '^(.*?)<\\/td>',
  'desc' => ' to \\d+:\\d+<\\/td><td>(.*?)<\\/td>',
  'ccurl1' => 'https://www.dthhelp.net/epg/epg_channel_list.html',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'ccchannel_block' => '<tr>\\s*<td>\\s*<a href=".*?<\\/tld>',
  'ccchannel_id' => '<td> <a href=".*?\\/epg\\/(.*?)_guide.html',
  'ccchannel_name' => '<a href=".*?href=.*?">(.*?)<\\/a>',
);
?>