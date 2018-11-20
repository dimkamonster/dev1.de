#!/bin/sh
prefix="/var/www/html/dev1.de/public_html/smtp_plug/mail/new"
numPath="/var/www/html/dev1.de/public_html/smtp_plug/mail"

if [ ! -f $numPath/num ]; then
    echo "0" > $numPath/num
fi
num=`cat $numPath/num`
num=$(($num + 1))
echo $num > $numPath/num

name="$prefix/letter_$num.eml"

cat >> $name

chmod 777 $name
/bin/true


#while read line
#do
#echo $line >> $name
#done
#chmod 777 $name
#/bin/true
