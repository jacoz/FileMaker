<?php
/**
 * @copyright Copyright (c) 2016 by 1-more-thing (http://1-more-thing.com) All rights reserved.
 * @license BSD
 */
namespace airmoi\FileMaker\Command;

use airmoi\FileMaker\Object\Result;

/**
 * Command class that finds all records from a layout.
 * Create this command with {@link FileMaker::newFindAllCommand()}.
 *
 * @package FileMaker
 */
class FindAll extends Find
{
    /**
     *
     * @return Result|\airmoi\FileMaker\FileMakerException
     * @throws \airmoi\FileMaker\FileMakerException
     */
    public function execute()
    {
        $params             = $this->getCommandParams();
        $params['-findall'] = true;
        $this->setSortParams($params);
        $this->setRangeParams($params);
        return $this->getResult($this->fm->execute($params));
    }
}
