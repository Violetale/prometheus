<?php

declare(strict_types=1);

namespace Mediabroker\Core\Http\Traits;

use Closure;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

trait FilterTrait
{
    /**
     * @param string $resource
     * @return array
     */
    private function getFilterDefinitions(string $resource): array
    {
        return config("core-filters.${resource}");
    }

    /**
     * @param Request $request
     * @param array $items
     * @return array
     */
    private function collectFromQueryString(Request $request, array $items): array
    {
        $result = [];

        foreach ($items as $item) {
            $result[$item] = $request->query($item);
        }

        return $result;
    }

    /**
     * @param Builder $builder
     * @param array $data
     * @return void
     * @throws Exception
     */
    private function filter(Builder $builder, array $data): void
    {
        foreach ($this->filterDefinitions as $name => $filter) {
            if (!is_null($input = $data[$name])) {
                if (!$filter instanceof Closure) {
                    throw new Exception('The filter must be an anonymous function');
                }

                $filter($builder, $input);
            }
        }
    }
}
