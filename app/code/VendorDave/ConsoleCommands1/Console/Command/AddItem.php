<?php

namespace VendorDave\ConsoleCommands1\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use VendorDave\ConsoleCommands1\Model\Console1ItemsFactory;
use Magento\Framework\Console\Cli;

class AddItem extends Command
{
    const INPUT_ITEM = "item";
    const INPUT_DESCRIPTION = "description";

    private $itemFactory;

    public function __construct(Console1ItemsFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
        parent::__construct();
    }

    // method for configuration of our command
    protected function configure()
    {
        // is the name and arguments we will use for our command ... for example
        // bin/magento vendordave:item:add "ItemName" "Description of item added"
        $this->setName('vendordave:item:add')
            ->addArgument(
                self::INPUT_ITEM,
                InputArgument::REQUIRED,
                'Item value' //command
            )->addArgument(
                self::INPUT_DESCRIPTION,
                InputArgument::OPTIONAL,
                'Item description'
            );
        parent::configure();
    }

    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ) {
        $item = $this->itemFactory->create();
        $item->setItem($input->getArgument(self::INPUT_ITEM));
        $item->setDescription($input->getArgument(self::INPUT_DESCRIPTION));
        $item->setIsObjectNew(true);
        $item->save();
        return Cli::RETURN_SUCCESS;
    }
}
