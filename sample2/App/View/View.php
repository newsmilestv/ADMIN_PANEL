<?php

namespace App\View;

class View
{
    use TMagic;
    public function render($template)
    {
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }

        ob_start();
        include __DIR__ . '/templates/' . $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template)
    {
        echo $this->render($template);
    }
}
