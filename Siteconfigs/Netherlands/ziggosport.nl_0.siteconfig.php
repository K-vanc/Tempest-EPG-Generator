<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'ziggosport.nl',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-10-27',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'nl',
  'max_day' => '8',
  'keepindexpage' => 'on',
  'url1' => 'https://www.ziggosport.nl/cache/site/ZiggosportNL/json/epg/epg-##urldate1##.json',
  'requestOption1' => '1',
  'accept_header1' => 'application/json',
  'content_type1' => 'application/json',
  'urldate_format1' => 'Y-m-d',
  'show' => '{"channel":"##channel##","programming":\\[.*?(?:{)(.*?)(?:}).*?\\]}',
  'start' => '"dateStart":"(.*?)\\+',
  'start_format' => 'Y-m-d\\TH#i#s',
  'stop' => '"dateEnd":"(.*?)\\+',
  'stop_format' => 'Y-m-d\\TH#i#s',
  'title' => '"title":"(.*?)","',
  'desc' => '"description":"(.*?)",',
  'category' => '"(live)":true,|#|,"sportName":"(.*?)"||#word#',
  'ccurl1' => 'https://www.ziggosport.nl/cache/site/ZiggosportNL/json/epg/epg-##urldate1##.json',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'application/json',
  'cccontent_type1' => 'application/json',
  'ccurldate_format1' => 'Y-m-d',
  'ccchannel_id' => '{"channel":"(.*?)","programming"',
  'ccchannel_name' => '{"channel":"(.*?)","programming"',
);
?>