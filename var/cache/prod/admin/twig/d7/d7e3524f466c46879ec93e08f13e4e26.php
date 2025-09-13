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

/* @PrestaShop/Admin/Component/Layout/notifications_center.html.twig */
class __TwigTemplate_4898a42422fe0b8c596320cddb7d2a45 extends Template
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
            yield "  <div class=\"component header-right-component\" id=\"header-notifications-container\">
    <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
      <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"material-icons\">notifications_none</i>
        <span id=\"notifications-total\" class=\"count hide\">0</span>
      </button>
      <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
        <div class=\"notifications\">
          <ul class=\"nav nav-pills\" role=\"tablist\">
            ";
            // line 35
            $context["active"] = "active";
            // line 36
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewOrders", [], "any", false, false, false, 36)) {
                // line 37
                yield "              <li class=\"nav-item\">
                <a
                  class=\"nav-link ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield "\"
                  id=\"orders-tab\"
                  data-toggle=\"tab\"
                  data-type=\"order\"
                  href=\"#orders-notifications\"
                  role=\"tab\"
                >
                  ";
                // line 46
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders[1][/1]", ["[1]" => "", "[/1]" => ""], "Admin.Navigation.Notification");
                yield "
                  <span id=\"_nb_new_orders_\"></span>
                </a>
              </li>
              ";
                // line 50
                $context["active"] = "";
                // line 51
                yield "            ";
            }
            // line 52
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewCustomers", [], "any", false, false, false, 52)) {
                // line 53
                yield "              <li class=\"nav-item\">
                <a
                  class=\"nav-link ";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield "\"
                  id=\"customers-tab\"
                  data-toggle=\"tab\"
                  data-type=\"customer\"
                  href=\"#customers-notifications\"
                  role=\"tab\"
                >
                  ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers[1][/1]", ["[1]" => "", "[/1]" => ""], "Admin.Navigation.Notification"), "html", null, true);
                yield "
                  <span id=\"_nb_new_customers_\"></span>
                </a>
              </li>
              ";
                // line 66
                $context["active"] = "";
                // line 67
                yield "            ";
            }
            // line 68
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewMessages", [], "any", false, false, false, 68)) {
                // line 69
                yield "              <li class=\"nav-item\">
                <a
                  class=\"nav-link ";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield "\"
                  id=\"messages-tab\"
                  data-toggle=\"tab\"
                  data-type=\"customer_message\"
                  href=\"#messages-notifications\"
                  role=\"tab\"
                >
                  ";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Messages[1][/1]", ["[1]" => "", "[/1]" => ""], "Admin.Navigation.Notification"), "html", null, true);
                yield "
                  <span id=\"_nb_new_messages_\"></span>
                </a>
              </li>
              ";
                // line 82
                $context["active"] = "";
                // line 83
                yield "            ";
            }
            // line 84
            yield "          </ul>

          <!-- Tab panes -->
          <div class=\"tab-content\">
            ";
            // line 88
            $context["active"] = "active";
            // line 89
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewOrders", [], "any", false, false, false, 89)) {
                // line 90
                yield "              <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield " empty\" id=\"orders-notifications\" role=\"tabpanel\">
                <p class=\"no-notification\">
                  ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new order for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                  ";
                // line 93
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "noOrderTip", [], "any", false, false, false, 93);
                yield "
                </p>
                <div class=\"notification-elements\"></div>
              </div>
              ";
                // line 97
                $context["active"] = "";
                // line 98
                yield "            ";
            }
            // line 99
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewCustomers", [], "any", false, false, false, 99)) {
                // line 100
                yield "              <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield " empty\" id=\"customers-notifications\" role=\"tabpanel\">
                <p class=\"no-notification\">
                  ";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new customer for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                  ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "noCustomerTip", [], "any", false, false, false, 103), "html", null, true);
                yield "
                </p>
                <div class=\"notification-elements\"></div>
              </div>
              ";
                // line 107
                $context["active"] = "";
                // line 108
                yield "            ";
            }
            // line 109
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewMessages", [], "any", false, false, false, 109)) {
                // line 110
                yield "              <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield " empty\" id=\"messages-notifications\" role=\"tabpanel\">
                <p class=\"no-notification\">
                  ";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new message for now.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                  ";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "noCustomerMessageTip", [], "any", false, false, false, 113), "html", null, true);
                yield "
                </p>
                <div class=\"notification-elements\"></div>
              </div>
              ";
                // line 117
                $context["active"] = "";
                // line 118
                yield "            ";
            }
            // line 119
            yield "          </div>
        </div>
      </div>
    </div>

    ";
            // line 124
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewOrders", [], "any", false, false, false, 124)) {
                // line 125
                yield "      <script type=\"text/html\" id=\"order-notification-template\">
        <a class=\"notif\" href='order_url'>
          #_id_order_ -
          ";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("from", [], "Admin.Navigation.Notification"), "html", null, true);
                yield " <strong>_customer_name_</strong> (_iso_code_)_carrier_
          <strong class=\"float-sm-right\">_total_paid_</strong>
        </a>
      </script>
    ";
            }
            // line 133
            yield "
    ";
            // line 134
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewCustomers", [], "any", false, false, false, 134)) {
                // line 135
                yield "      <script type=\"text/html\" id=\"customer-notification-template\">
        <a class=\"notif\" href='customer_url'>
          #_id_customer_ - <strong>_customer_name_</strong>_company_
          - ";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registered", [], "Admin.Navigation.Notification"), "html", null, true);
                yield " <strong>_date_add_</strong>
        </a>
      </script>
    ";
            }
            // line 142
            yield "
    ";
            // line 143
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "showNewMessages", [], "any", false, false, false, 143)) {
                // line 144
                yield "      <script type=\"text/html\" id=\"message-notification-template\">
        <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
          - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
        </a>
      </script>
    ";
            }
            // line 153
            yield "  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/Layout/notifications_center.html.twig";
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
        return array (  282 => 153,  271 => 144,  269 => 143,  266 => 142,  259 => 138,  254 => 135,  252 => 134,  249 => 133,  241 => 128,  236 => 125,  234 => 124,  227 => 119,  224 => 118,  222 => 117,  215 => 113,  211 => 112,  205 => 110,  202 => 109,  199 => 108,  197 => 107,  190 => 103,  186 => 102,  180 => 100,  177 => 99,  174 => 98,  172 => 97,  165 => 93,  161 => 92,  155 => 90,  152 => 89,  150 => 88,  144 => 84,  141 => 83,  139 => 82,  132 => 78,  122 => 71,  118 => 69,  115 => 68,  112 => 67,  110 => 66,  103 => 62,  93 => 55,  89 => 53,  86 => 52,  83 => 51,  81 => 50,  74 => 46,  64 => 39,  60 => 37,  57 => 36,  55 => 35,  44 => 26,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/notifications_center.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/notifications_center.html.twig");
    }
}
