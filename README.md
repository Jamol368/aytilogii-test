TEST TASK
---------

Собрать простое веб-приложение на yii2 с базой данных для обучения студентов в рамках курса.

Приложение используется для обучения в рамках одного курса (то есть не надо делать сущности курсов, модулей и тд, только уроки). В приложении имеются уроки, которые пользователь может проходить.

Пользователь логинится, попадает на главную страницу, на которой видит список уроков курса. Те, которые уже пройдены, отмечены зеленой галочкой. Пользователь может нажать на урок из списка и ему откроется страница урока, на которой есть заголовок урока, описание урока, видео из YouTube. После того, как пользователь посмотрел урок, он нажимает под видео кнопку "урок просмотрен". В этот момент пользователю засчитывается прохождение этого урока и открывается следующий для просмотра (реализовать с помощью ajax).

После нажатия на эту кнопку пользователя возвращает на общий список уроков, где он может выбрать и пройти другой урок. Когда пользователь прошел все уроки курса, то на странице уроков над ними виден отдельный блок с надписью о пройденном курсе (а все уроки отмечены галочками).

Внешний вид страниц необходимо реализовать простой, с помощью стандартных средств bootstrap на свое усмотрение.

Итог выполнения тестового:

- Ссылка на GitHub веб-приложения

- Файл базы данных

- настроенный конфиг vhost для приложения в apache

- скринкаст экрана, где вы показываете как работает ваше приложение