<?php
/**
 * @license BSD-3-Clause
 *
 * Modified by bracketspace on 02-October-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */ declare(strict_types=1);

namespace BracketSpace\Notification\Dependencies\PhpParser\Node\Expr;

use BracketSpace\Notification\Dependencies\PhpParser\Node;
use BracketSpace\Notification\Dependencies\PhpParser\Node\Arg;
use BracketSpace\Notification\Dependencies\PhpParser\Node\Expr;
use BracketSpace\Notification\Dependencies\PhpParser\Node\Identifier;
use BracketSpace\Notification\Dependencies\PhpParser\Node\VariadicPlaceholder;

class StaticCall extends CallLike
{
    /** @var Node\Name|Expr Class name */
    public $class;
    /** @var Identifier|Expr Method name */
    public $name;
    /** @var array<Arg|VariadicPlaceholder> Arguments */
    public $args;

    /**
     * Constructs a static method call node.
     *
     * @param Node\Name|Expr                 $class      Class name
     * @param string|Identifier|Expr         $name       Method name
     * @param array<Arg|VariadicPlaceholder> $args       Arguments
     * @param array                          $attributes Additional attributes
     */
    public function __construct($class, $name, array $args = [], array $attributes = []) {
        $this->attributes = $attributes;
        $this->class = $class;
        $this->name = \is_string($name) ? new Identifier($name) : $name;
        $this->args = $args;
    }

    public function getSubNodeNames() : array {
        return ['class', 'name', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_StaticCall';
    }

    public function getRawArgs(): array {
        return $this->args;
    }
}
