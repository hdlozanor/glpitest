<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout/parts/head.html.twig */
class __TwigTemplate_dff78688b4c8b9c6f1a15af8b790577a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "\" ";
        if (($context["high_contrast"] ?? null)) {
            echo "data-high-contrast=\"1\"";
        }
        // line 36
        echo "      ";
        ((array_key_exists("glpi_request_id", $context)) ? (print (twig_escape_filter($this->env, ("data-glpi-request-id=" . ($context["glpi_request_id"] ?? null)), "html", null, true))) : (print ("")));
        echo ">
<head>
   <title>";
        // line 38
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " - GLPI</title>

   <meta charset=\"utf-8\" />

   ";
        // line 43
        echo "   <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

   ";
        // line 46
        echo "   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

   ";
        // line 49
        echo "   <meta name=\"robots\" content=\"noindex, nofollow\" />

    ";
        // line 52
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_header_tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["header_tag"]) {
            // line 53
            echo "        <";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header_tag"], "tag", [], "any", false, false, false, 53), "html", null, true);
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["header_tag"], "properties", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header_tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
   <meta property=\"glpi:csrf_token\" content=\"";
        // line 56
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(true), "html", null, true);
        echo "\" />

   ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["css_files"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["css_file"]) {
            // line 59
            echo "      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->cssPath(twig_get_attribute($this->env, $this->source, $context["css_file"], "path", [], "any", false, false, false, 59), (((twig_get_attribute($this->env, $this->source, $context["css_file"], "options", [], "any", true, true, false, 59) &&  !(null === twig_get_attribute($this->env, $this->source, $context["css_file"], "options", [], "any", false, false, false, 59)))) ? (twig_get_attribute($this->env, $this->source, $context["css_file"], "options", [], "any", false, false, false, 59)) : ([]))), "html", null, true);
            echo "\" />
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
   ";
        // line 62
        echo $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->customCss();
        echo "

   <link rel=\"shortcut icon\" type=\"images/x-icon\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->assetPath("/pics/favicon.ico"), "html", null, true);
        echo "\" />

   ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["js_files"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 67
            echo "      <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath(twig_get_attribute($this->env, $this->source, $context["js_file"], "path", [], "any", false, false, false, 67), (((twig_get_attribute($this->env, $this->source, $context["js_file"], "options", [], "any", true, true, false, 67) &&  !(null === twig_get_attribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 67)))) ? (twig_get_attribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 67)) : ([]))), "html", null, true);
            echo "\"></script>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
   ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["js_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 71
            echo "      <script type=\"module\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath(twig_get_attribute($this->env, $this->source, $context["js_file"], "path", [], "any", false, false, false, 71), (((twig_get_attribute($this->env, $this->source, $context["js_file"], "options", [], "any", true, true, false, 71) &&  !(null === twig_get_attribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 71)))) ? (twig_get_attribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 71)) : ([]))), "html", null, true);
            echo "\"></script>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
   ";
        // line 74
        echo $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->localesJs();
        echo "
</head>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/parts/head.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  164 => 74,  161 => 73,  152 => 71,  148 => 70,  145 => 69,  136 => 67,  132 => 66,  127 => 64,  122 => 62,  119 => 61,  110 => 59,  106 => 58,  101 => 56,  98 => 55,  77 => 53,  72 => 52,  68 => 49,  64 => 46,  60 => 43,  53 => 38,  47 => 36,  41 => 35,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 #
 # GLPI - Gestionnaire Libre de Parc Informatique
 #
 # http://glpi-project.org
 #
 # @copyright 2015-2024 Teclib' and contributors.
 # @copyright 2003-2014 by the INDEPNET Development Team.
 # @licence   https://www.gnu.org/licenses/gpl-3.0.html
 #
 # ---------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of GLPI.
 #
 # This program is free software: you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation, either version 3 of the License, or
 # (at your option) any later version.
 #
 # This program is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with this program.  If not, see <https://www.gnu.org/licenses/>.
 #
 # ---------------------------------------------------------------------
 #}

<!DOCTYPE html>
<html lang=\"{{ lang }}\" {% if high_contrast %}data-high-contrast=\"1\"{% endif %}
      {{ glpi_request_id is defined ? 'data-glpi-request-id=' ~ glpi_request_id : '' }}>
<head>
   <title>{{ title }} - GLPI</title>

   <meta charset=\"utf-8\" />

   {# prevent IE to turn into compatible mode... #}
   <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

   {# auto desktop / mobile viewport #}
   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

   {# prevent robots to index GLPI instances #}
   <meta name=\"robots\" content=\"noindex, nofollow\" />

    {# Custom header tags for plugins #}
    {% for header_tag in custom_header_tags %}
        <{{ header_tag.tag }} {% for key, value in header_tag.properties %}{{ key }}=\"{{ value }}\" {% endfor %}/>
    {% endfor %}

   <meta property=\"glpi:csrf_token\" content=\"{{ csrf_token(true) }}\" />

   {% for css_file in css_files %}
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ css_path(css_file.path, css_file.options ?? []) }}\" />
   {% endfor %}

   {{ custom_css() }}

   <link rel=\"shortcut icon\" type=\"images/x-icon\" href=\"{{ asset_path('/pics/favicon.ico') }}\" />

   {% for js_file in js_files %}
      <script type=\"text/javascript\" src=\"{{ js_path(js_file.path, js_file.options ?? []) }}\"></script>
   {% endfor %}

   {% for js_file in js_modules %}
      <script type=\"module\" src=\"{{ js_path(js_file.path, js_file.options ?? []) }}\"></script>
   {% endfor %}

   {{ locales_js() }}
</head>
", "layout/parts/head.html.twig", "/var/app/current/templates/layout/parts/head.html.twig");
    }
}
