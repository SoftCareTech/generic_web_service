Generic webservice

This is a generic web-service for MySQL database that allow user to insert and retrieve data from MySQL easily fot their mobile http post.  This is target at easing developers work of writing web service for each mobile and desktop app to access the their database.  The security of this is more relable as  compare accessing the database directly with your credential on your compile app( where a person can decompile  your app and access your database credentials).

Future development will include:
	adding other databases
	supporting all data types
	adding other ways of sending the data 
	improving security
	add sytle to tset examples
	shown example in java, kotlin, e.t.c using http/https post

your ideas are welcome as you folk and contribute 

This can be used for all purposed but keeping the trademark of orignal source is necessary. 



Create a table from this query for your test 

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

