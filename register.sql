CREATE TABLE `register` (
  `id` int(3) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `secondname` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `rollno` int(4) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(18) NOT NULL,
  `skill` varchar(15) NOT NULL,
  `level` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);


ALTER TABLE `register`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

