# -*- coding: utf-8 -*-

# La prima riga in alto ci consente di mettere caratteri UTF8 nel codice.
# Ad esempio caratteri accentati.

"""
Server di raddoppio.

Questo programma server raddoppia un numero ricevuto da un client TCP.
L'esercizio contiene piccole modifiche rispetto alla versione iniziale
realizzata da Davide Cesari.

"""

import socket

HOST = 'localhost'
# Per collegarsi da qualunque indirizzo
# HOST = '0.0.0.0'
PORT = 3000


def main():

    s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    s.bind((HOST, PORT))
    s.listen(10)

    while 1:
        conn, addr = s.accept()

        # Il .format è un metodo per formattare le stringhe
        # https://docs.python.org/3/library/string.html#format-examples
        # L'istruzione seguente è analoga a
        # print('Connesso a: %s' % addr)
        # ma più moderna

        print('Connesso a: {}'.format(addr))

        data = conn.recv(1024)
        if(data == 'EXIT'):
            conn.close()
            continue

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

# Il seguente if "strano" serve a far eseguire il main
# solamente se stiamo eseguendo direttamente questo script
# e non se lo stiamo importando da un altro script


if __name__ == "__main__":
    main()
