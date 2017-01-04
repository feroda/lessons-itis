# -*- coding: utf-8 -*-

# La prima riga in alto ci consente di mettere caratteri UTF8 nel codice.
# Ad esempio caratteri accentati.

"""
Server di raddoppio multithread.

Questo programma server raddoppia un numero ricevuto da un client TCP.
Il raddoppio e la risposta vengono gestiti in un thread separato consentendo
la connessione di più client contemporaneamente.

"""

import socket
import threading

HOST = 'localhost'
# Per collegarsi da qualunque indirizzo
# HOST = '0.0.0.0'
PORT = 3000

def worker(conn):

    # Il .format è un metodo per formattare le stringhe
    # https://docs.python.org/3/library/string.html#format-examples
    # L'istruzione seguente è analoga a
    # print('Connesso a: %s' % addr)
    # ma più moderna

    while True:

        data = conn.recv(1024)

        if data.upper() == 'EXIT':
            conn.close()
            break

        try:
            # In questo blocco convertiamo ad intero il dato fornito
            data = int(data)
        except ValueError:
            # Qui intercettiamo l'eccezione
            data = "ERRORE: fornito un valore non numerico"
        else:
            # Qui proseguiamo se l'eccezione non e' fornita
            data *= 2

        conn.sendall(str(data))
        print("Operazione eseguita e dato restituito")

    conn.close()


def main():

    s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    s.bind((HOST, PORT))
    s.listen(10)

    while 1:

        conn, addr = s.accept()
        print('Connesso a: {}'.format(addr))

        t = threading.Thread(target=worker, args=(conn,))
        t.start()

# Il seguente if "strano" serve a far eseguire il main
# solamente se stiamo eseguendo direttamente questo script
# e non se lo stiamo importando da un altro script


if __name__ == "__main__":
    main()
