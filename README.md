# WT
### Lab 1 (HTML + CSS / Browser)
#### Задание:
1. Выбрать тематику сайта.
2. Сделать набросок структуры страниц (расположение заголовка, меню, основной области, боковых блоков, подвала и т.д. см. пример рис.1)
3. Разработать набор веб-страниц (HTML, CSS) выбранной тематики. Наполнить страницу содержимым соответствующим предметной области выбранного сайта. На одной из страниц обязательно должна быть форма. Использовать блочную вёрстку.
4. Каждый набор должен включать не менее пяти страниц разного типа (титульная, новости, поиск, карта сайта, каталог товаров и тому подобное).

### Lab 2 (PHP / GET, POST)
#### Общее задание:
На экран вывести ссылки меню с названиями (например "О компании", "Услуги", "Прайс", "Контакты"). При клике по ссылке меняется и остается измененным цвет фона вокруг активной ссылки. Весь код на одной странице. Не использовать javascript. Использовать GET-запросы.

#### Задание:
Сгенерировать HTML-таблицу с количеством строк, которое вводится в поле формы (вводить количество не менее 10). Каждая 5-я строка должна иметь зеленый фон, а фон остальных строк меняется в оттенках серого от #000 до #FFF (шестнадцатеричная система) с одновременным увеличением выбранного компонента цвета в каждой следующей строке.

### Lab 3 (PHP / Functions, Files)
#### Задание:
Создать файл companies.csv (разделитель полей запятая). На странице создать форму для добавления в базу информации о компаниях: name, address, phone, email. В случае отсутствия (name) или существовании такой компании в базе выдать предупреждение. Вывести информацию из файла в отдельном блоке. Сделать поиск по названию.

#### Расширенное задание:
+ Написать часть системы управления сайтом, отвечающую за добавление, удаление и перемещение файлов. Фактически требуется реализовать примитивный веб-ориентированный файловый менеджер для управления файловой системой на стороне сервера. Использовать добавленный файл, если графический отобразить, текстовый – отобразить первые 30 символов. Дополнительными возможностями такого файлового менеджера может быть управление каталогами, редактирование текстовых файлов, конвертация графических файлов, шифрование и дешифрование файлов, создание и распаковка архивов и тому подобное.
+ Написать элементарный шаблонизатор, выполняющий поиск и подстановку в шаблонах элементов без параметров (например, {TIME}, {DATE} и тому подобное) В качестве шаблонов использовать результат задания первой ла-бораторной работы. Результатом данной работы долен стать скрипт, генерирующий динамически часть содержимого страниц сайта.

### Lab 4 (PHP / Regexp)
#### Задание:
Написать программу оставления отзывов. Форма: Имя, Сообщение. Отправленные
сообщения хранить в файле и выводить в блоке выше формы. Все ссылки в отправляемом сообщении типа http://mysite.by, https://www.mysite.by/price и т.д. должны заменяться на текст #Внешние ссылки запрещены#. Ссылки на сайт БГУИР типа http://bsuir.by, https://www.bsuir.by/ru/ kafedry-bguir и т.д. остаются в тексте. Вся проверка в одном регулярном выражении. 

#### Расширенное задание:
Написать шаблонизатор (программу, управляющую сборкой готовых HTML-страниц из отдельных шаблонов). Шаблонизатор должен уметь обрабатывать следующие инструкции:
+ {FILE="path_to_file"} – чтение и подстановка указанного файла;
+ {CONFIG="value"} – чтение и подстановка значения из конфигурационного файла;
+ {VAR="variable_name"} – подстановка значения из массива $VARS, формируемого в процессе работы приложения;
+ {DB="value"} – подстановка значения из предопределённой таблицы в БД, хранящей текстовые надписи, настройки приложения и тому подобную информацию;
+ {IF "var_1"</>/==/!=/<=/>="var2"} PART1 {ELSE} PART2 {ENDIF} – анализ условия и удаление из шаблона той части, которая не соответствует условию; условия могут быть вложенными; часть {ELSE} может отсутствовать.

### Lab 5 (PHP / MySQL)
#### Задание:
Написать скрипт, отображающий структуру и данные всех таблиц указанной БД. (таблиц не менее 4-х, отобразить также первичные и вторичные ключи, и типы полей).

#### Расширенное задание:
На основе результатов выполнения расширенных заданий в лабораторных работах 1–4 доработать программу формирования пользовательской и администраторской частей сайта в контексте взаимодействия с СУБД, а именно:
+ реализовать хранение структуры сайта в БД;
+ реализовать построение карты сайта и поиска по сайту;
+ реализовать протоколирование действий администратора;
+ реализовать такие модули сайта как (на выбор) голосование, показ случайного баннера, подписка на рассылку.

### Lab 6 (PHP / Cookies)
#### Задание:
Написать два скрипта, один из которых формирует произвольный набор данных (числа, строки, массивы) и передаёт их другому скрипту в сериализованной форме. Второй скрипт десериализует данные.

#### Расширенное задание:
Реализовать механизм регистрации и авторизации пользователей, механизм авторизации администратора, механизм управления списком и набором прав пользователей. 
В механизме авторизации пользователей предусмотреть возможность долговременной авторизации (функция "запомнить меня"), а также кратковременной авторизации с максимальной
защитой личных данных (функция "чужой компьютер").
В случае, если разрабатываемое вами программное средство допускает использование электронной корзины, реализовать её.
В случае, если разрабатываемое вами программное средство допускает использование поиска по сайту, доработать его таким образом, чтобы для каждого посетителя (в т.ч. такого, который не зарегистрирован и не авторизован) хранилась история его поисковых запросов.

### Lab 7 (PHP / Mail)
#### Задание:
Выведите форму на сайте со следующими полями: «Получатели», «Тема», «Текст сообщения» и кнопкой «Отправить». В поле «Получатели» введите через пробел или другой установленный раздельный символ(, или;) адреса электронной почты получателей. Получите все данные из формы, проверьте их правильность, при ошибке выведите соответствующее сообщение, оставив введенные в полях формы, при успешном результате проверки - разошлите письмо. Сохраните в текстовом файле список получателей.

#### Расширенное задание:
Создать программу типа калькулятора заказа. Выбор опций товара (например, пицца): вид (несколько на выбор), размер (несколько на выбор), доп. ингредиенты (несколько на выбор), доставка или самовывоз, имя, email, адрес покупателя (с проверками на корректность ввода), комментарии. Кнопки «Посчитать цену» (приветствуется написание блока расчета цен на языке JavaScript, чтобы пересчитывать стоимость "на лету" при выборе опций) и «Заказать». Отправить сформированный заказ (сообщение в html-формате, с соответствующим тематике оформлением, табличным видом и т.д.) на почты "менеджера" и "заказчика". Добавить заказ в БД. Создать приложение для "менеджера", где он сможет просматривать содержимое БД по заказам, устанавливать статус выполнения заказа, отсылать "заказчику" письмо об успешном выполнении или отказе.

### Lab 8 (PHP / Statistics)
#### Задание:
Написать скрипт, собирающий статистику по используемым посетителями ресурса браузерам. Выводить результаты в виде HTML-таблицы со списком браузеров, отсортированным по убыванию количества пользующихся ими посетителей сайта.

#### Расширенное задание:
Доработать до динамического статический сайт, разработанный на Лабораторной работе №1.
В любом случае необходимо модернизировать сайт:
+ Повторяющиеся элементы страниц, такие как Header, Footer, меню должны подгружаться из шаблонов.
+ Сайт должен взаимодействовать с базой данных MySQL, генерировать меню, страницы и информацию из БД.
+ Сайт должен иметь активную форму регистрации пользователя.
+ Должны присутствовать форма заказа, модуль подписки пользователей на рассылку уведомлений и модуль рассылки таких уведомлений или хотя бы форма обратной связи с функцией отправки по e-mail.
+ Модуль сбора и анализа статистики посещения сайта.