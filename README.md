# Techswag - E-commerce Website
Swaggiest non-existent site evr

This is an e-commerce website with the following functionalities:
-	Portable SQL Database for Users, Items, Categories
-	Admin section for Adding/Modifying/Removing entries (admin login/pass: root/root)
-	Shopping Cart for existing or anonymous users
-	Search query for items
-	Dynamic Stock management
-	Password encryption. Protected against SQL injection

No templates used. Obviously.


## Install Notes

1.	PHP and SQL server needed (ex: MAMP).
2.	edit ./data_management/connectdb.php accordingly:
   *	Host: $dbhost
   *	Username: $dbuser
   *	Password: $dbpass
   *	Database: $dbname
3.	access [link]/install.php to install tables (ex: http://localhost:8888/install.php)
4.	Ready to go! [link]/index.php (ex: http://localhost:8888)
