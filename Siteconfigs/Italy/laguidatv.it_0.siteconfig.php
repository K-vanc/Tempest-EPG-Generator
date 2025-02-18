<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'laguidatv.it',
  'creator_name' => 'Kivanc',
  'creation_date' => '2025-02-18',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'it',
  'max_day' => '4',
  'url1' => 'https://www.laguidatv.it/##urldate1##/##channel##||#replace#(Jan)##(Feb)##(Mar)##(Apr)##(May)##(Jun)##(Jul)##(Aug)##(Sep)##(Oct)##(Nov)##(Dec)||gennaio##febbraio##marzo##aprile##maggio##giugno##luglio##agosto##settembre##ottobre##novembre##dicembre',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'urldate_format1' => 'd-M',
  'show' => '(<p class="lgt-event".*?<\\/p>)',
  'start' => 'event" id="(\\d+)',
  'start_format' => 'unix',
  'stop' => 'event" id="\\d+-(\\d+)',
  'stop_format' => 'unix',
  'title' => 'settimanale per (.*?)">',
  'desc' => '\\d{2}:\\d{2}.*?\\s-\\s(.*?)<a||#replace#(\\s*-\\s*)$||',
  'ccurl1' => 'https://www.laguidatv.it/',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'ccchannel_block' => 'name="select_change_channel".*?(?:<option value="h)(.*?)(?:<\\/option>).*?<\\/select>',
  'ccchannel_id' => 'laguidatv.it\\/(.*?)"',
  'ccchannel_name' => '">(.*?)$',
);
?>