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
\t<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
\t<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
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
\t\t  <div class=\"container-fluid\">
\t\t  \t<div class=\"row\">
\t\t  \t\t<div class=\"col-lg-2 col-md-3 col-xs-2 headline--container\">
\t\t  \t\t\t<div class=\"headline\">
\t\t  \t\t\t\t<h1 class=\"headline--title headline--title-large\">Blue Hood Manager</h1>
\t\t  \t\t\t\t<h1 class=\"headline--title headline--title-small\">BHM</h1>
\t\t  \t\t\t</div>
\t\t  \t\t</div>
\t\t  \t\t<div class=\"col-lg-10 col-md-9 col-xs-10 no-padding\">
\t\t  \t\t\t<nav class=\"navbar navbar-default\" role=\"navigation\">
\t\t\t  \t\t\t<!-- Brand and toggle get grouped for better mobile display -->

\t\t\t\t\t    <!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t    <div class=\"navbar-collapse\" id=\"mainNav\">
\t\t\t\t\t
\t\t\t      \t\t      <div class=\"userBlock navbar-right dropdown\">
\t\t\t\t\t\t\t    \t<a href=\"\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bhmcore/img/pp.png"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle img-responsive avatarImg navbar--avatarImg\"></a>
\t\t\t\t\t\t       <button type=\"button\" class=\"userBlock--name dropdown-toggle\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t   \t\tYann Kubacki <span class=\"caret\"></span>
\t\t\t\t\t\t\t   </button>
\t\t\t\t\t\t\t   \t<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                                  <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Voir le profil</a></li>
                                  <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Déconnexion <span class=\"glyphicon glyphicon-of\" aria-hidden=\"true\"></span></a></li>
                                </ul>
\t\t\t\t\t\t\t  </div>

\t\t\t\t\t      <form class=\"navbar-form searchForm\" role=\"search\">
\t\t\t\t\t        <div class=\"form-group\">
\t\t\t\t\t          <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t\t\t\t\t        </div>
\t\t\t\t\t        <button type=\"submit\" class=\"btn btn-default btn-small\">Rechercher</button>
\t\t\t\t\t      </form>
\t\t\t\t\t    </div><!-- /.navbar-collapse -->
\t\t\t\t    </nav>
\t\t  \t\t</div>
\t\t  \t</div><!-- fin row -->
\t\t\t</div><!-- /.container-fluid -->
\t</header>

\t<div class=\"container-fluid l-mainContainer\">
\t\t<div class=\"row l-no-padding\">
\t\t\t<!--<div class=\"col-lg-2 col-md-3 col-sm-2 col-xs-1 l-sidebar-container\">-->
\t\t\t<div class=\"col-lg-2 col-md-3 col-xs-2 no-padding\">
\t\t\t\t<aside class=\"l-sidebar\">
\t\t\t\t\t<nav class=\"sideNav\">
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t  <li class=\"nav-element is-active\"><a href=\"#\"><img width=\"27\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bhmcore/img/project.svg"), "html", null, true);
        echo "\" class=\"img-responsive nav-icon\" alt=\"\"><span class=\"sideNav--element\">Mes projets</span> <span class=\"badge\">2</span></a></li>
\t\t\t\t\t\t  <li class=\"nav-element\"><a href=\"#\"><img width=\"32\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bhmcore/img/talk.svg"), "html", null, true);
        echo "\" class=\"img-responsive nav-icon\" alt=\"\"> <span class=\"sideNav--element\">Mes disussions</span> <span class=\"badge\">6</span></a></li>
\t\t\t\t\t\t  <li class=\"nav-element\"><a href=\"#\"><img width=\"30\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bhmcore/img/check.svg"), "html", null, true);
        echo "\" class=\"img-responsive nav-icon\" alt=\"\"> <span class=\"sideNav--element\">Mes To-dos</span> <span class=\"badge\">13</span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</aside>
\t\t\t</div>
\t\t\t<!--<div class=\"col-lg-10 col-md-9 col-sm-10 col-xs-11 l-main-container\">-->
\t\t\t<div class=\"col-lg-10 col-md-9 col-xs-10\">
\t\t\t\t<div class=\"l-main\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"sectionHeadline\">
\t\t\t\t\t\t\t\t<h2 class=\"sectionHeadline--title\">Bonjour Yann, sur quel projet on travaille aujourd'hui&nbsp;?</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- fin row -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"project\">
\t\t\t\t\t\t\t\t<h3 class=\"project--name\"><a href=\"#\">Blue Hood Manager</a></h3>
\t\t\t\t\t\t\t\t<figure class=\"project--thumbnail\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bhmcore/img/pp.png"), "html", null, true);
        echo "\" alt=\"La jolie thumbnail\" class=\"img-responsive\"></a>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<p class=\"project--infos\"><a href=\"#\"><span class=\"project--number\">3</span> Discussions</a></p>
\t\t\t\t\t\t\t\t<p class=\"project--infos\"><a href=\"#\"><span class=\"project--number\">5</span> To-Dos</a></p>
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bhmcore/img/pp.png"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle img-responsive avatarImg\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- fin row -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!-- fin row -->
\t</div><!-- fin container -->
\t\t
    ";
        // line 110
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cac6181_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cac6181_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cac6181_jquery.min_1.js");
            // line 111
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "cac6181"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cac6181") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cac6181.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 113
        echo "\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d139f89_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d139f89_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d139f89_bootstrap.min_1.js");
            // line 114
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "d139f89"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d139f89") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d139f89.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 116
        echo "\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ec3b4c9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ec3b4c9_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ec3b4c9_script_1.js");
            // line 117
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
        // line 119
        echo "\t</body>
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
        return array (  221 => 119,  207 => 117,  202 => 116,  188 => 114,  183 => 113,  169 => 111,  165 => 110,  153 => 101,  146 => 97,  123 => 77,  119 => 76,  115 => 75,  82 => 45,  49 => 14,  35 => 12,  31 => 11,  19 => 1,);
    }
}
