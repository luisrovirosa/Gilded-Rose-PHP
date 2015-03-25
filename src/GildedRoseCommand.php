<?php


namespace GildedRose;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GildedRoseCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('gilded')
            ->setDescription('Gilded Rose')
            ->addArgument(
                'days',
                InputArgument::REQUIRED,
                'How many days?'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }
}
