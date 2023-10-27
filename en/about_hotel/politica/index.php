<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Политика персональных данных");
?>


    <section class="main-block detail-page service-page">

        <div class="konference-detail-nomer-slider">
            <img src="/design/img/about-rules.png" alt="" title=""/>
        </div>
        <div class="detail-nomer-content konference">

            <? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/breadcrumbs.php"); ?>

            <div class="rooms-list-item-title">Personal data policy</div>

            <div class="rooms-list-text">
                <p>Continent Business Hotel Personal Data Processing and Protection Policy</p>
            </div>

        </div>

        <div class="header-line service-style">

            <div class="header-line-left">
                <div class="main-menu">
                    <a href="#"><span class="icon icon-buter"></span></a>
                </div>
                <div class="main-phone">
                    <span class="lg-view"><? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/phone-link.php"), array(), array("MODE" => "html")); ?></span>
                    <a class="md-view" href="/en/rooms/">Rooms</a>
                </div>
            </div>
            <div class="header-line-center">
                <div class="logo"><a href="/en/"><img src="/design/img/logo-en.svg" alt="" title=""/></a></div>
            </div>
            <div class="header-line-right">
                <div class="header-line-socials lg-view">
                    <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-social-white.php"), array(), array("MODE" => "html")); ?>
                </div>
                <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-mobile-phone.php"), array(), array("MODE" => "html")); ?>
            </div>
        </div>

    </section>

    <section class="page-podmenu">
        <div class="wrapper-inside">
            <div class="page-podmenu-line">
                <? $APPLICATION->IncludeComponent("bitrix:menu", "podmenu-template", array(),
                    false
                ); ?>
            </div>
        </div>
    </section>

    <section class="page-rules">
        <div class="wrapper-inside">
            <div class="page-rules-container politica-page">
                <div class="page-rules-left">
                    <div class="rules-text">

                        <h3>Continent Business Hotel Personal Data Processing and Protection Policy</h3>

                        <p id="section1" class="big-text">1. General rules</p>

                        <ul>
                            <li>1.1. Petr Demchenko, an individual entrepreneur, processes personal data on a legal
                                basis.
                            </li>
                            <li>1.2. Processing of personal data is carried out in accordance with the Constitution of
                                the Russian Federation, the Federal Law “On Personal Data” N 152-ФЗ dated 27.07.2006,
                                the Decree of the Government of the Russian Federation No 687 dated September 15, 2008
                                and No 1119 dated 01.11.2012, as well as other regulations.
                            </li>
                            <li>1.3. Main concepts used in the Policy:
                                <ul>
                                    <li>Hotel — Individual entrepreneur P.V. Demchenko providing hotel services to the
                                        client;
                                    </li>
                                    <li>Client — a private entity, a consumer of hotel services, a subject of personal
                                        data;
                                    </li>
                                    <li>Hotel services — the Hotel's actions to accommodate Clients in the accommodation
                                        facility, as well as other activities regarding accommodation and stay, which
                                        include basic and additional services provided to the Client;
                                    </li>
                                    <li>Operator — a person who alone or together with other persons organizes and (or)
                                        carries out processing of personal data, as well as determines the purposes of
                                        personal data processing, the composition of personal data subject to
                                        processing, actions (operations) performed with personal data;
                                    </li>
                                    <li>Personal Data — information stored in any format relating to a private entity
                                        (subject of personal data) defined or determined on the basis of such
                                        information, which by itself or in combination with other information at the
                                        Hotel's disposal allows to identify the Client's identity;
                                    </li>
                                    <li>Processing of personal data — any action (operation) or set of actions
                                        (operations) performed with or without the use of automation means, with
                                        personal data, including collection, recording, systematization, accumulation,
                                        storage, clarification (update, change), extraction, use, transfer
                                        (distribution, provision, access), depersonalization, blocking, deletion,
                                        destruction of personal data;
                                    </li>
                                    <li>Personal data information system — a combination of information technologies and
                                        technical means contained in personal data bases and ensuring their processing;
                                    </li>
                                    <li>Personal data sharing — actions aimed at providing personal data to a certain
                                        person or a certain number of people;
                                    </li>
                                    <li>International data transfer — transfer of personal data to the territory of a
                                        foreign country to a foreign government authority, a foreign private entity or a
                                        foreign legal entity;
                                    </li>
                                    <li>Use of personal data — actions (operations) with personal data performed by the
                                        operator in order to make decisions or perform other actions that give rise to
                                        legal consequences in respect of the personal data subject or other persons or
                                        otherwise affect the rights and freedoms of the personal data subject or other
                                        people;
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <p id="section2" class="big-text">2. Client’s personal data processing policy</p>

                        <ul>
                            <li>2.1. Personal data of clients may be processed for the following purposes:
                                <ul>
                                    <li>booking rooms in the Hotel</li>
                                    <li>preparation and execution of the contract on provision of accommodation or
                                        temporary accommodation services in the Hotel.
                                    </li>
                                </ul>
                            </li>
                            <li>2.2. The Operator is not allowed to process personal data other than for the specified
                                purposes.
                            </li>
                            <li>2.3. Personal data may not be used for the purpose of causing property and moral damage
                                to citizens, hindering the exercising of rights and freedoms of citizens of the Russian
                                Federation.
                            </li>
                        </ul>

                        <p id="section3" class="big-text">3. Client’s personal data processing policy</p>

                        <ul>
                            <li>3.1. The scope and content of processed personal data strictly corresponds to the
                                specified processing purposes and is not excessive in relation to the processing
                                purposes.
                            </li>
                            <li>3.2. The Clients' personal data collected and processed by the Hotel shall include:
                                <ul>
                                    <li>Full name</li>
                                    <li>Date and place of birth</li>
                                    <li>ID data</li>
                                    <li>Registration address (place of residence)</li>
                                    <li>Contact phone number</li>
                                    <li>Information about the workplace.</li>
                                </ul>
                            </li>
                            <li>3.3. Hotel's personnel shall receive personal data upon the written consent of the
                                Client.
                            </li>
                            <li>3.4. The Hotel's employees have the right to verify the accuracy and relevance of the
                                personal data provided.
                            </li>
                            <li>3.5. When using the booking service, the following information will be collected:
                                Client's full name, telephone number and e-mail address. These data are used to clearly
                                identify the reservation once in order to provide the hotel service.
                            </li>
                        </ul>

                        <p id="section4" class="big-text">4. Client’s personal data processing policy</p>

                        <ul>
                            <li>4.1. Processing of Clients' personal data to fulfill the purposes stated consists of the
                                following possible actions: collection, storage, clarification, updating, modification,
                                use, transfer, destruction.
                            </li>
                            <li>4.2. Processing of Clients' personal data is done without using any means of automation.
                            </li>
                            <li>4.3. Only the employees of the Hotel who are authorized to work with the personal data
                                of the Clients and who have signed the Agreement on non-disclosure of personal data may
                                have access to the processing of the Clients' personal data.
                            </li>
                            <li>4.4. To follow the current legislation in the field of migration policy of the Hotel
                                transfers personal data of the Clients to the FMS with observance of the norms of
                                personal data protection.
                            </li>
                            <li>4.5 The Hotel does not give the Clients' personal data to third parties without the
                                consent of the subject of personal data, unless otherwise provided by federal law.
                            </li>
                            <li>4.6. There is no international transfer of personal data.</li>
                        </ul>

                        <p id="section5" class="big-text">5. Client’s personal data processing policy</p>

                        <ul>
                            <li>5.1. The Hotel observes confidentiality of personal data, takes legal, organizational
                                and technical measures to protect personal data from unauthorized or accidental access
                                to them, destruction, modification, blocking, copying, dissemination of personal data,
                                as well as from other unlawful actions.
                            </li>
                            <li>5.2. When processing personal data without using means of automation, the Hotel complies
                                with the requirements established by the Resolution of the Government of the Russian
                                Federation No. 687 dated September 15, 2008 “On Approval of the Regulations on the
                                peculiarities of personal data processing without using means of automation”.
                            </li>
                            <li>5.3. Responsible for the organization of personal data processing in an Individual
                                Entrepreneur P.V. Demchenko is appointed Director Anna Barchevskaya(phone: 8 (8652)
                                94-17-95.
                            </li>
                            <li>5.4. Technical protection measures used in the hotel include: fire and security alarms,
                                video surveillance and anti-virus protection.
                            </li>
                            <li>5.5. The Hotel has notified the authorized body for the protection of the rights of
                                personal data subjects about the processing of personal data in accordance with the
                                requirements established by the Federal Law “On Personal Data”.
                            </li>
                            <li>5.6. Should any unlawful actions with personal data be detected, the operator is
                                required to eliminate the violation within a period not exceeding three working days
                                from the date of such detection. The operator shall notify the personal data subject of
                                the elimination of the admitted violations.
                            </li>
                        </ul>

                        <p id="section6" class="big-text">6. Client’s Rights</p>

                        <ul>
                            <li>6.1. The Client has the right to: access to information about themselves, including
                                information confirming the fact of personal data processing, the purpose of such
                                processing, as well as other information specified in Part 7 of Article 14 of the
                                Federal Law 152-ФЗ “On Personal Data”.
                            </li>
                            <li>6.2. The subject of personal data has the right to demand from the operator to clarify
                                their personal data, block or destroy them in case the personal data are incomplete,
                                outdated, inaccurate, illegally obtained or are not necessary for the stated purpose of
                                processing, as well as to take measures provided by law to protect their rights.
                            </li>
                            <li>6.3. If the subject of personal data believes that the operator processes his personal
                                data in violation of the law or otherwise infringes his rights and freedoms, the subject
                                of personal data has the right to appeal the actions or omissions of the operator to the
                                authorized body for the protection of the rights of personal data subjects or in court.
                            </li>
                        </ul>

                        <p id="section6" class="big-text">7. Liability for violation of regulations governing the
                            processing of Clients' personal data</p>

                        <ul>
                            <li>7.1. The Hotel is responsible for the personal information in its possession and
                                establishes the personal responsibility of its employees for compliance with the
                                existing confidentiality regime.
                            </li>
                            <li>7.2. Each employee who receives for work a document containing the Client's personal
                                data is solely responsible for the safety of the data storage and confidentiality of the
                                information.
                            </li>
                            <li>7.3. The Hotel's employees are responsible for the proper handling of Customer
                                inquiries, applications and complaints, as well as for assisting in the fulfillment of
                                the requirements of competent authorities.
                            </li>
                            <li>7.4. Persons guilty of violating the norms regulating the obtaining, processing and
                                protection of Clients' personal data shall be held accountable for disciplinary,
                                administrative, civil or criminal liability in accordance with federal laws.
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="page-rules-right">
                    <div class="rules-menu">
                        <ul>
                            <li><a href="#section1">1. General rules</a></li>
                            <li><a href="#section2">2. Client’s personal data processing policy</a></li>
                            <li><a href="#section3">3. Client’s personal data processing policy</a></li>
                            <li><a href="#section4">4. Client’s personal data processing policy</a></li>
                            <li><a href="#section5">5. Client’s personal data processing policy</a></li>
                            <li><a href="#section6">6. Client’s Rights</a></li>
                            <li><a href="#section7">7. Liability for violation of regulations governing the
                                    processing of Clients' personal data</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content"></div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>