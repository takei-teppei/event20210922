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

|  User Directory  |  Connpass user name  |
| ---- | ---- |
| user0 | 視聴のみの人用 |
| user1 | __atah_atah * |
| user2 | えきどなG |
| user3 | 1234567890 |
| user4 | nnp * |
| user5 | mendelssohnbach * |
| user6 | kobayan21 |
| user7 | kawakaz |
| user8 | namu1012 |
| user9 | parachan5 |
| user10 | ryomarugon |
| user11 | minarai |
| user12 | quanta |
| user13 | yukimiiii * |
| user14 | Nekojirou |
| user15 | eventbot |
| user16 | Kazuma |
| user17 | takei_20062 |
| user18 | Berry |
| user19 | はるにく |
| user20 | ke-su |
| user21 | None * |


- *: コラボレータ招待済み
