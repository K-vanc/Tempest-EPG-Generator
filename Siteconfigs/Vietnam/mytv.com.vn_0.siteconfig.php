<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'mytv.com.vn',
  'creator_name' => 'Kivanc (powered by NHKRoku)',
  'creation_date' => '2024-04-28',
  'rev_no' => 'R0',
  'remarks' => 'New Api',
  'timezone' => '+07:00',
  'culture' => 'vi',
  'max_day' => '10',
  'episodeOption' => '1',
  'url1' => 'https://apigw.mytv.vn/api/v1/channel/##channel##/schedule?date=##urldate1##',
  'requestOption1' => '1',
  'urldate_format1' => 'Y-m-d',
  'show' => '({"time":.*?})',
  'start' => '"time":"(\\d{2}[\\.:]\\d{2})',
  'start_format' => 'H#i',
  'title' => '"title":"(.*?)"}||#replace#(\\s-\\s(?:Phần|Tập).*)||',
  'season' => 'Phần\\s(\\d+)',
  'episode' => 'Tập\\s(\\d+)',
  'channel_logo' => '||#add#https://##cclogo##',
  'ccurl1' => 'https://apigw.mytv.vn/api/v1/channel',
  'ccrequestOption1' => '1',
  'ccchannel_block' => '{"channel_id".*?}',
  'ccchannel_id' => '"channel_id":(\\d+)',
  'ccchannel_name' => '"name":"(.*?)",',
  'ccchannel_logo' => '"logo":"https:\\/\\/(.*?)"',
);
?>