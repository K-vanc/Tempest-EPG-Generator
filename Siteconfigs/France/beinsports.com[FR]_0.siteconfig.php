<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'beinsports.com[FR]',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-05-11',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'fr',
  'max_day' => '7.1',
  'url1' => 'https://www.beinsports.com/api/opta/tv-event?searchKey=&startBefore=##stopdate1##T00%3A00%3A00.000Z&endAfter=##urldate1##T00%3A00%3A00.000Z&limit=3000&channelIds=##channel##',
  'requestOption1' => '1',
  'accept_header1' => '*/*',
  'host_header1' => 'www.beinsports.com',
  'custom_header1' => 'Cookie: localization=fr-fr',
  'urldate_format1' => 'Y-m-d',
  'stopdate_format1' => 'Y-m-d',
  'show' => '({"idMP".*?Z"}})',
  'start' => '"startDate":"(.*?)\\.',
  'start_format' => 'Y-m-d\\TH#i#s',
  'stop' => '"endDate":"(.*?)\\.',
  'stop_format' => 'Y-m-d\\TH#i#s',
  'title' => '"externalId":.*?"title":"(.*?)",',
  'title_original' => '"originalTitle":"(.*?)"',
  'desc' => '"synopsis":"(.*?)"|>|"description":"(.*?)"',
  'category' => '"([Ll]ive)":[Tt]rue,|#|"category":"(.*?)"|#|"genre":"(.*?)"||#split#(,)||#word#',
  'channel_logo' => '"logoHD":"(.*?)"',
  'production_date' => '"(?:yearOfProduction|ProductionYear)":"(\\d{4})"',
  'pshown' => '"(replay)":[Tt]rue,',
  'rating' => '"abreviation":"(.*?)"',
  'ccurl1' => 'https://www.beinsports.com/api/opta/tv-channel?region=fr-fr',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => '*/*',
  'cchost_header1' => 'www.beinsports.com',
  'cccustom_header1' => 'Cookie: localization=fr-fr',
  'ccurldate_format1' => 'Y-m-d',
  'ccchannel_block' => '"data":{.*?}}',
  'ccchannel_id' => '},"id":"(.*?)"',
  'ccchannel_name' => '},"id":".*?"name":"(.*?)"',
);
?>