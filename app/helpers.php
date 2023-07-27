<?php

use Illuminate\Support\Facades\Session;

if (!function_exists('show_error_msg')) {
    function show_error_msg()
    {

        $msg = '';
        if (!empty(Session::has('error'))) {
            $msg .= '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="padding-right: 0px;">';
            $msg .= '<strong>Error!</strong>&nbsp;' . Session::get('error');
            $msg .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: #000;">';
            $msg .= ' <span aria-hidden="true">&times;</span>';
            $msg .= '</button>';
            $msg .= ' </div>';
            echo $msg;
        }
    }
}


if (!function_exists('show_success_msg')) {
    function show_success_msg()
    {
        $smsg = '';
        if (!empty(Session::has('success'))) {
            $smsg .= '<div class="alert alert-success alert-dismissible fade show" role="alert" style="padding-right: 0px;">';
            $smsg .= '<strong>Success!</strong>&nbsp;' . Session::get('success');
            $smsg .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: #000;">';
            $smsg .= ' <span aria-hidden="true">&times;</span>';
            $smsg .= '</button>';
            $smsg .= ' </div>';
            echo $smsg;
        }
    }
}
