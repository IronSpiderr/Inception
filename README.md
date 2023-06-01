# Inception

Telecharger l'iso lubutu et le mettre dans le goinfre, ne telechargez pas une nouvelle version sinon vous aurez des problemes pour se connecter au ssh.
Voici le lien : https://lubuntu.me/downloads/

Crée une machine virtuelle dans le sgoinfre, tu peut mettre 1GB de RAM et 10 GB de memoire, tu va utiliser le ssh pour faire les manipulations toute façon.
Il faut bien l'installer, la premiere fois que tu ouvre la VM tu dois continuer l'installation.

Pour ce connecter au shh et utilise ton vscode:<br>
1 - allez au settings de l'application virtualBox -> Network -> portForwarding -> ouvre le port 4242.<br>
2 - a la VM, sudo apt-get install openssh-server, va sur le fichier sshd_config sudo vim /etc/ssh/sshd_config <br>
Active le port 22 et met le port 4242. <br>
tu peux faire maintennant sudo service ssh restart. <br>
3 - Va sur ton vscode et installe l'extention REMOTE-SSH -> sur vscode click sur View et click sur command palette<br>
ecris remote-ssh e click sur add new host, la tu va mettre la connection, "ssh tonusername@127.0.0.1 -p 4242" ENTER -> prend la 1ere option<br>
4 - va sur la command palette -> REMOTE-SSH: add new ssh host -> prend le 127.0.0.1 -> met ton mot de passe de ma VM.
la ton vscode est connecté avec la VM via ssh, tu peux utiliser la commande "code ." pour ouvrir le fichier.


-------------------------------------
Maintennant tu peux commencer le projet

Le docker c'est comme un VM qui prend peu de ressources

NGINX-

C'est un serveur web que tu va mettre ton site web.
tu va cree un certificat pour acceder a ton site.


J'utilise l'image debian:buster

