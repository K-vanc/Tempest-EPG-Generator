<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'ankara.com.tr',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-07-02',
  'rev_no' => 'R0',
  'timezone' => '+03:00',
  'culture' => 'tr',
  'max_day' => '7',
  'url1' => 'https://www.ankara.com.tr/yayin-akisi/##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'urldate_format1' => '#weekdayname#pazartesi|sali|carsamba|persembe|cuma|cumartesi|pazar',
  'show' => '<div class="col-lg-6 col-sm-12">(.*?)<\\/a>\\s*<\\/div>',
  'start' => '<span class="hour">(\\d+)|#|<span class="minute">(.*?)<\\/span>',
  'start_format' => 'H#i',
  'title' => '<span class="title">(.*?)<\\/span>',
  'showicon' => '<img src="(.*?)"',
  'channel_logo' => '||#add#https://www.ankara.bel.tr/files/8415/9999/0402/abb01.png',
  'pagekey1' => '<a href="(.*?)"',
  'detail_url1' => 'https://www.ankara.com.tr##pagekey1##',
  'detail_requestOption1' => '1',
  'detail_accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'detail_content_type1' => 'text/html; charset=UTF-8',
  'detail_desc' => '<div class="col-lg-9">\\s*<p>(.*?)<\\/p>',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#abbtv',
  'ccchannel_name' => '||#set#ABB TV',
);
?>