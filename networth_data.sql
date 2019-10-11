use heroku_18b50216444bfd7;
create table if not exists `networth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(6) NOT NULL,
  `liabilities` double NOT NULL,
  `assets` double NOT NULL,
  `networth` double NOT NULL,
  PRIMARY KEY (`id`), `user_id` INT(11), INDEX `user_id`(`user_id`),
	FOREIGN KEY (`user_id`)
	REFERENCES `users`(`id`)
	ON DELETE CASCADE ON UPDATE cascade
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




//username
b8adee48c9781d
 //host
us-cdbr-iron-east-05.cleardb.net
-- //password
a4d59b94
