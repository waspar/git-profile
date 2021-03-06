<?php

namespace Zeeshan\GitProfile\Commands;

use Zeeshan\GitProfile\Commands\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @package   Git Profile
 * @author    Zeeshan Ahmed <ziishaned@gmail.com>
 * @copyright 2016 Zeeshan Ahmed
 * @license   http://www.opensource.org/licenses/mit-license.html MIT License
 */
class ListGitProfilesCommand extends BaseCommand
{

    /**
     * Configure the command
     *
     * @return void
     */
    public function configure()
    {
        $this->setName('list')
             ->setDescription('Get all the git profiles.');
    }

    /**
     * Execute the command
     *
     * @param  Symfony\Component\Console\Input\InputInterface  $input
     * @param  Symfony\Component\Console\Output\OutputInterface $output
     * @return void
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('This is your <info>.gitconfig</info> from your PC Home directory.');
        $output->writeln(file_get_contents($_SERVER['HOMEPATH'] . '\.gitconfig'));
    }
}
