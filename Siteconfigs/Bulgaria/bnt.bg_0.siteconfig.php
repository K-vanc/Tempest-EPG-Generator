<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'bnt.bg',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-11-30',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Sofia',
  'culture' => 'bg',
  'max_day' => '12.1',
  'url1' => 'https://bnt.bg/program/##channel##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'host_header1' => 'bnt.bg',
  'urldate_format1' => '#range#Ymd',
  'grabber_1' => 'on',
  'gpattern_1' => '(.)||#replace#(.+)##(,)||##urldate1####|',
  'show' => '<div class="in-tabs-descr tab tab-holder-(?:##grabber_1##).*?">.*?(?:<a)(.*?)(?:-->\\s*<\\/div>).*?<\\/a>\\s*<\\/div>',
  'start' => '<span class="hour">(.*?)<\\/span>',
  'start_format' => 'G#i',
  'title' => '<span class="name">(.*?)<\\/span>',
  'desc' => '<span class="type">(.*?)<\\/span>',
  'category' => ' alt="(.*?)"',
  'showicon' => '<img src="(.*?)"',
  'channel_logo' => '<a href="https:\\/\\/bnt.bg\\/##channel##\\/shows".*?<img src="(.*?)"||#addstart#https://bnt.bg',
  'pagekey1' => 'href="(.*?)"',
  'detail_url1' => '##pagekey1##',
  'detail_requestOption1' => '1',
  'detail_accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'detail_content_type1' => 'text/html; charset=UTF-8',
  'detail_host_header1' => 'bnt.bg',
  'detail_desc' => '<div class="under-head">\\s*<p>(.*?)<\\/p>',
  'ccurl1' => 'https://bnt.bg/program',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'cccontent_type1' => 'text/html; charset=UTF-8',
  'cchost_header1' => 'bnt.bg',
  'ccchannel_block' => '<div class="news-tabs top-tabs">.*?(?:<a)(.*?)(?:<\\/a>).*?<\\/div>',
  'ccchannel_id' => '\\/program\\/(.*?)"',
  'ccchannel_name' => 'class="tab-btn.*?>(.*?)$',
);
?>