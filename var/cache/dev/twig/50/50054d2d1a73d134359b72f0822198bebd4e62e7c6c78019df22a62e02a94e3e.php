<?php

/* ::app.html.twig */
class __TwigTemplate_a6447f1af1ee23c9f8fcb4fc1ff5c62a9c840c49cb9c47746cc5fb6a94f74d55 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'titre' => array($this, 'block_titre'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'controls' => array($this, 'block_controls'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::app.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a44553e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_a44553e_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/images/a44553e_flamme_1.png");
            // line 5
            echo "\t<link rel=\"shortcut icon\" type=\"image/png\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "\" />
";
        } else {
            // asset "a44553e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_a44553e") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/images/a44553e.png");
            echo "\t<link rel=\"shortcut icon\" type=\"image/png\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "\" />
";
        }
        unset($context["asset_url"]);
        // line 7
        echo "
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t<title>OCIM/Web/Inscription | ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<!-- STYLES -->
\t";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "<link href='http://fonts.googleapis.com/css?family=Muli:400,300italic,300,400italic' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,300italic' rel='stylesheet' type='text/css'/>
<style>
\t*{font-family: 'Muli', sans-serif;}
\th1,h2,h3,h4,h5,h6{font-family: 'Josefin Sans', sans-serif; font-variant: small-caps}
</style>
</head>
<body>


";
        // line 36
        $context["menu"] = array(0 => array("route" => "home", "iconclass" => "fa fa-tachometer", "menuText" => "Tableau de bord"), 1 => array("route" => "evenement", "iconclass" => "fa fa-calendar", "menuText" => ""), 2 => array("route" => "evenement", "iconclass" => "fa fa-graduation-cap", "menuText" => "Formations", "param_name" => "type", "param_value" => "formation"), 3 => array("route" => "evenement", "iconclass" => "fa fa-calendar", "menuText" => "Evenements", "param_name" => "type", "param_value" => "event"), 4 => array("route" => "inscription", "iconclass" => "fa fa-users", "menuText" => ""), 5 => array("route" => "user", "iconclass" => "fa fa-users", "menuText" => ""), 6 => array("route" => "intervenant", "iconclass" => "fa fa-users", "menuText" => ""), 7 => array("route" => "champPerso", "iconclass" => "fa fa-table", "menuText" => ""), 8 => array("route" => "formule", "iconclass" => "fa fa-cutlery", "menuText" => "Formules"), 9 => array("route" => "convention", "iconclass" => "fa fa-folder-open", "menuText" => "Conventions"), 10 => array("route" => "structures", "iconclass" => "fa fa-university", "menuText" => ""), 11 => array("route" => "personne", "iconclass" => "fa fa-phone", "menuText" => "Contacts", "sousmenu" => array(0 => array("route" => "personne", "iconclass" => "fa fa-user", "menuText" => "Personnes"), 1 => array("route" => "structure", "iconclass" => "fa fa-home", "menuText" => "Structures"))), 12 => array("route" => "documents", "iconclass" => "fa fa-files-o", "menuText" => "Export et gabarits"));
        // line 57
        echo "
";
        // line 58
        $context["pagevars"] = "";
        // line 59
        echo "

<header class=\"group\" id=\"header\">
\t<div class=\"left\">
\t\t<a href=\"#\" id=\"nav-toggle\"><i class=\"fa fa-bars fa-2x\"></i></a>
\t\t<a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"logo\">
\t\t\t";
        // line 65
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0706f3e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_0706f3e_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/images/0706f3e_logo-header_1.png");
            // line 66
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 66, $this->source); })()), "html", null, true);
            echo "\" id=\"logo\" alt=\"OCIM\"/>
\t\t\t";
        } else {
            // asset "0706f3e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_0706f3e") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/images/0706f3e.png");
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 66, $this->source); })()), "html", null, true);
            echo "\" id=\"logo\" alt=\"OCIM\"/>
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 68
        echo "\t\t</a>
\t</div>
\t<div class=\"right\">
\t\t<div id=\"main-btn\" class=\"left hide\">
\t\t\t<a href=\"#\" id=\"fullscreen-btn\" ><i class=\"fa fa-arrows-alt fa-border\"></i></a>
\t\t</div>
\t\t<div id=\"user\" class=\"right\">
\t\t\t<a href=\"#\"><i class=\"fa fa-user fa-2x\"></i><span class=\"username\">";
        // line 75
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 75, $this->source); })()), "user", array()), "prenom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 75, $this->source); })()), "user", array()), "nom", array())), "html", null, true);
        echo "</span> <span class=\"caret\"></span></a>
\t\t\t<nav class=\"nav nav-stacked\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user");
        echo "\"><i class=\"fa fa-users\"></i>Gestion des utilisateurs</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion");
        echo "\"><i class=\"fa fa-power-off \"></i>Deconnexion</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</div>

\t";
        // line 86
        echo "\t<nav class=\"navbar navbar-right end\">
\t\t<div class=\"navigation-toggle\" data-tools=\"navigation-toggle\" data-target=\"#nav-mobile\">
\t\t\t<span>Menu\t";
        // line 88
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0706f3e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_0706f3e_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/images/0706f3e_logo-header_1.png");
            // line 89
            echo "\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 89, $this->source); })()), "html", null, true);
            echo "\" alt=\"OCIM\" style='height: 40px; margin-left: calc(100% - 280px)'/>
\t\t\t\t\t\t";
        } else {
            // asset "0706f3e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_0706f3e") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/images/0706f3e.png");
            echo "\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 89, $this->source); })()), "html", null, true);
            echo "\" alt=\"OCIM\" style='height: 40px; margin-left: calc(100% - 280px)'/>
\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 90
        echo "</span>
\t\t</div>
\t</nav>
</header>


<div id=\"page\" class=\"group\">
\t<div id=\"sidebar\">

\t\t<nav id=\"nav-mobile\" class=\"nav nav-stacked\" data-tools=\"navigation-fixed\">
\t\t\t<ul>
\t\t\t\t";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 102
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "menuText", array()) != "")) {
                // line 103
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                // line 104
                if (((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 104, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, $context["item"], "route", array())) && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a))) && ((twig_get_attribute($this->env, $this->source, $context["item"], "param_name", array(), "any", true, true)) ? ((twig_get_attribute($this->env, $this->source, $context["item"], "param_value", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 104, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "type"), "method"))) : (true)))) {
                    // line 105
                    echo "\t\t\t\t\t\t\t\t<span><i class=\"fa ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "iconclass", array()), "html", null, true);
                    echo " fa-fw\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "menuText", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t";
                } else {
                    // line 107
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["item"], "param_name", array(), "any", true, true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["item"], "route", array()), array(twig_get_attribute($this->env, $this->source, $context["item"], "param_name", array()) => twig_get_attribute($this->env, $this->source, $context["item"], "param_value", array())))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["item"], "route", array())))), "html", null, true);
                    echo "\"><i class=\"fa ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "iconclass", array()), "html", null, true);
                    echo " fa-fw\"></i>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "menuText", array()), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                // line 109
                echo "
\t\t\t\t\t\t\t";
                // line 111
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "sousmenu", array(), "any", true, true)) {
                    // line 112
                    echo "\t\t\t\t\t\t\t\t<ul class=\"sousmenu hide\">
\t\t\t\t\t\t\t\t";
                    // line 113
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "sousmenu", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 114
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((is_string($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 114, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = twig_get_attribute($this->env, $this->source, $context["menu"], "route", array())) && ('' === $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 || 0 === strpos($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57, $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9)))) {
                            // line 115
                            echo "\t\t\t\t\t\t\t\t\t\t<li><span><i class=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "iconclass", array()), "html", null, true);
                            echo " fa-fw\"></i>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "menuText", array()), "html", null, true);
                            echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 117
                            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["menu"], "route", array()));
                            echo "\"><i class=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "iconclass", array()), "html", null, true);
                            echo " fa-fw\"></i>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "menuText", array()), "html", null, true);
                            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 119
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 120
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
                }
                // line 122
                echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 124
            echo "\t\t\t\t\t";
            if (((is_string($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 124, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = twig_get_attribute($this->env, $this->source, $context["item"], "route", array())) && ('' === $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 || 0 === strpos($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217, $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105))) && ((twig_get_attribute($this->env, $this->source, $context["item"], "param_name", array(), "any", true, true)) ? ((twig_get_attribute($this->env, $this->source, $context["item"], "param_value", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 124, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "type"), "method"))) : (true)))) {
                $context["pagevars"] = $context["item"];
            }
            // line 125
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "\t\t\t</ul>
\t\t\t<ul class=\"showonmobile\">
\t\t\t\t<li><a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user");
        echo "\"><i class=\"fa fa-users\"></i>Gestion des utilisateurs</a></li>
\t\t\t\t<li><a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion");
        echo "\"><i class=\"fa fa-power-off \"></i>Deconnexion</a></li>
\t\t\t</ul>
\t\t</nav>
\t</div>

\t<div class=\"contentwrapper\">
\t<div role=\"main\" id=\"content\">

\t\t";
        // line 137
        if (        $this->renderBlock("titre", $context, $blocks)) {
            // line 138
            echo "\t\t\t<div id=\"titre\" class=\"group\" data-tools=\"navigation-fixed\">
\t\t\t\t<div class=\"left\">

\t\t\t\t<i class=\"icon ";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagevars"]) || array_key_exists("pagevars", $context) ? $context["pagevars"] : (function () { throw new Twig_Error_Runtime('Variable "pagevars" does not exist.', 141, $this->source); })()), "iconclass", array()), "html", null, true);
            echo " fa-fw fa-2x\"></i>

\t\t\t\t\t<h2>";
            // line 143
            $this->displayBlock('titre', $context, $blocks);
            echo "</h2>
\t\t\t\t\t<nav class=\"breadcrumbs\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 146
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\"><i class=\"fa fa-home\"></i></a></li>
\t\t\t\t\t\t\t";
            // line 147
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagevars"]) || array_key_exists("pagevars", $context) ? $context["pagevars"] : (function () { throw new Twig_Error_Runtime('Variable "pagevars" does not exist.', 147, $this->source); })()), "menuText", array()) != "")) {
                echo "<li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["pagevars"]) || array_key_exists("pagevars", $context) ? $context["pagevars"] : (function () { throw new Twig_Error_Runtime('Variable "pagevars" does not exist.', 147, $this->source); })()), "route", array()));
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagevars"]) || array_key_exists("pagevars", $context) ? $context["pagevars"] : (function () { throw new Twig_Error_Runtime('Variable "pagevars" does not exist.', 147, $this->source); })()), "menuText", array()), "html", null, true);
                echo "</a></li>";
            }
            // line 148
            echo "\t\t\t\t\t\t\t";
            if (            $this->renderBlock("breadcrumbs", $context, $blocks)) {
                $this->displayBlock('breadcrumbs', $context, $blocks);
            }
            // line 149
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div id=\"controls\" class=\"group right\">";
            // line 152
            $this->displayBlock('controls', $context, $blocks);
            echo "</div>
\t\t\t</div>
\t\t";
        }
        // line 155
        echo "


\t";
        // line 159
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 161
        echo "\t</div>
\t</div>
</div>

\t";
        // line 166
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 166, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 167
            echo "\t\t<div class=\"flash notice\">
\t\t\t<div class=\"tools-message\">
\t\t\t\t";
            // line 169
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 173, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 174
            echo "\t\t<div class=\"flash notice\">
\t\t\t<div class=\"tools-message tools-message-red\">
\t\t\t\t";
            // line 176
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 180, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 181
            echo "\t\t<div class=\"flash notice\">
\t\t\t<div class=\"tools-message tools-message-green\">
\t\t\t\t";
            // line 183
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "
<!-- FOOTER -->
";
        // line 189
        if (        $this->renderBlock("footer", $context, $blocks)) {
            // line 190
            echo "<footer id=\"footer\" class=\"group\">
\t";
            // line 191
            $this->displayBlock('footer', $context, $blocks);
            // line 193
            echo "</footer>
";
        }
        // line 195
        echo "
<!-- SCRIPTS -->


";
        // line 199
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2aa9ee2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_2aa9ee2_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/2aa9ee2_jquery_1.js");
            // line 202
            echo "\t<script>window.jQuery || document.write('<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 202, $this->source); })()), "html", null, true);
            echo "\"><\\/script>')</script>
";
        } else {
            // asset "2aa9ee2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_2aa9ee2") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/2aa9ee2.js");
            echo "\t<script>window.jQuery || document.write('<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 202, $this->source); })()), "html", null, true);
            echo "\"><\\/script>')</script>
";
        }
        unset($context["asset_url"]);
        // line 204
        echo "

<!-- <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script> -->
<script>window.jQuery || document.write('<script src=\"public/js/jquery.js\"><\\/script>')</script>
";
        // line 208
        $this->displayBlock('javascripts', $context, $blocks);
        // line 217
        echo "
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4f9e5db_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4f9e5db_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/4f9e5db_kube.min_1.css");
            // line 19
            echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\"/>
\t\t";
            // asset "4f9e5db_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4f9e5db_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/4f9e5db_style_2.css");
            echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\"/>
\t\t";
            // asset "4f9e5db_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4f9e5db_2") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/4f9e5db_jquery.datetimepicker_3.css");
            echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\"/>
\t\t";
        } else {
            // asset "4f9e5db"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_4f9e5db") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/4f9e5db.css");
            echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\"/>
\t\t";
        }
        unset($context["asset_url"]);
        // line 21
        echo "\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "722d74f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_722d74f_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/722d74f_font-awesome.min_1.css");
            // line 22
            echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\"/>
\t\t";
        } else {
            // asset "722d74f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_722d74f") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/722d74f.css");
            echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\"/>
\t\t";
        }
        unset($context["asset_url"]);
        // line 24
        echo "\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 143
    public function block_titre($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 148
    public function block_breadcrumbs($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 152
    public function block_controls($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controls"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 159
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 160
        echo "\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 191
    public function block_footer($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 192
        echo "\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 208
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 209
        echo "\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7da4399_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_7da4399_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/7da4399_kube.min_1.js");
            // line 214
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 214, $this->source); })()), "html", null, true);
            echo "\"></script>
\t";
            // asset "7da4399_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_7da4399_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/7da4399_jquery.datetimepicker_2.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 214, $this->source); })()), "html", null, true);
            echo "\"></script>
\t";
            // asset "7da4399_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_7da4399_2") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/7da4399_main_3.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 214, $this->source); })()), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "7da4399"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_7da4399") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/7da4399.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 214, $this->source); })()), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "::app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  610 => 214,  605 => 209,  599 => 208,  592 => 192,  586 => 191,  579 => 160,  573 => 159,  562 => 152,  551 => 148,  540 => 143,  533 => 24,  519 => 22,  514 => 21,  488 => 19,  483 => 15,  477 => 14,  466 => 10,  456 => 217,  454 => 208,  448 => 204,  434 => 202,  430 => 199,  424 => 195,  420 => 193,  418 => 191,  415 => 190,  413 => 189,  409 => 187,  399 => 183,  395 => 181,  390 => 180,  380 => 176,  376 => 174,  371 => 173,  361 => 169,  357 => 167,  352 => 166,  346 => 161,  343 => 159,  338 => 155,  332 => 152,  327 => 149,  322 => 148,  314 => 147,  310 => 146,  304 => 143,  299 => 141,  294 => 138,  292 => 137,  281 => 129,  277 => 128,  273 => 126,  267 => 125,  262 => 124,  258 => 122,  254 => 120,  248 => 119,  238 => 117,  230 => 115,  227 => 114,  223 => 113,  220 => 112,  217 => 111,  214 => 109,  204 => 107,  196 => 105,  194 => 104,  191 => 103,  188 => 102,  184 => 101,  171 => 90,  157 => 89,  153 => 88,  149 => 86,  140 => 79,  136 => 78,  128 => 75,  119 => 68,  105 => 66,  101 => 65,  97 => 64,  90 => 59,  88 => 58,  85 => 57,  83 => 36,  71 => 25,  69 => 14,  62 => 10,  57 => 7,  43 => 5,  39 => 4,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
{% image '../app/Resources/public/img/flamme.png' %}
\t<link rel=\"shortcut icon\" type=\"image/png\" href=\"{{ asset_url }}\" />
{% endimage %}

\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t<title>OCIM/Web/Inscription | {% block title %}{% endblock %}</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<!-- STYLES -->
\t{% block stylesheets %}
\t\t{% stylesheets '%kernel.root_dir%/Resources/public/css/kube.min.css'
\t\t\t\t\t\t'%kernel.root_dir%/Resources/public/css/style.css'
\t\t\t\t\t\t'%kernel.root_dir%/Resources/public/css/jquery.datetimepicker.css'
\t\tfilter=\"cssrewrite\" %}
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"{{ asset_url }}\"/>
\t\t{% endstylesheets %}
\t\t{% stylesheets '%kernel.root_dir%/Resources/public/css/font-awesome.min.css' %}
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"{{ asset_url }}\"/>
\t\t{% endstylesheets %}
\t{% endblock %}
<link href='http://fonts.googleapis.com/css?family=Muli:400,300italic,300,400italic' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,300italic' rel='stylesheet' type='text/css'/>
<style>
\t*{font-family: 'Muli', sans-serif;}
\th1,h2,h3,h4,h5,h6{font-family: 'Josefin Sans', sans-serif; font-variant: small-caps}
</style>
</head>
<body>


{# MENU TWIG #}
{% set menu = [
\t{'route': 'home' ,'iconclass' : \"fa fa-tachometer\", 'menuText': 'Tableau de bord', },
\t{'route': 'evenement' ,'iconclass' : \"fa fa-calendar\", 'menuText': '' },
\t{'route': 'evenement' ,'iconclass' : \"fa fa-graduation-cap\", 'menuText': 'Formations', 'param_name': 'type', 'param_value': 'formation' },
\t{'route': 'evenement' ,'iconclass' : \"fa fa-calendar\", 'menuText': 'Evenements', 'param_name': 'type', 'param_value': 'event' },
\t{'route': 'inscription' ,'iconclass' : \"fa fa-users\", 'menuText': '' },
\t{'route': 'user' ,'iconclass' : \"fa fa-users\", 'menuText': '' },
\t{'route': 'intervenant' ,'iconclass' : \"fa fa-users\", 'menuText': '' },
\t{'route': 'champPerso' ,'iconclass' : \"fa fa-table\", 'menuText': '' },
\t{'route': 'formule' ,'iconclass' : \"fa fa-cutlery\", 'menuText': 'Formules'},
\t{'route': 'convention' ,'iconclass' : \"fa fa-folder-open\", 'menuText': 'Conventions'},
\t{'route': 'structures' ,'iconclass' : \"fa fa-university\", 'menuText': '' },
\t{'route': 'personne' ,'iconclass' : \"fa fa-phone\", 'menuText': 'Contacts',
\t\t'sousmenu':
\t\t [
\t\t\t{'route': 'personne' ,'iconclass' : \"fa fa-user\", 'menuText': 'Personnes',  },
\t\t\t{'route': 'structure' ,'iconclass' : \"fa fa-home\", 'menuText': 'Structures',  },
\t\t ]
\t},
\t{'route': 'documents' ,'iconclass' : \"fa fa-files-o\", 'menuText': 'Export et gabarits', },
] %}

{% set pagevars = '' %}


<header class=\"group\" id=\"header\">
\t<div class=\"left\">
\t\t<a href=\"#\" id=\"nav-toggle\"><i class=\"fa fa-bars fa-2x\"></i></a>
\t\t<a href=\"{{path('home')}}\" class=\"logo\">
\t\t\t{% image '../app/Resources/public/img/logo-header.png' %}
\t\t\t\t<img src=\"{{ asset_url }}\" id=\"logo\" alt=\"OCIM\"/>
\t\t\t{% endimage %}
\t\t</a>
\t</div>
\t<div class=\"right\">
\t\t<div id=\"main-btn\" class=\"left hide\">
\t\t\t<a href=\"#\" id=\"fullscreen-btn\" ><i class=\"fa fa-arrows-alt fa-border\"></i></a>
\t\t</div>
\t\t<div id=\"user\" class=\"right\">
\t\t\t<a href=\"#\"><i class=\"fa fa-user fa-2x\"></i><span class=\"username\">{{app.user.prenom |capitalize}} {{app.user.nom |capitalize}}</span> <span class=\"caret\"></span></a>
\t\t\t<nav class=\"nav nav-stacked\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"{{path('user')}}\"><i class=\"fa fa-users\"></i>Gestion des utilisateurs</a></li>
\t\t\t\t\t<li><a href=\"{{ path('deconnexion') }}\"><i class=\"fa fa-power-off \"></i>Deconnexion</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</div>

\t{# NAVIGATION MOBILE #}
\t<nav class=\"navbar navbar-right end\">
\t\t<div class=\"navigation-toggle\" data-tools=\"navigation-toggle\" data-target=\"#nav-mobile\">
\t\t\t<span>Menu\t{% image '../app/Resources/public/img/logo-header.png' %}
\t\t\t\t\t\t\t<img src=\"{{ asset_url }}\" alt=\"OCIM\" style='height: 40px; margin-left: calc(100% - 280px)'/>
\t\t\t\t\t\t{% endimage %}</span>
\t\t</div>
\t</nav>
</header>


<div id=\"page\" class=\"group\">
\t<div id=\"sidebar\">

\t\t<nav id=\"nav-mobile\" class=\"nav nav-stacked\" data-tools=\"navigation-fixed\">
\t\t\t<ul>
\t\t\t\t{% for item in menu %}
\t\t\t\t\t{% if item.menuText != \"\"%}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t{% if (app.request.attributes.get(\"_route\") starts with item.route)and( (item.param_name is defined)? item.param_value == app.request.attributes.get(\"type\"): true) %}
\t\t\t\t\t\t\t\t<span><i class=\"fa {{item.iconclass}} fa-fw\"></i> {{item.menuText}}</span>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a href=\"{{ (item.param_name is defined)? path(item.route, { (item.param_name): item.param_value } ) : path(item.route) }}\"><i class=\"fa {{item.iconclass}} fa-fw\"></i>{{item.menuText}}</a>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{# SOUSMENU #}
\t\t\t\t\t\t\t{% if (item.sousmenu is defined) %}
\t\t\t\t\t\t\t\t<ul class=\"sousmenu hide\">
\t\t\t\t\t\t\t\t{% for menu in item.sousmenu %}
\t\t\t\t\t\t\t\t\t{% if (app.request.attributes.get(\"_route\") starts with menu.route) %}
\t\t\t\t\t\t\t\t\t\t<li><span><i class=\"{{menu.iconclass}} fa-fw\"></i>{{menu.menuText}}</span></li>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{path(menu.route)}}\"><i class=\"{{menu.iconclass}} fa-fw\"></i>{{menu.menuText}}</a></li>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if (app.request.attributes.get(\"_route\") starts with item.route)and( (item.param_name is defined)? item.param_value == app.request.attributes.get(\"type\"): true) %}{% set pagevars = item %}{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t\t<ul class=\"showonmobile\">
\t\t\t\t<li><a href=\"{{path('user')}}\"><i class=\"fa fa-users\"></i>Gestion des utilisateurs</a></li>
\t\t\t\t<li><a href=\"{{ path('deconnexion') }}\"><i class=\"fa fa-power-off \"></i>Deconnexion</a></li>
\t\t\t</ul>
\t\t</nav>
\t</div>

\t<div class=\"contentwrapper\">
\t<div role=\"main\" id=\"content\">

\t\t{% if block('titre') %}
\t\t\t<div id=\"titre\" class=\"group\" data-tools=\"navigation-fixed\">
\t\t\t\t<div class=\"left\">

\t\t\t\t<i class=\"icon {{ pagevars.iconclass }} fa-fw fa-2x\"></i>

\t\t\t\t\t<h2>{% block titre %}{% endblock %}</h2>
\t\t\t\t\t<nav class=\"breadcrumbs\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"{{path('home')}}\"><i class=\"fa fa-home\"></i></a></li>
\t\t\t\t\t\t\t{% if pagevars.menuText != \"\"%}<li><a href=\"{{path(pagevars.route)}}\"> {{pagevars.menuText}}</a></li>{% endif %}
\t\t\t\t\t\t\t{% if block('breadcrumbs') %}{% block breadcrumbs %}{% endblock %}{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div id=\"controls\" class=\"group right\">{% block controls %}{% endblock %}</div>
\t\t\t</div>
\t\t{% endif %}



\t{# contenu #}
\t\t{% block body %}
\t\t{% endblock %}
\t</div>
\t</div>
</div>

\t{# FLASHBAG #}
\t\t{% for flashMessage in app.session.flashbag.get('notice') %}
\t\t<div class=\"flash notice\">
\t\t\t<div class=\"tools-message\">
\t\t\t\t{{flashMessage}}
\t\t\t</div>
\t\t</div>
\t\t{% endfor %}
\t\t{% for flashMessage in app.session.flashbag.get('error') %}
\t\t<div class=\"flash notice\">
\t\t\t<div class=\"tools-message tools-message-red\">
\t\t\t\t{{flashMessage}}
\t\t\t</div>
\t\t</div>
\t\t{% endfor %}
\t\t{% for flashMessage in app.session.flashbag.get('success') %}
\t\t<div class=\"flash notice\">
\t\t\t<div class=\"tools-message tools-message-green\">
\t\t\t\t{{flashMessage}}
\t\t\t</div>
\t\t</div>
\t\t{% endfor %}

<!-- FOOTER -->
{% if block('footer') %}
<footer id=\"footer\" class=\"group\">
\t{% block footer %}
\t{% endblock %}
</footer>
{% endif %}

<!-- SCRIPTS -->


{% javascripts
\t'../app/Resources/public/js/jquery.js'
%}
\t<script>window.jQuery || document.write('<script src=\"{{ asset_url }}\"><\\/script>')</script>
{% endjavascripts %}


<!-- <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script> -->
<script>window.jQuery || document.write('<script src=\"public/js/jquery.js\"><\\/script>')</script>
{% block javascripts %}
\t{% javascripts
\t\t'../app/Resources/public/js/kube.min.js'
\t\t'../app/Resources/public/js/jquery.datetimepicker.js'
\t\t'../app/Resources/public/js/main.js'
\t%}
\t\t<script src=\"{{ asset_url }}\"></script>
\t{% endjavascripts %}
{% endblock  %}

</body>
</html>
", "::app.html.twig", "/srv/http/ocim.formations/app/Resources/views/app.html.twig");
    }
}
