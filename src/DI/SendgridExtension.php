<?php

namespace Procvic\Sendgrid\DI;

/**
 * Class SendgridExtension
 *
 * @package Procvic\Sendgrid\DI
 */
class SendgridExtension extends \Nette\DI\CompilerExtension
{
    /**
     * @var array
     */
    public $defaults = array(
        'username' => null,
        'password' => null,
        //'sendToSession' => false,
    );


    public function loadConfiguration()
    {
        $builder = $this->getContainerBuilder();
        $config = $this->getConfig($this->defaults);

        $builder->addDefinition($this->prefix('sendgrid'))
            ->setClass('Procvic\Sendgrid\SendgridMailer', array($config['username'], $config['password']));
    }
}
