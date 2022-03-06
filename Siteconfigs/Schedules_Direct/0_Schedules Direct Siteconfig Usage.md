# About Schedules Direct
Schedules Direct is a non-profit organization whose mission is to educate the public about the benefits of Open Source Software and other free software, provide support functions for such software, and provide funding for research that facilitates the improvement or creation of Open Source Software and other free software for the benefit of the public at large.
<br>
In order to use this siteconfig, you must have a valid Schedules Direct membership which may be obtain from below link;<br><br>
https://www.schedulesdirect.org/membershiplevels
<br><br>By using this siteconfig, you will be accepted the terms of **Schedules Direct Subscription Aggrement**;<br><br>
https://www.schedulesdirect.org/sagreement
# How to use Schedules Direct Siteconfig
Tempest will generate its file structure on the first run into the folder that "tempest.php" stored.<br><br>
![image](https://user-images.githubusercontent.com/97025515/153332196-b5716eb0-3f4a-4d16-b43e-9143e3ed7c4b.png)
<br>You can download and copy/paste selected ready siteconfig files into the auto created;<br><br>
# **/tempest_config/site_config/**<br>
folder where is located near your "tempest.php" file.<br><br>
![image](https://user-images.githubusercontent.com/97025515/153332672-91f20125-8196-48c8-8486-af0ed76c4145.png)
<br>After adding SchedulesDirect[Json] siteconfig file, open Tempest **Siteconfig Editor**, choose **SchedulesDirect[Json].siteconfig** and click **Modify**<br><br>
![image](https://user-images.githubusercontent.com/97025515/156166473-2ba56dde-d36f-4a67-a65c-db26da453759.png)
<br>On **Url1 Post Data** parameter of **Page Options** tab, find **##username##** & **##password##** tags and replace with your username/password<br><br>
![image](https://user-images.githubusercontent.com/97025515/156166740-8e0a242b-ac8c-4d47-821e-f5ab9a6b753d.png)
<br>And repeat the above same on **Channel Creation Url1 Post Data** parameter of **Channel Page Options** tab<br><br>
![image](https://user-images.githubusercontent.com/97025515/156168486-7b028d67-9cc2-4e96-b4e2-ea582022f508.png)
<br>
**Note: If you don't want to store your password as it is, you can also add sha1 hash of your password. In this case, please delete "**||#hash#sha1#,"password":"(.\*?)"\}$**" part otherwise your password will be hashed twice.**<br><br>
Now, you can save and exit for channel creation.<br><br>
![image](https://user-images.githubusercontent.com/97025515/156168724-82ca9084-fbb6-4144-bab0-4d9b72f88eec.png)
<br>Choose **Channel Generator** and find your updated **SchedulesDirect[Json].siteconfig** from loader<br><br>
![image](https://user-images.githubusercontent.com/97025515/156169101-3bb73f31-a808-4f9e-b42d-e27e5ade685d.png)
<br>Channel list will be generated based on all selected lineups on your Schedules Direct account<br><br>
![image](https://user-images.githubusercontent.com/97025515/156169325-f8bcc9c7-e5f8-45ed-a406-b5112e61e999.png)
<br>
**Note: If you don't have any selected lineup in your account, no channel will be found. In this case, please read **Schedules Direct Lineup Usage** first to find/add lineups into your account.<br><br>
Now, created channels may be selected for grabbing from **Tempest Configurator** and grabbed with **EPG Generator**<br><br>
![image](https://user-images.githubusercontent.com/97025515/156169950-86b0e85f-a43f-435e-836a-6bd4ecab0c69.png)
![image](https://user-images.githubusercontent.com/97025515/156170639-8653c8f7-2696-4f20-87c5-4680a5b11de4.png)
