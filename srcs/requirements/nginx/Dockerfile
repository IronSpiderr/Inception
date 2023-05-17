FROM debian:buster

RUN apt update -y && \
    apt upgrade -y && \
    apt install -y nginx openssl

# Copier le fichier de configuration OpenSSL dans le conteneur
COPY ./conf/openssl.conf /etc/ssl/openssl.conf

# Générer la clé privée
RUN openssl genpkey -algorithm RSA -out /etc/ssl/private/nginx-selfsigned.key

# Générer le certificat en utilisant le fichier de configuration OpenSSL
RUN openssl req -new -x509 -sha256 -config /etc/ssl/openssl.conf \
    -key /etc/ssl/private/nginx-selfsigned.key \
    -out /etc/ssl/certs/nginx-selfsigned.crt

COPY ./conf/nginx.conf /etc/nginx/nginx.conf

# Exposer le port 443 pour le trafic HTTPS
EXPOSE 443

# Démarrer le service NGINX
CMD ["nginx", "-g", "daemon off;"]