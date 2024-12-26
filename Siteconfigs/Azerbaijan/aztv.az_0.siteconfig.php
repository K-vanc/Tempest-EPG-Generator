<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'aztv.az',
  'creator_name' => 'Kvanc',
  'creation_date' => '2021-03-20',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Baku',
  'culture' => 'az',
  'max_day' => '3.1',
  'url1' => 'http://www.##channel##.az/az/program',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'host_header1' => 'www.##channel##.az',
  'show' => '<ul class="list-unstyled daily-program tv one-column">.*?(?:<li class=")(.*?)(?:<\\/li>).*?<\\/ul>',
  'start' => '<span class="tvshow-time mr-3">(?:\\s*)?(\\d{2}[\\.:]\\d{2})(?:\\s*)?<\\/span>',
  'start_format' => 'H#i',
  'title' => '<p class="tvshow-title">(.*?)<\\/p>',
  'showicon' => '<img class="media-img" src="(.*?)">',
  'channel_logo' => '||#add#http://www.##channel##.az/storage/settings/##cclogo##.png',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#aztv|medeniyyettv|idmantv',
  'ccchannel_name' => '||#set#Az Tv|Medeniyyet Tv|Idman Tv',
  'ccchannel_logo' => '||#set#September2019/23bMtFJXZsjnUuC0AwiQ|September2019/RDRVyTmdeB1NvyNm4UnF|October2019/rbyweoRZLrnCvpc3qp9q',
);
?>