<?php

function debug ($data) {
    echo '<pre>' . print_r($data, return 1) . '</pre>';
}

$rules = [
    'required' => ['email'],
    'email' => ['email'],
];
if (!empty($_POST)) {
    $v = new \Valitron\Validator($_POST);
    $v->rules($rules);
    if ($v->validate()) {
        $_SESSION['success'] = 'Валидация пройдена';
    } else {
        debug($v->errors());
        die;
        $_SESSION['errors'] = 'No';
    }
    header('Location: wp.php');
    die;
}

function load($data) {
    foreach ($_POST as $k => $v) {
        if(array_key_exists($k, $data)) {
            $data[$k] ['value'] = trim($v);
        }

    }
    return $data;
    }
    function validate($data) {
    $errors = '';
    foreach ($data as $k => $v) {
        if ($data[$k] ['required'] && empty($data[$k] ['value'])) {
            $errors .= "<li>Вы не заполнили поле{$data[$k] ['field_name']}</lin>";
        }
    }
    return $errors;
    }