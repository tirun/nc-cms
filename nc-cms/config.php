<?php

// General settings. Configure all of these before using nc-cms.

define('NC_LOGIN_USER', "admin");  // Username for content editor.
define('NC_LOGIN_PASSWORD', "admin");  // Password for content editor.
define('NC_WEBSITE_NAME', "My Website");  // Your website name.
define('NC_WEBSITE_URL', "http://localhost/example.php");  // Your website internet address.
define('NC_CMS_URL', "http://localhost/nc-cms/");  // Your website internet nc-cms directory address. Ends with a slash.
define('NC_LANGUAGE', "english");  // Language pack to use. Currently only english and german are available.
define('NC_EDIT_CONTENT_CSS', "../example.css");  // Content CSS for Editor inline style. Multiple styles can be added comma-separated.
define('NC_UPLOAD_DIRECTORY', '../content/upload/'); // define upload directory (same level as nc-cms-folder is recommended)
define('UPLOAD_FILE_SIZE_MAX', 250000); // defines maximum upload file size for filemanager in bytes.

// Optional database settings. Modify these settings if you wish to use nc-cms's database support.

define('NC_USE_DB', false);  // Set to true if you wish to use database support, set to false to disable.
define('NC_DB_HOST', "");  // Hostname for your database server.
define('NC_DB_USER', "");  // Username for database account.
define('NC_DB_PASSWORD', "");  // Password for database account.
define('NC_DB_DATABASE', "");  // Name of database you want to connect to.
define('NC_DB_PREFIX', "");  // Optional prefix for database tables.
