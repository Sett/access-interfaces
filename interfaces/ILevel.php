<?php
namespace funcraft\access\interfaces;

/**
 * Interface ILevel
 * @package funcraft\access\interfaces
 * @author Funcraft <what4me@yandex.ru>
 */
interface ILevel
{
    const NOTHING            = 0;
    const EXECUTE            = 1;
    const WRITE              = 2;
    const EXECUTE_WRITE      = 3;
    const READ               = 4;
    const EXECUTE_READ       = 5;
    const WRITE_READ         = 6;
    const EXECUTE_WRITE_READ = 7;

    const OWNER  = 100;
    const GROUP  = 10;
    const PUBLIC = 1;
}
