-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: 186.202.152.167
-- Generation Time: 11-Jun-2017 Ã s 17:32
-- VersÃ£o do servidor: 5.6.35-80.0-log
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buscaagro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id_for` int(5) NOT NULL,
  `razao_for` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `cnpj_for` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `cidade_for` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `senha_for` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `tel_for` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email_for` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `data_for` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id_for`, `razao_for`, `cnpj_for`, `cidade_for`, `senha_for`, `tel_for`, `email_for`, `data_for`) VALUES
(2, 'TESTE', '66.666.666/6666-66', 'SORRISO', '123456', '(66)6666-66666', 'asgasg@asf.com', '2017-06-10'),
(5, 'AMPLA INSUMOS E CORRETORA DE CEREAIS LTDA', '06.063.526/0001-05', 'SORRISO', 'agro123', '(65)99018276', 'aliinezatti@hotmail.com', '2017-06-10'),
(6, 'ARAGUAIA - ADUBOS ARAGUAIA IND E COM LTDA', '03.306.578/0020-21', 'SORRISO', 'agro123', '(65)99018276', 'aliinezatti@hotmail.com', '2017-06-10'),
(7, 'UNICA AGRO', '19.480.629/0001-04', 'SORRISO', 'agro123', '(65)99018276', 'aliinezatti@hotmail.com', '2017-06-10'),
(8, 'BRAVO COMÃ‰RCIO E REPRESENTAÃ‡Ã•ES LTDA', '07.981.086/0001-48', 'SORRISO', 'agro123', '(66)3584-1163', 'bravosorriso@hotmail.com', '2017-06-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupocompra`
--

CREATE TABLE `grupocompra` (
  `id_grp` int(10) NOT NULL,
  `idprt_grp` int(5) NOT NULL,
  `qtdeprod_grp` int(10) NOT NULL,
  `dataprev_grp` date NOT NULL,
  `tipopgto_grp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `idprod_grp` int(5) NOT NULL,
  `data_grp` date NOT NULL,
  `hora_grp` time(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- Estrutura da tabela `produtor`
--

CREATE TABLE `produtor` (
  `id_prt` int(5) NOT NULL,
  `nome_prt` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `senha_prt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cpf_prt` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `tel_prt` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `email_prt` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `data_prt` date NOT NULL,
  `ie_prt` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_pro` int(10) NOT NULL,
  `fornecedorid_pro` int(5) NOT NULL,
  `marca_pro` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `modelo_pro` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_pro` int(5) NOT NULL,
  `desc_pro` text COLLATE utf8_unicode_ci NOT NULL,
  `bula_pro` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `efi_pro` int(1) NOT NULL,
  `preco_pro` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `divulga_pro` int(1) NOT NULL,
  `foto_pro` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `estoque_pro` int(10) NOT NULL,
  `data_pro` date NOT NULL,
  `ativo_pro` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_pro`, `fornecedorid_pro`, `marca_pro`, `modelo_pro`, `tipo_pro`, `desc_pro`, `bula_pro`, `efi_pro`, `preco_pro`, `divulga_pro`, `foto_pro`, `estoque_pro`, `data_pro`, `ativo_pro`) VALUES
(6, 7, 'Nortox', 'Acefato', 1, 'O Acefato Fersol 750 SP Ã© um inseticida organofosforado que age por ingestÃ£o e contato usado no controle de Insetos em plantaÃ§Ãµes, como algodÃ£o e soja. Inseticida de aÃ§Ã£o sistÃªmica, contato e ingestÃ£o', '', 0, '22,00', 0, '', 0, '2017-06-10', 1),
(7, 7, 'Rotam', 'Bazuca', 1, 'Inseticida de contato e ingestÃ£o do grupo metilcarbamato altamente eficiente no controle de amplo espectro de pragas atravÃ©s de aplicaÃ§Ã£o foliar.\r\n', '', 0, '20,00', 0, '', 0, '2017-06-10', 1),
(8, 7, 'Emzeb', '800 P', 2, 'O Emzeb 800 WP Ã© recomendado para o controle de pragas da parte aÃ©rea das culturas de banana, batata, tomate e uva.', '', 0, '25,00', 0, '', 0, '2017-06-10', 1),
(9, 7, 'Rodazim', '500 SC', 2, 'RODAZIM 500 SC Ã© um fungicida sistÃªmico do grupo dos benzimidazÃ³is, com aÃ§Ã£o preventiva e curativa indicado para o Tratamento de Sementes e controle de doenÃ§as da parte aÃ©rea.', '', 0, '33,00', 0, '', 0, '2017-06-10', 1),
(10, 7, 'Ihara', 'Certeza', 2, 'Ã‰ um fungicida sistÃªmico e de contato, do grupo quÃ­mico benzimidazol (precursor de) (tiofanato metÃ­lico) e fenilpiridinilamina (Fluazinam), usado em tratamento de sementes para controle de doenÃ§as das culturas: Soja e FeijÃ£o.', '', 0, '130,00', 0, '', 0, '2017-06-10', 1),
(15, 6, 'Superfosfato Simples', 'SSP', 3, 'O superfosfato simples Ã© um fertilizante mineral ou um formulado composto de 18% de P2O5, 16% de CÃ¡lcio {Ca) e 8% de Enxofre (S). Ã‰ um produto de alta eficiÃªncia agronÃ´mica, principalmente por causa da presenÃ§a do Enxofre, pois os solos brasileiros em geral, e notadamente o cerrado, apresenta grande deficiÃªncia deste mineral, que Ã© muito benÃ©fico para as plantas. Um dos efeitos positivos mais marcantes desse fertilizante fosfatado Ã© o aprofundamento do sistema radicular dos vegetais [1]. Geralmente utilizado em pequenas doses juntamente ao substrato.', '', 0, '830,00', 0, '', 0, '2017-06-10', 1),
(16, 6, 'MAP ', '(Fosfato MonoamÃ´nico)', 3, 'O superfosfato simples Ã© um fertilizante mineral ou um formulado composto de 18% de P2O5, 16% de CÃ¡lcio (Ca) e 8% de Enxofre (S). Ã‰ um produto de alta eficiÃªncia agronÃ´mica, principalmente por causa da presenÃ§a do Enxofre, pois os solos brasileiros em geral, e notadamente o cerrado, apresenta grande deficiÃªncia deste mineral, que Ã© muito benÃ©fico para as plantas. Um dos efeitos positivos mais marcantes desse fertilizante fosfatado Ã© o aprofundamento do sistema radicular dos vegetais. Geralmente utilizado em pequenas doses juntamente ao substrato.', '', 0, '1.650,00', 0, '', 0, '2017-06-10', 1),
(17, 6, 'KCL', '(Cloreto de PotÃ¡ssio)', 3, 'AdubaÃ§Ã£o de fundo de todas as culturas e em situaÃ§Ãµes de carÃªncia de potÃ¡ssio. NÃ£o Ã© recomendado nas culturas que sejam afetadas por cloretos ou por sais. ComposiÃ§Ã£o: Ã‰ o produto da purificaÃ§Ã£o de sais brutos de cloreto de potÃ¡ssio, doseando 60% de potÃ¡ssio (K2O). ', '', 0, '1.280,00', 0, '', 0, '2017-06-10', 1),
(18, 8, 'SATIS', 'Fulland', 4, 'O Fulland Ã© um fertilizante mineral composto por fÃ³sforo, enxofre e cobre indicado para todas as culturas. Entre seus benefÃ­cios, estÃ¡ o fortalecimento fisiolÃ³gico natural das plantas, por meio do fÃ³sforo e do cobre, que estimulam mecanismos de autodefesa do vegetal. O Fulland tambÃ©m ajuda a melhorar o aproveitamento de outros nutrientes, promovendo rÃ¡pida recuperaÃ§Ã£o da planta.\r\n\r\n', '', 0, '0,00', 0, 'foto/emp_fo', 0, '2017-06-11', 1),
(19, 8, 'SATIS', 'Sturdy', 4, 'O Sturdy Ã© rico em fÃ³sforo, nutriente que atua como fonte de energia da planta. O produto Ã© ideal para situaÃ§Ãµes adversas, nas quais a demanda energÃ©tica Ã© maior. Fertilizante mineral, o Sturdy atua em vÃ¡rios processos da planta, desde o desenvolvimento da raiz atÃ© a fase reprodutiva de floraÃ§Ã£o e frutificaÃ§Ã£o. Ã‰ recomendado para todas as culturas.', '', 0, '0,00', 0, '', 0, '2017-06-11', 1),
(20, 8, 'SATIS', 'Mathury', 4, 'Ã€ base de acetato de potÃ¡ssio, este fertilizante mineral contribui para uma sÃ©rie de processos fisiolÃ³gicos importantes da planta, como concentraÃ§Ã£o de aÃ§Ãºcares, melhora da cor e do sabor e amadurecimento de ramos e frutos. Sua aplicaÃ§Ã£o oferece para o produtor uma importante ferramenta de controle dos estÃ¡gios da maturaÃ§Ã£o, refletindo em ganhos de produtividade', '', 0, '000,00', 0, '', 0, '2017-06-11', 1),
(21, 8, 'SATIS', 'Dephensor ', 4, 'Fertilizante mineral, o Dephensor fortalece as estruturas vegetativas e, assim, confere maior tolerÃ¢ncia Ã s plantas em condiÃ§Ãµes adversas, como estresse hÃ­drico e ataque de pragas. O produto Ã© fonte lÃ­quida de fÃ³sforo, potÃ¡ssio e silÃ­cio. Este Ãºltimo Ã© um nutriente que se acumula na parede celular da planta e, por isso, ajuda no enrijecimento do vegetal, evitando tombamentos. Utilizado para diferentes culturas, o Dephensor Ã© mais recomendado para gramÃ­neas.', '', 0, '0,00', 0, '', 0, '2017-06-11', 1),
(22, 8, 'SATIS', 'Humicphol', 4, 'Fertilizante organomineral, o Humicphol Ã© fertilizante desenvolvido para fornecer e melhorar a disponibilidade dos nutriente do solo. Sua funÃ§Ã£o Ã© fornecer e facilitar a absorÃ§Ã£o dos nutrientes retidos no solo. Diferentemente dos produtos de aplicaÃ§Ã£o foliar, este fertilizante fica mais tempo disponÃ­vel para a planta. Sua formulaÃ§Ã£o enriquecida com substÃ¢ncias hÃºmicas jÃ¡ hidrolisadas permite rÃ¡pida assimilaÃ§Ã£o pelas raÃ­zes, aumentando a eficiÃªncia do produto e reduzindo perdas no solo', '', 0, '0,00', 0, '', 0, '2017-06-11', 1),
(23, 8, 'Yara', 'YaraVitaÂ® Glytrel MnPâ„¢ ', 4, 'Fertilizante foliar, ideal para aplicaÃ§Ãµes em culturas resistentes ao glifosato como o milho, soja e algodÃ£o, por suprir manganÃªs para atender Ã  deficiÃªncia induzida e "destravar" a planta pela aplicaÃ§Ã£o de fÃ³sforo. Desenvolvido para ampla compatibilidade fÃ­sica e quÃ­mica em misturas de tanque com vÃ¡rios tipos de glifosato.', '', 0, '00,00', 0, '', 0, '2017-06-11', 1),
(24, 8, 'Yara', 'YaraBelaÂ®', 4, 'Os fertilizantes YaraBela oferecem formulaÃ§Ãµes eficientes e podem incluir magnÃ©sio ou enxofre, assegurando nutriÃ§Ã£o equilibrada. A necessidade desses nutrientes secundÃ¡rios Ã© muitas vezes subestimado. Ambos os minerais sÃ£o essenciais para a saÃºde e o crescimento das plantas.', '', 0, '0,00', 0, '', 0, '2017-06-11', 1),
(25, 8, 'Nufarm', 'Agritoato 400', 1, 'Iseticida sistÃªmico, com aÃ§Ã£o de choque contra sugadores. O AGRITOATO 400 Ã© um inseticida organofosforado, com aÃ§Ã£o sistÃªmica apresentado sob a forma de concentrado emulsionÃ¡vel, indicado para o controle de pragas.', '', 0, '10,00', 0, '', 0, '2017-06-11', 1),
(26, 8, 'Yara', 'YaraVeraÂ®', 4, 'Com uma concentraÃ§Ã£o de nitrogÃªnio de 40% + 5,6 de enxofre, na forma de sulfato, o YaraVera garante um crescimento forte e sustentado ao longo de um perÃ­odo prolongado atravÃ©s de liberaÃ§Ã£o de nutrientes eficientes. ', '', 0, '0,00', 0, '', 0, '2017-06-11', 1),
(27, 8, 'Syngenta', 'Actara 250 WG', 1, 'O ACTARA 250 WG na dose recomendada apresenta efeito bioativador melhorando o desenvolvimento das plantas (velocidade de brotaÃ§Ã£o, sistema radicular, parte aÃ©rea). Por estes motivos, as plantas poderÃ£o resistir melhor as adversidades climÃ¡ticas, mantendo o seu potencial produtivo.', '', 0, '146,00', 0, '', 0, '2017-06-11', 1),
(28, 8, 'BASF', 'AmploÂ®', 3, 'AmploÂ® Ã© um herbicida de aÃ§Ã£o sistÃªmica e de contato do grupo das imidazolinonas e benzotiadiazinas, seletivo para as culturas do feijÃ£o, amendoim e arroz ClearfieldÂ® cultivado nos sistemas sequeiro e irrigado, de absorÃ§Ã£o foliar e radicular, que aplicado na pÃ³s-emergÃªncia precoce controla as seguintes plantas:', '', 0, '0,00', 0, '', 0, '2017-06-11', 1),
(29, 8, 'BASF', 'ABACUSÂ® HC', 2, 'ABACUSÂ® HC apresenta excelente aÃ§Ã£o protetiva devido a sua atuaÃ§Ã£o na inibiÃ§Ã£o da germinaÃ§Ã£o dos esporos, desenvolvimento e penetraÃ§Ã£o dos tubos germinativos e proporciona maior atividade metabÃ³lica da planta, aumento da atividade da enzima nitrato redutase, resultando em melhor sanidade da planta. Dependendo do patÃ³geno, tambÃ©m pode apresentar aÃ§Ã£o curativa e erradicante, pois contÃ©m em sua formulaÃ§Ã£o o ingrediente ativo EPOXICONAZOL fungicida com aÃ§Ã£o sistÃªmica.', '', 0, '00,00', 0, '', 0, '2017-06-11', 1),
(30, 8, 'Adama', 'Aminol 806', 3, 'Herbicida sistÃªmico aplicado em pÃ³s-emergÃªncia das plantas infestantes das culturas de Arroz, CafÃ© Cana, Milho, Soja e Trigo.', '', 0, '8,60', 0, '', 0, '2017-06-11', 1),
(31, 8, 'BASF', 'CascadeÂ® ', 1, 'CascadeÂ® 100 Ã© um regulador de crescimento de insetos/Ã¡caros, interferindo na produÃ§Ã£o de quitina durante o desenvolvimento cuticular em Ã¡caros e insetos no estÃ¡gio jovem. A falha no desenvolvimento da cutÃ­cula causa morte de insetos e Ã¡caros durante o processo de empupamento entre os vÃ¡rios estÃ¡gios larvais. CascadeÂ® 100 nÃ£o mata formas adultas de Ã¡caros e insetos.', '', 0, '00,00', 0, '', 0, '2017-06-11', 1),
(32, 8, 'BASF', 'IMUNITÂ®', 1, 'IMUNITÂ® Ã© um inseticida com duplo mecanismo de aÃ§Ã£o que foi desenvolvido para o controle de pragas das plantas cultivadas, agindo nos insetos por contato e ingestÃ£o. Contendo dois ingredientes ativos distintos, Alfacipermetrina e Teflubenzuron, um piretrÃ³ide e um regulador de crescimento, Ã© recomendado para o manejo da resistÃªncia das pragas. O produto atua rapidamente nos insetos quando ingerido, e tambÃ©m por contato, quando estes sÃ£o atingidos pela calda de pulverizaÃ§Ã£o ou caminham sobre a superfÃ­cie tratada.', '', 0, '00,00', 0, '', 0, '2017-06-11', 1),
(33, 8, 'Albaugh', 'Array 200 EC', 2, 'Fungicida sistÃªmico do grupo dos triazÃ³is, com aÃ§Ã£o preventiva e curativa, que contÃ©m o ingrediente ativo Tebuconazol, 200 g/L, na formulaÃ§Ã£o concentraÃ§Ã£o emulsionÃ¡vel, indicando para o controle de doenÃ§as foliares na cultura do arroz, cafÃ©, feijÃ£o, soja e trigo.', '', 0, '19,60', 0, '', 0, '2017-06-11', 1),
(34, 8, 'BASF', 'PIRATEÂ®', 1, 'PIRATEÂ® tem demonstrado eficiÃªncia no controle de espÃ©cies que apresentam suspeitas de resistÃªncias aos principais grupos quÃ­micos como fosforados, carbamatos, piretrÃ³ides e fisiolÃ³gicos. Devido ao seu modo de aÃ§Ã£o Ãºnico, o PirateÂ® apresenta-se como uma boa opÃ§Ã£o no manejo integrado de pragas, principalmente nos Programas de RotaÃ§Ã£o ou AlternÃ¢ncia de Produtos.', '', 0, '00,00', 0, '', 0, '2017-06-11', 1),
(35, 8, 'BASF', 'BrioÂ® ', 2, 'BrioÂ® Ã© fungicida com duplo modo de aÃ§Ã£o de contato (atravÃ©s do cresoxim-metÃ­lico) e sistÃªmico (atravÃ©s do epoxiconazole). Apresenta aÃ§Ã£o fungicida protetiva atravÃ©s da prevenÃ§Ã£o da germinaÃ§Ã£o dos esporos.', '', 0, '0,00', 0, '', 0, '2017-06-11', 1),
(36, 8, 'Arysta', 'Atabron', 1, 'Trata-se de um inseticida que atua como regulador de crescimento de insetos, pois Ã© um inibidor da sÃ­ntese de quitina. Deve ser utilizado em pulverizaÃ§Ã£o nas culturas de algodÃ£o, batata, cana-de-aÃ§Ãºcar, citros, milho, repolho, soja, tomate e trigo.', '', 0, '40,50', 0, '', 0, '2017-06-11', 1),
(37, 8, 'BASF', 'CarambaÂ® 90', 2, 'CarambaÂ® 90 Ã© um fungicida sistÃªmico absorvido pelas folhas das plantas com um amplo espectro de aÃ§Ã£o preventiva, curativa e erradicante pertencente ao grupo dos triazÃ³is. Atua na interrupÃ§Ã£o da biosÃ­ntese de ergosterol. ApÃ³s a aplicaÃ§Ã£o do produto, os fungos terÃ£o seu desenvolvimento interrompido e morrerÃ£o.', '', 0, '00,00', 0, '', 0, '2017-06-11', 1),
(38, 8, 'Bayer', 'Atento', 2, 'ATENTO Ã© um fungicida sistÃªmico do grupo triazol indicado para o manejo da ferrugem-asiÃ¡tica ( Phakopsora pachyrhizi) em sementes de soja. O seu uso nÃ£o substitui o uso de fungicidas foliares.', '', 0, '83,00', 0, '', 0, '2017-06-11', 1),
(39, 8, 'BASF', 'BasagranÂ® 600', 3, 'BasagranÂ® 600 Ã© um herbicida seletivo para as culturas de soja, arroz, arroz irrigado, feijÃ£o, milho e trigo.BasagranÂ® 600 Ã© um herbicida que depois de absorvido, interfere na fotossÃ­ntese, nas Ã¡reas das folhas tratadas, sendo o efeito localizado, nÃ£o sistÃªmico.Quando uma Ã¡rea foliar suficiente recebe tratamento, a paralisaÃ§Ã£o na elaboraÃ§Ã£o de carboidratos pode levar as plantas Ã  morte, sendo elas particularmente sensÃ­veis na fase inicial de desenvolvimento.SÃ£o suscetÃ­veis muitas espÃ©cies de ciperÃ¡ceas, algumas monocotiledÃ´neas e muitas espÃ©cies de dicotiledÃ´neas.Algumas espÃ©cies de plantas tÃªm a capacidade de fixar ou de desativar o produto absorvido, e por isso resistem ao tratamento. &AGRAVE;s vezes aparecem alguns sintomas de fitotoxicidade, com amarelecimento ou mesmo necrose das folhas, mas completada a desativaÃ§Ã£o do produto o desenvolvimento volta a ser normal, sem efeito negativo sobre a produtividade.SÃ£o tolerantes ao produto as gramÃ­neas em geral, leguminosas e algumas outras espÃ©cies de plantas.', '', 0, '0,0', 0, '', 0, '2017-06-11', 1),
(40, 8, 'Nortox', 'Atrazina 500 SC', 3, 'Herbicida seletivo de aÃ§Ã£o sistÃªmica pertencente ao grupo quÃ­mico triazina, atuando como prÃ© e pÃ³s-emergÃªncia precoce no controle da maioria das plantas daninhas nas culturas de cana-de-aÃ§Ãºcar, milho e sorgo.', '', 0, '6,50', 0, '', 0, '2017-06-11', 1),
(41, 8, 'BASF', 'Aura 200', 3, 'Aura 200 Ã© um herbicida seletivo de pÃ³sâ€“emergÃªncia, sistÃªmico, que controla gramÃ­neas anuais e apresenta efeito supressor sobre perenes, recomendado para a cultura do arroz. ApÃ³s a aplicaÃ§Ã£o sobre a superfÃ­cie das folhas, o ingrediente ativo Ã© rapidamente absorvido, ocorrendo um processo de translocaÃ§Ã£o, com acÃºmulo em regiÃµes meristemÃ¡ticas, onde o produto inibe rapidamente a enzima ACCase, interferindo na formaÃ§Ã£o de malonilâ€“CoA, consequentemente bloqueando a reaÃ§Ã£o inicial da rota metabÃ³lica da sÃ­ntese de lipÃ­dios, o que resulta na paralisaÃ§Ã£o do crescimento. O secamento das gramÃ­neas completaâ€“se num perÃ­odo de 1 a 3 semanas.Em variedades sensÃ­veis de arroz pode surgir leves manchas clorÃ³ticas nas folhas, os quais desaparecem apÃ³s alguns dias nÃ£o afetando o potencial produtivo da cultura.', '', 0, '135,00', 0, '', 0, '2017-06-11', 1),
(42, 8, ' Bayer', 'AlionÂ®', 3, 'Alion Ã© a plataforma inovadora da Bayer no manejo de plantas daninhas. MolÃ©cula inÃ©dita de aÃ§Ã£o seletiva prÃ© emergente de amplo espectro e com residual prolongado, permite um canavial livre do mato. VocÃª reduz os custos operacionais e dedica seu tempo a outras atividades da lavoura.', '', 0, '0,00', 0, '', 0, '2017-06-11', 1),
(43, 8, ' Bayer', 'Sencor 480Â®', 3, 'Sencor 480 Ã© um herbicida prÃ© e pÃ³s-emergente, seletivo residual do grupo triazinona seletivo, altamente eficaz e de largo espectro de aÃ§Ã£o contra plantas daninhas de folhas largas nas culturas da batata, cafÃ©, cana-de-aÃ§Ãºcar, mandioca, trigo, tomate e soja.', '', 0, '00,00', 0, '', 0, '2017-06-11', 1),
(44, 8, 'FMC', 'Aurora 400 EC', 3, 'Aurora Ã© um herbicida multicultura que controla folhas largas, inclusive as de difÃ­cil controle, como a trapoeraba e a corda-de-viola. Com aÃ§Ã£o rÃ¡pida contra as plantas infestantes, Ã© excelente no manejo de plantas tolerantes.', '', 0, '265,00', 0, '', 0, '2017-06-11', 1),
(45, 8, 'Bayer', 'NativoÂ®', 2, 'Nativo Ã© um fungicida com forte aÃ§Ã£o preventiva e residual indicado para as culturas de algodÃ£o, arroz, milho, cana, cafÃ©, batata, trigo, citrus, tomate, dentre outras.', '', 0, '00,00', 0, '', 0, '2017-06-11', 1),
(46, 8, 'Bayer', 'Sphere MaxÂ®', 2, 'Com o fungicida Sphere Max, a lavoura ganha o mÃ¡ximo de residual e espectro. Sua formulaÃ§Ã£o conta com microcristais que penetram mais rÃ¡pido na planta, proporcionando proteÃ§Ã£o turbinada ao mÃ¡ximo no controle de doenÃ§as, para vocÃª ter o rendimento mÃ¡ximo na hora da colheita.', '', 0, '00,00', 0, '', 0, '2017-06-11', 1),
(47, 8, 'Rotam', 'Bamako 700 WG', 1, 'Bamako 700WG Ã© um inseticida do grupo dos neonicotinÃ³ides, sistÃªmico de contato e ingestÃ£o com aplicaÃ§Ã£o via solo ou foliar.', '', 0, '165,00', 0, '', 0, '2017-06-11', 1),
(48, 8, 'FMC', 'Battle', 2, 'Battle Ã© um fungicida de duplo indicado para aplicaÃ§Ã£o durante a fase vegetativa da cultura da soja visando o controle, principalmente, das DFCs e reforÃ§ando a sanidade para que a planta chegue a fase reprodutiva com maior potencial e assegurar a alta performance dos fungicidas utilizados a partir desta fase.', '', 0, '32,90', 0, '', 0, '2017-06-11', 1),
(49, 8, 'Bayer', 'Baytan SC', 2, 'O BaytanÂ® FS Ã© um fungicida sistÃªmico do grupo dos triazÃ³is com amplo espectro de aÃ§Ã£o, sendo exclusivamente indicado para o tratamento de sementes de algodÃ£o, aveia, cevada e trigo.', '', 0, '53,00', 0, '', 0, '2017-06-11', 1),
(50, 8, 'Bayer', 'ProvenceÂ®', 3, 'Herbicida prÃ©-emergente efetivo na soca-seca e na soca-Ãºmida, controla as plantas daninhas de folhas estreitas com eficÃ¡cia e promove melhor produtividade. Sua facilidade de manuseio e flexibilidade possibilitam o trabalho de aplicaÃ§Ã£o durante a safra da cana, todos os dias, o ano todo.', '', 0, '0,00', 0, '', 0, '2017-06-11', 1),
(51, 8, 'Dow', 'Bim 750 BR', 2, 'Ã‰ um fungicida sistÃªmico para o controle da brusone do arroz, causada pelo fungo Pyricularia oryzae, tanto nas folhas como no pescoÃ§o, nÃ³ e panÃ­cula, podendo ser aplicado via tratamento de sementes e/ou pulverizaÃ§Ãµes na parte aÃ©rea da planta. A aplicaÃ§Ã£o deve ser feita via tratamento de sementes e/ou pulverizaÃ§Ãµes na parte aÃ©rea da planta.', '', 0, '138,00', 0, '', 0, '2017-06-11', 1),
(52, 8, 'BASF', 'Brio', 2, 'BrioÂ® Ã© fungicida com duplo modo de aÃ§Ã£o de contato (atravÃ©s do cresoxim-metÃ­lico) e sistÃªmico (atravÃ©s do epoxiconazole). Apresenta aÃ§Ã£o fungicida protetiva atravÃ©s da prevenÃ§Ã£o da germinaÃ§Ã£o dos esporos, da formaÃ§Ã£o do tubo germinativo.', '', 0, '75,00', 0, '', 0, '2017-06-11', 1),
(53, 8, 'Syngenta', 'Callisto', 3, 'Callisto Ã© um herbicida seletivo, de aÃ§Ã£o sistÃªmica, indicado para o controle pÃ³s-emergente das plantas infestantes, na cultura do milho e da cana-de-aÃ§Ãºcar.', '', 0, '123,00', 0, '', 0, '2017-06-11', 1),
(54, 8, 'Bayer', 'Certero', 1, 'CERTERO Ã© um inseticida fisiolÃ³gico, inibidor da sÃ­ntese de quitina, pertencente ao grupo quÃ­mico benzoilureia, indicado para o controle de diversas pragas nas culturas da abobrinha, algodÃ£o, batata, cana-de-aÃ§Ãºcar, citros, fumo, milho, soja, tomate e trigo.', '', 0, '147,00', 0, '', 0, '2017-06-11', 1),
(55, 8, 'Prentiss', 'Clorimuron', 3, 'O Clorimuron Prentiss Ã© um herbicida pos-emergente sistÃªmatico, altamente seletivo a Soja, controlando com grande eficÃ¡cia um amplo espectro de plantas daninhas de folha larga, usando tanto em aplicaÃ§Ãµes terrestre como aÃ©rea.', '', 0, '59,00', 0, '', 0, '2017-06-11', 1),
(56, 8, 'BASF', 'Comet', 2, 'CometÂ® atua como inibidor do transporte de elÃ©trons nas mitocÃ´ndrias das cÃ©lulas dos fungos, inibindo a formaÃ§Ã£o de ATP essencial nos processos metabÃ³licos dos fungos.', '', 0, '128,00', 0, '', 0, '2017-06-11', 1),
(57, 8, 'Bayer', 'Cropstar', 1, 'CROPSTAR Ã© um inseticida sistÃªmico, de contato e ingestÃ£o dos grupos quÃ­micos neonicotinoide e metilcarbamato de oxima, para o tratamento de sementes e indicado para o controle de diversas pragas nas culturas do algodÃ£o, amendoim, arroz, aveia, cevada, feijÃ£o, girassol, mamona, milho, soja, sorgo e trigo.', '', 0, '145,00', 0, '', 0, '2017-06-11', 1),
(58, 8, 'Bayer', 'FinishÂ® ', 3, 'Feito especialmente para o algodÃ£o, Ã© um excelente maturador que permite o planejamento da colheita, pois acelera o amadurecimento uniforme do capulho. O beneficiamento do algodÃ£o comeÃ§a na prÃ©-colheita. Finish melhora a sua produtividade e a qualidade da fibra, valorizando ainda mais a sua produÃ§Ã£o.', '', 0, '00,00', 0, '', 0, '2017-06-11', 1),
(59, 8, 'syngenta', 'Actelliclambda', 1, 'Inseticida de contato e ingestÃ£o para controle de pragas em grÃ£os armazenados.', '', 0, '000,00', 0, '', 0, '2017-06-11', 1),
(60, 8, 'syngenta', 'Arcade', 3, 'Herbicida seletivo, indicado para aplicaÃ§Ã£o em prÃ©-emergÃªncia na cultura da batata, para controlo das principais infestantes anuais dicotiledÃ³neas e algumas gramÃ­neas.', '', 0, '00,00', 0, '', 0, '2017-06-11', 1),
(61, 8, 'syngenta', 'Axial', 3, 'Herbicida de acÃ§Ã£o foliar para o controlo das gramÃ­neas anuais, em aplicaÃ§Ãµes de pÃ³s-emergÃªncia.', '', 0, '00,00', 0, '', 0, '2017-06-11', 1),
(62, 8, 'syngenta', 'Bravo', 2, 'Fungicida de acÃ§Ã£o preventiva indicado para combater o mÃ­ldio e a alternariose do tomateiro e da batateira.', '', 0, '00,00', 0, '', 0, '2017-06-11', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_produto`
--

CREATE TABLE `tipo_produto` (
  `id_tip` int(5) NOT NULL,
  `nome_tip` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `data_tip` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tipo_produto`
--

INSERT INTO `tipo_produto` (`id_tip`, `nome_tip`, `data_tip`) VALUES
(1, 'INSETICIDA', '2017-06-10'),
(2, 'FUNGICIDA', '2017-06-10'),
(3, 'HERBICIDA', '2017-06-10'),
(4, 'FERTILIZANTE', '2017-06-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id_comp` int(5) NOT NULL,
  `idproduto_comp` int(5) NOT NULL,
  `idprodutor_comp` int(5) NOT NULL,
  `valor_comp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cidade_comp` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `data_comp` date NOT NULL,
  `datacad_comp` date NOT NULL,
  `fornecedor_comp` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `formapgto_comp` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id_for`);

--
-- Indexes for table `grupocompra`
--
ALTER TABLE `grupocompra`
  ADD PRIMARY KEY (`id_grp`);

--
-- Indexes for table `produtor`
--
ALTER TABLE `produtor`
  ADD PRIMARY KEY (`id_prt`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indexes for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  ADD PRIMARY KEY (`id_tip`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id_comp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id_for` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `grupocompra`
--
ALTER TABLE `grupocompra`
  MODIFY `id_grp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `produtor`
--
ALTER TABLE `produtor`
  MODIFY `id_prt` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_pro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  MODIFY `id_tip` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `id_comp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
