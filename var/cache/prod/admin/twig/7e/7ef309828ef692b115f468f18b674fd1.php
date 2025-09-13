<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig */
class __TwigTemplate_1b5b9e100b0225b13857da4b743ffdab extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewOrders", [], "any", false, false, false, 25) || CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewCustomers", [], "any", false, false, false, 25)) || CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewMessages", [], "any", false, false, false, 25))) {
            // line 26
            yield "<ul class=\"header-list component\">
  <li id=\"notification\" class=\"dropdown\">
    <a href=\"javascript:void(0);\" class=\"notification dropdown-toggle notifs\">
      <i class=\"material-icons\">notifications_none</i>
      <span id=\"total_notif_number_wrapper\" class=\"notifs_badge hide\">
              <span id=\"total_notif_value\">0</span>
            </span>
    </a>
    <div class=\"dropdown-menu dropdown-menu-right notifs_dropdown\">
      <div class=\"notifications\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
          ";
            // line 37
            $context["active"] = "active";
            // line 38
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewOrders", [], "any", false, false, false, 38)) {
                // line 39
                yield "            <li class=\"nav-item ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield "\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"order\" href=\"#orders-notifications\" role=\"tab\" id=\"orders-tab\">";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Navigation.Header"), "html", null, true);
                yield "<span id=\"orders_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            ";
                // line 42
                $context["active"] = "";
                // line 43
                yield "          ";
            }
            // line 44
            yield "
          ";
            // line 45
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewCustomers", [], "any", false, false, false, 45)) {
                // line 46
                yield "            <li class=\"nav-item ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield "\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"customer\" href=\"#customers-notifications\" role=\"tab\" id=\"customers-tab\">";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
                yield "<span id=\"customers_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            ";
                // line 49
                $context["active"] = "";
                // line 50
                yield "          ";
            }
            // line 51
            yield "
          ";
            // line 52
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewMessages", [], "any", false, false, false, 52)) {
                // line 53
                yield "            <li class=\"nav-item ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield "\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"customer_message\" href=\"#messages-notifications\" role=\"tab\" id=\"messages-tab\">";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Messages", [], "Admin.Global"), "html", null, true);
                yield "<span id=\"customer_messages_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            ";
                // line 56
                $context["active"] = "";
                // line 57
                yield "          ";
            }
            // line 58
            yield "        </ul>

        <!-- Tab panes -->
        <div class=\"tab-content\">
          ";
            // line 62
            $context["active"] = "active";
            // line 63
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewOrders", [], "any", false, false, false, 63)) {
                // line 64
                yield "            <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield " empty\" id=\"orders-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                ";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new order for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                ";
                // line 67
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "noOrderTip", [], "any", false, false, false, 67);
                yield "
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            ";
                // line 71
                $context["active"] = "";
                // line 72
                yield "          ";
            }
            // line 73
            yield "
          ";
            // line 74
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewCustomers", [], "any", false, false, false, 74)) {
                // line 75
                yield "            <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield " empty\" id=\"customers-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                ";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new customer for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                ";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "noCustomerTip", [], "any", false, false, false, 78), "html", null, true);
                yield "
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            ";
                // line 82
                $context["active"] = "";
                // line 83
                yield "          ";
            }
            // line 84
            yield "
          ";
            // line 85
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewMessages", [], "any", false, false, false, 85)) {
                // line 86
                yield "            <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield " empty\" id=\"messages-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new message for now.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                ";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "noCustomerMessageTip", [], "any", false, false, false, 89), "html", null, true);
                yield "
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            ";
                // line 93
                $context["active"] = "";
                // line 94
                yield "          ";
            }
            // line 95
            yield "        </div>
      </div>
    </div>
  </li>
</ul>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  204 => 95,  201 => 94,  199 => 93,  192 => 89,  188 => 88,  182 => 86,  180 => 85,  177 => 84,  174 => 83,  172 => 82,  165 => 78,  161 => 77,  155 => 75,  153 => 74,  150 => 73,  147 => 72,  145 => 71,  138 => 67,  134 => 66,  128 => 64,  125 => 63,  123 => 62,  117 => 58,  114 => 57,  112 => 56,  107 => 54,  102 => 53,  100 => 52,  97 => 51,  94 => 50,  92 => 49,  87 => 47,  82 => 46,  80 => 45,  77 => 44,  74 => 43,  72 => 42,  67 => 40,  62 => 39,  59 => 38,  57 => 37,  44 => 26,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/notifications_center.html.twig");
    }
}
