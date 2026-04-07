-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2026 at 11:01 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ilha dos açores`
--

-- --------------------------------------------------------

--
-- Table structure for table `alojamentos`
--

CREATE TABLE `alojamentos` (
  `id` int NOT NULL,
  `id_ilha` int DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `localização` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `alojamentos`
--

INSERT INTO `alojamentos` (`id`, `id_ilha`, `nome`, `localização`) VALUES
(1, 1, 'Herdade do Ananás', 'Canada dos Prestes de Cima, 21 São Roque, 9500-450 São Roque'),
(2, 1, 'Azor Hotel', 'Av. Dr. João Bosco Mota Amaral, 4, 9500-771 Ponta Delgada'),
(3, 1, 'CFS Azores Guest House\r\n', 'Estrada Regional da Ribeira Grande 978 São Roque, 9500-702 Ponta Delgada'),
(4, 1, 'Solar Branco Eco Estate & Boutique Hotel', 'Solar Branco Eco Estate, 9500-604 Ponta Delgada'),
(5, 1, 'Volcanic Charming House', 'R. de Nossa Sra. do Vencimento 76, 9600-570 Ribeira Grande'),
(6, 1, 'Caloura Hotel Resort\r\n', 'Rua do Jubileu 27, 9560-206 Água de Pau'),
(7, 2, 'Apartamento Bela Vista AL', 'Caminho da Esperança 37, 9700-351 Angra do Heroísmo'),
(8, 2, 'Memória Charming House', 'R. da Miragaia nº15, 9700-124 Angra do Heroísmo'),
(9, 2, 'Atlântida Mar Hotel', 'Boavista, 9, 9760-557 Praia da Vitória'),
(10, 2, 'Terceira Mar Hotel', 'Portões de São Pedro, nº 1, 9700-097 Angra do Heroísmo'),
(11, 3, 'Picodreams', 'Rua do Laranjal nº9, 9940-308 São Roque do Pico'),
(12, 3, 'Lava Homes', 'Travessa do Outeiro das Eiras 2A, 9940-185 Terra Alta'),
(13, 3, 'Aldeia Das Adegas\r\n', 'Rua das Adegas, 9940-345 São Roque do Pico'),
(14, 3, 'Paraíso do Triângulo', 'Rua do, 9940-108 Lajido');

-- --------------------------------------------------------

--
-- Table structure for table `ilhas`
--

CREATE TABLE `ilhas` (
  `id` int NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `população` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ilhas`
--

INSERT INTO `ilhas` (`id`, `nome`, `população`) VALUES
(1, 'São Miguel', 140000),
(2, 'Terceira', 53000),
(3, 'Pico', 14000),
(4, 'Faial', 15000),
(5, 'São Jorge', 8500),
(6, 'Santa Maria', 5500),
(7, 'Graciosa', 4300),
(8, 'Flores', 3500),
(9, 'Corvo', 400);

-- --------------------------------------------------------

--
-- Table structure for table `restaurantes`
--

CREATE TABLE `restaurantes` (
  `id` int NOT NULL,
  `id_ilha` int DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `localização` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `restaurantes`
--

INSERT INTO `restaurantes` (`id`, `id_ilha`, `nome`, `localização`) VALUES
(1, 1, 'Restaurante O Silva', 'R. Direita de Cima 41, 9600-221 Ribeira Grande'),
(2, 1, 'Sabores da terra', 'Largo do Jardim Mun. n° 12, 9650-410 Povoação'),
(3, 1, 'Alma Latina', 'R. do Porto 13, 9560-043 Lagoa'),
(4, 2, 'O Cachalote', 'R. do Rego 14, 9700-166 Angra do Heroísmo'),
(5, 2, 'Tasca Boca Santa', 'Rua de Santo Espirito 7, 9700-178 Angra do Heroísmo'),
(6, 2, 'A Barrica', 'Rua de Sāo Joāo 28, 9700-171 Angra do Heroísmo'),
(7, 3, 'O Lavrador', 'Estrada Regional 3 Silveira Ilha Do Pico'),
(8, 3, 'Boca do Forno Restaurante', 'Rua padre manuel jose lopes 13a, 9930-153 Lajes do Pico'),
(9, 4, 'Campo dos Sabores', 'Almances de Cima n. 35, Horta'),
(10, 4, 'Canto da Doca', 'Rua Nova, 9900-038 Horta'),
(11, 5, 'O Branquinho', 'Ribeira do Belo 48, 9800-210 Rosais'),
(12, 5, 'Taberna \"o Convés\"\r\n', 'Fajã Caldeira do Senhor Santo Cristo, 9850-205 Ilha de São Jorge'),
(13, 6, 'O Descobridor', 'R. Frei Gonçalo Velho, 9580-531 Vila do Porto'),
(14, 6, 'Cantinho da Vila', 'R. Dr. Luís Bettencourt 24, 9580-533 Vila do Porto'),
(15, 7, 'Cardoso Bar', 'EN1-2, 9880-382 Santa Cruz da Graciosa'),
(16, 7, 'Restaurante Estrela do Mar\r\n', '12, Porta da Folga'),
(17, 8, '\"O Mergulhador\"\r\n', 'R. Dr. Armas da Silveira 30 R/C, 9970-320 Santa Cruz das Flores'),
(18, 9, 'Restaurante Irmãos Metralha\r\n', 'R. Joaquim Pedro Coelho, 9980-037 Corvo'),
(19, 9, 'Izzy Burger\r\n', 'Estr. do Caldeirão, Corvo'),
(20, 8, 'Chico do Norte', 'Rua Terra chã s/n, 9970-078 Ponta Delgada');

-- --------------------------------------------------------

--
-- Table structure for table `visitar`
--

CREATE TABLE `visitar` (
  `id` int NOT NULL,
  `id_ilha` int DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `localização` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alojamentos`
--
ALTER TABLE `alojamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ilha` (`id_ilha`);

--
-- Indexes for table `ilhas`
--
ALTER TABLE `ilhas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurantes`
--
ALTER TABLE `restaurantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ilha` (`id_ilha`);

--
-- Indexes for table `visitar`
--
ALTER TABLE `visitar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ilha` (`id_ilha`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alojamentos`
--
ALTER TABLE `alojamentos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ilhas`
--
ALTER TABLE `ilhas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `restaurantes`
--
ALTER TABLE `restaurantes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `visitar`
--
ALTER TABLE `visitar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alojamentos`
--
ALTER TABLE `alojamentos`
  ADD CONSTRAINT `alojamentos_ibfk_1` FOREIGN KEY (`id_ilha`) REFERENCES `ilhas` (`id`);

--
-- Constraints for table `restaurantes`
--
ALTER TABLE `restaurantes`
  ADD CONSTRAINT `restaurantes_ibfk_1` FOREIGN KEY (`id_ilha`) REFERENCES `ilhas` (`id`);

--
-- Constraints for table `visitar`
--
ALTER TABLE `visitar`
  ADD CONSTRAINT `visitar_ibfk_1` FOREIGN KEY (`id_ilha`) REFERENCES `ilhas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
