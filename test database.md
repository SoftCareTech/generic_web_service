
create a table from this query for your test 


DROP TABLE IF EXISTS `chat`.`user`;
CREATE TABLE  `chat`.`user` (
  `phone` varchar(15) NOT NULL DEFAULT '',
  `name` varchar(95) DEFAULT NULL,
  `last` varchar(45) DEFAULT NULL,
  `cdate` varchar(45) DEFAULT NULL,
  `msg` varchar(45) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
