<?php

/* base.twig */
class __TwigTemplate_4a585354fb01b32be59dec5aa7a7dcc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - DoYouBuzz API</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le styles -->
    <link href=\"../assets/css/bootstrap.css\" rel=\"stylesheet\">
    <link href=\"../assets/css/dyb-api.css\" rel=\"stylesheet\">
    <style type=\"text/css\">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href=\"../assets/css/bootstrap-responsive.css\" rel=\"stylesheet\">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"../assets/ico/favicon.ico\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"../assets/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"../assets/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"../assets/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"../assets/ico/apple-touch-icon-57-precomposed.png\">
  </head>

  <body>
  
    <div class=\"navbar navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
          <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </a>
          <a class=\"brand\" href=\"/\">DoYouBuzz API</a>
          ";
        // line 57
        echo "        </div>
      </div>
    </div>

    <div class=\"container-fluid\">
      <div class=\"row-fluid\">
        <div class=\"span3\">
          <div class=\"well sidebar-nav\">
            <ul class=\"nav nav-list\">
              <li class=\"nav-header\">Overwiew</li>
              <li";
        // line 67
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (($_template_ == "overview/summary")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/overview/summary\">Summary</a></li>
              <li";
        // line 68
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (($_template_ == "baselist")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/baselist\">Baselist</a></li>
              
              <li class=\"nav-header\">Authentication</li>
              <li";
        // line 71
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (($_template_ == "authentication/oauth")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/authentication/oauth\">Application (oAuth)</a></li>              
              <li";
        // line 72
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (($_template_ == "authentication/partner")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/authentication/partner\">Partner</a></li>
              <li class=\"nav-header\">Application API</li>
              <li";
        // line 74
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (($_template_ == "app/user")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/app/user\">User</a></li>
              <li";
        // line 75
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (($_template_ == "app/cv")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/app/cv\">CV</a></li>
              <li";
        // line 76
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (($_template_ == "app/employment-preferences")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/app/employment-preferences\">Employment preferences</a></li>              
              <li";
        // line 77
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (($_template_ == "app/search")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/app/search\">Search</a></li>
              <li class=\"nav-header\">Partner API</li>
              <li";
        // line 79
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (($_template_ == "partner/user")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/partner/user\">User</a></li>
              <li";
        // line 80
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (($_template_ == "partner/employment")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/partner/employment\">Employment preferences</a></li>
              <li";
        // line 81
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (($_template_ == "partner/cv")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/partner/cv\">CV</a></li>
              <li";
        // line 82
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (($_template_ == "partner/partner")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/partner/partner\">Partner</a></li>
              <li";
        // line 83
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (($_template_ == "partner/groups")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/partner/groups\">Partner groups</a></li>
              <li";
        // line 84
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (($_template_ == "partner/partner-group-users")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/partner/partner-group-users\">Partner group users</a></li>
              <li";
        // line 85
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (($_template_ == "partner/partner-last-update")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/partner/partner-last-update\">Partner last update</a></li>
              <li";
        // line 86
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (($_template_ == "partner/member-by-external-id")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/partner/member-by-external-id\">Member by external id</a></li>
              <li";
        // line 87
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (($_template_ == "partner/search")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/partner/search\">Search</a></li>
              <li class=\"nav-header\">Search API</li>
              <li";
        // line 89
        if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
        if (($_template_ == "search/search")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/search/search\">Search</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class=\"span9\">
        
            
          ";
        // line 96
        $this->displayBlock('content', $context, $blocks);
        // line 99
        echo "          

          
          
\t\t\t
          \t\t
          
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; DoYouBuzz 2012 - If you find a typo or an error, <a href=\"https://github.com/doyoubuzz/api-doc/issues\">open a ticket</a>.</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"../assets/js/jquery.js\"></script>
    <script src=\"../assets/js/bootstrap-transition.js\"></script>
    <script src=\"../assets/js/bootstrap-alert.js\"></script>
    <script src=\"../assets/js/bootstrap-modal.js\"></script>
    <script src=\"../assets/js/bootstrap-dropdown.js\"></script>
    <script src=\"../assets/js/bootstrap-scrollspy.js\"></script>
    <script src=\"../assets/js/bootstrap-tab.js\"></script>
    <script src=\"../assets/js/bootstrap-tooltip.js\"></script>
    <script src=\"../assets/js/bootstrap-popover.js\"></script>
    <script src=\"../assets/js/bootstrap-button.js\"></script>
    <script src=\"../assets/js/bootstrap-collapse.js\"></script>
    <script src=\"../assets/js/bootstrap-carousel.js\"></script>
    <script src=\"../assets/js/bootstrap-typeahead.js\"></script>
    <script src=\"../assets/js/dyb-api.js\"></script>
    
    
    <link type=\"text/css\" rel=\"stylesheet\" href=\"../assets/js/dp.SyntaxHighlighter/Styles/SyntaxHighlighter.css\"></link>
\t<script language=\"javascript\" src=\"../assets/js/dp.SyntaxHighlighter/Scripts/shCore.js\"></script>
\t<script language=\"javascript\" src=\"../assets/js/dp.SyntaxHighlighter/Scripts/shBrushXml.js\"></script>
\t<script language=\"javascript\" src=\"../assets/js/dp.SyntaxHighlighter/Scripts/shBrushJScript.js\"></script>
\t<script language=\"javascript\" src=\"../assets/js/dp.SyntaxHighlighter/Scripts/shBrushPhp.js\"></script>
\t<script language=\"javascript\">
\tdp.SyntaxHighlighter.ClipboardSwf = '/flash/clipboard.swf';
\tdp.SyntaxHighlighter.HighlightAll('code');
</script>


  </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 96
    public function block_content($context, array $blocks = array())
    {
        // line 97
        echo "          
          ";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 97,  281 => 96,  276 => 5,  222 => 99,  220 => 96,  207 => 89,  199 => 87,  192 => 86,  185 => 85,  178 => 84,  171 => 83,  164 => 82,  157 => 81,  150 => 80,  143 => 79,  135 => 77,  128 => 76,  121 => 75,  114 => 74,  106 => 72,  99 => 71,  90 => 68,  83 => 67,  71 => 57,  25 => 5,  19 => 1,  36 => 5,  33 => 4,  27 => 2,);
    }
}
