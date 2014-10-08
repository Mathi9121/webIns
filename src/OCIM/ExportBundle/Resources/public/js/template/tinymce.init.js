tinymce.init({
    selector: "textarea",
    theme: "modern",
    height: 600,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
	toolbar: ["insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
			"Formation | Inscription | Stagiaire"],
	setup: function(editor) {
        editor.addButton('Inscription', {
            type: 'menubutton',
            text: 'Inscription',
            icon: false,
            menu: [
                {text: "Date d'inscription", onclick: function() 	{editor.insertContent("{{ inscription.dateInscription|date('d/m/Y') }}"); }},
                {text: 'Statut', onclick: function() 				{editor.insertContent("{{ inscription.statut }}"); }},
                {text: 'Attentes', onclick: function() 				{editor.insertContent("{{ inscription.attentes }}"); }}
            ]
        });
		editor.addButton('Stagiaire', {
			type: 'menubutton',
			text: 'Stagiaire',
			icon: false,
			menu: [
				{text: 'Civilité', onclick: function() 					{editor.insertContent("{{ inscription.stagiaire.civilite }}"); }},
				{text: 'Nom', onclick: function() 						{editor.insertContent("{{ inscription.stagiaire.nom }}"); }},
				{text: 'Prénom', onclick: function() 					{editor.insertContent("{{ inscription.stagiaire.prenom }}"); }},
				{text: 'Fonction', onclick: function() 					{editor.insertContent("{{ inscription.stagiaire.fonction }}"); }},
				{text: 'Téléphone', onclick: function() 				{editor.insertContent("{{ inscription.stagiaire.tel }}"); }},
				{text: 'Fax', onclick: function() 						{editor.insertContent("{{ inscription.stagiaire.fax }}"); }},
				{text: 'Mail', onclick: function() 						{editor.insertContent("{{ inscription.stagiaire.mail }}"); }},
				{text: 'Mail Administrateur', onclick: function()		{editor.insertContent("{{ inscription.stagiaire.mailAdmin }}"); }},
				{text: 'Nom Strucuture (adresse)', onclick: function()	{editor.insertContent("{{ inscription.stagiaire.adresse.nomStructure }}"); }},
				{text: 'Adresse', onclick: function()					{editor.insertContent("{{ inscription.stagiaire.adresse.adresse }}"); }},
				{text: 'Complément adresse', onclick: function()		{editor.insertContent("{{ inscription.stagiaire.adresse.adresseComplement }}"); }},
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
				{text: 'Date de début', onclick: function() 			{editor.insertContent("{{ formation.dateDebut }}"); }},
				{text: 'Date de fin', onclick: function() 				{editor.insertContent("{{ formation.dateFin }}"); }},
				{text: 'Durée (jours)', onclick: function() 			{editor.insertContent(""); }},
				{text: 'Date au format text', onclick: function() 		{editor.insertContent("{{ formation.dateText }}"); }},
				{text: "Nombre d'heures", onclick: function() 			{editor.insertContent("{{ formation.nbHeures }}"); }},
				{text: "Type de formation", onclick: function() 		{editor.insertContent("{{ formation.type }}"); }},
			]
		});
	},
 }); 