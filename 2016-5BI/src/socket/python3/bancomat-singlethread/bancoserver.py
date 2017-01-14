"""
Server TCP che simula un bancomat
che ha a disposizione 100 banconote
e le distribuisce a chi le chiede.
Quando le ha finite risponde al client
che non ne ha più.

TODO: non funziona come bancomat, ma saluta semplicemente chi arriva
"""
import socket

IP = "0.0.0.0"
TCP_PORT = 3002


def main():
    """
    Inizializza e avvia il server TCP.

    - Step 0. Inizializza NUM con il numero di banconote disponibili
    - Step 1. crea il socket
    - Step 2. si mette in accettazione delle connessioni

    PER SEMPRE:
    - Step 3. Riceve un numero (REQ_NUM)
        - Step 3.1: se REQ_NUM < NUM
            - 3.2: decrementa NUM
            - 3.3: restituisce REQ_NUM al client
        - Step 3.2: altrimenti risponde banconote non disponibili
    """

    num = 100
    # Questo messaggio lo visualizza direttamente sul server
    # senza inviarlo al client
    print("Ciao mondo")

    sock = socket.socket()
    sock.bind((IP, TCP_PORT))
    sock.listen(1)

    while True:
        # Il server si ferma in attesa di una connessione da un client
        conn, addr = sock.accept()

        # Quando un client si connette lo saluta
        # In python3 si inviano sul socket i bytes, per convertire una stringa
        # (o una sequenza di interi) in bytes, si veda "help(bytes)" nella shell python.
        #
        # Per le stringhe bisogna specificare oltre la stringa, l'encoding desiderato
        # usare "utf-8" ci consente di non sbagliare praticamente mai
        conn.sendall(bytes("Benvenuto\n", "utf-8"))

        # chiude il socket della connessione instaurata con il client
        conn.close()

    # chiude il socket principale del server
    sock.close()


if __name__ == "__main__":
    # Questo if "strano" serve per eseguire il "main()" solo se
    # lo script python viene eseguito direttamente e non importato
    # nella shell python oppure in un altro script
    main()

