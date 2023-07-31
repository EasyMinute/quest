<?php 
// Add a custom action hook when the form is submitted successfully
add_action('wpcf7_before_send_mail', 'custom_process_form_submission');

function custom_process_form_submission($contact_form) {
    // Get the form ID
    $form_id = $contact_form->id();
    // wp_die("TEST", 'API Request Error', array('response' => 400));
    // add_filter('wpcf7_display_message', function ($message, $status, $id) {
    //                 return 'csdcdscds';
    //             }, 10, 3);
    // Check if this is the form you want to intercept (replace 123 with your form ID)
    // if ($form_id == 5) {
        // Get form data
        $submission = WPCF7_Submission::get_instance();

        if ($submission) {

            // Get form data as an array
            $form_data = $submission->get_posted_data();

            // Prepare the data for the API request (adjust this according to your needs)
            $api_data = array(

                // 'name' => isset($form_data['your-name']) ? $form_data['your-name'] : '',
                'email' => isset($form_data['your-email']) ? $form_data['your-email'] : '',
                'content' => isset($form_data['your-message']) ? json_encode($form_data['your-message']) : '',
                'type_of_request' => 'c',
            );

            // Convert $api_data to JSON format
            // $api_data_json = json_encode($api_data);

            $api_url = 'https://api.questatlas.world/common/requests';

            // Send the API request using wp_remote_post()
            $response = wp_remote_post($api_url, array(
                'method' => 'POST',
                'body' => $api_data, // Send the JSON data
                'cookies' => array()
            ));

            error_log('API Request Error: ' . $response);

            // if (is_wp_error($response)) {
            //     // Handle the error if the API request failed
            //     error_log('API Request Error: ' . $response->get_error_message());
            // } else {
            //     // The API request was successful, and you can access the response data
            //     $response_code = wp_remote_retrieve_response_code($response);
            //     $response_message = wp_remote_retrieve_response_message($response);
            //     $response_body = wp_remote_retrieve_body($response);

            //     // Uncomment the following lines for debugging purposes
            //     error_log('API Response Code: ' . $response_code);
            //     error_log('API Response Message: ' . $response_message);
            //     error_log('API Response Body: ' . $response_body);
            // }


            return false;
        }
    // }
}
?>