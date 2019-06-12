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
 * (c) 2010-2019 http://queryphp.com All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Leevel\Session\Helper;

use Leevel\Di\Container;
use Leevel\Session\ISession;

/**
 * Session 服务
 *
 * @return \Leevel\Session\ISession
 */
function session(): ISession
{
    return Container::singletons()->make('sessions');
}

/**
 * 取回 session.
 *
 * @param string $name
 * @param mixed  $defaults
 *
 * @return mixed
 */
function session_get(string $name, $defaults = null)
{
    return session()->get($name, $defaults);
}

/**
 * 设置 session.
 *
 * @param string $name
 * @param mixed  $value
 */
function session_set(string $name, $value): void
{
    session()->set($name, $value);
}

class session
{
}
