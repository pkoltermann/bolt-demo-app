FROM kolemp/php:7.3
ENV COMPOSER_CACHE_DIR "/tmp/composer-cache"
ENV BOLT_WEB_DIR "web"

COPY --chown=www-data:www-data app /data/application/app
COPY --chown=www-data:www-data extensions /data/application/extensions
COPY --chown=www-data:www-data vendor /data/application/vendor
COPY --chown=www-data:www-data composer.* .bolt.yml /data/application/
COPY --chown=www-data:www-data web /data/application/web
COPY --chown=www-data:www-data src /data/application/src

WORKDIR /data/application
USER www-data

# If you are adding source code after a CI build, then probably this is not needed
RUN composer install --no-dev && \
    rm -rf /tmp/composer-cache

USER root