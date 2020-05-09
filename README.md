# php-mysql-ranking

Página de equipe.

## Créditos

Criado por [Acacio De Lima](https://twitter.com/limadeacacio)

## SQL

```
CREATE TABLE `groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

INSERT INTO `groups` VALUES (1,'Administradores'),(2,'Moderadores'),(3,'Membros');
```

```
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `id_group` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

INSERT INTO `users` VALUES (1,'Limazia',1),(2,'Mealfa',2),(3,'Toari',2),(4,'LimaHyper',3),(5,'Lisma',3),(6,'iGhosty',3);
```

## Exemplo

![](https://i.imgur.com/r9ys017.png)
