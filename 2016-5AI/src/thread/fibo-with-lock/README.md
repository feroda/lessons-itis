Questo programma prende in input una serie di numeri interi
e ne calcola il valore di Fibonacci per ognuno in un Thread.

Esisteranno tanti Thread quanti i numeri forniti in input.

A differenza del programma precedente ogni Thread inserisce il risultato
in una lista condivisa nel processo principale e quindi devono accederla in
modo esclusivo.

Per fare ciò in Java si usa la funzione `synchronized()`

Per la compilazione e l'esecuzione di esempio si faccia riferimento agli altri files.

