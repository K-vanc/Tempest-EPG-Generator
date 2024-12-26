<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'haberturk.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-09-08',
  'rev_no' => 'R0',
  'timezone' => '+0300',
  'culture' => 'tr',
  'max_day' => '7.1',
  'first_show' => '1',
  'url1' => 'https://www.haberturk.com/tv-rehberi/##channel##-yayin-akisi',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'www.haberturk.com',
  'show' => '<div class="content ">.*?(?:<div class="item relative)(.*?<h2.*?)(?:<\\/div>\\s*<\\/div>).*?<\\/div>\\s*<\\/div>\\s*<\\/div>\\s*<\\/div>',
  'start' => '<div class="w-40.*?>\\s*(\\d+[\\.:]\\d+)',
  'start_format' => 'H#i',
  'title' => '<h2.*?>(.*?)<\\/h2>',
  'category' => 'gray-300">(.*?)<\\/',
  'showicon' => 'data-src="(.*?)"',
  'channel_logo' => '||#add#https://im.haberturk.com/assets/laravel/images/common/tv/channel/##cclogo##',
  'ccurl1' => 'https://www.haberturk.com/tv-rehberi/tum-kanallar-yayin-akisi',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'cchost_header1' => 'www.haberturk.com',
  'ccchannel_block' => '"channelName":.*?}',
  'ccchannel_id' => '"url":\\s*"\\/tv-rehberi\\/(.*?)-yayin-akisi',
  'ccchannel_name' => '"channelName":\\s*"(.*?)",',
  'ccchannel_logo' => '"imageUrl".*?\\/channel\\/(.*?)"',
);
?>