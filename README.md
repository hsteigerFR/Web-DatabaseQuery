# Web - Database Query

Author : Hugo Steiger, Celian Muller-Machi

--------------------------------------------------------------------------------------------------------------------------------------------------------------

This project was conducted as part of the "Database" course from Mines Nancy's Computer Science department. The goal of the project was to implement a website where the user can interact with a SQL database, adding tables and making SQL requests related these tables. The tables correspond to an hospital administration context. In this project, MAMP is used to locally create both an Apache HTML server and a MySQL server. PHP code enables to communicate with the mySQL database from the different web pages, whereas HTML is employed for the visualization of these web pages. For instance, the user can import a .csv file that will be interpreted as a SQL table. Javascript code is also called to interact with the page, and change its HTML code in real time. phpMyAdmin, as part of MAMP tools to work on the SQL database, is mobilised to check the tables and requests integrity. Here is an illustration of the databse and server setup :

![image](https://user-images.githubusercontent.com/106969232/182435476-63f47119-7527-4a7c-ae4c-c2804978cdf0.png)

To add some context, the relationship between the project tables are the following :

![Data](https://user-images.githubusercontent.com/106969232/182436192-06c9c781-c588-4fa5-9a79-7e59e72995dc.JPG)

In this graph, the # in the table keys means the key is external. Therefore, to build such a table, instances from other tables are necessary. For instance, in order to create a hospitalization instance; a patient instance, a room instance and a departement instance are required. This relationship is summed up with directed arrows.

--------------------------------------------------------------------------------------------------------------------------------------------------------------
HOW TO USE :
- Install MAMP.
- From the MAMP installation folder, replace the "htdocs" folder by the one in this repository.
- Launch MAMP and on the ribbon, go to "MAMP", "Preferences" and "Ports".
- Set : Apache Port -> 80, Nginx Port -> 80, MySQL Port -> 3306.
- Press the Start Servers button.
- On an Internet navigator, go to "localhost:80".
- On the main menu, first press "Create the Database".
- For each table in the "Select a table" scrolling menu :
   * Press "Change" in the main menu.
   * Once on the corresponding table HTML page, press "Browse" under "Complete Table with .csv file".
   * Choose the corresponding .csv file in this repo
   * Press "Load", the content of the table should appear at the bottom of the page
   * Press "Return to main menu"
- If the tables appear in each table HTML page, the import is complete. To better check, go to "localhost/MAMP" and go to "phpMyAdmin".
- From the main menu, press the "Query" button
- 19 questions, corresponding to 19 SQL requests, are proposed. To check the request answer, click on the "Answer Qx" button under the question you are intersted in. In "interrogations.php", all the questions are transposed into SQL queries.
