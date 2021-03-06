<?php
declare (strict_types=1);

namespace think\support\facade;

use Closure;
use think\Facade;
use simplify\amqp\AMQPClient;
use think\amqp\AMQPInterface;

/**
 * Class AMQP
 * @package think\support\facade
 * @method static AMQPClient client(string $name = 'default')
 * @method static void channel(Closure $closure, string $name = 'default', array $options = [])
 * @method static void channeltx(Closure $closure, string $name = 'default', array $options = [])
 */
class AMQP extends Facade
{
    protected static function getFacadeClass(): string
    {
        return AMQPInterface::class;
    }
}