

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `diplom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` datetime DEFAULT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `answers`
--

INSERT INTO `answers` (`id`, `content`, `date`, `question_id`, `user_id`) VALUES
(7, '\"Твои глаза как две шоколадные медальки\" :))', '2017-05-07 03:33:45', 18, 1),
(8, 'Думают, но не тем местом :)', '2017-05-07 04:28:56', 17, 1),
(9, 'Вряд ли...', '2017-05-07 05:08:59', 3, 1),
(10, 'Жрать меньше надо.', '2017-05-07 13:17:08', 16, 1),
(11, 'Я думаю просто денюшек не хватило...', '2017-05-07 16:58:50', 6, 1),
(12, 'А на дебиан больше расширений :)', '2017-05-07 17:04:36', 5, 1),
(13, 'Сила мотивации всему причина :)', '2017-05-07 18:06:27', 14, 1),
(14, 'Привязать к батарее баночку с валерианкой :)', '2017-05-07 18:07:41', 13, 1),
(15, 'Первый исчерпывающий ответ', '2017-05-08 04:47:03', 4, 1),
(18, 'Не стоит такой задачи, видимо...', '2017-05-09 04:25:43', 15, 30),
(20, 'Пожалуй, да.', '2017-05-09 18:15:28', 34, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(3, 'Bash'),
(2, 'Debian'),
(5, 'JS'),
(4, 'PHP'),
(1, 'Ubuntu'),
(6, 'Жизненное');

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` datetime DEFAULT NULL,
  `status` varchar(12) NOT NULL DEFAULT 'pending',
  `has_answer` tinyint(4) DEFAULT '0',
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `title`, `content`, `date`, `status`, `has_answer`, `category_id`, `user_id`) VALUES
(3, 'Будет ли у Debian своя графическая оболочка?', 'И когда?', '2017-05-04 13:06:26', 'pending', 1, 2, 4),
(4, 'Заголовок первого вопроса', 'Увлекательное содержание первого вопроса', '2017-05-04 13:11:47', 'published', 1, 1, 5),
(5, 'Дебиан или Арчик?', 'Говорят что арч стабильнее.', '2017-05-04 13:18:00', 'pending', 1, 2, 6),
(6, 'Почему убунту прикрыла Unity?', 'По словам Шаттлворта, он рассчитывал на то, что, будучи перспективными и свободными, идеи по развитию комбинированного рабочего стола на базе Unity будут оценены как сообществом, так и представителями индустрии, не довольными имеющимися закрытыми альтернативами. Но он ошибся в обоих направлениях. Сообщество расценило проект как фрагментацию, а не инновацию. А представители индустрии не воспользовались возможностью и посчитали, что \"известная беда лучше ожидаемой неизвестности\", или инвестировали в создание своих аналогов технологии Convergence. Unity 8 получился отличным продуктом, но судьба разработки находится в руках рынка и сообщества, которые определяют, остаться ему на плаву или исчезнуть.', '2017-05-04 13:43:30', 'published', 1, 1, 7),
(7, 'Как выучить Bash за 2 часа?', 'Как научиться так чтобы совсем не учиться, просто сесть, посмотреть телевизор, потом покушать, потом лечь спать, а потом чтобы проснулся и bash знал весь как профи с 20летнем стажем?', '2017-05-04 15:06:00', 'pending', 0, 3, 8),
(8, 'Философский вопрос', 'Содержание философского вопроса', '2017-05-04 17:49:52', 'pending', 0, 4, 9),
(9, 'Как стать PHP-гуру?', 'Как стать PHP-гуру, так чтобы почти ничего не учить, и чтобы код почти не писать, а так чтобы пару часов, оп и готово?', '2017-05-04 17:50:52', 'pending', 0, 4, 10),
(10, 'А нельзя ли как-то скромнее кошачий корм называть?', 'Почему моя кошка жрёт \"рагу из кролика в сливочном соусе\", а я макароны с сосиской?', '2017-05-04 21:25:50', 'pending', 0, 6, 11),
(11, 'Что, жалко сахорочку?', 'А Вас тоже раздражает, когда в гостях дело доходит до торта и когда хочешь добавить в чай сахар, тебе говорят: \"Куда? Торт и так сладкий!\".', '2017-05-04 21:27:22', 'pending', 0, 6, 12),
(12, 'Вопрос про женскую эволюцию', 'А помните, как в детском саду нарисуешь  маме на 8 марта \"каляку-маляку\" - она так  радуется! Почему  с женой этот фокус не проходит???', '2017-05-04 21:28:42', 'pending', 0, 6, 13),
(13, 'Как заземлить кота?', 'У меня есть кот. Он не дает себя гладить. Потому что когда к нему прикасаешься, его сразу бьет током. Сначала он просто убегал, но теперь начинает атаковать в ответ. Если тут есть электрики, подскажите пожалуйста, как заземлить кота?', '2017-05-04 21:29:59', 'published', 1, 6, 14),
(14, 'Не к трапезе вопрос', 'Почему некоторые женщины ведут себя так, как будто бы они никогда не какают и не пукают?', '2017-05-04 21:31:40', 'hidden', 1, 6, 15),
(15, 'Почему Debian+Gnome не поддерживает старые видеокарты?', 'radeonHD старенький не поддерживает :(', '2017-05-04 21:34:09', 'published', 1, 2, 16),
(16, 'Где мои кубики?', 'Вот уже тридцать два года я каждый день встаю с кровати. Это более 11600 подходов на пресс.\r\nВопрос:  Где мои кубики?', '2017-05-05 11:55:14', 'published', 1, 6, 17),
(17, 'Стратегический вопрос', 'Интересно, а люди, которые советуют мне \"Быть самым собой\", понимают весь масштаб возможных последствий?', '2017-05-05 11:57:22', 'published', 1, 6, 18),
(18, 'Про глаза', 'Вот парни говорят \"твои глаза как два океана\". Ладно, эта фраза подходит для тех у кого голубые и даже зелёные глаза, а что же говорят про глаза тем девушкам, у которых они карие?!', '2017-05-05 20:51:21', 'published', 1, 6, 19),
(34, 'Последний вопрос', 'Тест завершен?', '2017-05-09 18:03:25', 'published', 1, 3, 40);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL DEFAULT 'guest'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ironerg@gmail.com', 'admin'),
(4, 'Семен', NULL, 'mail@mail.c', 'guest'),
(5, 'Вассылий', NULL, 'mail@mail.c', 'guest'),
(6, 'Любитель Дебиана', NULL, 'ironerg@gmail.com', 'guest'),
(7, 'd', NULL, 'mail@mail.c', 'guest'),
(8, 'Вассылий', NULL, 'mail@mail.c', 'guest'),
(9, 'Задающий', NULL, 'mail@mail.c', 'guest'),
(10, 'PHPGuru', NULL, 'mail@mail.c', 'guest'),
(11, 'Заядлый кошачник', NULL, 'cat@mail.com', 'guest'),
(12, 'Сладкоешка', NULL, 's@mail.co', 'guest'),
(13, 'Художник по жизни', NULL, 'pick@mail.com', 'guest'),
(14, 'Котовладелец', NULL, 'cat@mail.com', 'guest'),
(15, 'Философ', NULL, 'fil@mail.ru', 'guest'),
(16, 'DebianUser', NULL, 'iuser@mail.com', 'guest'),
(17, 'Спортсмен', NULL, 'sport@mail.ru', 'guest'),
(18, 'Великий стратег', NULL, 'strateg@mail.ru', 'guest'),
(19, 'Окулист', NULL, 'mail@mail.c', 'guest'),
(20, 'sd', NULL, 'mail@mail.c', 'guest'),
(21, 'фыв', NULL, 'mail@mail.c', 'guest'),
(22, 'as', NULL, 'mail@mail.c', 'guest'),
(30, 'John', '202cb962ac59075b964b07152d234b70', 'john@mail.com', 'admin'),
(31, 'Jaff', '202cb962ac59075b964b07152d234b70', 'j.waters@mail.com', 'admin'),
(40, 'Последний задающий', NULL, 'last@mail.com', 'guest');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`,`question_id`,`user_id`),
  ADD KEY `fk_answers_questions1_idx` (`question_id`),
  ADD KEY `fk_answers_users1_idx` (`user_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`,`category_id`,`user_id`),
  ADD KEY `fk_questions_categories1_idx` (`category_id`),
  ADD KEY `fk_questions_users1_idx` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `fk_answers_questions1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_answers_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `fk_questions_categories1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_questions_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
