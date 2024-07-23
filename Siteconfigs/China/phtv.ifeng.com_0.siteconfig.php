<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'phtv.ifeng.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-07-23',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Shanghai',
  'culture' => 'zh',
  'max_day' => '7.1',
  'keepindexpage' => 'on',
  'url1' => 'https://nine.ifeng.com/phtvperiodlist?from=##urldate1##&to=##stopdate1##',
  'requestOption1' => '1',
  'accept_header1' => '*/*',
  'host_header1' => 'nine.ifeng.com',
  'urldate_format1' => 'Y-m-d',
  'stopdate_format1' => 'Y-m-d',
  'show' => '"##channel##":\\[.*?(?:{)(.*?)(?:}).*?\\](?:,|})',
  'start' => '"time":"(\\d+:\\d+)',
  'start_format' => 'H#i',
  'title' => '"title":"(.*?)"(?:,"|$)',
  'desc' => '"summary":"(.*?)"(?:,"|$)',
  'showicon' => '"pic":"(.*?)"(?:,"|$)',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#phtvNews|phtvChinese',
  'ccchannel_name' => '||#set#资讯台|中文台',
);
?>