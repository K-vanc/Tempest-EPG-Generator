<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'starzplay.com[en]',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-08-14',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'en',
  'max_day' => '7.1',
  'url1' => 'https://app-api.starzplay.com/api/media/channel/events?channels=##channel##&ts_start=##urldate1##&ts_end=##stopdate1##&lang=en&pg=18&page=1&limit=1000',
  'requestOption1' => '1',
  'urldate_format1' => 'unix',
  'stopdate_format1' => 'unix',
  'show' => '({"description".*?"status".*?})',
  'start' => '"tsStart":(\\d+)',
  'start_format' => 'unix',
  'stop' => '"tsEnd":(\\d+)',
  'stop_format' => 'unix',
  'title' => '"title":"(.*?)",',
  'desc' => '"description":"(.*?)",',
  'category' => '"status":"(live)"',
  'showicon' => '"images":\\[{"url":"(.*?)"',
  'channel_logo' => '"type":"logo-svg"},{"url":"(.*?)"',
  'ccurl1' => 'https://app-api.starzplay.com/api/media/channel/events?channels=all&ts_start=##urldate1##&ts_end=##stopdate1##&lang=en&pg=18&page=1&limit=1000',
  'ccrequestOption1' => '1',
  'ccurldate_format1' => 'unix',
  'ccstopdate_format1' => 'unix',
  'ccchannel_block' => '{"slug":".*?"images"',
  'ccchannel_id' => '"slug":"(.*?)"',
  'ccchannel_name' => '"title":"(.*?)"',
);
?>