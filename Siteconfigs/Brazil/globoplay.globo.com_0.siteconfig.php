<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'globoplay.globo.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-03-19',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'pt',
  'max_day' => '4',
  'rating_system' => 'DJCTQ',
  'url1' => 'https://cocoon.globo.com/v2/user/logged',
  'requestOption1' => '2',
  'origin_header1' => 'https://globoplay.globo.com',
  'XMLHttpRequest1' => 'on',
  'grabber_1' => 'on',
  'gpattern_1' => '"token":"(.*?)"',
  'url2' => 'https://cloud-jarvis.globo.com/graphql?operationName=getEpgBroadcastWithNetworkLocation&variables=%7B%22date%22%3A%22##urldate2##%22%2C%22mediaId%22%3A%22##channel##%22%7D&extensions=%7B%22persistedQuery%22%3A%7B%22version%22%3A1%2C%22sha256Hash%22%3A%222807d3e9dac27f98a31d164591e16fc1213485ae91bdae3d14357eb76d828322%22%7D%7D',
  'requestOption2' => '1',
  'accept_header2' => '*/*',
  'content_type2' => 'application/json',
  'custom_header2' => 'glbuid: ##grabber_1##|#|x-client-version: 3.632.1|#|x-device-id: desktop|#|x-platform-id: web|#|x-tenant-id: globo-play',
  'urldate_format2' => 'Y-m-d',
  'show' => '({"name".*?"__typename":.*?})',
  'start' => '"startTime":(\\d+)',
  'start_format' => 'unix',
  'stop' => '"endTime":(\\d+)',
  'stop_format' => 'unix',
  'title' => '"name":"(.*?)","||#replace#(\\s+-\\s+.*?)$||',
  'subtitle' => '"metadata":"(.*?)",',
  'desc' => '"description":"(.*?)","',
  'category' => '"(live)Broadcast":true',
  'channel_logo' => '"channel":{.*?"logo":"(.*?)"',
  'rating' => '"contentRating":"(?!0)(\\d+)|#|[| | |]"contentRatingCriteria":\\["(.*?)"\\}||#replace#(",")##(^\\s*\\|\\s*)##^(\\d+)|| / ####A\\1',
  'ccurl1' => 'https://cocoon.globo.com/v2/user/logged',
  'ccrequestOption1' => '2',
  'ccaccept_header1' => '*/*',
  'ccorigin_header1' => 'https://globoplay.globo.com',
  'ccXMLHttpRequest1' => 'on',
  'ccgrabber_1' => 'on',
  'ccgpattern_1' => '"token":"(.*?)"',
  'ccurl2' => 'https://cloud-jarvis.globo.com/graphql?operationName=getEpgBroadcastList&variables=%7B%22date%22%3A%22##urldate2##%22%7D&extensions=%7B%22persistedQuery%22%3A%7B%22version%22%3A1%2C%22sha256Hash%22%3A%2226353f5b9baa11bb973d30fe1ecdc7b504cd8b68f478315a39f74712ef0fa99a%22%7D%7D',
  'ccrequestOption2' => '1',
  'ccaccept_header2' => '*/*',
  'cccontent_type2' => 'application/json',
  'cccustom_header2' => 'glbuid: ##grabber_1##|#|x-client-version: 3.632.1|#|x-device-id: desktop|#|x-platform-id: web|#|x-tenant-id: globo-play',
  'ccurldate_format2' => 'Y-m-d',
  'ccchannel_block' => '{"mediaId":".*?"__typename":"BroadcastChannel"}',
  'ccchannel_id' => '"mediaId":"(\\d+)',
  'ccchannel_name' => '"name":"(.*?)",',
);
?>