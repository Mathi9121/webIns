tinymce.init({
    selector: "textarea",
    theme: "modern",
    height: 600,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   toolbar: ["insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
			"Formation | Inscription | Stagiaire | Formule | Convention"],
	setup: function(editor) {
        editor.addButton('Inscription', {
            type: 'menubutton',
            text: 'Inscription',
            icon: false,
            menu: [
                {text: "Date d'inscription", onclick: function() 	{editor.insertContent("{{ inscription.dateInscription|date('d/m/Y') }}"); }},
                {text: 'Statut', onclick: function() 				{editor.insertContent("{{ inscription.statut|capitalize }}"); }},
                {text: 'Attentes', onclick: function() 				{editor.insertContent("{{ inscription.attentes }}"); }},
                {text: "Contact Admin.",
                  menu: [
                  {text: "Civilite", onclick: function() 			{editor.insertContent("{{ inscription.admin.civilite }}"); }},
                  {text: "Nom", onclick: function() 				{editor.insertContent("{{ inscription.admin.nom }}"); }},
                  {text: "Prenom", onclick: function() 			{editor.insertContent("{{ inscription.admin.prenom }}"); }},
                  {text: "Fonction", onclick: function() 			{editor.insertContent("{{ inscription.admin.fonction }}"); }},
                  {text: "Téléphone", onclick: function() 			{editor.insertContent("{{ inscription.admin.tel }}"); }},
                  {text: "Mail", onclick: function() 			{editor.insertContent("{{ inscription.admin.mail }}"); }},
                  ]}
            ]
        });
		editor.addButton('Stagiaire', {
			type: 'menubutton',
			text: 'Stagiaire',
			icon: false,
			menu: [
				{text: 'Civilite', onclick: function() 					{editor.insertContent("{{ inscription.stagiaire.civilite }}"); }},
				{text: 'Nom', onclick: function() 						{editor.insertContent("{{ inscription.stagiaire.nom }}"); }},
				{text: 'Prenom', onclick: function() 					{editor.insertContent("{{ inscription.stagiaire.prenom }}"); }},
				{text: 'Fonction', onclick: function() 					{editor.insertContent("{{ inscription.stagiaire.fonction }}"); }},
				{text: 'Telephone', onclick: function() 				{editor.insertContent("{{ inscription.stagiaire.tel }}"); }},
				{text: 'Fax', onclick: function() 						{editor.insertContent("{{ inscription.stagiaire.fax }}"); }},
				{text: 'Mail', onclick: function() 						{editor.insertContent("{{ inscription.stagiaire.mail }}"); }},
				{text: 'Nom Strucuture (adresse)', onclick: function()	{editor.insertContent("{{ inscription.stagiaire.adresse.nomStructure }}"); }},
				{text: 'Adresse', onclick: function()					{editor.insertContent("{{ inscription.stagiaire.adresse.adresse }}"); }},
				{text: 'Complement adresse', onclick: function()		{editor.insertContent("{{ inscription.stagiaire.adresse.adresseComplement }}"); }},
				{text: 'Code postal', onclick: function()				{editor.insertContent("{{ inscription.stagiaire.adresse.CP }}"); }},
				{text: 'Ville', onclick: function()						{editor.insertContent("{{ inscription.stagiaire.adresse.ville }}"); }},
				{text: 'Pays', onclick: function()						{editor.insertContent("{{ inscription.stagiaire.adresse.pays }}"); }},
				{text: 'Commentaire', onclick: function() 				{editor.insertContent("{{ inscription.stagiaire.commentaire }}"); }}
			]
		});
		editor.addButton('Formation', {
			type: 'menubutton',
			text: 'Formation',
			icon: false,
			menu: [
				{text: 'Intitule', onclick: function() 					{editor.insertContent("{{ formation.intitule }}"); }},
				{text: 'Lieu', onclick: function() 						{editor.insertContent("{{ formation.lieu }}"); }},
				{text: 'Date de debut', onclick: function() 			{editor.insertContent("{{ formation.dateDebut }}"); }},
				{text: 'Date de fin', onclick: function() 				{editor.insertContent("{{ formation.dateFin }}"); }},
				{text: 'Duree (jours)', onclick: function() 			{editor.insertContent("{{ date_difference(formation.dateDebut, formation.dateFin) }}"); }},
				{text: 'Date au format text', onclick: function() 		{editor.insertContent("{{ formation.dateText }}"); }},
				{text: "Nombre d'heures", onclick: function() 			{editor.insertContent("{{ formation.nbHeures }}"); }},
				{text: "Type de formation", onclick: function() 		{editor.insertContent("{{ formation.type }}"); }},
			]
		});
		editor.addButton('Convention', {
			type: 'menubutton',
			text: 'Convention',
			icon: false,
			menu: [
				{text: 'Numero', onclick: function() 					  	{editor.insertContent("{{ inscription.convention.numero }}"); }},
				{text: "Date d'edition", onclick: function() 					{editor.insertContent("{{ inscription.convention.edition|date('d/m/Y') }}"); }},
				{text: "Signataire",
					menu: [
						{text: "Civilite", onclick: function() 			{editor.insertContent("{{ inscription.signataire.civilite }}"); }},
						{text: "Nom", onclick: function() 				{editor.insertContent("{{ inscription.signataire.nom }}"); }},
						{text: "Prenom", onclick: function() 			{editor.insertContent("{{ inscription.signataire.prenom }}"); }},
						{text: "Fonction", onclick: function() 			{editor.insertContent("{{ inscription.signataire.fonction }}"); }},
						{text: "Mail", onclick: function() 			{editor.insertContent("{{ inscription.signataire.mail }}"); }},

					]},
				{text: "Organisme Financeur",
					menu: [
						{text: "Nom de la structure", onclick: function() 		{editor.insertContent("{{ inscription.signataire.adresse.structure.nom }}"); }},
						{text: "Adresse", onclick: function() 					{editor.insertContent("{{ inscription.signataire.adresse.adresse }}"); }},
						{text: "Complement d'adresse", onclick: function() 		{editor.insertContent("{{ inscription.signataire.adresse.adresseComplement }}"); }},
						{text: "Code postal", onclick: function() 				{editor.insertContent("{{ inscription.signataire.adresse.CP }}"); }},
						{text: "Ville", onclick: function() 					{editor.insertContent("{{ inscription.signataire.adresse.ville }}"); }},
						{text: "Pays", onclick: function() 						{editor.insertContent("{{ inscription.signataire.adresse.pays }}"); }},
						{text: "Type de structure", onclick: function() 						{editor.insertContent("{{ inscription.signataire.adresse.type.type }}"); }},
					]},
			]
		});
		editor.addButton('Formule', {
			type: 'menubutton',
			text: 'Formule',
			icon: false,
			menu: [
				{text: 'Description', onclick: function() 					{editor.insertContent("{{ inscription.formationformule.formule.description }}"); }},
				{text: 'Tarif', onclick: function() 						{editor.insertContent("{{ inscription.formationformule.formule.tarif }}"); }},
			]
		});
	},
 });
