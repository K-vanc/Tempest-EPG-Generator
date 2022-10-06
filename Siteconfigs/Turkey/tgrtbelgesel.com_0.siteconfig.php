<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'tgrtbelgesel.com',
  'creator_name' => 'Kvanc',
  'creation_date' => '2021-03-28',
  'rev_no' => 'R0',
  'remarks' => '!!EXCLUSIVE to TEMPEST only!!',
  'timezone' => '+03:00',
  'culture' => 'tr',
  'max_day' => '31',
  'url1' => 'https://www.tgrtbelgesel.com/yayinakisi/##urldate1##.pdf',
  'requestOption1' => '1',
  'content_type1' => 'application/pdf',
  'urldate_format1' => 'j',
  'show' => '(\\d{2}(?:[\\s\\R]*)?[\\.:](?:[\\s|\\R]*)?\\d{2}(?:[\\s|\\R]*)?.*?)(?:\\R(?=\\d|$))',
  'start' => '.*(\\d{2}:\\d{2})',
  'start_format' => 'H#i',
  'title' => '.*[\\.:]\\d{2}\\s*(.*)$',
  'channel_logo' => '||#add#https://www.tgrtbelgesel.com/images/logo.png',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#tgrt-belgesel',
  'ccchannel_name' => '||#set#TGRT Belgesel',
);
?>