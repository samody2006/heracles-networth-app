use heracles_makeup;
CREATE TABLE IF NOT EXISTS networth (
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




-- //username
-- heracles_makeup
--  //host
-- 54.86.137.146
-- -- //password
-- n3tw0rth@p9
