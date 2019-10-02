---
id: 1548
title: Digital Security for Journalists Requires an Adaptable Toolkit
date: 2019-07-17T06:18:32+00:00
author: Nothing2Hide
layout: post
guid: https://nothing2hide.org/en/?p=1548
permalink: /en/2019/07/17/digital-security-for-journalists-requires-an-adaptable-toolkit/
mf2_mp-syndicate-to:
  - 'a:1:{i:0;s:4:"none";}'
mf2_syndication:
  - 'a:0:{}'
image: /wp-content/uploads/sites/2/2019/07/keys.jpg
categories:
  - News
tags:
  - digital security
  - journalism
  - media
  - Veracrypt
  - VPN
lang: en
---
When it comes to digital security, what does a journalist from West Africa, a Syrian journalist based in Turkey, and a French journalist on a reporting trip to Kashmir have in common? Answer: Very little. Each of them is working in completely different environments. They all need to protect their data, their communications, and their sources, but they must each do this in different ways, with methods adapted to their individual contexts.

<!--more-->

If you have ever attended a digital safety workshop, you’ve probably been taught how to create strong passwords, how to encrypt a folder or an external hard drive, and how to activate two-factor authentication on your online messaging services. All that is fine. But it’s often not enough. What you really need to learn is which tools and which best practices fit your own specific situation and environment. For example, a journalist working in France must learn how to protect his or her sources, but the situation (and therefore the tools they will use) are very different than for someone working in an environment where the rule of law does not apply. Security experts may have the technical knowledge, but journalists and human rights defenders know their context better than anyone, so we must begin with a dialogue. 

Jean-Marc Bourguignon and I — who have worked in the field of digital safety and hacking for 10 years, Jean-Marc as hacker and myself as a journalist and NGO worker — founded [Nothing2Hide](https://twitter.com/N0thing2Hide) in 2017 because we couldn’t find any organization working with journalists and human rights defenders that had tech in its DNA. Our mission is to help protect the information and communications of journalists, bloggers, lawyers, human rights activists, and citizens. And whether we’re holding a workshop on digital security, carrying out a security audit for a media outlet, or deploying tools to get around censorship, we always start by having a conversation about the needs of those we’re working with. Security experts like us may have the technical knowledge, but journalists and human rights defenders know their context better than anyone, so we must begin with a dialogue.

Here are three examples of how we’ve tailored digital security methods to fit different journalists’ situations.

#### **Avoid Changing Work Methods**

Journalists from an independent Syrian media outlet based in Istanbul asked for our help to make their systems secure. They are in a very delicate situation; they work on a daily basis with journalists based inside Syria. In order to get people to adopt security measures durably, it’s key to keep things simple and provide long-term technical support. 

We started by observing their work methods. Then, we put in place solutions adapted to their needs, with always the same motto in mind: “Keep It Simple, Stupid.” This allows us to create solutions that are easy to put into place and to reproduce.

  * **A file hosting service.**&nbsp;We couldn’t use Google or Dropbox — this was an explicit request on the journalists’ part. Even if Google or Dropbox products are safe, at the end of the day digital safety is always a matter of trust, and these journalists were not very keen to see their most sensitive files stored by a US-based company. So we stored their files on a server belonging to Nothing2Hide. We installed software that allows the team to save and encrypt files with a click of the mouse. Files are stored and encrypted on our servers and we don’t have the decryption key; only their journalists can access the files.
  * **A secure connection.** Since VPNs are in legal gray zone in Turkey, it is best to use them discreetly. We chose to use WireGuard rather than a classic VPN. WireGuard is much more stealthy and therefore more difficult to detect and block than widely-used tools like OpenVPN or PPPT. Rather than install software on each computer, we installed an internet-linked device that the journalists can connect to through wifi. Once this wifi connection is activated, all of their traffic is encrypted. All the journalists have to do is select the right wifi network.

We didn’t change the team’s work methods much because we learned that changing journalists’ habits is the fastest way to failure. In order to get people to adopt security measures durably, it’s key to keep things simple and provide long-term technical support.

#### **Turning Your Smartphone Into a Safe Can Be Counter-Productive**

Earlier this year, we held a workshop in Ghana with two dozen journalists and activists from various African countries. Some of the participants worked in places with repressive governments. In these places, turning smartphones and laptops into digital safes is pointless and even dangerous: arbitrary arrests, violence, and torture can surmount the most robust of passwords.

Instead, we showed the participants how to leave the fewest possible traces on their smartphones. To do this, we signed them up for accounts on ProtonMail, an encrypted email service.

Like many email providers, ProtonMail also offers a mobile phone app. But we advised them not to use it — the idea was to keep the least possible amount of information on their phones. Instead, they used ProtonMail on their web browsers, in private windows and using a VPN. That way, if one of the journalists gets arrested, no traces of their ProtonMail messages will be found on their smartphones. Moreover, local phone companies who have been known to cooperate with authorities won’t be able to see who is using ProtonMail.

#### **Erasing Traces on a Computer**

In France, photojournalists asked us how they could safeguard photos they were going to take during a trip to Kashmir, a region where foreign reporters run the risk of getting arrested and kicked out. Even if someone obtained access to their computer, it would be impossible for them to see the photos, or to even know that any photos had been stored on the computer. 

Here’s the system we put in place: During their reporting trip, the photojournalists would send their photos once a day to one of our servers. When the upload was complete, the files were copied onto a second server and erased from the first. This way, even if someone obtained access to the journalists’ computer, it would be impossible for them to see the photos or to even know that any photos had been stored on the computer.

We also provided them with a plan B for cases in which they might not have access to the internet by creating a Veracrypt container (an encrypted folder) that was the size of a video file and in which they could store their photos. The container was camouflaged to look like a video file and stored among hundreds of other video files. This made it impossible to distinguish the container from the real videos.

While anyone can use this plan B — for local encrypted storage, all you have to do is change the name of the Veracrypt container and add an .mpg extension to make it look like a video — the plan A, i.e., remote storage, is a bit harder to put in place as it requires some technical skills. This method is, however, accessible to most: All that’s required is a simple FTP server, a script shell, and FileZilla.

This article was [originally published the Global Invesigative Journalist Network](https://gijn.org/2019/07/16/digital-security-for-journalists-requires-an-adaptable-toolkit/) (GIJN). The 182 member organisations of the GIJN &#8211; including Nothing2Hide &#8211; support, produce and promote investigative journalism. [Image by Robin Jay](https://www.flickr.com/photos/learnscope/6368674387/) under CC BY SA license.
