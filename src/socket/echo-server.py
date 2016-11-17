import socket
import threading

IP = "0.0.0.0"
TCP_PORT = 3001
my_addr_info = (IP, TCP_PORT)


def do_echo(conn, addr_info):

    while True:
        data = conn.recv(8192)
        if data:
            print("Ricevuto da %s: %s" % (addr_info, data))
            conn.sendall(data)
        else:
            print("Nessun dato ricevuto, chiudo tutto")
            break
    conn.close()


sock = socket.socket()
sock.bind(my_addr_info)
sock.listen(5)
while True:
    print("accetto")
    conn, addr_info = sock.accept()
    print("accettato")
    t = threading.Thread(target=do_echo, args=(conn, addr_info))
    t.start()

print("Uscito dal while")
t.join()
sock.close()

