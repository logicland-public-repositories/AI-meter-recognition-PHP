**AI-meter-recognition**

В цьому репозипорії зберігаються приклади з інтеграції сервісу Meter-recognition підприємства Logicland на мові програмування PHP.
На цьому профілі у GitHub можна знайти приклад інтеграції на ще 3 мови: Python, Java, C# 

Тут зберігається 2 файли написані на відповідній мові програмування:

1. record_recognition.php - це файл який реалізує функцію "record_recognition(string url, string login, string password, string image_path)" яка і виконує взаємодвію з нашим сервісом. Отож вам потрібно просто інтегрувати цей файл у структуру вашого проєкту і викликати функцію "record_recognition()" коли вам необхідно відправити фотографію на розпізнавання.
Аргумети функції:
    * url - посилання до нашого сервісу.
    * login - назва вашої ліцензії.
    * password - пароль до вашого акаунту (для цього сервісу він може відрізнятися від паролю до інших сервісів таких як "abon.com.ua" чи "Logic Land абонентська служба").
    * image_path - локальний шлях до місця збереження фотографії у файловій системі.
У випадку успішного розпізнавання фотографії "record_recognition()" поверне стрічку(String) у форматі JSON де показники будуть знаходитись за ключем "reading" та надійність цього значення за ключем "reliability"
	
2. example.php - це файл у якому зображений можливий метод використання функції "record_recognition()". Ми наполегливо рекомендуємо звернути увагу на ці приклади та на методи обробки вихідних данних. Кожен з прикладів можна запустити з консолі та перевірити їх роботу.

Для роботи цього сервісу вам необхідно мати встановленим: ваше PHP оточення та розширення cURL. Якщо cURL у вас відсутній його слід встановити. Для Linux/Unix операційних систем можна скористатися стандартними пакет-менеджерами.
* Для Debian-based систем, типу Ubuntu слід ввести в консоль: sudo apt-get install php-curl
* Для CentOS чи RHEL можна скористатися командою: sudo yum install php-curl
* Для системи Windows необхідно буде:
    - Знайти у папці в якій встановлений PHP файл php.ini
    - Відкрити файл та знайти там стрічку "extension=php_curl.dll"
    - Розкоментувати цю стрічку прибравши крапку з комою (;)
    - Перезапусти ваше PHP оточення

