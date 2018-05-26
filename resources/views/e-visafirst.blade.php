@extends('layouts.master')

@section('middle-content')

<section class="banner b1 inner-banner" id="home">
    <!-- //header -->
    <div class="container">
        <h3 class="inner-title">About</h3>
    </div>
</section>
<!-- //banner -->
<!-- breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/')}}">Apply Visa</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Application Form</li>
    </ol>
</nav>
<!-- //breadcrumb -->
<section class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form class="" method="POST" action="{{url('/employee/create')}}" enctype='multipart/form-data'>
                {{ csrf_field()}}

                <div class="form-group{{$errors->has('application_type')?' has-error':'' }} field">
                    <div class="input-box" style="border-top:0px">
                        <select class="validate-select" style="width:540px;height:36px!important;border-radius:3px!important;" name="application_type" title="Country">
                            <option value="">Select Application Type </option>
                            <option value="Normal Processing">Normal Processing (Processing Time 4 to 7 Business Days)</option>
                            <option value="Urgent Processing">Urgent Processing (Processing Time Maximum 3 Business Days)</option>
                        </select>
                    </div>
                </div>

                <div class="{{ $errors->has('firstname') ? ' has-error' : ''}} "><label for="firstname">First Name</label>
                    <input type="text" pattern='^([a-zA-Z\s]+)' class="form-control " value="{{old('firstname')}}" placeholder="First Name" id="firstname" minlength="3" maxlength="30" name='firstname' title="First Name should be alphabetically only and atleast 3 characters long  ." required>
                    <i class="glyphicon glyphicon-user"></i>
                    @if ($errors->has('firstname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('firstname') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="{{ $errors->has('middlename') ? ' has-error' : ''}} "><label for="middlename">Middle Name</label>
                    <input type="text" pattern='^([a-zA-Z\s]+)' class="form-control " value="{{old('middlename')}}" placeholder="Middle" id="middlename" minlength="3" maxlength="30" name='middlename' title="Middle Name should be alphabetically only and atleast 3 characters long  ." required>
                    <i class="glyphicon glyphicon-user"></i>
                    @if ($errors->has('middlename'))
                    <span class="help-block">
                        <strong>{{ $errors->first('middlename') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="{{ $errors->has('lastname') ? ' has-error' : ''}} "><label for="lastname">Last Name</label>
                    <input type="text" pattern='^([a-zA-Z\s]+)' class="form-control " value="{{old('lastname')}}" placeholder="Last Name" id="lastname" minlength="3" maxlength="30" name='lastname' title="Last Name should be alphabetically only and atleast 3 characters long  ." required>
                    <i class="glyphicon glyphicon-user"></i>
                    @if ($errors->has('lastname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group{{$errors->has('passport_type')?' has-error':'' }} field">
                    <div class="input-box" style="border-top:0px">
                        <select class="validate-select" style="width:540px;height:36px!important;border-radius:3px!important;" name="passport_type" title="Passport Type">
                            <option value="">Select Passport Type </option>
                            <option value="Ordinary Passport">Ordinary Passport</option>
                        </select>
                    </div>
                </div>
                <div class="form-group{{$errors->has('country')?' has-error':'' }} field">
                    <div class="input-box" style="border-top:0px">
                        <select id="billing:country_id" class="validate-select" style="width:540px;height:36px!important;border-radius:3px!important;" name="country" title="Country">
                            <option value="">Select Nationality</option>
                            <option value="ALB | ALBANIA" title="ALBANIA"> ALBANIA</option>
                            <option value="AIA | ANGUILLA" title="ANGUILLA"> ANGUILLA</option>
                            <option value="AND | ANDORRA" title="ANDORRA"> ANDORRA</option>
                            <option value="AGO | ANGOLA">ANGOLA</option><option value="ATG | ANTIGUA AND BARBADOS" title="ANTIGUA AND BARBADOS"> ANTIGUA AND BARBADOS</option><option value="ARG | ARGENTINA" title="ARGENTINA"> ARGENTINA</option><option value="ARM | ARMENIA" title="ARMENIA"> ARMENIA</option><option value="ABW | ARUBA" title="ARUBA"> ARUBA</option><option value="AUS | AUSTRALIA" title="AUSTRALIA"> AUSTRALIA</option><option value="AUT | AUSTRIA" title="AUSTRIA"> AUSTRIA</option><option value="AZE | AZERBAIJAN">AZERBAIJAN</option><option value="BHS | BAHAMAS" title="BAHAMAS"> BAHAMAS</option><option value="BRB | BARBADOS" title="BARBADOS"> BARBADOS</option><option value="BEL | BELGIUM" title="BELGIUM"> BELGIUM</option><option value="BOL | BOLIVIA" title="BOLIVIA"> BOLIVIA</option><option value="BIH | BOSNIA" title="BOSNIA"> BOSNIA</option><option value="BWA | BOTSWANA" title="BOTSWANA"> BOTSWANA</option><option value="BLZ | BELIZE" title="BELIZE"> BELIZE</option><option value="BRA | BRAZIL" title="BRAZIL"> BRAZIL</option><option value="BRN | BRUNEI" title="BRUNEI"> BRUNEI</option><option value="BGR | BULGARIA" title="BULGARIA"> BULGARIA</option><option value="BDI | BURUNDI">BURUNDI</option><option value="KHM | CAMBODIA" title="CAMBODIA"> CAMBODIA</option><option value="CMR | CAMEROON">CAMEROON</option><option value="CAN | CANADA" title="CANADA"> CANADA</option><option value="CPV | CAPE VERDE ISLANDS" title="CAPE VERDE ISLANDS"> CAPE VERDE ISLANDS</option><option value="CYM | CAYMAN ISLANDS" title="CAYMAN ISLANDS"> CAYMAN ISLANDS</option><option value="CHL | CHILE" title="CHILE"> CHILE</option>
                            <!-- <option value="CHN-CHINA" title="CHINA-CHINA"> CHINA-CHINA</option> -->
                            <option value="CHN- SAR HONGKONG" title="CHINA- SAR HONGKONG">CHINA- SAR HONGKONG</option>
                            <option value="CHN- SAR MACA" title="CHINA- SAR MACAU"> CHINA- SAR MACAU</option>
                            <option value="COK | COOK ISLANDS" title="COOK ISLANDS"> COOK ISLANDS</option>
                            <option value="COL | COLOMBIA" title="COLOMBIA"> COLOMBIA</option><option value="HRV | CROATIA" title="CROATIA"> CROATIA</option><option value="COM | COMOROS" title="COMOROS"> COMOROS</option><option value="CUB | CUBA" title="CUBA"> CUBA</option><option value="CZE | CZECH" title="CZECH"> CZECH</option><option value="DNK | DENMARK" title="DENMARK"> DENMARK</option><option value="CRI | COSTA RICA" title="COSTA RICA"> COSTA RICA</option><option value="CYP | CYPRUS">CYPRUS</option><option value="DJI | DJIBOUTI" title="DJIBOUTI"> DJIBOUTI</option><option value="DMA | DOMINICA" title="DOMINICA"> DOMINICA</option><option value="DOM | DOMINICAN REPUBLIC" title="DOMINICAN REPUBLIC"> DOMINICAN REPUBLIC</option><option value="TLS | EAST TIMOR" title="EAST TIMOR"> EAST TIMOR</option><option value="ECU | ECUADOR" title="ECUADOR"> ECUADOR</option><option value="SLV | EL SALVADOR" title="EL SALVADOR"> EL SALVADOR</option><option value="ERI | ERITREA" title="ERITREA"> ERITREA</option><option value="EST | ESTONIA" title="ESTONIA"> ESTONIA</option><option value="FJI | FIJI" title="FIJI"> FIJI</option><option value="FIN | FINLAND" title="FINLAND"> FINLAND</option><option value="FRA | FRANCE" title="FRANCE"> FRANCE</option><option value="GAB | GABON" title="GABON"> GABON</option><option value="GMB | GAMBIA" title="GAMBIA"> GAMBIA</option><option value="GEO | GEORGIA" title="GEORGIA"> GEORGIA</option><option value="DEU | GERMANY" title="GERMANY"> GERMANY</option><option value="GHA | GHANA" title="GHANA"> GHANA</option><option value="GRC | GREECE" title="GREECE"> GREECE</option><option value="GRD | GRENADA" title="GRENADA"> GRENADA</option><option value="GUY | GUYANA" title="GUYANA"> GUYANA</option><option value="GTM | GUATEMALA" title="GUATEMALA"> GUATEMALA</option><option value="GIN | GUINEA" title="GUINEA"> GUINEA</option><option value="HTI | HAITI" title="HAITI"> HAITI</option><option value="VAT | HOLY SEE (VATICAN)" title="HOLY SEE (VATICAN)"> HOLY SEE (VATICAN)</option><option value="HND | HONDURAS" title="HONDURAS"> HONDURAS</option><option value="HUN | HUNGARY" title="HUNGARY"> HUNGARY</option><option value="ISL | ICELAND" title="ICELAND"> ICELAND</option><option value="IDN | INDONESIA" title="INDONESIA"> INDONESIA</option><option value="ISR | ISRAEL" title="ISRAEL"> ISRAEL</option><option value="IRL | IRELAND" title="IRELAND"> IRELAND</option><option value="ITA | ITALY">ITALY</option><option value="JAM | JAMAICA" title="JAMAICA"> JAMAICA</option><option value="JPN | JAPAN" title="JAPAN"> JAPAN</option><option value="JOR | JORDAN" title="JORDAN"> JORDAN</option><option value="KEN | KENYA" title="KENYA"> KENYA</option><option value="KIR | KIRIBATI" title="KIRIBATI"> KIRIBATI</option><option value="KOR | KOREA(REPUBLIC OF)" title="KOREA(REPUBLIC OF)"> KOREA(REPUBLIC OF)</option><option value="LAO | LAOS" title="LAOS"> LAOS</option><option value="LVA | LATVIA" title="LATVIA"> LATVIA</option><option value="LSO | LESOTHO" title="LESOTHO"> LESOTHO</option><option value="LBR | LIBERIA" title="LIBERIA"> LIBERIA</option><option value="LIE | LIECHTENSTEIN" title="LIECHTENSTEIN"> LIECHTENSTEIN</option><option value="LTU | LITHUANIA" title="LITHUANIA"> LITHUANIA</option><option value="LUX | LUXEMBOURG" title="LUXEMBOURG"> LUXEMBOURG</option><option value="MDG | MADAGASCAR" title="MADAGASCAR"> MADAGASCAR</option><option value="MWI | MALAWI" title="MALAWI"> MALAWI</option> <option value="MLI | MALI">MALI</option><option value="MHL | MARSHALL ISLANDS" title="MARSHALL ISLANDS"> MARSHALL ISLANDS</option><option value="MLT | MALTA" title="MALTA"> MALTA</option><option value="MYS | MALAYSIA" title="MALAYSIA"> MALAYSIA</option><option value="MNG | MONGOLIA" title="MONGOLIA"> MONGOLIA</option><option value="MOZ | MOZAMBIQUE" title="MOZAMBIQUE"> MOZAMBIQUE</option><option value="MUS | MAURITIUS" title="MAURITIUS"> MAURITIUS</option><option value="MEX | MEXICO" title="MEXICO"> MEXICO</option><option value="FSM | MICRONESIA (FEDERATED STATES OF)" title="MICRONESIA (FEDERATED STATES OF)"> MICRONESIA (FEDERATED STATES OF)</option><option value="MDA | MOLDOVA" title="MOLDOVA"> MOLDOVA</option><option value="MNE | MONTENEGRO" title="MONTENEGRO"> MONTENEGRO</option><option value="MSR | MONTSERRAT" title="MONTSERRAT"> MONTSERRAT</option><option value="MMR | MYANMAR" title="MYANMAR"> MYANMAR</option><option value="NAM | NAMIBIA" title="NAMIBIA"> NAMIBIA</option><option value="NRU | NAURU" title="NAURU"> NAURU</option><option value="NZL | NEW ZEALAND" title="NEW ZEALAND"> NEW ZEALAND</option><option value="NIC | NICARAGUA" title="NICARAGUA"> NICARAGUA</option><option value="NER | NIGER">NIGER</option><option value="NIU | NIUE ISLAND" title="NIUE ISLAND"> NIUE ISLAND</option><option value="NOR | NORWAY" title="NORWAY"> NORWAY</option><option value="NLD | NETHERLANDS" title="NETHERLANDS"> NETHERLANDS</option><option value="OMN | OMAN" title="OMAN"> OMAN</option><option value="PLW | PALAU" title="PALAU"> PALAU</option><option value="PSE | PALESTINIAN" title="PALESTINIAN"> PALESTINIAN</option><option value="PAN | PANAMA" title="PANAMA"> PANAMA</option><option value="PER | PERU" title="PERU"> ANGUILLA</option><option value="POL | POLAND" title="POLAND"> POLAND</option><option value="PRT | PORTUGAL" title="PORTUGAL"> PORTUGAL</option><option value="PNG | PAPUA NEW GUINEA" title="PAPUA NEW GUINEA"> PAPUA NEW GUINEA</option><option value="PRY | PARAGUAY" title="PARAGUAY"> PARAGUAY</option><option value="PHL | PHILIPPINES" title="PHILIPPINES"> PHILIPPINES</option><option value="MKD | REPUBLIC OF MACEDONIA" title="REPUBLIC OF MACEDONIA"> REPUBLIC OF MACEDONIA</option><option value="ROU | ROMANIA" title="ROMANIA"> ROMANIA</option><option value="RUS | RUSSIAN FEDERATION" title="RUSSIAN FEDERATION"> RUSSIAN FEDERATION</option><option value="RWA | RWANDA">RWANDA</option><option value="WSM | SAMOA" title="SAMOA"> SAMOA</option><option value="SMR | SAN MARINO" title="SAN MARINO"> SAN MARINO</option><option value="SEN | SENEGAL" title="SENEGAL"> SENEGAL</option><option value="SRB | SERBIA" title="SERBIA"> SERBIA</option><option value="SLE | SIERRA LEONE">SIERRA LEONE</option><option value="SGP | SINGAPORE" title="SINGAPORE"> SINGAPORE</option><option value="SVK | SLOVAK REPUBLIC" title="SLOVAK REPUBLIC"> SLOVAK REPUBLIC</option><option value="SLB | SOLOMON ISLANDS" title="SOLOMON ISLANDS"> SOLOMON ISLANDS</option><option value="ZAF | SOUTH AFRICA" title="SOUTH AFRICA"> SOUTH AFRICA</option>
                            <!-- <option value="LKA | SRI LANKA" title="SRI LANKA"> SRI LANKA</option> -->
                            <option value="SYC | SEYCHELLES" title="SEYCHELLES"> SEYCHELLES</option>
                            <option value="SVN | SLOVENIA" title="SLOVENIA"> SLOVENIA</option><option value="ESP | SPAIN" title="SPAIN"> SPAIN</option><option value="LCA | SAINT LUCIA" title="SAINT LUCIA"> SAINT LUCIA</option><option value="VCT | ST VINCENT &amp; THE GRENADINES" title="ST VINCENT &amp; THE GRENADINES"> ST VINCENT &amp; THE GRENADINES</option><option value="SUR | SURINAME" title="SURINAME"> SURINAME</option><option value="SWZ | SWAZILAND" title="SWAZILAND"> SWAZILAND</option><option value="SWE | SWEDEN" title="SWEDEN"> SWEDEN</option><option value="KNA | St. KITTS &amp; NEVIS" title="St. KITTS &amp; NEVIS"> St. KITTS &amp; NEVIS</option><option value="CHE | SWITZERLAND" title="SWITZERLAND"> SWITZERLAND</option><option value="TWN | TAIWAN" title="TAIWAN"> TAIWAN</option><option value="TJK | TAJIKISTAN" title="TAJIKISTAN"> TAJIKISTAN</option><option value="TZA | TANZANIA" title="TANZANIA"> TANZANIA</option><option value="TCA | TURKS &amp; CAICOS ISLAND" title="TURKS &amp; CAICOS ISLAND"> TURKS &amp; CAICOS ISLAND</option><option value="THA | THAILAND" title="THAILAND"> THAILAND</option><option value="TTO | TRINIDAD AND TOBAGO" title="TRINIDAD AND TOBAGO"> TRINIDAD AND TOBAGO </option><option value="TON | TONGA" title="TONGA"> TONGA</option><option value="TUV | TUVALU" title="TUVALU"> TUVALU</option><option value="UKR | UKRAINE" title="UKRAINE"> UKRAINE</option> <option value="UZB | UZBEKISTAN">UZBEKISTAN</option><option value="ARE | UNITED ARAB EMIRATES" title="UNITED ARAB EMIRATES"> UNITED ARAB EMIRATES</option><option value="GBR | UNITED KINGDOM" title="UNITED KINGDOM"> UNITED KINGDOM</option>
                            <option value="URY | URUGUAY" title="URUGUAY"> URUGUAY</option><option value="USA | UNITED STATES OF AMERICA" title="UNITED STATES OF AMERICA"> UNITED STATES OF AMERICA</option> <option value="UZB | UZBEKISTAN">UZBEKISTAN</option><option value="VUT | VANUATU" title="VANUATU"> VANUATU</option><option value="VEN | VENEZUELA" title="VENEZUELA"> VENEZUELA</option><option value="VNM | VIETNAM" title="VIETNAM"> VIETNAM</option><option value="ZMB" title="ZAMBIA"> ZAMBIA</option><option value="ZWE" title="ZIMBABWE"> ZIMBABWE</option>

                        </select>
                    </div>
                </div>

                <div class="form-group{{$errors->has('email')?' has-error': ''}} field">
                    <input type="email" class="form-control field__input one-column-form__input--text" value="{{old('email')}}" title='Please enter a valid email address' placeholder="Email" id="input-email" maxlength="100" name='email' pattern='^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$' required>	
                    <i class="glyphicon glyphicon-envelope"></i>
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group field">
                    <input type="text" class="form-control field__input one-column-form__input--text dob"   placeholder="Date Of Birth" pattern='[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])' title='Date should be in yyyy-mm-dd format.' name='dob' value="{{old('dob')}}" readonly required>
                    <i class="glyphicon glyphicon-calendar"></i>	
                </div>
                <div class="form-group{{$errors->has('mobile_no')?' has-error':'' }} field">
                    <input type="text" class="form-control field__input one-column-form__input--text numeric" placeholder="Mobile Number" id="input-email" name='mobile_no' pattern="[0-9]{10}" maxlength="10" title='Mobile number should be of 10 digit.' value="{{old('mobile_no')}}" required>
                    <i class="glyphicon glyphicon-earphone"></i>
                    @if ($errors->has('mobile_no'))
                    <span class="help-block">
                        <strong>{{ $errors->first('mobile_no') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group{{$errors->has('password')?' has-error':'' }} field">
                    <input type="password" class="form-control field__input one-column-form__input--text" placeholder="Password" id="password" title='Password must contain atlest one uppercase letter,lowercase and special symbol' name='password' minlength="6" maxlength="15" pattern="(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                    <i class="glyphicon glyphicon-lock"></i>

                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group {{$errors->has('country')?' has-error':'' }} field">
                    <input type="text" class="form-control field__input one-column-form__input--text" placeholder="Employee Code" id="input-email" pattern="[0-9]{1,}" title='Employee code should be integer.' name='company_emp_code' value="{{old('emp_code')}}" maxlength="20" required>
                    <i class="glyphicon glyphicon-briefcase"></i>
                    @if ($errors->has('emp_code'))
                    <span class="help-block">
                        <strong>{{ $errors->first('emp_code') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group{{$errors->has('country')?' has-error':'' }} field">
                    <div class="input-box" style="border-top:0px">
                        <i class="fa fa-flag"></i>
                        <select id="billing:country_id" class="validate-select" style="height:36px!important;border-radius:0px!important;" name="country" title="Country">
                            <option value=""> </option>
                            <option value="india">India</option>
                            <option value="china">China</option>
                            <option value="usa">United States of America</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary create-record-btn center-block" type="submit">Add Employee</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection

