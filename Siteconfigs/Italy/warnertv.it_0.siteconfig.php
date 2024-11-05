<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'warnertv.it',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-11-05',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Rome',
  'culture' => 'it',
  'max_day' => '7.1',
  'episodeOption' => '1',
  'url1' => 'https://it-api.loma-cms.com/feloma/page/guida-tv##channel##||#replace#(XXX)##(guida-tv\\/)(\\?environment=discoverychannel)||/?environment=##discovery-channel/\\2',
  'requestOption1' => '1',
  'accept_header1' => '*/*',
  'host_header1' => 'it-api.loma-cms.com',
  'show' => '"programs":\\[.*?(?:{"title")(.*?)(?:}).*?\\]}',
  'start' => '"start_dt":"(.*?)\\+',
  'start_format' => 'Y-m-d\\TH#i#s',
  'stop' => '"end_dt":"(.*?)\\+',
  'stop_format' => 'Y-m-d\\TH#i#s',
  'title' => '"show_name":"(.*?)",',
  'subtitle' => '^:"(.*?)",',
  'desc' => '"description":"(.*?)",',
  'season' => '"season":"(\\d+)',
  'episode' => '"episode":"(\\d+)',
  'channel_logo' => '"logo","src":"(.*?)"|>|"type":"image","url":"(.*?)"||#addend#?w=200',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#XXXwarnertvit|XXXnove|-gialloXXXgiallo|XXXrealtime|XXXfoodnetwork|XXXhgtv|XXXdmax|XXXdiscoverychannel&parent_slug=tvguide|XXXmotortrend',
  'ccchannel_name' => '||#set#Warner TV|Nove|Giallo|Real Time|Food Network|HGTV|DMAX|Discovery Channel|Motor Trend',
);
?>