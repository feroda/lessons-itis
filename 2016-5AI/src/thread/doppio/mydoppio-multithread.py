#!/usr/bin/python

import threading
import sys


class myThread(threading.Thread):

    def __init__(self, num):
        threading.Thread.__init__(self)
        self.num = num

    def run(self):
        print("Il doppio di %d e' %d" % (self.num, self.num*2))
        # print("Exiting " + self.getName())


def main(args):
    # args = [3, 10, 20, 50, 83, 12222, 1, 0]
    for arg in args:
        # Per debug posso farmi stampare il parametro che sto processando
        print("il parametro e' %s" % arg)
        arg = int(arg)
        print("Voglio fare il doppio di %d con i thread" % arg)
        t = myThread(arg)
        t.start()
        print("Ho lanciato il thread con nome '%s'" % t.getName())

    print("Exiting Main Thread")

main(sys.argv[1:])
