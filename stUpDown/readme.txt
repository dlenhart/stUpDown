stUpDown v1.0 - Execution Scripts
-Drew D. Lenhart
-8/4/2015
=============

**Script is for demonstration/learning purposes only.  Please limit this to your internal network!

Installation:
=============

1. Copy folder stUpDown to C:\stUpDown (Or wherever you like).

2. Compile up_down.au3 by downloading AutoIT (This is optional, up_down.bat can be used instead to run .ps1 file)

3. Open Windows Task Scheduler and create a new task to run every 5, 10 minutes, hour, depending on what you want.

-Use either the compiled version of up_down.au3 or the up_down.bat file for the "Actions" portion of Task Scheduler

-See this tutorial for further instructions:  http://www.drewlenhart.com/monitor-your-servers-with-powershell-more-part-2/

4. Open stUpDown.ps1 and insert your gmail account in the sendMail() function.

-See this tutorial for further instructions:  http://www.drewlenhart.com/monitor-your-servers-with-powershell-more-part-1/

5. Install cURL for Windows: http://curl.haxx.se/  DON'T forget to add cURL to your PATH variables.

6. Following the tutorials in the links above will get you a working monitoring script with failure emails!

7. Open directory “Dashboard” for installing Web Dashboard! 

www.drewlenhart.com