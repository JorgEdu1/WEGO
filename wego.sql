-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.22-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela wego.clientes: ~11 rows (aproximadamente)
DELETE FROM `clientes`;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id`, `nome`, `email`, `senha`, `telefone`, `endereco`, `cidade`, `data_nasc`) VALUES
	(1, 'Jorge Eduardo Silva Sousa', 'je33542@gmail.com', '12345678', '87991392585', 'ruazinha la', 'Terra Nova-PE', '2002-05-29'),
	(2, 'Jorge Eduardo Silva Sousa', 'je33542@gmail.com', '12345678', '87991392585', 'ruazinha la', 'Terra Nova-PE', '2002-05-29'),
	(3, 'Jorge Eduardo Silva Sousa', 'je33542@gmail.com', '12345678', '87991392585', 'ruazinha la', 'Terra Nova-PE', '2002-05-29'),
	(4, 'Joao Vitorfr4fefw', 'mascote1@gmail.com', '123456', '63636363', 'rua de salgueiro', 'Terra Nova-PE', '2001-05-02'),
	(5, 'Joao ze augusto feitosa', '', 'leo123456', '999999999', 'Rua que dobra', 'Salgueiro-PE', '2022-03-08'),
	(6, 'Leonardo 1', '', 'leo123456', '999999999', 'rua que dobra', 'Parnamirim-PE', '1995-02-08'),
	(8, 'Leonardo', 'leonardo@gmail.com', '12345678', '87120912021', 'Rua que dobra', 'Salgueiro-PE', '1996-05-29'),
	(9, 'Teste o final', 'teste@gmail.com', 'teste1234', '9999999999999', 'Rua do teste', 'Salgueiro-PE', '1999-07-08'),
	(10, 'medlbis', 'melbis@123', '123', '+5587991392585', 'ruazinha la', 'Salgueiro-PE', '5050-05-10'),
	(11, 'pedo', 'pedo@123', 'pedo', '9999999999999', 'Rua que dobra', 'Parnamirim-PE', '1001-02-05');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
