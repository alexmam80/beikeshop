<?php

/**
 * order.php
 *
 * @copyright  2022 beikeshop.com - All Rights Reserved
 * @link       https://beikeshop.com
 * @author     Edward Yang <yangjin@guangda.work>
 * @created    2022-08-02 14:22:41
 * @modified   2022-08-02 14:22:41
 */

return [
    // Titlu
    'heading_title' => 'Ghid pentru începători',

    // File
    'tab_basic'         => 'Setări de bază',
    'tab_language'      => 'Limbă și monedă',
    'tab_product'       => 'Creare produs',
    'tab_theme'         => 'Design magazin',
    'tab_paid_shipping' => 'Plată și livrare',
    'tab_mail'          => 'Configurare e-mail',

    // Text
    'text_extension'  => 'Extensie',
    'text_success'    => 'Succes: Ghidul pentru începători a fost actualizat!',
    'text_edit'       => 'Editare ghid pentru începători',
    'text_view'       => 'Vezi detalii...',
    'text_greeting'   => 'Felicitări, BeikeShop a fost instalat cu succes pe site-ul dvs.!',
    'text_greeting_1' => 'Vă vom ajuta cu câteva setări de bază pentru a înțelege rapid funcționalitățile BeikeShop și a începe să îl utilizați eficient!',
    'text_basic_1'    => 'Mai întâi, în setările sistemului, puteți configura următoarele informații importante:',
    'text_language_1' => 'BeikeShop suportă mai multe limbi și valute. Înainte de a crea primul produs, puteți selecta limba și moneda implicită în interfața magazinului.',
    'text_language_2' => 'Dacă aveți nevoie doar de o singură limbă și monedă, puteți șterge celelalte opțiuni pentru a evita completarea informațiilor în mai multe limbi.',
    'text_product_1'  => 'La instalare, vor fi importate automat câteva produse demo. Puteți încerca <a href="' . admin_route('products.create') . '">să creați produse</a>!',
    'text_product_2'  => 'BeikeShop oferă un sistem puternic de gestionare a produselor, inclusiv: <a href="' . admin_route('categories.index') . '">Categorii</a>, <a href="' . admin_route('brands.index') . '">Gestionare branduri</a>, produse cu specificații multiple, <a href="' . admin_route('multi_filter.index') . '">Filtrare avansată</a>, <a href="' . admin_route('attributes.index') . '">Atribute produs</a> și altele.',
    'text_theme_1'    => 'Sistemul vine cu o temă implicită. Dacă aceasta nu corespunde nevoilor dvs., puteți accesa <a href="' . admin_route('marketing.index', [' type' => 'theme']) . '">Piața de pluginuri</a> pentru a achiziționa alte teme.',
    'text_theme_2'    => 'Pagina principală este compusă din module configurabile. Este posibil să fie necesară ajustarea modulelor prin sistemul de layout.',
    'text_theme_3'    => 'Dacă utilizați aplicația, vă oferim și o funcție specială pentru <a href="' . admin_route('design_app_home.index') . '">design-ul paginii principale a aplicației</a>.',
    'text_pay_1'      => 'BeikeShop suportă metode populare de plată internaționale, precum PayPal și Stripe. Trebuie să activați și configurați metoda de plată înainte de a începe să primiți comenzi.',
    'text_pay_2'      => 'Notă: Activarea anumitor metode de plată poate dura mai mult. În China, unele metode necesită înregistrarea unui domeniu.',
    'text_pay_3'      => 'De asemenea, trebuie să configurați metode de livrare. Sistemul oferă un modul gratuit pentru tarif fix de livrare.',
    'text_pay_4'      => 'Accesați BeikeShop <a href="' . admin_route('marketing.index') . '">„Piața de pluginuri”</a> pentru a descărca mai multe metode de plată și livrare!',
    'text_mail_1'     => 'Notificările prin e-mail pot informa clienții despre starea comenzii, precum și pentru înregistrare și recuperarea parolei.',
    'text_mail_2'     => 'Puteți configura SMTP conform nevoilor afacerii dvs., iar sistemul suportă trimiterea prin Sendmail și alte servicii.',

    // Butoane
    'button_setting_general' => 'Setări generale site',
    'button_setting_store'   => 'Nume site',
    'button_setting_logo'    => 'Schimbare logo',
    'button_setting_option'  => 'Setări opțiuni',
    'button_setting'         => 'Toate setările sistemului',
    'button_language'        => 'Gestionare limbi',
    'button_currency'        => 'Gestionare monede',
    'button_product'         => 'Vizualizare produse',
    'button_product_create'  => 'Creare produs',
    'button_theme_pc'        => 'Setări temă PC',
    'button_theme_h5'        => 'Setări temă mobilă',
    'button_theme'           => 'Toate temele',
    'button_layout'          => 'Gestionare layout',
    'button_paying'          => 'Metodă de plată',
    'button_shipping'        => 'Metodă de livrare',
    'button_mail'            => 'Setări e-mail',
    'button_sms'             => 'Configurare SMS',
    'button_hide'            => 'Nu mai arăta',
];

