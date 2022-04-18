<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'dazn.com[DE]',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-03-09',
  'rev_no' => 'R0',
  'remarks' => '!V1.3.4 or Above Required! / Not expect a long lifespan from this siteconfig',
  'timezone' => 'Europe/Berlin',
  'culture' => 'de',
  'max_day' => '14.1',
  'url1' => 'https://www.dazn.com/de-DE/news/fußball/dazn-1-2-programm-linearen-tv-kanaele/10gf70zpt9mxe12fs2zga8s4nq',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'urldate_format1' => '#range#d',
  'grabber_1' => 'on',
  'gpattern_1' => '(.)||#replace#(.+)##(,)||##urldate1####|',
  'show' => '<h2>DAS PROGRAMM AM \\w+,\\s*(?:##grabber_1##).*?<h3>##channel##<\\/h3><div class="table-wrapper">.*?<tbody>(.*?)<\\/tbody>||#split#(<\\/tr>\\s*<tr>)',
  'start' => '<th>(.*?)<\\/th>',
  'start_format' => 'H#i',
  'title' => '<td>(.*?)<\\/td>',
  'subtitle' => '<td>.*?<\\/td>\\s*<td>(.*?)<\\/td>',
  'category' => '.*<td>(.*?)<\\/td>',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#DAZN 1|DAZN 2',
  'ccchannel_name' => '||#set#DAZN 1|DAZN 2',
);
?>