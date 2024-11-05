<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'jxgdw.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-11-05',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Shanghai',
  'culture' => 'zh',
  'max_day' => '5',
  'url1' => 'https://app.jxgdw.com/api/tv/channel/##channel##/menus?playDate=##urldate1##',
  'requestOption1' => '1',
  'urldate_format1' => 'Y-m-d',
  'show' => '({"columnId".*?})',
  'start' => '"playTime":"(.*?)"',
  'start_format' => 'Y-m-d H#i#s',
  'title' => '"programName":"(.*?)",',
  'desc' => '"intro":"(.*?)",',
  'showicon' => '"cover":"(.*?)"',
  'ccurl1' => 'https://app.jxgdw.com/api/tv/channel/page?pageSize=100',
  'ccrequestOption1' => '1',
  'ccchannel_block' => '{"id".*?}',
  'ccchannel_id' => '"id":(\\d+)',
  'ccchannel_name' => '"channelName":"(.*?)"',
);
?>