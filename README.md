Аутентификация была установлена с пакета Laravel/UI - установленным отдельно

Проект был переделан по требования полей (пароль,логин, email,ФИО)

Проведены миграции уже имеющихся и изменненной таблицы и проект был протестирован.
![image](https://user-images.githubusercontent.com/49536834/113519582-d750e200-9595-11eb-9273-bbe85ae90d69.png)
![image](https://user-images.githubusercontent.com/49536834/113519606-fb142800-9595-11eb-933c-3b0deb54dd6f.png)
![image](https://user-images.githubusercontent.com/49536834/113519621-14b56f80-9596-11eb-8074-cf9da4ce4ef5.png)
![image](https://user-images.githubusercontent.com/49536834/113519656-4595a480-9596-11eb-8888-3116c98727b3.png)

Личный кабинет и редактирование профиля
![image](https://user-images.githubusercontent.com/49536834/113617197-c28c5100-965e-11eb-9fea-8b873a4368cb.png)
![image](https://user-images.githubusercontent.com/49536834/113617245-d1730380-965e-11eb-8f9d-9095b312333b.png)

В ходе проверки запуска скачанного репозитория были выделены дополнительные требования к запуску/установке.

Обновление зависимостей пакетов командой "composer update --no-scripts"

Если при запуске сервера возникла ошибка 500, в моем случае было вызвано отсутсвие востановленного файла переменных подключени и решалась запуском следующего кода "mv .env.example .env"

Ну и генерация нового ключа для проекта кодом "php artisan key:generate"
