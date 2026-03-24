CREATE TABLE `restaurantes` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `id_ilha` integer,
  `nome` varchar(255),
  `localização` varchar(255)
);

CREATE TABLE `alojamentos` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `id_ilha` integer,
  `nome` varchar(255),
  `localização` varchar(255)
);

CREATE TABLE `visitar` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `id_ilha` integer,
  `nome` varchar(255),
  `localização` varchar(255)
);

ALTER TABLE `restaurantes` ADD FOREIGN KEY (`id_ilha`) REFERENCES `ilhas` (`id`);

ALTER TABLE `alojamentos` ADD FOREIGN KEY (`id_ilha`) REFERENCES `ilhas` (`id`);

ALTER TABLE `visitar` ADD FOREIGN KEY (`id_ilha`) REFERENCES `ilhas` (`id`);