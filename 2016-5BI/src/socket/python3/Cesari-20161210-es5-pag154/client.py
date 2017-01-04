"""
Programma client per il calcolo del doppio.

Questo programma consente di usufruire del server doppio.
Inserendo un numero si ottiene in risposta il doppio.

Questa implementazione apre e chiude un socket tcp prima di ogni
richiesta e dopo ogni risposta. Non dovrebbe comportarsi cosi, ma
e' necessario perche' il server non supporta piu' connessioni contemporaneamente.

E anche in questo caso se il programma rimane in attesa di input
tutti gli altri client non si possono connettere quindi e' proprio il server che va cambiato.

Questo programma puo' essere sostituito totalmente da telnet.
"""
import socket

IP_DST = 'localhost'
TCP_DST_PORT = 3001


def main():

    while 1:
        s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        s.connect((IP_DST, TCP_DST_PORT))
        msg = input("Inserisci un numero (o EXIT per uscire): ")
        s.sendall(bytes(msg, 'utf-8'))
        if msg.upper() == 'EXIT':
            s.close()
            break
        data = s.recv(1024)
        print('Valore ricevuto: {}'.format(int(data)))
        s.close()


if __name__ == "__main__":
    main()
