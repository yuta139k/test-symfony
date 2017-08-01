test-symfony
============

A Symfony project created on July 25, 2017, 4:57 am.

Migration
============

```
$ bin/console doctrine:database:create
$ bin/console doctrine:schema:create
```

```
# player
INSERT INTO player (id, name, player_name, number, team_id) VALUES (1, "test", "test_name", "6", 1);
INSERT INTO player (id, name, player_name, number, team_id) VALUES (2, "ikeyan", "ikeyan-ikeyan", "66", 2);
INSERT INTO player (id, name, player_name, number, team_id) VALUES (3, "setayan", "seta", "99", 1);

# team
INSERT INTO team (name) VALUES ("setars");
INSERT INTO team (name) VALUES ("ancars");
```
