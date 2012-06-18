<?php

/* overview/summary.twig */
class __TwigTemplate_8cbc48655838d19ca370e5a8f1021e2c extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " API Summary ";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<h1>API Summary</h1>

<p><span class=\"label label-warning\">Note</span> Our API are in a beta state. Breaking changes may occur (see <a href=\"#transition\">transition from beta to V1</a>).</p>

<h2>Application API</h2>
<p>With the Application API you can access all the data of the users who have authorized your application. As an independant developers wanting to leverage DoYouBuzz datas, this is the API you want to use.</p>

<h2>Partner API</h2>
<p>If you are a corporate DoYouBuzz partner using one of our professional product, you can use the Partner API to access your private CV database and account informations.</p>

<h2>Schema</h2>

All API access is over HTTP, and accessed from the api.doyoubuzz.com domain. All data is sent as XML and received as XML or JSON.

<p>Unless otherwise specified, the following format are used:</p>
<ul>
\t<li>Date : YYYY-MM-DD</li>
\t<li>Datetime : YYYY-MM-DDTHH:MM:SS</li>
\t<li>Boolean : 1 or null</li>
</ul>

<p>Blank fields are included as <code>null</code> instead of being omitted.</p>

<h2>API Keys</h2>
<p>To get your API Keys, send an email to <a href=\"mailto:api@doyoubuzz.com\">api@doyoubuzz.com</a> with the following informations :</p>

<ul>
\t<li>Editor name</li>
\t<li>Editor website</li>
\t<li>Application name</li>
\t<li>Application description</li>
\t<li>Application URL</li>
\t<li>Customer support email for your application</li>
</ul>

<a name=\"transition\"></a>
<h2>Transition from the beta API to the V1 API</h2>

<p>A V1 using a new access point (such as http://api.doyoubuzz.com/v1/) is currently under development. Most of the current methods will remain the same on the V1 API. A transition period will be observed where both APIs will be enabled, but we may need to break some of the beta methods. </p> 

<h2>Support</h2>

<p>If you have any questions, please use this forum : <a href=\"https://groups.google.com/forum/?fromgroups#!forum/doyoubuzz-developers\" target=\"_blank\">https://groups.google.com/forum/?fromgroups#!forum/doyoubuzz-developers</a></p>

";
    }

    public function getTemplateName()
    {
        return "overview/summary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  33 => 4,  27 => 2,);
    }
}
