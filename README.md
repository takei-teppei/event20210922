# 2021/9/22 connpass event

## table

```
> desc boards;
+--------------+--------------+------+-----+---------------------+----------------+
| Field        | Type         | Null | Key | Default             | Extra          |
+--------------+--------------+------+-----+---------------------+----------------+
| id           | int(11)      | NO   | PRI | NULL                | auto_increment |
| message      | varchar(256) | NO   |     |                     |                |
| visible_flag | tinyint(1)   | NO   |     | 1                   |                |
| updated_at   | timestamp    | NO   |     | current_timestamp() |                |
+--------------+--------------+------+-----+---------------------+----------------+
```

## sql

```search.sql
SELECT id, message, updated_at 
FROM boards 
WHERE message like '%#{キーワード}%' and visible_flag = TRUE ORDER BY id DESC;
```

## url

```
http://#{FQDN}/event20210922/#{ユーザディレクトリ}/search.php
```
