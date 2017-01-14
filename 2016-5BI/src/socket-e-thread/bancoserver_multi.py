"""
Server TCP che simula un bancomat
che ha a disposizione 100 banconote
e le distribuisce a chi le chiede.
Quando le ha finite risponde al client
che non ne ha più.

Questo servizio è multithread e si basa sull'utilizzo
di un contatore globale di banconote (num)
che viene decrementato in modo esclusivo da ogni thread.

TODO: questo server non controlla il numero di banconote disponibili,
ma decrementa all'infinito.
"""

import socket
import threading

IP = "0.0.0.0"
TCP_PORT = 3004

# Step 0
num = 10
tot_banconote_lock = threading.Lock()


def main():
    """
    Inizializza e avvia il server TCP.

    - Step 0. Inizializza NUM con il numero di banconote disponibili
    - Step 1. crea il socket

    PER SEMPRE:
    - Step 2. si mette in accettazione delle connessioni
    - Step 3. Riceve un numero (REQ_NUM)
        - Step 3.1: se REQ_NUM < NUM
            - 3.2: decrementa NUM
            - 3.3: restituisce REQ_NUM al client
        - Step 3.2: altrimenti risponde banconote non disponibili
    """

    # Step 1
    sock = socket.socket()
    sock.bind((IP, TCP_PORT))
    sock.listen(1)

    # Step 2
    while True:
        conn, addr = sock.accept()

        # esecuzione diretta senza thread
        # conn_manager(conn, addr)
        # esecuzione con thread
        t = threading.Thread(target=conn_manager, args=(conn, addr))
        t.start()

    sock.close()


def decrement_banconote(REQ_NUM):
    tot_banconote_lock.acquire()
    try:
        global num
        num -= REQ_NUM
    except Exception:
        print("Eccezione rilevata")
    finally:
        tot_banconote_lock.release()


def conn_manager(conn, addr):
    """
    Funzione di gestione del protocollo di comunicazione
    tra il server e un client.

    Si consiglia di eseguire questa funzione in un thread separato
    """
    conn.sendall(bytes("Benvenuto sul bancomat!\nDimmi il num di banconote: ", "utf-8"))
    data = conn.recv(1024)
    REQ_NUM = int(data)
    conn.sendall(bytes("Hai richiesto %s banconote, ne ho %s\n" % (REQ_NUM, num), "utf-8"))
    decrement_banconote(REQ_NUM)
    conn.sendall(bytes("%s banconote consegnate, %s banconote rimaste\n" % (REQ_NUM, num), "utf-8"))
    conn.close()


if __name__ == "__main__":
    main()
