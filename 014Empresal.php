<?php

declare(strict_types=1);

interface JSerializable
{
    public function toJSON(): string;

    public function toSerialize();
}
