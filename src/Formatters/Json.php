<?php

namespace Differ\Formatters\Json;

function formatJson(array $diff): string
{
    return json_encode($diff, JSON_THROW_ON_ERROR);
}
