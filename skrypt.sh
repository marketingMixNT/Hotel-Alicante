#!/bin/sh
# UPDATE PATH + PHP 7.4
sed -i 's|PATH=.*|PATH=$HOME/.local/bin:$HOME/bin:$HOME/.config/composer/vendor/bin:$PATH|g' ~/.bash_profile
mkdir -p ~/bin
if [[ -f /opt/alt/php74/usr/bin/php ]]; then
  ln -sf /opt/alt/php74/usr/bin/php ~/bin/php
else
  ln -sf /usr/local/php74/bin/php ~/bin/php
fi
source ~/.bash_profile

# COMPOSER https://getcomposer.org/doc/faqs/how-to-install-composer-programmatically.md
EXPECTED_CHECKSUM="$(wget -q -O - https://composer.github.io/installer.sig)"
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
ACTUAL_CHECKSUM="$(php -r "echo hash_file('sha384', 'composer-setup.php');")"

if [ "$EXPECTED_CHECKSUM" != "$ACTUAL_CHECKSUM" ]
then
  >&2 echo 'ERROR: Invalid installer checksum'
  rm composer-setup.php
  exit 1
fi
php composer-setup.php --install-dir ~/bin --filename composer --quiet
rm composer-setup.php