Cloud-Computing - Projektaufgabe - M. Hieber - DHBW-Stuttgart

Nachfolgender Befehl / Command lädt das Repository direkt herunter und startet die nötigen Services mittels docker-compose. Anschließend folgt mit kurzer Verzögerung das Öffnen der Website, auf welcher sich der Reminder findet.

git clone https://github.com/maloo0/Reminder_mhieber.git && cd ./Reminder_mhieber/Reminder/ && docker-compose up -d && sleep 15 && open "http://0.0.0.0:8001"
