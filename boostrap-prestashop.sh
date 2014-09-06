#!/bin/sh

set -e

if [ "$#" -ne 1 ]; then
    echo 'Usage: sh boostrap-prestashop.sh <directory>'
    exit 1
fi

curl http://www.prestashop.com/download/old/prestashop_1.6.0.9.zip | tar -xvzf -
mv prestashop $1 ; cp config/* $1 ; mv $1/settings.inc.php $1/config/ ; cd $1 ; fig up
