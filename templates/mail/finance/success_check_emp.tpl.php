<?php

/**
 * П-22 - Заказчику об успешной проверке Финансов модератором 
 */

/**
 * Тема письма
 */
$smail->subject = "Ваши финансовые данные успешно проверены модератором";

//extract($data);

?>
Модератор сайта FL.ru успешно завершил проверку данных на странице Финансы вашего аккаунта.
Теперь вы можете вернуться к своим Заказам (Безопасным сделкам) и продолжить процедуру резервирования суммы.
<a href="<?php echo "{$GLOBALS['host']}/users/{$user['login']}/tu-orders/"; ?>">Перейти к заказам</a>
