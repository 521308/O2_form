O2_form
Состоит из 3 ".html" и 3 ".css" файлов, попарно расположенных в иерархическом порядке. Index.html и myprofile/profile.html состоят из 2 секций: Основная и iframe. Файл myprofile/forms/form.html состоит из 1 цельноой секции
Функция отправки сообщений
Для создания подключена библиотека PHPMailer
в /myprofile/forms/ есть 3 .php файла:

1) settings.php
2) functions.php
3) index.php

В 1 файле находятся настройки для получения email на почту (Нужно указать свои)
Во 2 функция для отправки, настройки из 1-го файла передаются сюда для обработки. Если все выполняется без ошибок - вызывается функция send(), иначе - ошибка
В 3 локальным переменным присваиваются значения из формы. Далее они форматируются и с помощью функции из 2-го файла отправляются