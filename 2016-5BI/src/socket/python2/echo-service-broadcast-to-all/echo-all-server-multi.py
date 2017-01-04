import socket
import threading
import sys

IP = "0.0.0.0"

try:
    TCP_PORT = int(sys.argv[1])
    if TCP_PORT < 1 or TCP_PORT > 65535:
        raise ValueError()
except IndexError:
    print("Usage %s <tcp port>" % sys.argv[0])
    sys.exit(1)
except ValueError:
    print("Please enter an integer <= 65535")
    sys.exit(2)

my_addr_info = (IP, TCP_PORT)
all_connections = []
all_connections_lock = threading.Lock()


def add_conn(conn):
    all_connections_lock.acquire()
    all_connections.append(conn)
    all_connections_lock.release()


def remove_conn(conn):
    all_connections_lock.acquire()
    all_connections.remove(conn)
    all_connections_lock.release()


def do_echo_all(conn, addr_info):
    """
    Receive a message and echoes to all connected clients.
    """

    add_conn(conn)
    while True:
        data = conn.recv(8192)
        if data:
            msg = "%s ha inviato> %s" % (addr_info, data)
            print(msg)
            for c in all_connections:
                c.sendall(data)
        else:
            print("Nessun dato ricevuto, chiudo tutto")
            break
    remove_conn(conn)
    conn.close()


def main():
    sock = socket.socket()
    sock.bind(my_addr_info)
    sock.listen(50)
    try:
        while True:
            print("accetto")
            conn, addr_info = sock.accept()
            print("accettato")
            t = threading.Thread(target=do_echo_all, args=(conn, addr_info))
            t.start()

        print("Uscito dal while")
        t.join()
    except Exception as e:
        print("Eccezione: %s" % e)
        for c in all_connections:
            try:
                c.close()
            except:
                pass

    sock.close()


if __name__ == "__main__":
    main()
