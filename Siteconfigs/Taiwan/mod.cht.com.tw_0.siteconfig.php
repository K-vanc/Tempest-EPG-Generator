<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'mod.cht.com.tw',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-07-26',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Taipei',
  'culture' => 'zh',
  'max_day' => '14',
  'url1' => 'https://modweb2.chtmod.tv/tv/channel.php?id=##channel##&d=##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'modweb2.chtmod.tv',
  'urldate_format1' => '#daycounter#0',
  'show' => '(<li class="striped.*?<\\/li>)',
  'start' => '"time">(\\d+:\\d+)',
  'start_format' => 'H#i',
  'title' => '<h4 class="heading--regular">(.*?)<\\/h4>',
  'desc' => '<p class="description">(.*?)<\\/p>',
  'channel_logo' => '||#add#https://modweb2.chtmod.tv/img/channel/channelpic/##cclogo##',
  'ccurl1' => 'https://modweb2.chtmod.tv/bepg2/?',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'cchost_header1' => 'modweb2.chtmod.tv',
  'ccchannel_block' => '<div class=\'col2a\'>.*?<\\/a>',
  'ccchannel_id' => '\\/channel\\.php\\?id=(\\d+)',
  'ccchannel_name' => '<div class=\'num\'>\\d+<\\/div>(.*?)<\\/',
  'ccchannel_logo' => '\\/channelpic\\/(.*?)\'',
);
?>