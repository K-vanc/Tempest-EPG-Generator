# Tempest-EPG-Generator
The Most Advanced Programmable GUI XMLTV EPG Generator
<br><br><a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License</a>.<br><br>
![tmpst](https://user-images.githubusercontent.com/97025515/148179725-e1a7c294-d107-44ae-859a-6d660d6601d7.jpg)
## What is Tempest?
Tempest is a fully programmable XMLTV formatted EPG(Electronic Program Guide) scrapper bundled in a single php file with additional;<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Graphical User Interface (GUI) & Optimization For Mobile Devices
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ User Configurable Multi Website Configuration Support
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ The Highest Scrapping/Generating Speed 
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ The Lowest Memory Consumption For Best Performance On All Devices
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Multiple Platform Support (Windows/Linux etc.)
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ All-in-One Single File Without Need For Any External Library/Software
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Multiple Async URL Support Upto 10
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Full Support For XMLTV Standart Elements
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Daylight Saving Time(DST) Support For Automatic Time Offset Changes
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Easy Configuration Maker & Editor
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Powerful & Simple Command Syntax For Combo-Operations/Modifications
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Unlimited Command Usage
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Scrapping Engine Built with Regex (Regular Expression) For Powerful Operations
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Built-In Cyclone Module to Add Alternative For Failed Channel
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Built-In Time Converter to Change Times of All Shows Into Requested Time Offset
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Built-In Inverter Module to Transfer XMLTV Elements Into Description With Requested Order & Sytle
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Built-In Fusion Module to Keep Previous Dated Shows Upto 15 Days For Catch-Up Service
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Built-In GUI Configuration Maker With Channel Picker/Editor & Auto-Duplicate Channel Verification
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Built-In GUI Configuration Debugger
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Built-In File Downloader (via GUI) & Gz/Zip Compression Support
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Multiple Configuration File Support Upto 5000 Channels For Each
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Scheduled Operations (such as crontab etc.)
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Remote Access & Operations (port-forwarding required)
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Many More Features
<br>
## How can I run Tempest?
All you need to do is downloading "tempest.php" file and locate it to root or any other place in your php server directory. Then you can call it from your browser as an example;
<br><br>"http://localhost:port/tempest.php"<br><br>
Tempest will generate its own subfolder structure and necessary files on first start-up. It is that easy.<br><br>
**Note: It is strongly advised for Linux users to set proper ownership/permissions of their php server before first start-up to let Tempest generate its folder/files.**<br><br>
![tmpstr](https://user-images.githubusercontent.com/97025515/148374196-b02d02fb-6251-4121-aa5c-c798ae9e1e58.jpg)
## How can I use Tempest?
Once you run Tempest, you can choose one of the mode from drop-down list as;<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 Siteconfig Maker => You can create your own website configuration file
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 Siteconfig Debugger => You can debug choosen website configuration file
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 EPG Generator => You can generate your EPG file from choosen Tempest Configuration file
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 Channel Generator => You can generate channel list from choosen website configuration file
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 Siteconfig Editor => You can edit/modify or delete choosen website configuration file
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 Tempest Configurator => You can create/edit or delete choosen Tempest Configuration file
<br><br>Also you can download ready-to-use website configuration files from repo and paste into tempest_config/site_config subfolder to use. 
## What else I need to use Tempest?
Basicly, nothing except a running PHP server. Tempest is developed on PHP 7 enviroment but should work fine with any PHP version > 5.3. Also some quick tests are showing that Tempest will work fine on PHP 8.
## How can I create my own website configurations with Tempest?
To create your own website configuration(siteconfig) files, you will need an internet browser with "inspection" feature in order to find data urls and required url parameters. Then all these data may be inserted to predefined slots of "Siteconfig Maker". For scrapping EPG data from captured url response, you will also need basic level of regex(regular expression) knowledge which lots of how-to website may be found in internet, as minimum. Once you click "Save" button, your siteconfig file will be created in tempest_config/site_config subfolder. Regarding how to use XMLTV elements and Tempest command syntax, please take a look into **TempestWiki** document.
## How can I create/update channel list with Tempest?
To create or update channel list, choose "Channel Generator" and search for desired siteconfig name in drop-down list. Once you click "Generate" button, new channel list will be created in tempest_config/site_config subfolder.
## How can I prepare Tempest Configuration?
Tempest configuration file is an instruction list for Tempest to generate EPG file(s) in requested way/order. To create or update Tempest configuration files, you can choose new or an existing config name from drop-down list. From "File Configuration" tab you can set;<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 name of xml file(s) to be generated
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 timespan of data will be scrapped
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 page/channel delays & retry/timeouts
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 time converter module
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 fusion module
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 inverter module
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 enable/disable logging
<br><br>From "Channel Configuration" tab you can add/remove/change position of channels only with a few click and "Register" your channels.
<br><br>From "Channel Indexer" tab you can edit channel ids,xmltv_ids,display names and set cyclone module for channels. **Cyclone module** will automatically run when selected channel failed or returned with no data and update failed channel with selected cyclone alternative. Also auto-duplicate check for xmltv_ids will be done silently.
