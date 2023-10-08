Dummy siteconfigs may be used to generate daily or weekly dummy epg for single or multiple channels.<br>
When siteconfig and json file put into site_config folder, json file path shall be modified for,<br>
Url1 and Channel Url1 as shown below with absolute path of json file;<br>
![image](https://github.com/K-vanc/Tempest-EPG-Generator/assets/97025515/8dfef099-bd54-4d79-a7b7-afe26b94941e)
<br>
![image](https://github.com/K-vanc/Tempest-EPG-Generator/assets/97025515/c9d7cc69-2b54-4bb3-8d7e-0df5f49f17c4)
<br>
Note that "file://" part is mandatory and shouldn't be deleted.<br>
After that, you can modify show start/stop times, titles, descriptions and many other elements from json file<br>
based on your needs.<br>
![image](https://github.com/K-vanc/Tempest-EPG-Generator/assets/97025515/a348352f-35f4-4946-a804-cdc2fd0b4b85)
<br>
For adding more channels, just copy 1of entire channel block and paste again to end of json file, then you can edit<br>
channel name, channel id and channel logo(optional) and other show values;<br>
![image](https://github.com/K-vanc/Tempest-EPG-Generator/assets/97025515/60d3eaed-99b6-4a54-91e5-b54a1b565c6b)
<br>
All above procedure is also applicable for weekly dummy siteconfig with a small extra as channel id value shall be<br>
update on all 7 days of channel data as below;<br>
![image](https://github.com/K-vanc/Tempest-EPG-Generator/assets/97025515/fbcb9f69-cd15-4ba0-a2fd-d5a44b8b8fac)
<br>
Same as on daily dummy siteconfig, multiple channels may be added by copy/pasting entire channel block to end of json file<br>
and updating necessary data. A channel block for weekly dummy siteconfig is as shown below;<br>
![image](https://github.com/K-vanc/Tempest-EPG-Generator/assets/97025515/b42c95b5-c277-4752-8ce4-a846e6a5e332)
<br>
Newly added channels will be displayed after channel list creation.
