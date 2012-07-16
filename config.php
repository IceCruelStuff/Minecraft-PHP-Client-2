<?php

/*


           -
         /   \
      /         \
   /   MINECRAFT   \
/         PHP         \
|\       CLIENT      /|
|.   \     2     /   .|
| ..     \   /     .. |
|    ..    |    ..    |
|       .. | ..       |
\          |          /
   \       |       /
      \    |    /
         \ | /
         
         
	by @shoghicp

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.


*/

set_time_limit(0);
error_reporting(E_ALL ^ E_NOTICE);
ini_set("display_errors", 1);
ini_set('default_charset', 'utf-8');
define("FILE_PATH", dirname(__FILE__)."/");
set_include_path(get_include_path() . PATH_SEPARATOR . FILE_PATH);
define("MAX_BUFFER_BYTES", 1024 * 1024 * 4); //4MB max of buffer
define("MIN_BUFFER_BYTES", 64);
ini_set("memory_limit", "512M");
define("HALF_BUFFER_BYTES", MAX_BUFFER_BYTES / 2);
define("CURRENT_PROTOCOL", 29);
define("LAUNCHER_VERSION", 13);
define("SPOUT_VERSION", "1000");