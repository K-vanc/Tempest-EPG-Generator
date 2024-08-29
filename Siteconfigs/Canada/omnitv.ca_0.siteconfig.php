<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'omnitv.ca',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-08-29',
  'rev_no' => 'R0',
  'timezone' => 'America/Toronto',
  'culture' => 'en',
  'max_day' => '12.1',
  'episodeOption' => '1',
  'url1' => 'https://www.omnitv.ca/tv-schedule/?region=##channel##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'www.omnitv.ca',
  'show' => '(<div class="accordion-item.*?<\\/div>\\s*<\\/div>)',
  'start' => '"time-slot">\\s*(\\d+:\\d+\\s[AP]M)',
  'start_format' => 'g#i A',
  'title' => '<h3 class.*?>(.*?)<\\/h3>',
  'desc' => '<p>(.*?)<\\/p>',
  'episode' => '>\\s*Episode\\s(\\d+)',
  'channel_logo' => '||#add#https://www.omnitv.ca/wp-content/uploads/2022/09/Logo.svg?##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#eastern|omni1|pacific|prairies',
  'ccchannel_name' => '||#set#OMNI Eastern Channel|OMNI 1 Channel|OMNI Pacific Channel|OMNI Prairies Channel',
);
?>