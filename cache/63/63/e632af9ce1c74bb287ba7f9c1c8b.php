<?php

/* home.twig */
class __TwigTemplate_6363e632af9ce1c74bb287ba7f9c1c8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome ";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<h2>Welcome on the DoYouBuzz API Documentation</h2>

The DoYouBuzz API gives you access to all the data used on DoYouBuzz.

<br><br>
<a class=\"btn btn-submit btn-primary\">Get started</a>







";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  33 => 4,  27 => 3,);
    }
}
