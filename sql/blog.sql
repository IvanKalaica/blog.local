DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS posts;
DROP TABLE IF EXISTS user_posts;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT NOW(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO users (username, password, email) VALUES 
('Ivan', '2c42e5cf1cdbafea04ed267018ef1511', 'ivan@inchoo.net'),
('Darko', 'e226ea00e098456a7a75d04a67c4199e', 'darko.goles@inchoo.net'),
('Branko', 'e226ea00e098456a7a75d04a67c4199e', 'branko.ajzele@inchoo.net'),
('Pero', 'e0930567dc04aa6771e01634e7733fcd', 'pero@inchoo.net');

CREATE TABLE `posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(225) DEFAULT NULL,
  `content` text,
  `created_at` timestamp NOT NULL DEFAULT NOW(),
  `modified_at` DATE DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO posts (title, content) VALUES 
('Making blod db structure', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet ligula non est pretium luctus vitae facilisis tortor. Morbi nulla massa, adipiscing id varius ut, dignissim vulputate dolor. Curabitur consequat, elit quis egestas posuere, nibh orci tincidunt dui, id tincidunt urna ipsum in dui. Fusce sit amet risus leo. Nam dapibus risus sit amet justo viverra nec cursus dolor tempor. Sed vitae ultrices arcu. Aliquam hendrerit, odio ac aliquam laoreet, tortor mauris dictum tortor, ut adipiscing ipsum lectus at lectus. Curabitur non odio eu diam luctus tempus. Sed sodales orci eu arcu convallis elementum. Ut placerat purus nec sem cursus ac posuere magna elementum. Donec vitae tortor metus, in semper orci. Praesent rutrum scelerisque tortor a pulvinar. Vestibulum pulvinar felis mi. In at diam nec ligula fermentum euismod. Nunc non porta tortor.'),
('Learing Magento', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet ligula non est pretium luctus vitae facilisis tortor. Morbi nulla massa, adipiscing id varius ut, dignissim vulputate dolor. Curabitur consequat, elit quis egestas posuere, nibh orci tincidunt dui, id tincidunt urna ipsum in dui. Fusce sit amet risus leo. Nam dapibus risus sit amet justo viverra nec cursus dolor tempor. Sed vitae ultrices arcu. Aliquam hendrerit, odio ac aliquam laoreet, tortor mauris dictum tortor, ut adipiscing ipsum lectus at lectus. Curabitur non odio eu diam luctus tempus. Sed sodales orci eu arcu convallis elementum. Ut placerat purus nec sem cursus ac posuere magna elementum. Donec vitae tortor metus, in semper orci. Praesent rutrum scelerisque tortor a pulvinar. Vestibulum pulvinar felis mi. In at diam nec ligula fermentum euismod. Nunc non porta tortor.'),
('Helping others', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet ligula non est pretium luctus vitae facilisis tortor. Morbi nulla massa, adipiscing id varius ut, dignissim vulputate dolor. Curabitur consequat, elit quis egestas posuere, nibh orci tincidunt dui, id tincidunt urna ipsum in dui. Fusce sit amet risus leo. Nam dapibus risus sit amet justo viverra nec cursus dolor tempor. Sed vitae ultrices arcu. Aliquam hendrerit, odio ac aliquam laoreet, tortor mauris dictum tortor, ut adipiscing ipsum lectus at lectus. Curabitur non odio eu diam luctus tempus. Sed sodales orci eu arcu convallis elementum. Ut placerat purus nec sem cursus ac posuere magna elementum. Donec vitae tortor metus, in semper orci. Praesent rutrum scelerisque tortor a pulvinar. Vestibulum pulvinar felis mi. In at diam nec ligula fermentum euismod. Nunc non porta tortor.');

CREATE TABLE `user_posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO user_posts (user_id, post_id) VALUES 
(1, 1),
(1, 2),
(2, 2),
(3, 3);