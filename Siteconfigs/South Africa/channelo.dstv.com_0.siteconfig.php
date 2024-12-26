<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'channelo.dstv.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-04-28',
  'rev_no' => 'R0',
  'timezone' => 'Africa/Johannesburg',
  'culture' => 'en',
  'max_day' => '15',
  'episodeOption' => '1',
  'url1' => 'https://channelo-api.dstv.com/channelo/en-za/tv-guide-day.json?date=##urldate1##&channels=##channel##',
  'requestOption1' => '1',
  'accept_header1' => 'application/json, text/plain, */*',
  'content_type1' => 'application/json; charset=utf-8',
  'urldate_format1' => 'Y-m-d',
  'show' => '"shows":\\[.*?(?:{)(.*?)(?:}).*?\\]',
  'start' => '"show_time_start_full":"(.*?)",',
  'start_format' => 'Y-m-d H#i',
  'stop' => '"show_time_end":"(.*?)"',
  'stop_format' => 'H#i',
  'title' => '"title":"(.*?)","',
  'subtitle' => '"blurb":"\'(.*?)\'||#replace#(S\\d+(?:\\/E\\d+(?:\\sof\\s\\d+)?)?)##(E\\d+(?:\\sof\\s\\d+)?)##(\\s-\\s)||####',
  'desc' => '"blurb":"(.*?)","||#replace#^(\'.*?\'\\.\\s)||',
  'category' => '"sub_title":"Rating: (?:\\d+|PG(?:\\d+)?,)?(.*?),\\s\\d{4}","||#split#(,)',
  'season' => '"season":"(?!0)(\\d+)|>|"sub_title":"Season (\\d+)|>|"blurb":"\'S(\\d+)',
  'episode' => '"sub_title":".*?Episode (\\d+)"|>|"blurb":".*?E(\\d+)',
  'episode_total' => '"blurb":".*?E\\d+ of (\\d+)\'',
  'channel_logo' => '"image":{"normal":"(.*?)"',
  'production_date' => '"sub_title":"Rating: (?:\\d+|PG(?:\\d+)?,)?.*?,\\s(\\d{4})","',
  'rating' => '"sub_title":"Rating: (\\d+|PG(?:\\d+)?),',
  'new' => '"is_(new)":true,',
  'ccurl1' => 'https://www.dstv.com/channelo/en-za/home',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'cccontent_type1' => 'text/html; charset=utf-8',
  'ccchannel_block' => '"channels":\\[.*?(?:{)(.*?)(?:}).*?\\]',
  'ccchannel_id' => '"id":(\\d+)',
  'ccchannel_name' => '"name":"(.*?)","',
);
?>