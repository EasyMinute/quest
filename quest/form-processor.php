<?php 

use Google\Client;
use Google\Service\Drive;






add_action('wp_ajax_send_to_drive', 'prt_send_form'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_send_to_drive', 'prt_send_form');

function prt_send_form(){

	/*
	*
	* Here is the place when the magic with files begin
	*
	*/
	$uploadedFiles= $_FILES;
	$dataArray = $_POST;
	
	// Google Drive API credentials and authentication
	$driveClient = new Google_Client();
	$driveClient->setAuthConfig(get_template_directory() . '/credentials/credentials-gsheets.json');
	$driveClient->addScope(Google_Service_Drive::DRIVE);
	// Create a Google Drive service instance
	$driveService = new Google_Service_Drive($driveClient);

	$file_link = '';

	foreach($uploadedFiles as $key => $uploadedFile){
		// File metadata
		if( is_uploaded_file($uploadedFile['tmp_name'])){
			$fileMetadata = new Google_Service_Drive_DriveFile(array(
			    'name' => basename($uploadedFile['name']),
			    'parents' => ['1Nvwnu7H422OlzWgwZJLB2VkKmHifo7NE'] // Replace with the ID of your desired Google Drive folder
			));

			// File content
			$content = file_get_contents($uploadedFile['tmp_name']);

			// Upload the file to Google Drive
			$file = $driveService->files->create($fileMetadata, array(
			    'data' => $content,
			    'mimeType' => 'application/octet-stream',
			    'uploadType' => 'multipart',
			    'fields' => 'id'
			));

			// Upload to certain folder
			if (isset($_POST['folder'])) {
				$fileMetadata = new Google_Service_Drive_DriveFile(array(
				    'name' => basename($uploadedFile['name']),
				    'parents' => [$_POST['folder']] // Replace with the ID of your desired Google Drive folder
				));

				// File content
				$content = file_get_contents($uploadedFile['tmp_name']);

				// Upload the file to Google Drive
				$file = $driveService->files->create($fileMetadata, array(
				    'data' => $content,
				    'mimeType' => 'application/octet-stream',
				    'uploadType' => 'multipart',
				    'fields' => 'id'
				));
			}

			// Print the uploaded file ID

			if ($key == 'nakaz') {
				$file_link = 'https://drive.google.com/file/d/' . $file->id;
			}
			echo $key . '<br>lllllll<br>' . $_POST['folder'];
		} else {
			echo $key . '<br>kkkkkkk<br>' . $_POST['folder'];
		}
	}

	/*
	*
	* Here is the place when the magic with sheets begin
	*
	*/

	$dataArray = $_POST;
	// $dataArray = $dataString;
	// parse_str($dataString, $dataArray);
	// print_r($dataArray);

	$client = new Google\Client();
	$client->setAuthConfig(get_template_directory() . '/credentials/credentials-gsheets.json');
	$client->addScope(Google_Service_Sheets::SPREADSHEETS);
	$service = new Google_Service_Sheets($client);
	$spreadsheetId = '1bF5qkYiFAZ30tb0i4e9FKhNYBRg1RhzEuSKY6LcEwAU';


	// DATA vars
	$learnForm = isset($dataArray['learnForm']) ? $dataArray['learnForm'] : '';
	$learnCycle = isset($dataArray['learnCycle']) ? $dataArray['learnCycle'] : '';
	$learnDates = isset($dataArray['learnDates']) ? $dataArray['learnDates'] : '';

	$name = isset($dataArray['surname']) ? $dataArray['surname'] : '';
	$name .= isset($dataArray['name']) ? ' ' . $dataArray['name'] : '';
	$name .= isset($dataArray['father']) ? ' ' . $dataArray['father'] : '';

	$birthday = isset($dataArray['birthday']) ? '' . $dataArray['birthday'] : '';
	$tel = isset($dataArray['tel']) ? '' . $dataArray['tel'] : '';
	$mail = isset($dataArray['mail']) ? '' . $dataArray['mail'] : '';

	$diploma = isset($dataArray['diplomaSerie']) ? $dataArray['diplomaSerie'] : '';
	$diploma .= isset($dataArray['diplomaNum']) ? ' ' . $dataArray['diplomaNum'] : '';
	$diploma .= isset($dataArray['diplomaGiver']) ? ' ,' . $dataArray['diplomaGiver'] : '';
	$diploma .= isset($dataArray['diplomaDate']) ? ' ,' . $dataArray['diplomaDate'] : '';

	$workplace = isset($dataArray['workplace']) ? '' . $dataArray['workplace'] : '';
	$job = isset($dataArray['job']) ? '' . $dataArray['job'] : '';
	$experience = isset($dataArray['experience']) ? '' . $dataArray['experience'] : '';

	$payment = isset($dataArray['payment']) ? '' . $dataArray['payment'] : '';
	
	
	$data = [['', $learnForm, $learnCycle, $learnDates, $name, $birthday, $tel, $mail, $diploma, $workplace, $job, $experience, $file_link, '', $payment]];

	$range = 'ВСІ!A:A'; // Example range, adjust according to your needs
	$valueRange = new Google_Service_Sheets_ValueRange([
	    'values' => $data
	]);
	$params = [
	    'valueInputOption' => 'RAW'
	];

	$service->spreadsheets_values->append($spreadsheetId, $range, $valueRange, $params);




	die();
}

?>