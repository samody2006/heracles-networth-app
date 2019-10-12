use heroku_18b50216444bfd7;
create table if not exists `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(255) NOT NULL
  primary key (`id`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

use heroku_18b50216444bfd7;
create table if not exists `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `subject` varchar(255) NOT NULL
  primary key (`id`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


