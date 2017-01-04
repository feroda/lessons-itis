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

    # my_conn_info holds a list with 3 elements:
    # conn -> the connection object
    # addr_info -> (ip, port) tuple
    # user -> the username if has been specified
    my_conn_info = [conn, addr_info, ""]
    add_conn(my_conn_info)

    while True:
        data = conn.recv(8192)
        if data:
            sender = my_conn_info[2] or my_conn_info[1]
            msg = "%s ha inviato> %s" % (sender, data)
            print(msg)
            if data.startswith(b"USER "):
                my_conn_info[2] = data[len("USER "):]

            for every_conn_info in all_connections:
                every_conn_info[0].sendall(bytes(msg, "utf-8"))
        else:
            print("Nessun dato ricevuto, chiudo tutto")
            break
    remove_conn(my_conn_info)
    conn.close()


def main():
    sock = socket.socket()
    sock.bind(my_addr_info)
    sock.listen(50)

    try:
        while True:
            print("accetto connessioni...")
            conn, addr_info = sock.accept()
            print("connessione accettata")
            t = threading.Thread(target=do_echo_all, args=(conn, addr_info))
            t.start()

        print("Uscito dal while")
        t.join()
    except Exception as e:
        print("Eccezione: %s" % e)
        for every_conn_info in all_connections:
            try:
                every_conn_info[0].close()
            except:
                pass

    sock.close()


if __name__ == "__main__":
    main()
