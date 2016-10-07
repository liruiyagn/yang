<?php

/* loader.html */
class __TwigTemplate_a7497186a942530bc693adeeb90b215f9fbf45a635d95b9da46e1e698637fbf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<body>
<header>头部</header>

<content>
    ";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "</content>
</body>
</html>";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    ";
    }

    public function getTemplateName()
    {
        return "loader.html";
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  35 => 6,  29 => 8,  27 => 6,  20 => 1,);
    }

    public function getSource()
    {
        return "<html>
<body>
<header>头部</header>

<content>
    {% block content %}
    {% endblock %}
</content>
</body>
</html>";
    }
}
