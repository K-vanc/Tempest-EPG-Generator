<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'wsaz.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-08-17',
  'rev_no' => 'R0',
  'remarks' => 'Huntington, WV',
  'timezone' => 'America/New_York',
  'culture' => 'en',
  'max_day' => '14',
  'rating_system' => 'TVPG',
  'episodeOption' => '1',
  'url1' => 'https://titantvguide.com/data/eventspage/50139/##ccsubpage##/##urldate1##0000/1560/##channel##/1',
  'requestOption1' => '1',
  'accept_header1' => 'application/json',
  'content_type1' => 'application/json; charset=utf-8',
  'host_header1' => 'titantvguide.com',
  'urldate_format1' => 'Ymd',
  'show' => '({\\s*"DurationMinutes".*?"ShowCardUri".*?})',
  'start' => '"StartTime": "(.*?)-\\d{2}:',
  'start_format' => 'Y-m-d\\TH#i#s',
  'stop' => '"EndTime": "(.*?)-\\d{2}:',
  'stop_format' => 'Y-m-d\\TH#i#s',
  'title' => '"Title": \\[\\s*{\\s*"Text": "(.*?)",',
  'subtitle' => '"EpisodeTitle": \\[\\s*{\\s*"Text": "(.*?)",',
  'desc' => '"Description": \\[\\s*{\\s*"Text": "(.*?)",',
  'category' => '"ShowType": "(.*?)",|#|"Category": \\[\\s*{\\s*"Text": "(.*?)",',
  'language' => '"Lang": "(.*?)"',
  'showicon' => '"ShowCardUri": "(.*?)"',
  'season' => '"SeasonNumber": (?!0)(\\d+)',
  'episode' => '"SeasonEpisodeNumber": (?!0)(\\d+)',
  'channel_logo' => '||#add#https://cdn.titantv.com/##cclogo##',
  'production_date' => '"Year": (\\d{4})',
  'actor' => '"Name": "([\\w\\s\\.,\'\\-:]+)",\\s*"Role":\\s"Actor"',
  'role' => '"Name": "[\\w\\s\\.,\'\\-:]+",\\s*"Role":\\s"Actor",\\s*"Character": "(.*?)"',
  'director' => '"Name": "([\\w\\s\\.,\'\\-:]+)",\\s*"Role":\\s"Director"',
  'presenter' => '"Name": "([\\w\\s\\.,\'\\-:]+)",\\s*"Role":\\s"(?:Host|Anchor|Correspondent)"',
  'commentator' => '"Name": "([\\w\\s\\.,\'\\-:]+)",\\s*"Role":\\s"Narrator"',
  'writer' => '"Name": "([\\w\\s\\.,\'\\-:]+)",\\s*"Role":\\s"Writer"',
  'guest' => '"Name": "([\\w\\s\\.,\'\\-:]+)",\\s*"Role":\\s"(Guest|Participant)"',
  'videoquality' => '"(HD)": true,',
  'audio' => '"Supports(Dolby)": true,|>|"Supports(Stereo)": true,',
  'pshown' => '"New(Repeat)": "R",',
  'subtitles' => '"(CC)": true,',
  'rating' => '"TV": "(.*?)",',
  'star_rating' => '"Star": (\\d(?:\\.\\d+)?),||#addend#/5',
  'new' => '"(New)Repeat": "N",',
  'ccurl1' => 'https://titantvguide.com/data/lineups/50139',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'application/json',
  'cccontent_type1' => 'application/json; charset=utf-8',
  'cchost_header1' => 'titantvguide.com',
  'ccgrabber_1' => 'on',
  'ccgpattern_1' => '"LineupId": "(.*?)"',
  'ccurl2' => 'https://titantvguide.com/data/channels/50139/##grabber_1##',
  'ccrequestOption2' => '1',
  'ccaccept_header2' => 'application/json',
  'cccontent_type2' => 'application/json; charset=utf-8',
  'cchost_header2' => 'titantvguide.com',
  'ccchannel_block' => '{\\s*"ChannelIndex".*?"ChannelId".*?}',
  'ccchannel_id' => '"ChannelIndex":\\s*(\\d+)||#addstart###grabber_1##|##|',
  'ccchannel_name' => '"CallSign": "(.*?)"',
  'ccchannel_logo' => 'titantv\\.com\\/(.*?)"',
);
?>