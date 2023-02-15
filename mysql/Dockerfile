FROM mysql
COPY gestiondeproduits.sql /docker-entrypoint-initdb.d/
EXPOSE 3306
RUN chmod 755 /var/lib/mysql

# Configurer l'environnement de la base de données
