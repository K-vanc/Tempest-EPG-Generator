<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'tv.disney.fr',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-05-08',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'fr',
  'max_day' => '4',
  'episodeOption' => '1',
  'url1' => 'https://tv.disney.fr/_schedule/full/##urldate1##/3/##channel##',
  'requestOption1' => '1',
  'urldate_format1' => 'Ymd',
  'show' => '({"time".*?})',
  'start' => '"iso8601_utc_time":"(.*?)\\.',
  'start_format' => 'Y-m-d\\TH#i#s',
  'title' => '"show_title":"(.*?)",||#replace#(\\sS\\d+)$||',
  'subtitle' => '"episode_title":"(.*?)",',
  'desc' => '"description":"(.*?)",',
  'season' => '"show_title":".*?\\sS(\\d+)"',
  'channel_logo' => '||#add#https://lumiere-a.akamaihd.net/v1/images/epg_##cclogo##.jpeg',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#%2Fguide-tv|%2Fguide-tv%2Fdisney-junior',
  'ccchannel_name' => '||#set#Disney Channel|Disney Junior',
  'ccchannel_logo' => '||#set#dc_v3_b31b160b|dj_v2_f3afa019',
);
?>