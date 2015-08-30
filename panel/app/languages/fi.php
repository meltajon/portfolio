<?php

return array(
  'title' => 'Suomi',
  'direction' => 'ltr',
  'author' => 'Ilja Sillman <isillman@gmail.com>',
  'version' => '1.0.0',
  'data' => array(

    // global
    'cancel' => 'Peruuta',
    'add' => 'Lisää',
    'save' => 'Tallenna',
    'saved' => 'Tallennettu!',
    'delete' => 'Poista',
    'insert' => 'Lisää',
    'ok' => 'Ok',

    // options (sidebar)
    'options.show' => 'Näytä asetukset',
    'options.hide' => 'Piilota asetukset',

    // installation
    'installation' => 'Asennus',
    'installation.check.headline' => 'Kirby Panel asennus',
    'installation.check.text' => 'Kirby havaitsi seuraavat virheet asennuksen yhteydessä…',
    'installation.check.retry' => 'Yritä uudelleen',
    'installation.check.error' => 'Muutama ongelma löytyi!',
    'installation.check.error.accounts' => '/site/accounts edellyttää kirjoitusoikeudet',
    'installation.check.error.avatars' => '/assets/avatars edellyttää kirjoitusoikeudet',
    'installation.check.error.blueprints' => 'Ole hyvä ja lisää /site/blueprints kansio',
    'installation.check.error.content' => '/content ja kaikki sen alla olevat tiedostot ja kansiot edellyttävät kirjoitusoikeudet.',
    'installation.check.error.thumbs' => '/thumbs edellyttää kirjoitusikeudet.',
    'installation.signup.username.label' => 'Luo ensimmäinen käyttäjä',
    'installation.signup.username.placeholder' => 'Tunnus',
    'installation.signup.email.label' => 'Sähköposti',
    'installation.signup.email.placeholder' => 'nimi@osoite.fi',
    'installation.signup.password.label' => 'Salasana',
    'installation.signup.language.label' => 'Kieli',
    'installation.signup.button' => 'Luo käyttäjä',

    // login
    'login' => 'Kirjaudu',
    'login.welcome' => 'Ole hyvä ja kirjaudu sisään',
    'login.username.label' => 'Käyttäjätunnus',
    'login.password.label' => 'Salasana',
    'login.error' => 'Tunnus tai salasana on virheellinen',
    'login.button' => 'Kirjaudu',

    // logout
    'logout' => 'Kirjaudu ulos',

    // dashboard
    'dashboard' => 'Hallintapaneeli',
    'dashboard.index.pages.title' => 'Sivut',
    'dashboard.index.pages.edit' => 'Muokkaa',
    'dashboard.index.pages.add' => 'Lisää',
    'dashboard.index.site.title' => 'Sivuston URL-osoite',
    'dashboard.index.account.title' => 'Käyttäjätilisi',
    'dashboard.index.account.edit' => 'Muokkaa',
    'dashboard.index.metatags.title' => 'Sivuston asetukset',
    'dashboard.index.metatags.edit' => 'Muokkaa',
    'dashboard.index.history.title' => 'Viimeisimmät päivityksesi',
    'dashboard.index.history.text' => 'Viimeksi muokkaamasi sivut listataan tässä jotta löydät ne jatkossa helpommin.',

    // metatags
    'metatags' => 'Sivuston asetukset',
    'metatags.back' => 'Takaisin hallintapaneeliin',

    // pages
    'pages.show.settings' => 'Sivun asetukset',
    'pages.show.preview' => 'Esikatselu',
    'pages.show.changeurl' => 'Vaihda URL-osoite',
    'pages.show.delete' => 'Poista tämä sivu',
    'pages.show.subpages.title' => 'Sivut',
    'pages.show.subpages.edit' => 'Muokkaa',
    'pages.show.subpages.add' => 'Lisää',
    'pages.show.subpages.empty' => 'Tälle sivulle ei ole lisätty alasivuja',
    'pages.show.files.title' => 'Tiedostot',
    'pages.show.files.edit' => 'Muokkaa',
    'pages.show.files.add' => 'Lisää',
    'pages.show.files.empty' => 'Tälle sivulle ei ole lisätty tiedostoja',
    'pages.show.error.permissions.title' => 'Sivun muokkaamista ei ole sallittu',
    'pages.show.error.permissions.text'  => 'Ole hyvä ja tarkista kansion /content ja sen alla olevien tiedostojen kirjoitusoikeudet.',
    'pages.show.error.permissions.retry'  => 'Yritä uudelleen',
    'pages.show.error.notitle.title' => 'Tässä pohjassa ei ole nimikenttää',
    'pages.show.error.notitle.text' => 'Ole hyvä ja lisää ensin nimikenttä',
    'pages.show.error.notitle.retry' => 'Yritä uudelleen',
    'pages.show.error.form'  => 'Ole hyvä ja täytä kaikki kentät oikein.',

    'pages.add.title.label' => 'Lisää uusi sivu',
    'pages.add.title.placeholder' => 'Nimi',
    'pages.add.url.label' => 'URL-osoite',
    'pages.add.url.enter' => '(kirjoita osoite)',
    'pages.add.url.close' => 'Sulje',
    'pages.add.url.help' => 'Sallitut merkit: pienet kirjaimet a-z, 0-9 sekä väliviivat',
    'pages.add.template.label' => 'Sivupohja',
    'pages.add.error.title' => 'Otsikko puuttuu',
    'pages.add.error.template' => 'Sivupohjaa ei ole asetettu',
    'pages.add.error.max.headline' => 'Uusia sivuja ei voi enää luoda',
    'pages.add.error.max.text' => 'Nykyiselle sivulle ei voi luoda enempää alasivuja',
    'pages.url.uid.label' => 'URL-pääte',
    'pages.url.uid.label.option' => 'Luo nimen perusteella',
    'pages.url.error.exists' => 'Olemassaolevalla sivulla on jo sama URL-pääte',
    'pages.url.error.move' => 'Päätettä ei voitu muuttaa',
    'pages.delete.headline' => 'Haluatko varmasti poistaa sivun?',
    'pages.delete.error.home.headline' => 'Aloitussivua ei voi poistaa',
    'pages.delete.error.home.text' => 'Sivuston aloitussivun poistaminen ei ole mahdollista.',
    'pages.delete.error.error.headline' => 'Virhesivua ei voi poistaa',
    'pages.delete.error.error.text' => 'Virhesivun poistaminen ei ole mahdollista.',
    'pages.delete.error.children.headline' => 'Sivua ei voida poistaa',
    'pages.delete.error.children.text' => 'Tällä sivulla on alasivuja, jotka pitää poistaa ennen kuin itse sivu voidaan poistaa.',
    'pages.delete.error.blocked.headline' => 'Sivua ei voida poistaa',
    'pages.delete.error.blocked.text' => 'Tämä sivu on suojattu eikä sitä voida poistaa.',
    'pages.search.help' => 'Hae sivuja osoitteen perusteella. Voit selata hakutuloksia nuolinäppäimillä ylös tai alas, ja painamalla ENTER siirryt valitulle sivulle.',
    'pages.search.noresults' => 'Hakutermeillä ei löytynyt tuloksia.',
    'pages.error.missing' => 'Sivua ei löytynyt',

    // subpages
    'subpages' => 'Sivut',
    'subpages.index.headline' => 'Alasivut sivulla',
    'subpages.index.back' => 'Takaisin',
    'subpages.index.add' => 'Lisää uusi sivu',
    'subpages.index.add.first.text' => 'Tälle sivulle ei ole vielä lisätty alasivuja',
    'subpages.index.add.first.button' => 'Lisää alasivu',
    'subpages.index.visible' => 'Näkyvät sivut',
    'subpages.index.visible.help' => 'Raahaa piilotetut sivut tähän jotta voit tehdä niistä näkyviä tai muuttaa niiden järjestystä.',
    'subpages.index.invisible' => 'Piilotetut sivut',
    'subpages.index.invisible.help' => 'Raahaa näkyvät sivut tähän niin voit tehdä niistä piilotettuja.',
    'subpages.error.missing' => 'Sivua ei löytynyt',

    // files
    'files' => 'Tiedostot',
    'files.index.headline' => 'Tiedostot sivulla',
    'files.index.back' => 'Takaisin',
    'files.index.upload' => 'Lisää uusi tiedosto',
    'files.index.upload.first.text' => 'Tälle sivulle ei ole lisätty tiedostoja',
    'files.index.upload.first.button' => 'Lisää tiedosto',
    'files.index.edit' => 'Muokkaa',
    'files.index.delete' => 'Poista',
    'files.show.name.label' => 'Tiedostonimi',
    'files.show.info.label' => 'Tyyppi / Koko / Mitat',
    'files.show.link.label' => 'Julkinen linkki',
    'files.show.open' => 'Näytä/lisää tiedosto',
    'files.show.back' => 'Takaisin',
    'files.show.replace' => 'Korvaa',
    'files.show.delete' => 'Poista',
    'files.show.error.rename' => 'Tiedostoa ei voitu nimetä uudelleen',
    'files.show.error.form' => 'Ole hyvä ja täytä kaikki kentät oikein',
    'files.upload.drop' => 'Raahaa tiedostot tähän…',
    'files.upload.click' => '…tai valitse tiedosto',
    'files.replace.drop' => 'Raahaa tiedosto tähän…',
    'files.replace.click' => '…tai valitse uusi tiedosto',
    'files.replace.error.type' => 'Uuden ja korvattavan tiedoston tulee olla samaa tyyppiä',
    'files.delete.headline' => 'Haluatko varmasti poistaa tiedoston?',
    'files.error.missing.page' => 'Sivua ei löytynyt',
    'files.error.missing.file' => 'Tiedostoa ei löytynyt',

    // users
    'users' => 'Käyttäjät',
    'users.index.headline' => 'Kaikki käyttäjät',
    'users.index.add' => 'Lisää uusi käyttäjä',
    'users.index.edit' => 'Muokkaa',
    'users.index.delete' => 'Poista',
    'users.form.username.label' => 'Käyttäjätunnus',
    'users.form.username.placeholder' => 'Tunnuksesi',
    'users.form.username.help' => 'Sallitut merkit: pienet kirjaimet a-z, 0-9 sekä väliviivat',
    'users.form.username.readonly' => 'Tunnuksen muuttamista ei ole sallittu',
    'users.form.firstname.label' => 'Etunimi',
    'users.form.lastname.label' => 'Sukunimi',
    'users.form.email.label' => 'Sähköposti',
    'users.form.email.placeholder' => 'nimi@osoite.fi',
    'users.form.password.label' => 'Salasana',
    'users.form.password.confirm.label' => 'Salasana uudelleen',
    'users.form.password.new.label' => 'Uusi salasana',
    'users.form.password.new.confirm.label' => 'Uusi salasana uudelleen',
    'users.form.password.new.help' => 'Jätä tyhjäksi jos et halua vaihtaa salasanaasi',
    'users.form.language.label' => 'Kieli',
    'users.form.role.label' => 'Käyttäjätaso',
    'users.form.options.headline' => 'Tilinhallinta',
    'users.form.options.message' => 'Lähetä sähköposti',
    'users.form.options.delete' => 'Poista tili',
    'users.form.avatar.headline' => 'Profiilikuva',
    'users.form.avatar.upload' => 'Lisää profiilikuva',
    'users.form.avatar.replace' => 'Vaihda profiilikuva',
    'users.form.avatar.delete' => 'Poista profiilikuva',
    'users.form.back' => 'Takaisin käyttäjähallintaan',
    'users.form.error.password.confirm' => 'Varmista salasana',
    'users.form.error.update' => 'Käyttäjätilin päivitys epäonnistui',
    'users.form.error.create' => 'Käyttäjätilin luominen epäonnistui',
    'users.form.error.permissions.title' => 'Käyttäjähakemistoon ei voitu kirjoittaa',
    'users.form.error.permissions.text' => 'Ole hyvä ja varmista että /site/accounts on olemassa ja tarkista sen kirjoitusoikeudet.',
    'users.delete.headline' => 'Haluatko varmsti poistaa käyttäjän?',
    'users.delete.error' => 'Käyttäjää ei voitu poistaa',
    'users.avatar.drop' => 'Raahaa profiilikuva tähän…',
    'users.avatar.click' => '…tai valitse tiedosto',
    'users.avatar.error.type' => 'Kuvien tulee olla JPG, PNG tai GIF muodossa',
    'users.avatar.error.folder.headline' => 'Kansio avatar vaatii kirjoitusoikeudet',
    'users.avatar.error.folder.text' => 'Profiilikuvan lisääminen edellyttää <strong>/assets/avatars</strong> kansion luomista ja kirjoitusoikeuksia.',
    'users.avatar.delete.error' => 'Profiilikuvaa ei voitu poistaa',
    'users.avatar.delete.success' => 'Profiilikuva poistettiin',
    'users.error.missing' => 'Käyttäjää ei löytynyt',

    // form fields
    'fields.required' => 'Pakollinen',
    'fields.date.label' => 'Päivämäärä',
    'fields.date.months' => array(
      'Tammikuu',
      'Helmikuu',
      'Maaliskuu',
      'Huhtikuu',
      'Toukokuu',
      'Kesäkuu',
      'Heinäkuu',
      'Elokuu',
      'Syyskuu',
      'Lokakuu',
      'Marraskuu',
      'Joulukuu'
    ),
    'fields.date.weekdays' => array(
      'Sunnuntai',
      'Maanantai',
      'Tiistai',
      'Keskiviikko',
      'Torstai',
      'Perjantai',
      'Lauantai'
    ),
    'fields.date.weekdays.short' => array(
      'Su',
      'Ma',
      'Ti',
      'Ke',
      'To',
      'Pe',
      'La'
    ),
    'fields.email.label' => 'Sähköposti',
    'fields.email.placeholder' => 'nimi@osoite.fi',
    'fields.number.label' => 'Numero',
    'fields.number.placeholder' => '#',
    'fields.page.label' => 'Sivu',
    'fields.page.placeholder' => 'polku/sivulle',
    'fields.password.label' => 'Salasana',
    'fields.structure.add' => 'Lisää',
    'fields.structure.add.first' => 'Lisää ensimmäinen kirjoitus',
    'fields.structure.empty' => 'Ei kirjoituksia toistaiseksi.',
    'fields.structure.cancel' => 'Peruuta',
    'fields.structure.save' => 'Tallenna',
    'fields.structure.edit' => 'Muokkaa',
    'fields.structure.delete' => 'Poista',
    'fields.tags.label' => 'Avainsanat',
    'fields.tel.label' => 'Puhelin',
    'fields.textarea.buttons.bold.label' => 'Lihavointi',
    'fields.textarea.buttons.bold.text' => 'Lihavointi',
    'fields.textarea.buttons.italic.label' => 'Kursivointi',
    'fields.textarea.buttons.italic.text' => 'Kursivointi',
    'fields.textarea.buttons.link.label' => 'Linkki',
    'fields.textarea.buttons.email.label' => 'Sähköposti',
    'fields.textarea.buttons.image.label' => 'Kuva',
    'fields.textarea.buttons.file.label' => 'Tiedosto',
    'fields.toggle.yes' => 'Kyllä',
    'fields.toggle.no' => 'Ei',
    'fields.toggle.on' => 'Päällä',
    'fields.toggle.off' => 'Pois päältä',

    // textarea overlays
    'editor.link.url.label' => 'Lisää URL-osoite',
    'editor.link.text.label' => 'Linkin teksti',
    'editor.link.text.help' => 'Linkin teksti on valinnainen',
    'editor.email.address.label' => 'Lisää sähköpostiosoite',
    'editor.email.address.placeholder' => 'nimi@osoite.fi',
    'editor.email.text.label' => 'Linkin testi',
    'editor.email.text.help' => 'Linkin teksti on valinnainen',
    'editor.file.empty' => 'Sivulle ei ole lisätty tiedostoja',
    'editor.image.empty' => 'Sivulle ei ole lisätty kuvia',

    // error page
    'error' => 'Virhe',
    'error.headline' => 'Virhe',

  )
);
