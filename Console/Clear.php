<?php

declare(strict_types=1);

/*
 * This file is part of the ************************ package.
 * _____________                           _______________
 *  ______/     \__  _____  ____  ______  / /_  _________
 *   ____/ __   / / / / _ \/ __`\/ / __ \/ __ \/ __ \___
 *    __/ / /  / /_/ /  __/ /  \  / /_/ / / / / /_/ /__
 *      \_\ \_/\____/\___/_/   / / .___/_/ /_/ .___/
 *         \_\                /_/_/         /_/
 *
 * The PHP Framework For Code Poem As Free As Wind. <Query Yet Simple>
 * (c) 2010-2020 http://queryphp.com All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Leevel\Session\Console;

use Leevel\Console\Command;
use function Leevel\Filesystem\Helper\delete_directory;
use Leevel\Filesystem\Helper\delete_directory;
use Leevel\Kernel\IApp;

/**
 * session 文件缓存清理.
 *
 * @codeCoverageIgnore
 */
class Clear extends Command
{
    /**
     * 命令名字.
     *
     * @var string
     */
    protected string $name = 'session:clear';

    /**
     * 命令行描述.
     *
     * @var string
     */
    protected string $description = 'Clear cache of session';

    /**
     * 响应命令.
     */
    public function handle(IApp $app): int
    {
        $this->line('Start to clear cache session.');
        delete_directory($cachePath = $app->runtimePath('session'));
        $this->info(sprintf('Session cache files in path %s clear successed.', $cachePath));

        return 0;
    }
}

// import fn.
class_exists(delete_directory::class); // @codeCoverageIgnore
