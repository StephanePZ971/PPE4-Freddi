# PPE4-Freddi
Projet de PPE bts sio2
Ce projet consiste  à développer les différentes composantes d'une application Web appuyée sur une base de données.

*****Le projet*****

Les associations sportives (les clubs) peuvent profiter de dispositions fiscales apparues en 2008 pour faire bénéficier de remises d'impôts les adhérents engageant des frais, en particulier dans le cadre de déplacements liés à des compétitions, des stages sportifs, des réunions… Il s'agit de faciliter par l'informatisation l'établissement du document officiel permettant la remise d'impôts.

Le dispositif fiscal est le suivant :

Les adhérents des clubs engageant des frais peuvent « renoncer » au remboursement de ces frais, ce qui équivaut à un don à l’association. Ils peuvent alors faire valoir ce don lors de leur déclaration de revenus et bénéficier de remise d’impôts (au même titre qu’un don à une association caritative par exemple).

L’association doit délivrer un document officiel numéroté à ses adhérents en fin d’année civile (document CERFA n° 11580-02) où figure le montant total « rétrocédé » à l’association durant l’année. Pour l’adhérent, ce document CERFA sert de reçu et il pourra le joindre à sa déclaration de revenus.

Du point de vue du trésorier des associations sportives ou des ligues.

Le trésorier de l’association demande à ce que les adhérents enregistrent leurs frais dans une note de frais récapitulative signée et transmise au club avant le 24 décembre de l’année civile. Après cette date, le trésorier établit les reçus CERFA en deux exemplaires : un pour l’adhérent et un autre pour l’archivage comptable. Le montant total des sommes rétrocédées par les adhérents doit apparaître dans la comptabilité (en Charges : n° 62 « déplacements » et en Produits : n°75 « autres produits de gestion courante/autres/dons »).


*****Solution informatique*****

Le service CRIB du CROSL souhaite offrir aux adhérents des clubs affiliés aux différentes ligues un service Web d'établissement de ce document CERFA, après concertation avec le centre des impôts.

Pour empêcher la circulation de documents papier (perdus, donnés à des tiers, etc.), le CRIB décide que les bordereaux de notes de frais des adhérents de clubs seront remplis en ligne, sur le site web de la M2L.

L’adhérent d'un club souhaitant bénéficier du service devra :

Pour sa première connexion au site FREDI : tout adhérent d'un club affilié à une ligue de la M2L devra s’enregistrer (avec une adresse e-mail et un mot de passe). Il recevra un e-mail de confirmation avec le mot de passe qu’il a choisi. Chaque fois qu’il se connectera au site, il pourra se faire renvoyer ce mot de passe s’il l’a oublié. Il indique la ligue sportive à laquelle son club est affilié et saisit son n° de licence et ses coordonnées. Le système FREDI permet de connaître pour chaque adhérent de club son n° de licence, sa ligue d'affiliation, ses nom, prénoms et date de naissance. Ces informations sont données par les ligues au CRIB à la fin du mois de novembre.

Dès l’ouverture du site début janvier, il pourra ouvrir un bordereau de note de frais et commencer à saisir les différentes lignes de frais de ce bordereau. Tout au long de l’année et jusqu’au 24 décembre, il pourra compléter son bordereau en y ajoutant des lignes. Il pourra également supprimer ou modifier des lignes.

Enfin, il imprime son bordereau, le signe, y joint toutes les pièces justificatives et le transmet à la trésorière de son club. Il a jusqu’au 15 janvier pour faire parvenir ces documents. 

*****Opérations de fin d’année*****

Dès le 25 décembre, les trésoriers des clubs affiliés peuvent télécharger par FTP la base de données des notes de frais sur l’ordinateur de gestion de l’association.

Ils reçoivent les bordereaux signés jusqu’au 15 janvier. Ils disposent d’une application leur permettant de valider le contenu de chaque bordereau. Dès qu’ils reçoivent les documents de l’adhérent, ils ouvrent son bordereau et valident chacune des lignes de frais, en les corrigeant éventuellement.

Quand le bordereau est entièrement validé, ils le valident et ils éditent deux exemplaires du document CERFA n° 11580-02. Le premier exemplaire est envoyé à l’adhérent et le second est archivé avec les pièces justificatives dans la comptabilité du club. 

En fin de traitement, ils disposent d’un écran où le montant total des sommes de l’ensemble des bordereaux validés apparaît (ils reporteront ce montant total en comptabilité). Ils peuvent imprimer une pièce justificative de ce montant.

 
-----BackOffice-----

•	importation dans la BDD des informations sur les adhérents des clubs depuis un fichier au format CSV,
•	saisie/modification des motifs de frais,
•	modification du tarif kilométrique légal en vigueur,
•	affiliation d'une ligue et de ses clubs.

-----Documents d'accompagnement: -----

•	exemple de document CERFA,
•	exemple de bordereau de frais,
•	paramètres divers.

-----Mise en production du projet FREDI.-----

•	déploiement de services web,
•	DMZ,
•	routage / filtrage.
