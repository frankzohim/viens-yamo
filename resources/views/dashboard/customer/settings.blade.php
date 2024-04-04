@extends('layouts.backoffice.customer.app')
@section('title', __('Tableau de bord'))

@section('content')

<div class="w-100 bg-white">

    <div ppt-box class="flex-column account-right shadow-0">

      <div class="_content p-lg-5 p-3" >



        <div class="fs-lg text-600 mb-2">Settings</div>

            <p class="mb-4">Veuillez mettre à jour les détails de votre compte.</p>


      <form method="post" action=""  onsubmit="return ppt_validate_new_user();" class="user_form ppt-forms style3">
            <input type="hidden" name="action" value="userupdate" />



            <div id="user-username">


                <div class="ppt-accordion" style="cursor:pointer;">

                        <div class="d-flex flex-row border-top p-3 py-lg-4">
                            <div class="w-100" ppt-flex-between>
                                <div class="w-100 btn-show">
                                <div class="fs-6 text-600 ">
                                Nom utilisateur    </div>
                                </div>
                                <div ppt-icon-32 class="hide-show btn-show">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>    </div>
                                <div ppt-icon-32 class="show-hide btn-show">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>    </div>
                            </div>
                        </div>


                        <div class="hide border-top p-3">


                            <div class="row">
                                <div class="col-md-12">

                                    <div class="fs-7 mt-3 pr-lg-5 opacity-5">Entrez Le nom d'utilisateur  qui peut être utilisés pour se connecter.</div>
                                </div>
                                <div class="col-md-12">

                                        <div class="py-3">

                                            <div class="row">


                                                    <div class="col-md-12 py-2">



                                                            <div ppt-flex-between>

                                                                    <label>Nom utilisateur</label>



                                                            </div>



                                                            <span id="ajaxMsgUser"></span>

                                                            <input class="form-control val-nospaces" name="username" data-required="1" data-type="username" type="text"  value="{{ $user->username }}">


                                                            <script>
                                                                function resetUsernameAlerts(){

                                                                            jQuery(".user-taken").hide();
                                                                            jQuery(".user-valid").hide();
                                                                            jQuery(".user-invalid").hide();

                                                                            }
                                                                            jQuery(document).ready(function() {

                                                                            jQuery('#newusernamefield').change(function() {

                                                                            resetUsernameAlerts();

                                                                            if(jQuery('#newusernamefield').val().length < 6){

                                                                                jQuery(".user-invalid").show();

                                                                                }else if(jQuery('#newusernamefield').val().length > 6){


                                                                                    jQuery.ajax({
                                                                                        type: "POST",
                                                                                        url: 'https://es10.premiummod.com/',
                                                                                        data: {
                                                                                            action: "validateUsername",
                                                                                            un: jQuery('#newusernamefield').val(),
                                                                                        },
                                                                                        success: function(response) {

                                                                                            if(response == "yes"){

                                                                                            jQuery(".user-taken").show();

                                                                                            } else {

                                                                                            jQuery(".user-valid").show();

                                                                                            jQuery('#user_form, .user_form').append('<input type="hidden" name="usernamechange" value="1">');

                                                                                            }
                                                                                        },
                                                                                        error: function(e) {
                                                                                            alert("error "+e)
                                                                                        }
                                                                                    });

                                                                                }else if(jQuery('#newusernamefield').val().length > 1){

                                                                                jQuery(".user-valid").hide();
                                                                                jQuery(".user-taken").show();
                                                                                }
                                                                            });
                                                                });
                                                            </script>




                                                    </div>




                                            </div>


                                        </div>
                                </div>
                            </div>




                        </div>
                </div>

            </div>



<div id="user-password">


<div class="ppt-accordion" style="cursor:pointer;">

<div class="d-flex flex-row border-top p-3 py-lg-4">
<div class="w-100" ppt-flex-between>
  <div class="w-100 btn-show">
    <div class="fs-6 text-600 ">
    Mot de Passe      </div>
  </div>
  <div ppt-icon-32 class="hide-show btn-show">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>    </div>
   <div ppt-icon-32 class="show-hide btn-show">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>    </div>
</div>
</div>


<div class="hide border-top p-3">


<div class="row">
  <div class="col-md-12">

      <div class="fs-7 mt-3 pr-lg-5 opacity-5">Ne remplissez ce champ que si vous souhaitez modifier le mot de passe existant.</div>
      </div>
  <div class="col-md-12">

      <div class="py-3">

          <div class="row">


                  <div class="col-md-12 py-2">



                 <div ppt-flex-between>

                  <label>Mot de Passe</label>



                  </div>




                        <input autocomplete="off" type="password" data-type="password"  name="password" value="" class="form-control">



                  </div>




          </div>


      </div>
  </div>
</div>




</div></div>

</div>



<div id="user-contact">


<div class="ppt-accordion" style="cursor:pointer;">

<div class="d-flex flex-row border-top p-3 py-lg-4">
<div class="w-100" ppt-flex-between>
  <div class="w-100 btn-show">
    <div class="fs-6 text-600 ">
    Email &amp; Numéro de Téléphone      </div>
  </div>
  <div ppt-icon-32 class="hide-show btn-show">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>    </div>
   <div ppt-icon-32 class="show-hide btn-show">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>    </div>
</div>
</div>


<div class="hide border-top p-3">


<div class="row">
  <div class="col-md-12">

      <div class="fs-7 mt-3 pr-lg-5 opacity-5">Un email valide est requis.</div>
      </div>
  <div class="col-md-12">

      <div class="py-3">

          <div class="row">


                  <div class="col-md-6 py-2">



                 <div ppt-flex-between>

                  <label>Email</label>



                  </div>



            <input type="text" name="email" data-required="1" class="form-control " value="{{ $user->email }}" />

                  </div>


                  <div class="col-md-6 py-2">



                 <div ppt-flex-between>

                  <label>Numéro de Téléphone</label>



                  </div>




<script>
jQuery(document).ready(function(){
setTimeout(function() {


     var handleChange = function() {
     jQuery("#mobilenum-input").val(iti.getNumber());
     }

      var input = document.querySelector("#mobilenum-input");
      var iti = window.intlTelInput(input, {
        utilsScript: "https://ppt1080.b-cdn.net/js/js.mobileprefixU.js",
       // autoHideDialCode: false,
        nationalMode: false,
        preferredCountries: [ "AF" ],
      });

      input.addEventListener('change', handleChange);
      input.addEventListener('keyup', handleChange);

      jQuery(".iti__country-list li").click(function(e) {
          jQuery("#mobilenum-input").val( '+' + jQuery(this).data('dial-code') );

      });

  },5000);

});
</script>
<input name="phone_number" type="text" class="form-control" id="mobilenum-input" value="+237{{ $user->phone_number }}" />


                  </div>

          </div>


      </div>
  </div>
</div>




</div></div>

</div>



<div id="user-preferences">


<div class="ppt-accordion" style="cursor:pointer;">

<div class="d-flex flex-row border-top p-3 py-lg-4">
<div class="w-100" ppt-flex-between>
  <div class="w-100 btn-show">
    <div class="fs-6 text-600 ">
    Preferences      </div>
  </div>
  <div ppt-icon-32 class="hide-show btn-show">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>    </div>
   <div ppt-icon-32 class="show-hide btn-show">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>    </div>
</div>
</div>


<div class="hide border-top p-3">


<div class="row">
  <div class="col-md-12">

      <div class="fs-7 mt-3 pr-lg-5 opacity-5">Where possible we will only show content related to your preferences.</div>
      </div>
  <div class="col-md-12">

      <div class="py-3">

          <div class="row">


                  <div class="col-md-6 py-2">



                 <div ppt-flex-between>

                  <label>Show Me</label>



                  </div>




<select name="da-seek2" class="form-control" >
<option value=""></option>
<option value="157" >
                  Male Escort</option>
<option value="156" >
                  Female Escort</option>
</select>

                  </div>

          </div>


      </div>
  </div>
</div>




</div></div>

</div>



<div id="user-basic">


<div class="ppt-accordion" style="cursor:pointer;">

<div class="d-flex flex-row border-top p-3 py-lg-4">
<div class="w-100" ppt-flex-between>
  <div class="w-100 btn-show">
    <div class="fs-6 text-600 ">
    Basic Details      </div>
  </div>
  <div ppt-icon-32 class="hide-show btn-show">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>    </div>
   <div ppt-icon-32 class="show-hide btn-show">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>    </div>
</div>
</div>


<div class="hide border-top p-3">


<div class="row">
  <div class="col-md-12">

      <div class="fs-7 mt-3 pr-lg-5 opacity-5">This information is not displayed on your profile.</div>
      </div>
  <div class="col-md-12">

      <div class="py-3">

          <div class="row">


                  <div class="col-md-6 py-2">



                 <div ppt-flex-between>

                  <label>First Name</label>



                  </div>



<input type="text" name="first_name"  class="form-control " value="GeraGYFUJFGmel" />

                  </div>


                  <div class="col-md-6 py-2">



                 <div ppt-flex-between>

                  <label>Last Name</label>



                  </div>



<input type="text" name="last_name"  class="form-control " value="Marte PaulinoFJGFGHJFGHNJ" />

                  </div>


                  <div class="col-md-6 py-2">



                 <div ppt-flex-between>

                  <label>My Language</label>



                  </div>



<select name="language" class="form-control" tabindex="5" id="user-language">

<option  value='en_US'>English</option></select>

                  </div>


                  <div class="col-md-12 py-2">




                  <div class="row">
</div>

                  </div>

          </div>


      </div>
  </div>
</div>




</div></div>

</div>



<div id="user-address">


<div class="ppt-accordion" style="cursor:pointer;">

<div class="d-flex flex-row border-top p-3 py-lg-4">
<div class="w-100" ppt-flex-between>
  <div class="w-100 btn-show">
    <div class="fs-6 text-600 ">
    Address      </div>
  </div>
  <div ppt-icon-32 class="hide-show btn-show">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>    </div>
   <div ppt-icon-32 class="show-hide btn-show">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>    </div>
</div>
</div>


<div class="hide border-top p-3">


<div class="row">
  <div class="col-md-12">

      <div class="fs-7 mt-3 pr-lg-5 opacity-5">Displayed on invoices and purchase reciepts.</div>
      </div>
  <div class="col-md-12">

      <div class="py-3">

          <div class="row">


                  <div class="col-md-6 py-2">



                 <div ppt-flex-between>

                  <label>My Location</label>



                  </div>



<select name="country" class="form-control"  id="user-country">
                    <option  value='AF'>Afghanistan</option><option  value='AL'>Albania</option><option  value='DZ'>Algeria</option><option  value='AD'>Andorra</option><option  value='AO'>Angola</option><option  value='AG'>Antigua and Barbuda</option><option  value='AR'>Argentina</option><option  value='AM'>Armenia</option><option  value='AU'>Australia</option><option  value='AT'>Austria</option><option  value='AZ'>Azerbaijan</option><option  value='BS'>The Bahamas</option><option  value='BH'>Bahrain</option><option  value='BD'>Bangladesh</option><option  value='BB'>Barbados</option><option  value='BY'>Belarus</option><option  value='BE'>Belgium</option><option  value='BZ'>Belize</option><option  value='BJ'>Benin</option><option  value='BT'>Bhutan</option><option  value='BO'>Bolivia</option><option  value='BA'>Bosnia and Herzegovina</option><option  value='BW'>Botswana</option><option  value='BR'>Brazil</option><option  value='BN'>Brunei</option><option  value='BG'>Bulgaria</option><option  value='BF'>Burkina Faso</option><option  value='BI'>Burundi</option><option  value='KH'>Cambodia</option><option  value='CM'>Cameroon</option><option  value='CA'>Canada</option><option  value='CV'>Cape Verde</option><option  value='CF'>Central African Republic</option><option  value='TD'>Chad</option><option  value='CL'>Chile</option><option  value='CN'>China</option><option  value='CO'>Colombia</option><option  value='KM'>Comoros</option><option  value='CG'>Congo, Republic of the</option><option  value='CD'>Congo, Democratic Republic of the</option><option  value='CR'>Costa Rica</option><option  value='CI'>Cote d'Ivoire</option><option  value='HR'>Croatia</option><option  value='CU'>Cuba</option><option  value='CY'>Cyprus</option><option  value='CZ'>Czech Republic</option><option  value='DK'>Danmark</option><option  value='DJ'>Djibouti</option><option  value='DM'>Dominica</option><option  value='DO'>Dominican Republic</option><option  value='TL'>Timor-Leste</option><option  value='EC'>Ecuador</option><option  value='EG'>Egypt</option><option  value='SV'>El Salvador</option><option  value='GQ'>Equatorial Guinea</option><option  value='ER'>Eritrea</option><option  value='EE'>Estonia</option><option  value='ET'>Ethiopia</option><option  value='FJ'>Fiji</option><option  value='FI'>Finland</option><option selected=selected value='FR'>France</option><option  value='GA'>Gabon</option><option  value='GM'>Gambia</option><option  value='GE'>Georgia</option><option  value='DE'>Germany</option><option  value='GH'>Ghana</option><option  value='GR'>Greece</option><option  value='GL'>Greenland</option><option  value='GD'>Grenada</option><option  value='GT'>Guatemala</option><option  value='GN'>Guinea</option><option  value='GW'>Guinea-Bissau</option><option  value='GY'>Guyana</option><option  value='HT'>Haiti</option><option  value='HN'>Honduras</option><option  value='HU'>Hungary</option><option  value='IM'>Isle of Man</option><option  value='IS'>Iceland</option><option  value='IN'>India</option><option  value='ID'>Indonesia</option><option  value='IR'>Iran</option><option  value='IQ'>Iraq</option><option  value='IE'>Ireland</option><option  value='IL'>Israel</option><option  value='IT'>Italy</option><option  value='JM'>Jamaica</option><option  value='JP'>Japan</option><option  value='JO'>Jordan</option><option  value='KZ'>Kazakhstan</option><option  value='KE'>Kenya</option><option  value='KI'>Kiribati</option><option  value='KP'>Korea, North</option><option  value='KR'>Korea, South</option><option  value='ZZ'>Kosovo</option><option  value='KW'>Kuwait</option><option  value='KG'>Kyrgyzstan</option><option  value='LA'>Laos</option><option  value='LV'>Latvia</option><option  value='LB'>Lebanon</option><option  value='LS'>Lesotho</option><option  value='LR'>Liberia</option><option  value='LY'>Libya</option><option  value='LI'>Liechtenstein</option><option  value='LT'>Lithuania</option><option  value='LU'>Luxembourg</option><option  value='MK'>Macedonia</option><option  value='MG'>Madagascar</option><option  value='MW'>Malawi</option><option  value='MY'>Malaysia</option><option  value='MV'>Maldives</option><option  value='ML'>Mali</option><option  value='MT'>Malta</option><option  value='MH'>Marshall Islands</option><option  value='MR'>Mauritania</option><option  value='MU'>Mauritius</option><option  value='MX'>Mexico</option><option  value='FM'>Micronesia, Federated States of</option><option  value='MD'>Moldova</option><option  value='MC'>Monaco</option><option  value='MN'>Mongolia</option><option  value='ME'>Montenegro</option><option  value='MA'>Morocco</option><option  value='MZ'>Mozambique</option><option  value='MM'>Myanmar (Burma)</option><option  value='NA'>Namibia</option><option  value='NR'>Nauru</option><option  value='NP'>Nepal</option><option  value='GB-NIR'>Northern Ireland</option><option  value='NL'>Netherlands</option><option  value='NZ'>New Zealand</option><option  value='NI'>Nicaragua</option><option  value='NE'>Niger</option><option  value='NG'>Nigeria</option><option  value='NC'>New Caledonia</option><option  value='NO'>Norway</option><option  value='OM'>Oman</option><option  value='PK'>Pakistan</option><option  value='PW'>Palau</option><option  value='PA'>Panama</option><option  value='PG'>Papua New Guinea</option><option  value='PY'>Paraguay</option><option  value='PE'>Peru</option><option  value='PH'>Philippines</option><option  value='PL'>Poland</option><option  value='PT'>Portugal</option><option  value='QA'>Qatar</option><option  value='RO'>Romania</option><option  value='RU'>Russia</option><option  value='RW'>Rwanda</option><option  value='KN'>Saint Kitts and Nevis</option><option  value='LC'>Saint Lucia</option><option  value='VC'>Saint Vincent and the Grenadines</option><option  value='WS'>Samoa</option><option  value='SM'>San Marino</option><option  value='ST'>Sao Tome and Principe</option><option  value='SA'>Saudi Arabia</option><option  value='SN'>Senegal</option><option  value='RS'>Serbia</option><option  value='SC'>Seychelles</option><option  value='SL'>Sierra Leone</option><option  value='SG'>Singapore</option><option  value='SK'>Slovakia</option><option  value='SI'>Slovenia</option><option  value='SB'>Solomon Islands</option><option  value='SO'>Somalia</option><option  value='ZA'>South Africa</option><option  value='SS'>South Sudan</option><option  value='ES'>Spain</option><option  value='LK'>Sri Lanka</option><option  value='SD'>Sudan</option><option  value='SR'>Suriname</option><option  value='SZ'>Swaziland</option><option  value='SE'>Sweden</option><option  value='CH'>Switzerland</option><option  value='SY'>Syria</option><option  value='TW'>Taiwan</option><option  value='TJ'>Tajikistan</option><option  value='TZ'>Tanzania</option><option  value='TH'>Thailand</option><option  value='TG'>Togo</option><option  value='TO'>Tonga</option><option  value='TT'>Trinidad and Tobago</option><option  value='TN'>Tunisia</option><option  value='TR'>Turkey</option><option  value='TM'>Turkmenistan</option><option  value='TV'>Tuvalu</option><option  value='UG'>Uganda</option><option  value='UA'>Ukraine</option><option  value='AE'>United Arab Emirates</option><option  value='GB'>United Kingdom</option><option  value='US'>USA</option><option  value='UY'>Uruguay</option><option  value='UZ'>Uzbekistan</option><option  value='VU'>Vanuatu</option><option  value='VA'>Vatican City (Holy See)</option><option  value='VE'>Venezuela</option><option  value='VN'>Vietnam</option><option  value='YE'>Yemen</option><option  value='ZM'>Zambia</option><option  value='ZW'>Zimbabwe</option><option  value='HK'>Hong Kong</option><option  value='PR'>Puerto Rico</option></select>
  <script type="application/javascript">
          jQuery(document).ready(function(){

              jQuery('#user-country').on('change', function(e){

                   ajax_update_citylist();

              });

               ajax_update_citylist();

          });

          function ajax_update_citylist(){

              // COUNTRY VALUE
              var countryid = jQuery('#user-country').val();
              if(countryid == ""){
              countryid = jQuery('#user-country option:first').val();
              }

              // SET VALUE
              jQuery('#user-city').val(countryid);

              jQuery.ajax({
                  type: "POST",
                  url: ajax_site_url,
                  data: {
                      action: "get_location_states",
                      country_id: countryid,
                        state_id: "Auvergne-Rhône-Alpes",
                  },
                  success: function(response) {
                      jQuery("#user-city-select").html(response);
                  },
                  error: function(e) {

                  }
              });
          }

       </script>

                  </div>


                  <div class="col-md-6 py-2">



                 <div ppt-flex-between>

                  <label>Region</label>



                  </div>



<input type="hidden"  value="Auvergne-Rhône-Alpes" id="user-city"  />

<select class="form-control" id="user-city-select" name="city" tabindex="7" >
</select>

                  </div>


                  <div class="col-md-6 py-2">



                 <div ppt-flex-between>

                  <label>Address 1</label>



                  </div>



<input type="text" name="address1"  class="form-control " value="9065 FM 751FGJFGFG" />

                  </div>


                  <div class="col-md-6 py-2">



                 <div ppt-flex-between>

                  <label>Address 2</label>



                  </div>



<input type="text" name="address2"  class="form-control " value="FGHFGHFG" />

                  </div>


                  <div class="col-md-6 py-2">



                 <div ppt-flex-between>

                  <label>Town</label>



                  </div>



<input type="text" name="town"  class="form-control " value="Auvergne-Rhône-Alpes" />

                  </div>


                  <div class="col-md-6 py-2">



                 <div ppt-flex-between>

                  <label>Zipcode</label>



                  </div>



<input type="text" name="zip"  class="form-control " value="75474" />

                  </div>

          </div>


      </div>
  </div>
</div>




</div></div>

</div>



<div id="user-deleteaccount">


<div class="ppt-accordion" style="cursor:pointer;">

<div class="d-flex flex-row border-top p-3 py-lg-4">
<div class="w-100" ppt-flex-between>
  <div class="w-100 btn-show">
    <div class="fs-6 text-600 ">
    Delete Account      </div>
  </div>
  <div ppt-icon-32 class="hide-show btn-show">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>    </div>
   <div ppt-icon-32 class="show-hide btn-show">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>    </div>
</div>
</div>


<div class="hide border-top p-3">


<div class="row">
  <div class="col-md-12">

      </div>
  <div class="col-md-12">

      <div class="py-3">

          <div class="row">


                  <div class="col-md-12 py-2">





<div ppt-border1 class="p-3">
      <p>We're really sad to see you go, but we understand that situations change. </p>
      <p>Click to 'delete account' button below to confirm you wish to delete your account.</p>
      <p>Once processed, you must logout and remain logged out for 30 days.</p>
      <button data-ppt-btn class="btn-system logoutm2" type="button" onclick="process_delete();">Delete Account</button>
      <a href="https://es10.premiummod.com/wp-login.php?action=logout&amp;redirect_to=https%3A%2F%2Fes10.premiummod.com&amp;_wpnonce=5674d8f02a" data-ppt-btn class="btn-danger logoutmee" style="display:none">Logout </a>




</div>
      <script>

function process_delete_cancel(){


jQuery.ajax({
      type: "POST",
      url: 'https://es10.premiummod.com/',
      dataType: 'json',
      data: {
          action: "delete_account_cancel",

      },
      success: function(response) {

          if(response.status == "ok"){
           jQuery(".logoutm3").hide();
          jQuery(".deletemealert").hide();
          alert("Cancelled Successfully.");


          }else{

          }
      },
      error: function(e) {
          console.log(e)
      }
  });
}
function process_delete(){

jQuery.ajax({
      type: "POST",
      url: 'https://es10.premiummod.com/',
      dataType: 'json',
      data: {
          action: "delete_account",

      },
      success: function(response) {

          if(response.status == "ok"){

          jQuery(".logoutmee").show();

          jQuery(".logoutm2").hide();

          alert("Account set for deletion - Please logout");


          }else{

          }
      },
      error: function(e) {
          console.log(e)
      }
  });
}

</script>

                  </div>

          </div>


      </div>
  </div>
</div>




</div></div>

</div>




<button class="btn-primary btn-lg mt-4" type="submit" id="savemydetailsbutton" data-ppt-btn>Save Changes</button>




</form>
<script>
function ppt_validate_new_user(){

  result = ppt_form_validation('.user_form');
  if(result == 0){

      jQuery(".ppt-accordion").addClass("show");

      jQuery("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
  }
  return true;
}

</script>


      </div>
    </div>
  </div>

<script>




function AccountMenuToggle(){

jQuery('#_account_menuitems').toggleClass("hide");


}
function AccountMenuOff(){
jQuery('#_account_menuitems').addClass("hide");
jQuery('.account-right-top').hide();
}
function AccountMenuOn(){
jQuery('#_account_menuitems').removeClass("hide");

jQuery('.account-right-top').show();
}
jQuery(window).on('resize',function () {

	var wins = jQuery(window).width();
	if (wins  < 1200){

	if(jQuery('#menutopx').hasClass("show")){

	}else{
	AccountMenuOff();
	}


	}else{
	AccountMenuOn();
	}
});
jQuery(window).on('load',function () {

	var wins = jQuery(window).width();
	if (wins  < 1200){
	AccountMenuOff();
	}else{
	AccountMenuOn();
	}

});
</script>
<style>


@media (min-width: 1200px) {
.account-left > [ppt-box]  { min-width:355px; max-width:355px; margin: -1px; }
.account-left {  background:red; }
}

@media (min-width: 575.98px) {
.account-right { border-bottom:0px!important; }
}
@media (max-width: 1200px) {
.account-left { margin: -1px; }
.account-right { margin: -1px; border-top: 0px!important;; }
}

.account-right { margin-right: -1px;    margin-top: -1px; }
#_account_menuitems.hide [ppt-list-item]  { display:none; }

.hover-bg-light:hover, .hover-bg-light.active { background:#fbfbfb; }

</style>
</div>
</div>



@endsection
