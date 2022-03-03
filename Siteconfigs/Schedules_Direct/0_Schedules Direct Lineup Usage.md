# About Schedules Direct
Schedules Direct is a non-profit organization whose mission is to educate the public about the benefits of Open Source Software and other free software, provide support functions for such software, and provide funding for research that facilitates the improvement or creation of Open Source Software and other free software for the benefit of the public at large.
<br>
In order to use this siteconfig, you must have a valid Schedules Direct membership which may be obtain from below link;<br><br>
https://www.schedulesdirect.org/membershiplevels
<br><br>By using this siteconfig, you will be accepted the terms of **Schedules Direct Subscription Aggrement**;<br><br>
https://www.schedulesdirect.org/sagreement
# How to use Schedules Direct Lineup Siteconfig
With **Schedules Direct Lineup** siteconfig, you can; 
* Query available lineups based on country/postal code
* Create lineup list for given country/postal code
* Preview available channels in lineups (including non-selected ones)
* Add & delete lineups into your account with remaining changes information
* Create list of selected lineups
<br><br>Tempest will generate its file structure on the first run into the folder that "tempest.php" stored.<br><br>
![image](https://user-images.githubusercontent.com/97025515/153332196-b5716eb0-3f4a-4d16-b43e-9143e3ed7c4b.png)
<br>You can download and copy/paste selected ready siteconfig files into the auto created;<br><br>
# **/tempest_config/site_config/**<br>
folder where is located near your "tempest.php" file.<br><br>
![image](https://user-images.githubusercontent.com/97025515/153332672-91f20125-8196-48c8-8486-af0ed76c4145.png)
<br>After adding SchedulesDirect[Lineup] siteconfig file, open Tempest **Siteconfig Editor**, choose **SchedulesDirect[Lineup].siteconfig** and click **Modify**<br><br>
![image](https://user-images.githubusercontent.com/97025515/156492349-178e1a04-1fc0-42ee-8612-84a8b5bfddba.png)
<br>On **Url1 Post Data** parameter of **Page Options** tab, find **##username##** & **##password##** tags and replace with your username/password<br><br>
![image](https://user-images.githubusercontent.com/97025515/156166740-8e0a242b-ac8c-4d47-821e-f5ab9a6b753d.png)
<br>And repeat the above same on **Channel Creation Url1 Post Data** parameter of **Channel Page Options** tab<br><br>
![image](https://user-images.githubusercontent.com/97025515/156168486-7b028d67-9cc2-4e96-b4e2-ea582022f508.png)
<br>**Note: If you don't want to store your password as it is, you can also add sha1 hash of your password. In this case, please delete "**||#hash#sha1#,"password":"(.\*?)"\}$**" part otherwise your password will be hashed twice.**<br><br>
Now, you can save and exit.<br><br>
# Query Available Lineups
Go to **Siteconfig Debugger** and enable **Channel Element Debugger** on **Channel Options** tab<br><br>
![image](https://user-images.githubusercontent.com/97025515/156173750-2a052a93-4d96-46a0-857a-573bba5eb90d.png)
<br>Then from **Launch Debugger** tab, choose **SchedulesDirect[Lineup]** siteconfig and type your country/postal code into **Debug User Key** in given order;<br>
**country=XXX&postalcode=YYYYY**<br><br>
Example country list and postal code order may be found on below link;<br>
https://json.schedulesdirect.org/20141201/available/countries<br><br>
![image](https://user-images.githubusercontent.com/97025515/156175267-6ed53f0c-4982-4cce-84ac-ab62b08af05c.png)
<br>And when you click **Debug** button, all available lineups will be displayed on screen<br><br>
![image](https://user-images.githubusercontent.com/97025515/156175772-1bc295aa-62c3-43c9-a7b6-4f818752b968.png)
# Create Lineup List
Once you find your provider(s), you can generate lineup lists to preview their channels. To do that select **Channel Generator** and choose **SchedulesDirect[Lineup]**, then type your country/postal code into **User Key** box in given order;<br>
**country=XXX&postalcode=YYYYY**<br><br>
![image](https://user-images.githubusercontent.com/97025515/156177843-8460ff6f-6abc-493a-aee0-b06780afcc8a.png)
![image](https://user-images.githubusercontent.com/97025515/156177916-0fc65581-5e68-4543-b5ec-d857000eb4b2.png)
<br>Created lineup list may be used for preview their channels.
# Preview Available Channels
Once you create lineup list, you can preview channel lists of the available providers. Go to **Siteconfig Debugger** and enable **Channel Element Debugger** on **Channel Options** tab<br><br>
![image](https://user-images.githubusercontent.com/97025515/156173750-2a052a93-4d96-46a0-857a-573bba5eb90d.png)
<br>Then from **Launch Debugger** tab, choose **SchedulesDirect[Lineup]** siteconfig and choose desired provider from **Debug Channel Id** box<br><br>
![image](https://user-images.githubusercontent.com/97025515/156178551-1a6db132-c3dd-4e3d-b05f-9039076ec290.png)
<br>And when you click **Debug** button, all available channels for selected provider will be displayed on screen<br><br>
![image](https://user-images.githubusercontent.com/97025515/156178780-d4042566-9a1f-4d88-a77f-cd838f223d3e.png)
# Add Lineup Into Your Account
Once you decided to add a lineup into your account, go to **Siteconfig Debugger** and enable **Show Element Debugger** from **Show Options** tab<br><br>
![image](https://user-images.githubusercontent.com/97025515/156179314-400ab639-ebae-48b8-80bb-36cb447e91c0.png)
<br>Then from **Launch Debugger** tab, choose **SchedulesDirect[Lineup]** siteconfig and choose desired provider from **Debug Channel Id** box<br><br>
![image](https://user-images.githubusercontent.com/97025515/156178551-1a6db132-c3dd-4e3d-b05f-9039076ec290.png)
<br>And when you click **Debug** button, selected lineup will be added into your account<br><br>
![image](https://user-images.githubusercontent.com/97025515/156182380-2f34be6d-323f-452c-933c-c912c8b66a47.png)
<br>Once you create new channel list with your **SchedulesDirect[Json]** siteconfig, changes will be reflected to created new channel list.<br>
<br><br>**Important Note:** If you made a lineup deletion previously, do not forget to change **Url2 Request Method** to **PUT** and save your siteconfig. To avoid add/delete lineup by mistake, it is advised to always check **Url2 Request Method** of your **SchedulesDirect[Lineup]** from **Siteconfig Editor** before any add/delete operation.<br><br>
![image](https://user-images.githubusercontent.com/97025515/156183096-15d21c55-760e-4664-a0c3-bb4075a5a1ea.png)
# Delete Lineup From Your Account
Once you decided to delete a lineup into your account, go to **Siteconfig Editor**, choose **SchedulesDirect[Lineup]** and change **Url2 Request Method** to **DELETE** and save your siteconfig<br><br>
![image](https://user-images.githubusercontent.com/97025515/156180729-2ed3769a-d146-4216-a145-d290497bb688.png)
<br>After go to **Siteconfig Debugger** and enable **Show Element Debugger** from **Show Options** tab<br><br>
![image](https://user-images.githubusercontent.com/97025515/156179314-400ab639-ebae-48b8-80bb-36cb447e91c0.png)
<br>Then from **Launch Debugger** tab, choose **SchedulesDirect[Lineup]** siteconfig and choose desired provider to be deleted from **Debug Channel Id** box<br><br>
![image](https://user-images.githubusercontent.com/97025515/156181688-fa22b78c-0735-4f86-b4a7-cf35a17f3149.png)
<br>And result and details will be listed on your screen<br><br>
![image](https://user-images.githubusercontent.com/97025515/156181862-7e568ea8-eab2-47cc-891a-742e81a64ee5.png)
<br>Once you create new channel list with your **SchedulesDirect[Json]** siteconfig, changes will be reflected to created new channel list.<br>
# Create List of Your Selected Lineups
When you run your **SchedulesDirect[Lineup]** siteconfig on **Channel Generator** without any parameter, Tempest will generate list of your selected line-ups.
