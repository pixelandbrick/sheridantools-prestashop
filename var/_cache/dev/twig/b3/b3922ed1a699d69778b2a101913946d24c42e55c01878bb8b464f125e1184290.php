<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Improve/International/Translations/translations_settings.html.twig */
class __TwigTemplate_48253a5969adb0d26348898388267651a0212e84272e700c1749974091e99c26 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/International/Translations/translations_settings.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'translations_kpis_row' => [$this, 'block_translations_kpis_row'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Translations/translations_settings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Translations/translations_settings.html.twig"));

        // line 29
        list($context["addUpdateLanguageForm"], $context["copyLanguageForm"], $context["exportLanguageForm"], $context["modifyTranslationsForm"]) =         [$this->getAttribute(        // line 30
($context["translationSettingsForm"] ?? $this->getContext($context, "translationSettingsForm")), "add_update_language", []), $this->getAttribute(($context["translationSettingsForm"] ?? $this->getContext($context, "translationSettingsForm")), "copy_language", []), $this->getAttribute(        // line 31
($context["translationSettingsForm"] ?? $this->getContext($context, "translationSettingsForm")), "export_language", []), $this->getAttribute(($context["translationSettingsForm"] ?? $this->getContext($context, "translationSettingsForm")), "modify_translations", [])];
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      <div class=\"card\">
        ";
        // line 38
        $this->displayBlock('translations_kpis_row', $context, $blocks);
        // line 46
        echo "      </div>
    </div>

    <div class=\"col-xl-10\">
      ";
        // line 50
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Translations/Blocks/modify_translations.html.twig", "@PrestaShop/Admin/Improve/International/Translations/translations_settings.html.twig", 50)->display($context);
        // line 51
        echo "    </div>

    <div class=\"col-xl-10\">
      ";
        // line 54
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Translations/Blocks/add_update_language.html.twig", "@PrestaShop/Admin/Improve/International/Translations/translations_settings.html.twig", 54)->display($context);
        // line 55
        echo "    </div>

    <div class=\"col-xl-10\">
      ";
        // line 58
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Translations/Blocks/export_language.html.twig", "@PrestaShop/Admin/Improve/International/Translations/translations_settings.html.twig", 58)->display($context);
        // line 59
        echo "    </div>

    <div class=\"col-xl-10\">
      ";
        // line 62
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig", "@PrestaShop/Admin/Improve/International/Translations/translations_settings.html.twig", 62)->display($context);
        // line 63
        echo "    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_translations_kpis_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translations_kpis_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translations_kpis_row"));

        // line 39
        echo "          <div class=\"row\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:renderKpiRow", ["kpiRow" =>         // line 42
($context["kpiRow"] ?? $this->getContext($context, "kpiRow"))]));
        // line 43
        echo "
          </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/translation_settings.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Translations/translations_settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 70,  151 => 68,  142 => 67,  130 => 43,  128 => 42,  127 => 40,  124 => 39,  115 => 38,  103 => 63,  101 => 62,  96 => 59,  94 => 58,  89 => 55,  87 => 54,  82 => 51,  80 => 50,  74 => 46,  72 => 38,  67 => 35,  58 => 34,  48 => 26,  46 => 31,  45 => 30,  44 => 29,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}

{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain 'Admin.International.Feature' %}

{% set addUpdateLanguageForm, copyLanguageForm, exportLanguageForm, modifyTranslationsForm =
        translationSettingsForm.add_update_language, translationSettingsForm.copy_language,
        translationSettingsForm.export_language, translationSettingsForm.modify_translations
%}

{% block content %}
  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      <div class=\"card\">
        {% block translations_kpis_row %}
          <div class=\"row\">
            {{ render(controller(
              'PrestaShopBundle:Admin\\\\Common:renderKpiRow',
              { 'kpiRow': kpiRow }
            )) }}
          </div>
        {% endblock %}
      </div>
    </div>

    <div class=\"col-xl-10\">
      {% include '@PrestaShop/Admin/Improve/International/Translations/Blocks/modify_translations.html.twig' %}
    </div>

    <div class=\"col-xl-10\">
      {% include '@PrestaShop/Admin/Improve/International/Translations/Blocks/add_update_language.html.twig' %}
    </div>

    <div class=\"col-xl-10\">
      {% include '@PrestaShop/Admin/Improve/International/Translations/Blocks/export_language.html.twig' %}
    </div>

    <div class=\"col-xl-10\">
      {% include '@PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig' %}
    </div>
  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/translation_settings.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/International/Translations/translations_settings.html.twig", "/home2/sheridantools/dev.sheridantools.com/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Translations/translations_settings.html.twig");
    }
}
