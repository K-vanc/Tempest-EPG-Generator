<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'atresplayer.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-10-16',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'es',
  'max_day' => '3',
  'url1' => 'https://api.atresplayer.com/client/v1/row/programming/##channel##?date=##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => '*/*',
  'origin_header1' => 'https://www.atresplayer.com',
  'urldate_format1' => 'd-m-Y',
  'show' => '({"title".*?"rightsBroadcast".*?})',
  'start' => '"startTime":(\\d+)',
  'start_format' => 'java',
  'stop' => '"endTime":(\\d+)',
  'stop_format' => 'java',
  'title' => '{"title":"(.*?)","',
  'desc' => '"description":"(.*?)","',
  'showicon' => '"pathHorizontal":"(.*?)"|#|"logoURL":"(.*?)"||#replace#(\\/)$||//900x400.jpg',
  'production_date' => '\\(Sección\\)\\s(\\d{4})',
  'ccurl1' => 'https://api.atresplayer.com/client/v1/info/channels',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => '*/*',
  'ccorigin_header1' => 'https://www.atresplayer.com',
  'ccchannel_block' => '{"id":.*?"link":',
  'ccchannel_id' => '"id":"(.*?)"',
  'ccchannel_name' => '"title":"(.*?)"',
);
?>