<?php
/**
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author Phuong LE <phuong.le@menincode.com>
 * @copyright Copyright (c) 2022 Men In Code Ltd
 */

declare(strict_types=1);

namespace Easygento\CustomLogger\Logger;

use Psr\Log\LoggerInterface;

class Logger
{
    /**
     * Description $logger
     *
     * @var LoggerInterface $logger
     */
    protected LoggerInterface $logger;

    /**
     * Logger constructor
     *
     * @param LoggerInterface $logger
     */
    public function __construct(
        LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    /**
     * @return void
     */
    public function example(): void
    {
        $this->logger->debug('test');
    }
}
