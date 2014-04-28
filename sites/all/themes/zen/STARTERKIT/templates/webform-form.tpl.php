<?php
foreach ($form["submitted"] as $key => $value) {
    if ("textfield" == @$value["#type"]) {
        $form["submitted"][$key]['#attributes']["placeholder"] = t($value["#title"]);  // добавляем атрибут
	       unset( $form["submitted"][$key]['#title']);  // скрываем заголовок
    } 

}
$form['submitted']['name']['#attributes']['placeholder'] = t('Введите Ваше Имя');
$form['submitted']['phone']['#attributes']['placeholder'] = t('Введите Ваш телефон');

$form['submitted']['email']['#attributes']['placeholder'][] = t('Введите Ваш e-mail');

/**
 * @file
 * Customize the display of a complete webform.
 *
 * This file may be renamed "webform-form-[nid].tpl.php" to target a specific
 * webform on your site. Or you can leave it "webform-form.tpl.php" to affect
 * all webforms on your site.
 *
 * Available variables:
 * - $form: The complete form array.
 * - $nid: The node ID of the Webform.
 *
 * The $form array contains two main pieces:
 * - $form['submitted']: The main content of the user-created form.
 * - $form['details']: Internal information stored by Webform.
 */
?>
<?php
  // Print out the main part of the form.
  // Feel free to break this up and move the pieces within the array.
  print drupal_render($form['submitted']);

  // Always print out the entire $form. This renders the remaining pieces of the
  // form that haven't yet been rendered above.
  print drupal_render_children($form);

