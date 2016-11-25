import socket
import threading
import sys

IP_DST = "127.0.0.1"
TCP_DST_PORT = int(sys.argv[1])

msg = "ciao mamma"


def send_msg_to_server(sock):

    while True:
        msg = raw_input("> ")
        if msg not in ("", "exit"):
            sock.sendall(msg)
            # print("Ho inviato: %s" % msg)
        else:
            print("esco")
            break


addr_info = (IP_DST, TCP_DST_PORT)
sock = socket.socket()
sock.connect(addr_info)

t = threading.Thread(target=send_msg_to_server, args=(sock,))
t.start()

while True:
    data = sock.recv(8192)
    print("Ho ricevuto: %s" % data)
    if data.find("exit") != -1:
        break

t.join()
sock.close()
