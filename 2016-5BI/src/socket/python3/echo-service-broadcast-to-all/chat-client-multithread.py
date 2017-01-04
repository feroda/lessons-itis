import socket
import threading
import sys

IP_DST = "127.0.0.1"
try:
    TCP_DST_PORT = int(sys.argv[1])
except IndexError:
    print("Usage: {} <tcp port>".format(sys.argv[0]))
    sys.exit(100)


msg = "ciao mamma"
prompt = "> "

def send_msg_to_server(sock):

    while True:
        msg = input(prompt)
        # WAS: if msg not in ("", "exit"):
        # WAS:     sock.sendall(msg)
        # WAS:     # print("Ho inviato: %s" % msg)
        # WAS: else:
        # WAS:     print("esco")
        # WAS:     break
        sock.sendall(bytes(msg, "utf-8"))
        if msg.strip() == b"exit":
            print("esco")
            break


def main():

    addr_info = (IP_DST, TCP_DST_PORT)
    sock = socket.socket()
    sock.connect(addr_info)

    t = threading.Thread(target=send_msg_to_server, args=(sock,))
    t.start()

    while True:
        data = sock.recv(8192)
        msg = "%s\n%s" % (data, prompt)
        # KO: SyntaxError on Python2 -> print(msg, sep=' ')
        # can be solved with:
        # from __future__ import print_function
        # or, as I prefer now
        sys.stdout.write(msg)
        sys.stdout.flush()
        if data.find(b"exit") != -1:
            print("\nesco")
            break

    t.join()
    sock.close()


if __name__ == "__main__":
    main()

