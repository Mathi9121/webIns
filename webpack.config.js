var Encore = require('@symfony/webpack-encore');

Encore
    // the project directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    // uncomment to create hashed filenames (e.g. app.abc123.css)
    // .enableVersioning(Encore.isProduction())

    // uncomment to define the assets of the project
     .addEntry('js/Contacts/Structure/ajoutStructure.js', './assets/js/Contacts/Structure/ajoutStructure.js')
     .addEntry('js/Contacts/Structure/tagsAdresse.js', './assets/js/Contacts/Structure/tagsAdresse.js')
     .addEntry('js/Evenements/ChampPerso/formModele.js', './assets/js/Evenements/ChampPerso/formModele.js')
     .addEntry('js/Evenements/ChampPerso/jquery-ui-1.9.2.custom.min.js', './assets/js/Evenements/ChampPerso/jquery-ui-1.9.2.custom.min.js')
     .addEntry('js/Evenements/Convention/convention.js', './assets/js/Evenements/Convention/convention.js')
     .addEntry('js/Evenements/Convention/export-convention.js', './assets/js/Evenements/Convention/export-convention.js')
     .addEntry('js/Evenements/Evenements/Evenement/chart.min.js', './assets/js/Evenements/Evenement/chart.min.js')
     .addEntry('js/Evenements/Evenements/Evenement/filtresEvenement.js', './assets/js/Evenements/Evenement/filtresEvenement.js')
     .addEntry('js/Evenements/Evenements/Evenement/formEvenement.js', './assets/js/Evenements/Evenement/formEvenement.js')
     .addEntry('js/Evenements/Evenements/Evenement/jquery.nouislider.min.js', './assets/js/Evenements/Evenement/jquery.nouislider.min.js')
     .addEntry('js/Evenements/Evenements/Inscription/accueil.js', './assets/js/Evenements/Inscription/accueil.js')
     .addEntry('js/Evenements/Evenements/Inscription/inscription.js', './assets/js/Evenements/Inscription/inscription.js')
     .addEntry('js/Evenements/Evenements/Inscription/maj-statuts.js', './assets/js/Evenements/Inscription/maj-statuts.js')
     .addEntry('js/Evenements/Evenements/Inscription/proposition-export.js', './assets/js/Evenements/Inscription/proposition-export.js')
     .addEntry('js/Evenements/Evenements/Inscription/reponseschampPerso.js', './assets/js/Evenements/Inscription/reponseschampPerso.js')
     .addEntry('js/Evenements/Evenements/Inscription/showDetailsInscriptions.js', './assets/js/Evenements/Inscription/showDetailsInscriptions.js')
     .addEntry('js/Evenements/Evenements/Intervenant/intervenants.js', './assets/js/Evenements/Intervenant/intervenants.js')
     .addEntry('js/Evenements/Export/template/delete-template.js', './assets/js/Export/template/delete-template.js')
     .addEntry('js/Evenements/Export/template/exportfrompreview.js', './assets/js/Export/template/exportfrompreview.js')
     .addEntry('js/Evenements/Export/template/place-variables.js', './assets/js/Export/template/place-variables.js')
     .addEntry('js/Evenements/Export/template/sort-templates.js', './assets/js/Export/template/sort-templates.js')
     .addEntry('js/Evenements/Export/template/tinymce.init.js', './assets/js/Export/template/tinymce.init.js')
     .addStyleEntry('css/Evenements/accueil.css', './assets/css/Evenements/accueil.css')
     .addStyleEntry('css/Evenements/convention.css', './assets/css/Evenements/convention.css')
     .addStyleEntry('css/Evenements/editionchampPerso.css', './assets/css/Evenements/editionchampPerso.css')
     .addStyleEntry('css/Evenements/evenements.css', './assets/css/Evenements/evenements.css')
     .addStyleEntry('css/Evenements/inscriptions.css', './assets/css/Evenements/inscriptions.css')
     .addStyleEntry('css/Evenements/intervenants.css', './assets/css/Evenements/intervenants.css')
     .addStyleEntry('css/Evenements/jquery-ui-1.9.2.custom.min.css', './assets/css/Evenements/jquery-ui-1.9.2.custom.min.css')
     .addStyleEntry('css/Evenements/jquery.nouislider.css', './assets/css/Evenements/jquery.nouislider.css')

    // uncomment if you use Sass/SCSS files
    // .enableSassLoader()

    // uncomment for legacy applications that require $/jQuery as a global variable
    // .autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();
