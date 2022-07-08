<?php

namespace App\Controller\Interfaces;

interface ControllerInterface
{
    function getEntity();

    function getTypeClass();

    function getService();
}