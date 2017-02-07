-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 17, 2016 at 09:50 AM
-- Server version: 10.0.25-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.4-7ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultatie`
--

CREATE TABLE `consultatie` (
  `pk` int(11) NOT NULL,
  `pacient_id` int(11) NOT NULL,
  `nr_inregistrare` int(11) NOT NULL,
  `spital` varchar(60) NOT NULL,
  `judet_spital` varchar(60) NOT NULL,
  `oras_spital` varchar(60) NOT NULL,
  `sectie` varchar(45) NOT NULL,
  `medic` varchar(50) NOT NULL,
  `internarezi` int(10) NOT NULL,
  `internareluna` varchar(18) NOT NULL,
  `internarean` int(10) NOT NULL,
  `externarezi` int(10) NOT NULL,
  `externareluna` varchar(18) NOT NULL,
  `externarean` int(10) NOT NULL,
  `diagnosticprin` text NOT NULL,
  `diagnosticsec` text NOT NULL,
  `observatii` text NOT NULL,
  `nr_fisa` varchar(40) NOT NULL,
  `cod` varchar(40) NOT NULL,
  `datazi` int(10) NOT NULL,
  `dataluna` varchar(18) NOT NULL,
  `dataan` int(60) NOT NULL,
  `ora` int(5) NOT NULL,
  `oraminut` int(5) NOT NULL,
  `simtome` text NOT NULL,
  `diagnostic` text NOT NULL,
  `compensatie` varchar(3) NOT NULL,
  `valcompensatie` varchar(20) NOT NULL,
  `medicament1` varchar(80) NOT NULL,
  `medicament2` varchar(80) NOT NULL,
  `medicament3` varchar(80) NOT NULL,
  `cantitate1` varchar(30) NOT NULL,
  `cantitate2` varchar(30) NOT NULL,
  `cantitate3` varchar(30) NOT NULL,
  `tipul_boala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultatie`
--

INSERT INTO `consultatie` (`pk`, `pacient_id`, `nr_inregistrare`, `spital`, `judet_spital`, `oras_spital`, `sectie`, `medic`, `internarezi`, `internareluna`, `internarean`, `externarezi`, `externareluna`, `externarean`, `diagnosticprin`, `diagnosticsec`, `observatii`, `nr_fisa`, `cod`, `datazi`, `dataluna`, `dataan`, `ora`, `oraminut`, `simtome`, `diagnostic`, `compensatie`, `valcompensatie`, `medicament1`, `medicament2`, `medicament3`, `cantitate1`, `cantitate2`, `cantitate3`, `tipul_boala`) VALUES
(8, 19, 0, 'asd', 'asd', 'asd', 'asd', 'asd', 18, 'IANUARIE', 1917, 0, '', 0, 'sdf', 'sdfs', 'sdf', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'diabet'),
(14, 20, 0, 's', 's', 's', 's', 's', 18, 'NOIEMBRIE', 1947, 16, 'NOIEMBRIE', 1916, 's', 's', 's', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'diabet'),
(15, 22, 45, 'Baltazar', 'Ilfov', 'Sector3', 'Neuroliogie', 'Marius', 16, 'APRILE', 2012, 0, '', 0, 'asdadasdasdasdasdas', 'asdasdasdasdasd', 'asdasdasd', '32', '45b', 15, 'MAI', 2012, 16, 0, 'cxzvfxcvcx', 'xvxcvfxcv', 'DA', 'Gratuit', 'dxcvc', 'xcv', '', '', '1', '1', 'diabet'),
(22, 15, 14, 'asdasd', 'Ialomita', 'slobozia', '23', 'fsdfsdfs', 17, 'AUGUST', 1915, 17, 'OCTOMBRIE', 1916, 'Tipareste un sir de caractere. Originea este in stanga primului caracter, la linia de baza. Aceasta metoda plaseaza un text precis in pagina, dar este de obicei mai usor de folosit Cell(), MultiCell() sau Write(), care sunt metodele standard de tiparire text. ', 'Tipareste un sir de caractere. Originea este in stanga primului caracter, la linia de baza. Aceasta metoda plaseaza un text precis in pagina, dar este de obicei mai usor de folosit Cell(), MultiCell() sau Write(), care sunt metodele standard de tiparire text. ', 'Tipareste un sir de caractere. Originea este in stanga primului caracter, la linia de baza. Aceasta metoda plaseaza un text precis in pagina, dar este de obicei mai usor de folosit Cell(), MultiCell() sau Write(), care sunt metodele standard de tiparire text. ', '1', 'dfsdf', 0, '', 0, 0, 0, 'Tipareste un sir de caractere. Originea este in stanga primului caracter, la linia de baza. Aceasta metoda plaseaza un text precis in pagina, dar este de obicei mai usor de folosit Cell(), MultiCell() sau Write(), care sunt metodele standard de tiparire text. ', 'Tipareste un sir de caractere. Originea este in stanga primului caracter, la linia de baza. Aceasta metoda plaseaza un text precis in pagina, dar este de obicei mai usor de folosit Cell(), MultiCell() sau Write(), care sunt metodele standard de tiparire text. ', 'DA', '50', 'sdfsdf', 'sfsdfsd', 'sdfsdf', '1', '1', '1', 'Sinuzita'),
(23, 21, 1, 'dgfdf', 'dfgdfg', 'dgfdg', '1', 'dfgdfg', 0, '', 0, 0, '', 0, 'dfgdfg', 'sdfsdf', 'sdfsf', '23', 'sdfs', 17, 'MAI', 1916, 17, 0, 'adsasdas', 'adasd', 'DA', '50', 'asdasd', 'asdsa', '', '', '1', '1', 'diabet'),
(25, 18, 1635, 'Institutul Național de Boli Infecțioase Prof. Dr. Matei Balș', 'Sector 2', 'Bucucresti', 'Copii', 'Mantescu Ruxandra', 24, 'FEBRUARIE', 2016, 24, 'MARTIE', 2016, 'Mengita Acuta cu LCR clar.\r\nHerpes regiunea cotului  stang.\r\n', 'Rinosinuzita acuta.\r\nAnemie  moderata.', 'Prezinta la internare: febra, gratea, varsaturi, cefalee, dureri abdominale difuza.\r\nEvolutia  este favorabila, cu  remiterea sindromul meningean.\r\nIn 26-03-2016 apare un  herpes in reginuea articulatiei cotului drept.\r\nRecomandari:\r\nEvitarea intemperiilor.\r\nControl periodic la medicul  de familie.', 'b1635', 'MA35', 24, 'FEBRUARIE', 2016, 15, 0, 'Fetita in varsta de  7 ani.G=20kg, vine prin  transfer de  la spitalul Judetean Slobozia cu diagnosticul de  "meningita acuta cu lichid clar".\r\nSe externeza afrebil , cu stare  generala  buna, eruptia veziculoasa s-a tratat.\r\n', 'Meningita acuta cu LCR clar.\r\nHerpes regiunea cotului stang .', 'DA', '50', 'Aciclovir-2 zile', 'Amoksiklav-2 ziel-conform Rp', '', '2', '2', '30', 'Meningita acuta'),
(26, 15, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'diabet'),
(27, 23, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Pneumonie'),
(28, 24, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Pneumonie'),
(29, 25, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Pneumonie'),
(30, 25, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Pneumonie'),
(31, 26, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Meningita acuta'),
(32, 27, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Meningita acuta'),
(33, 28, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Meningita acuta'),
(34, 29, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Laringita'),
(35, 30, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Laringita'),
(36, 31, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Laringita'),
(37, 32, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Hepatita'),
(38, 33, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Hepatita'),
(39, 34, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Hepatita'),
(40, 35, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Pneumonie'),
(41, 36, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Laringita'),
(42, 37, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Laringita'),
(43, 38, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Laringita'),
(44, 39, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Laringita'),
(45, 40, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Sinuzita'),
(46, 41, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'Sinuzita'),
(47, 41, 0, '', '', '', '', '', 0, '', 0, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', 'cancer'),
(48, 19, 0, '', '', '', '', '', 11, 'IANUARIE', 2015, 6, 'FEBRUARIE', 2015, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', ''),
(49, 20, 0, '', '', '', '', '', 17, 'FEBRUARIE', 2015, 15, 'AUGUST', 2015, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', ''),
(50, 21, 0, '', '', '', '', '', 17, 'IANUARIE', 2014, 17, 'MARTIE', 2015, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', ''),
(51, 22, 0, '', '', '', '', '', 16, 'MARTIE', 2015, 13, 'IULIE', 2015, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', ''),
(52, 23, 0, '', '', '', '', '', 10, 'MAI', 2015, 11, 'IULIE', 2015, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', ''),
(53, 26, 0, '', '', '', '', '', 17, 'MAI', 2015, 17, 'IULIE', 2015, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', ''),
(54, 27, 0, '', '', '', '', '', 13, 'MAI', 2015, 16, 'SEPTEMBRIE', 2015, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', ''),
(55, 29, 0, '', '', '', '', '', 17, 'OCTOMBRIE', 2015, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', ''),
(56, 30, 0, '', '', '', '', '', 15, 'AUGUST', 2015, 17, 'NOIEMBRIE', 2015, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', ''),
(57, 31, 0, '', '', '', '', '', 7, 'APRILE', 2015, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', ''),
(58, 33, 0, '', '', '', '', '', 14, 'IULIE', 2015, 0, '', 0, '', '', '', '', '', 0, '', 0, 0, 0, '', '', 'DA', '50', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `medic_asistent`
--

CREATE TABLE `medic_asistent` (
  `id` int(11) NOT NULL,
  `nume` varchar(30) NOT NULL,
  `prenume` varchar(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `parola` text NOT NULL,
  `rparola` mediumtext NOT NULL,
  `rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medic_asistent`
--

INSERT INTO `medic_asistent` (`id`, `nume`, `prenume`, `email`, `parola`, `rparola`, `rol`) VALUES
(1, 'marius', 'gabriel', 'mariuscmg92@yahoo.com', 'linux32', 'linux32', 'medic'),
(3, 'ciocoi', 'madalina', 'madi_honey1@yahoo.com', '123', '123', 'asistent');

-- --------------------------------------------------------

--
-- Table structure for table `pacientadd`
--

CREATE TABLE `pacientadd` (
  `id` int(11) NOT NULL,
  `nume` varchar(35) NOT NULL,
  `prenume` varchar(35) NOT NULL,
  `varsta` int(2) NOT NULL,
  `cnp` bigint(14) NOT NULL,
  `sex` varchar(12) NOT NULL,
  `zi` int(35) NOT NULL,
  `luna` varchar(30) NOT NULL,
  `an` varchar(60) NOT NULL,
  `loc_nastere` varchar(90) NOT NULL,
  `adresa` varchar(90) NOT NULL,
  `stare_civila` varchar(35) NOT NULL,
  `ocupati` varchar(35) NOT NULL,
  `studii` varchar(70) NOT NULL,
  `serie` varchar(15) NOT NULL,
  `telefonfix` varchar(11) NOT NULL,
  `telefonmobil` varchar(10) NOT NULL,
  `email` varchar(36) NOT NULL,
  `asigurat` varchar(2) NOT NULL,
  `salariat` varchar(20) NOT NULL,
  `coasigurat` varchar(20) NOT NULL,
  `liberprofesionist` varchar(20) NOT NULL,
  `copil` varchar(20) NOT NULL,
  `elevstudent` varchar(20) NOT NULL,
  `gravida` varchar(20) NOT NULL,
  `pensionar` varchar(20) NOT NULL,
  `veteran` varchar(20) NOT NULL,
  `venit` varchar(20) NOT NULL,
  `revolutionar` varchar(20) NOT NULL,
  `handicap` varchar(20) NOT NULL,
  `pns` varchar(20) NOT NULL,
  `ajutorsocial` varchar(20) NOT NULL,
  `somaj` varchar(20) NOT NULL,
  `card_europen` varchar(20) NOT NULL,
  `altele` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pacientadd`
--

INSERT INTO `pacientadd` (`id`, `nume`, `prenume`, `varsta`, `cnp`, `sex`, `zi`, `luna`, `an`, `loc_nastere`, `adresa`, `stare_civila`, `ocupati`, `studii`, `serie`, `telefonfix`, `telefonmobil`, `email`, `asigurat`, `salariat`, `coasigurat`, `liberprofesionist`, `copil`, `elevstudent`, `gravida`, `pensionar`, `veteran`, `venit`, `revolutionar`, `handicap`, `pns`, `ajutorsocial`, `somaj`, `card_europen`, `altele`) VALUES
(15, 'Caltea', 'Marius-Gabriel', 24, 19202220211231, 'masculin', 20, 'FEBRUARIE', '1992', 'Slobozia', 'Str.Inginerilor nr73', 'NECASATORIT', 'Programator PHP/SQL/WEB', 'Superioare', 'SZ-286234', '214564', '0721853203', 'mariuscmg92@yahoo.com', 'DA', 'salariat', 'coasigurat', 'liberprof', '', 'elev', '', '', '', '', '', '', '', '', '', 'cardeuro', 'altele'),
(18, 'Ciocoi', 'Madalina', 22, 29405182119868, 'feminin', 18, 'MAI', '1994', 'Slobozia', 'Viilor', 'NECASATORIT', 'Student', 'Medii', 'SZ-123', '', '073492462', 'madalinaciocoi@yahoo.com', 'NU', 'salariat', 'coasigurat', '', '', 'elev', '', '', '', 'minimec', '', '', 'pns', 'ajutorsocial', '', '', 'altele'),
(19, 'Vlad', 'George-Bogdan', 18, 19652220281231, 'masculin', 25, 'septembrie', '1997', 'Alexandria', 'Str Alexandru Ghica', 'NECASATORIT', 'Student', 'Medii', 'TL-243454', '', '0784174620', 'vladgeorge@yahoo.com', 'DA', '', 'coasigurat', '', 'copil', 'elev', '', '', '', '', 'revolutionar', '', '', '', '', 'cardeuro', 'altele'),
(20, 'Soare', 'Adirian-Marius', 34, 19025856437236, 'masculin', 25, 'iulie', '1974', 'Slobozia', 'Str:Viilor,nr18', 'CASATORIT', 'Argonom', 'Superioare', 'SZ-286245', '', '0762628070', 'adi@yahoo.com', 'DA', 'salariat', 'coasigurat', '', '', 'elev', 'gravida', 'pensionar', 'veteran', 'minimec', 'revolutionar', '', '', '', '', 'cardeuro', 'altele'),
(21, 'Popa', 'Gabriel', 24, 19202280551593, 'masculin', 20, 'august', '1992', 'Slobozia', 'Str.George Enescu,nr 85', 'NECASATORIT', 'Student', 'Medii', 'SZ-123453', '', '0737091724', 'popagabi@gamil.com', 'NU', 'salariat', 'coasigurat', '', '', 'elev', '', 'pensionar', '', '', '', '', 'pns', '', '', 'cardeuro', 'altele'),
(22, 'Adam', 'Lorena', 26, 29842642879349, 'feminin', 14, 'septembrie', '1989', 'Pitesti', 'Str:Lalelelor', 'NECASATORIT', 'Contabila', 'Superioare', 'PL-28759', '', '0765989663', 'adamlordana@yahoo.com', 'DA', 'salariat', '', '', 'copil', '', '', '', '', '', '', '', '', '', '', 'cardeuro', 'altele'),
(23, 'Manea', 'Mihai', 27, 19202855418231, 'masculin', 2, 'martie', '1989', 'Ploiesti', 'Str:Alexandru Ioan Cuza, nr 56', 'NECASATORIT', '', 'Medii', 'PH-453276', '', '0798586348', 'maneamihai@yahoo.com', '', 'salariat', 'coasigurat', '', '', '', '', '', '', '', '', '', '', '', '', 'cardeuro', 'altele'),
(24, 'Anton', 'Alexandru-Razvan', 25, 19356258748529, 'masculin', 14, 'august', '1990', 'Bucuresti', 'Str:Zambilei, nr 45', 'NECASATORIT', '', 'Superioare', 'IF-896932', '', '0786865360', 'alexandru@gmail.com', 'DA', 'salariat', '', '', 'copil', '', '', '', '', '', '', '', '', '', '', 'cardeuro', 'altele'),
(25, 'Popescu', 'Marian', 54, 1934232342342, 'masculin', 17, 'octombrie', '1979', 'Calarasi', 'Str:Stadionului,nr 13', 'CASATORIT', 'Mecanic', 'Medii', 'CL-452312', '', '0769755303', 'popescum@yahoo.com', 'NU', 'salariat', '', '', '', '', '', 'pensionar', '', '', '', '', '', 'ajutorsocial', '', '', ''),
(26, 'Zanfir', 'Oana', 24, 2925548765231, 'feminin', 17, 'octombrie', '1992', 'Giurgiu', 'Str,Macesului,nr78', 'NECASATORIT', 'Studenta', 'Superioare', 'GI-453221', '', '0721763223', 'oana@yahoo.com', 'DA', 'salariat', 'coasigurat', '', '', 'elev', '', '', '', '', '', '', '', '', '', '', 'altele'),
(27, 'Bucur', 'Mara', 22, 294051821192, 'feminin', 18, 'mai', '1994', 'Bucuresti', 'Intrarea  Barsei ,bl m9 bis,sc A,etj 4 ,ap ,15 ', 'NECASATORIT', 'Studenta', 'Medii', 'IF-324324', '0214564', '0721858203', 'bucurmara@yahoo.com', 'DA', '', '', '', '', 'elev', '', '', '', '', '', '', '', '', '', 'cardeuro', 'altele'),
(28, 'Costea ', 'Ilinca', 21, 2950612210087, 'feminin', 12, 'iunie', '1995', 'Bucuresti', 'Str.Fat- Frumos, nr.2, Sc. B, et.2, ap.10', 'NECASATORIT', 'Studenta', 'Medii', 'IF331234', '0218594', '0734972461', 'costeacj@gmail.com', 'DA', '', '', '', '', 'elev', 'gravida', '', '', '', '', '', '', 'ajutorsocial', '', '', ''),
(29, 'Dobrin ', 'Petru', 20, 19202620211231, 'masculin', 19, 'ianuarie', '1996', 'Braila', 'Str.Sfintii Voievozi, bl.8, sc.A, et.6, ap.23', 'NECASATORIT', 'Student', 'Medii', 'XR 634454', '0214964', '0721872098', 'dobrinticu@gmail.com', 'DA', '', '', '', '', 'elev', '', '', '', '', '', '', '', '', '', 'cardeuro', ''),
(30, 'Condeiu ', 'Robert', 28, 2901308311276, 'masculin', 11, 'octombrie', '1990', 'Bucuresti', 'Str. Matei Basarab, nr.4', 'CASATORIT', 'Manager ', 'superioare ', 'IF-286234', '0214564', '0727853203', 'condeiur@yahoo.com', 'DA', 'salariat', 'coasigurat', '', 'copil', '', '', '', '', '', '', '', '', '', '', 'cardeuro', 'altele'),
(31, 'Selaru', 'Tudor', 24, 2890606312287, 'masculin', 17, 'mai', '1989', 'Bucuresti', 'Str.Alexandru cel Bun, nr.2A', 'CASATORIT', 'Bucatar', 'medi', 'IF 124321', '0219569', '0784146234', 'tudorselaru.1@yahoo.com', 'DA', 'salariat', '', '', '', '', '', 'pensionar', '', '', '', '', '', '', '', '', ''),
(32, 'Ionita', 'Isabel', 27, 28910193425563, 'feminin', 18, 'noiembrie', '1989', 'Braila', 'Str.Sfintii Ierarhi, nr.7, bl.3', 'CASATORIT', '', 'superioare', 'XR 143872', '0217594', '0769169855', 'hurtadoisa@gmail.com', '', '', '', '', '', '', 'gravida', '', '', '', '', '', '', '', '', 'cardeuro', ''),
(33, 'Parvan ', 'Beatrice ', 28, 2951679762133, 'feminin', 3, 'martie', '1985', 'Slobozia', 'Str.Stadionului, nr.4 A, bl.1', 'CASATORIT', 'Profesor invatamant prescolar ', 'superioare', 'SZ 116432', '0216576', '0736773451', 'bettybeatrice@yahoo.com', '', 'salariat', '', '', 'copil', '', '', '', '', '', '', '', '', '', '', 'cardeuro', ''),
(34, 'Petrache ', 'Alexandru ', 30, 1871215365478, 'masculin', 7, 'mai', '1980', 'Bucuresti ', 'Str.Florilor, nr.4, bl.2 ', 'CASATORIT', 'Doctor stomatolog ', 'superioare ', 'IF 231438', '0218667', '0737988734', 'cosnitaani1@yahoo.com', '', 'salariat', '', '', '', '', '', '', '', '', '', '', '', '', '', 'cardeuro', ''),
(35, 'Brezoiescu', 'Andrei', 25, 19202220211239, 'masculin', 14, 'iulie', '1990', 'Bucresti', 'Viilor,nr56', 'NECASATORIT', 'Asistent Manger', 'Medii', 'IF-342123', '0', '0721853207', 'brezoiescu@gamil.com', 'DA', 'salariat', 'coasigurat', '', 'copil', '', '', '', '', '', '', '', '', '', '', 'cardeuro', ''),
(36, 'Cobzariu', 'Andrei', 26, 19202226211231, 'masculin', 15, 'octombrie', '1989', 'Calarasi', 'Str Alexandru Ghica,  nr, 67', 'CASATORIT', 'Mecanic', 'Superioare', 'CL-2343223', '0214564', '0721863203', 'andreigamil@gamil.com', 'NU', 'salariat', '', '', 'copil', '', '', '', '', '', '', '', '', '', '', 'cardeuro', ''),
(37, 'Porumbel', 'Marian', 34, 19302220211231, 'masculin', 24, 'noiembrie', '1956', 'Bacau', 'Str.Zambilei, nr 98', 'CASATORIT', 'Manager', 'Superioare', 'BC-345655', '0', '0721856423', 'porumbelm92@yahoo.com', 'DA', 'salariat', '', '', '', '', '', 'pensionar', '', '', '', '', '', '', '', 'cardeuro', ''),
(38, 'Pilos', 'Andra', 28, 294058821198, 'feminin', 23, 'august', '1987', 'Timisoara', 'Bl.Ioan Cuza, nr 100', 'CASATORIT', 'contabila', 'Superioare', 'TI-234423', '0', '0727853203', 'andrapilos@hotmail.com', '', 'salariat', 'coasigurat', '', '', '', '', 'pensionar', '', '', '', '', '', '', '', 'cardeuro', ''),
(39, 'Marin', 'Antonela', 36, 294051621198, 'feminin', 13, 'septembrie', '1938', 'Iasi', 'Str.Voda,nr 123', 'CASATORIT', 'Croitoresa', 'Medii', 'IS-345321', '0214564', '0736853203', 'antonela@hotmail.com', '', 'salariat', '', '', '', '', '', '', '', '', '', '', '', '', '', 'cardeuro', ''),
(40, 'Moraru', 'Sorin', 32, 19262220211231, 'masculin', 16, 'octombrie', '1964', 'Bucuresti', 'Str.Fainari,nr 123', 'CASATORIT', 'Inginer Constructor', 'Superioare', 'IF-123236', '0', '0721863203', 'morarusorin@gamil.com', '', 'salariat', 'coasigurat', '', '', '', '', '', '', '', '', '', '', '', '', 'cardeuro', ''),
(41, 'Grigoreanu', 'Vlad', 27, 19206660211231, 'masculin', 22, 'iunie', '1922', 'Cluj-Napcoca', 'Str,Vineri ,  nr 12', 'CASATORIT', 'Inginer Constructor', 'Superioare', 'CJ-345654', '0214564', '0751853203', 'vlad@yahoo.com', '', 'salariat', '', '', 'copil', '', '', '', '', '', '', '', '', '', '', 'cardeuro', 'altele');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultatie`
--
ALTER TABLE `consultatie`
  ADD PRIMARY KEY (`pk`),
  ADD KEY `pacient_id` (`pacient_id`),
  ADD KEY `pacient_id_2` (`pacient_id`);

--
-- Indexes for table `medic_asistent`
--
ALTER TABLE `medic_asistent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pacientadd`
--
ALTER TABLE `pacientadd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultatie`
--
ALTER TABLE `consultatie`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `medic_asistent`
--
ALTER TABLE `medic_asistent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pacientadd`
--
ALTER TABLE `pacientadd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `consultatie`
--
ALTER TABLE `consultatie`
  ADD CONSTRAINT `consultatie_ibfk_1` FOREIGN KEY (`pacient_id`) REFERENCES `pacientadd` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
