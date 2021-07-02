<?php
/*
Plugin Name: Plugin by Abdo
Description: Example Plugin for Abdo
Author: Abdo
Version: 0.1.2
*/
function Example_form_plugin(){

    $content = '';
    $content .='<h2>Contact Us</h2>';
    $content .='<form action="" method="post">';
    $content .='<label for="name">Nom :</label>';
    $content .='<input type="text"  name="user_name" class="form-control" placeholder="Enter your name"><br><br>';

    $content .='<label for="mail">E-mail :</label>';
    $content .='<input type="email"  name="user_mail" class="form-control" placeholder="Enter your Email"><br><br>';

    $content .='<label for="msg">Message :</label>';
    $content .='<textarea  name="user_message" placeholder="Enter your Email"></textarea>';

    $content .='<input type="submit" name="submit"></input>';
    $content .='</form>';
    return $content;

}
add_shortcode('exapmle_form','example_form_plugin');

function example_form_capture()
{

    if(isset($_POST['submit']))
    {
        echo "thank you for sand a message";
    }
}

add_action('wp_head','example_form_capture');
