<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'sat7plus.org[en]',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-03-11',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'en',
  'max_day' => '7.1',
  'episodeOption' => '1',
  'keepindexpage' => 'on',
  'url1' => 'https://sat7.faulio.com/api/v1/programgrid?ts_end=##stopdate1##&ts_start=##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'application/json, text/plain, */*',
  'origin_header1' => 'https://sat7plus.org',
  'custom_header1' => 'Lang: en',
  'urldate_format1' => 'unix',
  'stopdate_format1' => 'unix',
  'show' => '({"id":\\d+,"program".*?"status".*?})||#include#"channel":##channel##',
  'start' => '"dt_stamp":(\\d+)',
  'start_format' => 'unix',
  'stop' => '"dt_end":(\\d+)',
  'stop_format' => 'unix',
  'title' => '"title":"(.*?)",||#replace#((?:\\s*|_|-)S\\d+)||',
  'showicon' => '"full":"(.*?)"|#|"small":"(.*?)"',
  'season' => 'S(?:0)?(\\d+)',
  'channel_logo' => '{"id":##channel##,"object_type".*?"logo":{"small":"(.*?)"',
  'ccurl1' => 'https://sat7.faulio.com/api/v1/programgrid?ts_end=##stopdate1##&ts_start=##urldate1##',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'application/json, text/plain, */*',
  'ccorigin_header1' => 'https://sat7plus.org',
  'ccurldate_format1' => 'unix',
  'ccstopdate_format1' => 'unix',
  'ccchannel_block' => '{"id":\\d+,"object_type.*?"description"',
  'ccchannel_id' => '"id":(\\d+)',
  'ccchannel_name' => '"title":"(.*?)"',
);
?>