<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'bedehuskanalen.no',
  'creator_name' => 'Kivanc',
  'creation_date' => '2025-02-09',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Oslo',
  'culture' => 'no',
  'max_day' => '5',
  'url1' => 'https://hjelpesider.bedehuskanalen.no/day##urldate1##.php',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'hjelpesider.bedehuskanalen.no',
  'urldate_format1' => '#daylist#0|1|2|3|4',
  'show' => '(<div id=\'mymain\'>.*?<\\/div>\\s*<\\/div>)',
  'start' => 'class=\'time_.*?>\\s*(.*?)\\s*<\\/',
  'start_format' => 'H#i',
  'title' => 'class=\'collapsible_.*?>(.*?)<\\/|>|\'program_field\'>(.*?)<\\/',
  'desc' => '\'content\'>(.*?)<\\/||#replace#(<br>)||\\n',
  'channel_logo' => '||#add#https://vhx.imgix.net/tv12bedehuskanalen/assets/97ee7deb-fc5b-4eb4-8fd0-96bb5baa8479.png?fit=max&h=120&q=100&w=400&##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#bedehuskanalen',
  'ccchannel_name' => '||#set#Bedehuskanalen',
);
?>