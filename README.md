# XAMPP Conf

```conf
# ADD D:/php/test to the path
Alias /test "D:/php/test" # Path to the folder
<Directory "D:/php/test">
    Options Indexes FollowSymLinks Includes ExecCGI
    AllowOverride All
    Require all granted
</Directory>
```