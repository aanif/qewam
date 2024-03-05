<?php

namespace App\GraphQL\Queries;

class Hello
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
    }

    public function resolve($rootValue, array $args): string
    {
        return "Hello, {$args['name']}";
    }
}
