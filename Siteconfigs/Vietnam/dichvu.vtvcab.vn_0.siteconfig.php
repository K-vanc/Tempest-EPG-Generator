<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'dichvu.vtvcab.vn',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-09-13',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'vi',
  'max_day' => '5',
  'episodeOption' => '1',
  'url1' => 'https://vtvcab-customer-service-public.vinasports.com.vn/api/v1/broadcast_list?date=##urldate1##&channel_id=##channel##',
  'requestOption1' => '1',
  'accept_header1' => 'application/json',
  'host_header1' => 'vtvcab-customer-service-public.vinasports.com.vn',
  'origin_header1' => 'https://dichvu.vtvcab.vn',
  'urldate_format1' => 'Y-m-d',
  'show' => '"items":\\[.*?(?:{"channel_id")(.*?)(?:}).*?\\]}\\]',
  'start' => '"start":"(.*?)Z',
  'start_format' => 'Y-m-d\\TH#i#s',
  'stop' => '"end":"(.*?)Z',
  'stop_format' => 'Y-m-d\\TH#i#s',
  'title' => '"title":"(.*?)"||#replace#(\\s-\\sTập.*)||',
  'subtitle' => '"episode":"(.*?)"',
  'episode' => '(?:Tập|Số) (\\d+)',
  'ccurl1' => 'https://dichvu.vtvcab.vn/broadcast',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'cchost_header1' => 'dichvu.vtvcab.vn',
  'ccchannel_block' => '(?:"initBroadcasts":\\s*\\[\\s*|\\]\\s*},\\s*){\\s*"channel_id":.*?img_url"',
  'ccchannel_id' => '"channel_id":\\s*"(.*?)"',
  'ccchannel_name' => '"channel_title":\\s*"(.*?)",',
);
?>