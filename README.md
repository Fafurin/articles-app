# Тестовое задание на позицию PHP Backend developer junior в компанию Pitch


Необходимо написать http api клиент, реализующий ленту статей

Структура новости:

article: {

"id",

"title",

"category",

“author”,

"publishedAt"

}

category: {

"id",

"title",

"createdAt"

}

Обязательно:

ендпоинт создания статьи; ендпоинт листинга всех статей с пагинацией и фильтром по категории.

Дополнительно: реализовать возможность поставить "лайк" или отменить его; реализовать возможность просмотра списка всех оценивших статью пользователей.

Технологии: любой современный фреймворк, предпочтительно symfony 5/6; реляционная бд MySql/PG; плюсом будет докер среда.
