<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'discoveryuk.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-07-28',
  'rev_no' => 'R0',
  'timezone' => 'Europe/London',
  'culture' => 'en',
  'max_day' => '14',
  'episodeOption' => '1',
  'url1' => 'https://www.discoveryuk.com/tv-guide/##channel##/?sd=##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'urldate_format1' => 'Y-m-d',
  'show' => '(<div\\s*class=\'shows__show row\'.*?<\\/div><\\/div>)',
  'start' => 'class=\'shows__time h2\'>(\\d+(?:\\:\\d+)?[ap]m)||#replace#^(\\d+)([ap]m)||\\1:00\\2',
  'start_format' => 'g:ia',
  'title' => 'class=\'shows__heading\'>(.*?)<\\/h3>||#replace#(\\s-\\sSeason\\s\\d+)||',
  'subtitle' => 'class=\'shows__subheading h4\'>(.*?)<\\/p>',
  'desc' => 'class=shows__description>(.*?)<\\/p>',
  'showicon' => 'data-src=(.*?) |>|<img\\s*src =\'(.*?)\'',
  'season' => ' - Season (\\d+)|>|_S(\\d+)||#replace#^(0+)||',
  'episode' => '_Ep(?:isode)?(\\d+)||#replace#^(0+)||',
  'ccurl1' => 'https://www.discoveryuk.com/tv-guide/',
  'ccrequestOption1' => '1',
  'cccontent_type1' => 'text/html',
  'ccchannel_block' => '<a\\s*class=dropdown.*?<\\/a>',
  'ccchannel_id' => 'data-channel=(.*?)>',
  'ccchannel_name' => '>(.*?)<\\/a>',
);
?>