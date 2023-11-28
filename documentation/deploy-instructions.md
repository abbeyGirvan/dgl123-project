# deployment instructions

1. zip working code from Finder
2. upload the zip to the CPanel file manager inside sem-project-m3
3. extract zip
4. delete zip
5. export the current database from phpMyAdmin
6. create a new database in CPanel: databases: MySQLDatabases
7. add a user to the new database ( note the username and password )
8. in CPanel open databases: phpMyAdmin
9. select your new database: import the working database from Step 5 ( note server and DB names )
10. in CPanel file manager edit db-connections.php
11. change database information to match the server, database name, user, and password
12. open [dgl123 subdomain](https://dgl123.agirvan.imgd.ca/sem-project-m3) and navigate to desired folder to test connection.
