<?php
function send_wizard_email() {
  $name = sanitize_text_field($_POST['name']);
  $email = sanitize_email($_POST['email']);
  $phone = sanitize_text_field($_POST['phone']);
  $quantity = intval($_POST['quantity']);
  $price = sanitize_text_field($_POST['price']);

  $to = $email;
  $subject = 'Wizard Form Submission';
  $message = "Name: $name\nEmail: $email\nPhone: $phone\nQuantity: $quantity\nPrice: $price";
  $headers = array('Content-Type: text/plain; charset=UTF-8');

  if (wp_mail($to, $subject, $message, $headers)) {
    wp_send_json_success(array('message' => 'Email sent successfully.'));
  } else {
    wp_send_json_error(array('message' => 'Failed to send email.'));
  }
}
add_action('wp_ajax_send_wizard_email', 'send_wizard_email');
add_action('wp_ajax_nopriv_send_wizard_email', 'send_wizard_email');