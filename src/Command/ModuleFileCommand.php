<?php

/**
 * @file
 * Contains \Drupal\Console\Generate\Command\ModuleFileCommand.
 */

namespace Drupal\Console\Generate\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;
use Drupal\Console\Core\Command\Shared\CommandTrait;
use Drupal\Console\Generate\Generator\ModuleFileGenerator;
use Drupal\Console\Command\Shared\ConfirmationTrait;
use Drupal\Console\Command\Shared\ModuleTrait;
use Drupal\Console\Extension\Manager;
use Drupal\Console\Core\Style\DrupalStyle;
use Drupal\Console\Annotations\DrupalCommand;

/**
 * Class ModuleFileCommand.
 *
 * @DrupalCommand (
 *     extension="drupal/console-generate",
 *     extensionType="library"
 * )
 */

class ModuleFileCommand extends Command
{
    use CommandTrait;
    use ConfirmationTrait;
    use ModuleTrait;

    /**
 * @var Manager
*/
    protected $extensionManager;

    /**
 * @var ModuleFileGenerator
*/
    protected $generator;


    /**
     * ModuleFileCommand constructor.
     *
     * @param Manager             $extensionManager
     * @param ModuleFileGenerator $generator
     */
    public function __construct(
        Manager $extensionManager,
        ModuleFileGenerator $generator
    ) {
        $this->extensionManager = $extensionManager;
        $this->generator = $generator;
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('generate:module:file')
            ->setDescription($this->trans('commands.generate.module.file.description'))
            ->setHelp($this->trans('commands.generate.module.file.help'))
            ->addOption(
                'module',
                null,
                InputOption::VALUE_REQUIRED,
                $this->trans('commands.common.options.module')
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new DrupalStyle($input, $output);

        // @see use Drupal\Console\Command\Shared\ConfirmationTrait::confirmGeneration
        if (!$this->confirmGeneration($io, $yes)) {
            return 1;
        }

        $machine_name =  $input->getOption('module');
        $file_path =  $this->extensionManager->getModule($machine_name)->getPath();
        $generator = $this->generator;

        $generator->generate(
            $machine_name,
            $file_path
        );
    }


    /**
     * {@inheritdoc}
     */
    protected function interact(InputInterface $input, OutputInterface $output)
    {
        $io = new DrupalStyle($input, $output);

        // --module option
        $module = $input->getOption('module');

        if (!$module) {
            // @see Drupal\Console\Command\Shared\ModuleTrait::moduleQuestion
            $module = $this->moduleQuestion($io);
        }

        $input->setOption('module', $module);
    }
}
