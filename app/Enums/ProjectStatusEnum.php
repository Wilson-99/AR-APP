<?php

namespace App\Enums;

class ProjectStatusEnum
{

    case PENDING = 1;
    case DONE = 2;
    case ARCHIVED = 3;
    case CANCELED = 4;

    public function getName(): string
    {
        return match ($this)
        {
            self::PENDING => 'Pendente',
            self::DONE => 'Feito',
            self::ARCHIVED => 'arquivado',
            self::CANCELED => 'Rejeitado',
            default => 'Status não encontrado'
        };
    }

    public function getStyle(): string
    {
        return match ($this)
        {
            self::ARCHIVED => 'px-2 py-0.5 text-xs rounded-full bg-gray-100 text-gray-800',
            self::PENDING => 'px-2 py-0.5 text-xs rounded-full bg-yellow-100 text-gray-800',
            self::DONE => 'px-2 py-1 text-xs rounded-full bg-gray-100 text-green-800',
            self::CANCELED => 'px-2 py-0.5 text-xs rounded-full bg-gray-100 text-red-800',
        };
    }

}
