-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Set-2021 às 14:43
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `desafio_leo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` text DEFAULT NULL,
  `slideshow` varchar(255) DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `img`, `titulo`, `descricao`, `slideshow`, `users_id`) VALUES
(1, '1.png', 'Primeiro curso', 'Este é meu primeiro curso cadastrado...', 'http://www.slideshow.com.br/curso1', 1),
(2, '2.jpg', 'Segundo curso', 'Descrição do segundo curso', 'http://www.slideshow.com.br/curso2', 1),
(3, '3.png', 'Terceiro curso', 'Descrição do terceiro curso', 'http://www.slideshow.com.br/curso3', 1),
(4, '4.jpg', 'Quarto curso', 'Descrição do quarto curso', 'http://www.slideshow.com.br/curso4', 1),
(5, '5.jpg', 'Quinto curso', 'Descrição do quinto curso', 'http://www.slideshow.com.br/curso4', 1),
(6, '6.jpg', 'Sexto curso', 'Descrição do sexto curso', 'http://www.slideshow.com.br/curso6', 1),
(7, '7.jpg', 'Sétimo curso', 'Descrição do sétimo curso', 'http://www.slideshow.com.br/curso7', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` char(32) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `modal` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `senha`, `img`, `modal`) VALUES
(1, 'Usuário teste 1', 'teste@prov.com', '', '1.jpg', ''),
(2, 'Usuário teste 2', 'Usuarioteste2@gmail.com', '', '2.jpg', ''),
(3, 'Usuário teste 3', 'Usuarioteste3@gmail.com', '', '3.jpg', ''),
(4, 'Usuário teste 4', 'Usuarioteste4@gmail.com', '', '4.jpg', ''),
(5, 'Usuário teste 5', 'Usuarioteste5@gmail.com', '', '5.jpg', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`,`users_id`),
  ADD KEY `fk_cursos_users_idx` (`users_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `fk_cursos_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
