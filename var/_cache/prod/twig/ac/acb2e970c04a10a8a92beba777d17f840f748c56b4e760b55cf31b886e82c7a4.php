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

/* @PrestaShop/Admin/Common/Grid/Actions/Bulk/delete_customers.html.twig */
class __TwigTemplate_1838575fb5ae5bd54eb4005d6b8d72fc3008ee25ee83ffc75f1472dda5838aec extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
<button id=\"";
        // line 26
        echo twig_escape_filter($this->env, sprintf("%s_grid_bulk_action_%s", $this->getAttribute(($context["grid"] ?? null), "id", []), $this->getAttribute(($context["action"] ?? null), "id", [])), "html", null, true);
        echo "\"
        data-customers-delete-url=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "customers_bulk_delete_route", []));
        echo "\"
        class=\"dropdown-item js-delete-customers-bulk-action\"
        type=\"button\"
>
  ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "name", []), "html", null, true);
        echo "
</button>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Bulk/delete_customers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 31,  37 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/delete_customers.html.twig", "/home2/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Bulk/delete_customers.html.twig");
    }
}
