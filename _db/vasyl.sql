
CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `author_name_ix` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `name`) VALUES
(1, 'Dave Wreckl'),
(2, 'Jimmy Hendrix'),
(5, 'Joe Satriani'),
(7, 'John Petrucci'),
(6, 'Michael York'),
(4, 'Steve Gad'),
(3, 'Steve Vai');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `book_title_ix` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `title`) VALUES
(4, 'Building the Church'),
(6, 'Concert G3'),
(5, 'Drum Rudiments '),
(1, 'Drums in my life'),
(3, 'My life in Stratovarius'),
(2, 'Playing guitar');

-- --------------------------------------------------------

--
-- Структура таблицы `library`
--

CREATE TABLE IF NOT EXISTS `library` (
  `book_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  KEY `author_id-mtm` (`author_id`),
  KEY `book_id-mtm` (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `library`
--

INSERT INTO `library` (`book_id`, `author_id`) VALUES
(4, 3),
(6, 5),
(6, 3),
(5, 1),
(1, 4),
(3, 6),
(2, 7);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `library`
--
ALTER TABLE `library`
  ADD CONSTRAINT `authors` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `books` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
