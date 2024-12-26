<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'staseraintv.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-04-22',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Rome',
  'culture' => 'it',
  'max_day' => '6',
  'episodeOption' => '1',
  'url1' => 'https://www.staseraintv.com/programmi_XXXX##stopdate1##--##urldate1##XXXX_##channel##.html||#replace#(XXXX1-.*?XXXX)##(XXXX2-.*?XXXX)##(XXXX\\d+--|XXXX)||stasera##domani##||#replace#(Monday)##(Tuesday)##(Wednesday)##(Thursday)##(Friday)##(Saturday)##(Sunday)||lunedi##martedi##mercoledi##giovedi##venerdi##sabato##domenica||#replace#(January)##(February)##(March)##(April)##(May)##(June)##(July)##(August)##(September)##(October)##(November)##(December)||gennaio##febbraio##marzo##aprile##maggio##giugno##luglio##agosto##settembre##ottobre##novembre##dicembre',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'www.staseraintv.com',
  'urldate_format1' => 'l_d_F_Y',
  'stopdate_format1' => '#daycounter#0',
  'show' => '<h4 style="text-align.*?">\\s*(.*?)\\s*<\\/h4>||#split#(<br>)||#include#-',
  'start' => '(\\d+:\\d+)',
  'start_format' => 'H#i',
  'title' => '\\d+\\s*-\\s*(.*?)$||#replace#(\\sSt\\s\\d+)##(\\sEp\\s\\d+)||##',
  'subtitle' => '(?:St|Ep)\\s\\d+\\s-\\s(.*?)$',
  'season' => '\\sSt(?:agione)?\\s(\\d+)',
  'episode' => '\\sEp\\s(\\d+)',
  'ccurl1' => 'https://www.staseraintv.com/',
  'ccrequestOption1' => '1',
  'ccchannel_block' => '<div class="chbuttonsbox">.*?(?:<a)(.*?)(?:<\\/a>).*?<\\/div>||#include#programmi_',
  'ccchannel_id' => '_stasera_(.*?)\\.html',
  'ccchannel_name' => '">(.*?)$',
);
?>