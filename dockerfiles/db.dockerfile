FROM postgres:10.5

COPY /bd/dump_postgre.sql /dump/
COPY /bd/initdb.sh /docker-entrypoint-initdb.d/