<?php

/* OCIMEvenementsBundle:Inscription:index.html.twig */
class __TwigTemplate_9c85bca532d0c7bb66d7c4c35189456621529310eb178dcb0c4ec57db9c36733 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::app.html.twig", "OCIMEvenementsBundle:Inscription:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCIMEvenementsBundle:Inscription:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5cb8318_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_5cb8318_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/5cb8318_popup_1.css");
            // line 9
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "\"/>
\t";
            // asset "5cb8318_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_5cb8318_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/5cb8318_inscriptions_2.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "\"/>
\t";
        } else {
            // asset "5cb8318"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_5cb8318") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/5cb8318.css");
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "\"/>
\t";
        }
        unset($context["asset_url"]);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a96784d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_a96784d_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/a96784d_jquery-ui.min_1.js");
            // line 24
            echo "    \t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a96784d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_a96784d_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/a96784d_jquery.stickytableheaders_2.js");
            echo "    \t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a96784d_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_a96784d_2") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/a96784d_inscription_3.js");
            echo "    \t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a96784d_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_a96784d_3") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/a96784d_showDetailsInscriptions_4.js");
            echo "    \t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a96784d_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_a96784d_4") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/a96784d_reponseschampPerso_5.js");
            echo "    \t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a96784d_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_a96784d_5") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/a96784d_popup_6.js");
            echo "    \t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a96784d_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_a96784d_6") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/a96784d_maj-statuts_7.js");
            echo "    \t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a96784d_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_a96784d_7") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/a96784d_proposition-export_8.js");
            echo "    \t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "a96784d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_a96784d") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/a96784d.js");
            echo "    \t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_breadcrumbs($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 29
        echo "<li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement");
        echo "\">Evenements</a></li>
<li><span>Inscriptions</span></li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscriptions : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 34, $this->source); })()), "intitule", array()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_titre($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 35, $this->source); })()), "intitule", array()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_controls($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controls"));

        // line 37
        echo "<div>
<div>
<a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_new", array("idevenement" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 39, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-green\"><i class=\"fa fa-plus fa-fw\"></i> Nouvelle inscription</a>
<a class=\"btn btn-green list\" href=\"#\"></a>
</div>
<ul class=\"hide\">
<li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervenants_new", array("idevenement" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 43, $this->source); })()), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-plus fa-fw\"></i>Créer un intervenant</a></li>
<li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_addintervenants", array("idevenement" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 44, $this->source); })()), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-user fa-fw\"></i>Relier un intervenant existant</a></li>
<li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("champPerso_edit", array("idevenement" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 45, $this->source); })()), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-table fa-fw\"></i>Editer les champs personnalisés</a></li>
</ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "<div id=\"message-error\" class=\"tools-message tools-message-red disabledonload\">ATTENTION : Erreur lors de l'enregistrement ! Veuillez recharger la page.</div>
<div id=\"message-save\" class=\"tools-message tools-message-green disabledonload\">Enregistrement OK</div>
<div id=\"lienAjax\" class=\"hide\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_edit_ordre", array("idevenement" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 54, $this->source); })()), "id", array()))), "html", null, true);
        echo "</div>
<div id=\"updateconvention\" class=\"hide\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_update_statut_convention", array("idevenement" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 55, $this->source); })()), "id", array()))), "html", null, true);
        echo "</div>
<div id=\"updateinscription\" class=\"hide\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_update_statut_inscription", array("idevenement" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 56, $this->source); })()), "id", array()))), "html", null, true);
        echo "</div>
<div id=\"updatefinancement\" class=\"hide\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_update_statut_financement", array("idevenement" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 57, $this->source); })()), "id", array()))), "html", null, true);
        echo "</div>
<div id=\"liensExport\" class=\"hide\">";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("documents_liens");
        echo "</div>

";
        // line 60
        if (((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new Twig_Error_Runtime('Variable "entities" does not exist.', 60, $this->source); })()) != null)) {
            // line 62
            echo "<ul id=\"comptes\" class=\"blocks-5 padding\">
\t\t<li class=\"statuts\">
\t\t<p>Inscriptions</p>
\t\t\t<div class=\"units-row units-split end\">
\t\t\t\t<div class=\"unit-33 valide\"><p></p><p style=\"display:none\" class=\"aide\">Validés</p></div>
\t\t\t\t<div class=\"unit-33 attente\"><p></p><p style=\"display:none\" class=\"aide\">En attente</p></div>
\t\t\t\t<div class=\"unit-33 annule\"><p></p><p style=\"display:none\" class=\"aide\">Annulés</p></div>
\t\t\t</div>
\t\t</li>
\t\t<li class=\"financement\">
\t\t\t<p>Financement</p>
\t\t\t<div class=\"units-row units-split end\">
\t\t\t\t<div class=\"unit-33 valide\"><p></p><p style=\"display:none\" class=\"aide\">Acceptés</p></div>
\t\t\t\t<div class=\"unit-33 attente\"><p></p><p style=\"display:none\" class=\"aide\">En attente</p></div>
\t\t\t\t<div class=\"unit-33 annule\"><p></p><p style=\"display:none\" class=\"aide\">Pas de financement</p></div>
\t\t\t</div>
\t\t\t<p class=\"info\">Totaux sur les inscriptions <span style=\"color:rgba(3, 207, 3,  0.8)\">validées</span></p>
\t\t</li>
\t\t<li class=\"formule\">
\t\t\t<p>Formules</p>
\t\t\t<div class=\"units-row units-split end\">
\t\t\t\t";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 83, $this->source); })()), "formules", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["formule"]) {
                // line 84
                echo "\t\t\t\t\t<div class=\"unit-";
                echo twig_escape_filter($this->env, twig_round((100 / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 84, $this->source); })()), "formules", array()), "count", array())), 0, "floor"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<p data-idformule=\"";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "id", array()), "html", null, true);
                echo "\">";
                echo ((twig_get_attribute($this->env, $this->source, $context["formule"], "nuit", array())) ? ("<i class='fa fa-moon-o'></i>") : (""));
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "tarif", array()), "html", null, true);
                echo ((twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "tarif", array()))) ? ("€") : (""));
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t\t\t</div>
\t\t\t<p class=\"info\">Totaux sur les inscriptions <span style=\"color:rgba(3, 207, 3,  0.8)\">validées</span></p>
\t\t</li>
\t\t<li  class=\"conventions\">
\t\t\t<p>Conventions</p>
\t\t\t<div class=\"units-row units-split end\">
\t\t\t\t<div class=\"unit-33 valide\"><p></p><p style=\"display:none\" class=\"aide\">Demandées</p></div>
\t\t\t\t<div class=\"unit-33 attente\"><p></p><p style=\"display:none\" class=\"aide\">Ne sais pas</p></div>
\t\t\t\t<div class=\"unit-33 annule\"><p></p><p style=\"display:none\" class=\"aide\">Pas de convention</p></div>
\t\t\t</div>
\t\t\t<p class=\"info\">Totaux sur les inscriptions <span style=\"color:rgba(3, 207, 3,  0.8)\">validées</span></p>
\t\t</li>
\t\t<li class=\"totaux\">
\t\t\t<p>Divers</p>
\t\t\t<div class=\"units-row units-split end\">
\t\t\t\t<div class=\"unit-33 users\"><p><i class=\"fa fa-user fa-fw\"></i><span></span></p><p style=\"display:none\" class=\"aide\">Stagiaires</p></div>
\t\t\t\t<div class=\"unit-33 pcst\"><p><i class=\"fa fa-flask fa-fw\"></i><span></span></p><p style=\"display:none\" class=\"aide\">PCST</p></div>
\t\t\t\t<div class=\"unit-33 intervs\"><p><i class=\"fa fa-briefcase fa-fw\"></i><span></span></p><p style=\"display:none\" class=\"aide\">Intervenants</p></div>
\t\t\t</div>
\t\t</li>
</ul>

<div class=\"panel\">
\t<nav class=\"nav-tabs\" data-tools=\"tabs\" data-equals=\"true\" style=\"padding-left: 25px;\">
\t\t<ul>
\t\t\t<li class=\"active\"><a href=\"#general\">informations Générales</a></li>
\t\t\t<li><a href=\"#contact\">Contacts</a></li>
\t\t\t<li><a href=\"#champPerso\">Logistique</a></li>
\t\t\t<li><a href=\"#convention\">Convention</a></li>
\t\t\t<li><a href=\"#financement\">Financement</a></li>
\t\t\t<li><a href=\"#attentes\">Attentes</a></li>
\t\t\t<li><a href=\"#intervenants\">Intervenants</a></li>
\t\t</ul>
\t</nav>
<div class=\"panel-body units-row units-split\">

";
            // line 125
            echo "<div id=\"general\" class=\"tab unit-100\">
<div class=\"table-container\">
\t<table class=\"\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"handle\"></th>
\t\t\t\t<th class=\"insc info\"><span>Provenance</span></th>
\t\t\t\t<th class=\"insc info\"><span>Civilité</span></th>
\t\t\t\t<th class=\"insc info\"><span>Nom</span></th>
\t\t\t\t<th class=\"insc info\"><span>Prénom</span></th>
\t\t\t\t<th class=\"insc info\"><span>Structure</span></th>
\t\t\t\t<th class=\"insc info\"><span>Fonction</span></th>
\t\t\t\t<th class=\"insc info\"><span>Adresse</span></th>
\t\t\t\t<th class=\"insc info\"><span>CP</span></th>
\t\t\t\t<th class=\"insc info\"><span>Ville</span></th>
\t\t\t\t<th class=\"insc info\"><span>Téléphone</span></th>
\t\t\t\t<th class=\"insc info\"><span>Mail Stagiaire</span></th>
\t\t\t\t<th class=\"insc info\"><span>Mail Admin</span></th>
\t\t\t\t<th class=\"insc info\"><span>Formule</span></th>
\t\t\t\t<th class=\"insc info text-centered\"><span>Convention</span></th>
\t\t\t\t<th class=\"insc info\"><span>Inscription</span></th>
\t\t\t\t<th class=\"insc info\"><span>Tags</span></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
        ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new Twig_Error_Runtime('Variable "entities" does not exist.', 150, $this->source); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 151
                echo "\t\t\t";
                $context["class"] = "";
                // line 152
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "en attente")) {
                    // line 153
                    echo "\t\t\t\t";
                    $context["class"] = "attente";
                    // line 154
                    echo "\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "accepté")) {
                    // line 155
                    echo "\t\t\t\t";
                    $context["class"] = "valide";
                    // line 156
                    echo "\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "annulé")) {
                    // line 157
                    echo "\t\t\t\t";
                    $context["class"] = "annule";
                    // line 158
                    echo "\t\t\t";
                }
                // line 159
                echo "\t\t\t<tr class=\"statut ";
                echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 159, $this->source); })()), "html", null, true);
                echo (((array_key_exists("id", $context) && ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 159, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["entity"], "id", array())))) ? (" highlight") : (""));
                echo "\" data-ordre=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "ordre", array()), "html", null, true);
                echo "\" data-idinscription=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 160
                if (((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 160, $this->source); })()) == "attente")) {
                    echo "<td class=\"handle\"><i class=\"fa fa-arrows\"></i></td>";
                } else {
                    echo "<td></td>";
                }
                // line 161
                echo "\t\t\t\t\t\t<td class=\"insc info\"><span>";
                echo ((twig_get_attribute($this->env, $this->source, $context["entity"], "provenancePCST", array())) ? ("<i class='fa fa-flask'>PCST</i>") : (""));
                echo "</span></td>
\t\t\t\t\t\t<td class=\"insc info civilite-stagiaire\"><span>";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "civilite", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t<td class=\"insc info nom-stagiaire\"><span>";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "nom", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t<td class=\"insc info prenom-stagiaire\"><span>";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "prenom", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t<td class=\"insc\">";
                // line 165
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array())) {
                    echo "<span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array()), "nomStructure", array()), "html", null, true);
                    echo "</span>";
                }
                echo "</td>
\t\t\t\t\t\t<td class=\"\"><span>";
                // line 166
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "fonction", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t<td> ";
                // line 167
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array()), "adresse", array())) : ("")), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td> ";
                // line 168
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array()), "cP", array())) : ("")), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td> ";
                // line 169
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array()), "ville", array())) : ("")), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td> ";
                // line 170
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "tel", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td> <a href=\"mailto:";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "mail", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "mail", array()), "html", null, true);
                echo "</a></td>
\t\t\t\t\t\t<td> <a href=\"mailto:";
                // line 172
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["entity"], "admin", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "admin", array()), "mail", array())) : ("")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["entity"], "admin", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "admin", array()), "mail", array())) : ("")), "html", null, true);
                echo "</a></td>
\t\t\t\t\t\t<td class=\"inscformule\" data-idformule=\"";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "evenementFormule", array()), "formule", array()), "id", array()), "html", null, true);
                echo "\"><span><abbr title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "evenementFormule", array()), "formule", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "evenementFormule", array()), "formule", array()), "tarif", array()), "html", null, true);
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "evenementFormule", array()), "formule", array()), "nuit", array())) ? ("<i class='fa fa-moon-o'></i>") : (""));
                echo "</abbr></span></td>
\t\t\t\t\t\t<td class=\"text-centered tdfinancement\">
\t\t\t\t\t\t\t";
                // line 175
                if ((null === twig_get_attribute($this->env, $this->source, $context["entity"], "statutConvention", array()))) {
                    // line 176
                    echo "\t\t\t\t\t\t\t<span class=\"label label-yellow\" title=\"Ne sais pas\"><i class=\"fa fa-question\"></i></span>
\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 177
$context["entity"], "statutConvention", array()) == false)) {
                    // line 178
                    echo "\t\t\t\t\t\t\t<span class=\"label label-red\" title=\"Non\"><i class=\"fa fa-times\"></i></span>
\t\t\t\t\t\t\t";
                } else {
                    // line 180
                    echo "\t\t\t\t\t\t\t<span class=\"label label-green\" title=\"Demande de convention confirmée\"><i class=\"fa fa-check\"></i></span>
\t\t\t\t\t\t\t";
                }
                // line 182
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class='dateinscription'><span>";
                // line 183
                if (twig_get_attribute($this->env, $this->source, $context["entity"], "dateInscription", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "dateInscription", array()), "d/m/Y"), "html", null, true);
                }
                echo "</span></td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t";
                // line 186
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array())) ? (twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array()), "tags", array()), ", ")) : ("")), "html", null, true);
                echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</td>
            <td class=\"insc actions\">
\t\t\t\t\t\t\t<a href=\"#\" data-tools=\"dropdown\" data-target=\"#dropdown1-";
                // line 190
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t";
                // line 191
                ob_start();
                // line 192
                echo "\t\t\t\t\t\t\t<ul id=\"dropdown1-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"dropdown\">
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 193
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_show", array("id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()), "idevenement" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 193, $this->source); })()), "id", array()))), "html", null, true);
                echo "\" class=\"inscription-href\"><i class=\"fa fa-info fa-fw\"></i>Détails</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 194
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()), "idevenement" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 194, $this->source); })()), "id", array()))), "html", null, true);
                echo "\" class=\"inscription-href\"><i class=\"fa fa-pencil fa-fw\"></i>Modifier</a></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"export\" data-idinscription=\"";
                // line 196
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-download fa-fw\"></i>Exporter</a></li>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"majstatuts\"
\t\t\t\t\t\t\t\t\t\tdata-statut='";
                // line 200
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "numberStatut", array()), "html", null, true);
                echo "'
\t\t\t\t\t\t\t\t\t\tdata-statutconvention=\"";
                // line 201
                if (((twig_get_attribute($this->env, $this->source, $context["entity"], "statutConvention", array()) == false) &&  !(null === twig_get_attribute($this->env, $this->source, $context["entity"], "statutConvention", array())))) {
                    echo "0";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["entity"], "statutConvention", array()) == true)) {
                    echo "1";
                } elseif ((null === twig_get_attribute($this->env, $this->source, $context["entity"], "statutConvention", array()))) {
                }
                echo "\" data-idinscription=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\tdata-statutfinancement=\"";
                // line 202
                if ((null === twig_get_attribute($this->env, $this->source, $context["entity"], "statutFinancement", array()))) {
                    echo "null";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["entity"], "statutFinancement", array()) == false)) {
                    echo "0";
                } else {
                    echo "1";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh fa-fw\"></i>Statuts
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 208
                echo "\t\t\t\t\t\t</td>
            </tr>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            echo "        </tbody>
\t</table>
</div>
</div>

";
            // line 217
            echo "<div id=\"contact\" class=\"tab unit-100\">
<div class=\"table-container\">
\t<table class=\"\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"handle\"></th>
\t\t\t\t<th class=\"insc info\"><span>Civilité</span></th>
\t\t\t\t<th class=\"insc info\"><span>Nom</span></th>
\t\t\t\t<th class=\"insc info\"><span>Prénom</span></th>
\t\t\t\t<th class=\"insc contact\"><span>Structure</span></th>
\t\t\t\t<th class=\"insc contact\"><span>Fonction</span></th>
\t\t\t\t<th class=\"insc contact\"><span>Adresse</span></th>
\t\t\t\t<th class=\"insc contact\"><span>CP</span></th>
\t\t\t\t<th class=\"insc contact\"><span>Ville</span></th>
\t\t\t\t<th class=\"insc contact\"><span>Téléphone</span></th>
\t\t\t\t<th class=\"insc contact\"><span>Mail Stagiaire</span></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
        ";
            // line 236
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new Twig_Error_Runtime('Variable "entities" does not exist.', 236, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 237
                echo "\t\t\t";
                $context["class"] = "";
                // line 238
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "en attente")) {
                    // line 239
                    echo "\t\t\t\t";
                    $context["class"] = "attente";
                    // line 240
                    echo "\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "accepté")) {
                    // line 241
                    echo "\t\t\t\t";
                    $context["class"] = "valide";
                    // line 242
                    echo "\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "annulé")) {
                    // line 243
                    echo "\t\t\t\t";
                    $context["class"] = "annule";
                    // line 244
                    echo "\t\t\t";
                }
                // line 245
                echo "\t\t\t<tr class=\"statut ";
                echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 245, $this->source); })()), "html", null, true);
                echo "\" data-ordre=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "ordre", array()), "html", null, true);
                echo "\" data-idinscription=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()), "html", null, true);
                echo "\">

\t\t\t\t\t\t";
                // line 247
                if (((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 247, $this->source); })()) == "attente")) {
                    echo "<td class=\"handle\"><i class=\"fa fa-arrows\"></i></td>";
                } else {
                    echo "<td></td>";
                }
                // line 248
                echo "\t\t\t\t\t\t<td class=\"insc info\"><span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "civilite", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t<td class=\"insc info nom-stagiaire\"><span>";
                // line 249
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "nom", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t<td class=\"insc info prenom-stagiaire\"><span>";
                // line 250
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "prenom", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t<td class=\"insc contact\"><span>";
                // line 251
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array()), "nomStructure", array())) : ("")), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t<td class=\"insc contact\"><span>";
                // line 252
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "fonction", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t<td class=\"insc contact\"><span>";
                // line 253
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array()), "adresse", array())) : ("")), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t<td class=\"insc contact\"><span>";
                // line 254
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array()), "CP", array())) : ("")), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t<td class=\"insc contact\"><span>";
                // line 255
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array()), "ville", array())) : ("")), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t<td class=\"insc contact\">";
                // line 256
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "tel", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td class=\"insc contact\"><a href=\"mailto:";
                // line 257
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "mail", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "mail", array()), "html", null, true);
                echo "</a></td>
      </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 260
            echo "    </tbody>
\t</table>
</div>
</div>

";
            // line 266
            echo "\t<div class=\"hide\" id=\"majChampPerso\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("champPerso_reponse");
            echo "</div>
<div id=\"champPerso\" class=\"tab unit-100\">
";
            // line 268
            if ((twig_length_filter($this->env, (isset($context["champPerso"]) || array_key_exists("champPerso", $context) ? $context["champPerso"] : (function () { throw new Twig_Error_Runtime('Variable "champPerso" does not exist.', 268, $this->source); })())) > 0)) {
                // line 269
                echo "<div class=\"table-container\">
\t<table class=\"table-bordered\">
\t\t<thead>
\t\t\t<tr style=\"background-color: white; \">
\t\t\t\t<th class=\"insc info\"><span>Nom</span></th>
\t\t\t\t<th class=\"insc info\"><span>Prénom</span></th>
\t\t\t\t";
                // line 275
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["champPerso"]) || array_key_exists("champPerso", $context) ? $context["champPerso"] : (function () { throw new Twig_Error_Runtime('Variable "champPerso" does not exist.', 275, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                    // line 276
                    echo "\t\t\t\t\t<th class=\"";
                    echo (((twig_in_filter("Nuit", twig_get_attribute($this->env, $this->source, $context["log"], "description", array())) || twig_in_filter("nuit", twig_get_attribute($this->env, $this->source, $context["log"], "description", array())))) ? ("nuit") : (""));
                    echo "\">";
                    echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["log"], "date", array()))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "date", array()), "d/m")) : ("")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "description", array()), "html", null, true);
                    echo "</th>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 278
                echo "\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
        ";
                // line 281
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new Twig_Error_Runtime('Variable "entities" does not exist.', 281, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                    // line 282
                    echo "\t\t\t";
                    $context["class"] = "";
                    // line 283
                    echo "\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "en attente")) {
                        // line 284
                        echo "\t\t\t\t";
                        $context["class"] = "attente";
                        // line 285
                        echo "\t\t\t";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "accepté")) {
                        // line 286
                        echo "\t\t\t\t";
                        $context["class"] = "valide";
                        // line 287
                        echo "\t\t\t";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "annulé")) {
                        // line 288
                        echo "\t\t\t\t";
                        $context["class"] = "annule";
                        // line 289
                        echo "\t\t\t";
                    }
                    // line 290
                    echo "
\t\t\t";
                    // line 291
                    if ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "accepté")) {
                        // line 292
                        echo "\t\t\t<tr class=\"statut ";
                        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 292, $this->source); })()), "html", null, true);
                        echo "\" data-ordre=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "ordre", array()), "html", null, true);
                        echo "\" data-idinscription=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()), "html", null, true);
                        echo "\" data-idpersonne=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "id", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t<td class=\"insc info\"><span>";
                        // line 293
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "nom", array()), "html", null, true);
                        echo "</span></td>
\t\t\t\t\t\t<td class=\"insc info\"><span>";
                        // line 294
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "prenom", array()), "html", null, true);
                        echo "</span></td>

\t\t\t\t\t";
                        // line 296
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["champPerso"]) || array_key_exists("champPerso", $context) ? $context["champPerso"] : (function () { throw new Twig_Error_Runtime('Variable "champPerso" does not exist.', 296, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                            // line 297
                            echo "\t\t\t\t\t\t";
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "evenementformule", array())) > 0)) {
                                // line 298
                                echo "\t\t\t\t\t\t\t";
                                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["entity"], "evenementFormule", array()), twig_get_attribute($this->env, $this->source, $context["log"], "evenementFormule", array()))) {
                                    // line 299
                                    echo "\t\t\t\t\t\t\t\t<td class=\"champPerso ";
                                    echo (((twig_in_filter("Nuit", twig_get_attribute($this->env, $this->source, $context["log"], "description", array())) || twig_in_filter("nuit", twig_get_attribute($this->env, $this->source, $context["log"], "description", array())))) ? ("nuit") : (""));
                                    echo "\" data-type=\"";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "typeReponse", array()), "html", null, true);
                                    echo "\" data-idreponse=\"";
                                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "getReponseByModeleId", array(0 => twig_get_attribute($this->env, $this->source, $context["log"], "id", array())))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "getReponseByModeleId", array(0 => twig_get_attribute($this->env, $this->source, $context["log"], "id", array()))), "id", array())) : ("")), "html", null, true);
                                    echo "\" data-date=\"";
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "date", array()), ""), "html", null, true);
                                    echo "\" data-idmodele=\"";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "id", array()), "html", null, true);
                                    echo "\" data-reponse=\"";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "getReponseByModeleId", array(0 => twig_get_attribute($this->env, $this->source, $context["log"], "id", array()), 1 => twig_get_attribute($this->env, $this->source, $context["log"], "typeReponse", array()))), "html", null, true);
                                    echo "\">
\t\t\t\t\t\t\t\t\t";
                                    // line 300
                                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "getReponseByModeleId", array(0 => twig_get_attribute($this->env, $this->source, $context["log"], "id", array())))) {
                                        // line 301
                                        echo "\t\t\t\t\t\t\t\t\t\t";
                                        if ((twig_get_attribute($this->env, $this->source, $context["log"], "typeReponse", array()) == "bool")) {
                                            // line 302
                                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "getReponseByModeleId", array(0 => twig_get_attribute($this->env, $this->source, $context["log"], "id", array()), 1 => twig_get_attribute($this->env, $this->source, $context["log"], "typeReponse", array()))) == "1")) {
                                                // line 303
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"champPerso ok\">1</span>
\t\t\t\t\t\t\t\t\t\t\t";
                                            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                                             // line 304
$context["entity"], "stagiaire", array()), "getReponseByModeleId", array(0 => twig_get_attribute($this->env, $this->source, $context["log"], "id", array()), 1 => twig_get_attribute($this->env, $this->source, $context["log"], "typeReponse", array()))) == "0")) {
                                                // line 305
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"champPerso zero\">0</span>
\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 307
                                            echo "\t\t\t\t\t\t\t\t\t\t";
                                        } elseif ((twig_get_attribute($this->env, $this->source, $context["log"], "typeReponse", array()) == "text")) {
                                            // line 308
                                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "getReponseByModeleId", array(0 => twig_get_attribute($this->env, $this->source, $context["log"], "id", array()), 1 => twig_get_attribute($this->env, $this->source, $context["log"], "typeReponse", array()))), "html", null, true);
                                            echo "
\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 310
                                        echo "\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 311
                                    echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                                } else {
                                    // line 313
                                    echo "\t\t\t\t\t\t\t\t<td data-reponse=\"0\" class=\"undefined\"></td>
\t\t\t\t\t\t\t";
                                }
                                // line 315
                                echo "\t\t\t\t\t\t";
                            } else {
                                // line 316
                                echo "\t\t\t\t\t\t\t";
                                // line 317
                                echo "\t\t\t\t\t\t\t<td data-reponse=\"0\" class=\"undefined\"></td>
\t\t\t\t\t\t";
                            }
                            // line 319
                            echo "\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 320
                        echo "            </tr>
\t\t\t";
                    }
                    // line 322
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 323
                echo "
\t\t";
                // line 325
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 325, $this->source); })()), "intervenants", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["intervenant"]) {
                    // line 326
                    echo "\t\t\t<tr data-idpersonne=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t<td class=\"insc info\">";
                    // line 327
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "nom", array()), "html", null, true);
                    echo "</td>
\t\t\t\t<td class=\"insc info\">";
                    // line 328
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "prenom", array()), "html", null, true);
                    echo "</td>
\t\t\t\t";
                    // line 329
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["champPerso"]) || array_key_exists("champPerso", $context) ? $context["champPerso"] : (function () { throw new Twig_Error_Runtime('Variable "champPerso" does not exist.', 329, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                        // line 330
                        echo "\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["log"], "evenement", array())) {
                            // line 331
                            echo "\t\t\t\t\t\t<td class=\"champPerso ";
                            echo (((twig_in_filter("Nuit", twig_get_attribute($this->env, $this->source, $context["log"], "description", array())) || twig_in_filter("nuit", twig_get_attribute($this->env, $this->source, $context["log"], "description", array())))) ? ("nuit") : (""));
                            echo "\" data-type=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "typeReponse", array()), "html", null, true);
                            echo "\" data-idreponse=\"";
                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["intervenant"], "getReponseByModeleId", array(0 => twig_get_attribute($this->env, $this->source, $context["log"], "id", array())))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["intervenant"], "getReponseByModeleId", array(0 => twig_get_attribute($this->env, $this->source, $context["log"], "id", array()))), "id", array())) : ("")), "html", null, true);
                            echo "\" data-date=\"";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "date", array()), ""), "html", null, true);
                            echo "\" data-idmodele=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "id", array()), "html", null, true);
                            echo "\" data-reponse=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "getReponseByModeleId", array(0 => twig_get_attribute($this->env, $this->source, $context["log"], "id", array()), 1 => twig_get_attribute($this->env, $this->source, $context["log"], "typeReponse", array()))), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t";
                            // line 332
                            if (twig_get_attribute($this->env, $this->source, $context["intervenant"], "getReponseByModeleId", array(0 => twig_get_attribute($this->env, $this->source, $context["log"], "id", array())))) {
                                // line 333
                                echo "\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["log"], "typeReponse", array()) == "bool")) {
                                    // line 334
                                    echo "\t\t\t\t\t\t\t\t\t";
                                    if ((twig_get_attribute($this->env, $this->source, $context["intervenant"], "getReponseByModeleId", array(0 => twig_get_attribute($this->env, $this->source, $context["log"], "id", array()), 1 => twig_get_attribute($this->env, $this->source, $context["log"], "typeReponse", array()))) == "1")) {
                                        // line 335
                                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"champPerso ok\">1</span>
\t\t\t\t\t\t\t\t\t";
                                    } elseif ((twig_get_attribute($this->env, $this->source,                                     // line 336
$context["intervenant"], "getReponseByModeleId", array(0 => twig_get_attribute($this->env, $this->source, $context["log"], "id", array()), 1 => twig_get_attribute($this->env, $this->source, $context["log"], "typeReponse", array()))) == "0")) {
                                        // line 337
                                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"champPerso zero\">0</span>
\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 339
                                    echo "\t\t\t\t\t\t\t\t";
                                } elseif ((twig_get_attribute($this->env, $this->source, $context["log"], "typeReponse", array()) == "text")) {
                                    // line 340
                                    echo "\t\t\t\t\t\t\t\t\t";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "getReponseByModeleId", array(0 => twig_get_attribute($this->env, $this->source, $context["log"], "id", array()), 1 => twig_get_attribute($this->env, $this->source, $context["log"], "typeReponse", array()))), "html", null, true);
                                    echo "
\t\t\t\t\t\t\t\t";
                                }
                                // line 342
                                echo "\t\t\t\t\t\t\t";
                            }
                            // line 343
                            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t";
                        } else {
                            // line 345
                            echo "\t\t\t\t\t\t<td data-reponse=\"0\" class=\"undefined\"></td>
\t\t\t\t\t";
                        }
                        // line 347
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 348
                    echo "\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervenant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 350
                echo "
        </tbody>
\t\t<tfoot>
\t\t\t<td colspan=\"2\">Totaux</td>
\t\t\t";
                // line 354
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["champPerso"]) || array_key_exists("champPerso", $context) ? $context["champPerso"] : (function () { throw new Twig_Error_Runtime('Variable "champPerso" does not exist.', 354, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                    // line 355
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["log"], "typeReponse", array()) == "bool")) {
                        // line 356
                        echo "\t\t\t\t\t\t<td class=\"";
                        echo (((twig_in_filter("Nuit", twig_get_attribute($this->env, $this->source, $context["log"], "description", array())) || twig_in_filter("nuit", twig_get_attribute($this->env, $this->source, $context["log"], "description", array())))) ? ("nuit") : (""));
                        echo "\" data-typereponse=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "typeReponse", array()), "html", null, true);
                        echo "\"></td>
\t\t\t\t\t";
                    } else {
                        // line 358
                        echo "\t\t\t\t\t\t<td style=\"background-color: rgba(125,125,125, 0.2)\"></td>
\t\t\t\t\t";
                    }
                    // line 360
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 361
                echo "\t\t</tfoot>
\t</table>
</div>
";
            } else {
                // line 365
                echo "\t<p class=\"lead text-centered\">
\t\tLa champPerso pour cette evenement n&apos;a pas été configurée.
\t</p>
\t<p class=\"text-centered\">
\t\t<a class=\"btn btn-big\" href=\"";
                // line 369
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("champPerso_edit", array("idevenement" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 369, $this->source); })()), "id", array()), "generation" => "generate")), "html", null, true);
                echo "\"><i class=\"fa fa-table fa-fw\"></i> Générer maintenant</a>
\t</p>
";
            }
            // line 372
            echo "
</div>

";
            // line 376
            echo "<div id=\"convention\" class=\"tab unit-100\">
<div class=\"table-container\">
\t<table class=\"\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"handle\"></th>
\t\t\t\t<th class=\"insc info\"><span>Civilité</span></th>
\t\t\t\t<th class=\"insc info\"><span>Nom</span></th>
\t\t\t\t<th class=\"insc info\"><span>Prénom</span></th>
\t\t\t\t<th class=\"insc convention text-centered\"><span>Numéro</span></th>
\t\t\t\t<th class=\"insc convention text-centered\"><span>Edition</span></th>
\t\t\t\t<th class=\"insc convention text-centered\"><span>Etape-1</span></th>
\t\t\t\t<th class=\"insc convention text-centered\"><span>Etape-2</span></th>
\t\t\t\t<th class=\"insc convention text-centered\"><span>Etape-3</span></th>
\t\t\t\t<th class=\"insc convention text-centered\"><span>Etape-4</span></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
        ";
            // line 394
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new Twig_Error_Runtime('Variable "entities" does not exist.', 394, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 395
                echo "\t\t\t";
                $context["class"] = "";
                // line 396
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "en attente")) {
                    // line 397
                    echo "\t\t\t\t";
                    $context["class"] = "attente";
                    // line 398
                    echo "\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "accepté")) {
                    // line 399
                    echo "\t\t\t\t";
                    $context["class"] = "valide";
                    // line 400
                    echo "\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "annulé")) {
                    // line 401
                    echo "\t\t\t\t";
                    $context["class"] = "annule";
                    // line 402
                    echo "\t\t\t";
                }
                // line 403
                echo "\t\t\t<tr class=\"statut ";
                echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 403, $this->source); })()), "html", null, true);
                echo "\" data-ordre=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "ordre", array()), "html", null, true);
                echo "\" data-idinscription=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 404
                if (((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 404, $this->source); })()) == "attente")) {
                    echo "<td class=\"handle\"><i class=\"fa fa-arrows\"></i></td>";
                } else {
                    echo "<td></td>";
                }
                // line 405
                echo "\t\t\t\t\t\t<td class=\"insc info\"><span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "civilite", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t<td class=\"insc info nom-stagiaire\"><span>";
                // line 406
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "nom", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t<td class=\"insc info prenom-stagiaire\"><span>";
                // line 407
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "prenom", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t";
                // line 408
                if (twig_get_attribute($this->env, $this->source, $context["entity"], "convention", array())) {
                    // line 409
                    echo "\t\t\t\t\t\t<td class=\"insc convention text-centered\"><span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "convention", array()), "numeroToString", array()), "html", null, true);
                    echo "</span></td>
\t\t\t\t\t\t<td class=\"insc convention text-centered\"><span>";
                    // line 410
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "convention", array()), "edition", array()), "d/m/Y"), "html", null, true);
                    echo "</span></td>
\t\t\t\t\t\t<td class=\"insc convention text-centered\"><span>";
                    // line 411
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "convention", array()), "etape1", array())) {
                        echo "<i class=\"fa fa-check\" title=\"";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "convention", array()), "etape1", array()), "d/m/Y"), "html", null, true);
                        echo "\"></i></span>";
                    }
                    echo "</td>
\t\t\t\t\t\t<td class=\"insc convention text-centered\"><span>";
                    // line 412
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "convention", array()), "etape2", array())) {
                        echo "<i class=\"fa fa-check\" title=\"";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "convention", array()), "etape2", array()), "d/m/Y"), "html", null, true);
                        echo "\"></i></span>";
                    }
                    echo "</td>
\t\t\t\t\t\t<td class=\"insc convention text-centered\"><span>";
                    // line 413
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "convention", array()), "etape3", array())) {
                        echo "<i class=\"fa fa-check\" title=\"";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "convention", array()), "etape3", array()), "d/m/Y"), "html", null, true);
                        echo "\"></i></span>";
                    }
                    echo "</td>
\t\t\t\t\t\t<td class=\"insc convention text-centered\"><span>";
                    // line 414
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "convention", array()), "etape4", array())) {
                        echo "<i class=\"fa fa-check\" title=\"";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "convention", array()), "etape4", array()), "d/m/Y"), "html", null, true);
                        echo "\"></i></span>";
                    }
                    echo "</td>

\t\t\t\t\t";
                } else {
                    // line 417
                    echo "\t\t\t\t\t\t<td class=\"insc convention text-centered\" colspan=\"6\">
\t\t\t\t\t\t\t<span style=\"color: grey\">";
                    // line 418
                    if ((null === twig_get_attribute($this->env, $this->source, $context["entity"], "statutConvention", array()))) {
                        echo " Demande de convention non confirmée ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["entity"], "statutConvention", array()) == false)) {
                        echo " Pas de convention ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["entity"], "statutConvention", array()) == true)) {
                        echo " <strong>Convention demandée</strong>";
                    }
                    echo "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
                }
                // line 421
                echo "            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 423
            echo "        </tbody>
\t</table>
</div>
</div>

";
            // line 429
            echo "<div id=\"financement\" class=\"tab unit-100\">
<div class=\"table-container\">
\t<table class=\"\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"handle\"></th>
\t\t\t\t<th class=\"insc finance text-centered\">Statut</th>
\t\t\t\t<th class=\"insc info\"><span>Civilité</span></th>
\t\t\t\t<th class=\"insc info\"><span>Nom</span></th>
\t\t\t\t<th class=\"insc info\"><span>Prénom</span></th>
\t\t\t\t<th class=\"insc finance\"><span>Structure stagiaire</span></th>
\t\t\t\t<th class=\"insc finance\">Organisme Financeur</th>
\t\t\t\t<th class=\"insc finance\">Adresse</th>
\t\t\t\t<th class=\"insc finance\">CP</th>
\t\t\t\t<th class=\"insc finance\">Ville</th>
\t\t\t\t<th class=\"insc finance\">Type</th>
\t\t\t\t<th class=\"insc finance\">Tags</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
        ";
            // line 449
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new Twig_Error_Runtime('Variable "entities" does not exist.', 449, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 450
                echo "\t\t\t";
                $context["class"] = "";
                // line 451
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "en attente")) {
                    // line 452
                    echo "\t\t\t\t";
                    $context["class"] = "attente";
                    // line 453
                    echo "\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "accepté")) {
                    // line 454
                    echo "\t\t\t\t";
                    $context["class"] = "valide";
                    // line 455
                    echo "\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "annulé")) {
                    // line 456
                    echo "\t\t\t\t";
                    $context["class"] = "annule";
                    // line 457
                    echo "\t\t\t";
                }
                // line 458
                echo "\t\t\t<tr class=\"statut ";
                echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 458, $this->source); })()), "html", null, true);
                echo "\" data-ordre=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "ordre", array()), "html", null, true);
                echo "\" data-idinscription=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 459
                if (((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 459, $this->source); })()) == "attente")) {
                    echo "<td class=\"handle\"><i class=\"fa fa-arrows\"></i></td>";
                } else {
                    echo "<td></td>";
                }
                // line 460
                echo "\t\t\t\t\t\t<td class=\"insc info text-centered\">
\t\t\t\t\t\t\t";
                // line 461
                if ((null === twig_get_attribute($this->env, $this->source, $context["entity"], "statutFinancement", array()))) {
                    // line 462
                    echo "\t\t\t\t\t\t\t\t<span class=\"label label-yellow\" title=\"Financement en attente\"><i class=\"fa fa-question\"></i></span>
\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 463
$context["entity"], "statutFinancement", array()) == false)) {
                    // line 464
                    echo "\t\t\t\t\t\t\t\t<span class=\"label label-red\" title=\"Financement pas accordé\"><i class=\"fa fa-times\"></i></span>
\t\t\t\t\t\t\t";
                } else {
                    // line 466
                    echo "\t\t\t\t\t\t\t\t<span class=\"label label-green\" title=\"Financement Accordé\"><i class=\"fa fa-check\"></i></span>
\t\t\t\t\t\t\t";
                }
                // line 468
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"insc info\"><span>";
                // line 469
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "civilite", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t<td class=\"insc info nom-stagiaire\"><span>";
                // line 470
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "nom", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t<td class=\"insc info prenom-stagiaire\"><span>";
                // line 471
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "prenom", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t<td class=\"insc finance\"><span>";
                // line 472
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array()), "nomStructure", array())) : ("")), "html", null, true);
                echo "</span></td>

\t\t\t\t\t\t";
                // line 474
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["entity"], "signataire", array())) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "signataire", array()), "adresse", array())))) {
                    // line 475
                    echo "\t\t\t\t\t\t\t<td class=\"insc finance\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "signataire", array()), "adresse", array()), "nomStructure", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td class=\"insc finance\">";
                    // line 476
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "signataire", array()), "adresse", array()), "adresse", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td class=\"insc finance\">";
                    // line 477
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "signataire", array()), "adresse", array()), "cP", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td class=\"insc finance\">";
                    // line 478
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "signataire", array()), "adresse", array()), "ville", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td class=\"insc finance\">";
                    // line 479
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "signataire", array()), "adresse", array()), "type", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td class=\"insc finance\">";
                    // line 480
                    echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "signataire", array()), "adresse", array()), "tags", array()), ", "), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t";
                } else {
                    // line 482
                    echo "\t\t\t\t\t\t\t<td colspan=\"6\"></td>
\t\t\t\t\t\t";
                }
                // line 484
                echo "

            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 488
            echo "        </tbody>
\t</table>
</div>
</div>

";
            // line 494
            echo "<div id=\"attentes\" class=\"tab unit-100\">
<div class=\"table-container\">
\t<table class=\"\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"handle\"></th>
\t\t\t\t<th class=\"insc info\"><span>Nom</span></th>
\t\t\t\t<th class=\"insc info\"><span>Prénom</span></th>
\t\t\t\t<th class=\"insc attentes\"><span>Structure</span></th>
\t\t\t\t<th class=\"insc attentes\"><span>Fonction</span></th>
\t\t\t\t<th class=\"insc attentes\"><span>CP</span></th>
\t\t\t\t<th class=\"insc attentes\"><span>Ville</span></th>
\t\t\t\t<th class=\"insc attentes\"><span>Mail</span></th>
\t\t\t\t<th class=\"insc attentes attente-text\" style=\"width:550px !important; white-space:normal !important\">Attentes</th>
\t\t\t\t<th class=\"insc attentes\"><span>Tags</span></th>
\t\t\t\t<th class=\"insc attentes\"><span>Provenance</span></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
        ";
            // line 513
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new Twig_Error_Runtime('Variable "entities" does not exist.', 513, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 514
                echo "\t\t\t";
                $context["class"] = "";
                // line 515
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "en attente")) {
                    // line 516
                    echo "\t\t\t\t";
                    $context["class"] = "attente";
                    // line 517
                    echo "\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "accepté")) {
                    // line 518
                    echo "\t\t\t\t";
                    $context["class"] = "valide";
                    // line 519
                    echo "\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["entity"], "statut", array()) == "annulé")) {
                    // line 520
                    echo "\t\t\t\t";
                    $context["class"] = "annule";
                    // line 521
                    echo "\t\t\t";
                }
                // line 522
                echo "\t\t\t<tr class=\"statut ";
                echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 522, $this->source); })()), "html", null, true);
                echo "\" data-ordre=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "ordre", array()), "html", null, true);
                echo "\" data-idinscription=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t";
                // line 523
                if (((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 523, $this->source); })()) == "attente")) {
                    echo "<td class=\"handle\"><span class=\"fa fa-arrows\"></span></td>";
                } else {
                    echo "<td></td>";
                }
                // line 524
                echo "\t\t\t\t<td class=\"insc info nom-stagiaire\"><span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "nom", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t<td class=\"insc info prenom-stagiaire\"><span>";
                // line 525
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "prenom", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t<td class=\"insc attentes\"><span>";
                // line 526
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array()), "nomStructure", array())) : ("")), "html", null, true);
                echo "</span></td>
\t\t\t\t<td class=\"insc attentes\"><span>";
                // line 527
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "fonction", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t<td class=\"insc attentes\"><span>";
                // line 528
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array()), "cP", array())) : ("")), "html", null, true);
                echo "</span></td>
\t\t\t\t<td class=\"insc attentes\"><span>";
                // line 529
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array()), "ville", array())) : ("")), "html", null, true);
                echo "</span></td>
\t\t\t\t<td class=\"insc attentes\"><a href=\"mailto:";
                // line 530
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "mail", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "mail", array()), "html", null, true);
                echo "</a></td>
\t\t\t\t<td class=\"insc attentes attente-text\" style=\"width:550px !important; white-space:normal !important\">";
                // line 531
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "attentes", array()), "html", null, true);
                echo "</td>
\t\t\t\t<td class=\"insc attentes\"><span>";
                // line 532
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array())) ? (twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "stagiaire", array()), "adresse", array()), "tags", array()), ", ")) : ("")), "html", null, true);
                echo "</span></td>
\t\t\t\t<td class=\"insc attentes\"><span>";
                // line 533
                echo ((twig_get_attribute($this->env, $this->source, $context["entity"], "provenancePCST", array())) ? ("<i class='fa fa-flask'>PCST</i>") : (""));
                echo "</span></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 536
            echo "        </tbody>
\t</table>
</div>
</div>

";
            // line 542
            echo "<div id=\"intervenants\" class=\"tab unit-100\">

\t<div class=\"table-container\">
\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t<th>Structure</th>
\t\t\t\t\t<th>Fonction</th>
\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t<th>CP</th>
\t\t\t\t\t<th>Ville</th>
\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t<th>Email</th>
\t\t\t\t\t<th>Tags</th>
\t\t\t\t\t<th>Commentaire</th>
\t\t\t\t\t<th></td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 563
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 563, $this->source); })()), "intervenants", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["intervenant"]) {
                // line 564
                echo "\t\t\t\t\t<tr class=\"";
                echo (((array_key_exists("id", $context) && ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 564, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["intervenant"], "id", array())))) ? (" highlight") : (""));
                echo "\">
\t\t\t\t\t\t<td>";
                // line 565
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 566
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "prenom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 567
                echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["intervenant"], "adresse", array()))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["intervenant"], "adresse", array()), "nomStructure", array())) : ("")), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 568
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "fonction", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 569
                echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["intervenant"], "adresse", array()))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["intervenant"], "adresse", array()), "adresse", array())) : ("")), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 570
                echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["intervenant"], "adresse", array()))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["intervenant"], "adresse", array()), "cP", array())) : ("")), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 571
                echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["intervenant"], "adresse", array()))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["intervenant"], "adresse", array()), "ville", array())) : ("")), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 572
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "tel", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td><a href=\"mailto:";
                // line 573
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "mail", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "mail", array()), "html", null, true);
                echo "</a></td>
\t\t\t\t\t\t<td>";
                // line 574
                echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["intervenant"], "adresse", array()))) ? (twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["intervenant"], "adresse", array()), "tags", array()), ", ")) : ("")), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 575
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "commentaire", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
                // line 577
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervenants_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["intervenant"], "id", array()), "idevenement" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 577, $this->source); })()), "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervenant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 581
            echo "\t\t\t</tbody>
\t\t</table>
\t</div>
</div>

</div>

";
        } else {
            // line 589
            echo "\t<p class=\"text-centered lead\"><i class=\"fa fa-info\"></i> Aucune inscription pour le moment...</p>
\t<div class=\"units-row text-centered\">
\t\t<a href=\"";
            // line 591
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_new", array("idevenement" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 591, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-green btn-big\"><i class=\"fa fa-plus\"></i> Nouvelle inscription</a>
\t\t<a href=\"";
            // line 592
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervenants_new", array("idevenement" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 592, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class='btn btn-big'><span class=\"fa fa-plus\"></span> Ajouter un intervenant</a>
\t</div>

\t";
            // line 595
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 595, $this->source); })()), "intervenants", array())) > 0)) {
                // line 596
                echo "
\t\t<div class=\"table-container panel\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Civilité</th>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t\t<th>Fonction</th>
\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Structure</th>
\t\t\t\t\t\t<th>Commentaire</th>
\t\t\t\t\t\t<th></td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
                // line 613
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 613, $this->source); })()), "intervenants", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["intervenant"]) {
                    // line 614
                    echo "\t\t\t\t\t\t<tr class=\"";
                    echo (((array_key_exists("id", $context) && ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 614, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["intervenant"], "id", array())))) ? (" highlight") : (""));
                    echo "\">
\t\t\t\t\t\t\t<td>";
                    // line 615
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "civilite", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 616
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "nom", array())), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 617
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "prenom", array())), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 618
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "fonction", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 619
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "tel", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td><a href=\"mailto:";
                    // line 620
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "mail", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "mail", array()), "html", null, true);
                    echo "</a></td>
\t\t\t\t\t\t\t<td>";
                    // line 621
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["intervenant"], "adresse", array()), "nomStructure", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 622
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervenant"], "commentaire", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 624
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervenants_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["intervenant"], "id", array()), "idevenement" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 624, $this->source); })()), "id", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervenant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 628
                echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t";
            }
            // line 632
            echo "
";
        }
        // line 634
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OCIMEvenementsBundle:Inscription:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1680 => 634,  1676 => 632,  1670 => 628,  1660 => 624,  1655 => 622,  1651 => 621,  1645 => 620,  1641 => 619,  1637 => 618,  1633 => 617,  1629 => 616,  1625 => 615,  1620 => 614,  1616 => 613,  1597 => 596,  1595 => 595,  1589 => 592,  1585 => 591,  1581 => 589,  1571 => 581,  1561 => 577,  1556 => 575,  1552 => 574,  1546 => 573,  1542 => 572,  1538 => 571,  1534 => 570,  1530 => 569,  1526 => 568,  1522 => 567,  1518 => 566,  1514 => 565,  1509 => 564,  1505 => 563,  1482 => 542,  1475 => 536,  1466 => 533,  1462 => 532,  1458 => 531,  1452 => 530,  1448 => 529,  1444 => 528,  1440 => 527,  1436 => 526,  1432 => 525,  1427 => 524,  1421 => 523,  1412 => 522,  1409 => 521,  1406 => 520,  1403 => 519,  1400 => 518,  1397 => 517,  1394 => 516,  1391 => 515,  1388 => 514,  1384 => 513,  1363 => 494,  1356 => 488,  1347 => 484,  1343 => 482,  1338 => 480,  1334 => 479,  1330 => 478,  1326 => 477,  1322 => 476,  1317 => 475,  1315 => 474,  1310 => 472,  1306 => 471,  1302 => 470,  1298 => 469,  1295 => 468,  1291 => 466,  1287 => 464,  1285 => 463,  1282 => 462,  1280 => 461,  1277 => 460,  1271 => 459,  1262 => 458,  1259 => 457,  1256 => 456,  1253 => 455,  1250 => 454,  1247 => 453,  1244 => 452,  1241 => 451,  1238 => 450,  1234 => 449,  1212 => 429,  1205 => 423,  1198 => 421,  1186 => 418,  1183 => 417,  1173 => 414,  1165 => 413,  1157 => 412,  1149 => 411,  1145 => 410,  1140 => 409,  1138 => 408,  1134 => 407,  1130 => 406,  1125 => 405,  1119 => 404,  1110 => 403,  1107 => 402,  1104 => 401,  1101 => 400,  1098 => 399,  1095 => 398,  1092 => 397,  1089 => 396,  1086 => 395,  1082 => 394,  1062 => 376,  1057 => 372,  1051 => 369,  1045 => 365,  1039 => 361,  1033 => 360,  1029 => 358,  1021 => 356,  1018 => 355,  1014 => 354,  1008 => 350,  1001 => 348,  995 => 347,  991 => 345,  987 => 343,  984 => 342,  978 => 340,  975 => 339,  971 => 337,  969 => 336,  966 => 335,  963 => 334,  960 => 333,  958 => 332,  943 => 331,  940 => 330,  936 => 329,  932 => 328,  928 => 327,  923 => 326,  918 => 325,  915 => 323,  909 => 322,  905 => 320,  899 => 319,  895 => 317,  893 => 316,  890 => 315,  886 => 313,  882 => 311,  879 => 310,  873 => 308,  870 => 307,  866 => 305,  864 => 304,  861 => 303,  858 => 302,  855 => 301,  853 => 300,  838 => 299,  835 => 298,  832 => 297,  828 => 296,  823 => 294,  819 => 293,  808 => 292,  806 => 291,  803 => 290,  800 => 289,  797 => 288,  794 => 287,  791 => 286,  788 => 285,  785 => 284,  782 => 283,  779 => 282,  775 => 281,  770 => 278,  757 => 276,  753 => 275,  745 => 269,  743 => 268,  737 => 266,  730 => 260,  719 => 257,  715 => 256,  711 => 255,  707 => 254,  703 => 253,  699 => 252,  695 => 251,  691 => 250,  687 => 249,  682 => 248,  676 => 247,  666 => 245,  663 => 244,  660 => 243,  657 => 242,  654 => 241,  651 => 240,  648 => 239,  645 => 238,  642 => 237,  638 => 236,  617 => 217,  610 => 211,  594 => 208,  579 => 202,  568 => 201,  564 => 200,  557 => 196,  552 => 194,  548 => 193,  543 => 192,  541 => 191,  537 => 190,  530 => 186,  522 => 183,  519 => 182,  515 => 180,  511 => 178,  509 => 177,  506 => 176,  504 => 175,  493 => 173,  487 => 172,  481 => 171,  477 => 170,  473 => 169,  469 => 168,  465 => 167,  461 => 166,  453 => 165,  449 => 164,  445 => 163,  441 => 162,  436 => 161,  430 => 160,  420 => 159,  417 => 158,  414 => 157,  411 => 156,  408 => 155,  405 => 154,  402 => 153,  399 => 152,  396 => 151,  379 => 150,  352 => 125,  314 => 88,  301 => 85,  296 => 84,  292 => 83,  269 => 62,  267 => 60,  262 => 58,  258 => 57,  254 => 56,  250 => 55,  246 => 54,  242 => 52,  236 => 51,  225 => 45,  221 => 44,  217 => 43,  210 => 39,  206 => 37,  200 => 36,  188 => 35,  175 => 34,  164 => 29,  158 => 28,  97 => 24,  93 => 15,  89 => 14,  83 => 13,  58 => 9,  54 => 5,  50 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::app.html.twig' %}

{% block stylesheets %}
{{ parent() }}
\t{% stylesheets
\t\t'%kernel.root_dir%/Resources/public/css/popup.css'
\t\t'@OCIMEvenementsBundle/Resources/public/css/inscriptions.css'
\tfilter='cssrewrite' %}
\t\t<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"{{ asset_url }}\"/>
\t{% endstylesheets %}
{% endblock %}

{% block  javascripts %}
{{parent()}}
{% javascripts
\t'%kernel.root_dir%/Resources/public/js/jquery-ui.min.js'
\t'%kernel.root_dir%/Resources/public/js/jquery.stickytableheaders.js'
\t'@OCIMEvenementsBundle/Resources/public/js/Inscription/inscription.js'
\t'@OCIMEvenementsBundle/Resources/public/js/Inscription/showDetailsInscriptions.js'
\t'@OCIMEvenementsBundle/Resources/public/js/Inscription/reponseschampPerso.js'
\t'%kernel.root_dir%/Resources/public/js/popup.js'
\t'@OCIMEvenementsBundle/Resources/public/js/Inscription/maj-statuts.js'
\t'@OCIMEvenementsBundle/Resources/public/js/Inscription/proposition-export.js' %}
    \t<script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
{% endjavascripts %}
{% endblock %}

{% block breadcrumbs %}
<li><a href=\"{{path('evenement')}}\">Evenements</a></li>
<li><span>Inscriptions</span></li>
{% endblock %}


{% block title %}Inscriptions : {{ evenement.intitule }}{% endblock %}
{% block titre %}{{ evenement.intitule }}{% endblock %}
{% block controls %}
<div>
<div>
<a href=\"{{ path('inscription_new', { 'idevenement': evenement.id }) }}\" class=\"btn btn-green\"><i class=\"fa fa-plus fa-fw\"></i> Nouvelle inscription</a>
<a class=\"btn btn-green list\" href=\"#\"></a>
</div>
<ul class=\"hide\">
<li><a href=\"{{path('intervenants_new', { 'idevenement': evenement.id }) }}\"><i class=\"fa fa-plus fa-fw\"></i>Créer un intervenant</a></li>
<li><a href=\"{{path('evenement_addintervenants', {'idevenement': evenement.id })}}\"><i class=\"fa fa-user fa-fw\"></i>Relier un intervenant existant</a></li>
<li><a href=\"{{path('champPerso_edit', {'idevenement': evenement.id })}}\"><i class=\"fa fa-table fa-fw\"></i>Editer les champs personnalisés</a></li>
</ul>
</div>
{% endblock %}


{% block body -%}
<div id=\"message-error\" class=\"tools-message tools-message-red disabledonload\">ATTENTION : Erreur lors de l'enregistrement ! Veuillez recharger la page.</div>
<div id=\"message-save\" class=\"tools-message tools-message-green disabledonload\">Enregistrement OK</div>
<div id=\"lienAjax\" class=\"hide\">{{ path('inscription_edit_ordre', {'idevenement': evenement.id}) }}</div>
<div id=\"updateconvention\" class=\"hide\">{{ path('inscription_update_statut_convention', {'idevenement': evenement.id}) }}</div>
<div id=\"updateinscription\" class=\"hide\">{{ path('inscription_update_statut_inscription', {'idevenement': evenement.id}) }}</div>
<div id=\"updatefinancement\" class=\"hide\">{{ path('inscription_update_statut_financement', {'idevenement': evenement.id}) }}</div>
<div id=\"liensExport\" class=\"hide\">{{ path('documents_liens') }}</div>

{% if entities != null %}
{# indicateurs #}
<ul id=\"comptes\" class=\"blocks-5 padding\">
\t\t<li class=\"statuts\">
\t\t<p>Inscriptions</p>
\t\t\t<div class=\"units-row units-split end\">
\t\t\t\t<div class=\"unit-33 valide\"><p></p><p style=\"display:none\" class=\"aide\">Validés</p></div>
\t\t\t\t<div class=\"unit-33 attente\"><p></p><p style=\"display:none\" class=\"aide\">En attente</p></div>
\t\t\t\t<div class=\"unit-33 annule\"><p></p><p style=\"display:none\" class=\"aide\">Annulés</p></div>
\t\t\t</div>
\t\t</li>
\t\t<li class=\"financement\">
\t\t\t<p>Financement</p>
\t\t\t<div class=\"units-row units-split end\">
\t\t\t\t<div class=\"unit-33 valide\"><p></p><p style=\"display:none\" class=\"aide\">Acceptés</p></div>
\t\t\t\t<div class=\"unit-33 attente\"><p></p><p style=\"display:none\" class=\"aide\">En attente</p></div>
\t\t\t\t<div class=\"unit-33 annule\"><p></p><p style=\"display:none\" class=\"aide\">Pas de financement</p></div>
\t\t\t</div>
\t\t\t<p class=\"info\">Totaux sur les inscriptions <span style=\"color:rgba(3, 207, 3,  0.8)\">validées</span></p>
\t\t</li>
\t\t<li class=\"formule\">
\t\t\t<p>Formules</p>
\t\t\t<div class=\"units-row units-split end\">
\t\t\t\t{% for formule in evenement.formules %}
\t\t\t\t\t<div class=\"unit-{{ (100/evenement.formules.count)|round(0, 'floor') }}\">
\t\t\t\t\t\t<p data-idformule=\"{{formule.id}}\">{{ (formule.nuit)? \"<i class='fa fa-moon-o'></i>\" }}{{formule.tarif}}{{ (formule.tarif|number_format)? \"€\" }}</p>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<p class=\"info\">Totaux sur les inscriptions <span style=\"color:rgba(3, 207, 3,  0.8)\">validées</span></p>
\t\t</li>
\t\t<li  class=\"conventions\">
\t\t\t<p>Conventions</p>
\t\t\t<div class=\"units-row units-split end\">
\t\t\t\t<div class=\"unit-33 valide\"><p></p><p style=\"display:none\" class=\"aide\">Demandées</p></div>
\t\t\t\t<div class=\"unit-33 attente\"><p></p><p style=\"display:none\" class=\"aide\">Ne sais pas</p></div>
\t\t\t\t<div class=\"unit-33 annule\"><p></p><p style=\"display:none\" class=\"aide\">Pas de convention</p></div>
\t\t\t</div>
\t\t\t<p class=\"info\">Totaux sur les inscriptions <span style=\"color:rgba(3, 207, 3,  0.8)\">validées</span></p>
\t\t</li>
\t\t<li class=\"totaux\">
\t\t\t<p>Divers</p>
\t\t\t<div class=\"units-row units-split end\">
\t\t\t\t<div class=\"unit-33 users\"><p><i class=\"fa fa-user fa-fw\"></i><span></span></p><p style=\"display:none\" class=\"aide\">Stagiaires</p></div>
\t\t\t\t<div class=\"unit-33 pcst\"><p><i class=\"fa fa-flask fa-fw\"></i><span></span></p><p style=\"display:none\" class=\"aide\">PCST</p></div>
\t\t\t\t<div class=\"unit-33 intervs\"><p><i class=\"fa fa-briefcase fa-fw\"></i><span></span></p><p style=\"display:none\" class=\"aide\">Intervenants</p></div>
\t\t\t</div>
\t\t</li>
</ul>

<div class=\"panel\">
\t<nav class=\"nav-tabs\" data-tools=\"tabs\" data-equals=\"true\" style=\"padding-left: 25px;\">
\t\t<ul>
\t\t\t<li class=\"active\"><a href=\"#general\">informations Générales</a></li>
\t\t\t<li><a href=\"#contact\">Contacts</a></li>
\t\t\t<li><a href=\"#champPerso\">Logistique</a></li>
\t\t\t<li><a href=\"#convention\">Convention</a></li>
\t\t\t<li><a href=\"#financement\">Financement</a></li>
\t\t\t<li><a href=\"#attentes\">Attentes</a></li>
\t\t\t<li><a href=\"#intervenants\">Intervenants</a></li>
\t\t</ul>
\t</nav>
<div class=\"panel-body units-row units-split\">

{# GENERAL #}
<div id=\"general\" class=\"tab unit-100\">
<div class=\"table-container\">
\t<table class=\"\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"handle\"></th>
\t\t\t\t<th class=\"insc info\"><span>Provenance</span></th>
\t\t\t\t<th class=\"insc info\"><span>Civilité</span></th>
\t\t\t\t<th class=\"insc info\"><span>Nom</span></th>
\t\t\t\t<th class=\"insc info\"><span>Prénom</span></th>
\t\t\t\t<th class=\"insc info\"><span>Structure</span></th>
\t\t\t\t<th class=\"insc info\"><span>Fonction</span></th>
\t\t\t\t<th class=\"insc info\"><span>Adresse</span></th>
\t\t\t\t<th class=\"insc info\"><span>CP</span></th>
\t\t\t\t<th class=\"insc info\"><span>Ville</span></th>
\t\t\t\t<th class=\"insc info\"><span>Téléphone</span></th>
\t\t\t\t<th class=\"insc info\"><span>Mail Stagiaire</span></th>
\t\t\t\t<th class=\"insc info\"><span>Mail Admin</span></th>
\t\t\t\t<th class=\"insc info\"><span>Formule</span></th>
\t\t\t\t<th class=\"insc info text-centered\"><span>Convention</span></th>
\t\t\t\t<th class=\"insc info\"><span>Inscription</span></th>
\t\t\t\t<th class=\"insc info\"><span>Tags</span></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
        {% for entity in entities %}
\t\t\t{% set class = \"\" %}
\t\t\t{% if entity.statut == 'en attente' %}
\t\t\t\t{% set class = \"attente\" %}
\t\t\t{% elseif entity.statut == 'accepté' %}
\t\t\t\t{% set class = \"valide\" %}
\t\t\t{% elseif entity.statut == 'annulé' %}
\t\t\t\t{% set class = \"annule\" %}
\t\t\t{% endif %}
\t\t\t<tr class=\"statut {{class}}{{((id is defined)and( id == entity.id ))? \" highlight\"}}\" data-ordre=\"{{entity.ordre}}\" data-idinscription=\"{{entity.id}}\">
\t\t\t\t\t\t{% if class == \"attente\" %}<td class=\"handle\"><i class=\"fa fa-arrows\"></i></td>{% else %}<td></td>{% endif %}
\t\t\t\t\t\t<td class=\"insc info\"><span>{{ (entity.provenancePCST)? \"<i class='fa fa-flask'>PCST</i>\" }}</span></td>
\t\t\t\t\t\t<td class=\"insc info civilite-stagiaire\"><span>{{ entity.stagiaire.civilite }}</span></td>
\t\t\t\t\t\t<td class=\"insc info nom-stagiaire\"><span>{{ entity.stagiaire.nom }}</span></td>
\t\t\t\t\t\t<td class=\"insc info prenom-stagiaire\"><span>{{ entity.stagiaire.prenom }}</span></td>
\t\t\t\t\t\t<td class=\"insc\">{% if entity.stagiaire.adresse %}<span>{{ entity.stagiaire.adresse.nomStructure }}</span>{% endif %}</td>
\t\t\t\t\t\t<td class=\"\"><span>{{ entity.stagiaire.fonction }}</span></td>
\t\t\t\t\t\t<td> {{ (entity.stagiaire.adresse)? entity.stagiaire.adresse.adresse }}</td>
\t\t\t\t\t\t<td> {{ (entity.stagiaire.adresse)? entity.stagiaire.adresse.cP }}</td>
\t\t\t\t\t\t<td> {{ (entity.stagiaire.adresse)? entity.stagiaire.adresse.ville }}</td>
\t\t\t\t\t\t<td> {{ entity.stagiaire.tel }}</td>
\t\t\t\t\t\t<td> <a href=\"mailto:{{ entity.stagiaire.mail }}\">{{ entity.stagiaire.mail }}</a></td>
\t\t\t\t\t\t<td> <a href=\"mailto:{{ (entity.admin)? entity.admin.mail }}\">{{ (entity.admin)? entity.admin.mail }}</a></td>
\t\t\t\t\t\t<td class=\"inscformule\" data-idformule=\"{{ entity.evenementFormule.formule.id }}\"><span><abbr title=\"{{ entity.evenementFormule.formule }}\">{{ entity.evenementFormule.formule.tarif }} {{ (entity.evenementFormule.formule.nuit)? \"<i class='fa fa-moon-o'></i>\" }}</abbr></span></td>
\t\t\t\t\t\t<td class=\"text-centered tdfinancement\">
\t\t\t\t\t\t\t{% if entity.statutConvention is null %}
\t\t\t\t\t\t\t<span class=\"label label-yellow\" title=\"Ne sais pas\"><i class=\"fa fa-question\"></i></span>
\t\t\t\t\t\t\t{% elseif entity.statutConvention == false %}
\t\t\t\t\t\t\t<span class=\"label label-red\" title=\"Non\"><i class=\"fa fa-times\"></i></span>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<span class=\"label label-green\" title=\"Demande de convention confirmée\"><i class=\"fa fa-check\"></i></span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class='dateinscription'><span>{% if entity.dateInscription %}{{ entity.dateInscription|date('d/m/Y') }}{% endif %}</span></td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t{{ (entity.stagiaire.adresse)? entity.stagiaire.adresse.tags|join(', ')}}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</td>
            <td class=\"insc actions\">
\t\t\t\t\t\t\t<a href=\"#\" data-tools=\"dropdown\" data-target=\"#dropdown1-{{loop.index}}\"></a>
\t\t\t\t\t\t\t{% spaceless %}
\t\t\t\t\t\t\t<ul id=\"dropdown1-{{loop.index}}\" class=\"dropdown\">
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('inscription_show', { 'id': entity.id, 'idevenement':evenement.id }) }}\" class=\"inscription-href\"><i class=\"fa fa-info fa-fw\"></i>Détails</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('inscription_edit', { 'id': entity.id, 'idevenement':evenement.id }) }}\" class=\"inscription-href\"><i class=\"fa fa-pencil fa-fw\"></i>Modifier</a></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"export\" data-idinscription=\"{{ entity.id }}\"><i class=\"fa fa-download fa-fw\"></i>Exporter</a></li>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"majstatuts\"
\t\t\t\t\t\t\t\t\t\tdata-statut='{{ entity.numberStatut }}'
\t\t\t\t\t\t\t\t\t\tdata-statutconvention=\"{% if (entity.statutConvention == false)and(entity.statutConvention is not null) %}0{% elseif entity.statutConvention == true %}1{% elseif entity.statutConvention is null %}{% endif %}\" data-idinscription=\"{{ entity.id }}\"
\t\t\t\t\t\t\t\t\t\tdata-statutfinancement=\"{% if entity.statutFinancement is null %}null{% elseif entity.statutFinancement == false %}0{% else %}1{% endif %}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh fa-fw\"></i>Statuts
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t{% endspaceless %}
\t\t\t\t\t\t</td>
            </tr>
        {% endfor %}
        </tbody>
\t</table>
</div>
</div>

{# CONTACT #}
<div id=\"contact\" class=\"tab unit-100\">
<div class=\"table-container\">
\t<table class=\"\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"handle\"></th>
\t\t\t\t<th class=\"insc info\"><span>Civilité</span></th>
\t\t\t\t<th class=\"insc info\"><span>Nom</span></th>
\t\t\t\t<th class=\"insc info\"><span>Prénom</span></th>
\t\t\t\t<th class=\"insc contact\"><span>Structure</span></th>
\t\t\t\t<th class=\"insc contact\"><span>Fonction</span></th>
\t\t\t\t<th class=\"insc contact\"><span>Adresse</span></th>
\t\t\t\t<th class=\"insc contact\"><span>CP</span></th>
\t\t\t\t<th class=\"insc contact\"><span>Ville</span></th>
\t\t\t\t<th class=\"insc contact\"><span>Téléphone</span></th>
\t\t\t\t<th class=\"insc contact\"><span>Mail Stagiaire</span></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
        {% for entity in entities %}
\t\t\t{% set class = \"\" %}
\t\t\t{% if entity.statut == 'en attente' %}
\t\t\t\t{% set class = \"attente\" %}
\t\t\t{% elseif entity.statut == 'accepté' %}
\t\t\t\t{% set class = \"valide\" %}
\t\t\t{% elseif entity.statut == 'annulé' %}
\t\t\t\t{% set class = \"annule\" %}
\t\t\t{% endif %}
\t\t\t<tr class=\"statut {{class}}\" data-ordre=\"{{entity.ordre}}\" data-idinscription=\"{{entity.id}}\">

\t\t\t\t\t\t{% if class == \"attente\" %}<td class=\"handle\"><i class=\"fa fa-arrows\"></i></td>{% else %}<td></td>{% endif %}
\t\t\t\t\t\t<td class=\"insc info\"><span>{{ entity.stagiaire.civilite }}</span></td>
\t\t\t\t\t\t<td class=\"insc info nom-stagiaire\"><span>{{ entity.stagiaire.nom }}</span></td>
\t\t\t\t\t\t<td class=\"insc info prenom-stagiaire\"><span>{{ entity.stagiaire.prenom }}</span></td>
\t\t\t\t\t\t<td class=\"insc contact\"><span>{{ (entity.stagiaire.adresse)? entity.stagiaire.adresse.nomStructure }}</span></td>
\t\t\t\t\t\t<td class=\"insc contact\"><span>{{ entity.stagiaire.fonction }}</span></td>
\t\t\t\t\t\t<td class=\"insc contact\"><span>{{ (entity.stagiaire.adresse)? entity.stagiaire.adresse.adresse }}</span></td>
\t\t\t\t\t\t<td class=\"insc contact\"><span>{{ (entity.stagiaire.adresse)? entity.stagiaire.adresse.CP }}</span></td>
\t\t\t\t\t\t<td class=\"insc contact\"><span>{{ (entity.stagiaire.adresse)? entity.stagiaire.adresse.ville }}</span></td>
\t\t\t\t\t\t<td class=\"insc contact\">{{ entity.stagiaire.tel }}</td>
\t\t\t\t\t\t<td class=\"insc contact\"><a href=\"mailto:{{ entity.stagiaire.mail}}\">{{ entity.stagiaire.mail}}</a></td>
      </tr>
        {% endfor %}
    </tbody>
\t</table>
</div>
</div>

{# ChampPerso #}
\t<div class=\"hide\" id=\"majChampPerso\">{{path('champPerso_reponse')}}</div>
<div id=\"champPerso\" class=\"tab unit-100\">
{% if champPerso|length > 0 %}
<div class=\"table-container\">
\t<table class=\"table-bordered\">
\t\t<thead>
\t\t\t<tr style=\"background-color: white; \">
\t\t\t\t<th class=\"insc info\"><span>Nom</span></th>
\t\t\t\t<th class=\"insc info\"><span>Prénom</span></th>
\t\t\t\t{% for log in champPerso %}
\t\t\t\t\t<th class=\"{{(\"Nuit\" in log.description)or(\"nuit\" in log.description)? \"nuit\"}}\">{{(log.date is not null)? log.date|date('d/m')}} {{log.description}}</th>
\t\t\t\t{% endfor %}
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
        {% for entity in entities %}
\t\t\t{% set class = \"\" %}
\t\t\t{% if entity.statut == 'en attente' %}
\t\t\t\t{% set class = \"attente\" %}
\t\t\t{% elseif entity.statut == 'accepté' %}
\t\t\t\t{% set class = \"valide\" %}
\t\t\t{% elseif entity.statut == 'annulé' %}
\t\t\t\t{% set class = \"annule\" %}
\t\t\t{% endif %}

\t\t\t{% if entity.statut == 'accepté' %}
\t\t\t<tr class=\"statut {{class}}\" data-ordre=\"{{entity.ordre}}\" data-idinscription=\"{{entity.id}}\" data-idpersonne=\"{{entity.stagiaire.id}}\">
\t\t\t\t\t\t<td class=\"insc info\"><span>{{ entity.stagiaire.nom }}</span></td>
\t\t\t\t\t\t<td class=\"insc info\"><span>{{ entity.stagiaire.prenom }}</span></td>

\t\t\t\t\t{% for log in champPerso %}
\t\t\t\t\t\t{% if log.evenementformule|length > 0 %}
\t\t\t\t\t\t\t{% if entity.evenementFormule in log.evenementFormule %}
\t\t\t\t\t\t\t\t<td class=\"champPerso {{(\"Nuit\" in log.description)or(\"nuit\" in log.description)? \"nuit\"}}\" data-type=\"{{log.typeReponse}}\" data-idreponse=\"{{ (attribute(entity.stagiaire, 'getReponseByModeleId', [log.id]))? attribute(entity.stagiaire, 'getReponseByModeleId', [log.id]).id }}\" data-date=\"{{log.date|date('')}}\" data-idmodele=\"{{log.id}}\" data-reponse=\"{{attribute(entity.stagiaire, 'getReponseByModeleId', [log.id, log.typeReponse]) }}\">
\t\t\t\t\t\t\t\t\t{% if attribute(entity.stagiaire, 'getReponseByModeleId', [log.id]) %}
\t\t\t\t\t\t\t\t\t\t{% if log.typeReponse == 'bool' %}
\t\t\t\t\t\t\t\t\t\t\t{% if (attribute(entity.stagiaire, 'getReponseByModeleId', [log.id, log.typeReponse]) == '1') %}
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"champPerso ok\">1</span>
\t\t\t\t\t\t\t\t\t\t\t{% elseif (attribute(entity.stagiaire, 'getReponseByModeleId', [log.id, log.typeReponse]) == '0') %}
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"champPerso zero\">0</span>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% elseif log.typeReponse == 'text' %}
\t\t\t\t\t\t\t\t\t\t\t{{ (attribute(entity.stagiaire, 'getReponseByModeleId', [log.id, log.typeReponse]))}}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<td data-reponse=\"0\" class=\"undefined\"></td>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{# modele uniquement intervenant #}
\t\t\t\t\t\t\t<td data-reponse=\"0\" class=\"undefined\"></td>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
            </tr>
\t\t\t{% endif %}
        {% endfor %}

\t\t{# ChampPerso des intervenants #}
\t\t{% for intervenant in evenement.intervenants %}
\t\t\t<tr data-idpersonne=\"{{intervenant.id}}\">
\t\t\t\t<td class=\"insc info\">{{intervenant.nom}}</td>
\t\t\t\t<td class=\"insc info\">{{intervenant.prenom}}</td>
\t\t\t\t{% for log in champPerso %}
\t\t\t\t\t{% if log.evenement %}
\t\t\t\t\t\t<td class=\"champPerso {{(\"Nuit\" in log.description)or(\"nuit\" in log.description)? \"nuit\"}}\" data-type=\"{{log.typeReponse}}\" data-idreponse=\"{{ (attribute(intervenant, 'getReponseByModeleId', [log.id]))? attribute(intervenant, 'getReponseByModeleId', [log.id]).id }}\" data-date=\"{{log.date|date('')}}\" data-idmodele=\"{{log.id}}\" data-reponse=\"{{attribute(intervenant, 'getReponseByModeleId', [log.id, log.typeReponse]) }}\">
\t\t\t\t\t\t\t{% if attribute(intervenant, 'getReponseByModeleId', [log.id]) %}
\t\t\t\t\t\t\t\t{% if log.typeReponse == 'bool' %}
\t\t\t\t\t\t\t\t\t{% if (attribute(intervenant, 'getReponseByModeleId', [log.id, log.typeReponse]) == '1') %}
\t\t\t\t\t\t\t\t\t\t<span class=\"champPerso ok\">1</span>
\t\t\t\t\t\t\t\t\t{% elseif (attribute(intervenant, 'getReponseByModeleId', [log.id, log.typeReponse]) == '0') %}
\t\t\t\t\t\t\t\t\t\t<span class=\"champPerso zero\">0</span>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% elseif log.typeReponse == 'text' %}
\t\t\t\t\t\t\t\t\t{{ (attribute(intervenant, 'getReponseByModeleId', [log.id, log.typeReponse]))}}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<td data-reponse=\"0\" class=\"undefined\"></td>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</tr>
\t\t{% endfor %}

        </tbody>
\t\t<tfoot>
\t\t\t<td colspan=\"2\">Totaux</td>
\t\t\t{% for log in champPerso %}
\t\t\t\t\t{% if log.typeReponse == 'bool' %}
\t\t\t\t\t\t<td class=\"{{(\"Nuit\" in log.description)or(\"nuit\" in log.description)? \"nuit\"}}\" data-typereponse=\"{{log.typeReponse}}\"></td>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<td style=\"background-color: rgba(125,125,125, 0.2)\"></td>
\t\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t</tfoot>
\t</table>
</div>
{% else %}
\t<p class=\"lead text-centered\">
\t\tLa champPerso pour cette evenement n&apos;a pas été configurée.
\t</p>
\t<p class=\"text-centered\">
\t\t<a class=\"btn btn-big\" href=\"{{ path('champPerso_edit', {'idevenement': evenement.id, 'generation': 'generate'}) }}\"><i class=\"fa fa-table fa-fw\"></i> Générer maintenant</a>
\t</p>
{% endif %}

</div>

{# CONVENTION #}
<div id=\"convention\" class=\"tab unit-100\">
<div class=\"table-container\">
\t<table class=\"\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"handle\"></th>
\t\t\t\t<th class=\"insc info\"><span>Civilité</span></th>
\t\t\t\t<th class=\"insc info\"><span>Nom</span></th>
\t\t\t\t<th class=\"insc info\"><span>Prénom</span></th>
\t\t\t\t<th class=\"insc convention text-centered\"><span>Numéro</span></th>
\t\t\t\t<th class=\"insc convention text-centered\"><span>Edition</span></th>
\t\t\t\t<th class=\"insc convention text-centered\"><span>Etape-1</span></th>
\t\t\t\t<th class=\"insc convention text-centered\"><span>Etape-2</span></th>
\t\t\t\t<th class=\"insc convention text-centered\"><span>Etape-3</span></th>
\t\t\t\t<th class=\"insc convention text-centered\"><span>Etape-4</span></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
        {% for entity in entities %}
\t\t\t{% set class = \"\" %}
\t\t\t{% if entity.statut == 'en attente' %}
\t\t\t\t{% set class = \"attente\" %}
\t\t\t{% elseif entity.statut == 'accepté' %}
\t\t\t\t{% set class = \"valide\" %}
\t\t\t{% elseif entity.statut == 'annulé' %}
\t\t\t\t{% set class = \"annule\" %}
\t\t\t{% endif %}
\t\t\t<tr class=\"statut {{class}}\" data-ordre=\"{{entity.ordre}}\" data-idinscription=\"{{entity.id}}\">
\t\t\t\t\t\t{% if class == \"attente\" %}<td class=\"handle\"><i class=\"fa fa-arrows\"></i></td>{% else %}<td></td>{% endif %}
\t\t\t\t\t\t<td class=\"insc info\"><span>{{ entity.stagiaire.civilite }}</span></td>
\t\t\t\t\t\t<td class=\"insc info nom-stagiaire\"><span>{{ entity.stagiaire.nom }}</span></td>
\t\t\t\t\t\t<td class=\"insc info prenom-stagiaire\"><span>{{ entity.stagiaire.prenom }}</span></td>
\t\t\t\t\t{% if entity.convention %}
\t\t\t\t\t\t<td class=\"insc convention text-centered\"><span>{{ entity.convention.numeroToString }}</span></td>
\t\t\t\t\t\t<td class=\"insc convention text-centered\"><span>{{ entity.convention.edition|date('d/m/Y') }}</span></td>
\t\t\t\t\t\t<td class=\"insc convention text-centered\"><span>{% if entity.convention.etape1 %}<i class=\"fa fa-check\" title=\"{{ entity.convention.etape1|date('d/m/Y') }}\"></i></span>{% endif %}</td>
\t\t\t\t\t\t<td class=\"insc convention text-centered\"><span>{% if entity.convention.etape2 %}<i class=\"fa fa-check\" title=\"{{ entity.convention.etape2|date('d/m/Y') }}\"></i></span>{% endif %}</td>
\t\t\t\t\t\t<td class=\"insc convention text-centered\"><span>{% if entity.convention.etape3 %}<i class=\"fa fa-check\" title=\"{{ entity.convention.etape3|date('d/m/Y') }}\"></i></span>{% endif %}</td>
\t\t\t\t\t\t<td class=\"insc convention text-centered\"><span>{% if entity.convention.etape4 %}<i class=\"fa fa-check\" title=\"{{ entity.convention.etape4|date('d/m/Y') }}\"></i></span>{% endif %}</td>

\t\t\t\t\t{% else %}
\t\t\t\t\t\t<td class=\"insc convention text-centered\" colspan=\"6\">
\t\t\t\t\t\t\t<span style=\"color: grey\">{% if(entity.statutConvention is null) %} Demande de convention non confirmée {% elseif entity.statutConvention == false %} Pas de convention {% elseif entity.statutConvention == true %} <strong>Convention demandée</strong>{% endif %}</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t{% endif %}
            </tr>
        {% endfor %}
        </tbody>
\t</table>
</div>
</div>

{# financement #}
<div id=\"financement\" class=\"tab unit-100\">
<div class=\"table-container\">
\t<table class=\"\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"handle\"></th>
\t\t\t\t<th class=\"insc finance text-centered\">Statut</th>
\t\t\t\t<th class=\"insc info\"><span>Civilité</span></th>
\t\t\t\t<th class=\"insc info\"><span>Nom</span></th>
\t\t\t\t<th class=\"insc info\"><span>Prénom</span></th>
\t\t\t\t<th class=\"insc finance\"><span>Structure stagiaire</span></th>
\t\t\t\t<th class=\"insc finance\">Organisme Financeur</th>
\t\t\t\t<th class=\"insc finance\">Adresse</th>
\t\t\t\t<th class=\"insc finance\">CP</th>
\t\t\t\t<th class=\"insc finance\">Ville</th>
\t\t\t\t<th class=\"insc finance\">Type</th>
\t\t\t\t<th class=\"insc finance\">Tags</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
        {% for entity in entities %}
\t\t\t{% set class = \"\" %}
\t\t\t{% if entity.statut == 'en attente' %}
\t\t\t\t{% set class = \"attente\" %}
\t\t\t{% elseif entity.statut == 'accepté' %}
\t\t\t\t{% set class = \"valide\" %}
\t\t\t{% elseif entity.statut == 'annulé' %}
\t\t\t\t{% set class = \"annule\" %}
\t\t\t{% endif %}
\t\t\t<tr class=\"statut {{class}}\" data-ordre=\"{{entity.ordre}}\" data-idinscription=\"{{entity.id}}\">
\t\t\t\t\t\t{% if class == \"attente\" %}<td class=\"handle\"><i class=\"fa fa-arrows\"></i></td>{% else %}<td></td>{% endif %}
\t\t\t\t\t\t<td class=\"insc info text-centered\">
\t\t\t\t\t\t\t{% if entity.statutFinancement is null %}
\t\t\t\t\t\t\t\t<span class=\"label label-yellow\" title=\"Financement en attente\"><i class=\"fa fa-question\"></i></span>
\t\t\t\t\t\t\t{% elseif entity.statutFinancement == false %}
\t\t\t\t\t\t\t\t<span class=\"label label-red\" title=\"Financement pas accordé\"><i class=\"fa fa-times\"></i></span>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<span class=\"label label-green\" title=\"Financement Accordé\"><i class=\"fa fa-check\"></i></span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"insc info\"><span>{{ entity.stagiaire.civilite }}</span></td>
\t\t\t\t\t\t<td class=\"insc info nom-stagiaire\"><span>{{ entity.stagiaire.nom }}</span></td>
\t\t\t\t\t\t<td class=\"insc info prenom-stagiaire\"><span>{{ entity.stagiaire.prenom }}</span></td>
\t\t\t\t\t\t<td class=\"insc finance\"><span>{{ (entity.stagiaire.adresse)? entity.stagiaire.adresse.nomStructure }}</span></td>

\t\t\t\t\t\t{% if (entity.signataire is not null) and (entity.signataire.adresse is not null)%}
\t\t\t\t\t\t\t<td class=\"insc finance\">{{ entity.signataire.adresse.nomStructure}}</td>
\t\t\t\t\t\t\t<td class=\"insc finance\">{{ entity.signataire.adresse.adresse}}</td>
\t\t\t\t\t\t\t<td class=\"insc finance\">{{ entity.signataire.adresse.cP}}</td>
\t\t\t\t\t\t\t<td class=\"insc finance\">{{ entity.signataire.adresse.ville}}</td>
\t\t\t\t\t\t\t<td class=\"insc finance\">{{ entity.signataire.adresse.type}}</td>
\t\t\t\t\t\t\t<td class=\"insc finance\">{{ entity.signataire.adresse.tags|join(', ')}}</td>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<td colspan=\"6\"></td>
\t\t\t\t\t\t{% endif %}


            </tr>
        {% endfor %}
        </tbody>
\t</table>
</div>
</div>

{# ATTENTES #}
<div id=\"attentes\" class=\"tab unit-100\">
<div class=\"table-container\">
\t<table class=\"\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"handle\"></th>
\t\t\t\t<th class=\"insc info\"><span>Nom</span></th>
\t\t\t\t<th class=\"insc info\"><span>Prénom</span></th>
\t\t\t\t<th class=\"insc attentes\"><span>Structure</span></th>
\t\t\t\t<th class=\"insc attentes\"><span>Fonction</span></th>
\t\t\t\t<th class=\"insc attentes\"><span>CP</span></th>
\t\t\t\t<th class=\"insc attentes\"><span>Ville</span></th>
\t\t\t\t<th class=\"insc attentes\"><span>Mail</span></th>
\t\t\t\t<th class=\"insc attentes attente-text\" style=\"width:550px !important; white-space:normal !important\">Attentes</th>
\t\t\t\t<th class=\"insc attentes\"><span>Tags</span></th>
\t\t\t\t<th class=\"insc attentes\"><span>Provenance</span></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
        {% for entity in entities %}
\t\t\t{% set class = \"\" %}
\t\t\t{% if entity.statut == 'en attente' %}
\t\t\t\t{% set class = \"attente\" %}
\t\t\t{% elseif entity.statut == 'accepté' %}
\t\t\t\t{% set class = \"valide\" %}
\t\t\t{% elseif entity.statut == 'annulé' %}
\t\t\t\t{% set class = \"annule\" %}
\t\t\t{% endif %}
\t\t\t<tr class=\"statut {{class}}\" data-ordre=\"{{entity.ordre}}\" data-idinscription=\"{{entity.id}}\">
\t\t\t\t{% if class == \"attente\" %}<td class=\"handle\"><span class=\"fa fa-arrows\"></span></td>{% else %}<td></td>{% endif %}
\t\t\t\t<td class=\"insc info nom-stagiaire\"><span>{{ entity.stagiaire.nom }}</span></td>
\t\t\t\t<td class=\"insc info prenom-stagiaire\"><span>{{ entity.stagiaire.prenom }}</span></td>
\t\t\t\t<td class=\"insc attentes\"><span>{{ (entity.stagiaire.adresse)? entity.stagiaire.adresse.nomStructure }}</span></td>
\t\t\t\t<td class=\"insc attentes\"><span>{{ entity.stagiaire.fonction }}</span></td>
\t\t\t\t<td class=\"insc attentes\"><span>{{ (entity.stagiaire.adresse)? entity.stagiaire.adresse.cP }}</span></td>
\t\t\t\t<td class=\"insc attentes\"><span>{{ (entity.stagiaire.adresse)? entity.stagiaire.adresse.ville }}</span></td>
\t\t\t\t<td class=\"insc attentes\"><a href=\"mailto:{{ entity.stagiaire.mail }}\">{{ entity.stagiaire.mail }}</a></td>
\t\t\t\t<td class=\"insc attentes attente-text\" style=\"width:550px !important; white-space:normal !important\">{{ entity.attentes }}</td>
\t\t\t\t<td class=\"insc attentes\"><span>{{ (entity.stagiaire.adresse)? entity.stagiaire.adresse.tags|join(', ') }}</span></td>
\t\t\t\t<td class=\"insc attentes\"><span>{{ (entity.provenancePCST)? \"<i class='fa fa-flask'>PCST</i>\" }}</span></td>
            </tr>
        {% endfor %}
        </tbody>
\t</table>
</div>
</div>

{# intervenants #}
<div id=\"intervenants\" class=\"tab unit-100\">

\t<div class=\"table-container\">
\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t<th>Structure</th>
\t\t\t\t\t<th>Fonction</th>
\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t<th>CP</th>
\t\t\t\t\t<th>Ville</th>
\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t<th>Email</th>
\t\t\t\t\t<th>Tags</th>
\t\t\t\t\t<th>Commentaire</th>
\t\t\t\t\t<th></td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for intervenant in evenement.intervenants %}
\t\t\t\t\t<tr class=\"{{((id is defined)and( id == intervenant.id ))? \" highlight\"}}\">
\t\t\t\t\t\t<td>{{ intervenant.nom }}</td>
\t\t\t\t\t\t<td>{{ intervenant.prenom }}</td>
\t\t\t\t\t\t<td>{{ (intervenant.adresse is not null)? intervenant.adresse.nomStructure }}</td>
\t\t\t\t\t\t<td>{{ intervenant.fonction }}</td>
\t\t\t\t\t\t<td>{{ (intervenant.adresse is not null)? intervenant.adresse.adresse }}</td>
\t\t\t\t\t\t<td>{{ (intervenant.adresse is not null)? intervenant.adresse.cP }}</td>
\t\t\t\t\t\t<td>{{ (intervenant.adresse is not null)? intervenant.adresse.ville }}</td>
\t\t\t\t\t\t<td>{{ intervenant.tel }}</td>
\t\t\t\t\t\t<td><a href=\"mailto:{{ intervenant.mail }}\">{{ intervenant.mail }}</a></td>
\t\t\t\t\t\t<td>{{ (intervenant.adresse is not null)? intervenant.adresse.tags|join(', ') }}</td>
\t\t\t\t\t\t<td>{{ intervenant.commentaire }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{path('intervenants_edit', {'id': intervenant.id, 'idevenement': evenement.id})}}\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>
</div>

</div>

{% else %}
\t<p class=\"text-centered lead\"><i class=\"fa fa-info\"></i> Aucune inscription pour le moment...</p>
\t<div class=\"units-row text-centered\">
\t\t<a href=\"{{ path('inscription_new', { 'idevenement': evenement.id }) }}\" class=\"btn btn-green btn-big\"><i class=\"fa fa-plus\"></i> Nouvelle inscription</a>
\t\t<a href=\"{{path('intervenants_new', { 'idevenement': evenement.id }) }}\" class='btn btn-big'><span class=\"fa fa-plus\"></span> Ajouter un intervenant</a>
\t</div>

\t{% if evenement.intervenants|length > 0 %}

\t\t<div class=\"table-container panel\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Civilité</th>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t\t<th>Fonction</th>
\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Structure</th>
\t\t\t\t\t\t<th>Commentaire</th>
\t\t\t\t\t\t<th></td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for intervenant in evenement.intervenants %}
\t\t\t\t\t\t<tr class=\"{{((id is defined)and( id == intervenant.id ))? \" highlight\"}}\">
\t\t\t\t\t\t\t<td>{{intervenant.civilite}}</td>
\t\t\t\t\t\t\t<td>{{intervenant.nom|capitalize}}</td>
\t\t\t\t\t\t\t<td>{{intervenant.prenom|capitalize}}</td>
\t\t\t\t\t\t\t<td>{{intervenant.fonction}}</td>
\t\t\t\t\t\t\t<td>{{intervenant.tel}}</td>
\t\t\t\t\t\t\t<td><a href=\"mailto:{{intervenant.mail}}\">{{intervenant.mail}}</a></td>
\t\t\t\t\t\t\t<td>{{intervenant.adresse.nomStructure}}</td>
\t\t\t\t\t\t\t<td>{{intervenant.commentaire}}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{path('intervenants_edit', {'id': intervenant.id, 'idevenement': evenement.id})}}\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t{% endif %}

{% endif %}




{% endblock %}
", "OCIMEvenementsBundle:Inscription:index.html.twig", "/srv/http/ocim.formations/src/OCIM/EvenementsBundle/Resources/views/Inscription/index.html.twig");
    }
}
