-- Baza danych: `mpc`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Struktura tabeli dla tabeli `mpc_list`
--

CREATE TABLE IF NOT EXISTS `mpc_list` (
`id` int(11) unsigned NOT NULL,
  `uhash` varchar(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `describe` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `views` int(11) NOT NULL,
  `created_ip` varchar(50) NOT NULL,
  `created_time` datetime NOT NULL,
  `vote` int(11) NOT NULL,
  `tekst0` varchar(30) DEFAULT 'empty',
  `tekst1` varchar(30) DEFAULT 'empty',
  `tekst2` varchar(30) DEFAULT 'empty',
  `tekst3` varchar(30) DEFAULT 'empty',
  `tekst4` varchar(30) DEFAULT 'empty',
  `tekst5` varchar(30) DEFAULT 'empty',
  `tekst6` varchar(30) DEFAULT 'empty',
  `tekst7` varchar(30) DEFAULT 'empty',
  `tekst8` varchar(30) DEFAULT 'empty',
  `tekst9` varchar(30) DEFAULT 'empty',
  `tekst10` varchar(30) DEFAULT 'empty',
  `tekst11` varchar(30) DEFAULT 'empty',
  `tekst12` varchar(30) DEFAULT 'empty',
  `tekst13` varchar(30) DEFAULT 'empty',
  `tekst14` varchar(30) DEFAULT 'empty',
  `tekst15` varchar(30) DEFAULT 'empty',
  `tekst16` varchar(30) DEFAULT 'empty',
  `tekst17` varchar(30) DEFAULT 'empty',
  `tekst18` varchar(30) DEFAULT 'empty',
  `tekst19` varchar(30) DEFAULT 'empty',
  `tekst20` varchar(30) DEFAULT 'empty',
  `tekst21` varchar(30) DEFAULT 'empty',
  `tekst22` varchar(30) DEFAULT 'empty',
  `tekst23` varchar(30) DEFAULT 'empty',
  `tekst24` varchar(30) DEFAULT 'empty',
  `tekst25` varchar(30) DEFAULT 'empty',
  `tekst26` varchar(30) DEFAULT 'empty',
  `tekst27` varchar(30) DEFAULT 'empty',
  `tekst28` varchar(30) DEFAULT 'empty',
  `tekst29` varchar(30) DEFAULT 'empty',
  `tekst30` varchar(30) DEFAULT 'empty',
  `tekst31` varchar(30) DEFAULT 'empty',
  `tekst32` varchar(30) DEFAULT 'empty',
  `tekst33` varchar(30) DEFAULT 'empty',
  `tekst34` varchar(30) DEFAULT 'empty',
  `tekst35` varchar(30) DEFAULT 'empty',
  `mFile0` varchar(255) DEFAULT 'silence.mp3',
  `mFile1` varchar(255) DEFAULT 'silence.mp3',
  `mFile2` varchar(255) DEFAULT 'silence.mp3',
  `mFile3` varchar(255) DEFAULT 'silence.mp3',
  `mFile4` varchar(255) DEFAULT 'silence.mp3',
  `mFile5` varchar(255) DEFAULT 'silence.mp3',
  `mFile6` varchar(255) DEFAULT 'silence.mp3',
  `mFile7` varchar(255) DEFAULT 'silence.mp3',
  `mFile8` varchar(255) DEFAULT 'silence.mp3',
  `mFile9` varchar(255) DEFAULT 'silence.mp3',
  `mFile10` varchar(255) DEFAULT 'silence.mp3',
  `mFile11` varchar(255) DEFAULT 'silence.mp3',
  `mFile12` varchar(255) DEFAULT 'silence.mp3',
  `mFile13` varchar(255) DEFAULT 'silence.mp3',
  `mFile14` varchar(255) DEFAULT 'silence.mp3',
  `mFile15` varchar(255) DEFAULT 'silence.mp3',
  `mFile16` varchar(255) DEFAULT 'silence.mp3',
  `mFile17` varchar(255) DEFAULT 'silence.mp3',
  `mFile18` varchar(255) DEFAULT 'silence.mp3',
  `mFile19` varchar(255) DEFAULT 'silence.mp3',
  `mFile20` varchar(255) DEFAULT 'silence.mp3',
  `mFile21` varchar(255) DEFAULT 'silence.mp3',
  `mFile22` varchar(255) DEFAULT 'silence.mp3',
  `mFile23` varchar(255) DEFAULT 'silence.mp3',
  `mFile24` varchar(255) DEFAULT 'silence.mp3',
  `mFile25` varchar(255) DEFAULT 'silence.mp3',
  `mFile26` varchar(255) DEFAULT 'silence.mp3',
  `mFile27` varchar(255) DEFAULT 'silence.mp3',
  `mFile28` varchar(255) DEFAULT 'silence.mp3',
  `mFile29` varchar(255) DEFAULT 'silence.mp3',
  `mFile30` varchar(255) DEFAULT 'silence.mp3',
  `mFile31` varchar(255) DEFAULT 'silence.mp3',
  `mFile32` varchar(255) DEFAULT 'silence.mp3',
  `mFile33` varchar(255) DEFAULT 'silence.mp3',
  `mFile34` varchar(255) DEFAULT 'silence.mp3',
  `mFile35` varchar(255) DEFAULT 'silence.mp3'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `mpc_list`
--

INSERT INTO `mpc_list` (`id`, `uhash`, `title`, `describe`, `tags`, `author`, `views`, `created_ip`, `created_time`, `vote`, `tekst0`, `tekst1`, `tekst2`, `tekst3`, `tekst4`, `tekst5`, `tekst6`, `tekst7`, `tekst8`, `tekst9`, `tekst10`, `tekst11`, `tekst12`, `tekst13`, `tekst14`, `tekst15`, `tekst16`, `tekst17`, `tekst18`, `tekst19`, `tekst20`, `tekst21`, `tekst22`, `tekst23`, `tekst24`, `tekst25`, `tekst26`, `tekst27`, `tekst28`, `tekst29`, `tekst30`, `tekst31`, `tekst32`, `tekst33`, `tekst34`, `tekst35`, `mFile0`, `mFile1`, `mFile2`, `mFile3`, `mFile4`, `mFile5`, `mFile6`, `mFile7`, `mFile8`, `mFile9`, `mFile10`, `mFile11`, `mFile12`, `mFile13`, `mFile14`, `mFile15`, `mFile16`, `mFile17`, `mFile18`, `mFile19`, `mFile20`, `mFile21`, `mFile22`, `mFile23`, `mFile24`, `mFile25`, `mFile26`, `mFile27`, `mFile28`, `mFile29`, `mFile30`, `mFile31`, `mFile32`, `mFile33`, `mFile34`, `mFile35`) VALUES
(1, '4eyf0', 'Programowanko', '', 'sdfsd,sdffdsfds,fsdfsd,dsfdsf,fdsfsd,dsfds', 'sdfsdf', 97, '::1', '2016-01-17 13:22:34', 11, 'sdfsdfds', 'empty', 'fsdfsdf', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'fdsfsdf', 'fdsfsdf', '6062df1945e7e132cc2972c85094371e781736dd.mp3', 'silence.mp3', '72abbbf65885812e75b52abd9f40ec8627727133.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', '1ae0a187342904db24797b92c6de6638dbb5edeb.mp3', 'dc836c1bff9f96ec9b93010ac4dbaad972c14598.mp3'),
(2, 'q51a2', 'cyka', '', '', 'cyka', 16, '::1', '2016-01-20 20:59:48', 1, 'cyka', 'cyka', 'cyka', 'cyka', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'ebfe51c7e5767984533fa30a4559b01936da353a.mp3', 'e4fef1cbf8d154f88e046b0927ad8cd1250ec8dc.mp3', 'efbc3d3e11641607f3124c66af5d1e2b93cbb905.mp3', 'f9d4f79d94eb6b7e6e9265abfe9a51116adc125c.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3', 'silence.mp3');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `mpc_list`
--
ALTER TABLE `mpc_list`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `mpc_list`
--
ALTER TABLE `mpc_list`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;--
