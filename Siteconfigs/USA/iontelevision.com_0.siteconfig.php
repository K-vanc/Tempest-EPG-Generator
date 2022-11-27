<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'iontelevision.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-11-27',
  'rev_no' => 'R0',
  'timezone' => 'America/New_York',
  'culture' => 'en',
  'max_day' => '14',
  'rating_system' => 'TVPG',
  'episodeOption' => '1',
  'url1' => 'https://iontelevision.com/api/v1/programs?date=##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'application/json, text/plain, */*',
  'content_type1' => 'application/json',
  'XMLHttpRequest1' => 'on',
  'urldate_format1' => 'Y-m-d',
  'show' => '({"name".*?}})',
  'start' => '"easternHour":"(\\d+)|#|[| |]"meridiem":"(.*?)"',
  'start_format' => 'g A',
  'duration' => '"duration":(\\d+)||#format#s',
  'title' => '{"name":"(.*?)",',
  'subtitle' => '"episodeNumber":"(?!0)\\d+","name":"(.*?)"',
  'desc' => '"description":"(.*?)",|#|[|\\n|]"episodeNumber":"(?!0)\\d+","name":".*?","description":"(.*?)",',
  'showicon' => '"image":{"url":"(.*?)"',
  'episode' => '"episodeNumber":"(?!0)(\\d+)',
  'channel_logo' => '||#add#https://iontelevision.com/images/ion-tv-nav-logo.png',
  'rating' => '"rating":"(.*?)"',
  'new' => '"isNew":(true),',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#ion-tv',
  'ccchannel_name' => '||#set#ION TV',
);
?>