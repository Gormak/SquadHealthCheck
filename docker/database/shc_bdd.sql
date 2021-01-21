/*CREATE DATABASE IF NOT EXISTS shc_bdd CHARACTER SET utf8;
CREATE USER 'shc'@'localhost' IDENTIFIED BY 'shc';
GRANT ALL PRIVILEGES ON shc_bdd.* TO 'shc'@'localhost';


USE shc_bdd;*/

CREATE TABLE `shc_results` (
  `id` int(11) NOT NULL,
  `team` varchar(10) NOT NULL,
  `label` text NOT NULL,
  `value` int(11) NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `shc_session` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `token` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `shc_results`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `shc_session`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `shc_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `shc_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


