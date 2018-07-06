keytool -genkey -v -keystore RadumtaSitepu.keystore -alias RadumtaSitepu -keyalg RSA -keysize 2048 -validity 10000

jarsigner -verbose -sigalg MD5withRSA -digestalg SHA1 -keystore RadumtaSitepu.keystore release.apk RadumtaSitepu

openssl pkcs7 -inform DER -in META-INF/CERT.RSA -noout -print_certs -text

jarsigner -verify -verbose release.apk