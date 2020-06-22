Cloud-Computing - Projektaufgabe
Marcel Hieber
WWI2017C
DHBW-Stuttgart

Nachfolgender Befehl / Command lädt das Repository direkt herunter und startet die nötigen Services mittels docker-compose direkt. Anschließend folgt mit kurzer Verzögerung das Öffnen der Website, auf welcher sich der Reminder findet.

git clone https://github.com/maloo0/Reminder_mhieber.git && cd ./Reminder_mhieber/ && docker-compose up -d && sleep 15 && open "http://0.0.0.0:8001"