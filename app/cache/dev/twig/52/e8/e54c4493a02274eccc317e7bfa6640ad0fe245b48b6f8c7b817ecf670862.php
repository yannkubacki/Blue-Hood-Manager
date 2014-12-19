<?php

/* BHMCoreBundle:Default:dashboard.html.twig */
class __TwigTemplate_52e8e54c4493a02274eccc317e7bfa6640ad0fe245b48b6f8c7b817ecf670862 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if (lte IE 7)&!(IEMobile)]> <html lang=\"fr\" class=\"ie7 old-ie no-js\"> <![endif]-->
<!--[if (IE 8)&!(IEMobile)]> <html lang=\"fr\" class=\"ie8 old-ie no-js\"> <![endif]-->
<!--[if (gt IE 8)&!(IEMobile)]><!--> <html lang=\"fr\" class=\"no-js\"> <!--<![endif]-->
<head>
\t<meta charset=\"utf-8\" />
\t<title>Blue Hood Manager</title>
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width\" />
\t<meta name=\"description\" content=\"\" />
\t";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b79e6b7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b79e6b7_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/b79e6b7_bootstrap_1.css");
            // line 12
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
\t";
        } else {
            // asset "b79e6b7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b79e6b7") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/b79e6b7.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
\t";
        }
        unset($context["asset_url"]);
        // line 14
        echo "\t<!-- Google Fonts -->
\t<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' rel='stylesheet' type='text/css'>
\t<!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
  \t<![endif]-->    
\t<script>
\t\tdocument.documentElement.className = document.documentElement.className.replace(/\\bno-js\\b/,'js');
\t</script>
</head>

<body role=\"document\">

\t<header class=\"l-header\">
\t\t<nav class=\"navbar navbar-default\" role=\"navigation\">
\t\t  <div class=\"container-fluid\">
\t\t    <!-- Brand and toggle get grouped for better mobile display -->
\t\t    <div class=\"navbar-header\">
\t\t      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"mainNav\">
\t\t        <span class=\"sr-only\">Toggle navigation</span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t      </button>
\t\t      <a class=\"navbar-brand\" href=\"#\">Blue Hood Manager</a>
\t\t    </div>

\t\t    <!-- Collect the nav links, forms, and other content for toggling -->
\t\t    <div class=\"collapse navbar-collapse\" id=\"mainNav\">
\t\t      <ul class=\"nav navbar-nav\">
\t\t       
\t\t      </ul>
\t\t      <form class=\"navbar-form navbar-right\" role=\"search\">
\t\t        <div class=\"form-group\">
\t\t          <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t\t        </div>
\t\t        <button type=\"submit\" class=\"btn btn-default\">Rechercher</button>
\t\t      </form>
\t\t    </div><!-- /.navbar-collapse -->
\t\t  </div><!-- /.container-fluid -->
\t\t</nav>
\t</header>

\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<aside class=\"l-sidebar\">
\t\t\t\t\t<h2 class=\"l-sidebar--title\">Ma Sidebar</h2>
\t\t\t\t</aside>
\t\t\t</div>
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<div class=\"l-main\">
\t\t\t\t\t<h2 class=\"l-main--title\">Mon dashboard</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!-- fin row -->
\t</div><!-- fin container -->

\t
\t";
        // line 72
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ec3b4c9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ec3b4c9_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ec3b4c9_script_1.js");
            // line 73
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "ec3b4c9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ec3b4c9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ec3b4c9.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 74
        echo "</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "BHMCoreBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 74,  113 => 73,  109 => 72,  49 => 14,  35 => 12,  31 => 11,  19 => 1,);
    }
}