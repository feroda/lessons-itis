import socket

IP_DST = "127.0.0.1"
TCP_DST_PORT = 3001

FRASE = "ciao mamma"

addr_info = (IP_DST, TCP_DST_PORT)

sock = socket.socket()
sock.connect(addr_info)
while True:
    FRASE = raw_input("scrivi > ")
    if FRASE:
        sock.sendall(FRASE)
        print("Ho scritto: %s" % FRASE)
        data = sock.recv(8192)
        print("Ho ricevuto: %s" % data)
    else:
        print("Niente da dire, esco")
        break

sock.close()

