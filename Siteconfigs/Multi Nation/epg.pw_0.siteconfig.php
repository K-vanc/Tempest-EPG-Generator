<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'epg.pw',
  'creator_name' => 'ouija',
  'creation_date' => '2024-12-20',
  'rev_no' => 'R0',
  'timezone' => 'America/Edmonton',
  'culture' => 'en',
  'max_day' => '7',
  'url1' => 'https://epg.pw/api/epg.xml?lang=en&date=##urldate1##&channel_id=##channel##',
  'requestOption1' => '1',
  'urldate_format1' => 'Ymd',
  'show' => '(<programme.*?<\\/programme>)',
  'start' => 'start="(\\d+)',
  'start_format' => 'YmdHis',
  'stop' => 'stop="(\\d+)',
  'stop_format' => 'YmdHis',
  'title' => '<title.*?>(.*?)<\\/title>',
  'desc' => '<desc.*?>(.*?)<\\/desc>',
  'channel_logo' => '<icon src="(.*?)"',
  'ccurl1' => 'https://epg.pw/index.html?lang=en',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'cccontent_type1' => 'text/html',
  'ccchannel_block' => '<a class="button is-primary is-inverted is-outlined".*?<\\/a>',
  'ccchannel_id' => 'href="\\/last\\/(.*?).html',
  'ccchannel_name' => 'weekly program guide">(.*?)<\\/a>',
);
?>