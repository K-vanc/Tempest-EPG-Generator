<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'rehbertv.com.tr',
  'creator_name' => 'kivanc',
  'creation_date' => '2019-08-29',
  'rev_no' => 'R0',
  'timezone' => '+03:00',
  'culture' => 'tr',
  'max_day' => '7.1',
  'first_day' => '0123456',
  'url1' => 'https://rehbertv.com.tr/YayinAkisi',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'rehbertv.com.tr',
  'show' => '"(?:pazartesi|sali|carsamba|persembe|cuma|cumartesi|pazar)":{"data":\\[.*?(?:{"id":\\d+,"attributes":{"Time":")(.*?)(?:}}\\]}}}).*?\\]}}}\\]||#exclude#"program":{"data":null}',
  'start' => '"Time":"(.*?)\\.',
  'start_format' => 'H#i#s',
  'title' => '{"Title":"(.*?)"',
  'desc' => '"Description":"(.*?)",',
  'showicon' => '"formats":{.*?"url":"(.*?)"||#replace#(thumbnail)||medium',
  'channel_logo' => '||#add#https://res.cloudinary.com/rehbertv/image/upload/v1664273385/REHBER_LOGO_9d7e1cc50b.png',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#rehber tv',
  'ccchannel_name' => '||#set#Rehber TV',
);
?>