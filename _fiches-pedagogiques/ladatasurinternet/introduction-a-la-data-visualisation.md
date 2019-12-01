---
layout: fiche
title: "Introduction à la data visualisation"
lang: fr
duree: 30mn
public: Adolescents, adultes
participants: 10
category: [Les données à l'ère d'Internet]
description: "Au cours de cet atelier, vous apprendrez à transformer des données
brutes en informations lisibles et intelligibles à l’aide d’un outil
simple de data visualisation."
permalink: /fr/fiches-pedagogiques/introduction-a-la-data-visualisation/
---


L’atelier se déroule en deux étapes :

1.  Vous faites la démonstration et l’explication sur projecteur de la
    création d’un graphique
2.  Les participant-e-s créent leurs graphiques avec d’autres données

Étape 1  : démonstration
------------------------

Pour faire de la data visualisation, il nous faut des données. Nous
allons les récupérer sur le site
[data.gouv.fr](https://www.data.gouv.fr/fr/), véritable mine de données
brutes mise à disposition par l’État dans le cadre de la mission
[Etalab](https://fr.wikipedia.org/wiki/Etalab).

Pour cet atelier nous allons utiliser les données de l’INA sur [Temps de
parole des hommes et des femmes à la télévision et à la
radio](https://www.data.gouv.fr/fr/datasets/temps-de-parole-des-hommes-et-des-femmes-a-la-television-et-a-la-radio/).
Par la suite, vous pourrez réaliser cet atelier avec un autre jeu de
données, il y en a une multitude sur
[data.gouv.fr](https://www.data.gouv.fr/fr/). Les données choisies ont
l’avantage d’être assez parlantes et surtout au format CSV, un format
relativement simple à exploiter avec la méthode que nous allons utiliser
ici. Sur [data.gouv.fr](https://www.data.gouv.fr/fr/), de nombreux
autres jeux de données sont au format JSON ou XML, formats qui pour être
exploités nécessitent quelques connaissances en programmation.

Téléchargez le jeu de données et ouvrez-le avec Excel – ou mieux –
[LibreOffice Calc](https://www.libreoffice.org/discover/calc/),
l’équivalent libre (donc gratuit) d’Excel.

Après l’import des données (pour en savoir plus si vous ne maîtrisez pas
cette étape, [jetez un œil à la documentation
officielle](https://help.libreoffice.org/Common/Importing_and_Exporting_Data_in_Text_Format/fr)),
vous vous retrouvez avec un fichier ressemblant à ceci :

![](https://nothing2hide.org/assets/img/sites/3/2019/09/data.png){.alignnone
.size-full .wp-image-4527 width="777" height="772"
sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"
srcset="https://nothing2hide.org/assets/img/sites/3/2019/09/data.png 777w, https://nothing2hide.org/assets/img/sites/3/2019/09/data-150x150.png 150w, https://nothing2hide.org/assets/img/sites/3/2019/09/data-300x298.png 300w, https://nothing2hide.org/assets/img/sites/3/2019/09/data-768x763.png 768w, https://nothing2hide.org/assets/img/sites/3/2019/09/data-600x596.png 600w, https://nothing2hide.org/assets/img/sites/3/2019/09/data-161x160.png 161w, https://nothing2hide.org/assets/img/sites/3/2019/09/data-100x100.png 100w"}

Copiez uniquement les données des lignes comprenant Chérie FM et allez
sur sur le site web [datawarapper.de](https://www.datawrapper.de/). Ce
site vous permet de créer très simplement des visualisations de données
brutes. Sur la page d’accueil, cliquez sur le bouton *Create a chart* et
collez les données sélectionnées dans LibreOffice et dans le champs de
formulaire*.*

![](https://nothing2hide.org/assets/img/sites/3/2019/09/data2.png){.alignnone
.size-full .wp-image-4528 width="1223" height="645"
sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"
srcset="https://nothing2hide.org/assets/img/sites/3/2019/09/data2.png 1223w, https://nothing2hide.org/assets/img/sites/3/2019/09/data2-300x158.png 300w, https://nothing2hide.org/assets/img/sites/3/2019/09/data2-768x405.png 768w, https://nothing2hide.org/assets/img/sites/3/2019/09/data2-1024x540.png 1024w, https://nothing2hide.org/assets/img/sites/3/2019/09/data2-600x316.png 600w, https://nothing2hide.org/assets/img/sites/3/2019/09/data2-280x148.png 280w"}

Cliquez sur *Proceed*.

Lors de cette deuxième étape, nous allons sélectionner les données que
nous souhaitons conserver. Cliquez sur la colonne *is\_public\_channel*
et à gauche, cochez la case *Hide column from visualization*.
Assurez-vous que les données sont au bon format (que les dates sont bien
des dates et les chiffres sont bien des chiffres). Normalement
*datawrapper* le fait automatiquement pour vous.

![](https://nothing2hide.org/assets/img/sites/3/2019/09/data3.png){.alignnone
.size-full .wp-image-4529 width="1219" height="648"
sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"
srcset="https://nothing2hide.org/assets/img/sites/3/2019/09/data3.png 1219w, https://nothing2hide.org/assets/img/sites/3/2019/09/data3-300x159.png 300w, https://nothing2hide.org/assets/img/sites/3/2019/09/data3-768x408.png 768w, https://nothing2hide.org/assets/img/sites/3/2019/09/data3-1024x544.png 1024w, https://nothing2hide.org/assets/img/sites/3/2019/09/data3-600x319.png 600w, https://nothing2hide.org/assets/img/sites/3/2019/09/data3-280x149.png 280w"}

*Cliquez sur proceed.*

Lors de cette troisième étape, vous sélectionnez le type de
visualisation que vous allez utiliser pour afficher votre graphique.
Sélectionnez les types de graphiques *Lines*.

![](https://nothing2hide.org/assets/img/sites/3/2019/09/data4.png){.alignnone
.size-full .wp-image-4530 width="1199" height="625"
sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"
srcset="https://nothing2hide.org/assets/img/sites/3/2019/09/data4.png 1199w, https://nothing2hide.org/assets/img/sites/3/2019/09/data4-300x156.png 300w, https://nothing2hide.org/assets/img/sites/3/2019/09/data4-768x400.png 768w, https://nothing2hide.org/assets/img/sites/3/2019/09/data4-1024x534.png 1024w, https://nothing2hide.org/assets/img/sites/3/2019/09/data4-600x313.png 600w, https://nothing2hide.org/assets/img/sites/3/2019/09/data4-280x146.png 280w"}

Dans l’onglet *Refine* vous allez ensuite définir les données que vous
allez afficher en abscisses et en ordonnées. Sélectionnez *year* pour
les abscisses (x-axis).

Dans l’onglet *Annotate*, choisissez un titre et une description
décrivant les données que vous affichez. Ici nous avons choisi « Chéri
FM et la parole des femmes »

Votre schéma est prêt pour la publication !

![](https://nothing2hide.org/assets/img/sites/3/2019/09/data6.png){.alignnone
.size-full .wp-image-4531 width="646" height="359"
sizes="(max-width: 646px) 100vw, 646px"
srcset="https://nothing2hide.org/assets/img/sites/3/2019/09/data6.png 646w, https://nothing2hide.org/assets/img/sites/3/2019/09/data6-300x167.png 300w, https://nothing2hide.org/assets/img/sites/3/2019/09/data6-600x333.png 600w, https://nothing2hide.org/assets/img/sites/3/2019/09/data6-280x156.png 280w"}

À vous de jouer !
-----------------

Maintenant que vous avez montré comment créer un schéma à partir des
données récupérées sur data.gouv.fr et comment les visualiser dans
*datawrapper*, c’est aux participants de s’y mettre ! Créez 2 ou 3
groupes selon le nombre de personnes présentes et demandez à chaque
groupe de faire le même schéma avec le même processus  pour un autre
média. Vous pourrez ensuite constater quels médias laissent le plus de
temps de parole aux femmes et quels médias en laissent le moins.

Variantes possibles… {#variantes-possibles...}
--------------------

… Mais un peu plus compliquées puisqu’il faut faire quelques
manipulations avec les données :

-   trouver le média qui laisse le plus de temps de parole aux femmes,
    celui qui en laisse le moins et demandez-leur de sortir les
    graphiques de ces deux médias
-   trouver les médias qui ont significativement augmenté le temps de
    parole des femmes au cours des années
-   trouver les médias qui ont significativement diminué le temps de
    parole des femmes au cours des années
-   Réaliser la courbe du temps global de l’évolution de temps de
    paroles des femmes, tous médias confondus

Il existe de nombreux jeux de données sur data.gouv.fr. Si vous apprenez
à maîtriser *datawrapper* vous pourrez animer d’autres ateliers en
utilisant d’autres jeux de données. Il n’y a de limites que votre
imagination !