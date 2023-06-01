FROM debian:buster

RUN apt-get update -y && \
    apt-get upgrade -y && \
    apt-get install -y nginx openssl moreutils gettext && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

EXPOSE 443

RUN mkdir -p /run/nginx
RUN mkdir -p /etc/nginx/ssl

COPY ./conf/nginx.conf /etc/nginx/sites-enabled/default

RUN openssl req -x509 -nodes -days 365 -newkey rsa:4096 -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -subj "/C=BE/L=BXL/O=19/CN=mgomes-d.42.fr";

# openssl: This is the command to invoke the OpenSSL utility.

# req: This is a subcommand of OpenSSL used for generating or processing certificate signing requests (CSRs) and certificates.

# -new: This option specifies that a new certificate request or self-signed certificate should be created.

# -x509: This option indicates that the output will be a self-signed certificate instead of a certificate signing request (CSR).

# -sha256: This option specifies the hash algorithm to use for the certificate's signature. In this case, it's SHA-256.

# -config /etc/ssl/openssl.conf: This option specifies the path to the OpenSSL configuration file. It tells OpenSSL which settings to use during the certificate generation process.

# -key /etc/ssl/private/nginx-selfsigned.key: This option specifies the path to the private key file used for generating the certificate. It indicates where OpenSSL can find the existing private key file.

# -out /etc/ssl/certs/nginx-selfsigned.crt: This option specifies the path where the generated self-signed certificate will be saved. It indicates the location and filename for the output file.

# COPY tools/my_nginx.sh /
# RUN chmod +x /my_nginx.sh

# ENTRYPOINT ["/my_nginx.sh"]

CMD ["nginx", "-g", "daemon off;"]