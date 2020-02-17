CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `products` (`id`, `title`, `price`,`quantity`) VALUES
(1, 'Manteau Fashion', '99.99','1'),
(2, 'Item Deux', '29.99','1'),
(3, 'Item Trois', '29.99','1'),
(4, 'Item Quatre', '29.99','1'),
(5, 'Item Cinq', '29.99','1'),
(6, 'Item Six', '29.99','1');SELECT * FROM `products` WHERE 1
