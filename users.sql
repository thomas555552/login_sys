-- Kiszolgáló verziója: 10.1.38-MariaDB
-- PHP verzió: 7.3.2
-- Adatbázis: `login_sys`

-- --------------------------------------------------------

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL
);


INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'test123', 'BFD59291E825B5F2BBF1EB76569F8FE7'),
(2, 'admin', '0192023A7BBD73250516F069DF18B500'); 
-- username: test123 | pw: asd123
-- username: admin | pw: admin


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

