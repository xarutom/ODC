-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/06/2022 às 07:11
-- Versão do servidor: 10.4.24-MariaDB
-- Versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `odc`
--
CREATE DATABASE odc;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--
use odc;
CREATE TABLE `cliente` (
  `codCliente` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(80) NOT NULL,
  `dataNascimento` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `numero` varchar(6) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`codCliente`, `nome`, `sobrenome`, `dataNascimento`, `email`, `celular`, `senha`, `cep`, `logradouro`, `numero`, `complemento`, `estado`, `cidade`, `bairro`) VALUES
(1, 'ODC', 'Orgânicos de Casa', '01/05/2022', 'odcadm@odc.com.br', '(11) 99999-9999', '123', '08999-000', 'Rua da Feira', '5000', '', 'SP', 'São Paulo', 'Central');

-- --------------------------------------------------------

--
-- Estrutura para tabela `estado`
--

CREATE TABLE `estado` (
  `uf` varchar(2) NOT NULL,
  `estado` varchar(19) NOT NULL,
  `cidade` varchar(14) NOT NULL,
  `regiao` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `estado`
--

INSERT INTO `estado` (`uf`, `estado`, `cidade`, `regiao`) VALUES
('AC', 'Acre', 'Rio Branco', 'Norte'),
('AL', 'Alagoas', 'Maceió', 'Nordeste'),
('AM', 'Amazonas', 'Manaus', 'Norte'),
('AP', 'Amapá', 'Macapá', 'Norte'),
('BA', 'Bahia', 'Salvador', 'Nordeste'),
('CE', 'Ceará', 'Fortaleza', 'Nordeste'),
('ES', 'Espírito Santo', 'Vitória', 'Sudeste'),
('GO', 'Goiás', 'Goiânia', 'Centro-Oeste'),
('MA', 'Maranhão', 'São Luiz', 'Nordeste'),
('MG', 'Minas Gerais', 'Belo Horizonte', 'Sudeste'),
('MS', 'Mato Grosso Do Sul', 'Campo Grande', 'Centro-Oeste'),
('MT', 'Mato Grosso', 'Cuiabá', 'Centro-Oeste'),
('PA', 'Pará', 'Belém', 'Norte'),
('PB', 'Paraíba', 'João Pessoa', 'Nordeste'),
('PE', 'Pernambuco', 'Recife', 'Nordeste'),
('PI', 'Piauí', 'Terezina', 'Nordeste'),
('PR', 'Paraná', 'Curitiba', 'Sul'),
('RJ', 'Rio De Janeiro', 'Rio De Janeiro', 'Sudeste'),
('RN', 'Rio Grande Do Norte', 'Natal', 'Nordeste'),
('RO', 'Rondônia', 'Porto Velho', 'Norte'),
('RR', 'Roraima', 'Boa Vista', 'Norte'),
('RS', 'Rio Grande Do Sul', 'Porto Alegre', 'Sul'),
('SC', 'Santa Catarina', 'Florianópolis', 'Sul'),
('SE', 'Sergipe', 'Aracajú', 'Nordeste'),
('SP', 'São Paulo', 'São Paulo', 'Sudeste'),
('TO', 'Tocantins', 'Palmas', 'Norte');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `idFornecedor` int(11) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `inscricaoEstadual` varchar(16) NOT NULL,
  `razaoSocial` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `cep` varchar(11) NOT NULL,
  `logradouro` varchar(9) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `complemento` varchar(6) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `fornecedor`
--

INSERT INTO `fornecedor` (`idFornecedor`, `cnpj`, `inscricaoEstadual`, `razaoSocial`, `email`, `telefone`, `senha`, `cep`, `logradouro`, `numero`, `complemento`, `estado`, `cidade`, `bairro`) VALUES
(1, '11.222.333/0001-10', '999.888.777/6666', 'Fazenda Mineira Alimentos LTDA', 'fazenda@mineira.com.br', '(11) 2222-2222', '123', '08000-002', 'Rua Serri', '5025', '', 'MG', 'Nova Rezende', 'Sertãozinho');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `codproduto` int(10) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `preco` float NOT NULL,
  `quantidade` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`codproduto`, `descricao`, `categoria`, `preco`, `quantidade`) VALUES
(1, 'Abacate', 'Fruta', 6, 105),
(2, 'Abacaxi', 'Fruta', 7.9, 80),
(3, 'Laranja', 'Fruta', 0.9, 150),
(4, 'Limão', 'Fruta', 0.5, 350),
(5, 'Maça', 'Fruta', 0.8, 210),
(6, 'Morango', 'Fruta', 13, 80),
(7, 'Moranga', 'Verdura', 4.25, 100),
(8, 'Alface Crespa', 'Verdura', 2.9, 154),
(9, 'Cebolinha', 'Verdura', 3.5, 40),
(10, 'Couve', 'Verdura', 2.5, 100),
(11, 'Rabanete', 'Verdura', 7.7, 70),
(12, 'Salsa', 'Verdura', 3.5, 200),
(13, 'Cebola Roxa\r\n', 'Legume', 3.7, 340),
(14, 'Cenoura', 'Legume', 1.5, 410),
(15, 'Mandioquinha', 'Legume', 14, 171),
(16, 'Milho Verde', 'Legume', 7, 180),
(17, 'Pimentão Verde', 'Legume', 3.9, 174),
(18, 'Tomate', 'Legume', 6.9, 190);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codCliente`);

--
-- Índices de tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`uf`);

--
-- Índices de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`idFornecedor`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codproduto`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `idFornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `codproduto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
