<?php

namespace Procvic\Sendgrid;

/**
 * Class SendgridMailer
 *
 * @package Procvic\Sendgrid
 */
class SendgridMailer extends \Nette\Object
{

    /**
     * @var \SendGrid
     */
    private $sendGrid;


    /**
     * @param string $api_user
     * @param string $api_key
     */
    public function __construct($api_user, $api_key)
    {
        $this->sendGrid = new \SendGrid($api_user, $api_key);
    }


    /**
     * @param \SendGrid\Email $email
     */
    public function send(\SendGrid\Email $email)
    {
        $this->sendGrid->send($email);
    }
}
