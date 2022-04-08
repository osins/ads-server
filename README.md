Security
 
Some directories in the Revive Adserver package are not supposed to be served by your webserver directly, for security reasons. Leaving such files and directories accessible might disclose unwanted information and pose a security threat. A quick security check has been run and you will find the results below.

  Your browser was able to fetch some files that should not be accessible. For example:

var/INSTALLED
var/cache/README.txt
etc/database_action.xml
plugins/etc/openXDeliveryLog.xml

Apache

```
&lt;DirectoryMatch "^/path/to/revive/(?!$|www/)">

    # Apache 2.4
    <IfModule mod_authz_core.c>
      Require all denied
    </IfModule>

    # Apache 2.2
    <IfModule !mod_authz_core.c>
      Order deny, allow
      Deny from all
    </IfModule>

</DirectoryMatch>

Alternatively, you could rely on the .htaccess files we ship:

&lt;Directory /path/to/revive>
   AllowOverride AuthConfig Limit
</Directory>
```

Nginx

```
location ~ ^/(?!$|www/) {
   return 403;
}

Otherwise:

location ~ ^/relative/path/to/revive/(?!$|www/) {
    return 403;
}
```
