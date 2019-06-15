# Base-Ufficiale
La base ufficiale di MisterPika per creare il proprio Bot Telegram.

# Introduzione
Un ottima base per iniziare a creare il proprio Bot di Telegram in PHP, è fornita di varie variabili che faciliteranno molto il lavoro.

# Come settare il Webhook
Prima di settare il Webhook, dobbiamo caricare i file in un qualsiasi spazio web, che può essere anche Altervista. Attenzione però! Bisogna prima attivare Database, Cloudflare e HTTPS nel proprio spazio web prima di settare il Webhook.

Una volta attivato tutto e caricato i file del bot nel proprio spazio web, apriamo il seguente link nel browser per settare il Webhook;

https://api.telegram.org/botAPIKEY/setWebhook?url=SITO.altervista.org/CARTELLA/index.php

Bisognerà modificare tutte le parti scritte in stampatello. Ovvero:

APIKEY = metti il token del tuo bot che ti ha dato @botfather. 
SITO = metti il nome del tuo sito altervista, se non usi altervista, metti il dominio del tuo sito. 
CARTELLA = inserisci la cartella dove hai caricato i file del bot.

Una volta settato il Webhook, il nostro Bot dovrebbe essere pienamente funzionante!
