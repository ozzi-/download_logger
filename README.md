# download_logger
"invisible" per file download logging

## How this works
User accesses https://example.com/logging_file.pdf

.htaccess redirects to 
https://example.com/logging_file.php

Which checks if the user agent fits to a bot / crawler and returns 404 or serves the actual pdf file

The .htaccess also disallowes direct access to the actual file, so there is no way to circumvent the logging functionality.

Note: The actual file can be any arbitrary file type

## Logfile
The logfile will be written on the first download, the file name appends .log to the original file.

Example:

> [200] 85.X.XYZ.Z @ 2017-04-12 20:15:39 | Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:52.0) Gecko/20100101 Firefox/52.0.1 Waterfox/52.0.1
> 
> [200] 85.X.XYZ.Z @ 2017-04-12 20:18:48 | Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:52.0) Gecko/20100101 Firefox/52.0.1 Waterfox/52.0.1
> 
> [404] 12.XY.XY.XY @ 2017-04-12 21:29:57 | Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
