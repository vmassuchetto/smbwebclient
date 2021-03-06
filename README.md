## SMBWebClient

[`smbwebclient.php`](http://sourceforge.net/projects/smbwebclient/) is a simple
PHP script that allows users to access Windows networks from a Web browser
(using Samba tools). This is an adaptation for a responsive layout using
[Foundation](http://foundation.zurb.com/), instead of the [_itchish_
Windows-XP-like original interface](https://a.fsdn.com/con/app/proj/smbwebclient/screenshots/8853.jpg).
This is how it looks like:

![Screenshot](https://raw.github.com/vmassuchetto/smbwebclient/master/style/screenshot.jpg)

## Installation and Configuration

Make sure you have `smbclient` installed in your server, and then clone the project to an available web directory:

    git clone http://github.com/vmassuchetto/smbwebclient.git smbwebclient

Create the file `smbwebclient-config.php` with your settings using the
`smbwebclient-config-sample.php`. Refer to the line 53 in `smbwebclient.php`
for the available options.

    cp smbwebclient-config-sample.php smbwebclient.php
