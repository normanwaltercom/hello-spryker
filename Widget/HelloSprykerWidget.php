<?php

namespace Pyz\Yves\HelloWorld\Widget;

use Spryker\Yves\Kernel\Widget\AbstractWidget;

class HelloSprykerWidget extends AbstractWidget
{
    /**
     * HelloSprykerWidget constructor.
     *
     * @param $param1
     * @param $param2
     */
    public function __construct($param1, $param2)
    {
        // The constructor arguments are the input to render/create a widget in twig templates.
        // The constructor initializes the widget parameters that will be available inside the template to be rendered.
        // The widget parameters are publicly available on a widget instance by its ArrayAccess interface.
        $this->addParameter('param1', $param1)
            ->addParameter('param2', $param2);
    }

    /**
     * @return string
     */
    public static function getName(): string
    {
        // By convention the name of the widgets are equal with the name of the widget class to be able to find it easily from twig templates.
        // The widget names must be unique as they are registered globally.
        return 'HelloSprykerWidget';
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        // The template of the widget to be rendered by default.
        return '@HelloWorld/views/hello-spryker-widget/hello-spryker-widget.twig';
    }

    public function setString($param1, $param2): string
    {
        return $param1 . ' **here comes another string between** ' . $param2;
    }
}
