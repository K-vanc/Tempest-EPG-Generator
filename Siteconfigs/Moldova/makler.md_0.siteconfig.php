<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'makler.md',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-05-19',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Chisinau',
  'culture' => 'ro',
  'max_day' => '8',
  'url1' => 'https://makler.md/tv/index/get-programs/',
  'requestOption1' => '1',
  'post_data1' => 'date=##urldate1##&period=all&group%5B1%5D=opened&ch%5B##channel##%5D=on&group%5B4%5D=opened',
  'accept_header1' => 'application/json, text/javascript, */*; q=0.01',
  'content_type1' => 'application/x-www-form-urlencoded; charset=UTF-8',
  'host_header1' => 'makler.md',
  'XMLHttpRequest1' => 'on',
  'urldate_format1' => 'unix',
  'show' => '(<li>.*?<\\\\\\/li>)',
  'start' => '<strong>\\s*(\\d+[:\\.]\\d+)',
  'start_format' => 'H#i',
  'title' => '<span>(.*?)<\\/span>',
  'ccurl1' => 'https://makler.md/md/tv',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'cchost_header1' => 'makler.md',
  'ccchannel_block' => '<label for="ch.*?<\\/label>',
  'ccchannel_id' => '"ch(\\d+)',
  'ccchannel_name' => '">(.*?)<\\/label>',
);
?>