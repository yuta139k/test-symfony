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
INSERT INTO player (id, name,number) VALUES (1, "test","6");
INSERT INTO player (id, name,number) VALUES (2, "ikeyan","66");
INSERT INTO player (id, name,number) VALUES (3, "setayan","99");

# team
INSERT INTO team (name) VALUES ("setars");
INSERT INTO team (name) VALUES ("ancars");
```
