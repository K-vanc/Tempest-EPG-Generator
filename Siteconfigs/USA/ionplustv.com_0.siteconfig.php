<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'ionplustv.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-11-27',
  'rev_no' => 'R0',
  'timezone' => 'America/New_York',
  'culture' => 'en',
  'max_day' => '14',
  'rating_system' => 'TVPG',
  'episodeOption' => '1',
  'url1' => 'https://ionplustv.com/schedule/##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'urldate_format1' => 'Y-m-d',
  'show' => '|#|[-]|#|(<script type="application\\/ld\\+json">\\s*{\\s*"@context": "http:\\\\\\/\\\\\\/schema\\.org",\\s*"@type": "Event",.*?<\\/script>)|(<div class="panel-heading".*?<br clear="all"\\/>)',
  'start' => '"startDate": "(.*?)\\-\\d+:\\d+",',
  'start_format' => 'Y-m-d\\TH#i#s',
  'title' => '"name": "(.*?)",',
  'subtitle' => 'addthis:title=".*?\\sEP\\s\\d+:\\s(.*?)"',
  'desc' => '"description": "(.*?)",',
  'showicon' => '<img.*?src="(.*?)"',
  'season' => '\\/season\\/(\\d+)',
  'episode' => '\\/episode\\/(\\d+)',
  'channel_logo' => '||#add#https://ionplustv.com/static/global/IONPlus-logo1.svg',
  'rating' => '<p class="tv-rating">(.*?)<p>||#replace#(\\(.*?\\))||',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#ion_plus',
  'ccchannel_name' => '||#set#ION Plus',
);
?>