<?php

namespace Decency\InputGroup;

use Laravel\Nova\Fields\Field;

class InputGroup extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'input-group';

    /**
     * Set the position where the prefix/suffix must be placed.
     *
     * @param string $position
     * @return $this
     */
    public function position(string $position)
    {
        return $this->withMeta(['position' => $position]);
    }

    /**
     * Set the text to be displayed.
     *
     * @param string $text
     * @return $this
     */
    public function text(string $text)
    {
        return $this->withMeta(['text' => $text]);
    }
}
