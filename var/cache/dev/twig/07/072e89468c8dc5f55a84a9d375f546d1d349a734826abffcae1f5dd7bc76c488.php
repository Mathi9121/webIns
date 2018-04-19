<?php

/* OCIMEvenementsBundle:Default:index.html.twig */
class __TwigTemplate_fe2a6043b094db3c5b40e2f59a5185fff39ed872ac71c9e09650289e280fe28b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::app.html.twig", "OCIMEvenementsBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'controls' => array($this, 'block_controls'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::app.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCIMEvenementsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1c749bc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_1c749bc_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/1c749bc_accueil_1.css");
            // line 7
            echo "\t<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\"/>
";
        } else {
            // asset "1c749bc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_1c749bc") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/1c749bc.css");
            echo "\t<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\"/>
";
        }
        unset($context["asset_url"]);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "325c83a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_325c83a_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/325c83a_accueil_1.js");
            // line 15
            echo "\t\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "325c83a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_325c83a") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/325c83a.js");
            echo "\t\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_titre($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Bonjour ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->source); })()), "user", array()), "username", array())), "html", null, true);
        echo " !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_controls($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controls"));

        // line 27
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->source); })()), "user", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn\"><i class=\"fa fa-user fa-fw\"></i>Mon compte</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "<div class=\"units-row units-mobile-33\" id=\"indicateurs\">
\t<div class=\"unit-20 group\">
\t\t<i class=\"fa fa-graduation-cap fa-3x left\"></i>
\t\t<div class=\"count-container left\">
\t\t\t<p>
\t\t\t\t<span class=\"count\">";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["countFormations"]) || array_key_exists("countFormations", $context) ? $context["countFormations"] : (function () { throw new Twig_Error_Runtime('Variable "countFormations" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</span>
\t\t\t\t<span class=\"nomcount\">Formations</span>
\t\t\t\t<a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement");
        echo "\"><br/><i class=\"fa fa-angle-double-right fa-fw\"></i>Voir toutes les formations</a>
\t\t\t</p>

\t\t</div>
\t</div>

\t<div class=\"unit-20 group\">
\t\t<i class=\"fa fa-calendar fa-3x left\"></i>
\t\t<div class=\"count-container left\">
\t\t\t<p>
\t\t\t\t<span class=\"count\">";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["countEvents"]) || array_key_exists("countEvents", $context) ? $context["countEvents"] : (function () { throw new Twig_Error_Runtime('Variable "countEvents" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "</span>
\t\t\t\t<span class=\"nomcount\">Evenements</span>
\t\t\t\t<a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement");
        echo "\"><br/><i class=\"fa fa-angle-double-right fa-fw\"></i>Voir toutes les evenements</a>
\t\t\t</p>

\t\t</div>
\t</div>

\t<div class=\"unit-20 group\">
\t\t<i class=\"fa fa-users fa-3x left\"></i>
\t\t<div class=\"count-container left\">
\t\t\t<p>
\t\t\t\t<span class=\"count\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["countInscriptions"]) || array_key_exists("countInscriptions", $context) ? $context["countInscriptions"] : (function () { throw new Twig_Error_Runtime('Variable "countInscriptions" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "</span>
\t\t\t\t<span class=\"nomcount\">Inscriptions</span>
\t\t\t\t<a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personne");
        echo "\"><br/><i class=\"fa fa-angle-double-right fa-fw\"></i>Aller aux contacts</a>
\t\t\t</p>
\t\t</div>
\t</div>

\t<div class=\"unit-20 group\">
\t\t<i class=\"fa fa-briefcase fa-3x left\"></i>
\t\t<div class=\"count-container left\">
\t\t\t<p>
\t\t\t\t<span class=\"count\">";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["countIntervenant"]) || array_key_exists("countIntervenant", $context) ? $context["countIntervenant"] : (function () { throw new Twig_Error_Runtime('Variable "countIntervenant" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "</span>
\t\t\t\t<span class=\"nomcount\">Intervenants</span>
\t\t\t\t<a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervenants_new");
        echo "\"><br/><i class=\"fa fa-plus fa-fw\"></i>Entrer un nouvel Intervenant</a>
\t\t\t</p>
\t\t</div>
\t</div>

\t<div class=\"unit-20 group\">
\t\t<i class=\"fa fa-folder-open fa-3x left\"></i>
\t\t<div class=\"count-container left\">
\t\t\t<p>
\t\t\t\t<span class=\"count\">";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["countConvention"]) || array_key_exists("countConvention", $context) ? $context["countConvention"] : (function () { throw new Twig_Error_Runtime('Variable "countConvention" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "</span>
\t\t\t\t<span class=\"nomcount\">Conventions</span>
\t\t\t\t<a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("convention");
        echo "\"><br/><i class=\"fa fa-angle-double-right fa-fw\"></i>Voir les conventions</a>
\t\t\t</p>
\t\t</div>
\t</div>
</div>


<div class=\"units-row\">
\t<div class=\"unit-60 panel\" id=\"evenements\">
\t\t<div class=\"header\">

\t\t\t<nav class=\"nav-tabs\" data-tools=\"tabs\" data-equals=\"true\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#formations\">Formations à venir</a></li>
\t\t\t\t\t\t\t<li><a href=\"#events\">&Eacute;vénements à venir</a></li>
\t\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>

\t\t<div class=\"panel-body\">
\t\t\t<div id=\"formations\">
\t\t\t<table class=\"table-hovered\">
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new Twig_Error_Runtime('Variable "formations" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 110
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t<td title=\"";
            // line 111
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "intitule", array())) >= 55)) ? (twig_get_attribute($this->env, $this->source, $context["evenement"], "intitule", array())) : ("")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "intitule", array()), 0, 55), "html", null, true);
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "intitule", array())) >= 55)) ? ("...") : (""));
            echo "</td>
\t\t\t\t\t<td>";
            // line 112
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "lieu", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t";
            // line 115
            $context["spanclass"] = "";
            // line 116
            echo "\t\t\t\t\t\t\t";
            $context["text"] = "";
            // line 117
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["evenement"], "_count", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["statut"]) {
                // line 118
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["statut"], "statut", array()) == "2")) {
                    // line 119
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["spanclass"] = "badge-yellow";
                    // line 120
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["text"] = "Inscriptions en attente de validation";
                    // line 121
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 122
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["statut"], "statut", array()) == "1")) {
                    // line 123
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["spanclass"] = "badge-green";
                    // line 124
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["text"] = "Inscriptions validées";
                    // line 125
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 126
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["statut"], "statut", array()) == "3")) {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["spanclass"] = "badge-red";
                    // line 128
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["text"] = "Nombre d'inscriptions annulées";
                    // line 129
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 130
                echo "\t\t\t\t\t\t\t\t<span title=\"";
                echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 130, $this->source); })()), "html", null, true);
                echo "\" class=\"badge ";
                echo twig_escape_filter($this->env, (isset($context["spanclass"]) || array_key_exists("spanclass", $context) ? $context["spanclass"] : (function () { throw new Twig_Error_Runtime('Variable "spanclass" does not exist.', 130, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statut"], 1, array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statut'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span class=\"group evenement-raccourcis right\">
\t\t\t\t\t\t\t<a title=\"Inscriptions\" href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription", array("idevenement" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-users fa-border\"></i></a>
\t\t\t\t\t\t\t<a title=\"Détails\" href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", array("id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-info fa-border\"></i></a>
\t\t\t\t\t\t\t<a title=\"ChampPerso\" href=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("champPerso_edit", array("idevenement" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-table fa-border\"></i></a>
\t\t\t\t\t\t\t<a title=\"Configuration\" href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-cogs fa-border\"></i></a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<p class=\"group\">
\t\t\t\t<span class=\"controls right\">
\t\t\t\t\t<a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement");
        echo "\"><i class=\"fa fa-angle-double-right\"></i> Toutes les formations</a>
\t\t\t\t</span>
\t\t\t</p>
\t\t</div>
\t\t<div id=\"events\">
\t\t\t<table class=\"table-hovered\">
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new Twig_Error_Runtime('Variable "evenements" does not exist.', 155, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 156
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t<td title=\"";
            // line 157
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "intitule", array())) >= 55)) ? (twig_get_attribute($this->env, $this->source, $context["evenement"], "intitule", array())) : ("")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "intitule", array()), 0, 55), "html", null, true);
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "intitule", array())) >= 55)) ? ("...") : (""));
            echo "</td>
\t\t\t\t\t<td>";
            // line 158
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "lieu", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t";
            // line 161
            $context["spanclass"] = "";
            // line 162
            echo "\t\t\t\t\t\t\t";
            $context["text"] = "";
            // line 163
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["evenement"], "_count", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["statut"]) {
                // line 164
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["statut"], "statut", array()) == "2")) {
                    // line 165
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["spanclass"] = "badge-yellow";
                    // line 166
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["text"] = "Inscriptions en attente de validation";
                    // line 167
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 168
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["statut"], "statut", array()) == "1")) {
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["spanclass"] = "badge-green";
                    // line 170
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["text"] = "Inscriptions validées";
                    // line 171
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 172
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["statut"], "statut", array()) == "3")) {
                    // line 173
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["spanclass"] = "badge-red";
                    // line 174
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["text"] = "Nombre d'inscriptions annulées";
                    // line 175
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 176
                echo "\t\t\t\t\t\t\t\t<span title=\"";
                echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 176, $this->source); })()), "html", null, true);
                echo "\" class=\"badge ";
                echo twig_escape_filter($this->env, (isset($context["spanclass"]) || array_key_exists("spanclass", $context) ? $context["spanclass"] : (function () { throw new Twig_Error_Runtime('Variable "spanclass" does not exist.', 176, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statut"], 1, array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statut'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span class=\"group evenement-raccourcis right\">
\t\t\t\t\t\t\t<a title=\"Inscriptions\" href=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription", array("idevenement" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-users fa-border\"></i></a>
\t\t\t\t\t\t\t<a title=\"Détails\" href=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", array("id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-info fa-border\"></i></a>
\t\t\t\t\t\t\t<a title=\"ChampPerso\" href=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("champPerso_edit", array("idevenement" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-table fa-border\"></i></a>
\t\t\t\t\t\t\t<a title=\"Configuration\" href=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-cogs fa-border\"></i></a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<p class=\"group\">
\t\t\t\t<span class=\"controls right\">
\t\t\t\t\t<a href=\"";
        // line 194
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement");
        echo "\"><i class=\"fa fa-angle-double-right\"></i> Tous les événements</a>
\t\t\t\t</span>
\t\t\t</p>
\t\t</div>

\t\t</div>
\t</div>




\t<div class=\"unit-40 panel\" id=\"inscriptions\">
\t\t<div class=\"header\">
\t\t\t<span class=\"titre\">10 derniers inscrits</span>
\t\t\t\t<span class=\"controls right group\">

\t\t\t\t</span>
\t\t</div>

\t\t<div class=\"panel-body\">
\t\t\t<table class=\"table-flat table-hovered\">
\t\t\t";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscriptions"]) || array_key_exists("inscriptions", $context) ? $context["inscriptions"] : (function () { throw new Twig_Error_Runtime('Variable "inscriptions" does not exist.', 215, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
            // line 216
            echo "\t\t\t\t<tr data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription", array("idevenement" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "evenementformule", array()), "evenement", array()), "id", array()), "id" => twig_get_attribute($this->env, $this->source, $context["inscription"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "stagiaire", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "stagiaire", array()), "prenom", array())), "html", null, true);
            echo "
\t\t\t\t\t\t<span class=\"evenementchoisie hide\">
\t\t\t\t\t\t\t<i class=\"fa fa-graduation-cap fa-fw\"></i>";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscription"], "evenementformule", array()), "evenement", array()), "intitule", array()), "html", null, true);
            echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"width: 125px\">
\t\t\t\t\t\t<span class=\"right color-gray-30\">";
            // line 224
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription"], "dateInscription", array()), "d/m/Y H:i"), "html", null, true);
            echo "</span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "\t\t\t</table>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OCIMEvenementsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  561 => 228,  551 => 224,  544 => 220,  537 => 218,  531 => 216,  527 => 215,  503 => 194,  497 => 190,  486 => 185,  482 => 184,  478 => 183,  474 => 182,  468 => 178,  455 => 176,  452 => 175,  449 => 174,  446 => 173,  443 => 172,  440 => 171,  437 => 170,  434 => 169,  431 => 168,  428 => 167,  425 => 166,  422 => 165,  419 => 164,  414 => 163,  411 => 162,  409 => 161,  403 => 158,  396 => 157,  393 => 156,  389 => 155,  379 => 148,  373 => 144,  362 => 139,  358 => 138,  354 => 137,  350 => 136,  344 => 132,  331 => 130,  328 => 129,  325 => 128,  322 => 127,  319 => 126,  316 => 125,  313 => 124,  310 => 123,  307 => 122,  304 => 121,  301 => 120,  298 => 119,  295 => 118,  290 => 117,  287 => 116,  285 => 115,  279 => 112,  272 => 111,  269 => 110,  265 => 109,  239 => 86,  234 => 84,  222 => 75,  217 => 73,  205 => 64,  200 => 62,  187 => 52,  182 => 50,  169 => 40,  164 => 38,  157 => 33,  151 => 32,  141 => 27,  135 => 26,  121 => 22,  109 => 21,  90 => 15,  86 => 13,  82 => 12,  76 => 11,  57 => 7,  53 => 6,  49 => 5,  43 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::app.html.twig\" %}


{% block stylesheets %}
{{parent()}}
{% stylesheets '@OCIMEvenementsBundle/Resources/public/css/accueil.css' filter='cssrewrite' %}
\t<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"{{ asset_url }}\"/>
{% endstylesheets %}
{% endblock %}

{% block  javascripts %}
{{parent()}}
{% javascripts
\t'@OCIMEvenementsBundle/Resources/public/js/Inscription/accueil.js' %}
\t\t\t<script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
{% endjavascripts %}
{% endblock %}


{# Titres #}
{% block title %}Accueil{% endblock %}
{% block titre %}Bonjour {{app.user.username|capitalize}} !{% endblock %}


{# Controls #}
{% block controls %}
<a href=\"{{path('user_edit', {'id': app.user.id})}}\" class=\"btn\"><i class=\"fa fa-user fa-fw\"></i>Mon compte</a>
{% endblock %}



{% block body  %}
<div class=\"units-row units-mobile-33\" id=\"indicateurs\">
\t<div class=\"unit-20 group\">
\t\t<i class=\"fa fa-graduation-cap fa-3x left\"></i>
\t\t<div class=\"count-container left\">
\t\t\t<p>
\t\t\t\t<span class=\"count\">{{countFormations}}</span>
\t\t\t\t<span class=\"nomcount\">Formations</span>
\t\t\t\t<a href=\"{{ path('evenement') }}\"><br/><i class=\"fa fa-angle-double-right fa-fw\"></i>Voir toutes les formations</a>
\t\t\t</p>

\t\t</div>
\t</div>

\t<div class=\"unit-20 group\">
\t\t<i class=\"fa fa-calendar fa-3x left\"></i>
\t\t<div class=\"count-container left\">
\t\t\t<p>
\t\t\t\t<span class=\"count\">{{countEvents}}</span>
\t\t\t\t<span class=\"nomcount\">Evenements</span>
\t\t\t\t<a href=\"{{ path('evenement') }}\"><br/><i class=\"fa fa-angle-double-right fa-fw\"></i>Voir toutes les evenements</a>
\t\t\t</p>

\t\t</div>
\t</div>

\t<div class=\"unit-20 group\">
\t\t<i class=\"fa fa-users fa-3x left\"></i>
\t\t<div class=\"count-container left\">
\t\t\t<p>
\t\t\t\t<span class=\"count\">{{countInscriptions}}</span>
\t\t\t\t<span class=\"nomcount\">Inscriptions</span>
\t\t\t\t<a href=\"{{path('personne')}}\"><br/><i class=\"fa fa-angle-double-right fa-fw\"></i>Aller aux contacts</a>
\t\t\t</p>
\t\t</div>
\t</div>

\t<div class=\"unit-20 group\">
\t\t<i class=\"fa fa-briefcase fa-3x left\"></i>
\t\t<div class=\"count-container left\">
\t\t\t<p>
\t\t\t\t<span class=\"count\">{{countIntervenant}}</span>
\t\t\t\t<span class=\"nomcount\">Intervenants</span>
\t\t\t\t<a href=\"{{path('intervenants_new')}}\"><br/><i class=\"fa fa-plus fa-fw\"></i>Entrer un nouvel Intervenant</a>
\t\t\t</p>
\t\t</div>
\t</div>

\t<div class=\"unit-20 group\">
\t\t<i class=\"fa fa-folder-open fa-3x left\"></i>
\t\t<div class=\"count-container left\">
\t\t\t<p>
\t\t\t\t<span class=\"count\">{{countConvention}}</span>
\t\t\t\t<span class=\"nomcount\">Conventions</span>
\t\t\t\t<a href=\"{{path('convention')}}\"><br/><i class=\"fa fa-angle-double-right fa-fw\"></i>Voir les conventions</a>
\t\t\t</p>
\t\t</div>
\t</div>
</div>


<div class=\"units-row\">
\t<div class=\"unit-60 panel\" id=\"evenements\">
\t\t<div class=\"header\">

\t\t\t<nav class=\"nav-tabs\" data-tools=\"tabs\" data-equals=\"true\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#formations\">Formations à venir</a></li>
\t\t\t\t\t\t\t<li><a href=\"#events\">&Eacute;vénements à venir</a></li>
\t\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>

\t\t<div class=\"panel-body\">
\t\t\t<div id=\"formations\">
\t\t\t<table class=\"table-hovered\">
\t\t\t\t<tbody>
\t\t\t\t\t{% for evenement in formations %}
\t\t\t\t\t<tr>
\t\t\t\t\t<td title=\"{{ (evenement.intitule|length >= 55)? evenement.intitule }}\">{{evenement.intitule|slice(0,55)}}{{ (evenement.intitule|length >= 55)? \"...\" }}</td>
\t\t\t\t\t<td>{{ evenement.lieu|capitalize}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t{% set spanclass = '' %}
\t\t\t\t\t\t\t{% set text = '' %}
\t\t\t\t\t\t\t{% for statut in evenement._count %}
\t\t\t\t\t\t\t\t{% if statut.statut == '2' %}
\t\t\t\t\t\t\t\t\t{% set spanclass = 'badge-yellow' %}
\t\t\t\t\t\t\t\t\t{% set text = 'Inscriptions en attente de validation' %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if statut.statut == '1' %}
\t\t\t\t\t\t\t\t\t{% set spanclass = 'badge-green' %}
\t\t\t\t\t\t\t\t\t{% set text = 'Inscriptions validées' %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if statut.statut == '3' %}
\t\t\t\t\t\t\t\t\t{% set spanclass = 'badge-red' %}
\t\t\t\t\t\t\t\t\t{% set text = \"Nombre d'inscriptions annulées\" %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<span title=\"{{ text }}\" class=\"badge {{ spanclass }}\">{{ statut.1 }}</span>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span class=\"group evenement-raccourcis right\">
\t\t\t\t\t\t\t<a title=\"Inscriptions\" href=\"{{ path('inscription', { 'idevenement': evenement.id }) }}\"><i class=\"fa fa-users fa-border\"></i></a>
\t\t\t\t\t\t\t<a title=\"Détails\" href=\"{{ path('evenement_show', { 'id': evenement.id }) }}\"><i class=\"fa fa-info fa-border\"></i></a>
\t\t\t\t\t\t\t<a title=\"ChampPerso\" href=\"{{path('champPerso_edit', {'idevenement': evenement.id })}}\"><i class=\"fa fa-table fa-border\"></i></a>
\t\t\t\t\t\t\t<a title=\"Configuration\" href=\"{{ path('evenement_edit', { 'id': evenement.id }) }}\"><i class=\"fa fa-cogs fa-border\"></i></a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<p class=\"group\">
\t\t\t\t<span class=\"controls right\">
\t\t\t\t\t<a href=\"{{ path('evenement') }}\"><i class=\"fa fa-angle-double-right\"></i> Toutes les formations</a>
\t\t\t\t</span>
\t\t\t</p>
\t\t</div>
\t\t<div id=\"events\">
\t\t\t<table class=\"table-hovered\">
\t\t\t\t<tbody>
\t\t\t\t\t{% for evenement in evenements %}
\t\t\t\t\t<tr>
\t\t\t\t\t<td title=\"{{ (evenement.intitule|length >= 55)? evenement.intitule }}\">{{evenement.intitule|slice(0,55)}}{{ (evenement.intitule|length >= 55)? \"...\" }}</td>
\t\t\t\t\t<td>{{ evenement.lieu|capitalize}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t{% set spanclass = '' %}
\t\t\t\t\t\t\t{% set text = '' %}
\t\t\t\t\t\t\t{% for statut in evenement._count %}
\t\t\t\t\t\t\t\t{% if statut.statut == '2' %}
\t\t\t\t\t\t\t\t\t{% set spanclass = 'badge-yellow' %}
\t\t\t\t\t\t\t\t\t{% set text = 'Inscriptions en attente de validation' %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if statut.statut == '1' %}
\t\t\t\t\t\t\t\t\t{% set spanclass = 'badge-green' %}
\t\t\t\t\t\t\t\t\t{% set text = 'Inscriptions validées' %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if statut.statut == '3' %}
\t\t\t\t\t\t\t\t\t{% set spanclass = 'badge-red' %}
\t\t\t\t\t\t\t\t\t{% set text = \"Nombre d'inscriptions annulées\" %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<span title=\"{{ text }}\" class=\"badge {{ spanclass }}\">{{ statut.1 }}</span>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span class=\"group evenement-raccourcis right\">
\t\t\t\t\t\t\t<a title=\"Inscriptions\" href=\"{{ path('inscription', { 'idevenement': evenement.id }) }}\"><i class=\"fa fa-users fa-border\"></i></a>
\t\t\t\t\t\t\t<a title=\"Détails\" href=\"{{ path('evenement_show', { 'id': evenement.id }) }}\"><i class=\"fa fa-info fa-border\"></i></a>
\t\t\t\t\t\t\t<a title=\"ChampPerso\" href=\"{{path('champPerso_edit', {'idevenement': evenement.id })}}\"><i class=\"fa fa-table fa-border\"></i></a>
\t\t\t\t\t\t\t<a title=\"Configuration\" href=\"{{ path('evenement_edit', { 'id': evenement.id }) }}\"><i class=\"fa fa-cogs fa-border\"></i></a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<p class=\"group\">
\t\t\t\t<span class=\"controls right\">
\t\t\t\t\t<a href=\"{{ path('evenement') }}\"><i class=\"fa fa-angle-double-right\"></i> Tous les événements</a>
\t\t\t\t</span>
\t\t\t</p>
\t\t</div>

\t\t</div>
\t</div>




\t<div class=\"unit-40 panel\" id=\"inscriptions\">
\t\t<div class=\"header\">
\t\t\t<span class=\"titre\">10 derniers inscrits</span>
\t\t\t\t<span class=\"controls right group\">

\t\t\t\t</span>
\t\t</div>

\t\t<div class=\"panel-body\">
\t\t\t<table class=\"table-flat table-hovered\">
\t\t\t{% for inscription in inscriptions %}
\t\t\t\t<tr data-href=\"{{ path('inscription', { 'idevenement': inscription.evenementformule.evenement.id, 'id': inscription.id }) }}\">
\t\t\t\t\t<td>
\t\t\t\t\t\t{{inscription.stagiaire.nom}} {{inscription.stagiaire.prenom|capitalize}}
\t\t\t\t\t\t<span class=\"evenementchoisie hide\">
\t\t\t\t\t\t\t<i class=\"fa fa-graduation-cap fa-fw\"></i>{{ inscription.evenementformule.evenement.intitule }}
\t\t\t\t\t\t</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"width: 125px\">
\t\t\t\t\t\t<span class=\"right color-gray-30\">{{inscription.dateInscription|date('d/m/Y H:i')}}</span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t</table>
\t\t</div>
\t</div>
</div>
{% endblock  %}
", "OCIMEvenementsBundle:Default:index.html.twig", "/srv/http/ocim.formations/src/OCIM/EvenementsBundle/Resources/views/Default/index.html.twig");
    }
}
