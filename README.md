# Engineering Project I

This is my repository for Engineering Project I from Salih Bayar.

### Project Aim

In this project, we gather RSS Feeds with PHP and stores them in MySql database so it can be implemented in any mobile app through mysqli request. This project also acts as an RSS Aggregator like Feedly or NewsBlur.

### Configuration

To configure first open the config folder. 
- In "errors.php" you can comment out the lines if you don't want any reporting.
- In "rss_sources.php" you can add or more RSS feed according to your preferences.
- In "sql_conf.php" you can rename the default Database and Table name. Add your MySql / MariaDB username and password also specify hostname and port.
- "initiate_sql.php" will create the database and table if you haven't created a table beforehand.
- To make the steps automated open your control panel like cPanel or Plesk and create a cron job.

### How to Run the Application

After the configuration steps, you can create news entries with "rss_data.php" in "rss" folder. You can run it in the browser or create a cron job locally. If you plan to run it in the browser make sure that "_clear.php" in "sql" folder is unreachable to 3rd parties.


### Read More

The RSS Sources are in "RSS_List.md"  and sample query and the SQL Schema, query format and sample queries are in "SQL_SCHEMA.md". If you would like to learn more about the operating process take a look into those 2 Markdown files and read the "Report.pdf".





