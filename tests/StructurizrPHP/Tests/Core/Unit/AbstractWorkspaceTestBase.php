<?php

declare(strict_types=1);

/*
 * This file is part of the Structurizr for PHP.
 *
 * (c) Norbert Orzechowicz <norbert@orzechowicz.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace StructurizrPHP\Tests\StructurizrPHP\Tests\Core\Unit;

use PHPUnit\Framework\TestCase;
use StructurizrPHP\StructurizrPHP\Core\Model\Model;
use StructurizrPHP\StructurizrPHP\Core\View\ViewSet;
use StructurizrPHP\StructurizrPHP\Core\Workspace;

class AbstractWorkspaceTestBase extends TestCase
{
    /**
     * @var Workspace
     */
    protected $workspace;

    /**
     * @var Model
     */
    protected $model;

    /**
     * @var ViewSet
     */
    protected $views;

    protected function setUp() : void
    {
        $this->workspace = new Workspace("1", "Name", "Description");
        $this->model = $this->workspace->getModel();
        $this->views = $this->workspace->getViews();
    }
}