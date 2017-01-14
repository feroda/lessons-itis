"""
Server TCP che simula un bancomat
che ha a disposizione 100 banconote
e le distribuisce a chi le chiede.
Quando le ha finite risponde al client
che non ne ha più.
"""
import socket

IP = "0.0.0.0"
TCP_PORT = 3001

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
    print("Ciao mondo")

    sock = socket.socket()
    sock.bind((IP, TCP_PORT))
    sock.listen(1)

    conn, addr = sock.accept()
    conn.sendall("Benvenuto")
    conn.close()
    sock.close()


if __name__ == "__main__":
    main()

