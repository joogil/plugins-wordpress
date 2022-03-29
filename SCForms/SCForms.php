<?php
    /*
     Plugin Name: SCForms
     Description: plugin for inserting forms on pages.
     Version: 0.1
     Author: Gilberto Souza
    */

    function scf_gs_form_1() {
        $content = "<form>";
        $content .= "<div>User Name: <input type='text' /></div>";
        $content .= "<div>Password: <input type='password' /></div>";
        $content .= "</form>";
        return $content;
    }
    add_shortcode('form1', 'scf_gs_form_1');

    function scf_gs_form_2() {
        $content = "<form>";
        $content .= "<div><label for='fname'>First name:</label>";
        $content .= "<input type='text' id='fname' /></div>";
        $content .= "<div><label for='lname'>Last name:</label>";
        $content .= "<input type='text' id='lname' /></div>";
        $content .= "Gender<div><input type='radio' id='f' /><label for='f'>Feminine</label>";
        $content .= "<input type='radio' id='m' /><label for='m'>Masculine</label>";
        $content .= "<input type='radio' id='not' /><label for='not'>Do not inform</label></div>";
        $content .= "<label for='birthday'>Birth Date: </label><input type='date' id='birthday' />";
        $content .= "</form>";
        return $content;
    }
    add_shortcode('form2', 'scf_gs_form_2');
?>
