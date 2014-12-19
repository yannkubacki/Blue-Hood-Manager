<?php

/* BHMCoreBundle:Default:index.html.twig */
class __TwigTemplate_bb06afc62a06d24f8223846aa2f07a3b1b91082111350ab6fe44a87ae1855e9a extends Twig_Template
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
        echo "\t<!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
  \t<![endif]-->    
\t<script>
\t\tdocument.documentElement.className = document.documentElement.className.replace(/\\bno-js\\b/,'js');
\t</script>
</head>

<body role=\"document\">

\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<h1>Blue Hood Manager</h1>
\t\t\t\t<p>Coucou toi ! On bosse sur quoi aujourd'hui ?</p>
\t\t\t</div>
\t\t</div><!-- fin row -->
\t\t<div class=\"row\">
\t\t\t<header class=\"l-header\">
\t\t\t\t
\t\t\t</header>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<aside class=\"sidebar\" style=\"background-color:#0000ff;\">
\t\t\t\t\t<h2 class=\"sidebar--title\">Ma Sidebar</h2>
\t\t\t\t\t<p>Hello</p>
\t\t\t\t</aside>
\t\t\t</div>
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<div class=\"main\" style=\"background-color:#ff0000;\">
\t\t\t\t\t<h2 class=\"main--title\">Mon dashboard</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!-- fin row -->
\t</div>

\t
\t";
        // line 50
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ec3b4c9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ec3b4c9_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ec3b4c9_script_1.js");
            // line 51
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
        // line 52
        echo "</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "BHMCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 52,  91 => 51,  87 => 50,  49 => 14,  35 => 12,  31 => 11,  19 => 1,);
    }
}
