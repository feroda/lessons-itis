"""
Programma client per il calcolo del doppio.

Questo programma consente di usufruire del server doppio.
Inserendo un numero si ottiene in risposta il doppio.

Questa implementazione mantiene aperto un socket tcp finche' non si digita "EXIT"

Questo programma puo' essere sostituito totalmente da telnet.
"""
import socket

IP_DST = 'localhost'
TCP_DST_PORT = 3000


def main():

    s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    s.connect((IP_DST, TCP_DST_PORT))

    while 1:
        msg = raw_input("Inserisci un numero (o EXIT per uscire): ")
        s.sendall(msg)
        if msg.upper() == 'EXIT':
            break
        data = s.recv(1024)
        print('Valore ricevuto: {}'.format(data))

    s.close()


if __name__ == "__main__":
    main()
