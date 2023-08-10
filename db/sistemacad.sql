-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 10-Ago-2023 às 17:20
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemacad`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cad`
--

DROP TABLE IF EXISTS `tb_cad`;
CREATE TABLE IF NOT EXISTS `tb_cad` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `IDADE` int(50) NOT NULL,
  `TEL01` varchar(50) DEFAULT NULL,
  `TEL02` varchar(50) DEFAULT NULL,
  `ENDERECO` varchar(50) DEFAULT NULL,
  `ESCOLARIDADE` varchar(50) NOT NULL,
  `CPF` int(50) DEFAULT NULL,
  `NOME_PAI` varchar(50) NOT NULL,
  `NOME_MAE` varchar(50) NOT NULL,
  `NATURALIDADE` varchar(30) NOT NULL,
  `UF` varchar(10) NOT NULL,
  `ESPECIALIDADE` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `CPF` (`CPF`),
  UNIQUE KEY `TEL01` (`TEL01`),
  UNIQUE KEY `TEL02` (`TEL02`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cad`
--

INSERT INTO `tb_cad` (`ID`, `NOME`, `EMAIL`, `IDADE`, `TEL01`, `TEL02`, `ENDERECO`, `ESCOLARIDADE`, `CPF`, `NOME_PAI`, `NOME_MAE`, `NATURALIDADE`, `UF`, `ESPECIALIDADE`) VALUES
(1, 'Roberto Gomes Ritch', 'roberto_ritch@gmail.com', 24, '(55) 98456-9823', '(55) 98466-9478', 'Rua Flores Silvio ', 'SELECIONE:', 506729901, 'Julio Mauro Siase', 'Maria Pezzin Silva', 'Santa Maria', 'RS', 'Enfermagem');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cad01`
--

DROP TABLE IF EXISTS `tb_cad01`;
CREATE TABLE IF NOT EXISTS `tb_cad01` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `IDADE` int(50) NOT NULL,
  `TEL01` varchar(50) NOT NULL,
  `TEL02` varchar(50) NOT NULL,
  `ENDERECO` varchar(50) NOT NULL,
  `ESCOLARIDADE` varchar(50) NOT NULL,
  `CPF` int(50) NOT NULL,
  `NOME_PAI` varchar(50) NOT NULL,
  `NOME_MAE` varchar(50) NOT NULL,
  `NATURALIDADE` varchar(50) NOT NULL,
  `UF` varchar(50) NOT NULL,
  `ESPECIALIDADE` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `CPF` (`CPF`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cad01`
--

INSERT INTO `tb_cad01` (`ID`, `NOME`, `EMAIL`, `IDADE`, `TEL01`, `TEL02`, `ENDERECO`, `ESCOLARIDADE`, `CPF`, `NOME_PAI`, `NOME_MAE`, `NATURALIDADE`, `UF`, `ESPECIALIDADE`) VALUES
(1, 'Maria Luiza Goes', 'marialg_12@gmail.com', 37, '(55) 99423-2301', '(55) 99503-1323', 'Rua Flores Dias', 'ENSINO SUPERIOR - Incompleto', 50872001, 'Mario Luiz Goes', 'Julia Almeida Goes', 'Cacequi', 'RS', 'Nenhuma Especialidade');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cad02`
--

DROP TABLE IF EXISTS `tb_cad02`;
CREATE TABLE IF NOT EXISTS `tb_cad02` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `IDADE` int(50) NOT NULL,
  `TEL01` varchar(50) NOT NULL,
  `TEL02` varchar(50) NOT NULL,
  `ENDERECO` varchar(50) NOT NULL,
  `ESCOLARIDADE` varchar(50) NOT NULL,
  `CPF` int(50) NOT NULL,
  `NOME_PAI` varchar(50) NOT NULL,
  `NOME_MAE` varchar(50) NOT NULL,
  `NATURALIDADE` varchar(50) NOT NULL,
  `UF` varchar(50) NOT NULL,
  `ESPECIALIDADE` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `CPF` (`CPF`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cad02`
--

INSERT INTO `tb_cad02` (`ID`, `NOME`, `EMAIL`, `IDADE`, `TEL01`, `TEL02`, `ENDERECO`, `ESCOLARIDADE`, `CPF`, `NOME_PAI`, `NOME_MAE`, `NATURALIDADE`, `UF`, `ESPECIALIDADE`) VALUES
(1, 'Carlos Alberto ', 'carlosa2003@gmail.com', 46, '(55) 984565-9087', '(55) 98456-5676', 'Rua Rui Costa X', 'ENSINO TÃ‰CNICO', 2334787, 'FÃ¡bio Julis', 'Carmen Julis Silva', 'RosÃ¡rio ', 'RS', 'Contabilidade');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cad03`
--

DROP TABLE IF EXISTS `tb_cad03`;
CREATE TABLE IF NOT EXISTS `tb_cad03` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `IDADE` int(50) NOT NULL,
  `TEL01` varchar(50) NOT NULL,
  `TEL02` varchar(50) NOT NULL,
  `ENDERECO` varchar(50) NOT NULL,
  `ESCOLARIDADE` varchar(50) NOT NULL,
  `CPF` int(50) NOT NULL,
  `NOME_PAI` varchar(50) NOT NULL,
  `NOME_MAE` varchar(50) NOT NULL,
  `NATURALIDADE` varchar(50) NOT NULL,
  `UF` varchar(50) NOT NULL,
  `ESPECIALIDADE` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `CPF` (`CPF`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cad03`
--

INSERT INTO `tb_cad03` (`ID`, `NOME`, `EMAIL`, `IDADE`, `TEL01`, `TEL02`, `ENDERECO`, `ESCOLARIDADE`, `CPF`, `NOME_PAI`, `NOME_MAE`, `NATURALIDADE`, `UF`, `ESPECIALIDADE`) VALUES
(1, 'Liza Gomes Lunkr', 'liza_g@gmail.com', 56, '(55) 98456-9878', '(55) 98456-9412', 'Av. General Costa ', 'ENSINO SUPERIOR - Completo', 4532099, 'Rui Silva ', 'Clara Gomes Lunkr', 'Caxias', 'RS', 'Enfermagem');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cad04`
--

DROP TABLE IF EXISTS `tb_cad04`;
CREATE TABLE IF NOT EXISTS `tb_cad04` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `IDADE` int(50) NOT NULL,
  `TEL01` varchar(50) NOT NULL,
  `TEL02` varchar(50) NOT NULL,
  `ENDERECO` varchar(50) NOT NULL,
  `ESCOLARIDADE` varchar(50) NOT NULL,
  `CPF` int(50) NOT NULL,
  `NOME_PAI` varchar(50) NOT NULL,
  `NOME_MAE` varchar(50) NOT NULL,
  `NATURALIDADE` varchar(50) NOT NULL,
  `UF` varchar(50) NOT NULL,
  `ESPECIALIDADE` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `CPF` (`CPF`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cad04`
--

INSERT INTO `tb_cad04` (`ID`, `NOME`, `EMAIL`, `IDADE`, `TEL01`, `TEL02`, `ENDERECO`, `ESCOLARIDADE`, `CPF`, `NOME_PAI`, `NOME_MAE`, `NATURALIDADE`, `UF`, `ESPECIALIDADE`) VALUES
(1, 'Pedro Tulzt Silva', 'pedro_lu@gmail.com', 34, '(55) 98434-9878', '(55) 98456-9811', '', 'ENSINO FUNDAMENTAL - Completo', 9034554, 'Julio Milk Clarus', 'Marialia Tulzt Souza', 'Uruguaiana', 'RS', 'Nenhuma Especialidade');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cad05`
--

DROP TABLE IF EXISTS `tb_cad05`;
CREATE TABLE IF NOT EXISTS `tb_cad05` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `IDADE` int(50) NOT NULL,
  `TEL01` varchar(50) NOT NULL,
  `TEL02` varchar(50) NOT NULL,
  `ENDERECO` varchar(50) NOT NULL,
  `ESCOLARIDADE` varchar(50) NOT NULL,
  `CPF` int(50) NOT NULL,
  `NOME_PAI` varchar(50) NOT NULL,
  `NOME_MAE` varchar(50) NOT NULL,
  `NATURALIDADE` varchar(50) NOT NULL,
  `UF` varchar(50) NOT NULL,
  `ESPECIALIDADE` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `CPF` (`CPF`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cad05`
--

INSERT INTO `tb_cad05` (`ID`, `NOME`, `EMAIL`, `IDADE`, `TEL01`, `TEL02`, `ENDERECO`, `ESCOLARIDADE`, `CPF`, `NOME_PAI`, `NOME_MAE`, `NATURALIDADE`, `UF`, `ESPECIALIDADE`) VALUES
(1, 'Roberto Gomes Ritch', 'roberto_ritch@gmail.com', 24, '(55) 98456-9823', '(55) 98466-9478', 'Rua Flores Silvio ', 'ENSINO TÃ‰CNICO', 5423677, 'Mario Lutz', 'Ana Gomes Ritch', 'Bauru', 'SP', 'Enfermagem');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
