# Php_MySQLDatabaseLibrary
database connection, performing query and closing connection. 

## How it works?

```php
<?php
	$mysql = new MySQLDatabase("localhost", "root", "", "database");
  $mysql->perform_query("INSERT INTO user_detail(username, password) VALUES ('Abraham', 875)");
  $mysql->close_connection();
?>
```

## Any Requirements

*none*

## Notice:

*I don't plan on maintaining it. It's just for practise and my personal use. If you want to use it, please consider using prepared statements.*
