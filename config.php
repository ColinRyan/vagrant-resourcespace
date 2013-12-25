<?php
###############################
## ResourceSpace
## Local Configuration Script
###############################

# All custom settings should be entered in this file.
# Options may be copied from config.default.php and configured here.

# MySQL database settings
$mysql_server = 'localhost';
$mysql_username = 'root';
#$mysql_password = 'root';
$mysql_db = 'resourcespace';

$mysql_bin_path = '/usr/bin';

$baseurl = "http://localhost:10080/resourcespace";
# Email settings
$email_from = 'carsten@kreuzverweis.de';
$email_notify = 'carsten@kreuzverweis.de';

$spider_password = 'E5evu4UTEZeb';
$scramble_key = 'yDE6aPUgUZUt';

$api_scramble_key = 'Ame3AmyWEnAX';

# Paths
$imagemagick_path = '/usr/bin';
$ghostscript_path = '/usr/bin';
$ffmpeg_path = '/usr/bin';
$exiftool_path = '/usr/bin';
$antiword_path = '/usr/bin';
$pdftotext_path = '/usr/bin';

$ftp_server = 'my.ftp.server';
$ftp_username = 'my_username';
$ftp_password = 'my_password';
$ftp_defaultfolder = 'temp/';
$thumbs_display_fields = array(8,3);
$list_display_fields = array(8,3,12);
$sort_fields = array(12);
$imagemagick_colorspace = "sRGB";
