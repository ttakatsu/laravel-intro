# See here for image contents: https://github.com/microsoft/vscode-dev-containers/tree/v0.134.0/containers/php/.devcontainer/base.Dockerfile
ARG VARIANT="7"
FROM mcr.microsoft.com/vscode/devcontainers/php:0-${VARIANT}

# [Optional] Install a version of Node.js using nvm for front end dev
ARG INSTALL_NODE="true"
ARG NODE_VERSION="lts/*"
RUN if [ "${INSTALL_NODE}" = "true" ]; then su vscode -c "source /usr/local/share/nvm/nvm.sh && nvm install ${NODE_VERSION} 2>&1"; fi

# Install php additional extensions "intl", "pdo_mysql", "zip", "bcmath"
RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends \
            libicu-dev \
            libonig-dev \
            libzip-dev \
            unzip; \
    rm -rf /var/lib/apt/lists/*; \
    docker-php-ext-install \
            intl \
            pdo_mysql \
            zip \
            bcmath

# [Optional] Uncomment this line to install global node packages.
# RUN su vscode -c "source /usr/local/share/nvm/nvm.sh && npm install -g <your-package-here>" 2>&1