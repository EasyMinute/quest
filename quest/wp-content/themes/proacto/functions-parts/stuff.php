<?php
function custom_contact_form_submission($contact_form) {
    $submission = WPCF7_Submission::get_instance();

    if ($submission) {
        $data = $submission->get_posted_data();
        if ($contact_form->id() == 161) {
            $email = sanitize_email($data['email']);
            $name = sanitize_text_field($data['your-name']);
            $message = sanitize_textarea_field($data['message']);
            $subscribe = isset($data['news']) ? true : false;

            $content = array(
                'name' => $name,
                'message' => $message,
                'subscribe' => $subscribe,
            );
            $type = 'c';
        } elseif($contact_form->id() == 5) {
            $email = sanitize_email($data['your-email']);
            $os_system = isset($data['os_system']) ? sanitize_text_field($data['os_system'][0]) : '';
            $content = array(
                'os_system' => $os_system
            );
            $type = 't';
        } elseif($contact_form->id() == 162) {
            $email = sanitize_email($data['email']);
            $name = sanitize_text_field($data['your-name']);
            $surname = sanitize_text_field($data['your-surname']);
            $organization = sanitize_text_field($data['organization']);
            $phone = $data['phone'];
            $message = sanitize_textarea_field($data['message']);



            $content = array(
                'name' => $name,
                'surname' => $surname,
                'organization' => $organization,
                'phone' => $phone,
                'message' => $message,
            );
            $type = 'p';
        }

        $request_body = array(
            'email' => $email,
            'content' => json_encode($content),
            'type_of_request' => $type
        );

        $request_args = array(
            'method' => 'POST',
            'body' => $request_body,

        );

        $endpoint = get_field('api_endpint_url', 'options');
        $response = wp_remote_post($endpoint, $request_args);
        // Optionally, you can check the response for success or handle errors here
        return false;

    }
}
add_action('wpcf7_before_send_mail', 'custom_contact_form_submission');
?>