# Tempest EPG Generator
The Most Advanced Programmable GUI XMLTV EPG Generator

![CC](https://img.shields.io/badge/license-Creative%20Commons-red.svg)
![Release](https://img.shields.io/github/release/K-vanc/Tempest-EPG-Generator.svg)
![PHP](https://img.shields.io/badge/language-php-fuchsia.svg)
![TempestWIKI](https://img.shields.io/badge/documentation-TempestWIKI-orange.svg)
![Issues](https://img.shields.io/github/issues/K-vanc/Tempest-EPG-Generator)

| Total Available Siteconfigs | Total Covered Countries | Total Available Channels |
| :---: | :---: | :---: |
| 266 | 149 | +183500 |

<br>
<h3>Note: I will be in vacation till 27.07.22. Cya again with new updates after this date..</h3>
<br>
<h3>Live Demo : <a href="https://tempestepg.000webhostapp.com/">https://tempestepg.000webhostapp.com/</a></h3>
<br><br>
<p align="center"><img src="https://user-images.githubusercontent.com/97025515/154066443-d8d8f358-9985-477f-9667-d53aa409c6b3.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a></p>
<br>This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License</a>.<br><br>
Copyright © 2019-2022 by Kivanc Altug<br><br>
Contact Info:<br>
📧 tempestepg@gmail.com<br><br>

![tmpstr](https://user-images.githubusercontent.com/97025515/148374196-b02d02fb-6251-4121-aa5c-c798ae9e1e58.jpg)
## What is Tempest?
Tempest is a fully programmable XMLTV formatted EPG(Electronic Program Guide) generator bundled in a single php file with;<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Graphical User Interface (GUI) & Optimization For Mobile Devices
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Multiple Website Configuration Support
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ The Highest Scrapping/Generating Speed 
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ The Lowest Memory Consumption For Best Performance On All Devices
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Multiple Platform Support (Windows/Unix etc.)
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ All-in-One Single File Without Need For Any External Library/Software
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Multiple Async URL Support Up to 10
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Full Support For XMLTV Standart Elements
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Daylight Saving Time(DST) Support For Automatic Time Offset Changes
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Easy Configuration Maker & Editor
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Powerful & Simple Command Syntax For Combo-Operations/Modifications
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Unlimited Command Usage
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Scrapping Engine Built with Regex (Regular Expression) For Powerful Operations
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Built-In Cyclone Module to Add Alternative For Failed Channel
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Built-In Time Converter to Change Times of All Shows Into Requested Time Offset (DST Support)
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Built-In Inverter Module to Modify/Move XMLTV Elements Into Other Elements With Requested Order & Style
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Built-In Fusion Module to Keep Previous Dated Shows Upto 15 Days For Catch-Up Service
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Built-In GUI Configuration Maker With Channel Picker/Editor & Auto-Duplicate Channel Verification
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Built-In GUI Configuration Debugger
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Built-In File Downloader (via GUI) & Gz/Zip Compression Support
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Multiple Configuration File Support Up to 5000 Channels For Each
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Scheduled Operations (such as crontab etc.)
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Remote Access, Operations & Downloading (port-forwarding required)
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Support For Scrapping From HTML,XML,CSV,TXT,XLS,PDF(Experimental) & More..
<br>&nbsp;&nbsp;&nbsp;&nbsp;✔ Many More Features<br>
## How can I run Tempest?
All you need to do is downloading "tempest.php" file and locate it to root or any other place in your php server directory. Then you can call it from your browser as an example;
<br><br>"http://localhost:port/tempest.php"<br><br>
or from your commandline;
<br><br>"**php /path/of/your/server/tempest.php**"<br><br>
Tempest will generate its own subfolder structure and necessary files on first start-up. It is that easy.<br><br>
**Note: It is strongly advised for Unix users to set proper ownership/permissions of their php server before first start-up to let Tempest generate its folder/files.**<br>
## What else I need for Tempest?
Basicly, nothing except a running PHP server for GUI operations or php.exe file which can be downloaded from official php page. Tempest is developed on PHP 7 enviroment but should work fine with any PHP version > 5.3. Also some quick tests are showing that Tempest will work fine on PHP 8 (tested on PHP 8.1)
## How can I use Tempest?
Once you run Tempest, you can choose one of the modes from drop-down list as;<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 Siteconfig Maker => You can create your own website configuration file
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 Siteconfig Debugger => You can debug choosen website configuration file
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 EPG Generator => You can generate your EPG file from choosen Tempest Configuration file
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 Channel Generator => You can generate channel list from choosen website configuration file
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 Siteconfig Editor => You can edit/modify or delete choosen website configuration file
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 Tempest Configurator => You can create/edit or delete choosen Tempest Configuration file
<br><br>Also you can download ready-to-use website configuration files from repo and paste into tempest_config/site_config subfolder to use. 
## How can I create my own website configurations with Tempest?
To create your own website configuration(siteconfig) files, you will need an internet browser with "inspection" feature in order to find data urls and required url parameters. Then all these data may be inserted to predefined slots of "Siteconfig Maker". Tempest supports total of 10 async urls (4 for indexing, 2 for additional detail pages and 4 for channel list creating) which may be used with GET,POST,HEAD,OPTIONS,DELETE and PUT request methods. For scrapping EPG data from captured url response, you will also need basic level of regex(regular expression) knowledge which lots of how-to website may be found in internet, as minimum. Once you click "Save" button, your siteconfig file will be created in tempest_config/site_config subfolder. Regarding how to use XMLTV elements and Tempest command syntax, please take a look into **TempestWiki** document.
![tmpst](https://user-images.githubusercontent.com/97025515/148179725-e1a7c294-d107-44ae-859a-6d660d6601d7.jpg)
## How can I create/update channel list with Tempest?
To create or update channel list, choose "Channel Generator" and search for desired siteconfig name in drop-down list. Once you click "Generate" button, new channel list will be created in tempest_config/site_config subfolder.<br><br>
![chgn](https://user-images.githubusercontent.com/97025515/148723194-312da32f-046e-4992-b796-7ec05bf91865.jpg)
## How can I prepare Tempest Configuration?
Tempest configuration file is an instruction list for Tempest to generate EPG file(s) in requested way/order. To create or update Tempest configuration files, you can choose new or an existing config name from drop-down list of "Tempest Configurator". In "File Configuration" tab you can set;<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 Name of xml file(s) to be generated
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 Timespan
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 Page/channel delays & retry/timeouts
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 Time converter module
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 Fusion module
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 Inverter module
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 Index-only mode
<br>&nbsp;&nbsp;&nbsp;&nbsp;🔹 Logging<br><br>
![flcfg](https://user-images.githubusercontent.com/97025515/148721188-21edc7eb-3780-4ac5-9f4c-df379c19df00.jpg)
<br><br>In "Channel Configuration" tab you can add/remove/change position of channels only with a few click and "Register" your channels.<br><br>
![chcfg](https://user-images.githubusercontent.com/97025515/148505923-d2acf7a1-773c-4e3f-bd3b-42ea5b47ae61.jpg)
<br><br>In "Channel Indexer" tab you can edit channel ids,xmltv_ids,display names and set cyclone module for channels. **Cyclone module** will automatically run when selected channel failed or returned with no data and update failed channel with selected cyclone alternative. Also auto-duplicate check for xmltv_ids will be done silently and duplicated xmltv_ids will be highlighted.<br><br>
![cindx](https://user-images.githubusercontent.com/97025515/148506365-d299b2dd-1939-4947-b18d-2c4b1fb99061.jpg)
## How can I start generating xmltv files?
After saving Tempest configuration file, you are ready to start generating your xmltv file(s) by choosing "EPG Generator" tab and selecting Tempest configuration file which you want to use, from drop-down list. Also from same tab, you can choose .gz compression for the files will be generated and download option for remote users. Please note that if you tick multiple file download options, you will download a single .zip file which contains all the files you requested.<br><br>
![gnrtr](https://user-images.githubusercontent.com/97025515/150788548-16ce8bef-22e2-46ff-a7f4-ec6409c799ad.jpg)
<br><br>And clicking "Generate" button will start the process..<br><br>
![stgrb](https://user-images.githubusercontent.com/97025515/150789157-0501d86f-4325-4a2a-9a84-c504fa2dbcbb.jpg)
## **Important Note for UNIX Users**
There is 1 very important setting needs to be done by UNIX users since UNIX OS is not allowing me to set this parameter from script side. <br>For NGINX;<br>
<br>**fastcgi_read_timeout**<br><br>
and for APACHE;<br>
<br>**TimeOut**<br><br>
parameter which server default is 300(5 mins), needs to be set some higher value such as 1800(30 mins) or 3600(1 hour). Otherwise you may have a timeout during the process after 5 minutes of initialisation. These parameters may be set as below for NGINX;<br><br>
in /etc/nginx/nginx.conf file, set under http directive. It will look like;<br><br>
http {<br>
#.....<br>
**fastcgi_read_timeout 1800;**<br>
#..<br>
}<br><br>
and for APACHE; you need to change **TimeOut**  value in your httpd.conf or vhost config file. New setting will be applied after server reload as below;<br>
for NGINX;<br><br>
**sudo service php7.0-fpm reload**     (**"php7.0-fpm"** is the one I use so you have to modify it based on php version you use)<br>
**sudo service nginx reload**<br><br>
and for APACHE;<br><br>
**sudo service apache2 reload** <br>
or<br>
**sudo systemctl reload apache2**
<br><br>For Windows, I didnt see such setting or limitation. I think it is set to "no limit" by default for Windows.<br><br>
## For more detailed information about usage and features, please take a look into **Declaration** and **TempestWIKI** documents..
<p align="center"><img src="https://user-images.githubusercontent.com/97025515/151149670-554137dd-2395-4982-ab42-4ac4ba382fa9.png"><img src="https://user-images.githubusercontent.com/97025515/151745807-1709ed8e-9de6-4299-844f-4e80e7f73598.png"></p>

## If you like the project, please consider a donation to support
<p align="center"><img src="https://user-images.githubusercontent.com/97025515/151753283-d7780e5b-0d6f-4277-a487-b5a3f015b55e.png"><img src="https://user-images.githubusercontent.com/97025515/151753477-ec61f707-9468-456e-b719-ce8340c69e4b.png"></p>
<p align="center"><a href="https://wise.com/" target="_blank"><img src="https://user-images.githubusercontent.com/97025515/151751079-415aeb56-d399-4b27-9250-d6dca6ac7c27.png"></a></p>

### Wise Account (Europe & General)<br>
**Account Owner : Kivanc Altug Mutal<br>
Currency : € (Euro)<br>
BIC : TRWIBEB1XXX<br>
IBAN : BE25 9670 4163 4382<br>
Bank Address : Avenue Louise 54, Room S52, Brussels, 1050, Belgium**
<br>
### Wise Account UK<br>
**Account Owner : Kivanc Altug Mutal<br>
Currency : £ (GBP)<br>
Sort Code : 23-14-70<br>
Account No : 84736167<br>
IBAN : GB18 TRWI 2314 7084 7361 67<br>
Bank Address : 56 Shoreditch High Street, London, E1 6JJ, United Kingdom**
<br>
### Wise Account US<br>
**Account Owner : Kivanc Altug Mutal<br>
Currency : $ (USD)<br>
Routing No : 084009519<br>
Account No : 9600000000354348<br>
Account Type : Checking<br>
Bank Address : 19 W 24th Street, New York NY, 10010, United States**
