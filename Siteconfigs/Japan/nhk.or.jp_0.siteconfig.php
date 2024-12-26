<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'nhk.or.jp',
  'creator_name' => 'Kivanc (せんぱい)',
  'creation_date' => '2024-02-07',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'en',
  'max_day' => '7.1',
  'episodeOption' => '1',
  'url1' => 'https://nwapi.nhk.jp/nhkworld/epg/v7b/world/s##urldate1##-e##stopdate1##.json',
  'requestOption1' => '1',
  'accept_header1' => '*/*',
  'host_header1' => 'nwapi.nhk.jp',
  'urldate_format1' => 'java',
  'stopdate_format1' => 'java',
  'show' => '({"seriesId".*?"analytics".*?})',
  'start' => '"pubDate":"(\\d+)',
  'start_format' => 'java',
  'stop' => '"endDate":"(\\d+)',
  'stop_format' => 'java',
  'title' => '"title":"(.*?)",',
  'subtitle' => '"subtitle":"(.*?)",',
  'desc' => '"description":"(.*?)",|#|[|\\n|]"content_clean":"(.*?)",',
  'showicon' => '"thumbnail":"(.*?)"|>|"thumbnail_s":"(.*?)"||#addstart#https://www3.nhk.or.jp',
  'episode' => 'Episode\\s(\\d+)',
  'channel_logo' => '||#add#https://www3.nhk.or.jp/nhkworld/common/assets/parts/images/logo-header.svg?##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#nhkworldjapan',
  'ccchannel_name' => '||#set#NHK WORLD-JAPAN',
);
?>