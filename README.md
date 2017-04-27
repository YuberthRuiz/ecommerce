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

1. Make my changes
  1. Fix bug
  2. Improve formatting
    * Make the headings bigger
2. Push my commits to GitHub
3. Open a pull request
  * Describe my changes
  * Mention all the members of my team
    * Ask for feedback