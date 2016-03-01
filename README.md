# _Jon's Hair Stylist Code Review_

#### By _**Jon Nardine**_

## Description

_This is Jon Nardine's third PHP code review, which will test his ability to use PHP, Twig, and Silex, as well as functionality for using a MySQL database. The site will allow the user to add a hair stylist to an empty list of stylists, and then link them to a dedicated page to each created stylist, where they will be able to add clients for each particular stylist. Both the stylists and the clients will be updateable and deleteable via appropriate CRUD functions and routes._

## Setup

Please visit this website:

https://github.com/jwnardine/PHPCodeReviewThree

Clone the repository into the desktop using the command __git clone https://github.com/jwnardine/PHPCodeReviewThree.git__

Open the project folder in the command prompt, and use the prompt __composer install__. This will set up the correct dependencies for your computer.

Once composer has installed, access the /web directory (prompt __cd web__ from project folder), and then type __php -S localhost:8000__ and hit enter.

From this point, type __localhost:8000__ into the url bar of your preferred internet browser, and the project homepage should show up in the browser.

If the project home page DOES NOT show up in the browser, you may have to delete the /vendor folder from the project folder, and run __composer install__ again.

## Technologies Used

_PHP, PHPUnit Twig, Silex, Markdown, Github_

## MySql Log:

Last login: Fri Feb 26 14:32:39 on console
epicodus-49:desktop Guest$ mysql.server start
Starting MySQL
 SUCCESS!
epicodus-49:desktop Guest$ mysql -uroot -proot
mysql: [Warning] Using a password on the command line interface can be insecure.
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 2
Server version: 5.7.10 Homebrew

Copyright (c) 2000, 2015, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> CREATE DATABASE hair_salon;
Query OK, 1 row affected (0.00 sec)

mysql> USE hair_salon;
Database changed
mysql> CREATE TABLE stylists (name VARCHAR(255), id serial PRIMARY KEY);
Query OK, 0 rows affected (0.11 sec)

mysql> CREATE TABLE clients (client_name VARCHAR(255), id serial PRIMARY KEY, stylist_id INT);
Query OK, 0 rows affected (0.11 sec)

mysql>

### mySql Inputs

mysql> CREATE DATABASE hair_salon;
Query OK, 1 row affected (0.00 sec)

mysql> USE hair_salon;
Database changed
mysql> CREATE TABLE stylists (name VARCHAR (255), id serial PRIMARY KEY);
Query OK, 0 rows affected (0.06 sec)

mysql> CREATE TABLE clients (client_name VARCHAR (255), id serial PRIMARY KEY, stylist_id INT);
Query OK, 0 rows affected (0.04 sec)


### Legal

Copyright (c) 2016 **_Jon Nardine_**

This software is licensed under the MIT license.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
