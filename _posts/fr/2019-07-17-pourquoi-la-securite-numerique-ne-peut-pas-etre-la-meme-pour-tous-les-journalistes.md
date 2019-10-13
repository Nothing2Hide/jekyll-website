---
lang: fr 
id: 4100
title: Pourquoi la sécurité numérique ne peut pas être la même pour tous les journalistes
date: 2019-07-17T08:11:29+02:00
author: Nothing2Hide
layout: post
permalink: /fr/2019/07/17/pourquoi-la-securite-numerique-ne-peut-pas-etre-la-meme-pour-tous-les-journalistes/
categories:
  - News
---
Question aux experts en sécurité numérique: quel est le point commun entre un journaliste d’Afrique de l’ouest, un journaliste syrien basé en Turquie et un journaliste français en reportage dans le Cachemire ? Aucun. Ils exercent leur métier dans des environnements complètement différents. **Tous se doivent de protéger leurs données, leurs communications et leurs sources, mais ils doivent le faire différemment**. L’aide et le soutien qu’il est possible de leur apporter doivent être adaptés aux contextes dans lesquels ils travaillent.

<!--more-->

Si vous avez déjà participé à un atelier sur la sécurité numérique, vous avez probablement appris à créer des mots de passe robustes, à chiffrer vos dossiers ou vos disques durs externes et à activer la double authentification sur vos services en ligne. Tout ça est utile, mais souvent loin d’être suffisant. Plus que ces pratiques de base, il faut connaître les outils et les pratiques à employer dans chaque cas particulier. Par exemple, un journaliste travaillant en France doit apprendre à protéger ses sources. La situation – et donc les outils et les méthodes utilisés – est très différente de celle d’une personne travaillant dans un État où aucune loi sur la liberté de la presse n’est en vigueur. Nous avons certes l’expertise technique, mais les journalistes et les défenseurs des droits connaissent leur environnement bien mieux que nous. Il est donc primordial de démarrer par un dialogue. 

Jean-Marc Bourguignon et moi travaillons dans le domaine de la sécurité numérique depuis maintenant 10 ans, Jean-Marc en tant que hacker et moi-même en tant que journaliste et militant au sein de plusieurs ONG. Nous avons créé [Nothing2Hide](https://nothing2hide.org/fr/) en 2017 car nous ne trouvions aucune organisation collaborant avec des journalistes et défenseurs des droits humains plaçant la technologie au cœur de ses activités. Le mandat de notre association est d’aider journalistes, blogueurs, avocats, lanceurs d’alerte et défenseurs des droits humains à protéger leurs données et leurs communications. Que nous organisions un atelier autour de la sécurité numérique, un audit de sécurité pour un média ou que nous déployions des outils de contournement de la censure, nous commençons toujours par un inventaire des besoins. Nous avons certes l’expertise technique, mais les journalistes et les défenseurs des droits connaissent leur environnement bien mieux que nous. Il est donc primordial de démarrer par un dialogue.

Voici trois cas d’usage qui illustrent cette façon de travailler.

#### **Ne pas changer les méthodes de travail pour favoriser l’adoption**

Nous avons été sollicités par un média indépendant syrien basé à Istanbul, afin de sécuriser leur système d’information. Ils se trouvent dans une situation délicate puisqu’ils travaillent au quotidien avec des journalistes basés en Syrie.

Nous avons commencé par observer leurs méthodes de travail, puis nous avons mis en place des solutions adaptées à leurs besoins, avec toujours le même objectif en tête : « Rester simples » (selon la méthode KISS connue des informaticiens : Keep It simple Stupid) . Cela nous permet de créer des solutions faciles à mettre en place et surtout faciles à reproduire.

  * **Un outil de sauvegarde de fichiers** : pour notre partenaire, il était hors de question d’utiliser Google ou Dropbox. Aussi sûrs soient ces service, la sécurité numérique reste avant tout une question de confiance, et ces journalistes n’étaient pas très enthousiastes (c’est une litote) à l’idée de voir leurs fichiers les plus sensibles stockés sur les serveurs d’entreprises basées aux Etats-Unis. Nous avons donc mis en place un système de sauvegarde reposant sur les serveurs de Nothing2Hide. Nous avons installé un logiciel permettant aux membres de l’équipe de chiffrer et de sauvegarder leurs fichiers en un seul clic. Les fichiers sont stockés sur nos serveurs mais nous n’avons pas la clé de déchiffrement : seuls les journalistes du média en question peuvent y accéder.
  * **Une connexion sécurisée** : il existe un vide juridique en Turquie sur les outils de contournement de la censure tels que les VPN. Ils ne sont ni autorisés, ni interdits. Sachant cela, il est préférable, lorsqu’on en utilise un, de le faire le plus discrètement possible. Nous avons donc choisi d’installer une connexion sécurisée en utilisant la technologie WireGuard plutôt qu’un VPN classique. WireGuard est bien plus difficile à détecter et à bloquer que des technologies plus populaires tels que OpenVPN ou PPPT. Plutôt que d’installer un logiciel sur chaque poste pour bénéficier de cette connexion sécurisée, nous avons installé un matériel relié à Internet auquel les journalistes de la rédaction se connectent en wifi. Une fois cette connexion wifi activée, tout leur trafic est chiffré grâce à WireGuard. La seule chose à faire pour l’équipe est de sélectionner le bon réseau wifi.

Nous n’avons pas changé les méthodes de travail de l’équipe, ou sinon à la marge (clic droit pour sauvegarder un fichier, on peut dire que c’est à la marge). Nous sommes en effet convaincus que les clés pour sécuriser des méthodes de travail de manière efficace et pérenne sont l’adoption et le soutien technique sur le long terme.

#### **Transformer son smartphone en coffre-fort peut être contre productif**

En début d’année, nous avons animé au Ghana une formation à la protection de l’information avec une vingtaine de journalistes et de militants venus de plusieurs pays africains. Certains des participants évoluent dans des contextes où il est inutile voire dangereux de transformer son smartphone ou son ordinateur en coffre fort numérique. Les arrestations arbitraires, les coups et la torture viennent toujours à bout des mots de passe, aussi robustes soient-ils.&nbsp;

Avec les participants, nous avons mis en place une stratégie adaptée et leur avons appris comment conserver le moins de traces possibles sur leurs smartphones. Pour ce faire, nous leurs avons créé des comptes sur Protonmail, un service de messagerie chiffré.

Comme de nombreux fournisseurs de messagerie, Protonmail propose une application pour smartphone que nous leur avons déconseillé d’utiliser et même d’installer. L’objectif est de conserver le moins de traces possibles sur leur téléphone. Nous leur avons donc recommandé d’utiliser Protonmail sur leur navigateur, dans une fenêtre de navigation privée et en utilisant [un VPN](https://nothing2hide.org/fr/guide-de-voyage-en-milieu-hostile-ou-pas/proteger-son-trafic-web-et-internet-avec-un-vpn/). Ainsi, même en cas d’arrestation et de confiscation de leur smartphone, il ne ne subsiste aucune trace des messages échangés via protonmail. L’opérateur téléphonique local n’est pas non plus en capacité de savoir que tel ou tel journaliste utilise un service de messagerie chiffré. Sans connaître le contexte des participants et sans échanger sur leurs méthodes de travail, nous n’aurions pas pu élaborer cette stratégie.

#### **Effacer des traces sur un ordinateur**

En France, des photojournalistes nous ont demandé comment sécuriser les photos qu’ils allaient prendre lors d’un reportage au Cachemire, une région où les reporters étrangers courent le risque de se faire arrêter et expulser.

Nous avons mis en place pour eux une solution sur mesure : durant leur reportage les photojournalistes envoyaient leurs photos une fois par jour sur un serveur de Nothing2Hide. Une fois le téléchargement terminé, les fichiers étaient copiés sur un deuxième serveur puis effacés du premier.. Il était alors impossible même en ayant physiquement accès à l’ordinateur d’accéder aux photos prises ni même de savoir que des photos avaient été stockées sur l’ordinateur.&nbsp;

Nous leur avons également fourni un plan B dans le cas où ils n’auraient pas accès à internet : un dossier chiffré avec Veracrypt de la taille d’un fichier vidéo et dans lequel ils pourraient stocker leurs photos. Celui-ci était alors camouflé de telle sorte qu’il ressemble à un fichier vidéo et stocké dans un disque au milieu d’une centaine d’autres fichiers vidéos. À moins d’être un expert en cryptographie, il était alors impossible de distinguer le dossier chiffré d’une véritable vidéo.

N’importe qui peut mettre en œuvre cette technique : pour des données chiffrées stockées localement, il suffit de changer le nom du conteneur Veracrypt et d’y ajouter une extension .mpg pour qu’il prenne l’apparence d’une vidéo. Quant au plan A, c’est-à-dire le stockage à distance, il est un un peu plus difficile à mettre en place car il nécessite des compétences techniques. Cette méthode est néanmoins accessible au plus grand nombre : un simple serveur FTP, un script shell et un logiciel utlra-standard (FileZilla) nous ont suffit à mettre en place cette solution.

Aucune de ces solutions n’aurait été efficace si nous n’avions pas échangé avec les journalistes et les activistes avec qui nous avons travaillé. Amener du soutien et des compétences techniques sans prendre en compte les besoins de ceux avec qui nous travaillons n’a pas de sens. L’humain et le dialogue doivent être mis au centre des formations quelles qu’elles soient. C’est encore plus vrai pour toutes les formations à la sécurité numérique.

Après nos derniers ateliers de formation numérique, deux des participants ont décidé de transmettre ce qu’ils avaient appris en organisant leurs propres ateliers au profit de leurs réseaux. Nous encourageons cette diffusion de connaissances en utilisant et en créant exclusivement des outils et des ressources sous licence libre. Alors [n’hésitez pas à vous en servir](https://wiki.nothing2hide.org/doku.php?id=protectionnumerique:start) !

_Cet article a été publié à l&rsquo;origine sur le site du_ [_Réseau international de journalisme d’investigation_](https://gijn.org/2019/07/16/pourquoi-la-securite-numerique-ne-peut-etre-la-meme-pour-tous-les-journalistes/) _(GIJN). Les 182 organisations membres du GIJN &#8211; dont Nothing2Hide &#8211; soutiennent, produisent et promeuvent le journalisme d’investigation_. _[Image de Robin Jay](https://www.flickr.com/photos/learnscope/6368674387/) sous licence CC BY SA._
