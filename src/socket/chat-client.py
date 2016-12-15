import socket

IP_DST = "127.0.0.1"
TCP_DST_PORT = 3333
addr_info = (IP_DST, TCP_DST_PORT)

# CREATE
sock = socket.socket()

# CONNECT
sock.connect(addr_info)

# RECEVIVE
data = sock.recv(8192)
print("Ho ricevuto: %s" % data)

# CLOSE
sock.close()

