<?php

namespace Collectify\Model;

abstract class BaseModel extends \RedBeanPHP\SimpleModel
{
    public $slug;
    public $createdAt;
    public $updatedAt;
}