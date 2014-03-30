<?php
$SMBWEBCLIENT_CLASS = 'smbwebclient_config';
include 'smbwebclient.php';
include 'smbwebclient-config.php';
$swc = new smbwebclient_config;
$swc->Run();
#include 'smbwebclient-dev.php';
