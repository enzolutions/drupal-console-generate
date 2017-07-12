<?php

/**
 * @file
 * Contains Drupal\Console\Generate\Command\FormBaseCommand.
 */

namespace Drupal\Console\Generate\Command;
use Drupal\Console\Annotations\DrupalCommand;

/**
 * Class FormBaseCommand.
 *
 * @DrupalCommand (
 *     extension="drupal/console-generate",
 *     extensionType="library"
 * )
 */

class FormBaseCommand extends FormCommand
{
    protected function configure()
    {
        $this->setFormType('FormBase');
        $this->setCommandName('generate:form');
        parent::configure();
    }
}
