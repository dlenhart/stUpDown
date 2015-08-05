# stUpDown
Monitor if your servers are up or down via e-mails and an auto refreshing dashboard.

This project uses PowerShell ( to ping Servers in a list & e-mail failures ), cURL, HTML/CSS/Javascript/PHP/Bootstrap & MySQL.

# Installation (Execution scripts for Windows)

1.  Install folder "stUpDown" to C:
2.  Edit stUpDown.ps1 to update sendMail() function with your e-mail information.
3.  Install cURL for Windows: http://curl.haxx.se/  DON'T forget to add cURL to your PATH variables.
4.  Follow readme.txt in folder for more information.

# Installation (Dashboard)

1.  Apache/PHP/MySQL must be installed.
2.  Extract contents of "Dashboard" folder into webroot.
3.  Create new database and import srvr_status.sql.  Includes mock data that matches servers.txt in "stUpDown" folder.
4.  Follow readme.txt in folder for more information.


www.drewlenhart.com
