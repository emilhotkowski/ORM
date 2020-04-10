CREATE TABLE IF NOT EXISTS `samochody` (
  `id` int(11) NOT NULL auto_increment,
  `marka` varchar(50) NOT NULL,
  `model` varchar(100) NOT NULL,
  `rok` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `silnik` float(11,2) NOT NULL,
  `waga` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--