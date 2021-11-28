<?php

//Это приложение поддерживает статью [Начало работы с PHP на Heroku]
// (https://devcenter.heroku.com/articles/getting-started-with-php) - ознакомьтесь с ней.

// git clone git@github.com:heroku/php-getting-started.git - клонируем удаленный репо 
//во вновь создаваемый локальный
//  # or clone your own fork-  или форкаем вместо клоне?
//git remote add origin https://github.com/netology-git/demo.git привязать лольный репо удаленному

// cd php-getting-started
// heroku create
// git push heroku main
// heroku open
/*
файлы торые надо оставить (остальные можно удалить)
.htaccess - стартовый файл сервер идет туда сразу
.gitignore
app.json
composer.json - все чистим оставляем только:
{
  "require" : {

  },
  "require-dev": {
    "heroku/heroku-buildpack-php": "*"
  }
}
composer.lock
Procfile -самый выжный файл путь проеу на сервере?
Web - папка в ней наши рабочие файлы
READEME.md история, подсказки

*/
/*
вариант 2 
1. создаем на хероку новый проект
2.cd my-project/
$ git init
$ heroku git:remote -a work-html-form
$ git add .
$ git commit -am а
$ git push heroku master
(в нашем проекте получилось вот так -
git remote heroku to https://git.heroku.com/work-html-form.git)
*/