Для запуска выполнить `php index.php`

База данных в `data/effective.sql`

Запрос вывода авторов

```SQL
SELECT a.*, COUNT(*) FROM author AS a
INNER JOIN author_book AS ab ON ab.author_id = a.id
INNER JOIN book AS b ON ab.book_id = b.id
GROUP BY a.id
HAVING COUNT(*) >=7
```