<?php
/*move_uploaded_file(string $from, string $to): bool
 проверяет, является ли файл from загруженным на сервер (переданным по протоколу HTTP POST).
  Если файл действительно загружен на сервер, он будет перемещён в место, указанное в аргументе to.
  from - Путь к загруженному файлу.
  to -   Путь, по которому необходимо переместить файл.
  В случае успешного выполнения возвращает true.
  Если результирующий файл уже существует, он будет перезаписан.
  https://work-html-form.herokuapp.com/upload.php - адресная стро
  https://dashboard.heroku.com/apps/work-html-form - проект на heroku
   
*/
   

//if (empty($_POST['file_name'])) {header('Location: form.html ');
//  exit();
//}
     $uploaddir = 'folder1/';
//$uploadfile = $uploaddir .basename( $_FILES['content']['name']);
$uploadfile = $uploaddir . $_POST['file_name'];
echo '<pre>';
if (move_uploaded_file($_FILES['content']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
    echo 'путь до исполняемого файла $_SERVER[\'PHP_SELF\'] -'.' '.$_SERVER['PHP_SELF'].'</br>';
    echo 'полный путь до исполняемого файла - '.' '.__FILE__.'</br>';
    echo 'размер файла-'.' '.$_FILES['content']['size'].'<br>';
    echo 'имя файла на ПК клиента-'.' '. $_FILES['content']['name'].'<br>'; 
    echo 'временный файл-'.' '. $_FILES['content']['tmp_name'].'<br>';
    echo 'тип файла-'.' '.$_FILES['content']['type'].'<br>'; 
    echo 'новое имя, с которым файл был загружен на сервер-'.' '. $_POST['file_name'].'<br>';

} else {
  // header('Location: form.html ');
    // exit();
    echo "Возможная атака с помощью файловой загрузки!\n";
   
}

echo 'Некоторая отладочная информация:'.'<br>';
print_r($_FILES);

print "</pre>";