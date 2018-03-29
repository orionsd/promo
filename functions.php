<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

	function getPage()
	{

	}

	function getSEO($page)
	{
		switch ($page) 
		{
			case '':
			case '/':
			case '/index.php':
				$result['title'] = 'Промо «Поколение NEXT»';
				break;

			case 'registration':
				$result['title'] = 'Регистрация';
				break;
			
			default:
				# code...
				break;
		}

		return $result;
	}

/**
* @param  array $data - массив данных
* @param  $db - подключение БД
* @return 1/0
*/
function saveRegistration(array $data, $db)
{
	if ((isEmptyReq($data)) || (empty($db)))
		return 'empty_error';

	$data = synchronizeArrayToTable($data);
	if (!$data)
		return 'synchro_error';

	if (!sendMail($data))
		$result = 'mail_error';
		
	return $db->insert('registration', $data)->rowCount();
}

/**
* Синхронизация ключей массива и заданных полей
* 
* @param array $data - массив данных
* @return array || bool
*/
function synchronizeArrayToTable(array $data)
{
	if (empty($data))
			return false;

	$columns = array(
			'reg_date',
			'surname',
			'name',
			'otch',
			'snum',
			'city',
			'phone',
			'email'
		);

	$data['reg_date'] = date('Y-m-d H:i:s');

	foreach ($data as $key => $value)
		if (!in_array($key, $columns)) unset($data[$key]);

	foreach ($columns as $value)
		if (!array_key_exists($value, $data)) $data[$value] = '';

	return $data;
}

/**
 * @param  array $data - массив данных
 * @return boolean
 */
function isEmptyReq(array $data)
{
	$required = array(
			'surname',
			'name',
			'otch',
			'city',
			'phone',
			'email'
		);

	foreach ($required as $req)
		foreach ($data as $key => $value)
			if ( ($key == $req) && (empty($value)) )
				return true;

	return false;
}

/**
* Отправляет письмо
* 
* @param array $data - массив данных для вставки в письмо
* @return bollean
*/
function sendMail(array $data)
{
	require_once(BASEDIR . 'assets/libs/PHPMailer/src/Exception.php');
	require_once(BASEDIR . 'assets/libs/PHPMailer/src/PHPMailer.php');
	require_once(BASEDIR . 'assets/libs/PHPMailer/src/SMTP.php');

	    $headers[]  = 'MIME-Version: 1.0' . "\r\n";
		$headers[] 	= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		$headers[] 	= 'From: advance@liwest.ru';

	    $to 		= 'li.west.corp@gmail.com';
	    // $to 		= 'shishkina@liwest.ru';
	    // $to 		= 'advance@liwest.ru';
	    $subject 	= 'Заполнена форма регистрации Промоушен 1+1';

	    extract($data);
	    
	    $message    = "<h1>Регистрация Промоушен 1+1 </h1><br>\r\n";
	    $message    .= "<b>ФИО</b>: " . $surname . ' ' . $name . ' ' . $otch . "<br>\r\n";
	    $message    .= "<b>Телефон</b>: " . $phone . "<br> \r\n";
	    $message    .= "<b>Email</b>: " . $email . "<br>\r\n";
	    $message    .= "<b>Город</b>: " . $city . "<br>\r\n";
	    if (!empty($snum))
	    	$message    .= "<b>Номер</b>: " . $snum . "<br>\r\n";
	    
		    $result = false;
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->IsHTML(true);
			$mail->From = "advance@liwest.ru";
			$mail->FromName = "promo.liwest.ru";
			$mail->Host = "mx1.liwest.ru";
			$mail->SMTPAuth = false;
			$mail->Mailer = "smtp";
			$mail->CharSet = "utf-8";
			$mail->Priority = 1;
			$mail->Timeout = 60;
			$mail->Subject = $subject;
			$mail->Body = 	$message; 
			$mail->AltBody = $message;
			// $mail->addAddress($to, "advance@liwest.ru");
			$mail->addAddress($to);
			
			if (!$mail->Send()) {
				$result = false; 
			} else {
				$result = true; 
			}	
		
			return $result;
}


/**
 * @param  array $data - логин-пароль
 * @param  $db - подключение БД
 * @return html/null
 */
function regAdm(array $data, $db)
{
	$result = 'empty_error';
	if (empty($data))
		return $result;

	if ( ($data['login'] == 'regin') && ($data['pass'] == '19821804') )
		$result = takeTable($db);

	return $result;
}


/**
 * @param  $db - подключение БД
 * @return html
 */
function takeTable($db)
{
	$reg = $db->select("registration", "*");

	$res = "<table class='table table-dark'>";
	$res .= "<tr>";
	$res .= "<td>№</td>";
	if (is_column('reg_date', $reg))
		$res .= "<td>Дата</td>";	
	$res .= "<td>ФИО</td>";
	$res .= "<td>Номер договора</td>";
	$res .= "<td>Город</td>";
	$res .= "<td>Телефон</td>";
	$res .= "<td>Email</td>";
	$res .= "</tr>";

    $num = 1;
    foreach ($reg as $val) : 
      $res .= "<tr>";
      $res .= "<td>" . $num . "</td>";
      if (is_column('reg_date', $reg))
		$res .= "<td>" . $val['reg_date'] . "</td>";	
      $res .= "<td>" . $val['surname'] . ' ' . $val['name'] . ' ' . $val['otch'] . "</td>";
      $res .= "<td>" . $val['snum'] . "</td>";
      $res .= "<td>" . $val['city'] . "</td>";
      $res .= "<td>" . $val['phone'] . "</td>";
      $res .= "<td>" . $val['email'] . "</td>";
      $res .= "</tr>";
      $num++;
    endforeach;
  	$res .= "</table>";

  	return $res;
}

/**
 * @param  string $column - имя колонки
 * @param  array $data - результат функции medoo->select()
 * @return boolean
 */
function is_column($column, array $data)
{
	foreach ($data as $val)
		if (array_key_exists($column, $val))
			return true;

	return false;
}

?>