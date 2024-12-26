<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'ilktv.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-03-10',
  'rev_no' => 'R0',
  'timezone' => '+03:00',
  'culture' => 'tr',
  'max_day' => '7.1',
  'url1' => 'https://www.ilktv.com/yayinakisi/||#edit#(<td class="has-text-align-center" data-align="center">\\s*<strong>\\s*(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?\\d.*?<\\/td>).*?(<td class="has-text-align-center" data-align="center">\\s*<strong>\\s*(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?\\d.*?<\\/td>).*?(<td class="has-text-align-center" data-align="center">\\s*<strong>\\s*(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?\\d.*?<\\/td>).*?(<td class="has-text-align-center" data-align="center">\\s*<strong>\\s*(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?\\d.*?<\\/td>).*?(<td class="has-text-align-center" data-align="center">\\s*<strong>\\s*(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?\\d.*?<\\/td>).*?(<td class="has-text-align-center" data-align="center">\\s*<strong>\\s*(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?\\d.*?<\\/td>).*?(<td class="has-text-align-center" data-align="center">\\s*<strong>\\s*(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?\\d.*?<\\/td>)||1${1}2${2}3${3}4${4}5${5}6${6}7${7}',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'urldate_format1' => '#weekdaynumber#7',
  'show' => '((?:[##urldate1##-7])<td class="has-text-align-center" data-align="center">\\s*<strong>\\s*(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?(?:<strong>\\s*)?\\d.*?<\\/td>)',
  'sort' => '^(\\d)|#|>\\s*(\\d+)\\s*:|#|\\d+\\s*:\\s*(\\d+)',
  'sortflag' => '2',
  'sortorder' => '1',
  'start' => '<strong>\\s*(\\d+:\\d+)',
  'start_format' => 'H#i',
  'title' => '<\\/strong>(.*?)<\\/td||#replace#(<br>)|| ',
  'channel_logo' => '||#add#https://www.ilktv.com/wp-content/uploads/2020/03/ilktvlogo.png',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#ilk-tv',
  'ccchannel_name' => '||#set#İLK TV',
);
?>