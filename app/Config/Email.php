<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public string $fromEmail  = 'support@tharitourtravel.com';
    public string $fromName   = 'Thari Tour & Travel';
    public string $recipients = '';

    public string $userAgent = 'CodeIgniter';

    public string $protocol = 'smtp';

    public string $SMTPHost = 'mail.tharitourtravel.com';  // Webuzo mail server
    public string $SMTPUser = 'support@tharitourtravel.com'; // Webuzo email
    public string $SMTPPass = '@%m6pRj07m';                 // Email password
    public int    $SMTPPort = 465;                           // SSL port
    public string $SMTPCrypto = 'ssl';                       // SSL encryption

    public int    $SMTPTimeout = 10;
    public bool   $SMTPKeepAlive = false;

    public bool   $wordWrap = true;
    public int    $wrapChars = 76;
    public string $mailType = 'html';
    public string $charset = 'utf-8';
    public bool   $validate = true;

    public int    $priority = 3;
    public string $CRLF = "\r\n";
    public string $newline = "\r\n";

    public bool   $BCCBatchMode = false;
    public int    $BCCBatchSize = 200;
    public bool   $DSN = false;
}
