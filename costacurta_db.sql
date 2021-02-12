-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Feb 09, 2021 alle 10:26
-- Versione del server: 10.4.14-MariaDB
-- Versione PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `costacurta_db`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `affiliazioni`
--

CREATE TABLE `affiliazioni` (
  `aff_id` int(11) NOT NULL,
  `aff_name` varchar(200) NOT NULL,
  `aff_image` varchar(200) NOT NULL,
  `aff_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `affiliazioni`
--

INSERT INTO `affiliazioni` (`aff_id`, `aff_name`, `aff_image`, `aff_link`) VALUES
(1, 'Psiché', 'logo-psiche.png', 'https://poliambulatorisangaetano.it/psiche/'),
(2, 'Poliambulatorio San Giovanni', 'logo-giovanni.png', 'http://www.poliambulatoriosangiovanni.it'),
(3, 'Studio Carollo', 'carollo.png', 'http://www.giovannicarollo.it/giovannicarollo/Home.html');

-- --------------------------------------------------------

--
-- Struttura della tabella `articoli`
--

CREATE TABLE `articoli` (
  `art_id` int(11) NOT NULL,
  `art_data` date NOT NULL,
  `art_image` varchar(255) NOT NULL,
  `art_title` varchar(300) NOT NULL,
  `art_tag` varchar(200) NOT NULL,
  `art_link` varchar(255) NOT NULL,
  `art_note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `articoli`
--

INSERT INTO `articoli` (`art_id`, `art_data`, `art_image`, `art_title`, `art_tag`, `art_link`, `art_note`) VALUES
(17, '2021-01-28', 'fuoco.png', 'Toccato dal fuoco', '3', 'https://books.google.it/books/about/Toccato_dal_fuoco.html?id=qINwAAAACAAJ&source=kp_book_description&redir_esc=y', 'Kay Redfield Jamison'),
(18, '2021-01-28', 'le-opere-complete-cofanetto-x1000.png', 'Opere complete', '3', 'https://books.google.it/books/about/Opere_complete.html?id=h7P-6YqoUpcC&source=kp_book_description&redir_esc=y', 'Sigmund Freud'),
(19, '2021-01-29', 'libro-rosso.png', 'Il Libro rosso: Liber Novus', '3', 'https://books.google.it/books/about/Il_Libro_rosso.html?id=citdAwAAQBAJ&redir_esc=y', 'Carl Gustav Jung'),
(20, '2021-12-31', '618LSei-iOL.jpg', 'La teoria polivagale. Fondamenti neurofisiologici delle emozioni, dell\'attaccamento, della comunicazione e dell’autoregolazione', '3', 'https://books.google.it/books/about/La_teoria_polivagale_Fondamenti_neurofis.html?id=m1rKoQEACAAJ&source=kp_book_description&redir_esc=y', 'Stephen W. Porges'),
(21, '2021-02-01', '81KEBfbIaxL.jpg', 'Archeologia della mente. Origini neuroevolutive delle emozioni umane', '3', 'https://books.google.it/books/about/Archeologia_della_mente_Origini_neuroevo.html?id=BcJooAEACAAJ&source=kp_book_description&redir_esc=y', 'Jaak Panksepp, Lucy Biven'),
(22, '2021-02-02', 'empty-event.png', 'Congresso PSY 2021 - Società Svizzera di Psichiatria e Psicoterapia - SSPP', '2', 'https://www.psy-congress.ch/frontend/index.php?sub=148', '25 - 27 Agosto 2021'),
(23, '2021-02-03', 'epa.jpg', 'EPA Virtual 2021', '2', 'https://epa-congress.org/scientific-programme/', '10 - 13 Aprile 2021'),
(24, '2021-02-04', 'SOPSI2021virtual_banner-web_916x1217.jpg.webp', 'XXV Congresso Nazionale SOPSI', '2', 'https://sopsi.it/congresso/xxv-congresso-nazionale/', '24 - 27 Febbraio 2021');

-- --------------------------------------------------------

--
-- Struttura della tabella `contatti`
--

CREATE TABLE `contatti` (
  `cont_id` int(11) NOT NULL,
  `cont_type` varchar(200) NOT NULL,
  `cont_value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `contatti`
--

INSERT INTO `contatti` (`cont_id`, `cont_type`, `cont_value`) VALUES
(1, 'email', 'costacurta.andrea@gmail.com'),
(2, 'telefono', '320 366 0221');

-- --------------------------------------------------------

--
-- Struttura della tabella `disturbi`
--

CREATE TABLE `disturbi` (
  `disturbo_id` int(11) NOT NULL,
  `disturbo_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `disturbi`
--

INSERT INTO `disturbi` (`disturbo_id`, `disturbo_name`) VALUES
(1, 'depressione nell’adolescente, nell’adulto e nell’anziano'),
(2, 'disturbi d’ansia, attacchi di panico'),
(3, 'disturbo ossessivo compulsivo'),
(4, 'disturbi da stress e conseguenti a traumi'),
(5, 'disturbi psicosomatici ed ipocondriaci, somatizzazioni'),
(6, 'disturbi del comportamento alimentare: obesità, anoressia e bulimia'),
(7, 'disturbi del sonno: insonnia, incubi e terrore notturno'),
(8, 'disturbi del controllo degli impulsi'),
(9, 'disturbi della memoria, demenze senili e demenza di Alzheimer'),
(10, 'psicosi schizofreniche e deliranti'),
(11, 'disturbi della personalità'),
(13, 'disturbi cognitivi e del comportamento');

-- --------------------------------------------------------

--
-- Struttura della tabella `foto`
--

CREATE TABLE `foto` (
  `foto_id` int(11) NOT NULL,
  `foto_image` varchar(200) NOT NULL,
  `foto_name` varchar(200) DEFAULT NULL,
  `foto_cat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `foto`
--

INSERT INTO `foto` (`foto_id`, `foto_image`, `foto_name`, `foto_cat`) VALUES
(5, 'padova5.jpg', NULL, 'padova'),
(6, 'padova6.jpg', NULL, 'padova'),
(7, 'padova7.jpg', NULL, 'padova'),
(8, 'padova8.jpg', NULL, 'padova'),
(9, 'thiene1.jpeg', NULL, 'thiene'),
(10, 'thiene2.jpeg', NULL, 'thiene'),
(11, 'thiene3.jpeg', NULL, 'thiene'),
(13, 'Enlight14-1.JPG', NULL, 'suggestioni'),
(14, 'Enlight16-1.JPG', NULL, 'suggestioni'),
(15, 'Enlight67-1.jpg', NULL, 'suggestioni'),
(16, 'f5b3fadf-3135-4177-ad9d-055f93162f81.JPG', NULL, 'suggestioni'),
(17, 'IMG_0760.jpg', NULL, 'suggestioni'),
(18, 'IMG_0791.jpg', NULL, 'suggestioni'),
(19, 'IMG_0926.jpg', NULL, 'suggestioni'),
(20, 'IMG_1031-1.jpg', NULL, 'suggestioni'),
(21, 'IMG_1486-1.jpg', NULL, 'suggestioni'),
(22, 'IMG_1488.jpg', NULL, 'suggestioni'),
(24, 'IMG_2101.JPG', NULL, 'suggestioni'),
(25, 'IMG_2385.jpg', NULL, 'suggestioni'),
(26, 'IMG_2422-1.jpg', NULL, 'suggestioni'),
(27, 'IMG_2783.jpg', NULL, 'suggestioni'),
(28, 'IMG_3246.jpg', NULL, 'suggestioni'),
(30, 'IMG_3904.jpg', NULL, 'suggestioni'),
(31, 'IMG_4198.jpg', NULL, 'suggestioni'),
(32, 'IMG_4218.jpg', NULL, 'suggestioni'),
(33, 'IMG_4282.jpg', NULL, 'suggestioni'),
(34, 'IMG_4516.jpg', NULL, 'suggestioni'),
(35, 'IMG_7708.jpg', NULL, 'suggestioni'),
(36, 'IMG_8415.jpg', NULL, 'suggestioni'),
(39, 'chioggia3.jpg', NULL, 'chioggia'),
(43, 'padova1.jpg', NULL, 'padova'),
(44, 'padova2.jpg', NULL, 'padova'),
(45, 'padova3.jpg', NULL, 'padova'),
(46, 'padova4.jpg', NULL, 'padova'),
(50, 'Enlight1.JPG', NULL, 'suggestioni'),
(51, 'chioggia2.jpg', '', 'chioggia'),
(52, 'chioggia4.png', 'chioggia4', 'chioggia');

-- --------------------------------------------------------

--
-- Struttura della tabella `links`
--

CREATE TABLE `links` (
  `link_id` int(11) NOT NULL,
  `link_name` varchar(200) NOT NULL,
  `link_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `links`
--

INSERT INTO `links` (`link_id`, `link_name`, `link_path`) VALUES
(1, 'Ordine dei Medici di Padova', 'https://www.omco.pd.it'),
(2, 'VSalute', 'https://vsalute.it'),
(3, 'Timermagazine', 'https://timermagazine.press'),
(4, 'MioDottore', 'https://www.miodottore.it'),
(5, 'Studio Carollo', 'http://www.giovannicarollo.it'),
(6, 'Centro Psiché - Poliambulatorio San Gaetano', 'https://poliambulatorisangaetano.it/psiche'),
(7, 'Poliambulatorio San Giovanni', 'http://www.poliambulatoriosangiovanni.it');

-- --------------------------------------------------------

--
-- Struttura della tabella `profilo`
--

CREATE TABLE `profilo` (
  `pro_id` int(11) NOT NULL,
  `pro_desc` text NOT NULL,
  `pro_foto` varchar(50) NOT NULL,
  `pro_cv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `profilo`
--

INSERT INTO `profilo` (`pro_id`, `pro_desc`, `pro_foto`, `pro_cv`) VALUES
(1, 'Consulente Tecnico in ambito forense, già Direttore e Responsabile Clinico di Comunità. Libero professionista dal 2005, già Dirigente presso Dipartimento di Salute Mentale. Ha una riconosciuta e consolidata esperienza nella diagnosi e trattamento dei disturbi psichiatrici e caratteriali dell’età adulta. Inoltre si occupa di Diagnosi e cura, psicologica, medica e farmacologica dei principali disturbi fra i quali:', 'profile2.jpg', 'CV_ANDREA_COSTACURTA.pdf');

-- --------------------------------------------------------

--
-- Struttura della tabella `pubblicazioni`
--

CREATE TABLE `pubblicazioni` (
  `pub_id` int(11) NOT NULL,
  `pub_title` varchar(200) NOT NULL,
  `pub_subtitle` varchar(255) DEFAULT NULL,
  `pub_autor` varchar(200) NOT NULL,
  `pub_link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `pubblicazioni`
--

INSERT INTO `pubblicazioni` (`pub_id`, `pub_title`, `pub_subtitle`, `pub_autor`, `pub_link`) VALUES
(1, 'Efficacia della psicoterapia nella gestione delle condotte autolesive ', 'Studies of Aggressiveness and Suicide, Ottobre 2003(2) (pag. 22)', 'A. Costacurta, A. Frasson, G. Meneghel, P. Scocco, L. Pavan', 'Studi su aggressività Vol 2 2003.pdf'),
(2, 'Analisi descrittiva dei principali metodi autolesivi nell’adolescenza', 'In Simposio Internazionale: Accogliere, comprendere e sostenere l’adolescente che ha tentato il suicidio – Padova, 5-7 Febbraio 2004 (7 pp.)', 'A. Frasson, A. Costacurta, B. Corinto, A. Drago, L. Pavan', 'SIMPOSIO.pdf'),
(3, 'Post-intervento nel suicidio', 'Studies of Aggressiveness and Suicide, Ottobre 2004(4) (da pag. 41)', 'P. Scocco, A.Frasson, A. Costacurta et al.', 'Impaginato Vol 4 2004 Aggressività.pdf'),
(4, 'Post-intervento: Progetto Soproxi', 'in: L. Nuccio, C La Cascia, S Messina (Eds) Suicidio. E poi…? A.f.i.pre.s., Palermo, 2005', 'Scocco P, Costacurta A, Frasson A, Pavan L', 'SuicidioEPoi.pdf'),
(5, 'La Terra di Mezzo', 'I Georgofili, Quaderni 2005-I (6 pp.)', 'Costacurta A., Pavan L.', 'La_Terra_di_Mezzo-ACCADEMIA_DEI_GEORGOFILI-2005.pdf'),
(6, 'Valutazione dell’intenzionalità suicidaria in un campione di soggetti ospedalizzati in seguito ad un recente tentativo di suicidio', 'Studies of Aggressiveness and Suicide, Febbraio 2005(5) (14 pp.)', 'Meneghel G., Frasson A., Cavarzeran F., Corinto B., Costacurta A., Pavan L.', 'articolo_SAS.pdf'),
(7, 'Interpersonal Psychotherapy for suicide survivors', 'The Bulletin of International Society for Interpersonal Psychotherapy, November 2005(4:1) (8 pp.)', 'Scocco P., Frasson A., Costacurta A., Frank E., Corinto B., Drago A., Pavan L.', 'ISIPTBulletinNovember2005.pdf'),
(8, 'SOPRoxi: a research-intervention project for suicide survivors', 'Crisis 2006;27(1):39-41 (3 pp.)', 'Scocco P., Frasson A., Costacurta A., Pavan L.', 'Crisis.doc.pdf'),
(9, 'Vino e Salute Mentale. Un Contraddittorio Possibile', 'Accademia Pontificia delle Scienze – Città del Vaticano, 27 Ottobre 2007 (17 pp.)', 'Costacurta A., Pavan L.', 'Accademia_pontificia_27Ottobre07_Un_contraddittorio_possibile.pdf'),
(28, 'Il lutto in un suicidio', '', 'Costacurta A., Pavan L.', 'lutto.pdf');

-- --------------------------------------------------------

--
-- Struttura della tabella `quotes`
--

CREATE TABLE `quotes` (
  `quote_id` int(11) NOT NULL,
  `quote_text` text NOT NULL,
  `quote_img` varchar(100) NOT NULL,
  `quote_author` varchar(100) NOT NULL,
  `quote_page` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `quotes`
--

INSERT INTO `quotes` (`quote_id`, `quote_text`, `quote_img`, `quote_author`, `quote_page`) VALUES
(8, 'Rendi cosciente l’inconscio, altrimenti sarà l’inconscio a guidare la tua vita e tu lo chiamerai destino.', 'jung.jpg', 'Carl Gustav Jung', 0),
(9, 'Calma la mente, e l’anima parlerà.', 'majava.jpg', 'Ma Jaya Sati Bhagavati', 0),
(10, 'Non ci si libera di una cosa evitandola ma soltanto attraversandola.', 'pavese.jpg', 'Cesare Pavese', 0),
(11, 'In ogni caos c’è un cosmo, in ogni disordine un ordine segreto.', 'jung1.JPG', 'Carl Gustav Jung', 1),
(12, 'Non c’è niente di più profondo di ciò che appare in superficie.', 'hegel.jpg', 'Georg Wilhelm Friedrich Hegel', 2),
(13, 'Tutti, presto o tardi, abbiamo avuto la sensazione che qualcosa ci chiamasse a percorrere una certa strada.', 'hillman.JPG', 'James Hillmann', 3),
(14, 'Ho tutta l’anima incrinata di brividi di stelle.', 'quasi.jpg', 'Salvatore Quasimodo', 4),
(15, 'La psicoterapia comincia là dove finisce l’efficacia del buonsenso.', 'otto.jpg', 'Otto Kernberg', 5);

-- --------------------------------------------------------

--
-- Struttura della tabella `servizi`
--

CREATE TABLE `servizi` (
  `servizio_id` int(11) NOT NULL,
  `servizio_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `servizi`
--

INSERT INTO `servizi` (`servizio_id`, `servizio_name`) VALUES
(1, 'Attività peritali in ambito civile e penale'),
(2, 'Formazione specialistica in Suicidologia'),
(3, 'Prevenzione Terziaria (reinserimento sociale, lotta allo stigma)'),
(4, 'Certificazioni (IVG, Porto d’armi, Medicina del lavoro, Invalidità civile etc…)'),
(5, 'Consulenze in ambito Tossicodipendenze e Doppia Diagnosi'),
(6, 'Visite domiciliari'),
(8, 'Competenza per consulenze in lingua Inglese e Spagnola');

-- --------------------------------------------------------

--
-- Struttura della tabella `studi`
--

CREATE TABLE `studi` (
  `studio_id` int(11) NOT NULL,
  `studio_name` varchar(50) NOT NULL,
  `studio_adress` varchar(200) NOT NULL,
  `studio_link` varchar(200) NOT NULL,
  `studio_phone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `studi`
--

INSERT INTO `studi` (`studio_id`, `studio_name`, `studio_adress`, `studio_link`, `studio_phone`) VALUES
(1, 'Studio Carollo', 'Via Siracusa 63, Padova', 'http://www.giovannicarollo.it', '049 7967235'),
(2, 'Centro Psiché - Poliambulatorio San Gaetano', 'Via San Vincenzo 53, Thiene (VI)', 'https://poliambulatorisangaetano.it/psiche', '0445 382422'),
(3, 'Poliambulatorio San Giovanni', 'Viale Mediterraneo 155, Chioggia (VE)', 'http://www.poliambulatoriosangiovanni.it', '338 4386983');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'admin', '$2y$10$myFPrqPMnNo/ATb7c61tLelCBsiSe7APlYtWO6ceRrBW2XXgvPO4a', 'costacurta.andrea@gmail.com');

-- --------------------------------------------------------

--
-- Struttura della tabella `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(200) NOT NULL,
  `video_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `video`
--

INSERT INTO `video` (`video_id`, `video_name`, `video_link`) VALUES
(1, 'A. Schoenberg: Premonizioni op. 16', 'https://www.youtube.com/watch?v=-yso_ySltCY&feature=youtu.be'),
(2, 'L\'ARTE di KANDINSKY e la MUSICA di SCHÖNBERG', 'https://www.youtube.com/watch?v=3jfpm7isw5c&feature=youtu.be'),
(3, 'Intervista a James Hillman - L\'allievo di Jung completa', 'https://www.youtube.com/watch?v=y3dGMzjj9ss&feature=youtu.be'),
(4, 'Psicoterapia Cognitiva: Intervista a Gianni Liotti', 'https://www.youtube.com/watch?v=34Glr3AYWD8'),
(5, 'Giacomo Rizzolatti e la scoperta dei neuroni specchio', 'https://www.youtube.com/watch?v=87_6WJhWTms&feature=youtu.be'),
(6, 'Carl Gustav Jung dopo la Morte', 'https://www.youtube.com/watch?v=MGkoB1OjaVU'),
(7, 'An Optical Poem - Oskar Fischinger - 1937', 'https://www.youtube.com/watch?v=fuaylr6EQQM&feature=youtu.be');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `affiliazioni`
--
ALTER TABLE `affiliazioni`
  ADD PRIMARY KEY (`aff_id`);

--
-- Indici per le tabelle `articoli`
--
ALTER TABLE `articoli`
  ADD PRIMARY KEY (`art_id`);

--
-- Indici per le tabelle `contatti`
--
ALTER TABLE `contatti`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indici per le tabelle `disturbi`
--
ALTER TABLE `disturbi`
  ADD PRIMARY KEY (`disturbo_id`);

--
-- Indici per le tabelle `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`foto_id`);

--
-- Indici per le tabelle `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`link_id`);

--
-- Indici per le tabelle `profilo`
--
ALTER TABLE `profilo`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indici per le tabelle `pubblicazioni`
--
ALTER TABLE `pubblicazioni`
  ADD PRIMARY KEY (`pub_id`);

--
-- Indici per le tabelle `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`quote_id`);

--
-- Indici per le tabelle `servizi`
--
ALTER TABLE `servizi`
  ADD PRIMARY KEY (`servizio_id`);

--
-- Indici per le tabelle `studi`
--
ALTER TABLE `studi`
  ADD PRIMARY KEY (`studio_id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indici per le tabelle `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `affiliazioni`
--
ALTER TABLE `affiliazioni`
  MODIFY `aff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `articoli`
--
ALTER TABLE `articoli`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT per la tabella `disturbi`
--
ALTER TABLE `disturbi`
  MODIFY `disturbo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT per la tabella `foto`
--
ALTER TABLE `foto`
  MODIFY `foto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT per la tabella `links`
--
ALTER TABLE `links`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `pubblicazioni`
--
ALTER TABLE `pubblicazioni`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT per la tabella `quotes`
--
ALTER TABLE `quotes`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT per la tabella `servizi`
--
ALTER TABLE `servizi`
  MODIFY `servizio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT per la tabella `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
