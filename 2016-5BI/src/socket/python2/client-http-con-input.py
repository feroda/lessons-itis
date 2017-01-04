import socket
import sys

try:
    IP_DST = sys.argv[1]
    # "216.58.198.3"
    TCP_DST_PORT = int(sys.argv[2])
    # 80
except IndexError:
    print("Usage %s <ip dst> <tcp dst port>")
    sys.exit(100)
except ValueError:
    print("La porta deve essere un numero intero")
    sys.exit(101)

FRASE = "GET / HTTP/1.0"

addr_info = (IP_DST, TCP_DST_PORT)

sock = socket.socket()
sock.connect(addr_info)
while True:
    FRASE = raw_input("scrivi > ")
    if FRASE:
	msg = FRASE + "\r\n\r\n"
        sock.sendall(msg)
        print("Ho scritto: %s" % repr(msg))
        data = sock.recv(8192)
        print("Ho ricevuto: %s" % data)
    else:
        print("Niente da dire, esco")
        break

sock.close()

