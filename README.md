# download_logger
"invisible" per file download logging

## How this works
User accesses https://example.com/logging_file.pdf

.htaccess redirects to 
https://example.com/logging_file.php

Which checks if the user agent fits to a bot / crawler and returns 404 or serves the actual pdf file

The .htaccess also disallowes direct access to the actual file, so there is no way to circumvent the logging functionality.

Note: The actual file can be any arbitrary file type
