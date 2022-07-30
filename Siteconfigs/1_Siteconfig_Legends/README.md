# WHAT ARE THE SITECONFIG TYPES?
There are 3 types of siteconfig files available with different prefixes as indicator.<br><br>
These are;<br>
* Normal (Unlocked) Siteconfig => No Prefix
* Encrypted Siteconfig => [ENC] Prefix
* Encrypted with Expiry Date Siteconfig => [ENC][EX] Prefix
## Normal (Unlocked) Siteconfigs:
These siteconfigs have no prefix on their filename and their content is available to read and modify. Users may use and edit their content without any limitation.
## Encrypted Siteconfigs:
These siteconfigs have "[ENC]" prefix on their filename and their content is protected against to read and modify. Users may use them for grabbing and channel creation but
cannot edit or debug their content.
## Encrypted with Expiry Date Siteconfigs:
These siteconfigs have "[ENC][EX]" prefix on their filename and their content is protected against to read and modify. Users may use them for grabbing and channel creation 
till the defined "Expiry Date" but cannot edit or debug their content. Siteconfig file will become unusuable when it reaches expiry date. Expiry Date can be found inside
siteconfig file in "Y-m-d" format as below;<br>
![image](https://user-images.githubusercontent.com/97025515/181880112-eb9438d6-4d1e-4fb7-bb74-70e2ebde01bc.png)
<br>
# !!IMPORTANT NOTE!!
Please note that expiry date for the first published "[ENC][EX]" siteconfig files (which Siteconfig expiry date line is not available) were set to "03-08-2022" and they will 
be unusuable after this date. Please redownload new siteconfig files which were set to "03-08-2023" as expiry date. 
