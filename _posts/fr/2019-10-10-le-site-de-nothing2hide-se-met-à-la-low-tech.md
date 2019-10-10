---
layout: post
title: "Le site de Nothing2Hide se met à la low tech"
date: 2019-10-10 15:16:50
image: '/assets/img/'
description: "Le site de Nothing2Hide se refait une beauté et adopte l'esprit low-tech."
lang: fr
tags:
    - low-tech
    - Nothing2Hide
    - Technologie
    - L'association
categories: [News]
---

Exit les bases sql, les CMS multisites et les redirections à coup de htacces volumineux. Vu le nombre de commentaires reçu via notre site, on s'est dit que nous n'avions pas forcément besoin d'un gros WordPress, et surtout <blague de silicon valley>qui fait encore du sql à en 2019 ?</blague de silicon valley>

## L'avenir c'est le passé

Nothing2Hide.org revient au bon vieux html statique et devient léger, accessible, et très rapide à charger. 

"Mais ce n'est pas une évolution, c'est une régression !" entendons-nous déjà les plus fervents adeptes de nodejs et de nosql hurler sur slack. Au contraire. Nous nous tournons vers l'avenir et embrassons le mouvement *low-tech*, à savoir des solutions techniques simples, accessibles, facilement réparables et économes en énergie. 

Nous nous sommes demandés si nous avions vraiment besoin d'un tank pour écraser une mouche. Nous avons fait le tour des fonctionnalités utilisées sur notre site depuis deux ans et il est apparu que rien ne saurait être pris en charge par quelques pages html statiques et 3 scripts de php. Nous avons donc tout refait à l'aide d'un générateur de site statique, [Jekyll](https://jekyllrb.com/). Et aussi à l'aide de quelques scripts d'export à base de pandoc et de sed. Que des outils has been on vous dit ! 

Résultat : un site simple à maintenir, léger, et surtout très résilient. Nothing2Hide étant désormais composé majoritairement de pages statiques (versionnées sur [Github](https://github.com/Nothing2Hide/jekyll-website) qui plus est) nous pouvons littéralement migrer notre site en 30 s chrono sur n'importe quel ordinateur faisant tourner un petit serveur web.

Nous avons aussi réalisé cette refonte en gardant en tête le fait que notre site est parfois consulté dans des pays qui ne disposent pas des mêmes facilités de connexions que celles que l'on peut trouver en Europe. 

C'est l'esprit des réalisations de Nothing2Hide : des solutions faciles à utiliser, pérennes et accessibles à tous. 

Pour fêter ce nouveau site, on a même mis en ligne un nouveau guide d'OSINT - écrit et publié par Tekk, qui nous fait aussi l'honneur d'être membre de Nothing2Hide (mais comment trouve-t-il le temps ?) - et une nouvelle fiche pédagogique sur le tracking publicitaire. On vous laisse apprécier et on attend vos commentaires sur [mastodon](https://mamot.fr/@nothing2hide).

