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

/* @Page:C:/xampp/htdocs/oakandaspen-grav-v1/user/pages/06.contact/_main */
class __TwigTemplate_2bc97d8dbdbf08fdb28a474ea3bab9dcaa03f20a120134a6b68af216d67b6b55 extends \Twig\Template
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
        // line 1
        echo "<div class=\"modular-row contact borderbottom\">
    <div class=\"g-grid pure-g-r\">
        <div id=\"listing\" class=\"g-block pure-u-2-3\">
            


            




<form name=\"my-nice-form\"
      action=\"/oakandaspen-grav-v1/fr/contact\"
      method=\"POST\"
      id=\"my-nice-form\"            class=\" \"
                  >

  
    
            
                          

        
        
    



    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \" for=\"name\"  >
                                                                                                        Nom
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"text\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper  \">
                                                        <input
                                                                name=\"data[name]\"
                                value=\"\"
                                                                    type=\"text\"
                                                    class=\" form-control form-control-lg \"
                                    id=\"name\"                                                                                                             placeholder=\"Votre&#x20;nom\"                                                                                                                                                autocomplete=\"on\"                                                                                                            
                                                                        required=\"required\"                                                                                                                                            
                            />
                                                                                    </div>
                    
                                
            </div>
            </div>

                          
                          

        
        
    



    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \" for=\"email\"  >
                                                                                                        Email
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"email\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper  \">
                                                        <input
                                                                name=\"data[email]\"
                                value=\"\"
                                                                    type=\"email\"
                                            class=\" form-control form-control-lg \"
                                    id=\"email\"                                                                                                             placeholder=\"Votre&#x20;adresse&#x20;email\"                                                                                                                                                                                                                                                            
                                                                        required=\"required\"                                                                                                                                            
                            />
                                                                                </div>
                                                    
            </div>
            </div>

                          
                          

        
        
    



    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \"  >
                                                                                                        Message
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"textarea\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                            >
                                        <div class=\"form-textarea-wrapper long \">
                <textarea
                        name=\"data[message]\"
                                        class=\" form-control form-control-lg long\"
                                                                placeholder=\"Votre message\"                                                                                required=\"required\"                                                                                                                                        ></textarea>
                            </div>
                                
            </div>
            </div>

                    
  

        
        
    



<input type=\"hidden\" name=\"__form-name__\" value=\"my-nice-form\" />

  

        
        
    



    

  
    <div class=\"buttons\">
  
                            <button
                                                class=\"button \"
                                
                type=\"submit\"

                            >
                              Envoyer
                        </button>
                  
    </div>
  
  

        
        
    



<input type=\"hidden\" name=\"__unique_form_id__\" value=\"9y8x3jzdegijet02qbsr\" />


  <input type=\"hidden\" name=\"form-nonce\" value=\"015b0badbfa729dbed7f1cd824b91e85\" />
</form>

        </div>
        <div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
            <h4>Our Location</h4>
<p>We just moved to our new location down the block right beside Subway.</p>
<p>9 - 3815 Thatcher Avenue <br />
Saskatoon, Saskatchewan <br />
S7R 1A3 <br /></p>
<h4>Contact Information</h4>
<p><strong>Email:</strong>                  info@yastech.ca <br />
<strong>Primary Phone:</strong>          1 (306) 249 - 9609 <br />
<strong>Alternate Phone:</strong>        1 (306) 249 - 9612 <br />
<strong>Fax:</strong>                1 (306) 931 - 6739 <br /></p>
<h4>Office Hours</h4>
<p>Monday - Friday         8 am - 5 pm <br />
Saturday - Sunday           Closed <br />
Holidays                    Closed <br /></p>
<ul>
<li>Feel free to email or call us after hours.</li>
</ul>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/oakandaspen-grav-v1/user/pages/06.contact/_main";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row contact borderbottom\">
    <div class=\"g-grid pure-g-r\">
        <div id=\"listing\" class=\"g-block pure-u-2-3\">
            


            




<form name=\"my-nice-form\"
      action=\"/oakandaspen-grav-v1/fr/contact\"
      method=\"POST\"
      id=\"my-nice-form\"            class=\" \"
                  >

  
    
            
                          

        
        
    



    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \" for=\"name\"  >
                                                                                                        Nom
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"text\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper  \">
                                                        <input
                                                                name=\"data[name]\"
                                value=\"\"
                                                                    type=\"text\"
                                                    class=\" form-control form-control-lg \"
                                    id=\"name\"                                                                                                             placeholder=\"Votre&#x20;nom\"                                                                                                                                                autocomplete=\"on\"                                                                                                            
                                                                        required=\"required\"                                                                                                                                            
                            />
                                                                                    </div>
                    
                                
            </div>
            </div>

                          
                          

        
        
    



    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \" for=\"email\"  >
                                                                                                        Email
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"email\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper  \">
                                                        <input
                                                                name=\"data[email]\"
                                value=\"\"
                                                                    type=\"email\"
                                            class=\" form-control form-control-lg \"
                                    id=\"email\"                                                                                                             placeholder=\"Votre&#x20;adresse&#x20;email\"                                                                                                                                                                                                                                                            
                                                                        required=\"required\"                                                                                                                                            
                            />
                                                                                </div>
                                                    
            </div>
            </div>

                          
                          

        
        
    



    <div class=\"form-field     \">
                                    <div class=\"form-label \">
                                        <label class=\"inline \"  >
                                                                                                        Message
                                                    
                        <span class=\"required\">*</span>
                                        </label>
                </div>
                        <div class=\"form-data \"
                                data-grav-field=\"textarea\"
                data-grav-disabled=\"\"
                data-grav-default=\"null\"
                            >
                                        <div class=\"form-textarea-wrapper long \">
                <textarea
                        name=\"data[message]\"
                                        class=\" form-control form-control-lg long\"
                                                                placeholder=\"Votre message\"                                                                                required=\"required\"                                                                                                                                        ></textarea>
                            </div>
                                
            </div>
            </div>

                    
  

        
        
    



<input type=\"hidden\" name=\"__form-name__\" value=\"my-nice-form\" />

  

        
        
    



    

  
    <div class=\"buttons\">
  
                            <button
                                                class=\"button \"
                                
                type=\"submit\"

                            >
                              Envoyer
                        </button>
                  
    </div>
  
  

        
        
    



<input type=\"hidden\" name=\"__unique_form_id__\" value=\"9y8x3jzdegijet02qbsr\" />


  <input type=\"hidden\" name=\"form-nonce\" value=\"015b0badbfa729dbed7f1cd824b91e85\" />
</form>

        </div>
        <div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
            <h4>Our Location</h4>
<p>We just moved to our new location down the block right beside Subway.</p>
<p>9 - 3815 Thatcher Avenue <br />
Saskatoon, Saskatchewan <br />
S7R 1A3 <br /></p>
<h4>Contact Information</h4>
<p><strong>Email:</strong>                  info@yastech.ca <br />
<strong>Primary Phone:</strong>          1 (306) 249 - 9609 <br />
<strong>Alternate Phone:</strong>        1 (306) 249 - 9612 <br />
<strong>Fax:</strong>                1 (306) 931 - 6739 <br /></p>
<h4>Office Hours</h4>
<p>Monday - Friday         8 am - 5 pm <br />
Saturday - Sunday           Closed <br />
Holidays                    Closed <br /></p>
<ul>
<li>Feel free to email or call us after hours.</li>
</ul>
        </div>
    </div>
</div>
", "@Page:C:/xampp/htdocs/oakandaspen-grav-v1/user/pages/06.contact/_main", "");
    }
}
