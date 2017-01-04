import socket
import sys

IP_DST = sys.argv[1]
# "216.58.198.3"
TCP_DST_PORT = int(sys.argv[2])
# 80
addr_info = (IP_DST, TCP_DST_PORT)

sock = socket.socket()
sock.connect(addr_info)

FRASE = "GET / HTTP/1.0\n\n"
sock.sendall(FRASE)
print("Ho scritto: %s" % FRASE)
data = sock.recv(8192)
print("Ho ricevuto: %s" % data)
sock.close()

