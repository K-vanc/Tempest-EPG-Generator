<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'useetv.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-08-29',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'id',
  'max_day' => '1',
  'url1' => 'https://www.useetv.com/livetv/##channel##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'host_header1' => 'www.useetv.com',
  'urldate_format1' => 'Y-m-d',
  'show' => 'id="pills-##urldate1##".*?(?:<a )(.*?)(?:<\\/a>).*?<\\/div>\\s*<\\/div>\\s*<\\/div>',
  'start' => '\\/##channel##\\/(\\d+)',
  'start_format' => 'unix',
  'stop' => '\\/##channel##\\/\\d+\\/(\\d+)',
  'stop_format' => 'unix',
  'title' => '<b>(.*?)<\\/b>',
  'channel_logo' => '<div class="row video-schedule">.*?<img src="(.*?)"',
  'ccurl1' => 'https://www.useetv.com/tv/live',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'cccontent_type1' => 'text/html; charset=UTF-8',
  'cchost_header1' => 'www.useetv.com',
  'ccchannel_block' => '<a class="channel-item.*?<\\/a>',
  'ccchannel_id' => 'data-url=".*?\\/livetv\\/(.*?)"',
  'ccchannel_name' => 'data-name="(.*?)">',
);
?>