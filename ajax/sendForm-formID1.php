<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
/*
$recaptcha = new \ReCaptcha\ReCaptcha(RE_SEC_KEY);
$resp = $recaptcha->verify($_REQUEST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

if (!$resp->isSuccess()){
	foreach ($resp->getErrorCodes() as $code) {
		echo "error";
		
		$errorFlag = "Y";
		
	}
}

if($errorFlag != "Y"){
	*/
	global $USER;
	CModule::IncludeModule("iblock");
	CModule::IncludeModule("form");

	$arValues = array(
		"form_text_1" => $_POST["user-name"],
		"form_text_2" => $_POST["user-phone"],
		"form_text_3" => $_POST["user-zal"],
	);
	//Создаем новый результат
	//Если все ок, надо письмо админу отправить
	if($RESULT_ID = CFormResult::Add(1, $arValues)){
		//Отправляем письмо
		//Если все ОК, чето делаем
		if(CFormResult::Mail($RESULT_ID)){
			CFormCrm::AddLead(1, $RESULT_ID);
			//Вся цепочка закончилась успехом, поздравляю
			echo "success";
		}
		//Если не ОК, тоже наверное что то делаем...
		else{
			
		}
	}

//}
?>