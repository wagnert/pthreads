<?php

/**
 * \Pool
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category  Library
 * @package   pthreads
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://github.com/appserver-io/pthreads
 * @link      http://www.appserver.io
 * @link      http://www.php.net/manual/en/class.pool.php
 * @since     1.0.1
 */

/**
 * A Pool is a container for, and controller of, a number of Worker threads, the number of threads can be adjusted
 * during execution, additionally the Pool provides an easy mechanism to maintain and collect references in the
 * proper way.
 *
 * @category  Library
 * @package   pthreads
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://github.com/appserver-io/pthreads
 * @link      http://www.appserver.io
 * @link      http://www.php.net/manual/en/class.pool.php
 * @since     1.0.1
 */
class Pool
{

    /**
     * The maximum number of Worker threads allowed in this Pool
     *
     * @var integer
     */
    protected $size;

    /**
     * The name of the Worker class for this Pool
     *
     * @var string
     */
    protected $class;

    /**
     * The array of Worker threads for this Pool
     *
     * @var array|Worker[]
     */
    protected $workers;

    /**
     * The array of Stackables submitted to this Pool for execution
     *
     * @var array|Stackable[]
     */
    protected $work;

    /**
     * The constructor arguments to be passed by this Pool to new Workers upon construction
     *
     * @var array
     */
    protected $ctor;

    /**
     * The numeric identifier for the last Worker used by this Pool
     *
     * @var integer
     */
    protected $last;

    /**
     * Construct a new Pool of Workers
     *
     * @param integer $size  The maximum number of Workers this Pool can create
     * @param string  $class The class for new Workers
     * @param array   $ctor  An array of arguments to be passed to new Workers
     *
     * @link http://www.php.net/manual/en/pool.__construct.php
     */
    public function __construct($size, $class, array $ctor = array())
    {
    }

    /**
     * Shuts down all Workers, and collect all Stackables, finally destroys the Pool
     *
     * @link http://www.php.net/manual/en/pool.__destruct.php
     */
    public function __destruct()
    {
    }

    /**
     * Collect references to completed tasks
     *
     * Allows the Pool to collect references determined to be garbage by the given collector
     *
     * @param callable $collector
     *
     * @link http://www.php.net/manual/en/pool.collect.php
     */
    public function collect(callable $collector)
    {
    }

    /**
     * Resize the Pool
     *
     * @param integer $size The maximum number of Workers this Pool can create
     *
     * @link http://www.php.net/manual/en/pool.resize.php
     */
    public function resize($size)
    {
    }

    /**
     * Shutdown all Workers in this Pool
     *
     * @link http://www.php.net/manual/en/pool.shutdown.php
     */
    public function shutdown()
    {
    }

    /**
     * Submit the task to the next Worker in the Pool
     *
     * @param Stackable $task The task for execution
     *
     * @return int the identifier of the Worker executing the object
     */
    public function submit(Stackable $task)
    {
    }

    /**
     * Submit the task to the specific Worker in the Pool
     *
     * @param int       $worker The worker for execution
     * @param Stackable $task   The task for execution
     *
     * @return int the identifier of the Worker that accepted the object
     */
    public function submitTo($worker, Stackable $task)
    {
    }
}
