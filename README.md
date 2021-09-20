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

## User Directory割り当て

|  User Directory  |  github account  |
| ---- | ---- |
| user0 | 視聴のみの人用 |
| user1 | - |
| user2 | - |
| user3 | - |
| user4 | - |
| user5 | - |
| user6 | - |
| user7 | - |
| user8 | - |
| user9 | - |
| user10 | - |
| user11 | - |
| user12 | - |
| user13 | - |
| user14 | - |
| user15 | - |
| user16 | - |
| user17 | - |
| user18 | - |
| user19 | - |
| user20 | - |
| user21 | - |
