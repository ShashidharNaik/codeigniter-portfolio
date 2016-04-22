<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'SMTPSERVERHERE';
$config['smtp_port'] = '587';
$config['smtp_user'] = 'EMAILHERE';
$config['smtp_pass'] = 'PASSWORDHERE';
$config['charset'] = 'utf-8';
$config['mailtype'] = 'html';
$config['smtp_crypto'] = "tls";