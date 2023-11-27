-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/11/2023 às 01:49
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bombeiro_dggmt`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `associacao_local_trauma`
--

CREATE TABLE `associacao_local_trauma` (
  `id_associacao` int(11) NOT NULL,
  `id_local_trauma` int(11) DEFAULT NULL,
  `id_trauma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `associacao_local_trauma`
--

INSERT INTO `associacao_local_trauma` (`id_associacao`, `id_local_trauma`, `id_trauma`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 2, 1),
(11, 2, 2),
(12, 2, 3),
(13, 2, 4),
(14, 2, 5),
(15, 2, 6),
(16, 2, 7),
(17, 2, 8),
(18, 2, 9),
(19, 3, 1),
(20, 3, 2),
(21, 3, 3),
(22, 3, 4),
(23, 3, 5),
(24, 3, 6),
(25, 3, 7),
(26, 3, 8),
(27, 3, 9),
(28, 4, 1),
(29, 4, 2),
(30, 4, 3),
(31, 4, 4),
(32, 4, 5),
(33, 4, 6),
(34, 4, 7),
(35, 4, 8),
(36, 4, 9),
(37, 5, 1),
(38, 5, 2),
(39, 5, 3),
(40, 5, 4),
(41, 5, 5),
(42, 5, 6),
(43, 5, 7),
(44, 5, 8),
(45, 5, 9),
(46, 6, 1),
(47, 6, 2),
(48, 6, 3),
(49, 6, 4),
(50, 6, 5),
(51, 6, 6),
(52, 6, 7),
(53, 6, 8),
(54, 6, 9),
(55, 7, 1),
(56, 7, 2),
(57, 7, 3),
(58, 7, 4),
(59, 7, 5),
(60, 7, 6),
(61, 7, 7),
(62, 7, 8),
(63, 7, 9),
(64, 8, 1),
(65, 8, 2),
(66, 8, 3),
(67, 8, 4),
(68, 8, 5),
(69, 8, 6),
(70, 8, 7),
(71, 8, 8),
(72, 8, 9),
(73, 9, 1),
(74, 9, 2),
(75, 9, 3),
(76, 9, 4),
(77, 9, 5),
(78, 9, 6),
(79, 9, 7),
(80, 9, 8),
(81, 9, 9),
(82, 10, 1),
(83, 10, 2),
(84, 10, 3),
(85, 10, 4),
(86, 10, 5),
(87, 10, 6),
(88, 10, 7),
(89, 10, 8),
(90, 10, 9),
(91, 11, 1),
(92, 11, 2),
(93, 11, 3),
(94, 11, 4),
(95, 11, 5),
(96, 11, 6),
(97, 11, 7),
(98, 11, 8),
(99, 11, 9),
(100, 12, 1),
(101, 12, 2),
(102, 12, 3),
(103, 12, 4),
(104, 12, 5),
(105, 12, 6),
(106, 12, 7),
(107, 12, 8),
(108, 12, 9),
(109, 13, 1),
(110, 13, 2),
(111, 13, 3),
(112, 13, 4),
(113, 13, 5),
(114, 13, 6),
(115, 13, 7),
(116, 13, 8),
(117, 13, 9),
(118, 14, 1),
(119, 14, 2),
(120, 14, 3),
(121, 14, 4),
(122, 14, 5),
(123, 14, 6),
(124, 14, 7),
(125, 14, 8),
(126, 14, 9),
(127, 15, 1),
(128, 15, 2),
(129, 15, 3),
(130, 15, 4),
(131, 15, 5),
(132, 15, 6),
(133, 15, 7),
(134, 15, 8),
(135, 15, 9),
(136, 16, 1),
(137, 16, 2),
(138, 16, 3),
(139, 16, 4),
(140, 16, 5),
(141, 16, 6),
(142, 16, 7),
(143, 16, 8),
(144, 16, 9),
(145, 17, 1),
(146, 17, 2),
(147, 17, 3),
(148, 17, 4),
(149, 17, 5),
(150, 17, 6),
(151, 17, 7),
(152, 17, 8),
(153, 17, 9),
(154, 18, 1),
(155, 18, 2),
(156, 18, 3),
(157, 18, 4),
(158, 18, 5),
(159, 18, 6),
(160, 18, 7),
(161, 18, 8),
(162, 18, 9),
(163, 19, 1),
(164, 19, 2),
(165, 19, 3),
(166, 19, 4),
(167, 19, 5),
(168, 19, 6),
(169, 19, 7),
(170, 19, 8),
(171, 19, 9),
(172, 20, 1),
(173, 20, 2),
(174, 20, 3),
(175, 20, 4),
(176, 20, 5),
(177, 20, 6),
(178, 20, 7),
(179, 20, 8),
(180, 20, 9),
(181, 21, 1),
(182, 21, 2),
(183, 21, 3),
(184, 21, 4),
(185, 21, 5),
(186, 21, 6),
(187, 21, 7),
(188, 21, 8),
(189, 21, 9),
(190, 22, 1),
(191, 22, 2),
(192, 22, 3),
(193, 22, 4),
(194, 22, 5),
(195, 22, 6),
(196, 22, 7),
(197, 22, 8),
(198, 22, 9),
(199, 23, 1),
(200, 23, 2),
(201, 23, 3),
(202, 23, 4),
(203, 23, 5),
(204, 23, 6),
(205, 23, 7),
(206, 23, 8),
(207, 23, 9),
(208, 24, 1),
(209, 24, 2),
(210, 24, 3),
(211, 24, 4),
(212, 24, 5),
(213, 24, 6),
(214, 24, 7),
(215, 24, 8),
(216, 24, 9),
(217, 25, 1),
(218, 25, 2),
(219, 25, 3),
(220, 25, 4),
(221, 25, 5),
(222, 25, 6),
(223, 25, 7),
(224, 25, 8),
(225, 25, 9),
(226, 26, 1),
(227, 26, 2),
(228, 26, 3),
(229, 26, 4),
(230, 26, 5),
(231, 26, 6),
(232, 26, 7),
(233, 26, 8),
(234, 26, 9),
(235, 27, 1),
(236, 27, 2),
(237, 27, 3),
(238, 27, 4),
(239, 27, 5),
(240, 27, 6),
(241, 27, 7),
(242, 27, 8),
(243, 27, 9),
(244, 28, 1),
(245, 28, 2),
(246, 28, 3),
(247, 28, 4),
(248, 28, 5),
(249, 28, 6),
(250, 28, 7),
(251, 28, 8),
(252, 28, 9),
(253, 29, 1),
(254, 29, 2),
(255, 29, 3),
(256, 29, 4),
(257, 29, 5),
(258, 29, 6),
(259, 29, 7),
(260, 29, 8),
(261, 29, 9),
(262, 30, 1),
(263, 30, 2),
(264, 30, 3),
(265, 30, 4),
(266, 30, 5),
(267, 30, 6),
(268, 30, 7),
(269, 30, 8),
(270, 30, 9),
(271, 31, 1),
(272, 31, 2),
(273, 31, 3),
(274, 31, 4),
(275, 31, 5),
(276, 31, 6),
(277, 31, 7),
(278, 31, 8),
(279, 31, 9),
(280, 32, 1),
(281, 32, 2),
(282, 32, 3),
(283, 32, 4),
(284, 32, 5),
(285, 32, 6),
(286, 32, 7),
(287, 32, 8),
(288, 32, 9),
(289, 33, 1),
(290, 33, 2),
(291, 33, 3),
(292, 33, 4),
(293, 33, 5),
(294, 33, 6),
(295, 33, 7),
(296, 33, 8),
(297, 33, 9),
(298, 34, 1),
(299, 34, 2),
(300, 34, 3),
(301, 34, 4),
(302, 34, 5),
(303, 34, 6),
(304, 34, 7),
(305, 34, 8),
(306, 34, 9),
(307, 35, 1),
(308, 35, 2),
(309, 35, 3),
(310, 35, 4),
(311, 35, 5),
(312, 35, 6),
(313, 35, 7),
(314, 35, 8),
(315, 35, 9),
(316, 36, 1),
(317, 36, 2),
(318, 36, 3),
(319, 36, 4),
(320, 36, 5),
(321, 36, 6),
(322, 36, 7),
(323, 36, 8),
(324, 36, 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `associacao_trauma_ocorrencia`
--

CREATE TABLE `associacao_trauma_ocorrencia` (
  `id_associacao_trauma_ocorrencia` int(11) NOT NULL,
  `id_ocorrencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacao_glasgow_maior`
--

CREATE TABLE `avaliacao_glasgow_maior` (
  `id_glasgow_maior` int(11) NOT NULL,
  `abertura_ocular` enum('espontanea','comando_verbal','estimulo_doloroso','nenhuma') DEFAULT NULL,
  `resposta_verbal` enum('orientado','confuso','palavras_inapropriadas','palavras_incompreensiveis','nenhuma_resposta_verbal') DEFAULT NULL,
  `resposta_motora` enum('obedece_comandos','localiza_dor','movimento_de_retirada','flexao_anormal','extensao_anormal','nenhuma') DEFAULT NULL,
  `total_gcs` int(2) DEFAULT NULL CHECK (`total_gcs` >= 3 and `total_gcs` <= 15)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacao_glasgow_menor`
--

CREATE TABLE `avaliacao_glasgow_menor` (
  `id_glasgow_menor` int(11) NOT NULL,
  `abertura_ocular` enum('espontanea','comando_verbal','estimulo_doloroso','nenhuma') DEFAULT NULL,
  `resposta_verbal` enum('palavras_frases_apropriadas','palavras_inapropriadas','choro_persistente_gritos','sons_incompreensiveis','nenhuma_resposta_verbal') DEFAULT NULL,
  `resposta_motora` enum('obedece_prontamente','localiza_dor_estimulo_tatil','retirada_do_seguimento_estimulado','flexao_anormal_decorticacao','extensao_anormal_descerebracao','ausencia') DEFAULT NULL,
  `total_gcs` int(2) DEFAULT NULL CHECK (`total_gcs` >= 3 and `total_gcs` <= 15)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `avaliacao_glasgow_menor`
--

INSERT INTO `avaliacao_glasgow_menor` (`id_glasgow_menor`, `abertura_ocular`, `resposta_verbal`, `resposta_motora`, `total_gcs`) VALUES
(1, 'nenhuma', 'nenhuma_resposta_verbal', 'ausencia', 8),
(2, 'comando_verbal', 'nenhuma_resposta_verbal', 'ausencia', 5),
(3, 'comando_verbal', 'choro_persistente_gritos', 'retirada_do_seguimento_estimulado', 7),
(4, 'estimulo_doloroso', 'palavras_inapropriadas', 'retirada_do_seguimento_estimulado', 10),
(6, 'comando_verbal', 'choro_persistente_gritos', 'flexao_anormal_decorticacao', 15),
(7, 'comando_verbal', 'choro_persistente_gritos', 'flexao_anormal_decorticacao', 15),
(8, 'comando_verbal', 'choro_persistente_gritos', 'ausencia', 3),
(9, 'espontanea', 'palavras_frases_apropriadas', 'ausencia', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `decisao_transporte`
--

CREATE TABLE `decisao_transporte` (
  `id_decisao_transporte` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `decisao_transporte`
--

INSERT INTO `decisao_transporte` (`id_decisao_transporte`, `nome`) VALUES
(1, 'estavel'),
(2, 'potencialmenteInstavel'),
(3, 'instavel'),
(4, 'critico');

-- --------------------------------------------------------

--
-- Estrutura para tabela `forma_de_conducao`
--

CREATE TABLE `forma_de_conducao` (
  `id_forma_conducao` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `forma_de_conducao`
--

INSERT INTO `forma_de_conducao` (`id_forma_conducao`, `nome`) VALUES
(1, 'deitada'),
(2, 'semi-dentada'),
(3, 'sentada');

-- --------------------------------------------------------

--
-- Estrutura para tabela `local_trauma`
--

CREATE TABLE `local_trauma` (
  `id_local_trauma` int(11) NOT NULL,
  `local` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `local_trauma`
--

INSERT INTO `local_trauma` (`id_local_trauma`, `local`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35),
(36, 36);

-- --------------------------------------------------------

--
-- Estrutura para tabela `obstetrico`
--

CREATE TABLE `obstetrico` (
  `id_obstetrico` int(11) NOT NULL,
  `nome_obstetrico` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `obstetrico`
--

INSERT INTO `obstetrico` (`id_obstetrico`, `nome_obstetrico`) VALUES
(1, 'partoEmergencial'),
(2, 'gestante'),
(3, 'hemorExcessiva');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ocorrencia`
--

CREATE TABLE `ocorrencia` (
  `id_ocorrencia` int(11) NOT NULL,
  `local_ocorrencia` varchar(60) DEFAULT NULL,
  `data_ocorrencia` datetime DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `id_tipo_ocorrencia` int(11) DEFAULT NULL,
  `id_decisao_transporte` int(11) DEFAULT NULL,
  `id_forma_conducao` int(11) DEFAULT NULL,
  `id_transporte` int(11) DEFAULT NULL,
  `id_vitima_era` int(11) DEFAULT NULL,
  `id_problemas_encontrados_suspeitos` int(11) DEFAULT NULL,
  `id_obstetrico` int(11) DEFAULT NULL,
  `objetos recolhidos` varchar(255) DEFAULT NULL,
  `tip_ocorr_outros` varchar(255) DEFAULT NULL,
  `transporte_outros` varchar(255) DEFAULT NULL,
  `sinais_sint_outros` varchar(255) DEFAULT NULL,
  `termo_recusa_foto` mediumblob DEFAULT NULL,
  `problemas_encontrados_suspeitos_outros` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ocorrencia`
--

INSERT INTO `ocorrencia` (`id_ocorrencia`, `local_ocorrencia`, `data_ocorrencia`, `id_usuario`, `id_paciente`, `id_tipo_ocorrencia`, `id_decisao_transporte`, `id_forma_conducao`, `id_transporte`, `id_vitima_era`, `id_problemas_encontrados_suspeitos`, `id_obstetrico`, `objetos recolhidos`, `tip_ocorr_outros`, `transporte_outros`, `sinais_sint_outros`, `termo_recusa_foto`, `problemas_encontrados_suspeitos_outros`) VALUES
(9, 'Casa', '2023-11-26 21:06:07', 1, 9, 15, 4, 2, 3, 3, 1, NULL, 'Frango', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ocorrencia_avaliacao_glasgowmenor`
--

CREATE TABLE `ocorrencia_avaliacao_glasgowmenor` (
  `id_avaliacao_glasgow_menor` int(11) NOT NULL,
  `id_ocorrencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ocorrencia_avaliacao_glasgowmenor`
--

INSERT INTO `ocorrencia_avaliacao_glasgowmenor` (`id_avaliacao_glasgow_menor`, `id_ocorrencia`) VALUES
(9, 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ocorrencia_avaliação_glasgowmaior`
--

CREATE TABLE `ocorrencia_avaliação_glasgowmaior` (
  `id_avaliação_glasgowmaior` int(11) NOT NULL,
  `id_ocorrencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ocorrencia_sinais_sintomas`
--

CREATE TABLE `ocorrencia_sinais_sintomas` (
  `id_sinais_sintomas` int(11) NOT NULL,
  `id_ocorrencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ocorrencia_sinais_sintomas`
--

INSERT INTO `ocorrencia_sinais_sintomas` (`id_sinais_sintomas`, `id_ocorrencia`) VALUES
(9, 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ocorrencia_sinais_vitais`
--

CREATE TABLE `ocorrencia_sinais_vitais` (
  `id_ocorrencia` int(11) NOT NULL,
  `id_sinais_vitais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ocorrencia_sinais_vitais`
--

INSERT INTO `ocorrencia_sinais_vitais` (`id_ocorrencia`, `id_sinais_vitais`) VALUES
(9, 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(11) NOT NULL,
  `nome_paciente` varchar(45) DEFAULT NULL,
  `sobrenome_paciente` varchar(45) DEFAULT NULL,
  `idade_paciente` int(11) DEFAULT NULL,
  `rg_cpf_paciente` varchar(15) DEFAULT NULL,
  `sexo_paciente` enum('Masculino','Feminino') NOT NULL,
  `Nome_acompanhante` varchar(45) DEFAULT NULL,
  `idade_acompanhante` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `nome_paciente`, `sobrenome_paciente`, `idade_paciente`, `rg_cpf_paciente`, `sexo_paciente`, `Nome_acompanhante`, `idade_acompanhante`) VALUES
(1, 'JORGE', 'roger', 13, '645.866.346-53', 'Feminino', 'VILBO', '12'),
(2, 'JORGE', 'roger', 13, '645.866.346-53', 'Feminino', 'VILBO', '12'),
(3, 'JORGE', 'roger', 13, '645.866.346-53', 'Feminino', 'VILBO', '12'),
(4, 'Bruno', 'Souza', 65, '000.000.008-00', 'Masculino', '', '0'),
(5, 'Bruno', 'Souza', 65, '000.000.008-00', 'Masculino', '', '0'),
(6, 'Bruno', 'GILBERTO', 4, '000.000.008-00', 'Masculino', '', '0'),
(7, 'Bruno', 'GILBERTO', 4, '000.000.008-00', 'Masculino', '', '0'),
(8, 'Jorge', 'GILBERTO', 5, '000.000.008-00', 'Feminino', '', '0'),
(9, 'Bruno', 'Jorge', 12, '000.000.008-00', 'Masculino', '', '0');

-- --------------------------------------------------------

--
-- Estrutura para tabela `problemas_encontrados_suspeitos`
--

CREATE TABLE `problemas_encontrados_suspeitos` (
  `id_problemas_encontrados_suspeitos` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `problemas_encontrados_suspeitos`
--

INSERT INTO `problemas_encontrados_suspeitos` (`id_problemas_encontrados_suspeitos`, `nome`) VALUES
(1, 'Psiquiatrico'),
(2, 'respiratório'),
(3, 'diabetes');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sinais_sintomas`
--

CREATE TABLE `sinais_sintomas` (
  `id_sinais_sintomas` int(11) NOT NULL,
  `abdomen_sensivel_rigido` tinyint(1) DEFAULT NULL,
  `afundamento_de_cranio` tinyint(1) DEFAULT NULL,
  `agitacao` tinyint(1) DEFAULT NULL,
  `amnesia` tinyint(1) DEFAULT NULL,
  `angina_de_peito` tinyint(1) DEFAULT NULL,
  `apneia` tinyint(1) DEFAULT NULL,
  `bradicardia` tinyint(1) DEFAULT NULL,
  `bradipneia` tinyint(1) DEFAULT NULL,
  `bronco_aspirando` tinyint(1) DEFAULT NULL,
  `cefaleia` tinyint(1) DEFAULT NULL,
  `convulsao` tinyint(1) DEFAULT NULL,
  `decorticacao` tinyint(1) DEFAULT NULL,
  `deformidade` tinyint(1) DEFAULT NULL,
  `descerebracao` tinyint(1) DEFAULT NULL,
  `desmaio` tinyint(1) DEFAULT NULL,
  `desvio_de_traqueia` tinyint(1) DEFAULT NULL,
  `dispneia` tinyint(1) DEFAULT NULL,
  `dor_local` tinyint(1) DEFAULT NULL,
  `enfisema_subcutaneo` tinyint(1) DEFAULT NULL,
  `estase_de_jugular` tinyint(1) DEFAULT NULL,
  `face_palida` tinyint(1) DEFAULT NULL,
  `o_v_a_c_e` tinyint(1) DEFAULT NULL,
  `prurido_na_pele` tinyint(1) DEFAULT NULL,
  `sinal_de_battle` tinyint(1) DEFAULT NULL,
  `hipertensao` tinyint(1) DEFAULT NULL,
  `hipotensao` tinyint(1) DEFAULT NULL,
  `nauseas_e_vomitos` tinyint(1) DEFAULT NULL,
  `nasorogia` tinyint(1) DEFAULT NULL,
  `obito` tinyint(1) DEFAULT NULL,
  `otorreia` tinyint(1) DEFAULT NULL,
  `otorracia` tinyint(1) DEFAULT NULL,
  `priaprismo` tinyint(1) DEFAULT NULL,
  `sede` tinyint(1) DEFAULT NULL,
  `sinal_de_guaxinim` tinyint(1) DEFAULT NULL,
  `sudorese` tinyint(1) DEFAULT NULL,
  `taquipineia` tinyint(1) DEFAULT NULL,
  `taquicardiaca` tinyint(1) DEFAULT NULL,
  `tontura` tinyint(1) DEFAULT NULL,
  `cianose` enum('Labios','Extremidades') DEFAULT NULL,
  `edema` enum('Generalizado','Localizado') DEFAULT NULL,
  `hemorragia` enum('Interna','Externa') DEFAULT NULL,
  `parada` enum('Cardiaca','Respiratoria') DEFAULT NULL,
  `pupila` enum('Anisocoria','Isocoria','Midriase','Miose','Reagente','NaoReagente') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sinais_sintomas`
--

INSERT INTO `sinais_sintomas` (`id_sinais_sintomas`, `abdomen_sensivel_rigido`, `afundamento_de_cranio`, `agitacao`, `amnesia`, `angina_de_peito`, `apneia`, `bradicardia`, `bradipneia`, `bronco_aspirando`, `cefaleia`, `convulsao`, `decorticacao`, `deformidade`, `descerebracao`, `desmaio`, `desvio_de_traqueia`, `dispneia`, `dor_local`, `enfisema_subcutaneo`, `estase_de_jugular`, `face_palida`, `o_v_a_c_e`, `prurido_na_pele`, `sinal_de_battle`, `hipertensao`, `hipotensao`, `nauseas_e_vomitos`, `nasorogia`, `obito`, `otorreia`, `otorracia`, `priaprismo`, `sede`, `sinal_de_guaxinim`, `sudorese`, `taquipineia`, `taquicardiaca`, `tontura`, `cianose`, `edema`, `hemorragia`, `parada`, `pupila`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(2, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Labios', 'Generalizado', NULL, NULL, NULL),
(3, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Labios', 'Generalizado', NULL, NULL, NULL),
(4, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL),
(5, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL),
(6, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, NULL, 'Localizado', 'Interna', NULL, 'Miose'),
(7, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, NULL, 'Localizado', 'Interna', NULL, 'Miose'),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sinais_vitais`
--

CREATE TABLE `sinais_vitais` (
  `id_sinais_vitais` int(11) NOT NULL,
  `pressao_arterial` varchar(8) DEFAULT NULL,
  `pulso` varchar(8) DEFAULT NULL,
  `saturacao` varchar(8) DEFAULT NULL,
  `temperatura` varchar(8) DEFAULT NULL,
  `perfusao` enum('<2seg','>2seg') DEFAULT NULL,
  `respiracao` varchar(8) DEFAULT NULL,
  `hgt` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sinais_vitais`
--

INSERT INTO `sinais_vitais` (`id_sinais_vitais`, `pressao_arterial`, `pulso`, `saturacao`, `temperatura`, `perfusao`, `respiracao`, `hgt`) VALUES
(1, '21x21', '12', '12', '21', '>2seg', '21', '21'),
(2, '1251x12', '1251', '122', '312', '>2seg', '1251', '1312'),
(3, '22x53', '235', '246', '1', '>2seg', '23', '1312'),
(4, '23x66', '66', '234', '24', '>2seg', '122', '86'),
(5, '23x66', '66', '234', '24', '>2seg', '122', '86'),
(6, '32x67', '76', '55', '30', '<2seg', '90', '45'),
(7, '32x67', '76', '55', '30', '<2seg', '90', '45'),
(8, '678x45', '55', '12', '35', '>2seg', '43', '77'),
(9, '1512x166', '184', '143', '154', '>2seg', '124', '112');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `tipo_nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `tipo_nome`) VALUES
(1, 'bombeiro'),
(2, 'administrador');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_ocorrencia`
--

CREATE TABLE `tipo_ocorrencia` (
  `id_tipo_ocorrencia` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tipo_ocorrencia`
--

INSERT INTO `tipo_ocorrencia` (`id_tipo_ocorrencia`, `nome`) VALUES
(1, 'causada por animais'),
(2, 'com meio de transporte'),
(3, 'desmoronamento/deslizamento'),
(4, 'emergencia medica'),
(5, 'queda de altura 2m'),
(6, 'tentativa de suicidio'),
(7, 'queda propria altura'),
(8, 'afogamento'),
(9, 'agressao'),
(10, 'atropelamento'),
(11, 'choque eletrico'),
(12, 'desabamento'),
(13, 'domestico'),
(14, 'esportiva'),
(15, 'intoxicacao'),
(16, 'queda bicicleta'),
(17, 'queda moto'),
(18, 'queda nivel < 2m'),
(19, 'trabalho'),
(20, 'transferencia'),
(21, 'outros');

-- --------------------------------------------------------

--
-- Estrutura para tabela `transporte`
--

CREATE TABLE `transporte` (
  `id_transporte` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `transporte`
--

INSERT INTO `transporte` (`id_transporte`, `nome`) VALUES
(1, 'aereo'),
(2, 'clinico'),
(3, 'emergencial'),
(4, 'pos-trauma'),
(5, 'samu'),
(6, 'sem remocao'),
(7, 'outros');

-- --------------------------------------------------------

--
-- Estrutura para tabela `traumas`
--

CREATE TABLE `traumas` (
  `id_trauma` int(11) NOT NULL,
  `nomes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `traumas`
--

INSERT INTO `traumas` (`id_trauma`, `nomes`) VALUES
(1, 'fraturas'),
(2, 'ferimentos_diversos'),
(3, 'hemorragias'),
(4, 'evisceracao'),
(5, 'F.A.G_F.A.F'),
(6, 'amputacao'),
(7, 'queimadura_1_grau'),
(8, 'queimadura_2_grau'),
(9, 'queimadura_3_grau');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `id_tipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `token`, `senha`, `id_tipo`) VALUES
(1, 'email@gmail.com', '907824e9053efe35621d312d003150d3', 'asdf', 2),
(8, 'carlos@gmail.com', '3b1fbf586a7fdfa9a5a695fb0cd43773', 'qwert', 1),
(9, 'roger@roger.com', NULL, 'roger', 2),
(10, 'maicol@mailcol.com', NULL, 'marico', 1),
(11, 'matheus@gmail.com', NULL, 'matheus', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vitma_era`
--

CREATE TABLE `vitma_era` (
  `id_vitima_era` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `vitma_era`
--

INSERT INTO `vitma_era` (`id_vitima_era`, `nome`) VALUES
(1, 'ciclista'),
(2, 'condutor moto'),
(3, 'sentada'),
(4, 'pas. bco. frente'),
(5, 'pas. moto'),
(6, 'condutor carro'),
(7, 'clinico'),
(8, 'trauma'),
(9, 'pas. bco. tras'),
(10, 'pedestre');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `associacao_local_trauma`
--
ALTER TABLE `associacao_local_trauma`
  ADD PRIMARY KEY (`id_associacao`),
  ADD KEY `id_local_trauma` (`id_local_trauma`),
  ADD KEY `id_trauma` (`id_trauma`);

--
-- Índices de tabela `associacao_trauma_ocorrencia`
--
ALTER TABLE `associacao_trauma_ocorrencia`
  ADD KEY `id_associacao_trauma_ocorrencia` (`id_associacao_trauma_ocorrencia`),
  ADD KEY `id_ocorrencia` (`id_ocorrencia`);

--
-- Índices de tabela `avaliacao_glasgow_maior`
--
ALTER TABLE `avaliacao_glasgow_maior`
  ADD PRIMARY KEY (`id_glasgow_maior`);

--
-- Índices de tabela `avaliacao_glasgow_menor`
--
ALTER TABLE `avaliacao_glasgow_menor`
  ADD PRIMARY KEY (`id_glasgow_menor`);

--
-- Índices de tabela `decisao_transporte`
--
ALTER TABLE `decisao_transporte`
  ADD PRIMARY KEY (`id_decisao_transporte`);

--
-- Índices de tabela `forma_de_conducao`
--
ALTER TABLE `forma_de_conducao`
  ADD PRIMARY KEY (`id_forma_conducao`);

--
-- Índices de tabela `local_trauma`
--
ALTER TABLE `local_trauma`
  ADD PRIMARY KEY (`id_local_trauma`);

--
-- Índices de tabela `obstetrico`
--
ALTER TABLE `obstetrico`
  ADD PRIMARY KEY (`id_obstetrico`);

--
-- Índices de tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD PRIMARY KEY (`id_ocorrencia`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `id_tipo_ocorrencia` (`id_tipo_ocorrencia`),
  ADD KEY `id_decisao_transporte` (`id_decisao_transporte`),
  ADD KEY `id_forma_conducao` (`id_forma_conducao`),
  ADD KEY `id_transporte` (`id_transporte`),
  ADD KEY `id_vitima_era` (`id_vitima_era`),
  ADD KEY `id_problemas_encontrados_suspeitos` (`id_problemas_encontrados_suspeitos`),
  ADD KEY `id_obstetrico` (`id_obstetrico`);

--
-- Índices de tabela `ocorrencia_avaliacao_glasgowmenor`
--
ALTER TABLE `ocorrencia_avaliacao_glasgowmenor`
  ADD KEY `id_avaliacao_glasgowmenor` (`id_avaliacao_glasgow_menor`),
  ADD KEY `id_ocorrencia_glasgowmenor` (`id_ocorrencia`);

--
-- Índices de tabela `ocorrencia_avaliação_glasgowmaior`
--
ALTER TABLE `ocorrencia_avaliação_glasgowmaior`
  ADD KEY `id_avaliacao_glasgowmaior` (`id_avaliação_glasgowmaior`),
  ADD KEY `id_ocorrencia_glasgowmaior` (`id_ocorrencia`);

--
-- Índices de tabela `ocorrencia_sinais_sintomas`
--
ALTER TABLE `ocorrencia_sinais_sintomas`
  ADD KEY `id_sinais_sintomas` (`id_sinais_sintomas`),
  ADD KEY `id_ocorrencia_sinais` (`id_ocorrencia`);

--
-- Índices de tabela `ocorrencia_sinais_vitais`
--
ALTER TABLE `ocorrencia_sinais_vitais`
  ADD KEY `id_ocorrencia_sinais_vitais` (`id_ocorrencia`),
  ADD KEY `id_sinais_vitias_ocorrencia` (`id_sinais_vitais`);

--
-- Índices de tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Índices de tabela `problemas_encontrados_suspeitos`
--
ALTER TABLE `problemas_encontrados_suspeitos`
  ADD PRIMARY KEY (`id_problemas_encontrados_suspeitos`);

--
-- Índices de tabela `sinais_sintomas`
--
ALTER TABLE `sinais_sintomas`
  ADD PRIMARY KEY (`id_sinais_sintomas`);

--
-- Índices de tabela `sinais_vitais`
--
ALTER TABLE `sinais_vitais`
  ADD PRIMARY KEY (`id_sinais_vitais`);

--
-- Índices de tabela `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Índices de tabela `tipo_ocorrencia`
--
ALTER TABLE `tipo_ocorrencia`
  ADD PRIMARY KEY (`id_tipo_ocorrencia`);

--
-- Índices de tabela `transporte`
--
ALTER TABLE `transporte`
  ADD PRIMARY KEY (`id_transporte`);

--
-- Índices de tabela `traumas`
--
ALTER TABLE `traumas`
  ADD PRIMARY KEY (`id_trauma`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_tipofk` (`id_tipo`);

--
-- Índices de tabela `vitma_era`
--
ALTER TABLE `vitma_era`
  ADD PRIMARY KEY (`id_vitima_era`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacao_glasgow_maior`
--
ALTER TABLE `avaliacao_glasgow_maior`
  MODIFY `id_glasgow_maior` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `avaliacao_glasgow_menor`
--
ALTER TABLE `avaliacao_glasgow_menor`
  MODIFY `id_glasgow_menor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `decisao_transporte`
--
ALTER TABLE `decisao_transporte`
  MODIFY `id_decisao_transporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `forma_de_conducao`
--
ALTER TABLE `forma_de_conducao`
  MODIFY `id_forma_conducao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `obstetrico`
--
ALTER TABLE `obstetrico`
  MODIFY `id_obstetrico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  MODIFY `id_ocorrencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `problemas_encontrados_suspeitos`
--
ALTER TABLE `problemas_encontrados_suspeitos`
  MODIFY `id_problemas_encontrados_suspeitos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `sinais_sintomas`
--
ALTER TABLE `sinais_sintomas`
  MODIFY `id_sinais_sintomas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `sinais_vitais`
--
ALTER TABLE `sinais_vitais`
  MODIFY `id_sinais_vitais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tipo_ocorrencia`
--
ALTER TABLE `tipo_ocorrencia`
  MODIFY `id_tipo_ocorrencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `transporte`
--
ALTER TABLE `transporte`
  MODIFY `id_transporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `vitma_era`
--
ALTER TABLE `vitma_era`
  MODIFY `id_vitima_era` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `associacao_local_trauma`
--
ALTER TABLE `associacao_local_trauma`
  ADD CONSTRAINT `associacao_local_trauma_ibfk_1` FOREIGN KEY (`id_local_trauma`) REFERENCES `local_trauma` (`id_local_trauma`),
  ADD CONSTRAINT `associacao_local_trauma_ibfk_2` FOREIGN KEY (`id_trauma`) REFERENCES `traumas` (`id_trauma`);

--
-- Restrições para tabelas `associacao_trauma_ocorrencia`
--
ALTER TABLE `associacao_trauma_ocorrencia`
  ADD CONSTRAINT `id_associacao_trauma_ocorrencia` FOREIGN KEY (`id_associacao_trauma_ocorrencia`) REFERENCES `associacao_local_trauma` (`id_associacao`),
  ADD CONSTRAINT `id_ocorrencia` FOREIGN KEY (`id_ocorrencia`) REFERENCES `ocorrencia` (`id_ocorrencia`);

--
-- Restrições para tabelas `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD CONSTRAINT `id_decisao_transporte` FOREIGN KEY (`id_decisao_transporte`) REFERENCES `decisao_transporte` (`id_decisao_transporte`),
  ADD CONSTRAINT `id_forma_conducao` FOREIGN KEY (`id_forma_conducao`) REFERENCES `forma_de_conducao` (`id_forma_conducao`),
  ADD CONSTRAINT `id_obstetrico` FOREIGN KEY (`id_obstetrico`) REFERENCES `obstetrico` (`id_obstetrico`),
  ADD CONSTRAINT `id_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`),
  ADD CONSTRAINT `id_problemas_encontrados_suspeitos` FOREIGN KEY (`id_problemas_encontrados_suspeitos`) REFERENCES `problemas_encontrados_suspeitos` (`id_problemas_encontrados_suspeitos`),
  ADD CONSTRAINT `id_tipo_ocorrencia` FOREIGN KEY (`id_tipo_ocorrencia`) REFERENCES `tipo_ocorrencia` (`id_tipo_ocorrencia`),
  ADD CONSTRAINT `id_transporte` FOREIGN KEY (`id_transporte`) REFERENCES `transporte` (`id_transporte`),
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `id_vitima_era` FOREIGN KEY (`id_vitima_era`) REFERENCES `vitma_era` (`id_vitima_era`);

--
-- Restrições para tabelas `ocorrencia_avaliacao_glasgowmenor`
--
ALTER TABLE `ocorrencia_avaliacao_glasgowmenor`
  ADD CONSTRAINT `id_avaliacao_glasgowmenor` FOREIGN KEY (`id_avaliacao_glasgow_menor`) REFERENCES `avaliacao_glasgow_menor` (`id_glasgow_menor`),
  ADD CONSTRAINT `id_ocorrencia_glasgowmenor` FOREIGN KEY (`id_ocorrencia`) REFERENCES `ocorrencia` (`id_ocorrencia`);

--
-- Restrições para tabelas `ocorrencia_avaliação_glasgowmaior`
--
ALTER TABLE `ocorrencia_avaliação_glasgowmaior`
  ADD CONSTRAINT `id_avaliacao_glasgowmaior` FOREIGN KEY (`id_avaliação_glasgowmaior`) REFERENCES `avaliacao_glasgow_maior` (`id_glasgow_maior`),
  ADD CONSTRAINT `id_ocorrencia_glasgowmaior` FOREIGN KEY (`id_ocorrencia`) REFERENCES `ocorrencia` (`id_ocorrencia`);

--
-- Restrições para tabelas `ocorrencia_sinais_sintomas`
--
ALTER TABLE `ocorrencia_sinais_sintomas`
  ADD CONSTRAINT `id_ocorrencia_sinais` FOREIGN KEY (`id_ocorrencia`) REFERENCES `ocorrencia` (`id_ocorrencia`),
  ADD CONSTRAINT `id_sinais_sintomas` FOREIGN KEY (`id_sinais_sintomas`) REFERENCES `sinais_sintomas` (`id_sinais_sintomas`);

--
-- Restrições para tabelas `ocorrencia_sinais_vitais`
--
ALTER TABLE `ocorrencia_sinais_vitais`
  ADD CONSTRAINT `id_ocorrencia_sinais_vitais` FOREIGN KEY (`id_ocorrencia`) REFERENCES `ocorrencia` (`id_ocorrencia`),
  ADD CONSTRAINT `id_sinais_vitias_ocorrencia` FOREIGN KEY (`id_sinais_vitais`) REFERENCES `sinais_vitais` (`id_sinais_vitais`);

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `id_tipofk` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id_tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
